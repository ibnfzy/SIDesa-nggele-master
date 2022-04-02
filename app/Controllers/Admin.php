<?php

namespace App\Controllers;

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
        $data = [
            'title' => 'Admin',
            'js' => 'admin/js/datatables'
        ];
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
        // wait
    }
}