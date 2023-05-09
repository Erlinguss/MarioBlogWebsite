
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


var marioImage = document.getElementById("mario-image");
var marioTextImage = document.getElementById("mario-text-image");
var marioText = document.getElementById("mario-text");

marioImage.addEventListener("click", function() {
  marioTextImage.style.display = marioTextImage.style.display === "none" ? "block" : "none";
  marioText.style.display = marioText.style.display === "none" ? "block" : "none";
});



