<?php

namespace App\Controllers;

use App\Models\M_admin;
use App\Models\M_profil;
use App\Models\M_sejarah;
use App\Models\M_visimisi;
use App\Models\M_keunggulan;

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
                $img->move(base_url('admin/uploads/'));
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

    public function profil_desa($id = ''): string
    {
        $profil = new M_profil();

        $data = [
            'title' => 'Profil Desa'
        ];

        $data['profil'] = $profil->find($id);

        return view('admin/profil', $data);
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

        return redirect()->to(base_url('m-admin/profil-desa'))->with('type-status', 'success')
            ->with('message', 'Profil telah diperbarui');
    }

    public function sejarah_desa($id = ''): string
    {
        $sejarah = new M_sejarah();

        $data = [
            'title' => 'Sejarah Desa'
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

        return redirect()->to(base_url('m-admin/sejarah-desa'))->with('type-status', 'success')
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
}