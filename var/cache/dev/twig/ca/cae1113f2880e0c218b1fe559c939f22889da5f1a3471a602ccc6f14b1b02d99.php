<?php

/* Post/Create.html.twig */
class __TwigTemplate_0980e245a8785c8be477266d8193b0cd592f1e6030b907a08282fb75c5bfca74 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Post/Create.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Post/Create.html.twig"));

        // line 1
        echo "<div class=\"container\">
\t<form class=\"px-3 py-3 needs-validation\" style=\"min-width: 500px;\"  action=\"/post/create\"  method=\"post\" novalidate>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"postTitle\">Title</label>
\t\t\t<input type=\"text\" class=\"form-control\" id=\"postTitle\" name=\"postTitle\" placeholder=\"Enter your petition title\"
\t\t\t\t   required>
\t\t\t<small id=\"postTitleHelp\" class=\"form-text text-muted\"></small>
\t\t\t<div class=\"valid-feedback\">
\t\t\t\tTitle provided is valid!
\t\t\t</div>
\t\t\t<div class=\"invalid-feedback\">
\t\t\t\tPlease provide a valid title!
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<label for=\"postTags\">Tags</label>
\t\t\t<input type=\"text\" class=\"form-control\" id=\"postTags\" name=\"postTags\" placeholder=\"Enter your petition title\"
\t\t\t\t   required>
\t\t\t<small id=\"postTagsHelp\" class=\"form-text text-muted\"></small>
\t\t\t<div class=\"valid-feedback\">
\t\t\t\tTags provided are valid!
\t\t\t</div>
\t\t\t<div class=\"invalid-feedback\">
\t\t\t\tPlease provide valid tags!
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<label for=\"postText\">Text</label>
\t\t\t<input type=\"text\" class=\"form-control\" id=\"postText\" name=\"postText\" placeholder=\"Enter your petition text\"
\t\t\t\t   required>
\t\t\t<small id=\"postTextHelp\" class=\"form-text text-muted\"></small>
\t\t\t<div class=\"valid-feedback\">
\t\t\t\tText provided is valid!
\t\t\t</div>
\t\t\t<div class=\"invalid-feedback\">
\t\t\t\tPlease provide a valid text!
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<label for=\"postVotesMin\">Number of votes required</label>
\t\t\t<input type=\"number\" class=\"form-control\" id=\"postVotesMin\" name=\"postVotesMin\" placeholder=\"Enter your petition title\"
\t\t\t\t   required>
\t\t\t<small id=\"postVotesMinHelp\" class=\"form-text text-muted\"></small>
\t\t\t<div class=\"valid-feedback\">
\t\t\t\tVotes minimum provided is valid!
\t\t\t</div>
\t\t\t<div class=\"invalid-feedback\">
\t\t\t\tPlease provide valid Votes minimum!
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<label for=\"postPubDate\">Publication Date</label>
\t\t\t<input type=\"datetime-local\" class=\"form-control\" id=\"postPubDate\" name=\"postPubDate\">
\t\t\t<small id=\"postVotesMinHelp\" class=\"form-text text-muted\"></small>
\t\t\t<div class=\"valid-feedback\">
\t\t\t\tVotes minimum provided is valid!
\t\t\t</div>
\t\t\t<div class=\"invalid-feedback\">
\t\t\t\tPlease provide valid Votes minimum!
\t\t\t</div>
\t\t</div>

\t\t<button type=\"submit\" class=\"btn btn-primary\">Create Petition</button>
\t</form>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Post/Create.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container\">
\t<form class=\"px-3 py-3 needs-validation\" style=\"min-width: 500px;\"  action=\"/post/create\"  method=\"post\" novalidate>
\t\t<div class=\"form-group\">
\t\t\t<label for=\"postTitle\">Title</label>
\t\t\t<input type=\"text\" class=\"form-control\" id=\"postTitle\" name=\"postTitle\" placeholder=\"Enter your petition title\"
\t\t\t\t   required>
\t\t\t<small id=\"postTitleHelp\" class=\"form-text text-muted\"></small>
\t\t\t<div class=\"valid-feedback\">
\t\t\t\tTitle provided is valid!
\t\t\t</div>
\t\t\t<div class=\"invalid-feedback\">
\t\t\t\tPlease provide a valid title!
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<label for=\"postTags\">Tags</label>
\t\t\t<input type=\"text\" class=\"form-control\" id=\"postTags\" name=\"postTags\" placeholder=\"Enter your petition title\"
\t\t\t\t   required>
\t\t\t<small id=\"postTagsHelp\" class=\"form-text text-muted\"></small>
\t\t\t<div class=\"valid-feedback\">
\t\t\t\tTags provided are valid!
\t\t\t</div>
\t\t\t<div class=\"invalid-feedback\">
\t\t\t\tPlease provide valid tags!
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<label for=\"postText\">Text</label>
\t\t\t<input type=\"text\" class=\"form-control\" id=\"postText\" name=\"postText\" placeholder=\"Enter your petition text\"
\t\t\t\t   required>
\t\t\t<small id=\"postTextHelp\" class=\"form-text text-muted\"></small>
\t\t\t<div class=\"valid-feedback\">
\t\t\t\tText provided is valid!
\t\t\t</div>
\t\t\t<div class=\"invalid-feedback\">
\t\t\t\tPlease provide a valid text!
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<label for=\"postVotesMin\">Number of votes required</label>
\t\t\t<input type=\"number\" class=\"form-control\" id=\"postVotesMin\" name=\"postVotesMin\" placeholder=\"Enter your petition title\"
\t\t\t\t   required>
\t\t\t<small id=\"postVotesMinHelp\" class=\"form-text text-muted\"></small>
\t\t\t<div class=\"valid-feedback\">
\t\t\t\tVotes minimum provided is valid!
\t\t\t</div>
\t\t\t<div class=\"invalid-feedback\">
\t\t\t\tPlease provide valid Votes minimum!
\t\t\t</div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<label for=\"postPubDate\">Publication Date</label>
\t\t\t<input type=\"datetime-local\" class=\"form-control\" id=\"postPubDate\" name=\"postPubDate\">
\t\t\t<small id=\"postVotesMinHelp\" class=\"form-text text-muted\"></small>
\t\t\t<div class=\"valid-feedback\">
\t\t\t\tVotes minimum provided is valid!
\t\t\t</div>
\t\t\t<div class=\"invalid-feedback\">
\t\t\t\tPlease provide valid Votes minimum!
\t\t\t</div>
\t\t</div>

\t\t<button type=\"submit\" class=\"btn btn-primary\">Create Petition</button>
\t</form>
</div>
", "Post/Create.html.twig", "/home/developer/workspace/project-wf3/templates/Post/Create.html.twig");
    }
}
