<?php

namespace Database\Factories;

use App\Models\Alumno;
use Illuminate\Database\Eloquent\Factories\Factory;

class AlumnoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Alumno::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'actividad_id'=>$this->faker->numberBetween($min = 1, $max = 5),
            'nombre'=>$this->faker->firstNameMale,
            'apellidoP'=>$this->faker->lastName,
            'apellidoM'=>$this->faker->lastName,
            'semestre'=>$this->faker->numberBetween($min = 1, $max = 9),
            'correo'=>$this->faker->email,
            'telefono'=>$this->faker->phoneNumber,
            'carrera'=>$this->faker->randomElement($array = array ('Sistemas','Administracion','Mecatronica','Quimica','Petrolera'))
        ];
    }
}
