<?php
namespace cristyanhenrich\ModalLivewirePackage;

use Illuminate\Support\ServiceProvider;

class ModalServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'modal-livewire');
    }
}
