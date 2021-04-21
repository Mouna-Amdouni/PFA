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

/* admin/chats/chats.html.twig */
class __TwigTemplate_ce089dda95fc939a805175119c1e020ad3197c3d833f18bc1eb9fc3a63edeb5f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/chats/chats.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/chats/chats.html.twig"));

        $this->parent = $this->loadTemplate("admin/bars.html.twig", "admin/chats/chats.html.twig", 3);
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
                            <h2>Liste des conversations</h2>
                            <ul class=\"nav navbar-right panel_toolbox\">
                                ";
            // line 25
            echo "
                                </li>
                            </ul>
                            <div class=\"clearfix\"></div>
                        </div>
                        <div class=\"x_content\">
                            <div class=\"row\">
                                <form action=\"";
            // line 32
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("groupaction_forum");
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
                                    <th>id </th>
                                    <th>Nom Sujet</th>
                                    <th>Nom du proprietaire</th>




                                    <th>Etat ?</th>
                                    <th>Suprimer</th>
                                    </thead>
                                    <tbody>
                                    ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, twig_sort_filter((isset($context["chats"]) || array_key_exists("chats", $context) ? $context["chats"] : (function () { throw new RuntimeError('Variable "chats" does not exist.', 58, $this->source); })()))));
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                // line 59
                echo "                                        <tr>
                                            <td><input type=\"checkbox\" class=\"chkgrp\" name=\"chkgrp[]\" value=\"";
                // line 60
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 60), "html", null, true);
                echo "\"></td>
                                            <td>";
                // line 61
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 61), "html", null, true);
                echo "</td>
                                            <td>";
                // line 62
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "name", [], "any", false, false, false, 62), "html", null, true);
                echo "</td>
";
                // line 64
                echo "
                                            <td>";
                // line 65
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "author", [], "any", false, false, false, 65), "html", null, true);
                echo "</td>
<td>
                                                ";
                // line 67
                if (twig_get_attribute($this->env, $this->source, $context["c"], "valid", [], "any", false, false, false, 67)) {
                    // line 68
                    echo "                                                    <a class=\"btn btn-success activate-link\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chat_changeV", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 68)]), "html", null, true);
                    echo "\"> <i class=\"fa fa-check\"></i></a>
                                                ";
                } else {
                    // line 70
                    echo "                                                    <a class=\"btn btn-warning activate-link\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chat_changeV", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 70)]), "html", null, true);
                    echo "\"> <i class=\"fa fa-times\"></i></a>
                                                ";
                }
                // line 72
                echo "    <a  href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("topic", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 72)]), "html", null, true);
                echo "\"> show</a>

</td>
                                            <td><a href=\"";
                // line 75
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteT", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 75)]), "html", null, true);
                echo "\" class=\"btn btn-danger disable-btn del-link\" type=\"submit\" ><i class=\"fa fa-trash\"></i></a></td>
                                        </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
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
            // line 87
            echo "        <h1><strong>404</strong>  Vous n'avez pas l'acces</h1>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/chats/chats.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 87,  184 => 78,  175 => 75,  168 => 72,  162 => 70,  156 => 68,  154 => 67,  149 => 65,  146 => 64,  142 => 62,  138 => 61,  134 => 60,  131 => 59,  127 => 58,  98 => 32,  89 => 25,  71 => 8,  68 => 7,  58 => 6,  35 => 3,);
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
                            <h2>Liste des conversations</h2>
                            <ul class=\"nav navbar-right panel_toolbox\">
                                {#                            <li><a href=\"{{ path('newAss',{'idPA':app.user.id}) }}\" class=\"btn btn-success\">NEW</a>#}

                                </li>
                            </ul>
                            <div class=\"clearfix\"></div>
                        </div>
                        <div class=\"x_content\">
                            <div class=\"row\">
                                <form action=\"{{ path('groupaction_forum') }}\" id=\"grpaction\" method=\"post\" name=\"grpaction\">
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
                                    <th>id </th>
                                    <th>Nom Sujet</th>
                                    <th>Nom du proprietaire</th>




                                    <th>Etat ?</th>
                                    <th>Suprimer</th>
                                    </thead>
                                    <tbody>
                                    {% for c in chats|sort|reverse  %}
                                        <tr>
                                            <td><input type=\"checkbox\" class=\"chkgrp\" name=\"chkgrp[]\" value=\"{{ c.id }}\"></td>
                                            <td>{{ c.id }}</td>
                                            <td>{{ c.name }}</td>
{#                                            <td>{{ c.creationdate }}</td>#}

                                            <td>{{ c.author }}</td>
<td>
                                                {%  if c.valid %}
                                                    <a class=\"btn btn-success activate-link\" href=\"{{ path('chat_changeV', {'id': c.id}) }}\"> <i class=\"fa fa-check\"></i></a>
                                                {% else %}
                                                    <a class=\"btn btn-warning activate-link\" href=\"{{ path('chat_changeV', {'id': c.id}) }}\"> <i class=\"fa fa-times\"></i></a>
                                                {% endif %}
    <a  href=\"{{ path('topic', {'id': c.id}) }}\"> show</a>

</td>
                                            <td><a href=\"{{ path('deleteT', {'id': c.id}) }}\" class=\"btn btn-danger disable-btn del-link\" type=\"submit\" ><i class=\"fa fa-trash\"></i></a></td>
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
", "admin/chats/chats.html.twig", "C:\\xampp\\htdocs\\PFA\\templates\\admin\\chats\\chats.html.twig");
    }
}
