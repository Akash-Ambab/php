$("#testForm").on("submit", function(e) {
    e.preventDefault();
    $.ajax({
        url: "signup.php",
        type: "post",
        data: $("#testForm").serialize(),
        success: function(data) {
            if (data == "Success") {
                $("#msg").show();
                $("#msg").html("Data Submitted Successfully");
                $("#testForm")[0].reset();

                setTimeout(function(){
                    window.location.href = "hello.php";
                }, 3500);
            }
            else {
                $("#msg").show();
                $("#msg").html(data);
            }
        }
    })

    
})