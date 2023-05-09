
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


// // ===============SHOW AND HIDE IMAGE AND TEXT WHEN CLICK=================


// var marioImage = document.getElementById("mario-image");
// var marioTextImage = document.getElementById("mario-text-image");
// var marioText = document.getElementById("mario-text");

// marioImage.addEventListener("click", function() {
//   marioTextImage.style.display = marioTextImage.style.display === "none" ? "block" : "none";
//   marioText.style.display = marioText.style.display === "none" ? "block" : "none";
// });


// var marioImage1 = document.getElementById("mario-image-1");
// var marioTextImage1 = document.getElementById("mario-text-image-1");
// var marioText1 = document.getElementById("mario-text-1");

// marioImage1.addEventListener("click", function() {
//   marioTextImage1.style.display = marioTextImage1.style.display === "none" ? "block" : "none";
//   marioText1.style.display = marioText1.style.display === "none" ? "block" : "none";
// });


// var marioImage2 = document.getElementById("mario-image-2");
// var marioTextImage2 = document.getElementById("mario-text-image-2");
// var marioText2 = document.getElementById("mario-text-2");

// marioImage2.addEventListener("click", function() {
//   marioTextImage2.style.display = marioTextImage2.style.display === "none" ? "block" : "none";
//   marioText2.style.display = marioText2.style.display === "none" ? "block" : "none";
// });


// var marioImage3 = document.getElementById("mario-image-3");
// var marioTextImage3 = document.getElementById("mario-text-image-3");
// var marioText3 = document.getElementById("mario-text-3");

// marioImage3.addEventListener("click", function() {
//   marioTextImage3.style.display = marioTextImage3.style.display === "none" ? "block" : "none";
//   marioText3.style.display = marioText3.style.display === "none" ? "block" : "none";
// });


// var marioImage4 = document.getElementById("mario-image-4");
// var marioTextImage4 = document.getElementById("mario-text-image-4");
// var marioText4 = document.getElementById("mario-text-4");

// marioImage4.addEventListener("click", function() {
//   marioTextImage4.style.display = marioTextImage4.style.display === "none" ? "block" : "none";
//   marioText4.style.display = marioText4.style.display === "none" ? "block" : "none";
// });


// var marioImage5 = document.getElementById("mario-image-5");
// var marioTextImage5 = document.getElementById("mario-text-image-5");
// var marioText5 = document.getElementById("mario-text-5");

// marioImage5.addEventListener("click", function() {
//   marioTextImage5.style.display = marioTextImage5.style.display === "none" ? "block" : "none";
//   marioText5.style.display = marioText5.style.display === "none" ? "block" : "none";
// });


// var marioImage6 = document.getElementById("mario-image-6");
// var marioTextImage6 = document.getElementById("mario-text-image-6");
// var marioText6 = document.getElementById("mario-text-6");

// marioImage6.addEventListener("click", function() {
//   marioTextImage6.style.display = marioTextImage6.style.display === "none" ? "block" : "none";
//   marioText6.style.display = marioText6.style.display === "none" ? "block" : "none";
// });

// var marioImage7 = document.getElementById("mario-image-7");
// var marioTextImage7 = document.getElementById("mario-text-image-7");
// var marioText7 = document.getElementById("mario-text-7");

// marioImage7.addEventListener("click", function() {
//   marioTextImage7.style.display = marioTextImage7.style.display === "none" ? "block" : "none";
//   marioText7.style.display = marioText7.style.display === "none" ? "block" : "none";
// });

// var marioImage8 = document.getElementById("mario-image-8");
// var marioTextImage8 = document.getElementById("mario-text-image-8");
// var marioText8 = document.getElementById("mario-text-8");

// marioImage8.addEventListener("click", function() {
//   marioTextImage8.style.display = marioTextImage8.style.display === "none" ? "block" : "none";
//   marioText8.style.display = marioText8.style.display === "none" ? "block" : "none";
// });


function toggleDisplay(imageId, textImageId, textId) {
  var image = document.getElementById(imageId);
  var textImage = document.getElementById(textImageId);
  var text = document.getElementById(textId);
  
  image.addEventListener("click", function() {
    textImage.style.display = textImage.style.display === "none" ? "block" : "none";
    text.style.display = text.style.display === "none" ? "block" : "none";
  });
}

// Call the function with the IDs of each element
for (var i = 1; i <= 9; i++) {
  var imageId = "mario-image-" + i;
  var textImageId = "mario-text-image-" + i;
  var textId = "mario-text-" + i;
  toggleDisplay(imageId, textImageId, textId);
}