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

/* admin/opportunite/opportunite.html.twig */
class __TwigTemplate_52afedad819db088059f8e1fffff582704fcea4a5f014743e3fbe728f74b19ac extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/opportunite/opportunite.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/opportunite/opportunite.html.twig"));

        $this->parent = $this->loadTemplate("admin/bars.html.twig", "admin/opportunite/opportunite.html.twig", 2);
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
            // line 31
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("groupaction_association");
            echo "\" id=\"grpaction\" method=\"post\" name=\"grpaction\">
                                <div class=\"form-group form-inline\">
                                    <select class=\"form-control\" name=\"action\" required id=\"action_select\">
                                        <option value=\"\">Action de groupe</option>
                                       
                                        <option value=\"supprimer\">Supprimer</option>
                                    </select>
                                    <button class=\"btn btn-primary\" type=\"submit\">Go!!</button>
                                </div>

                            </form>
                            <table id=\"example\" class=\"display table table-striped table-bordered dataminetables\" >
                                <thead>
                                <th><input type=\"checkbox\" id=\"select_all\" name=\"select_all\"></th>
                                <th>Lanceur</th>
                                <th>Titre</th>
                                <th>Type</th>
                                <th>Logo</th>
                                <th>Région</th>
                                



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
                echo "                                                                    <tr>
                                                                        <td><input type=\"checkbox\" class=\"chkgrp\" name=\"chkgrp[]\" value=\"";
                // line 61
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opportunite"], "id", [], "any", false, false, false, 61), "html", null, true);
                echo "\"></td>
                                                                        <td>";
                // line 62
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opportunite"], "lanceur", [], "any", false, false, false, 62), "html", null, true);
                echo "</td>
                                                                                        <td>";
                // line 63
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opportunite"], "titre", [], "any", false, false, false, 63), "html", null, true);
                echo "</td>
                                                                                        <td>";
                // line 64
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opportunite"], "type", [], "any", false, false, false, 64), "html", null, true);
                echo "</td>
                                                                                       
                                                                                        
                                                                                     <td>   <img width=\"50px\" height=\"50px\" src=\" ";
                // line 67
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["opportunite"], "logo", [], "any", false, false, false, 67))), "html", null, true);
                echo "\" alt=\"Awesome Image\">
                                                                                     </td>
                                                                                        
                                                                                        <td>";
                // line 70
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opportunite"], "region", [], "any", false, false, false, 70), "html", null, true);
                echo "</td>
                                                                        <td><a class=\"btn btn-primary\" href=\"";
                // line 71
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("association_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["opportunite"], "id", [], "any", false, false, false, 71)]), "html", null, true);
                echo "\"><i class=\"fa fa-edit\"></i></a></td>
                                                                        
                                                                        <td><a href=\"";
                // line 73
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("opportunite_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["opportunite"], "id", [], "any", false, false, false, 73)]), "html", null, true);
                echo "\" class=\"btn btn-danger disable-btn del-link\" type=\"submit\" ><i class=\"fa fa-trash\"></i></a></td>
                                                                    </tr>
                                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opportunite'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
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
            // line 85
            echo "    <h1><strong>404</strong>  Vous n'avez pas l'acces</h1>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/opportunite/opportunite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 85,  181 => 76,  172 => 73,  167 => 71,  163 => 70,  157 => 67,  151 => 64,  147 => 63,  143 => 62,  139 => 61,  136 => 60,  132 => 59,  101 => 31,  89 => 23,  71 => 6,  68 => 5,  58 => 4,  35 => 2,);
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
                                       
                                        <option value=\"supprimer\">Supprimer</option>
                                    </select>
                                    <button class=\"btn btn-primary\" type=\"submit\">Go!!</button>
                                </div>

                            </form>
                            <table id=\"example\" class=\"display table table-striped table-bordered dataminetables\" >
                                <thead>
                                <th><input type=\"checkbox\" id=\"select_all\" name=\"select_all\"></th>
                                <th>Lanceur</th>
                                <th>Titre</th>
                                <th>Type</th>
                                <th>Logo</th>
                                <th>Région</th>
                                



                                <th>Modifier</th>
                               
                                <th>Suprimer</th>
                                </thead>
                                <tbody>
                                                                {% for opportunite in opportunites %}
                                                                    <tr>
                                                                        <td><input type=\"checkbox\" class=\"chkgrp\" name=\"chkgrp[]\" value=\"{{ opportunite.id }}\"></td>
                                                                        <td>{{ opportunite.lanceur }}</td>
                                                                                        <td>{{ opportunite.titre }}</td>
                                                                                        <td>{{ opportunite.type }}</td>
                                                                                       
                                                                                        
                                                                                     <td>   <img width=\"50px\" height=\"50px\" src=\" {{ asset('uploads/images/'  ~ opportunite.logo) }}\" alt=\"Awesome Image\">
                                                                                     </td>
                                                                                        
                                                                                        <td>{{ opportunite.region }}</td>
                                                                        <td><a class=\"btn btn-primary\" href=\"{{ path('association_edit',{\"id\":opportunite.id}) }}\"><i class=\"fa fa-edit\"></i></a></td>
                                                                        
                                                                        <td><a href=\"{{ path('opportunite_delete', {'id': opportunite.id}) }}\" class=\"btn btn-danger disable-btn del-link\" type=\"submit\" ><i class=\"fa fa-trash\"></i></a></td>
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
", "admin/opportunite/opportunite.html.twig", "G:\\PFEE-main\\templates\\admin\\opportunite\\opportunite.html.twig");
    }
}
