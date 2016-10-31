<?php

/* themes/himalaya/templates/page.html.twig */
class __TwigTemplate_8285e966e0578f6cac85f5b85f8d9cd6bd3ac7592a74e5ba54ff158a53200196 extends Twig_Template
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
        $tags = array("if" => 13);
        $filters = array("t" => 10);
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

        // line 8
        echo "<div id=\"page-wrapper\" class=\"section with-arrow\">
  <div id=\"page\">
    <header id=\"header\" role=\"banner\" aria-label=\"";
        // line 10
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Site header")));
        echo "\">
      <nav id=\"navigation\" class=\"margin_bottom\">
        <div class=\"container mean-container\">
          ";
        // line 13
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "logo", array())) {
            // line 14
            echo "            <div class=\"logo\">
              ";
            // line 15
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "logo", array()), "html", null, true));
            echo "
            </div>
          ";
        }
        // line 18
        echo "          <div class=\"mean-bar\">
            ";
        // line 19
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "primary_menu", array())) {
            // line 20
            echo "              <a href=\"#nav\" class=\"meanmenu-reveal\">
                <span></span>
                <span></span>
                <span></span>
              </a>
              <nav class=\"mean-nav submenu\">
                ";
            // line 26
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "primary_menu", array()), "html", null, true));
            echo "  
              </nav>
            ";
        }
        // line 28
        echo "  
          </div>
        ";
        // line 30
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "primary_menu", array())) {
            // line 31
            echo "            <div id=\"main-menu\">
              ";
            // line 32
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "primary_menu", array()), "html", null, true));
            echo "
            </div>
         ";
        }
        // line 35
        echo "        </div>
      </nav>
    </header>
    ";
        // line 38
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array())) {
            // line 39
            echo "      <div class=\"container\">
        <div class=\"header-region col-100 float_left\">
          ";
            // line 41
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
            echo "
        </div>
      </div>
    ";
        }
        // line 45
        echo "
    ";
        // line 46
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "fitst_admin_menu", array())) {
            // line 47
            echo "      <div class=\"container\">
        <div class=\"fitst_admin_menu-region col-100 float_right\">
          ";
            // line 49
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "fitst_admin_menu", array()), "html", null, true));
            echo "
        </div>
      </div>
    ";
        }
        // line 53
        echo "
    ";
        // line 54
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array())) {
            echo " 
      <div class=\"container\">
        <div class=\"help-wrapper float_left col-100\">
          ";
            // line 57
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true));
            echo "
        </div>
      </div>
    ";
        }
        // line 60
        echo " 
    <div id=\"main-wrapper\" class=\"clearfix paddingt\">
      <div id=\"main\" class=\"clearfix container\">
        ";
        // line 63
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "breadcrumb", array())) {
            // line 64
            echo "          <div class=\"breadcrumb col-100 float_left\">
            ";
            // line 65
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "breadcrumb", array()), "html", null, true));
            echo "
          </div>
        ";
        }
        // line 68
        echo "          ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 69
            echo "            <div id=\"sidebar\" class=\"column sidebar float_left\">
              <aside class=\"section\" role=\"complementary\">
                ";
            // line 71
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
            echo "
              </aside>
            </div>
            <main id=\"content\" class=\"two-column float_left with-left-sidebar\" role=\"main\">
              <section class=\"section\">
                <a id=\"main-content\" tabindex=\"-1\"></a>
                ";
            // line 77
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
            echo "
                ";
            // line 78
            if ((isset($context["title"]) ? $context["title"] : null)) {
                // line 79
                echo "                  <h1 class=\"title\" id=\"page-title\">
                    ";
                // line 80
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
                echo "
                  </h1>
                ";
            }
            // line 83
            echo "                ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
            echo "
                ";
            // line 84
            if ((isset($context["action_links"]) ? $context["action_links"] : null)) {
                // line 85
                echo "                  <ul class=\"action-links\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["action_links"]) ? $context["action_links"] : null), "html", null, true));
                echo "</ul>
                ";
            }
            // line 87
            echo "                ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
            echo "
              </section>
            </main>
            ";
        } else {
            // line 91
            echo "            <main id=\"content\" class=\"col-100 float_left no-left-sidebar\" role=\"main\">
              <section class=\"section\">
                <a id=\"main-content\" tabindex=\"-1\"></a>
                ";
            // line 94
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
            echo "
                ";
            // line 95
            if ((isset($context["title"]) ? $context["title"] : null)) {
                // line 96
                echo "                  <h1 class=\"title\" id=\"page-title\">
                    ";
                // line 97
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
                echo "
                  </h1>
                ";
            }
            // line 100
            echo "                ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
            echo "
                ";
            // line 101
            if ((isset($context["action_links"]) ? $context["action_links"] : null)) {
                // line 102
                echo "                  <ul class=\"action-links\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["action_links"]) ? $context["action_links"] : null), "html", null, true));
                echo "</ul>
                ";
            }
            // line 104
            echo "                ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
            echo "
              </section>
            </main>
          ";
        }
        // line 108
        echo "      </div>
    </div>
  </div>
  <div id=\"footer-section container\">
    <div class=\"col-100 float_left footer-inner-section\">
      ";
        // line 113
        if (((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_fourth", array()))) {
            // line 114
            echo "        <div id=\"footer-columns\" class=\"clearfix col-100 float_left\">
          <div class=\"footer-col footer_first_wrapper column-3  float_left\">";
            // line 115
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()), "html", null, true));
            echo "</div>
          <div class=\"footer-col footer_second_wrapper column-3 float_left\">";
            // line 116
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array()), "html", null, true));
            echo "</div>
          <div class=\"footer-col footer_third_wrapper column-3 float_left\">";
            // line 117
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array()), "html", null, true));
            echo "</div>
          <div class=\"footer-col footer_fourth_wrapper column-3 float_left\">";
            // line 118
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_fourth", array()), "html", null, true));
            echo "</div>
        </div>
      ";
        }
        // line 121
        echo "    </div>
  </div>
