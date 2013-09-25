<?php

/* MyAppApBundle::layout.html.twig */
class __TwigTemplate_1168c10b3bd8a31ab3566cea8b35c92c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'recherche' => array($this, 'block_recherche'),
            'stat' => array($this, 'block_stat'),
            'content' => array($this, 'block_content'),
            'principalNote' => array($this, 'block_principalNote'),
            'right' => array($this, 'block_right'),
            'billFinal' => array($this, 'block_billFinal'),
            'javascripts' => array($this, 'block_javascripts'),
            'note' => array($this, 'block_note'),
            'bill' => array($this, 'block_bill'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/user.png"), "html", null, true);
        echo "\" type=\"image/png\">
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/css/jquery-ui-1.10.1.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/css/jquery.ui.timepicker.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/css/bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />  
          <script src=\"http://code.jquery.com/jquery-1.9.0.min.js\"></script>

";
        // line 13
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "deecb50_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_deecb50_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/deecb50_jquery-ui-1.10.1_1.js");
            // line 18
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
        <script type=\"text/javascript\"
      src=\"http://maps.googleapis.com/maps/api/js?key=AIzaSyD5L1XB5XpNDaBBRJgxFnOnM--NpHEcE-U&sensor=true\">
    </script>
    <script type=\"text/javascript\" src=\"http://maps.google.com/maps/api/js?sensor=false\"></script> 
<script type=\"text/javascript\"> </script>
";
            // asset "deecb50_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_deecb50_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/deecb50_bootstrap_2.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
        <script type=\"text/javascript\"
      src=\"http://maps.googleapis.com/maps/api/js?key=AIzaSyD5L1XB5XpNDaBBRJgxFnOnM--NpHEcE-U&sensor=true\">
    </script>
    <script type=\"text/javascript\" src=\"http://maps.google.com/maps/api/js?sensor=false\"></script> 
<script type=\"text/javascript\"> </script>
";
            // asset "deecb50_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_deecb50_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/deecb50_jquery.maskedinput_3.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
        <script type=\"text/javascript\"
      src=\"http://maps.googleapis.com/maps/api/js?key=AIzaSyD5L1XB5XpNDaBBRJgxFnOnM--NpHEcE-U&sensor=true\">
    </script>
    <script type=\"text/javascript\" src=\"http://maps.google.com/maps/api/js?sensor=false\"></script> 
<script type=\"text/javascript\"> </script>
";
            // asset "deecb50_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_deecb50_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/deecb50_date_4.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
        <script type=\"text/javascript\"
      src=\"http://maps.googleapis.com/maps/api/js?key=AIzaSyD5L1XB5XpNDaBBRJgxFnOnM--NpHEcE-U&sensor=true\">
    </script>
    <script type=\"text/javascript\" src=\"http://maps.google.com/maps/api/js?sensor=false\"></script> 
<script type=\"text/javascript\"> </script>
";
        } else {
            // asset "deecb50"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_deecb50") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/deecb50.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
        <script type=\"text/javascript\"
      src=\"http://maps.googleapis.com/maps/api/js?key=AIzaSyD5L1XB5XpNDaBBRJgxFnOnM--NpHEcE-U&sensor=true\">
    </script>
    <script type=\"text/javascript\" src=\"http://maps.google.com/maps/api/js?sensor=false\"></script> 
<script type=\"text/javascript\"> </script>
";
        }
        unset($context["asset_url"]);
        // line 25
        echo "            <script type=\"text/javascript\" src=\"https://www.google.com/jsapi\"></script>


<script>
    //bootstrap typeahead not working on search, je ne sais pas pk
\$(document).ready(function() {
\$('input.form_recherche').typeahead({
  name: 'accounts',
  local: ['timtrueman', 'JakeHarding', 'vskarich']
    });
});
</script>         
   
