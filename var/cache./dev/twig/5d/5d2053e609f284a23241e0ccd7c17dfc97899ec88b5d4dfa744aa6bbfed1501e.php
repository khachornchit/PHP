<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_434cbc1dc4208e2e87eb63eb82f9b29f08d494530be71b33ee1724ab6490430a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_db49428b1a0702ebcecc6c239a22c350c2b899d9125ef4c351aecb48c6e4460a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db49428b1a0702ebcecc6c239a22c350c2b899d9125ef4c351aecb48c6e4460a->enter($__internal_db49428b1a0702ebcecc6c239a22c350c2b899d9125ef4c351aecb48c6e4460a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_e5e6b9d2902ed44b36ffd549b42a6971bd47226ae7c9d5a8e7f31ed85aa40859 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5e6b9d2902ed44b36ffd549b42a6971bd47226ae7c9d5a8e7f31ed85aa40859->enter($__internal_e5e6b9d2902ed44b36ffd549b42a6971bd47226ae7c9d5a8e7f31ed85aa40859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db49428b1a0702ebcecc6c239a22c350c2b899d9125ef4c351aecb48c6e4460a->leave($__internal_db49428b1a0702ebcecc6c239a22c350c2b899d9125ef4c351aecb48c6e4460a_prof);

        
        $__internal_e5e6b9d2902ed44b36ffd549b42a6971bd47226ae7c9d5a8e7f31ed85aa40859->leave($__internal_e5e6b9d2902ed44b36ffd549b42a6971bd47226ae7c9d5a8e7f31ed85aa40859_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_17213e47edcecf712a735c60f3d09634fd32eefec5d130c03112a22e214892d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17213e47edcecf712a735c60f3d09634fd32eefec5d130c03112a22e214892d1->enter($__internal_17213e47edcecf712a735c60f3d09634fd32eefec5d130c03112a22e214892d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f1e889eaa754710fd07202734d3bd746f019899869c9179a0e579824fe1fd86d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1e889eaa754710fd07202734d3bd746f019899869c9179a0e579824fe1fd86d->enter($__internal_f1e889eaa754710fd07202734d3bd746f019899869c9179a0e579824fe1fd86d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f1e889eaa754710fd07202734d3bd746f019899869c9179a0e579824fe1fd86d->leave($__internal_f1e889eaa754710fd07202734d3bd746f019899869c9179a0e579824fe1fd86d_prof);

        
        $__internal_17213e47edcecf712a735c60f3d09634fd32eefec5d130c03112a22e214892d1->leave($__internal_17213e47edcecf712a735c60f3d09634fd32eefec5d130c03112a22e214892d1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c05fbc2d408e04e03b76efb4ab77a478962c711e5ef57d622ece261a0dc626c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c05fbc2d408e04e03b76efb4ab77a478962c711e5ef57d622ece261a0dc626c6->enter($__internal_c05fbc2d408e04e03b76efb4ab77a478962c711e5ef57d622ece261a0dc626c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7c20ab21dc931f272dd33b5fea28996c579d40b5fe800c7a4deb6d0c46b4007e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c20ab21dc931f272dd33b5fea28996c579d40b5fe800c7a4deb6d0c46b4007e->enter($__internal_7c20ab21dc931f272dd33b5fea28996c579d40b5fe800c7a4deb6d0c46b4007e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7c20ab21dc931f272dd33b5fea28996c579d40b5fe800c7a4deb6d0c46b4007e->leave($__internal_7c20ab21dc931f272dd33b5fea28996c579d40b5fe800c7a4deb6d0c46b4007e_prof);

        
        $__internal_c05fbc2d408e04e03b76efb4ab77a478962c711e5ef57d622ece261a0dc626c6->leave($__internal_c05fbc2d408e04e03b76efb4ab77a478962c711e5ef57d622ece261a0dc626c6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c6fdd894e8ad044a7ca00dbfb285f75147719ba3c2bd4d768fc754d62881aedb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6fdd894e8ad044a7ca00dbfb285f75147719ba3c2bd4d768fc754d62881aedb->enter($__internal_c6fdd894e8ad044a7ca00dbfb285f75147719ba3c2bd4d768fc754d62881aedb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_938497e731a19124f9e21e8c3f58b74dd19883a9bf93e2edc9dc38d5d4b6220d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_938497e731a19124f9e21e8c3f58b74dd19883a9bf93e2edc9dc38d5d4b6220d->enter($__internal_938497e731a19124f9e21e8c3f58b74dd19883a9bf93e2edc9dc38d5d4b6220d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_938497e731a19124f9e21e8c3f58b74dd19883a9bf93e2edc9dc38d5d4b6220d->leave($__internal_938497e731a19124f9e21e8c3f58b74dd19883a9bf93e2edc9dc38d5d4b6220d_prof);

        
        $__internal_c6fdd894e8ad044a7ca00dbfb285f75147719ba3c2bd4d768fc754d62881aedb->leave($__internal_c6fdd894e8ad044a7ca00dbfb285f75147719ba3c2bd4d768fc754d62881aedb_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/app/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
