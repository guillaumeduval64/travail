<?php

/* MyAppApBundle:Client:liste.html.twig */
class __TwigTemplate_bdb1888d8275148f9863039a136bd9c0 extends Twig_Template
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
        echo "<table class=\"centrer\">
<tr>
";
        // line 4
        echo "    <th>";
        echo $this->getAttribute($this->getContext($context, "pagination"), "sortable", array(0 => "Flag", 1 => "c.flag"), "method");
        echo "</th>
    <th>";
        // line 5
        echo $this->getAttribute($this->getContext($context, "pagination"), "sortable", array(0 => "Date", 1 => "c.created"), "method");
        echo "</th>
    <th>";
        // line 6
        echo $this->getAttribute($this->getContext($context, "pagination"), "sortable", array(0 => "Rappel", 1 => "c.date"), "method");
        echo "</th>
    <th>";
        // line 7
        echo $this->getAttribute($this->getContext($context, "pagination"), "sortable", array(0 => $this->env->getExtension('translator')->trans("client.nom"), 1 => "c.nom"), "method");
        echo "</th>
    <th>";
        // line 8
        echo $this->getAttribute($this->getContext($context, "pagination"), "sortable", array(0 => $this->env->getExtension('translator')->trans("client.prenom"), 1 => "c.prenom"), "method");
        echo "</th>
    <th>";
        // line 9
        echo $this->getAttribute($this->getContext($context, "pagination"), "sortable", array(0 => $this->env->getExtension('translator')->trans("client.telephone"), 1 => "c.phoneNumber"), "method");
        echo "</th>
    <th>Service</th>
    <th>";
        // line 11
        echo $this->getAttribute($this->getContext($context, "pagination"), "sortable", array(0 => "Ville", 1 => "a.city"), "method");
        echo "</th>
</tr>

";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "pagination"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 16
            echo "<tr ";
            if (($this->getAttribute($this->getContext($context, "loop"), "index") % 2 == 1)) {
                echo "class=\"color\"";
            }
            echo ">
    <td>";
            // line 17
            if ($this->getAttribute($this->getContext($context, "client"), "flag")) {
                echo "<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/myappap/images/flamme.png"), "html", null, true);
                echo "\" title=\"Attention\"/>";
            }
            echo "</td>
    <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_client_modifier", array("id" => $this->getAttribute($this->getContext($context, "client"), "id"))), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "client"), "created"), "d/m/y"), "html", null, true);
            echo "</a></td>
    <td>";
            // line 19
            if (($this->getAttribute($this->getContext($context, "client"), "date") != null)) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "client"), "date"), "d/m/y"), "html", null, true);
            }
            echo "</td>
    <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("myapp_estimation_voirClient", array("id" => $this->getAttribute($this->getContext($context, "client"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "client"), "nom"), "html", null, true);
            echo "</a></td>
    <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "client"), "prenom"), "html", null, true);
            echo "</td>
    <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "client"), "phoneNumber"), "html", null, true);
            echo "</td>
    <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "client"), "service"), "type")), "html", null, true);
            echo "</td>
    <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "client"), "city"), "city"), "html", null, true);
            echo "</td>
