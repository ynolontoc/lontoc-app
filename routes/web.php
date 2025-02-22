<?php
use App\Http\Controllers\UserController;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Response;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/test-container', function (Request $request) {
    $container = $request->input(('key'));
    return $request->input('key');
});
Route::get('/test-provider', function (UserService $userService) {
    return $userService->ListUsers();
});

Route::get('/test-users', [UserController:: class, 'index']);

Route::get('/test-facade', function(UserService $userService){
    return Response::json($userService->listUsers());
});
