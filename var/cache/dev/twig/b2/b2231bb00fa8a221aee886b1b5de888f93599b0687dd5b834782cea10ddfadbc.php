<?php

/* register.html */
class __TwigTemplate_e6ad53ee699661cb3e0fac36027eb8ae573d16b5f4def2d964f233e1abb7170e extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "register.html"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "register.html"));

        // line 1
        echo "<!-- DROPDOWN REGISTER FORM TO REGISTER-->

<li class=\"nav-item dropdown\">
\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"registerDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\"
\t aria-expanded=\"false\">
\t\tRegister
\t</a>
\t<div class=\"dropdown-menu\" aria-labelledby=\"registerDropdown\">
\t\t<form class=\"px-3 py-3 needs-validation\" style=\"min-width: 250px;\" novalidate oninput='password2.setCustomValidity(password2.value != password.value ? \"Passwords do not match.\" : \"\")'
\t\t action=\"\" method=\"POST\">
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"registerUsername\">Username</label>
\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"registerUsername\" name=\"username\" placeholder=\"Pick a username\"
\t\t\t\t minlength=6 required>
\t\t\t\t<small id=\"registerUsernameHelp\" class=\"form-text text-muted\"></small>
\t\t\t\t<div class=\"valid-feedback\">
\t\t\t\t\tUsername provided is valid!
\t\t\t\t</div>
\t\t\t\t<div class=\"invalid-feedback\">
\t\t\t\t\tPlease provide a valid username (min. 6 characters)!
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"registerEmail\">Email address</label>
\t\t\t\t<input type=\"email\" class=\"form-control\" id=\"registerEmail\" name=\"email\" placeholder=\"youremail@example.com\"
\t\t\t\t pattern=\"^([a-zA-Z0-9_\\-\\.]+)@([a-zA-Z0-9_\\-\\.]+)\\.([a-zA-Z]{2,5})\$\" required>
\t\t\t\t<small id=\"registerEmailHelp\" class=\"form-text text-muted\"></small>
\t\t\t\t<div class=\"valid-feedback\">
\t\t\t\t\tEmail provided is valid!
\t\t\t\t</div>
\t\t\t\t<div class=\"invalid-feedback\">
\t\t\t\t\tPlease provide a valid email!
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"registerPassword\">Password</label>
\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"registerPassword\" name=\"password\" placeholder=\"Password\" minlength=6
\t\t\t\t required>
\t\t\t\t<small id=\"registerPasswordHelp\" class=\"form-text text-muted\"></small>
\t\t\t\t<div class=\"valid-feedback\">
\t\t\t\t\tPassword provided is valid!
\t\t\t\t</div>
\t\t\t\t<div class=\"invalid-feedback\">
\t\t\t\t\tPlease provide a valid password (min. 6 characters)!
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"registerPassword2\">Confirm Password</label>
\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"registerPassword2\" name=\"password2\" placeholder=\"Confirm Password\"
\t\t\t\t minlength=6 required>
\t\t\t\t<small id=\"registerPassword2Help\" class=\"form-text text-muted\"></small>
\t\t\t\t<div class=\"valid-feedback\">
\t\t\t\t\tConfirmation password provided is valid and match!
\t\t\t\t</div>
\t\t\t\t<div class=\"invalid-feedback\">
\t\t\t\t\tPlease confirm your password (min. 6 characters) and ensure it matches!
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"form-group\">
\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" id=\"agreeTerms\" name=\"agreeterms\" value=\"1\" required>
\t\t\t\t\t<label class=\"form-check-label\" for=\"agreeTerms\">
\t\t\t\t\t\tI agree to the terms and conditions
\t\t\t\t\t</label>
\t\t\t\t\t<div class=\"valid-feedback\">
\t\t\t\t\t\tThank you for agreeing!
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"invalid-feedback\">
\t\t\t\t\t\tYou must agree before submitting!
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<button type=\"submit\" class=\"btn btn-primary\" onclick=\"formload('/register')\">Register</button>
\t\t</form>
\t</div>
</li>
</ul>

</div>
</div>
</nav>

</header>



<!-- SCRIPTS SECTION -->

<script src=\"https://use.fontawesome.com/releases/v5.0.8/js/all.js\"></script>
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
<script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\"
 crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\" integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\"
 crossorigin=\"anonymous\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\" integrity=\"sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy\"
 crossorigin=\"anonymous\"></script>

<!-- BOOSTRAP FORM VALIDATION SCRIPT CALL SECTION -->

