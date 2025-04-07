import {home} from "/main/src/js/home.js";
import {bride} from "/main/src/js/bride.js";
import {time} from "/main/src/js/time.js";
import {galeri} from "/main/src/js/galeri.js";
import {wishas} from "/main/src/js/wishas.js";
import {navbar} from "/main/src/js/navbar.js";
import {welcome} from "/main/src/js/welcome.js";

// load content
document.addEventListener('DOMContentLoaded', () => {
    AOS.init();

    welcome();
    navbar();
    home();
    bride()
    time();
    galeri();
    wishas();
});