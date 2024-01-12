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






<section class="bg-gray-50">
  <div
    class="mx-auto max-w-screen-xl px-4 py-32 lg:flex lg:h-screen lg:items-center"
  >
    <div class="mx-auto max-w-xl text-center">
      <h1 class="text-3xl font-extrabold sm:text-5xl">
        Understand User Flow.
        <strong class="font-extrabold text-red-700 sm:block">
          Increase Conversion.
        </strong>
      </h1>

      <p class="mt-4 sm:text-xl/relaxed">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt illo
        tenetur fuga ducimus numquam ea!
      </p>

      <div class="mt-8 flex flex-wrap justify-center gap-4">
        <a
          class="block w-full rounded bg-red-600 px-12 py-3 text-sm font-medium text-white shadow hover:bg-red-700 focus:outline-none focus:ring active:bg-red-500 sm:w-auto"
          href="/get-started"
        >
          Get Started
        </a>

        <a
          class="block w-full rounded px-12 py-3 text-sm font-medium text-red-600 shadow hover:text-red-700 focus:outline-none focus:ring active:text-red-500 sm:w-auto"
          href="/about"
        >
          Learn More
        </a>
      </div>
    </div>
  </div>
</section>




<div class="bg-white py-6 sm:py-8 lg:py-12">
  <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
    <!-- text - start -->
    <div class="mb-10 md:mb-16">
      <h2 class="mb-4 text-center text-2xl font-bold text-gray-800 md:mb-6 lg:text-3xl">Our competitive advantage</h2>

      <p class="mx-auto max-w-screen-md text-center text-gray-500 md:text-lg">This is a section of some simple filler text, also known as placeholder text. It shares some characteristics of a real written text but is random or otherwise generated.</p>
    </div>
    <!-- text - end -->

    <div class="grid gap-8 sm:grid-cols-2 md:gap-12 xl:grid-cols-3 xl:gap-16">
      <!-- feature - start -->
      <div class="flex gap-4 md:gap-6">
        <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-lg bg-indigo-500 text-white shadow-lg md:h-14 md:w-14 md:rounded-xl">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
          </svg>
        </div>

        <div>
          <h3 class="mb-2 text-lg font-semibold md:text-xl">Growth</h3>
          <p class="mb-2 text-gray-500">Filler text is dummy text which has no meaning however looks very similar to real text.</p>
          <a href="#" class="font-bold text-indigo-500 transition duration-100 hover:text-indigo-600 active:text-indigo-700">More</a>
        </div>
      </div>
      <!-- feature - end -->

      <!-- feature - start -->
      <div class="flex gap-4 md:gap-6">
        <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-lg bg-indigo-500 text-white shadow-lg md:h-14 md:w-14 md:rounded-xl">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
          </svg>
        </div>

        <div>
          <h3 class="mb-2 text-lg font-semibold md:text-xl">Security</h3>
          <p class="mb-2 text-gray-500">Filler text is dummy text which has no meaning however looks very similar to real text.</p>
          <a href="#" class="font-bold text-indigo-500 transition duration-100 hover:text-indigo-600 active:text-indigo-700">More</a>
        </div>
      </div>
      <!-- feature - end -->

      <!-- feature - start -->
      <div class="flex gap-4 md:gap-6">
        <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-lg bg-indigo-500 text-white shadow-lg md:h-14 md:w-14 md:rounded-xl">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
          </svg>
        </div>

        <div>
          <h3 class="mb-2 text-lg font-semibold md:text-xl">Cloud</h3>
          <p class="mb-2 text-gray-500">Filler text is dummy text which has no meaning however looks very similar to real text.</p>
          <a href="#" class="font-bold text-indigo-500 transition duration-100 hover:text-indigo-600 active:text-indigo-700">More</a>
        </div>
      </div>
      <!-- feature - end -->

      <!-- feature - start -->
      <div class="flex gap-4 md:gap-6">
        <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-lg bg-indigo-500 text-white shadow-lg md:h-14 md:w-14 md:rounded-xl">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
          </svg>
        </div>

        <div>
          <h3 class="mb-2 text-lg font-semibold md:text-xl">Speed</h3>
          <p class="mb-2 text-gray-500">Filler text is dummy text which has no meaning however looks very similar to real text.</p>
          <a href="#" class="font-bold text-indigo-500 transition duration-100 hover:text-indigo-600 active:text-indigo-700">More</a>
        </div>
      </div>
      <!-- feature - end -->

      <!-- feature - start -->
      <div class="flex gap-4 md:gap-6">
        <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-lg bg-indigo-500 text-white shadow-lg md:h-14 md:w-14 md:rounded-xl">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
          </svg>
        </div>

        <div>
          <h3 class="mb-2 text-lg font-semibold md:text-xl">Support</h3>
          <p class="mb-2 text-gray-500">Filler text is dummy text which has no meaning however looks very similar to real text.</p>
          <a href="#" class="font-bold text-indigo-500 transition duration-100 hover:text-indigo-600 active:text-indigo-700">More</a>
        </div>
      </div>
      <!-- feature - end -->

      <!-- feature - start -->
      <div class="flex gap-4 md:gap-6">
        <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-lg bg-indigo-500 text-white shadow-lg md:h-14 md:w-14 md:rounded-xl">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
          </svg>
        </div>

        <div>
          <h3 class="mb-2 text-lg font-semibold md:text-xl">Dark Mode</h3>
          <p class="mb-2 text-gray-500">Filler text is dummy text which has no meaning however looks very similar to real text.</p>
          <a href="#" class="font-bold text-indigo-500 transition duration-100 hover:text-indigo-600 active:text-indigo-700">More</a>
        </div>
      </div>
      <!-- feature - end -->
    </div>
  </div>
