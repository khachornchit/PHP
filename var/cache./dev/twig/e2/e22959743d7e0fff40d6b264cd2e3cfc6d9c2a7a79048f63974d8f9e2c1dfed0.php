<?php

/* default/hello.html.twig */
class __TwigTemplate_9920939dccec9c265a83013d396dedfea88b549343f8614ac4b18819d194328e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/hello.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d381968da03bbd5c3c6b815eafca49a771a823ecbce2fe61343475d6147b239b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d381968da03bbd5c3c6b815eafca49a771a823ecbce2fe61343475d6147b239b->enter($__internal_d381968da03bbd5c3c6b815eafca49a771a823ecbce2fe61343475d6147b239b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/hello.html.twig"));

        $__internal_fb4629ac65c65c87b92c1d19b54ee5034a5e6e6c3309f269c510c16ba8c62e79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb4629ac65c65c87b92c1d19b54ee5034a5e6e6c3309f269c510c16ba8c62e79->enter($__internal_fb4629ac65c65c87b92c1d19b54ee5034a5e6e6c3309f269c510c16ba8c62e79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/hello.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d381968da03bbd5c3c6b815eafca49a771a823ecbce2fe61343475d6147b239b->leave($__internal_d381968da03bbd5c3c6b815eafca49a771a823ecbce2fe61343475d6147b239b_prof);

        
        $__internal_fb4629ac65c65c87b92c1d19b54ee5034a5e6e6c3309f269c510c16ba8c62e79->leave($__internal_fb4629ac65c65c87b92c1d19b54ee5034a5e6e6c3309f269c510c16ba8c62e79_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7f763b3e84b5ec42134be7b146ef4c5ec628994de5edf15bc32ce431a4ae78c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f763b3e84b5ec42134be7b146ef4c5ec628994de5edf15bc32ce431a4ae78c1->enter($__internal_7f763b3e84b5ec42134be7b146ef4c5ec628994de5edf15bc32ce431a4ae78c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4fb0235a87317796cffe9d76032ff2071a963e9520c740f4191e59d559c78372 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fb0235a87317796cffe9d76032ff2071a963e9520c740f4191e59d559c78372->enter($__internal_4fb0235a87317796cffe9d76032ff2071a963e9520c740f4191e59d559c78372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    Helloooooooooooooooo
";
        
        $__internal_4fb0235a87317796cffe9d76032ff2071a963e9520c740f4191e59d559c78372->leave($__internal_4fb0235a87317796cffe9d76032ff2071a963e9520c740f4191e59d559c78372_prof);

        
        $__internal_7f763b3e84b5ec42134be7b146ef4c5ec628994de5edf15bc32ce431a4ae78c1->leave($__internal_7f763b3e84b5ec42134be7b146ef4c5ec628994de5edf15bc32ce431a4ae78c1_prof);

    }

    public function getTemplateName()
    {
        return "default/hello.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    Helloooooooooooooooo
{% endblock %}", "default/hello.html.twig", "/app/app/Resources/views/default/hello.html.twig");
    }
}
