<div id="{{ $idModal }}" class="modal">
    <div class="modal-content">
        <div class="modal-header">
            <span class="modal-title">{{ $title }}</span>
            <span wire:click="closeModal" class="close">&times;</span>
        </div>
        <div class="modal-body">
            {{ $slot }}
        </div>
        <div class="modal-footer">
            <button wire:click="closeModal">Fechar modal</button>
        </div>
    </div>
</div>
