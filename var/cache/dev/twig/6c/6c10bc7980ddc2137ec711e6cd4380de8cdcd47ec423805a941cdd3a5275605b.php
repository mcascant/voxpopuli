<?php

/* forms/pwdChangeFormForm.html.twig */
class __TwigTemplate_36cb98453c21db51e727279a8a66ae9ab29761014b3c1e2ff2e05727e8a0ad1d extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "forms/pwdChangeFormForm.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "forms/pwdChangeFormForm.html.twig"));

        // line 1
        echo "<li class=\"nav-item dropdown\">
    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"changePasswordDropdown\" role=\"button\" data-toggle=\"dropdown\"
       aria-haspopup=\"true\" aria-expanded=\"false\">
        Change Password
    </a>
    <div class=\"dropdown-menu\" aria-labelledby=\"changePasswordDropdown\">
        <form class=\"px-3 py-3 needs-validation\" style=\"min-width: 250px;\" novalidate oninput='newPassword2.setCustomValidity(newPassword2.value != newPassword.value ? \"Passwords do not match.\" : \"\")'>
            <p>Use the form below to change your password. Your password cannot be the same as your
                username.</p>
            <div class=\"form-group\">
                <label for=\"newPassword\">Password</label>
                <input type=\"password\" class=\"form-control\" id=\"newPassword\" name=\"newPassword\" placeholder=\"New password\"
                       minlength=6 required>
                <small id=\"newPasswordHelp\" class=\"form-text text-muted\"></small>
                <div class=\"valid-feedback\">
                    Password provided is valid!
                </div>
                <div class=\"invalid-feedback\">
                    Please provide a valid password (min. 6 characters)!
                </div>
            </div>
            <div class=\"form-group\">
                <label for=\"newPassword2\">Confirm Password</label>
                <input type=\"password\" class=\"form-control\" id=\"newPassword2\" name=\"newPassword2\" placeholder=\"Confirm new password\"
                       minlength=6 required>
                <small id=\"newPassword2Help\" class=\"form-text text-muted\"></small>
                <div class=\"valid-feedback\">
                    Confirmation password provided is valid and match!
                </div>
                <div class=\"invalid-feedback\">
                    Please confirm your password (min. 6 characters) and ensure it matches!
                </div>
            </div>

            <button type=\"submit\" class=\"btn btn-primary\">Change</button>
        </form>
    </div>
</li>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "forms/pwdChangeFormForm.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<li class=\"nav-item dropdown\">
    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"changePasswordDropdown\" role=\"button\" data-toggle=\"dropdown\"
       aria-haspopup=\"true\" aria-expanded=\"false\">
        Change Password
    </a>
    <div class=\"dropdown-menu\" aria-labelledby=\"changePasswordDropdown\">
        <form class=\"px-3 py-3 needs-validation\" style=\"min-width: 250px;\" novalidate oninput='newPassword2.setCustomValidity(newPassword2.value != newPassword.value ? \"Passwords do not match.\" : \"\")'>
            <p>Use the form below to change your password. Your password cannot be the same as your
                username.</p>
            <div class=\"form-group\">
                <label for=\"newPassword\">Password</label>
                <input type=\"password\" class=\"form-control\" id=\"newPassword\" name=\"newPassword\" placeholder=\"New password\"
                       minlength=6 required>
                <small id=\"newPasswordHelp\" class=\"form-text text-muted\"></small>
                <div class=\"valid-feedback\">
                    Password provided is valid!
                </div>
                <div class=\"invalid-feedback\">
                    Please provide a valid password (min. 6 characters)!
                </div>
            </div>
            <div class=\"form-group\">
                <label for=\"newPassword2\">Confirm Password</label>
                <input type=\"password\" class=\"form-control\" id=\"newPassword2\" name=\"newPassword2\" placeholder=\"Confirm new password\"
                       minlength=6 required>
                <small id=\"newPassword2Help\" class=\"form-text text-muted\"></small>
                <div class=\"valid-feedback\">
                    Confirmation password provided is valid and match!
                </div>
                <div class=\"invalid-feedback\">
                    Please confirm your password (min. 6 characters) and ensure it matches!
                </div>
            </div>

            <button type=\"submit\" class=\"btn btn-primary\">Change</button>
        </form>
    </div>
</li>
", "forms/pwdChangeFormForm.html.twig", "/home/developer/workspace/project-wf3/templates/forms/pwdChangeFormForm.html.twig");
    }
}
