<?php

/* ::forms.html.twig */
class __TwigTemplate_8d3c5cf852c5c6c5fab5b99d744d4e44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_row' => array($this, 'block_form_row'),
            'form_errors' => array($this, 'block_form_errors'),
            'form_label' => array($this, 'block_form_label'),
            'repeated_row' => array($this, 'block_repeated_row'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('form_row', $context, $blocks);
        // line 13
        echo "
";
        // line 14
        $this->displayBlock('form_errors', $context, $blocks);
        // line 29
        echo "
";
        // line 30
        $this->displayBlock('form_label', $context, $blocks);
        // line 45
        echo "
";
        // line 46
        $this->displayBlock('repeated_row', $context, $blocks);
        // line 54
        echo "    
";
        // line 55
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 92
        echo "    
    ";
        // line 93
        $this->displayBlock('checkbox_widget', $context, $blocks);
    }

    // line 1
    public function block_form_row($context, array $blocks = array())
    {
        // line 2
        ob_start();
        // line 3
        echo "    <div class=\"control-group";
        echo (((twig_length_filter($this->env, $this->getContext($context, "errors")) > 0)) ? (" error") : (""));
        echo "\">
        ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'label');
        echo "

        <div class=\"controls\">
            ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "
            ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 14
    public function block_form_errors($context, array $blocks = array())
    {
        // line 15
        ob_start();
        // line 16
        if ((twig_length_filter($this->env, $this->getContext($context, "errors")) > 0)) {
            // line 17
            echo "<span class=\"help-inline\">
    ";
            // line 18
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "errors"));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 19
                echo "        ";
                echo twig_escape_filter($this->env, (((null === $this->getAttribute($this->getContext($context, "error"), "messagePluralization"))) ? ($this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, "error"), "messageTemplate"), $this->getAttribute($this->getContext($context, "error"), "messageParameters"), "validators")) : ($this->env->getExtension('translator')->transchoice($this->getAttribute($this->getContext($context, "error"), "messageTemplate"), $this->getAttribute($this->getContext($context, "error"), "messagePluralization"), $this->getAttribute($this->getContext($context, "error"), "messageParameters"), "validators"))), "html", null, true);
                // line 23
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "</span>
";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 30
    public function block_form_label($context, array $blocks = array())
    {
        // line 31
        ob_start();
        // line 32
        echo "    ";
        if ((!$this->getContext($context, "compound"))) {
            // line 33
            echo "        ";
            $context["label_attr"] = twig_array_merge($this->getContext($context, "label_attr"), array("for" => $this->getContext($context, "id")));
            // line 34
            echo "    ";
        }
        // line 35
        echo "    ";
        if ($this->getContext($context, "required")) {
            // line 36
            echo "        ";
            $context["label_attr"] = twig_array_merge($this->getContext($context, "label_attr"), array("class" => trim(((($this->getAttribute($this->getContext($context, "label_attr", true), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "label_attr", true), "class"), "")) : ("")) . " required"))));
            // line 37
            echo "    ";
        }
        // line 38
        echo "    ";
        if (twig_test_empty($this->getContext($context, "label"))) {
            // line 39
            echo "        ";
            $context["label"] = $this->env->getExtension('form')->renderer->humanize($this->getContext($context, "name"));
            // line 40
            echo "    ";
        }
        // line 41
        echo "    ";
        $context["label_attr"] = twig_array_merge($this->getContext($context, "label_attr"), array("class" => trim(((($this->getAttribute($this->getContext($context, "label_attr", true), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getContext($context, "label_attr", true), "class"), "")) : ("")) . " control-label"))));
        // line 42
        echo "    <label";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "label_attr"));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getContext($context, "attrname"), "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "attrvalue"), "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "label"), array(), $this->getContext($context, "translation_domain")), "html", null, true);
        echo "</label>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 46
    public function block_repeated_row($context, array $blocks = array())
    {
        // line 47
        ob_start();
        // line 48
        echo "    <div class=\"control-group";
        echo (((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "first"), "vars"), "errors")) > 0)) ? (" error") : (""));
        echo "\">
        ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "first"), 'row', array("label" => ((array_key_exists("firstLabel", $context)) ? (_twig_default_filter($this->getContext($context, "firstLabel"))) : (""))));
        echo " 
        ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "second"), 'row', array("label" => ((array_key_exists("secondLabel", $context)) ? (_twig_default_filter($this->getContext($context, "secondLabel"))) : (""))));
        echo "
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 55
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        // line 56
        ob_start();
        // line 57
        echo " ";
        if ($this->getContext($context, "expanded")) {
            // line 58
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
                            <table>
                    <tr>
        ";
            // line 61
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "form"));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 62
                echo "
                        <td>
                          ";
                // line 64
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "child"), 'widget');
                echo "   
                        </td>
                   ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo " 


            
        ";
            // line 70
            echo "  
                                            </tr>
                </table>
        </div>
    ";
        } else {
            // line 75
            echo "    <select ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            if ($this->getContext($context, "multiple")) {
                echo " multiple=\"multiple\"";
            }
            echo ">
        ";
            // line 76
            if ((!(null === $this->getContext($context, "empty_value")))) {
                // line 77
                echo "            <option value=\"\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "empty_value")), "html", null, true);
                echo "</option>
        ";
            }
            // line 79
            echo "        ";
            if ((twig_length_filter($this->env, $this->getContext($context, "preferred_choices")) > 0)) {
                // line 80
                echo "            ";
                $context["options"] = $this->getContext($context, "preferred_choices");
                // line 81
                echo "            ";
                $this->displayBlock("widget_choice_options", $context, $blocks);
                echo "
            ";
                // line 82
                if (((twig_length_filter($this->env, $this->getContext($context, "choices")) > 0) && (!(null === $this->getContext($context, "separator"))))) {
                    // line 83
                    echo "                <option disabled=\"disabled\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, "separator"), "html", null, true);
                    echo "</option>
            ";
                }
                // line 85
                echo "        ";
            }
            // line 86
            echo "        ";
            $context["options"] = $this->getContext($context, "choices");
            // line 87
            echo "        ";
            $this->displayBlock("widget_choice_options", $context, $blocks);
            echo "
    </select>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 93
    public function block_checkbox_widget($context, array $blocks = array())
    {
        // line 94
        ob_start();
        // line 95
        echo "    <label  for=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "\"><input type=\"checkbox\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "value"), "html", null, true);
            echo "\"";
        }
        if ($this->getContext($context, "checked")) {
            echo " checked=\"checked\"";
        }
        echo " />";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "label")), "html", null, true);
        echo "</label>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "::forms.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  293 => 95,  291 => 94,  288 => 93,  278 => 87,  275 => 86,  272 => 85,  266 => 83,  264 => 82,  259 => 81,  256 => 80,  253 => 79,  247 => 77,  245 => 76,  237 => 75,  230 => 70,  224 => 66,  215 => 64,  211 => 62,  207 => 61,  200 => 58,  197 => 57,  195 => 56,  192 => 55,  184 => 50,  180 => 49,  175 => 48,  173 => 47,  170 => 46,  149 => 42,  146 => 41,  143 => 40,  140 => 39,  137 => 38,  134 => 37,  131 => 36,  128 => 35,  125 => 34,  122 => 33,  119 => 32,  117 => 31,  114 => 30,  107 => 25,  100 => 23,  97 => 19,  90 => 17,  88 => 16,  86 => 15,  83 => 14,  74 => 8,  70 => 7,  64 => 4,  59 => 3,  57 => 2,  54 => 1,  47 => 92,  42 => 54,  35 => 30,  32 => 29,  30 => 14,  27 => 13,  25 => 1,  113 => 45,  101 => 35,  99 => 34,  93 => 18,  91 => 29,  87 => 27,  84 => 26,  79 => 23,  77 => 22,  75 => 21,  73 => 20,  71 => 19,  69 => 18,  66 => 17,  63 => 16,  55 => 11,  50 => 93,  45 => 55,  40 => 46,  37 => 45,  31 => 2,);
    }
}
