<?php

namespace Database\Seeders;
use App\Models\industria;
use Illuminate\Database\Seeder;

class IndustriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        industria::factory(20)->create();
    }
}
