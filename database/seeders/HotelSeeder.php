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
        DB::table('hotel')-> insert([
            'nomHotel'=>'Albatros',
            'numtel'=>'71540235',
            'adresse'=>'Beja'
        ]);
    }
}
