$(document).ready($(function() {
    $( ".date").datepicker({
                        autoSize: true,
                        dateFormat: 'dd M yy',
                        changeMonth: true,
                        changeYear: true});

                

        $(".timepicker").timepicker();

    }));
