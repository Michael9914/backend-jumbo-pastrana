<?php

namespace Database\Factories;

use App\Models\Line;
use Illuminate\Database\Eloquent\Factories\Factory;

class LineFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Line::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'age' =>$this->faker->numberBetween(18, 50),
            'names' =>$this->faker->name(),
            'email' =>$this->faker->email(),
            'identification' =>$this->faker->uuid(),
            
            
        ];
    }
}
