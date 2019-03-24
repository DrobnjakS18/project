<?php

namespace App\Http\Controllers;

use App\Models\ModelLab1;
use Illuminate\Http\Request;
class Lab1 extends BaseController
{


    public function getLogin(){


        return view('login',$this->data);
    }


    public function store(Request $request)
    {

        $log = new ModelLab1();

        $login = $log->Login($request->tbKorisnickoIme,$request->tbLozinka);

        if($login != null){

            session(['user' => $login]);

            return redirect('/home');

        }else{

            return redirect()->back()->with('log_error','Nije pronadjen takav korisnik u bazi');
        }

    }


    public function destroy()
    {
        session()->flush();

        return redirect('/');
    }

    public  function getReg(){

        return view('reg');
    }

    public function storeUser(Request $request){

       $request->validate([

           'tbIme' => 'required|alpha|max:20|min:3',
           'tbPrezime' => 'required|alpha|max:20|min:3',
           'tbKorisnickoIme' => 'required|max:50|min:3',
           'tbLozinka' => 'required|min:3',
       ]);


       $reg = new ModelLab1();

       $reg->ime = $request->tbIme;
       $reg->prezime = $request->tbPrezime;
       $reg->kor_ime = $request->tbKorisnickoIme;
       $reg->lozinka = $request->tbLozinka;


       try{

           $reg->insertUser();

        return redirect('/')->with('Reg_success','Uspesno ste se registrovali, molim vas uloguj te se');

       } catch (\Exception $e){

           return $e->getMessage();
       }






    }


}
