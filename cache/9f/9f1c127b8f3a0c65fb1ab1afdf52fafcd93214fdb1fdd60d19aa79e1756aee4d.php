<?php

/* super_navbar.twig */
class __TwigTemplate_0fb3a8502821018a7df902b6a1f31b75cd36a8b9a3dd7c8503bfa2f8a4c4aa0b extends Twig_Template
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
        // line 1
        echo "
<nav class=\"nav-1 header-scroll\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12\">
\t\t\t\t<div class=\"block-logo\">
\t\t\t\t\t<a href=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "\" class=\"home-link clearfix\" id=\"home_link\">
\t\t\t\t\t\t<img src=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "img/logo/logo.png\" alt=\"Logo\" class=\"logo\">
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"block-nav\">
\t\t\t\t\t<ul class=\"navi menu\" id=\"menu\">
\t\t\t\t\t\t<li class=\"navi-li li-top clearfix\">
\t\t\t\t\t\t\t<a href=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "\" id=\"home-link\" class=\"home\">
\t\t\t\t\t\t\t\t<span class=\"home\" id=\"home\">Inicio</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"navi-li li-top clearfix\">
\t\t\t\t\t\t\t<a href=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "nosotros\" id=\"about-link\" class=\"about\">
\t\t\t\t\t\t\t\t<span class=\"about\" id=\"about\">Nosotros</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"navi-li li-top clearfix\">
\t\t\t\t\t\t\t<a href=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "productos\" id=\"products-link\" class=\"products\">
\t\t\t\t\t\t\t\t<span class=\"products\" id=\"products\">Productos</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"navi-li li-top clearfix\">
\t\t\t\t\t\t\t<a href=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "servicios\" id=\"services-link\" class=\"services\">
\t\t\t\t\t\t\t\t<span class=\"services\" id=\"services\">Servicios</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"navi-li li-top clearfix\">
\t\t\t\t\t\t\t<a href=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "soporte\" id=\"support-link\" class=\"support\">
\t\t\t\t\t\t\t\t<span class=\"support\" id=\"support\">Soporte</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"navi-li li-top clearfix\">
\t\t\t\t\t\t\t<a href=\"";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "galeria\" id=\"gallery-link\" class=\"gallery\">
\t\t\t\t\t\t\t\t<span class=\"gallery\" id=\"gallery\">Galería</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"navi-li li-top clearfix\">
\t\t\t\t\t\t\t<a href=\"";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "contacto\" id=\"contact-link\" class=\"contact\">
\t\t\t\t\t\t\t\t<span class=\"contact\" id=\"contact\">Contacto</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"block-social-links\">
\t\t\t\t\t<ul class=\"social-links\">
\t\t\t\t\t\t";
        // line 56
        echo "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"mobile-toggle\">
\t\t<div class=\"bar-1\"></div>
\t\t<div class=\"bar-2\"></div>
\t</div>
</nav>
";
    }

    public function getTemplateName()
    {
        return "super_navbar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 56,  88 => 44,  80 => 39,  72 => 34,  64 => 29,  56 => 24,  48 => 19,  40 => 14,  31 => 8,  27 => 7,  19 => 1,);
    }
}
/* */
/* <nav class="nav-1 header-scroll">*/
/* 	<div class="container">*/
/* 		<div class="row">*/
/* 			<div class="col-xs-12">*/
/* 				<div class="block-logo">*/
/* 					<a href="{{ _host }}" class="home-link clearfix" id="home_link">*/
/* 						<img src="{{ _host }}img/logo/logo.png" alt="Logo" class="logo">*/
/* 					</a>*/
/* 				</div>*/
/* 				<div class="block-nav">*/
/* 					<ul class="navi menu" id="menu">*/
/* 						<li class="navi-li li-top clearfix">*/
/* 							<a href="{{ _host }}" id="home-link" class="home">*/
/* 								<span class="home" id="home">Inicio</span>*/
/* 							</a>*/
/* 						</li>*/
/* 						<li class="navi-li li-top clearfix">*/
/* 							<a href="{{ _host }}nosotros" id="about-link" class="about">*/
/* 								<span class="about" id="about">Nosotros</span>*/
/* 							</a>*/
/* 						</li>*/
/* 						<li class="navi-li li-top clearfix">*/
/* 							<a href="{{ _host }}productos" id="products-link" class="products">*/
/* 								<span class="products" id="products">Productos</span>*/
/* 							</a>*/
/* 						</li>*/
/* 						<li class="navi-li li-top clearfix">*/
/* 							<a href="{{ _host }}servicios" id="services-link" class="services">*/
/* 								<span class="services" id="services">Servicios</span>*/
/* 							</a>*/
/* 						</li>*/
/* 						<li class="navi-li li-top clearfix">*/
/* 							<a href="{{ _host }}soporte" id="support-link" class="support">*/
/* 								<span class="support" id="support">Soporte</span>*/
/* 							</a>*/
/* 						</li>*/
/* 						<li class="navi-li li-top clearfix">*/
/* 							<a href="{{ _host }}galeria" id="gallery-link" class="gallery">*/
/* 								<span class="gallery" id="gallery">Galería</span>*/
/* 							</a>*/
/* 						</li>*/
/* 						<li class="navi-li li-top clearfix">*/
/* 							<a href="{{ _host }}contacto" id="contact-link" class="contact">*/
/* 								<span class="contact" id="contact">Contacto</span>*/
/* 							</a>*/
/* 						</li>*/
/* 					</ul>*/
/* 				</div>*/
/* 				<div class="block-social-links">*/
/* 					<ul class="social-links">*/
/* 						{#<li><a href="http://www.facebook.com/JaguarGDLCountry" target="_blank"><i class="social_facebook"></i></a></li>*/
/* 						<li><a href="https://twitter.com/JaguarCarsGDL" target="_blank"><i class="social_twitter"></i></a></li>*/
/* 						<li><a href="https://www.youtube.com/channel/UCdRywhIb0Sc3diJ-4fuEypQ" target="_blank"><i class="social_youtube"></i></a></li>*/
/* 						<li><a href="https://instagram.com/jaguarguadalajara/" target="_blank"><i class="social_instagram"></i></a></li>#}*/
/* 					</ul>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="mobile-toggle">*/
/* 		<div class="bar-1"></div>*/
/* 		<div class="bar-2"></div>*/
/* 	</div>*/
/* </nav>*/
/* {# ONLY RESPONSIVE #}*/
/* */
