<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Admin\AdminDashboard;
use App\Http\Livewire\Admin\AdminProductComponent;
use App\Http\Livewire\Admin\AdminAddProductComponent;
use App\Http\Livewire\Admin\AdminAddZoneComponent;
use App\Http\Livewire\Admin\AdminZoneComponent;
use App\Http\Livewire\Admin\AdminEditZoneComponent;
use App\Http\Livewire\Admin\AdminEditProductComponent;
use App\Http\Livewire\Admin\AdminSocialMediaSettingComponent;
use App\Http\Livewire\Admin\AdminBusinessSettingComponent;

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
    return view('auth.login');
});

Route::middleware(['auth:sanctum', 'verified','admin'])->group( function () {
    Route::prefix('admin')->group(function () {
       Route::get('/dashboard',AdminDashboard::class)->name('admin.dashboard');
       Route::get('/business_setting',AdminBusinessSettingComponent::class)->name('admin.businesssetting');
       Route::get('/social_media_setting',AdminSocialMediaSettingComponent::class)->name('admin.socialsetting');
       Route::get('/products',AdminProductComponent::class)->name('admin.products');
       Route::get('/add/product',AdminAddProductComponent::class)->name('admin.addproduct');
       Route::get('/product/edit/{id}',AdminEditProductComponent::class)->name('admin.editproduct');
       route::get('/add/zone',AdminAddZoneComponent::class)->name('addmin.addzone');
       Route::get('get-all-zone-cordinates/{id?}', 'AdminAddZoneComponent@get_all_zone_cordinates')->name('zoneCoordinates');
       Route::get('/myzone',AdminZoneComponent::class)->name('admin.zones');
       Route::get('/zone/edit/{id}',AdminEditZoneComponent::class)->name('admin.edit-zone');
       Route::get('get-all-zone-cordinates/{id?}', 'AdminEditZoneComponent@get_all_zone_cordinates')->name('admin.zone.zoneCoordinates');
    //    Rouet::get('/social-media',AdminSocialMediaSettingComponent::class)->name('admin.social-media-setting');
    //    Route::get('/business-setting',AdminBusinessSettingComponent::class)->name('admin.business-setting');
       });
});
