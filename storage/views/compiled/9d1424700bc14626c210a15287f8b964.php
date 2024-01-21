<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">

        <meta name="application-name" content="<?php echo e($_ENV['APP_NAME']); ?>">
        
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php echo e($_ENV['APP_NAME']); ?></title>

     
        <?php echo vite('js/styles.js'); ?>


        

                

        <style>
            [x-cloak] {
                display: none !important;
            }
        </style>

    </head>

    <body class="antialiased">

    <?php
        $homepage = route('homepage');
        $portfolio = route('portfolio');
    ?>

    <section class="navigation w-full antialiased bg-white">

        <?php if(is_current_route('homepage')): ?>
            <?php if (isset($component)) { $__componentOriginalcef0c62018fa3fa8117f2475f3be3456 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcef0c62018fa3fa8117f2475f3be3456 = $attributes; } ?>
<?php $component = App\Http\Controllers\Frontend\Components\Navbars\Navbar::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('frontend.navbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\Http\Controllers\Frontend\Components\Navbars\Navbar::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalcef0c62018fa3fa8117f2475f3be3456)): ?>
<?php $attributes = $__attributesOriginalcef0c62018fa3fa8117f2475f3be3456; ?>
<?php unset($__attributesOriginalcef0c62018fa3fa8117f2475f3be3456); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcef0c62018fa3fa8117f2475f3be3456)): ?>
<?php $component = $__componentOriginalcef0c62018fa3fa8117f2475f3be3456; ?>
<?php unset($__componentOriginalcef0c62018fa3fa8117f2475f3be3456); ?>
<?php endif; ?>
        <?php elseif(($_SERVER['REQUEST_URI'] == $portfolio)): ?>
         

        <?php endif; ?>
    </section>

            <?php echo e($slot); ?>


        <?php if (isset($component)) { $__componentOriginal944b84339e0a411c370fac67921ff476 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal944b84339e0a411c370fac67921ff476 = $attributes; } ?>
<?php $component = App\Http\Controllers\Frontend\Components\Footer::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('frontend.footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\Http\Controllers\Frontend\Components\Footer::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal944b84339e0a411c370fac67921ff476)): ?>
<?php $attributes = $__attributesOriginal944b84339e0a411c370fac67921ff476; ?>
<?php unset($__attributesOriginal944b84339e0a411c370fac67921ff476); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal944b84339e0a411c370fac67921ff476)): ?>
<?php $component = $__componentOriginal944b84339e0a411c370fac67921ff476; ?>
<?php unset($__componentOriginal944b84339e0a411c370fac67921ff476); ?>
<?php endif; ?>

            
            <?php echo vite('js/libs.js'); ?>


<?php if($_SERVER['REQUEST_URI'] == $homepage): ?>
            
    <?php echo vite('js/homepage.js'); ?>


<?php elseif(($_SERVER['REQUEST_URI'] == $portfolio)): ?>
    
            
    <?php echo vite('js/main.js'); ?>

<?php endif; ?>

    </body>
</html>
<?php /**PATH C:\laragon\www\phpPortfolioApp\resources\views/components/layouts/app.blade.php ENDPATH**/ ?>