
// ===========MODAL TEXT WHEN CLICK IN CHARACTER CLASS=================

document.addEventListener('DOMContentLoaded', function() {
function openModal(modalId, modalContentId) {
  var modal = document.querySelector(modalId);
  console.log(modal);
  var modalContent = document.querySelector(modalContentId);
  console.log(modalContent);
  var modalText = modalContent.querySelector('p');
  console.log(modalText);
  modal.style.display = "block";
  modalContent.classList.add("modal-animate-in");
  modalText.innerHTML = modalContent.innerHTML;
}

var characters = document.querySelectorAll('.character');
characters.forEach(function(character) {
  var im = character.querySelector('img');
  console.log(im);
  var modalId = im.getAttribute('data-modal');
  var modalContentId = modalId + '-content';
  im.addEventListener('click', function() {
    openModal(modalId, modalContentId);
  });
});

var modals = document.querySelectorAll('.modal');
modals.forEach(function(modal) {
  modal.addEventListener('click', function(event) {
    if (event.target.classList.contains('close') || event.target.classList.contains('modal')) {
      modal.style.display = 'none';
    }
  });
});
openModal('#modal1', '#modal-content1');
});