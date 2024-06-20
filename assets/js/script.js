'use strict';



/**
 * add event on element
 */

const addEventOnElem = function (elem, type, callback) {
  if (elem.length > 1) {
    for (let i = 0; i < elem.length; i++) {
      elem[i].addEventListener(type, callback);
    }
  } else {
    elem.addEventListener(type, callback);
  }
}



/**
 * navbar toggle
 */

const navbar = document.querySelector("[data-navbar]");
const navTogglers = document.querySelectorAll("[data-nav-toggler]");
const navLinks = document.querySelectorAll("[data-nav-link]");
const overlay = document.querySelector("[data-overlay]");

const toggleNavbar = function () {
  navbar.classList.toggle("active");
  overlay.classList.toggle("active");
}

addEventOnElem(navTogglers, "click", toggleNavbar);

const closeNavbar = function () {
  navbar.classList.remove("active");
  overlay.classList.remove("active");
}

addEventOnElem(navLinks, "click", closeNavbar);



/**
 * header active when scroll down to 100px
 */

const header = document.querySelector("[data-header]");
const backTopBtn = document.querySelector("[data-back-top-btn]");

const activeElem = function () {
  if (window.scrollY > 100) {
    header.classList.add("active");
    backTopBtn.classList.add("active");
  } else {
    header.classList.remove("active");
    backTopBtn.classList.remove("active");
  }
}

addEventOnElem(window, "scroll", activeElem);

function toggleVideo() {
  var video = document.getElementById('video');
  var playButton = document.querySelector('.play-btn');
  if (video.paused) {
    video.play();
    playButton.style.display = 'none'; // Hide the play button once video is playing
  } else {
    video.pause();
  }
}

document.getElementById('feedbackForm').addEventListener('submit', function(event) {
  var name = document.getElementById('exampleInputName').value;
  var email = document.getElementById('exampleInputEmail').value;
  var country = document.getElementById('exampleInputCountry').value;
  var comment = document.getElementById('exampleInputComment').value;
  var valid = true;

  if (name.trim() === '') {
    alert('Por favor, ingrese su nombre y apellido.');
    valid = false;
  }
  
  if (email.trim() === '') {
    alert('Por favor, ingrese su correo electrónico.');
    valid = false;
  }

  if (country.trim() === '') {
    alert('Por favor, ingrese su país.');
    valid = false;
  }

  if (comment.trim() === '') {
    alert('Por favor, escriba su comentario.');
    valid = false;
  }

  if (!valid) {
    event.preventDefault();
  }
});

