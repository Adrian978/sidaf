$(document).ready(function () {
    $("#ChangePass").submit(function (event) {
        submitForm();
        return false;
    });
});
// function to handle form submit
function submitForm() {
    $.ajax({
        type: "POST",
        url: "password.php",
        cache: false,
        data: $('form#ChangePass').serialize(),
        success: function (response) {
            $("#password").html(response)
            $("#passmodal").modal('hide');
        },
        error: function () {
            alert("Error");
        }
    });
}