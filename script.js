$(document).ready(function(){
    $("#registrationForm").submit(function(event){
        var name = $("#name").val();
        var email = $("#email").val();
        var age = $("#age").val();

        // Basic form validation
        if(name == "" || email == "" || age == "") {
            alert("Please fill all fields.");
            event.preventDefault();
        }
    });
});