</div>
<div id=\"footer\">
  ";
        // line 125
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            // line 126
            echo "    <div class=\"section section-full-colored\">
      <div class=\"section-content center\">
        ";
            // line 128
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
            echo "
      </div>
    </div>
  ";
        }
        // line 132
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/himalaya/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  306 => 132,  299 => 128,  295 => 126,  293 => 125,  287 => 121,  281 => 118,  277 => 117,  273 => 116,  269 => 115,  266 => 114,  264 => 113,  257 => 108,  249 => 104,  243 => 102,  241 => 101,  236 => 100,  230 => 97,  227 => 96,  225 => 95,  221 => 94,  216 => 91,  208 => 87,  202 => 85,  200 => 84,  195 => 83,  189 => 80,  186 => 79,  184 => 78,  180 => 77,  171 => 71,  167 => 69,  164 => 68,  158 => 65,  155 => 64,  153 => 63,  148 => 60,  141 => 57,  135 => 54,  132 => 53,  125 => 49,  121 => 47,  119 => 46,  116 => 45,  109 => 41,  105 => 39,  103 => 38,  98 => 35,  92 => 32,  89 => 31,  87 => 30,  83 => 28,  77 => 26,  69 => 20,  67 => 19,  64 => 18,  58 => 15,  55 => 14,  53 => 13,  47 => 10,  43 => 8,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Himalaya's theme implementation to display a single page.*/
/*  **/
/*  *//* */
/* #}*/
/* <div id="page-wrapper" class="section with-arrow">*/
/*   <div id="page">*/
/*     <header id="header" role="banner" aria-label="{{ 'Site header'|t}}">*/
/*       <nav id="navigation" class="margin_bottom">*/
/*         <div class="container mean-container">*/
/*           {% if page.logo %}*/
/*             <div class="logo">*/
/*               {{ page.logo }}*/
/*             </div>*/
/*           {% endif %}*/
/*           <div class="mean-bar">*/
/*             {% if page.primary_menu %}*/
/*               <a href="#nav" class="meanmenu-reveal">*/
/*                 <span></span>*/
/*                 <span></span>*/
/*                 <span></span>*/
/*               </a>*/
/*               <nav class="mean-nav submenu">*/
/*                 {{ page.primary_menu }}  */
/*               </nav>*/
/*             {% endif %}  */
/*           </div>*/
/*         {% if page.primary_menu %}*/
/*             <div id="main-menu">*/
/*               {{ page.primary_menu }}*/
/*             </div>*/
/*          {% endif %}*/
/*         </div>*/
/*       </nav>*/
/*     </header>*/
/*     {% if page.header %}*/
/*       <div class="container">*/
/*         <div class="header-region col-100 float_left">*/
/*           {{ page.header }}*/
/*         </div>*/
/*       </div>*/
/*     {% endif %}*/
/* */
/*     {% if page.fitst_admin_menu %}*/
/*       <div class="container">*/
/*         <div class="fitst_admin_menu-region col-100 float_right">*/
/*           {{ page.fitst_admin_menu }}*/
/*         </div>*/
/*       </div>*/
/*     {% endif %}*/
/* */
/*     {% if page.help %} */
/*       <div class="container">*/
/*         <div class="help-wrapper float_left col-100">*/
/*           {{ page.help }}*/
/*         </div>*/
/*       </div>*/
/*     {% endif %} */
/*     <div id="main-wrapper" class="clearfix paddingt">*/
/*       <div id="main" class="clearfix container">*/
/*         {% if page.breadcrumb %}*/
/*           <div class="breadcrumb col-100 float_left">*/
/*             {{ page.breadcrumb }}*/
/*           </div>*/
/*         {% endif %}*/
/*           {% if page.sidebar_first %}*/
/*             <div id="sidebar" class="column sidebar float_left">*/
/*               <aside class="section" role="complementary">*/
/*                 {{ page.sidebar_first }}*/
/*               </aside>*/
/*             </div>*/
/*             <main id="content" class="two-column float_left with-left-sidebar" role="main">*/
/*               <section class="section">*/
/*                 <a id="main-content" tabindex="-1"></a>*/
/*                 {{ title_prefix }}*/
/*                 {% if title %}*/
/*                   <h1 class="title" id="page-title">*/
/*                     {{ title }}*/
/*                   </h1>*/
/*                 {% endif %}*/
/*                 {{ title_suffix }}*/
/*                 {% if action_links %}*/
/*                   <ul class="action-links">{{ action_links }}</ul>*/
/*                 {% endif %}*/
/*                 {{ page.content }}*/
/*               </section>*/
/*             </main>*/
/*             {% else %}*/
/*             <main id="content" class="col-100 float_left no-left-sidebar" role="main">*/
/*               <section class="section">*/
/*                 <a id="main-content" tabindex="-1"></a>*/
/*                 {{ title_prefix }}*/
/*                 {% if title %}*/
/*                   <h1 class="title" id="page-title">*/
/*                     {{ title }}*/
/*                   </h1>*/
/*                 {% endif %}*/
/*                 {{ title_suffix }}*/
/*                 {% if action_links %}*/
/*                   <ul class="action-links">{{ action_links }}</ul>*/
/*                 {% endif %}*/
/*                 {{ page.content }}*/
/*               </section>*/
/*             </main>*/
/*           {% endif %}*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   <div id="footer-section container">*/
/*     <div class="col-100 float_left footer-inner-section">*/
/*       {% if page.footer_first or page.footer_second or page.footer_third or page.footer_fourth %}*/
/*         <div id="footer-columns" class="clearfix col-100 float_left">*/
/*           <div class="footer-col footer_first_wrapper column-3  float_left">{{ page.footer_first }}</div>*/
/*           <div class="footer-col footer_second_wrapper column-3 float_left">{{ page.footer_second }}</div>*/
/*           <div class="footer-col footer_third_wrapper column-3 float_left">{{ page.footer_third }}</div>*/
/*           <div class="footer-col footer_fourth_wrapper column-3 float_left">{{ page.footer_fourth }}</div>*/
/*         </div>*/
/*       {% endif %}*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* <div id="footer">*/
/*   {% if page.footer %}*/
/*     <div class="section section-full-colored">*/
/*       <div class="section-content center">*/
/*         {{ page.footer }}*/
/*       </div>*/
/*     </div>*/
/*   {% endif %}*/
/* </div>*/
/* */