<script type=\"text/javascript\" src=\"register.js\"></script>
</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "register.html";
    }

    public function getDebugInfo()
    {
        return array (  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- DROPDOWN REGISTER FORM TO REGISTER-->

<li class=\"nav-item dropdown\">
\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"registerDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\"
\t aria-expanded=\"false\">
\t\tRegister
\t</a>
\t<div class=\"dropdown-menu\" aria-labelledby=\"registerDropdown\">
\t\t<form class=\"px-3 py-3 needs-validation\" style=\"min-width: 250px;\" novalidate oninput='password2.setCustomValidity(password2.value != password.value ? \"Passwords do not match.\" : \"\")'
\t\t action=\"\" method=\"POST\">
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"registerUsername\">Username</label>
\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"registerUsername\" name=\"username\" placeholder=\"Pick a username\"
\t\t\t\t minlength=6 required>
\t\t\t\t<small id=\"registerUsernameHelp\" class=\"form-text text-muted\"></small>
\t\t\t\t<div class=\"valid-feedback\">
\t\t\t\t\tUsername provided is valid!
\t\t\t\t</div>
\t\t\t\t<div class=\"invalid-feedback\">
\t\t\t\t\tPlease provide a valid username (min. 6 characters)!
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"registerEmail\">Email address</label>
\t\t\t\t<input type=\"email\" class=\"form-control\" id=\"registerEmail\" name=\"email\" placeholder=\"youremail@example.com\"
\t\t\t\t pattern=\"^([a-zA-Z0-9_\\-\\.]+)@([a-zA-Z0-9_\\-\\.]+)\\.([a-zA-Z]{2,5})\$\" required>
\t\t\t\t<small id=\"registerEmailHelp\" class=\"form-text text-muted\"></small>
\t\t\t\t<div class=\"valid-feedback\">
\t\t\t\t\tEmail provided is valid!
\t\t\t\t</div>
\t\t\t\t<div class=\"invalid-feedback\">
\t\t\t\t\tPlease provide a valid email!
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"registerPassword\">Password</label>
\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"registerPassword\" name=\"password\" placeholder=\"Password\" minlength=6
\t\t\t\t required>
\t\t\t\t<small id=\"registerPasswordHelp\" class=\"form-text text-muted\"></small>
\t\t\t\t<div class=\"valid-feedback\">
\t\t\t\t\tPassword provided is valid!
\t\t\t\t</div>
\t\t\t\t<div class=\"invalid-feedback\">
\t\t\t\t\tPlease provide a valid password (min. 6 characters)!
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"registerPassword2\">Confirm Password</label>
\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"registerPassword2\" name=\"password2\" placeholder=\"Confirm Password\"
\t\t\t\t minlength=6 required>
\t\t\t\t<small id=\"registerPassword2Help\" class=\"form-text text-muted\"></small>
\t\t\t\t<div class=\"valid-feedback\">
\t\t\t\t\tConfirmation password provided is valid and match!
\t\t\t\t</div>
\t\t\t\t<div class=\"invalid-feedback\">
\t\t\t\t\tPlease confirm your password (min. 6 characters) and ensure it matches!
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"form-group\">
\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" id=\"agreeTerms\" name=\"agreeterms\" value=\"1\" required>
\t\t\t\t\t<label class=\"form-check-label\" for=\"agreeTerms\">
\t\t\t\t\t\tI agree to the terms and conditions
\t\t\t\t\t</label>
\t\t\t\t\t<div class=\"valid-feedback\">
\t\t\t\t\t\tThank you for agreeing!
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"invalid-feedback\">
\t\t\t\t\t\tYou must agree before submitting!
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<button type=\"submit\" class=\"btn btn-primary\" onclick=\"formload('/register')\">Register</button>
\t\t</form>
\t</div>
</li>
</ul>

</div>
</div>
</nav>

</header>



<!-- SCRIPTS SECTION -->

<script src=\"https://use.fontawesome.com/releases/v5.0.8/js/all.js\"></script>
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
<script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\"
 crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\" integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\"
 crossorigin=\"anonymous\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\" integrity=\"sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy\"
 crossorigin=\"anonymous\"></script>

<!-- BOOSTRAP FORM VALIDATION SCRIPT CALL SECTION -->

<script type=\"text/javascript\" src=\"register.js\"></script>
</body>

</html>", "register.html", "/home/developer/workspace/project-wf3/templates/register.html");
    }
}
