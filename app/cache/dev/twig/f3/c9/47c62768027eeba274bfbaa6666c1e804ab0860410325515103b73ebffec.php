<?php

/* DevbGastosBundle:Default:index.html.twig */
class __TwigTemplate_f3c947c62768027eeba274bfbaa6666c1e804ab0860410325515103b73ebffec extends Twig_Template
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
        echo "\t<h1>Libretas</h1>
\t
\t";
        // line 6
        if (twig_test_empty((isset($context["libretas"]) ? $context["libretas"] : $this->getContext($context, "libretas")))) {
            // line 7
            echo "\t\t<div class=\"alert alert-info\">
\t\t\tNo hay libretas de gastos creadas.
\t\t</div>
\t";
        }
        // line 11
        echo "\t
\t<ul>
\t";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["libretas"]) ? $context["libretas"] : $this->getContext($context, "libretas")));
        foreach ($context['_seq'] as $context["_key"] => $context["libreta"]) {
            // line 14
            echo "\t\t<li>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["libreta"]) ? $context["libreta"] : $this->getContext($context, "libreta")), "nombre"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["libreta"]) ? $context["libreta"] : $this->getContext($context, "libreta")), "descripcion"), "html", null, true);
            echo "</li>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['libreta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "\t</ul>
\t
\t<a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("devb_gastos_add_libreta");
        echo "\" class=\"btn btn-primary\">Añadir libreta</a>
";
    }

    public function getTemplateName()
    {
        return "DevbGastosBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 18,  62 => 16,  51 => 14,  47 => 13,  43 => 11,  37 => 7,  35 => 6,  31 => 4,  28 => 3,);
    }
}
