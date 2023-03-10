(function( $ ) {
	'use strict';

	/**
	 * All of the code for your public-facing JavaScript source
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

	  /**
     * Compare Ajax
     * @param  {[type]} value    [description]
     * @return {[type]} value    [description]
     */
	  $("form.horoscopeIdentify").on("submit", function(e) {

        // Stop Multiple form submission
        e.preventDefault();
        //alert("okk");
        var thisby = $(this);

        var fileData = thisby.find('input.datepicker').val();

        /**
         * Compare form variable
         * @type {Boolean}
         */
        var isCompareValid = true;

        /**
         * Form validation
         * @return {[type]} [description]
         */
        comproductValid();

        function comproductValid() {
            isCompareValid = true;
            if (fileData == "") {
                isCompareValid = false;
                thisby.find("input[name='datepicker']").addClass("error");
            } else {
                isCompareValid = true;
                //alert(productID);
                thisby.find("input[name='datepicker']").removeClass("error");
            }
        }

        if (isCompareValid == true) {

            /**
             * Data passing to the server with ajax
             * @param  {[type]}      [description]
             * @return {[type]}      [description]
             */

            //var form = thisby.closest("form");

			const formAction = thisby.attr("action");
            const formHiddenAction = thisby.find('input[name="action"]').val();
            const formWpnonce = thisby.find('input[name="_wpnonce"]').val();

            var data = {
                value: fileData,
                action: formHiddenAction,
                security: formWpnonce
            };

            $.ajax({
                type: "POST",
                dataType: "json",
                url: formAction,
                data: data,
                cache: false,
                beforeSend: function(xhr) {
                    //form.find("button[type='button']").children("span.spinner-grow").removeClass("d-none");
                },
                success: function(response) {
                    //alert("ok done");
                    //console.log(response['data']['reportabug']);
                    
                    
                    const el0 = document.querySelectorAll('ul.horoscopeSunSign li');

                    for (let i = 0; i < el0.length; i++) {
                        el0[i].classList.remove("horoscopeSelect");
                    }
                    

                    // ✅ Get first element that has data-id attribute set
                    const el1 = document.querySelector('[data="'+response['data']['reportabug']+'"]');
                    el1.classList.add('horoscopeSelect');

                },
                complete: function(xhr, textStatus) {
                    //form.find("button[type='button']").children("span.spinner-grow").addClass("d-none");
                }
            });
        };
        // Stop form submission
        //return false;
    });

})( jQuery );
