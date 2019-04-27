<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/zurb_foundation/templates/status-messages.html.twig */
class __TwigTemplate_5349519875f0fc067222bac0d5e653cbac8784f00ae30a8ba1548939d26a50a4 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'messages' => [$this, 'block_messages'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["block" => 26, "if" => 28, "for" => 32, "set" => 34];
        $filters = ["without" => 40, "length" => 45, "first" => 52];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if', 'for', 'set'],
                ['without', 'length', 'first'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 26
        $this->displayBlock('messages', $context, $blocks);
    }

    public function block_messages($context, array $blocks = [])
    {
        // line 27
        echo "
";
        // line 28
        if (($context["zurb_foundation_status_in_reveal"] ?? null)) {
            // line 29
            echo "<div id=\"status-messages\" data-reveal class=\"reveal\" role=\"dialog\" data-animation-in=\"fade-in\" data-animation-out=\"fade-out\">
";
        }
        // line 31
        echo "
";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["message_list"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 33
            echo "  ";
            // line 34
            $context["classes"] = [0 => "zurb-foundation-callout", 1 => "callout", 2 => (($this->getAttribute(            // line 37
($context["zurb_status_class_mapping"] ?? null), $context["type"], [], "array")) ? ($this->getAttribute(($context["zurb_status_class_mapping"] ?? null), $context["type"], [], "array")) : (""))];
            // line 40
            echo "  <div role=\"contentinfo\" aria-label=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["status_headings"] ?? null), $context["type"], [], "array")), "html", null, true);
            echo "\" data-closable=\"fade-out\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "role", "aria-label", "data-closable"), "html", null, true);
            echo ">
    ";
            // line 41
            if ($this->getAttribute(($context["status_headings"] ?? null), $context["type"], [], "array")) {
                // line 42
                echo "      <h2 class=\"visually-hidden\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["status_headings"] ?? null), $context["type"], [], "array")), "html", null, true);
                echo "</h2>
    ";
            }
            // line 44
            echo "
    ";
            // line 45
            if ((twig_length_filter($this->env, $context["messages"]) > 1)) {
                // line 46
                echo "      <ul class=\"messages__list\">
        ";
                // line 47
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 48
                    echo "          <li class=\"messages__item\">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["message"]), "html", null, true);
                    echo "</li>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 50
                echo "      </ul>
    ";
            } else {
                // line 52
                echo "      ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_first($this->env, $this->sandbox->ensureToStringAllowed($context["messages"])), "html", null, true);
                echo "
    ";
            }
            // line 54
            echo "
    ";
            // line 55
            if ( !($context["zurb_foundation_status_in_reveal"] ?? null)) {
                // line 56
                echo "      <button class=\"close-button\" aria-label=\"Dismiss alert\" type=\"button\" data-close>
        <span aria-hidden=\"true\">&times;</span>
      </button>
    ";
            }
            // line 60
            echo "  </div>

  ";
            // line 63
            echo "  ";
            $context["attributes"] = $this->getAttribute(($context["attributes"] ?? null), "removeClass", [0 => ($context["classes"] ?? null)], "method");
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "
";
        // line 66
        if (($context["zurb_foundation_status_in_reveal"] ?? null)) {
            // line 67
            echo "  <button class=\"close-button\" aria-label=\"Dismiss alert\" type=\"button\" data-close>
    <span aria-hidden=\"true\">&times;</span>
  </button>
</div>
";
        }
        // line 72
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/zurb_foundation/templates/status-messages.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  163 => 72,  156 => 67,  154 => 66,  151 => 65,  144 => 63,  140 => 60,  134 => 56,  132 => 55,  129 => 54,  123 => 52,  119 => 50,  110 => 48,  106 => 47,  103 => 46,  101 => 45,  98 => 44,  92 => 42,  90 => 41,  83 => 40,  81 => 37,  80 => 34,  78 => 33,  74 => 32,  71 => 31,  67 => 29,  65 => 28,  62 => 27,  56 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/zurb_foundation/templates/status-messages.html.twig", "C:\\xampp7.2\\htdocs\\camiloMarquez\\themes\\zurb_foundation\\templates\\status-messages.html.twig");
    }
}
