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


        <?php if (isset($component)) { $__componentOriginalb0ee896d00153d9e46e2d29e604b3c40 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb0ee896d00153d9e46e2d29e604b3c40 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admins.navbar.primary','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admins.navbar.primary'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb0ee896d00153d9e46e2d29e604b3c40)): ?>
<?php $attributes = $__attributesOriginalb0ee896d00153d9e46e2d29e604b3c40; ?>
<?php unset($__attributesOriginalb0ee896d00153d9e46e2d29e604b3c40); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb0ee896d00153d9e46e2d29e604b3c40)): ?>
<?php $component = $__componentOriginalb0ee896d00153d9e46e2d29e604b3c40; ?>
<?php unset($__componentOriginalb0ee896d00153d9e46e2d29e604b3c40); ?>
<?php endif; ?>

        <?php if (isset($component)) { $__componentOriginal3b946229e42b8c722ca039a9dcf59d7a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3b946229e42b8c722ca039a9dcf59d7a = $attributes; } ?>
<?php $component = App\Http\Controllers\Components\Globals\Admins\Sidebar::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('globals.admins.sidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\Http\Controllers\Components\Globals\Admins\Sidebar::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3b946229e42b8c722ca039a9dcf59d7a)): ?>
<?php $attributes = $__attributesOriginal3b946229e42b8c722ca039a9dcf59d7a; ?>
<?php unset($__attributesOriginal3b946229e42b8c722ca039a9dcf59d7a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3b946229e42b8c722ca039a9dcf59d7a)): ?>
<?php $component = $__componentOriginal3b946229e42b8c722ca039a9dcf59d7a; ?>
<?php unset($__componentOriginal3b946229e42b8c722ca039a9dcf59d7a); ?>
<?php endif; ?>

        <div class="content p-10 sm:ml-64">

            <?php echo e($slot); ?>

                
            <?php if (isset($component)) { $__componentOriginal7200da79b415b375b554ff9a0cddc91d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7200da79b415b375b554ff9a0cddc91d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admins.footer.primary','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('admins.footer.primary'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7200da79b415b375b554ff9a0cddc91d)): ?>
<?php $attributes = $__attributesOriginal7200da79b415b375b554ff9a0cddc91d; ?>
<?php unset($__attributesOriginal7200da79b415b375b554ff9a0cddc91d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7200da79b415b375b554ff9a0cddc91d)): ?>
<?php $component = $__componentOriginal7200da79b415b375b554ff9a0cddc91d; ?>
<?php unset($__componentOriginal7200da79b415b375b554ff9a0cddc91d); ?>
<?php endif; ?>
            
        </div>

        <?php echo vite('js/libs.js'); ?> 
        

        <?php echo vite('js/main.js'); ?>




    </body>
</html>
<?php /**PATH C:\laragon\www\phpPortfolioApp\resources\views/components/layouts/admins/adminLayout.blade.php ENDPATH**/ ?>