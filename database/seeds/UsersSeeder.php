<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name' => 'Nicolas',
            'last_name' => 'Joubert',
            'cip' => '16040810',
            'phone' => '819-919-5673',
            'facebook' => 'Nicolas Joubert',
            'email' => 'nicolas.joubert@usherbrooke.ca',
            'emergency_contact' => 'Alain Breton : 819-820-5701',
            'allergies' => null,
        ]);
    }
}
