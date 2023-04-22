$(document).ready(function() {
 
    $("#submit").click(function() {
     
        var email = $("#email").val();
        var password = $("#password").val();
        var c_password = $("#c-password").val();

        if(password !== c_password){
            alert("Please check your password");
            return false;
        }
        
        try{
            $.ajax({
                type: "POST",
                url: "php/submission.php",
                data: {
                    email : email,
                    password : password
                },
                cache: false,
                success: function(data) {
                    console.log("success");
                    alert(data);
                },
                error: function(xhr, status, error) {
                    console.error(xhr);
                }
            });
        }catch(e){
            console.log(e);
        }
     
    });
 
});