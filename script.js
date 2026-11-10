
$(document).ready(function() {

    $("#regForm").submit(function(event) {

        var name = $("#name").val().trim();
        var email = $("#email").val().trim();
        var phone = $("#phone").val().trim();

        if (name == "" || email == "" || phone == "") {
            alert("Please fill all required fields");
            event.preventDefault();
        }
        else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
            alert("Enter a valid email address");
            event.preventDefault();
        }
        else if (!/^[0-9+\-\s]{7,15}$/.test(phone)) {
            alert("Enter a valid phone number");
            event.preventDefault();
        }
        else {
            alert("Submitting your application!");
        }

    });

});
