/**
 * Created by ponbiki on 10/18/16.
 */
+function ($) {

    $(document).ready(function() {
        $('.js-header-search-toggle').on('click', function() {
            $('.search-bar').slideToggle();
        });
    });

}(jQuery);
