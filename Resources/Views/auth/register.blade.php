<x-layouts.blank>


<x-navbar.guest></x-navbar.guest>


  <div class="w-full h-screen grid place-items-center">
    <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800">
        <div class="px-6 py-4">
            <div class="flex justify-center mx-auto">
                {{-- <img class="w-auto h-7 sm:h-8" src="https://merakiui.com/images/logo.svg" alt=""> --}}
            </div>

            <h3 class="mt-3 text-xl font-medium text-center text-gray-600 dark:text-gray-200">Welcome Back</h3>

            <p class="mt-1 text-center text-gray-500 dark:text-gray-400">Login or create account</p>

            <form action="{{ route('register.post') }}" method="POST">
                <div class="w-full relative mt-4">
                    <input class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-500 bg-white border rounded-lg dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring focus:ring-blue-300" type="text" name="name" placeholder="User Name" aria-label="User Name" value="{{ old('name') }}" />
                    
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
                <div class="w-full mb-6">
                  {{ isset($errors['name']) ? check_validation($errors['name']) : false }}
                </div>
                <div class="w-full relative mt-4">
                    <input class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-500 bg-white border rounded-lg dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring focus:ring-blue-300" type="text" name="email" placeholder="Email Address" aria-label="Email Address" value="{{ old('email') }}" />
                    
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
                <div class="w-full mb-6">

                  {{ isset($errors['email']) ? check_validation($errors['email']) : false }}
                </div>

                <div class="w-full relative mt-4">
                    <input class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-500 bg-white border rounded-lg dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring focus:ring-blue-300" type="password" name="password" placeholder="Password" aria-label="Password" />

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
                  {{ isset($errors['password']) ? check_validation($errors['password']) : false }}
                </div>

                <div class="flex items-center justify-between mt-4">
                    <button type="submit" class="px-6 py-2 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-500 rounded-lg hover:bg-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                        Sign Up
                    </button>
                </div>


            </form>
        </div>

        <div class="w-full flex items-center justify-center py-4 text-center bg-gray-50 dark:bg-gray-700">
            @if (isset($errors['AlreadyExists']))
              <p class="mt-3 text-xs text-red-600">{{ $errors['AlreadyExists'] }}</p>
              <p class="mx-1 mt-3 text-xs text-blue-600">
                <a href="{{ route('login')}}">
                  Login?
                </a>
              </p>
            @endif
        </div>
    </div>
  </div>
</x-layouts.blank>