let validate = () => {
    let name = $("#name").val();
    let password = $("#password").val();
    let passwordConfirm = $("#passwordconfirm").val();
    let email = $("#email").val();

    // checking for empty field.
    if (name == "" || name == null || password == "" ||
        passwordConfirm == "" || password == null || passwordConfirm == null
        || email == "" || email == null){
            alert("Please fill up all the field.");
        }
    else{
        // validating password
        if (password == passwordConfirm){
            alert("Password matched.");
        }
        else{
            alert("Password didn't match.");
        }
    }
}
$("#submit_button").click(validate);
$("#reset_button").click(() => {
    $("input").val("");
})
