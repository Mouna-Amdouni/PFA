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

/* Visiteur/aassociation2parid.html.twig */
class __TwigTemplate_d6ef04e567679dffd31dcf8aa91305a8bdc9ea7c817ddad1bc48ca5ec631e9b5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Visiteur/aassociation2parid.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Visiteur/aassociation2parid.html.twig"));

        $this->parent = $this->loadTemplate("admin/bars.html.twig", "Visiteur/aassociation2parid.html.twig", 1);
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

    <div class=\"container\">
        <div class=\"main-body\">

            <!-- Breadcrumb -->

            <!-- /Breadcrumb -->

            <div class=\"row gutters-sm\">
                <div class=\"col-md-4 mb-3\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"d-flex flex-column align-items-center text-center\">
                                ";
        // line 20
        echo "
                                <img src=\" ";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, (isset($context["ass"]) || array_key_exists("ass", $context) ? $context["ass"] : (function () { throw new RuntimeError('Variable "ass" does not exist.', 21, $this->source); })()), "logo", [], "any", false, false, false, 21))), "html", null, true);
        echo "\" alt=\"Admin\" class=\"rounded-circle\" width=\"200\" height=\"150\">
                                <div class=\"mt-3\">
                                    <div class=\"x_content\">   <h1 style=\" color:#0D3349; font-family: Lobster;\">";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ass"]) || array_key_exists("ass", $context) ? $context["ass"] : (function () { throw new RuntimeError('Variable "ass" does not exist.', 23, $this->source); })()), "titre", [], "any", false, false, false, 23), "html", null, true);
        echo "</h1></div>
