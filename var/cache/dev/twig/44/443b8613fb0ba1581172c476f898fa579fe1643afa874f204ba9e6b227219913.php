<?php

/* forms/registerForm.html.twig */
class __TwigTemplate_b30ba03bdf7ab38852800823ca5947a914466614b2380dafbc630699281befde extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "forms/registerForm.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "forms/registerForm.html.twig"));

        // line 1
        echo "<li class=\"nav-item dropdown\">
    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"signUpDropdown\" role=\"button\" data-toggle=\"dropdown\"
       aria-haspopup=\"true\" aria-expanded=\"false\">
        Sign Up
    </a>
    <div class=\"dropdown-menu\" aria-labelledby=\"signUpDropdown\">
        <form class=\"px-3 py-3 needs-validation\" style=\"min-width: 250px;\" novalidate oninput='password2.setCustomValidity(password2.value != password.value ? \"Passwords do not match.\" : \"\")'>
            <div class=\"form-group\">
                <label for=\"signUpUsername\">Username</label>
                <input type=\"text\" class=\"form-control\" id=\"signUpUsername\" name=\"username\" placeholder=\"Pick a username\"
                       minlength=6 required>
                <small id=\"signUpUsernameHelp\" class=\"form-text text-muted\"></small>
                <div class=\"valid-feedback\">
                    Username provided is valid!
                </div>
                <div class=\"invalid-feedback\">
                    Please provide a valid username (min. 6 characters)!
                </div>
            </div>
            <div class=\"form-group\">
                <label for=\"signUpEmail\">Email address</label>
                <input type=\"email\" class=\"form-control\" id=\"signUpEmail\" name=\"email\" placeholder=\"youremail@example.com\"
                       pattern=\"^([a-zA-Z0-9_\\-\\.]+)@([a-zA-Z0-9_\\-\\.]+)\\.([a-zA-Z]{2,5})\$\" required>
                <small id=\"signUpEmailHelp\" class=\"form-text text-muted\"></small>
                <div class=\"valid-feedback\">
                    Email provided is valid!
                </div>
                <div class=\"invalid-feedback\">
                    Please provide a valid email!
                </div>
            </div>
            <div class=\"form-group\">
                <label for=\"signUpPassword\">Password</label>
                <input type=\"password\" class=\"form-control\" id=\"signUpPassword\" name=\"password\" placeholder=\"Password\"
                       minlength=6 required>
                <small id=\"signUpPasswordHelp\" class=\"form-text text-muted\"></small>
                <div class=\"valid-feedback\">
                    Password provided is valid!
                </div>
                <div class=\"invalid-feedback\">
                    Please provide a valid password (min. 6 characters)!
                </div>
            </div>
            <div class=\"form-group\">
                <label for=\"signUpPassword2\">Confirm Password</label>
                <input type=\"password\" class=\"form-control\" id=\"signUpPassword2\" name=\"password2\" placeholder=\"Confirm Password\"
                       minlength=6 required>
                <small id=\"signUpPassword2Help\" class=\"form-text text-muted\"></small>
                <div class=\"valid-feedback\">
                    Confirmation password provided is valid and match!
                </div>
                <div class=\"invalid-feedback\">
                    Please confirm your password (min. 6 characters) and ensure it matches!
                </div>
            </div>
            <div class=\"form-check\">
                <input type=\"checkbox\" class=\"form-check-input\" id=\"dropdownCheck\">
                <label class=\"form-check-label\" for=\"dropdownCheck\">
                    Remember me
                </label>
            </div>
            <div class=\"form-group\">
                <div class=\"form-check\">
                    <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"invalidCheck\" required>
                    <label class=\"form-check-label\" for=\"invalidCheck\">
                        Agree to terms and conditions
                    </label>
                    <div class=\"invalid-feedback\">
                        Thank you for agreeing!
                    </div>
                    <div class=\"invalid-feedback\">
                        You must agree before submitting!
                    </div>
                </div>
            </div>
            <button type=\"submit\" class=\"btn btn-primary\">Sign Up</button>
        </form>
    </div>
