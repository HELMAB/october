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

/* /Users/helmab/Desktop/october/themes/gdc/layouts/default.htm */
class __TwigTemplate_7b34b794d14bc8ef96bce2aafd8db37b545e57b17f96c375a5e9bffa54973233 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html>
<head>
    <title>";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 4), "title", [], "any", false, false, false, 4), "html", null, true);
        echo " | Clean Blog</title>
    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/vendor/bootstrap/css/bootstrap.min.css", 1 => "assets/vendor/fontawesome-free/css/all.min.css", 2 => "https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic", 3 => "https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800", 4 => "assets/css/clean-blog.min.css"]);
        // line 12
        echo "\" rel=\"stylesheet\">
</head>
<body>
";
        // line 15
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("navbar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 16
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 17
        echo "<hr/>
";
        // line 18
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 19
        echo "
<!-- Bootstrap core JavaScript -->
<script src=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/vendor/jquery/jquery.min.js", 1 => "assets/vendor/bootstrap/js/bootstrap.bundle.min.js", 2 => "assets/js/clean-blog.min.js"]);
        // line 25
        echo "\"></script>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/Users/helmab/Desktop/october/themes/gdc/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 25,  71 => 21,  67 => 19,  63 => 18,  60 => 17,  58 => 16,  54 => 15,  49 => 12,  47 => 6,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <title>{{ this.page.title }} | Clean Blog</title>
    <!-- Bootstrap core CSS -->
    <link href=\"{{ [
    'assets/vendor/bootstrap/css/bootstrap.min.css',
    'assets/vendor/fontawesome-free/css/all.min.css',
    'https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic',
    'https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800',
    'assets/css/clean-blog.min.css'
    ]|theme }}\" rel=\"stylesheet\">
</head>
<body>
{% partial 'navbar' %}
{% page %}
<hr/>
{% partial 'footer' %}

<!-- Bootstrap core JavaScript -->
<script src=\"{{ [
'assets/vendor/jquery/jquery.min.js',
'assets/vendor/bootstrap/js/bootstrap.bundle.min.js',
'assets/js/clean-blog.min.js'
]|theme }}\"></script>

</body>
</html>", "/Users/helmab/Desktop/october/themes/gdc/layouts/default.htm", "");
    }
}
