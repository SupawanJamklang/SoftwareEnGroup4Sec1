<?php

declare(strict_types=1);

use PrestaShop\Module\PsEditionBasic\Actions\Uninstall;
use PrestaShop\Module\PsEditionBasic\Install\Tabs\TabsInstaller;
use PrestaShop\Module\PsEditionBasic\Service\ConfigurationService;
use PrestaShop\ModuleLibServiceContainer\DependencyInjection\ServiceContainer;

define('PS_EDITION_BASIC_SETTINGS_WHITE_LIST', json_decode(file_get_contents(__DIR__ . '/settingsWhiteList.json'), true));
define('PS_EDITION_BASIC_MENU_WHITE_LIST', json_decode(file_get_contents(__DIR__ . '/menuWhiteList.json'), true));

if (!defined('_PS_VERSION_')) {
    exit;
}

if (file_exists(__DIR__ . '/vendor/autoload.php')) {
    require_once __DIR__ . '/vendor/autoload.php';
}

class ps_edition_basic extends Module
{
    use PrestaShop\Module\PsEditionBasic\Traits\UseHooks;
    use PrestaShop\Module\PsEditionBasic\Traits\HaveConfigurationPage;

    private const PS_EDITION_BASIC_MODULE_TABS_LANG_UPDATE_REQUIRED = 'PS_EDITION_BASIC_MODULE_TABS_LANG_UPDATE_REQUIRED';

    public ?ServiceContainer $container = null;
    private string $userflow_id;

    public function __construct()
    {
        $this->name = 'ps_edition_basic';
        $this->version = '1.0.5';
        $this->tab = 'administration';
        $this->author = 'PrestaShop';
        $this->need_instance = 0;
        $this->ps_versions_compliancy = ['min' => '8.0.0', 'max' => _PS_VERSION_];
        $this->module_key = '5530785cbb44445d52d2a98f8ff6d309';

        parent::__construct();
        $this->loadEnv();

        $this->displayName = $this->trans('PrestaShop Edition Basic', [], 'Modules.Editionbasic.Admin');
        $this->description = $this->trans('PrestaShop Edition Basic.', [], 'Modules.Editionbasic.Admin');
        $this->userflow_id = 'ct_55jfryadgneorc45cjqxpbf6o4';
        $this->bootstrap = true;

        if ($this->container === null) {
            $this->container = new ServiceContainer(
                $this->name,
                $this->getLocalPath()
            );
        }
    }

    /**
     * Load module environment variables
     */
    private function loadEnv(): bool
    {
        $configService = new ConfigurationService();

        return $configService->loadModuleEnv();
    }

    public function getEnv(): string
    {
        return $this->getParameter('ps_edition_basic.env') ?? '';
    }

    public function getService(string $serviceName) // @phpstan-ignore-line
    {
        return $this->container->getService($serviceName);
    }

    /**
     * This function is required in order to make module compatible with new translation system.
     *
     * @return bool
     */
    public function isUsingNewTranslationSystem(): bool
    {
        return true;
    }

    private function authorizeAccess(): bool
    {
        try {
            $slug = 'ROLE_MOD_MODULE_' . strtoupper($this->name) . '_READ';
            $sql = 'SELECT id_authorization_role FROM `' . _DB_PREFIX_ . 'authorization_role` WHERE slug = "' . $slug . '";';
            $responseAuthorizationRole = Db::getInstance()->executeS($sql);
            $idAuthorizationRole = $responseAuthorizationRole[0]['id_authorization_role'];
            Db::getInstance()->execute('
                INSERT INTO `' . _DB_PREFIX_ . 'module_access` (`id_profile`, `id_authorization_role`) (
                    SELECT id_profile, "' . $idAuthorizationRole . '"
                    FROM `' . _DB_PREFIX_ . 'profile`
                    WHERE id_profile > 1
            )');

            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    private function removeAccess(): bool
    {
        try {
            $slug = 'ROLE_MOD_MODULE_' . strtoupper($this->name) . '_READ';
            $sql = 'SELECT id_authorization_role FROM `' . _DB_PREFIX_ . 'authorization_role` WHERE slug = "' . $slug . '";';
            $responseAuthorizationRole = Db::getInstance()->executeS($sql);
            if (count($responseAuthorizationRole) > 0) {
                $idAuthorizationRole = $responseAuthorizationRole[0]['id_authorization_role'];
                Db::getInstance()->execute('
                    DELETE FROM `' . _DB_PREFIX_ . 'module_access`
                    WHERE id_profile > 1 AND id_authorization_role = ' . $idAuthorizationRole . ';
                ');
            }

            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    public function install(): bool
    {
        $filePath = $this->getModulePath('smb_edition');
        $moduleIsPresentOnDisk = file_exists($filePath);

        // Activate new menu on edition shop
        if ($moduleIsPresentOnDisk) {
            Configuration::updateValue('SMB_IS_NEW_MENU_ENABLED', true);
        } else {
            // Deactivate on basic shop
            Configuration::updateValue('SMB_IS_NEW_MENU_ENABLED', false);
        }

        return parent::install()
            && (new TabsInstaller($this->name))->installTabs()
            && $this->registerHook($this->getHooksNames())
            && $this->authorizeAccess();
    }

    /**
     * @throws Exception
     */
    public function uninstall(): bool
    {
        Configuration::deleteByName('SMB_IS_NEW_MENU_ENABLED');

        return parent::uninstall()
            && (new Uninstall($this->name))->run()
            && $this->removeAccess();
    }

    /**
     * @throws Exception
     */
    public function enable($force_all = false): bool
    {
        (new TabsInstaller($this->name))->installTabs();

        return parent::enable($force_all);
    }

    public function disable($force_all = false): bool
    {
        return parent::disable($force_all);
    }

    private function addAdminThemeMedia(): void
    {
        $this->context->controller->addCSS($this->getParameter('ps_edition_basic.edition_basic_admin_css'));
        $this->context->controller->addJS($this->getPathUri() . 'views/js/favicon.js');
        // Hide minified setup guide if not in edition shop
        if (!Module::isInstalled('smb_edition')) {
            $this->context->controller->addJS($this->getPathUri() . 'views/js/hideMinifiedChecklist.js');
        }
    }

    public function getParameter(string $key, bool $substitute = true)// @phpstan-ignore-line
    {
        if ($this->getContainer()->hasParameter($key)) {
            $value = $this->getContainer()->getParameter($key);

            // Subtitute pattern in value
            if (is_string($value) && $substitute) {
                $value = str_replace('__VERSION__', $this->version, $value);
                // $value = str_replace('__MAJOR_VERSION__', $this->majorVersion, $value);
                // $value = str_replace('__MINOR_VERSION__', $this->minorVersion, $value);
                // $value = str_replace('__PATCH_VERSION__', $this->patchVersion, $value);
            }
        } else {
            $value = null;
        }

        return $value;
    }

    private function getModulePath(string $name): string
    {
        return _PS_MODULE_DIR_ . $name . '/' . $name . '.php';
    }
}
