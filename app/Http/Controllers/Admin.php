<?php

namespace App\Http\Controllers;

use App\Models\RuteModel;
use Illuminate\Http\Request;

class Admin extends BaseController
{
    public function index(){

        $rute = new RuteModel();

        $this->data['datum'] = $rute->datum();
        $this->data['mesto'] = $rute->mesto();
        $this->data['vreme'] = $rute->vreme();

        return view('admin',$this->data);
    }

    public function store(Request $request){

        $request->validate([
            'datum' => 'exists:datum,id',
            'mesto_od' => 'exists:mesto,id',
            'mesto_do' => 'exists:mesto,id',
            'polazak' => 'exists:vreme,id',
            'dolazak' => 'exists:vreme,id'
        ]);


        $ruta = new RuteModel();

        $ruta->mesto_od = $request->mesto_od;
        $ruta->mesto_do = $request->mesto_do;
        $ruta->datumi = $request->datum;
        $ruta->polazak = $request->polazak;
        $ruta->dolazak = $request->dolazak;



        try{

            $ruta->inset();

            return redirect()->back()->with('insert_success','Uspesno uneta ruta');

        }catch (\Exception $e){

            echo $e->getMessage();
        }



    }
}
