/**
 * @param {string} title
 * @param {string} idModal
 * @param {string} component
 * @param {string} action
 * @param {object} params
 * @returns {void}
 * @description
 * Abre o modal
 * @example
 * onclick="livemodalShow('Editar Usuario', 'editUser', 'edit-user-form', action, {{ json_encode(['METHOD' => 'UPDATE']) }})"
 */
function livemodalShow(title, idModal, component, action, params) {
    try {
        Livewire.dispatch('livemodalShow', title, idModal, component, action, params);
    } catch (error) {
        console.log(error);
    }
}