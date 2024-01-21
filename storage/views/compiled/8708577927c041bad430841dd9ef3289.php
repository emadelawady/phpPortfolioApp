<?php if (isset($component)) { $__componentOriginal8e374fabae771e0f042f61ab4bba5379 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8e374fabae771e0f042f61ab4bba5379 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.admins.adminLayout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layouts.admins.adminLayout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>


<section class="dark:bg-gray-800 dark:text-gray-50">
    <div class="mx-auto max-w-screen-2xl mt-6 px-4 md:px-8">

        <div class="flex flex-wrap mb-3">
            <a class="bg-primary text-white py-1 px-3 my-6 rounded-md" href="<?php echo e(route('admin.users.index')); ?>">
            <span class="bg-primary">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                </svg>
            </span>
            </a>
        </div>
        <h2 class="text-2xl font-bold text-gray-800 md:mb-2 lg:text-3xl">
            <?php echo e($user->name); ?>

        </h2>

        
    </div>

	<form novalidate="" action="<?php echo e(route('admin.user.update',['id' => $user->id])); ?>" method="POST" class="container flex flex-col mx-auto space-y-6">
  <input type="hidden" name="_method" value="PATCH">
		<fieldset class="grid grid-cols-4 gap-6 p-6 rounded-md shadow-sm dark:bg-gray-900">
			<div class="space-y-2 col-span-full lg:col-span-1">
				<p class="font-bold text-lg text-primary">Testimonial</p>
				<p class="text-xs">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci fuga autem eum!</p>
			</div>
			<div class="grid grid-cols-6 gap-4 col-span-full lg:col-span-3">
				<div class="col-span-full sm:col-span-3">
					<label
						for="firstname"
						class="block mt-2 text-sm font-medium text-gray-700"
					>
						Name
					</label>

					<input
					id="firstname"
					name="name"
					type="text"
					class="w-full rounded-md dark:border-gray-700 dark:text-gray-900"
					value="<?php echo e($user->name); ?>"
					>
				</div>
				<div class="col-span-full sm:col-span-3">

					<label
						for="lastname"
						class="block mt-2 text-sm font-medium text-gray-700"
					>
						Email
					</label>

					<input
						id="lastname"
						name="email"
						type="email"
						placeholder="Heading plus"
						class="w-full rounded-md dark:border-gray-700 dark:text-gray-900"
						value="<?php echo e($user->email); ?>"
					>
				</div>

				</div>
				
				<div class="col-span-full bg-gray-300 p-2 flex flex-wrap items-center justify-start my-3">
					<!-- Base -->

					<button
						class="group relative inline-block text-sm font-medium text-indigo-600 focus:outline-none focus:ring active:text-indigo-500"
						type="submit"
					>
						<span
							class="absolute inset-0 translate-x-0.5 translate-y-0.5 bg-indigo-600 transition-transform group-hover:translate-y-0 group-hover:translate-x-0"
						></span>

						<span class="relative block border border-current bg-white px-8 py-3">
							update
						</span>
					</button>

				</div>
			
			</div>
		</fieldset>

	</form>
	<?php if(has_session('message')): ?>
		<?php if (isset($component)) { $__componentOriginal1811699cff5444317c92659701378323 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1811699cff5444317c92659701378323 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.success','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('success'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1811699cff5444317c92659701378323)): ?>
<?php $attributes = $__attributesOriginal1811699cff5444317c92659701378323; ?>
<?php unset($__attributesOriginal1811699cff5444317c92659701378323); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1811699cff5444317c92659701378323)): ?>
<?php $component = $__componentOriginal1811699cff5444317c92659701378323; ?>
<?php unset($__componentOriginal1811699cff5444317c92659701378323); ?>
<?php endif; ?>
	<?php endif; ?>

</section>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8e374fabae771e0f042f61ab4bba5379)): ?>
<?php $attributes = $__attributesOriginal8e374fabae771e0f042f61ab4bba5379; ?>
<?php unset($__attributesOriginal8e374fabae771e0f042f61ab4bba5379); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e374fabae771e0f042f61ab4bba5379)): ?>
<?php $component = $__componentOriginal8e374fabae771e0f042f61ab4bba5379; ?>
<?php unset($__componentOriginal8e374fabae771e0f042f61ab4bba5379); ?>
<?php endif; ?><?php /**PATH C:\laragon\www\phpPortfolioApp\resources\views/backend/pages/userspage/components/edit.blade.php ENDPATH**/ ?>