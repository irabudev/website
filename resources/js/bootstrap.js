document.getElementById("year").innerHTML = new Date().getFullYear();

try {
    window.Popper = require('popper.js').default;
    window.$ = window.jQuery = require('jquery');

    require('bootstrap');
} catch (e) {}
