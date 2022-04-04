<?php

namespace App\Models;

use CodeIgniter\Model;

class M_profil extends Model
{
    protected $table = 'profile_desa';
    protected $primaryKey = 'id_profile';
    protected $allowedFields = [
        'tgl_upload',
        'isi_profile',
        'id_admin'
    ];
}