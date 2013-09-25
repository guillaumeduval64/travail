<?php

/* WebProfilerBundle:Profiler:toolbar_js.html.twig */
class __TwigTemplate_4060873fc3784b76f36635ceacc0e8ed extends Twig_Template
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
        echo "<div id=\"sfwdt";
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\" class=\"sf-toolbar\" style=\"display: none\"></div>
";
        // line 2
        $this->env->loadTemplate("WebProfilerBundle:Profiler:base_js.html.twig")->display($context);
        // line 3
        echo "<script type=\"text/javascript\">/*<![CDATA[*/
    (function () {
        ";
        // line 5
        if (("top" == $this->getContext($context, "position"))) {
            // line 6
            echo "            var sfwdt = document.getElementById('sfwdt";
            echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
            echo "');
            document.body.insertBefore(
                document.body.removeChild(sfwdt),
                document.body.firstChild
            );
        ";
        }
        // line 12
        echo "
        Sfjs.load(
            'sfwdt";
        // line 14
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "',
            '";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_wdt", array("token" => $this->getContext($context, "token"))), "html", null, true);
        echo "',
            function(xhr, el) {
                el.style.display = -1 !== xhr.responseText.indexOf('sf-toolbarreset') ? 'block' : 'none';
            },
            function(xhr) {
                if (xhr.status !== 0) {
                    confirm('An error occurred while loading the web debug toolbar (' + xhr.status + ': ' + xhr.statusText + ').\\n\\nDo you want to open the profiler?') && (window.location = '";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getContext($context, "token"))), "html", null, true);
        echo "');
                }
            }
        );
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 15,  32 => 6,  26 => 3,  68 => 15,  63 => 14,  59 => 21,  48 => 9,  41 => 8,  24 => 2,  22 => 2,  19 => 1,  429 => 155,  426 => 154,  422 => 153,  419 => 152,  414 => 149,  410 => 146,  407 => 145,  403 => 141,  400 => 140,  395 => 137,  392 => 136,  388 => 134,  385 => 133,  378 => 128,  375 => 127,  371 => 79,  368 => 78,  362 => 4,  351 => 162,  347 => 161,  341 => 159,  339 => 158,  335 => 156,  332 => 154,  330 => 152,  324 => 149,  320 => 147,  318 => 145,  313 => 142,  311 => 140,  308 => 139,  306 => 136,  303 => 135,  301 => 133,  298 => 132,  296 => 127,  279 => 115,  272 => 113,  265 => 111,  259 => 110,  251 => 107,  243 => 104,  235 => 101,  227 => 98,  219 => 95,  210 => 88,  201 => 85,  197 => 83,  193 => 82,  189 => 80,  187 => 78,  178 => 72,  147 => 48,  122 => 25,  61 => 13,  55 => 11,  51 => 9,  47 => 8,  43 => 7,  34 => 4,  29 => 1,  38 => 5,  35 => 5,  30 => 5,  83 => 31,  74 => 25,  65 => 18,  57 => 14,  53 => 13,  46 => 14,  42 => 12,  39 => 7,  33 => 5,  31 => 4,  28 => 3,);
    }
}