";
        // line 28
        echo "                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"card mt-3\">
                        <ul class=\"list-group list-group-flush\">
                            <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ass"]) || array_key_exists("ass", $context) ? $context["ass"] : (function () { throw new RuntimeError('Variable "ass" does not exist.', 34, $this->source); })()), "siteweb", [], "any", false, false, false, 34), "html", null, true);
        echo "\">
                            <li class=\"list-group-item d-flex justify-content-between align-items-center flex-wrap\">
                                <h6 class=\"mb-0\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-globe mr-2 icon-inline\"><circle cx=\"12\" cy=\"12\" r=\"10\"></circle><line x1=\"2\" y1=\"12\" x2=\"22\" y2=\"12\"></line><path d=\"M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z\"></path></svg>Website</h6>
                                <span class=\"text-secondary\">";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ass"]) || array_key_exists("ass", $context) ? $context["ass"] : (function () { throw new RuntimeError('Variable "ass" does not exist.', 37, $this->source); })()), "siteWeb", [], "any", false, false, false, 37), "html", null, true);
        echo "</span>
                            </li></a>
                            <a href=\"ass.twitter\">
                            <li class=\"list-group-item d-flex justify-content-between align-items-center flex-wrap\">
                                <h6 class=\"mb-0\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-twitter mr-2 icon-inline text-info\"><path d=\"M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z\"></path></svg>Twitter</h6>
                                <span class=\"text-secondary\">";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ass"]) || array_key_exists("ass", $context) ? $context["ass"] : (function () { throw new RuntimeError('Variable "ass" does not exist.', 42, $this->source); })()), "Twitter", [], "any", false, false, false, 42), "html", null, true);
        echo "</span>
                            </li></a>
                            <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ass"]) || array_key_exists("ass", $context) ? $context["ass"] : (function () { throw new RuntimeError('Variable "ass" does not exist.', 44, $this->source); })()), "instagram", [], "any", false, false, false, 44), "html", null, true);
        echo "\">
                            <li class=\"list-group-item d-flex justify-content-between align-items-center flex-wrap\">
                                <h6 class=\"mb-0\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-instagram mr-2 icon-inline text-danger\"><rect x=\"2\" y=\"2\" width=\"20\" height=\"20\" rx=\"5\" ry=\"5\"></rect><path d=\"M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z\"></path><line x1=\"17.5\" y1=\"6.5\" x2=\"17.51\" y2=\"6.5\"></line></svg>Instagram</h6>
                                <span class=\"text-secondary\">";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ass"]) || array_key_exists("ass", $context) ? $context["ass"] : (function () { throw new RuntimeError('Variable "ass" does not exist.', 47, $this->source); })()), "instagram", [], "any", false, false, false, 47), "html", null, true);
        echo "</span>
                            </li></a>
                            <a href=\"";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ass"]) || array_key_exists("ass", $context) ? $context["ass"] : (function () { throw new RuntimeError('Variable "ass" does not exist.', 49, $this->source); })()), "facebook", [], "any", false, false, false, 49), "html", null, true);
        echo "\">
                            <li class=\"list-group-item d-flex justify-content-between align-items-center flex-wrap\">
                                <h6 class=\"mb-0\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-facebook mr-2 icon-inline text-primary\"><path d=\"M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z\"></path></svg>Facebook</h6>
                                <span class=\"text-secondary\">";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ass"]) || array_key_exists("ass", $context) ? $context["ass"] : (function () { throw new RuntimeError('Variable "ass" does not exist.', 52, $this->source); })()), "facebook", [], "any", false, false, false, 52), "html", null, true);
        echo "</span>
                            </li></a>
                        </ul>
                    </div>
                </div>
                <div class=\"col-md-8\">
                    <div class=\"card mb-3\">
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-sm-3\">
                                    <h6 class=\"mb-0\">Nom d'association</h6>
                                </div>
                                <div class=\"col-sm-9 text-secondary\">
                                    ";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ass"]) || array_key_exists("ass", $context) ? $context["ass"] : (function () { throw new RuntimeError('Variable "ass" does not exist.', 65, $this->source); })()), "titre", [], "any", false, false, false, 65), "html", null, true);
        echo "
                                </div>
                            </div>
                            <hr>
                            <div class=\"row\">
                                <div class=\"col-sm-3\">
                                    <h6 class=\"mb-0\">Adresse</h6>
                                </div>
                                <div class=\"col-sm-9 text-secondary\">
                                    ";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ass"]) || array_key_exists("ass", $context) ? $context["ass"] : (function () { throw new RuntimeError('Variable "ass" does not exist.', 74, $this->source); })()), "adresse", [], "any", false, false, false, 74), "html", null, true);
        echo "
                                </div>
                            </div>
                            <hr>
                            <div class=\"row\">
                                <div class=\"col-sm-3\">
                                    <h6 class=\"mb-0\">Nombre des participants</h6>
                                </div>
                                <div class=\"col-sm-9 text-secondary\">
                                    ";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ass"]) || array_key_exists("ass", $context) ? $context["ass"] : (function () { throw new RuntimeError('Variable "ass" does not exist.', 83, $this->source); })()), "nombreMembre", [], "any", false, false, false, 83), "html", null, true);
        echo "
                                </div>
                            </div>
                            <hr>
                            <div class=\"row\">
                                <div class=\"col-sm-3\">
                                    <h6 class=\"mb-0\">Domaine d'association</h6>
                                </div>
                                <div class=\"col-sm-9 text-secondary\">
                                    ";
        // line 92
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ass"]) || array_key_exists("ass", $context) ? $context["ass"] : (function () { throw new RuntimeError('Variable "ass" does not exist.', 92, $this->source); })()), "domaineAssociation", [], "any", false, false, false, 92), "html", null, true);
        echo "
                                </div>
                            </div>
                            <hr>
                            <div class=\"row\">
                                <div class=\"col-sm-3\">
                                    <h6 class=\"mb-0\">Budget</h6>
                                </div>
                                <div class=\"col-sm-9 text-secondary\">
                                    ";
        // line 101
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ass"]) || array_key_exists("ass", $context) ? $context["ass"] : (function () { throw new RuntimeError('Variable "ass" does not exist.', 101, $this->source); })()), "budget", [], "any", false, false, false, 101), "html", null, true);
        echo " Dt
                                </div>
                            </div>
                            <hr>
                            <div class=\"row\">
                                <div class=\"col-sm-3\">
                                    <h6 class=\"mb-0\">Date fondation</h6>
                                </div>
                                <div class=\"col-sm-9 text-secondary\">

                                    ";
        // line 111
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ass"]) || array_key_exists("ass", $context) ? $context["ass"] : (function () { throw new RuntimeError('Variable "ass" does not exist.', 111, $this->source); })()), "dateFondation", [], "any", false, false, false, 111), "d/m/y"), "html", null, true);
        echo "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row gutters-sm\">
                        <div class=\"col-sm-6 mb-3\">
                            <div class=\"card h-100\">
                                <div class=\"card-body\">
                                    <h6 class=\"d-flex align-items-center mb-3\"><i class=\"material-icons text-info mr-2\">But de </i>";
        // line 120
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ass"]) || array_key_exists("ass", $context) ? $context["ass"] : (function () { throw new RuntimeError('Variable "ass" does not exist.', 120, $this->source); })()), "titre", [], "any", false, false, false, 120), "html", null, true);
        echo "</h6>
                                    <div class=\"x_content\">   <h2 style=\" color:#0c5460; font-family: Lobster;\">";
        // line 121
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ass"]) || array_key_exists("ass", $context) ? $context["ass"] : (function () { throw new RuntimeError('Variable "ass" does not exist.', 121, $this->source); })()), "but", [], "any", false, false, false, 121), "html", null, true);
        echo "</h2>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"col-sm-6 mb-3\">
                            <div class=\"card h-100\">
                                <div class=\"card-body\">

                                    <h6 class=\"d-flex align-items-center mb-3\"><i class=\"material-icons text-info mr-2\">
                                            <img style=\"width: 40px; height: 30px\" src=\" ";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ass"]) || array_key_exists("ass", $context) ? $context["ass"] : (function () { throw new RuntimeError('Variable "ass" does not exist.', 132, $this->source); })()), "userA", [], "any", false, false, false, 132), "logo", [], "any", false, false, false, 132))), "html", null, true);
        echo "\" alt=\"Awesome Image\"> President de </i><br/>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ass"]) || array_key_exists("ass", $context) ? $context["ass"] : (function () { throw new RuntimeError('Variable "ass" does not exist.', 132, $this->source); })()), "titre", [], "any", false, false, false, 132), "html", null, true);
        echo "</h6>

                                    <small>Nom</small>
                                   <h6>";
        // line 135
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ass"]) || array_key_exists("ass", $context) ? $context["ass"] : (function () { throw new RuntimeError('Variable "ass" does not exist.', 135, $this->source); })()), "userA", [], "any", false, false, false, 135), "nomComplet", [], "any", false, false, false, 135), "html", null, true);
        echo "</h6>
                                    <small>Date Naissance</small>
                                    <h6>";
        // line 137
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ass"]) || array_key_exists("ass", $context) ? $context["ass"] : (function () { throw new RuntimeError('Variable "ass" does not exist.', 137, $this->source); })()), "userA", [], "any", false, false, false, 137), "datenaissance", [], "any", false, false, false, 137), "d/m/y"), "html", null, true);
        echo "</h6>
                                    <small>Email</small>
                                    <h6>";
        // line 139
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ass"]) || array_key_exists("ass", $context) ? $context["ass"] : (function () { throw new RuntimeError('Variable "ass" does not exist.', 139, $this->source); })()), "userA", [], "any", false, false, false, 139), "email", [], "any", false, false, false, 139), "html", null, true);
        echo "</h6>
                                    <small>Numero de Telephone</small>
                                    <h6>";
        // line 141
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ass"]) || array_key_exists("ass", $context) ? $context["ass"] : (function () { throw new RuntimeError('Variable "ass" does not exist.', 141, $this->source); })()), "userA", [], "any", false, false, false, 141), "numeroTel", [], "any", false, false, false, 141), "html", null, true);
        echo "</h6>
                                </div>
                            </div>
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
        return "Visiteur/aassociation2parid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 141,  265 => 139,  260 => 137,  255 => 135,  247 => 132,  233 => 121,  229 => 120,  217 => 111,  204 => 101,  192 => 92,  180 => 83,  168 => 74,  156 => 65,  140 => 52,  134 => 49,  129 => 47,  123 => 44,  118 => 42,  110 => 37,  104 => 34,  96 => 28,  92 => 23,  87 => 21,  84 => 20,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin/bars.html.twig\" %}


