<?php

namespace Core;

use Core\IlluminateApp;


class Blade {

    public static $viewFactory;
    public static $container;

    private static $attr;
    private static $f;


    public static function handle(){    

        /**
         * Illuminate/view
         *
         * Requires: illuminate/filesystem
         *
         * @source https://github.com/illuminate/view
         */

        self::$container = IlluminateApp::getInstance();

        // we have to bind our app class to the interface
        // as the blade compiler needs the `getNamespace()` method to guess Blade component FQCNs
        self::$container->instance(\Illuminate\Contracts\Foundation\Application::class, self::$container);
        
        // Configuration
        // Note that you can set several directories where your templates are located
        $pathsToTemplates = [dirname(__DIR__) . '/resources/views'];
        $pathToCompiledTemplates = dirname(__DIR__) . '/storage/views/compiled';
        
        // Dependencies
        $filesystem = new \Illuminate\Filesystem\Filesystem;
        $eventDispatcher = new \Illuminate\Events\Dispatcher(self::$container);
        
        // Create View Factory capable of rendering PHP and Blade templates
        $viewResolver = new \Illuminate\View\Engines\EngineResolver;
        $bladeCompiler = new \Illuminate\View\Compilers\BladeCompiler($filesystem, $pathToCompiledTemplates);
        
        $viewResolver->register('blade', function () use ($bladeCompiler) {
            return new \Illuminate\View\Engines\CompilerEngine($bladeCompiler);
        });
        
        $viewFinder = new \Illuminate\View\FileViewFinder($filesystem, $pathsToTemplates);
        $viewFactory = new \Illuminate\View\Factory($viewResolver, $viewFinder, $eventDispatcher);
        $viewFactory->setContainer(self::$container);
        \Illuminate\Support\Facades\Facade::setFacadeApplication(self::$container);
        self::$container->instance(\Illuminate\Contracts\View\Factory::class, $viewFactory);
        self::$container->alias(
            \Illuminate\Contracts\View\Factory::class, 
            (new class extends \Illuminate\Support\Facades\View {
                public static function getFacadeAccessor() { return parent::getFacadeAccessor(); }
            })::getFacadeAccessor()
        );
        self::$container->instance(\Illuminate\View\Compilers\BladeCompiler::class, $bladeCompiler);
        self::$container->alias(
            \Illuminate\View\Compilers\BladeCompiler::class, 
            (new class extends \Illuminate\Support\Facades\Blade {
                public static function getFacadeAccessor() { return parent::getFacadeAccessor(); }
            })::getFacadeAccessor()
        );
        
         // Render template with page.blade.php
        //  echo $viewFactory->make('page', [
        //      'title' => 'Title',
        //      'text' => 'This is my text!',
        //  ])->render();

        self::$viewFactory = $viewFactory;
    }

}