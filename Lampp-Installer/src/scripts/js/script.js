/**
 * This function has the power to open and close
 * popUp's by removing/adding the html tags class.
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

/**
 * This function has power restrict input from 
 * typing special characters.
 * 
 * We could even add a pattern using regex but 
 * it would prevent us from putting some characters we could use
 * 
 * pattern="^[a-zA-Z0-9]+$"
 * 
 * @param {string} inputClass = 
 * */

function handleDisableCharacter(inputClass) {
  document.getElementById(inputClass).onkeypress = (e) => {
    var chr = String.fromCharCode(e.which);
    if ("1234567890qwertyuioplkjhgfdsazxcvbnmQWERTYUIOPLKJHGFDSAZXCVBNM".indexOf(chr) < 0)
      return false;
  };
}

handleOpenCloseModal('open', 'modal-container', 'close');
handleDisableCharacter('input-modal');