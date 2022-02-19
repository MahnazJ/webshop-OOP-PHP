$(document).ready(function() {
    $('form[name="frmContact"]').on('submit', function(e) {
        $('form[name="frmContact"] input[type="submit"]').prop('disabled', true)

        $.ajax({
            url: 'contact',
            method: 'POST',
            data: $(this).serialize(),
            success: function(result) {
                console.log("mew");
                console.log(result);
                const data = JSON.parse(result)
                
                if (data.success) {
                    $('form[name="frmContact"] input[type="submit"]').prop('disabled', false)
                    window.location.href = "/";
                } else {
                    $('#register-message').html(data.message).show()
                }
            }
        })
    })

    $('#register-cancel').on('click', function() {
        window.location.href = "/"
    })
})