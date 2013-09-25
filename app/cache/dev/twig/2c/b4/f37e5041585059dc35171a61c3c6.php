<?php

/* MyAppApBundle:Estimation:voir.html.twig */
class __TwigTemplate_2cb4f37e5041585059dc35171a61c3c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MyAppApBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'recherche' => array($this, 'block_recherche'),
            'principalNote' => array($this, 'block_principalNote'),
            'right' => array($this, 'block_right'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MyAppApBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getContext($context, "client"), "nom")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getContext($context, "client"), "prenom")), "html", null, true);
    }

    // line 4
    public function block_recherche($context, array $blocks = array())
    {
        // line 5
        echo "<div id= \"no-margin\">
    <h4><b>État: ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "client"), "etat"), "html", null, true);
        echo " </b></h4>
            <h6><a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_estimation_suivant", array("id" => $this->getAttribute($this->getContext($context, "client"), "id"), "client" => $this->getContext($context, "client"), "etat" => $this->getAttribute($this->getContext($context, "client"), "etat"), "param" => "Prev")), "html", null, true);
        echo "\"> Précèdent</a><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_estimation_suivant", array("id" => $this->getAttribute($this->getContext($context, "client"), "id"), "etat" => $this->getAttribute($this->getContext($context, "client"), "etat"), "param" => "Next")), "html", null, true);
        echo "\"> Suivant</a></h6>
</div>
";
    }

    // line 11
    public function block_principalNote($context, array $blocks = array())
    {
        // line 12
        echo "
";
        // line 13
        $this->env->loadTemplate("MyAppApBundle:Client:ajouter.html.twig")->display($context);
        // line 14
        echo "<div class= \"left-map\">
<table id=\"map\">
            <tr>
                <td>
                    ";
        // line 18
        echo $this->env->getExtension('ivory_google_map')->renderHtmlContainer($this->getContext($context, "map"));
        echo "
                    ";
        // line 19
        echo $this->env->getExtension('ivory_google_map')->renderJavascripts($this->getContext($context, "map"));
        echo "
                </td>
            </tr>
            </table>
        <h6><a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_estimation_suivant", array("id" => $this->getAttribute($this->getContext($context, "client"), "id"), "client" => $this->getContext($context, "client"), "param" => "Prev")), "html", null, true);
        echo "\"> Précèdent</a><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_estimation_suivant", array("id" => $this->getAttribute($this->getContext($context, "client"), "id"), "client" => $this->getContext($context, "client"), "param" => "Next")), "html", null, true);
        echo "\"> Suivant</a></h6>
        <h6>Créé par: ";
        // line 24
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getContext($context, "client"), "user")), "html", null, true);
        echo " le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "client"), "dateTable"), "date"), "d M y"), "html", null, true);
        echo "</h6>
    <h6>Service demandés: ";
        // line 25
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "client"), "service"), "type")), "html", null, true);
        echo "</h6>
<address>
  <b><a href=\"#myModal\"  data-toggle=\"modal\">";
        // line 27
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getContext($context, "client"), "nom")), "html", null, true);
        echo "  ";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getContext($context, "client"), "prenom")), "html", null, true);
        echo "</a></b><br>
  ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "client"), "number"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "client"), "street"), "html", null, true);
        echo "<br>
  ";
        // line 29
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "client"), "city"), "city")), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "client"), "pc"), "html", null, true);
        echo "<br>
  <abbr title=\"Phone\">P:</abbr> ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "client"), "phoneNumber"), "html", null, true);
        echo "<br>
  <abbr title=\"Cell\">C:</abbr> ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "client"), "phoneNumberCell"), "html", null, true);
        echo "<br>
  <a href=\"mailto:";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "client"), "email"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "client"), "email"), "html", null, true);
        echo "</a>
</address>
    
    <pre id=\"note\">Notes: <a rel=\"modal-profile\" href=\"#\"><img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/add.png"), "html", null, true);
        echo "\" title=\"Ajouter Note Client\"/></a></pre>
                    
";
        // line 37
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "notes"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
            // line 38
            echo "    <span class=\"dateSpan\"><b>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "n"), "created"), "d/m/y"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "n"), "type"), "html", null, true);
            echo "</b></span> ";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getContext($context, "n"), "note")), "html", null, true);
            echo "<br>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 40
            echo "
        Aucunes notes trouvées

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "    </div>

";
    }

    // line 48
    public function block_right($context, array $blocks = array())
    {
        // line 49
        echo "<div >

      <div>  <pre id=\"vertical\">Services<a href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_estimation_creerService", array("id" => $this->getAttribute($this->getContext($context, "client"), "id")), array("map" => $this->getContext($context, "map"))), "html", null, true);
        echo "\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/add.png"), "html", null, true);
        echo "\" title=\"Ajouter Service\"/></a></pre>
</div>
      <div >
