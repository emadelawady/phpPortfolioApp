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

<button onclick="window.scroll({top: 0, left: 0, behavior: 'smooth'})" class="scroll scroll-top hidden">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
  <path fill-rule="evenodd" d="M11.47 7.72a.75.75 0 011.06 0l7.5 7.5a.75.75 0 11-1.06 1.06L12 9.31l-6.97 6.97a.75.75 0 01-1.06-1.06l7.5-7.5z" clip-rule="evenodd" />
</svg>
</button>



    <section class="shadow border-b">
        <?php if (isset($component)) { $__componentOriginal6ec1774d3e3196904cd2fdbe84332710 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6ec1774d3e3196904cd2fdbe84332710 = $attributes; } ?>
<?php $component = App\Http\Controllers\Frontend\Components\Navbars\NavbarLinks::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('frontend.navbar.links'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\Http\Controllers\Frontend\Components\Navbars\NavbarLinks::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6ec1774d3e3196904cd2fdbe84332710)): ?>
<?php $attributes = $__attributesOriginal6ec1774d3e3196904cd2fdbe84332710; ?>
<?php unset($__attributesOriginal6ec1774d3e3196904cd2fdbe84332710); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6ec1774d3e3196904cd2fdbe84332710)): ?>
<?php $component = $__componentOriginal6ec1774d3e3196904cd2fdbe84332710; ?>
<?php unset($__componentOriginal6ec1774d3e3196904cd2fdbe84332710); ?>
<?php endif; ?>
    </section>


<section id="home" class="home scroll-spy flex flex-col items-stretch bg-grey-lighter min-h-screen">

    <section id="hero" class="hero px-2 bg-white md:px-0">
        <?php if (isset($component)) { $__componentOriginal5267786e01f04edfae34aff5404646ce = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5267786e01f04edfae34aff5404646ce = $attributes; } ?>
<?php $component = App\Http\Controllers\Frontend\Pages\Homepage\Components\Hero::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('frontend.homepage.hero'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\Http\Controllers\Frontend\Pages\Homepage\Components\Hero::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5267786e01f04edfae34aff5404646ce)): ?>
<?php $attributes = $__attributesOriginal5267786e01f04edfae34aff5404646ce; ?>
<?php unset($__attributesOriginal5267786e01f04edfae34aff5404646ce); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5267786e01f04edfae34aff5404646ce)): ?>
<?php $component = $__componentOriginal5267786e01f04edfae34aff5404646ce; ?>
<?php unset($__componentOriginal5267786e01f04edfae34aff5404646ce); ?>
<?php endif; ?>
    </section>

</section>

<section id="about" class="about scroll-spy bg-white dark:bg-gray-900">

    <?php if (isset($component)) { $__componentOriginal566d396e701046aece877985075a9d3e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal566d396e701046aece877985075a9d3e = $attributes; } ?>
<?php $component = App\Http\Controllers\Frontend\Pages\Homepage\Components\About::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('frontend.homepage.about'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\Http\Controllers\Frontend\Pages\Homepage\Components\About::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal566d396e701046aece877985075a9d3e)): ?>
<?php $attributes = $__attributesOriginal566d396e701046aece877985075a9d3e; ?>
<?php unset($__attributesOriginal566d396e701046aece877985075a9d3e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal566d396e701046aece877985075a9d3e)): ?>
<?php $component = $__componentOriginal566d396e701046aece877985075a9d3e; ?>
<?php unset($__componentOriginal566d396e701046aece877985075a9d3e); ?>
<?php endif; ?>

</section>

<section id="services" class="services scroll-spy bg-white dark:bg-gray-900">

    <?php if (isset($component)) { $__componentOriginalb286b2c733426e909dc5b685715a4c05 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb286b2c733426e909dc5b685715a4c05 = $attributes; } ?>
<?php $component = App\Http\Controllers\Frontend\Pages\Homepage\Components\Services::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('frontend.homepage.services'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\Http\Controllers\Frontend\Pages\Homepage\Components\Services::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb286b2c733426e909dc5b685715a4c05)): ?>
<?php $attributes = $__attributesOriginalb286b2c733426e909dc5b685715a4c05; ?>
<?php unset($__attributesOriginalb286b2c733426e909dc5b685715a4c05); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb286b2c733426e909dc5b685715a4c05)): ?>
<?php $component = $__componentOriginalb286b2c733426e909dc5b685715a4c05; ?>
<?php unset($__componentOriginalb286b2c733426e909dc5b685715a4c05); ?>
<?php endif; ?>

