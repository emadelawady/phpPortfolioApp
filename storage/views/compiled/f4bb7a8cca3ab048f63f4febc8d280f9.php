<?php if(\Core\Session::has('user') ?? false): ?>
 

 <div x-data="{ isOpen: false }" class="relative inline-block ">
    <!-- Dropdown toggle button -->
    <button @click="isOpen = !isOpen" class="relative z-10 flex items-center text-sm text-gray-600 bg-white border border-transparent rounded-md dark:focus:ring-opacity-40 dark:focus:ring-blue-400 dark:text-white dark:bg-gray-800">
        Hello, <span class="text-primary mx-1"><?php echo e($user->name); ?></span>

        <svg class="w-5 h-5 mx-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 15.713L18.01 9.70299L16.597 8.28799L12 12.888L7.40399 8.28799L5.98999 9.70199L12 15.713Z" fill="currentColor"></path>
        </svg>
    </button>

  <!-- Dropdown menu -->
    <div x-show="isOpen" 
        @click.away="isOpen = false"
        x-transition:enter="transition ease-out duration-100"
        x-transition:enter-start="opacity-0 scale-90"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-100"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-90"
        class="absolute right-0 z-20 w-56 py-2 mt-2 overflow-hidden origin-top-right bg-white rounded-md shadow-xl dark:bg-gray-800"
    >
        <a href="javascript:void(0)" class="flex items-center p-3 -mt-2 text-sm text-gray-600 transition-colors duration-300 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white cursor-default">
            <img class="flex-shrink-0 object-cover mx-1 rounded-full w-9 h-9" src="https://images.unsplash.com/photo-1523779917675-b6ed3a42a561?ixid=MnwxMjA3fDB8MHxzZWFyY2h8N3x8d29tYW4lMjBibHVlfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=face&w=500&q=200" alt="jane avatar">
            <div class="mx-1">
                
                <p class="text-sm text-gray-500 dark:text-gray-400"><?php echo e($user->email); ?></p>
            </div>
        </a>

        <hr class="border-gray-200 dark:border-gray-700 ">

        <a href="<?php echo e(route('admin.index')); ?>" class="block px-4 py-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
            Dashboard
        </a>
        <a href="<?php echo e(route('admin.profile')); ?>" class="block px-4 py-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
            view profile
        </a>

        <a href="<?php echo e(route('admin.settings.homepage')); ?>" class="block px-4 py-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
            Settings
        </a>

        <a href="#" class="block px-4 py-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
            Keyboard shortcuts
        </a>

        <hr class="border-gray-200 dark:border-gray-700 ">

        <a href="#" class="block px-4 py-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
            Company profile
        </a>

        <a href="#" class="block px-4 py-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
            Team
        </a>

        <a href="#" class="block px-4 py-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
            Invite colleagues
        </a>

        <hr class="border-gray-200 dark:border-gray-700 ">

        <a href="#" class="block px-4 py-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
            Help
        </a>
        <a href="#" class="block px-4 py-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
            <?php echo e(logout()); ?>

        </a>
    </div>

<?php else: ?>


    <?php if(!is_current_route('login')): ?>

    <li class="list-none text-gray-700 transition-colors duration-300 transform dark:text-gray-200">
        <a
            href="<?php echo e(route('login')); ?>"
            class="px-2.5 py-2 md:mx-2 hover:text-primary <?php echo e(is_current_route('login') ? 'active' : ''); ?>"
        >
            Login
        </a>
    </li>
    <?php elseif(!is_current_route('register')): ?>
    <li class="list-none text-gray-700 transition-colors duration-300 transform dark:text-gray-200">
        <a
            href="<?php echo e(route('register')); ?>"
            class="px-2.5 py-2 md:mx-2 hover:text-primary <?php echo e(is_current_route('register') ? 'active' : ''); ?>"
        >
            Register
        </a>
    </li>
    <?php endif; ?>


<?php endif; ?><?php /**PATH C:\laragon\www\phpPortfolioApp\resources\views/components/globals/frontend/dropdown-user.blade.php ENDPATH**/ ?>