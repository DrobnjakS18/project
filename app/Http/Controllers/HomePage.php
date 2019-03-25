<?php

namespace App\Http\Controllers;

use App\Models\ModelLab1;
use App\Models\RuteModel;
use Illuminate\Http\Request;

class HomePage extends BaseController
{
    public function index(){

        $baza = new ModelLab1();
        $rez = $baza->DohvatiProizvodi();
        $this->data['podaci'] = $rez;

        $ruta = new RuteModel();

        $this->data['sve_rute'] = $ruta->getRute();

        $rute = new RuteModel();

        $this->data['datum'] = $rute->datum();
        $this->data['mesto'] = $rute->mesto();

       return view('index',$this->data);


    }


    public function rezervazija($id,$id_kor){

        $rez = new RuteModel();

        $rez->r_id = $id;
        $rez->k_id = $id_kor;

        try{
         $br = $rez->getOneRute($id);


            if($br->broj_mesta > 0 ){

                $rez->br_mesta =$br->broj_mesta;

                $rez->rezervacija();

                return redirect()->back()->with('rez_uspeh','Uspesno ste rezervisali put');
            }else{

                echo "Sva mesta su popunjena";
            }

        } catch (\Exception $e){

            echo $e->getMessage();
        }
    }

    public function profile($id){

        $profile = new ModelLab1();

        $this->data['profile'] = $profile->profile($id);

        return view('profile',$this->data);
    }

    public function del_rez($id){

        $rez  = new RuteModel();


        try{

            $rez->del_rez($id);

            return redirect('/home')->with('del_rez','Uspesno otkazana rezervacija');

        }catch (\Exception $e){

            echo $e->getMessage();
        }
    }


    public function datum_filter($id){

        $filter = new RuteModel();

        $datum = $filter->filter_datum($id);

        return $datum;
    }
}
