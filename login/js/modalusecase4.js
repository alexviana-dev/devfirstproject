// Get DOM Elements
const modal04 = document.querySelector('#my-modal04');
const modalBtn04 = document.querySelector('#modal-btn04');
const closeBtn04 = document.querySelector('.close04');

// Events
modalBtn04.addEventListener('click', openModal04);
closeBtn04.addEventListener('click', closeModal04);
window04.addEventListener('click', outsideClick04);

// Open
function openModal04() {
  modal04.style.display = 'block';
}

// Close
function closeModal04() {
  modal04.style.display = 'none';
}

// Close If Outside Click
function outsideClick04(e) {
  if (e.target == modal04) {
    modal04.style.display = 'none';
  }
}