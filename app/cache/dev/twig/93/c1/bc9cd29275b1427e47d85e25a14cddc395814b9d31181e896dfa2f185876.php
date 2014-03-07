<?php

/* DevbGastosBundle::layout.html.twig */
class __TwigTemplate_93c1bc9cd29275b1427e47d85e25a14cddc395814b9d31181e896dfa2f185876 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_sidebar($context, array $blocks = array())
    {
        // line 5
        echo "    Sidebar content
";
    }

    public function getTemplateName()
    {
        return "DevbGastosBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 16,  51 => 14,  47 => 13,  43 => 11,  37 => 7,  35 => 6,  31 => 5,  28 => 4,);
    }
}
