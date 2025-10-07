<?php

use App\Http\Controllers\Admin as Admin;
use App\Http\Controllers\User as User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', [AuthController::class, "login"])->name("login")->middleware("guest");
Route::get('/logout', [AuthController::class, "logout"])->name("logout");
Route::post('/login', [AuthController::class, "verify"])->name("auth.verify");

Route::group(["middleware" => "auth:admin"], function () {
    Route::get("/admin/index", [Admin\DashboardController::class, "index"])->name("admin.dashboard");
    Route::get("/admin/order", [Admin\DashboardController::class, "order"])->name("admin.order");
    Route::get("/admin/menu", [Admin\DashboardController::class, "menu"])->name("admin.menu");
    Route::get("/admin/client", [Admin\DashboardController::class, "client"])->name("admin.client");
    Route::get("/admin/user", [Admin\DashboardController::class, "user"])->name("admin.user");
    Route::get("/admin/seller", [Admin\DashboardController::class, "seller"])->name("admin.seller");
    Route::get("/admin/comment", [Admin\DashboardController::class, "comment"])->name("admin.comment");
    Route::get("/admin/history", [Admin\DashboardController::class, "history"])->name("admin.history");
});

Route::group(["middleware" => "auth:user"], function () {
    Route::get("/user/index", [User\DashboardController::class, "index"])->name("user.dashboard");
});