{% block contenpage %}


    <div class=\"container\">
        <div class=\"main-body\">

            <!-- Breadcrumb -->

            <!-- /Breadcrumb -->

            <div class=\"row gutters-sm\">
                <div class=\"col-md-4 mb-3\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"d-flex flex-column align-items-center text-center\">
                                {# <img width=\"auto\" height=\"222\"  src=\" {{ asset('uploads/images/'  ~ associations.logo) }}\"alt=\"Awesome Image\"/> #}

                                <img src=\" {{ asset('uploads/images/'  ~ ass.logo) }}\" alt=\"Admin\" class=\"rounded-circle\" width=\"200\" height=\"150\">
                                <div class=\"mt-3\">
                                    <div class=\"x_content\">   <h1 style=\" color:#0D3349; font-family: Lobster;\">{{ ass.titre }}</h1></div>
{#                                    <p class=\"text-secondary mb-1\">Full Stack Developer</p>#}
{#                                    <p class=\"text-muted font-size-sm\">Bay Area, San Francisco, CA</p>#}
{#                                    <button class=\"btn btn-primary\">Follow</button>#}
{#                                    <button class=\"btn btn-outline-primary\">Message</button>#}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"card mt-3\">
                        <ul class=\"list-group list-group-flush\">
                            <a href=\"{{ ass.siteweb }}\">
                            <li class=\"list-group-item d-flex justify-content-between align-items-center flex-wrap\">
                                <h6 class=\"mb-0\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-globe mr-2 icon-inline\"><circle cx=\"12\" cy=\"12\" r=\"10\"></circle><line x1=\"2\" y1=\"12\" x2=\"22\" y2=\"12\"></line><path d=\"M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z\"></path></svg>Website</h6>
                                <span class=\"text-secondary\">{{ ass.siteWeb }}</span>
                            </li></a>
                            <a href=\"ass.twitter\">
                            <li class=\"list-group-item d-flex justify-content-between align-items-center flex-wrap\">
                                <h6 class=\"mb-0\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-twitter mr-2 icon-inline text-info\"><path d=\"M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z\"></path></svg>Twitter</h6>
                                <span class=\"text-secondary\">{{ass.Twitter}}</span>
                            </li></a>
                            <a href=\"{{ ass.instagram }}\">
                            <li class=\"list-group-item d-flex justify-content-between align-items-center flex-wrap\">
                                <h6 class=\"mb-0\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-instagram mr-2 icon-inline text-danger\"><rect x=\"2\" y=\"2\" width=\"20\" height=\"20\" rx=\"5\" ry=\"5\"></rect><path d=\"M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z\"></path><line x1=\"17.5\" y1=\"6.5\" x2=\"17.51\" y2=\"6.5\"></line></svg>Instagram</h6>
                                <span class=\"text-secondary\">{{ ass.instagram }}</span>
                            </li></a>
                            <a href=\"{{ ass.facebook  }}\">
                            <li class=\"list-group-item d-flex justify-content-between align-items-center flex-wrap\">
                                <h6 class=\"mb-0\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-facebook mr-2 icon-inline text-primary\"><path d=\"M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z\"></path></svg>Facebook</h6>
                                <span class=\"text-secondary\">{{ ass.facebook }}</span>
                            </li></a>
                        </ul>
                    </div>
                </div>
                <div class=\"col-md-8\">
                    <div class=\"card mb-3\">
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-sm-3\">
                                    <h6 class=\"mb-0\">Nom d'association</h6>
                                </div>
                                <div class=\"col-sm-9 text-secondary\">
                                    {{ass.titre }}
                                </div>
                            </div>
                            <hr>
                            <div class=\"row\">
                                <div class=\"col-sm-3\">
                                    <h6 class=\"mb-0\">Adresse</h6>
                                </div>
                                <div class=\"col-sm-9 text-secondary\">
                                    {{ass.adresse}}
                                </div>
                            </div>
                            <hr>
                            <div class=\"row\">
                                <div class=\"col-sm-3\">
                                    <h6 class=\"mb-0\">Nombre des participants</h6>
                                </div>
                                <div class=\"col-sm-9 text-secondary\">
                                    {{ ass.nombreMembre }}
                                </div>
                            </div>
                            <hr>
                            <div class=\"row\">
                                <div class=\"col-sm-3\">
                                    <h6 class=\"mb-0\">Domaine d'association</h6>
                                </div>
                                <div class=\"col-sm-9 text-secondary\">
                                    {{ass.domaineAssociation }}
                                </div>
                            </div>
                            <hr>
                            <div class=\"row\">
                                <div class=\"col-sm-3\">
                                    <h6 class=\"mb-0\">Budget</h6>
                                </div>
                                <div class=\"col-sm-9 text-secondary\">
                                    {{ass.budget }} Dt
                                </div>
                            </div>
                            <hr>
                            <div class=\"row\">
                                <div class=\"col-sm-3\">
                                    <h6 class=\"mb-0\">Date fondation</h6>
                                </div>
                                <div class=\"col-sm-9 text-secondary\">

                                    {{ass.dateFondation | date('d/m/y') }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row gutters-sm\">
                        <div class=\"col-sm-6 mb-3\">
                            <div class=\"card h-100\">
                                <div class=\"card-body\">
                                    <h6 class=\"d-flex align-items-center mb-3\"><i class=\"material-icons text-info mr-2\">But de </i>{{ ass.titre }}</h6>
                                    <div class=\"x_content\">   <h2 style=\" color:#0c5460; font-family: Lobster;\">{{ ass.but }}</h2>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"col-sm-6 mb-3\">
                            <div class=\"card h-100\">
                                <div class=\"card-body\">

                                    <h6 class=\"d-flex align-items-center mb-3\"><i class=\"material-icons text-info mr-2\">
                                            <img style=\"width: 40px; height: 30px\" src=\" {{ asset('uploads/images/'  ~ ass.userA.logo) }}\" alt=\"Awesome Image\"> President de </i><br/>{{ ass.titre }}</h6>

                                    <small>Nom</small>
                                   <h6>{{ ass.userA.nomComplet }}</h6>
                                    <small>Date Naissance</small>
                                    <h6>{{ ass.userA.datenaissance | date('d/m/y') }}</h6>
                                    <small>Email</small>
                                    <h6>{{ ass.userA.email }}</h6>
                                    <small>Numero de Telephone</small>
                                    <h6>{{ ass.userA.numeroTel }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "Visiteur/aassociation2parid.html.twig", "G:\\PFEE-main\\templates\\Visiteur\\aassociation2parid.html.twig");
    }
}
