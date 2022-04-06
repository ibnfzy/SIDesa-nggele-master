<?php

namespace App\Models;

use CodeIgniter\Model;

class M_berita extends Model
{
    protected $table = 'berita';
    protected $primaryKey = 'id_berita';
    protected $allowedFields = [
        'jdl_berita',
        'isi_berita',
        'thumbnail_berita',
        'jenis_berita',
        'tgl_upload',
        'id_admin'
    ];
}