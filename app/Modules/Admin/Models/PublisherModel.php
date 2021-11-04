<?php

namespace App\Modules\Admin\Models;

use CodeIgniter\Model;

class PublisherModel extends Model
{
    protected $table      = 'publisher';
    protected $primaryKey = 'Id_publisher';
    protected $useAutoIncrement = true;

    protected $allowedFields = ['Nama_publisher'];

}