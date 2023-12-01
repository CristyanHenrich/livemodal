<?php
namespace App\Http\Livewire;

use Livewire\Component;

class ModalComponent extends Component
{
    public $isOpen = false;
    public $title;

    public function openModal($title)
    {
        $this->isOpen = true;
        $this->title = $title;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    public function render()
    {
        return view('livewire.modal');
    }
}
