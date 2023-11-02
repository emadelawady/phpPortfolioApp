<?php 


$router->get('/admin/new/{slug}/{id}', controller:['Admins/ProfileShow', 'index'])->name('admin.profile.show')->only('auth');



$router->get("/users/{id}", controller:['Users/UserController', 'show'])->name('user.id')->only('auth');


$router->get('/', controller:['HomeController', 'index'])->name('homepage');



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





// Admins


$router->get("/faqs/{slug}", controller:['Admins/AdminPanelController', 'faqs'])->name('admin.faqs.index')->only('auth');


$router->get('/admin', controller:['Admins/AdminPanelController', 'index'])->name('admin.index')->only('auth');

$router->get('/admins/{slug}', controller:['Admins/AdminPanelController', 'ajax'])->name('admin.dashboard.index')->only('auth');



$router->get('/admin/profile', controller:['Admins/Profile', 'index'])->name('admin.profile')->only('auth');


// portfolio routes

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




// Homepage

$router->get('/admin/settings/homepage', controller:['Admins/Settings/Homepage', 'index'])->name('admin.settings.homepage')->only('auth');

$router->post('/admin/settings/homepage', controller:['Admins/Settings/Homepage', 'update'])->name('admin.settings.homepage')->only('auth');

$router->get('/admin/settings/about', controller:['Admins/Settings/About', 'index'])->name('admin.settings.about')->only('auth');


$router->get('/admin/settings/portfolio', controller:['Admins/Settings/Portfolio', 'index'])->name('admin.settings.portfolio')->only('auth');



// $router->get('/admin/new/{slug}/{id}', controller:['Admins/ProfileShow', 'index'])->name('admin.profile.show')->only('auth');


