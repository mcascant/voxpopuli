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
        echo "<div class=\"col-md-12\" id=\"postList\">
</div>

<script>
    window.onload = function () {
        contentLoader();
    };

    function contentLoader() {
        url = '/post/list';
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4) {
                el = document.querySelector('#postList')
                rsp = JSON.parse(this.responseText).posts;
                rsp.forEach(r => {
                    el.innerHTML +=
                    `
<div class='card'>
<div class='card-header'>
<h5 class='post-title'>
<span class='badge badge-pill badge-warning'>1.256/2.000</span>
\${r.title}
</h5>
<hr class='light'>
<div class='progress'>
<div class='progress-bar bg-success' role='progressbar' style='width: 62.5%;' aria-valuenow='1.250'
aria-valuemin='0' aria-valuemax='2000'>62.5%</div>
</div>
<hr class='light'>
<p>Tag1, Tag2, Tag3, Tag4</p>
</div>
<div class='card-body'>
<p class='card-text'>
\${r.text}
</p>
<a href='#' class='btn btn-primary'>Read more &raquo; </a>
<br>
<div class='tileButtons votesCounter'>
<button type='button' class='btn btn-primary btn-sm' data-toggle='modal' data-target='#modalPetitionView'>Display
petition</button>
</div>
</div>
</div>
`
                    }
                )
                el.style = 'display:flex; flex-direction:row; width:100%;flex-wrap:wrap; justify-content:space-around'
                card = el.querySelectorAll('.card')
                card.forEach(item => {
                    item.style = 'margin: 1rem'
                })
            }
        };
        xhttp.open(\"GET\", url, true);
        xhttp.send()
    }
</script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "cards.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"col-md-12\" id=\"postList\">
</div>

<script>
    window.onload = function () {
        contentLoader();
    };

    function contentLoader() {
        url = '/post/list';
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4) {
                el = document.querySelector('#postList')
                rsp = JSON.parse(this.responseText).posts;
                rsp.forEach(r => {
                    el.innerHTML +=
                    `
<div class='card'>
<div class='card-header'>
<h5 class='post-title'>
<span class='badge badge-pill badge-warning'>1.256/2.000</span>
\${r.title}
</h5>
<hr class='light'>
<div class='progress'>
<div class='progress-bar bg-success' role='progressbar' style='width: 62.5%;' aria-valuenow='1.250'
aria-valuemin='0' aria-valuemax='2000'>62.5%</div>
</div>
<hr class='light'>
<p>Tag1, Tag2, Tag3, Tag4</p>
</div>
<div class='card-body'>
<p class='card-text'>
\${r.text}
</p>
<a href='#' class='btn btn-primary'>Read more &raquo; </a>
<br>
<div class='tileButtons votesCounter'>
<button type='button' class='btn btn-primary btn-sm' data-toggle='modal' data-target='#modalPetitionView'>Display
petition</button>
</div>
</div>
</div>
`
                    }
                )
                el.style = 'display:flex; flex-direction:row; width:100%;flex-wrap:wrap; justify-content:space-around'
                card = el.querySelectorAll('.card')
                card.forEach(item => {
                    item.style = 'margin: 1rem'
                })
            }
        };
        xhttp.open(\"GET\", url, true);
        xhttp.send()
    }
</script>", "cards.html.twig", "/home/developer/workspace/project-wf3/templates/cards.html.twig");
    }
}
