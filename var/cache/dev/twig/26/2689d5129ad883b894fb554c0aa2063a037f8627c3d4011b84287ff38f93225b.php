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

/* proprietaireAssociation/opportunites/opportunite.html.twig */
class __TwigTemplate_b5ed912b0fc2d9efb03970028be176cba71b6442800ad6dd8c59f4ae722751d0 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proprietaireAssociation/opportunites/opportunite.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proprietaireAssociation/opportunites/opportunite.html.twig"));

        $this->parent = $this->loadTemplate("admin/bars.html.twig", "proprietaireAssociation/opportunites/opportunite.html.twig", 2);
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
        echo "    ";
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PASSOCIATION"))) {
            // line 6
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
                            <h2>Liste des opportunités</h2>
                            <ul class=\"nav navbar-right panel_toolbox\">
                                ";
            // line 23
            echo "
                            </ul>
                            <div class=\"clearfix\"></div>
                        </div>
                        <div class=\"x_content\">
                            <div class=\"row\">
";
            // line 33
            echo "
";
            // line 38
            echo "
";
            // line 40
            echo "                                <table id=\"example\" class=\"display table table-striped table-bordered dataminetables\" >
                                    <thead>
                                    <th><input type=\"checkbox\" id=\"select_all\" name=\"select_all\"></th>

                                    <th>Titre</th>


                                    <th>Région</th>
                                    <th>Association</th>





                                    <th>Modifier</th>

                                    <th>Suprimer</th>
                                    </thead>
                                    <tbody>
                                    ";
            // line 59
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["opportunites"]) || array_key_exists("opportunites", $context) ? $context["opportunites"] : (function () { throw new RuntimeError('Variable "opportunites" does not exist.', 59, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["opportunite"]) {
                // line 60
                echo "                                        ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "user", [], "any", false, false, false, 60), "id", [], "any", false, false, false, 60) === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["opportunite"], "lanceur", [], "any", false, false, false, 60), "id", [], "any", false, false, false, 60))) {
                    // line 61
                    echo "                                        <tr>
                                            <td><input type=\"checkbox\" class=\"chkgrp\" name=\"chkgrp[]\" value=\"";
                    // line 62
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opportunite"], "id", [], "any", false, false, false, 62), "html", null, true);
                    echo "\"></td>

                                            <td>";
                    // line 64
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opportunite"], "titre", [], "any", false, false, false, 64), "html", null, true);
                    echo "</td>
";
                    // line 66
                    echo "

";
                    // line 70
                    echo "
                                            <td>";
                    // line 71
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opportunite"], "region", [], "any", false, false, false, 71), "html", null, true);
                    echo "</td>
                                            <td>";
                    // line 72
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["opportunite"], "association", [], "any", false, false, false, 72), "titre", [], "any", false, false, false, 72), "html", null, true);
                    echo "</td>

                                            <td><a class=\"btn btn-primary\" href=\"";
                    // line 74
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("opportunite_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["opportunite"], "id", [], "any", false, false, false, 74)]), "html", null, true);
                    echo "\"><i class=\"fa fa-edit\"></i></a></td>

";
                    // line 77
                    echo "                                            <td><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dd", ["id" => twig_get_attribute($this->env, $this->source, $context["opportunite"], "id", [], "any", false, false, false, 77)]), "html", null, true);
                    echo "\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\" class=\"btn btn-danger\" ><i class=\"fa fa-trash\"></i></a></td>

                                        </tr>
                                        ";
                }
                // line 81
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opportunite'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            echo "                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    ";
        } else {
            // line 91
            echo "        <h1><strong>404</strong>  Vous n'avez pas l'acces</h1>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "proprietaireAssociation/opportunites/opportunite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 91,  178 => 82,  172 => 81,  164 => 77,  159 => 74,  154 => 72,  150 => 71,  147 => 70,  143 => 66,  139 => 64,  134 => 62,  131 => 61,  128 => 60,  124 => 59,  103 => 40,  100 => 38,  97 => 33,  89 => 23,  71 => 6,  68 => 5,  58 => 4,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends \"admin/bars.html.twig\" %}

{% block contenpage %}
    {% if is_granted('ROLE_ADMIN') or  is_granted('ROLE_PASSOCIATION')  %}

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
                            <h2>Liste des opportunités</h2>
                            <ul class=\"nav navbar-right panel_toolbox\">
                                {#                            <li><a href=\"{{ path('newAss',{'idPA':app.user.id}) }}\" class=\"btn btn-success\">NEW</a>#}

                            </ul>
                            <div class=\"clearfix\"></div>
                        </div>
                        <div class=\"x_content\">
                            <div class=\"row\">
{#                                <form action=\"{{ path('groupaction_association') }}\" id=\"grpaction\" method=\"post\" name=\"grpaction\">#}
{#                                    <div class=\"form-group form-inline\">#}
{#                                        <select class=\"form-control\" name=\"action\" required id=\"action_select\">#}
{#                                            <option value=\"\">Action de groupe</option>#}

{#                                            <option value=\"supprimer\">Supprimer</option>#}
{#                                        </select>#}
{#                                        <button class=\"btn btn-primary\" type=\"submit\">Go!!</button>#}
{#                                    </div>#}

{#                                </form>#}
                                <table id=\"example\" class=\"display table table-striped table-bordered dataminetables\" >
                                    <thead>
                                    <th><input type=\"checkbox\" id=\"select_all\" name=\"select_all\"></th>

                                    <th>Titre</th>


                                    <th>Région</th>
                                    <th>Association</th>





                                    <th>Modifier</th>

                                    <th>Suprimer</th>
                                    </thead>
                                    <tbody>
                                    {% for opportunite in opportunites %}
                                        {% if app.user.id is same as opportunite.lanceur.id %}
                                        <tr>
                                            <td><input type=\"checkbox\" class=\"chkgrp\" name=\"chkgrp[]\" value=\"{{ opportunite.id }}\"></td>

                                            <td>{{ opportunite.titre }}</td>
{#                                            <td>{{ opportunite.typeOffre }}</td>#}


{#                                            <td>   <img width=\"50px\" height=\"50px\" src=\" {{ asset('uploads/images/'  ~ opportunite.image) }}\" alt=\"Awesome Image\">#}
{#                                            </td>#}

                                            <td>{{ opportunite.region }}</td>
                                            <td>{{ opportunite.association.titre }}</td>

                                            <td><a class=\"btn btn-primary\" href=\"{{ path('opportunite_edit',{\"id\":opportunite.id}) }}\"><i class=\"fa fa-edit\"></i></a></td>

{#                                            <td><a href=\"{{ path('dd',{\"id\":opportunite.id})}}\" class=\"btn btn-danger disable-btn del-link\" type=\"submit\" ><i class=\"fa fa-trash\"></i></a></td>#}
                                            <td><a href=\"{{ path('dd',{\"id\":opportunite.id})}}\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\" class=\"btn btn-danger\" ><i class=\"fa fa-trash\"></i></a></td>

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
    {% else %}
        <h1><strong>404</strong>  Vous n'avez pas l'acces</h1>
    {% endif %}
{% endblock %}
", "proprietaireAssociation/opportunites/opportunite.html.twig", "C:\\xampp\\htdocs\\PFA\\templates\\proprietaireAssociation\\opportunites\\opportunite.html.twig");
    }
}
