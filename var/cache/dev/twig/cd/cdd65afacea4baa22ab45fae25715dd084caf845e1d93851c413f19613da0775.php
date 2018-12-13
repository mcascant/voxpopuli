<?php

/* forms/loginForm.html.twig */
class __TwigTemplate_ed97ed0c2ebed1c5fe2d1d48506bffb9e495f14866292776e265ce44b9ce9862 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "forms/loginForm.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "forms/loginForm.html.twig"));

        // line 1
        echo "<li class=\"nav-item dropdown\">
    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"signInDropdown\" role=\"button\" data-toggle=\"dropdown\"
       aria-haspopup=\"true\" aria-expanded=\"false\">
        Sign In
    </a>
    <div class=\"dropdown-menu\" aria-labelledby=\"signInDropdown\">
        <form class=\"px-3 py-3 needs-validation\" style=\"min-width: 250px;\" novalidate>
            <div class=\"form-group\">
                <label for=\"signInEmail\">Email address</label>
                <input type=\"email\" class=\"form-control\" id=\"signInEmail\" name=\"email\" placeholder=\"youremail@example.com\"
                       required>
                <small id=\"signInEmailHelp\" class=\"form-text text-muted\"></small>
                <div class=\"valid-feedback\">
                    Email provided is valid!
                </div>
                <div class=\"invalid-feedback\">
                    Please provide a valid email!
                </div>
            </div>
            <div class=\"form-group\">
                <label for=\"signInPassword\">Password</label>
                <input type=\"password\" class=\"form-control\" id=\"signUpPassword\" name=\"password\" placeholder=\"Password\"
                       minlength=6 required>
                <small id=\"signInPasswordHelp\" class=\"form-text text-muted\"></small>
                <div class=\"valid-feedback\">
                    Password provided is valid!
                </div>
                <div class=\"invalid-feedback\">
                    Please provide a valid password (min. 6 characters)!
                </div>
            </div>
            <div class=\"form-check\">
                <input type=\"checkbox\" class=\"form-check-input\" id=\"rememberMeCheck\" required>
                <label class=\"form-check-label\" for=\"rememberMeCheck\">
                    Remember me
                </label>
            </div>
            <button type=\"submit\" class=\"btn btn-primary\">Sign In</button>
        </form>
</li>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "forms/loginForm.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<li class=\"nav-item dropdown\">
    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"signInDropdown\" role=\"button\" data-toggle=\"dropdown\"
       aria-haspopup=\"true\" aria-expanded=\"false\">
        Sign In
    </a>
    <div class=\"dropdown-menu\" aria-labelledby=\"signInDropdown\">
        <form class=\"px-3 py-3 needs-validation\" style=\"min-width: 250px;\" novalidate>
            <div class=\"form-group\">
                <label for=\"signInEmail\">Email address</label>
                <input type=\"email\" class=\"form-control\" id=\"signInEmail\" name=\"email\" placeholder=\"youremail@example.com\"
                       required>
                <small id=\"signInEmailHelp\" class=\"form-text text-muted\"></small>
                <div class=\"valid-feedback\">
                    Email provided is valid!
                </div>
                <div class=\"invalid-feedback\">
                    Please provide a valid email!
                </div>
            </div>
            <div class=\"form-group\">
                <label for=\"signInPassword\">Password</label>
                <input type=\"password\" class=\"form-control\" id=\"signUpPassword\" name=\"password\" placeholder=\"Password\"
                       minlength=6 required>
                <small id=\"signInPasswordHelp\" class=\"form-text text-muted\"></small>
                <div class=\"valid-feedback\">
                    Password provided is valid!
                </div>
                <div class=\"invalid-feedback\">
                    Please provide a valid password (min. 6 characters)!
                </div>
            </div>
            <div class=\"form-check\">
                <input type=\"checkbox\" class=\"form-check-input\" id=\"rememberMeCheck\" required>
                <label class=\"form-check-label\" for=\"rememberMeCheck\">
                    Remember me
                </label>
            </div>
            <button type=\"submit\" class=\"btn btn-primary\">Sign In</button>
        </form>
</li>", "forms/loginForm.html.twig", "/home/developer/workspace/project-wf3/templates/forms/loginForm.html.twig");
    }
}
