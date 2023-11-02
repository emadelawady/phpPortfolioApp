    <div class="mx-auto max-w-7xl">
        <nav x-data="{ isOpen: false }" class="bg-white px-6 shadow dark:bg-gray-800">
            <div class="container px-6 py-3 mx-auto md:flex">
                <div class="flex items-center justify-between nav-item">
                    <a href="#home" class="nav-link text-orange-600 font-semibold">
                        {{-- <img class="w-auto h-6 sm:h-7" src="https://merakiui.com/images/full-logo.svg" alt=""> --}}
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
                        <x-globals.frontend.dropdown-user/>
                    </div>
                    
                </div>
            </div>
        </nav>
    </div>


{{-- <section class="w-full px-6 pb-12 antialiased bg-white">
    <div class="mx-auto max-w-7xl">

        <!-- Main Hero Content -->
        <div class="container max-w-sm py-32 mx-auto mt-px text-left sm:max-w-md md:max-w-lg sm:px-4 md:text-center">
            <h1 class="text-3xl font-bold leading-10 tracking-tight text-left text-gray-900 md:text-center sm:text-4xl md:text-7xl lg:text-8xl">Start Crafting Your <br class="hidden sm:block"> Next Great Idea</h1>
            <div class="mx-auto mt-5 text-gray-400 md:mt-8 md:max-w-lg md:text-center md:text-xl">Simplifying the creation of landing pages, blog pages, application pages and so much more!</div>
            <div class="flex flex-col items-center justify-center mt-8 space-y-4 text-center sm:flex-row sm:space-y-0 sm:space-x-4">
                <span class="relative inline-flex w-full md:w-auto">
                    <a href="#_" class="inline-flex items-center justify-center w-full px-8 py-4 text-base font-medium leading-6 text-white bg-gray-900 border border-transparent rounded-full xl:px-10 md:w-auto hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800">
                        Purchase Now
                    </a>
                </span>
                <span class="relative inline-flex w-full md:w-auto">
                    <a href="#_" class="inline-flex items-center justify-center w-full px-8 py-4 text-base font-medium leading-6 text-gray-900 bg-gray-100 border border-transparent rounded-full xl:px-10 md:w-auto hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-200">Learn More</a>
                </span>
            </div>
        </div>
        <!-- End Main Hero Content -->

    </div>
</section> --}}


