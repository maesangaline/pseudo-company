      $(document).ready(function () {
      $("#contact-icon").click(function () {
      $("#contact-popup").show();
    });
    //Contact Form validation on click event
    $("#contact-form").on("submit", function () {
        var valid = true;
        $(".info").html("");
        $("inputBox").removeClass("input-error");
        
        var name = $("#name").val();
        var email = $("#email").val();
        var comment = $("#comment").val();
        var gender = $("#gender").val();
        var age = $("age").val();

        if (name == "") {
            $("#name-info").html("required.");
            $("#name").addClass("input-error");
        }
        if (email == "") {
            $("#email-info").html("required.");
            $("#email").addClass("input-error");
            valid = false;
        }
        if (!email.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/))
        {
            $("#email-info").html("invalid.");
            $("#email").addClass("input-error");
            valid = false;
        }

        if (comment == "") {
            $("#comment-info").html("required.");
            $("#comment").addClass("input-error");
            valid = false;
        }
        if (gender == "") {
            $("#gender-info").html("required.");
            $("#gender").addClass("input-error");
            valid = false;
        }
        if (age == "") {
            $("#age-info").html("required.");
            $("#age").addClass("input-error");
            valid = false;
        }
        return valid;

    });
});