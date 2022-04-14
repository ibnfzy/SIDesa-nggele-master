<?php

namespace App\Models;

use CodeIgniter\Model;

class M_log_surat extends Model
{
    protected $table = 'log_surat';
    protected $primaryKey = 'id_log_surat';
    protected $allowedFields = [
        'id_surat',
        'no_surat',
        'nik_penduduk',
        'status_pengambilan'
    ];
}