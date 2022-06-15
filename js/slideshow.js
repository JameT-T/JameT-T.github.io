//pulled slides from document by ID
let slide1 = document.getElementById("slide1");

let slide2 = document.getElementById("slide2");

let slide3 = document.getElementById("slide3");

let slide4 = document.getElementById("slide4");

//placed slides into an array
let slides = [slide1, slide2, slide3, slide4];

let currentSlideIndex = 0;

function showCurrentSlide() {
  if (currentSlideIndex < 0) {
    currentSlideIndex = slides.length - 1;
  }

  if (currentSlideIndex >= slides.length) {
    currentSlideIndex = 0;
  }


  for (let i = 0; i < slides.length; i++) {
    let loopSlide = slides[i];

// != means does not equal
    if (i != currentSlideIndex) {
      loopSlide.style.display = "none";
    } else {
      loopSlide.style.display = "inline-block";
    }
  }
}

//executed the function
showCurrentSlide();

//button controls
function showNextSlide() {
  currentSlideIndex += 1;
  showCurrentSlide();
}

function showPreviousSlide() {
  currentSlideIndex --;
  showCurrentSlide();
}