</div>







<div class="bg-white py-6 sm:py-8 lg:py-12">
  <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
    <div class="flex flex-col overflow-hidden rounded-lg bg-gray-900 sm:flex-row md:h-80">
      <!-- content - start -->
      <div class="flex w-full flex-col p-4 sm:w-1/2 sm:p-8 lg:w-2/5">
        <h2 class="mb-4 text-xl font-bold text-white md:text-2xl lg:text-4xl">Summer Sale<br />Up to 70% off.</h2>

        <p class="mb-8 max-w-md text-gray-400">This is a section of some simple filler text, also known as placeholder text. It shares some characteristics of a real written text.</p>

        <div class="mt-auto">
          <a href="#" class="inline-block rounded-lg bg-white px-8 py-3 text-center text-sm font-semibold text-gray-800 outline-none ring-indigo-300 transition duration-100 hover:bg-gray-100 focus-visible:ring active:bg-gray-200 md:text-base">Save now</a>
        </div>
      </div>
      <!-- content - end -->

      <!-- image - start -->
      <div class="order-first h-48 w-full bg-gray-700 sm:order-none sm:h-auto sm:w-1/2 lg:w-3/5">
        <img src="https://images.unsplash.com/photo-1505846951821-e25bacf2eccd?auto=format&q=75&fit=crop&crop=top&w=1000&h=500" loading="lazy" alt="Photo by Dom Hill" class="h-full w-full object-cover object-center" />
      </div>
      <!-- image - end -->
    </div>
  </div>
</div>





<section class="py-20 bg-gray-100 text-gray-800">
	<div class="container px-4 mx-auto">
		<div class="max-w-2xl mx-auto mb-16 text-center">
			<span class="font-bold tracki uppercase text-violet-600">Pricing</span>
			<h2 class="text-4xl font-bold lg:text-5xl">Choose your best plan</h2>
		</div>
		<div class="flex flex-wrap items-stretch -mx-4">
			<div class="flex w-full mb-8 sm:px-4 md:w-1/2 lg:w-1/3 lg:mb-0">
				<div class="flex flex-grow flex-col p-6 space-y-6 rounded shadow sm:p-8 bg-gray-50">
					<div class="space-y-2">
						<h4 class="text-2xl font-bold">Beginner</h4>
						<span class="text-6xl font-bold">Free</span>
					</div>
					<p class="mt-3 leadi text-gray-600">Etiam ac convallis enim, eget euismod dolor.</p>
					<ul class="flex-1 mb-6 text-gray-600">
						<li class="flex mb-2 space-x-2">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="flex-shrink-0 w-6 h-6 text-violet-600">
								<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
							</svg>
							<span>Aenean quis</span>
						</li>
						<li class="flex mb-2 space-x-2">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="flex-shrink-0 w-6 h-6 text-violet-600">
								<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
							</svg>
							<span>Morbi semper</span>
						</li>
						<li class="flex mb-2 space-x-2">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="flex-shrink-0 w-6 h-6 text-violet-600">
								<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
							</svg>
							<span>Tristique enim nec</span>
						</li>
					</ul>
					<button type="button" class="inline-block px-5 py-3 font-semibold tracki text-center rounded bg-violet-600 text-gray-50">Get Started</button>
				</div>
			</div>
			<div class="flex w-full mb-8 sm:px-4 md:w-1/2 lg:w-1/3 lg:mb-0">
				<div class="flex flex-grow flex-col p-6 space-y-6 rounded shadow sm:p-8 bg-violet-600 text-gray-50">
					<div class="space-y-2">
						<h4 class="text-2xl font-bold">Pro</h4>
						<span class="text-6xl font-bold">$24
							<span class="text-sm tracki">/month</span>
						</span>
					</div>
					<p class="leadi">Morbi cursus ut sapien sit amet consectetur.</p>
					<ul class="flex-1 space-y-2">
						<li class="flex items-center space-x-2">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="flex-shrink-0 w-6 h-6">
								<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
							</svg>
							<span>Everything in Free</span>
						</li>
						<li class="flex items-center space-x-2">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="flex-shrink-0 w-6 h-6">
								<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
							</svg>
							<span>Phasellus tellus</span>
						</li>
						<li class="flex items-center space-x-2">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="flex-shrink-0 w-6 h-6">
								<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
							</svg>
							<span>Praesent faucibus</span>
						</li>
						<li class="flex items-center space-x-2">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="flex-shrink-0 w-6 h-6">
								<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
							</svg>
							<span>Aenean et lectus blandit</span>
						</li>
					</ul>
					<a rel="noopener noreferrer" href="#" class="inline-block w-full px-5 py-3 font-bold tracki text-center rounded bg-gray-100 text-violet-600">Get Started</a>
				</div>
			</div>
			<div class="flex w-full mb-8 sm:px-4 md:w-1/2 lg:w-1/3 lg:mb-0">
				<div class="flex flex-grow flex-col p-6 space-y-6 rounded shadow sm:p-8 bg-gray-50">
					<div class="space-y-2">
						<h4 class="text-2xl font-bold">Team</h4>
						<span class="text-6xl font-bold">$72
							<span class="text-sm tracki">/month</span>
						</span>
					</div>
					<p class="leadi text-gray-600">Phasellus ultrices bibendum nibh in vehicula.</p>
					<ul class="space-y-2 text-gray-600">
						<li class="flex items-start space-x-2">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="flex-shrink-0 w-6 h-6 text-violet-600">
								<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
							</svg>
							<span>Everything in Pro</span>
						</li>
						<li class="flex items-start space-x-2">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="flex-shrink-0 w-6 h-6 text-violet-600">
								<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
							</svg>
							<span>Fusce sem ligula</span>
						</li>
						<li class="flex items-start space-x-2">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="flex-shrink-0 w-6 h-6 text-violet-600">
								<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
							</svg>
							<span>Curabitur dictum</span>
						</li>
						<li class="flex items-start space-x-2">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="flex-shrink-0 w-6 h-6 text-violet-600">
								<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
							</svg>
							<span>Duis odio eros</span>
						</li>
						<li class="flex items-start space-x-2">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="flex-shrink-0 w-6 h-6 text-violet-600">
								<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
							</svg>
							<span>Vivamus ut lectus ex</span>
						</li>
					</ul>
					<a rel="noopener noreferrer" href="#" class="inline-block w-full px-5 py-3 font-semibold tracki text-center rounded bg-violet-600 text-gray-50">Get Started</a>
				</div>
			</div>
		</div>
	</div>
