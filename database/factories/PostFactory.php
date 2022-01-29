<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'title'       => $this->faker->name(),
            'description' => $this->faker->text($maxNbChars = 200) ,
            'author_id'   => 1,
        ];
    }

}
