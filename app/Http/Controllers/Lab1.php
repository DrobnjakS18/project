<?php

namespace App\Http\Controllers;

use App\Models\ModelLab1;
use App\Models\Navigacija;
use Illuminate\Http\Request;
use App\Models\Kategorije;
class Lab1 extends Controller
{

    private $data = [];

    public function __construct(){

        $meni = new Navigacija();
        $this->data['meni'] = $meni->get();

        $kat = new Kategorije();
        $select = $kat->DohvatiKat();
        $this->data['niz'] = $select;

    }


    public function getLogin(){


        return view('login',$this->data);
    }


    public function store(Request $request)
    {

        $log = new ModelLab1();

        $login = $log->Login($request->tbKorisnickoIme,$request->tbLozinka);

        if(!$login->isEmpty()){

            session(['user' => $log]);

            return redirect();

        }else{

            return redirect()->back()->with('log_error','Nije pronadjen takav korisnik u bazi');
        }

    }


//    public function index()
//    {
//
//        $baza = new ModelLab1();
//        $rez = $baza->DohvatiProizvodi();
//        $this->data['podaci'] = $rez;
//////
////        $filter = $kat->DohvatiJednu($id);
////        $data['filter'] = $filter;
//       return view('index',$this->data);
//    }
//

    public function destroy()
    {
        session()->flush();

        return redirect()->back();
    }
}