<script>
      google.load(\"visualization\", \"1\", {packages:[\"corechart\"]});
      google.setOnLoadCallback(drawChart);
      
    //         ['Semaine', 'P', 'E','C','P'],
    //      ['0',  1170, 460, 100, 460],
    //      ['-1',  660, 1120, 100, 502],
    //      ['-2',  1030, 540, 200, 809]
    //    ]); 
      
      var test = ";
        // line 48
        if (array_key_exists("test", $context)) {
            echo " ";
            echo twig_jsonencode_filter($this->getContext($context, "test"));
            echo " ";
        }
        echo "; 
      console 
      function drawChart() {
        var data = google.visualization.arrayToDataTable(test);

        var options = {
          title: 'Performance',
        };

        var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }  
</script>

<script>


</script>

    </head>
    <body>
        <div id=\"test\">
            <div id=\"page\">
                 <div id=\"logo\">
        <!--<img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/logo.png"), "html", null, true);
        echo "\" title=\"Client\"/>-->
                </div>
                <div id=\"header\">
                                            <div class=\"navbar\">
                            <div class=\"navbar-inner\">
                    <div id=\"recherche\">
                        ";
        // line 78
        $this->displayBlock('recherche', $context, $blocks);
        // line 80
        echo "                    </div>
                        
                        ";
        // line 82
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 83
            echo "                        <div class=\"alert\">
  <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  <strong><img src=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/valid.png"), "html", null, true);
            echo "\" title=\"Client\"/></strong>
  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "  
                    <div id=\"menu\">

                        <ul>
                            <table id=\"menuTable\">
                                <tr>
                                    <td>
                                        <li><a href=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_client_lister"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/grey_menu/administrator.png"), "html", null, true);
        echo "\" title=\"Client\"/></a></li>
                                    </td>
                                    <td>
                                    <li><a href=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_rdv_lister"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/grey_menu/bell.png"), "html", null, true);
        echo "\" title=\"RDV\"/></a></li>
                                    </td>
                                    <td>
                                        <li><a href=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_contrat_lister"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/grey_menu/clipboard.png"), "html", null, true);
        echo "\" title=\"Contrat\"/></a></li>
                                    </td>
                                    <td>
                                        <li><a href=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_production_booke"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/grey_menu/calendar.png"), "html", null, true);
        echo "\" title=\"Production\"/></a></li>
                                    </td>
                                    <td>
                                        <li><a href=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_comptabilite_lister"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/grey_menu/money_bag.png"), "html", null, true);
        echo "\" title=\"Comptabilité\"/></a></li>
                                    </td>
                                    <td>
                                        <li><a href=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_map_voir"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/grey_menu/world.png"), "html", null, true);
        echo "\" title=\"Carte\"/></a></li></td>
                                        <!--<li><a href=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_map_journey"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/grey_menu/world.png"), "html", null, true);
        echo "\" title=\"Carte\"/></a></li>             -->
                                    <td>
                                        <li><a href=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_message_liste"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/grey_menu/emoticon_grin.png"), "html", null, true);
        echo "\" title=\"Message\"/></a></li></td>
                                    <td>
                                        <li><a href=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_dashboard_principal"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/stats_lines.png"), "html", null, true);
        echo "\" title=\"Dashboard\"/></a></li>
                                    </td>
                                </tr>
                            </table>
                        </ul>
                    </div>
                </div>
                            </div>
                   


                          <div id=\"stat\">          
                    ";
        // line 127
        $this->displayBlock('stat', $context, $blocks);
        // line 132
        echo "                </div>
                    ";
        // line 133
        $this->displayBlock('content', $context, $blocks);
        // line 135
        echo "                    
                        ";
        // line 136
        $this->displayBlock('principalNote', $context, $blocks);
        // line 139
        echo "                    <div id=\"right\">
                        ";
        // line 140
        $this->displayBlock('right', $context, $blocks);
        // line 142
        echo "                    </div>
                    
                    <div id=\"billFinal\">
                        ";
        // line 145
        $this->displayBlock('billFinal', $context, $blocks);
        // line 147
        echo "                    </div>

                    ";
        // line 149
        $this->displayBlock('javascripts', $context, $blocks);
        echo "             
                </div>
                <div id=\"noteRight\">
                    ";
        // line 152
        $this->displayBlock('note', $context, $blocks);
        // line 154
        echo "                    ";
        $this->displayBlock('bill', $context, $blocks);
        // line 156
        echo "                </div>    
                <div id=\"footer\">                            
                    ";
        // line 158
        $this->env->loadTemplate("MyAppUtilisateurBundle::connexion.html.twig")->display($context);
        // line 159
        echo "                    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("rights"), "html", null, true);
        echo " © 2012</p>
                                    <div id=\"choisir_langue\">Choisir la langue :
                    <a href=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_choisir_langue", array("langue" => "fr")), "html", null, true);
        echo "\">FR</a> |
                    <a href=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_choisir_langue", array("langue" => "en")), "html", null, true);
        echo "\">EN</a>
                </div>
                </div>
            </div>
        </div>
    </body>
</html>";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Intranet";
    }

    // line 78
    public function block_recherche($context, array $blocks = array())
    {
        // line 79
        echo "                        ";
    }

    // line 127
    public function block_stat($context, array $blocks = array())
    {
        // line 128
        echo "                       

                        
                    ";
    }

    // line 133
    public function block_content($context, array $blocks = array())
    {
        // line 134
        echo "                    ";
    }

    // line 136
    public function block_principalNote($context, array $blocks = array())
    {
        // line 137
        echo "                    <div id=\"principalNote\"></div>
                        ";
    }

    // line 140
    public function block_right($context, array $blocks = array())
    {
        // line 141
        echo "                        ";
    }

    // line 145
    public function block_billFinal($context, array $blocks = array())
    {
        // line 146
        echo "                        ";
    }

    // line 149
    public function block_javascripts($context, array $blocks = array())
    {
    }

    // line 152
    public function block_note($context, array $blocks = array())
    {
        // line 153
        echo "                    ";
    }

    // line 154
    public function block_bill($context, array $blocks = array())
    {
        // line 155
        echo "                    ";
    }

    public function getTemplateName()
    {
        return "MyAppApBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  429 => 155,  426 => 154,  422 => 153,  419 => 152,  414 => 149,  410 => 146,  407 => 145,  403 => 141,  400 => 140,  395 => 137,  392 => 136,  388 => 134,  385 => 133,  378 => 128,  375 => 127,  371 => 79,  368 => 78,  362 => 4,  351 => 162,  347 => 161,  341 => 159,  339 => 158,  335 => 156,  332 => 154,  330 => 152,  324 => 149,  320 => 147,  318 => 145,  313 => 142,  311 => 140,  308 => 139,  306 => 136,  303 => 135,  301 => 133,  298 => 132,  296 => 127,  279 => 115,  272 => 113,  265 => 111,  259 => 110,  251 => 107,  243 => 104,  235 => 101,  227 => 98,  219 => 95,  210 => 88,  201 => 85,  197 => 83,  193 => 82,  189 => 80,  187 => 78,  178 => 72,  147 => 48,  122 => 25,  61 => 13,  55 => 10,  51 => 9,  47 => 8,  43 => 7,  34 => 4,  29 => 1,  38 => 5,  35 => 5,  30 => 3,  83 => 31,  74 => 25,  65 => 18,  57 => 14,  53 => 13,  46 => 9,  42 => 8,  39 => 7,  33 => 5,  31 => 4,  28 => 3,);
    }
}
