<?php

namespace App\Models;

use CodeIgniter\Model;

class M_sejarah extends Model
{
    protected $table = 'sejarah_desa';
    protected $primaryKey = 'id_sejarah';
    protected $allowedFields = [
        'tgl_upload',
        'isi_sejarah',
        'id_admin'
    ];
}