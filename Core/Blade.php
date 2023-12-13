<?php

namespace Core;

use Core\IlluminateApp;


class Blade {

    public static $viewFactory;

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

        $container = IlluminateApp::getInstance();

        // we have to bind our app class to the interface
        // as the blade compiler needs the `getNamespace()` method to guess Blade component FQCNs
        $container->instance(\Illuminate\Contracts\Foundation\Application::class, $container);
        
        // Configuration
        // Note that you can set several directories where your templates are located
        $pathsToTemplates = [dirname(__DIR__) . '/Resources/Views'];
        $pathToCompiledTemplates = dirname(__DIR__) . '/Resources/Views/compiled';
        
        // Dependencies
        $filesystem = new \Illuminate\Filesystem\Filesystem;
        $eventDispatcher = new \Illuminate\Events\Dispatcher($container);
        
        // Create View Factory capable of rendering PHP and Blade templates
        $viewResolver = new \Illuminate\View\Engines\EngineResolver;
        $bladeCompiler = new \Illuminate\View\Compilers\BladeCompiler($filesystem, $pathToCompiledTemplates);
        
        $viewResolver->register('blade', function () use ($bladeCompiler) {
            return new \Illuminate\View\Engines\CompilerEngine($bladeCompiler);
        });
        
        $viewFinder = new \Illuminate\View\FileViewFinder($filesystem, $pathsToTemplates);
        $viewFactory = new \Illuminate\View\Factory($viewResolver, $viewFinder, $eventDispatcher);
        $viewFactory->setContainer($container);
        \Illuminate\Support\Facades\Facade::setFacadeApplication($container);
        $container->instance(\Illuminate\Contracts\View\Factory::class, $viewFactory);
        $container->alias(
            \Illuminate\Contracts\View\Factory::class, 
            (new class extends \Illuminate\Support\Facades\View {
                public static function getFacadeAccessor() { return parent::getFacadeAccessor(); }
            })::getFacadeAccessor()
        );
        $container->instance(\Illuminate\View\Compilers\BladeCompiler::class, $bladeCompiler);
        $container->alias(
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