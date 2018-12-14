<?php

/* cards.html.twig */
class __TwigTemplate_4d33fb26b6477189d93a8fb94b60d7bcb4306bc9491f57cda21a0ab04a7545cd extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cards.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cards.html.twig"));

        // line 1
        echo "<div class=\"col-md-*\" id=\"postList\">
    <div id=\"cardList\"></div>
</div>

<script>
window.onload = function() {
    let xhttp = new XMLHttpRequest();
    let url = '/post/list';
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4) {
            rsp = JSON.parse(this.responseText).posts
            html = ''
            rsp.forEach(post => {
                html += `
                    <div class=\"card\">
                    <div class=\"card-header\">
                        <h5>
                            \${post.title}
                            <span class=\"badge badge-pill badge-warning\">\${post.minimumVotes}</span>
                        </h5>
                        <hr class=\"light\">
                        <div class=\"progress\">
                            <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 62.5%;\" aria-valuenow=\"1.250\"
                    aria-valuemin=\"0\" aria-valuemax=\"2000\">62.5%</div>
                        </div>
                        <hr class=\"light\">
                        <p>\${post.tagList}</p>
                    </div>
                    <div class=\"card-body\">
                        <p class=\"card-text\">
                            \${post.text}
                        </p>
                        <button class=\"btn btn-primary btn-sm\" data-toggle=\"modal\" data-target=\"#\${post.title}\">More</button>
                    </div>
                    </div>
                    ";
        // line 36
        $this->loadTemplate("Post/DetailsModal.html", "cards.html.twig", 36)->display($context);
        // line 37
        echo "                    `
            })
            document.querySelector('#postList').innerHTML = html;
        }
    };
    xhttp.open(\"GET\", url, true);
    xhttp.send();
}
</script>

<style>
#postList{
    width: 100%;
    display: flex;
    flex-diection: row;
    justify-content: space-between;
    flex-wrap: wrap;
}
.card{
    width: 15rem;
    padding: 0.2rem;
    margin: 1rem
}
</style>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "cards.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 37,  66 => 36,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"col-md-*\" id=\"postList\">
    <div id=\"cardList\"></div>
</div>

<script>
window.onload = function() {
    let xhttp = new XMLHttpRequest();
    let url = '/post/list';
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4) {
            rsp = JSON.parse(this.responseText).posts
            html = ''
            rsp.forEach(post => {
                html += `
                    <div class=\"card\">
                    <div class=\"card-header\">
                        <h5>
                            \${post.title}
                            <span class=\"badge badge-pill badge-warning\">\${post.minimumVotes}</span>
                        </h5>
                        <hr class=\"light\">
                        <div class=\"progress\">
                            <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 62.5%;\" aria-valuenow=\"1.250\"
                    aria-valuemin=\"0\" aria-valuemax=\"2000\">62.5%</div>
                        </div>
                        <hr class=\"light\">
                        <p>\${post.tagList}</p>
                    </div>
                    <div class=\"card-body\">
                        <p class=\"card-text\">
                            \${post.text}
                        </p>
                        <button class=\"btn btn-primary btn-sm\" data-toggle=\"modal\" data-target=\"#\${post.title}\">More</button>
                    </div>
                    </div>
                    {% include 'Post/DetailsModal.html' %}
                    `
            })
            document.querySelector('#postList').innerHTML = html;
        }
    };
    xhttp.open(\"GET\", url, true);
    xhttp.send();
}
</script>

<style>
#postList{
    width: 100%;
    display: flex;
    flex-diection: row;
    justify-content: space-between;
    flex-wrap: wrap;
}
.card{
    width: 15rem;
    padding: 0.2rem;
    margin: 1rem
}
</style>
", "cards.html.twig", "/home/developer/workspace/project-wf3/templates/cards.html.twig");
    }
}
