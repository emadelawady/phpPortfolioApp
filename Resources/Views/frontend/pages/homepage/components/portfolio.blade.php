<section class="bg-white dark:bg-gray-900">
    <div class="hold-swiper container px-10 py-10 mx-auto">
        <h1 class="head_underline text-2xl font-semibold text-left text-gray-800 capitalize lg:text-3xl dark:text-white">Portfolio
        </h1>

        <p class="mt-4 text-left text-gray-500 dark:text-gray-300">
            see full portfolio  
            <a class="text-blue-500" href="{{ route('portfolio') }}">page</a>
        </p>
          <!-- Swiper -->
  <div class="swiper homepage_portfolio_slider">
    <div class="swiper-wrapper">
    @foreach ($portfolios as $portfolio)      
      <a href="{{ route('portfolio.show',['id' => $portfolio->id]) }}" class="swiper-slide mt-8 xl:mt-12">    
        <div class="overflow-hidden bg-cover rounded-lg cursor-pointer h-96 group"
                style="background-image:url({{ public_path('/assets/images/portfolio/') . $portfolio->featured_image}})">
            <div
                class="flex flex-col justify-center w-full h-full px-8 py-4 transition-opacity duration-700 opacity-0 backdrop-blur-sm bg-gray-800/60 group-hover:opacity-100">
                <h2 class="mt-4 text-xl font-semibold text-white capitalize">{{ $portfolio->name }}</h2>
                <p class="mt-2 text-lg tracking-wider text-blue-400 uppercase ">Website</p>
            </div>
        </div>
      </a>
      @endforeach
      
    </div>
    <div class="swiper-pagination"></div>
    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>

    <!-- If we need scrollbar -->
    <div class="swiper-scrollbar"></div>
  </div>


</div>
</section>