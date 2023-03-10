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

    var isIDValid = true;
    var isTitleValid = true;

    /**
     * Register form submit
     * @param  {[type]}    [description]
     * @return {[type]}    [description]
     */
    $(document).on('submit', 'form#template_submit', function(e) {
        // Stop Multiple form submission
        e.preventDefault();
        //alert("Hi man");
        /**
         * Newsletter description validation
         * @return {[type]} [description]
         */


        editorIdValid();

        function editorIdValid() {
            isIDValid = true;
            var editorId = $('form#template_submit').find('select[name="template_id"]');
            var editorIdval = editorId.val();

            if (editorIdval == "0") {
                isIDValid = false;
                editorId.addClass("error");
            } else {
                editorId.removeClass("error");
            }
        }

        editorNameValid();

        function editorNameValid() {
            isTitleValid = true;
            var editortitle = $('form#template_submit').find('input[name="template_title"]');
            var editortitleval = editortitle.val();

            if (editortitleval == "") {
                isTitleValid = false;
                editortitle.addClass("error");
            } else {
                editortitle.removeClass("error");
            }
        }

        var form = $(this);
        if (isTitleValid == true && isIDValid == true) {

            /**
             * Data passing to the server with ajax
             * @param  {[type]}      [description]
             * @return {[type]}      [description]
             */
            var data = {
                value: form.serialize(),
                action: plugintemplate_obj.action,
                security: plugintemplate_obj.security,
                ajax_url: plugintemplate_obj.ajax_url
            };

            $.post(plugintemplate_obj.ajax_url, data, function(response) {

                if (response['data']['exists']['updated'] == 'success') {
                    window.location.href = response['data']['exists']['url'];
                } else {
                    window.location.href = response['data']['exists']['url'];
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