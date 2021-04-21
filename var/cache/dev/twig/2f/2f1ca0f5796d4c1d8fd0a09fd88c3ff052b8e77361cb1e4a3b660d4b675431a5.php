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

/* Visiteur/opportunites.html.twig */
class __TwigTemplate_3832c75c14651ef4cbe07c5535463800c4fdcbbf17030b367e182385a520da0e extends Template
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
        // line 160
        return "admin/bars.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Visiteur/opportunites.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Visiteur/opportunites.html.twig"));

        $this->parent = $this->loadTemplate("admin/bars.html.twig", "Visiteur/opportunites.html.twig", 160);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 162
    public function block_contenpage($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenpage"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenpage"));

        // line 163
        echo "
                                    ";
        // line 164
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, twig_sort_filter((isset($context["opportunites"]) || array_key_exists("opportunites", $context) ? $context["opportunites"] : (function () { throw new RuntimeError('Variable "opportunites" does not exist.', 164, $this->source); })()))));
        foreach ($context['_seq'] as $context["_key"] => $context["o"]) {
            // line 165
            echo "
    <div style=\"height: auto;\" class=\"blog-item\">

        <div style=\"height: auto\" class=\"m\" href=\"#\">

            <div class=\"icon\">
";
            // line 172
            echo "
                                                                                <img width=\"auto\" height=\"150\"
                                                                                     src=\" ";
            // line 174
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["o"], "image", [], "any", false, false, false, 174))), "html", null, true);
            echo "\" alt=\"sample32\"/>
            </div>
            <div class=\"content\">
                <div class=\"title\">";
            // line 177
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["o"], "titre", [], "any", false, false, false, 177), "html", null, true);
            echo "  <span style=\"color:red; font-size: 12px\" class=\"blog-date\">    <i class=\"fa fa-bell\" aria-hidden=\"true\"></i>  Date Limite :                  ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["o"], "dateLimite", [], "any", false, false, false, 177), "d/m/Y "), "html", null, true);
            echo "
