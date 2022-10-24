<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\ServicesController;
use App\Http\Controllers\Admin\HeroController;
use App\Http\Controllers\Admin\SettingsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::group(
   [
      'prefix' => 'dashboard',
      'middleware' => ['auth']
   ],
   function () {
      Route::get('/', function () {
         return view('admin.index');
      })->name('dashboard');
      Route::get('/hero', [HeroController::class, 'edit'])->name('hero.edit');
      Route::put('/hero', [HeroController::class, 'update'])->name('hero.update');

      Route::resource('/services', ServicesController::class);
      Route::resource('/gallery', GalleryController::class);

      Route::get('/about', [AboutController::class, 'edit'])->name('about.edit');
      Route::put('/about', [AboutController::class, 'update'])->name('about.update');

      Route::get('/settings', [SettingsController::class, 'edit'])->name('settings.edit');
      Route::put('/settings', [SettingsController::class, 'update'])->name('settings.update');

      Route::get('/project_data_remove', [ServicesController::class, 'project_data_remove'])->name('project.project_data_remove');
   }
);

Auth::routes();
