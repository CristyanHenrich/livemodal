<div>
    <div id="livemodal-{{ $idModal }}" class="livemodal-{{ $state }}">
        <div class="livemodal-content">
            <div class="livemodal-header">
                <span class="livemodal-title">{{ $title }}</span>
                <span wire:click="closeModal" class="close">&times;</span>
            </div>
            <div class="livemodal-body">
                @if($component)
                    @livewire($component, ['model' => $model, 'params' => $params])
                @else
                    <span>Componente não encontrado</span>
                @endif
            </div>
            <div class="livemodal-footer">
                <button type="button" class="footer-close-button" wire:click="closeModal">Fechar modal</button>
            </div>
        </div>
    </div>
</div>
