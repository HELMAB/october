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

/* /Users/helmab/Desktop/october/themes/gdc/partials/headers/home.htm */
class __TwigTemplate_1a3a0e9ce72674950395ac12323cf11539018f816d996252e66da6d71c615864 extends \Twig\Template
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
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/home-bg.jpg");
        echo ")\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-md-10 mx-auto\">
                <div class=\"site-heading\">
                    <h1>Clean Blog</h1>
                    <span class=\"subheading\">A Blog Theme by Start Bootstrap</span>
                </div>
            </div>
        </div>
    </div>
</header>";
    }

    public function getTemplateName()
    {
        return "/Users/helmab/Desktop/october/themes/gdc/partials/headers/home.htm";
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
        return new Source("<header class=\"masthead\" style=\"background-image: url({{ 'assets/img/home-bg.jpg' | theme }})\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-md-10 mx-auto\">
                <div class=\"site-heading\">
                    <h1>Clean Blog</h1>
                    <span class=\"subheading\">A Blog Theme by Start Bootstrap</span>
                </div>
            </div>
        </div>
    </div>
</header>", "/Users/helmab/Desktop/october/themes/gdc/partials/headers/home.htm", "");
    }
}
