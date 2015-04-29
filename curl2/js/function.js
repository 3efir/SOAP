   var frm = $('#form');
    frm.submit(function (ev) {
        $.ajax({
            type: frm.attr('method'),
            url: frm.attr('action'),
            data: frm.serialize(),
            success: function (result) {
                $("#result").html(result);
            }
        });
    });