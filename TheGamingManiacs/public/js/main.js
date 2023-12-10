'use strict'

const body = document.querySelector('body');

const showMoreButtons = document.querySelectorAll('.show-more-button');
const dropdownMobile = document.getElementById('dropdown-menu');
const backgroundOverlay = document.getElementById('background-overlay-mobile');

const navBar = document.getElementById('navbar');
const mobileLogo = document.getElementById("logo-short");



window.onscroll = function scrollFunction() {
  if (window.pageYOffset > navBar.offsetTop) {
    navBar.classList.add("sticky");
    navBar.classList.add("strong-shadow");
    mobileLogo.classList.remove("hidden");
  } else {
    navBar.classList.remove("sticky");
    navBar.classList.remove("strong-shadow");
    mobileLogo.classList.add("hidden")
  }
}

showMoreButtons.forEach(button => {
  button.addEventListener("click", (e) => {
    e.preventDefault();
    mobileDropdownFunctionality();
  })
});

backgroundOverlay.addEventListener('click', (e) => {
  e.preventDefault();
  mobileDropdownFunctionality();
})

const mobileDropdownFunctionality = () => {
    dropdownMobile.classList.toggle('hidden');
    backgroundOverlay.classList.toggle('hidden');
    body.classList.toggle('no-scroll');
  }