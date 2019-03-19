<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelPrimer;

class Auditorne1 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function modeli(){

        $model = new ModelPrimer();
        $upit = $model->dohvatiPodatke();
        $data = array();
        $data['podaci'] = $upit;
        return view('galerija',$data);

//        $brisanje = $model->brisanjeUloge();
//        if($brisanje){
//            echo "Uspesno obrisana uloga";
//        }
    }
    public function index(Request $zahtev)
    {
//        return view("index");

//        $niz = [
//            'ime' => "Pera",
//            'prezime' => "Peric",
//            'adresa' => "Perina adresa 123"
//        ];
//        return response($niz,206)->header('Content-Type','text/plain');
//
//        return redirect("/galerija");

    }

    public function galerija(){

        return view("galerija");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function show($var)
    {
        return  $var;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
