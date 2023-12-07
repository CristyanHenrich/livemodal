<?php
namespace cristyanhenrich\livemodal;

use Livewire\Component;

class ModalComponent extends Component
{
    protected $listeners = ['livemodalShow' => 'openModal', 'livemodalClose' => 'closeModal'];

    public $state = 'closed';

    public $title;
    public $idModal;

    public $component = null;
    public $action = null;
    public $params = null;

    public function mount($title, $idModal, $component = null, $action = null, $params = null)
    {
        $this->emit('montingModal', $title, $idModal, $component, $action, $params);
        $this->state = 'closed';
        $this->title = $title;
        $this->idModal = $idModal;
        $this->component = $component;
        $this->action = $action;
        $this->params = $params;
    }

    public function openModal($title, $idModal, $component = null, $action = null, $params = null)
    {
        $this->emit('openingModal', $title, $idModal, $component, $action, $params);
        $this->state = 'opened';
        $this->title = $title;
        $this->idModal = $idModal;
        $this->component = $component;
        $this->action = $action;
        $this->params = $params;
    }

    public function closeModal()
    {
        $this->emit('closingModal');
        $this->state = 'closed';
    }

    public function render()
    {
        return view('modal::modal');
    }
}
