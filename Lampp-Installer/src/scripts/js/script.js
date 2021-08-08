/* Create file/directory modal */
const open = document.getElementById('open');
const modal_container = document.getElementById('modal-container');
const close = document.getElementById('close');

/* Edit file/directory modal */
const open_edit = document.getElementById('open-edit');
const modal_container_edit = document.getElementById('modal-container-edit');
const close_edit = document.getElementById('close-edit');

open.addEventListener('click', () => {
  modal_container.classList.add('show');
});

close.addEventListener('click', () => {
  modal_container.classList.remove('show');
});

open_edit.addEventListener('click', () => {
  modal_container_edit.classList.add('show');
});

close_edit.addEventListener('click', () => {
  modal_container_edit.classList.remove('show');
});