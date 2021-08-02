<?php

namespace Database\Seeders;

use App\Models\Champion;
use App\Models\Line;
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
        Champion::factory(10)
            ->has(Line::factory()->count(3), 'line')
            ->create();

          
    }
}
