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
            'fecha_nacimiento' => $this->faker->numerify("####-##-##"),
            'edad' => $this->faker->numerify('##'),
            'estado_civil' => $this->faker->randomElement(['Casado/a','Divorciado/a','Viudo/a','Soltero/a']),
            'sexo' => $this->faker->randomElement(['Hombre','Mujer']),
            'estatura' => $this->faker->numerify('##'),
            'domicilio' => $this->faker->address(),
            'talla' => $this->faker->randomElement(['XS','S','M','L','XL']),
            'telefono_casa' => $this->faker->numerify('###-###-####'),
            'telefono_celular' => $this->faker->numerify('###-###-####'),
            'email' => $this->faker->email(),
            'alergia' => $this->faker->word(),
            'peso' => $this->faker->numerify('##'),
        ];
    }
}
