<?php

namespace App\Models;

use CodeIgniter\Model;

class M_keunggulan extends Model
{
    protected $table = 'keunggulan_desa';
    protected $primaryKey = 'id_keunggulan';
    protected $allowedFields = [
        'judul_keunggulan',
        'isi_keunggulan',
        'gambar',
        'tgl_upload',
        'jenis_keunggulan',
        'id_admin'
    ];
}