</section>


<section id="portfolio" class="portfolio scroll-spy pt-10 bg-white dark:bg-gray-900">
    <?php if (isset($component)) { $__componentOriginalfc084ea687c54e9e37fe78aebf80780a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfc084ea687c54e9e37fe78aebf80780a = $attributes; } ?>
<?php $component = App\Http\Controllers\Frontend\Pages\Homepage\Components\Portfolio::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('frontend.homepage.portfolio'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\Http\Controllers\Frontend\Pages\Homepage\Components\Portfolio::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfc084ea687c54e9e37fe78aebf80780a)): ?>
<?php $attributes = $__attributesOriginalfc084ea687c54e9e37fe78aebf80780a; ?>
<?php unset($__attributesOriginalfc084ea687c54e9e37fe78aebf80780a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfc084ea687c54e9e37fe78aebf80780a)): ?>
<?php $component = $__componentOriginalfc084ea687c54e9e37fe78aebf80780a; ?>
<?php unset($__componentOriginalfc084ea687c54e9e37fe78aebf80780a); ?>
<?php endif; ?>
</section>


<section id="testimonial" class="testimonial scroll-spy bg-white dark:bg-gray-900">

    <?php if (isset($component)) { $__componentOriginal10382d8568925e6aac0220943dae758f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal10382d8568925e6aac0220943dae758f = $attributes; } ?>
<?php $component = App\Http\Controllers\Frontend\Pages\Homepage\Components\Testimonials::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('frontend.homepage.testimonials'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\Http\Controllers\Frontend\Pages\Homepage\Components\Testimonials::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal10382d8568925e6aac0220943dae758f)): ?>
<?php $attributes = $__attributesOriginal10382d8568925e6aac0220943dae758f; ?>
<?php unset($__attributesOriginal10382d8568925e6aac0220943dae758f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal10382d8568925e6aac0220943dae758f)): ?>
<?php $component = $__componentOriginal10382d8568925e6aac0220943dae758f; ?>
<?php unset($__componentOriginal10382d8568925e6aac0220943dae758f); ?>
<?php endif; ?>

</section>

<section id="call_to_action" class="call_to_action scroll-spy py-10 my-10 bg-white dark:bg-gray-900">
    <?php if (isset($component)) { $__componentOriginal1dc61d3b02ad9cce1a1366d5b1e0f998 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1dc61d3b02ad9cce1a1366d5b1e0f998 = $attributes; } ?>
<?php $component = App\Http\Controllers\Frontend\Pages\Homepage\Components\CallToAction::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('frontend.homepage.call-to-action'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\Http\Controllers\Frontend\Pages\Homepage\Components\CallToAction::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1dc61d3b02ad9cce1a1366d5b1e0f998)): ?>
<?php $attributes = $__attributesOriginal1dc61d3b02ad9cce1a1366d5b1e0f998; ?>
<?php unset($__attributesOriginal1dc61d3b02ad9cce1a1366d5b1e0f998); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1dc61d3b02ad9cce1a1366d5b1e0f998)): ?>
<?php $component = $__componentOriginal1dc61d3b02ad9cce1a1366d5b1e0f998; ?>
<?php unset($__componentOriginal1dc61d3b02ad9cce1a1366d5b1e0f998); ?>
<?php endif; ?>
</section>


<section id="contact" class="contact scroll-spy py-10 my-10 bg-white dark:bg-gray-900">
    <?php if (isset($component)) { $__componentOriginal221379209f1545085433b7e7278fa29c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal221379209f1545085433b7e7278fa29c = $attributes; } ?>
<?php $component = App\Http\Controllers\Frontend\Pages\Homepage\Components\Contact::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('frontend.homepage.contact'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\Http\Controllers\Frontend\Pages\Homepage\Components\Contact::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal221379209f1545085433b7e7278fa29c)): ?>
<?php $attributes = $__attributesOriginal221379209f1545085433b7e7278fa29c; ?>
<?php unset($__attributesOriginal221379209f1545085433b7e7278fa29c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal221379209f1545085433b7e7278fa29c)): ?>
<?php $component = $__componentOriginal221379209f1545085433b7e7278fa29c; ?>
<?php unset($__componentOriginal221379209f1545085433b7e7278fa29c); ?>
<?php endif; ?>
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
<?php endif; ?><?php /**PATH C:\laragon\www\phpPortfolioApp\resources\views/frontend/pages/homepage/home.blade.php ENDPATH**/ ?>