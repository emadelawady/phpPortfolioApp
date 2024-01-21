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
        <?php if (isset($component)) { $__componentOriginalce302171d0ed6cc04b4945b5c3678726 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalce302171d0ed6cc04b4945b5c3678726 = $attributes; } ?>
<?php $component = App\Http\Controllers\Frontend\Components\Navbars\SecondaryNavbar::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('frontend.secondary.navbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\Http\Controllers\Frontend\Components\Navbars\SecondaryNavbar::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalce302171d0ed6cc04b4945b5c3678726)): ?>
<?php $attributes = $__attributesOriginalce302171d0ed6cc04b4945b5c3678726; ?>
<?php unset($__attributesOriginalce302171d0ed6cc04b4945b5c3678726); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalce302171d0ed6cc04b4945b5c3678726)): ?>
<?php $component = $__componentOriginalce302171d0ed6cc04b4945b5c3678726; ?>
<?php unset($__componentOriginalce302171d0ed6cc04b4945b5c3678726); ?>
<?php endif; ?>
    </section>


<section class="portfolio_filter  mb-20 bg-white dark:bg-gray-900">
    <?php if (isset($component)) { $__componentOriginala080d4cbfc23e9b35255f15d2536b6f7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala080d4cbfc23e9b35255f15d2536b6f7 = $attributes; } ?>
<?php $component = App\Http\Controllers\Frontend\Pages\Portfoliopage\Components\PortfolioPageSlider::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('frontend.portfoliopage.slider'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\Http\Controllers\Frontend\Pages\Portfoliopage\Components\PortfolioPageSlider::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala080d4cbfc23e9b35255f15d2536b6f7)): ?>
<?php $attributes = $__attributesOriginala080d4cbfc23e9b35255f15d2536b6f7; ?>
<?php unset($__attributesOriginala080d4cbfc23e9b35255f15d2536b6f7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala080d4cbfc23e9b35255f15d2536b6f7)): ?>
<?php $component = $__componentOriginala080d4cbfc23e9b35255f15d2536b6f7; ?>
<?php unset($__componentOriginala080d4cbfc23e9b35255f15d2536b6f7); ?>
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
<?php endif; ?><?php /**PATH C:\laragon\www\phpPortfolioApp\resources\views/frontend/pages/portfoliopage/portfolio.blade.php ENDPATH**/ ?>