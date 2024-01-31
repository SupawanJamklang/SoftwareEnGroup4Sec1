<?php

/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 */

declare(strict_types=1);

namespace PrestaShop\Module\PsEditionBasic\Service;

use Symfony\Component\Dotenv\Dotenv;

class ConfigurationService
{
    public const MODULE_ENV = _PS_MODULE_DIR_ . 'ps_edition_basic/.env';

    /**
     * Load module environement file
     *
     * @return bool True if loaded, false if file doesn't exists
     */
    public function loadModuleEnv(): bool
    {
        if (file_exists(self::MODULE_ENV)) {
            $dotenv = new Dotenv();
            $dotenv->loadEnv(self::MODULE_ENV);

            return true;
        }

        return false;
    }

    /**
     * Get a configuration variable in module .env
     *
     * @param string $key Key of the env variable
     *
     * @return string|null Value or null if not found
     */
    public function get(string $key): ?string
    {
        return $_ENV[$key] ?? null;
    }
}
