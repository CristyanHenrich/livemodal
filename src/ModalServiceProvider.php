<?php

namespace cristyanhenrich\livemodal;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;
class ModalServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'modal');
        $this->publishes([
            __DIR__.'/assets' => public_path('vendor/cristyanhenrich/livemodal'),
        ], 'livemodal-assets');

        Livewire::component('modal', ModalComponent::class);
    }
}
