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

/* /home/asoradev/Desktop/install-master/themes/gdc/partials/headers/about.htm */
class __TwigTemplate_40b48de7147536cfca8496e7bfd3fd15ba2ae2dd9295acd5ee9ffbd2225a99a2 extends \Twig\Template
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
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/about-bg.jpg");
        echo ")\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-md-10 mx-auto\">
                <div class=\"page-heading\">
                    <h1>About Me</h1>
                    <span class=\"subheading\">This is what I do.</span>
                </div>
            </div>
        </div>
    </div>
</header>";
    }

    public function getTemplateName()
    {
        return "/home/asoradev/Desktop/install-master/themes/gdc/partials/headers/about.htm";
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
        return new Source("<header class=\"masthead\" style=\"background-image: url({{ 'assets/img/about-bg.jpg' | theme }})\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-md-10 mx-auto\">
                <div class=\"page-heading\">
                    <h1>About Me</h1>
                    <span class=\"subheading\">This is what I do.</span>
                </div>
            </div>
        </div>
    </div>
</header>", "/home/asoradev/Desktop/install-master/themes/gdc/partials/headers/about.htm", "");
    }
}