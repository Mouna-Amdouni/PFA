<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* consultant/chats.html.twig */
class __TwigTemplate_af48efb06132d00ce609264270fb893d120913f79c3effdc21530fb707047202 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'contenpage' => [$this, 'block_contenpage'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin/bars.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "consultant/chats.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "consultant/chats.html.twig"));

        $this->parent = $this->loadTemplate("admin/bars.html.twig", "consultant/chats.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_contenpage($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenpage"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenpage"));

        // line 3
        echo "
    <h1>bnj ";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "user", [], "any", false, false, false, 4), "id", [], "any", false, false, false, 4), "html", null, true);
        echo "</h1>

    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, (isset($context["topics"]) || array_key_exists("topics", $context) ? $context["topics"] : (function () { throw new RuntimeError('Variable "topics" does not exist.', 6, $this->source); })()), function ($__topics__) use ($context, $macros) { $context["topics"] = $__topics__; return  !twig_get_attribute($this->env, $this->source, (isset($context["topics"]) || array_key_exists("topics", $context) ? $context["topics"] : (function () { throw new RuntimeError('Variable "topics" does not exist.', 6, $this->source); })()), "deleted", [], "any", false, false, false, 6); }));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 7
            echo "










                <div class=\"row\">

                    <div class=\"col-md-12 col-lg-6\">
                        <h2 style=\"color: red\"><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteT", ["id" => twig_get_attribute($this->env, $this->source, $context["t"], "id", [], "any", false, false, false, 21)]), "html", null, true);
            echo "\" >supprimer</a></h2>

                        <div class=\"member-card\">

                            ";
            // line 30
            echo "                            <div
                            >
                                ";
            // line 33
            echo "                                <img class=\"msg-img\" src=\" ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["t"], "author", [], "any", false, false, false, 33), "logo", [], "any", false, false, false, 33))), "html", null, true);
            echo "\" alt=\"Awesome Image\">
                            </div>
                            <div class=\"member-card-details\">
                                <a href=\"#\"><div class=\"member-name\">";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["t"], "author", [], "any", false, false, false, 36), "nomComplet", [], "any", false, false, false, 36), "html", null, true);
            echo "</div></a>
                                <div class=\"member-position\">";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "name", [], "any", false, false, false, 37), "html", null, true);
            echo "</div>
                            </div>
                            <h2 style=\"color: red\"><a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("topic", ["id" => twig_get_attribute($this->env, $this->source, $context["t"], "id", [], "any", false, false, false, 39)]), "html", null, true);
            echo "\"  >repondre</a></h2>


                        </div>
                    </div>




                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "consultant/chats.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 39,  118 => 37,  114 => 36,  107 => 33,  103 => 30,  96 => 21,  80 => 7,  76 => 6,  71 => 4,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin/bars.html.twig\" %}
{% block contenpage %}

    <h1>bnj {{ app.user.id }}</h1>

    {% for t in topics|filter(topics => not topics.deleted)  %}











                <div class=\"row\">

                    <div class=\"col-md-12 col-lg-6\">
                        <h2 style=\"color: red\"><a href=\"{{ path('deleteT', {'id': t.id}) }}\" >supprimer</a></h2>

                        <div class=\"member-card\">

                            {#                            <div class=\"member-pic\"><img class=\"member-pic rounded-circle\" src=\"https://randomuser.me/api/portraits/women/77.jpg\"/></div>#}
{#                            <div#}
{#                                    class=\"msg-img\"#}
{#                                    style=\"background-image: url(https://image.flaticon.com/icons/svg/145/145867.svg)\"#}
{#                            ></div>#}
                            <div
                            >
                                {#                        style=\"background-image: url(https://image.flaticon.com/icons/svg/145/145867.svg)\"#}
                                <img class=\"msg-img\" src=\" {{ asset('uploads/images/'  ~ t.author.logo) }}\" alt=\"Awesome Image\">
                            </div>
                            <div class=\"member-card-details\">
                                <a href=\"#\"><div class=\"member-name\">{{ t.author.nomComplet }}</div></a>
                                <div class=\"member-position\">{{ t.name}}</div>
                            </div>
                            <h2 style=\"color: red\"><a href=\"{{ path('topic', {'id': t.id}) }}\"  >repondre</a></h2>


                        </div>
                    </div>




                    {% endfor %}
{% endblock %}


", "consultant/chats.html.twig", "C:\\xampp\\htdocs\\PFA\\templates\\consultant\\chats.html.twig");
    }
}
