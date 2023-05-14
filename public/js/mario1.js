
// ===========MODAL TEXT WHEN CLICK IN CHARACTER CLASS=================

// document.addEventListener('DOMContentLoaded', function () {
 
//   // function openModal(modalId, modalContentId) {
//   //   var modal = document.querySelector(modalId);
//   //   console.log(modal);
//   //   var modalContent = document.querySelector(modalContentId);
//   //   console.log(modalContent, "im here");
//   //   var modalText = modalContent.querySelector('p');
//   //   console.log(modalText);
//   //   modal.style.display = "block";
//   //   modalContent.classList.add("modal-animate-in");
//   //   modalText.innerHTML = modalContent.innerHTML;

//   // }

//   function openModal(modalId, modalContentId) {
//     var modal = document.querySelector(modalId);
//     console.log(modal);
//     var modalContent = document.querySelector(modalContentId);
//     console.log(modalContent, "im here");
//     var modalText = modalContent.querySelector('p');
//     console.log(modalText);
  
//     var clickedImage = document.activeElement;
//     if (clickedImage !== null && clickedImage !== undefined) {
//       var modalImage = modalContent.querySelector('img');
//       modalImage.src = clickedImage.src;
//     }
  
//     modal.style.display = "block";
//     modalContent.classList.add("modal-animate-in");
//     modalText.innerHTML = modalContent.innerHTML;
//   }

//   var characters = document.querySelectorAll('.character');
//   characters.forEach(function (character) {
//     var im = character.querySelector('img');
//     console.log(im);
//     var modalId = im.getAttribute('data-modal');
//     var modalContentId = modalId + '-content';
//     im.addEventListener('click', function () {
//       openModal(modalId, modalContentId, im );
//     });
//   });

//   var modals = document.querySelectorAll('.modal');
//   modals.forEach(function (modal) {
//     modal.addEventListener('click', function (event) {
//       if (event.target.classList.contains('close') || event.target.classList.contains('modal')) {
//         modal.style.display = 'none';
//       }
//     });
//   });

// });


document.addEventListener('DOMContentLoaded', function () {
 
  function openModal(modalId, modalContentId, imageId) {
    var modal = document.querySelector(modalId);
    console.log(modal);
    var modalContent = document.querySelector(modalContentId);
    console.log(modalContent, "im here");
    var modalText = modalContent.querySelector('p');
    console.log(modalText);
  
    var clickedImage = document.activeElement;
    if (clickedImage !== null && clickedImage !== undefined) {
      var modalImage = modalContent.querySelector('img', imageId);
      if (modalImage !== null) {
        modalImage.src = clickedImage.src;
      }
    }
  
    modal.style.display = "block";
    modalContent.classList.add("modal-animate-in");
    modalText.innerHTML = modalContent.innerHTML;
  }

  var characters = document.querySelectorAll('.character');
  characters.forEach(function (character) {
    var im = character.querySelector('img');
    console.log(im);
    var modalId = im.getAttribute('data-modal');
    var modalContentId = modalId + '-content';
    im.addEventListener('click', function () {
      openModal(modalId, modalContentId, im);
    });
  });

  var modals = document.querySelectorAll('.modal');
  modals.forEach(function (modal) {
    modal.addEventListener('click', function (event) {
      if (event.target.classList.contains('close') || event.target.classList.contains('modal')) {
        modal.style.display = 'none';
      }
    });
  });

});