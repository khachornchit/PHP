<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_0ba0d6bdeed6bea8ed207ba0216e0d83479bfeffda0abca115e39f9a3dbcc2c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_54fe26c6065456cdf069884a00c02d3a5ca9aa44e75a15cadc4f62a0e06ef2df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54fe26c6065456cdf069884a00c02d3a5ca9aa44e75a15cadc4f62a0e06ef2df->enter($__internal_54fe26c6065456cdf069884a00c02d3a5ca9aa44e75a15cadc4f62a0e06ef2df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_c32f5153d5912993466c33faac98b5a26953582c26493d2c0fceb77b0fd02cb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c32f5153d5912993466c33faac98b5a26953582c26493d2c0fceb77b0fd02cb9->enter($__internal_c32f5153d5912993466c33faac98b5a26953582c26493d2c0fceb77b0fd02cb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54fe26c6065456cdf069884a00c02d3a5ca9aa44e75a15cadc4f62a0e06ef2df->leave($__internal_54fe26c6065456cdf069884a00c02d3a5ca9aa44e75a15cadc4f62a0e06ef2df_prof);

        
        $__internal_c32f5153d5912993466c33faac98b5a26953582c26493d2c0fceb77b0fd02cb9->leave($__internal_c32f5153d5912993466c33faac98b5a26953582c26493d2c0fceb77b0fd02cb9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9e046a3db5ae0b1f922071854353f6a59f3380511edf074e740d741078cdb8c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e046a3db5ae0b1f922071854353f6a59f3380511edf074e740d741078cdb8c2->enter($__internal_9e046a3db5ae0b1f922071854353f6a59f3380511edf074e740d741078cdb8c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4d2851dd0652851bb7126d71423ca5bc90334622c2e82965a677f7cc1d6c5880 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d2851dd0652851bb7126d71423ca5bc90334622c2e82965a677f7cc1d6c5880->enter($__internal_4d2851dd0652851bb7126d71423ca5bc90334622c2e82965a677f7cc1d6c5880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_4d2851dd0652851bb7126d71423ca5bc90334622c2e82965a677f7cc1d6c5880->leave($__internal_4d2851dd0652851bb7126d71423ca5bc90334622c2e82965a677f7cc1d6c5880_prof);

        
        $__internal_9e046a3db5ae0b1f922071854353f6a59f3380511edf074e740d741078cdb8c2->leave($__internal_9e046a3db5ae0b1f922071854353f6a59f3380511edf074e740d741078cdb8c2_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_e5f1baf6dcbb719f847c03a8b4cb9f46d9b7eaa3d1defa63a8a7096a40dafe29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5f1baf6dcbb719f847c03a8b4cb9f46d9b7eaa3d1defa63a8a7096a40dafe29->enter($__internal_e5f1baf6dcbb719f847c03a8b4cb9f46d9b7eaa3d1defa63a8a7096a40dafe29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_527a8e29eac365a64f38533b286d94cd7137b91e002747340e4785a1f03d89ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_527a8e29eac365a64f38533b286d94cd7137b91e002747340e4785a1f03d89ea->enter($__internal_527a8e29eac365a64f38533b286d94cd7137b91e002747340e4785a1f03d89ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_527a8e29eac365a64f38533b286d94cd7137b91e002747340e4785a1f03d89ea->leave($__internal_527a8e29eac365a64f38533b286d94cd7137b91e002747340e4785a1f03d89ea_prof);

        
        $__internal_e5f1baf6dcbb719f847c03a8b4cb9f46d9b7eaa3d1defa63a8a7096a40dafe29->leave($__internal_e5f1baf6dcbb719f847c03a8b4cb9f46d9b7eaa3d1defa63a8a7096a40dafe29_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_45439161e2d161fc17f21a1921a787218597f6d171eb453065bed65b94c05b4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45439161e2d161fc17f21a1921a787218597f6d171eb453065bed65b94c05b4a->enter($__internal_45439161e2d161fc17f21a1921a787218597f6d171eb453065bed65b94c05b4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f43035a874b78c5d4a817998f9f458a795d1d4eca4cb3c7231f703c4f475f803 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f43035a874b78c5d4a817998f9f458a795d1d4eca4cb3c7231f703c4f475f803->enter($__internal_f43035a874b78c5d4a817998f9f458a795d1d4eca4cb3c7231f703c4f475f803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_f43035a874b78c5d4a817998f9f458a795d1d4eca4cb3c7231f703c4f475f803->leave($__internal_f43035a874b78c5d4a817998f9f458a795d1d4eca4cb3c7231f703c4f475f803_prof);

        
        $__internal_45439161e2d161fc17f21a1921a787218597f6d171eb453065bed65b94c05b4a->leave($__internal_45439161e2d161fc17f21a1921a787218597f6d171eb453065bed65b94c05b4a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/app/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
