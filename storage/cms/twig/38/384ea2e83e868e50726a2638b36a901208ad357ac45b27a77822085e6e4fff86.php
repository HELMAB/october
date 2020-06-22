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

/* /home/asoradev/Desktop/install-master/themes/gdc/pages/home.htm */
class __TwigTemplate_b9f3fd4086bbb906709091c46879734ae1b168c207df5f874d39629a5a6bf5b8 extends \Twig\Template
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
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("headers/home"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 2
        echo "
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-8 col-md-10 mx-auto\">
            <div class=\"post-preview\">
                <a href=\"post.html\">
                    <h2 class=\"post-title\">
                        Man must explore, and this is exploration at its greatest
                    </h2>
                    <h3 class=\"post-subtitle\">
                        Problems look mighty small from 150 miles up
                    </h3>
                </a>
                <p class=\"post-meta\">Posted by
                    <a href=\"#\">Start Bootstrap</a>
                    on September 24, 2019</p>
            </div>
            <hr>
            <div class=\"post-preview\">
                <a href=\"post.html\">
                    <h2 class=\"post-title\">
                        I believe every human has a finite number of heartbeats. I don't intend to waste any of mine.
                    </h2>
                </a>
                <p class=\"post-meta\">Posted by
                    <a href=\"#\">Start Bootstrap</a>
                    on September 18, 2019</p>
            </div>
            <hr>
            <div class=\"post-preview\">
                <a href=\"post.html\">
                    <h2 class=\"post-title\">
                        Science has not yet mastered prophecy
                    </h2>
                    <h3 class=\"post-subtitle\">
                        We predict too much for the next year and yet far too little for the next ten.
                    </h3>
                </a>
                <p class=\"post-meta\">Posted by
                    <a href=\"#\">Start Bootstrap</a>
                    on August 24, 2019</p>
            </div>
            <hr>
            <div class=\"post-preview\">
                <a href=\"post.html\">
                    <h2 class=\"post-title\">
                        Failure is not an option
                    </h2>
                    <h3 class=\"post-subtitle\">
                        Many say exploration is part of our destiny, but it’s actually our duty to future generations.
                    </h3>
                </a>
                <p class=\"post-meta\">Posted by
                    <a href=\"#\">Start Bootstrap</a>
                    on July 8, 2019</p>
            </div>
            <hr>
            <!-- Pager -->
            <div class=\"clearfix\">
                <a class=\"btn btn-primary float-right\" href=\"#\">Older Posts &rarr;</a>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/asoradev/Desktop/install-master/themes/gdc/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% partial \"headers/home\" %}

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-8 col-md-10 mx-auto\">
            <div class=\"post-preview\">
                <a href=\"post.html\">
                    <h2 class=\"post-title\">
                        Man must explore, and this is exploration at its greatest
                    </h2>
                    <h3 class=\"post-subtitle\">
                        Problems look mighty small from 150 miles up
                    </h3>
                </a>
                <p class=\"post-meta\">Posted by
                    <a href=\"#\">Start Bootstrap</a>
                    on September 24, 2019</p>
            </div>
            <hr>
            <div class=\"post-preview\">
                <a href=\"post.html\">
                    <h2 class=\"post-title\">
                        I believe every human has a finite number of heartbeats. I don't intend to waste any of mine.
                    </h2>
                </a>
                <p class=\"post-meta\">Posted by
                    <a href=\"#\">Start Bootstrap</a>
                    on September 18, 2019</p>
            </div>
            <hr>
            <div class=\"post-preview\">
                <a href=\"post.html\">
                    <h2 class=\"post-title\">
                        Science has not yet mastered prophecy
                    </h2>
                    <h3 class=\"post-subtitle\">
                        We predict too much for the next year and yet far too little for the next ten.
                    </h3>
                </a>
                <p class=\"post-meta\">Posted by
                    <a href=\"#\">Start Bootstrap</a>
                    on August 24, 2019</p>
            </div>
            <hr>
            <div class=\"post-preview\">
                <a href=\"post.html\">
                    <h2 class=\"post-title\">
                        Failure is not an option
                    </h2>
                    <h3 class=\"post-subtitle\">
                        Many say exploration is part of our destiny, but it’s actually our duty to future generations.
                    </h3>
                </a>
                <p class=\"post-meta\">Posted by
                    <a href=\"#\">Start Bootstrap</a>
                    on July 8, 2019</p>
            </div>
            <hr>
            <!-- Pager -->
            <div class=\"clearfix\">
                <a class=\"btn btn-primary float-right\" href=\"#\">Older Posts &rarr;</a>
            </div>
        </div>
    </div>
</div>", "/home/asoradev/Desktop/install-master/themes/gdc/pages/home.htm", "");
    }
}
