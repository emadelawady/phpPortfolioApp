<?php declare(strict_types=1);

namespace Core;
use Illuminate\Support\Facades\Blade;
use App\Http\Controllers\Components\Globals\Admins\DropdownUser;
use App\Http\Controllers\Components\Globals\Admins\Sidebar;
use App\Http\Controllers\Components\Globals\FrontEnd\DropdownUser as FrontEndDropdownUser;
use App\Http\Controllers\Components\Globals\FrontEnd\PrimaryHero;
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


        // Global Front End Primary Hero component
        Blade::component('globals.frontend.hero.primary', PrimaryHero::class);

        // Global Front End Dropdown User component
        Blade::component('globals.sessions.success-id', Success_with_Data::class);


        // Global Front End Toast component
        Blade::component('globals.sessions.toast', Toast::class);
    }
}