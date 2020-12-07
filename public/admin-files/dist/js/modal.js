$(document).ready(function() {

    //Other Gallery Popup Modal

    $('.editbtn').on('click', function() {
        $('#modal-primary').modal('show');

        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function() {
            return $(this).text();
        }).get();


        $tty = data[4];
        $('#current-data-id-ed').val(data[0]);
        $('#current-data-ed').attr("src", $tty);
        $('#current-data-url-ed').val($tty);
        $('#current-data-url-ed2').val(data[5]);

    });

    $('.deletebtn').on('click', function() {
        $('#modal-sm').modal('show');

        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function() {
            return $(this).text();
        }).get();


        $tty = data[4];

        console.log($tty);
        $('#current-data-id-del').val(data[0]);
        $('#current-data-del').attr("src", $tty);
        $('#current-data-url-del').val($tty);
        $('#current-data-url-del2').val(data[5]);

    });


    //Video Gallery Popup Modal

    $('.editbtnvideo').on('click', function() {
        $('#modal-primary').modal('show');

        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function() {
            return $(this).text();
        }).get();

        $('#current-url-id-ed').val(data[0]);

    });

    $('.deletebtnvideo').on('click', function() {
        $('#modal-sm').modal('show');

        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function() {
            return $(this).text();
        }).get();

        $('#current-url-id-del').val(data[0]);

    });


    //Post Popup Modal

    $('.editbtnpost').on('click', function() {
        $('#modal-sm').modal('show');

        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function() {
            return $(this).text();
        }).get();

        $('#current-post-id-ed').val(data[0]);

    });

    $('.deletebtnpost').on('click', function() {
        $('#modal-sm-2').modal('show');

        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function() {
            return $(this).text();
        }).get();


        $('#current-post-id-del').val(data[0]);

    });



    //Bible Popup Modal

    $('.editbtnverse').on('click', function() {
        $('#modal-primary').modal('show');

        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function() {
            return $(this).text();
        }).get();

        $('#current-verse-id-ed').val(data[0]);
        $('#bible-quoteed').val(data[1]);
        $('#verseed').val(data[2]);

    });

    $('.deletebtnverse').on('click', function() {
        $('#modal-sm').modal('show');

        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function() {
            return $(this).text();
        }).get();

        $('#current-verse-id-del').val(data[0]);

    });

    //Slider Verse Popup Modal

    $('.editbtnsliderverse').on('click', function() {
        $('#modal-primary').modal('show');

        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function() {
            return $(this).text();
        }).get();

        $('#current-verse-id-ed').val(data[0]);
        $('#slider-quoteed').val(data[1]);
        $('#slider-verseed').val(data[2]);

    });

    $('.deletebtnsliderverse').on('click', function() {
        $('#modal-sm').modal('show');

        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function() {
            return $(this).text();
        }).get();

        $('#current-verse-id-del').val(data[0]);

    });


    //Message Popup Modal

    $('.viewmessage').on('click', function() {
        $('#modal-success').modal('show');

        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function() {
            return $(this).text();
        }).get();

        $('#message').val(data[4]);

    });


});