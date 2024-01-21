<?php if (isset($component)) { $__componentOriginal5863877a5171c196453bfa0bd807e410 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5863877a5171c196453bfa0bd807e410 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.app','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layouts.app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>


<section class="home flex flex-col items-stretch bg-grey-lighter min-h-screen">

    <section class="navigation navigation--relative">
        <?php if (isset($component)) { $__componentOriginal9fcd8409cb3a6b9680fe539e6377f0a1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9fcd8409cb3a6b9680fe539e6377f0a1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.navbar.secondary','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('navbar.secondary'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9fcd8409cb3a6b9680fe539e6377f0a1)): ?>
<?php $attributes = $__attributesOriginal9fcd8409cb3a6b9680fe539e6377f0a1; ?>
<?php unset($__attributesOriginal9fcd8409cb3a6b9680fe539e6377f0a1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9fcd8409cb3a6b9680fe539e6377f0a1)): ?>
<?php $component = $__componentOriginal9fcd8409cb3a6b9680fe539e6377f0a1; ?>
<?php unset($__componentOriginal9fcd8409cb3a6b9680fe539e6377f0a1); ?>
<?php endif; ?>
    </section>


<section class="portfolio_filter  mb-20 bg-white dark:bg-gray-900">
    <?php if (isset($component)) { $__componentOriginal5dbbf4c0a0080e77776c5e45989ba30f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5dbbf4c0a0080e77776c5e45989ba30f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.portfolio_filter.primary','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('portfolio_filter.primary'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5dbbf4c0a0080e77776c5e45989ba30f)): ?>
<?php $attributes = $__attributesOriginal5dbbf4c0a0080e77776c5e45989ba30f; ?>
<?php unset($__attributesOriginal5dbbf4c0a0080e77776c5e45989ba30f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5dbbf4c0a0080e77776c5e45989ba30f)): ?>
<?php $component = $__componentOriginal5dbbf4c0a0080e77776c5e45989ba30f; ?>
<?php unset($__componentOriginal5dbbf4c0a0080e77776c5e45989ba30f); ?>
<?php endif; ?>
</section>


</section>



 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5863877a5171c196453bfa0bd807e410)): ?>
<?php $attributes = $__attributesOriginal5863877a5171c196453bfa0bd807e410; ?>
<?php unset($__attributesOriginal5863877a5171c196453bfa0bd807e410); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5863877a5171c196453bfa0bd807e410)): ?>
<?php $component = $__componentOriginal5863877a5171c196453bfa0bd807e410; ?>
<?php unset($__componentOriginal5863877a5171c196453bfa0bd807e410); ?>
<?php endif; ?><?php /**PATH C:\laragon\www\phpPortfolioApp\resources\views/pages/portfolio.blade.php ENDPATH**/ ?>