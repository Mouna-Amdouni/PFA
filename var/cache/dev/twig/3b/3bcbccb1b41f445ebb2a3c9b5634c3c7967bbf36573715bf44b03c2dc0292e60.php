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

/* menu.html.twig */
class __TwigTemplate_2bea91321d3e78427578e4b3a9093cf44112e05ee57b50feae8acf9e7fdb9a3c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'metas' => [$this, 'block_metas'],
            'stylesheets' => [$this, 'block_stylesheets'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menu.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 5
        $this->displayBlock('metas', $context, $blocks);
        // line 8
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 38
        echo "</head>
<body style=\"background-color: white\">

<nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
    <a class=\"navbar-brand\" href=\"#\">Associations pour tous</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
        <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item active\">

                <a class=\"nav-link\" href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("association_index_user");
        echo "\">Associations
                    <span class=\"sr-only\">(current)</span>
                </a>
            </li>

            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Features</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Pricing</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">About</a>
            </li>
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Dropdown</a>
                <div class=\"dropdown-menu\">
                    <a class=\"dropdown-item\" href=\"#\">Action</a>
                    <a class=\"dropdown-item\" href=\"#\">Another action</a>
                    <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                    <div class=\"dropdown-divider\"></div>
                    <a class=\"dropdown-item\" href=\"#\">Separated link</a>
                </div>
            </li>
        </ul>
        <form class=\"form-inline my-2 my-lg-0\">
            <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Search\">
            <button class=\"btn btn-secondary my-2 my-sm-0\" type=\"submit\">Search</button>
        </form>
    </div>
</nav>



";
        // line 86
        echo "
";
        // line 94
        echo "
";
        // line 102
        echo "
";
        // line 109
        echo "
";
        // line 117
        echo "
";
        // line 126
        echo "
";
        // line 128
        echo "
";
        // line 130
        echo "
";
        // line 141
        echo "
";
        // line 143
        echo "
";
        // line 148
        echo "
";
        // line 150
        echo "
";
        // line 152
        echo "
";
        // line 156
        echo "
";
        // line 159
        echo "
";
        // line 162
        echo "
";
        // line 164
        echo "
";
        // line 166
        echo "

";
        // line 172
        echo "

";
        // line 177
        echo "
";
        // line 179
        echo "
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.global.welcome"), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_metas($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metas"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metas"));

        // line 6
        echo "        <meta charset=\"UTF-8\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/menu.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Bootstrap -->
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!-- Font Awesome -->
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!-- NProgress -->
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/nprogress/nprogress.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!-- iCheck -->
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/iCheck/skins/flat/green.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- bootstrap-progressbar -->
        <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!-- JQVMap -->
        <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/jqvmap/dist/jqvmap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

        <!-- Custom Theme Style -->
        <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/css/custom.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!-- Datatables -->
        <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/datatables.net-bs/css/dataTables.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!-- PNotify -->
        <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/pnotify/dist/pnotify.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/pnotify/dist/pnotify.buttons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendors/pnotify/dist/pnotify.nonblock.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!-- Latest compiled and minified CSS -->
        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css\">
        <!-- include summernote css/js -->
        <link href=\"https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css\" rel=\"stylesheet\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  294 => 32,  290 => 31,  286 => 30,  281 => 28,  276 => 26,  270 => 23,  265 => 21,  259 => 18,  254 => 16,  249 => 14,  244 => 12,  237 => 9,  227 => 8,  216 => 6,  206 => 5,  187 => 4,  174 => 179,  171 => 177,  167 => 172,  163 => 166,  160 => 164,  157 => 162,  154 => 159,  151 => 156,  148 => 152,  145 => 150,  142 => 148,  139 => 143,  136 => 141,  133 => 130,  130 => 128,  127 => 126,  124 => 117,  121 => 109,  118 => 102,  115 => 94,  112 => 86,  75 => 51,  60 => 38,  57 => 8,  55 => 5,  51 => 4,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>{% block title %}{{ \"backend.global.welcome\"|trans }}{% endblock %}</title>
    {% block metas %}
        <meta charset=\"UTF-8\">
    {% endblock %}
    {% block stylesheets %}
        <link href=\"{{ asset('vendors/menu.css') }}\" rel=\"stylesheet\">

        <!-- Bootstrap -->
        <link href=\"{{ asset('vendors/bootstrap/dist/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
        <!-- Font Awesome -->
        <link href=\"{{ asset('vendors/font-awesome/css/font-awesome.min.css') }}\" rel=\"stylesheet\">
        <!-- NProgress -->
        <link href=\"{{ asset('vendors/nprogress/nprogress.css') }}\" rel=\"stylesheet\">
        <!-- iCheck -->
        <link href=\"{{ asset('vendors/iCheck/skins/flat/green.css') }}\" rel=\"stylesheet\">

        <!-- bootstrap-progressbar -->
        <link href=\"{{ asset('vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}\" rel=\"stylesheet\">
        <!-- JQVMap -->
        <link href=\"{{ asset('vendors/jqvmap/dist/jqvmap.min.css') }}\" rel=\"stylesheet\"/>

        <!-- Custom Theme Style -->
        <link href=\"{{ asset('build/css/custom.min.css') }}\" rel=\"stylesheet\">
        <!-- Datatables -->
        <link href=\"{{ asset('vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}\" rel=\"stylesheet\">
        <!-- PNotify -->
        <link href=\"{{ asset('vendors/pnotify/dist/pnotify.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('vendors/pnotify/dist/pnotify.buttons.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('vendors/pnotify/dist/pnotify.nonblock.css') }}\" rel=\"stylesheet\">
        <!-- Latest compiled and minified CSS -->
        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css\">
        <!-- include summernote css/js -->
        <link href=\"https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css\" rel=\"stylesheet\">
    {% endblock %}
</head>
<body style=\"background-color: white\">

<nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
    <a class=\"navbar-brand\" href=\"#\">Associations pour tous</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
        <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item active\">

                <a class=\"nav-link\" href=\"{{ path('association_index_user') }}\">Associations
                    <span class=\"sr-only\">(current)</span>
                </a>
            </li>

            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Features</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Pricing</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">About</a>
            </li>
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Dropdown</a>
                <div class=\"dropdown-menu\">
                    <a class=\"dropdown-item\" href=\"#\">Action</a>
                    <a class=\"dropdown-item\" href=\"#\">Another action</a>
                    <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                    <div class=\"dropdown-divider\"></div>
                    <a class=\"dropdown-item\" href=\"#\">Separated link</a>
                </div>
            </li>
        </ul>
        <form class=\"form-inline my-2 my-lg-0\">
            <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Search\">
            <button class=\"btn btn-secondary my-2 my-sm-0\" type=\"submit\">Search</button>
        </form>
    </div>
</nav>



{#<menu class=\"menu\">#}

{#    <button class=\"menu__item active\" style=\"--bgColorBody: #99ccff; --bgColorItem: #99ccff;\" >#}
{#        <svg class=\"icon\" viewBox=\"0 0 20 24\">#}
{#            <path d=\"M3.8,6.6h16.4\"/>#}
{#            <path d=\"M20.2,12.1H3.8\"/>#}
{#            <path d=\"M3.8,17.5h16.6\"/>#}
{#        </svg>#}
{#    </button>#}

{#    <button class=\"menu__item\" style=\"--bgColorBody: #e0ebeb; --bgColorItem: #e0ebeb;\">#}
{#        <svg class=\"icon\" viewBox=\"0 0 24 24\">#}
{#            <path  d=\"M6.7,4.8h10.7c0.3,0,0.6,0.2,0.7,0.5l2.8,7.3c0,0.1,0,0.2,0,0.3v5.6c0,0.4-0.4,0.8-0.8,0.8H3.8#}
{#        C3.4,19.3,3,19,3,18.5v-5.6c0-0.1,0-0.2,0.1-0.3L6,5.3C6.1,5,6.4,4.8,6.7,4.8z\"/>#}
{#            <path  d=\"M3.4,12.9H8l1.6,2.8h4.9l1.5-2.8h4.6\"/>#}
{#        </svg>#}
{#    </button>#}

{#    <button class=\"menu__item\" style=\"--bgColorBody: #ffcce6; --bgColorItem: #ffcce6;\" >#}
{#        <svg class=\"icon\" viewBox=\"0 0 24 24\">#}
{#            <path  d=\"M3.4,11.9l8.8,4.4l8.4-4.4\"/>#}
{#            <path  d=\"M3.4,16.2l8.8,4.5l8.4-4.5\"/>#}
{#            <path  d=\"M3.7,7.8l8.6-4.5l8,4.5l-8,4.3L3.7,7.8z\"/>#}
{#    </button>#}

{#    <button class=\"menu__item\" style=\"--bgColorBody: #ecffb3; --bgColorItem: #ecffb3;\" >#}
{#        <svg class=\"icon\" viewBox=\"0 0 24 24\" >#}
{#            <path  d=\"M5.1,3.9h13.9c0.6,0,1.2,0.5,1.2,1.2v13.9c0,0.6-0.5,1.2-1.2,1.2H5.1c-0.6,0-1.2-0.5-1.2-1.2V5.1#}
{#          C3.9,4.4,4.4,3.9,5.1,3.9z\"/>#}
{#            <path  d=\"M4.2,9.3h15.6\"/>#}
{#            <path  d=\"M9.1,9.5v10.3\"/>#}
{#    </button>#}

{#    <button class=\"menu__item\" style=\"--bgColorBody: #cffff1; --bgColorItem:#65ddb7;\">#}
{#        <svg class=\"icon\" viewBox=\"0 0 24 24\" >#}
{#            <path  d=\"M5.1,3.9h13.9c0.6,0,1.2,0.5,1.2,1.2v13.9c0,0.6-0.5,1.2-1.2,1.2H5.1c-0.6,0-1.2-0.5-1.2-1.2V5.1#}
{#          C3.9,4.4,4.4,3.9,5.1,3.9z\"/>#}
{#            <path  d=\"M5.5,20l9.9-9.9l4.7,4.7\"/>#}
{#            <path  d=\"M10.4,8.8c0,0.9-0.7,1.6-1.6,1.6c-0.9,0-1.6-0.7-1.6-1.6C7.3,8,8,7.3,8.9,7.3C9.7,7.3,10.4,8,10.4,8.8z\"/>#}
{#        </svg>#}
{#    </button>#}

{#    <div class=\"menu__border\"></div>#}

{#</menu>#}

{#<div class=\"svg-container\">#}
{#    <svg viewBox=\"0 0 202.9 45.5\" >#}
{#        <clipPath id=\"menu\" clipPathUnits=\"objectBoundingBox\" transform=\"scale(0.0049285362247413 0.021978021978022)\">#}
{#            <path  d=\"M6.7,45.5c5.7,0.1,14.1-0.4,23.3-4c5.7-2.3,9.9-5,18.1-10.5c10.7-7.1,11.8-9.2,20.6-14.3c5-2.9,9.2-5.2,15.2-7#}
{#          c7.1-2.1,13.3-2.3,17.6-2.1c4.2-0.2,10.5,0.1,17.6,2.1c6.1,1.8,10.2,4.1,15.2,7c8.8,5,9.9,7.1,20.6,14.3c8.3,5.5,12.4,8.2,18.1,10.5#}
{#          c9.2,3.6,17.6,4.2,23.3,4H6.7z\"/>#}
{#        </clipPath>#}
{#    </svg>#}
{#</div>#}
{#<script>#}

{#    \"use strict\";#}

{#    let body = document.body;#}
{#    let menu = document.querySelectorAll(\".menu__item\");#}
{#    let menuBorder = document.querySelector(\".menu__border\");#}
{#    let active ;#}

{#    function clickItem() {#}

{#        active = document.querySelector(\"button.active\");#}

{#        if (active) {#}
{#            active.classList.remove(\"active\");#}
{#        }#}

{#        this.classList.add(\"active\");#}
{#        let box = this.getBoundingClientRect();#}

{#        active = this;#}
{#        body.style.backgroundColor = active.style.getPropertyValue(\"--bgColorBody\");#}

{#        offsetMenuBorder (box, menuBorder);#}

{#    }#}


{#    function offsetMenuBorder(box, menuBorder) {#}
{#        let left = Math.floor(box.left - menuBorder.closest(\"menu\").offsetLeft - (menuBorder.offsetWidth  - box.width) / 2) +  \"px\";#}
{#        menuBorder.style.transform = `translate3d(\${left}, 0 , 0)`#}
{#    }#}


{#    menu.forEach(item => {#}
{#        item.addEventListener(\"click\", clickItem);#}
{#    })#}

{#</script>#}

</body>
</html>
", "menu.html.twig", "G:\\PFEE-main\\templates\\menu.html.twig");
    }
}
