<?php

/* param/name.html.twig */
class __TwigTemplate_165558dfc78467da4a1e70daa24c66c3e666f36b5007b7c3dc4c44a1a009b5d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "param/name.html.twig", 1);
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
        $__internal_275256571761871afabad3c5162f5c32dbdb415eafd8ed8686bf79c1294ed554 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_275256571761871afabad3c5162f5c32dbdb415eafd8ed8686bf79c1294ed554->enter($__internal_275256571761871afabad3c5162f5c32dbdb415eafd8ed8686bf79c1294ed554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "param/name.html.twig"));

        $__internal_b0a6ba2d47dc036fbef17b10a37728914595c283d51969a61d129b5096f73895 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0a6ba2d47dc036fbef17b10a37728914595c283d51969a61d129b5096f73895->enter($__internal_b0a6ba2d47dc036fbef17b10a37728914595c283d51969a61d129b5096f73895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "param/name.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_275256571761871afabad3c5162f5c32dbdb415eafd8ed8686bf79c1294ed554->leave($__internal_275256571761871afabad3c5162f5c32dbdb415eafd8ed8686bf79c1294ed554_prof);

        
        $__internal_b0a6ba2d47dc036fbef17b10a37728914595c283d51969a61d129b5096f73895->leave($__internal_b0a6ba2d47dc036fbef17b10a37728914595c283d51969a61d129b5096f73895_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a88e8f9e23b250ae8c00ba94d94853369fcfc91a0969e480fff0dc21b85072c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a88e8f9e23b250ae8c00ba94d94853369fcfc91a0969e480fff0dc21b85072c->enter($__internal_0a88e8f9e23b250ae8c00ba94d94853369fcfc91a0969e480fff0dc21b85072c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3a5fd355a9611cd8c20350dcb32bec035d85dac534ebe775f08995d441fc3f2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a5fd355a9611cd8c20350dcb32bec035d85dac534ebe775f08995d441fc3f2f->enter($__internal_3a5fd355a9611cd8c20350dcb32bec035d85dac534ebe775f08995d441fc3f2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Hello</h1>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["greeting"]) || array_key_exists("greeting", $context) ? $context["greeting"] : (function () { throw new Twig_Error_Runtime('Variable "greeting" does not exist.', 5, $this->getSourceContext()); })()), "html", null, true);
        echo "</p>
    <p>";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 6, $this->getSourceContext()); })()), "html", null, true);
        echo "</p>
";
        
        $__internal_3a5fd355a9611cd8c20350dcb32bec035d85dac534ebe775f08995d441fc3f2f->leave($__internal_3a5fd355a9611cd8c20350dcb32bec035d85dac534ebe775f08995d441fc3f2f_prof);

        
        $__internal_0a88e8f9e23b250ae8c00ba94d94853369fcfc91a0969e480fff0dc21b85072c->leave($__internal_0a88e8f9e23b250ae8c00ba94d94853369fcfc91a0969e480fff0dc21b85072c_prof);

    }

    public function getTemplateName()
    {
        return "param/name.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Hello</h1>
    <p>{{ greeting }}</p>
    <p>{{ name }}</p>
{% endblock %}", "param/name.html.twig", "/app/app/Resources/views/param/name.html.twig");
    }
}
