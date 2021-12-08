<?php

namespace Database\Seeders;

use App\Models\BookMangement;
use Illuminate\Database\Seeder;

class BookMangementTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        BookMangement::factory()->count(10)->create();
    }
}
