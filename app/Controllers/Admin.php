<?php

namespace App\Controllers;

use App\Models\M_admin;

class Admin extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard'
        ];
        return view('admin/dashboard', $data);
    }

    public function admin()
    {
        $admin = new M_admin();

        $data = [
            'title' => 'Admin',
            'js' => 'admin/js/datatables'
        ];

        $data['admin'] = $admin->findAll();

        return view('admin/admin', $data);
    }

    public function add_admin()
    {
        $data = [
            'title' => 'Tambah Admin'
        ];
        return view('admin/add-admin', $data);
    }

    public function store_admin()
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
                'gambar' => $if = (isset($img)) ? $img->getName() : 'avatar5.png'
            ];

            if (isset($img) && $img->isValid() && !$img->hasMoved()) {
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

    public function update_admin($id)
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
                'gambar' => $if = (isset($img)) ? $img->getName() : 'avatar5.png'
            ];

            if (isset($img) && $img->isValid() && !$img->hasMoved()) {
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

    public function delete_admin($id)
    {
        $admin = new M_admin();

        $admin->delete($id);
        return redirect()->to(base_url('m-admin/admin'))->with('type-status', 'success')
            ->with('message', `Admin dengan ID $id telah dihapus`);
    }
}