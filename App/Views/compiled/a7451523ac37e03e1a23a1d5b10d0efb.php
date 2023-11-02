<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.admins.adminLayout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layouts.admins.adminLayout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>




<section class="mt-10 mb-20">
    <div class="bg-white py-3 sm:py-4 lg:py-6">
    <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
        <p class="mb-2 font-semibold text-indigo-500 md:mb-3 lg:text-lg">Introducing</p>

        <h2 class="mb-4 text-2xl font-bold text-gray-800 md:mb-6 lg:text-3xl">Revolutionary way to build the web</h2>

        
    </div>
    </div>

    <div class="flex flex-wrap justify-end p-3 mb-6">
    <!-- Border -->

        <a
        class="inline-block rounded border border-indigo-600 px-12 py-3 text-sm font-medium text-indigo-600 hover:bg-indigo-600 hover:text-white focus:outline-none focus:ring active:bg-indigo-500"
        href="<?php echo e(route('admin.portfolio.create')); ?>"
        >
        Create
        </a>
    </div>



    <div class="overflow-x-auto">
    <table class="min-w-full divide-y-2 divide-gray-200 bg-white text-sm">
        <thead class="text-left">
        <tr>
            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
            Name
            </th>
            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
            Description
            </th>
            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
            link
            </th>
            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
            built with
            </th>
            <th class="px-4 py-2"></th>
            <th class="px-4 py-2"></th>
            <th class="px-4 py-2"></th>
        </tr>
        </thead>

        <tbody class="divide-y divide-gray-200">
        <?php $__currentLoopData = $portfolios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $portfolio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                <?php echo e($portfolio->name); ?>

            </td>
            <td class="whitespace-nowrap px-4 py-2 text-gray-700"><?php echo e($portfolio->description); ?></td>
            <td class="whitespace-nowrap px-4 py-2 text-gray-700"><?php echo e($portfolio->link); ?></td>
            <td class="whitespace-nowrap px-4 py-2 text-gray-700"><?php echo e($portfolio->built_with); ?></td>
            <td class="whitespace-nowrap px-4 py-2">
                <a
                    href="<?php echo e(route('admin.portfolio.show', ['id' => $portfolio->id])); ?>"
                    class="inline-block rounded bg-indigo-500 px-4 py-2 text-xs font-medium text-white hover:bg-indigo-700"
                >
                    View
                </a>
            </td>
            <td class="whitespace-nowrap px-4 py-2">
                <a
                    href="<?php echo e(route('admin.portfolio.edit', ['id' => $portfolio->id])); ?>"
                    class="inline-block rounded bg-green-500 px-4 py-2 text-xs font-medium text-white hover:bg-green-700"
                >
                    Edit
                </a>
            </td>
            <td class="whitespace-nowrap px-4 py-2">
                <form
                    action="<?php echo e(route('admin.portfolio.delete', ['id' => $portfolio->id])); ?>"
                    method="POST"
                    class="inline-block rounded bg-red-500 px-4 py-2 text-xs font-medium text-white hover:bg-red-700"
                >
                <input type="hidden" name="_method" value="DELETE">
                    <button>Delete</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


   
        </tbody>
    </table>
    </div>


		<?php if (isset($component)) { $__componentOriginal3bf557f4b1f8c83e51ed613d2e0a5352 = $component; } ?>
<?php $component = App\Http\Controllers\Components\Globals\Sessions\Success_with_Data::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('globals.sessions.success-id'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\Http\Controllers\Components\Globals\Sessions\Success_with_Data::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3bf557f4b1f8c83e51ed613d2e0a5352)): ?>
<?php $component = $__componentOriginal3bf557f4b1f8c83e51ed613d2e0a5352; ?>
<?php unset($__componentOriginal3bf557f4b1f8c83e51ed613d2e0a5352); ?>
<?php endif; ?>



</section>







</section>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?><?php /**PATH C:\laragon\www\phpPortfolioApp\App\Views/admins/portfolio/index.blade.php ENDPATH**/ ?>