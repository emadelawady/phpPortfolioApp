<?php

use App\Http\Controllers\Attributes;

$router->get('/admin/new/{slug}/{id}', controller:['Admins/ProfileShow', 'index'])->name('admin.profile.show')->only('auth');



$router->get("/users/{id}", controller:['Users/UserController', 'show'])->name('user.id')->only('auth');


$router->get('/', controller:['Frontend/Pages/Homepage/HomeController', 'index'])->name('homepage');



// pages

$router->get('/users', controller:['Users/UserController', 'index'])->name('user')->only('auth');

$router->get('/about', controller:['Pages/AboutController', 'index'])->name('about');

$router->get('/portfolio', controller:['Pages/PortfolioController', 'index'])->name('portfolio');

$router->get('/services', controller:['Pages/ServicesController', 'index'])->name('services');


$router->get('/testimonials', controller:['Pages/TestimonialsController', 'index'])->name('testimonials');


$router->get('/register', controller:['Auth/Register', 'index'])->name('register')->only('guest');

$router->post('/register', controller:['Auth/Register', 'store'])->name('register.post')->only('guest');


$router->get('/login', controller:['Auth/Login', 'index'])->name('login')->only('guest');

$router->post('/login', controller:['Auth/Login', 'store'])->name('login.post')->only('guest');


$router->delete('/logout', controller:['Auth/Logout', 'logout'])->name('logout')->only('auth');



// blog

$router->get('/blog', controller:['Blog/BlogController', 'index'])->name('blog.index');



// Admins


$router->get("/faqs/{slug}", controller:['Admins/AdminPanelController', 'faqs'])->name('admin.faqs.index')->only('auth');


$router->get('/admin', controller:['Admins/AdminPanelController', 'index'])->name('admin.index')->only('auth');

$router->get('/admins/{slug}', controller:['Admins/AdminPanelController', 'ajax'])->name('admin.dashboard.index')->only('auth');



$router->get('/admin/profile', controller:['Admins/Profile', 'index'])->name('admin.profile')->only('auth');


// Admin -> portfolio routes

$router->get('/admin/portfolio', controller:['Admins/PortfolioController', 'index'])->name('admin.portfolio.index')->only('auth');

$router->get('/admin/portfolio/create', controller:['Admins/PortfolioController', 'create'])->name('admin.portfolio.create')->only('auth');

$router->post('/admin/portfolio/store', controller:['Admins/PortfolioController', 'store'])->name('admin.portfolio.store')->only('auth');

$router->get('/admin/portfolio/show/{id}', controller:['Admins/PortfolioController', 'show'])->name('admin.portfolio.show')->only('auth');

$router->get('/admin/portfolio/edit/{id}', controller:['Admins/PortfolioController', 'edit'])->name('admin.portfolio.edit')->only('auth');


$router->patch('/admin/portfolio/update/{id}', controller:['Admins/PortfolioController', 'update'])->name('admin.portfolio.update')->only('auth');

$router->delete('/admin/portfolio/delete/{id}', controller:['Admins/PortfolioController', 'delete'])->name('admin.portfolio.delete')->only('auth');




// services routes

$router->get('/admin/services', controller:['Admins/ServicesController', 'index'])->name('admin.services.index')->only('auth');

$router->get('/admin/service/create', controller:['Admins/ServicesController', 'create'])->name('admin.service.create')->only('auth');

$router->post('/admin/service/store', controller:['Admins/ServicesController', 'store'])->name('admin.service.store')->only('auth');

$router->get('/admin/service/show/{id}', controller:['Admins/ServicesController', 'show'])->name('admin.service.show')->only('auth');

$router->get('/admin/service/edit/{id}', controller:['Admins/ServicesController', 'edit'])->name('admin.service.edit')->only('auth');


$router->patch('/admin/service/update/{id}', controller:['Admins/ServicesController', 'update'])->name('admin.service.update')->only('auth');

