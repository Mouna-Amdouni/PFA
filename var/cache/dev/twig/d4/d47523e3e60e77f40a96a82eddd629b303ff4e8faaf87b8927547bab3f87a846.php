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

/* admin/association/association.html.twig */
class __TwigTemplate_d1a2596da07e269e82dbe4c860a6f635e760fe038f29f25e3d3bafdaa9a1c990 extends Template
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
        // line 3
        return "admin/bars.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/association/association.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/association/association.html.twig"));

        $this->parent = $this->loadTemplate("admin/bars.html.twig", "admin/association/association.html.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_contenpage($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenpage"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenpage"));

        // line 7
        echo "    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 8
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
                        <a href=\"";
            // line 23
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("opportunitesAdmin");
            echo "\" class=\"btn btn-success\">Gèrer les opportunités</a>
                        <ul class=\"nav navbar-right panel_toolbox\">
";
            // line 26
            echo "                            <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("association_new");
            echo "\" class=\"btn btn-success\">NEW</a>

                            </li>
                        </ul>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"x_content\">
                        <div class=\"row\">
                            <form action=\"";
            // line 34
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("groupaction_association");
            echo "\" id=\"grpaction\" method=\"post\" name=\"grpaction\">
                                <div class=\"form-group form-inline\">
                                    <select class=\"form-control\" name=\"action\" required id=\"action_select\">
                                        <option value=\"\">Action de groupe</option>
                                        <option value=\"desactiver\">Desactiver</option>
                                        <option value=\"activer\">Activer</option>
                                        <option value=\"supprimer\">Supprimer</option>
                                    </select>
                                    <button class=\"btn btn-primary\" type=\"submit\">Go!!</button>
                                </div>

                            </form>
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
                                <th>Etat ?</th>
                                <th>Suprimer</th>
                                </thead>
                                <tbody>
                                                                ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, $context["associations"], function ($__associations__) use ($context, $macros) { $context["associations"] = $__associations__; return  !twig_get_attribute($this->env, $this->source, $context["associations"], "deleted", [], "any", false, false, false, 63); }));
            foreach ($context['_seq'] as $context["_key"] => $context["associations"]) {
                // line 64
                echo "                                                                    <tr>
                                                                        <td><input type=\"checkbox\" class=\"chkgrp\" name=\"chkgrp[]\" value=\"";
                // line 65
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["associations"], "id", [], "any", false, false, false, 65), "html", null, true);
                echo "\"></td>
                                                                        <td>";
                // line 66
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["associations"], "titre", [], "any", false, false, false, 66), "html", null, true);
                echo "</td>
                                                                                        <td>";
                // line 67
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["associations"], "siege", [], "any", false, false, false, 67), "html", null, true);
                echo "</td>
                                                                                        <td>";
                // line 68
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["associations"], "but", [], "any", false, false, false, 68), "html", null, true);
                echo "</td>
                                                                                     <td>   <img width=\"50px\" height=\"50px\" src=\" ";
                // line 69
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["associations"], "logo", [], "any", false, false, false, 69))), "html", null, true);
                echo "\" alt=\"Awesome Image\">
                                                                                     </td>
                                                                                        <td>";
                // line 71
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["associations"], "adresse", [], "any", false, false, false, 71), "html", null, true);
                echo "</td>
                                                                                        <td>";
                // line 72
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["associations"], "nombreMembre", [], "any", false, false, false, 72), "html", null, true);
                echo "</td>
