<?php 

declare(strict_types=1);

namespace Core;

class App {
    protected static $container;

    public static function set($container)
    {
        self::$container = $container;
    }

    public static function container() {
        return self::$container;
    }

    public static function resolve($key) {

        return self::container()->resolve($key);

    }
}