import './bootstrap';
import 'bootstrap';

// sidebar

let hamburger = document.querySelector(".toggle-btn");
let toggler = document.querySelector("#icon");
hamburger.addEventListener("click", function() {
    document.querySelector("#sidebar").classList.toggle("expand");
    toggler.classList.toggle("bi-list");
    toggler.classList.toggle("bi-x");
});
