    <div class="">
        <nav x-data="{ isOpen: false }" class="bg-white px-6 shadow dark:bg-gray-800">
            <div class="container px-6 py-3 mx-auto md:flex">
                <div class="flex items-center justify-between nav-item">
                    <a href="#home" class="nav-link text-orange-600 font-semibold">
                        
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
                        <li class="on_sticky list-none text-gray-700 transition-colors duration-300 transform dark:text-gray-200 active">
                            <a href="javascript:void(0)" class="cursor-default px-2.5 py-2 md:mx-2">Me</a>
                        </li>
                        <li class="nav-item list-none btn-text text-gray-700 transition-colors duration-300 transform dark:text-gray-200">
                            <a href="#about" class="nav-link px-2.5 py-2 md:mx-2">About</a>
                        </li>
                        <li class="nav-item list-none btn-text text-gray-700 transition-colors duration-300 transform dark:text-gray-200">
                            <a href="#services" class="nav-link px-2.5 py-2 md:mx-2">Services</a>
                        </li>
                        <li class="nav-item list-none btn-text text-gray-700 transition-colors duration-300 transform dark:text-gray-200">
                            <a href="#portfolio" class="nav-link px-2.5 py-2 md:mx-2">Portfolio</a>
                        </li>
                        <li class="nav-item list-none btn-text text-gray-700 transition-colors duration-300 transform dark:text-gray-200">
                            <a href="#testimonial" class="nav-link px-2.5 py-2 md:mx-2">Testimonial</a>
                        </li>
                        <li class="nav-item list-none btn-text text-gray-700 transition-colors duration-300 transform dark:text-gray-200">
                            <a href="#call_to_action" class="nav-link px-2.5 py-2 md:mx-2">Call</a>
                        </li>
                        <li class="nav-item list-none btn-text text-gray-700 transition-colors duration-300 transform dark:text-gray-200">
                            <a href="#contact" class="nav-link px-2.5 py-2 md:mx-2">Contact</a>
                        </li>
                    </div>

                    <div class="flex flex-col px-2 -mx-4 md:flex-row md:mx-10">
                        <?php if (isset($component)) { $__componentOriginald3180c69b32c04d918b752f9f32060db = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald3180c69b32c04d918b752f9f32060db = $attributes; } ?>
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
<?php if (isset($__attributesOriginald3180c69b32c04d918b752f9f32060db)): ?>
<?php $attributes = $__attributesOriginald3180c69b32c04d918b752f9f32060db; ?>
<?php unset($__attributesOriginald3180c69b32c04d918b752f9f32060db); ?>
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





<?php /**PATH C:\laragon\www\phpPortfolioApp\resources\views/components/navbar/primary.blade.php ENDPATH**/ ?>