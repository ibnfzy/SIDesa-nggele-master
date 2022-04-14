<?php

namespace App\Models;

use CodeIgniter\Model;

class M_dusun extends Model
{
    protected $table = 'dusun';
    protected $primaryKey = 'id_dusun';
    protected $allowedFields = [
        'nama_dusun',
        'nik_kepala_dusun',
        'nama_kepala_dusun',
        'rw',
        'rt'
    ];
}