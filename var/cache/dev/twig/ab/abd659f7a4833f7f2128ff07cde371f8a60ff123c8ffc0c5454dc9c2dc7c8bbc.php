<?php

/* forms/pwdChangeForm.html.twig */
class __TwigTemplate_b58bdd79a3332a73e7d302205028ef925ab4819f66f5688ae7261b2c4e3f2904 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "forms/pwdChangeForm.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "forms/pwdChangeForm.html.twig"));

        // line 1
        echo "<li class=\"nav-item dropdown\">
    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"forgotPasswordDropdown\" role=\"button\" data-toggle=\"dropdown\"
       aria-haspopup=\"true\" aria-expanded=\"false\">
        Forgot password
    </a>
    <div class=\"dropdown-menu\" aria-labelledby=\"forgotPasswordDropdown\">
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

            <button type=\"submit\" class=\"btn btn-primary\">Reset password</button>
        </form>
</li>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "forms/pwdChangeForm.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<li class=\"nav-item dropdown\">
    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"forgotPasswordDropdown\" role=\"button\" data-toggle=\"dropdown\"
       aria-haspopup=\"true\" aria-expanded=\"false\">
        Forgot password
    </a>
    <div class=\"dropdown-menu\" aria-labelledby=\"forgotPasswordDropdown\">
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

            <button type=\"submit\" class=\"btn btn-primary\">Reset password</button>
        </form>
</li>", "forms/pwdChangeForm.html.twig", "/home/developer/workspace/project-wf3/templates/forms/pwdChangeForm.html.twig");
    }
}
