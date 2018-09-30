<?php

namespace Verse\Di;

class Env
{
    /**
     * Instance of Current Dependency container
     * 
     * @var ContainerInterface
     */
    private static $container;
    
    /**
     * Get Dependency container instance.
     * Create empty SimpleContainer if container is missing
     * 
     * @return ContainerInterface
     */
    public static function getContainer() : ContainerInterface
    {
        if (!self::$container) {
            self::$container = new SimpleContainer();  
        }
        
        return self::$container;
    }
    
    /**
     * Set container 
     * 
     * @param ContainerInterface $container
     */
    public static function setContainer(ContainerInterface $container)
    {
        self::$container = $container;
    }
}
