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

/* /home/asoradev/Desktop/install-master/themes/gdc/partials/footer.htm */
class __TwigTemplate_619daf3f83f07656671ffda4e9f2bd34ed700756aca36d6258e448dc226f3981 extends \Twig\Template
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
        echo "<footer>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-md-10 mx-auto\">
                <ul class=\"list-inline text-center\">
                    <li class=\"list-inline-item\">
                        <a href=\"#\">
                <span class=\"fa-stack fa-lg\">
                  <i class=\"fas fa-circle fa-stack-2x\"></i>
                  <i class=\"fab fa-twitter fa-stack-1x fa-inverse\"></i>
                </span>
                        </a>
                    </li>
                    <li class=\"list-inline-item\">
                        <a href=\"#\">
                <span class=\"fa-stack fa-lg\">
                  <i class=\"fas fa-circle fa-stack-2x\"></i>
                  <i class=\"fab fa-facebook-f fa-stack-1x fa-inverse\"></i>
                </span>
                        </a>
                    </li>
                    <li class=\"list-inline-item\">
                        <a href=\"#\">
                <span class=\"fa-stack fa-lg\">
                  <i class=\"fas fa-circle fa-stack-2x\"></i>
                  <i class=\"fab fa-github fa-stack-1x fa-inverse\"></i>
                </span>
                        </a>
                    </li>
                </ul>
                <p class=\"copyright text-muted\">Copyright &copy; Your Website 2020</p>
            </div>
        </div>
    </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "/home/asoradev/Desktop/install-master/themes/gdc/partials/footer.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-md-10 mx-auto\">
                <ul class=\"list-inline text-center\">
                    <li class=\"list-inline-item\">
                        <a href=\"#\">
                <span class=\"fa-stack fa-lg\">
                  <i class=\"fas fa-circle fa-stack-2x\"></i>
                  <i class=\"fab fa-twitter fa-stack-1x fa-inverse\"></i>
                </span>
                        </a>
                    </li>
                    <li class=\"list-inline-item\">
                        <a href=\"#\">
                <span class=\"fa-stack fa-lg\">
                  <i class=\"fas fa-circle fa-stack-2x\"></i>
                  <i class=\"fab fa-facebook-f fa-stack-1x fa-inverse\"></i>
                </span>
                        </a>
                    </li>
                    <li class=\"list-inline-item\">
                        <a href=\"#\">
                <span class=\"fa-stack fa-lg\">
                  <i class=\"fas fa-circle fa-stack-2x\"></i>
                  <i class=\"fab fa-github fa-stack-1x fa-inverse\"></i>
                </span>
                        </a>
                    </li>
                </ul>
                <p class=\"copyright text-muted\">Copyright &copy; Your Website 2020</p>
            </div>
        </div>
    </div>
</footer>", "/home/asoradev/Desktop/install-master/themes/gdc/partials/footer.htm", "");
    }
}
