<?php

use App\Http\Controllers\Attributes;
use App\Http\Controllers\Auth\Login;
use App\Http\Controllers\Auth\Logout;
use App\Http\Controllers\Auth\Register;
use App\Http\Controllers\Backend\Blog\BlogController as BlogBlogController;
use App\Http\Controllers\Backend\Pages\Dashboardpage\DashboardController;
use App\Http\Controllers\Backend\Pages\Portfoliopage\PortfolioController as PortfoliopagePortfolioController;
use App\Http\Controllers\Backend\Pages\Profilepage\Profile;
use App\Http\Controllers\Backend\Pages\Servicespage\ServicesController as ServicespageServicesController;
use App\Http\Controllers\Backend\Pages\Testimonialspage\TestimonialsController as TestimonialspageTestimonialsController;
use App\Http\Controllers\Backend\Pages\Userspage\UsersController;
use App\Http\Controllers\Backend\Settings\About;
use App\Http\Controllers\Backend\Settings\Homepage;
use App\Http\Controllers\Backend\Settings\Portfolio;
use App\Http\Controllers\Frontend\Blog\BlogController;
use App\Http\Controllers\Frontend\Pages\Aboutpage\AboutController;
use App\Http\Controllers\Frontend\Pages\Homepage\HomeController;
use App\Http\Controllers\Frontend\Pages\Portfoliopage\PortfolioController;
use App\Http\Controllers\Frontend\Pages\Servicespage\ServicesController;
use App\Http\Controllers\Frontend\Pages\Testimonialspage\TestimonialsController;


// Start Here 

/* Front End */

$router->get('/', [HomeController::class, 'index'])->name('homepage');

$router->get('/about', [AboutController::class, 'index'])->name('about');

$router->get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');

$router->get('/portfolio/{id}', [PortfolioController::class, 'show'])->name('portfolio.show');

$router->get('/services', [ServicesController::class, 'index'])->name('services');

$router->get('/testimonials', [TestimonialsController::class, 'index'])->name('testimonials');

// blog
$router->get('/blog', [BlogController::class, 'index'])->name('blog.index');


// Auth

$router->get('/register', [Register::class, 'index'])->name('register')->only('guest');

$router->post('/register', [Register::class, 'store'])->name('register.post')->only('guest');

$router->get('/login', [Login::class, 'index'])->name('login')->only('guest');

$router->post('/login', [Login::class, 'store'])->name('login.post')->only('guest');

$router->delete('/logout', [Logout::class, 'logout'])->name('logout')->only('auth');







/* Back End */

$router->get('/dashboard', [DashboardController::class, 'index'])->name('admin.index')->only('auth');

$router->get('/dashboard/profile', [Profile::class, 'index'])->name('admin.profile')->only('auth');



// Admin -> portfolio routes

$router->get('/dashboard/portfolio', [PortfoliopagePortfolioController::class, 'index'])->name('admin.portfolio.index')->only('auth');

$router->get('/dashboard/portfolio/create', [PortfoliopagePortfolioController::class, 'create'])->name('admin.portfolio.create')->only('auth');

$router->post('/dashboard/portfolio/store', [PortfoliopagePortfolioController::class, 'store'])->name('admin.portfolio.store')->only('auth');

$router->get('/dashboard/portfolio/show/{id}', [PortfoliopagePortfolioController::class, 'show'])->name('admin.portfolio.show')->only('auth');

$router->get('/dashboard/portfolio/edit/{id}', [PortfoliopagePortfolioController::class, 'edit'])->name('admin.portfolio.edit')->only('auth');


$router->patch('/dashboard/portfolio/update/{id}', [PortfoliopagePortfolioController::class, 'update'])->name('admin.portfolio.update')->only('auth');

$router->delete('/dashboard/portfolio/delete/{id}', [PortfoliopagePortfolioController::class, 'delete'])->name('admin.portfolio.delete')->only('auth');



// services routes

$router->get('/dashboard/services', [ServicespageServicesController::class, 'index'])->name('admin.services.index')->only('auth');

$router->get('/dashboard/service/create', [ServicespageServicesController::class, 'create'])->name('admin.service.create')->only('auth');

