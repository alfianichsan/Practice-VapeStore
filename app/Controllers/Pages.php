<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function home()
    {
        $data = [
            'title' => 'Home | Vape Store',
        ];
        return view('/pages/home', $data);
    }

    public function store()
    {
        $data = [
            'title' => 'Store | Vape Store',
        ];
        return view('/pages/liquid-freebase', $data);
    }

    public function detail()
    {
        $data = [
            'title' => 'Detail | Vape Store',
        ];
        return view('/pages/detail', $data);
    }
    //--------------------------------------------------------------------

}
