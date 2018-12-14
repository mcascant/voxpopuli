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
                ";
        // line 12
        $this->loadTemplate("forms/registerForm.html.twig", "navbar.html.twig", 12)->display($context);
        // line 13
        echo "
                ";
        // line 14
        $this->loadTemplate("forms/loginForm.html.twig", "navbar.html.twig", 14)->display($context);
        // line 15
        echo "
                ";
        // line 16
        $this->loadTemplate("forms/pwdChangeForm.html.twig", "navbar.html.twig", 16)->display($context);
        // line 17
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
        return array (  57 => 17,  55 => 16,  52 => 15,  50 => 14,  47 => 13,  45 => 12,  42 => 11,  40 => 10,  29 => 1,);
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

                {% include 'forms/registerForm.html.twig' %}

                {% include 'forms/loginForm.html.twig' %}

                {% include 'forms/pwdChangeForm.html.twig' %}
            </ul>
        </div>
    </div>
</nav>", "navbar.html.twig", "/home/developer/workspace/project-wf3/templates/navbar.html.twig");
    }
}
