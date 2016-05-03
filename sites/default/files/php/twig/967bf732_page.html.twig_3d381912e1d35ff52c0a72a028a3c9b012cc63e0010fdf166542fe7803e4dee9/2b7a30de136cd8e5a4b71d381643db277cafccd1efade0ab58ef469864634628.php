<?php

/* themes/blog_themes/templates/page.html.twig */
class __TwigTemplate_4177e4209ed77cb0b2397a6ee2886c41b5e34c2deefa287d192dac4981a12f84 extends Twig_Template
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
        $tags = array("if" => 5);
        $filters = array("t" => 6);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('t'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        echo "<div id=\"page\" class=\"page\">
  <a id=\"Top\"></a>
  <header id=\"header\">
    <div class=\"container\">
      ";
        // line 5
        if ((isset($context["logo"]) ? $context["logo"] : null)) {
            // line 6
            echo "        <a id=\"logo\" href=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["front_page"]) ? $context["front_page"] : null), "html", null, true));
            echo "\" title=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
            echo "\" rel=\"home\">
          <img src=\"";
            // line 7
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["logo"]) ? $context["logo"] : null), "html", null, true));
            echo "\" alt=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
            echo "\"/>
        </a>
      ";
        }
        // line 10
        echo "
      ";
        // line 11
        if (((isset($context["site_name"]) ? $context["site_name"] : null) || (isset($context["site_slogan"]) ? $context["site_slogan"] : null))) {
            // line 12
            echo "        <div class=\"name-and-slogan\">

          ";
            // line 15
            echo "          ";
            if ((isset($context["title"]) ? $context["title"] : null)) {
                // line 16
                echo "            <strong class=\"site-name\">
              <a href=\"";
                // line 17
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["front_page"]) ? $context["front_page"] : null), "html", null, true));
                echo "\" title=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
                echo "\" rel=\"home\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true));
                echo "</a>
            </strong>
          ";
            } else {
                // line 20
                echo "            <h1 class=\"site-name\">
              <a href=\"";
                // line 21
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["front_page"]) ? $context["front_page"] : null), "html", null, true));
                echo "\" title=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
                echo "\" rel=\"home\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true));
                echo "</a>
            </h1>
          ";
            }
            // line 24
            echo "
          ";
            // line 25
            if ((isset($context["site_slogan"]) ? $context["site_slogan"] : null)) {
                // line 26
                echo "            <div class=\"site-slogan\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_slogan"]) ? $context["site_slogan"] : null), "html", null, true));
                echo "</div>
          ";
            }
            // line 28
            echo "        </div>
      ";
        }
        // line 30
        echo "      <a id=\"menu-toggle\" class=\"navbar-toggle collapsed\" href=\"#menu-toggle\">
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
      </a>
      ";
        // line 35
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        echo "

      ";
        // line 37
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "main_menu", array())) {
            // line 38
            echo "        <nav id=\"main-menu\" class=\"navbar navbar-default\" role=\"navigation\">
          <div class=\"container\">
            ";
            // line 40
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "main_menu", array()), "html", null, true));
            echo "
          </div>
        </nav>
      ";
        }
        // line 44
        echo "

    </div>
  </header>

  ";
        // line 49
        if (((isset($context["main_menu"]) ? $context["main_menu"] : null) || (isset($context["secondary_menu"]) ? $context["secondary_menu"] : null))) {
            // line 50
            echo "    <nav id=\"navigation\" role=\"navigation\">
      <div class=\"container\">
        ";
            // line 52
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["main_menu"]) ? $context["main_menu"] : null), "html", null, true));
            echo "
        ";
            // line 53
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["secondary_menu"]) ? $context["secondary_menu"] : null), "html", null, true));
            echo "
      </div>
    </nav>
  ";
        }
        // line 57
        echo "


  ";
        // line 60
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slideshow", array())) {
            // line 61
            echo "    <section id=\"slideshow\">
      <div class=\"container\">
        ";
            // line 63
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slideshow", array()), "html", null, true));
            echo "
      </div>
    </section>
  ";
        }
        // line 67
        echo "
  ";
        // line 68
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured", array())) {
            // line 69
            echo "    <section id=\"featured\">
      <div class=\"container\">
        ";
            // line 71
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured", array()), "html", null, true));
            echo "
      </div>
    </section>
  ";
        }
        // line 75
        echo "
  ";
        // line 76
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "panel_first", array())) {
            // line 77
            echo "    <section id=\"panel_first\">
      <div class=\"container\">
        ";
            // line 79
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "panel_first", array()), "html", null, true));
            echo "
      </div>
    </section>
  ";
        }
        // line 83
        echo "
  ";
        // line 84
        if ((isset($context["messages"]) ? $context["messages"] : null)) {
            // line 85
            echo "    <section id=\"messages\">
      <div class=\"container\">
        ";
            // line 87
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["messages"]) ? $context["messages"] : null), "html", null, true));
            echo "
      </div>
    </section>
  ";
        }
        // line 91
        echo "
  ";
        // line 92
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array())) {
            // line 93
            echo "    <section id=\"help\">
      <div class=\"container\">
        ";
            // line 95
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true));
            echo "
      </div>
    </section>
  ";
        }
        // line 99
        echo "
  ";
        // line 100
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 101
            echo "    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
            echo "
    <section id=\"title\">
      <div class=\"container\">
        <h1>";
            // line 104
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
            echo "</h1>
      </div>
    </section>
    ";
            // line 107
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
            echo "
  ";
        }
        // line 109
        echo "
  <section id=\"main\">
    <a id=\"main-content\"></a>
    <div class=\"container\">
      <div class=\"row\">

        <div id=\"main-content\" class=\"content col-lg-";
        // line 115
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "main_content_width", array()), "html", null, true));
        echo " col-md-";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "main_content_width", array()), "html", null, true));
        echo " col-sm-12 col-xs-12\">
          ";
        // line 116
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
        echo "

          ";
        // line 118
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["tabs"]) ? $context["tabs"] : null), "html", null, true));
        echo "

          ";
        // line 120
        if ((isset($context["action_links"]) ? $context["action_links"] : null)) {
            // line 121
            echo "            <nav class=\"action-links\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["action_links"]) ? $context["action_links"] : null), "html", null, true));
            echo "</nav>
          ";
        }
        // line 123
        echo "
          ";
        // line 124
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "

          <!--";
        // line 126
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["feed_icons"]) ? $context["feed_icons"] : null), "html", null, true));
        echo "-->
        </div>

        ";
        // line 129
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 130
            echo "          <aside class=\"sidebar-first sidebar col-lg-";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first_width", array()), "html", null, true));
            echo " col-md-";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first_width", array()), "html", null, true));
            echo " col-sm-12 col-xs-12\" role=\"complementary\">
            ";
            // line 131
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
            echo "
          </aside>
        ";
        }
        // line 134
        echo "
        ";
        // line 135
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 136
            echo "          <aside class=\"sidebar-second sidebar col-lg-";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second_width", array()), "html", null, true));
            echo " col-md-";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second_width", array()), "html", null, true));
            echo " col-sm-12 col-xs-12\" role=\"complementary\">
            ";
            // line 137
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
            echo "
          </aside>
        ";
        }
        // line 140
        echo "      </div>
    </div>
  </section>

  ";
        // line 144
        if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "panel_second_1", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "panel_second_2", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "panel_second_3", array()))) {
            // line 145
            echo "    <section id=\"panel_second\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-4 col-md-4 col-sm-12 col-xs-12\">
            ";
            // line 149
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "panel_second_1", array()), "html", null, true));
            echo "
          </div>
          <div class=\"col-lg-4 col-md-4 col-sm-12 col-xs-12\">
            ";
            // line 152
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "panel_second_2", array()), "html", null, true));
            echo "
          </div>
          <div class=\"col-lg-4 col-md-4 col-sm-12 col-xs-12\">
            ";
            // line 155
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "panel_second_3", array()), "html", null, true));
            echo "
          </div>
        </div>
      </div>
    </section>
  ";
        }
        // line 161
        echo "
  ";
        // line 162
        if ((isset($context["breadcrumb"]) ? $context["breadcrumb"] : null)) {
            // line 163
            echo "    <section id=\"breadcrumb\">
      <div class=\"container\">
        ";
            // line 165
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null), "html", null, true));
            echo "
      </div>
    </section>
  ";
        }
        // line 169
        echo "  <a href=\"#Top\" class=\"btn-btt\" title=\"Back to Top\" style=\"display: blocks;\"></a>

  ";
        // line 171
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            // line 172
            echo "    <footer id=\"footer\" role=\"contentinfo\">
      <div class=\"container\">
        ";
            // line 174
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
            echo "
      </div>
    </footer>
  ";
        }
        // line 178
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/blog_themes/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  420 => 178,  413 => 174,  409 => 172,  407 => 171,  403 => 169,  396 => 165,  392 => 163,  390 => 162,  387 => 161,  378 => 155,  372 => 152,  366 => 149,  360 => 145,  358 => 144,  352 => 140,  346 => 137,  339 => 136,  337 => 135,  334 => 134,  328 => 131,  321 => 130,  319 => 129,  313 => 126,  308 => 124,  305 => 123,  299 => 121,  297 => 120,  292 => 118,  287 => 116,  281 => 115,  273 => 109,  268 => 107,  262 => 104,  255 => 101,  253 => 100,  250 => 99,  243 => 95,  239 => 93,  237 => 92,  234 => 91,  227 => 87,  223 => 85,  221 => 84,  218 => 83,  211 => 79,  207 => 77,  205 => 76,  202 => 75,  195 => 71,  191 => 69,  189 => 68,  186 => 67,  179 => 63,  175 => 61,  173 => 60,  168 => 57,  161 => 53,  157 => 52,  153 => 50,  151 => 49,  144 => 44,  137 => 40,  133 => 38,  131 => 37,  126 => 35,  119 => 30,  115 => 28,  109 => 26,  107 => 25,  104 => 24,  94 => 21,  91 => 20,  81 => 17,  78 => 16,  75 => 15,  71 => 12,  69 => 11,  66 => 10,  58 => 7,  51 => 6,  49 => 5,  43 => 1,);
    }
}
/* <div id="page" class="page">*/
/*   <a id="Top"></a>*/
/*   <header id="header">*/
/*     <div class="container">*/
/*       {% if logo %}*/
/*         <a id="logo" href="{{ front_page }}" title="{{ 'Home'|t }}" rel="home">*/
/*           <img src="{{ logo }}" alt="{{ 'Home'|t }}"/>*/
/*         </a>*/
/*       {% endif %}*/
/* */
/*       {% if site_name or site_slogan %}*/
/*         <div class="name-and-slogan">*/
/* */
/*           {# Use h1 when the content title is empty #}*/
/*           {% if title %}*/
/*             <strong class="site-name">*/
/*               <a href="{{ front_page }}" title="{{ 'Home'|t }}" rel="home">{{ site_name }}</a>*/
/*             </strong>*/
/*           {% else %}*/
/*             <h1 class="site-name">*/
/*               <a href="{{ front_page }}" title="{{ 'Home'|t }}" rel="home">{{ site_name }}</a>*/
/*             </h1>*/
/*           {% endif %}*/
/* */
/*           {% if site_slogan %}*/
/*             <div class="site-slogan">{{ site_slogan }}</div>*/
/*           {% endif %}*/
/*         </div>*/
/*       {% endif %}*/
/*       <a id="menu-toggle" class="navbar-toggle collapsed" href="#menu-toggle">*/
/*             <span class="icon-bar"></span>*/
/*             <span class="icon-bar"></span>*/
/*             <span class="icon-bar"></span>*/
/*       </a>*/
/*       {{ page.header }}*/
/* */
/*       {% if page.main_menu %}*/
/*         <nav id="main-menu" class="navbar navbar-default" role="navigation">*/
/*           <div class="container">*/
/*             {{ page.main_menu }}*/
/*           </div>*/
/*         </nav>*/
/*       {% endif %}*/
/* */
/* */
/*     </div>*/
/*   </header>*/
/* */
/*   {% if main_menu or secondary_menu %}*/
/*     <nav id="navigation" role="navigation">*/
/*       <div class="container">*/
/*         {{ main_menu }}*/
/*         {{ secondary_menu }}*/
/*       </div>*/
/*     </nav>*/
/*   {% endif %}*/
/* */
/* */
/* */
/*   {% if page.slideshow %}*/
/*     <section id="slideshow">*/
/*       <div class="container">*/
/*         {{ page.slideshow }}*/
/*       </div>*/
/*     </section>*/
/*   {% endif %}*/
/* */
/*   {% if page.featured %}*/
/*     <section id="featured">*/
/*       <div class="container">*/
/*         {{ page.featured }}*/
/*       </div>*/
/*     </section>*/
/*   {% endif %}*/
/* */
/*   {% if page.panel_first %}*/
/*     <section id="panel_first">*/
/*       <div class="container">*/
/*         {{ page.panel_first }}*/
/*       </div>*/
/*     </section>*/
/*   {% endif %}*/
/* */
/*   {% if messages %}*/
/*     <section id="messages">*/
/*       <div class="container">*/
/*         {{ messages }}*/
/*       </div>*/
/*     </section>*/
/*   {% endif %}*/
/* */
/*   {% if page.help %}*/
/*     <section id="help">*/
/*       <div class="container">*/
/*         {{ page.help }}*/
/*       </div>*/
/*     </section>*/
/*   {% endif %}*/
/* */
/*   {% if title %}*/
/*     {{ title_prefix }}*/
/*     <section id="title">*/
/*       <div class="container">*/
/*         <h1>{{ title }}</h1>*/
/*       </div>*/
/*     </section>*/
/*     {{ title_suffix }}*/
/*   {% endif %}*/
/* */
/*   <section id="main">*/
/*     <a id="main-content"></a>*/
/*     <div class="container">*/
/*       <div class="row">*/
/* */
/*         <div id="main-content" class="content col-lg-{{ page.main_content_width }} col-md-{{ page.main_content_width }} col-sm-12 col-xs-12">*/
/*           {{ page.highlighted }}*/
/* */
/*           {{ tabs }}*/
/* */
/*           {% if action_links %}*/
/*             <nav class="action-links">{{ action_links }}</nav>*/
/*           {% endif %}*/
/* */
/*           {{ page.content }}*/
/* */
/*           <!--{{ feed_icons }}-->*/
/*         </div>*/
/* */
/*         {% if page.sidebar_first %}*/
/*           <aside class="sidebar-first sidebar col-lg-{{ page.sidebar_first_width }} col-md-{{ page.sidebar_first_width }} col-sm-12 col-xs-12" role="complementary">*/
/*             {{ page.sidebar_first }}*/
/*           </aside>*/
/*         {% endif %}*/
/* */
/*         {% if page.sidebar_second %}*/
/*           <aside class="sidebar-second sidebar col-lg-{{ page.sidebar_second_width }} col-md-{{ page.sidebar_second_width }} col-sm-12 col-xs-12" role="complementary">*/
/*             {{ page.sidebar_second }}*/
/*           </aside>*/
/*         {% endif %}*/
/*       </div>*/
/*     </div>*/
/*   </section>*/
/* */
/*   {% if page.panel_second_1 or page.panel_second_2 or page.panel_second_3 %}*/
/*     <section id="panel_second">*/
/*       <div class="container">*/
/*         <div class="row">*/
/*           <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">*/
/*             {{ page.panel_second_1 }}*/
/*           </div>*/
/*           <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">*/
/*             {{ page.panel_second_2 }}*/
/*           </div>*/
/*           <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">*/
/*             {{ page.panel_second_3 }}*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </section>*/
/*   {% endif %}*/
/* */
/*   {% if breadcrumb %}*/
/*     <section id="breadcrumb">*/
/*       <div class="container">*/
/*         {{ breadcrumb }}*/
/*       </div>*/
/*     </section>*/
/*   {% endif %}*/
/*   <a href="#Top" class="btn-btt" title="Back to Top" style="display: blocks;"></a>*/
/* */
/*   {% if page.footer %}*/
/*     <footer id="footer" role="contentinfo">*/
/*       <div class="container">*/
/*         {{ page.footer }}*/
/*       </div>*/
/*     </footer>*/
/*   {% endif %}*/
/* */
/* </div>*/
/* */
