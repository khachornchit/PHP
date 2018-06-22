<?php

/* AppBundle:product:overview.html.twig */
class __TwigTemplate_19c94c8c0da4e13ed06117cec7865fa63f8da599e074704d3467670879f3fb42 extends Twig_Template
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
        $__internal_d2ef4251c48bef140140f294f72aa1a8efb92764f6b5518c610e15f882050be3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2ef4251c48bef140140f294f72aa1a8efb92764f6b5518c610e15f882050be3->enter($__internal_d2ef4251c48bef140140f294f72aa1a8efb92764f6b5518c610e15f882050be3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:product:overview.html.twig"));

        $__internal_a6887cef2ce2a0a35a2db6fc9def6fa9199d9a09b18bcbe5cf06742ba1c1a5c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6887cef2ce2a0a35a2db6fc9def6fa9199d9a09b18bcbe5cf06742ba1c1a5c1->enter($__internal_a6887cef2ce2a0a35a2db6fc9def6fa9199d9a09b18bcbe5cf06742ba1c1a5c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:product:overview.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Product</title>
</head>
<body>
<h1>Product overview</h1>

<form action=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_add");
        echo "\" method=\"POST\">
    <label for=\"name\">Name : </label>
    <input type=\"text\" name=\"name\"><br>

    <label for=\"sku\">SKU : </label>
    <input type=\"text\" name=\"sku\"><br>

    <label for=\"price\">Price : </label>
    <input type=\"number\" name=\"price\"><br>

    <input type=\"submit\" name=\"btnAdd\"><br>
</form>

";
        // line 23
        if ((twig_length_filter($this->env, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new Twig_Error_Runtime('Variable "products" does not exist.', 23, $this->getSourceContext()); })())) == 0)) {
            // line 24
            echo "    <h3>No product found!</h3>
";
        }
        // line 26
        echo "<ul>
    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new Twig_Error_Runtime('Variable "products" does not exist.', 27, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 28
            echo "        <li>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "name", array()), "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["product"], "price", array()), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "</ul>
</body>
</html>";
        
        $__internal_d2ef4251c48bef140140f294f72aa1a8efb92764f6b5518c610e15f882050be3->leave($__internal_d2ef4251c48bef140140f294f72aa1a8efb92764f6b5518c610e15f882050be3_prof);

        
        $__internal_a6887cef2ce2a0a35a2db6fc9def6fa9199d9a09b18bcbe5cf06742ba1c1a5c1->leave($__internal_a6887cef2ce2a0a35a2db6fc9def6fa9199d9a09b18bcbe5cf06742ba1c1a5c1_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:product:overview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 30,  65 => 28,  61 => 27,  58 => 26,  54 => 24,  52 => 23,  36 => 10,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Product</title>
</head>
<body>
<h1>Product overview</h1>

<form action=\"{{ path('product_add') }}\" method=\"POST\">
    <label for=\"name\">Name : </label>
    <input type=\"text\" name=\"name\"><br>

    <label for=\"sku\">SKU : </label>
    <input type=\"text\" name=\"sku\"><br>

    <label for=\"price\">Price : </label>
    <input type=\"number\" name=\"price\"><br>

    <input type=\"submit\" name=\"btnAdd\"><br>
</form>

{% if products|length == 0 %}
    <h3>No product found!</h3>
{% endif %}
<ul>
    {% for product in products %}
        <li>{{ product.name }} : {{ product.price }}</li>
    {% endfor %}
</ul>
</body>
</html>", "AppBundle:product:overview.html.twig", "/app/src/AppBundle/Resources/views/product/overview.html.twig");
    }
}
