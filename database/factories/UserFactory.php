<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'firstName' => $this->faker->firstName,
            'secondName' => $this->faker->firstName,
            'firstLastName' => $this->faker->lastName,
            'secondLastName' => $this->faker->lastName,
            'marriedLastName' => $this->faker-> lastName,
            'birthDate' => $this->faker-> date($format = 'Y-m-d', $max = '-18 years'),
            'dpi' => $this->faker->unique()->numerify('#############'),
            'profession' => $this->faker->word,
            'yearsWorking' => $this->faker->numerify('#'),
            'photo' => $this->faker-> imageUrl($with=400, $heigth=600),
            'salary' => $this->faker-> numerify('#####'),
            'email' => $this->faker->email,
            'password' => $this->faker->password($min_length=8),
            'role_id' => '3',
        ];
    }
}
