<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\master_barang_model;

use Faker\Factory as Faker;

class seedProductDesc extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create('id_ID');
        for ($i=1; $i <= 5; $i++) { 
            master_barang_model::create([
                'nama_barang' => $faker->name(),
            ]);
        }
    }
}

