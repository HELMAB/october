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

/* /home/asoradev/Desktop/install-master/themes/gdc/partials/headers/contact.htm */
class __TwigTemplate_3e197f0a72b9ba1d2b45dfe8d172777f271a42927d7df3a7673ae37444a25a03 extends \Twig\Template
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
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/contact-bg.jpg");
        echo ")\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-md-10 mx-auto\">
                <div class=\"page-heading\">
                    <h1>Contact Me</h1>
                    <span class=\"subheading\">Have questions? I have answers.</span>
                </div>
            </div>
        </div>
    </div>
</header>";
    }

    public function getTemplateName()
    {
        return "/home/asoradev/Desktop/install-master/themes/gdc/partials/headers/contact.htm";
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
        return new Source("<header class=\"masthead\" style=\"background-image: url({{ 'assets/img/contact-bg.jpg' | theme }})\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-md-10 mx-auto\">
                <div class=\"page-heading\">
                    <h1>Contact Me</h1>
                    <span class=\"subheading\">Have questions? I have answers.</span>
                </div>
            </div>
        </div>
    </div>
</header>", "/home/asoradev/Desktop/install-master/themes/gdc/partials/headers/contact.htm", "");
    }
}
