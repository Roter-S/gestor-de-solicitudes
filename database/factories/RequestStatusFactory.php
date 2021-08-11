<?php

namespace Database\Factories;

use App\Models\RequestStatus;
use Illuminate\Database\Eloquent\Factories\Factory;

class RequestStatusFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = RequestStatus::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'status' => $this->faker->randomElement(['Aceptado','Pendiente','Rechazado']),
            'user_id' => $this->faker->numberBetween(1, \App\Models\User::count()),
        ];
    }
}
