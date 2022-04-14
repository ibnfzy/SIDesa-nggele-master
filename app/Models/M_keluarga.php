<?php

namespace App\Models;

use CodeIgniter\Model;

class M_keluarga extends Model
{
    protected $table = 'keluarga';
    protected $primaryKey = 'id_keluarga';
    protected $allowedFields = [
        'no_kk',
        'alamat',
        'rt',
        'rw',
        'desa_kelurahan',
        'kecamatan',
        'kabupaten_kota',
        'provinsi',
        'dusun',
        'tanggal_dikeluarkan'
    ];
}