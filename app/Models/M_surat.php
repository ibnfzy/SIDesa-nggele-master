<?php

namespace App\Models;

use CodeIgniter\Model;

class M_surat extends Model
{
    protected $table = 'surat';
    protected $primaryKey = 'id_surat';
    protected $allowedFields = [
        'kode_surat',
        'nama_surat',
        'file_temp_surat'
    ];
}