<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_387f9c2b00931b70ea50633657aa808e0349c2164cda894bae2f47208dfd577c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c4dee2435d795a1b84d343beab0fedf8f28334fb13c36ef76b864c7963d2cb0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4dee2435d795a1b84d343beab0fedf8f28334fb13c36ef76b864c7963d2cb0c->enter($__internal_c4dee2435d795a1b84d343beab0fedf8f28334fb13c36ef76b864c7963d2cb0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_97f168875fb5915bdc24117bb8cff6a676f006d053f659330962790aae723fa6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97f168875fb5915bdc24117bb8cff6a676f006d053f659330962790aae723fa6->enter($__internal_97f168875fb5915bdc24117bb8cff6a676f006d053f659330962790aae723fa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4dee2435d795a1b84d343beab0fedf8f28334fb13c36ef76b864c7963d2cb0c->leave($__internal_c4dee2435d795a1b84d343beab0fedf8f28334fb13c36ef76b864c7963d2cb0c_prof);

        
        $__internal_97f168875fb5915bdc24117bb8cff6a676f006d053f659330962790aae723fa6->leave($__internal_97f168875fb5915bdc24117bb8cff6a676f006d053f659330962790aae723fa6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d990653eefeae7616a905cfa08fc7b524ee0f8311ced761893ea2f107a9274a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d990653eefeae7616a905cfa08fc7b524ee0f8311ced761893ea2f107a9274a6->enter($__internal_d990653eefeae7616a905cfa08fc7b524ee0f8311ced761893ea2f107a9274a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_62863001e97ca2a9716211c023fc5371840cf03bb1c8ef0291cf4c8c2f8b9a7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62863001e97ca2a9716211c023fc5371840cf03bb1c8ef0291cf4c8c2f8b9a7e->enter($__internal_62863001e97ca2a9716211c023fc5371840cf03bb1c8ef0291cf4c8c2f8b9a7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_62863001e97ca2a9716211c023fc5371840cf03bb1c8ef0291cf4c8c2f8b9a7e->leave($__internal_62863001e97ca2a9716211c023fc5371840cf03bb1c8ef0291cf4c8c2f8b9a7e_prof);

        
        $__internal_d990653eefeae7616a905cfa08fc7b524ee0f8311ced761893ea2f107a9274a6->leave($__internal_d990653eefeae7616a905cfa08fc7b524ee0f8311ced761893ea2f107a9274a6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/app/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
