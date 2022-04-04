<?php

namespace App\Models;

use CodeIgniter\Model;

class M_visimisi extends Model
{
    protected $table = 'visi_misi';
    protected $primaryKey = 'id_visi_misi';
    protected $allowedFields = [
        'tgl_upload',
        'isi_visi_misi',
        'id_admin'
    ];
}