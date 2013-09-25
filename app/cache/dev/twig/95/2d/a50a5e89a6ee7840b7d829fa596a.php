<?php

/* WebProfilerBundle:Profiler:base_js.html.twig */
class __TwigTemplate_952da50a5e89a6ee7840b7d829fa596a extends Twig_Template
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
        echo "<script type=\"text/javascript\">/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},
            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 === xhr.readyState && 200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else if (4 === xhr.readyState && xhr.status != 200) {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },
            hasClass = function(el, klass) {
                return el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },
            removeClass = function(el, klass) {
                el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
            },
            addClass = function(el, klass) {
                if (!hasClass(el, klass)) { el.className += \" \" + klass; }
            };

        return {
            hasClass: hasClass,
            removeClass: removeClass,
            addClass: addClass,
            request: request,
            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        options
                    );
                }

                return this;
            },
            toggle: function(selector, elOn, elOff) {
                var i,
                    style,
                    tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            }

        }
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  50 => 15,  32 => 6,  26 => 3,  68 => 15,  63 => 14,  59 => 21,  48 => 9,  41 => 8,  24 => 2,  22 => 2,  19 => 1,  429 => 155,  426 => 154,  422 => 153,  419 => 152,  414 => 149,  410 => 146,  407 => 145,  403 => 141,  400 => 140,  395 => 137,  392 => 136,  388 => 134,  385 => 133,  378 => 128,  375 => 127,  371 => 79,  368 => 78,  362 => 4,  351 => 162,  347 => 161,  341 => 159,  339 => 158,  335 => 156,  332 => 154,  330 => 152,  324 => 149,  320 => 147,  318 => 145,  313 => 142,  311 => 140,  308 => 139,  306 => 136,  303 => 135,  301 => 133,  298 => 132,  296 => 127,  279 => 115,  272 => 113,  265 => 111,  259 => 110,  251 => 107,  243 => 104,  235 => 101,  227 => 98,  219 => 95,  210 => 88,  201 => 85,  197 => 83,  193 => 82,  189 => 80,  187 => 78,  178 => 72,  147 => 48,  122 => 25,  61 => 13,  55 => 11,  51 => 9,  47 => 8,  43 => 7,  34 => 4,  29 => 1,  38 => 5,  35 => 5,  30 => 5,  83 => 31,  74 => 25,  65 => 18,  57 => 14,  53 => 13,  46 => 14,  42 => 12,  39 => 7,  33 => 5,  31 => 4,  28 => 3,);
    }
}
