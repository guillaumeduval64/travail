<?php

/* MyAppApBundle:Client:ajouter.html.twig */
class __TwigTemplate_01b586a661dee8b3f6f9e3073e4bcafc extends Twig_Template
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
        echo "<div id=\"myModal\" class=\"modal hide fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-header\">
    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
    <h3 id=\"myModalLabel\">Ajout d'un client:</h3>
  </div>
         <form action=\"\" method=\"POST\" class=\"form-horizontal\">
  <div class=\"modal-body\">

    <table>
        <tr>
            <td>";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "formClient"), 'errors');
        echo "</td>
        </tr>
        <tr>
            <td>
            ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formClient"), "flag"), 'label');
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formClient"), "flag"), 'widget');
        echo "
            </td>
        </tr>
        <tr>
            <td>";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formClient"), "titles"), 'widget');
        echo "</td>
            <td>";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formClient"), "etat"), 'widget', array("attr" => array("class" => "input-medium")));
        echo "</td>
             <td>";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formClient"), "ancien"), 'widget', array("attr" => array("class" => "input-small")));
        echo "</td>
             <td>";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formClient"), "service"), 'widget', array("attr" => array("class" => "input-small")));
        echo "</td>

        </tr>
            <tr>
            <td>";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formClient"), "heure"), 'widget', array("attr" => array("class" => "input-small timepicker")));
        echo "</td>
            <td>";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formClient"), "heure"), 'errors', array("attr" => array("class" => "input-small")));
        echo "</td>
        </tr>
   </table>
   <br>     
   <table>
        <tr>
            <td>";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formClient"), "nom"), 'widget', array("attr" => array("placeholder" => "nom", "class" => "input-small")));
        echo "</td>
            <td>";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formClient"), "prenom"), 'widget', array("attr" => array("placeholder" => "prenom", "class" => "input-small")));
        echo "</td>
        </tr>
        <tr>
            <td>";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formClient"), "phoneNumber"), 'widget', array("attr" => array("placeholder" => "Tél", "autocomplete" => "off", "class" => "input-small phone")));
        echo "</td>
            <td>";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formClient"), "phoneNumberCell"), 'widget', array("attr" => array("placeholder" => "Cell", "autocomplete" => "off", "class" => "input-small phone")));
        echo "</td>
            <td>";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formClient"), "email"), 'widget', array("attr" => array("placeholder" => "Email", "class" => "input-medium")));
        echo "</td>
        </tr>
    </table>
   <br>
   <table>
        <tr>
            <td>";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formClient"), "number"), 'widget', array("attr" => array("placeholder" => "num", "class" => "input-mini")));
        echo "</td>
            <td>";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formClient"), "street"), 'widget', array("attr" => array("placeholder" => "rue", "class" => "input-medium")));
        echo "</td>
               <td>
            ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formClient"), "city"), 'widget', array("attr" => array("class" => "input-medium")));
        echo "
            </td>
            <td>
            ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formClient"), "pc"), 'widget', array("attr" => array("placeholder" => "CP", "class" => "input-small")));
        echo "
            </td>
            </tr>
               </table>
   <table>
                        <tr>
            <td>";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "formClient"), "date"), 'widget', array("attr" => array("placeholder" => "Date", "class" => "input-medium date")));
        echo "</td>
            <td></td>
            </tr>
   </table>
   
    ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "formClient"), 'rest');
        echo "
        <br>
           

    ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "formClient"), 'rest');
        echo "
        <br>
    
  </div>
  <div class=\"modal-footer\">
    <button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">Fermer</button>
    <input type=\"submit\" class=\"btn btn-primary\" value=\"Ajouter\" title=\"Ajouter\">
  </div>
     </form>   
