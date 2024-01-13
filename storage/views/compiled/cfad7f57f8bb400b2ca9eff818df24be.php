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





<section class="p-6 py-20 dark:bg-gray-800 dark:text-gray-50">
	<form novalidate="" action="<?php echo e(route('admin.settings.homepage')); ?>" method="POST" class="container flex flex-col mx-auto space-y-12">
		<fieldset class="grid grid-cols-4 gap-6 p-6 rounded-md shadow-sm dark:bg-gray-900">
			<div class="space-y-2 col-span-full lg:col-span-1">
				<p class="font-bold text-lg text-primary">Home Page Hero Settings</p>
				<p class="text-xs">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci fuga autem eum!</p>
			</div>
			<div class="grid grid-cols-6 gap-4 col-span-full lg:col-span-3">
				<div class="col-span-full sm:col-span-3">
					<label
						for="firstname"
						class="block mt-2 text-sm font-medium text-gray-700"
					>
						Heading
					</label>

					<input
					id="firstname"
					name="head_one"
					type="text"
					class="w-full rounded-md dark:border-gray-700 dark:text-gray-900"
					value="<?php echo e($homepage_hero_settings->head_one); ?>"
					>
				</div>
				<div class="col-span-full sm:col-span-3">

					<label
						for="lastname"
						class="block mt-2 text-sm font-medium text-gray-700"
					>
						Heading plus
					</label>

					<input
						id="lastname"
						name="head_two"
						type="text"
						placeholder="Heading plus"
						class="w-full rounded-md dark:border-gray-700 dark:text-gray-900"
						value="<?php echo e($homepage_hero_settings->head_two); ?>"
					>
				</div>
				<div class="col-span-full sm:col-span-3">
					<label
						for="custom_field_one"
						class="block mt-2 text-sm font-medium text-gray-700"
					>
						button one
					</label>

					<input
					id="custom_field_one"
					name="custom_field_one"
					type="text"
					class="w-full rounded-md dark:border-gray-700 dark:text-gray-900"
					value="<?php echo e($homepage_hero_settings->custom_field_one); ?>"
					>
				</div>
				<div class="col-span-full sm:col-span-3">

					<label
						for="custom_link_one"
						class="block mt-2 text-sm font-medium text-gray-700"
					>
						Link
					</label>

					<input
						id="custom_link_one"
						type="text"
						name="custom_link_one"
						placeholder="Heading plus"
						class="w-full rounded-md dark:border-gray-700 dark:text-gray-900"
						value="<?php echo e($homepage_hero_settings->custom_link_one); ?>"
					>
				</div>
				<div class="col-span-full sm:col-span-3">
					<label
						for="custom_field_two"
						class="block mt-2 text-sm font-medium text-gray-700"
					>
						button two
					</label>

					<input
					id="custom_field_two"
					name="custom_field_two"
					type="text"
					class="w-full rounded-md dark:border-gray-700 dark:text-gray-900"
					value="<?php echo e($homepage_hero_settings->custom_field_two); ?>"
					>
				</div>
				<div class="col-span-full sm:col-span-3">

					<label
						for="custom_link_two"
						class="block mt-2 text-sm font-medium text-gray-700"
					>
						Link
					</label>

					<input
						id="custom_link_two"
						name="custom_link_two"
						type="text"
						placeholder="Heading plus"
						class="w-full rounded-md dark:border-gray-700 dark:text-gray-900"
						value="<?php echo e($homepage_hero_settings->custom_link_two); ?>"
					>
				</div>
				<div class="col-span-full">

					<label
						for="homepage_hero_settings_description"
						class="block mt-2 text-sm font-medium text-gray-700"
					>
						Description
					</label>

					<textarea
						id="homepage_hero_settings_description"
						name="description_one"
						class="mt-2 w-full rounded-lg border-gray-200 align-top shadow-sm sm:text-sm"
						rows="4"
						placeholder="Enter any additional order notes..."
					><?php echo e($homepage_hero_settings->description_one); ?></textarea>
				</div>
				<div class="col-span-full bg-gray-300 p-2 flex flex-wrap items-center justify-start my-6">
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
<?php endif; ?>



<?php /**PATH C:\laragon\www\phpPortfolioApp\resources\views/admins/settings/homepage.blade.php ENDPATH**/ ?>