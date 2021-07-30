<?php

namespace Database\Factories;

use App\Models\Champion;
use Illuminate\Database\Eloquent\Factories\Factory;

class ChampionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Champion::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'code' => $this->faker->lexify(),
            'date' => $this->faker->date(),
            'description' => $this->faker->paragraph(),
            'approved' => $this->faker->randomElement([true, false]),
            'title' => $this->faker->word(),
        ];
    }
}
