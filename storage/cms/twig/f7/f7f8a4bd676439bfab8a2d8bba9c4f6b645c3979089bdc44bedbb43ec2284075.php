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

/* /Users/helmab/Desktop/october/themes/gdc/pages/post.htm */
class __TwigTemplate_f7bda841fc00ec9adb5879651ad8212bf151c2c61e23f0b9ee84122143fecdf4 extends \Twig\Template
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
        $context["post"] = twig_get_attribute($this->env, $this->source, ($context["blogPost"] ?? null), "post", [], "any", false, false, false, 1);
        // line 2
        echo "
<div class=\"content\"></div>

";
        // line 5
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "featured_images", [], "any", false, false, false, 5), "count", [], "any", false, false, false, 5)) {
            // line 6
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "featured_images", [], "any", false, false, false, 6));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 7
                echo "        <header class=\"masthead\" style=\"background-image: url(";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 7), "html", null, true);
                echo ")\" data-src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "filename", [], "any", false, false, false, 7), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "description", [], "any", false, false, false, 7), "html", null, true);
                echo "\">
            <div class=\"overlay\"></div>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-8 col-md-10 mx-auto\">
                        <div class=\"post-heading\">
                            <h1>";
                // line 13
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 13), "html", null, true);
                echo "</h1>
                            <h2 class=\"subheading\">";
                // line 14
                echo twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "summary", [], "any", false, false, false, 14);
                echo "</h2>
                            <span class=\"meta\">Posted by
                      <a href=\"#\">Start Bootstrap</a>
                      on ";
                // line 17
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "published_at", [], "any", false, false, false, 17), "M d, Y"), "html", null, true);
                echo "</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 25
        echo "

<article>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-md-10 mx-auto\">
                <p class=\"info\">
                    Posted
                    ";
        // line 33
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "categories", [], "any", false, false, false, 33), "count", [], "any", false, false, false, 33)) {
            echo " in
                        ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "categories", [], "any", false, false, false, 34));
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
                // line 35
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "url", [], "any", false, false, false, 35), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 35), "html", null, true);
                echo "</a>";
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 35)) {
                    echo ", ";
                }
                // line 36
                echo "                        ";
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
            // line 37
            echo "                    ";
        }
        // line 38
        echo "                    on ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "published_at", [], "any", false, false, false, 38), "M d, Y"), "html", null, true);
        echo "
                </p>
                ";
        // line 40
        echo twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "content_html", [], "any", false, false, false, 40);
        echo "
                ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "featured_images", [], "any", false, false, false, 41));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 42
            echo "                    <p class=\"text-center\">
                        <img
                            data-src=\"";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "filename", [], "any", false, false, false, 44), "html", null, true);
            echo "\"
                            src=\"";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 45), "html", null, true);
            echo "\"
                            alt=\"";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "description", [], "any", false, false, false, 46), "html", null, true);
            echo "\"
                            style=\"max-width: 100%\" />
                            ";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "description", [], "any", false, false, false, 48), "html", null, true);
            echo "
                    </p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "                <p>Placeholder text by
                    <a href=\"http://spaceipsum.com/\">Space Ipsum</a>. Photographs by
                    <a href=\"https://www.flickr.com/photos/nasacommons/\">NASA on The Commons</a>.</p>
            </div>
        </div>
    </div>
</article>";
    }

    public function getTemplateName()
    {
        return "/Users/helmab/Desktop/october/themes/gdc/pages/post.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 51,  177 => 48,  172 => 46,  168 => 45,  164 => 44,  160 => 42,  156 => 41,  152 => 40,  146 => 38,  143 => 37,  129 => 36,  120 => 35,  103 => 34,  99 => 33,  89 => 25,  75 => 17,  69 => 14,  65 => 13,  51 => 7,  46 => 6,  44 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set post = blogPost.post %}

<div class=\"content\"></div>

{% if post.featured_images.count %}
    {% for image in post.featured_images %}
        <header class=\"masthead\" style=\"background-image: url({{ image.path }})\" data-src=\"{{ image.filename }}\" alt=\"{{ image.description }}\">
            <div class=\"overlay\"></div>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-8 col-md-10 mx-auto\">
                        <div class=\"post-heading\">
                            <h1>{{ post.title }}</h1>
                            <h2 class=\"subheading\">{{ post.summary|raw }}</h2>
                            <span class=\"meta\">Posted by
                      <a href=\"#\">Start Bootstrap</a>
                      on {{ post.published_at|date('M d, Y') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    {% endfor %}
{% endif %}


<article>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-md-10 mx-auto\">
                <p class=\"info\">
                    Posted
                    {% if post.categories.count %} in
                        {% for category in post.categories %}
                            <a href=\"{{ category.url }}\">{{ category.name }}</a>{% if not loop.last %}, {% endif %}
                        {% endfor %}
                    {% endif %}
                    on {{ post.published_at|date('M d, Y') }}
                </p>
                {{ post.content_html|raw }}
                {% for image in post.featured_images %}
                    <p class=\"text-center\">
                        <img
                            data-src=\"{{ image.filename }}\"
                            src=\"{{ image.path }}\"
                            alt=\"{{ image.description }}\"
                            style=\"max-width: 100%\" />
                            {{ image.description }}
                    </p>
                {% endfor %}
                <p>Placeholder text by
                    <a href=\"http://spaceipsum.com/\">Space Ipsum</a>. Photographs by
                    <a href=\"https://www.flickr.com/photos/nasacommons/\">NASA on The Commons</a>.</p>
            </div>
        </div>
    </div>
</article>", "/Users/helmab/Desktop/october/themes/gdc/pages/post.htm", "");
    }
}
