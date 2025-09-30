/******************
    User custom JS
    ---------------

   Put JS-functions for your template here.
   If possible use a closure, or add them to the general Template Object "Template"
*/


$(document).on('ready pjax:scriptcomplete',function(){
    /**
     * Code included inside this will only run once the page Document Object Model (DOM) is ready for JavaScript code to execute
     * @see https://learn.jquery.com/using-jquery-core/document-ready/
     */
});

$(document).ready(function () {
    // Attach click to each image
    $('.mood-scale .answer-item').on('click', function () {
        // Trigger the radio selection
        $(this).find('input[type=radio]').prop('checked', true);

        // Optional: visual feedback (can be styled in CSS)
        $('.mood-scale .answer-item').removeClass('selected');
        $(this).addClass('selected');

        // Automatically submit the form
        $('form[name="limesurvey"]').submit();
    });
});
