<?php

namespace App\Models;

use CodeIgniter\Model;

class M_pemerintah extends Model
{
    protected $table = 'pemerintah_desa';
    protected $primaryKey = 'id_pemerintah_desa';
    protected $allowedFields = [
        'tgl_upload',
        'isi_pemerintah_desa',
        'id_admin'
    ];
}