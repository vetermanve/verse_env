<?php


namespace Verse\Di;

interface ContainerInterface
{
    /**
     * Get module form container 
     * 
     * @param $module
     * @param bool $required
     * @return $module|mixed
     */
    public function bootstrap ($module, $required = true);

    /**
     * Set module to container
     * 
     * @param $moduleName - interface or free-form name of module
     * @param $module - module object
     * @return $module
     */
    public function setModule ($moduleName, $module);
}