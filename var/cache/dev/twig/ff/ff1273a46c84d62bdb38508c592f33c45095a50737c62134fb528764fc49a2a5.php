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

/* proprietaireAssociation/association/association.html.twig */
class __TwigTemplate_f4cabb8587f907883c6c8f698170c27770f1e471187785a239b546a8c054b116 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proprietaireAssociation/association/association.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proprietaireAssociation/association/association.html.twig"));

        $this->parent = $this->loadTemplate("admin/bars.html.twig", "proprietaireAssociation/association/association.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_contenpage($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenpage"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenpage"));

        // line 4
        echo "

    <div style=\"background-color: white\" class=\"\">
        <div class=\"page-title\">
            <div class=\"title_left\">
                <h5> Listing </h5>
            </div>
        </div>

        <div class=\"clearfix\"></div>

        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"x_panel\">
                    <div class=\"x_title\">
                        <h2>Liste des associations</h2>

                        <ul class=\"nav navbar-right panel_toolbox\">
                            ";
        // line 23
        echo "                            ";
        // line 24
        echo "
                            </li>
                        </ul>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"x_content\">
                        <div class=\"row\">
                            ";
        // line 32
        echo "                            ";
        // line 33
        echo "                            ";
        // line 34
        echo "                            ";
        // line 35
        echo "                            ";
        // line 36
        echo "                            ";
        // line 37
        echo "                            ";
        // line 38
        echo "                            ";
        // line 39
        echo "                            ";
        // line 40
        echo "                            ";
        // line 41
        echo "
                            ";
        // line 43
        echo "                            <table id=\"example\" class=\"display table table-striped table-bordered dataminetables\">
                                <thead>
                                <th><input type=\"checkbox\" id=\"select_all\" name=\"select_all\"></th>
                                <th>Titre</th>
                                <th>Siege</th>
                                <th>But</th>
                                <th>logo</th>
                                <th>Adresse</th>
                                <th>Nombre des membres</th>


                                <th>Ajouter une opportunité</th>
                                <th>Ajouter d'autre informations</th>
                                ";
        // line 57
        echo "                                </thead>
                                <tbody>
                                ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, $context["associations"], function ($__associations__) use ($context, $macros) { $context["associations"] = $__associations__; return  !twig_get_attribute($this->env, $this->source, $context["associations"], "deleted", [], "any", false, false, false, 59); }));
        foreach ($context['_seq'] as $context["_key"] => $context["associations"]) {
            // line 60
            echo "                                    ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "user", [], "any", false, false, false, 60), "id", [], "any", false, false, false, 60), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["associations"], "UserA", [], "any", false, false, false, 60), "id", [], "any", false, false, false, 60)))) {
                // line 61
                echo "
                                        <tr>
                                            <td><input type=\"checkbox\" class=\"chkgrp\" name=\"chkgrp[]\"
                                                       value=\"";
                // line 64
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["associations"], "id", [], "any", false, false, false, 64), "html", null, true);
                echo "\"></td>
                                            <td>";
                // line 65
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["associations"], "titre", [], "any", false, false, false, 65), "html", null, true);
                echo "</td>
                                            <td>";
                // line 66
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["associations"], "siege", [], "any", false, false, false, 66), "html", null, true);
                echo "</td>
                                            <td>";
                // line 67
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["associations"], "but", [], "any", false, false, false, 67), "html", null, true);
                echo "</td>
                                            <td><img width=\"50px\" height=\"50px\"
                                                     src=\" ";
                // line 69
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["associations"], "logo", [], "any", false, false, false, 69))), "html", null, true);
                echo "\"
                                                     alt=\"Awesome Image\">
                                            </td>
                                            <td>";
                // line 72
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["associations"], "adresse", [], "any", false, false, false, 72), "html", null, true);
                echo "</td>
                                            <td>";
                // line 73
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["associations"], "nombreMembre", [], "any", false, false, false, 73), "html", null, true);
                echo "</td>
                                            ";
                // line 75
                echo "                                            <td><a class=\"btn btn-primary\"
                                                   href=\"";
                // line 76
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("OP_new", ["id" => twig_get_attribute($this->env, $this->source, $context["associations"], "id", [], "any", false, false, false, 76)]), "html", null, true);
                echo "\"><i
                                                            class=\"fa fa-edit\"></i></a></td>
                                            <td><a class=\"btn btn-primary\"
                                                   href=\"";
                // line 79
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("association_ajoutInfo", ["id" => twig_get_attribute($this->env, $this->source, $context["associations"], "id", [], "any", false, false, false, 79)]), "html", null, true);
                echo "\"><i
                                                            class=\"fa fa-plus\"></i></a></td>

                                            ";
                // line 83
                echo "                                            ";
                // line 84
                echo "                                            ";
                // line 85
                echo "                                            ";
                // line 86
                echo "                                            ";
                // line 87
                echo "                                            ";
                // line 88
                echo "                                            ";
                // line 89
                echo "                                            ";
                // line 90
                echo "                                        </tr>
                                    ";
            }
            // line 92
            echo "
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['associations'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "proprietaireAssociation/association/association.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 94,  215 => 92,  211 => 90,  209 => 89,  207 => 88,  205 => 87,  203 => 86,  201 => 85,  199 => 84,  197 => 83,  191 => 79,  185 => 76,  182 => 75,  178 => 73,  174 => 72,  168 => 69,  163 => 67,  159 => 66,  155 => 65,  151 => 64,  146 => 61,  143 => 60,  139 => 59,  135 => 57,  120 => 43,  117 => 41,  115 => 40,  113 => 39,  111 => 38,  109 => 37,  107 => 36,  105 => 35,  103 => 34,  101 => 33,  99 => 32,  90 => 24,  88 => 23,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin/bars.html.twig\" %}

{% block contenpage %}


    <div style=\"background-color: white\" class=\"\">
        <div class=\"page-title\">
            <div class=\"title_left\">
                <h5> Listing </h5>
            </div>
        </div>

        <div class=\"clearfix\"></div>

        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"x_panel\">
                    <div class=\"x_title\">
                        <h2>Liste des associations</h2>

                        <ul class=\"nav navbar-right panel_toolbox\">
                            {# <li><a href=\"{{ path('newAss',{'idPA':app.user.id}) }}\" class=\"btn btn-success\">NEW</a> #}
                            {# <li><a href=\"{{ path('association_new') }}\" class=\"btn btn-success\">NEW</a> #}

                            </li>
                        </ul>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"x_content\">
                        <div class=\"row\">
                            {# <form action=\"{{ path('groupaction_association') }}\" id=\"grpaction\" method=\"post\" name=\"grpaction\"> #}
                            {# <div class=\"form-group form-inline\"> #}
                            {# <select class=\"form-control\" name=\"action\" required id=\"action_select\"> #}
                            {# <option value=\"\">Action de groupe</option> #}
                            {# <option value=\"desactiver\">Desactiver</option> #}
                            {# <option value=\"activer\">Activer</option> #}
                            {# <option value=\"supprimer\">Supprimer</option> #}
                            {# </select> #}
                            {# <button class=\"btn btn-primary\" type=\"submit\">Go!!</button> #}
                            {# </div> #}

                            {# </form> #}
                            <table id=\"example\" class=\"display table table-striped table-bordered dataminetables\">
                                <thead>
                                <th><input type=\"checkbox\" id=\"select_all\" name=\"select_all\"></th>
                                <th>Titre</th>
                                <th>Siege</th>
                                <th>But</th>
                                <th>logo</th>
                                <th>Adresse</th>
                                <th>Nombre des membres</th>


                                <th>Ajouter une opportunité</th>
                                <th>Ajouter d'autre informations</th>
                                {# <th>Suprimer</th> #}
                                </thead>
                                <tbody>
                                {% for associations in associations|filter(associations => not associations.deleted) %}
                                    {% if app.user.id == associations.UserA.id %}

                                        <tr>
                                            <td><input type=\"checkbox\" class=\"chkgrp\" name=\"chkgrp[]\"
                                                       value=\"{{ associations.id }}\"></td>
                                            <td>{{ associations.titre }}</td>
                                            <td>{{ associations.siege }}</td>
                                            <td>{{ associations.but }}</td>
                                            <td><img width=\"50px\" height=\"50px\"
                                                     src=\" {{ asset('uploads/images/'  ~ associations.logo) }}\"
                                                     alt=\"Awesome Image\">
                                            </td>
                                            <td>{{ associations.adresse }}</td>
                                            <td>{{ associations.nombreMembre }}</td>
                                            {# <td>{%  if categorie.categorieParente %} {{ categorie.categorieParente.libelle }} {% endif %}</td> #}
                                            <td><a class=\"btn btn-primary\"
                                                   href=\"{{ path('OP_new',{\"id\":associations.id}) }}\"><i
                                                            class=\"fa fa-edit\"></i></a></td>
                                            <td><a class=\"btn btn-primary\"
                                                   href=\"{{ path('association_ajoutInfo',{\"id\":associations.id}) }}\"><i
                                                            class=\"fa fa-plus\"></i></a></td>

                                            {# <td> #}
                                            {# {%  if associations.valid %} #}
                                            {# <a class=\"btn btn-success activate-link\" href=\"{{ path('changevalidite_association', {'id': associations.id}) }}\"> <i class=\"fa fa-check\"></i></a> #}
                                            {# {% else %} #}
                                            {# <a class=\"btn btn-warning activate-link\" href=\"{{ path('changevalidite_association', {'id': associations.id}) }}\"> <i class=\"fa fa-times\"></i></a> #}
                                            {# {% endif %} #}
                                            {# </td> #}
                                            {# <td><a href=\"{{ path('association_deleteP', {'id': associations.id}) }}\" class=\"btn btn-danger disable-btn del-link\" type=\"submit\" ><i class=\"fa fa-trash\"></i></a></td> #}
                                        </tr>
                                    {% endif %}

                                {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "proprietaireAssociation/association/association.html.twig", "G:\\PFEE-main\\templates\\proprietaireAssociation\\association\\association.html.twig");
    }
}
