<x-layouts.app>

<button onclick="window.scroll({top: 0, left: 0, behavior: 'smooth'})" class="scroll scroll-top hidden">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
  <path fill-rule="evenodd" d="M11.47 7.72a.75.75 0 011.06 0l7.5 7.5a.75.75 0 11-1.06 1.06L12 9.31l-6.97 6.97a.75.75 0 01-1.06-1.06l7.5-7.5z" clip-rule="evenodd" />
</svg>
</button>

{{-- @dd($homepage_settings_hero) --}}

    <section class="shadow border-b">
        <x-frontend.navbar.links />
    </section>


<section id="home" class="home scroll-spy flex flex-col items-stretch bg-grey-lighter min-h-screen">

    <section id="hero" class="hero px-2 bg-white md:px-0">
        <x-frontend.homepage.hero/>
    </section>

</section>

<section id="about" class="about scroll-spy bg-white dark:bg-gray-900">

    <x-frontend.homepage.about />

</section>

<section id="services" class="services scroll-spy bg-white dark:bg-gray-900">

    <x-frontend.homepage.services />

</section>


<section id="portfolio" class="portfolio scroll-spy pt-10 bg-white dark:bg-gray-900">
    <x-frontend.homepage.portfolio />
</section>


<section id="testimonial" class="testimonial scroll-spy bg-white dark:bg-gray-900">

    <x-frontend.homepage.testimonials />

</section>

<section id="call_to_action" class="call_to_action scroll-spy py-10 my-10 bg-white dark:bg-gray-900">
    <x-frontend.homepage.call-to-action />
</section>


<section id="contact" class="contact scroll-spy py-10 my-10 bg-white dark:bg-gray-900">
    <x-frontend.homepage.contact />
</section>

</x-layouts.app>