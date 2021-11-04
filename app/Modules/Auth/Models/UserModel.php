<?php

namespace App\Modules\Auth\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'user';
    protected $primaryKey = 'Id_user';
    protected $useAutoIncrement = true;

    protected $allowedFields = ['Nama_user', 'Pass_user', 'Nick_user'];

}