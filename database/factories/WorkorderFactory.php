<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Client;
use App\Models\Workorder;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Workorder>
 */
class WorkorderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => function () {return User::inRandomOrder()->first()->id;},
            'about' =>$this->faker->text,
            'problems'=> $this->faker->text,
            'date_init'=>$this->faker->date,
            'date_end'=>$this->faker->date,
            'client_id'=> function () {return Client::inRandomOrder()->first()->id;},

        ];
    }
}
