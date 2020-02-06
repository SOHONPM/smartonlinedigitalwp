(function ($) {
    $('#toggle').toggle(
        function () {
            $('#popout').animate({ right: 0 }, 'slow', function () {
                // $('#toggle').html('<img src="http://www.example.com/wp-content/themes/your-theme/images/menu.png" alt="open" />');
            });
            // $('#body').animate({ marginLeft: -250 }, 'slow', function () { });
        },
        function () {
            $('#popout').animate({ right: -250 }, 'slow', function () {
                // $('#toggle').html('<img src="http://www.example.com/wp-content/themes/your-theme/images/menu.png" alt="close" />');
            });

            // $('#body').animate({ marginLeft: 0 }, 'slow', function () { });
        }
    );

    // $("#body").click(function () {

    //     $('#popout').animate({ right: -250 }, 'slow', function () {
    //         // $('#toggle').html('<img src="http://www.example.com/wp-content/themes/your-theme/images/menu.png" alt="open" />');
    //     });
    //     $('#toggle').unbind('toogle')

    // })
})(jQuery);