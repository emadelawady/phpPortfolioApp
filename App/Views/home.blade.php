<x-layouts.app>

<button onclick="window.scroll({top: 0, left: 0, behavior: 'smooth'})" class="scroll scroll-top hidden">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
  <path fill-rule="evenodd" d="M11.47 7.72a.75.75 0 011.06 0l7.5 7.5a.75.75 0 11-1.06 1.06L12 9.31l-6.97 6.97a.75.75 0 01-1.06-1.06l7.5-7.5z" clip-rule="evenodd" />
</svg>
</button>





<section id="home" class="home scroll-spy flex flex-col items-stretch bg-grey-lighter min-h-screen">

    <section class="navigation navigation--relative">
        <x-navbar.primary></x-navbar.primary>
    </section>

    <section id="hero" class="hero px-2 bg-white md:px-0">
        <x-hero.primary></x-hero.primary>
    </section>

</section>

<section id="about" class="about scroll-spy bg-white dark:bg-gray-900">

    <x-about.primary></x-about.primary>

</section>

<section id="services" class="services scroll-spy bg-white dark:bg-gray-900">

    <x-services.primary></x-services.primary>

</section>


{{-- <x-slider.primary></x-slider.primary> --}}


<section id="portfolio" class="portfolio scroll-spy pt-10 bg-white dark:bg-gray-900">
    <x-portfolio.primary></x-portfolio.primary>
</section>



<section id="testimonial" class="testimonial scroll-spy bg-white dark:bg-gray-900">

    <x-testimonials.primary></x-testimonials.primary>

</section>

<section id="call_to_action" class="call_to_action scroll-spy py-10 my-10 bg-white dark:bg-gray-900">
    <x-call_to_action.primary></x-call_to_action.primary>
</section>



{{-- <x-animated_counter.primary></x-animated_counter.primary> --}}

<section id="contact" class="contact scroll-spy py-10 my-10 bg-white dark:bg-gray-900">

<x-contact.primary></x-contact.primary>

</section>

</x-layouts.app>