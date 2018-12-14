<?php

/* login.html */
class __TwigTemplate_28e93072f4da5fbb693667b5bb1af6926612db5cce5f22220bf984da4b303e2c extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "login.html"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "login.html"));

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

\t\t\t\t\t\t<!-- DROPDOWN LOGIN FORM -->

\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"loginDropdown\" role=\"button\" data-toggle=\"dropdown\"
\t\t\t\t\t\t\t aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\tLogin
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"loginDropdown\">
\t\t\t\t\t\t\t\t<form class=\"px-3 py-3 needs-validation\" style=\"min-width: 250px;\" novalidate action=\"\" method=\"POST\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"loginEmail\">Email address</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" id=\"loginEmail\" name=\"email\" placeholder=\"youremail@example.com\"
\t\t\t\t\t\t\t\t\t\t required>
\t\t\t\t\t\t\t\t\t\t<small id=\"loginEmailHelp\" class=\"form-text text-muted\"></small>
\t\t\t\t\t\t\t\t\t\t<div class=\"valid-feedback\">
\t\t\t\t\t\t\t\t\t\t\tEmail provided is valid!
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"invalid-feedback\">
\t\t\t\t\t\t\t\t\t\t\tPlease provide a valid email!
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"loginPassword\">Password</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"loginPassword\" name=\"password\" placeholder=\"Password\"
\t\t\t\t\t\t\t\t\t\t minlength=6 required>
\t\t\t\t\t\t\t\t\t\t<small id=\"loginPasswordHelp\" class=\"form-text text-muted\"></small>
\t\t\t\t\t\t\t\t\t\t<div class=\"valid-feedback\">
\t\t\t\t\t\t\t\t\t\t\tPassword provided is valid!
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"invalid-feedback\">
\t\t\t\t\t\t\t\t\t\t\tPlease provide a valid password (min. 6 characters)!
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\" onclick=\"formload('/login')\">Login</button>
\t\t\t\t\t\t\t\t</form>

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

\t<script type=\"text/javascript\" src=\"login.js\"></script>
</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "login.html";
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

\t\t\t\t\t\t<!-- DROPDOWN LOGIN FORM -->

\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"loginDropdown\" role=\"button\" data-toggle=\"dropdown\"
\t\t\t\t\t\t\t aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\tLogin
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"loginDropdown\">
\t\t\t\t\t\t\t\t<form class=\"px-3 py-3 needs-validation\" style=\"min-width: 250px;\" novalidate action=\"\" method=\"POST\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"loginEmail\">Email address</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" id=\"loginEmail\" name=\"email\" placeholder=\"youremail@example.com\"
\t\t\t\t\t\t\t\t\t\t required>
\t\t\t\t\t\t\t\t\t\t<small id=\"loginEmailHelp\" class=\"form-text text-muted\"></small>
\t\t\t\t\t\t\t\t\t\t<div class=\"valid-feedback\">
\t\t\t\t\t\t\t\t\t\t\tEmail provided is valid!
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"invalid-feedback\">
\t\t\t\t\t\t\t\t\t\t\tPlease provide a valid email!
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label for=\"loginPassword\">Password</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"loginPassword\" name=\"password\" placeholder=\"Password\"
\t\t\t\t\t\t\t\t\t\t minlength=6 required>
\t\t\t\t\t\t\t\t\t\t<small id=\"loginPasswordHelp\" class=\"form-text text-muted\"></small>
\t\t\t\t\t\t\t\t\t\t<div class=\"valid-feedback\">
\t\t\t\t\t\t\t\t\t\t\tPassword provided is valid!
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"invalid-feedback\">
\t\t\t\t\t\t\t\t\t\t\tPlease provide a valid password (min. 6 characters)!
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\" onclick=\"formload('/login')\">Login</button>
\t\t\t\t\t\t\t\t</form>

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

\t<script type=\"text/javascript\" src=\"login.js\"></script>
</body>

</html>", "login.html", "/home/developer/workspace/project-wf3/templates/login.html");
    }
}
