<?php

namespace Database\Factories;

use App\Models\Actividad;
use Illuminate\Database\Eloquent\Factories\Factory;

class ActividadFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Actividad::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'docente'=>$this->faker->name,
            'nombre'=>$this->faker->randomElement($array = array ('Danza','Musica','Voleyboll','Futboll','Karate')),
            'grupo'=>$this->faker->randomElement($array = array ('A','B','C')),
            'horaI'=>$this->faker->time,
            'horaT'=>$this->faker->time,
            'lugar'=>$this->faker->state,
            'dias'=>$this->faker->dayOfWeek($max = 'now')
        ];
    }
}
