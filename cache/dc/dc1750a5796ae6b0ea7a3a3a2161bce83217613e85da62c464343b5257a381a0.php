<?php

/* super.twig */
class __TwigTemplate_b6a39e85773365aebd07144eae3e53af2090375a93486c5a90a7ce206d2ae32a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'facebook_tag' => array($this, 'block_facebook_tag'),
            'title' => array($this, 'block_title'),
            'links' => array($this, 'block_links'),
            'head_scripts' => array($this, 'block_head_scripts'),
            'current_master' => array($this, 'block_current_master'),
            'content_current' => array($this, 'block_content_current'),
            'script_load_js' => array($this, 'block_script_load_js'),
            'body_scripts' => array($this, 'block_body_scripts'),
            'load_scripts' => array($this, 'block_load_scripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang=\"es-MX\" class=\"no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html lang=\"es-MX\" class=\"no-js lt-ie10 lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html lang=\"es-MX\" class=\"no-js lt-ie10 lt-ie9\"> <![endif]-->
<!--[if IE 9]>         <html lang=\"es-MX\" class=\"no-js lt-ie10\"> <![endif]-->
\t<html class=\"no-js\" lang=\"es\">
\t\t<head>
\t\t\t";
        // line 9
        $this->displayBlock('head', $context, $blocks);
        // line 43
        echo "
\t\t\t<title>
\t\t\t\t";
        // line 45
        $this->displayBlock('title', $context, $blocks);
        // line 48
        echo "\t\t\t</title>
\t\t\t
\t\t\t";
        // line 50
        $this->displayBlock('links', $context, $blocks);
        // line 61
        echo "\t\t\t<!--[if lt IE 9]>
\t\t\t\t<script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
\t\t\t<![endif]-->
\t\t\t";
        // line 64
        $this->displayBlock('head_scripts', $context, $blocks);
        // line 115
        echo "            <!-- Facebook Pixel Code -->
\t\t\t<script>
\t\t\t\t!function(f,b,e,v,n,t,s)
\t\t\t\t{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
\t\t\t\tn.callMethod.apply(n,arguments):n.queue.push(arguments)};
\t\t\t\tif(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
\t\t\t\tn.queue=[];t=b.createElement(e);t.async=!0;
\t\t\t\tt.src=v;s=b.getElementsByTagName(e)[0];
\t\t\t\ts.parentNode.insertBefore(t,s)}(window,document,'script',
\t\t\t\t'https://connect.facebook.net/en_US/fbevents.js');
\t\t\t \tfbq('init', '388345931302119'); 
\t\t\t\tfbq('track', 'PageView');
\t\t\t</script>
\t\t\t<noscript>
\t\t \t\t<img height=\"1\" width=\"1\" src=\"https://www.facebook.com/tr?id=388345931302119&ev=PageView &noscript=1\"/>
\t\t\t</noscript>
\t\t\t<!-- End Facebook Pixel Code -->
\t\t</head>
\t\t<body id=\"index\">
\t\t\t";
        // line 134
        $this->displayBlock('current_master', $context, $blocks);
        // line 145
        echo "\t\t\t
\t\t\t";
        // line 147
        echo "\t\t\t<div class=\"nav-container\">
\t\t\t\t";
        // line 148
        $this->loadTemplate("super.twig", "super.twig", 148, "108601006")->display($context);
        // line 149
        echo "\t\t\t</div>
\t\t\t";
        // line 151
        echo "\t\t\t<div class=\"main-container\" id=\"header\">
\t\t\t\t";
        // line 153
        echo "\t\t\t    <div class=\"wrapper_content_interactive\" id='content-temporal-interactive'>
\t\t\t\t    <main class=\"cd-main-content\">
\t\t\t\t    \t";
        // line 155
        $this->displayBlock('content_current', $context, $blocks);
        // line 156
        echo "\t\t\t\t    \t";
        $this->displayBlock('script_load_js', $context, $blocks);
        // line 157
        echo "\t\t\t\t    </main>
\t\t\t    </div>
\t\t\t    <div></div>
\t\t\t    ";
        // line 161
        echo "\t\t    \t<footer class=\"footer-6\">
\t\t\t\t\t";
        // line 162
        $this->loadTemplate("super.twig", "super.twig", 162, "1388921140")->display($context);
        // line 163
        echo "\t\t\t    </div>
\t\t\t</div>
\t\t\t";
        // line 168
        echo "\t        ";
        $this->displayBlock('body_scripts', $context, $blocks);
        // line 185
        echo "\t        
\t        <script>";
        // line 186
        $this->displayBlock('load_scripts', $context, $blocks);
        echo "</script>
\t\t</body>
\t</html>\t
";
    }

    // line 9
    public function block_head($context, array $blocks = array())
    {
        // line 10
        echo "\t\t\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=EmulateIE7\" />
\t\t\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
\t\t\t\t<meta http-equiv='cache-control' content='no-cache' />
\t\t\t\t<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
\t\t\t\t<meta name='viewport' content='width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0' />

\t\t\t\t<meta name=\"title\" content=\"JAGUAR GUADALAJARA\">
\t\t\t\t<meta name=\"identifier-url\" content=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "\" />
\t\t\t\t<meta name=\"keywords\" content=\"Jaguar, Land Rover. Seminuevos Premium, Eurocavsa\" />
\t\t\t\t<meta name=\"author\" content=\"JAGUAR GUADALAJARA\" />
\t\t\t\t<meta name=\"language\" content=\"ES\" />
\t\t\t\t<meta name=\"copyright\" content=\"© 2016 JAGUAR GUADALAJARA, How Alive are you?.\" />
\t\t\t\t
\t\t\t\t<meta name=\"robots\" content=\"index, follow\">
\t\t\t\t<meta name=\"googlebot\" content=\"robots.txt\">

\t\t\t\t<meta itemprop=\"image\" content=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "img/logo/logo_jaguar.png\">

\t\t\t\t<meta itemprop=\"name\" content=\"JAGUAR GUADALAJARA\"/>
\t\t\t\t<meta itemprop=\"description\" content=\"Autos Jaguar Guadalajara, The Art of Performance. Conoce nuestra gama de autos de lujo, XE, XF, XJ, F-TYPE, F-PACE.\"/>
\t\t\t\t<meta itemprop=\"image\" content=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "img/logo/logo.png\"/>

\t\t\t\t<meta property=\"business:contact_data:website\" content=\"";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "\"/>
\t\t\t\t";
        // line 33
        $this->displayBlock('facebook_tag', $context, $blocks);
        // line 42
        echo "\t\t\t";
    }

    // line 33
    public function block_facebook_tag($context, array $blocks = array())
    {
        // line 34
        echo "\t\t\t\t\t<!-- sample fb meta -->
\t\t\t\t\t<meta property=\"og:title\" content=\"";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["tag_name_default"]) ? $context["tag_name_default"] : null), "html", null, true);
        echo "\" />
