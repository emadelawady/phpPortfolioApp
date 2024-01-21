<?php if (isset($component)) { $__componentOriginal11722512e6bf1f20c9736e5d202674dc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal11722512e6bf1f20c9736e5d202674dc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.blank','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layouts.blank'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>


<?php if (isset($component)) { $__componentOriginal6d8b68facbeb2c769b4f345ea348cddf = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6d8b68facbeb2c769b4f345ea348cddf = $attributes; } ?>
<?php $component = App\Http\Controllers\Frontend\Components\Navbars\GuestNavbar::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('frontend.guest.navbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\Http\Controllers\Frontend\Components\Navbars\GuestNavbar::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6d8b68facbeb2c769b4f345ea348cddf)): ?>
<?php $attributes = $__attributesOriginal6d8b68facbeb2c769b4f345ea348cddf; ?>
<?php unset($__attributesOriginal6d8b68facbeb2c769b4f345ea348cddf); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6d8b68facbeb2c769b4f345ea348cddf)): ?>
<?php $component = $__componentOriginal6d8b68facbeb2c769b4f345ea348cddf; ?>
<?php unset($__componentOriginal6d8b68facbeb2c769b4f345ea348cddf); ?>
<?php endif; ?>

  <div class="w-full h-screen grid place-items-center">
    <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800">
        <div class="px-6 py-4">
            <div class="flex justify-center mx-auto">
                
            </div>

            <h3 class="mt-3 text-xl font-medium text-center text-gray-600 dark:text-gray-200">Welcome Back</h3>

            <p class="mt-1 text-center text-gray-500 dark:text-gray-400">Login or create account</p>

            <form action="<?php echo e(route('login.post')); ?>" method="POST">
                <div class="w-full relative mt-4">
                    <input class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-500 bg-white border rounded-lg dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring focus:ring-blue-300" type="text" name="email" placeholder="Email Address" aria-label="Email Address" value="<?php echo e(old('email')); ?>" />
                    
                    <span class="absolute inset-y-0 end-0 grid place-content-center px-4">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-4 w-4 text-gray-400"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"
                        />
                      </svg>
                  </span>
                </div>

    

                <div class="w-full mx-3 mb-6 m-auto">

                  <?php echo e(isset($errors['email']) ? check_validation($errors['email']) : false); ?>


                </div>

                <div class="w-full relative mt-4">
                    <input class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-500 bg-white border rounded-lg dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring focus:ring-blue-300" type="password" name="password" placeholder="Password" aria-label="Password" autocomplete="current-password" />

                    <span class="absolute inset-y-0 end-0 grid place-content-center px-4">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-4 w-4 text-gray-400"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
                        />
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"
                        />
                      </svg>
                    </span>
                </div>
                <div class="w-full mb-6">

                    <?php echo e(isset($errors['password']) ? check_validation($errors['password']) : false); ?>


                </div>

                <div class="flex items-center justify-between mt-4">
                    <a href="javascript:void(0)" class="text-sm text-gray-600 dark:text-gray-200 hover:text-gray-500">Forget Password?</a>

                    <button type="submit" class="px-6 py-2 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-500 rounded-lg hover:bg-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                        Sign In
                    </button>
                </div>
            </form>
        </div>

        <div class="flex items-center justify-center py-4 text-center bg-gray-50 dark:bg-gray-700">
            <span class="text-sm text-gray-600 dark:text-gray-200">Don't have an account? </span>

            <a href="<?php echo e(route('register')); ?>" class="mx-2 text-sm font-bold text-blue-500 dark:text-blue-400 hover:underline">Register</a>
        </div>
    </div>
  </div>



 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal11722512e6bf1f20c9736e5d202674dc)): ?>
<?php $attributes = $__attributesOriginal11722512e6bf1f20c9736e5d202674dc; ?>
<?php unset($__attributesOriginal11722512e6bf1f20c9736e5d202674dc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal11722512e6bf1f20c9736e5d202674dc)): ?>
<?php $component = $__componentOriginal11722512e6bf1f20c9736e5d202674dc; ?>
<?php unset($__componentOriginal11722512e6bf1f20c9736e5d202674dc); ?>
<?php endif; ?><?php /**PATH C:\laragon\www\phpPortfolioApp\resources\views/auth/login.blade.php ENDPATH**/ ?>