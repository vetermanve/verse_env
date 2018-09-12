<?php

namespace Verse\Di;

class Env
{
    /**
     * @var ContainerInterface
     */
    private static $container;
    
    /**
     * @return ContainerInterface
     */
    public static function getContainer()
    {
        return self::$container;
    }
    
    /**
     * @param ContainerInterface $container
     */
    public static function setContainer(ContainerInterface $container)
    {
        self::$container = $container;
    }
}
