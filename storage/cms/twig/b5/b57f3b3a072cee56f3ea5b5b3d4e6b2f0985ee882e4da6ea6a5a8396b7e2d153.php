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

/* /Users/helmab/Desktop/october/themes/gdc/pages/home.htm */
class __TwigTemplate_8d1e8a8f5bc46c1baeb8758dffc8401b3115acf31714edc765a02f0ce8df9732 extends \Twig\Template
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
";
        // line 3
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "posts", [], "any", false, false, false, 3);
        // line 4
        echo "
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-8 col-md-10 mx-auto\">
             ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 9
            echo "                <div class=\"post-preview\">
                    <a href=\"";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 10), "html", null, true);
            echo "\">
                        <h2 class=\"post-title\">";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 11), "html", null, true);
            echo "</h2>
                        <h3 class=\"post-subtitle\">";
            // line 12
            echo twig_get_attribute($this->env, $this->source, $context["post"], "summary", [], "any", false, false, false, 12);
            echo "</h3>
                    </a>
                    <p class=\"post-meta\">Posted by
                        <a href=\"#\">Start Bootstrap</a>
                        on ";
            // line 16
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "published_at", [], "any", false, false, false, 16), "M d, Y"), "html", null, true);
            echo "</p>
                </div>
                <hr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 20
            echo "                <li class=\"no-data\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "noPostsMessage", [], "any", false, false, false, 20), "html", null, true);
            echo "</li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "            <!-- Pager -->
            <div class=\"clearfix\">
                ";
        // line 24
        if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, false, 24) > 1)) {
            // line 25
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, false, 25) > 1)) {
                // line 26
                echo "                        <a class=\"btn btn-primary float-right\" href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 26), "baseFileName", [], "any", false, false, false, 26), [twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "pageParam", [], "any", false, false, false, 26) => (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, false, 26) - 1)]);
                echo "\">&larr; Prev</a>
                    ";
            }
            // line 28
            echo "
                    ";
            // line 29
            if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, false, 29) > twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, false, 29))) {
                // line 30
                echo "                        <a class=\"btn btn-primary float-right\" href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 30), "baseFileName", [], "any", false, false, false, 30), [twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "pageParam", [], "any", false, false, false, 30) => (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, false, 30) + 1)]);
                echo "\">Next &rarr;</a>
                    ";
            }
            // line 32
            echo "                ";
        }
        // line 33
        echo "            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Users/helmab/Desktop/october/themes/gdc/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 33,  119 => 32,  113 => 30,  111 => 29,  108 => 28,  102 => 26,  99 => 25,  97 => 24,  93 => 22,  84 => 20,  75 => 16,  68 => 12,  64 => 11,  60 => 10,  57 => 9,  52 => 8,  46 => 4,  44 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% partial \"headers/home\" %}

{% set posts = blogPosts.posts %}

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-8 col-md-10 mx-auto\">
             {% for post in posts %}
                <div class=\"post-preview\">
                    <a href=\"{{ post.url }}\">
                        <h2 class=\"post-title\">{{ post.title }}</h2>
                        <h3 class=\"post-subtitle\">{{ post.summary|raw }}</h3>
                    </a>
                    <p class=\"post-meta\">Posted by
                        <a href=\"#\">Start Bootstrap</a>
                        on {{ post.published_at|date('M d, Y') }}</p>
                </div>
                <hr>
            {% else %}
                <li class=\"no-data\">{{ blogPosts.noPostsMessage }}</li>
            {% endfor %}
            <!-- Pager -->
            <div class=\"clearfix\">
                {% if posts.lastPage > 1 %}
                    {% if posts.currentPage > 1 %}
                        <a class=\"btn btn-primary float-right\" href=\"{{ this.page.baseFileName|page({ (blogPosts.pageParam): (posts.currentPage-1) }) }}\">&larr; Prev</a>
                    {% endif %}

                    {% if posts.lastPage > posts.currentPage %}
                        <a class=\"btn btn-primary float-right\" href=\"{{ this.page.baseFileName|page({ (blogPosts.pageParam): (posts.currentPage+1) }) }}\">Next &rarr;</a>
                    {% endif %}
                {% endif %}
            </div>
        </div>
    </div>
</div>", "/Users/helmab/Desktop/october/themes/gdc/pages/home.htm", "");
    }
}