\t\t\t\t\t<meta property=\"og:type\" content=\"website\" />
\t\t\t\t\t<meta property=\"og:image:type\" content=\" ";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["tag_content_type"]) ? $context["tag_content_type"] : null), "html", null, true);
        echo "\" />
\t\t\t\t\t<meta property=\"og:image\" content=\"";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["tag_image_default"]) ? $context["tag_image_default"] : null), "html", null, true);
        echo "\" />
\t\t\t\t\t<meta property=\"og:description\" content=\"";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["tag_description"]) ? $context["tag_description"] : null), "html", null, true);
        echo "\"/>
\t\t\t\t\t<meta property=\"og:site_name\" content=\"";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["tag_site_name"]) ? $context["tag_site_name"] : null), "html", null, true);
        echo "\" />
\t\t\t\t";
    }

    // line 45
    public function block_title($context, array $blocks = array())
    {
        // line 46
        echo "\t\t\t\t\tJAGUAR GUADALAJARA
\t\t\t\t";
    }

    // line 50
    public function block_links($context, array $blocks = array())
    {
        // line 51
        echo "                <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "css/styles.css\">
                <link rel=\"stylesheet\" href=\"";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "css/responsive.css\">
                
\t\t\t\t";
        // line 57
        echo "                <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700|Droid+Serif' rel='stylesheet' type='text/css'>
\t\t\t\t<link href=\"http://fonts.googleapis.com/css?family=Roboto:100,400,300,700,400italic,500%7CMontserrat:400,700\" rel=\"stylesheet\" type=\"text/css\">
\t\t\t\t<link rel=\"shortcut icon\" href=\"";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "img/ico/jaguar.ico\">
\t\t\t";
    }

    // line 64
    public function block_head_scripts($context, array $blocks = array())
    {
        // line 65
        echo "                <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
                <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
                <!--[if lt IE 9]>
                    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
                    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
                <![endif]-->
                <script>
                    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
\t\t\t\t\t(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
\t\t\t\t\tm=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
\t\t\t\t\t})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

