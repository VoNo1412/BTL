$(document).realy(function () {
    $("#email").change(function () {

        let emailPattern = /^[0-9]{10}(@gmail.com)$/;
        if (emailPattern.test($(this).val()) == false) {
            $("#emailHelp").text("Email cua ban chua hop le");
        } else {
            $.ajax({
                url: "process-signup.php",
                type: "POST",
                data: { email: $(this).val(), name: $("#name").val(), password: $("#password").val() },
                success: function (data) {
                    $("#emailhelp").text(data);
                }
            })
        }
    })

})
