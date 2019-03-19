<?php
/**
 * Created by PhpStorm.
 * User: DrobnjakS
 * Date: 1/28/2019
 * Time: 9:36 PM
 */

namespace App\Models;
use Illuminate\Support\Facades\DB;

class Kategorije
{
    public function DohvatiKat(){
        $rez = DB::select('SELECT * FROM kategorija');
        return $rez;
    }

    public function DohvatiJednu($id){

        $rez = DB::select('SELECT * FROM proizvodi p INNER JOIN kategorija k ON p.id_kat = k.id Where k.id = :id',array('id'=>$id));
        return $rez;
    }
}