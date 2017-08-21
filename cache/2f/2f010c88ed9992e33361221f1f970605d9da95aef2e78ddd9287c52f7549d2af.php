<?php

/* super_loadjs.twig */
class __TwigTemplate_4d18d98fba2f5525b621ff04cf88e22a873f3304b34136c888b718c5856c2289 extends Twig_Template
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
        echo "<script>
    /*! loadJS: load a JS file asynchronously. [c]2014 @scottjehl, Filament Group, Inc. (Based on http://goo.gl/REQGQ by Paul Irish). Licensed MIT */
    function loadJS(src,cb){\"use strict\";var ref=window.document.getElementsByTagName(\"script\")[0];var script=window.document.createElement(\"script\");script.src=src;script.async=true;script.defer=true;ref.parentNode.insertBefore(script,ref);if(cb&&typeof(cb)===\"function\"){if(typeof script.onload==='undefined'){script.onreadystatechange=function(){if(this.readyState==='loaded'||this.readyState==='complete'){cb();}};}else{script.onload=cb;}} return script;};

    loadJS(\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
        echo "lib/min/app.min.js\", function(){
        site.init();
    });
    
</script>";
    }

    public function getTemplateName()
    {
        return "super_loadjs.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 5,  19 => 1,);
    }
}
/* <script>*/
/*     /*! loadJS: load a JS file asynchronously. [c]2014 @scottjehl, Filament Group, Inc. (Based on http://goo.gl/REQGQ by Paul Irish). Licensed MIT *//* */
/*     function loadJS(src,cb){"use strict";var ref=window.document.getElementsByTagName("script")[0];var script=window.document.createElement("script");script.src=src;script.async=true;script.defer=true;ref.parentNode.insertBefore(script,ref);if(cb&&typeof(cb)==="function"){if(typeof script.onload==='undefined'){script.onreadystatechange=function(){if(this.readyState==='loaded'||this.readyState==='complete'){cb();}};}else{script.onload=cb;}} return script;};*/
/* */
/*     loadJS("{{ _host }}lib/min/app.min.js", function(){*/
/*         site.init();*/
/*     });*/
/*     */
/* </script>*/
