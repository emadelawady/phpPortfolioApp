<?php declare(strict_types=1);

namespace Core;


use Illuminate\Support\Facades\Blade;
use App\Http\Controllers\Components\Globals\Admins\DropdownUser;
use App\Http\Controllers\Components\Globals\Admins\Sidebar;
use App\Http\Controllers\Components\Globals\FrontEnd\DropdownUser as FrontEndDropdownUser;
use App\Http\Controllers\Frontend\Pages\Homepage\Components\Hero as HomepageHero;
use App\Http\Controllers\Frontend\Pages\Homepage\Components\About as HomepageAbout;
use App\Http\Controllers\Frontend\Pages\Homepage\Components\Services as HomepageServices;
use App\Http\Controllers\Frontend\Pages\Homepage\Components\Portfolio as HomepagePortfolio;
use App\Http\Controllers\Frontend\Pages\Homepage\Components\Testimonials as HomepageTestimonials;
use App\Http\Controllers\Frontend\Pages\Homepage\Components\CallToAction as HomepageCallToAction;
use App\Http\Controllers\Frontend\Pages\Homepage\Components\Contact as HomepageContact;
use App\Http\Controllers\Components\Globals\Sessions\Success_with_Data;
use App\Http\Controllers\Components\Globals\Sessions\Toast;
use App\Http\Controllers\Components\Hero;
use Core\Blade as LocalBlade;

class RegisteredComponents{

    public function __construct(){
        LocalBlade::handle();
    }
    public function boot(): void
    {

        
        // Global Admins Dropdown User component
        Blade::component('globals.admins.dropdown-user', DropdownUser::class);


        // Global Admins Dropdown User component
        Blade::component('globals.admins.sidebar', Sidebar::class);


        // Global Front End Dropdown User component
        Blade::component('globals.frontend.dropdown-user', FrontEndDropdownUser::class);


        /** Start From Here **/

        // Front End Home Page Hero component
        Blade::component('frontend.homepage.hero', HomepageHero::class);

        // Front End Home Page About component
        Blade::component('frontend.homepage.about', HomepageAbout::class);

        // Front End Home Page Services component
        Blade::component('frontend.homepage.services', HomepageServices::class);

        // Front End Home Page Portfolio component
        Blade::component('frontend.homepage.portfolio', HomepagePortfolio::class);

        // Front End Home Page Testimonials component
        Blade::component('frontend.homepage.testimonials', HomepageTestimonials::class);
        
        // Front End Home Page Call To Action component
        Blade::component('frontend.homepage.call-to-action', HomepageCallToAction::class);

        // Front End Home Page Contact component
        Blade::component('frontend.homepage.contact', HomepageContact::class);





        // Global Front End Dropdown User component
        Blade::component('globals.sessions.success-id', Success_with_Data::class);


        // Global Front End Toast component
        Blade::component('globals.sessions.toast', Toast::class);
    }
}