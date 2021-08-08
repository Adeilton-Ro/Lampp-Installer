/**
 * This function has the power to open and close
 * popUp's by removing/adding the html tags class
 *
 * @param {string} openButton =
 * @param {string} modalContaier =
 * @param {string} closeButton =
 */

function handleOpenCloseModal(openButton, modalContaier, closeButton) {
  const open = document.getElementById(openButton);
  const modal = document.getElementById(modalContaier);
  const close = document.getElementById(closeButton);

  open.addEventListener('click', () => {
    modal.classList.add('show');
  });

  close.addEventListener('click', () => {
    modal.classList.remove('show');
  });
}

handleOpenCloseModal('open', 'modal-container', 'close');
handleOpenCloseModal('open-edit', 'modal-container-edit', 'close-edit');
