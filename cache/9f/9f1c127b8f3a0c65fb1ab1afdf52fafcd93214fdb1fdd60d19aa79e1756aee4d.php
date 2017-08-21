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
        $context["modelo"] = (isset($context["navpa"]) ? $context["navpa"] : null);
        // line 2
        echo "<nav class=\"nav-1 header-scroll\">
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
\t\t\t\t\t\t<li class=\"navi-li li-top vehicles clearfix\">
\t\t\t\t\t\t\t<a id=\"vehicles-link\" class=\"vehicles dropdown-toggle\">
\t\t\t\t\t\t\t\t<span class=\"car has-dropdown\" id=\"car\">Vehículos</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"model-select-block\">
\t\t\t\t\t\t\t\t<div class=\"inner-nav\">
\t\t\t\t\t\t\t\t\t<ul class=\"inner-model inner-menu\" role=\"menu\">
\t\t\t\t\t\t\t\t\t\t";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["modelo"]) ? $context["modelo"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["model"]) {
            // line 26
            echo "\t\t\t\t\t\t\t\t\t\t\t<li class=\"model-list\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["model"], "id", array()), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 27
            if ($this->getAttribute($this->getAttribute($context["model"], "url_externa", array()), "url_target", array())) {
                // line 28
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["model"], "url_externa", array()), "url_target", array()), "html", null, true);
                echo "\" id=\"model-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["model"], "key", array()), "html", null, true);
                echo "\" class=\"model-link\" target=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["model"], "target", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 30
            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            if ($this->getAttribute($this->getAttribute($context["model"], "url_interna", array()), "url_target", array())) {
                // line 31
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["model"], "url_interna", array()), "url_target", array()), "html", null, true);
                echo "\" id=\"model-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["model"], "key", array()), "html", null, true);
                echo "\" class=\"model-link\" target=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["model"], "target", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 33
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
            echo "img/thumbs/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["model"], "thumb", array()), "html", null, true);
            echo "\" width=\"130\" height=\"75\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["model"], "name", array()), "html", null, true);
            echo "\" class=\"model-image vehicle\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"model\">";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["model"], "name", array()), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['model'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "\t\t\t\t\t\t\t\t\t\t";
        // line 70
        echo "\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"navi-li li-top clearfix\">
\t\t\t\t\t\t\t<a href=\"";
        // line 75
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "news\" id=\"promos-link\" class=\"promos\">
\t\t\t\t\t\t\t\t<span class=\"promos\" id=\"promos\">News</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"navi-li li-top agencies clearfix\">
\t\t\t\t\t\t";
        // line 86
        echo "\t\t\t\t\t\t\t<a id=\"agencies-link\" class=\"dropdown-toggle\">
\t\t\t\t\t\t\t\t<span class=\"agencies has-dropdown\" id=\"agencie\">Servicio</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
        // line 91
        echo "\t\t\t\t\t\t\t\t\t";
        // line 107
        echo "\t\t\t\t\t\t\t\t\t<ul class=\"inner-agencie inner-menu\" role=\"menu\">
\t\t\t\t\t\t\t\t\t\t<li class=\"agencie-list\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 109
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "servicio\" id=\"agencie-gdl\" class=\"agencie-link\" data-agencie-key=\"servicio\" data-agencie-name=\"Servicio\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"agencie-title agencie\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"agencie\">Servicio</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"agencie-list\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 116
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "refacciones\" id=\"agencie-country\" class=\"agencie-link\" data-agencie-key=\"refacciones\" data-agencie-name=\"Refacciones\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"agencie-title agencie\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"agencie\">Refacciones</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t";
        // line 125
        echo "\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"navi-li li-top agencies clearfix\">
\t\t\t\t\t\t\t<a id=\"agencies-link\" class=\"dropdown-toggle\">
\t\t\t\t\t\t\t\t<span class=\"agencies has-dropdown\" id=\"agencie\">Agencias</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
        // line 132
        echo "\t\t\t\t\t\t\t\t\t<ul class=\"inner-agencie inner-menu\" role=\"menu\">
\t\t\t\t\t\t\t\t\t\t<li class=\"agencie-list\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 134
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "agencia/jaguar/guadalajara\" id=\"agencie-gdl\" class=\"agencie-link\" data-agencie-key=\"jaguar-guadalajara\" data-agencie-name=\"Jaguar Guadalajara\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"agencie-title agencie\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"agencie\">Jaguar Guadalajara</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"agencie-list\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 141
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "agencia/jaguar/country\" id=\"agencie-country\" class=\"agencie-link\" data-agencie-key=\"jaguar-country\" data-agencie-name=\"Jaguar Country\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"agencie-title agencie\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"agencie\">Jaguar Country</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"agencie-list\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 148
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "agenda/prueba-de-manejo\" id=\"euc-nav-schedule-test-drive\" class=\"agencie-link\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"agencie-title agencie\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"agencie\">Prueba de Manejo</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"agencie-list\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 155
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "financiamiento\" id=\"euc-nav-fiancing\" class=\"agencie-link\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"agencie-title agencie\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"agencie\">Financiamiento</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t";
        // line 164
        echo "\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"block-social-links\">
\t\t\t\t\t<ul class=\"social-links\">
\t\t\t\t\t\t<li><a href=\"http://www.facebook.com/JaguarGDLCountry\" target=\"_blank\"><i class=\"social_facebook\"></i></a></li>
\t\t\t\t\t\t<li><a href=\"https://twitter.com/JaguarCarsGDL\" target=\"_blank\"><i class=\"social_twitter\"></i></a></li>
\t\t\t\t\t\t<li><a href=\"https://www.youtube.com/channel/UCdRywhIb0Sc3diJ-4fuEypQ\" target=\"_blank\"><i class=\"social_youtube\"></i></a></li>
\t\t\t\t\t\t<li><a href=\"https://instagram.com/jaguarguadalajara/\" target=\"_blank\"><i class=\"social_instagram\"></i></a></li>
\t\t\t\t\t</ul>
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
        return array (  208 => 164,  198 => 155,  188 => 148,  178 => 141,  168 => 134,  164 => 132,  157 => 125,  147 => 116,  137 => 109,  133 => 107,  131 => 91,  126 => 86,  118 => 75,  111 => 70,  109 => 38,  99 => 34,  90 => 33,  79 => 31,  76 => 30,  66 => 28,  64 => 27,  59 => 26,  55 => 25,  41 => 14,  32 => 8,  28 => 7,  21 => 2,  19 => 1,);
    }
}
/* {% set modelo = navpa %}*/
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
/* 						<li class="navi-li li-top vehicles clearfix">*/
/* 							<a id="vehicles-link" class="vehicles dropdown-toggle">*/
/* 								<span class="car has-dropdown" id="car">Vehículos</span>*/
/* 							</a>*/
/* 							<div class="model-select-block">*/
/* 								<div class="inner-nav">*/
/* 									<ul class="inner-model inner-menu" role="menu">*/
/* 										{% for model in modelo %}*/
/* 											<li class="model-list" data-id="{{ model.id }}">*/
/* 												{% if model.url_externa.url_target %}*/
/* 													<a href="{{ model.url_externa.url_target }}" id="model-{{ model.key }}" class="model-link" target="{{ model.target }}">*/
/* 												{% endif %}*/
/* 												{% if model.url_interna.url_target %}*/
/* 													<a href="{{ _host }}{{ model.url_interna.url_target }}" id="model-{{ model.key }}" class="model-link" target="{{ model.target }}">*/
/* 												{% endif %}*/
/* 													<img src="{{ _host }}img/thumbs/{{ model.thumb }}" width="130" height="75" alt="{{ model.name }}" class="model-image vehicle">*/
/* 													<span class="model">{{ model.name }}</span>*/
/* 												</a>*/
/* 											</li>*/
/* 										{% endfor %}*/
/* 										{#*/
/* 										<li class="model-list">*/
/* 											<a href="http://www.jaguar-mexico.com/jaguar-range/xe/index.html" id="model-xe" class="model-link" target="_blank">*/
/* 												<img src="{{ _host }}img/thumbs/thumb-xe.png" width="130" height="75" alt="" class="model-image vehicle">*/
/* 												<span class="model">XE</span>*/
/* 											</a>*/
/* 										</li>*/
/* 										<li class="model-list">*/
/* 											<a href="{{ _host }}vehiculos/xf" id="model-xf" class="model-link">*/
/* 												<img src="{{ _host }}img/thumbs/thumb-xf-2011.png" width="130" height="75" alt="NA LR2 12MY" class="model-image vehicle">*/
/* 												<span class="model">XF</span>*/
/* 											</a>*/
/* 										</li>*/
/* 										<li class="model-list">*/
/* 											<a href="{{ _host }}vehiculos/xj" id="model-xj" class="model-link">*/
/* 												<img src="{{ _host }}img/thumbs/thumb-xj-2011.png" width="130" height="75" alt="12MY Discovery 4" class="model-image vehicle">*/
/* 												<span class="model">XJ</span>*/
/* 											</a>*/
/* 										</li>*/
/* 										<li class="model-list">*/
/* 											<a id="model-f-pace" href="http://www.jaguar-mexico.com/jaguar-range/f-pace/index.html" target="_blank" class="model-link">*/
/* 												<img src="{{ _host }}img/thumbs/thumb-f-pace.png" width="150" height="75" alt="12MY Discovery 4" class="model-image vehicle">*/
/* 												<span class="model">F-PACE</span>*/
/* 											</a>*/
/* 										</li>*/
/* 										<li class="model-list">*/
/* 											<a href="{{ _host }}vehiculos/f-type" id="model-ftype" class="model-link">*/
/* 												<img src="{{ _host }}img/thumbs/thumb-ftype.png" width="130" height="75" alt="range-rover-405-homepage-130x75" class="model-image vehicle">*/
/* 												<span class="model">F-TYPE</span>*/
/* 											</a>*/
/* 										</li>*/
/* 										#}*/
/* 									</ul>*/
/* 								</div>*/
/* 							</div>*/
/* 						</li>*/
/* 						<li class="navi-li li-top clearfix">*/
/* 							<a href="{{ _host }}news" id="promos-link" class="promos">*/
/* 								<span class="promos" id="promos">News</span>*/
/* 							</a>*/
/* 						</li>*/
/* 						<li class="navi-li li-top agencies clearfix">*/
/* 						{#*/
/* 						<li class="navi-li li-top clearfix">*/
/* 							<a href="{{ _host }}servicio" id="service-link" class="service">*/
/* 								<span class="service" id="service">Servicio	</span>*/
/* 							</a>*/
/* 							#}*/
/* 							<a id="agencies-link" class="dropdown-toggle">*/
/* 								<span class="agencies has-dropdown" id="agencie">Servicio</span>*/
/* 							</a>*/
/* 							{#<div class="agencies-select-block" style="display: none; visibility: visible">*/
/* 								<div class="inner-nav">#}*/
/* 									{#<ul class="inner-agencie inner-menu" role="menu">*/
/* 										<li class="agencie-list">*/
/* 											<a href="{{ _host }}servicio/jaguar/guadalajara" id="agencie-gdl" class="agencie-link" data-agencie-key="jaguar-guadalajara" data-agencie-name="Jaguar Guadalajara">*/
/* 												<div class="agencie-title agencie">*/
/* 													<span class="agencie">Jaguar Guadalajara</span>*/
/* 												</div>*/
/* 											</a>*/
/* 										</li>*/
/* 										<li class="agencie-list">*/
/* 											<a href="{{ _host }}servicio/jaguar/country" id="agencie-country" class="agencie-link" data-agencie-key="jaguar-country" data-agencie-name="Jaguar Country">*/
/* 												<div class="agencie-title agencie">*/
/* 													<span class="agencie">Jaguar Country</span>*/
/* 												</div>*/
/* 											</a>*/
/* 										</li>*/
/* 									</ul>#}*/
/* 									<ul class="inner-agencie inner-menu" role="menu">*/
/* 										<li class="agencie-list">*/
/* 											<a href="{{ _host }}servicio" id="agencie-gdl" class="agencie-link" data-agencie-key="servicio" data-agencie-name="Servicio">*/
/* 												<div class="agencie-title agencie">*/
/* 													<span class="agencie">Servicio</span>*/
/* 												</div>*/
/* 											</a>*/
/* 										</li>*/
/* 										<li class="agencie-list">*/
/* 											<a href="{{ _host }}refacciones" id="agencie-country" class="agencie-link" data-agencie-key="refacciones" data-agencie-name="Refacciones">*/
/* 												<div class="agencie-title agencie">*/
/* 													<span class="agencie">Refacciones</span>*/
/* 												</div>*/
/* 											</a>*/
/* 										</li>*/
/* 									</ul>*/
/* 								{#</div>*/
/* 							</div>#}*/
/* 						</li>*/
/* 						<li class="navi-li li-top agencies clearfix">*/
/* 							<a id="agencies-link" class="dropdown-toggle">*/
/* 								<span class="agencies has-dropdown" id="agencie">Agencias</span>*/
/* 							</a>*/
/* 							{#<div class="agencies-select-block" style="display: none; visibility: visible">*/
/* 								<div class="inner-nav">#}*/
/* 									<ul class="inner-agencie inner-menu" role="menu">*/
/* 										<li class="agencie-list">*/
/* 											<a href="{{ _host }}agencia/jaguar/guadalajara" id="agencie-gdl" class="agencie-link" data-agencie-key="jaguar-guadalajara" data-agencie-name="Jaguar Guadalajara">*/
/* 												<div class="agencie-title agencie">*/
/* 													<span class="agencie">Jaguar Guadalajara</span>*/
/* 												</div>*/
/* 											</a>*/
/* 										</li>*/
/* 										<li class="agencie-list">*/
/* 											<a href="{{ _host }}agencia/jaguar/country" id="agencie-country" class="agencie-link" data-agencie-key="jaguar-country" data-agencie-name="Jaguar Country">*/
/* 												<div class="agencie-title agencie">*/
/* 													<span class="agencie">Jaguar Country</span>*/
/* 												</div>*/
/* 											</a>*/
/* 										</li>*/
/* 										<li class="agencie-list">*/
/* 											<a href="{{ _host }}agenda/prueba-de-manejo" id="euc-nav-schedule-test-drive" class="agencie-link">*/
/* 												<div class="agencie-title agencie">*/
/* 													<span class="agencie">Prueba de Manejo</span>*/
/* 												</div>*/
/* 											</a>*/
/* 										</li>*/
/* 										<li class="agencie-list">*/
/* 											<a href="{{ _host }}financiamiento" id="euc-nav-fiancing" class="agencie-link">*/
/* 												<div class="agencie-title agencie">*/
/* 													<span class="agencie">Financiamiento</span>*/
/* 												</div>*/
/* 											</a>*/
/* 										</li>*/
/* 									</ul>*/
/* 								{#</div>*/
/* 							</div>#}*/
/* 						</li>*/
/* 					</ul>*/
/* 				</div>*/
/* 				<div class="block-social-links">*/
/* 					<ul class="social-links">*/
/* 						<li><a href="http://www.facebook.com/JaguarGDLCountry" target="_blank"><i class="social_facebook"></i></a></li>*/
/* 						<li><a href="https://twitter.com/JaguarCarsGDL" target="_blank"><i class="social_twitter"></i></a></li>*/
/* 						<li><a href="https://www.youtube.com/channel/UCdRywhIb0Sc3diJ-4fuEypQ" target="_blank"><i class="social_youtube"></i></a></li>*/
/* 						<li><a href="https://instagram.com/jaguarguadalajara/" target="_blank"><i class="social_instagram"></i></a></li>*/
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
