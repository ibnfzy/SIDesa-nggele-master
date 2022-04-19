<?php

namespace App\Controllers;

use App\Models\M_berita;
use App\Models\M_slider;

class Home extends BaseController
{
	protected $slider;
	protected $berita;
	protected $db;
	protected $beritaM;
	protected $baru;

	public function __construct()
	{
		$this->db = \Config\Database::connect();
		$this->slider = new M_slider();
		$this->beritaM = new M_berita();
		$this->berita = $this->db->table('berita');
		$this->baru = $this->berita->orderBy('id_berita', 'DESC')->limit(4)->get()->getResultArray();
	}

	public function index(): string
	{
		$data = [
			'title' => 'Home'
		];

		$data['slider'] = $this->slider->findAll();
		$data['berita'] = $this->baru;

		return view('home', $data);
	}

	public function berita(): string
	{
		$data = [
			'title' => 'Berita Desa',
			'berita' => $this->beritaM->paginate(4, 'berita'),
			'baru' => $this->baru,
			'pager' => $this->beritaM->pager
		];

		return view('berita', $data);
	}

	public function detail_berita($id): string
	{
		$get = $this->beritaM->where('id_berita', $id)->first();

		$data = [
			'title' => $get['title'],
			'isi_berita' => $get['isi_berita'],
			'thumbnail_berita' => $get['thumbnail_berita'],
			'tgl_upload' => $get['tgl_upload'],
			'baru' => $this->baru,
			'id' => $id
		];

		return view('detail-berita', $data);
	}

	//--------------------------------------------------------------------

}