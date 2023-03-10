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

    var isTitleValid = true;
    
    /**
     * Register form submit
     * @param  {[type]}    [description]
     * @return {[type]}    [description]
     */
    $(document).on('submit', 'form#settings-form-day', function(e) {
        // Stop Multiple form submission
        e.preventDefault();
        //alert("Hi man");
        /**
         * Newsletter description validation
         * @return {[type]} [description]
         */
        editorNameValid();

        function editorNameValid() {
            isTitleValid = true;
            var editortitle = $('form#settings-form-day').find("input[name='template_title'");
            var editortitleval = editortitle.val();

            if (editortitleval == "") {
                isTitleValid = false;
                editortitle.addClass("error");
            } else {
                editortitle.removeClass("error");
            }
        }

        var form = $(this);
        if (isTitleValid == true) {

            /**
             * Data passing to the server with ajax
             * @param  {[type]}      [description]
             * @return {[type]}      [description]
             */
            
            const formAction = form.attr("action");
            const formHiddenAction = form.find('input[name="action"]').val();
            const formWpnonce = form.find('input[name="_wpnonce"]').val();

            var data = {
                value: form.serialize(),
                action: formHiddenAction,
                security: formWpnonce
            };

            $.post(formAction, data, function(response) {

                //console.log( response );

                if (response.success  == true || response['data']['exists']['updated'] == "success") {
                    window.location.href = response['data']['exists']['url'];
                } else {
                    // ['reportabug']
                }
            }, 'json');
        } else {
            // Stop Multiple form submission
            e.preventDefault();
        }
        // Stop form submission
        return false;

    });

    /**
     * Register form submit
     * @param  {[type]}    [description]
     * @return {[type]}    [description]
     */
    $(document).on('submit', 'form#settings-form-week', function(e) {
        // Stop Multiple form submission
        e.preventDefault();
        //alert("Hi man");
        /**
         * Newsletter description validation
         * @return {[type]} [description]
         */
        editorNameValid();

        function editorNameValid() {
            isTitleValid = true;
            var editortitle = $('form#settings-form-week').find("input[name='template_title'");
            var editortitleval = editortitle.val();

            if (editortitleval == "") {
                isTitleValid = false;
                editortitle.addClass("error");
            } else {
                editortitle.removeClass("error");
            }
        }

        var form = $(this);
        if (isTitleValid == true) {

            /**
             * Data passing to the server with ajax
             * @param  {[type]}      [description]
             * @return {[type]}      [description]
             */
            
            const formAction = form.attr("action");
            const formHiddenAction = form.find('input[name="action"]').val();
            const formWpnonce = form.find('input[name="_wpnonce"]').val();

            var data = {
                value: form.serialize(),
                action: formHiddenAction,
                security: formWpnonce
            };

            $.post(formAction, data, function(response) {

                //console.log( response );

                if (response.success  == true || response['data']['exists']['updated'] == "success") {
                    window.location.href = response['data']['exists']['url'];
                } else {
                    // ['reportabug']
                }
            }, 'json');
        } else {
            // Stop Multiple form submission
            e.preventDefault();
        }
        // Stop form submission
        return false;

    });

    /**
     * Register form submit
     * @param  {[type]}    [description]
     * @return {[type]}    [description]
     */
    $(document).on('submit', 'form#settings-form-month', function(e) {
        // Stop Multiple form submission
        e.preventDefault();
        //alert("Hi man");
        /**
         * Newsletter description validation
         * @return {[type]} [description]
         */
        editorNameValid();

        function editorNameValid() {
            isTitleValid = true;
            var editortitle = $('form#settings-form-month').find("input[name='template_title'");
            var editortitleval = editortitle.val();

            if (editortitleval == "") {
                isTitleValid = false;
                editortitle.addClass("error");
            } else {
                editortitle.removeClass("error");
            }
        }

        var form = $(this);
        if (isTitleValid == true) {

            /**
             * Data passing to the server with ajax
             * @param  {[type]}      [description]
             * @return {[type]}      [description]
             */
            
            const formAction = form.attr("action");
            const formHiddenAction = form.find('input[name="action"]').val();
            const formWpnonce = form.find('input[name="_wpnonce"]').val();

            var data = {
                value: form.serialize(),
                action: formHiddenAction,
                security: formWpnonce
            };

            $.post(formAction, data, function(response) {

                //console.log( response );

                if (response.success  == true || response['data']['exists']['updated'] == "success") {
                    window.location.href = response['data']['exists']['url'];
                } else {
                    // ['reportabug']
                }
            }, 'json');
        } else {
            // Stop Multiple form submission
            e.preventDefault();
        }
        // Stop form submission
        return false;

    });

    /**
     * Register form submit
     * @param  {[type]}    [description]
     * @return {[type]}    [description]
     */
    $(document).on('submit', 'form#settings-form-year', function(e) {
        // Stop Multiple form submission
        e.preventDefault();
        //alert("Hi man");
        /**
         * Newsletter description validation
         * @return {[type]} [description]
         */
        editorNameValid();

        function editorNameValid() {
            isTitleValid = true;
            var editortitle = $('form#settings-form-year').find("input[name='template_title'");
            var editortitleval = editortitle.val();

            if (editortitleval == "") {
                isTitleValid = false;
                editortitle.addClass("error");
            } else {
                editortitle.removeClass("error");
            }
        }

        var form = $(this);
        if (isTitleValid == true) {

            /**
             * Data passing to the server with ajax
             * @param  {[type]}      [description]
             * @return {[type]}      [description]
             */
            
            const formAction = form.attr("action");
            const formHiddenAction = form.find('input[name="action"]').val();
            const formWpnonce = form.find('input[name="_wpnonce"]').val();

            var data = {
                value: form.serialize(),
                action: formHiddenAction,
                security: formWpnonce
            };

            $.post(formAction, data, function(response) {

                //console.log( response );

                if (response.success  == true || response['data']['exists']['updated'] == "success") {
                    window.location.href = response['data']['exists']['url'];
                } else {
                    // ['reportabug']
                }
            }, 'json');
        } else {
            // Stop Multiple form submission
            e.preventDefault();
        }
        // Stop form submission
        return false;

    });


    /**
     * Register form submit
     * @param  {[type]}    [description]
     * @return {[type]}    [description]
     */
    $(document).on('submit', 'form#settings-form-energyday', function(e) {
        // Stop Multiple form submission
        e.preventDefault();
        //alert("Hi man");
        /**
         * Newsletter description validation
         * @return {[type]} [description]
         */
        editorNameValid();

        function editorNameValid() {
            isTitleValid = true;
            var editortitle = $('form#settings-form-energyday').find("input[name='template_title'");
            var editortitleval = editortitle.val();

            if (editortitleval == "") {
                isTitleValid = false;
                editortitle.addClass("error");
            } else {
                editortitle.removeClass("error");
            }
        }

        var form = $(this);
        if (isTitleValid == true) {

            /**
             * Data passing to the server with ajax
             * @param  {[type]}      [description]
             * @return {[type]}      [description]
             */
            
            const formAction = form.attr("action");
            const formHiddenAction = form.find('input[name="action"]').val();
            const formWpnonce = form.find('input[name="_wpnonce"]').val();

            var data = {
                value: form.serialize(),
                action: formHiddenAction,
                security: formWpnonce
            };

            $.post(formAction, data, function(response) {

                //console.log( response );

                if (response.success  == true || response['data']['exists']['updated'] == "success") {
                    window.location.href = response['data']['exists']['url'];
                } else {
                    // ['reportabug']
                }
            }, 'json');
        } else {
            // Stop Multiple form submission
            e.preventDefault();
        }
        // Stop form submission
        return false;

    });


    /**
     * Register form submit
     * @param  {[type]}    [description]
     * @return {[type]}    [description]
     */
    $(document).on('submit', 'form#settings-form-powermercurymonth', function(e) {
        // Stop Multiple form submission
        e.preventDefault();
        //alert("Hi man");
        /**
         * Newsletter description validation
         * @return {[type]} [description]
         */
        editorNameValid();

        function editorNameValid() {
            isTitleValid = true;
            var editortitle = $('form#settings-form-powermercurymonth').find("input[name='template_title'");
            var editortitleval = editortitle.val();

            if (editortitleval == "") {
                isTitleValid = false;
                editortitle.addClass("error");
            } else {
                editortitle.removeClass("error");
            }
        }

        var form = $(this);
        if (isTitleValid == true) {

            /**
             * Data passing to the server with ajax
             * @param  {[type]}      [description]
             * @return {[type]}      [description]
             */
            
            const formAction = form.attr("action");
            const formHiddenAction = form.find('input[name="action"]').val();
            const formWpnonce = form.find('input[name="_wpnonce"]').val();

            var data = {
                value: form.serialize(),
                action: formHiddenAction,
                security: formWpnonce
            };

            $.post(formAction, data, function(response) {

                //console.log( response );

                if (response.success  == true || response['data']['exists']['updated'] == "success") {
                    window.location.href = response['data']['exists']['url'];
                } else {
                    // ['reportabug']
                }
            }, 'json');
        } else {
            // Stop Multiple form submission
            e.preventDefault();
        }
        // Stop form submission
        return false;

    });


})(jQuery);