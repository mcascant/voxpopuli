<?php

/* pwdchange.html */
class __TwigTemplate_ed17fda6ea8a2c88a8d3d1a75881b0c0d2c3a6a126bbf399a25fb7638ad4b063 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pwdchange.html"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pwdchange.html"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
\t<meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<title>Complete Bootstrap 4 Website Layout</title>
\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\">
\t<link href=\"style.css\" rel=\"stylesheet\">
</head>



<body>

\t<!-- HEADER AND NAVIGATION SECTION -->

\t<header>

\t\t<!-- ADDING THE BOOTSTRAP NAVBAR WITH DROPDOWN FORMS FOR REGISTER & LOGIN-->

\t\t<nav class=\"navbar navbar-expand-lg navbar-light\">
\t\t\t<div class=\"container\">
\t\t\t\t<a class=\"navbar-brand\" href=\"#\"><img src=\"img/voxpopuli.jpg\" alt=\"vox populi\"></a>
\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\"
\t\t\t\t aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t</button>


\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">

\t\t\t\t\t<ul class=\"navbar-nav ml-auto\">
\t\t\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Home <span class=\"sr-only\">(current)</span></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">About</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Meet the Team</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<!-- DROPDOWN CHANGE PASSWORD FORM  -->

\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"pwdChangeDropdown\" role=\"button\" data-toggle=\"dropdown\"
\t\t\t\t\t\t\t aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\tChange Password
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"pwdChangeDropdown\" action=\"\" method=\"POST\">
\t\t\t\t\t\t\t\t<form class=\"px-3 py-3 needs-validation\" style=\"min-width: 250px;\" novalidate oninput='pwdChangePassword2.setCustomValidity(pwdChangePassword2.value != pwdChangePassword.value ? \"Passwords do not match.\" : \"\")'>
\t\t\t\t\t\t\t\t\t<p>Use the form below to change your password. Your password cannot be the same as your
\t\t\t\t\t\t\t\t\t\tusername.</p>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"pwdChangePassword\">Password</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"pwdChangePassword\" name=\"password\" placeholder=\"New password\"
\t\t\t\t\t\t\t\t\t\t minlength=6 required>
\t\t\t\t\t\t\t\t\t\t<small id=\"pwdChangeHelp\" class=\"form-text text-muted\"></small>
\t\t\t\t\t\t\t\t\t\t<div class=\"valid-feedback\">
\t\t\t\t\t\t\t\t\t\t\tPassword provided is valid!
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"invalid-feedback\">
\t\t\t\t\t\t\t\t\t\t\tPlease provide a valid password (min. 6 characters)!
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"pwdChangePassword2\">Confirm Password</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"pwdChangePassword2\" name=\"password2\" placeholder=\"Confirm new password\"
\t\t\t\t\t\t\t\t\t\t minlength=6 required>
\t\t\t\t\t\t\t\t\t\t<small id=\"pwdChangePassword2Help\" class=\"form-text text-muted\"></small>
\t\t\t\t\t\t\t\t\t\t<div class=\"valid-feedback\">
\t\t\t\t\t\t\t\t\t\t\tConfirmation password provided is valid and match!
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"invalid-feedback\">
\t\t\t\t\t\t\t\t\t\t\tPlease confirm your password (min. 6 characters) and ensure it matches!
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\" onclick=\"formload('/pwdchange')\">Change</button>
\t\t\t\t\t\t\t\t</form>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>

\t\t\t\t</div>
\t\t\t</div>
\t\t</nav>

\t</header>



\t<!-- SCRIPTS SECTION -->

\t<script src=\"https://use.fontawesome.com/releases/v5.0.8/js/all.js\"></script>
\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
\t<script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\"
\t crossorigin=\"anonymous\"></script>
\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\" integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\"
\t crossorigin=\"anonymous\"></script>
\t<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\" integrity=\"sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy\"
\t crossorigin=\"anonymous\"></script>

\t<!-- BOOSTRAP FORM VALIDATION SCRIPT CALL SECTION -->

