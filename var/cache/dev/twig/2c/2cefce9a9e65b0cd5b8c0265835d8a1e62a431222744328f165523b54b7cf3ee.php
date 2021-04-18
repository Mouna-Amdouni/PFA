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

/* Visiteur/consultants.html.twig */
class __TwigTemplate_ee2caa6091404c089d6c2e2ca840c9ba8572d62dfe5a67c62aec83893388b417 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Visiteur/consultants.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Visiteur/consultants.html.twig"));

        $this->parent = $this->loadTemplate("admin/bars.html.twig", "Visiteur/consultants.html.twig", 1);
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

<div style=\"
    color:orange;
  font-family: Lobster;
 \" id=\"video-info-section\" class=\"layer\">
    <h1 class=\"text-center infotxt\">Voir tous nos consultants</h1>

    <div class=\"x_content\">
        <hr style=\"  border: 0;

  border-bottom: 3px solid #fff;
  border-radius: 100%;
  width: 50%;
\"></hr>
        <h2 style=\"color:#000;\" ed class=\"text-center txt1\">Liste des consultants</h2>
    </div>
    <div style=\"background-color: white\" class=\"\">
        <div class=\"page-title\">
            <div class=\"title_left\">

            </div>
        </div>

        <div class=\"clearfix\"></div>

        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"x_panel\">
                    <div class=\"x_title\">
                        <h2>Tous les consultants</h2>

                        <div class=\"clearfix\"></div>
                    </div>



                    <div class=\"container blog-page\">
                        <div class=\"row clearfix\">





                            ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, $context["users"], function ($__users__) use ($context, $macros) { $context["users"] = $__users__; return  !twig_get_attribute($this->env, $this->source, $context["users"], "deleted", [], "any", false, false, false, 49); }));
        foreach ($context['_seq'] as $context["_key"] => $context["users"]) {
            // line 50
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["users"], "roles", [], "any", false, false, false, 50));
            foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
                // line 51
                echo "                                    ";
                if (($context["r"] === "ROLE_CONSULTANT")) {
                    // line 52
                    echo "
                                <figure class=\"snip0013\">

                                    <img width=\"auto\" height=\"200\"
                                         src=\" ";
                    // line 56
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["users"], "logo", [], "any", false, false, false, 56))), "html", null, true);
                    echo "\" alt=\"sample32\"/>
                                    <div>
                                        <a href=\"";
                    // line 58
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("UserAssoci", ["id" => twig_get_attribute($this->env, $this->source, $context["users"], "id", [], "any", false, false, false, 58)]), "html", null, true);
                    echo "\"><i
                                                    class=\" center-icon\"><h4>";
                    // line 59
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["users"], "nomComplet", [], "any", false, false, false, 59), "html", null, true);
                    echo "</h4></i>
                                        </br>
                                            <i class=\" center-icon\"><h5>";
                    // line 61
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["users"], "email", [], "any", false, false, false, 61), "html", null, true);
                    echo "</h5></i>
                                        </a>

                                    </div>
                                </figure>


                                    ";
                }
                // line 69
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['users'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div></div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Visiteur/consultants.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 71,  163 => 70,  157 => 69,  146 => 61,  141 => 59,  137 => 58,  132 => 56,  126 => 52,  123 => 51,  118 => 50,  114 => 49,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin/bars.html.twig\" %}


{% block contenpage %}


<div style=\"
    color:orange;
  font-family: Lobster;
 \" id=\"video-info-section\" class=\"layer\">
    <h1 class=\"text-center infotxt\">Voir tous nos consultants</h1>

    <div class=\"x_content\">
        <hr style=\"  border: 0;

  border-bottom: 3px solid #fff;
  border-radius: 100%;
  width: 50%;
\"></hr>
        <h2 style=\"color:#000;\" ed class=\"text-center txt1\">Liste des consultants</h2>
    </div>
    <div style=\"background-color: white\" class=\"\">
        <div class=\"page-title\">
            <div class=\"title_left\">

            </div>
        </div>

        <div class=\"clearfix\"></div>

        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"x_panel\">
                    <div class=\"x_title\">
                        <h2>Tous les consultants</h2>

                        <div class=\"clearfix\"></div>
                    </div>



                    <div class=\"container blog-page\">
                        <div class=\"row clearfix\">





                            {% for users in users|filter(users => not users.deleted) %}
                                {%  for r in users.roles %}
                                    {% if r is same as \"ROLE_CONSULTANT\" %}

                                <figure class=\"snip0013\">

                                    <img width=\"auto\" height=\"200\"
                                         src=\" {{ asset('uploads/images/'  ~ users.logo) }}\" alt=\"sample32\"/>
                                    <div>
                                        <a href=\"{{ path('UserAssoci',{\"id\":users.id}) }}\"><i
                                                    class=\" center-icon\"><h4>{{ users.nomComplet }}</h4></i>
                                        </br>
                                            <i class=\" center-icon\"><h5>{{ users.email }}</h5></i>
                                        </a>

                                    </div>
                                </figure>


                                    {% endif %}
                                {% endfor %}
                            {% endfor %}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div></div>
    {% endblock %}
", "Visiteur/consultants.html.twig", "C:\\xampp\\htdocs\\PFA\\templates\\Visiteur\\consultants.html.twig");
    }
}
