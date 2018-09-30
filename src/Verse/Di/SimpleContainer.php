<?php


namespace Verse\Di;


class SimpleContainer implements ContainerInterface
{
    /**
     * Array of module objects and init callable functions
     * 
     * @var array 
     */
    private $modules = [];

    /**
     * Get module or init it from callable
     * 
     * @param $module - object or callable function that returns an object 
     * @param bool $required - throw or not exception if module and callable is missing
     * @return mixed|null - requested object or null (if object missing and not required or if init callable returned null
     */
    public function bootstrap($module, $required = true)
    {
        if (!isset($this->modules[$module])) {
            if ($required) {
                throw new \RuntimeException('Module '.$module.' not supported');
            }

            return null;
        }

        if (\is_callable($this->modules[$module])) {
            $this->modules[$module] = $this->modules[$module]();
        }

        return $this->modules[$module];
    }

    /**
     * Set module object or callable for it initialisation
     * 
     * @param $moduleName - interface or free-form module name
     * @param $module - object or callable for initialisation
     * @return mixed - written value  
     */
    public function setModule($moduleName, $module)
    {
        return $this->modules[$moduleName] = $module;
    }
}