</li>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "forms/registerForm.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<li class=\"nav-item dropdown\">
    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"signUpDropdown\" role=\"button\" data-toggle=\"dropdown\"
       aria-haspopup=\"true\" aria-expanded=\"false\">
        Sign Up
    </a>
    <div class=\"dropdown-menu\" aria-labelledby=\"signUpDropdown\">
        <form class=\"px-3 py-3 needs-validation\" style=\"min-width: 250px;\" novalidate oninput='password2.setCustomValidity(password2.value != password.value ? \"Passwords do not match.\" : \"\")'>
            <div class=\"form-group\">
                <label for=\"signUpUsername\">Username</label>
                <input type=\"text\" class=\"form-control\" id=\"signUpUsername\" name=\"username\" placeholder=\"Pick a username\"
                       minlength=6 required>
                <small id=\"signUpUsernameHelp\" class=\"form-text text-muted\"></small>
                <div class=\"valid-feedback\">
                    Username provided is valid!
                </div>
                <div class=\"invalid-feedback\">
                    Please provide a valid username (min. 6 characters)!
                </div>
            </div>
            <div class=\"form-group\">
                <label for=\"signUpEmail\">Email address</label>
                <input type=\"email\" class=\"form-control\" id=\"signUpEmail\" name=\"email\" placeholder=\"youremail@example.com\"
                       pattern=\"^([a-zA-Z0-9_\\-\\.]+)@([a-zA-Z0-9_\\-\\.]+)\\.([a-zA-Z]{2,5})\$\" required>
                <small id=\"signUpEmailHelp\" class=\"form-text text-muted\"></small>
                <div class=\"valid-feedback\">
                    Email provided is valid!
                </div>
                <div class=\"invalid-feedback\">
                    Please provide a valid email!
                </div>
            </div>
            <div class=\"form-group\">
                <label for=\"signUpPassword\">Password</label>
                <input type=\"password\" class=\"form-control\" id=\"signUpPassword\" name=\"password\" placeholder=\"Password\"
                       minlength=6 required>
                <small id=\"signUpPasswordHelp\" class=\"form-text text-muted\"></small>
                <div class=\"valid-feedback\">
                    Password provided is valid!
                </div>
                <div class=\"invalid-feedback\">
                    Please provide a valid password (min. 6 characters)!
                </div>
            </div>
            <div class=\"form-group\">
                <label for=\"signUpPassword2\">Confirm Password</label>
                <input type=\"password\" class=\"form-control\" id=\"signUpPassword2\" name=\"password2\" placeholder=\"Confirm Password\"
                       minlength=6 required>
                <small id=\"signUpPassword2Help\" class=\"form-text text-muted\"></small>
                <div class=\"valid-feedback\">
                    Confirmation password provided is valid and match!
                </div>
                <div class=\"invalid-feedback\">
                    Please confirm your password (min. 6 characters) and ensure it matches!
                </div>
            </div>
            <div class=\"form-check\">
                <input type=\"checkbox\" class=\"form-check-input\" id=\"dropdownCheck\">
                <label class=\"form-check-label\" for=\"dropdownCheck\">
                    Remember me
                </label>
            </div>
            <div class=\"form-group\">
                <div class=\"form-check\">
                    <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"invalidCheck\" required>
                    <label class=\"form-check-label\" for=\"invalidCheck\">
                        Agree to terms and conditions
                    </label>
                    <div class=\"invalid-feedback\">
                        Thank you for agreeing!
                    </div>
                    <div class=\"invalid-feedback\">
                        You must agree before submitting!
                    </div>
                </div>
            </div>
            <button type=\"submit\" class=\"btn btn-primary\">Sign Up</button>
        </form>
    </div>
</li>
", "forms/registerForm.html.twig", "/home/developer/workspace/project-wf3/templates/forms/registerForm.html.twig");
    }
}
