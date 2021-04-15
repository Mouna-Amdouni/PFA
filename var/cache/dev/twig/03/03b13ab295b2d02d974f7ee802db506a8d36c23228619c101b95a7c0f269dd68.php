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

/* forum/topic.html.twig */
class __TwigTemplate_9f62485ed2c04ac8e66cb1d89aec2e2ce951d02c4906b2678a9759aabceb34f1 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forum/topic.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forum/topic.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "forum/topic.html.twig", 1);
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

        echo " - forum - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["topic"]) || array_key_exists("topic", $context) ? $context["topic"] : (function () { throw new RuntimeError('Variable "topic" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        echo " ";
        
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
    <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum");
        echo "\"><span>Forum</span></a>
    >
    <span>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["topic"]) || array_key_exists("topic", $context) ? $context["topic"] : (function () { throw new RuntimeError('Variable "topic" does not exist.', 12, $this->source); })()), "name", [], "any", false, false, false, 12), "html", null, true);
        echo " [#";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["topic"]) || array_key_exists("topic", $context) ? $context["topic"] : (function () { throw new RuntimeError('Variable "topic" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "]</span>
</div>
<!-- END Breadcrumb -->

<div class=\"col-xl-12\">
    <h1 class=\"page-name\">";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["topic"]) || array_key_exists("topic", $context) ? $context["topic"] : (function () { throw new RuntimeError('Variable "topic" does not exist.', 17, $this->source); })()), "name", [], "any", false, false, false, 17), "html", null, true);
        echo "</h1>
</div>

";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 21
            echo "    
        <div class=\"col-xl-12 message\">
";
            // line 24
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editMessage", ["id" => twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 24)]), "html", null, true);
            echo "\">
                    <p class=\"edit-message\"><i>✍</i><br/>Edit</p>
                </a>
";
            // line 28
            echo "            <div class=\"row\">
                <div class=\"col-md-3 message-user\" style=\"border: solid 1px white\">
";
            // line 31
            echo "                    <p class=\"message-username\">
";
            // line 35
            echo "                        </span>
                    </p>
                    <p>
                        <span>";
            // line 38
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "publicationDate", [], "any", false, false, false, 38), "d/m/Y H:i:s"), "html", null, true);
            echo "</span>
                       
                    </p>
                </div>
                <div class=\"col-md-9 message-body\" style=\"border: solid 1px white; width: 100%;\">
                    <div class=\"message-content\">
                        <p>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "content", [], "any", false, false, false, 44), "html", null, true);
            echo "</p>
                    </div>
                    
                </div>
            </div>
        </div>
    
    
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "<div class=\"col-xl-12 message\" id=\"new-message\">
    ";
        // line 54
        if ((null === twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "user", [], "any", false, false, false, 54))) {
            // line 55
            echo "        <div class=\"bg-danger\" id=\"no-new-message\">
            <p class=\"no-form\">Vous devez être connecté pour écrire un commentaire</p>
        </div>
    
        ";
        } else {
            // line 60
            echo "            <div id=\"new-message-form\">
                ";
            // line 61
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), 'form_start');
            echo "
                <label for=\"new_message_content\" class=\"required\">NOUVEAU commentaire: ";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["topic"]) || array_key_exists("topic", $context) ? $context["topic"] : (function () { throw new RuntimeError('Variable "topic" does not exist.', 62, $this->source); })()), "name", [], "any", false, false, false, 62), "html", null, true);
            echo "</label>
                ";
            // line 63
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), 'errors');
            echo "
                ";
            // line 64
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), 'rest');
            echo "
                ";
            // line 65
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), 'form_end');
            echo "
            </div>
        
    ";
        }
        // line 69
        echo "</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "forum/topic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 69,  199 => 65,  195 => 64,  191 => 63,  187 => 62,  183 => 61,  180 => 60,  173 => 55,  171 => 54,  168 => 53,  153 => 44,  144 => 38,  139 => 35,  136 => 31,  132 => 28,  125 => 24,  121 => 21,  117 => 20,  111 => 17,  101 => 12,  96 => 10,  90 => 6,  80 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} - forum - {{ topic.name }} {% endblock %}

{% block body %}

<!-- Breadcrumb -->
<div class=\"col-sm-12\" id=\"breadcrumb\">
    >
    <a href=\"{{ path('forum') }}\"><span>Forum</span></a>
    >
    <span>{{ topic.name }} [#{{ topic.id }}]</span>
</div>
<!-- END Breadcrumb -->

<div class=\"col-xl-12\">
    <h1 class=\"page-name\">{{ topic.name }}</h1>
</div>

{% for message in messages %}
    
        <div class=\"col-xl-12 message\">
{#            {% if (app.user and message.idUser == app.user.id ) or (\"ROLE_ADMIN\"   in app.user.roles) %}#}
                <a href=\"{{ path('editMessage',{id: message.id}) }}\">
                    <p class=\"edit-message\"><i>✍</i><br/>Edit</p>
                </a>
{#            {% endif %}#}
            <div class=\"row\">
                <div class=\"col-md-3 message-user\" style=\"border: solid 1px white\">
{#                    <img src=\"{{ asset('img/users/'~message.username~'.png')}}\" alt=\"{{ message.username }}' image de profile\">#}
                    <p class=\"message-username\">
{#                        {{ message.username }} #}
{#                        <span class=\"message-role {{ message.roles }}-role\">#}
{#                            <b>{{ message.roles | title }}</b>#}
                        </span>
                    </p>
                    <p>
                        <span>{{ message.publicationDate | date('d/m/Y H:i:s') }}</span>
                       
                    </p>
                </div>
                <div class=\"col-md-9 message-body\" style=\"border: solid 1px white; width: 100%;\">
                    <div class=\"message-content\">
                        <p>{{ message.content }}</p>
                    </div>
                    
                </div>
            </div>
        </div>
    
    
{% endfor %}
<div class=\"col-xl-12 message\" id=\"new-message\">
    {% if app.user is null %}
        <div class=\"bg-danger\" id=\"no-new-message\">
            <p class=\"no-form\">Vous devez être connecté pour écrire un commentaire</p>
        </div>
    
        {% else %}
            <div id=\"new-message-form\">
                {{ form_start(form) }}
                <label for=\"new_message_content\" class=\"required\">NOUVEAU commentaire: {{ topic.name }}</label>
                {{ form_errors(form) }}
                {{ form_rest(form) }}
                {{ form_end(form) }}
            </div>
        
    {% endif %}
</div>

{% endblock %}", "forum/topic.html.twig", "G:\\PFEE-main\\templates\\forum\\topic.html.twig");
    }
}
