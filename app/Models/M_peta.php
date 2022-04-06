<?php

namespace App\Models;

use CodeIgniter\Model;

class M_peta extends Model
{
    protected $table = 'peta_desa';
    protected $primaryKey = 'id_peta';
    protected $allowedFields = [
        'keterangan',
        'url'
    ];
}