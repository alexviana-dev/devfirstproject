// Get DOM Elements
const modal01 = document.querySelector('#my-modal01');
const modalBtn01 = document.querySelector('#modal-btn01');
const closeBtn01 = document.querySelector('.close01');

// Events
modalBtn01.addEventListener('click', openModal01);
closeBtn01.addEventListener('click', closeModal01);
window01.addEventListener('click', outsideClick01);

// Open
function openModal01() {
  modal01.style.display = 'block';
}

// Close
function closeModal01() {
  modal01.style.display = 'none';
}

// Close If Outside Click
function outsideClick01(e) {
  if (e.target == modal01) {
    modal01.style.display = 'none';
  }
}
