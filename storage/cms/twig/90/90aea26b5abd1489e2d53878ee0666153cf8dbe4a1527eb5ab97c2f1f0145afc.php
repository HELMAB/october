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

/* /Users/helmab/Desktop/october/themes/gdc/pages/contact.htm */
class __TwigTemplate_9f748aa6fd830e3cab0a57b77735fad9029896f31e6cb173fdb58e1ac91fad4a extends \Twig\Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("headers/contact"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 2
        echo "
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-8 col-md-10 mx-auto\">
            <p>Want to get in touch? Fill out the form below to send me a message and I will get back to you as soon as possible!</p>
            <form name=\"sentMessage\" id=\"contactForm\" novalidate>
                <div class=\"control-group\">
                    <div class=\"form-group floating-label-form-group controls\">
                        <label>Name</label>
                        <input type=\"text\" class=\"form-control\" placeholder=\"Name\" id=\"name\" required data-validation-required-message=\"Please enter your name.\">
                        <p class=\"help-block text-danger\"></p>
                    </div>
                </div>
                <div class=\"control-group\">
                    <div class=\"form-group floating-label-form-group controls\">
                        <label>Email Address</label>
                        <input type=\"email\" class=\"form-control\" placeholder=\"Email Address\" id=\"email\" required data-validation-required-message=\"Please enter your email address.\">
                        <p class=\"help-block text-danger\"></p>
                    </div>
                </div>
                <div class=\"control-group\">
                    <div class=\"form-group col-xs-12 floating-label-form-group controls\">
                        <label>Phone Number</label>
                        <input type=\"tel\" class=\"form-control\" placeholder=\"Phone Number\" id=\"phone\" required data-validation-required-message=\"Please enter your phone number.\">
                        <p class=\"help-block text-danger\"></p>
                    </div>
                </div>
                <div class=\"control-group\">
                    <div class=\"form-group floating-label-form-group controls\">
                        <label>Message</label>
                        <textarea rows=\"5\" class=\"form-control\" placeholder=\"Message\" id=\"message\" required data-validation-required-message=\"Please enter a message.\"></textarea>
                        <p class=\"help-block text-danger\"></p>
                    </div>
                </div>
                <br>
                <div id=\"success\"></div>
                <button type=\"submit\" class=\"btn btn-primary\" id=\"sendMessageButton\">Send</button>
            </form>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Users/helmab/Desktop/october/themes/gdc/pages/contact.htm";
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
        return new Source("{% partial \"headers/contact\" %}

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-8 col-md-10 mx-auto\">
            <p>Want to get in touch? Fill out the form below to send me a message and I will get back to you as soon as possible!</p>
            <form name=\"sentMessage\" id=\"contactForm\" novalidate>
                <div class=\"control-group\">
                    <div class=\"form-group floating-label-form-group controls\">
                        <label>Name</label>
                        <input type=\"text\" class=\"form-control\" placeholder=\"Name\" id=\"name\" required data-validation-required-message=\"Please enter your name.\">
                        <p class=\"help-block text-danger\"></p>
                    </div>
                </div>
                <div class=\"control-group\">
                    <div class=\"form-group floating-label-form-group controls\">
                        <label>Email Address</label>
                        <input type=\"email\" class=\"form-control\" placeholder=\"Email Address\" id=\"email\" required data-validation-required-message=\"Please enter your email address.\">
                        <p class=\"help-block text-danger\"></p>
                    </div>
                </div>
                <div class=\"control-group\">
                    <div class=\"form-group col-xs-12 floating-label-form-group controls\">
                        <label>Phone Number</label>
                        <input type=\"tel\" class=\"form-control\" placeholder=\"Phone Number\" id=\"phone\" required data-validation-required-message=\"Please enter your phone number.\">
                        <p class=\"help-block text-danger\"></p>
                    </div>
                </div>
                <div class=\"control-group\">
                    <div class=\"form-group floating-label-form-group controls\">
                        <label>Message</label>
                        <textarea rows=\"5\" class=\"form-control\" placeholder=\"Message\" id=\"message\" required data-validation-required-message=\"Please enter a message.\"></textarea>
                        <p class=\"help-block text-danger\"></p>
                    </div>
                </div>
                <br>
                <div id=\"success\"></div>
                <button type=\"submit\" class=\"btn btn-primary\" id=\"sendMessageButton\">Send</button>
            </form>
        </div>
    </div>
</div>", "/Users/helmab/Desktop/october/themes/gdc/pages/contact.htm", "");
    }
}
