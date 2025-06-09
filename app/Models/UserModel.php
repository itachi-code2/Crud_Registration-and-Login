<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{   
    protected $table      = 'users';

    protected $primaryKey = 'id';
    
    protected $allowedFields = ['first_name', 'middle_name', 'last_name', 'username', 'password'];
    
    protected $useTimestamps = true;
}