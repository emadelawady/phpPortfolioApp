<div class="container items-center mt-20 max-w-4xl px-6 mx-auto xl:px-3">


<div class="flex flex-wrap items-center pt-20 sm:-mx-3">
    <div class="w-full px-4">
        <div class="title pt-5">
            <h1 class="head_underline text-2xl font-semibold text-left text-primary capitalize lg:text-3xl dark:text-white">
                About Me
            </h1>
        </div>
        <div class="description mt-6">
            <p>
                description
            </p>
        </div>
    </div>
</div>





<div class="grid grid-cols-1 md:grid-cols-3 col-rows-1 md:grid-rows-3 gap-6">
    <div class="col-span-1 md:row-span-3 md:flex md:items-center md:mx-auto">
        <div class="w-full h-auto overflow-hidden rounded-md shadow-xl sm:rounded-xl" data-rounded="rounded-xl" data-rounded-max="rounded-full">
            <img class="" src="<?php echo e(public_path('assets/images/me.jpg')); ?>" alt="">
        </div>
    </div>
    <div class="col-start-1 md:col-start-2 md:col-span-2 md:row-span-1 md:px-6 md:flex md:items-center md:mx-auto">
        <article class="prose">
            <h3>UI/UX &amp; Graphic Designer</h3>
            <p class="fst-italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.
            </p>
            </article>
    </div>
    <div class="col-start-1 md:col-start-2 md:col-span-1 md:row-span-2 md:px-6 md:flex md:items-center md:mx-auto">
    <article class="prose">

        <ul>
            <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>1 May 1995</span></li>
            <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>www.example.com</span></li>
            <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+123 456 7890</span></li>
            <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>New York, USA</span></li>
        </ul>
        </article>
    </div>
    <div class="col-start-1 md:col-start-3 md:col-span-1 md:row-span-2 md:px-6 md:flex md:items-center md:mx-auto">
    <article class="prose">
        <ul>
            <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>30</span></li>
            <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>Master</span></li>
            <li><i class="bi bi-chevron-right"></i> <strong>PhEmailone:</strong> <span>email@example.com</span></li>
            <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span></li>
        </ul>
        </article>
    </div>


</div>

    <div class="w-full flex flex-wrap items-center justify-end p-4">
        <!-- Border - Left -->

        <a
        class="group relative inline-flex items-center overflow-hidden border border-current rounded px-8 py-1 text-gray-900 hover:text-primary focus:outline-none active:text-indigo-500"
        href="<?php echo e(route('about')); ?>"
        >
        <span class="absolute -end-full transition-all group-hover:end-4">
            <svg
            class="h-5 w-5 rtl:rotate-180"
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
            >
            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M17 8l4 4m0 0l-4 4m4-4H3"
            />
            </svg>
        </span>

        <span class="text-md font-bold transition-all group-hover:me-4">
            See About
        </span>
        </a>
    </div>

</div>
    



    


    









    

<?php /**PATH C:\laragon\www\phpPortfolioApp\App\Views/components/about/primary.blade.php ENDPATH**/ ?>