
// ============FUNCTION TO MOVE IMAGES FROM -X TO X OR VICEVERSE ===========

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

  image.addEventListener("click", function () {
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


