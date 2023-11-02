<?php 

namespace Core\Traits;

Trait Bundles {

    private static string $asset, $asset_path;
    private static string $actual_link;
    private static string $public_path;
    private static string $components_path;

    public static function asset(string $src)
    {
        /* when HTTP_CONNECTION is close this mean we run webpack-dev-server
        // other wise we print the actual link with out :8080 with Apache not webpack
        */

        if($_SERVER['HTTP_CONNECTION'] === 'close') {

            self::$actual_link = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]:8080";

        } else{

            self::$actual_link = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]";

        }



        self::$asset_path =  DIRECTORY_SEPARATOR. 'assets' .DIRECTORY_SEPARATOR;

        

        if(strstr($src, '.css')) {

            self::$asset = 'css';

        } elseif(strstr($src, '.js')) {
            self::$asset = 'js';
        }

        switch (self::$asset) {
            case 'css':

                $css = self::$asset_path . self::$asset .DIRECTORY_SEPARATOR;

                echo "<link rel='stylesheet' href='". self::$actual_link . self::$asset_path ."{$src}'>";

                break;
            case 'js':

                $js = self::$asset_path .DIRECTORY_SEPARATOR;

                echo "<script src='" . self::$actual_link . self::$asset_path ."{$src}' defer></script>";
                
                break;
            
            default:
                return;
        }
        
    }
    public static function public_path($file)
    {
        self::$actual_link = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]";

        self::$public_path = self::$actual_link . DIRECTORY_SEPARATOR;

        echo self::$public_path . $file;

    }
    public static function get_public_path()
    {;

        // self::$public_path = 'Public' . DIRECTORY_SEPARATOR;
        self::$public_path = dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR;

        return self::$public_path;
    }
    
    public static function component($file, $attributes = []) {

        $file = str_replace('.', '/', $file);
    
        extract($attributes);
    
    
        self::$components_path = 'Resources' . DIRECTORY_SEPARATOR . 'Views' . DIRECTORY_SEPARATOR . 'Components' . DIRECTORY_SEPARATOR;
    
        //dd($components_path);
        require base_require(self::$components_path, $file);
    
    }
}