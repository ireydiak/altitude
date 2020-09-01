<?php

use Illuminate\Database\Seeder;

class InventoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $equipment_id = \App\Equipment::where('name', 'Bâche légère kit')->first()->id;

        DB::table('inventory')->insert([
            'sku' => 'BA1',
            'description' => 'Sac Vert + Sac bleu 8 piquets',
            'notes' => 'Légère et fragile',
            'price' => 41.00,
            'purchase_date' => '2018-01-01',
            'equipment_id' => $equipment_id
        ], [
            'sku' => 'BA2',
            'description' => 'Sac Vert + Sac bleu 8 piquets',
            'notes' => 'Légère et fragile',
            'price' => 41.00,
            'purchase_date' => '2018-01-01',
            'equipment_id' => $equipment_id
        ], [
            'sku' => 'BA3',
            'description' => 'Sac Vert + Sac bleu 8 piquets',
            'notes' => 'Légère et fragile',
            'price' => 41.00,
            'purchase_date' => '2018-01-01',
            'equipment_id' => $equipment_id
        ], [
            'sku' => 'BA4',
            'description' => 'Sac Vert + Sac bleu 8 piquets',
            'notes' => 'Légère et fragile',
            'price' => 41.00,
            'purchase_date' => '2018-01-01',
            'equipment_id' => $equipment_id
        ]);
    }
}
