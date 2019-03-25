<?php
/**
 * Created by PhpStorm.
 * User: DrobnjakS
 * Date: 3/25/2019
 * Time: 2:27 PM
 */

namespace App\Models;


class RuteModel
{
    public $datumi;
    public $mesto_od;
    public $mesto_do;
    public $polazak;
    public $dolazak;
    public $r_id;
    public $k_id;
    public $br_mesta;

    public function datum(){

        return \DB::table('datum')
            ->get();
    }

    public function mesto(){

        return \DB::table('mesto')
            ->get();
    }

    public function vreme(){

        return \DB::table('vreme')
            ->get();
    }

    public function inset(){

        \DB::table('ruta')
            ->insert([
                'mesto_od' =>$this->mesto_od,
                'mesto_do' => $this->mesto_do,
                'datum_id' => $this->datumi,
                'vreme_od' => $this->polazak,
                'vreme_do' => $this->dolazak,
                'broj_mesta' => 58
            ]);
    }

    public function getRute(){

        return \DB::table('ruta')
            ->select('*','ruta.id as ROUTE')
            ->join('mesto as od','ruta.mesto_od','=','od.id')
            ->join('mesto as do','ruta.mesto_do','=','do.id')
            ->join('datum','ruta.datum_id','=','datum.id')
            ->join('vreme','ruta.vreme_od','=','vreme.id')
            ->get();


    }

    public function getOneRute($id){

        return \DB::table('ruta')
            ->select('*','ruta.id as ROUTE')
            ->join('mesto as od','ruta.mesto_od','=','od.id')
            ->join('mesto as do','ruta.mesto_do','=','do.id')
            ->join('datum','ruta.datum_id','=','datum.id')
            ->join('vreme','ruta.vreme_od','=','vreme.id')
            ->where('ruta.id',$id)
            ->first();


    }

    public function rezervacija(){

        \DB::transaction(function (){

            \DB::table('ruta')
                ->where('id',$this->r_id)
                ->update([
                    'broj_mesta' => $this->br_mesta-1
                ]);

            \DB::table('rezervacija')
                ->insert([
                    'kor_id' => $this->k_id,
                    'ruta_id' => $this->r_id
                ]);

        });


    }

    public function del_rez($id){

        \DB::table('rezervacija')
            ->where('id',$id)
            ->delete();
    }


    public function filter_datum($id){

        return \DB::table('ruta')
            ->select('*','ruta.id as ROUTE')
            ->join('mesto as od','ruta.mesto_od','=','od.id')
            ->join('mesto as do','ruta.mesto_do','=','do.id')
            ->join('datum','ruta.datum_id','=','datum.id')
            ->join('vreme','ruta.vreme_od','=','vreme.id')
            ->where('datum_id',$id)
            ->get();
    }



}