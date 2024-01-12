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


    







<section class="bg-gray-100 lg:pt-16 text-gray-800">
	<div class="container flex flex-col justify-center p-12 mx-auto sm:py-24 lg:py-12 lg:flex-row lg:justify-around">
		<div class="flex flex-col justify-center lg:p-6 text-center rounded-sm lg:max-w-md xl:max-w-lg lg:text-left">
			<h1 class="text-3xl font-bold leadi sm:text-4xl">Hey,
				<span class="block my-2 text-5xl text-violet-600 sm:text-6xl">I'm Emad</span> 
			</h1>
			<h1 class="text-sm font-bold leadi px-6 mt-2 sm:text-md text-gray-400">_Backend Developer.</h1>
			<p class="mt-6 mb-8 text-lg sm:mb-12">Dictum aliquam porta in condimentum ac integer
				
			</p>

		</div>
		<div class="flex items-center justify-center p-6 mt-8 lg:mt-0 h-72 sm:h-80 lg:h-96 xl:h-112 2xl:h-128">
			<img src="<?php echo e(public_path('assets/images/me.jpg')); ?>" alt="" class="object-contain h-72 sm:h-80 lg:h-96 xl:h-112 2xl:h-128 rounded-3xl">
		</div>
	</div>
</section>



<div class="bg-white py-6 sm:py-8 lg:py-12">
  <div class="mx-auto max-w-screen-lg px-4 md:px-8 prose">
    <h1 class="mb-4 text-left text-2xl font-bold text-gray-800 sm:text-3xl md:mb-6">UI/UX & Graphic Designer</h1>

    <p class="mb-6 text-gray-500 sm:text-lg md:mb-8">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br /><br />

      This is a section of some simple filler text, also known as placeholder text. It shares some characteristics of a real written text but is <a href="#" class="text-indigo-500 underline transition duration-100 hover:text-indigo-600 active:text-indigo-700">random</a> or otherwise generated. It may be used to display a sample of fonts or generate text for testing. Filler text is dummy text which has no meaning however looks very similar to real text.
    </p>

    <h2 class="mb-2 text-xl font-semibold text-gray-800 sm:text-2xl md:mb-4">About us</h2>

    <p class="mb-6 text-gray-500 sm:text-lg md:mb-8">This is a section of some simple filler text, also known as placeholder text. It shares some characteristics of a real written text but is random or otherwise generated. It may be used to display a sample of fonts or generate text for testing. Filler text is dummy text which has no meaning however looks very similar to real text.</p>

    <ul class="mb-6 list-inside list-disc text-gray-500 sm:text-lg md:mb-8">
      <li>This is a section of some simple filler text</li>
      <li>Also known as placeholder text</li>
      <li>It shares some characteristics of a real written text</li>
    </ul>

    <blockquote class="mb-6 border-l-4 pl-4 italic text-gray-500 sm:text-lg md:mb-8 md:pl-6">“This is a section of some simple filler text, also known as placeholder text. It shares some characteristics of a real written text but is random or otherwise generated.”</blockquote>

    <div class="relative mb-6 overflow-hidden rounded-lg bg-gray-100 shadow-lg md:mb-8">
      <img src="https://images.unsplash.com/photo-1593508512255-86ab42a8e620?auto=format&q=75&fit=crop&w=600&h=350" loading="lazy" alt="Photo by Minh Pham" class="h-full w-full object-cover object-center m-0" />
    </div>

    <h2 class="mb-2 text-xl font-semibold text-gray-800 sm:text-2xl md:mb-4">Features</h2>

    <p class="text-gray-500 sm:text-lg">This is a section of some simple filler text, also known as placeholder text. It shares some characteristics of a real written text but is random or otherwise generated. It may be used to display a sample of fonts or generate text for testing. Filler text is dummy text which has no meaning however looks very similar to real text.</p>
  </div>
</div>



<div class="w-full px-10 mx-auto flex items-center">
    <div class="w-full bg-white pt-6 sm:pt-8 lg:pt-12">
    <div class="mx-auto max-w-screen-4xl px-4 md:px-8">
        <p class="mb-2 font-semibold text-indigo-500 md:mb-3 lg:text-lg">Introducing</p>

        <h2 class="mb-4 text-2xl font-bold text-gray-800 md:mb-6 lg:text-3xl">Revolutionary way to build the web</h2>

        <p class="max-w-screen-md text-gray-500 md:text-lg">This is a section of some simple filler text, also known as placeholder text.</p>
    </div>
    </div>
</div>
<div class="w-full mt-5 mb-20 pb-10 mx-auto text-white h-[250px] flex items-center">

    <div x-data="{ 
            activeAccordion: '', 
            setActiveAccordion(id) { 
                this.activeAccordion = (this.activeAccordion == id) ? '' : id 
            } 
        }" class="relative bg-primary w-full max-w-5xl mx-auto border border-indigo-500 rounded p-4 text-sm font-normal">
        <div x-data="{ id: $id('accordion') }" :class="{ 'text-white': activeAccordion==id, 'text-white hover:white': activeAccordion!=id }" class="cursor-pointer group">
            <button @click="setActiveAccordion(id)" class="flex items-center justify-between w-full p-4 pb-1 text-left select-none">
                <span>What is Pines?</span>
                <svg class="w-5 h-5 duration-300 ease-out" :class="{ '-rotate-[45deg]': activeAccordion==id }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" /></svg>
            </button>
            <div x-show="activeAccordion==id" x-collapse x-cloak>
                <div class="p-4 pt-2 opacity-70">
                    Pines is a UI library built for AlpineJS and TailwindCSS.
                </div>
            </div>
        </div>
        <div x-data="{ id: $id('accordion') }" :class="{ 'text-white': activeAccordion==id, 'text-white hover:text-white': activeAccordion!=id }" class="cursor-pointer group">
            <button @click="setActiveAccordion(id)" class="flex items-center justify-between w-full p-4 pb-1 text-left select-none">
                <span>How do I install Pines?</span>
                <svg class="w-5 h-5 duration-300 ease-out" :class="{ '-rotate-[45deg]': activeAccordion==id }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" /></svg>
            </button>
            <div x-show="activeAccordion==id" x-collapse x-cloak>
                <div class="p-4 pt-2 opacity-70">
                    Add AlpineJS and TailwindCSS to your page and then copy and paste any of these elements into your project.
                </div>
            </div>
        </div>
        <div x-data="{ id: $id('accordion') }" :class="{ 'text-white': activeAccordion==id, 'text-white hover:text-white': activeAccordion!=id }" class="cursor-pointer group">
            <button @click="setActiveAccordion(id)" class="flex items-center justify-between w-full p-4 pb-1 text-left select-none">
                <span>Can I use Pines with other libraries or frameworks?</span>
                <svg class="w-5 h-5 duration-300 ease-out" :class="{ '-rotate-[45deg]': activeAccordion==id }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" /></svg>
            </button>
            <div x-show="activeAccordion==id" x-collapse x-cloak>
                <div class="p-4 pt-2 opacity-70">
                    Absolutely! Pines works with any other library or framework. Pines works especially well with the TALL stack.
                </div>
            </div>
        </div>
    </div>
</div>

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
<?php endif; ?><?php /**PATH C:\laragon\www\phpPortfolioApp\resources\views/pages/about.blade.php ENDPATH**/ ?>