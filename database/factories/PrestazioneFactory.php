<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PrestazioneFactory extends Factory
{
    public function definition()
    {
        return [
            'nome' => $this->faker->randomElement([
                'Pulizia dentale', 'Otturazione', 'Devitalizzazione', 'Impianto dentale'
            ]),
            'descrizione' => $this->faker->sentence,
            'id_dipartimento' => null,
            'id_membro' => null,
        ];
    }
}
