<?php

/* base.html.twig */
class __TwigTemplate_0ca029efa2f16d3a6c52882ce783eb0b7d025ee0e87994b3ba616052232e629b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_61b03c3e64ec84bbe6804b589198f59e85221f61f2a6cb4f0dd11ebad9e08d1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61b03c3e64ec84bbe6804b589198f59e85221f61f2a6cb4f0dd11ebad9e08d1f->enter($__internal_61b03c3e64ec84bbe6804b589198f59e85221f61f2a6cb4f0dd11ebad9e08d1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_40c9c951c890950e54a4331d80d8f866455e965bfbdb7c2196cd9a59ad2a25b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40c9c951c890950e54a4331d80d8f866455e965bfbdb7c2196cd9a59ad2a25b1->enter($__internal_40c9c951c890950e54a4331d80d8f866455e965bfbdb7c2196cd9a59ad2a25b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\"/>
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "    <link href=\"https://fonts.googleapis.com/css?family=Montserrat:500\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,700\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\"
          integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
</head>
<body>

<div class=\"container\">
    ";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 17
        echo "</div>
";
        // line 18
        $this->displayBlock('javascripts', $context, $blocks);
        // line 19
        echo "
";
        // line 24
        echo "</body>
</html>
";
        
        $__internal_61b03c3e64ec84bbe6804b589198f59e85221f61f2a6cb4f0dd11ebad9e08d1f->leave($__internal_61b03c3e64ec84bbe6804b589198f59e85221f61f2a6cb4f0dd11ebad9e08d1f_prof);

        
        $__internal_40c9c951c890950e54a4331d80d8f866455e965bfbdb7c2196cd9a59ad2a25b1->leave($__internal_40c9c951c890950e54a4331d80d8f866455e965bfbdb7c2196cd9a59ad2a25b1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6e32d8d7fa07d4424b4a364c22cb010404ba48c25c068d15130f17d28762d695 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e32d8d7fa07d4424b4a364c22cb010404ba48c25c068d15130f17d28762d695->enter($__internal_6e32d8d7fa07d4424b4a364c22cb010404ba48c25c068d15130f17d28762d695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5283c9126d7c66b1b286f2bcb8ea4d7a0d3e8bed26a78f7e3e346ef4819e74fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5283c9126d7c66b1b286f2bcb8ea4d7a0d3e8bed26a78f7e3e346ef4819e74fe->enter($__internal_5283c9126d7c66b1b286f2bcb8ea4d7a0d3e8bed26a78f7e3e346ef4819e74fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_5283c9126d7c66b1b286f2bcb8ea4d7a0d3e8bed26a78f7e3e346ef4819e74fe->leave($__internal_5283c9126d7c66b1b286f2bcb8ea4d7a0d3e8bed26a78f7e3e346ef4819e74fe_prof);

        
        $__internal_6e32d8d7fa07d4424b4a364c22cb010404ba48c25c068d15130f17d28762d695->leave($__internal_6e32d8d7fa07d4424b4a364c22cb010404ba48c25c068d15130f17d28762d695_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2d2b843145b7a30f62474fa4f904203c8e1949f7df6954acc7c8fd5dd71c9a23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d2b843145b7a30f62474fa4f904203c8e1949f7df6954acc7c8fd5dd71c9a23->enter($__internal_2d2b843145b7a30f62474fa4f904203c8e1949f7df6954acc7c8fd5dd71c9a23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_209d173576ed9bd77e756685a6a36c8795c0dcf451656ebd935dd660e30e89ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_209d173576ed9bd77e756685a6a36c8795c0dcf451656ebd935dd660e30e89ca->enter($__internal_209d173576ed9bd77e756685a6a36c8795c0dcf451656ebd935dd660e30e89ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_209d173576ed9bd77e756685a6a36c8795c0dcf451656ebd935dd660e30e89ca->leave($__internal_209d173576ed9bd77e756685a6a36c8795c0dcf451656ebd935dd660e30e89ca_prof);

        
        $__internal_2d2b843145b7a30f62474fa4f904203c8e1949f7df6954acc7c8fd5dd71c9a23->leave($__internal_2d2b843145b7a30f62474fa4f904203c8e1949f7df6954acc7c8fd5dd71c9a23_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_42f56a85f60b91e5725f2acb24cbfdf10e561b25ecf3f6f85243ada68e72821e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42f56a85f60b91e5725f2acb24cbfdf10e561b25ecf3f6f85243ada68e72821e->enter($__internal_42f56a85f60b91e5725f2acb24cbfdf10e561b25ecf3f6f85243ada68e72821e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4094f1f7eef8835550fa25ff2ca030e72a52fc881ec72b1adcb678fda0cbb03b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4094f1f7eef8835550fa25ff2ca030e72a52fc881ec72b1adcb678fda0cbb03b->enter($__internal_4094f1f7eef8835550fa25ff2ca030e72a52fc881ec72b1adcb678fda0cbb03b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4094f1f7eef8835550fa25ff2ca030e72a52fc881ec72b1adcb678fda0cbb03b->leave($__internal_4094f1f7eef8835550fa25ff2ca030e72a52fc881ec72b1adcb678fda0cbb03b_prof);

        
        $__internal_42f56a85f60b91e5725f2acb24cbfdf10e561b25ecf3f6f85243ada68e72821e->leave($__internal_42f56a85f60b91e5725f2acb24cbfdf10e561b25ecf3f6f85243ada68e72821e_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1f7013d852e68344659e63fc7155465f2bf8c2803f96d4b7349512385631a331 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f7013d852e68344659e63fc7155465f2bf8c2803f96d4b7349512385631a331->enter($__internal_1f7013d852e68344659e63fc7155465f2bf8c2803f96d4b7349512385631a331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2322099f1600c1b9c6e9abe61f77d52fed64f99cc81ac0ce9450ca46bebe8177 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2322099f1600c1b9c6e9abe61f77d52fed64f99cc81ac0ce9450ca46bebe8177->enter($__internal_2322099f1600c1b9c6e9abe61f77d52fed64f99cc81ac0ce9450ca46bebe8177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2322099f1600c1b9c6e9abe61f77d52fed64f99cc81ac0ce9450ca46bebe8177->leave($__internal_2322099f1600c1b9c6e9abe61f77d52fed64f99cc81ac0ce9450ca46bebe8177_prof);

        
        $__internal_1f7013d852e68344659e63fc7155465f2bf8c2803f96d4b7349512385631a331->leave($__internal_1f7013d852e68344659e63fc7155465f2bf8c2803f96d4b7349512385631a331_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 18,  112 => 16,  95 => 6,  77 => 5,  65 => 24,  62 => 19,  60 => 18,  57 => 17,  55 => 16,  45 => 9,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\"/>
    <title>{% block title %}Welcome!{% endblock %}</title>
    {% block stylesheets %}{% endblock %}
    <link href=\"https://fonts.googleapis.com/css?family=Montserrat:500\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,700\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/main.min.css') }}\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\"
          integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
</head>
<body>

<div class=\"container\">
    {% block body %}{% endblock %}
</div>
{% block javascripts %}{% endblock %}

{#{% include 'default/nav.html.twig' %}#}
{#{% block body %}{% endblock %}#}
{#{% block javascripts %}{% endblock %}#}
{#<script src=\"{{ asset('js/main.min.js') }}\" type=\"text/javascript\"></script>#}
</body>
</html>
", "base.html.twig", "/app/app/Resources/views/base.html.twig");
    }
}
