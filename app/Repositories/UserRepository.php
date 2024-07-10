<?php

namespace App\Repositories;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserRepository extends BaseRepository { 
    
    public function __construct(User $user) {
		$this->model = $user;
	}

    public function getByOptions(array $options) { 
        $result = $this->model
			->from('users as usr')
			->select('usr.*')->limit(10);

        return parent::getByOption($options, $result);
    }
}