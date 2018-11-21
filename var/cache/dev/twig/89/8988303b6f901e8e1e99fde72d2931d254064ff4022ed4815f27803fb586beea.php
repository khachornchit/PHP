<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_bc3fae97b3ee0e0ae96a07fbc461f82a22836aabbda4728740370d34b2e4505e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ad2df0f8ff469373d6bb6a0b49bce0d9ee40dfd4f8faabe5c8b99d9dc51ee3ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad2df0f8ff469373d6bb6a0b49bce0d9ee40dfd4f8faabe5c8b99d9dc51ee3ad->enter($__internal_ad2df0f8ff469373d6bb6a0b49bce0d9ee40dfd4f8faabe5c8b99d9dc51ee3ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_c223aa387fcc0e1b680ea7591e256b19ec0f350e3735e8feb4d389c5554c7c28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c223aa387fcc0e1b680ea7591e256b19ec0f350e3735e8feb4d389c5554c7c28->enter($__internal_c223aa387fcc0e1b680ea7591e256b19ec0f350e3735e8feb4d389c5554c7c28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad2df0f8ff469373d6bb6a0b49bce0d9ee40dfd4f8faabe5c8b99d9dc51ee3ad->leave($__internal_ad2df0f8ff469373d6bb6a0b49bce0d9ee40dfd4f8faabe5c8b99d9dc51ee3ad_prof);

        
        $__internal_c223aa387fcc0e1b680ea7591e256b19ec0f350e3735e8feb4d389c5554c7c28->leave($__internal_c223aa387fcc0e1b680ea7591e256b19ec0f350e3735e8feb4d389c5554c7c28_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_77168171e27f8e4a03904058e0074843d98350ff80918d62296d9213ed4a44d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77168171e27f8e4a03904058e0074843d98350ff80918d62296d9213ed4a44d8->enter($__internal_77168171e27f8e4a03904058e0074843d98350ff80918d62296d9213ed4a44d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a66dc8585085351382b780077ff17c19a82da3ee5352bce6e3645dfae004e434 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a66dc8585085351382b780077ff17c19a82da3ee5352bce6e3645dfae004e434->enter($__internal_a66dc8585085351382b780077ff17c19a82da3ee5352bce6e3645dfae004e434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_a66dc8585085351382b780077ff17c19a82da3ee5352bce6e3645dfae004e434->leave($__internal_a66dc8585085351382b780077ff17c19a82da3ee5352bce6e3645dfae004e434_prof);

        
        $__internal_77168171e27f8e4a03904058e0074843d98350ff80918d62296d9213ed4a44d8->leave($__internal_77168171e27f8e4a03904058e0074843d98350ff80918d62296d9213ed4a44d8_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6ce29b720f6bd810d8ee5d17b38642188d4c8776d507dc02569b0c905ca004a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ce29b720f6bd810d8ee5d17b38642188d4c8776d507dc02569b0c905ca004a0->enter($__internal_6ce29b720f6bd810d8ee5d17b38642188d4c8776d507dc02569b0c905ca004a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8c23b505f1e7450a5daa5bf1301faeae3a586abf0dac98b9aef4cd445fa1bcfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c23b505f1e7450a5daa5bf1301faeae3a586abf0dac98b9aef4cd445fa1bcfb->enter($__internal_8c23b505f1e7450a5daa5bf1301faeae3a586abf0dac98b9aef4cd445fa1bcfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_8c23b505f1e7450a5daa5bf1301faeae3a586abf0dac98b9aef4cd445fa1bcfb->leave($__internal_8c23b505f1e7450a5daa5bf1301faeae3a586abf0dac98b9aef4cd445fa1bcfb_prof);

        
        $__internal_6ce29b720f6bd810d8ee5d17b38642188d4c8776d507dc02569b0c905ca004a0->leave($__internal_6ce29b720f6bd810d8ee5d17b38642188d4c8776d507dc02569b0c905ca004a0_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6b2240c8087a4410fafa8ce40d11cf8d8e8a30fea2f5eee10325e2c716eec293 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b2240c8087a4410fafa8ce40d11cf8d8e8a30fea2f5eee10325e2c716eec293->enter($__internal_6b2240c8087a4410fafa8ce40d11cf8d8e8a30fea2f5eee10325e2c716eec293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e84afa7b3f41e4631c12c8042b956e5d55fbb2a57aaf3a95e34957c9fd91e5e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e84afa7b3f41e4631c12c8042b956e5d55fbb2a57aaf3a95e34957c9fd91e5e3->enter($__internal_e84afa7b3f41e4631c12c8042b956e5d55fbb2a57aaf3a95e34957c9fd91e5e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_e84afa7b3f41e4631c12c8042b956e5d55fbb2a57aaf3a95e34957c9fd91e5e3->leave($__internal_e84afa7b3f41e4631c12c8042b956e5d55fbb2a57aaf3a95e34957c9fd91e5e3_prof);

        
        $__internal_6b2240c8087a4410fafa8ce40d11cf8d8e8a30fea2f5eee10325e2c716eec293->leave($__internal_6b2240c8087a4410fafa8ce40d11cf8d8e8a30fea2f5eee10325e2c716eec293_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/app/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
