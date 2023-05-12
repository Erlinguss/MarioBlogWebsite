
// =========FUNCTION TO MOVE IMAGES FROM -X TO X OR VICEVERSE ==========

const images = document.querySelector('.images');
const prevBtn = document.querySelector('#prev-btn'); 
const nextBtn = document.querySelector('#next-btn');
const imageWidth = images.children[0].clientWidth;
let currentIndex = 0; 

function moveToIndex(index) {
  images.style.transform = `translateX(-${index * imageWidth}px)`;
  currentIndex = index;
}

prevBtn.addEventListener('click', () => {
  const index = (currentIndex - 3 + images.children.length) % images.children.length;
  moveToIndex(index);
});

nextBtn.addEventListener('click', () => {
  const index = (currentIndex + 3) % images.children.length;
  moveToIndex(index);
});




//   // set the initial position of the second header
// var secondHeader = document.querySelector(".second-header");
// secondHeader.classList.add("absolute");

// // wait for the page to load
// window.addEventListener("load", function() {
//   // remove the absolute positioning
//   secondHeader.classList.remove("absolute");

//   // scroll event listener
//   window.addEventListener("scroll", function() {
//     var scrollPosition = window.pageYOffset;

//     if (scrollPosition > 0) {
//       secondHeader.classList.add("fixed");
//     } else {
//       secondHeader.classList.remove("fixed");
//     }
//   });
// });


// ===============FUNCTION TO SHOW AN IMAGE WHEN SCROLL DOWN ===============

function toggleImg() {
  console.log("toggleImg function called");
  const imgScroll = document.querySelector(".scroll-image-wrapper");
  if (window.scrollY > 0) {
    imgScroll.classList.add("show");
  } else {
    imgScroll.classList.remove("show");
  }
}

window.addEventListener("scroll", toggleImg);


// ===============SHOW AND HIDE IMAGE AND TEXT WHEN CLICK=================

function toggleDisplay(imageId, textImageId, textId) {
  var image = document.getElementById(imageId);
  var textImage = document.getElementById(textImageId);
  var text = document.getElementById(textId);
  
  image.addEventListener("click", function() {
    textImage.style.display = textImage.style.display === "none" ? "block" : "none";
    text.style.display = text.style.display === "none" ? "block" : "none";
  });
}


for (var i = 1; i <= 9; i++) {
  var imageId = "mario-image-" + i;
  var textImageId = "mario-text-image-" + i;
  var textId = "mario-text-" + i;
  toggleDisplay(imageId, textImageId, textId);
}




// ===========MODAL TEXT WHEN CLICK IN CHARACTER CLASS=================
var characters = document.querySelectorAll('.character');
var modal = document.getElementById('modal');
var modalContent = document.getElementById('modal-content');
var modalText = document.getElementById('modal-text');

characters.forEach(function(character) {
  var image = character.querySelector('img');
  var description = character.querySelector('.description');

  image.addEventListener('click', function() {
    modal.style.display = 'block';
    modalText.innerHTML = description.innerHTML;
  });
});

window.addEventListener('click', function(event) {
  if (event.target == modal) {
    modal.style.display = 'none';
  }
});

