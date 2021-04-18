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
        echo "    <h1>Salut ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "user", [], "any", false, false, false, 3), "nomComplet", [], "any", false, false, false, 3), "html", null, true);
        echo "</h1>

</br>
</br>
</br>
<h2>Liste de vos anciennes conversations</h2>

    </br>
    </br>
    </br>
<div class=\"w3-container\">
<ul class=\"w3-ul w3-border\">

    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, (isset($context["topics"]) || array_key_exists("topics", $context) ? $context["topics"] : (function () { throw new RuntimeError('Variable "topics" does not exist.', 16, $this->source); })()), function ($__topics__) use ($context, $macros) { $context["topics"] = $__topics__; return  !twig_get_attribute($this->env, $this->source, (isset($context["topics"]) || array_key_exists("topics", $context) ? $context["topics"] : (function () { throw new RuntimeError('Variable "topics" does not exist.', 16, $this->source); })()), "deleted", [], "any", false, false, false, 16); }));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 17
            echo "    <li>
        <span><img class=\"msg-img\" src=\" ";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["t"], "author", [], "any", false, false, false, 18), "logo", [], "any", false, false, false, 18))), "html", null, true);
            echo "\" alt=\"Awesome Image\"> <h4>  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["t"], "author", [], "any", false, false, false, 18), "nomComplet", [], "any", false, false, false, 18), "html", null, true);
            echo "</h4></span>
        <h4>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "name", [], "any", false, false, false, 19), "html", null, true);
            echo "</h4>
        <a style=\" float : right ; background-color: red ; color: white; padding: 15px 25px;text-align: center;text-decoration: none;display: inline-block;\" href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteT", ["id" => twig_get_attribute($this->env, $this->source, $context["t"], "id", [], "any", false, false, false, 20)]), "html", null, true);
            echo "\">Supprimer</a></span>



        <a style=\" background-color: limegreen ; color: white; padding: 15px 25px;text-align: center;text-decoration: none;display: inline-block;\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("topic", ["id" => twig_get_attribute($this->env, $this->source, $context["t"], "id", [], "any", false, false, false, 24)]), "html", null, true);
            echo "\">Répondre</a>
    </li>



        </br>
        </br>
        </br>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "
</ul>

</div>




";
        
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
        return array (  125 => 34,  109 => 24,  102 => 20,  98 => 19,  92 => 18,  89 => 17,  85 => 16,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin/bars.html.twig\" %}
{% block contenpage %}
    <h1>Salut {{ app.user.nomComplet }}</h1>

</br>
</br>
</br>
<h2>Liste de vos anciennes conversations</h2>

    </br>
    </br>
    </br>
<div class=\"w3-container\">
<ul class=\"w3-ul w3-border\">

    {% for t in topics|filter(topics => not topics.deleted)  %}
    <li>
        <span><img class=\"msg-img\" src=\" {{ asset('uploads/images/'  ~ t.author.logo) }}\" alt=\"Awesome Image\"> <h4>  {{ t.author.nomComplet }}</h4></span>
        <h4>{{ t.name }}</h4>
        <a style=\" float : right ; background-color: red ; color: white; padding: 15px 25px;text-align: center;text-decoration: none;display: inline-block;\" href=\"{{ path('deleteT', {'id': t.id}) }}\">Supprimer</a></span>



        <a style=\" background-color: limegreen ; color: white; padding: 15px 25px;text-align: center;text-decoration: none;display: inline-block;\" href=\"{{ path('topic', {'id': t.id}) }}\">Répondre</a>
    </li>



        </br>
        </br>
        </br>

                    {% endfor %}

</ul>

</div>




{% endblock %}


", "consultant/chats.html.twig", "C:\\xampp\\htdocs\\PFA\\templates\\consultant\\chats.html.twig");
    }
}
