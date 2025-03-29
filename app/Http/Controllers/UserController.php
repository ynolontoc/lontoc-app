<?php

namespace App\Http\Controllers;
use App\Services\UserService;

use Illuminate\Http\Request;
use PhpParser\Builder\Function_;

class UserController extends Controller
{
    public function index(UserService $userService) {
        return view('users.index',['users' =>$userService->ListUsers()]);
    }
    public function first(UserService $userService){
    $user = collect($userService->listUsers())-first();
    
    }
    public function show(UserService $userService, $id) {
        $user = collect($userService->ListUsers())->filter (function($item) use ($id) {
                return $item[Id] ==$id;
        })->first();
}
}