$router->delete('/admin/service/delete/{id}', controller:['Admins/ServicesController', 'delete'])->name('admin.service.delete')->only('auth');



// testimonials routes

$router->get('/admin/testimonials', controller:['Admins/TestimonialsController', 'index'])->name('admin.testimonials.index')->only('auth');

$router->get('/admin/testimonial/create', controller:['Admins/TestimonialsController', 'create'])->name('admin.testimonial.create')->only('auth');

$router->post('/admin/testimonial/store', controller:['Admins/TestimonialsController', 'store'])->name('admin.testimonial.store')->only('auth');

$router->get('/admin/testimonial/show/{id}', controller:['Admins/TestimonialsController', 'show'])->name('admin.testimonial.show')->only('auth');

$router->get('/admin/testimonial/edit/{id}', controller:['Admins/TestimonialsController', 'edit'])->name('admin.testimonial.edit')->only('auth');


$router->patch('/admin/testimonial/update/{id}', controller:['Admins/TestimonialsController', 'update'])->name('admin.testimonial.update')->only('auth');

$router->delete('/admin/testimonial/delete/{id}', controller:['Admins/TestimonialsController', 'delete'])->name('admin.testimonial.delete')->only('auth');



// Users routes

$router->get('/admin/users', controller:['Admins/UsersController', 'index'])->name('admin.users.index')->only('auth');

$router->get('/admin/user/create', controller:['Admins/UsersController', 'create'])->name('admin.user.create')->only('auth');

$router->post('/admin/user/store', controller:['Admins/UsersController', 'store'])->name('admin.user.store')->only('auth');

$router->get('/admin/user/show/{id}', controller:['Admins/UsersController', 'show'])->name('admin.user.show')->only('auth');

$router->get('/admin/user/edit/{id}', controller:['Admins/UsersController', 'edit'])->name('admin.user.edit')->only('auth');


$router->patch('/admin/user/update/{id}', controller:['Admins/UsersController', 'update'])->name('admin.user.update')->only('auth');

$router->delete('/admin/user/delete/{id}', controller:['Admins/UsersController', 'delete'])->name('admin.user.delete')->only('auth');


// Admin -> Blog

$router->get('/admin/blog', controller:['Admins/BlogController', 'index'])->name('admin.blog.index');

$router->get('/admin/blog/create', controller:['Admins/BlogController', 'create'])->name('admin.blog.create')->only('auth');

$router->post('/admin/blog/store', controller:['Admins/BlogController', 'store'])->name('admin.blog.store')->only('auth');

$router->get('/admin/blog/show/{id}', controller:['Admins/BlogController', 'show'])->name('admin.blog.show')->only('auth');

$router->get('/admin/blog/edit/{id}', controller:['Admins/BlogController', 'edit'])->name('admin.blog.edit')->only('auth');


$router->patch('/admin/blog/update/{id}', controller:['Admins/BlogController', 'update'])->name('admin.blog.update')->only('auth');

$router->delete('/admin/blog/delete/{id}', controller:['Admins/BlogController', 'delete'])->name('admin.blog.delete')->only('auth');


// Homepage

$router->get('/admin/settings/homepage', controller:['Admins/Settings/Homepage', 'index'])->name('admin.settings.homepage')->only('auth');

$router->post('/admin/settings/homepage', controller:['Admins/Settings/Homepage', 'update'])->name('admin.settings.homepage')->only('auth');

$router->get('/admin/settings/about', controller:['Admins/Settings/About', 'index'])->name('admin.settings.about')->only('auth');


$router->get('/admin/settings/portfolio', controller:['Admins/Settings/Portfolio', 'index'])->name('admin.settings.portfolio')->only('auth');



// $router->get('/admin/new/{slug}/{id}', controller:['Admins/ProfileShow', 'index'])->name('admin.profile.show')->only('auth');





$router->get('/attributes',['Attributes', 'index'])->name('attr');


$router->get('/migration',['Migration', 'index'])->name('migration');