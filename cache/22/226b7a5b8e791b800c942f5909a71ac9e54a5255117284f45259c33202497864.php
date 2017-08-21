<?php

/* 404/_404.twig */
class __TwigTemplate_97545abaa5f7b98822bf359046625d5b3ba45f9c023e1dee4858ff076bcb6c0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("super.twig", "404/_404.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_current' => array($this, 'block_content_current'),
            'load_scripts' => array($this, 'block_load_scripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "super.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
    }

    // line 3
    public function block_content_current($context, array $blocks = array())
    {
        // line 4
        echo "
";
    }

    // line 6
    public function block_load_scripts($context, array $blocks = array())
    {
        // line 7
        echo "\t\$(window).on(\"scroll\", scrollHeader.init);
";
    }

    public function getTemplateName()
    {
        return "404/_404.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 7,  44 => 6,  39 => 4,  36 => 3,  30 => 2,  11 => 1,);
    }
}
/* {% extends "super.twig" %}*/
/* {% block title %}{{ title }}{% endblock %}*/
/* {% block content_current %}*/
/* */
/* {% endblock %}*/
/* {% block load_scripts %}*/
/* 	$(window).on("scroll", scrollHeader.init);*/
/* {% endblock %}*/
