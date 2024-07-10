<?php

namespace App\Services;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

use App\Repositories\UserRepository;

class UserService { 
    
    private UserRepository $userRepository;
    
    public function __construct(UserRepository $userRepository) {
        $this->userRepository = $userRepository;
    }

    public function getUserList() {
        $list = $this->userRepository->getByOptions([]);
        return $list;
    }
}