<?php
use App\Http\Controllers\UserController;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Response;
use PhpParser\Builder\Function_;
use PHPUnit\Runner\Filter\GroupFilterIterator;


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


//Routing Parameters
Route::get('/post/{post}/comment/{comment}', function (string $postId, string $comment) {
    return "Post ID: $postId . $comment: $comment";
});

Route::get('/post/{id}', function (string $id) {
    return $id;
})->where('id', '[0-9]+');

Route::get('/search/{search}', function (string $search) {
    return $search;
})->where('search', '-*'); 

//Named route or route alias
Route::get('/test/route', function () {
    return route ('test-route');
 })->name('test-route');

Route::middleware(['User-middleware'])->group (function() {
    Route::get('/route-middleware-group/first', function (request $request) {
        echo "First";
    });
    Route::get ('route-middleware-group/Second', function(request $request){
        echo "Second";
    });
});
Route::controller(UserController::class)->group(function(){
      route::get('user.index');
      route::get('user/first,first');
      route::get('user/(id)','show');
});
Route::get('/token', function (request $request) {
    return view('token');
});
Route::get('/token', function(request $request ){
    return $request->all();
});