</span></div>
                <div class=\"rounded\"></div>


                <div class=\"col-sm-9 mb-8\">
                    <div class=\"card h-100\">
                        <div class=\"card-body\">

                            <p class=\"x_content\">  <h2 style=\" color:#0c5460; font-family: Lobster;\">Lancé par :<a href=\"";
            // line 186
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("UserAssoci", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["o"], "association", [], "any", false, false, false, 186), "id", [], "any", false, false, false, 186)]), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["o"], "association", [], "any", false, false, false, 186), "titre", [], "any", false, false, false, 186), "html", null, true);
            echo "</a></h2>
                                  <h2 style=\" color:#0c5460; font-family: Lobster;\">Domaine concerné :";
            // line 187
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["o"], "domaineConcerne", [], "any", false, false, false, 187), "html", null, true);
            echo "</h2>
                            <h2 style=\" color:#0c5460; font-family: Lobster;\">Region concerné par cette opportunité : <i class=\"fa fa-map-marker \"></i> ";
            // line 188
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["o"], "region", [], "any", false, false, false, 188), "html", null, true);
            echo "</h2>

                            <h2 style=\" color:#0c5460; font-family: Lobster;\">Type d'offre :";
            // line 190
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["o"], "typeOffre", [], "any", false, false, false, 190), "html", null, true);
            echo "</h2>
                            <h2 style=\" color:#0c5460; font-family: Lobster;\">   Details : </h2>             <h2 style=\" color:lightslategrey; font-family:'Times New Roman';\" class=\"d-flex align-items-center mb-3\">";
            // line 191
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["o"], "description", [], "any", false, false, false, 191), "html", null, true);
            echo "  </h2>
                            </div>

                        </div>
                    </div>
                </div>


            <div class=\"item-arrow\">
                <a href=\"";
            // line 200
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["o"], "lienFormPostul", [], "any", false, false, false, 200), "html", null, true);
            echo "\">
                    <i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"> <p style=\" font-size:  15px\"> Cliquer sur le fleche pour postuler</p></i></a>
            </div>
        </div>

    </div>

  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['o'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 208
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Visiteur/opportunites.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 208,  138 => 200,  126 => 191,  122 => 190,  117 => 188,  113 => 187,  107 => 186,  93 => 177,  87 => 174,  83 => 172,  75 => 165,  71 => 164,  68 => 163,  58 => 162,  35 => 160,);
    }

    public function getSourceContext()
    {
        return new Source("{#{% extends \"admin/bars.html.twig\" %}#}


{#{% block contenpage %}#}

{#    <div style=\"#}
{#    color:orange;#}
{#  font-family: Lobster;#}
{# \" id=\"video-info-section\" class=\"layer\">#}
{#        <h1 class=\"text-center infotxt\">voir toutes les opportunites offerts par les differentes associations</h1>#}

{#        <div class=\"x_content\">#}
{#            <hr style=\"  border: 0;#}

{#  border-bottom: 3px solid #fff;#}
{#  border-radius: 100%;#}
{#  width: 50%;#}
{#\"></hr>#}
{#            <h2 style=\"color:#000;\" ed class=\"text-center txt1\">Explorez l'univers des Associations en Tunisie</h2>#}
{#        </div>#}
{#        <div style=\"background-color: white\" class=\"\">#}
{#            <div class=\"page-title\">#}
{#                <div class=\"title_left\">#}

{#                </div>#}
{#            </div>#}

{#            <div class=\"clearfix\"></div>#}

{#            <div class=\"row\">#}
{#                <div class=\"col-md-12\">#}
{#                    <div class=\"x_panel\">#}
{#                        <div class=\"x_title\">#}
{#                            <h2>Toutes les opportunites</h2>#}

{#                            <ul class=\"nav navbar-right panel_toolbox\">#}
{#                                #}{##}{# <li><a href=\"{{ path('newAss',{'idPA':app.user.id}) }}\" class=\"btn btn-success\">NEW</a> #}
{#                                #}{##}{# <li><a href=\"{{ path('association_new') }}\" class=\"btn btn-success\">NEW</a> #}

{#                                </li>#}
{#                            </ul>#}
{#                            <div class=\"clearfix\"></div>#}
{#                        </div>#}



{#                        <div class=\"container blog-page\">#}
{#                            <div class=\"row clearfix\">#}




{#                                {% for o in opportunites %}#}

{#                                    <figure class=\"snip0013\">#}
{#                                        <img width=\"auto\" height=\"200\"#}
{#                                             src=\" {{ asset('uploads/images/'  ~ o.image) }}\" alt=\"sample32\"/>#}

{#    #}{#                                        <div>#}

{#                                            <a href=\"{{ path('UserAssoci',{\"id\":o.id}) }}\"><i#}
{#                                                        class=\" center-icon\"><h4>{{ o.titre }}</h4></i></a>#}
{#                                            <h2>hi mouna</h2>#}
{#                                        </div>#}
{#                                    </figure>#}
{#                                {% endfor %}#}
{#                            </div>#}
{#                        </div>#}
{#                    </div>#}

{#                </div>#}
{#            </div>#}
{#        </div></div>#}
{#{% endblock %}#}




{#    <!-- Javascript for each modal containing a different pic. This code was written so that you don't have to write multiple modal divs -->#}
{#{% block javascripts %}#}
{#<script>#}
{#        \$(document).ready(function() {#}
{#            var \$lightbox = \$('#lightbox');#}
{#            \$('[data-target=\"#lightbox\"]').on('click', function(event) {#}
{#                var \$img = \$(this).find('img'),#}
{#                    src = \$img.attr('src'),#}
{#                    alt = \$img.attr('alt'),#}
{#                    css = {#}
{#                        'maxWidth': \$(window).width() - 100,#}
{#                        'maxHeight': \$(window).height() - 100#}
{#                    };#}
{#                \$lightbox.find('img').attr('src', src);#}
{#                \$lightbox.find('img').attr('alt', alt);#}
{#                \$lightbox.find('img').css(css);#}
{#            });#}
{#            \$lightbox.on('shown.bs.modal', function (e) {#}
{#                var \$img = \$lightbox.find('img');#}
{#                \$lightbox.find('.modal-dialog').css({'width': \$img.width()});#}
{#                \$lightbox.find('.close').removeClass('hidden');#}
{#            });#}
{#        });#}
{#    </script>#}
{# {% endblock%}#}

{#<div class=\"container mt100\">#}
{#    <section class=\"row\">#}
{#        {% for o in opportunites %}#}
{#        <div class=\"col-lg-3 col-sm-4 col-xs-6 image-holder\">#}

{#            <div class=\"panel panel-default\">#}
{#                <div class=\"panel-body\">#}


{#                    <span class=\" badge-pill badge-danger\">date limite:{{ o.dateLimite|date(\"d/m/Y\")  }}</span>#}
{#                    <a href=\"{{ path('UserOPP',{\"id\":o.id}) }}\" >#}



{#                                                                <img width=\"auto\" height=\"200\"#}
{#                                                                     src=\" {{ asset('uploads/images/'  ~ o.image) }}\" alt=\"sample32\"/>#}

{#                        <div class=\"image-title\"><h3>{{ o.titre }}</h3></div>#}
{#                        <h6>Lancé par : <span> {{ o.association.titre }}</span></h6>#}
{#                        <p style=\"text-align: right\">{{ o.typeOffre }}</p>#}
{#                        <span class=\"overlay\"><i class=\"\">Voir plus de detail</i></span>#}
{#                    </a>#}



{#                </div>#}
{#            </div>#}
{#        </div>#}


{#        {% endfor %}#}

{#        <!-- Modal -->#}
{#        <div id=\"lightbox\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myLargeModalLabel\" aria-hidden=\"true\">#}
{#            <div class=\"modal-dialog\">#}
{#                <div class=\"modal-content\">#}
{#                    <div class=\"modal-header\">#}
{#                        <h1>{{ opp.titre }}</h1>#}
{#                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>#}
{#                        <h4 style=\"text-align: center\" class=\"modal-title\" id=\"myModalLabel\">Hi Modal</h4>#}
{#                    </div>#}
{#                    <div class=\"modal-body\">#}
{#                        <h1>hii</h1>#}
{#                    </div>#}
{#                </div>#}
{#            </div>#}
{#        </div>#}

{#        <br/>#}

{#    </section> <!-- closing section -->#}
{#</div> <!-- closing div container -->#}
{#{% endblock %}#}


{% extends \"admin/bars.html.twig\" %}

{% block contenpage %}

                                    {% for o in opportunites |sort|reverse %}

    <div style=\"height: auto;\" class=\"blog-item\">

        <div style=\"height: auto\" class=\"m\" href=\"#\">

            <div class=\"icon\">
{#                <img src=\"http://muhammederdem.com.tr/reference/1.jpg\" alt=\"\">#}

                                                                                <img width=\"auto\" height=\"150\"
                                                                                     src=\" {{ asset('uploads/images/'  ~ o.image) }}\" alt=\"sample32\"/>
            </div>
            <div class=\"content\">
                <div class=\"title\">{{o.titre}}  <span style=\"color:red; font-size: 12px\" class=\"blog-date\">    <i class=\"fa fa-bell\" aria-hidden=\"true\"></i>  Date Limite :                  {{ o.dateLimite | date('d/m/Y ') }}
</span></div>
                <div class=\"rounded\"></div>


                <div class=\"col-sm-9 mb-8\">
                    <div class=\"card h-100\">
                        <div class=\"card-body\">

                            <p class=\"x_content\">  <h2 style=\" color:#0c5460; font-family: Lobster;\">Lancé par :<a href=\"{{ path('UserAssoci',{\"id\":o.association.id}) }}\"> {{ o.association.titre}}</a></h2>
                                  <h2 style=\" color:#0c5460; font-family: Lobster;\">Domaine concerné :{{ o.domaineConcerne}}</h2>
                            <h2 style=\" color:#0c5460; font-family: Lobster;\">Region concerné par cette opportunité : <i class=\"fa fa-map-marker \"></i> {{ o.region}}</h2>

                            <h2 style=\" color:#0c5460; font-family: Lobster;\">Type d'offre :{{ o.typeOffre }}</h2>
                            <h2 style=\" color:#0c5460; font-family: Lobster;\">   Details : </h2>             <h2 style=\" color:lightslategrey; font-family:'Times New Roman';\" class=\"d-flex align-items-center mb-3\">{{o.description }}  </h2>
                            </div>

                        </div>
                    </div>
                </div>


            <div class=\"item-arrow\">
                <a href=\"{{ o.lienFormPostul }}\">
                    <i class=\"fa fa-long-arrow-right\" aria-hidden=\"true\"> <p style=\" font-size:  15px\"> Cliquer sur le fleche pour postuler</p></i></a>
            </div>
        </div>

    </div>

  {% endfor %}

{%  endblock %}", "Visiteur/opportunites.html.twig", "C:\\xampp\\htdocs\\PFA\\templates\\Visiteur\\opportunites.html.twig");
    }
}
