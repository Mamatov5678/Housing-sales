<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/', \App\Http\Livewire\HomeComponent::class)->name('home');
Route::get('/about', \App\Http\Livewire\AboutComponent::class)->name('about');
Route::get('/services', \App\Http\Livewire\ServicesComponent::class)->name('services');
Route::get('/portfolio', \App\Http\Livewire\PortfolioComponent::class)->name('portfolio');
Route::get('/locations', \App\Http\Livewire\LocationsComponent::class)->name('locations');
Route::get('/shop', \App\Http\Livewire\ShopComponent::class)->name('shop');
Route::get('/shop-details', \App\Http\Livewire\ShopDetailsComponent::class)->name('shop-details');
Route::get('/cart', \App\Http\Livewire\CartComponent::class)->name('cart');
Route::get('/checkout', \App\Http\Livewire\CheckoutComponent::class)->name('checkout');
Route::get('/account', \App\Http\Livewire\AccountComponent::class)->name('account');
Route::get('/login', \App\Http\Livewire\LoginComponent::class)->name('login');
Route::get('/register', \App\Http\Livewire\RegisterComponent::class)->name('register');
Route::get('/news', \App\Http\Livewire\NewsComponent::class)->name('news');
Route::get('/contact', \App\Http\Livewire\ContactComponent::class)->name('contact');
Route::get('/add-listing', \App\Http\Livewire\AddListingComponent::class)->name('add-listing');
