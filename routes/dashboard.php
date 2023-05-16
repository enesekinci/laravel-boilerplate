<?php

declare(strict_types=1);

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::group(attributes: [
    // 'middleware' => ['auth'],
    'prefix' => 'dashboard',
], routes: function (): void {
    Route::get(uri: '/', action: static fn (): Illuminate\View\View => view(view: 'dashboard.app'))->name(name: 'dashboard');

    Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
        \UniSharp\LaravelFilemanager\Lfm::routes();
    });

    Route::get(uri: 'test/form', action: static fn (): Illuminate\View\View => view(
        view: 'dashboard.modules.form.test.form',
        data: [
            'title' => 'Form Test',
            'description' => 'Form Test Description',
            'posts' => \App\Models\Post::all(),
        ]
    ))->name(name: 'dashboard.form-test');

    Route::get(uri: '/profile', action: static fn (): Illuminate\View\View => view(view: 'dashboard.profile'))->name(name: 'dashboard.profile');


    Route::resource('settings', PostController::class);

    Route::get('posts/get', [PostController::class, 'get'])->name('posts.get');
    Route::resource('posts', PostController::class);
});
