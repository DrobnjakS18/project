<?php
/**
 * Created by PhpStorm.
 * User: DrobnjakS
 * Date: 1/31/2019
 * Time: 8:21 PM
 */

namespace App\Models;
use Illuminate\Support\Facades\DB;
use App\Models\Navigacija;

class ModelLab1
{

    public function DohvatiProizvodi(){

        $rez = DB::table('proizvodi')->get();
        return $rez;
    }

    public function Login($kor_ime,$pass){

        $rez = DB::table('korisnici')
            ->join('uloge','korisnici.id_uloga','=','uloge.id_uloga')
            ->where([
                ['korisnicko_ime',$kor_ime],
                ['lozinka',md5($pass)]
            ])
            ->get();
        return $rez;
    }
}