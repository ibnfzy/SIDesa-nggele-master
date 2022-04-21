<?php

namespace App\Models;

use CodeIgniter\Model;

class M_aspirasi extends Model
{
    protected $table = 'aspirasi';
    protected $primaryKey = 'id_aspirasi';
    protected $allowedFields = [
        'NIK',
        'isi_aspirasi',
        'tgl_kirim'
    ];
}