<table id=\"tbestimation\">

    
";
        // line 57
        if ($this->getContext($context, "clientServices")) {
            // line 58
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "clientServices"));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                // line 59
                echo "        <tr>
            <td><span class=\"dateSpan\"><b>";
                // line 60
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "s"), "created"), "d/m/y"), "html", null, true);
                echo "</b></span></td>
            <td>";
                // line 61
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "s"), "service"), "type"), "html", null, true);
                echo "</td>
            <td>";
                // line 62
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getContext($context, "s"), "prix"), 2, ",", "."), "html", null, true);
                echo "\$</td>
            <td>";
                // line 63
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getContext($context, "s"), "note")), "html", null, true);
                echo "</td> 
            <td><a href=\"";
                // line 64
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_service_supprimerService", array("idd" => $this->getAttribute($this->getContext($context, "s"), "id"), "id" => $this->getAttribute($this->getContext($context, "client"), "id"))), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/cross.png"), "html", null, true);
                echo "\" title=\"Supprimer service\"/></a></td>
          
        ";
                // line 66
                if ($this->getAttribute($this->getAttribute($this->getContext($context, "s", true), "image", array(), "any", false, true), "webpath", array(), "any", true, true)) {
                    // line 67
                    echo "        <td><span class=\"icone\"><img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute($this->getContext($context, "s"), "image"), "webPath")), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "s"), "image"), "alt"), "html", null, true);
                    echo "\" class=\"img-polaroid\"/></span></td>
        ";
                } else {
                    // line 69
                    echo "        <td/>
 ";
                }
                // line 71
                echo "        </tr>
";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 73
                echo "        <tr>
            <td>Aucun Services trouvés</td>
        </tr>

";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "    </table>
 ";
        }
        // line 80
        echo "
              </div>
              </div>

<div>

             <pre id=\"vertical\">Contrats<a href=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_contrat_ajouter", array("id" => $this->getAttribute($this->getContext($context, "client"), "id"))), "html", null, true);
        echo "\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/add.png"), "html", null, true);
        echo "\" title=\"Ajouter Contrat\"/></a></pre>

     ";
        // line 88
        if ($this->getContext($context, "clientservicestest")) {
            // line 89
            echo "<table id=\"tbestimation\">
";
            // line 90
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "clientservicestest"));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["co"]) {
                // line 91
                echo "        <tr>
            <td><span class=\"dateSpan\"><b>";
                // line 92
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "co"), "created"), "d/m/y"), "html", null, true);
                echo ":</b></span></td>
            <td>";
                // line 93
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "co"), "numero"), "html", null, true);
                echo "</td>
            <td>";
                // line 94
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "co"), "service"), "html", null, true);
                echo "</td>
            <td>";
                // line 95
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "co"), "prix"), "html", null, true);
                echo "\$</td>

            <td><a href=\"";
                // line 97
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_contrat_voir", array("id" => $this->getAttribute($this->getContext($context, "co"), "id"))), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/binoculars.png"), "html", null, true);
                echo "\" alt=\"Stats\"/></a></td></td>
            ";
                // line 98
                if (($this->getAttribute($this->getContext($context, "co"), "date") != null)) {
                    // line 99
                    echo "                <td>";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "co"), "date"), "d M y"), "html", null, true);
                    echo "</td
            ";
                } else {
                    // line 101
                    echo "                <td>N/A</td>
            ";
                }
                // line 103
                echo "                



         </tr>       
";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 109
                echo "    <tr>
        <td>Aucunes contrats trouvées</td>
    </tr>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['co'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 113
            echo "    </table> 
";
        }
        // line 114
        echo "   
        </div>
        
    <div class=\"modal-profile\">
<h2>Ajouter une note:</h2>
    <a class=\"modal-close-profile\" title=\"Close profile window\" href=\"#\"><img src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/cross.png"), "html", null, true);
        echo "\" title=\"Fermer la fenêtre\"/></a>

    <form action=\"\" method=\"post\" ";
        // line 121
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "formNote"), 'enctype');
        echo ">
    ";
        // line 122
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "formNote"), 'widget');
        echo "
    ";
        // line 123
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "formNote"), 'rest');
        echo "
    <input type=\"submit\" />
</form>
        </div>
        
   
</table>   
    
<script type=\"text/javascript\">
\$.fn.center = function () {
        this.css(\"position\",\"absolute\");
        this.css(\"top\", ( jQuery(window).height() - this.height() ) / 2+jQuery(window).scrollTop() + \"px\");
        this.css(\"left\", ( jQuery(window).width() - this.width() ) / 2+jQuery(window).scrollLeft() + \"px\");
        return this;
      }
 
    \$(\".modal-profile\").center();
 
 
    \$('a[rel=\"modal-profile\"]').click(function() {
        \$('.modal-profile').fadeIn(\"slow\");
        \$('.modal-lightsout').fadeTo(\"slow\", .9);
    });
 
    \$('a.modal-close-profile, .modal-lightsout').click(function() {
        \$('.modal-profile').fadeOut(\"slow\");
        \$('.modal-lightsout').fadeOut(\"slow\");
    });
</script>
    
";
    }

    public function getTemplateName()
    {
        return "MyAppApBundle:Estimation:voir.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  362 => 123,  358 => 122,  354 => 121,  349 => 119,  342 => 114,  338 => 113,  329 => 109,  319 => 103,  315 => 101,  309 => 99,  307 => 98,  301 => 97,  296 => 95,  292 => 94,  288 => 93,  284 => 92,  281 => 91,  276 => 90,  273 => 89,  271 => 88,  264 => 86,  256 => 80,  252 => 78,  242 => 73,  236 => 71,  232 => 69,  224 => 67,  222 => 66,  215 => 64,  211 => 63,  207 => 62,  203 => 61,  199 => 60,  196 => 59,  191 => 58,  189 => 57,  178 => 51,  174 => 49,  171 => 48,  165 => 44,  156 => 40,  144 => 38,  139 => 37,  134 => 35,  126 => 32,  122 => 31,  118 => 30,  112 => 29,  106 => 28,  100 => 27,  95 => 25,  89 => 24,  83 => 23,  76 => 19,  72 => 18,  66 => 14,  64 => 13,  61 => 12,  58 => 11,  49 => 7,  45 => 6,  42 => 5,  39 => 4,  31 => 2,);
    }
}
