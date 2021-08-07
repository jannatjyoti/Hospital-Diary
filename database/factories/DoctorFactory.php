<?php

namespace Database\Factories;

use App\Models\Doctor;
use Illuminate\Database\Eloquent\Factories\Factory;

class DoctorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Doctor::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'doctor_Name' => $this->faker-> name,
            'designation'=>$this->faker-> text(10),
            'email'=> $this->faker->unique()->safeEmail().'@gmail.com',
            'degree'=> $this->faker->text(10),
            'specialized'=>$this->faker->text(10) ,
            'number'=> $this->faker-> phoneNumber,
            'chamber_time'=>$this->faker-> time,
            'room_no'=>$this->faker-> randomDigit(),
            'admin_id'=>$this->faker->numberBetween(1,5),
        ];
    }
}
