<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta name="application-name" content="<?php echo e($_ENV['APP_NAME']); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

        <title><?php echo e($_ENV['APP_NAME']); ?></title>

                <?php echo vite('js/styles.js'); ?>

<?php
$route = route('admin.dashboard.index',['req' => 'aa']);
?>

    <script>

    let ro = "<?php echo $route ?>";

    console.log(ro);
     /*   function showHint(str) {

            if (str.length == 0) {
                document.getElementById("txtHint").innerHTML = "";
                return;
            } else {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("txtHint").innerHTML = this.responseText;
                }
                };
                xmlhttp.open("GET", ro + str, true);
                xmlhttp.send();
            }
        } */
    </script>



    </head>

    <body class="antialiased">


        <?php if (isset($component)) { $__componentOriginalbf7f07569cb0f7b144c7a4a1d685e36a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbf7f07569cb0f7b144c7a4a1d685e36a = $attributes; } ?>
<?php $component = App\Http\Controllers\Backend\Components\Navbar::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('backend.navbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\Http\Controllers\Backend\Components\Navbar::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbf7f07569cb0f7b144c7a4a1d685e36a)): ?>
<?php $attributes = $__attributesOriginalbf7f07569cb0f7b144c7a4a1d685e36a; ?>
<?php unset($__attributesOriginalbf7f07569cb0f7b144c7a4a1d685e36a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbf7f07569cb0f7b144c7a4a1d685e36a)): ?>
<?php $component = $__componentOriginalbf7f07569cb0f7b144c7a4a1d685e36a; ?>
<?php unset($__componentOriginalbf7f07569cb0f7b144c7a4a1d685e36a); ?>
<?php endif; ?>

        <?php if (isset($component)) { $__componentOriginalb1775fd4cb4b33ae2fa53ccf26aa1a9e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb1775fd4cb4b33ae2fa53ccf26aa1a9e = $attributes; } ?>
<?php $component = App\Http\Controllers\Backend\Components\Sidebar::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('backend.sidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\Http\Controllers\Backend\Components\Sidebar::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb1775fd4cb4b33ae2fa53ccf26aa1a9e)): ?>
<?php $attributes = $__attributesOriginalb1775fd4cb4b33ae2fa53ccf26aa1a9e; ?>
<?php unset($__attributesOriginalb1775fd4cb4b33ae2fa53ccf26aa1a9e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb1775fd4cb4b33ae2fa53ccf26aa1a9e)): ?>
<?php $component = $__componentOriginalb1775fd4cb4b33ae2fa53ccf26aa1a9e; ?>
<?php unset($__componentOriginalb1775fd4cb4b33ae2fa53ccf26aa1a9e); ?>
<?php endif; ?>

        <div class="content p-10 sm:ml-64">

            <?php echo e($slot); ?>

                
            <?php if (isset($component)) { $__componentOriginal4599e0a2989a37a7e2a9f7f4f2be57f6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4599e0a2989a37a7e2a9f7f4f2be57f6 = $attributes; } ?>
<?php $component = App\Http\Controllers\Backend\Components\Footer::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('backend.footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\Http\Controllers\Backend\Components\Footer::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4599e0a2989a37a7e2a9f7f4f2be57f6)): ?>
<?php $attributes = $__attributesOriginal4599e0a2989a37a7e2a9f7f4f2be57f6; ?>
<?php unset($__attributesOriginal4599e0a2989a37a7e2a9f7f4f2be57f6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4599e0a2989a37a7e2a9f7f4f2be57f6)): ?>
<?php $component = $__componentOriginal4599e0a2989a37a7e2a9f7f4f2be57f6; ?>
<?php unset($__componentOriginal4599e0a2989a37a7e2a9f7f4f2be57f6); ?>
<?php endif; ?>
            
        </div>

        <?php echo vite('js/libs.js'); ?> 
        

        <?php echo vite('js/main.js'); ?>




    </body>
</html>
<?php /**PATH C:\laragon\www\phpPortfolioApp\resources\views/components/layouts/admins/adminLayout.blade.php ENDPATH**/ ?>