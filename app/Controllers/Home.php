<?php

namespace App\Controllers;

use App\Models\M_berita;
use App\Models\M_keunggulan;
use App\Models\M_slider;

class Home extends BaseController
{
	protected $slider;
	protected $berita;
	protected $db;
	protected $beritaM;
	protected $keunggulanM;
	protected $baru;

	public function __construct()
	{
		$this->db = \Config\Database::connect();
		$this->slider = new M_slider();
		$this->beritaM = new M_berita();
		$this->keunggulanM = new M_keunggulan();
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
			'title' => $get['jdl_berita'],
			'isi_berita' => $get['isi_berita'],
			'thumbnail_berita' => $get['thumbnail_berita'],
			'tgl_upload' => $get['tgl_upload'],
			'baru' => $this->baru,
			'id' => $id
		];

		return view('detail-berita', $data);
	}

	public function keunggulan(): string
	{
		$data = [
			'title' => 'Keunggulan Desa',
			'keunggulan' => $this->keunggulanM->paginate(4, 'keunggulan'),
			'baru' => $this->baru,
			'pager' => $this->keunggulanM->pager
		];

		return view('keunggulan', $data);
	}

	public function detail_keunggulan($id): string
	{
		$get = $this->keunggulanM->where('id_keunggulan', $id)->first();

		$data = [
			'title' => $get['judul_keunggulan'],
			'isi' => $get['isi_keunggulan'],
			'gambar' => $get['gambar'],
			'tgl_upload' => $get['tgl_upload'],
			'baru' => $this->baru,
			'id' => $id
		];

		return view('detail-keunggulan', $data);
	}
}