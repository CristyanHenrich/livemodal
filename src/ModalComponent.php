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
    public $model = null;
    public $params = null;

    public function mount($title, $idModal, $component = null, $model = null, $params = null)
    {
        $this->state = 'closed';
        $this->title = $title;
        $this->idModal = $idModal;
        $this->component = $component;
        $this->model = $model;
        $this->params = $params;
    }

    public function openModal($title, $idModal, $component = null, $model = null, $params = null)
    {
        $this->state = 'opened';
        $this->title = $title;
        $this->idModal = $idModal;
        $this->component = $component;
        $this->model = $model;
        $this->params = $params;
    }

    public function closeModal()
    {
        $this->state = 'closed';
    }

    public function render()
    {
        return view('modal::modal');
    }
}
