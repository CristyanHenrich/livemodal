<div>
    <div id="livemodal-{{ $idModal }}" class="livemodal-{{ $state }}">
        <div class="livemodal-content">
            <div class="livemodal-header">
                <span class="livemodal-title">{{ $title }}</span>
                <span wire:click="closeModal" class="close">&times;</span>
            </div>
            <div class="livemodal-body">
                @if($component)
                    @livewire($component, ['action' => $action, 'params' => $params])
                @else
                    <span>Componente não encontrado</span>
                @endif
            </div>
        </div>
    </div>
</div>
