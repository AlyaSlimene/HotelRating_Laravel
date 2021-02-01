<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hotels')-> insert(
        
        [
            'nomHotel'=>'Palm Beach Palace Tozeur',
            'numtelHotel'=>'78 67 03 43',
            'adresseHotel'=>'Tozeur',
            'nbstar'=>'3',
            'gallery'=>'https://www.magichotelsandresorts.com/u_p_l_d/hotels/palm-beach-palace-tozeur_18_09434490015409186955bd88da7e65e9.jpg',

        ]);
    }
}
/*
[
            'nomHotel'=>'El Mouradi Hammamet',
            'numtelHotel'=>'72 24 46 00',
            'adresseHotel'=>'Zone touristique Yasmine Hammamet , 8050, Hammamet, Tunisie',
            'nbstar'=>'4',
            'gallery'=>'https://www.elmouradi.com:444/cr27.fwk/images/hotels/Hotel-100-20141122-105218.jpg',
        ],
        [
            'nomHotel'=>'Hotel Dar Ismail',
            'numtelHotel'=>'78 67 03 43',
            'adresseHotel'=>'Tabarka',
            'nbstar'=>'5',
            'gallery'=>'http://www.darismailhotels.com/cr.fwk/images/hotels/Section-214-20090923-024928.jpg',
           ],
*/