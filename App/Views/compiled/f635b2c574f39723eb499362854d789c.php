    <div class="mx-auto max-w-7xl">
        <nav x-data="{ isOpen: false }" class="bg-white px-6 shadow dark:bg-gray-800">
            <div class="container px-6 py-3 mx-auto md:flex">
                <div class="flex items-center justify-between nav-item">
                    <a href="<?php echo e(\Core\Helper::route('homepage')); ?>" class="">
                        <img class="w-auto h-6 sm:h-7" src="https://merakiui.com/images/full-logo.svg" alt="">
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

                            
                        <li class="nav-item list-none btn-text text-gray-700 transition-colors duration-300 transform dark:text-gray-200">
                            <a href="#portfolio_filter" class="px-2.5 py-2 md:mx-2">Portfolio Filter</a>
                        </li>
                       
                    </div>

                    <div class="relative flex mt-4 md:mt-0">
                    <?php if($_SESSION['user'] ?? false): ?>
                        <li class="list-none text-gray-700 transition-colors duration-300 transform dark:text-gray-200">
                        
                        welcome <?php echo e($_SESSION['user']['name']); ?>

                        </li>

                        <?php else: ?>

                        <li class="list-none text-gray-700 transition-colors duration-300 transform dark:text-gray-200 <?php echo e(\Core\Helper::is_current_route('login') ? 'active' : ''); ?>">
                            <a href="<?php echo e(\Core\Helper::route('login')); ?>" class="px-2.5 py-2 md:mx-2">Login</a>
                        </li>
                        <li class="list-none text-gray-700 transition-colors duration-300 transform dark:text-gray-200 <?php echo e(\Core\Helper::is_current_route('register') ? 'active' : ''); ?>">
                            <a href="<?php echo e(\Core\Helper::route('register')); ?>" class="px-2.5 py-2 md:mx-2">Register</a>
                        </li>
                     <?php endif; ?>
                    </div>
                </div>
            </div>
        </nav>
    </div>





<?php /**PATH C:\laragon\www\phpPortfolioApp\App\Views/components/navbar/secondary.blade.php ENDPATH**/ ?>