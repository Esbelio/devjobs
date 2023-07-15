<?php

namespace App\Http\Livewire;

use App\Models\Salario;
use Livewire\Component;

class CrearVacante extends Component
{
    public function render()
    {
        //Consultar Base de Datos
        $salarios = Salario::all();

        return view('livewire.crear-vacante', [
            'salarios' => $salarios
        ]);
    }
}
