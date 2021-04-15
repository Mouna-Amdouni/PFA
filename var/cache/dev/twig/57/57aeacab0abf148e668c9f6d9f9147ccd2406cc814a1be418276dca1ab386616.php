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

/* association/index.html.twig */
class __TwigTemplate_d6dbcf6597ea85b2664e525b51afaa7d58e252ec266b09044c415a1abdc72617 extends Template
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
        // line 48
        return "admin/bars.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "association/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "association/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/bars.html.twig", "association/index.html.twig", 48);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 50
    public function block_contenpage($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenpage"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenpage"));

        // line 51
        echo "    <div class=\"\">
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
                            <li><a href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("newAss", ["idPA" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 66, $this->source); })()), "user", [], "any", false, false, false, 66), "id", [], "any", false, false, false, 66)]), "html", null, true);
        echo "\" class=\"btn btn-success\">NEW</a>
                            </li>
                        </ul>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"x_content\">
                        <div class=\"row\">
                            <form action=\"";
        // line 73
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
        // line 118
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
        return "association/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 118,  95 => 73,  85 => 66,  68 => 51,  58 => 50,  35 => 48,);
    }

    public function getSourceContext()
    {
        return new Source("{#{% extends \"admin/bars.html.twig\" %}#}

{#{% block title %}Association index{% endblock %}#}

{#{% block body %}#}
{#    <h1>Association index</h1>#}

{#    <table class=\"table\">#}
{#        <thead>#}
{#            <tr>#}
{#                <th>Id</th>#}
{#                <th>Titre</th>#}
{#                <th>Siege</th>#}
{#                <th>But</th>#}
{#                <th>Logo</th>#}
{#                <th>Adresse</th>#}
{#                <th>NombreMembre</th>#}
{#                <th>actions</th>#}
{#            </tr>#}
{#        </thead>#}
{#        <tbody>#}
{#        {% for association in associations %}#}
{#            <tr>#}
{#                <td>{{ association.id }}</td>#}
{#                <td>{{ association.titre }}</td>#}
{#                <td>{{ association.siege }}</td>#}
{#                <td>{{ association.but }}</td>#}
{#             <td>   <img width=\"50px\" height=\"50px\" src=\" {{ asset('uploads/images/'  ~ association.logo) }}\" alt=\"Awesome Image\">#}
{#             </td>#}
{#                <td>{{ association.logo }}</td>#}
{#                <td>{{ association.adresse }}</td>#}
{#                <td>{{ association.nombreMembre }}</td>#}
{#                <td>#}
{#                    <a href=\"{{ path('association_show', {'id': association.id}) }}\">show</a>#}
{#                    <a href=\"{{ path('association_edit', {'id': association.id}) }}\">edit</a>#}
{#                </td>#}
{#            </tr>#}
{#        {% else %}#}
{#            <tr>#}
{#                <td colspan=\"8\">no records found</td>#}
{#            </tr>#}
{#        {% endfor %}#}
{#        </tbody>#}
{#    </table>#}

{#    <a href=\"{{ path('newAss',{'idPA':app.user.id}) }}\">Create new</a>#}
{#{% endblock %}#}
{% extends \"admin/bars.html.twig\" %}

{% block contenpage %}
    <div class=\"\">
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
                            <li><a href=\"{{ path('newAss',{'idPA':app.user.id}) }}\" class=\"btn btn-success\">NEW</a>
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
{#                                {% for categorie in categories|filter(categorie => not categorie.deleted)  %}#}
{#                                    <tr>#}
{#                                        <td><input type=\"checkbox\" class=\"chkgrp\" name=\"chkgrp[]\" value=\"{{ categorie.id }}\"></td>#}
{#                                        <td>{{ categorie.libelle }}</td>#}
{#                                        <td>{%  if categorie.categorieParente %} {{ categorie.categorieParente.libelle }} {% endif %}</td>#}
{#                                        <td><a class=\"btn btn-primary\" href=\"{{ path('app_admin_edit_categorie',{\"id\":categorie.id}) }}\"><i class=\"fa fa-edit\"></i></a></td>#}
{#                                        <td>#}
{#                                            {%  if categorie.valid %}#}
{#                                                <a class=\"btn btn-success activate-link\" href=\"{{ path('app_admin_changevalidite_categorie', {'id': categorie.id}) }}\"> <i class=\"fa fa-check\"></i></a>#}
{#                                            {% else %}#}
{#                                                <a class=\"btn btn-warning activate-link\" href=\"{{ path('app_admin_changevalidite_categorie', {'id': categorie.id}) }}\"> <i class=\"fa fa-times\"></i></a>#}
{#                                            {% endif %}#}
{#                                        </td>#}
{#                                        <td><a href=\"{{ path('app_admin_delete_categorie', {'id': categorie.id}) }}\" class=\"btn btn-danger disable-btn del-link\" type=\"submit\" ><i class=\"fa fa-trash\"></i></a></td>#}
{#                                    </tr>#}
{#                                {% endfor %}#}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "association/index.html.twig", "G:\\PFEE-main\\templates\\association\\index.html.twig");
    }
}
