<?php

namespace App\Controllers;

use App\Models\M_berita;
use App\Models\M_keunggulan;
use App\Models\M_pemerintah;
use App\Models\M_peta;
use App\Models\M_profil;
use App\Models\M_sejarah;
use App\Models\M_slider;
use App\Models\M_visimisi;

class Home extends BaseController
{
	protected $slider;
	protected $berita;
	protected $db;
	protected $beritaM;
	protected $keunggulanM;
	protected $baru;
	protected $profilM;
	protected $sejarahM;
	protected $petaM;
	protected $visimisiM;
	protected $pemerintahM;

	public function __construct()
	{
		$this->db = \Config\Database::connect();
		$this->slider = new M_slider();
		$this->beritaM = new M_berita();
		$this->keunggulanM = new M_keunggulan();
		$this->profilM = new M_profil();
		$this->sejarahM = new M_sejarah();
		$this->petaM = new M_peta();
		$this->visimisiM = new M_visimisi();
		$this->pemerintahM = new M_pemerintah();
		$this->berita = $this->db->table('berita');
		$this->baru = $this->berita->orderBy('id_berita', 'DESC')->limit(4)->get()->getResultArray();

		if (!isset($_SESSION['kontak'])) {
			Home::sessionHome();
		}
	}

	public function sessionHome()
	{
		$session = session();

		$get = $this->profilM->find(1);

		$sessionData = [
			'kontak' => $get['kontak'],
			'alamat_kantor' => $get['alamat_kantor'],
			'logo' => $get['gambar'],
			'email' => $get['email']
		];

		$session->set($sessionData);
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

	public function profil(): string
	{
		$get = $this->profilM->where('id_profile', 1)->first();

		$data = [
			'title' => 'Profil Desa',
			'isi' => $get['isi_profile'],
			'gambar' => $get['gambar'],
			'tgl_upload' => $get['tgl_upload'],
			'baru' => $this->baru
		];

		return view('profil', $data);
	}

	public function sejarah(): string
	{
		$get = $this->sejarahM->where('id_sejarah', 1)->first();

		$data = [
			'title' => 'Sejarah Desa',
			'isi' => $get['isi_sejarah'],
			'tgl_upload' => $get['tgl_upload'],
			'baru' => $this->baru
		];

		return view('sejarah', $data);
	}

	public function peta(): string
	{
		$get = $this->petaM->where('id_peta', 1)->first();

		$data = [
			'title' => 'Peta Desa',
			'url' => $get['url'],
			'baru' => $this->baru,
			'ket' => $get['keterangan']
		];

		return view('peta', $data);
	}

	public function visimisi(): string
	{
		$get = $this->visimisiM->where('id_visi_misi', 1)->first();

		$data = [
			'title' => 'Visi & Misi Desa',
			'tgl_upload' => $get['tgl_upload'],
			'isi' => $get['isi_visi_misi'],
			'baru' => $this->baru
		];

		return view('visimisi', $data);
	}

	public function pemerintah(): string
	{
		$get = $this->pemerintahM->where('id_pemerintah_desa', 1)->first();

		$data = [
			'title' => 'Pemerintah Desa',
			'tgl_upload' => $get['tgl_upload'],
			'isi' => $get['isi_pemerintah_desa'],
			'baru' => $this->baru
		];

		return view('pemerintah', $data);
	}
}