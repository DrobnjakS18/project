<?php

namespace App\Http\Controllers;

use App\Models\ModelLab1;
use Illuminate\Http\Request;
use App\Models\Kategorije;
class Lab1 extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {

        $baza = new ModelLab1();
        $rez = $baza->DohvatiProizvodi();
        $data['podaci'] = $rez;

        $kat = new Kategorije();
        $select = $kat->DohvatiKat();
        $data['niz'] = $select;
////
//        $filter = $kat->DohvatiJednu($id);
//        $data['filter'] = $filter;
       return view('index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $kor_ime = $_POST['tbKorisnickoIme'];
        $pass = $_POST['tbLozinka'];
        $pass = md5($pass);

        $baza = new ModelLab1();
        $rez = $baza->Login($kor_ime,$pass);
        $login_niz= [];
        $login_niz['login'] = $rez;
        return view('login',$login_niz);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
