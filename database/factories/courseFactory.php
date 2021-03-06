<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class courseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Course::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->sentence();
        return [
            'name' => $name,
            'slug' => Str::slug($name, '-'),
            'desc' => $this->faker->paragraph(),
            'category' => $this->faker->randomElement(['Desarrollo web', 'Diseño web'])
        ];
    }
}
