document.addEventListener('DOMContentLoaded', function() {
    let sliderIndex = 0;
    const slides = document.querySelectorAll('.slide');
    const totalSlides = slides.length;
  
    function showSlide(index) {
      slides.forEach((slide, i) => {
        slide.style.display = i === index ? 'block' : 'none';
      });
    }
  
    function nextSlide() {
      sliderIndex++;
      if (sliderIndex >= totalSlides) sliderIndex = 0;
      showSlide(sliderIndex);
    }
  
    // Initially show the first slide
    showSlide(sliderIndex);
    // Change slide every 5 seconds
    setInterval(nextSlide, 5000);
  });
  

  document.querySelector('.dropdown > button').addEventListener('click', function() {
    var dropdownContent = this.nextElementSibling;
    var isHidden = dropdownContent.style.display === 'none' || !dropdownContent.style.display;
    dropdownContent.style.display = isHidden ? 'block' : 'none';
    dropdownContent.style.opacity = isHidden ? '1' : '0';
    dropdownContent.style.visibility = isHidden ? 'visible' : 'hidden';
});


let slideIndex = 0;

document.querySelector('.prev').addEventListener('click', () => moveSlide(-1));
document.querySelector('.next').addEventListener('click', () => moveSlide(1));

function moveSlide(step) {
  const slides = document.querySelectorAll('.slide');
  const totalSlides = slides.length;
  slideIndex += step;

  if (slideIndex < 0) {
    slideIndex = totalSlides - 5; // Adjusts to show the last 5 slides
  } else if (slideIndex >= totalSlides - 4) { // Ensures the index is within bounds to show 5 slides
    slideIndex = 0;
  }

  const offset = slideIndex * -20; // Each slide is 20% of the container
  document.querySelector('.slider').style.transform = `translateX(${offset}%)`;
}

