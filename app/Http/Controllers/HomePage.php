<?php

namespace App\Http\Controllers;

use App\Models\ModelLab1;
use Illuminate\Http\Request;

class HomePage extends BaseController
{
    public function index(){

        $baza = new ModelLab1();
        $rez = $baza->DohvatiProizvodi();
        $this->data['podaci'] = $rez;
////
//        $filter = $kat->DohvatiJednu($id);
//        $data['filter'] = $filter;
       return view('index',$this->data);


    }
}
