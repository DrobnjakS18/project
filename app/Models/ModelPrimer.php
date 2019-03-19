<?php
/**
 * Created by PhpStorm.
 * User: DrobnjakS
 * Date: 1/25/2019
 * Time: 12:23 AM
 */

namespace App\Models;
use Illuminate\Support\Facades\DB;

class ModelPrimer
{

    public function  dohvatiPodatke(){

        $rez = DB::select('SELECT * FROM proizvodi');

        return $rez;
    }

    public function dodajPodatke(){

        DB::insert("INSERT INTO `uloge`(`id_uloga`, `naziv`) VALUES (null,:uloga)",array('uloga'=>'superAdmin'));

    }

    public function brisanjeUloge(){

        DB::delete('DELETE FROM `uloge` WHERE naziv = :naziv ',array(':naziv'=>'superAdmin'));
        return true;
    }

}