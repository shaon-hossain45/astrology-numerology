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
        const queryString = window.location.hash;
        const searchString = window.location.search;
        //console.log(searchString);

        if(searchString == "?page=numerologys"){

        var tabs = document.querySelectorAll(".nav-tab-wrapper > a");
        for (let i = 0; i < tabs.length; i++) {
            tabs[i].addEventListener("click", switchTab);

            //console.log(tabs[i].getAttribute("href"));
            if (tabs[i].getAttribute("href") == queryString) {
                tabs[i].classList.add("nav-tab-active");
            }
        }

        if ( (queryString != "") ) {
            document.querySelector(".nav-tab-wrapper a").classList.remove("nav-tab-active");

            document.querySelector(".settings-form").classList.remove("active");
            document.querySelector(queryString).classList.add("active");
        } else {
            document.querySelector(".nav-tab-wrapper> a").classList.add("nav-tab-active");
            document.querySelector(".settings-form").classList.add("active");
        }

    }
        // console.log(queryString);
    })

    function switchTab(event) {

        //console.log(event);
        var tabList = document.querySelectorAll(".nav-tab-wrapper a");
        for (let i = 0; i < tabList.length; i++) {
            tabList[i].classList.remove("nav-tab-active");
        }
        //document.querySelectorAll(".nav-tab-wrapper a").classList.remove("nav-tab-active");
        
        var tabpane = document.querySelectorAll(".settings-form");
        for (let i = 0; i < tabpane.length; i++) {
            tabpane[i].classList.remove("active");
        }
        

        var clickedTab = event.currentTarget;
        var anchor = event.target;
        var activePanelID = anchor.getAttribute("href");


        //console.log(activePanelID);
        //clickedTab.preventDefault();

        clickedTab.classList.add("nav-tab-active");
        document.querySelector(activePanelID).classList.add("active");
    }



})(jQuery);