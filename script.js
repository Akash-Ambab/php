$("#testForm").on("submit", function(e) {
    e.preventDefault();
    formValidation();
})

function formValidation() {
    
    var name = $('#name').val();
    var email = $('#email').val();
    var contact = $('#contact').val();
    var address = $('#address').val();
    var city = $('#city').val();

    var nameRegex = /^[a-zA-Z]+(([a-zA-Z ])?[a-zA-Z]*)*$/;
    var emailRegex = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/;
    var contactRegex = /^[0-9]+$/;

    $('#nameError').html("");
    $('#emailError').html("");
    $('#contactError').html("");
    $('#addressError').html("");
    $('#cityError').html("");
    $('#name, #email, #contact, #address, #city').removeClass("errorMsg");

    if(!name.match(nameRegex)) {
        $('#nameError').html("Enter valid name");
        $('#name').addClass('errorMsg');
        return false;
    }

    if(!email.match(emailRegex)) {
        $('#emailError').html("Enter valid email");
        $('#email').addClass('errorMsg');
        return false;
    }

    if(!contact.match(contactRegex)) {
        $('#contactError').html("Only numeric values");
        $('#contact').addClass('errorMsg');
        return false;
    }

    if(contact.length != 10) {
        $('#contactError').html("Contact number should be 10 digits");
        $('#contact').addClass('errorMsg');
        return false;
    }

    if(address.length == 0) {
        $('#addressError').html("Address is required");
        $('#address').addClass('errorMsg');
        return false;
    }

    if(address.match(/(\w+)/g).length <= 5) {
        $('#addressError').html("Address should be more than 5 words");
        $('#address').addClass('errorMsg');
        return false;
    }

    if(city == 0) {
        $('#cityError').html("Select city");
        return false;
    }

    $('#success').show();
    $('#testForm')[0].reset();
}