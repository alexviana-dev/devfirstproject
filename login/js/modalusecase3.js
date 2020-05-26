// Get DOM Elements
const modal03 = document.querySelector('#my-modal03');
const modalBtn03 = document.querySelector('#modal-btn03');
const closeBtn03 = document.querySelector('.close03');

// Events
modalBtn03.addEventListener('click', openModal03);
closeBtn03.addEventListener('click', closeModal03);
window03.addEventListener('click', outsideClick03);

// Open
function openModal03() {
  modal03.style.display = 'block';
}

// Close
function closeModal03() {
  modal03.style.display = 'none';
}

// Close If Outside Click
function outsideClick03(e) {
  if (e.target == modal03) {
    modal03.style.display = 'none';
  }
}
