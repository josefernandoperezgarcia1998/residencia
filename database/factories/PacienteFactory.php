<?php

namespace Database\Factories;

use App\Models\Paciente;
use Illuminate\Database\Eloquent\Factories\Factory;

class PacienteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Paciente::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->name(),
            'a_paterno' => $this->faker->lastName(),
            'a_materno' => $this->faker->lastName(),
            'edad' => $this->faker->numerify('##'),
            'estado_civil' => 'Casado/a',
            'telefono_casa' => $this->faker->numerify('###-###-####'),
            'telefono_celular' => $this->faker->numerify('###-###-####'),
            'email' => $this->faker->email(),
            'peso' => $this->faker->numerify('##'),
            'talla' => 'XS',
            'sistólica' => $this->faker->numerify('##'),
            'diastólica' => $this->faker->numerify('##'),
        ];
    }
}
