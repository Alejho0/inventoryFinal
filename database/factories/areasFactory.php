<?php

namespace Database\Factories;

use App\Models\areas;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class areasFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = areas::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
           
            'id' => $this->faker->id(),
            'name' => Str::random(10),
        ];
    }
}
