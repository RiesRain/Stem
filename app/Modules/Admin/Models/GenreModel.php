<?php

namespace App\Modules\Admin\Models;

use CodeIgniter\Model;

class GenreModel extends Model
{
    protected $table      = 'genre';
    protected $primaryKey = 'Id_genre';
    protected $useAutoIncrement = true;

    protected $allowedFields = ['Nama_genre'];

}