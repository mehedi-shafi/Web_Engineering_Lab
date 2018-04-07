$("#reset").click(() => {
    $("input").val('');
});

$("#submit").click(() => {
    validateform();
});

let validateform = () => {
    // check if any field is empty
    let username = $("#username").val();
    let password = $("#password").val();
    let passconf = $("#passconf").val();
    let email = $("#email").val();

    if (username == '' || username == null ||
        password == '' || password == null ||
        passconf == '' || passconf == null ||
        email == '' || email == null){
            alert("Please fill up all the field.");
        }
    else{
        if (password == passconf){
            alert("Password matched.");
        }
        else{
            alert("Password didnt match");
        }
    }
}