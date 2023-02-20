(function($) {
    'use strict';

    /**
     * All of the code for your admin-facing JavaScript source
     * should reside in this file.
     *
     * Note: It has been assumed you will write jQuery code here, so the
     * $ function reference has been prepared for usage within the scope
     * of this function.
     *
     * This enables you to define handlers, for when the DOM is ready:
     *
     * $(function() {
     *
     * });
     *
     * When the window is loaded:
     *
     * $( window ).load(function() {
     *
     * });
     *
     * ...and/or other possibilities.
     *
     * Ideally, it is not considered best practise to attach more than a
     * single DOM-ready or window-load handler for a particular page.
     * Although scripts in the WordPress core, Plugins and Themes may be
     * practising this, we should strive to set a better example in our own work.
     */



    window.addEventListener("load", function() {

        //store tabs variables

        var tabs = document.querySelectorAll(".nav-tab-wrapper > a");
        for (let i = 0; i < tabs.length; i++) {
            tabs[i].addEventListener("click", switchTab);
        }
    })

    function switchTab(event) {

        //console.log(event);

        document.querySelector(".nav-tab-wrapper a.nav-tab-active").classList.remove("nav-tab-active");
        document.querySelector(".settings-form-page.active").classList.remove("active");

        var clickedTab = event.currentTarget;
        var anchor = event.target;
        var activePanelID = anchor.getAttribute("href");


        //console.log(activePanelID);
        //clickedTab.preventDefault();
        clickedTab.classList.add("nav-tab-active");
        document.querySelector(activePanelID).classList.add("active");
    }



})(jQuery);