$router->post('/dashboard/service/store', [ServicespageServicesController::class, 'store'])->name('admin.service.store')->only('auth');

$router->get('/dashboard/service/show/{id}', [ServicespageServicesController::class, 'show'])->name('admin.service.show')->only('auth');

$router->get('/dashboard/service/edit/{id}', [ServicespageServicesController::class, 'edit'])->name('admin.service.edit')->only('auth');

$router->patch('/dashboard/service/update/{id}', [ServicespageServicesController::class, 'update'])->name('admin.service.update')->only('auth');

$router->delete('/dashboard/service/delete/{id}', [ServicespageServicesController::class, 'delete'])->name('admin.service.delete')->only('auth');



// testimonials routes

$router->get('/dashboard/testimonials', [TestimonialspageTestimonialsController::class, 'index'])->name('admin.testimonials.index')->only('auth');

$router->get('/dashboard/testimonial/create', [TestimonialspageTestimonialsController::class, 'create'])->name('admin.testimonial.create')->only('auth');

$router->post('/dashboard/testimonial/store', [TestimonialspageTestimonialsController::class, 'store'])->name('admin.testimonial.store')->only('auth');

$router->get('/dashboard/testimonial/show/{id}', [TestimonialspageTestimonialsController::class, 'show'])->name('admin.testimonial.show')->only('auth');

$router->get('/dashboard/testimonial/edit/{id}', [TestimonialspageTestimonialsController::class, 'edit'])->name('admin.testimonial.edit')->only('auth');


$router->patch('/dashboard/testimonial/update/{id}', [TestimonialspageTestimonialsController::class, 'update'])->name('admin.testimonial.update')->only('auth');

$router->delete('/dashboard/testimonial/delete/{id}', [TestimonialspageTestimonialsController::class, 'delete'])->name('admin.testimonial.delete')->only('auth');



// Users routes

$router->get('/dashboard/users', [UsersController::class, 'index'])->name('admin.users.index')->only('auth');

$router->get('/dashboard/user/create', [UsersController::class, 'create'])->name('admin.user.create')->only('auth');

$router->post('/dashboard/user/store', [UsersController::class, 'store'])->name('admin.user.store')->only('auth');

$router->get('/dashboard/user/show/{id}', [UsersController::class, 'show'])->name('admin.user.show')->only('auth');

$router->get('/dashboard/user/edit/{id}', [UsersController::class, 'edit'])->name('admin.user.edit')->only('auth');


$router->patch('/dashboard/user/update/{id}', [UsersController::class, 'update'])->name('admin.user.update')->only('auth');

$router->delete('/dashboard/user/delete/{id}', [UsersController::class, 'delete'])->name('admin.user.delete')->only('auth');



// Admin -> Blog

$router->get('/dashboard/blog', [BlogBlogController::class, 'index'])->name('admin.blog.index');

$router->get('/dashboard/blog/create', [BlogBlogController::class, 'create'])->name('admin.blog.create')->only('auth');

$router->post('/dashboard/blog/store', [BlogBlogController::class, 'store'])->name('admin.blog.store')->only('auth');

$router->get('/dashboard/blog/show/{id}', [BlogBlogController::class, 'show'])->name('admin.blog.show')->only('auth');

$router->get('/dashboard/blog/edit/{id}', [BlogBlogController::class, 'edit'])->name('admin.blog.edit')->only('auth');


$router->patch('/dashboard/blog/update/{id}', [BlogBlogController::class, 'update'])->name('admin.blog.update')->only('auth');

$router->delete('/dashboard/blog/delete/{id}', [BlogBlogController::class, 'delete'])->name('admin.blog.delete')->only('auth');


// Settings

$router->get('/dashboard/settings/homepage', [Homepage::class, 'index'])->name('admin.settings.homepage')->only('auth');

$router->post('/dashboard/settings/homepage', [Homepage::class, 'update'])->name('admin.settings.homepage')->only('auth');

$router->get('/dashboard/settings/about', [About::class, 'index'])->name('admin.settings.about')->only('auth');

$router->get('/dashboard/settings/portfolio', [Portfolio::class, 'index'])->name('admin.settings.portfolio')->only('auth');

