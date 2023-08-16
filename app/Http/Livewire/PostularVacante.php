<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PostularVacante extends Component
{

    public $cv;

    protected $rules = [
        'cv' => 'required|mimes:pdf'
    ];

    public function postularme()
    {
        $this->validate();

        //Almacenar CV en el disco duro

        //Crear la vacante

        //Crear notificacion y enviar el email

        //Mostrar al usuario mensaje de ok
    }

    public function render()
    {
        return view('livewire.postular-vacante');
    }
}
