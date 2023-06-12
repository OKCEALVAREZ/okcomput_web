$(function () {
    $('input[type="checkbox"].minimal-red').iCheck({
        checkboxClass: 'icheckbox_minimal-red',
    });
    $('input[type="radio"].radio-opcion').iCheck({
        radioClass: 'iradio_minimal-red',
        cursor: true
    });

    $("#formulario").on("submit", function() {
        $.ajax({
            type: "POST",
            // url : "{{ route('eventos.dell.guardar') }}",
            url: "guardar",
            data: $(this).serializeArray(),
            dataType: "JSON",
            success: function (response) {
                Util.notify(response.alert, response.message);
                if (response.response == 'ok') {
                    setTimeout(function () { window.location.href = "https://okcomputer.com.pe/"; }, 400);
                }
            }
        }).fail( function(jqXHR, textStatus, errorThrown) {
            console.log(jqXHR);
            console.log(textStatus);
            console.log(errorThrown);
        });
        return false;
    });
});