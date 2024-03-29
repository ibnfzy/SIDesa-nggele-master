<?php

namespace App\Controllers;

use App\Models\M_admin;
use App\Models\M_profil;

class Login extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Menu Login'
        ];
        return view('login/login', $data);
    }

    public function auth()
    {
        $session = session();

        $admin = new M_admin();

        $profil = new M_profil();

        $username = $this->request->getPost('username');

        $password = $this->request->getPost('password');

        //  ! mengecek username pada database
        $data = $admin->where('username', $username)->first();

        // ! Memanggil data profil
        $datax = $profil->find(1);

        $data['logo'] = $datax['gambar'];

        if ($data) {
            $password_data = $data['password'];
            $id = $data['id_admin'];

            $verifyPassword = password_verify($password, $password_data);

            if ($verifyPassword) {
                $sessionData = [
                    'id_admin' => $data['id_admin'],
                    'fullname' => $data['fullname'],
                    'username' => $data['username'],
                    'gambar' => $data['gambar'],
                    'logo' => $data['logo'],
                    'logged_in' => TRUE
                ];

                $session->set($sessionData);

                $data = [
                    'last_login' => date('Y-m-d')
                ];

                $admin->update($id, $data);

                return redirect()->to(base_url('m-admin'))->with('type-status', 'info')
                    ->with('message', 'Selamat Datang Kembali ' . $sessionData['fullname']);
            } else {
                return redirect()->to(base_url('login'))->with('type-status', 'error')
                    ->with('message', 'Username atau Password tidak benar');
            }
        } else {
            return redirect()->to(base_url('login'))->with('type-status', 'error')
                ->with('message', 'Username atau Password tidak benar');
        }
    }

    public function logout()
    {
        $session = session();

        $session->destroy();

        $data = [
            'title' => 'Menu Login'
        ];

        return view('login/login', $data);
    }
}