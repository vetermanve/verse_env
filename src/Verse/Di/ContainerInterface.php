<?php


namespace Verse\Di;

interface ContainerInterface
{
    public function bootstrap ($module, $required = true);
    public function setModule ($moduleName, $module);
}