\t\t\t\t\tga('create', 'UA-60846439-3', 'auto');
\t\t\t\t\tga('send', 'pageview');
                </script>
                <script>
\t\t\t\t    var nav = navigator.appName;

\t\t\t\t    if(nav == \"Microsoft Internet Explorer\"){
\t\t\t\t    \t// Detectamos si nos visitan desde IE
\t\t\t\t\t    if(nav == \"Microsoft Internet Explorer\"){
\t\t\t\t\t        // Convertimos en minusculas la cadena que devuelve userAgent
\t\t\t\t\t        var ie = navigator.userAgent.toLowerCase();
\t\t\t\t\t        // Extraemos de la cadena la version de IE
\t\t\t\t\t        var version = parseInt(ie.split('msie')[1]);

\t\t\t\t\t        // Dependiendo de la version mostramos un resultado
\t\t\t\t\t        switch(version){
\t\t\t\t\t            case 6:
\t\t\t\t\t                alert(\"Estas usando IE 6, es obsoleto. \\n Para una visualización optima del sitio, te recomendamos utilizar \\n lo más nuevo en navegadores Google Chrome, Mozilla FireFox, Internet Explorer a partir de las versiones v9, v10 y v11 \");
\t\t\t\t\t                break;
\t\t\t\t\t            case 7:
\t\t\t\t\t                alert(\"Estas usando IE 7, es obsoleto \\n Para una visualización optima del sitio, te recomendamos utilizar \\n lo más nuevo en navegadores Google Chrome, Mozilla FireFox, Internet Explorer a partir de las versiones v9, v10 y v11 \");
\t\t\t\t\t                break;
\t\t\t\t\t            case 8:
\t\t\t\t\t                alert(\"Estas usando IE 8, es obsoleto \\n Para una visualización optima del sitio, te recomendamos utilizar \\n lo más nuevo en navegadores Google Chrome, Mozilla FireFox, Internet Explorer a partir de las versiones v9, v10 y v11 \");
\t\t\t\t\t                break;
\t\t\t\t\t            /*case 9:
\t\t\t\t\t            \talert(\"Para una visualización optima del sitio, te recomendamos utilizar \\n lo más nuevo en navegadores Google Chrome, Mozilla FireFox, Internet Explorer a partir de las versiones v10 y v11 \");
\t\t\t\t\t                console.log(\"Estas usando IE 9, mas o menos compatible\");
\t\t\t\t\t                break;*/
\t\t\t\t\t            default:
\t\t\t\t\t                console.log(\"Usas una version compatible\");
\t\t\t\t\t                break;
\t\t\t\t\t        }
\t\t\t\t\t    }
\t\t\t\t    }
\t\t\t\t</script>
\t\t\t\t<script src=\"";
        // line 113
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "lib/assets/modernizr.js\"></script>
            ";
    }

    // line 134
    public function block_current_master($context, array $blocks = array())
    {
        echo "\t\t\t    
\t\t\t\t";
        // line 136
        echo "\t\t\t\t<input id=\"master-host\" type=\"hidden\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "\">
\t\t\t\t";
        // line 138
        echo "\t\t\t\t<input id=\"master-max\" type=\"hidden\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["_max"]) ? $context["_max"] : null), "html", null, true);
        echo "\">
\t\t\t\t
\t\t\t\t";
        // line 141
        echo "\t\t        <div id=\"hidden-inputs-session\"></div>
\t\t        ";
        // line 143
        echo "\t\t        <div id=\"hidden-inputs-temporal\"></div>
\t\t\t";
    }

    // line 155
    public function block_content_current($context, array $blocks = array())
    {
    }

    // line 156
    public function block_script_load_js($context, array $blocks = array())
    {
    }

    // line 168
    public function block_body_scripts($context, array $blocks = array())
    {
        // line 169
        echo "\t            ";
        // line 170
        echo "\t            ";
        // line 172
        echo "\t            <script src=\"";
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "lib/min/core.lib.min.js\"></script>

\t            ";
        // line 175
        echo "\t            <script type=\"text/javascript\" src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCCqo-F2TnMAABZvfV5yTQLlWvUCJlJViU&amp;sensor=false\"></script>
\t\t            <script src=\"";
        // line 176
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "js/min/core.min.js\"></script>
\t            ";
        // line 184
        echo "\t        ";
    }

    // line 186
    public function block_load_scripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "super.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  356 => 186,  352 => 184,  348 => 176,  345 => 175,  339 => 172,  337 => 170,  335 => 169,  332 => 168,  327 => 156,  322 => 155,  317 => 143,  314 => 141,  308 => 138,  303 => 136,  298 => 134,  292 => 113,  242 => 65,  239 => 64,  233 => 59,  229 => 57,  224 => 52,  219 => 51,  216 => 50,  211 => 46,  208 => 45,  202 => 40,  198 => 39,  194 => 38,  190 => 37,  185 => 35,  182 => 34,  179 => 33,  175 => 42,  173 => 33,  169 => 32,  164 => 30,  157 => 26,  145 => 17,  136 => 10,  133 => 9,  125 => 186,  122 => 185,  119 => 168,  115 => 163,  113 => 162,  110 => 161,  105 => 157,  102 => 156,  100 => 155,  96 => 153,  93 => 151,  90 => 149,  88 => 148,  85 => 147,  82 => 145,  80 => 134,  59 => 115,  57 => 64,  52 => 61,  50 => 50,  46 => 48,  44 => 45,  40 => 43,  38 => 9,  29 => 2,);
    }
}


/* super.twig */
class __TwigTemplate_b6a39e85773365aebd07144eae3e53af2090375a93486c5a90a7ce206d2ae32a_108601006 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 148
        $this->parent = $this->loadTemplate("super_navbar.twig", "super.twig", 148);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "super_navbar.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "super.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  385 => 148,  356 => 186,  352 => 184,  348 => 176,  345 => 175,  339 => 172,  337 => 170,  335 => 169,  332 => 168,  327 => 156,  322 => 155,  317 => 143,  314 => 141,  308 => 138,  303 => 136,  298 => 134,  292 => 113,  242 => 65,  239 => 64,  233 => 59,  229 => 57,  224 => 52,  219 => 51,  216 => 50,  211 => 46,  208 => 45,  202 => 40,  198 => 39,  194 => 38,  190 => 37,  185 => 35,  182 => 34,  179 => 33,  175 => 42,  173 => 33,  169 => 32,  164 => 30,  157 => 26,  145 => 17,  136 => 10,  133 => 9,  125 => 186,  122 => 185,  119 => 168,  115 => 163,  113 => 162,  110 => 161,  105 => 157,  102 => 156,  100 => 155,  96 => 153,  93 => 151,  90 => 149,  88 => 148,  85 => 147,  82 => 145,  80 => 134,  59 => 115,  57 => 64,  52 => 61,  50 => 50,  46 => 48,  44 => 45,  40 => 43,  38 => 9,  29 => 2,);
    }
}


