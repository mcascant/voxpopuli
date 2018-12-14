// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
    'use strict';
    window.addEventListener('load', function () {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function (form) {
            form.addEventListener('submit', function (event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();

/* AJAX - Post Form */
function loadForm(url) {

    /* Addresses */

    /* Form fields */
    let email = document.querySelector("#loginEmail").value;
    let password = document.querySelector("#loginPassword").value;

    /* Formated data to be sent */
    let formData = "email=" + loginEmail + "&password=" + loginPassword;


    /* Asking for a XMLHttpRequest and verifying IF the form is ready to be sent (msg=4), SENDING all fields data content */
    let xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4) {
            sendFormModif(this);
        }
    };

    xhttp.open("POST", url, true);
    xhttp.send(formData);
}