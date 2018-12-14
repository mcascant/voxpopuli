<?php

/* main.html.twig */
class __TwigTemplate_60524e59032b0fa2f528bc75443df302dda75f29e8233c62409c602493844d68 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main.html.twig"));

        // line 1
        echo "<!-- MAIN INTRODUCTION CAROUSEL SLIDER SECTION -->
";
        // line 2
        $this->loadTemplate("carousel.html.twig", "main.html.twig", 2)->display($context);
        // line 3
        echo "
<!-- MAIN INTRODUCTION JUMBOTRON SECTION -->
";
        // line 5
        $this->loadTemplate("about.html.twig", "main.html.twig", 5)->display($context);
        // line 6
        echo "
<!--- MAIN NAVBAR WITH PAGINATION AND TOGGLE/SEARCH BUTTONS -->
<div class=\"container\">
    <nav class=\"navbar navbar-expand-lg navbar-light\">
        <!-- <nav aria-label=\"Page navigation example\"> -->
        <ul class=\"pagination\">
            <li class=\"page-item\"><a class=\"page-link text-secondary\" href=\"#\">Previous</a></li>
            <li class=\"page-item\"><a class=\"page-link text-secondary\" href=\"#\">1</a></li>
            <li class=\"page-item\"><a class=\"page-link text-secondary\" href=\"#\">2</a></li>
            <li class=\"page-item\"><a class=\"page-link text-secondary\" href=\"#\">3</a></li>
            <li class=\"page-item\"><a class=\"page-link text-secondary\" href=\"#\">Next</a></li>
        </ul>
        <!-- </nav> -->
        <ul class=\"navbar-nav ml-auto\">
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"#\">Cards view <span class=\"sr-only\">(current)</span></a>
            </li>
        </ul>
        <form class=\"form-inline my-2 my-lg-0\">
            <input class=\"form-control mr-sm-2 \" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
            <button class=\"btn btn-secondary my-2 my-sm-0\" type=\"submit\">Search</button>
        </form>
    </nav>
</div>

<!-- MAIN FIXED BACKGROUND IMAGE SECTION -->
<figure>
    <div class=\"fixed-wrap\">
        <div id=\"fixed\">
        </div>
</figure>

<!-- MAIN PETITION CREATION FORM SECTION -->
";
        // line 39
        $this->loadTemplate("Post/Create.html.twig", "main.html.twig", 39)->display($context);
        // line 40
        echo "
<!-- MAIN CARDS (PETITIONS) -->
<div class=\"container\">
";
        // line 43
        $this->loadTemplate("cards.html.twig", "main.html.twig", 43)->display($context);
        // line 44
        echo "</div>

<!-- MAIN MEET THE TEAM SECTION -->
";
        // line 47
        $this->loadTemplate("team.html.twig", "main.html.twig", 47)->display($context);
        // line 48
        echo "
<!-- MAIN SOCIAL NETWORKS SECTION -->
";
        // line 50
        $this->loadTemplate("social.html.twig", "main.html.twig", 50)->display($context);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 50,  91 => 48,  89 => 47,  84 => 44,  82 => 43,  77 => 40,  75 => 39,  40 => 6,  38 => 5,  34 => 3,  32 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- MAIN INTRODUCTION CAROUSEL SLIDER SECTION -->
{% include 'carousel.html.twig' %}

<!-- MAIN INTRODUCTION JUMBOTRON SECTION -->
{% include 'about.html.twig' %}

<!--- MAIN NAVBAR WITH PAGINATION AND TOGGLE/SEARCH BUTTONS -->
<div class=\"container\">
    <nav class=\"navbar navbar-expand-lg navbar-light\">
        <!-- <nav aria-label=\"Page navigation example\"> -->
        <ul class=\"pagination\">
            <li class=\"page-item\"><a class=\"page-link text-secondary\" href=\"#\">Previous</a></li>
            <li class=\"page-item\"><a class=\"page-link text-secondary\" href=\"#\">1</a></li>
            <li class=\"page-item\"><a class=\"page-link text-secondary\" href=\"#\">2</a></li>
            <li class=\"page-item\"><a class=\"page-link text-secondary\" href=\"#\">3</a></li>
            <li class=\"page-item\"><a class=\"page-link text-secondary\" href=\"#\">Next</a></li>
        </ul>
        <!-- </nav> -->
        <ul class=\"navbar-nav ml-auto\">
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"#\">Cards view <span class=\"sr-only\">(current)</span></a>
            </li>
        </ul>
        <form class=\"form-inline my-2 my-lg-0\">
            <input class=\"form-control mr-sm-2 \" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
            <button class=\"btn btn-secondary my-2 my-sm-0\" type=\"submit\">Search</button>
        </form>
    </nav>
</div>

<!-- MAIN FIXED BACKGROUND IMAGE SECTION -->
<figure>
    <div class=\"fixed-wrap\">
        <div id=\"fixed\">
        </div>
</figure>

<!-- MAIN PETITION CREATION FORM SECTION -->
{% include 'Post/Create.html.twig' %}

<!-- MAIN CARDS (PETITIONS) -->
<div class=\"container\">
{% include 'cards.html.twig' %}
</div>

<!-- MAIN MEET THE TEAM SECTION -->
{% include 'team.html.twig' %}

<!-- MAIN SOCIAL NETWORKS SECTION -->
{% include 'social.html.twig' %}
", "main.html.twig", "/home/developer/workspace/project-wf3/templates/main.html.twig");
    }
}
