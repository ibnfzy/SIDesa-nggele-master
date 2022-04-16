<?php

namespace App\Models;

use CodeIgniter\Model;

class M_slider extends Model
{
    protected $table = 'slider';
    protected $primaryKey = 'id_slider';
    protected $allowedFields = [
        'gambar',
        'link',
        'kategori',
        'tgl_upload'
    ];
}