/* super.twig */
class __TwigTemplate_b6a39e85773365aebd07144eae3e53af2090375a93486c5a90a7ce206d2ae32a_1388921140 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 162
        $this->parent = $this->loadTemplate("super_footer.twig", "super.twig", 162);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "super_footer.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "super.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  425 => 162,  385 => 148,  356 => 186,  352 => 184,  348 => 176,  345 => 175,  339 => 172,  337 => 170,  335 => 169,  332 => 168,  327 => 156,  322 => 155,  317 => 143,  314 => 141,  308 => 138,  303 => 136,  298 => 134,  292 => 113,  242 => 65,  239 => 64,  233 => 59,  229 => 57,  224 => 52,  219 => 51,  216 => 50,  211 => 46,  208 => 45,  202 => 40,  198 => 39,  194 => 38,  190 => 37,  185 => 35,  182 => 34,  179 => 33,  175 => 42,  173 => 33,  169 => 32,  164 => 30,  157 => 26,  145 => 17,  136 => 10,  133 => 9,  125 => 186,  122 => 185,  119 => 168,  115 => 163,  113 => 162,  110 => 161,  105 => 157,  102 => 156,  100 => 155,  96 => 153,  93 => 151,  90 => 149,  88 => 148,  85 => 147,  82 => 145,  80 => 134,  59 => 115,  57 => 64,  52 => 61,  50 => 50,  46 => 48,  44 => 45,  40 => 43,  38 => 9,  29 => 2,);
    }
}
/* {#{% spaceless %} #}*/
/* <!DOCTYPE html>*/
/* <!--[if lt IE 7]>      <html lang="es-MX" class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7"> <![endif]-->*/
/* <!--[if IE 7]>         <html lang="es-MX" class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->*/
/* <!--[if IE 8]>         <html lang="es-MX" class="no-js lt-ie10 lt-ie9"> <![endif]-->*/
/* <!--[if IE 9]>         <html lang="es-MX" class="no-js lt-ie10"> <![endif]-->*/
/* 	<html class="no-js" lang="es">*/
/* 		<head>*/
/* 			{% block head %}*/
/* 				<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />*/
/* 				<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">*/
/* 				<meta http-equiv='cache-control' content='no-cache' />*/
/* 				<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>*/
/* 				<meta name='viewport' content='width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0' />*/
/* */
/* 				<meta name="title" content="JAGUAR GUADALAJARA">*/
/* 				<meta name="identifier-url" content="{{ _host }}" />*/
/* 				<meta name="keywords" content="Jaguar, Land Rover. Seminuevos Premium, Eurocavsa" />*/
/* 				<meta name="author" content="JAGUAR GUADALAJARA" />*/
/* 				<meta name="language" content="ES" />*/
/* 				<meta name="copyright" content="© 2016 JAGUAR GUADALAJARA, How Alive are you?." />*/
/* 				*/
/* 				<meta name="robots" content="index, follow">*/
/* 				<meta name="googlebot" content="robots.txt">*/
/* */
/* 				<meta itemprop="image" content="{{ _host }}img/logo/logo_jaguar.png">*/
/* */
/* 				<meta itemprop="name" content="JAGUAR GUADALAJARA"/>*/
/* 				<meta itemprop="description" content="Autos Jaguar Guadalajara, The Art of Performance. Conoce nuestra gama de autos de lujo, XE, XF, XJ, F-TYPE, F-PACE."/>*/
/* 				<meta itemprop="image" content="{{ _host }}img/logo/logo.png"/>*/
/* */
/* 				<meta property="business:contact_data:website" content="{{ _host }}"/>*/
/* 				{% block facebook_tag %}*/
/* 					<!-- sample fb meta -->*/
/* 					<meta property="og:title" content="{{ tag_name_default }}" />*/
/* 					<meta property="og:type" content="website" />*/
/* 					<meta property="og:image:type" content=" {{ tag_content_type }}" />*/
/* 					<meta property="og:image" content="{{ tag_image_default }}" />*/
/* 					<meta property="og:description" content="{{ tag_description }}"/>*/
/* 					<meta property="og:site_name" content="{{ tag_site_name }}" />*/
/* 				{% endblock %}*/
/* 			{% endblock %}*/
/* */
/* 			<title>*/
/* 				{% block title %}*/
/* 					JAGUAR GUADALAJARA*/
/* 				{% endblock %}*/
/* 			</title>*/
/* 			*/
/* 			{% block links %}*/
/*                 <link rel="stylesheet" href="{{ _host }}css/styles.css">*/
/*                 <link rel="stylesheet" href="{{ _host }}css/responsive.css">*/
/*                 */
/* 				{#*/
/*                 <link rel="stylesheet" href="{{ _host }}css/styles.min.css">*/
/*                 #}*/
/*                 <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700|Droid+Serif' rel='stylesheet' type='text/css'>*/
/* 				<link href="http://fonts.googleapis.com/css?family=Roboto:100,400,300,700,400italic,500%7CMontserrat:400,700" rel="stylesheet" type="text/css">*/
/* 				<link rel="shortcut icon" href="{{ _host }}img/ico/jaguar.ico">*/
/* 			{% endblock %}*/
/* 			<!--[if lt IE 9]>*/
/* 				<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>*/
/* 			<![endif]-->*/
/* 			{% block head_scripts %}*/
/*                 <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->*/
/*                 <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*                 <!--[if lt IE 9]>*/
/*                     <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>*/
/*                     <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>*/
/*                 <![endif]-->*/
/*                 <script>*/
/*                     (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){*/
/* 					(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),*/
/* 					m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)*/
/* 					})(window,document,'script','//www.google-analytics.com/analytics.js','ga');*/
/* */
/* 					ga('create', 'UA-60846439-3', 'auto');*/
/* 					ga('send', 'pageview');*/
/*                 </script>*/
/*                 <script>*/
/* 				    var nav = navigator.appName;*/
/* */
/* 				    if(nav == "Microsoft Internet Explorer"){*/
/* 				    	// Detectamos si nos visitan desde IE*/
/* 					    if(nav == "Microsoft Internet Explorer"){*/
/* 					        // Convertimos en minusculas la cadena que devuelve userAgent*/
/* 					        var ie = navigator.userAgent.toLowerCase();*/
/* 					        // Extraemos de la cadena la version de IE*/
/* 					        var version = parseInt(ie.split('msie')[1]);*/
/* */
/* 					        // Dependiendo de la version mostramos un resultado*/
/* 					        switch(version){*/
/* 					            case 6:*/
/* 					                alert("Estas usando IE 6, es obsoleto. \n Para una visualización optima del sitio, te recomendamos utilizar \n lo más nuevo en navegadores Google Chrome, Mozilla FireFox, Internet Explorer a partir de las versiones v9, v10 y v11 ");*/
/* 					                break;*/
/* 					            case 7:*/
/* 					                alert("Estas usando IE 7, es obsoleto \n Para una visualización optima del sitio, te recomendamos utilizar \n lo más nuevo en navegadores Google Chrome, Mozilla FireFox, Internet Explorer a partir de las versiones v9, v10 y v11 ");*/
/* 					                break;*/
/* 					            case 8:*/
/* 					                alert("Estas usando IE 8, es obsoleto \n Para una visualización optima del sitio, te recomendamos utilizar \n lo más nuevo en navegadores Google Chrome, Mozilla FireFox, Internet Explorer a partir de las versiones v9, v10 y v11 ");*/
/* 					                break;*/
/* 					            /*case 9:*/
/* 					            	alert("Para una visualización optima del sitio, te recomendamos utilizar \n lo más nuevo en navegadores Google Chrome, Mozilla FireFox, Internet Explorer a partir de las versiones v10 y v11 ");*/
/* 					                console.log("Estas usando IE 9, mas o menos compatible");*/
/* 					                break;*//* */
/* 					            default:*/
/* 					                console.log("Usas una version compatible");*/
/* 					                break;*/
/* 					        }*/
/* 					    }*/
/* 				    }*/
/* 				</script>*/
/* 				<script src="{{ _host }}lib/assets/modernizr.js"></script>*/
/*             {% endblock %}*/
/*             <!-- Facebook Pixel Code -->*/
/* 			<script>*/
/* 				!function(f,b,e,v,n,t,s)*/
/* 				{if(f.fbq)return;n=f.fbq=function(){n.callMethod?*/
/* 				n.callMethod.apply(n,arguments):n.queue.push(arguments)};*/
/* 				if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';*/
/* 				n.queue=[];t=b.createElement(e);t.async=!0;*/
/* 				t.src=v;s=b.getElementsByTagName(e)[0];*/
/* 				s.parentNode.insertBefore(t,s)}(window,document,'script',*/
/* 				'https://connect.facebook.net/en_US/fbevents.js');*/
/* 			 	fbq('init', '388345931302119'); */
/* 				fbq('track', 'PageView');*/
/* 			</script>*/
/* 			<noscript>*/
/* 		 		<img height="1" width="1" src="https://www.facebook.com/tr?id=388345931302119&ev=PageView &noscript=1"/>*/
/* 			</noscript>*/
/* 			<!-- End Facebook Pixel Code -->*/
/* 		</head>*/
/* 		<body id="index">*/
/* 			{% block current_master %}			    */
/* 				{# Auxiliar Master Host #}*/
/* 				<input id="master-host" type="hidden" value="{{ _host }}">*/
/* 				{# Auxiliar Master Max Leads #}*/
/* 				<input id="master-max" type="hidden" value="{{ _max }}">*/
/* 				*/
/* 				{# Auxiliar Temporal Inputs's DIV #}*/
/* 		        <div id="hidden-inputs-session"></div>*/
/* 		        {# Auxiliar Temporal Inputs's DIV #}*/
/* 		        <div id="hidden-inputs-temporal"></div>*/
/* 			{% endblock %}*/
/* 			*/
/* 			{# Begin: Header - nav container #}*/
/* 			<div class="nav-container">*/
/* 				{% embed "super_navbar.twig" %}{% endembed %}*/
/* 			</div>*/
/* 			{# Begin: Section container #}*/
/* 			<div class="main-container" id="header">*/
/* 				{# Templates's DIV #}*/
/* 			    <div class="wrapper_content_interactive" id='content-temporal-interactive'>*/
/* 				    <main class="cd-main-content">*/
/* 				    	{% block content_current %}{% endblock %}*/
/* 				    	{% block script_load_js %}{% endblock %}*/
/* 				    </main>*/
/* 			    </div>*/
/* 			    <div></div>*/
/* 			    {# Begin: Footer container #}*/
/* 		    	<footer class="footer-6">*/
/* 					{% embed "super_footer.twig" %}{% endembed %}*/
/* 			    </div>*/
/* 			</div>*/
/* 			{#*/
/* 	        <a href="#0" class="back-to-top cd-top no-print">top</a>*/
/* 	        #}*/
/* 	        {% block body_scripts %}*/
/* 	            {# CORE LIBS #}*/
/* 	            {#*/
/* 	            #}*/
/* 	            <script src="{{ _host }}lib/min/core.lib.min.js"></script>*/
/* */
/* 	            {# GOOGLE API #}*/
/* 	            <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCCqo-F2TnMAABZvfV5yTQLlWvUCJlJViU&amp;sensor=false"></script>*/
/* 		            <script src="{{ _host }}js/min/core.min.js"></script>*/
/* 	            {#*/
/* 		            <script src="{{ _host }}js/main.js"></script>*/
/* 					<script src="{{ _host }}js/method.js"></script>*/
/* 					<script src="{{ _host }}js/model.js"></script>*/
/* 					<script src="{{ _host }}js/objects.js"></script>*/
/* 		            <script src="{{ _host }}js/required.js"></script>*/
/* 	            #}*/
/* 	        {% endblock %}*/
/* 	        */
/* 	        <script>{% block load_scripts %}{% endblock %}</script>*/
/* 		</body>*/
/* 	</html>	*/
/* {#{% endspaceless %} #}*/
