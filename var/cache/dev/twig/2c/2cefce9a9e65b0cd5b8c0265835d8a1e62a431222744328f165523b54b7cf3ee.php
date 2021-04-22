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
        echo "<style>

.search-result-categories>li>a {
    color: #b6b6b6;
    font-weight: 400
}

.search-result-categories>li>a:hover {
    background-color: #ddd;
    color: #555
}

.search-result-categories>li>a>.glyphicon {
    margin-right: 5px
}

.search-result-categories>li>a>.badge {
    float: right
}

.search-results-count {
    margin-top: 10px
}

.search-result-item {
    padding: 20px;
    background-color: #fff;
    border-radius: 4px
}

.search-result-item:after,
.search-result-item:before {
    content: \" \";
    display: table
}

.search-result-item:after {
    clear: both
}

.search-result-item .image-link {
    display: block;
    overflow: hidden;
    border-top-left-radius: 4px;
    border-bottom-left-radius: 4px
}

@media (min-width:768px) {
    .search-result-item .image-link {
        display: inline-block;
        margin: -20px 0 -20px -20px;
        float: left;
        width: 200px
    }
}

@media (max-width:767px) {
    .search-result-item .image-link {
        max-height: 200px
    }
}

.search-result-item .image {
    max-width: 100%
}

.search-result-item .info {
    margin-top: 2px;
    font-size: 12px;
    color: #999
}

.search-result-item .description {
    font-size: 13px
}

.search-result-item+.search-result-item {
    margin-top: 20px
}

@media (min-width:768px) {
    .search-result-item-body {
        margin-left: 200px
    }
}

.search-result-item-heading {
    font-weight: 400
}

.search-result-item-heading>a {
    color: #555
}

@media (min-width:768px) {
    .search-result-item-heading {
        margin: 0
    }
}

.titre { margin-left : 500px ;  }
</style>

<h1 class=\"titre\"> Consultants </h1>

<div>
<div>

    <div>


                            ";
        // line 116
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, $context["users"], function ($__users__) use ($context, $macros) { $context["users"] = $__users__; return  !twig_get_attribute($this->env, $this->source, $context["users"], "deleted", [], "any", false, false, false, 116); }));
        foreach ($context['_seq'] as $context["_key"] => $context["users"]) {
            // line 117
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["users"], "roles", [], "any", false, false, false, 117));
            foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
                // line 118
                echo "                                    ";
                if (($context["r"] === "ROLE_CONSULTANT")) {
                    // line 119
                    echo "
                                
 <section class=\"search-result-item\">
            <a class=\"image-link\" href=\"#\"><img class=\"image\" src=\" ";
                    // line 122
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, $context["users"], "logo", [], "any", false, false, false, 122))), "html", null, true);
                    echo "\">
            </a>
            <div class=\"search-result-item-body\">
                <div class=\"row\">
                    <div class=\"col-sm-9\">
                        <h4 class=\"search-result-item-heading\"><a href=\"#\">";
                    // line 127
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["users"], "nomComplet", [], "any", false, false, false, 127), "html", null, true);
                    echo "</a></h4>
                        <p class=\"info\">Consultant</p>
                        <p class=\"info\">";
                    // line 129
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["users"], "email", [], "any", false, false, false, 129), "html", null, true);
                    echo "</p>
                        <p class=\"description\">Not just usual Metro. But something bigger. Not just usual widgets, but real widgets. Not just yet another admin template, but next generation admin template.</p>
                    </div>
                    <div class=\"col-sm-3 text-align-center\">
                        
                        <a class=\"btn btn-primary btn-info btn-sm\" href=\"#\">Contacter</a>
                    </div>
                </div>
            </div>
        </section>


                                    ";
                }
                // line 142
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 143
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['users'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        echo "               

       
     </div>
</div>
</div>
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
        return array (  239 => 144,  233 => 143,  227 => 142,  211 => 129,  206 => 127,  198 => 122,  193 => 119,  190 => 118,  185 => 117,  181 => 116,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin/bars.html.twig\" %}


{% block contenpage %}
<style>

.search-result-categories>li>a {
    color: #b6b6b6;
    font-weight: 400
}

.search-result-categories>li>a:hover {
    background-color: #ddd;
    color: #555
}

.search-result-categories>li>a>.glyphicon {
    margin-right: 5px
}

.search-result-categories>li>a>.badge {
    float: right
}

.search-results-count {
    margin-top: 10px
}

.search-result-item {
    padding: 20px;
    background-color: #fff;
    border-radius: 4px
}

.search-result-item:after,
.search-result-item:before {
    content: \" \";
    display: table
}

.search-result-item:after {
    clear: both
}

.search-result-item .image-link {
    display: block;
    overflow: hidden;
    border-top-left-radius: 4px;
    border-bottom-left-radius: 4px
}

@media (min-width:768px) {
    .search-result-item .image-link {
        display: inline-block;
        margin: -20px 0 -20px -20px;
        float: left;
        width: 200px
    }
}

@media (max-width:767px) {
    .search-result-item .image-link {
        max-height: 200px
    }
}

.search-result-item .image {
    max-width: 100%
}

.search-result-item .info {
    margin-top: 2px;
    font-size: 12px;
    color: #999
}

.search-result-item .description {
    font-size: 13px
}

.search-result-item+.search-result-item {
    margin-top: 20px
}

@media (min-width:768px) {
    .search-result-item-body {
        margin-left: 200px
    }
}

.search-result-item-heading {
    font-weight: 400
}

.search-result-item-heading>a {
    color: #555
}

@media (min-width:768px) {
    .search-result-item-heading {
        margin: 0
    }
}

.titre { margin-left : 500px ;  }
</style>

<h1 class=\"titre\"> Consultants </h1>

<div>
<div>

    <div>


                            {% for users in users|filter(users => not users.deleted) %}
                                {%  for r in users.roles %}
                                    {% if r is same as \"ROLE_CONSULTANT\" %}

                                
 <section class=\"search-result-item\">
            <a class=\"image-link\" href=\"#\"><img class=\"image\" src=\" {{ asset('uploads/images/'  ~ users.logo) }}\">
            </a>
            <div class=\"search-result-item-body\">
                <div class=\"row\">
                    <div class=\"col-sm-9\">
                        <h4 class=\"search-result-item-heading\"><a href=\"#\">{{ users.nomComplet }}</a></h4>
                        <p class=\"info\">Consultant</p>
                        <p class=\"info\">{{users.email}}</p>
                        <p class=\"description\">Not just usual Metro. But something bigger. Not just usual widgets, but real widgets. Not just yet another admin template, but next generation admin template.</p>
                    </div>
                    <div class=\"col-sm-3 text-align-center\">
                        
                        <a class=\"btn btn-primary btn-info btn-sm\" href=\"#\">Contacter</a>
                    </div>
                </div>
            </div>
        </section>


                                    {% endif %}
                                {% endfor %}
                            {% endfor %}
               

       
     </div>
</div>
</div>
    {% endblock %}
", "Visiteur/consultants.html.twig", "C:\\xampp\\htdocs\\PFA\\templates\\Visiteur\\consultants.html.twig");
    }
}
