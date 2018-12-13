<?php

/* navbar.html.twig */
class __TwigTemplate_b209be53e0a8d17c31e3044ae2e687aa00cdc1f9057041534a3c859e4bf5755a extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "navbar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "navbar.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-lg navbar-light\">
    <div class=\"container\">
        <a class=\"navbar-brand\" href=\"#\">
            <img src=\"img/voxpopuli.jpg\" alt=\"vox populi\">
        </a>

        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">

            <ul class=\"navbar-nav ml-auto\">
                ";
        // line 10
        $this->loadTemplate("nav/mainLinks.html.twig", "navbar.html.twig", 10)->display($context);
        // line 11
        echo "
                <!-- DROPDOWN SIGNUP FORM TO REGISTER-->
                ";
        // line 13
        $this->loadTemplate("forms/registerForm.html.twig", "navbar.html.twig", 13)->display($context);
        // line 14
        echo "                <!-- DROPDOWN SIGNIN FORM TO LOGIN -->
                ";
        // line 15
        $this->loadTemplate("forms/loginForm.html.twig", "navbar.html.twig", 15)->display($context);
        // line 16
        echo "
                <!-- DROPDOWN FORGOT PASSWORD FORM TO CALL THE CHANGE PASSWORD FORM -->
                ";
        // line 18
        $this->loadTemplate("forms/pwdChangeForm.html.twig", "navbar.html.twig", 18)->display($context);
        // line 19
        echo "
                <!-- DROPDOWN CHANGE PASSWORD FORM  -->
                ";
        // line 21
        $this->loadTemplate("forms/pwdChangeFormForm.html.twig", "navbar.html.twig", 21)->display($context);
        // line 22
        echo "            </ul>
        </div>
    </div>
</nav>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 22,  63 => 21,  59 => 19,  57 => 18,  53 => 16,  51 => 15,  48 => 14,  46 => 13,  42 => 11,  40 => 10,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar navbar-expand-lg navbar-light\">
    <div class=\"container\">
        <a class=\"navbar-brand\" href=\"#\">
            <img src=\"img/voxpopuli.jpg\" alt=\"vox populi\">
        </a>

        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">

            <ul class=\"navbar-nav ml-auto\">
                {% include 'nav/mainLinks.html.twig' %}

                <!-- DROPDOWN SIGNUP FORM TO REGISTER-->
                {% include 'forms/registerForm.html.twig' %}
                <!-- DROPDOWN SIGNIN FORM TO LOGIN -->
                {% include 'forms/loginForm.html.twig' %}

                <!-- DROPDOWN FORGOT PASSWORD FORM TO CALL THE CHANGE PASSWORD FORM -->
                {% include 'forms/pwdChangeForm.html.twig' %}

                <!-- DROPDOWN CHANGE PASSWORD FORM  -->
                {% include 'forms/pwdChangeFormForm.html.twig' %}
            </ul>
        </div>
    </div>
</nav>", "navbar.html.twig", "/home/developer/workspace/project-wf3/templates/navbar.html.twig");
    }
}
