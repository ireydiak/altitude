<?php

use Illuminate\Database\Seeder;

class EquipmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('equipment')->insert([
            'name' => 'Bâche légère kit',
            'description' => 'Permet de couvrir contre la pluie.'
        ]);
    }
}