</div>";
    }

    public function getTemplateName()
    {
        return "MyAppApBundle:Client:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 51,  105 => 45,  92 => 38,  82 => 34,  78 => 33,  65 => 26,  58 => 22,  46 => 19,  38 => 15,  22 => 2,  19 => 1,  1179 => 332,  1173 => 331,  1167 => 330,  1161 => 329,  1155 => 328,  1149 => 327,  1143 => 326,  1137 => 325,  1131 => 324,  1115 => 318,  1108 => 317,  1106 => 316,  1103 => 315,  1080 => 311,  1055 => 310,  1053 => 309,  1050 => 308,  1038 => 303,  1033 => 302,  1031 => 301,  1028 => 300,  1019 => 294,  1013 => 292,  1010 => 291,  1005 => 290,  1003 => 289,  1000 => 288,  993 => 283,  986 => 281,  983 => 277,  979 => 276,  976 => 275,  973 => 274,  971 => 273,  968 => 272,  960 => 268,  958 => 267,  955 => 266,  948 => 261,  945 => 260,  937 => 255,  933 => 254,  929 => 253,  926 => 252,  924 => 251,  921 => 250,  913 => 246,  911 => 242,  909 => 241,  906 => 240,  885 => 234,  882 => 233,  879 => 232,  876 => 231,  873 => 230,  870 => 229,  867 => 228,  864 => 227,  861 => 226,  858 => 225,  856 => 224,  853 => 223,  845 => 217,  842 => 216,  840 => 215,  837 => 214,  829 => 210,  826 => 209,  824 => 208,  821 => 207,  813 => 203,  810 => 202,  808 => 201,  805 => 200,  797 => 196,  794 => 195,  792 => 194,  789 => 193,  781 => 189,  778 => 188,  776 => 187,  773 => 186,  765 => 182,  762 => 181,  760 => 180,  757 => 179,  749 => 175,  747 => 174,  744 => 173,  736 => 169,  733 => 168,  731 => 167,  728 => 166,  720 => 162,  717 => 161,  715 => 160,  713 => 159,  710 => 158,  703 => 153,  695 => 152,  690 => 151,  687 => 150,  681 => 148,  678 => 147,  676 => 146,  673 => 145,  665 => 139,  663 => 138,  662 => 137,  661 => 136,  660 => 135,  655 => 134,  649 => 132,  646 => 131,  644 => 130,  641 => 129,  632 => 123,  628 => 122,  624 => 121,  620 => 120,  615 => 119,  609 => 117,  606 => 116,  604 => 115,  601 => 114,  585 => 110,  583 => 109,  580 => 108,  564 => 104,  562 => 103,  559 => 102,  542 => 98,  530 => 96,  523 => 93,  521 => 92,  516 => 91,  513 => 90,  495 => 89,  493 => 88,  490 => 87,  481 => 82,  478 => 81,  475 => 80,  469 => 78,  467 => 77,  462 => 76,  459 => 75,  456 => 74,  450 => 72,  448 => 71,  440 => 70,  438 => 69,  435 => 68,  429 => 64,  421 => 62,  416 => 61,  412 => 60,  407 => 59,  405 => 58,  402 => 57,  393 => 52,  387 => 50,  384 => 49,  382 => 48,  379 => 47,  369 => 43,  367 => 42,  364 => 41,  356 => 37,  353 => 36,  350 => 35,  347 => 34,  345 => 33,  342 => 32,  334 => 27,  329 => 26,  323 => 24,  321 => 23,  316 => 22,  314 => 21,  311 => 20,  295 => 16,  292 => 15,  290 => 14,  287 => 13,  269 => 5,  267 => 4,  260 => 332,  258 => 331,  254 => 329,  252 => 328,  250 => 327,  248 => 326,  246 => 325,  244 => 324,  241 => 323,  238 => 321,  236 => 315,  233 => 314,  231 => 308,  228 => 307,  226 => 300,  223 => 299,  220 => 297,  218 => 288,  213 => 272,  210 => 271,  208 => 266,  205 => 265,  202 => 263,  190 => 240,  187 => 239,  182 => 223,  179 => 222,  176 => 220,  174 => 214,  171 => 213,  169 => 207,  166 => 206,  164 => 200,  161 => 199,  159 => 193,  156 => 192,  154 => 186,  151 => 185,  144 => 66,  141 => 172,  139 => 166,  136 => 165,  129 => 57,  126 => 144,  124 => 129,  121 => 128,  116 => 113,  111 => 107,  109 => 46,  106 => 101,  104 => 87,  96 => 39,  94 => 57,  89 => 47,  81 => 40,  76 => 31,  61 => 2,  293 => 95,  291 => 94,  288 => 93,  278 => 8,  275 => 86,  272 => 6,  266 => 83,  264 => 3,  259 => 81,  256 => 330,  253 => 79,  247 => 77,  245 => 76,  237 => 75,  230 => 70,  224 => 66,  215 => 287,  211 => 62,  207 => 61,  200 => 260,  197 => 259,  195 => 250,  192 => 249,  184 => 237,  180 => 49,  175 => 48,  173 => 47,  170 => 46,  149 => 179,  146 => 178,  143 => 40,  140 => 39,  137 => 62,  134 => 158,  131 => 157,  128 => 35,  125 => 34,  122 => 33,  119 => 114,  117 => 31,  114 => 48,  107 => 25,  100 => 23,  97 => 19,  90 => 17,  88 => 37,  86 => 46,  83 => 14,  74 => 20,  70 => 7,  64 => 3,  59 => 3,  57 => 2,  54 => 21,  47 => 92,  42 => 54,  35 => 30,  32 => 29,  30 => 14,  27 => 13,  25 => 1,  113 => 45,  101 => 86,  99 => 68,  93 => 18,  91 => 56,  87 => 27,  84 => 41,  79 => 32,  77 => 22,  75 => 21,  73 => 20,  71 => 19,  69 => 27,  66 => 12,  63 => 16,  55 => 11,  50 => 20,  45 => 55,  40 => 46,  37 => 45,  31 => 11,);
    }
}
