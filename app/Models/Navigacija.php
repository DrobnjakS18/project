<?php
/**
 * Created by PhpStorm.
 * User: DrobnjakS
 * Date: 1/31/2019
 * Time: 8:16 PM
 */

namespace App\Models;
use Illuminate\Support\Facades\DB;

class Navigacija
{

    public function get(){

        return DB::table('navigacija')->get();
    }
}
