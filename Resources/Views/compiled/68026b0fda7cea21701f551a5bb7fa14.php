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
        <?php if (isset($component)) { $__componentOriginala755a76973cf7ba4893a48a7fac52cdd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala755a76973cf7ba4893a48a7fac52cdd = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.navbar.primary-links','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('navbar.primary-links'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala755a76973cf7ba4893a48a7fac52cdd)): ?>
<?php $attributes = $__attributesOriginala755a76973cf7ba4893a48a7fac52cdd; ?>
<?php unset($__attributesOriginala755a76973cf7ba4893a48a7fac52cdd); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala755a76973cf7ba4893a48a7fac52cdd)): ?>
<?php $component = $__componentOriginala755a76973cf7ba4893a48a7fac52cdd; ?>
<?php unset($__componentOriginala755a76973cf7ba4893a48a7fac52cdd); ?>
<?php endif; ?>
    </section>

    
<section id="home" class="home scroll-spy flex flex-col items-stretch bg-grey-lighter min-h-screen">



    <section id="hero" class="hero px-2 bg-white md:px-0">
        <?php if (isset($component)) { $__componentOriginal6453ace87c275a958b9b4034212bcba6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6453ace87c275a958b9b4034212bcba6 = $attributes; } ?>
<?php $component = App\Http\Controllers\Components\Globals\FrontEnd\PrimaryHero::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('globals.frontend.hero.primary'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\Http\Controllers\Components\Globals\FrontEnd\PrimaryHero::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6453ace87c275a958b9b4034212bcba6)): ?>
<?php $attributes = $__attributesOriginal6453ace87c275a958b9b4034212bcba6; ?>
<?php unset($__attributesOriginal6453ace87c275a958b9b4034212bcba6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6453ace87c275a958b9b4034212bcba6)): ?>
<?php $component = $__componentOriginal6453ace87c275a958b9b4034212bcba6; ?>
<?php unset($__componentOriginal6453ace87c275a958b9b4034212bcba6); ?>
<?php endif; ?>
    </section>

</section>

<section id="about" class="about scroll-spy bg-white dark:bg-gray-900">

    <?php if (isset($component)) { $__componentOriginaled4508835816facb411af6aafe844da0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaled4508835816facb411af6aafe844da0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.about.primary','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('about.primary'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaled4508835816facb411af6aafe844da0)): ?>
<?php $attributes = $__attributesOriginaled4508835816facb411af6aafe844da0; ?>
<?php unset($__attributesOriginaled4508835816facb411af6aafe844da0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaled4508835816facb411af6aafe844da0)): ?>
<?php $component = $__componentOriginaled4508835816facb411af6aafe844da0; ?>
<?php unset($__componentOriginaled4508835816facb411af6aafe844da0); ?>
<?php endif; ?>

</section>

<section id="services" class="services scroll-spy bg-white dark:bg-gray-900">

    <?php if (isset($component)) { $__componentOriginale6ec1b57d47ffaebadea24c7f69acf1e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale6ec1b57d47ffaebadea24c7f69acf1e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.services.primary','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('services.primary'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale6ec1b57d47ffaebadea24c7f69acf1e)): ?>
<?php $attributes = $__attributesOriginale6ec1b57d47ffaebadea24c7f69acf1e; ?>
<?php unset($__attributesOriginale6ec1b57d47ffaebadea24c7f69acf1e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale6ec1b57d47ffaebadea24c7f69acf1e)): ?>
<?php $component = $__componentOriginale6ec1b57d47ffaebadea24c7f69acf1e; ?>
<?php unset($__componentOriginale6ec1b57d47ffaebadea24c7f69acf1e); ?>
<?php endif; ?>

</section>





<section id="portfolio" class="portfolio scroll-spy pt-10 bg-white dark:bg-gray-900">
    <?php if (isset($component)) { $__componentOriginalc8e83338e9cec6a03545ed5d5a7846f9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc8e83338e9cec6a03545ed5d5a7846f9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.portfolio.primary','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('portfolio.primary'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc8e83338e9cec6a03545ed5d5a7846f9)): ?>
<?php $attributes = $__attributesOriginalc8e83338e9cec6a03545ed5d5a7846f9; ?>
<?php unset($__attributesOriginalc8e83338e9cec6a03545ed5d5a7846f9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc8e83338e9cec6a03545ed5d5a7846f9)): ?>
<?php $component = $__componentOriginalc8e83338e9cec6a03545ed5d5a7846f9; ?>
<?php unset($__componentOriginalc8e83338e9cec6a03545ed5d5a7846f9); ?>
<?php endif; ?>
</section>



<section id="testimonial" class="testimonial scroll-spy bg-white dark:bg-gray-900">

    <?php if (isset($component)) { $__componentOriginal148377d7fbe18cebffe4db95b68ec3d5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal148377d7fbe18cebffe4db95b68ec3d5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.testimonials.primary','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('testimonials.primary'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal148377d7fbe18cebffe4db95b68ec3d5)): ?>
<?php $attributes = $__attributesOriginal148377d7fbe18cebffe4db95b68ec3d5; ?>
<?php unset($__attributesOriginal148377d7fbe18cebffe4db95b68ec3d5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal148377d7fbe18cebffe4db95b68ec3d5)): ?>
<?php $component = $__componentOriginal148377d7fbe18cebffe4db95b68ec3d5; ?>
<?php unset($__componentOriginal148377d7fbe18cebffe4db95b68ec3d5); ?>
<?php endif; ?>

</section>

<section id="call_to_action" class="call_to_action scroll-spy py-10 my-10 bg-white dark:bg-gray-900">
    <?php if (isset($component)) { $__componentOriginal588f58110215565991ef6cb3c89406c1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal588f58110215565991ef6cb3c89406c1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.call_to_action.primary','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('call_to_action.primary'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal588f58110215565991ef6cb3c89406c1)): ?>
<?php $attributes = $__attributesOriginal588f58110215565991ef6cb3c89406c1; ?>
<?php unset($__attributesOriginal588f58110215565991ef6cb3c89406c1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal588f58110215565991ef6cb3c89406c1)): ?>
<?php $component = $__componentOriginal588f58110215565991ef6cb3c89406c1; ?>
<?php unset($__componentOriginal588f58110215565991ef6cb3c89406c1); ?>
<?php endif; ?>
</section>





<section id="contact" class="contact scroll-spy py-10 my-10 bg-white dark:bg-gray-900">

<?php if (isset($component)) { $__componentOriginal68192e21c3830243cffc56acb2b395be = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal68192e21c3830243cffc56acb2b395be = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.contact.primary','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('contact.primary'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal68192e21c3830243cffc56acb2b395be)): ?>
<?php $attributes = $__attributesOriginal68192e21c3830243cffc56acb2b395be; ?>
<?php unset($__attributesOriginal68192e21c3830243cffc56acb2b395be); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal68192e21c3830243cffc56acb2b395be)): ?>
<?php $component = $__componentOriginal68192e21c3830243cffc56acb2b395be; ?>
<?php unset($__componentOriginal68192e21c3830243cffc56acb2b395be); ?>
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
<?php endif; ?><?php /**PATH C:\laragon\www\phpPortfolioApp\Resources\Views/home.blade.php ENDPATH**/ ?>