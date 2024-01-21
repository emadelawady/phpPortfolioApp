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
	<form novalidate="" action="" class="container flex flex-col mx-auto space-y-12">
		<fieldset class="grid grid-cols-4 gap-6 p-6 rounded-md shadow-sm dark:bg-gray-900">
			<div class="space-y-2 col-span-full lg:col-span-1">
				<p class="font-medium">About Settings</p>
				<p class="text-xs">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci fuga autem eum!</p>
			</div>
			<div class="grid grid-cols-6 gap-4 col-span-full lg:col-span-3">
				<div class="col-span-full sm:col-span-3">
					<label for="firstname" class="text-sm">First name</label>
					<input id="firstname" type="text" value="<?php echo e($user->name); ?>" class="w-full rounded-md focus:ring focus:ri focus:ri dark:border-gray-700 dark:text-gray-900">
				</div>
				<div class="col-span-full sm:col-span-3">
					<label for="lastname" class="text-sm">Last name</label>
					<input id="lastname" type="text" placeholder="Last name" class="w-full rounded-md focus:ring focus:ri focus:ri dark:border-gray-700 dark:text-gray-900">
				</div>
				<div class="col-span-full sm:col-span-3">
					<label for="email" class="text-sm">Email</label>
					<input id="email" type="email" value="<?php echo e($user->email); ?>" class="w-full rounded-md focus:ring focus:ri focus:ri dark:border-gray-700 dark:text-gray-900">
				</div>
				<div class="col-span-full">
					<label for="address" class="text-sm">Address</label>
					<input id="address" type="text" placeholder="" class="w-full rounded-md focus:ring focus:ri focus:ri dark:border-gray-700 dark:text-gray-900">
				</div>
				<div class="col-span-full sm:col-span-2">
					<label for="city" class="text-sm">City</label>
					<input id="city" type="text" placeholder="" class="w-full rounded-md focus:ring focus:ri focus:ri dark:border-gray-700 dark:text-gray-900">
				</div>
				<div class="col-span-full sm:col-span-2">
					<label for="state" class="text-sm">State / Province</label>
					<input id="state" type="text" placeholder="" class="w-full rounded-md focus:ring focus:ri focus:ri dark:border-gray-700 dark:text-gray-900">
				</div>
				<div class="col-span-full sm:col-span-2">
					<label for="zip" class="text-sm">ZIP / Postal</label>
					<input id="zip" type="text" placeholder="" class="w-full rounded-md focus:ring focus:ri focus:ri dark:border-gray-700 dark:text-gray-900">
				</div>
			</div>
		</fieldset>

	</form>
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
<?php endif; ?><?php /**PATH C:\laragon\www\phpPortfolioApp\resources\views/backend/settings/about.blade.php ENDPATH**/ ?>