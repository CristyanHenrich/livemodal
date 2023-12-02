<?php

namespace cristyanhenrich\livemodal;

use Illuminate\Support\Facades\Blade;
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

        // Diretiva para estilos
        Blade::directive('livemodalStyles', function () {
            return '<link href="' . asset('vendor/cristyanhenrich/livemodal/css/style.css') . '" rel="stylesheet">';
        });

        // Diretiva para scripts
        Blade::directive('livemodalScripts', function () {
            return '<script src="' . asset('vendor/cristyanhenrich/livemodal/js/main.js') . '"></script>';
        });

        Livewire::component('modal', ModalComponent::class);
    }
}
