<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Services\ProductService;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('test-container', function (Request $request) {
    return $request->input('key');
});

Route::get('test-provider', function (UserService $userService) {
    dd($userService->listUsers());
});

Route::get('test-users', [UserController::class, 'index']);

Route::get('test-facade', function (UserService $userService) {
    dd(Response::json($userService->listUsers()));
});

Route::get('name/{name}/comment/{comment}', function (string $name, string $comment) {
    return 'Name: ' . $name . '<br>Comment: ' . $comment;
});

Route::get('post/{id}', function (string $id) {
    return $id;
})->where('id', '[0-9]+');

Route::get('search/{search}', function (string $search) {
    return $search;
})->where('search', '.*');

Route::get('test/route/sample', function () {
    return route('test-route');
})->name('test-route');

Route::middleware(['user-middleware'])->group(function () {
    Route::get('route-middleware-group/first', function (Request $request) {
        echo 'first';
    });

    Route::get('route-middleware-group/second', function (Request $request) {
        echo 'second';
    });
});

Route::controller(UserController::class)->group(function () {
    Route::get('users', 'index');
    Route::get('users/first', 'first');
    Route::get('users/{id}', 'show');
});

Route::get('token', function (Request $request) {
    return view('token');
});

Route::post('token', function (Request $request) {
    return $request->all();
});

Route::get('users', [UserController::class, 'index'])->middleware('user-middleware');

Route::resource('products', ProductController::class);

Route::get('product-list', function (ProductService $productService) {
    $data['products'] = $productService->listProducts();

    return view('product.list', $data);
});