<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* /home/asoradev/Desktop/install-master/themes/gdc/partials/headers/blog.htm */
class __TwigTemplate_ef7bf1fee89c716341cbeb947e91edfa1f2aff7d3e0488080834b4160c637633 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<header class=\"masthead\" style=\"background-image: url(";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/post-bg.jpg");
        echo ")\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-md-10 mx-auto\">
                <div class=\"post-heading\">
                    <h1>Man must explore, and this is exploration at its greatest</h1>
                    <h2 class=\"subheading\">Problems look mighty small from 150 miles up</h2>
                    <span class=\"meta\">Posted by
              <a href=\"#\">Start Bootstrap</a>
              on August 24, 2019</span>
                </div>
            </div>
        </div>
    </div>
</header>";
    }

    public function getTemplateName()
    {
        return "/home/asoradev/Desktop/install-master/themes/gdc/partials/headers/blog.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"masthead\" style=\"background-image: url({{ 'assets/img/post-bg.jpg' | theme }})\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-md-10 mx-auto\">
                <div class=\"post-heading\">
                    <h1>Man must explore, and this is exploration at its greatest</h1>
                    <h2 class=\"subheading\">Problems look mighty small from 150 miles up</h2>
                    <span class=\"meta\">Posted by
              <a href=\"#\">Start Bootstrap</a>
              on August 24, 2019</span>
                </div>
            </div>
        </div>
    </div>
</header>", "/home/asoradev/Desktop/install-master/themes/gdc/partials/headers/blog.htm", "");
    }
}
