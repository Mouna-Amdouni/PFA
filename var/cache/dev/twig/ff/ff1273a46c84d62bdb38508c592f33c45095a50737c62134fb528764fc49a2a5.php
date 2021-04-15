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
        // line 2
        return "admin/bars.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proprietaireAssociation/association/association.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proprietaireAssociation/association/association.html.twig"));

        $this->parent = $this->loadTemplate("admin/bars.html.twig", "proprietaireAssociation/association/association.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_contenpage($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenpage"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenpage"));

        // line 5
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
        // line 24
        echo "
                            </li>
                        </ul>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"x_content\">
                        <div class=\"row\">
";
        // line 41
        echo "
";
        // line 43
        echo "                            <table id=\"example\" class=\"display table table-striped table-bordered dataminetables\" >
                                <thead>
                                <th><input type=\"checkbox\" id=\"select_all\" name=\"select_all\"></th>
                                <th>Titre</th>
                                <th>Siege</th>
                                <th>But</th>
                                <th>logo</th>
                                <th>Adresse</th>
                                <th>Nombre des membres</th>



                                <th>Modifier</th>
                                <th>Ajouter d'autre informations</th>
";
        // line 58
        echo "                                </thead>
                                <tbody>
                                                                ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, $context["associations"], function ($__associations__) use ($context, $macros) { $context["associations"] = $__associations__; return  !twig_get_attribute($this->env, $this->source, $context["associations"], "deleted", [], "any", false, false, false, 60); }));
        foreach ($context['_seq'] as $context["_key"] => $context["associations"]) {
            // line 61
            echo "                                                                    ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "user", [], "any", false, false, false, 61), "id", [], "any", false, false, false, 61), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["associations"], "UserA", [], "any", false, false, false, 61), "id", [], "any", false, false, false, 61)))) {
                // line 62
                echo "
                                                                    <tr>
                                                                        <td><input type=\"checkbox\" class=\"chkgrp\" name=\"chkgrp[]\" value=\"";
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
                                                                                     <td>   <img width=\"50px\" height=\"50px\" src=\" ";
                // line 68
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["associations"], "logo", [], "any", false, false, false, 68))), "html", null, true);
                echo "\" alt=\"Awesome Image\">
                                                                                     </td>
                                                                                        <td>";
                // line 70
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["associations"], "adresse", [], "any", false, false, false, 70), "html", null, true);
                echo "</td>
                                                                                        <td>";
                // line 71
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["associations"], "nombreMembre", [], "any", false, false, false, 71), "html", null, true);
                echo "</td>
";
                // line 73
                echo "                                                                        <td><a class=\"btn btn-primary\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("association_editP", ["id" => twig_get_attribute($this->env, $this->source, $context["associations"], "id", [], "any", false, false, false, 73)]), "html", null, true);
                echo "\"><i class=\"fa fa-edit\"></i></a></td>
                                                                        <td><a class=\"btn btn-primary\" href=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("association_ajoutInfo", ["id" => twig_get_attribute($this->env, $this->source, $context["associations"], "id", [], "any", false, false, false, 74)]), "html", null, true);
                echo "\"><i class=\"fa fa-plus\"></i></a></td>

                                                                        ";
                // line 84
                echo "                                                                    </tr>
                                                                    ";
            }
            // line 86
            echo "
                                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['associations'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
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
        return array (  180 => 88,  173 => 86,  169 => 84,  164 => 74,  159 => 73,  155 => 71,  151 => 70,  146 => 68,  142 => 67,  138 => 66,  134 => 65,  130 => 64,  126 => 62,  123 => 61,  119 => 60,  115 => 58,  99 => 43,  96 => 41,  87 => 24,  68 => 5,  58 => 4,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends \"admin/bars.html.twig\" %}

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
{#                            <li><a href=\"{{ path('newAss',{'idPA':app.user.id}) }}\" class=\"btn btn-success\">NEW</a>#}
{#                            <li><a href=\"{{ path('association_new') }}\" class=\"btn btn-success\">NEW</a>#}

                            </li>
                        </ul>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"x_content\">
                        <div class=\"row\">
{#                            <form action=\"{{ path('groupaction_association') }}\" id=\"grpaction\" method=\"post\" name=\"grpaction\">#}
{#                                <div class=\"form-group form-inline\">#}
{#                                    <select class=\"form-control\" name=\"action\" required id=\"action_select\">#}
{#                                        <option value=\"\">Action de groupe</option>#}
{#                                        <option value=\"desactiver\">Desactiver</option>#}
{#                                        <option value=\"activer\">Activer</option>#}
{#                                        <option value=\"supprimer\">Supprimer</option>#}
{#                                    </select>#}
{#                                    <button class=\"btn btn-primary\" type=\"submit\">Go!!</button>#}
{#                                </div>#}

{#                            </form>#}
                            <table id=\"example\" class=\"display table table-striped table-bordered dataminetables\" >
                                <thead>
                                <th><input type=\"checkbox\" id=\"select_all\" name=\"select_all\"></th>
                                <th>Titre</th>
                                <th>Siege</th>
                                <th>But</th>
                                <th>logo</th>
                                <th>Adresse</th>
                                <th>Nombre des membres</th>



                                <th>Modifier</th>
                                <th>Ajouter d'autre informations</th>
{#                                <th>Suprimer</th>#}
                                </thead>
                                <tbody>
                                                                {% for associations in associations|filter(associations => not associations.deleted)  %}
                                                                    {% if app.user.id == associations.UserA.id %}

                                                                    <tr>
                                                                        <td><input type=\"checkbox\" class=\"chkgrp\" name=\"chkgrp[]\" value=\"{{ associations.id }}\"></td>
                                                                        <td>{{ associations.titre }}</td>
                                                                                        <td>{{ associations.siege }}</td>
                                                                                        <td>{{ associations.but }}</td>
                                                                                     <td>   <img width=\"50px\" height=\"50px\" src=\" {{ asset('uploads/images/'  ~ associations.logo) }}\" alt=\"Awesome Image\">
                                                                                     </td>
                                                                                        <td>{{ associations.adresse }}</td>
                                                                                        <td>{{ associations.nombreMembre }}</td>
{#                                                                        <td>{%  if categorie.categorieParente %} {{ categorie.categorieParente.libelle }} {% endif %}</td>#}
                                                                        <td><a class=\"btn btn-primary\" href=\"{{ path('association_editP',{\"id\":associations.id}) }}\"><i class=\"fa fa-edit\"></i></a></td>
                                                                        <td><a class=\"btn btn-primary\" href=\"{{ path('association_ajoutInfo',{\"id\":associations.id}) }}\"><i class=\"fa fa-plus\"></i></a></td>

                                                                        {#                                                                        <td>#}
{#                                                                            {%  if associations.valid %}#}
{#                                                                                <a class=\"btn btn-success activate-link\" href=\"{{ path('changevalidite_association', {'id': associations.id}) }}\"> <i class=\"fa fa-check\"></i></a>#}
{#                                                                            {% else %}#}
{#                                                                                <a class=\"btn btn-warning activate-link\" href=\"{{ path('changevalidite_association', {'id': associations.id}) }}\"> <i class=\"fa fa-times\"></i></a>#}
{#                                                                            {% endif %}#}
{#                                                                        </td>#}
{#                                                                        <td><a href=\"{{ path('association_deleteP', {'id': associations.id}) }}\" class=\"btn btn-danger disable-btn del-link\" type=\"submit\" ><i class=\"fa fa-trash\"></i></a></td>#}
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
