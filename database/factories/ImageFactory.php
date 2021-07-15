<?php

namespace Database\Factories;

use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Image::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'filename' => 'digital_'. $this->faker->numberBetween(10,22).'.jpg',
            'imageable_id' => $this->faker->numberBetween(1,20),
            'imageable_type' => 'product',
        ];
    }
}
