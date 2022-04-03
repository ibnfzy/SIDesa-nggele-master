<?php

namespace App\Models;

use CodeIgniter\Model;

class M_admin extends Model
{
    protected $table = 'admin';
    protected $primaryKey = 'id_admin';
    protected $allowedFields = [
        'fullname',
        'username',
        'password',
        'type',
        'gambar',
        'last_login'
    ];
}