\t<script type=\"text/javascript\" src=\"pwdchange.js\"></script>
</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "pwdchange.html";
    }

    public function getDebugInfo()
    {
        return array (  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
\t<meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<title>Complete Bootstrap 4 Website Layout</title>
\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\">
\t<link href=\"style.css\" rel=\"stylesheet\">
</head>



<body>

\t<!-- HEADER AND NAVIGATION SECTION -->

\t<header>

\t\t<!-- ADDING THE BOOTSTRAP NAVBAR WITH DROPDOWN FORMS FOR REGISTER & LOGIN-->

\t\t<nav class=\"navbar navbar-expand-lg navbar-light\">
\t\t\t<div class=\"container\">
\t\t\t\t<a class=\"navbar-brand\" href=\"#\"><img src=\"img/voxpopuli.jpg\" alt=\"vox populi\"></a>
\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\"
\t\t\t\t aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t</button>


\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">

\t\t\t\t\t<ul class=\"navbar-nav ml-auto\">
\t\t\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Home <span class=\"sr-only\">(current)</span></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">About</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"#\">Meet the Team</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<!-- DROPDOWN CHANGE PASSWORD FORM  -->

\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"pwdChangeDropdown\" role=\"button\" data-toggle=\"dropdown\"
\t\t\t\t\t\t\t aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\tChange Password
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"pwdChangeDropdown\" action=\"\" method=\"POST\">
\t\t\t\t\t\t\t\t<form class=\"px-3 py-3 needs-validation\" style=\"min-width: 250px;\" novalidate oninput='pwdChangePassword2.setCustomValidity(pwdChangePassword2.value != pwdChangePassword.value ? \"Passwords do not match.\" : \"\")'>
\t\t\t\t\t\t\t\t\t<p>Use the form below to change your password. Your password cannot be the same as your
\t\t\t\t\t\t\t\t\t\tusername.</p>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"pwdChangePassword\">Password</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"pwdChangePassword\" name=\"password\" placeholder=\"New password\"
\t\t\t\t\t\t\t\t\t\t minlength=6 required>
\t\t\t\t\t\t\t\t\t\t<small id=\"pwdChangeHelp\" class=\"form-text text-muted\"></small>
\t\t\t\t\t\t\t\t\t\t<div class=\"valid-feedback\">
\t\t\t\t\t\t\t\t\t\t\tPassword provided is valid!
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"invalid-feedback\">
\t\t\t\t\t\t\t\t\t\t\tPlease provide a valid password (min. 6 characters)!
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"pwdChangePassword2\">Confirm Password</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"pwdChangePassword2\" name=\"password2\" placeholder=\"Confirm new password\"
\t\t\t\t\t\t\t\t\t\t minlength=6 required>
\t\t\t\t\t\t\t\t\t\t<small id=\"pwdChangePassword2Help\" class=\"form-text text-muted\"></small>
\t\t\t\t\t\t\t\t\t\t<div class=\"valid-feedback\">
\t\t\t\t\t\t\t\t\t\t\tConfirmation password provided is valid and match!
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"invalid-feedback\">
\t\t\t\t\t\t\t\t\t\t\tPlease confirm your password (min. 6 characters) and ensure it matches!
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\" onclick=\"formload('/pwdchange')\">Change</button>
\t\t\t\t\t\t\t\t</form>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>

\t\t\t\t</div>
\t\t\t</div>
\t\t</nav>

\t</header>



\t<!-- SCRIPTS SECTION -->

\t<script src=\"https://use.fontawesome.com/releases/v5.0.8/js/all.js\"></script>
\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
\t<script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\"
\t crossorigin=\"anonymous\"></script>
\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\" integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\"
\t crossorigin=\"anonymous\"></script>
\t<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\" integrity=\"sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy\"
\t crossorigin=\"anonymous\"></script>

\t<!-- BOOSTRAP FORM VALIDATION SCRIPT CALL SECTION -->

\t<script type=\"text/javascript\" src=\"pwdchange.js\"></script>
</body>

</html>", "pwdchange.html", "/home/developer/workspace/project-wf3/templates/pwdchange.html");
    }
}
