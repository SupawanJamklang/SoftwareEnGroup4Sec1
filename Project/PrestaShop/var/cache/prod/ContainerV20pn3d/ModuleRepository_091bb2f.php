<?php

class ModuleRepository_091bb2f extends \PrestaShop\PrestaShop\Core\Module\ModuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder5ae3c = null;
    private $initializer30bb2 = null;
    private static $publicProperties5457a = [
        
    ];
    public function getList() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer30bb2 && ($this->initializer30bb2->__invoke($valueHolder5ae3c, $this, 'getList', array(), $this->initializer30bb2) || 1) && $this->valueHolder5ae3c = $valueHolder5ae3c;
        return $this->valueHolder5ae3c->getList();
    }
    public function getInstalledModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer30bb2 && ($this->initializer30bb2->__invoke($valueHolder5ae3c, $this, 'getInstalledModules', array(), $this->initializer30bb2) || 1) && $this->valueHolder5ae3c = $valueHolder5ae3c;
        return $this->valueHolder5ae3c->getInstalledModules();
    }
    public function getMustBeConfiguredModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer30bb2 && ($this->initializer30bb2->__invoke($valueHolder5ae3c, $this, 'getMustBeConfiguredModules', array(), $this->initializer30bb2) || 1) && $this->valueHolder5ae3c = $valueHolder5ae3c;
        return $this->valueHolder5ae3c->getMustBeConfiguredModules();
    }
    public function getUpgradableModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer30bb2 && ($this->initializer30bb2->__invoke($valueHolder5ae3c, $this, 'getUpgradableModules', array(), $this->initializer30bb2) || 1) && $this->valueHolder5ae3c = $valueHolder5ae3c;
        return $this->valueHolder5ae3c->getUpgradableModules();
    }
    public function getModule(string $moduleName) : \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
        $this->initializer30bb2 && ($this->initializer30bb2->__invoke($valueHolder5ae3c, $this, 'getModule', array('moduleName' => $moduleName), $this->initializer30bb2) || 1) && $this->valueHolder5ae3c = $valueHolder5ae3c;
        return $this->valueHolder5ae3c->getModule($moduleName);
    }
    public function getModulePath(string $moduleName) : ?string
    {
        $this->initializer30bb2 && ($this->initializer30bb2->__invoke($valueHolder5ae3c, $this, 'getModulePath', array('moduleName' => $moduleName), $this->initializer30bb2) || 1) && $this->valueHolder5ae3c = $valueHolder5ae3c;
        return $this->valueHolder5ae3c->getModulePath($moduleName);
    }
    public function setActionUrls(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $collection) : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer30bb2 && ($this->initializer30bb2->__invoke($valueHolder5ae3c, $this, 'setActionUrls', array('collection' => $collection), $this->initializer30bb2) || 1) && $this->valueHolder5ae3c = $valueHolder5ae3c;
        return $this->valueHolder5ae3c->setActionUrls($collection);
    }
    public function clearCache(?string $moduleName = null, bool $allShops = false) : bool
    {
        $this->initializer30bb2 && ($this->initializer30bb2->__invoke($valueHolder5ae3c, $this, 'clearCache', array('moduleName' => $moduleName, 'allShops' => $allShops), $this->initializer30bb2) || 1) && $this->valueHolder5ae3c = $valueHolder5ae3c;
        return $this->valueHolder5ae3c->clearCache($moduleName, $allShops);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $instance, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($instance);
        $instance->initializer30bb2 = $initializer;
        return $instance;
    }
    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $adminModuleDataProvider, \Doctrine\Common\Cache\CacheProvider $cacheProvider, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager, string $modulePath, int $contextLangId)
    {
        static $reflection;
        if (! $this->valueHolder5ae3c) {
            $reflection = $reflection ?? new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
            $this->valueHolder5ae3c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
        }
        $this->valueHolder5ae3c->__construct($moduleDataProvider, $adminModuleDataProvider, $cacheProvider, $hookManager, $modulePath, $contextLangId);
    }
    public function & __get($name)
    {
        $this->initializer30bb2 && ($this->initializer30bb2->__invoke($valueHolder5ae3c, $this, '__get', ['name' => $name], $this->initializer30bb2) || 1) && $this->valueHolder5ae3c = $valueHolder5ae3c;
        if (isset(self::$publicProperties5457a[$name])) {
            return $this->valueHolder5ae3c->$name;
        }
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5ae3c;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder5ae3c;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializer30bb2 && ($this->initializer30bb2->__invoke($valueHolder5ae3c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer30bb2) || 1) && $this->valueHolder5ae3c = $valueHolder5ae3c;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5ae3c;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder5ae3c;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializer30bb2 && ($this->initializer30bb2->__invoke($valueHolder5ae3c, $this, '__isset', array('name' => $name), $this->initializer30bb2) || 1) && $this->valueHolder5ae3c = $valueHolder5ae3c;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5ae3c;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder5ae3c;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializer30bb2 && ($this->initializer30bb2->__invoke($valueHolder5ae3c, $this, '__unset', array('name' => $name), $this->initializer30bb2) || 1) && $this->valueHolder5ae3c = $valueHolder5ae3c;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5ae3c;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder5ae3c;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializer30bb2 && ($this->initializer30bb2->__invoke($valueHolder5ae3c, $this, '__clone', array(), $this->initializer30bb2) || 1) && $this->valueHolder5ae3c = $valueHolder5ae3c;
        $this->valueHolder5ae3c = clone $this->valueHolder5ae3c;
    }
    public function __sleep()
    {
        $this->initializer30bb2 && ($this->initializer30bb2->__invoke($valueHolder5ae3c, $this, '__sleep', array(), $this->initializer30bb2) || 1) && $this->valueHolder5ae3c = $valueHolder5ae3c;
        return array('valueHolder5ae3c');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer30bb2 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer30bb2;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer30bb2 && ($this->initializer30bb2->__invoke($valueHolder5ae3c, $this, 'initializeProxy', array(), $this->initializer30bb2) || 1) && $this->valueHolder5ae3c = $valueHolder5ae3c;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5ae3c;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5ae3c;
    }
}
