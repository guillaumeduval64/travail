<?php

/* MyAppApBundle:Client:modifier.html.twig */
class __TwigTemplate_bb965c663653a90cde2d802ae061c68e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MyAppApBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Modifier client: ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "client"), "nom"), "html", null, true);
        echo " ";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<p><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_client_lister"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/previous.png"), "html", null, true);
        echo "\"/><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/user.png"), "html", null, true);
        echo "\"/></a></p>

";
        // line 8
        if ($this->getContext($context, "message")) {
            // line 9
            echo "<p><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/check.png"), "html", null, true);
            echo "\"/></p>
";
        }
        // line 11
        echo "
 <form action=\"\" method=\"POST\" class=\"form-horizontal\">
    <table>
        <tr>
            <td>";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "</td>
        </tr>
        <tr>
            <td>";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "titles"), 'widget');
        echo "</td>
            <td>";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "etat"), 'widget', array("attr" => array("class" => "input-medium")));
        echo "</td>
             <td>";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "ancien"), 'widget', array("attr" => array("class" => "input-small")));
        echo "</td>
             <td>";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "service"), 'widget', array("attr" => array("class" => "input-small")));
        echo "</td>

        </tr>
            <tr>
            <td>";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "heure"), 'widget', array("attr" => array("class" => "input-small")));
        echo "</td>
            <td>";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "heure"), 'errors', array("attr" => array("class" => "input-small")));
        echo "</td>
        </tr>
   </table>
   <br>     
   <table>
        <tr>
            <td>";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "nom"), 'widget', array("attr" => array("placeholder" => "nom", "class" => "input-small")));
        echo "</td>
            <td>";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "prenom"), 'widget', array("attr" => array("placeholder" => "prenom", "class" => "input-small")));
        echo "</td>
        </tr>
        <tr>
            <td>";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "phoneNumber"), 'widget', array("attr" => array("placeholder" => "Tél", "autocomplete" => "off", "class" => "input-small phone")));
        echo "</td>
            <td>";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "phoneNumberCell"), 'widget', array("attr" => array("placeholder" => "Cell", "autocomplete" => "off", "class" => "input-small phone")));
        echo "</td>
            <td>";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "email"), 'widget', array("attr" => array("placeholder" => "Email", "class" => "input-medium")));
        echo "</td>
        </tr>
    </table>
   <br>
   <table>
        <tr>
            <td>";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "number"), 'widget', array("attr" => array("placeholder" => "num", "class" => "input-mini")));
        echo "</td>
            <td>";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "street"), 'widget', array("attr" => array("placeholder" => "rue", "class" => "input-medium")));
        echo "</td>
               <td>
            ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "city"), 'widget', array("attr" => array("class" => "input-medium")));
        echo "
            </td>
            <td>
            ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "pc"), 'widget', array("attr" => array("placeholder" => "CP", "class" => "input-small")));
        echo "
            </td>
            </tr>
               </table>
   <table>
                        <tr>
            <td>";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "date"), 'widget', array("attr" => array("placeholder" => "Date", "class" => "input-small date")));
        echo "</td>
            <td><input type=\"image\" src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/add.png"), "html", null, true);
        echo "\" title=\"Ajouter\"/></td>
            </tr>
   </table>
   
    ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "
        <br>
</form>
";
    }

    public function getTemplateName()
    {
        return "MyAppApBundle:Client:modifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 61,  157 => 57,  153 => 56,  144 => 50,  138 => 47,  133 => 45,  129 => 44,  120 => 38,  116 => 37,  112 => 36,  106 => 33,  102 => 32,  93 => 26,  89 => 25,  82 => 21,  78 => 20,  74 => 19,  70 => 18,  64 => 15,  58 => 11,  52 => 9,  50 => 8,  40 => 6,  37 => 5,  29 => 3,);
    }
}
