/**
 * @param {string} title
 * @param {string} idModal
 * @param {string} component
 * @param {object} model
 * @param {object} params
 * @returns {void}
 * @description
 * Abre o modal
 * @example
 * onclick="livemodalShow('Editar Usuario', 'editUser', 'edit-user-form', $user, {{ json_encode(['METHOD' => 'UPDATE']) }})"
 */
function livemodalShow(title, idModal, component, model, params) {
    try {
        Livewire.emit('livemodalShow', title, idModal, component, model, params);
    } catch (error) {
        console.log(error);
    }
}