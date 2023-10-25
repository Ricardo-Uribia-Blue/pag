<?php

namespace App\Livewire;

use Livewire\Component;

class ModalComponent extends Component
{

    public $title;
    public $boton;
    public $archivoIncluido;
    
    public function mount($title, $boton, $archivoIncluido)
    {
        $this->title = $title;
        $this->boton = $boton;
        $this->archivoIncluido = $archivoIncluido;
    }

    public $showModal = false;

    public function openModal()
    {
        $this->showModal = true;
    }

    public function closeModal()
    {
        $this->showModal = false;
    }
    
    public function render()
    {
        return view('livewire.modal-component');
    }
}