";
                // line 74
                echo "                                                                        <td><a class=\"btn btn-primary\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("association_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["associations"], "id", [], "any", false, false, false, 74)]), "html", null, true);
                echo "\"><i class=\"fa fa-edit\"></i></a></td>
                                                                        <td>
                                                                            ";
                // line 76
                if (twig_get_attribute($this->env, $this->source, $context["associations"], "valid", [], "any", false, false, false, 76)) {
                    // line 77
                    echo "                                                                                <a class=\"btn btn-success activate-link\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("changevalidite_association", ["id" => twig_get_attribute($this->env, $this->source, $context["associations"], "id", [], "any", false, false, false, 77)]), "html", null, true);
                    echo "\"> <i class=\"fa fa-check\"></i></a>
                                                                            ";
                } else {
                    // line 79
                    echo "                                                                                <a class=\"btn btn-warning activate-link\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("changevalidite_association", ["id" => twig_get_attribute($this->env, $this->source, $context["associations"], "id", [], "any", false, false, false, 79)]), "html", null, true);
                    echo "\"> <i class=\"fa fa-times\"></i></a>
                                                                            ";
                }
                // line 81
                echo "                                                                        </td>
                                                                        <td><a href=\"";
                // line 82
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deletee_association", ["id" => twig_get_attribute($this->env, $this->source, $context["associations"], "id", [], "any", false, false, false, 82)]), "html", null, true);
                echo "\" class=\"btn btn-danger disable-btn del-link\" type=\"submit\" ><i class=\"fa fa-trash\"></i></a></td>
                                                                    </tr>
                                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['associations'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    ";
        } else {
            // line 94
            echo "    <h1><strong>404</strong>  Vous n'avez pas l'acces</h1>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/association/association.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 94,  205 => 85,  196 => 82,  193 => 81,  187 => 79,  181 => 77,  179 => 76,  173 => 74,  169 => 72,  165 => 71,  160 => 69,  156 => 68,  152 => 67,  148 => 66,  144 => 65,  141 => 64,  137 => 63,  105 => 34,  93 => 26,  88 => 23,  71 => 8,  68 => 7,  58 => 6,  35 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("

{% extends \"admin/bars.html.twig\" %}


{% block contenpage %}
    {% if is_granted('ROLE_ADMIN')   %}

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
                        <a href=\"{{ path('opportunitesAdmin') }}\" class=\"btn btn-success\">Gèrer les opportunités</a>
                        <ul class=\"nav navbar-right panel_toolbox\">
{#                            <li><a href=\"{{ path('newAss',{'idPA':app.user.id}) }}\" class=\"btn btn-success\">NEW</a>#}
                            <li><a href=\"{{ path('association_new') }}\" class=\"btn btn-success\">NEW</a>

                            </li>
                        </ul>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"x_content\">
                        <div class=\"row\">
                            <form action=\"{{ path('groupaction_association') }}\" id=\"grpaction\" method=\"post\" name=\"grpaction\">
                                <div class=\"form-group form-inline\">
                                    <select class=\"form-control\" name=\"action\" required id=\"action_select\">
                                        <option value=\"\">Action de groupe</option>
                                        <option value=\"desactiver\">Desactiver</option>
                                        <option value=\"activer\">Activer</option>
                                        <option value=\"supprimer\">Supprimer</option>
                                    </select>
                                    <button class=\"btn btn-primary\" type=\"submit\">Go!!</button>
                                </div>

                            </form>
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
                                <th>Etat ?</th>
                                <th>Suprimer</th>
                                </thead>
                                <tbody>
                                                                {% for associations in associations|filter(associations => not associations.deleted)  %}
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
                                                                        <td><a class=\"btn btn-primary\" href=\"{{ path('association_edit',{\"id\":associations.id}) }}\"><i class=\"fa fa-edit\"></i></a></td>
                                                                        <td>
                                                                            {%  if associations.valid %}
                                                                                <a class=\"btn btn-success activate-link\" href=\"{{ path('changevalidite_association', {'id': associations.id}) }}\"> <i class=\"fa fa-check\"></i></a>
                                                                            {% else %}
                                                                                <a class=\"btn btn-warning activate-link\" href=\"{{ path('changevalidite_association', {'id': associations.id}) }}\"> <i class=\"fa fa-times\"></i></a>
                                                                            {% endif %}
                                                                        </td>
                                                                        <td><a href=\"{{ path('deletee_association', {'id': associations.id}) }}\" class=\"btn btn-danger disable-btn del-link\" type=\"submit\" ><i class=\"fa fa-trash\"></i></a></td>
                                                                    </tr>
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
", "admin/association/association.html.twig", "C:\\xampp\\htdocs\\PFA\\templates\\admin\\association\\association.html.twig");
    }
}
