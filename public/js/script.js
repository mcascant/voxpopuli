/**
 * Created by developer on 12/13/18.
 */
// Bootstrap JavaScript for forms validation, disabling form submissions if there are invalid fields
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
                if (form.checkValidity() === true)
                	{
                		document.getElementById("was-validated").classList.remove("d-none");
                		
                	}
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();