<?php

namespace App\Models;

use CodeIgniter\Model;

class M_penduduk extends Model
{
    protected $table = 'penduduk';
    protected $primaryKey = 'id_penduduk';
    protected $allowedFields = [
        'NIK',
        'nama',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'goldar',
        'alamat',
        'rt',
        'rw',
        'agama',
        'status_pernikahan',
        'pekerjaan',
        'kewarganegaraan',
        'no_kk',
        'dusun'
    ];
}