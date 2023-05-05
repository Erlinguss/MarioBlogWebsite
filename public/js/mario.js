

  const images = document.querySelector('.images');
  const prevBtn = document.querySelector('#prev-btn'); 
  const nextBtn = document.querySelector('#next-btn');
  const imageWidth = images.children[0].clientWidth;
  let currentIndex = 1; // Start at index 1 to show the first image

  function moveToIndex(index) {
    images.style.transform = `translateX(-${index * imageWidth}px)`;
    currentIndex = index;
  }

  prevBtn.addEventListener('click', () => {
    const index = (currentIndex - 1 + images.children.length) % images.children.length;
    moveToIndex(index);
  });

  nextBtn.addEventListener('click', () => {
    const index = (currentIndex + 1) % images.children.length;
    moveToIndex(index);
  });
