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
<!--<ul class=\"post-list\">-->
<!--    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            echo "-->
<!--        <li>-->
<!--            <h3><a href=\"";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 8), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 8), "html", null, true);
            echo "</a></h3>-->

<!--            <p class=\"info\">-->
<!--                Posted-->
<!--                ";
            // line 12
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, false, 12), "count", [], "any", false, false, false, 12)) {
                echo " in ";
            }
            echo "-->
<!--                ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, false, 13));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                echo "-->
<!--                    <a href=\"";
                // line 14
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "url", [], "any", false, false, false, 14), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 14), "html", null, true);
                echo "</a>";
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 14)) {
                    echo ", ";
                }
                echo "-->
<!--                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "-->
<!--                on ";
            // line 16
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "published_at", [], "any", false, false, false, 16), "M d, Y"), "html", null, true);
            echo "-->
<!--            </p>-->

<!--            <p class=\"excerpt\">";
            // line 19
            echo twig_get_attribute($this->env, $this->source, $context["post"], "summary", [], "any", false, false, false, 19);
            echo "</p>-->
<!--        </li>-->
<!--    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 21
            echo "-->
<!--        <li class=\"no-data\">";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "noPostsMessage", [], "any", false, false, false, 22), "html", null, true);
            echo "</li>-->
<!--    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "-->
<!--</ul>-->

<!--";
        // line 26
        if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, false, 26) > 1)) {
            echo "-->
<!--    <ul class=\"pagination\">-->
<!--        ";
            // line 28
            if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, false, 28) > 1)) {
                echo "-->
<!--            <li><a href=\"";
                // line 29
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 29), "baseFileName", [], "any", false, false, false, 29), [twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "pageParam", [], "any", false, false, false, 29) => (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, false, 29) - 1)]);
                echo "\">&larr; Prev</a></li>-->
<!--        ";
            }
            // line 30
            echo "-->

<!--        ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, false, 32)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                echo "-->
<!--            <li class=\"";
                // line 33
                echo (((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, false, 33) == $context["page"])) ? ("active") : (null));
                echo "\">-->
<!--                <a href=\"";
                // line 34
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 34), "baseFileName", [], "any", false, false, false, 34), [twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "pageParam", [], "any", false, false, false, 34) => $context["page"]]);
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a>-->
<!--            </li>-->
<!--        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "-->

<!--        ";
            // line 38
            if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, false, 38) > twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, false, 38))) {
                echo "-->
<!--            <li><a href=\"";
                // line 39
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 39), "baseFileName", [], "any", false, false, false, 39), [twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "pageParam", [], "any", false, false, false, 39) => (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, false, 39) + 1)]);
                echo "\">Next &rarr;</a></li>-->
<!--        ";
            }
            // line 40
            echo "-->
<!--    </ul>-->
<!--";
        }
        // line 42
        echo "-->


<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-8 col-md-10 mx-auto\">
             ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 49
            echo "                <div class=\"post-preview\">
                    <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 50), "html", null, true);
            echo "\">
                        <h2 class=\"post-title\">";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 51), "html", null, true);
            echo "</h2>
                        <h3 class=\"post-subtitle\">";
            // line 52
            echo twig_get_attribute($this->env, $this->source, $context["post"], "summary", [], "any", false, false, false, 52);
            echo "</h3>
                    </a>
                    <p class=\"post-meta\">Posted by
                        <a href=\"#\">Start Bootstrap</a>
                        on ";
            // line 56
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "published_at", [], "any", false, false, false, 56), "M d, Y"), "html", null, true);
            echo "</p>
                </div>
                <hr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 60
            echo "                <li class=\"no-data\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "noPostsMessage", [], "any", false, false, false, 60), "html", null, true);
            echo "</li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "            <!-- Pager -->
            <div class=\"clearfix\">
                ";
        // line 64
        if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, false, 64) > 1)) {
            // line 65
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, false, 65) > 1)) {
                // line 66
                echo "                        <a class=\"btn btn-primary float-right\" href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 66), "baseFileName", [], "any", false, false, false, 66), [twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "pageParam", [], "any", false, false, false, 66) => (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, false, 66) - 1)]);
                echo "\">&larr; Prev</a>
                    ";
            }
            // line 68
            echo "
                    ";
            // line 69
            if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, false, 69) > twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, false, 69))) {
                // line 70
                echo "                        <a class=\"btn btn-primary float-right\" href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 70), "baseFileName", [], "any", false, false, false, 70), [twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "pageParam", [], "any", false, false, false, 70) => (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, false, 70) + 1)]);
                echo "\">Next &rarr;</a>
                    ";
            }
            // line 72
            echo "                ";
        }
        // line 73
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
        return array (  282 => 73,  279 => 72,  273 => 70,  271 => 69,  268 => 68,  262 => 66,  259 => 65,  257 => 64,  253 => 62,  244 => 60,  235 => 56,  228 => 52,  224 => 51,  220 => 50,  217 => 49,  212 => 48,  204 => 42,  199 => 40,  194 => 39,  190 => 38,  186 => 36,  175 => 34,  171 => 33,  165 => 32,  161 => 30,  156 => 29,  152 => 28,  147 => 26,  142 => 23,  134 => 22,  131 => 21,  123 => 19,  117 => 16,  114 => 15,  92 => 14,  73 => 13,  67 => 12,  58 => 8,  50 => 6,  46 => 4,  44 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% partial \"headers/home\" %}

{% set posts = blogPosts.posts %}

<!--<ul class=\"post-list\">-->
<!--    {% for post in posts %}-->
<!--        <li>-->
<!--            <h3><a href=\"{{ post.url }}\">{{ post.title }}</a></h3>-->

<!--            <p class=\"info\">-->
<!--                Posted-->
<!--                {% if post.categories.count %} in {% endif %}-->
<!--                {% for category in post.categories %}-->
<!--                    <a href=\"{{ category.url }}\">{{ category.name }}</a>{% if not loop.last %}, {% endif %}-->
<!--                {% endfor %}-->
<!--                on {{ post.published_at|date('M d, Y') }}-->
<!--            </p>-->

<!--            <p class=\"excerpt\">{{ post.summary|raw }}</p>-->
<!--        </li>-->
<!--    {% else %}-->
<!--        <li class=\"no-data\">{{ blogPosts.noPostsMessage }}</li>-->
<!--    {% endfor %}-->
<!--</ul>-->

<!--{% if posts.lastPage > 1 %}-->
<!--    <ul class=\"pagination\">-->
<!--        {% if posts.currentPage > 1 %}-->
<!--            <li><a href=\"{{ this.page.baseFileName|page({ (blogPosts.pageParam): (posts.currentPage-1) }) }}\">&larr; Prev</a></li>-->
<!--        {% endif %}-->

<!--        {% for page in 1..posts.lastPage %}-->
<!--            <li class=\"{{ posts.currentPage == page ? 'active' : null }}\">-->
<!--                <a href=\"{{ this.page.baseFileName|page({ (blogPosts.pageParam): page }) }}\">{{ page }}</a>-->
<!--            </li>-->
<!--        {% endfor %}-->

<!--        {% if posts.lastPage > posts.currentPage %}-->
<!--            <li><a href=\"{{ this.page.baseFileName|page({ (blogPosts.pageParam): (posts.currentPage+1) }) }}\">Next &rarr;</a></li>-->
<!--        {% endif %}-->
<!--    </ul>-->
<!--{% endif %}-->


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
