/*
 *  Copyright Information
 *  @copyright: 2018 agentur fipps e.K.
 *  @author   : Arne Borchert <arne.borchert@fipps.de>
 *  @license  : LGPL 3.0+
 */
$(document).ready(function () {
    $(function () {
        $('[data-toggle="popover"]').popover(
            {
                container: 'body'
            }
        )
    });
    $(function () {
        $('[data-toggle="tooltip"]').tooltip(
            {
                container: 'body'
            }
        )
    });
    $('.popover-dismiss').popover({
        trigger: 'focus'
    });
    $(".sticky-top").stick_in_parent({
        parent: 'body'
    });
});
