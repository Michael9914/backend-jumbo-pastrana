<?php

namespace Database\Seeders;

use App\Models\Champion;
use Illuminate\Database\Seeder;

class AppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Champion::factory()
            ->has(Line::factory()->count(3), 'lines')
            ->create();

          
    }
}
