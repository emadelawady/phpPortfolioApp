<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.admins.adminLayout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layouts.admins.adminLayout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>



<section class="mb-20">
    <div class="bg-white py-6 sm:py-8 lg:py-12">
        <div class="mx-auto max-w-screen-2xl px-4 md:px-8">

            <div class="flex flex-wrap mb-5">
                <a class="bg-primary text-white py-1 px-3 my-6 rounded-md" href="<?php echo e(route('admin.blog.index')); ?>">
                <span class="bg-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                    </svg>
                </span>
                </a>
            </div>

            <p class="mb-2 font-semibold text-indigo-500 md:mb-3 lg:text-lg">Introducing</p>

            <h2 class="mb-4 text-2xl font-bold text-gray-800 md:mb-6 lg:text-3xl">
                <?php echo e($blog->title); ?>

            </h2>

            
        </div>
    </div>



<div class="flow-root rounded-lg border border-gray-100 py-3 shadow-sm">
  <dl class="-my-3 divide-y divide-gray-100 text-sm">
    <div
      class="grid grid-cols-1 gap-1 p-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4"
    >
      <dt class="font-medium text-gray-900">Featured Image</dt>
      <dd class="text-gray-700 sm:col-span-2">
        <img class="w-40 rounded-xl" src="<?php echo e(public_path("assets/images/portfolio/$blog->featured_image")); ?>" alt="">
      </dd>
    </div>
    <div
      class="grid grid-cols-1 gap-1 p-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4"
    >
      <dt class="font-medium text-gray-900">Title</dt>
      <dd class="text-gray-700 sm:col-span-2">
        <?php echo e($blog->title); ?>

      </dd>
    </div>

    <div
      class="grid grid-cols-1 gap-1 p-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4"
    >
      <dt class="font-medium text-gray-900">Rate</dt>
      <dd class="text-gray-700 sm:col-span-2">
        <?php echo e($blog->rate); ?>

      </dd>
    </div>

    <div
      class="grid grid-cols-1 gap-1 p-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4"
    >
      <dt class="font-medium text-gray-900">Tags</dt>
      <dd class="text-gray-700 sm:col-span-2">
        <?php echo e($blog->tags); ?>

      </dd>
    </div>

    <div
      class="grid grid-cols-1 gap-1 p-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4"
    >
      <dt class="font-medium text-gray-900">Salary</dt>
      <dd class="text-gray-700 sm:col-span-2">$1,000,000+</dd>
    </div>

    <div
      class="grid grid-cols-1 gap-1 p-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4"
    >
      <dt class="font-medium text-gray-900">Content</dt>
      <dd class="text-gray-700 sm:col-span-2">
            <?php echo e($blog->content); ?>

      </dd>
    </div>
  </dl>
</div>


 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?><?php /**PATH C:\laragon\www\phpPortfolioApp\App\Views/admins/blog/show.blade.php ENDPATH**/ ?>