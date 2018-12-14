<?php

/* Post/DetailsModal.html */
class __TwigTemplate_6376cb2b94f4533bec9546c9075418c53e7d6c4f3d6cb04c8d337266ea5a8396 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Post/DetailsModal.html"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Post/DetailsModal.html"));

        // line 1
        echo "<div class=\"modal\" id=\"\${post.title}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"ModalCenterTitle\" aria-hidden=\"true\">
    <!-- Modal Container, ID -->

    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <!-- Modal size/shape definition -->

        <div class=\"modal-content\">
            <!-- Modal border, shadow, background definition -->

            <div class=\"modal-header\">
                <!-- Both: Modal header and footer-->

                <div class=\"modal-title\">
                    <h5 class=\"modal-title\" id=\"exampleModalCenterTitle\">
                        \${post.title}
                    </h5>
                </div>

                <div class=\"sideInfosContainer\">

                    <div class=\"tagButton\">
                        \${post.tagList}
                    </div>

                    <div class=\"modalPetitionViewButtons counterInfo\">
                        <button type=\"button\" class=\"btn btn-primary btn-warning btn-sm\">1256 / 2000</button>
                    </div>

                </div>
            </div>

            <!-- Modal maint content here -->
            <div class=\"modal-body\">
                <div class=petitionText_petitionImgContainer>
                    \${post.text}
                    <img src=\"https://picsum.photos/200/?random\" alt=\"petitionImg\">
                </div>
            </div>

            <div class=\"modal-footer\">
                
               
                <!-- Go to www.addthis.com/dashboard to customize your tools -->
                <div class=\"addthis_inline_share_toolbox\"></div>
                
                <button type=\"button\" class=\"btn btn-primary\">SocialStuff</button>
                <button type=\"button\" class=\"btn btn-primary\">Archive</button>
                <button type=\"button\" class=\"btn btn-primary\">Save changes</button>
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close this view</button>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Post/DetailsModal.html";
    }

    public function getDebugInfo()
    {
        return array (  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"modal\" id=\"\${post.title}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"ModalCenterTitle\" aria-hidden=\"true\">
    <!-- Modal Container, ID -->

    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <!-- Modal size/shape definition -->

        <div class=\"modal-content\">
            <!-- Modal border, shadow, background definition -->

            <div class=\"modal-header\">
                <!-- Both: Modal header and footer-->

                <div class=\"modal-title\">
                    <h5 class=\"modal-title\" id=\"exampleModalCenterTitle\">
                        \${post.title}
                    </h5>
                </div>

                <div class=\"sideInfosContainer\">

                    <div class=\"tagButton\">
                        \${post.tagList}
                    </div>

                    <div class=\"modalPetitionViewButtons counterInfo\">
                        <button type=\"button\" class=\"btn btn-primary btn-warning btn-sm\">1256 / 2000</button>
                    </div>

                </div>
            </div>

            <!-- Modal maint content here -->
            <div class=\"modal-body\">
                <div class=petitionText_petitionImgContainer>
                    \${post.text}
                    <img src=\"https://picsum.photos/200/?random\" alt=\"petitionImg\">
                </div>
            </div>

            <div class=\"modal-footer\">
                
               
                <!-- Go to www.addthis.com/dashboard to customize your tools -->
                <div class=\"addthis_inline_share_toolbox\"></div>
                
                <button type=\"button\" class=\"btn btn-primary\">SocialStuff</button>
                <button type=\"button\" class=\"btn btn-primary\">Archive</button>
                <button type=\"button\" class=\"btn btn-primary\">Save changes</button>
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close this view</button>
            </div>
        </div>
    </div>
</div>
", "Post/DetailsModal.html", "/home/developer/workspace/project-wf3/templates/Post/DetailsModal.html");
    }
}
