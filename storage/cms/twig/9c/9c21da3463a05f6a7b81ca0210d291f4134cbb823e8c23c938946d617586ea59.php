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

/* /home/asoradev/Desktop/install-master/themes/gdc/partials/navbar.htm */
class __TwigTemplate_6400ea5ee0c42206e32875b4119e1864f31b8a3eb55f9609edee7f11aab71da8 extends \Twig\Template
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
        echo "<nav class=\"navbar navbar-expand-lg navbar-light fixed-top\" id=\"mainNav\">
    <div class=\"container\">
        <a class=\"navbar-brand\" href=\"/\">Start Bootstrap</a>
        <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            Menu
            <i class=\"fas fa-bars\"></i>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
            <ul class=\"navbar-nav ml-auto\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/\">Home</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/about\">About</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/post\">Sample Post</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/contact\">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "/home/asoradev/Desktop/install-master/themes/gdc/partials/navbar.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-light fixed-top\" id=\"mainNav\">
    <div class=\"container\">
        <a class=\"navbar-brand\" href=\"/\">Start Bootstrap</a>
        <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            Menu
            <i class=\"fas fa-bars\"></i>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
            <ul class=\"navbar-nav ml-auto\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/\">Home</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/about\">About</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/post\">Sample Post</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/contact\">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>", "/home/asoradev/Desktop/install-master/themes/gdc/partials/navbar.htm", "");
    }
}
