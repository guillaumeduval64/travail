<?php

/* MyAppApBundle:Client:lister.html.twig */
class __TwigTemplate_04a7d8502425b81a2dcd6bde7d4bd4cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MyAppApBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'recherche' => array($this, 'block_recherche'),
            'stat' => array($this, 'block_stat'),
            'content' => array($this, 'block_content'),
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
        echo "Liste des clients";
    }

    // line 4
    public function block_recherche($context, array $blocks = array())
    {
        // line 5
        echo twig_escape_filter($this->env, twig_constant("MyApp\\ApBundle\\Entity\\CLIENT::MA_CONSTANTE"), "html", null, true);
        echo "

<form id=\"form_recherche\" data-provide=\"typeahead\" action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_client_rechercher"), "html", null, true);
        echo "\" method=\"post\" >

                            ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "motcle"), 'widget', array("attr" => array("tabindex" => "1", "autocomplete" => "off", "class" => "form_recherche search-query")));
        echo "

                <input type=\"image\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/search.png"), "html", null, true);
        echo "\" alt=\"Search\" />
                <a href=\"#myModal\" role=\"button\" class=\"btn\" data-toggle=\"modal\">Ajouter client</a>
</form>
";
    }

    // line 16
    public function block_stat($context, array $blocks = array())
    {
        // line 17
        echo "Statistiques:
";
        // line 18
        echo $this->env->getExtension('actions')->renderAction("MyAppApBundle:Dashboard:nbContrat", array(), array());
        // line 19
        echo $this->env->getExtension('actions')->renderAction("MyAppApBundle:Dashboard:nbClient", array(), array());
        // line 20
        echo $this->env->getExtension('actions')->renderAction("MyAppApBundle:Dashboard:nbEstimation", array(), array());
        // line 21
        echo $this->env->getExtension('actions')->renderAction("MyAppApBundle:Dashboard:produitUtilisateur", array(), array());
        // line 22
        echo $this->env->getExtension('actions')->renderAction("MyAppApBundle:Dashboard:produitUtilisateurSemaine", array(), array());
        // line 23
        echo " <div id=\"chart_div\" style=\"width: 300px; height: 300px;\"></div>
";
    }

    // line 26
    public function block_content($context, array $blocks = array())
    {
        // line 27
        echo " <!-- Modal -->

     ";
        // line 29
        $this->env->loadTemplate("MyAppApBundle:Client:ajouter.html.twig")->display($context);
        // line 30
        echo "
 
<div class=\"loading\"></div>
<div id=\"resultatsRecherche\"> 
    ";
        // line 34
        $this->env->loadTemplate("MyAppApBundle:Client:liste.html.twig")->display($context);
        // line 35
        echo "</div>
<script>
   
        \$(\".loading\").hide();
        \$(\"#form_recherche\").submit(function(){ 
            \$(\".loading\").show();
            var motcle = \$(\"#clientrecherche_motcle\").val();
            var DATA = 'motcle=' + motcle;
            \$.ajax({
                type: \"POST\",
                url: \"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_client_rechercher"), "html", null, true);
        echo "\",
                data: DATA,
                cache: false,
                success: function(data){
                   \$('#resultatsRecherche').html(data);
                   \$(\".loading\").hide();
                }
            });    
            return false;
        });
        
        \$.fn.center = function () {
        this.css(\"position\",\"absolute\");
        this.css(\"top\", ( jQuery(window).height() - this.height() ) / 2+jQuery(window).scrollTop() + \"px\");
        this.css(\"left\", ( jQuery(window).width() - this.width() ) / 2+jQuery(window).scrollLeft() + \"px\");
        return this;
      }
 
    \$(\".modal-profileClient\").center();
 
 
    \$('a[rel=\"modal-profileClient\"]').click(function() {
        \$('.modal-profileClient').fadeIn(\"slow\");
        \$('.modal-lightsoutClient').fadeTo(\"slow\", .9);
    });
 
    \$('a.modal-close-profileClient, .modal-lightsoutClient').click(function() {
        \$('.modal-profileClient').fadeOut(\"slow\");
        \$('.modal-lightsoutClient').fadeOut(\"slow\");
    });
            
</script>
";
    }

    public function getTemplateName()
    {
        return "MyAppApBundle:Client:lister.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 45,  101 => 35,  99 => 34,  93 => 30,  91 => 29,  87 => 27,  84 => 26,  79 => 23,  77 => 22,  75 => 21,  73 => 20,  71 => 19,  69 => 18,  66 => 17,  63 => 16,  55 => 11,  50 => 9,  45 => 7,  40 => 5,  37 => 4,  31 => 2,);
    }
}
