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

/* forum/index.html.twig */
class __TwigTemplate_a3d0d08b3bc5620a11d6271e4517bac6ef58d532d35cc39010be45bb42f80890 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forum/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forum/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "forum/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Bienvenue !";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<!-- Breadcrumb -->
<div class=\"col-sm-12\" id=\"breadcrumb\">
    >
   
</div>

<div class=\"col-xl-12\">
    <h1 class=\"page-name\">Forum</h1>
    <span>Tous les Forum</span>
</div>


    <div class=\"col-xl-12\" id=\"create-topic\">
        <a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("newTopic");
        echo "\"><p><b>➕</b> Créer un nouveau Forum</p></a>
    </div>


<div class=\"col-xl-12 table-responsive text-nowrap\">
    <table class=\"table table-list\" id=\"topics\">
        <thead class=\"thead-dark\">
            <tr>
                <th scope=\"col\"><a href=\"#\" class=\"filterLink\">Nom du Forum</a></th>
                <th scope=\"col\"><a href=\"#\" title=\"Order by name\" class=\"filterLink\">Auteur</a></th>
                <th scope=\"col\"><a href=\"#\" title=\"Order by role\" class=\"filterLink\">Nombre de messages</a></th>
                <th scope=\"col\"><span class=\"filterLink\">date</span></th>

";
        // line 36
        echo "            </tr>
        </head>
        <tbody>
            ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["topics"]) || array_key_exists("topics", $context) ? $context["topics"] : (function () { throw new RuntimeError('Variable "topics" does not exist.', 39, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["topic"]) {
            // line 40
            echo "                <tr data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["topic"], "id", [], "any", false, false, false, 40), "html", null, true);
            echo "\" tabindex=\"0\">
                    <th scope=\"row\">
                            <span class=\"topic-title\">";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["topic"], "name", [], "any", false, false, false, 42), "html", null, true);
            echo " [#";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["topic"], "id", [], "any", false, false, false, 42), "html", null, true);
            echo "] </span>
                        
                        
                    </th>
                    <td>
                        <p>
";
            // line 49
            echo "                        </p>
                    </td>
                    <td>
                        <p>
";
            // line 54
            echo "                        </p>
                    </td>
                    <td>
                        ";
            // line 57
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["topic"], "lastMessage", [], "any", false, false, false, 57), "d/m/Y H:i:s"), "html", null, true);
            echo "
                    </td>
";
            // line 64
            echo "                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "        </tbody>
    </table>
</div>


<script>
    \$('#topics > tbody > tr').click(function() {
        window.location.href = \"forum/topic/\" + \$(this).data(\"id\");
\t});
   
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "forum/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 66,  162 => 64,  157 => 57,  152 => 54,  146 => 49,  135 => 42,  129 => 40,  125 => 39,  120 => 36,  104 => 20,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Bienvenue !{% endblock %}

{% block body %}

<!-- Breadcrumb -->
<div class=\"col-sm-12\" id=\"breadcrumb\">
    >
   
</div>

<div class=\"col-xl-12\">
    <h1 class=\"page-name\">Forum</h1>
    <span>Tous les Forum</span>
</div>


    <div class=\"col-xl-12\" id=\"create-topic\">
        <a href=\"{{ path(\"newTopic\") }}\"><p><b>➕</b> Créer un nouveau Forum</p></a>
    </div>


<div class=\"col-xl-12 table-responsive text-nowrap\">
    <table class=\"table table-list\" id=\"topics\">
        <thead class=\"thead-dark\">
            <tr>
                <th scope=\"col\"><a href=\"#\" class=\"filterLink\">Nom du Forum</a></th>
                <th scope=\"col\"><a href=\"#\" title=\"Order by name\" class=\"filterLink\">Auteur</a></th>
                <th scope=\"col\"><a href=\"#\" title=\"Order by role\" class=\"filterLink\">Nombre de messages</a></th>
                <th scope=\"col\"><span class=\"filterLink\">date</span></th>

{#                {% if \"ROLE_ADMIN\" in app.user.roles %}#}
{#                <th scope=\"col\"><span class=\"filterLink\">supprimer</span></th>{% endif %}#}
{#                #}
            </tr>
        </head>
        <tbody>
            {% for topic in topics %}
                <tr data-id=\"{{ topic.id }}\" tabindex=\"0\">
                    <th scope=\"row\">
                            <span class=\"topic-title\">{{ topic.name }} [#{{topic.id}}] </span>
                        
                        
                    </th>
                    <td>
                        <p>
{#                            {{ topic.username }}#}
                        </p>
                    </td>
                    <td>
                        <p>
{#                            {{ topic.countMessage }}#}
                        </p>
                    </td>
                    <td>
                        {{ topic.lastMessage|date('d/m/Y H:i:s') }}
                    </td>
{#                    {% if \"ROLE_ADMIN\" in app.user.roles %}#}
{#                    <td>#}
{#                        <a href=\"{{ path('suppforum',{id: topic.id}) }}\" class=\"btn btn-danger\">supprimer le Forum</a>#}
{#                    </td>#}
{#                    {% endif %}#}
                </tr>
            {% endfor %}
        </tbody>
    </table>
</div>


<script>
    \$('#topics > tbody > tr').click(function() {
        window.location.href = \"forum/topic/\" + \$(this).data(\"id\");
\t});
   
</script>
{% endblock %}
", "forum/index.html.twig", "G:\\PFEE-main\\templates\\forum\\index.html.twig");
    }
}
