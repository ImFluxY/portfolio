(function () {
    "use strict";

    document.addEventListener("DOMContentLoaded", initialiser);
    window.addEventListener("load", load);

    function load()
    {
        console.log("Loaded");

        var loading = document.querySelector(".loading-content");
        loading.classList.add("page-loaded");
    }

    var menuBtn;

    function initialiser()
    {
        menuBtn = document.querySelector(".menu-btn");
        menuBtn.classList.remove("ouvert");
        menuBtn.addEventListener("click", gererMenu);

        let menuChoix = document.getElementsByClassName("menuChoix");

        for(let unChoix of menuChoix)
        {
            unChoix.addEventListener("click", gererMenu);
        }
    }

    function gererMenu()
    {
        menuBtn.classList.toggle("ouvert");
    }

}());