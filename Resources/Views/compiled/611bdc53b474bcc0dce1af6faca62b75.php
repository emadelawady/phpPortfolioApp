<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">

        <meta name="application-name" content="<?php echo e($_ENV['APP_NAME']); ?>">
        
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php echo e($_ENV['APP_NAME']); ?></title>

                <?php echo e(Core\Helper::asset('build/styles.js')); ?>


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
            <?php if (isset($component)) { $__componentOriginal39c24a154a28a81a608f7722acf9da54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal39c24a154a28a81a608f7722acf9da54 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.navbar.primary','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('navbar.primary'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal39c24a154a28a81a608f7722acf9da54)): ?>
<?php $attributes = $__attributesOriginal39c24a154a28a81a608f7722acf9da54; ?>
<?php unset($__attributesOriginal39c24a154a28a81a608f7722acf9da54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal39c24a154a28a81a608f7722acf9da54)): ?>
<?php $component = $__componentOriginal39c24a154a28a81a608f7722acf9da54; ?>
<?php unset($__componentOriginal39c24a154a28a81a608f7722acf9da54); ?>
<?php endif; ?>
        <?php elseif(($_SERVER['REQUEST_URI'] == $portfolio)): ?>
         

        <?php endif; ?>
    </section>

            <?php echo e($slot); ?>

            
    <?php if (isset($component)) { $__componentOriginal364574dfb1fe66f8b3a7d8316bc3efb6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal364574dfb1fe66f8b3a7d8316bc3efb6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.footer.primary','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('footer.primary'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal364574dfb1fe66f8b3a7d8316bc3efb6)): ?>
<?php $attributes = $__attributesOriginal364574dfb1fe66f8b3a7d8316bc3efb6; ?>
<?php unset($__attributesOriginal364574dfb1fe66f8b3a7d8316bc3efb6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal364574dfb1fe66f8b3a7d8316bc3efb6)): ?>
<?php $component = $__componentOriginal364574dfb1fe66f8b3a7d8316bc3efb6; ?>
<?php unset($__componentOriginal364574dfb1fe66f8b3a7d8316bc3efb6); ?>
<?php endif; ?>

            <?php echo e(Core\Helper::asset('build/libs.js')); ?> 

<?php if($_SERVER['REQUEST_URI'] == $homepage): ?>
            <?php echo e(Core\Helper::asset('build/homepage.js')); ?>


<?php elseif(($_SERVER['REQUEST_URI'] == $portfolio)): ?>
    
            <?php echo e(Core\Helper::asset('build/main.js')); ?>


<?php endif; ?>

    </body>
</html>
<?php /**PATH C:\laragon\www\phpPortfolioApp\Resources\Views/components/layouts/app.blade.php ENDPATH**/ ?>