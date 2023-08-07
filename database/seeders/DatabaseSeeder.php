<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\seedProductDesc;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     * 
     * menambahkan data statis ke dalam db seperti data aboutUs
     * 
     */
    public function run()
    {
        $this->call([
            seedProductDesc::class,
        ]);
    }
}
