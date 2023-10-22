<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">

        <meta name="application-name" content="<?php echo e($_ENV['APP_NAME']); ?>">
        
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php echo e($_ENV['APP_NAME']); ?></title>

                <?php echo e(Core\Helper::asset('build/portfolio_css.js')); ?>


                

        <style>
            [x-cloak] {
                display: none !important;
            }
        </style>

    </head>

    <body class="antialiased">

    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.navbar.bootstrap-nav','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('navbar.bootstrap-nav'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>

            <?php echo e($slot); ?>

            

    

        <script src="https://cdn.jsdelivr.net/npm/@srexi/purecounterjs/dist/purecounter_vanilla.js"></script>

<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>

        <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>

            
            
            
            

            <?php echo e(Core\Helper::asset('build/waypoints.js')); ?>

            <?php echo e(Core\Helper::asset('build/portfolio_js.js')); ?>

    </body>
</html>
<?php /**PATH C:\laragon\www\phpPortfolioApp\App\Views/components/layouts/portfolio.blade.php ENDPATH**/ ?>