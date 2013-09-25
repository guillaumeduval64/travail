<?php

/* CoreSphereConsoleBundle:Toolbar:toolbar.html.twig */
class __TwigTemplate_a06e29679a0cf218e8e3ef889e933a98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("console"), "html", null, true);
        echo "\" class=\"coresphere_console_popover\">
            <img width=\"13\" height=\"28\" alt=\"Console\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAYAAABh2p9gAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJ
bWFnZVJlYWR5ccllPAAAAG5JREFUeNpi/P//PwM1ARMDlcGogZQDlhMnTlAtmi0sLBip70IkNiOF
rsMwkKGiouL/CE42Bw4cAGOqGejg4AA3mGouRDaYnGSD1YXoFhCyhIVYm4l16UguvmB5keLCAVTk
UNOFjKO13ggwECDAAAMNHZ7ErsJjAAAAAElFTkSuQmCC\"/>
        </a>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 12
        echo "    ";
        $context["text"] = ('' === $tmp = "Console") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 13
        echo "
    ";
        // line 14
        $this->env->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig")->display(array_merge($context, array("link" => false)));
    }

    public function getTemplateName()
    {
        return "CoreSphereConsoleBundle:Toolbar:toolbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 86,  270 => 84,  263 => 80,  249 => 79,  230 => 75,  222 => 73,  220 => 72,  194 => 62,  65 => 16,  141 => 51,  114 => 42,  78 => 24,  157 => 56,  136 => 44,  133 => 43,  85 => 24,  45 => 12,  57 => 12,  34 => 5,  31 => 4,  790 => 469,  787 => 468,  776 => 466,  772 => 465,  768 => 463,  755 => 462,  729 => 457,  726 => 456,  707 => 454,  690 => 453,  686 => 451,  682 => 450,  678 => 449,  674 => 448,  670 => 447,  666 => 446,  663 => 445,  661 => 444,  644 => 443,  633 => 442,  618 => 437,  613 => 435,  609 => 434,  606 => 433,  604 => 432,  590 => 431,  558 => 401,  540 => 398,  523 => 397,  520 => 396,  518 => 395,  513 => 393,  508 => 391,  181 => 87,  173 => 85,  166 => 82,  161 => 80,  156 => 77,  150 => 75,  144 => 50,  126 => 45,  112 => 42,  109 => 41,  28 => 3,  205 => 71,  178 => 66,  176 => 61,  170 => 60,  160 => 57,  132 => 47,  102 => 30,  90 => 41,  81 => 22,  204 => 66,  191 => 70,  185 => 61,  167 => 64,  164 => 63,  153 => 54,  147 => 55,  138 => 45,  134 => 54,  127 => 49,  122 => 44,  95 => 34,  91 => 35,  87 => 40,  84 => 28,  49 => 13,  27 => 3,  77 => 24,  71 => 19,  68 => 30,  62 => 27,  58 => 12,  56 => 13,  44 => 10,  388 => 160,  385 => 159,  379 => 158,  377 => 157,  370 => 156,  366 => 155,  362 => 153,  360 => 152,  357 => 151,  354 => 150,  352 => 149,  344 => 147,  342 => 146,  339 => 145,  330 => 140,  327 => 139,  320 => 135,  314 => 131,  311 => 130,  308 => 129,  306 => 128,  301 => 100,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  280 => 114,  275 => 111,  273 => 85,  268 => 83,  264 => 105,  258 => 103,  254 => 101,  247 => 97,  240 => 93,  234 => 89,  231 => 88,  226 => 86,  221 => 83,  215 => 70,  212 => 78,  209 => 73,  207 => 95,  202 => 73,  196 => 92,  193 => 68,  190 => 89,  188 => 67,  183 => 60,  177 => 58,  174 => 67,  171 => 62,  169 => 56,  162 => 57,  143 => 48,  130 => 42,  107 => 27,  103 => 34,  97 => 23,  88 => 27,  82 => 24,  79 => 23,  76 => 22,  73 => 19,  67 => 19,  61 => 16,  47 => 9,  36 => 5,  70 => 20,  63 => 16,  46 => 7,  39 => 6,  22 => 1,  163 => 81,  155 => 58,  152 => 49,  149 => 51,  145 => 57,  139 => 50,  123 => 47,  120 => 46,  115 => 44,  111 => 32,  108 => 31,  106 => 35,  101 => 36,  98 => 29,  96 => 31,  92 => 28,  80 => 32,  74 => 21,  64 => 15,  55 => 24,  52 => 14,  50 => 10,  43 => 9,  41 => 8,  37 => 8,  32 => 4,  29 => 3,  356 => 163,  347 => 160,  343 => 159,  340 => 158,  335 => 157,  333 => 141,  325 => 138,  323 => 149,  316 => 145,  309 => 141,  302 => 137,  295 => 96,  288 => 129,  281 => 125,  274 => 121,  259 => 109,  252 => 138,  245 => 77,  238 => 97,  228 => 87,  225 => 88,  217 => 83,  214 => 82,  211 => 69,  206 => 78,  203 => 77,  198 => 63,  192 => 72,  184 => 70,  182 => 64,  172 => 64,  165 => 58,  158 => 56,  154 => 48,  151 => 52,  148 => 74,  140 => 42,  135 => 47,  131 => 42,  128 => 45,  125 => 44,  119 => 36,  116 => 35,  113 => 40,  110 => 42,  104 => 35,  100 => 33,  93 => 42,  89 => 26,  86 => 29,  83 => 28,  75 => 23,  72 => 22,  69 => 20,  66 => 20,  60 => 13,  54 => 10,  51 => 14,  48 => 13,  42 => 7,  38 => 6,  35 => 5,  33 => 4,  30 => 3,);
    }
}
