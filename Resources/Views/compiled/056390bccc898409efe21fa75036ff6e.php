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


            <?php echo e($slot); ?>



            <?php echo e(Core\Helper::asset('build/main.js')); ?>

            <?php echo e(Core\Helper::asset('build/libs.js')); ?>

    </body>
</html>
<?php /**PATH C:\laragon\www\phpPortfolioApp\Resources\Views/components/layouts/blank.blade.php ENDPATH**/ ?>