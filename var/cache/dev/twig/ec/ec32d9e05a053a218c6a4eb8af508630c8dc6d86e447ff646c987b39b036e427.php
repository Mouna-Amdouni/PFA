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

/* admin/blog/blog.html.twig */
class __TwigTemplate_a715ea94f4a31f554bcc96c107bd36ec103ae25398bf5c9eefee16e45b4524f1 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/blog/blog.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/blog/blog.html.twig"));

        $this->parent = $this->loadTemplate("admin/bars.html.twig", "admin/blog/blog.html.twig", 1);
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
                        <h2>Liste des post du blog</h2>
                        <ul class=\"nav navbar-right panel_toolbox\">
                            <li><a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_new_blogPosts");
        echo "\" class=\"btn btn-success\">NEW</a>
                            </li>
                        </ul>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"x_content\">
                        <div class=\"row\">
                            <form action=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_groupaction_blogPost");
        echo "\" id=\"grpaction\" method=\"post\" name=\"grpaction\">
                                <div class=\"form-group form-inline\">
                                    ";
        // line 28
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_EDITORIAL")) {
            // line 29
            echo "                                        <select class=\"form-control\" name=\"action\" required id=\"action_select\">
                                            <option value=\"\">Action de groupe</option>
                                            <option value=\"desactiver\">Desactiver</option>
                                            <option value=\"activer\">Activer</option>
                                            <option value=\"supprimer\">Supprimer</option>
                                        </select>
                                        <button class=\"btn btn-primary\" type=\"submit\">Go!!</button>
                                    ";
        }
        // line 37
        echo "                                </div>

                            </form>
                            <table id=\"example\" class=\"display table table-striped table-bordered ";
        // line 40
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_EDITORIAL")) {
            echo " dataminetables ";
        } else {
            echo " datanotminetables ";
        }
        echo "\" >
                                <thead>
                                ";
        // line 42
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_EDITORIAL")) {
            // line 43
            echo "                                    <th><input type=\"checkbox\" id=\"select_all\" name=\"select_all\"></th>
                                ";
        }
        // line 45
        echo "                                <th>Titre</th>
                                <th>Date Creation</th>
                                <th>Date de publication</th>
                                <th>Modifier</th>
                                ";
        // line 49
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_EDITORIAL")) {
            // line 50
            echo "                                    <th>Etat ?</th>
                                    <th>Suprimer</th>
                                ";
        }
        // line 53
        echo "                                <th>Preview</th>
                                </thead>
                                <tbody>
                                ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, (isset($context["blogPosts"]) || array_key_exists("blogPosts", $context) ? $context["blogPosts"] : (function () { throw new RuntimeError('Variable "blogPosts" does not exist.', 56, $this->source); })()), function ($__blogPost__) use ($context, $macros) { $context["blogPost"] = $__blogPost__; return  !twig_get_attribute($this->env, $this->source, $context["blogPost"], "deleted", [], "any", false, false, false, 56); }));
        foreach ($context['_seq'] as $context["_key"] => $context["blogPost"]) {
            // line 57
            echo "                                    <tr>
                                        ";
            // line 58
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_EDITORIAL")) {
                // line 59
                echo "                                            <td><input type=\"checkbox\" class=\"chkgrp\" name=\"chkgrp[]\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blogPost"], "id", [], "any", false, false, false, 59), "html", null, true);
                echo "\"></td>
                                        ";
            }
            // line 61
            echo "                                        <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blogPost"], "titre", [], "any", false, false, false, 61), "html", null, true);
            echo "</td>
                                        <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blogPost"], "createdAt", [], "any", false, false, false, 62), "d/m/y h:i:s"), "html", null, true);
            echo "</td>
                                        <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blogPost"], "plubishedAt", [], "any", false, false, false, 63), "d/m/y h:i:s"), "html", null, true);
            echo "</td>
                                        <td><a class=\"btn btn-primary\" href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_edit_blogPosts", ["id" => twig_get_attribute($this->env, $this->source, $context["blogPost"], "id", [], "any", false, false, false, 64)]), "html", null, true);
            echo "\"><i class=\"fa fa-edit\"></i></a></td>
                                        ";
            // line 65
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_EDITORIAL")) {
                // line 66
                echo "                                            <td>
                                                ";
                // line 67
                if (twig_get_attribute($this->env, $this->source, $context["blogPost"], "valid", [], "any", false, false, false, 67)) {
                    // line 68
                    echo "                                                    <a class=\"btn btn-success activate-link\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_changevalidite_blogPost", ["id" => twig_get_attribute($this->env, $this->source, $context["blogPost"], "id", [], "any", false, false, false, 68)]), "html", null, true);
                    echo "\"> <i class=\"fa fa-check\"></i></a>
                                                ";
                } else {
                    // line 70
                    echo "                                                    <a class=\"btn btn-warning activate-link\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_changevalidite_blogPost", ["id" => twig_get_attribute($this->env, $this->source, $context["blogPost"], "id", [], "any", false, false, false, 70)]), "html", null, true);
                    echo "\"> <i class=\"fa fa-times\"></i></a>
                                                ";
                }
                // line 72
                echo "                                            </td>
                                            <td><a href=\"";
                // line 73
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_delete_blogPost", ["id" => twig_get_attribute($this->env, $this->source, $context["blogPost"], "id", [], "any", false, false, false, 73)]), "html", null, true);
                echo "\" class=\"btn btn-danger disable-btn del-link\" type=\"submit\" ><i class=\"fa fa-trash\"></i></a></td>
                                        ";
            }
            // line 75
            echo "                                        <td>
                                            <a href=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_preview_blogpost", ["id" => twig_get_attribute($this->env, $this->source, $context["blogPost"], "id", [], "any", false, false, false, 76)]), "html", null, true);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-eye\"></i></a>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blogPost'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
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
        return "admin/blog/blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 80,  212 => 76,  209 => 75,  204 => 73,  201 => 72,  195 => 70,  189 => 68,  187 => 67,  184 => 66,  182 => 65,  178 => 64,  174 => 63,  170 => 62,  165 => 61,  159 => 59,  157 => 58,  154 => 57,  150 => 56,  145 => 53,  140 => 50,  138 => 49,  132 => 45,  128 => 43,  126 => 42,  117 => 40,  112 => 37,  102 => 29,  100 => 28,  95 => 26,  85 => 19,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin/bars.html.twig\" %}

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
                        <h2>Liste des post du blog</h2>
                        <ul class=\"nav navbar-right panel_toolbox\">
                            <li><a href=\"{{ path('app_admin_new_blogPosts') }}\" class=\"btn btn-success\">NEW</a>
                            </li>
                        </ul>
                        <div class=\"clearfix\"></div>
                    </div>
                    <div class=\"x_content\">
                        <div class=\"row\">
                            <form action=\"{{ path('app_admin_groupaction_blogPost') }}\" id=\"grpaction\" method=\"post\" name=\"grpaction\">
                                <div class=\"form-group form-inline\">
                                    {%  if is_granted(\"ROLE_EDITORIAL\") %}
                                        <select class=\"form-control\" name=\"action\" required id=\"action_select\">
                                            <option value=\"\">Action de groupe</option>
                                            <option value=\"desactiver\">Desactiver</option>
                                            <option value=\"activer\">Activer</option>
                                            <option value=\"supprimer\">Supprimer</option>
                                        </select>
                                        <button class=\"btn btn-primary\" type=\"submit\">Go!!</button>
                                    {% endif %}
                                </div>

                            </form>
                            <table id=\"example\" class=\"display table table-striped table-bordered {% if is_granted(\"ROLE_EDITORIAL\") %} dataminetables {% else %} datanotminetables {% endif %}\" >
                                <thead>
                                {% if is_granted(\"ROLE_EDITORIAL\") %}
                                    <th><input type=\"checkbox\" id=\"select_all\" name=\"select_all\"></th>
                                {% endif %}
                                <th>Titre</th>
                                <th>Date Creation</th>
                                <th>Date de publication</th>
                                <th>Modifier</th>
                                {% if is_granted(\"ROLE_EDITORIAL\") %}
                                    <th>Etat ?</th>
                                    <th>Suprimer</th>
                                {% endif %}
                                <th>Preview</th>
                                </thead>
                                <tbody>
                                {% for blogPost in blogPosts|filter(blogPost => not blogPost.deleted)  %}
                                    <tr>
                                        {% if is_granted(\"ROLE_EDITORIAL\") %}
                                            <td><input type=\"checkbox\" class=\"chkgrp\" name=\"chkgrp[]\" value=\"{{ blogPost.id }}\"></td>
                                        {% endif %}
                                        <td>{{ blogPost.titre }}</td>
                                        <td>{{ blogPost.createdAt|date(\"d/m/y h:i:s\") }}</td>
                                        <td>{{ blogPost.plubishedAt|date(\"d/m/y h:i:s\") }}</td>
                                        <td><a class=\"btn btn-primary\" href=\"{{ path('app_admin_edit_blogPosts',{\"id\":blogPost.id}) }}\"><i class=\"fa fa-edit\"></i></a></td>
                                        {% if is_granted(\"ROLE_EDITORIAL\") %}
                                            <td>
                                                {%  if blogPost.valid %}
                                                    <a class=\"btn btn-success activate-link\" href=\"{{ path('app_admin_changevalidite_blogPost', {'id': blogPost.id}) }}\"> <i class=\"fa fa-check\"></i></a>
                                                {% else %}
                                                    <a class=\"btn btn-warning activate-link\" href=\"{{ path('app_admin_changevalidite_blogPost', {'id': blogPost.id}) }}\"> <i class=\"fa fa-times\"></i></a>
                                                {% endif %}
                                            </td>
                                            <td><a href=\"{{ path('app_admin_delete_blogPost', {'id': blogPost.id}) }}\" class=\"btn btn-danger disable-btn del-link\" type=\"submit\" ><i class=\"fa fa-trash\"></i></a></td>
                                        {% endif %}
                                        <td>
                                            <a href=\"{{ path('app_admin_preview_blogpost', {'id': blogPost.id}) }}\" class=\"btn btn-primary\"><i class=\"fa fa-eye\"></i></a>
                                        </td>
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
{% endblock %}
", "admin/blog/blog.html.twig", "C:\\xampp\\htdocs\\PFA\\templates\\admin\\blog\\blog.html.twig");
    }
}
