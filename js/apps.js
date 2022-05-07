let togger = document.querySelector(".togger");
let body = document.querySelector("body");
togger.addEventListener('click', function() {
    body.classList.toggle('open')
})