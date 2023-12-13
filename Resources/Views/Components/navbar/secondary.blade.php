    <div class="">
        <nav x-data="{ isOpen: false }" class="bg-white px-6 shadow dark:bg-gray-800">
            <div class="container px-6 py-3 mx-auto md:flex">
                <div class="flex items-center justify-between nav-item">
                    <a href="{{ route('homepage') }}" class="text-orange-600 font-semibold">
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

                        <li class="nav-item list-none text-gray-700 transition-colors duration-300 transform dark:text-gray-200 {{ is_current_route('about') ? '' : 'btn-text'}}">
                            <a href="{{ is_current_route('about') ? 'javascript:void(0)' : route('about') }}" class="nav-link px-2.5 py-2 md:mx-2 {{ is_current_route('about') ? 'active font-semibold cursor-default' : ''}}">About</a>
                        </li>

                        <li class="nav-item list-none text-gray-700 transition-colors duration-300 transform dark:text-gray-200 {{ is_current_route('portfolio') ? '' : 'btn-text'}}">
                            <a href="{{ is_current_route('portfolio') ? 'javascript:void(0)' : route('portfolio') }}" class="nav-link px-2.5 py-2 md:mx-2 {{ is_current_route('portfolio') ? 'active font-semibold cursor-default' : ''}}">Portfolio</a>
                        </li>

                        <li class="nav-item list-none text-gray-700 transition-colors duration-300 transform dark:text-gray-200 {{ is_current_route('services') ? '' : 'btn-text'}}">
                            <a href="{{ is_current_route('services') ? 'javascript:void(0)' : route('services') }}" class="nav-link px-2.5 py-2 md:mx-2 {{ is_current_route('services') ? 'active font-semibold cursor-default' : ''}}">Services</a>
                        </li>

                        <li class="nav-item list-none text-gray-700 transition-colors duration-300 transform dark:text-gray-200 {{ is_current_route('testimonials') ? '' : 'btn-text'}}">
                            <a href="{{ is_current_route('testimonials') ? 'javascript:void(0)' : route('testimonials') }}" class="nav-link px-2.5 py-2 md:mx-2 {{ is_current_route('testimonials') ? 'active font-semibold cursor-default' : ''}}">Testimonials</a>
                        </li>

                        <li class="nav-item list-none text-gray-700 transition-colors duration-300 transform dark:text-gray-200 {{ is_current_route('blog.index') ? '' : 'btn-text'}}">
                            <a href="{{ is_current_route('blog.index') ? 'javascript:void(0)' : route('blog.index') }}" class="nav-link px-2.5 py-2 md:mx-2 {{ is_current_route('blog.index') ? 'active font-semibold cursor-default' : ''}}">Blog</a>
                        </li>

                    </div>

                    <div class="flex flex-col px-2 -mx-4 md:flex-row md:mx-10">
                        <x-globals.frontend.dropdown-user/>
                    </div>
                </div>
            </div>
        </nav>
    </div>


