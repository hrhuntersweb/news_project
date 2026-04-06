import { searchIcon, searchInput } from './ui/_dom-selectors.js';

searchIcon.addEventListener('click', function (e) {
    e.preventDefault();
    searchInput.classList.toggle('active');
});

document.addEventListener('DOMContentLoaded', function () {
    new Splide('#image-carousel').mount();
});