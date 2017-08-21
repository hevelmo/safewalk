<?php

/* home/slider.twig */
class __TwigTemplate_1f5e4f529167b4cd36ed2f278959775fd3de52100b1823bc3d2695ff246bff71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'banners' => array($this, 'block_banners'),
            'links' => array($this, 'block_links'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["url_banner"] = "img/banner/";
        // line 2
        $context["url_video"] = "img/video/";
        // line 5
        echo "<div class=\"HeroCarousel inner fontSmooth\" data-total=\"8\" id=\"295-83457\">
\t";
        // line 7
        echo "\t<div class=\"carousel royalSlider\">
        ";
        // line 8
        $this->displayBlock('banners', $context, $blocks);
        // line 116
        echo "\t</div>
</div>
";
    }

    // line 8
    public function block_banners($context, array $blocks = array())
    {
        // line 9
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["banpa"]) ? $context["banpa"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["slider"]) {
            // line 10
            echo "                ";
            $context["on"] = $this->getAttribute($context["slider"], "on_video", array());
            // line 11
            echo "                ";
            if ((isset($context["on"]) ? $context["on"] : null)) {
                // line 12
                echo "                    <div class=\"heroItem ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["on"]) ? $context["on"] : null), "class", array()), "html", null, true);
                echo " alignedText left overlay-light-gradient-slider\" data-slideid=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["slider"], "id", array()), "html", null, true);
                echo "\" data-audio=\"false\">
                ";
            } else {
                // line 14
                echo "                    <div class=\"heroItem alignedText left overlay-light-gradient-slider\" data-slideid=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["slider"], "id", array()), "html", null, true);
                echo "\" data-audio=\"false\">
                ";
            }
            // line 16
            echo "                        ";
            $context["banners"] = $this->getAttribute($context["slider"], "pictures", array());
            // line 17
            echo "                        <span data-alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["slider"], "name", array()), "html", null, true);
            echo "\" data-background-image=\"\" data-picture=\"\" data-align=\"right center\">
                            <span data-alt=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["slider"], "name", array()), "html", null, true);
            echo "\" data-src=\"";
            echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
            echo twig_escape_filter($this->env, (isset($context["url_banner"]) ? $context["url_banner"] : null), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["banners"]) ? $context["banners"] : null), 650, array()), "html", null, true);
            echo "?v=1\"></span>
                            <span data-alt=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["slider"], "name", array()), "html", null, true);
            echo "\" data-default=\"true\" data-media=\"(min-width: 651px)\" data-src=\"";
            echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
            echo twig_escape_filter($this->env, (isset($context["url_banner"]) ? $context["url_banner"] : null), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["banners"]) ? $context["banners"] : null), 900, array()), "html", null, true);
            echo "?v=1\"></span>
                            <span data-media=\"(min-width: 901px)\" data-src=\"";
            // line 20
            echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
            echo twig_escape_filter($this->env, (isset($context["url_banner"]) ? $context["url_banner"] : null), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["banners"]) ? $context["banners"] : null), 1600, array()), "html", null, true);
            echo "?v=3\"></span>
                            <noscript>
                                <div style=\"background-image:url(";
            // line 22
            echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
            echo twig_escape_filter($this->env, (isset($context["url_banner"]) ? $context["url_banner"] : null), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["banners"]) ? $context["banners"] : null), 1600, array()), "html", null, true);
            echo "?v=3);width:100%;height:100%;\"></div>
                            </noscript>
                        </span>
                        <div class=\"heroContent headerBox withImage\">
                            <div class=\"headerBoxContent\">
                                <h1 class=\"primaryHeading heading\">
                                    <span class=\"headingWrapper\">
                                        <span class=\"headingTextMain to-html\">";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["slider"], "text_main", array()), "title", array()), "html", null, true);
            echo "</span>
                                        <span class=\"headingTextSub\">
                                            ";
            // line 31
            $context["sub"] = $this->getAttribute($context["slider"], "subtitle", array());
            // line 32
            echo "                                            ";
            if ((isset($context["sub"]) ? $context["sub"] : null)) {
                // line 33
                echo "                                                <span class=\"subtitle to-html\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sub"]) ? $context["sub"] : null), "text_sub", array()), "subtitle", array()), "html", null, true);
                echo "</span>
                                            ";
            }
            // line 35
            echo "                                        </span>                                        
                                    </span>
                                </h1>
                                ";
            // line 38
            $this->displayBlock('links', $context, $blocks);
            // line 74
            echo "                            </div>
                        </div>
                        ";
            // line 76
            if ($this->getAttribute($context["slider"], "video_player", array())) {
                // line 77
                echo "                            <div class=\"VideoPlayer clearfix\" data-audio=\"false\" data-autoplay=\"false\" data-title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["slider"], "video_player", array()), "title", array()), "html", null, true);
                echo "\" data-type=\"video\" dir=\"ltr\">
                                <div class=\"playerWrapper\">
                                    ";
                // line 80
                echo "                                    <video class=\"video\" controls=\"controls\" height=\"100%\" preload=\"none\" width=\"100%\">
                                        <source 
                                            data-1080=\"";
                // line 82
                echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
                echo twig_escape_filter($this->env, (isset($context["url_video"]) ? $context["url_video"] : null), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["slider"], "video_player", array()), "formato", array()), "mp4", array()), 1080, array()), "html", null, true);
                echo "\" 
                                            data-360=\"";
                // line 83
                echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
                echo twig_escape_filter($this->env, (isset($context["url_video"]) ? $context["url_video"] : null), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["slider"], "video_player", array()), "formato", array()), "mp4", array()), 360, array()), "html", null, true);
                echo "\" 
                                            data-480=\"";
                // line 84
                echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
                echo twig_escape_filter($this->env, (isset($context["url_video"]) ? $context["url_video"] : null), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["slider"], "video_player", array()), "formato", array()), "mp4", array()), 480, array()), "html", null, true);
                echo "\" 
                                            data-720=\"";
                // line 85
                echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
                echo twig_escape_filter($this->env, (isset($context["url_video"]) ? $context["url_video"] : null), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["slider"], "video_player", array()), "formato", array()), "mp4", array()), 720, array()), "html", null, true);
                echo "\" 
                                            src=\"";
                // line 86
                echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
                echo twig_escape_filter($this->env, (isset($context["url_video"]) ? $context["url_video"] : null), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["slider"], "video_player", array()), "formato", array()), "mp4", array()), "src", array()), "html", null, true);
                echo "\" 
                                            type=\"video/mp4\" />  
                                        <source 
                                            data-1080=\"";
                // line 89
                echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
                echo twig_escape_filter($this->env, (isset($context["url_video"]) ? $context["url_video"] : null), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["slider"], "video_player", array()), "formato", array()), "webm", array()), 1080, array()), "html", null, true);
                echo "\" 
                                            data-360=\"";
                // line 90
                echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
                echo twig_escape_filter($this->env, (isset($context["url_video"]) ? $context["url_video"] : null), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["slider"], "video_player", array()), "formato", array()), "webm", array()), 360, array()), "html", null, true);
                echo "\" 
                                            data-480=\"";
                // line 91
                echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
                echo twig_escape_filter($this->env, (isset($context["url_video"]) ? $context["url_video"] : null), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["slider"], "video_player", array()), "formato", array()), "webm", array()), 480, array()), "html", null, true);
                echo "\" 
                                            data-720=\"";
                // line 92
                echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
                echo twig_escape_filter($this->env, (isset($context["url_video"]) ? $context["url_video"] : null), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["slider"], "video_player", array()), "formato", array()), "webm", array()), 720, array()), "html", null, true);
                echo "\" 
                                            src=\"";
                // line 93
                echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
                echo twig_escape_filter($this->env, (isset($context["url_video"]) ? $context["url_video"] : null), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["slider"], "video_player", array()), "formato", array()), "webm", array()), "src", array()), "html", null, true);
                echo "\" type=\"video/webm\" /> 
                                        <track data-autoplay=\"false\" kind=\"subtitles\" src=\"/index.srt?view=subtitle&amp;subtitleId=7515\" srclang=\"es\"></track>
                                        <object data=\"";
                // line 95
                echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
                echo twig_escape_filter($this->env, (isset($context["url_video"]) ? $context["url_video"] : null), "html", null, true);
                echo "flash/mediaelement/flashmediaelement.swf\" height=\"360\" type=\"application/x-shockwave-flash\" width=\"640\">
                                            <param name=\"movie\" value=\"";
                // line 96
                echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
                echo twig_escape_filter($this->env, (isset($context["url_video"]) ? $context["url_video"] : null), "html", null, true);
                echo "flash/mediaelement/flashmediaelement.swf\" />
                                            <param name=\"flashvars\" value=\"controls=true&amp;file=";
                // line 97
                echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
                echo twig_escape_filter($this->env, (isset($context["url_video"]) ? $context["url_video"] : null), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["slider"], "video_player", array()), "formato", array()), "mp4", array()), "src", array()), "html", null, true);
                echo "\" />
                                            <span class=\"fallbackImage\" data-alt=\"\" data-background-image=\"\" data-picture=\"\" data-picture-ignore=\"\">
                                                <span data-src=\"";
                // line 99
                echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
                echo twig_escape_filter($this->env, (isset($context["url_banner"]) ? $context["url_banner"] : null), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["slider"], "video_player", array()), "pictures", array()), 400, array()), "html", null, true);
                echo "?v=3\"></span>
                                                <span data-media=\"(min-width: 355px)\" data-src=\"";
                // line 100
                echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
                echo twig_escape_filter($this->env, (isset($context["url_banner"]) ? $context["url_banner"] : null), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["slider"], "video_player", array()), "pictures", array()), 900, array()), "html", null, true);
                echo "?v=2\"></span>
                                                <span data-default=\"true\" data-media=\"(min-width: 700px)\" data-src=\"";
                // line 101
                echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
                echo twig_escape_filter($this->env, (isset($context["url_banner"]) ? $context["url_banner"] : null), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["slider"], "video_player", array()), "pictures", array()), 1600, array()), "html", null, true);
                echo "?v=3\"></span>
                                                <span data-media=\"(min-width: 1000px)\" data-src=\"";
                // line 102
                echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
                echo twig_escape_filter($this->env, (isset($context["url_banner"]) ? $context["url_banner"] : null), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["slider"], "video_player", array()), "pictures", array()), 1600, array()), "html", null, true);
                echo "?v=3\"></span>
                                                <noscript>
                                                    <img src=\"";
                // line 104
                echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
                echo twig_escape_filter($this->env, (isset($context["url_banner"]) ? $context["url_banner"] : null), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["slider"], "video_player", array()), "pictures", array()), 1600, array()), "html", null, true);
                echo "?v=2\" alt=\"\" />
                                                </noscript>
                                            </span>
                                        </object>
                                    </video>
                                    ";
                // line 110
                echo "                                </div>
                            </div>
                        ";
            }
            // line 113
            echo "                    </div>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "        ";
    }

    // line 38
    public function block_links($context, array $blocks = array())
    {
        // line 39
        echo "                                    <div class=\"linkContainer\">
                                        ";
        // line 40
        if ($this->getAttribute($this->getAttribute((isset($context["slider"]) ? $context["slider"] : null), "links", array()), "primary", array())) {
            // line 41
            echo "                                            <span class=\"primaryLinkContainer\">
                                                ";
            // line 42
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["slider"]) ? $context["slider"] : null), "links", array()), "primary", array()), "ext", array())) {
                // line 43
                echo "                                                    <a class=\"primaryLinkWithStyle plwsLight TargetLinks ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["slider"]) ? $context["slider"] : null), "links", array()), "primary", array()), "ext", array()), "html", null, true);
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["slider"]) ? $context["slider"] : null), "links", array()), "primary", array()), "href", array()), "html", null, true);
                echo "\" data-link-desktop=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["slider"]) ? $context["slider"] : null), "links", array()), "primary", array()), "href", array()), "html", null, true);
                echo "\" data-target=\"current\" id=\"HeroCarousel:MÁS INFORMACIÓN:";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["slider"]) ? $context["slider"] : null), "links", array()), "primary", array()), "href", array()), "html", null, true);
                echo "\" target=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["slider"]) ? $context["slider"] : null), "links", array()), "primary", array()), "target", array()), "html", null, true);
                echo "\">
                                                ";
            }
            // line 45
            echo "                                                ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["slider"]) ? $context["slider"] : null), "links", array()), "primary", array()), "int", array())) {
                // line 46
                echo "                                                    <a class=\"primaryLinkWithStyle plwsLight TargetLinks ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["slider"]) ? $context["slider"] : null), "links", array()), "primary", array()), "int", array()), "html", null, true);
                echo "\" href=\"";
                echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["slider"]) ? $context["slider"] : null), "links", array()), "primary", array()), "href", array()), "html", null, true);
                echo "\" data-link-desktop=\"";
                echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["slider"]) ? $context["slider"] : null), "links", array()), "primary", array()), "href", array()), "html", null, true);
                echo "\" data-target=\"current\" id=\"HeroCarousel:MÁS INFORMACIÓN:";
                echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["slider"]) ? $context["slider"] : null), "links", array()), "primary", array()), "href", array()), "html", null, true);
                echo "\" target=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["slider"]) ? $context["slider"] : null), "links", array()), "primary", array()), "target", array()), "html", null, true);
                echo "\">
                                                ";
            }
            // line 48
            echo "                                                ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["slider"]) ? $context["slider"] : null), "links", array()), "primary", array()), "mod", array())) {
                // line 49
                echo "                                                    <a class=\"primaryLinkWithStyle plwsLight TargetLinks ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["slider"]) ? $context["slider"] : null), "links", array()), "primary", array()), "mod", array()), "html", null, true);
                echo "\" data-modal-target=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["slider"]) ? $context["slider"] : null), "links", array()), "primary", array()), "data", array()), "html", null, true);
                echo "\">
                                                ";
            }
            // line 51
            echo "                                                        <span>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["slider"]) ? $context["slider"] : null), "links", array()), "primary", array()), "title", array()), "html", null, true);
            echo "</span>
                                                    </a>
                                                ";
            // line 53
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["slider"]) ? $context["slider"] : null), "links", array()), "primary", array()), "modal", array())) {
                // line 54
                echo "                                                    <div class=\"hidden\" id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["slider"]) ? $context["slider"] : null), "links", array()), "primary", array()), "modal", array()), "id", array()), "html", null, true);
                echo "\">
                                                        <img src=\"";
                // line 55
                echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
                echo "img/promo/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["slider"]) ? $context["slider"] : null), "links", array()), "primary", array()), "modal", array()), "href", array()), "html", null, true);
                echo "\" alt=\". . .\">
                                                    </div>
                                                ";
            }
            // line 58
            echo "                                            </span>
                                        ";
        }
        // line 60
        echo "                                        ";
        if ($this->getAttribute($this->getAttribute((isset($context["slider"]) ? $context["slider"] : null), "links", array()), "secondary", array())) {
            // line 61
            echo "                                            <span class=\"secondaryLinkContainer\">
                                                ";
            // line 62
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["slider"]) ? $context["slider"] : null), "links", array()), "secondary", array()), "ext", array())) {
                // line 63
                echo "                                                    <a class=\"primaryLinkWithStyle plwsLight TargetLinks ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["slider"]) ? $context["slider"] : null), "links", array()), "secondary", array()), "ext", array()), "html", null, true);
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["slider"]) ? $context["slider"] : null), "links", array()), "secondary", array()), "href", array()), "html", null, true);
                echo "\" data-link-desktop=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["slider"]) ? $context["slider"] : null), "links", array()), "secondary", array()), "href", array()), "html", null, true);
                echo "\" data-target=\"current\" id=\"HeroCarousel:MÁS INFORMACIÓN:";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["slider"]) ? $context["slider"] : null), "links", array()), "secondary", array()), "href", array()), "html", null, true);
                echo "\" target=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["slider"]) ? $context["slider"] : null), "links", array()), "secondary", array()), "target", array()), "html", null, true);
                echo "\">
                                                ";
            }
            // line 65
            echo "                                                ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["slider"]) ? $context["slider"] : null), "links", array()), "secondary", array()), "int", array())) {
                // line 66
                echo "                                                    <a class=\"primaryLinkWithStyle plwsLight TargetLinks ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["slider"]) ? $context["slider"] : null), "links", array()), "secondary", array()), "int", array()), "html", null, true);
                echo "\" href=\"";
                echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["slider"]) ? $context["slider"] : null), "links", array()), "secondary", array()), "href", array()), "html", null, true);
                echo "\" data-link-desktop=\"";
                echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["slider"]) ? $context["slider"] : null), "links", array()), "secondary", array()), "href", array()), "html", null, true);
                echo "\" data-target=\"current\" id=\"HeroCarousel:MÁS INFORMACIÓN:";
                echo twig_escape_filter($this->env, (isset($context["_host"]) ? $context["_host"] : null), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["slider"]) ? $context["slider"] : null), "links", array()), "secondary", array()), "href", array()), "html", null, true);
                echo "\" target=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["slider"]) ? $context["slider"] : null), "links", array()), "secondary", array()), "target", array()), "html", null, true);
                echo "\">
                                                ";
            }
            // line 68
            echo "                                                        <span>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["slider"]) ? $context["slider"] : null), "links", array()), "secondary", array()), "title", array()), "html", null, true);
            echo "</span>
                                                    </a>
                                            </span>
                                        ";
        }
        // line 72
        echo "                                    </div>
                                ";
    }

    public function getTemplateName()
    {
        return "home/slider.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  434 => 72,  426 => 68,  409 => 66,  406 => 65,  392 => 63,  390 => 62,  387 => 61,  384 => 60,  380 => 58,  372 => 55,  367 => 54,  365 => 53,  359 => 51,  351 => 49,  348 => 48,  331 => 46,  328 => 45,  314 => 43,  312 => 42,  309 => 41,  307 => 40,  304 => 39,  301 => 38,  297 => 115,  282 => 113,  277 => 110,  267 => 104,  260 => 102,  254 => 101,  248 => 100,  242 => 99,  235 => 97,  230 => 96,  225 => 95,  218 => 93,  212 => 92,  206 => 91,  200 => 90,  194 => 89,  186 => 86,  180 => 85,  174 => 84,  168 => 83,  162 => 82,  158 => 80,  152 => 77,  150 => 76,  146 => 74,  144 => 38,  139 => 35,  133 => 33,  130 => 32,  128 => 31,  123 => 29,  111 => 22,  104 => 20,  96 => 19,  88 => 18,  83 => 17,  80 => 16,  74 => 14,  66 => 12,  63 => 11,  60 => 10,  42 => 9,  39 => 8,  33 => 116,  31 => 8,  28 => 7,  25 => 5,  23 => 2,  21 => 1,);
    }
}
/* {% set url_banner = "img/banner/" %}*/
/* {% set url_video = "img/video/" %}*/
/* {# Begin index: slider principal #}*/
/* {# googleon: all #}*/
/* <div class="HeroCarousel inner fontSmooth" data-total="8" id="295-83457">*/
/* 	{# royalSlider #}*/
/* 	<div class="carousel royalSlider">*/
/*         {% block banners %}*/
/*             {% for slider in banpa %}*/
/*                 {% set on = slider.on_video %}*/
/*                 {% if on %}*/
/*                     <div class="heroItem {{ on.class }} alignedText left overlay-light-gradient-slider" data-slideid="{{ slider.id }}" data-audio="false">*/
/*                 {% else %}*/
/*                     <div class="heroItem alignedText left overlay-light-gradient-slider" data-slideid="{{ slider.id }}" data-audio="false">*/
/*                 {% endif %}*/
/*                         {% set banners = slider.pictures %}*/
/*                         <span data-alt="{{ slider.name }}" data-background-image="" data-picture="" data-align="right center">*/
/*                             <span data-alt="{{ slider.name }}" data-src="{{ _host }}{{ url_banner }}{{ banners.650 }}?v=1"></span>*/
/*                             <span data-alt="{{ slider.name }}" data-default="true" data-media="(min-width: 651px)" data-src="{{ _host }}{{ url_banner }}{{ banners.900 }}?v=1"></span>*/
/*                             <span data-media="(min-width: 901px)" data-src="{{ _host }}{{ url_banner }}{{ banners.1600 }}?v=3"></span>*/
/*                             <noscript>*/
/*                                 <div style="background-image:url({{ _host }}{{ url_banner }}{{ banners.1600 }}?v=3);width:100%;height:100%;"></div>*/
/*                             </noscript>*/
/*                         </span>*/
/*                         <div class="heroContent headerBox withImage">*/
/*                             <div class="headerBoxContent">*/
/*                                 <h1 class="primaryHeading heading">*/
/*                                     <span class="headingWrapper">*/
/*                                         <span class="headingTextMain to-html">{{ slider.text_main.title }}</span>*/
/*                                         <span class="headingTextSub">*/
/*                                             {% set sub = slider.subtitle %}*/
/*                                             {% if sub %}*/
/*                                                 <span class="subtitle to-html">{{ sub.text_sub.subtitle }}</span>*/
/*                                             {% endif %}*/
/*                                         </span>                                        */
/*                                     </span>*/
/*                                 </h1>*/
/*                                 {% block links %}*/
/*                                     <div class="linkContainer">*/
/*                                         {% if slider.links.primary %}*/
/*                                             <span class="primaryLinkContainer">*/
/*                                                 {% if slider.links.primary.ext %}*/
/*                                                     <a class="primaryLinkWithStyle plwsLight TargetLinks {{ slider.links.primary.ext }}" href="{{ slider.links.primary.href }}" data-link-desktop="{{ slider.links.primary.href }}" data-target="current" id="HeroCarousel:MÁS INFORMACIÓN:{{ slider.links.primary.href }}" target="{{ slider.links.primary.target }}">*/
/*                                                 {% endif %}*/
/*                                                 {% if slider.links.primary.int %}*/
/*                                                     <a class="primaryLinkWithStyle plwsLight TargetLinks {{ slider.links.primary.int }}" href="{{ _host }}{{ slider.links.primary.href }}" data-link-desktop="{{ _host }}{{ slider.links.primary.href }}" data-target="current" id="HeroCarousel:MÁS INFORMACIÓN:{{ _host }}{{ slider.links.primary.href }}" target="{{ slider.links.primary.target }}">*/
/*                                                 {% endif %}*/
/*                                                 {% if slider.links.primary.mod %}*/
/*                                                     <a class="primaryLinkWithStyle plwsLight TargetLinks {{ slider.links.primary.mod }}" data-modal-target="{{ slider.links.primary.data }}">*/
/*                                                 {% endif %}*/
/*                                                         <span>{{ slider.links.primary.title }}</span>*/
/*                                                     </a>*/
/*                                                 {% if slider.links.primary.modal %}*/
/*                                                     <div class="hidden" id="{{ slider.links.primary.modal.id }}">*/
/*                                                         <img src="{{ _host }}img/promo/{{ slider.links.primary.modal.href }}" alt=". . .">*/
/*                                                     </div>*/
/*                                                 {% endif %}*/
/*                                             </span>*/
/*                                         {% endif %}*/
/*                                         {% if slider.links.secondary %}*/
/*                                             <span class="secondaryLinkContainer">*/
/*                                                 {% if slider.links.secondary.ext %}*/
/*                                                     <a class="primaryLinkWithStyle plwsLight TargetLinks {{ slider.links.secondary.ext }}" href="{{ slider.links.secondary.href }}" data-link-desktop="{{ slider.links.secondary.href }}" data-target="current" id="HeroCarousel:MÁS INFORMACIÓN:{{ slider.links.secondary.href }}" target="{{ slider.links.secondary.target }}">*/
/*                                                 {% endif %}*/
/*                                                 {% if slider.links.secondary.int %}*/
/*                                                     <a class="primaryLinkWithStyle plwsLight TargetLinks {{ slider.links.secondary.int }}" href="{{ _host }}{{ slider.links.secondary.href }}" data-link-desktop="{{ _host }}{{ slider.links.secondary.href }}" data-target="current" id="HeroCarousel:MÁS INFORMACIÓN:{{ _host }}{{ slider.links.secondary.href }}" target="{{ slider.links.secondary.target }}">*/
/*                                                 {% endif %}*/
/*                                                         <span>{{ slider.links.secondary.title }}</span>*/
/*                                                     </a>*/
/*                                             </span>*/
/*                                         {% endif %}*/
/*                                     </div>*/
/*                                 {% endblock %}*/
/*                             </div>*/
/*                         </div>*/
/*                         {% if slider.video_player %}*/
/*                             <div class="VideoPlayer clearfix" data-audio="false" data-autoplay="false" data-title="{{ slider.video_player.title }}" data-type="video" dir="ltr">*/
/*                                 <div class="playerWrapper">*/
/*                                     {# Used when there's no user interaction. E.g. HeroCarousel  #}*/
/*                                     <video class="video" controls="controls" height="100%" preload="none" width="100%">*/
/*                                         <source */
/*                                             data-1080="{{ _host }}{{ url_video }}{{ slider.video_player.formato.mp4.1080 }}" */
/*                                             data-360="{{ _host }}{{ url_video }}{{ slider.video_player.formato.mp4.360 }}" */
/*                                             data-480="{{ _host }}{{ url_video }}{{ slider.video_player.formato.mp4.480 }}" */
/*                                             data-720="{{ _host }}{{ url_video }}{{ slider.video_player.formato.mp4.720 }}" */
/*                                             src="{{ _host }}{{ url_video }}{{ slider.video_player.formato.mp4.src }}" */
/*                                             type="video/mp4" />  */
/*                                         <source */
/*                                             data-1080="{{ _host }}{{ url_video }}{{ slider.video_player.formato.webm.1080 }}" */
/*                                             data-360="{{ _host }}{{ url_video }}{{ slider.video_player.formato.webm.360 }}" */
/*                                             data-480="{{ _host }}{{ url_video }}{{ slider.video_player.formato.webm.480 }}" */
/*                                             data-720="{{ _host }}{{ url_video }}{{ slider.video_player.formato.webm.720 }}" */
/*                                             src="{{ _host }}{{ url_video }}{{ slider.video_player.formato.webm.src }}" type="video/webm" /> */
/*                                         <track data-autoplay="false" kind="subtitles" src="/index.srt?view=subtitle&amp;subtitleId=7515" srclang="es"></track>*/
/*                                         <object data="{{ _host }}{{ url_video }}flash/mediaelement/flashmediaelement.swf" height="360" type="application/x-shockwave-flash" width="640">*/
/*                                             <param name="movie" value="{{ _host }}{{ url_video }}flash/mediaelement/flashmediaelement.swf" />*/
/*                                             <param name="flashvars" value="controls=true&amp;file={{ _host }}{{ url_video }}{{ slider.video_player.formato.mp4.src }}" />*/
/*                                             <span class="fallbackImage" data-alt="" data-background-image="" data-picture="" data-picture-ignore="">*/
/*                                                 <span data-src="{{ _host }}{{ url_banner }}{{ slider.video_player.pictures.400 }}?v=3"></span>*/
/*                                                 <span data-media="(min-width: 355px)" data-src="{{ _host }}{{ url_banner }}{{ slider.video_player.pictures.900 }}?v=2"></span>*/
/*                                                 <span data-default="true" data-media="(min-width: 700px)" data-src="{{ _host }}{{ url_banner }}{{ slider.video_player.pictures.1600 }}?v=3"></span>*/
/*                                                 <span data-media="(min-width: 1000px)" data-src="{{ _host }}{{ url_banner }}{{ slider.video_player.pictures.1600 }}?v=3"></span>*/
/*                                                 <noscript>*/
/*                                                     <img src="{{ _host }}{{ url_banner }}{{ slider.video_player.pictures.1600 }}?v=2" alt="" />*/
/*                                                 </noscript>*/
/*                                             </span>*/
/*                                         </object>*/
/*                                     </video>*/
/*                                     {# Used when there's user interaction with the video #}*/
/*                                 </div>*/
/*                             </div>*/
/*                         {% endif %}*/
/*                     </div>*/
/*             {% endfor %}*/
/*         {% endblock %}*/
/* 	</div>*/
/* </div>*/
/* {# googleoff: all #}*/
/* {# End index #}*/
