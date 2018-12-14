<?php

/* post.html */
class __TwigTemplate_7cc2d8a9d7b81524f0995f0b833d624ee6747db7eb7ea726cc0265b5bfbd99b4 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "post.html"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "post.html"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Complete Bootstrap 4 Website Layout</title>
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\">

    <link href=\"style.css\" rel=\"stylesheet\">
</head>

<body>

    <div class=\"container\">
        <form class=\"px-3 py-3 needs-validation\" style=\"min-width: 500px;\" novalidate>
            <div class=\"form-group\">
                <label for=\"postTitle\">Title</label>
                <input type=\"text\" class=\"form-control\" id=\"postTitle\" name=\"postTitle\" placeholder=\"Enter your petition title\"
                    required>
                <small id=\"postTitleHelp\" class=\"form-text text-muted\"></small>
                <div class=\"valid-feedback\">
                    Title provided is valid!
                </div>
                <div class=\"invalid-feedback\">
                    Please provide a valid title!
                </div>
            </div>

            <div class=\"form-group\">
                <label for=\"postTags\">Tags</label>
                <input type=\"text\" class=\"form-control\" id=\"postTags\" name=\"postTags\" placeholder=\"Enter your petition title\"
                    required>
                <small id=\"postTagsHelp\" class=\"form-text text-muted\"></small>
                <div class=\"valid-feedback\">
                    Tags provided are valid!
                </div>
                <div class=\"invalid-feedback\">
                    Please provide valid tags!
                </div>
            </div>

            <div class=\"form-group\">
                <label for=\"postText\">Text</label>
                <input type=\"text\" class=\"form-control\" id=\"postText\" name=\"postText\" placeholder=\"Enter your petition text\"
                    required>
                <small id=\"postTextHelp\" class=\"form-text text-muted\"></small>
                <div class=\"valid-feedback\">
                    Text provided is valid!
                </div>
                <div class=\"invalid-feedback\">
                    Please provide a valid text!
                </div>
            </div>

            <div class=\"form-group\">
                <label for=\"postVotesMin\">Number of votes required</label>
                <input type=\"number\" class=\"form-control\" id=\"postVotesMin\" name=\"postVotesMin\" placeholder=\"Enter your petition title\"
                    required>
                <small id=\"postVotesMinHelp\" class=\"form-text text-muted\"></small>
                <div class=\"valid-feedback\">
                    Votes minimum provided is valid!
                </div>
                <div class=\"invalid-feedback\">
                    Please provide valid Votes minimum!
                </div>
            </div>



            <button type=\"submit\" class=\"btn btn-primary\">Create Petition</button>
        </form>
    </div>

</body>
<!-- BOOTSTRAP JavaScript-->
<script src=\"https://use.fontawesome.com/releases/v5.0.8/js/all.js\"></script>

<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>

<script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\"
    crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\" integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\"
    crossorigin=\"anonymous\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\" integrity=\"sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy\"
    crossorigin=\"anonymous\"></script>


<!-- OWN JavaScript-->
<script type=\"text/javascript\" src=\"script.js\"></script>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "post.html";
    }

    public function getDebugInfo()
    {
        return array (  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Complete Bootstrap 4 Website Layout</title>
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\">

    <link href=\"style.css\" rel=\"stylesheet\">
</head>

<body>

    <div class=\"container\">
        <form class=\"px-3 py-3 needs-validation\" style=\"min-width: 500px;\" novalidate>
            <div class=\"form-group\">
                <label for=\"postTitle\">Title</label>
                <input type=\"text\" class=\"form-control\" id=\"postTitle\" name=\"postTitle\" placeholder=\"Enter your petition title\"
                    required>
                <small id=\"postTitleHelp\" class=\"form-text text-muted\"></small>
                <div class=\"valid-feedback\">
                    Title provided is valid!
                </div>
                <div class=\"invalid-feedback\">
                    Please provide a valid title!
                </div>
            </div>

            <div class=\"form-group\">
                <label for=\"postTags\">Tags</label>
                <input type=\"text\" class=\"form-control\" id=\"postTags\" name=\"postTags\" placeholder=\"Enter your petition title\"
                    required>
                <small id=\"postTagsHelp\" class=\"form-text text-muted\"></small>
                <div class=\"valid-feedback\">
                    Tags provided are valid!
                </div>
                <div class=\"invalid-feedback\">
                    Please provide valid tags!
                </div>
            </div>

            <div class=\"form-group\">
                <label for=\"postText\">Text</label>
                <input type=\"text\" class=\"form-control\" id=\"postText\" name=\"postText\" placeholder=\"Enter your petition text\"
                    required>
                <small id=\"postTextHelp\" class=\"form-text text-muted\"></small>
                <div class=\"valid-feedback\">
                    Text provided is valid!
                </div>
                <div class=\"invalid-feedback\">
                    Please provide a valid text!
                </div>
            </div>

            <div class=\"form-group\">
                <label for=\"postVotesMin\">Number of votes required</label>
                <input type=\"number\" class=\"form-control\" id=\"postVotesMin\" name=\"postVotesMin\" placeholder=\"Enter your petition title\"
                    required>
                <small id=\"postVotesMinHelp\" class=\"form-text text-muted\"></small>
                <div class=\"valid-feedback\">
                    Votes minimum provided is valid!
                </div>
                <div class=\"invalid-feedback\">
                    Please provide valid Votes minimum!
                </div>
            </div>



            <button type=\"submit\" class=\"btn btn-primary\">Create Petition</button>
        </form>
    </div>

</body>
<!-- BOOTSTRAP JavaScript-->
<script src=\"https://use.fontawesome.com/releases/v5.0.8/js/all.js\"></script>

<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>

<script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\"
    crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\" integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\"
    crossorigin=\"anonymous\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\" integrity=\"sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy\"
    crossorigin=\"anonymous\"></script>


<!-- OWN JavaScript-->
<script type=\"text/javascript\" src=\"script.js\"></script>

</html>", "post.html", "/home/developer/workspace/project-wf3/templates/post.html");
    }
}
