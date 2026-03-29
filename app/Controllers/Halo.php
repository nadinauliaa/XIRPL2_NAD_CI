<?php

namespace App\Controllers;

class Halo extends BaseController
{
    public function index()
    {
        $data['tittle']= 'Hallo Dunia!';
        $data['msg']= 'Selamat Datang Di CodeIGniter4!';
        echo view(name: 'halo_view', data: $data);
    }
}