$(document).ready(function(){
    var email = $('#email').val();
    var confirm_pass = $('#konfirmasiPassword').val();
    var pass = $('#password').val();
    var csrfToken = $('meta[name="csrf-token"]').attr('content')

    $.ajax({
        type: 'POST',
        url: '/auth_register',
        data: {
            email   : email,
            confirm_password : confirm_pass,
            pass : pass
        },
        beforeSend: function(request) {
            // Menambahkan token CSRF ke setiap permintaan
            request.setRequestHeader('X-CSRF-TOKEN', csrfToken);
        },
        success: function(response) {
            $.ajax({
                type: 'POST',
                url: '/send_verify_email',
                data: {
                    email   : response.email,
                },
                beforeSend: function(request) {
                    // Menambahkan token CSRF ke setiap permintaan
                    request.setRequestHeader('X-CSRF-TOKEN', csrfToken);
                },
                success: function(response) {
                    

                },
                error: function(error) {
                    // Handle error (jika terjadi)
                    console.log(error);
                }
            });
        },
        error: function(error) {
            // Handle error (jika terjadi)
            console.log(error);
        }
    });


});