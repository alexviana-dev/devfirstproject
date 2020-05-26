// Get DOM Elements
const modal02 = document.querySelector('#my-modal02');
const modalBtn02 = document.querySelector('#modal-btn02');
const closeBtn02 = document.querySelector('.close02');

// Events
modalBtn02.addEventListener('click', openModal02);
closeBtn02.addEventListener('click', closeModal02);
window02.addEventListener('click', outsideClick02);

// Open
function openModal02() {
  modal02.style.display = 'block';
}

// Close
function closeModal02() {
  modal02.style.display = 'none';
}

// Close If Outside Click
function outsideClick02(e) {
  if (e.target == modal02) {
    modal02.style.display = 'none';
  }
}