</tr>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "</table>
";
        // line 29
        echo "<div class=\"navigation\">
    ";
        // line 30
        echo $this->getAttribute($this->getContext($context, "pagination"), "render", array(), "method");
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "MyAppApBundle:Client:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 16,  49 => 11,  44 => 9,  36 => 7,  28 => 5,  23 => 4,  120 => 51,  105 => 21,  92 => 38,  82 => 34,  78 => 33,  65 => 26,  58 => 22,  46 => 19,  38 => 15,  22 => 2,  19 => 1,  1179 => 332,  1173 => 331,  1167 => 330,  1161 => 329,  1155 => 328,  1149 => 327,  1143 => 326,  1137 => 325,  1131 => 324,  1115 => 318,  1108 => 317,  1106 => 316,  1103 => 315,  1080 => 311,  1055 => 310,  1053 => 309,  1050 => 308,  1038 => 303,  1033 => 302,  1031 => 301,  1028 => 300,  1019 => 294,  1013 => 292,  1010 => 291,  1005 => 290,  1003 => 289,  1000 => 288,  993 => 283,  986 => 281,  983 => 277,  979 => 276,  976 => 275,  973 => 274,  971 => 273,  968 => 272,  960 => 268,  958 => 267,  955 => 266,  948 => 261,  945 => 260,  937 => 255,  933 => 254,  929 => 253,  926 => 252,  924 => 251,  921 => 250,  913 => 246,  911 => 242,  909 => 241,  906 => 240,  885 => 234,  882 => 233,  879 => 232,  876 => 231,  873 => 230,  870 => 229,  867 => 228,  864 => 227,  861 => 226,  858 => 225,  856 => 224,  853 => 223,  845 => 217,  842 => 216,  840 => 215,  837 => 214,  829 => 210,  826 => 209,  824 => 208,  821 => 207,  813 => 203,  810 => 202,  808 => 201,  805 => 200,  797 => 196,  794 => 195,  792 => 194,  789 => 193,  781 => 189,  778 => 188,  776 => 187,  773 => 186,  765 => 182,  762 => 181,  760 => 180,  757 => 179,  749 => 175,  747 => 174,  744 => 173,  736 => 169,  733 => 168,  731 => 167,  728 => 166,  720 => 162,  717 => 161,  715 => 160,  713 => 159,  710 => 158,  703 => 153,  695 => 152,  690 => 151,  687 => 150,  681 => 148,  678 => 147,  676 => 146,  673 => 145,  665 => 139,  663 => 138,  662 => 137,  661 => 136,  660 => 135,  655 => 134,  649 => 132,  646 => 131,  644 => 130,  641 => 129,  632 => 123,  628 => 122,  624 => 121,  620 => 120,  615 => 119,  609 => 117,  606 => 116,  604 => 115,  601 => 114,  585 => 110,  583 => 109,  580 => 108,  564 => 104,  562 => 103,  559 => 102,  542 => 98,  530 => 96,  523 => 93,  521 => 92,  516 => 91,  513 => 90,  495 => 89,  493 => 88,  490 => 87,  481 => 82,  478 => 81,  475 => 80,  469 => 78,  467 => 77,  462 => 76,  459 => 75,  456 => 74,  450 => 72,  448 => 71,  440 => 70,  438 => 69,  435 => 68,  429 => 64,  421 => 62,  416 => 61,  412 => 60,  407 => 59,  405 => 58,  402 => 57,  393 => 52,  387 => 50,  384 => 49,  382 => 48,  379 => 47,  369 => 43,  367 => 42,  364 => 41,  356 => 37,  353 => 36,  350 => 35,  347 => 34,  345 => 33,  342 => 32,  334 => 27,  329 => 26,  323 => 24,  321 => 23,  316 => 22,  314 => 21,  311 => 20,  295 => 16,  292 => 15,  290 => 14,  287 => 13,  269 => 5,  267 => 4,  260 => 332,  258 => 331,  254 => 329,  252 => 328,  250 => 327,  248 => 326,  246 => 325,  244 => 324,  241 => 323,  238 => 321,  236 => 315,  233 => 314,  231 => 308,  228 => 307,  226 => 300,  223 => 299,  220 => 297,  218 => 288,  213 => 272,  210 => 271,  208 => 266,  205 => 265,  202 => 263,  190 => 240,  187 => 239,  182 => 223,  179 => 222,  176 => 220,  174 => 214,  171 => 213,  169 => 207,  166 => 206,  164 => 200,  161 => 199,  159 => 193,  156 => 192,  154 => 186,  151 => 185,  144 => 66,  141 => 172,  139 => 166,  136 => 165,  129 => 57,  126 => 144,  124 => 129,  121 => 128,  116 => 113,  111 => 107,  109 => 22,  106 => 101,  104 => 87,  96 => 39,  94 => 57,  89 => 47,  81 => 40,  76 => 31,  61 => 2,  293 => 95,  291 => 94,  288 => 93,  278 => 8,  275 => 86,  272 => 6,  266 => 83,  264 => 3,  259 => 81,  256 => 330,  253 => 79,  247 => 77,  245 => 76,  237 => 75,  230 => 70,  224 => 66,  215 => 287,  211 => 62,  207 => 61,  200 => 260,  197 => 259,  195 => 250,  192 => 249,  184 => 237,  180 => 49,  175 => 48,  173 => 47,  170 => 46,  149 => 179,  146 => 178,  143 => 40,  140 => 30,  137 => 29,  134 => 27,  131 => 157,  128 => 35,  125 => 34,  122 => 33,  119 => 114,  117 => 24,  114 => 48,  107 => 25,  100 => 23,  97 => 19,  90 => 17,  88 => 37,  86 => 46,  83 => 14,  74 => 20,  70 => 7,  64 => 3,  59 => 3,  57 => 2,  54 => 21,  47 => 92,  42 => 54,  35 => 30,  32 => 6,  30 => 14,  27 => 13,  25 => 1,  113 => 23,  101 => 86,  99 => 20,  93 => 19,  91 => 56,  87 => 18,  84 => 41,  79 => 17,  77 => 22,  75 => 21,  73 => 20,  71 => 19,  69 => 27,  66 => 12,  63 => 16,  55 => 15,  50 => 20,  45 => 55,  40 => 8,  37 => 45,  31 => 11,);
    }
}
