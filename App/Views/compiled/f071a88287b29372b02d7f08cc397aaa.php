    <div class="mx-auto max-w-7xl">
        <nav x-data="{ isOpen: false }" class="bg-white px-6 shadow dark:bg-gray-800">
            <div class="container px-6 py-3 mx-auto md:flex">
                <div class="flex items-center justify-between nav-item">
                    <a href="<?php echo e(route('homepage')); ?>" class="text-orange-600 font-semibold">
                        
                        PHPWebApp
                    </a>

                    <!-- Mobile menu button -->
                    <div class="flex lg:hidden">
                        <button x-cloak @click="isOpen = !isOpen" type="button" class="text-gray-500 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none focus:text-gray-600 dark:focus:text-gray-400" aria-label="toggle menu">
                            <svg x-show="!isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 8h16M4 16h16" />
                            </svg>
                    
                            <svg x-show="isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
                <div x-cloak :class="[isOpen ? 'translate-x-0 opacity-100 ' : 'opacity-0 -translate-x-full']" class="absolute inset-x-0 z-20 w-full px-6 py-4 transition-all duration-300 ease-in-out bg-white dark:bg-gray-800 md:mt-0 md:p-0 md:top-0 md:relative md:opacity-100 md:translate-x-0 md:flex md:items-center md:justify-between">
                    <div class="flex flex-col px-2 -mx-4 md:flex-row md:mx-10">

                        <li class="nav-item list-none text-gray-700 transition-colors duration-300 transform dark:text-gray-200 <?php echo e(is_current_route('about') ? '' : 'btn-text-links'); ?>">
                            <a href="<?php echo e(is_current_route('about') ? 'javascript:void(0)' : route('about')); ?>" class="px-2.5 py-2 md:mx-2 font-semibold <?php echo e(is_current_route('about') ? 'active font-semibold cursor-default' : 'hover:text-primary'); ?>">About</a>
                        </li>

                        <li class="nav-item list-none text-gray-700 transition-colors duration-300 transform dark:text-gray-200 <?php echo e(is_current_route('portfolio') ? '' : 'btn-text-links'); ?>">
                            <a href="<?php echo e(is_current_route('portfolio') ? 'javascript:void(0)' : route('portfolio')); ?>" class="px-2.5 py-2 md:mx-2 font-semibold <?php echo e(is_current_route('portfolio') ? 'active font-semibold cursor-default' : 'hover:text-primary'); ?>">Portfolio</a>
                        </li>

                        <li class="nav-item list-none text-gray-700 transition-colors duration-300 transform dark:text-gray-200 <?php echo e(is_current_route('services') ? '' : 'btn-text-links'); ?>">
                            <a href="<?php echo e(is_current_route('services') ? 'javascript:void(0)' : route('services')); ?>" class="px-2.5 py-2 md:mx-2 font-semibold <?php echo e(is_current_route('services') ? 'active font-semibold cursor-default' : 'hover:text-primary'); ?>">Services</a>
                        </li>

                        <li class="nav-item list-none text-gray-700 transition-colors duration-300 transform dark:text-gray-200 <?php echo e(is_current_route('testimonials') ? '' : 'btn-text-links'); ?>">
                            <a href="<?php echo e(is_current_route('testimonials') ? 'javascript:void(0)' : route('testimonials')); ?>" class="px-2.5 py-2 md:mx-2 font-semibold <?php echo e(is_current_route('testimonials') ? 'active font-semibold cursor-default' : 'hover:text-primary'); ?>">Testimonials</a>
                        </li>
                    </div>

                    <div class="flex flex-col px-2 -mx-4 md:flex-row md:mx-10">
                        <?php if (isset($component)) { $__componentOriginald3180c69b32c04d918b752f9f32060db = $component; } ?>
<?php $component = App\Http\Controllers\Components\Globals\FrontEnd\DropdownUser::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('globals.frontend.dropdown-user'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\Http\Controllers\Components\Globals\FrontEnd\DropdownUser::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald3180c69b32c04d918b752f9f32060db)): ?>
<?php $component = $__componentOriginald3180c69b32c04d918b752f9f32060db; ?>
<?php unset($__componentOriginald3180c69b32c04d918b752f9f32060db); ?>
<?php endif; ?>
                    </div>
                    
                </div>
            </div>
        </nav>
    </div>





<?php /**PATH C:\laragon\www\phpPortfolioApp\App\Views/components/navbar/primary-links.blade.php ENDPATH**/ ?>