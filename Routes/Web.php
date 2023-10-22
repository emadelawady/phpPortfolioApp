<?php 

$router->get('/', controller:['HomeController', 'index'])->name('homepage');

$router->get('/users', controller:['Users/UserController', 'index'])->name('user')->only('auth');

// $router->get("/users/{id}", controller:['Users/UserController', 'show'])->name('user.id')->only('auth');

$router->get('/portfolio', controller:['PortfolioController', 'index'])->name('portfolio');


$router->get('/register', controller:['Auth/Register', 'index'])->name('register')->only('guest');

$router->post('/register', controller:['Auth/Register', 'store'])->name('register.post')->only('guest');


$router->get('/login', controller:['Auth/Login', 'index'])->name('login')->only('guest');

$router->post('/login', controller:['Auth/Login', 'store'])->name('login.post')->only('guest');


$router->delete('/logout', controller:['Auth/Logout', 'logout'])->name('logout')->only('auth');



$router->get('/php', controller:['php', 'index'])->name('php');



$router->get('/admin', controller:['Admins/AdminPanelController', 'index'])->name('admin.index')->only('auth');

$router->get('/admin/profile', controller:['Admins/Profile', 'index'])->name('admin.profile')->only('auth');


$router->get('/admin/new/{slug}/{id}', controller:['Admins/ProfileShow', 'index'])->name('admin.profile.show')->only('auth');


// ->name('admin.profile.show')->only('auth')