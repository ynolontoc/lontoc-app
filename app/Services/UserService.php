<?php
namespace App\Services;

use function PHPUnit\Framework\returnArgument;

class UserService{

    protected $user;

    public function __construct($users) {
        $this->users = $users;
    }
    
    public function ListUsers(){
        return $this->users;
    }
    
}