<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_1db0ce9d80403c466613e887fe55d7b7213659895e0e6c5c5189801cd22775f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7992854b708936c6105b1473cf2730acebf1adeef0345bdc554d743ed762ad3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7992854b708936c6105b1473cf2730acebf1adeef0345bdc554d743ed762ad3c->enter($__internal_7992854b708936c6105b1473cf2730acebf1adeef0345bdc554d743ed762ad3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_773d65028d63fa9444bf8b4c44d7e4b01839a7d020d6b2f401df801607056f10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_773d65028d63fa9444bf8b4c44d7e4b01839a7d020d6b2f401df801607056f10->enter($__internal_773d65028d63fa9444bf8b4c44d7e4b01839a7d020d6b2f401df801607056f10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_7992854b708936c6105b1473cf2730acebf1adeef0345bdc554d743ed762ad3c->leave($__internal_7992854b708936c6105b1473cf2730acebf1adeef0345bdc554d743ed762ad3c_prof);

        
        $__internal_773d65028d63fa9444bf8b4c44d7e4b01839a7d020d6b2f401df801607056f10->leave($__internal_773d65028d63fa9444bf8b4c44d7e4b01839a7d020d6b2f401df801607056f10_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "/app/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
