<?php

namespace App\Models;

use CodeIgniter\Model;

class M_detail_keluarga extends Model
{
    protected $table = 'detail_keluarga';
    protected $primaryKey = 'id_detail_keluarga';
    protected $allowedFields = [
        'id_keluarga',
        'id_penduduk',
        'nama',
        'status_perkawinan',
        'status_hubungan_dalam_keluarga',
        'kewarganegaraan',
        'dokumen_imigrasi',
        'nama_bapak',
        'nama_ibu'
    ];
}