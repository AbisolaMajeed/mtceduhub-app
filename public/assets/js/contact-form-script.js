// /*==============================================================*/
// // Raque Contact Form  JS
// /*==============================================================*/
(function ($) {
    "use strict"; // Start of use strict
    $("#contactForm").validator().on("submit", function (event) {
        if (event.isDefaultPrevented()) {
            // handle the invalid form...
            formError();
            // submitMSG(false, "Did you fill in the form properly?");
        } else {
            // everything looks good!
            event.preventDefault();

            // Add loading spinner to button
            $(".btn-submit").prepend('<i class="fa-solid fa-spinner"></i>');
            $(".btn-submit").attr("disabled", 'disabled');

            submitForm();
        }
    });

    function submitForm() {
        // Initiate Variables With Form Content
        var name = $("#name").val();
        var email = $("#email").val();
        var msg_subject = $("#msg_subject").val();
        var phone_number = $("#phone_number").val();
        var message = $("#message").val();

        $.ajax({
            type: "POST",
            url: "/contact",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                name: name,
                email: email,
                msg_subject: msg_subject,
                phone_number: phone_number,
                message: message,
            },

            success: function () {
                // Reset form input after submission
                $('#contactForm')[0].reset();

                // Display success message
                $('#successMsg').show();

                $(".btn-submit").find(".fa-spinner").remove();
                $(".btn-submit").removeAttr("disabled");
            }
        });
    }

    function formSuccess() {
        $("#contactForm")[0].reset();
        submitMSG(true, "Message Submitted!")
    }

    function formError() {
        $("#contactForm").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
            $(this).removeClass();
        });
    }

    function submitMSG(valid, msg) {
        if (valid) {
            var msgClasses = "h4 tada animated text-success";
        } else {
            var msgClasses = "h4 text-danger";
        }
        $("#msgSubmit").removeClass().addClass(msgClasses).text(msg);
    }
}(jQuery)); // End of use strict
