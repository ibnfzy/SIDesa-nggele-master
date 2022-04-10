<?php

namespace App\Controllers;

use App\Models\M_admin;
use App\Models\M_profil;
use App\Models\M_sejarah;
use App\Models\M_visimisi;
use App\Models\M_keunggulan;
use App\Models\M_berita;
use App\Models\M_peta;
use App\Models\M_pemerintah;
use App\Models\M_detail_keluarga;
use App\Models\M_keluarga;
use App\Models\M_penduduk;

class Admin extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Dashboard'
        ];
        return view('admin/dashboard', $data);
    }

    public function admin(): string
    {
        $admin = new M_admin();

        $data = [
            'title' => 'Admin',
            'js' => 'admin/js/datatables'
        ];

        $data['admin'] = $admin->findAll();

        return view('admin/admin', $data);
    }

    public function add_admin(): string
    {
        $data = [
            'title' => 'Tambah Admin'
        ];
        return view('admin/add-admin', $data);
    }

    /**
     * @throws \ReflectionException
     */
    public function store_admin(): \CodeIgniter\HTTP\RedirectResponse
    {
        $admin = new M_admin();

        $img = (null !== $this->request->getFile('gambar')) ? $this->request->getFile('gambar') : null;

        $passConfirm = $this->request->getPost('confirm');

        if ($this->request->getPost('password') == $passConfirm) {

            $data = [
                'fullname' => $this->request->getPost('fullname'),
                'username' => $this->request->getPost('username'),
                'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
                'type' => $this->request->getPost('jenis'),
                'gambar' => $if = ($img->isValid()) ? $img->getName() : 'avatar5.png'
            ];

            if ($img->isValid() && !$img->hasMoved()) {
                $img->move(ROOTPATH . 'public/admin/uploads');
            }

            $admin->save($data);

            return redirect()->to(base_url('m-admin/admin'))->with('type-status', 'success')
                ->with('message', 'Admin baru telah ditembahkan');
        } else {

            return redirect()->to(base_url('m-admin/admin/add'))->with('type-status', 'error')
                ->with('message', 'Password tidak sama');
        }
    }

    public function edit_admin($id)
    {
        $admin = new M_admin();

        $data = [
            'title' => 'Edit Admin'
        ];

        $data['admin'] = $admin->find($id);

        return view('admin/edit-admin', $data);
    }

    /**
     * @throws \ReflectionException
     */
    public function update_admin($id): \CodeIgniter\HTTP\RedirectResponse
    {
        $admin = new M_admin();

        $img = (null !== $this->request->getFile('gambar')) ? $this->request->getFile('gambar') : null;

        $passConfirm = $this->request->getPost('confirm');

        if ($this->request->getPost('password') == $passConfirm) {

            $data = [
                'fullname' => $this->request->getPost('fullname'),
                'username' => $this->request->getPost('username'),
                'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
                'type' => $this->request->getPost('jenis'),
                'gambar' => $if = ($img->isValid()) ? $img->getName() : 'avatar5.png'
            ];

            if ($img->isValid() && !$img->hasMoved()) {
                $img->move(base_url('admin/uploads/'));
            }

            $admin->update($id, $data);

            return redirect()->to(base_url('m-admin/admin'))->with('type-status', 'success')
                ->with('message', 'Admin baru telah ditembahkan');
        } else {

            return redirect()->to(base_url('m-admin/admin/edit' . $id))->with('type-status', 'error')
                ->with('message', 'Password tidak sama');
        }
    }

    public function delete_admin($id): \CodeIgniter\HTTP\RedirectResponse
    {
        $admin = new M_admin();

        $admin->delete($id);
        return redirect()->to(base_url('m-admin/admin'))->with('type-status', 'success')
            ->with('message', `Admin dengan ID $id telah dihapus`);
    }

    public function profil_desa($id): string
    {
        $profil = new M_profil();

        $data = [
            'title' => 'Profil Desa',
            'parentdir' => 'Profil Desa',
            'js' => 'admin/js/summernote'
        ];

        $data['profil'] = $profil->find($id);

        return view('admin/profil', $data);
    }

    public function update_logo_desa($id): \CodeIgniter\HTTP\RedirectResponse
    {
        $profil = new M_profil();

        $img = (null !== $this->request->getFile('gambar')) ? $this->request->getFile('gambar') : null;

        if ($img->isValid()) {
            $data = [
                'tgl_upload' => date('Y-m-d'),
                'gambar' => $img->getName(),
                'id_admin' => $_SESSION['id_admin']
            ];

            if ($img->isValid() && !$img->hasMoved()) {
                $img->move(ROOTPATH . 'public/admin/uploads');
            }

            $profil->update($id, $data);

            return redirect()->to(base_url('m-admin/profil-desa/' . $id))->with('type-status', 'success')
                ->with('message', 'Profil telah diperbarui');
        } else {
            return redirect()->to(base_url('m-admin/profil-desa/' . $id))->with('type-status', 'error')
                ->with('message', 'Profil gagal diperbarui');
        }
    }

    public function update_informasi_desa($id): \CodeIgniter\HTTP\RedirectResponse
    {
        $profil = new M_profil();

        $data = [
            'tgl_upload' => date('Y-m-d'),
            'kontak' => $this->request->getPost('kontak'),
            'alamat_kantor' => $this->request->getPost('alamat'),
            'id_admin' => $_SESSION['id_admin']
        ];

        $profil->update($id, $data);

        return redirect()->to(base_url('m-admin/profil-desa/' . $id))->with('type-status', 'success')
            ->with('message', 'Profil telah diperbarui');
    }

    /**
     * @throws \ReflectionException
     */
    public function update_profil_desa($id): \CodeIgniter\HTTP\RedirectResponse
    {
        $profil = new M_profil();

        $data = [
            'tgl_upload' => date('Y-m-d'),
            'isi_profile' => $this->request->getPost('editor'),
            'id_admin' => $_SESSION['id_admin']
        ];

        $profil->update($id, $data);

        return redirect()->to(base_url('m-admin/profil-desa/' . $id))->with('type-status', 'success')
            ->with('message', 'Profil telah diperbarui');
    }

    public function sejarah_desa($id = ''): string
    {
        $sejarah = new M_sejarah();

        $data = [
            'title' => 'Sejarah Desa',
            'parentdir' => 'Profil Desa',
            'js' => 'admin/js/summernote'
        ];

        $data['sejarah'] = $sejarah->find($id);

        return view('admin/sejarah', $data);
    }

    public function update_sejarah_desa($id): \CodeIgniter\HTTP\RedirectResponse
    {
        $sejarah = new M_sejarah();

        $data = [
            'tgl_upload' => date('Y-m-d'),
            'isi_sejarah' => $this->request->getPost('editor'),
            'id_admin' => $_SESSION['id_admin']
        ];

        $sejarah->update($id, $data);

        return redirect()->to(base_url('m-admin/sejarah-desa/' . $id))->with('type-status', 'success')
            ->with('message', 'Sejarah Desa telah diperbarui');
    }

    public function visi_misi($id = ''): string
    {
        $visimisi = new M_visimisi();

        $data = [
            'title' => 'Visi & Misi Desa'
        ];

        $data['visimisi'] = $visimisi->find($id);

        return view('admin/visimisi', $data);
    }

    public function update_visi_misi($id): \CodeIgniter\HTTP\RedirectResponse
    {
        $visimisi = new M_visimisi();

        $data = [
            'tgl_upload' => date('Y-m-d'),
            'isi_visi_misi' => $this->request->getPost('editor'),
            'id_admin' => $_SESSION['id_admin']
        ];

        $visimisi->update($id, $data);

        return redirect()->to(base_url('m-admin/visimisi-desa'))->with('type-status', 'success')
            ->with('message', 'Visi & Misi Desa telah diperbarui');
    }

    public function keunggulan(): string
    {
        $keunggulan = new M_keunggulan();

        $data = [
            'title' => 'Keunggulan Desa',
            'js' => 'admin/js/datatables'
        ];

        $data['keunggulan'] = $keunggulan->findAll();

        return view('admin/keunggulan', $data);
    }

    public function add_keunggulan(): string
    {
        $data = [
            'title' => 'Tambah Keunggulan Desa'
        ];

        return view('admin/add-keunggulan', $data);
    }

    public function store_keunggulan(): \CodeIgniter\HTTP\RedirectResponse
    {
        $keunggulan = new M_keunggulan();

        $img = (null !== $this->request->getFile('gambar')) ? $this->request->getFile('gambar') : null;

        if ($img->isValid()) {

            $data = [
                'judul_keunggulan' => $this->request->getPost('judul'),
                'isi_keunggulan' => $this->request->getPost('editor'),
                'gambar' => $img->getName(),
                'tgl_upload' => date('Y-m-d'),
                'jenis_keunggulan' => $this->request->getPost('jenis'),
                'id_admin' => $_SESSION['id_admin']
            ];

            if ($img->isValid() && !$img->hasMoved()) {
                $img->move(base_url('admin/uploads/'));
            }

            $keunggulan->save($data);

            return redirect()->to(base_url('m-admin/keunggulan'))->with('type-status', 'success')
                ->with('message', 'Keunggulan baru telah ditembahkan');
        } else {

            return redirect()->to(base_url('m-admin/keunggulan/add'))->with('type-status', 'error')
                ->with('message', 'Gambar wajib diupload untuk keunggulan desa');
        }
    }

    public function edit_keunggulan($id): string
    {
        $keunggulan = new M_keunggulan();

        $data = [
            'title' => 'Edit Keunggulan'
        ];

        $data['admin'] = $keunggulan->find($id);

        return view('admin/edit-admin', $data);
    }

    public function update_keunggulan($id): \CodeIgniter\HTTP\RedirectResponse
    {
        $keunggulan = new M_keunggulan();

        $img = (null !== $this->request->getFile('gambar')) ? $this->request->getFile('gambar') : null;

        if (!$img->isValid()) {

            $data = [
                'judul_keunggulan' => $this->request->getPost('judul'),
                'isi_keunggulan' => $this->request->getPost('editor'),
                'tgl_upload' => date('Y-m-d'),
                'jenis_keunggulan' => $this->request->getPost('jenis'),
                'id_admin' => $_SESSION['id_admin']
            ];

            $keunggulan->update($id, $data);

            return redirect()->to(base_url('m-admin/keunggulan'))->with('type-status', 'success')
                ->with('message', 'Keunggulan telah diubah');
        } else if ($img->isValid()) {

            $data = [
                'judul_keunggulan' => $this->request->getPost('judul'),
                'isi_keunggulan' => $this->request->getPost('editor'),
                'gambar' => $img->getName(),
                'tgl_upload' => date('Y-m-d'),
                'jenis_keunggulan' => $this->request->getPost('jenis'),
                'id_admin' => $_SESSION['id_admin']
            ];

            if ($img->isValid() && !$img->hasMoved()) {
                $img->move(base_url('admin/uploads/'));
            }

            return redirect()->to(base_url('m-admin/keunggulan'))->with('type-status', 'success')
                ->with('message', 'Keunggulan telah diubah');
        } else {
            return redirect()->to(base_url('m-admin/keunggulan/edit/' . $id))->with('type-status', 'error')
                ->with('message', 'Form tidak boleh kosong');
        }
    }

    public function delete_keunggulan($id): \CodeIgniter\HTTP\RedirectResponse
    {
        $keunggulan = new M_keunggulan();

        $keunggulan->delete($id);
        return redirect()->to(base_url('m-admin/keunggulan'))->with('type-status', 'success')
            ->with('message', `Keunggulan dengan ID $id telah dihapus`);
    }

    public function berita(): string
    {
        $berita = new M_berita();

        $data = [
            'title' => 'Berita Desa'
        ];

        $data['berita'] = $berita->findAll();

        return view('admin/berita', $data);
    }

    public function add_berita(): string
    {
        $data = [
            'title' => 'Tambah Berita'
        ];

        return view('admin/add-berita', $data);
    }

    public function store_berita(): \CodeIgniter\HTTP\RedirectResponse
    {
        $berita = new M_berita();

        $img = (null !== $this->request->getFile('gambar')) ? $this->request->getFile('gambar') : null;

        if ($img->isValid()) {
            $data = [
                'jdl_berita' => $this->request->getPost('judul'),
                'isi_berita' => $this->request->getPost('editor'),
                'thumbnail_berita' => $img->getName(),
                'jenis_berita' => $this->request->getPost('jenis'),
                'tgl_upload' => date('Y-m-d'),
                'id_admin' => $_SESSION['id_admin']
            ];

            if ($img->isValid() && !$img->hasMoved()) {
                $img->move(ROOTPATH . 'public/admin/uploads');
            }

            $berita->save($data);

            return redirect()->to(base_url('m-admin/berita'))->with('type-status', 'success')
                ->with('message', 'Berita baru telah ditembahkan');
        } else {
            return redirect()->to(base_url('m-admin/berita/add'))->with('type-status', 'error')
                ->with('message', 'Gambar wajib diupload untuk berita desa');
        }
    }

    public function edit_berita($id): string
    {
        $berita = new M_berita();

        $data = [
            'title' => 'Edit Berita'
        ];

        $data['berita'] = $berita->find($id);

        return view('admin/berita/edit', $data);
    }

    public function update_berita($id): \CodeIgniter\HTTP\RedirectResponse
    {
        $berita = new M_berita();

        $img = (null !== $this->request->getFile('gambar')) ? $this->request->getFile('gambar') : null;

        if (!$img->isValid()) {
            $data = [
                'jdl_berita' => $this->request->getPost('judul'),
                'isi_berita' => $this->request->getPost('editor'),
                'jenis_berita' => $this->request->getPost('jenis'),
                'tgl_upload' => date('Y-m-d'),
                'id_admin' => $_SESSION['id_admin']
            ];

            $berita->update($id, $data);

            return redirect()->to(base_url('m-admin/berita'))->with('type-status', 'success')
                ->with('message', 'Berita telah diubah');
        } else if ($img->isValid()) {
            $data = [
                'jdl_berita' => $this->request->getPost('judul'),
                'isi_berita' => $this->request->getPost('editor'),
                'thumbnail_berita' => $img->getName(),
                'jenis_berita' => $this->request->getPost('jenis'),
                'tgl_upload' => date('Y-m-d'),
                'id_admin' => $_SESSION['id_admin']
            ];

            if ($img->isValid() && !$img->hasMoved()) {
                $img->move(base_url('admin/uploads/'));
            }

            $berita->update($id, $data);

            return redirect()->to(base_url('m-admin/berita'))->with('type-status', 'success')
                ->with('message', 'Berita telah diubah');
        } else {
            return redirect()->to(base_url('m-admin/berita/edit/' . $id))->with('type-status', 'error')
                ->with('message', 'Form tidak boleh kosong');
        }
    }

    public function delete_berita($id): \CodeIgniter\HTTP\RedirectResponse
    {
        $berita = new M_berita();

        $berita->delete($id);

        return redirect()->to(base_url('m-admin/berita'))->with('type-status', 'success')
            ->with('message', `Berita dengan ID $id telah dihapus`);
    }

    public function peta_desa($id = ''): string
    {
        $peta = new M_peta();

        $data = [
            'title' => 'Peta Desa',
            'parentdir' => 'Profil Desa',
        ];

        $data['peta'] = $peta->find($id);

        return view('admin/peta', $data);
    }

    public function update_peta($id): \CodeIgniter\HTTP\RedirectResponse
    {
        $peta = new M_peta();

        $data = [
            'keterangan' => $this->request->getPost('keterangan'),
            'url' => $this->request->getPost('url'),
        ];

        $peta->update($id, $data);

        return redirect()->to(base_url('m-admin/peta-desa/' . $id))->with('type-status', 'success')
            ->with('message', 'Peta Desa telah diperbarui');
    }

    public function pemerintah_desa($id = ''): string
    {
        $pemerintah = new M_pemerintah();

        $data = [
            'title' => 'Pemerintah Desa'
        ];

        $data['pemerintah'] = $pemerintah->find($id);

        return view('admin/pemerintah', $data);
    }

    public function update_pemerintah($id): \CodeIgniter\HTTP\RedirectResponse
    {
        $pemerintah = new M_pemerintah();

        $data = [
            'tgl_upload' => date('Y-m-d'),
            'isi_pemerintah_desa' => $this->request->getPost('editor'),
            'id_admin' => $_SESSION['id_admin']
        ];

        $pemerintah->update($id, $data);

        return redirect()->to(base_url('m-admin/pemerintah-desa'))->with('type-status', 'success')
            ->with('message', 'Pemerintah Desa telah diperbarui');
    }

    public function penduduk(): string
    {
        $penduduk = new M_penduduk();

        $data = [
            'title' => 'Table Penduduk'
        ];

        $data['penduduk'] = $penduduk->findAll();

        return view('admin/penduduk', $data);
    }

    public function add_penduduk(): string
    {
        $data = [
            'title' => 'Tambah Penduduk'
        ];

        return view('admin/add-penduduk', $data);
    }

    public function store_penduduk(): \CodeIgniter\HTTP\RedirectResponse
    {
        $penduduk = new M_penduduk();

        $data = [
            'NIK' => $this->request->getPost('nik'),
            'nama' => $this->request->getPost('nama'),
            'tempat_lahir' => $this->request->getPost('tempat_lahir'),
            'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'goldar' => $this->request->getPost('goldar'),
            'alamat' => $this->request->getPost('alamat'),
            'rt' => $this->request->getPost('rt'),
            'rw' => $this->request->getPost('rw'),
            'agama' => $this->request->getPost('agama'),
            'status_pernikahan' => $this->request->getPost('status_pernikahan'),
            'pekerjaan' => $this->request->getPost('pekerjaan'),
            'kewarganegaraan' => $this->request->getPost('kewarganegaraan')
        ];

        $penduduk->save($data);

        return redirect()->to(base_url('m-admin/penduduk'))->with('type-status', 'success')
            ->with('message', 'Penduduk telah ditembahkan');
    }

    public function edit_penduduk($id): string
    {
        $penduduk = new M_penduduk();

        $data = [
            'title' => 'Edit Penduduk'
        ];

        $data['penduduk'] = $penduduk->find($id);

        return view('admin/edit-penduduk', $data);
    }

    public function update_penduduk($id): \CodeIgniter\HTTP\RedirectResponse
    {
        $penduduk = new M_penduduk();

        $data = [
            'NIK' => $this->request->getPost('nik'),
            'nama' => $this->request->getPost('nama'),
            'tempat_lahir' => $this->request->getPost('tempat_lahir'),
            'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'goldar' => $this->request->getPost('goldar'),
            'alamat' => $this->request->getPost('alamat'),
            'rt' => $this->request->getPost('rt'),
            'rw' => $this->request->getPost('rw'),
            'agama' => $this->request->getPost('agama'),
            'status_pernikahan' => $this->request->getPost('status_pernikahan'),
            'pekerjaan' => $this->request->getPost('pekerjaan'),
            'kewarganegaraan' => $this->request->getPost('kewarganegaraan')
        ];

        $penduduk->update($id, $data);

        return redirect()->to(base_url('m-admin/penduduk'))->with('type-status', 'success')
            ->with('message', 'Penduduk telah diperbarui');
    }

    public function detail_penduduk($id): string
    {
        $penduduk = new M_penduduk();

        $data = [
            'title' => 'Edit Penduduk'
        ];

        $data['penduduk'] = $penduduk->find($id);

        return view('admin/detail-penduduk', $data);
    }

    public function detele_penduduk($id): \CodeIgniter\HTTP\RedirectResponse
    {
        $penduduk = new M_penduduk();

        $penduduk->delete($id);

        return redirect()->to(base_url('m-admin/penduduk'))->with('type-status', 'success')
            ->with('message', `Penduduk dengan ID $id telah dihapus`);
    }

    public function keluarga(): string
    {
        $keluarga = new M_keluarga();

        $data = [
            'title' => 'Table Kartu Keluarga'
        ];

        $data['keluarga'] = $keluarga->findAll();

        return view('admin/keluarga', $data);
    }
}