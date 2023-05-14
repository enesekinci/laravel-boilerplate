<?php

declare(strict_types=1);

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::group(attributes: [
    // 'middleware' => ['auth'],
    'prefix' => 'dashboard',
], routes: function (): void {
    Route::get(uri: '/', action: static fn (): Illuminate\View\View => view(view: 'template'))->name(name: 'dashboard');
    Route::get(uri: '/profile', action: static fn (): Illuminate\View\View => view(view: 'dashboard.profile'))->name(name: 'dashboard.profile');

    Route::resource('settings', SettingController::class);

    Route::resource('posts', PostController::class);
});
