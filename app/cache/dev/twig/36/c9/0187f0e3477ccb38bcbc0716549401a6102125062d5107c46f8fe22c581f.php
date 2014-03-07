<?php

/* ::base.html.twig */
class __TwigTemplate_36c90187f0e3477ccb38bcbc0716549401a6102125062d5107c46f8fe22c581f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navigation' => array($this, 'block_navigation'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!-- app/Resources/views/base.html.twig -->
<!DOCTYPE html>
<html lang=\"es\">
    <head>
    \t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        
        <title>DevBurgos - - Gestion de gastos - ";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "    </head>
    <body>
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t      \t\t";
        // line 21
        $this->displayBlock('navigation', $context, $blocks);
        // line 24
        echo "\t\t\t</div>
\t\t
\t\t\t<div class=\"row\" id=\"main-body\">
\t\t\t\t";
        // line 27
        $this->displayBlock('body', $context, $blocks);
        // line 28
        echo "\t\t\t</div>
\t\t\t
\t\t\t<div class=\"row\" id=\"footer\">
\t\t\t\t";
        // line 31
        $this->displayBlock('footer', $context, $blocks);
        // line 32
        echo "\t\t\t</div>
\t\t</div>
        ";
        // line 34
        $this->displayBlock('javascripts', $context, $blocks);
        // line 38
        echo "    </body>
</html>";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            
            <link rel=\"stylesheet\" href=\"//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css\">
\t\t\t<link rel=\"stylesheet\" href=\"//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css\">
        ";
    }

    // line 21
    public function block_navigation($context, array $blocks = array())
    {
        // line 22
        echo "\t      \t\t\t<a href=\"";
        echo $this->env->getExtension('routing')->getPath("devb_gastos_homepage");
        echo "\">Principal</a>
\t\t\t\t";
    }

    // line 27
    public function block_body($context, array $blocks = array())
    {
    }

    // line 31
    public function block_footer($context, array $blocks = array())
    {
    }

    // line 34
    public function block_javascripts($context, array $blocks = array())
    {
        // line 35
        echo "        \t<script src=\"//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js\"></script>
        \t<script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/devbgastos/js/jquery-1.11.0.min.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  117 => 36,  114 => 35,  111 => 34,  106 => 31,  101 => 27,  94 => 22,  91 => 21,  82 => 11,  79 => 10,  74 => 8,  69 => 38,  67 => 34,  63 => 32,  61 => 31,  56 => 28,  54 => 27,  49 => 24,  47 => 21,  41 => 17,  39 => 10,  34 => 8,  25 => 1,);
    }
}
