<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    public function definition(): array
    {
        return [
            'contacto' => $this->faker->company,
            'social' => $this->faker->randomElement(['Resp Inscripto', 'Resp No Inscripto', 'Monotributista', 'Consumidor Final']),
            'direccion' => $this->faker->address,
            'ciudad' => $this->faker->randomElement(['Buenos Aires', 'Córdoba', 'Rosario', 'Mendoza', 'Mar del Plata', 'La Plata', 'San Miguel de Tucumán', 'Salta', 'Santa Fe', 'San Juan', 'Resistencia', 'Corrientes', 'Posadas', 'Formosa', 'Neuquén', 'Bahía Blanca', 'San Salvador de Jujuy', 'Santa Rosa', 'Río Gallegos', 'Ushuaia']),
            'nombre_cliente' => $this->faker->name,
            'cuit' => $this->faker->unique()->numberBetween(1, 99999999999), // Cambio a numberBetween
            'email' => $this->faker->unique()->safeEmail,
            'telefono_cliente' => '54911'.$this->faker->unique()->numberBetween(10000000, 99999999), // Cambio a numberBetween
            'telefono_contacto' => '54911'.$this->faker->unique()->numberBetween(10000000, 99999999), // Cambio a numberBetween
        ];
    }
}
