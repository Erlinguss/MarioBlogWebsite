
// // slices images 
//   const images = document.querySelector('.images');
//   const prevBtn = document.querySelector('#prev-btn'); 
//   const nextBtn = document.querySelector('#next-btn');
//   const imageWidth = images.children[0].clientWidth;
//   let currentIndex = 1; 

//   function moveToIndex(index) {
//     images.style.transform = `translateX(-${index * imageWidth}px)`;
//     currentIndex = index;
//   }

//   prevBtn.addEventListener('click', () => {
//     const index = (currentIndex - 1 + images.children.length) % images.children.length;
//     moveToIndex(index);
//   });

//   nextBtn.addEventListener('click', () => {
//     const index = (currentIndex + 1) % images.children.length;
//     moveToIndex(index);
//   });

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



