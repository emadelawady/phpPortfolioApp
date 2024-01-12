<div class="container items-center pt-20 max-w-6xl px-8 mx-auto xl:px-5">
  <div class="flex flex-wrap items-center sm:-mx-3">
    <div class="w-full md:w-1/2 md:px-3">

    
      <div class="w-full pb-6 space-y-6 sm:max-w-md lg:max-w-lg md:space-y-4 lg:space-y-8 xl:space-y-9 sm:pr-5 lg:pr-0 md:pb-0 text-center">
        <h1 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl md:text-3xl lg:text-4xl xl:text-5xl">
          <span class="block text-left"><?php echo e($homepage_settings_hero->head_one); ?></span>
          <span class="block text-indigo-600 xl:inline" data-primary="indigo-600"><?php echo e($homepage_settings_hero->head_two); ?></span>
        </h1>

        <p class="mx-auto text-base text-gray-500 sm:max-w-md lg:text-xl md:max-w-3xl">
          <?php echo e($homepage_settings_hero->description_one); ?>  
        </p>
        
        <div class="relative flex flex-col sm:flex-row sm:space-x-4">

            <!-- Base -->

            <a
              class="group relative inline-block text-sm font-medium text-white focus:outline-none focus:ring my-2"
              href="<?php echo e($homepage_settings_hero->custom_link_one); ?>"
            >
              <span
                class="absolute inset-0 border border-primary group-active:border-red-500"
              ></span>
              <span
                class="block border border-indigo-700 bg-primary px-12 py-3 transition-transform active:border-indigo-500 active:bg-indigo-500 group-hover:-translate-x-1 group-hover:-translate-y-1"
              >
                <?php echo e($homepage_settings_hero->custom_field_one); ?>

              </span>
            </a>


            <!-- Border -->

            <a
              class="group relative inline-block my-2 text-sm font-medium text-primary focus:outline-none focus:ring active:text-indigo-500"
              href="<?php echo e($homepage_settings_hero->custom_link_two); ?>"
            >
              <span class="absolute inset-0 border border-current"></span>
              <span
                class="block border border-current bg-white px-12 py-3 transition-transform group-hover:-translate-x-1 group-hover:-translate-y-1"
              >
                <?php echo e($homepage_settings_hero->custom_field_two); ?>

              </span>
            </a>

        </div>

      </div>
    </div>
    <div class="w-full md:w-1/2">
      <div class="w-full h-auto overflow-hidden rounded-md shadow-xl sm:rounded-xl" data-rounded="rounded-xl" data-rounded-max="rounded-full">
          <img class="" src="<?php echo e(public_path('assets/images/person.jpg')); ?>">
        </div>
    </div>
  </div>
</div>

<?php /**PATH C:\laragon\www\phpPortfolioApp\resources\views/components/globals/frontend/hero/primary.blade.php ENDPATH**/ ?>