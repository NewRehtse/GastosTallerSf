<?php

/* DevbGastosBundle:Libretas:show.html.twig */
class __TwigTemplate_6fc677cebf168de02196c2fb9fb25f1ca80e790c10ee0efda708711a69a257c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("DevbGastosBundle::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DevbGastosBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "\t<h1>Libreta ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["libreta"]) ? $context["libreta"] : $this->getContext($context, "libreta")), "nombre"), "html", null, true);
        echo "</h1>
\t
\t";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["libreta"]) ? $context["libreta"] : $this->getContext($context, "libreta")), "descripcion"), "html", null, true);
        echo "
\t
\t
\t
\t";
        // line 10
        if (twig_test_empty($this->getAttribute((isset($context["libreta"]) ? $context["libreta"] : $this->getContext($context, "libreta")), "gastos"))) {
            // line 11
            echo "\t\t<div class=\"alert alert-info\">
\t\t\tNo hay gastos en esta libreta.
\t\t</div>
\t";
        }
        // line 15
        echo "\t<ul>
\t";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["libreta"]) ? $context["libreta"] : $this->getContext($context, "libreta")), "gastos"));
        foreach ($context['_seq'] as $context["_key"] => $context["gasto"]) {
            // line 17
            echo "\t\t<li>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gasto"]) ? $context["gasto"] : $this->getContext($context, "gasto")), "concepto"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gasto"]) ? $context["gasto"] : $this->getContext($context, "gasto")), "lugar"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gasto"]) ? $context["gasto"] : $this->getContext($context, "gasto")), "cantidad"), "html", null, true);
            echo " €</li>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gasto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "\t</ul>
\t
\t<a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("devb_gastos_libreta_add_gasto", array("libretaid" => $this->getAttribute((isset($context["libreta"]) ? $context["libreta"] : $this->getContext($context, "libreta")), "id"))), "html", null, true);
        echo "\" class=\"btn btn-primary\">Añadir gasto</a>
";
    }

    public function getTemplateName()
    {
        return "DevbGastosBundle:Libretas:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 21,  72 => 19,  59 => 17,  55 => 16,  52 => 15,  46 => 11,  44 => 10,  37 => 6,  31 => 4,  28 => 3,);
    }
}
