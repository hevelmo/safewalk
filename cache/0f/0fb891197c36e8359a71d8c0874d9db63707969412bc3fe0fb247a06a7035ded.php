<?php

/* home/_home.twig */
class __TwigTemplate_ebfec134ee7e4f28f416804d3bef64cf23051ee1ca5512c2fb83a91e283d46cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("super.twig", "home/_home.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_current' => array($this, 'block_content_current'),
            'script_load_js' => array($this, 'block_script_load_js'),
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
        echo "\t";
        $this->loadTemplate("home/_home.twig", "home/_home.twig", 4, "1976766801")->display($context);
    }

    // line 6
    public function block_script_load_js($context, array $blocks = array())
    {
        // line 7
        echo "\t";
        $this->loadTemplate("home/_home.twig", "home/_home.twig", 7, "2140258901")->display($context);
    }

    // line 9
    public function block_load_scripts($context, array $blocks = array())
    {
        // line 10
        echo "\tjagHome._init();
\tinit_hero_slider.hero_slider();
\t\$(window).on(\"scroll\", scrollHeader.init);
\ttoHtmlMethod.toHtml();
";
    }

    public function getTemplateName()
    {
        return "home/_home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 10,  53 => 9,  48 => 7,  45 => 6,  40 => 4,  37 => 3,  31 => 2,  11 => 1,);
    }
}


/* home/_home.twig */
class __TwigTemplate_ebfec134ee7e4f28f416804d3bef64cf23051ee1ca5512c2fb83a91e283d46cf_1976766801 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("home/slider.twig", "home/_home.twig", 4);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "home/slider.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "home/_home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 4,  56 => 10,  53 => 9,  48 => 7,  45 => 6,  40 => 4,  37 => 3,  31 => 2,  11 => 1,);
    }
}


/* home/_home.twig */
class __TwigTemplate_ebfec134ee7e4f28f416804d3bef64cf23051ee1ca5512c2fb83a91e283d46cf_2140258901 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 7
        $this->parent = $this->loadTemplate("super_loadjs.twig", "home/_home.twig", 7);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "super_loadjs.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "home/_home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 7,  88 => 4,  56 => 10,  53 => 9,  48 => 7,  45 => 6,  40 => 4,  37 => 3,  31 => 2,  11 => 1,);
    }
}
/* {% extends "super.twig" %}*/
/* {% block title %}{{ title }}{% endblock %}*/
/* {% block content_current %}*/
/* 	{% embed "home/slider.twig" %}{% endembed %}*/
/* {% endblock %}*/
/* {% block script_load_js %}*/
/* 	{% embed "super_loadjs.twig" %}{% endembed %}*/
/* {% endblock %}*/
/* {% block load_scripts %}*/
/* 	jagHome._init();*/
/* 	init_hero_slider.hero_slider();*/
/* 	$(window).on("scroll", scrollHeader.init);*/
/* 	toHtmlMethod.toHtml();*/
/* {% endblock %}*/
