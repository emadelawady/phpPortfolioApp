<?php declare(strict_types=1);

namespace Core;


use App\Http\Controllers\Backend\Components\Footer;
use App\Http\Controllers\Backend\Components\Navbar;
use App\Http\Controllers\Backend\Components\Sidebar;
use App\Http\Controllers\Frontend\Components\Navbars\NavbarLinks;
use App\Http\Controllers\Frontend\Components\Navbars\SecondaryNavbar;
use Illuminate\Support\Facades\Blade;
use App\Http\Controllers\Components\Globals\Admins\DropdownUser;
use App\Http\Controllers\Components\Globals\FrontEnd\DropdownUser as FrontEndDropdownUser;
use App\Http\Controllers\Frontend\Pages\Homepage\Components\Hero as HomepageHero;
use App\Http\Controllers\Frontend\Pages\Homepage\Components\About as HomepageAbout;
use App\Http\Controllers\Frontend\Pages\Homepage\Components\Services as HomepageServices;
use App\Http\Controllers\Frontend\Pages\Homepage\Components\Portfolio as HomepagePortfolio;
use App\Http\Controllers\Frontend\Pages\Homepage\Components\Testimonials as HomepageTestimonials;
use App\Http\Controllers\Frontend\Pages\Homepage\Components\CallToAction as HomepageCallToAction;
use App\Http\Controllers\Frontend\Pages\Homepage\Components\Contact as HomepageContact;
use App\Http\Controllers\Frontend\Pages\Portfoliopage\Components\PortfolioPageSlider;
use App\Http\Controllers\Components\Globals\Sessions\Success_with_Data;
use App\Http\Controllers\Components\Globals\Sessions\Toast;
use App\Http\Controllers\Components\Hero;
use App\Http\Controllers\Frontend\Components\Footer as FrontendFooter;
use App\Http\Controllers\Frontend\Components\Navbars\Navbar as FrontendNavbar;
use App\Http\Controllers\Frontend\Components\Navbars\GuestNavbar as FrontendGuestNavbar;
use Core\Blade as LocalBlade;

class RegisteredComponents{

    public function __construct(){
        LocalBlade::handle();
    }
    public function boot(): void
    {

        
        // Global Admins Dropdown User component
        Blade::component('globals.admins.dropdown-user', DropdownUser::class);


        // Global Front End Dropdown User component
        Blade::component('globals.frontend.dropdown-user', FrontEndDropdownUser::class);


        /** Start From Here **/

        /* 
        ===== Front End Components =====
        */

        /* Home Page Components */

        // Front End Home Page Hero component
        Blade::component(HomepageHero::BLADE_NAME, HomepageHero::class);

        // Front End Home Page About component
        Blade::component(HomepageAbout::BLADE_NAME, HomepageAbout::class);

        // Front End Home Page Services component
        Blade::component(HomepageServices::BLADE_NAME, HomepageServices::class);

        // Front End Home Page Portfolio component
        Blade::component(HomepagePortfolio::BLADE_NAME, HomepagePortfolio::class);

        // Front End Home Page Testimonials component
        Blade::component(HomepageTestimonials::BLADE_NAME, HomepageTestimonials::class);
        
        // Front End Home Page Call To Action component
        Blade::component(HomepageCallToAction::BLADE_NAME, HomepageCallToAction::class);

        // Front End Home Page Contact component
        Blade::component(HomepageContact::BLADE_NAME, HomepageContact::class);


        /* Portfolio Page Components */

        // Front End Portfolio Page Portfolio Page Slider component
        Blade::component(PortfolioPageSlider::BLADE_NAME, PortfolioPageSlider::class);

        


        /* 
        ===== Front End Components =====
        */

        Blade::component(FrontendNavbar::BLADE_NAME, FrontendNavbar::class);

        Blade::component(FrontendGuestNavbar::BLADE_NAME, FrontendGuestNavbar::class);

        Blade::component(NavbarLinks::BLADE_NAME, NavbarLinks::class);
        
        Blade::component(SecondaryNavbar::BLADE_NAME, SecondaryNavbar::class);

        Blade::component(FrontendFooter::BLADE_NAME, FrontendFooter::class);






        /* 
        ===== Back End Components =====
        */
        Blade::component(Navbar::BLADE_NAME, Navbar::class);

        Blade::component(Footer::BLADE_NAME, Footer::class);

        Blade::component(Sidebar::BLADE_NAME, Sidebar::class);





        // Global Front End Dropdown User component
        Blade::component('globals.sessions.success-id', Success_with_Data::class);


        // Global Front End Toast component
        Blade::component('globals.sessions.toast', Toast::class);
    }
}