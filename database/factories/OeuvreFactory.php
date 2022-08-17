<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class OeuvreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'type' => $this->faker->name(),
            //'email_verified_at' => now(),
           // 'promo'=>$this->faker->date($format = 'Y',$max ='now'),
            'file_path'=>$this->faker->imageUrl(360, 360, 'animals', true, 'dogs', true, 'jpg'),
           // 'remember_token' => Str::random(10),
        ];
    }
}
