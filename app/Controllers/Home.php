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

	public function __construct()
	{
		$this->db = \Config\Database::connect();
		$this->slider = new M_slider();
		$this->beritaM = new M_berita();
		$this->berita = $this->db->table('berita');
	}

	public function index(): string
	{
		$data = [
			'title' => 'Home'
		];

		$data['slider'] = $this->slider->findAll();
		$data['berita'] = $this->berita->orderBy('id_berita', 'DESC')->limit(3)->get()->getResultArray();

		return view('home', $data);
	}

	public function berita(): string
	{
		$data = [
			'title' => 'Berita Desa',
			'berita' => $this->beritaM->paginate(4, 'berita'),
			'baru' => $this->berita->orderBy('id_berita', 'DESC')->limit(3)->get()->getResultArray(),
			'pager' => $this->beritaM->pager
		];

		return view('berita', $data);
	}

	//--------------------------------------------------------------------

}