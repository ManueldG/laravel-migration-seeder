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
            $new_voyage->location = 'Ibiza';
            $new_voyage->days = 7;
            $new_voyage->price = 1000;
            $new_voyage->place = 'Hotel';
            $new_voyage->treatment = 'Full';
            $new_voyage->description = 'Lorem ipsum dolor sit amet ';
            $new_voyage->save();

            /*$table->id();
            $table->string('location',50);
            $table->smallInteger('days')->unsigned();
            $table->float('price',8,2)->unsigned();
            $table->string('place',50);
            $table->string('treatment',50);
            $table->timestamps();
            $table->string('description',50)->after('price');*/
        }

    }
}
