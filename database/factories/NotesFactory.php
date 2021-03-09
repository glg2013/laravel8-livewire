<?php

namespace Database\Factories;

use App\Models\Notes;
use Illuminate\Database\Eloquent\Factories\Factory;

class NotesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Notes::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'content' => $this->faker->sentence,
            'user_id' => $this->faker->randomElement([1, 2, 3, 4, 5])
        ];
    }
}
