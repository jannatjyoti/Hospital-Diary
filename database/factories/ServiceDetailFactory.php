<?php

namespace Database\Factories;

use App\Models\ServiceDetail;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceDetailFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ServiceDetail::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'total'=> $this->faker->randomDigit,
            'running'=> $this->faker->randomDigit,
            'service_id'=> $this->faker->numberBetween(1,7),
            'admin_id'=> $this->faker->numberBetween(1,5),
        ];
    }
}
