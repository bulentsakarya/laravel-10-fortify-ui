import './bootstrap';
import * as bootstrap from 'bootstrap';
import * as simplebar from 'simplebar';
import './iziToast';

"use strict";

if (document.body.classList.contains('.panel')) {
    /*
    * Sidebar
    */
    const sidebar = document.querySelector(".sidebar");
    const closeBtn = document.querySelector(".close");
    const sidebarBtn = document.querySelector(".menu-toggle");

    sidebarBtn.addEventListener("click", () => {
        sidebar.classList.toggle("toggled");
    });

    closeBtn.addEventListener("click", () => {
        sidebar.classList.toggle("toggled");
    });

    /*
    * Go To Top
    */
    let topBtn = document.getElementById("back-to-top");

    window.onscroll = function() {scrollFunction()};
    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            topBtn.classList.add("show");
        } else {
            topBtn.classList.remove("show");
        }
    }
    topBtn.addEventListener("click", () => {
        document.body.scrollTop = 0; // For Safari
        document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    });

    /*
    * Select All CheckBox
    */
    window.addEventListener("load", function() {
        const mainCheck = document.querySelector(".selectAll");
        const chks = [...document.querySelectorAll(".feature")]; /// cast to array
        mainCheck.addEventListener("click", function() {
        chks.forEach(chk => chk.checked = this.checked);
        });
        chks.forEach(chk => chk.addEventListener("click", function() {
            const checked = chks.filter(chk => chk.checked).length;
            mainCheck.checked = checked === chks.length;
        })
        );
    });

}
