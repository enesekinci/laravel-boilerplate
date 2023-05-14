<?php

declare(strict_types=1);

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get(
    uri: '/',
    action: static fn (): Illuminate\View\View
    => view(view: 'welcome')
);

Route::get(uri: 'template', action: static fn (): Illuminate\View\View => view(view: 'template'));

Route::get(
    uri: '/dashboard',
    action: static fn (): Illuminate\View\View
    => view(view: 'dashboard')
)->middleware(middleware: ['auth', 'verified'])->name(name: 'dashboard');

Route::middleware(['auth'])->group(static function (): void {
    Route::get(uri: '/profile', action: [ProfileController::class, 'edit'])->name(name: 'profile.edit');
    Route::patch(uri: '/profile', action: [ProfileController::class, 'update'])->name(name: 'profile.update');
    Route::delete(uri: '/profile', action: [ProfileController::class, 'destroy'])->name(name: 'profile.destroy');
});


require __DIR__ . '/auth.php';

require __DIR__ . '/dashboard.php';
