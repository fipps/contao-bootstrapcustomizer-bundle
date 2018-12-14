/*
 *  Copyright Information
 *  @copyright: 2018 agentur fipps e.K.
 *  @author   : Arne Borchert <arne.borchert@fipps.de>
 *  @license  : LGPL 3.0+
 */
$(function () {
    $('[data-toggle="popover"]').popover()
});
$(function () {
    $('[data-toggle="tooltip"]').tooltip()
});
$('.popover-dismiss').popover({
    trigger: 'focus'
});