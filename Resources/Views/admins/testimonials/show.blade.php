<x-layouts.admins.adminLayout>



<section class="mb-20">
    <div class="bg-white py-6 sm:py-8 lg:py-12">
        <div class="mx-auto max-w-screen-2xl px-4 md:px-8">

            <div class="flex flex-wrap mb-5">
                <a class="bg-primary text-white py-1 px-3 my-6 rounded-md" href="{{ route('admin.testimonials.index') }}">
                <span class="bg-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                    </svg>
                </span>
                </a>
            </div>

            <p class="mb-2 font-semibold text-indigo-500 md:mb-3 lg:text-lg">Introducing</p>

            <h2 class="mb-4 text-2xl font-bold text-gray-800 md:mb-6 lg:text-3xl">
                {{ $testimonial->title }}
            </h2>

            {{-- <p class="max-w-screen-md text-gray-500 md:text-lg">This is a section of some simple filler text, also known as placeholder text. It shares some characteristics of a real written text but is random or otherwise generated.</p> --}}
        </div>
    </div>



<div class="flow-root rounded-lg border border-gray-100 py-3 shadow-sm">
  <dl class="-my-3 divide-y divide-gray-100 text-sm">
    <div
      class="grid grid-cols-1 gap-1 p-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4"
    >
      <dt class="font-medium text-gray-900">Featured Image</dt>
      <dd class="text-gray-700 sm:col-span-2">
        <img class="w-40 rounded-xl" src="{{ public_path("assets/images/portfolio/$testimonial->featured_image") }}" alt="">
      </dd>
    </div>
    <div
      class="grid grid-cols-1 gap-1 p-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4"
    >
      <dt class="font-medium text-gray-900">Title</dt>
      <dd class="text-gray-700 sm:col-span-2">
        {{ $testimonial->title }}
      </dd>
    </div>

    <div
      class="grid grid-cols-1 gap-1 p-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4"
    >
      <dt class="font-medium text-gray-900">Rate</dt>
      <dd class="text-gray-700 sm:col-span-2">
        {{ $testimonial->rate }}
      </dd>
    </div>


    <div
      class="grid grid-cols-1 gap-1 p-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4"
    >
      <dt class="font-medium text-gray-900">Salary</dt>
      <dd class="text-gray-700 sm:col-span-2">$1,000,000+</dd>
    </div>

    <div
      class="grid grid-cols-1 gap-1 p-3 even:bg-gray-50 sm:grid-cols-3 sm:gap-4"
    >
      <dt class="font-medium text-gray-900">Content</dt>
      <dd class="text-gray-700 sm:col-span-2">
            {{ $testimonial->content }}
      </dd>
    </div>
  </dl>
</div>


</x-layouts.admins.adminLayout>