</section>







<section class="py-8 leading-7 text-gray-900 bg-white sm:py-12 md:py-16 lg:py-24">
    <div class="box-border px-4 mx-auto border-solid sm:px-6 md:px-6 lg:px-8 max-w-7xl">
        <div class="flex flex-col items-center leading-7 text-center text-gray-900 border-0 border-gray-200">
            <h2 class="box-border m-0 text-3xl font-semibold leading-tight tracking-tight text-black border-solid sm:text-4xl md:text-5xl">
                Simple, Transparent Pricing
            </h2>
            <p class="box-border mt-2 text-xl text-gray-900 border-solid sm:text-2xl">
                Pricing to fit the needs of any companie size.
            </p>
        </div>
        <div class="grid grid-cols-1 gap-4 mt-4 leading-7 text-gray-900 border-0 border-gray-200 sm:mt-6 sm:gap-6 md:mt-8 md:gap-0 lg:grid-cols-3">
            <!-- Price 1 -->
            <div class="relative z-10 flex flex-col items-center max-w-md p-4 mx-auto my-0 border border-solid rounded-lg lg:-mr-3 sm:my-0 sm:p-6 md:my-8 md:p-8" data-rounded="rounded-lg" data-rounded-max="rounded-full">
                <h3 class="m-0 text-2xl font-semibold leading-tight tracking-tight text-black border-0 border-gray-200 sm:text-3xl md:text-4xl">
                    Starter
                </h3>
                <div class="flex items-end mt-6 leading-7 text-gray-900 border-0 border-gray-200">
                    <p class="box-border m-0 text-6xl font-semibold leading-none border-solid">
                        $5
                    </p>
                    <p class="box-border m-0 border-solid" style="border-image: initial;">
                        / month
                    </p>
                </div>
                <p class="mt-6 mb-5 text-base leading-normal text-left text-gray-900 border-0 border-gray-200">
                    Ideal for Startups and Small Companies
                </p>
                <ul class="flex-1 p-0 mt-4 ml-5 leading-7 text-gray-900 border-0 border-gray-200">
                    <li class="inline-flex items-center block w-full mb-2 ml-5 font-semibold text-left border-solid">
                        <svg class="w-5 h-5 mr-2 font-semibold leading-7 text-blue-600 sm:h-5 sm:w-5 md:h-6 md:w-6" data-primary="blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Automated Reporting
                    </li>
                    <li class="inline-flex items-center block w-full mb-2 ml-5 font-semibold text-left border-solid">
                        <svg class="w-5 h-5 mr-2 font-semibold leading-7 text-blue-600 sm:h-5 sm:w-5 md:h-6 md:w-6" data-primary="blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Faster Processing
                    </li>
                    <li class="inline-flex items-center block w-full mb-2 ml-5 font-semibold text-left border-solid">
                        <svg class="w-5 h-5 mr-2 font-semibold leading-7 text-blue-600 sm:h-5 sm:w-5 md:h-6 md:w-6" data-primary="blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Customizations
                    </li>
                </ul>
                <button class="inline-flex justify-center w-full px-4 py-3 mt-8 font-sans text-sm leading-none text-center text-blue-600 no-underline bg-transparent border border-blue-600 rounded-md cursor-pointer hover:bg-blue-700 hover:border-blue-700 hover:text-white focus-within:bg-blue-700 focus-within:border-blue-700 focus-within:text-white sm:text-base md:text-lg" data-primary="blue-600" data-rounded="rounded-md">
                    Select Plan
                </button>
            </div>
            <!-- Price 2 -->
            <div class="relative z-20 flex flex-col items-center max-w-md p-4 mx-auto my-0 bg-white border-4 border-blue-600 border-solid rounded-lg sm:p-6 md:px-8 md:py-16" data-primary="blue-600" data-rounded="rounded-md" data-rounded-max="rounded-full">
                <h3 class="m-0 text-2xl font-semibold leading-tight tracking-tight text-black border-0 border-gray-200 sm:text-3xl md:text-4xl">
                    Basic
                </h3>
                <div class="flex items-end mt-6 leading-7 text-gray-900 border-0 border-gray-200">
                    <p class="box-border m-0 text-6xl font-semibold leading-none border-solid">
                        $15
                    </p>
                    <p class="box-border m-0 border-solid" style="border-image: initial;">
                        / month
                    </p>
                </div>
                <p class="mt-6 mb-5 text-base leading-normal text-left text-gray-900 border-0 border-gray-200">
                    Ideal for medium-size businesses to larger businesses
                </p>
                <ul class="flex-1 p-0 mt-4 leading-7 text-gray-900 border-0 border-gray-200">
                    <li class="inline-flex items-center block w-full mb-2 ml-5 font-semibold text-left border-solid">
                        <svg class="w-5 h-5 mr-2 font-semibold leading-7 text-blue-600 sm:h-5 sm:w-5 md:h-6 md:w-6" data-primary="blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Everything in Starter
                    </li>
                    <li class="inline-flex items-center block w-full mb-2 ml-5 font-semibold text-left border-solid">
                        <svg class="w-5 h-5 mr-2 font-semibold leading-7 text-blue-600 sm:h-5 sm:w-5 md:h-6 md:w-6" data-primary="blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        100 Builds
                    </li>
                    <li class="inline-flex items-center block w-full mb-2 ml-5 font-semibold text-left border-solid">
                        <svg class="w-5 h-5 mr-2 font-semibold leading-7 text-blue-600 sm:h-5 sm:w-5 md:h-6 md:w-6" data-primary="blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Progress Reports
                    </li>
                    <li class="inline-flex items-center block w-full mb-2 ml-5 font-semibold text-left border-solid">
                        <svg class="w-5 h-5 mr-2 font-semibold leading-7 text-blue-600 sm:h-5 sm:w-5 md:h-6 md:w-6" data-primary="blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Premium Support
                    </li>
                </ul>
                <button class="inline-flex justify-center w-full px-4 py-3 mt-8 font-sans text-sm leading-none text-center text-white no-underline bg-blue-600 border rounded-md cursor-pointer hover:bg-blue-700 hover:border-blue-700 hover:text-white focus-within:bg-blue-700 focus-within:border-blue-700 focus-within:text-white sm:text-base md:text-lg" data-primary="blue-600" data-rounded="rounded-md">
                    Select Plan
                </button>
            </div>
            <!-- Price 3 -->
            <div class="relative z-10 flex flex-col items-center max-w-md p-4 mx-auto my-0 border border-solid rounded-lg lg:-ml-3 sm:my-0 sm:p-6 md:my-8 md:p-8" data-rounded="rounded-lg" data-rounded-max="rounded-full">
                <h3 class="m-0 text-2xl font-semibold leading-tight tracking-tight text-black border-0 border-gray-200 sm:text-3xl md:text-4xl">
                    Plus
                </h3>
                <div class="flex items-end mt-6 leading-7 text-gray-900 border-0 border-gray-200">
                    <p class="box-border m-0 text-6xl font-semibold leading-none border-solid">
                        $25
                    </p>
                    <p class="box-border m-0 border-solid" style="border-image: initial;">
                        / month
                    </p>
                </div>
                <p class="mt-6 mb-5 text-base leading-normal text-left text-gray-900 border-0 border-gray-200">
                    Ideal for larger and enterprise companies
                </p>
                <ul class="flex-1 p-0 mt-4 leading-7 text-gray-900 border-0 border-gray-200">
                    <li class="inline-flex items-center block w-full mb-2 ml-5 font-semibold text-left border-solid">
                        <svg class="w-5 h-5 mr-2 font-semibold leading-7 text-blue-600 sm:h-5 sm:w-5 md:h-6 md:w-6" data-primary="blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Everything in Basic
                    </li>
                    <li class="inline-flex items-center block w-full mb-2 ml-5 font-semibold text-left border-solid">
                        <svg class="w-5 h-5 mr-2 font-semibold leading-7 text-blue-600 sm:h-5 sm:w-5 md:h-6 md:w-6" data-primary="blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Unlimited Builds
                    </li>
                    <li class="inline-flex items-center block w-full mb-2 ml-5 font-semibold text-left border-solid">
                        <svg class="w-5 h-5 mr-2 font-semibold leading-7 text-blue-600 sm:h-5 sm:w-5 md:h-6 md:w-6" data-primary="blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Advanced Analytics
                    </li>
                    <li class="inline-flex items-center block w-full mb-2 ml-5 font-semibold text-left border-solid">
                        <svg class="w-5 h-5 mr-2 font-semibold leading-7 text-blue-600 sm:h-5 sm:w-5 md:h-6 md:w-6" data-primary="blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Company Evaluations
                    </li>
                </ul>
                <button class="inline-flex justify-center w-full px-4 py-3 mt-8 font-sans text-sm leading-none text-center text-blue-600 no-underline bg-transparent border border-blue-600 rounded-md cursor-pointer hover:bg-blue-700 hover:border-blue-700 hover:text-white focus-within:bg-blue-700 focus-within:border-blue-700 focus-within:text-white sm:text-base md:text-lg" data-primary="blue-600" data-rounded="rounded-md">
                    Select Plan
                </button>
            </div>
        </div>
    </div>
