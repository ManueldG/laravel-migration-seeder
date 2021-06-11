<?php

use Illuminate\Database\Seeder;
use App\Voyage;

class VoyagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0 ; $i < 20 ; $i++){
            $new_voyage = new Voyage();
        }

    }
}