</section>







<section class="py-12 sm:py-16 bg-white">
    <div class="max-w-7xl px-10 mx-auto sm:text-center">
        <p class="text-blue-500 font-medium uppercase">Our Application Integrations</p>
        <h2 class="font-bold text-3xl sm:text-4xl lg:text-5xl mt-3">Connect with Your Favorite Apps.</h2>
        <p class="mt-4 text-gray-500 text-base sm:text-xl lg:text-2xl">We've built integrations with some of your favorite services.<br class="lg:hidden hidden sm:block"> Check'em out below 👇</p>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10 my-12 sm:my-16">
            <div class="rounded-lg py-10 flex flex-col items-center justify-center shadow-lg border border-gray-100">
                <svg class="w-16 h-auto" viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid"><path d="M159.999 128.056a76.55 76.55 0 0 1-4.915 27.024 76.745 76.745 0 0 1-27.032 4.923h-.108c-9.508-.012-18.618-1.75-27.024-4.919A76.557 76.557 0 0 1 96 128.056v-.112a76.598 76.598 0 0 1 4.91-27.02A76.492 76.492 0 0 1 127.945 96h.108a76.475 76.475 0 0 1 27.032 4.923 76.51 76.51 0 0 1 4.915 27.02v.112zm94.223-21.389h-74.716l52.829-52.833a128.518 128.518 0 0 0-13.828-16.349v-.004a129 129 0 0 0-16.345-13.816l-52.833 52.833V1.782A128.606 128.606 0 0 0 128.064 0h-.132c-7.248.004-14.347.62-21.265 1.782v74.716L53.834 23.665A127.82 127.82 0 0 0 37.497 37.49l-.028.02A128.803 128.803 0 0 0 23.66 53.834l52.837 52.833H1.782S0 120.7 0 127.956v.088c0 7.256.615 14.367 1.782 21.289h74.716l-52.837 52.833a128.91 128.91 0 0 0 30.173 30.173l52.833-52.837v74.72a129.3 129.3 0 0 0 21.24 1.778h.181a129.15 129.15 0 0 0 21.24-1.778v-74.72l52.838 52.837a128.994 128.994 0 0 0 16.341-13.82l.012-.012a129.245 129.245 0 0 0 13.816-16.341l-52.837-52.833h74.724c1.163-6.91 1.77-14 1.778-21.24v-.186c-.008-7.24-.615-14.33-1.778-21.24z" fill="#FF4A00"/></svg>
                <p class="font-bold mt-4">Zapier</p>
                <p class="mt-2 text-sm text-gray-500">Connect to 1,000+ apps</p>
            </div>
            <div class="rounded-lg py-10 flex flex-col items-center justify-center shadow-lg border border-gray-100">
                <svg class="w-16 h-auto" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M19.712.133a5.381 5.381 0 0 0-5.376 5.387 5.381 5.381 0 0 0 5.376 5.386h5.376V5.52A5.381 5.381 0 0 0 19.712.133m0 14.365H5.376A5.381 5.381 0 0 0 0 19.884a5.381 5.381 0 0 0 5.376 5.387h14.336a5.381 5.381 0 0 0 5.376-5.387 5.381 5.381 0 0 0-5.376-5.386" fill="#36C5F0"/><path d="M53.76 19.884a5.381 5.381 0 0 0-5.376-5.386 5.381 5.381 0 0 0-5.376 5.386v5.387h5.376a5.381 5.381 0 0 0 5.376-5.387m-14.336 0V5.52A5.381 5.381 0 0 0 34.048.133a5.381 5.381 0 0 0-5.376 5.387v14.364a5.381 5.381 0 0 0 5.376 5.387 5.381 5.381 0 0 0 5.376-5.387" fill="#2EB67D"/><path d="M34.048 54a5.381 5.381 0 0 0 5.376-5.387 5.381 5.381 0 0 0-5.376-5.386h-5.376v5.386A5.381 5.381 0 0 0 34.048 54m0-14.365h14.336a5.381 5.381 0 0 0 5.376-5.386 5.381 5.381 0 0 0-5.376-5.387H34.048a5.381 5.381 0 0 0-5.376 5.387 5.381 5.381 0 0 0 5.376 5.386" fill="#ECB22E"/><path d="M0 34.249a5.381 5.381 0 0 0 5.376 5.386 5.381 5.381 0 0 0 5.376-5.386v-5.387H5.376A5.381 5.381 0 0 0 0 34.25m14.336-.001v14.364A5.381 5.381 0 0 0 19.712 54a5.381 5.381 0 0 0 5.376-5.387V34.25a5.381 5.381 0 0 0-5.376-5.387 5.381 5.381 0 0 0-5.376 5.387" fill="#E01E5A"/></g></svg>
                <p class="font-bold mt-4">Slack</p>
                <p class="mt-2 text-sm text-gray-500">Messaging Platform</p>
            </div>
            <div class="rounded-lg py-10 flex flex-col items-center justify-center shadow-lg border border-gray-100">
                <svg class="w-16 h-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 250 262" fill="none"><path d="M192.277 86.567V55.5a23.953 23.953 0 0 0 13.815-21.594v-.727a23.998 23.998 0 0 0-23.934-23.934h-.726a24 24 0 0 0-23.935 23.934v.727A23.949 23.949 0 0 0 171.312 55.5v31.132a67.887 67.887 0 0 0-32.278 14.202l-85.44-66.541A27.259 27.259 0 1 0 40.828 50.9l84.004 65.395a68.079 68.079 0 0 0 1.049 76.757l-25.564 25.565a21.93 21.93 0 0 0-6.343-1.033 22.187 22.187 0 0 0-20.502 13.699 22.19 22.19 0 1 0 42.693 8.492 21.858 21.858 0 0 0-1.033-6.343l25.29-25.29a68.198 68.198 0 0 0 58.778 11.746 68.196 68.196 0 0 0 45.342-39.203 68.198 68.198 0 0 0-3.13-59.858 68.188 68.188 0 0 0-49.183-34.26h.048Zm-10.523 102.354a34.988 34.988 0 0 1-34.225-41.871 34.99 34.99 0 0 1 69.295 6.898 34.99 34.99 0 0 1-34.989 34.989" fill="#FF7A59"/></svg>
                <p class="font-bold mt-4">Hubspot</p>
                <p class="mt-2 text-sm text-gray-500">Customer Relations</p>
            </div>
            <div class="rounded-lg py-10 flex flex-col items-center justify-center shadow-lg border border-gray-100">
                <svg class="w-16 h-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 250 190" fill="none"><path d="M115.482 49.956V189.13H0L115.482 49.956ZM115.482 0A57.587 57.587 0 0 1 98.57 40.756a57.793 57.793 0 0 1-40.83 16.882c-15.313 0-30-6.073-40.828-16.882A57.586 57.586 0 0 1 0 0h115.482ZM134.507 189.13a57.586 57.586 0 0 1 16.912-40.757 57.792 57.792 0 0 1 40.829-16.881c15.313 0 30 6.072 40.828 16.881a57.586 57.586 0 0 1 16.912 40.757H134.507ZM134.507 139.174V0h115.494L134.507 139.174Z" fill="#03363D"/></svg>
                <p class="font-bold mt-4">Zendesk</p>
                <p class="mt-2 text-sm text-gray-500">Customer Messaging</p>
            </div>
            <div class="rounded-lg py-10 flex flex-col items-center justify-center shadow-lg border border-gray-100">
                <svg class="w-16 h-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 250 215" fill="none"><path d="M0 162.02V69.962c0-3.137 3.137-5.378 6.095-4.302l106.849 41.592c3.047 1.165 3.316 5.378.448 6.812L6.633 166.144C3.585 167.668 0 165.427 0 162.02Z" fill="#F82B60"/><path d="M123.611 94.792 16.942 51.766c-3.406-1.434-3.406-6.275 0-7.709L119.31 1.479c4.661-1.972 9.95-1.972 14.7 0l102.367 42.578c3.406 1.434 3.406 6.275 0 7.709L130.155 94.792a8.3 8.3 0 0 1-6.544 0Z" fill="#FCB400"/><path d="m139.835 214.369 107.386-41.323c1.703-.628 2.778-2.241 2.778-4.034V69.424c0-3.047-2.958-5.11-5.736-4.033l-107.387 41.323c-1.703.627-2.778 2.241-2.778 4.033v99.588c0 3.048 2.958 5.109 5.737 4.034Z" fill="#18BFFF"/><path d="M112.944 107.252 6.095 65.66c-1.434-.538-2.868-.269-4.033.448l75.295 65.525 36.035-17.569c2.868-1.523 2.599-5.736-.448-6.812Z" fill="#BA2048"/></svg>
                <p class="font-bold mt-4">Airtable</p>
                <p class="mt-2 text-sm text-gray-500">Data Management</p>
            </div>
            <div class="rounded-lg py-10 flex flex-col items-center justify-center shadow-lg border border-gray-100">
                <svg class="w-16 h-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 250 250" fill="none"><path d="m146.101 236.335-42.529-41.47 91.337-93.269 44.032 43.155-92.84 91.584Z" fill="#8AB4F8"/><path d="M146.283 52.982 103.907 9.717l-92.659 91.779c-11.944 11.944-11.944 31.308 0 43.265l91.267 91.863 43.156-40.37-69.536-73.125 70.148-70.147Z" fill="#4285F4"/><path d="M238.329 102.209 146.45 10.332c-11.958-11.957-31.35-11.957-43.308 0-11.959 11.958-11.959 31.35 0 43.308l91.879 91.876c11.958 11.958 31.35 11.958 43.308 0 11.959-11.958 11.959-31.349 0-43.307Z" fill="#8AB4F8"/><path d="M124.092 246.372c16.53 0 29.93-13.4 29.93-29.93 0-16.529-13.4-29.929-29.93-29.929-16.531 0-29.93 13.4-29.93 29.929 0 16.53 13.399 29.93 29.93 29.93Z" fill="#246FDB"/></svg>
                <p class="font-bold mt-4">Google Tag Manager</p>
                <p class="mt-2 text-sm text-gray-500">Web Tag Manager</p>
            </div>
            <div class="rounded-lg py-10 flex flex-col items-center justify-center shadow-lg border border-gray-100">
                <svg class="w-16 h-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve"><path d="M362.9 243.5c3.1-.4 6.2-.4 9.3 0 1.7-3.8 2-10.5.5-17.6-2.2-10.7-5.3-17.2-11.5-16.2s-6.5 8.8-4.2 19.5c1.1 5.9 3.4 11.1 5.9 14.3zm-53.7 8.5c4.5 2 7.2 3.3 8.3 2.1 1.9-1.9-3.5-9.4-12.1-13.1-10.2-4.2-21.8-2.8-30.7 3.7-3 2.2-5.8 5.2-5.4 7.1.9 3.7 10-2.7 22.7-3.5 6.9-.5 12.7 1.7 17.2 3.7zm-9 5.1c-9.1 1.4-15 6.5-13.5 10.1.9.3 1.2.8 5.2-.8 6-2.3 12.4-2.9 18.8-2 2.9.3 4.3.5 5-.5 1.3-2.1-5.8-7.9-15.5-6.8zm54.2 17.2c3.4-6.9-10.9-14-14.3-7-3.4 6.9 11 13.9 14.3 7zm15.7-20.5c-7.7-.1-8 15.8-.3 16 7.8 0 8.1-15.9.3-16zm-219.2 79c-1.3.3-6 1.5-8.5-2.4-5.2-8 11.1-20.4 3-35.9-9.1-17.5-27.9-13.6-35.1-5.6-8.7 9.6-8.7 23.6-5 24.1 4.3.6 4.1-6.5 7.4-11.7 3.9-6 11.8-7.7 17.8-3.8 0 0 .1 0 .1.1 11.6 7.6 1.4 17.8 2.3 28.7 1.4 16.7 18.5 16.4 21.6 9 .4-.7.3-1.7-.2-2.3 0 1.1.6-1.1-3.4-.2zm300.4-17.1c-3.4-11.8-2.6-9.2-6.8-20.6 2.5-3.7 15.3-24.1-3.1-43.3-10.4-10.9-34-16.6-41.2-18.6-1.5-11.4 4.7-58.8-21.6-83.2 20.8-21.6 33.8-45.4 33.8-65.8-.1-39.2-48.3-51.1-107.7-26.5L292.1 63c-.1-.1-22.8-22.3-23.1-22.6-67.6-59-279.4 176.3-211.7 233.5l14.8 12.5c-4 10.7-5.4 22.2-4.1 33.6 3.4 33.5 36.1 60.6 67.7 60.5 57.9 133.4 268.5 133.6 323 3 1.7-4.5 9.1-24.7 9.1-42.5s-10.1-25.3-16.5-25.3zM134.5 364c-22.9-.6-47.6-21.2-50-45.6-6.2-61.4 74.4-75.4 84.2-12.4 4.6 29.7-4.7 58.6-34.2 58zM116 249.5c-15.2 3-28.6 11.6-36.8 23.5-4.9-4.1-14-12-15.6-15-13-24.9 14.3-73.2 33.4-100.4C144.2 90.2 218.1 39.2 252.4 48.4c5.6 1.6 24 22.9 24 22.9s-34.2 19-65.9 45.5c-42.9 33-75.2 80.8-94.5 132.7zm239.4 101.4s-35.8 5.3-69.7-7.1c6.2-20.2 27.1 6.1 96.6-13.8 15.3-4.4 35.4-13 51.1-25.4 3.4 7.8 5.8 16 7.1 24.3 3.7-.7 14.3-.5 11.5 18.1-3.3 19.9-11.8 36.1-26 51-8.9 9.6-19.5 17.6-31.2 23.4-6.5 3.4-13.4 6.3-20.4 8.6-53.6 17.5-108.5-1.7-126.3-43.1-1.4-3.2-2.6-6.4-3.6-9.8-7.5-27.3-1.1-60 18.9-80.6 1.2-1.3 2.5-2.9 2.5-4.8-.2-1.7-.8-3.3-1.9-4.6-7-10.2-31.3-27.5-26.4-61 3.5-24.1 24.5-41 44.2-40l5 .3c8.5.5 15.9 1.6 22.9 1.9 11.7.5 22.3-1.2 34.7-11.6 4.2-3.5 7.6-6.6 13.3-7.5 4.7-1.2 9.6-.3 13.6 2.2 10 6.7 11.4 22.8 11.9 34.6.3 6.7 1.1 23.1 1.4 27.7.6 10.7 3.4 12.2 9.1 14 3.2 1.1 6.2 1.8 10.5 3.1 13.2 3.7 21 7.5 26.1 12.3 2.6 2.5 4.2 5.8 4.8 9.3 1.6 11.4-8.8 25.5-36.4 38.2-46.8 21.7-93.9 14.5-100.7 13.7-20.2-2.7-31.7 23.4-19.6 41.2 22.7 33.5 122.7 20 151.7-21.4.7-1 .1-1.6-.7-1-41.9 28.6-97.3 38.3-128.8 26.1-4.8-1.9-14.8-6.5-16-16.7 43.7 13.5 71.2.7 71.2.7s2.2-2.6-.4-2.3zM203.2 157.3c16.8-19.4 37.4-36.3 56-45.7.3-.2.8-.1 1 .3.1.2.1.5 0 .7-1.5 2.7-4.3 8.4-5.2 12.7-.1.4.2.8.6.9.2.1.4 0 .6-.1 11.5-7.8 31.6-16.3 49.1-17.3.4 0 .8.3.8.7 0 .3-.1.5-.3.7-2.9 2.2-5.5 4.8-7.7 7.8-.2.3-.2.8.2 1 .1.1.3.1.4.1 12.3.1 29.7 4.4 41.1 10.8.8.4.2 1.9-.6 1.7-69.7-16-123.4 18.6-134.8 26.9-.4.2-.8.1-1.1-.2-.3-.4-.3-.8-.1-1z"/></svg>
                <p class="font-bold mt-4">Mailchimp</p>
                <p class="mt2 text-sm text-gray-500">Email Marketing</p>
            </div>
            <div class="rounded-lg py-10 flex flex-col items-center justify-center shadow-lg border border-gray-100">
                <svg class="h-16 w-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 250 343" fill="none"><path d="M163.818 0H23.736C10.59 0 0 10.663 0 23.736v294.771c0 13.146 10.663 23.737 23.736 23.737H226.19c13.147 0 23.737-10.664 23.737-23.737V85.159h-86.109V0Z" fill="#34A853"/><path d="M250.001 85.16h-86.182V0l86.182 85.16Z" fill="#188038"/><path d="M46.89 132.194V245.18h156.149V132.194H46.889Zm136.722 19.354v27.388h-49.08v-27.388h49.08Zm-68.507 0v27.388H66.317v-27.388h48.788Zm-48.788 74.131v-27.388h48.788v27.388H66.317Zm68.215 0v-27.388h49.08v27.388h-49.08Z" fill="#fff"/></svg>
                <p class="font-bold mt-4">Google Sheets</p>
                <p class="mt-2 text-sm text-gray-500">Spreadsheet</p>
            </div>
        </div>
        <a href="#_" class="px-8 py-4 sm:w-auto w-full text-center text-base font-medium inline-block rounded text-white hover:bg-blue-600 bg-blue-500">View All Integrations</a>
    </div>
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
<?php endif; ?><?php /**PATH C:\laragon\www\phpPortfolioApp\resources\views/pages/services.blade.php ENDPATH**/ ?>