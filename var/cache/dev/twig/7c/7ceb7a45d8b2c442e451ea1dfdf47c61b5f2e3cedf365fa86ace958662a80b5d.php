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

/* admin/bars.html.twig */
class __TwigTemplate_b1a7be54e9ca85e00bb1c68bb81f576ce4c586e299bcab3ba9e66b967e528228 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'bars' => [$this, 'block_bars'],
            'contenpage' => [$this, 'block_contenpage'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "adminbase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/bars.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/bars.html.twig"));

        $this->parent = $this->loadTemplate("adminbase.html.twig", "admin/bars.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_bars($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bars"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bars"));

        // line 5
        echo "
    <div class=\"col-md-3 left_col menu_fixed\">
        <div class=\"left_col scroll-view\">
            <div class=\"navbar nav_title\" style=\"border: 0;\">
";
        // line 10
        echo "

                <a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("indexx");
        echo "\" class=\"site_title\"> <span>Associations pour tous</span></a>

            </div>


            <div class=\"clearfix\"></div>

            <!-- menu profile quick info -->
            <div class=\"profile clearfix\">
                <div class=\"profile_pic\">
                    ";
        // line 22
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 23
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "user", [], "any", false, false, false, 23), "avatarUrl", [0 => 50], "method", false, false, false, 23), "html", null, true);
            echo "\" alt=\"...\" class=\"img-circle profile_img\">
                    ";
        }
        // line 25
        echo "                </div>
                <div class=\"profile_info\">
                    <span>";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.global.welcome"), "html", null, true);
        echo ",</span>
                    ";
        // line 28
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, false, 28)) {
            // line 29
            echo "                    <h2>???? ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29), "nomComplet", [], "any", false, false, false, 29), "html", null, true);
            echo "</h2>

                    ";
        } else {
            // line 32
            echo "                        <h1>salut user!</h1>
                    ";
        }
        // line 34
        echo "                </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id=\"sidebar-menu\" class=\"main_menu_side hidden-print main_menu \">
                <div class=\"menu_section\">
                    <ul class=\"nav side-menu\">
                        <li><a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("indexx");
        echo "\"><i class=\"fa fa-home\"></i> ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.menu.home"), "html", null, true);
        echo "</a>
                        </li>
                                           <li><a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("association_index_user");
        echo "\"><i class=\"fa fa-users\"></i>Associations</a>
                        </li>

                        ";
        // line 49
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PASSOCIATION")) {
            // line 50
            echo "                        <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("consultant_index_user");
            echo "\"><i class=\"fa fa-briefcase\"></i>Consultants</a></li>

                        ";
        }
        // line 53
        echo "
                        <li><a href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("opportunitesUser");
        echo "\"><i class=\"fa fa-diamond\"\"></i>Opportunit??s </a>
                        </li>

                        ";
        // line 57
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPERUSER")) {
            // line 58
            echo "
                        
                            <li><a><i class=\"glyphicon glyphicon-envelope\"></i> Conversation <span class=\"fa fa-chevron-down\"></span></a>
                            <ul class=\"nav child_menu\">
                                <li><a href=\"";
            // line 62
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminchats");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.menu.manage"), "html", null, true);
            echo "</a></li>
                            </ul>
                        </li>
                        
                        ";
        }
        // line 67
        echo "

";
        // line 74
        echo "


                        ";
        // line 77
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPERUSER")) {
            // line 78
            echo "                        <li><a><i class=\"fa fa-user\"></i> ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.menu.user"), "html", null, true);
            echo " <span class=\"fa fa-chevron-down\"></span></a>
                            <ul class=\"nav child_menu\">
                                <li><a href=\"";
            // line 80
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.menu.manage"), "html", null, true);
            echo "</a></li>
                            </ul>
                        </li>

                        ";
        }
        // line 85
        echo "                        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPERUSER")) {
            // line 86
            echo "                            <li><a><i class=\"fa fa-users\"></i> ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.menu.association"), "html", null, true);
            echo " <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li><a href=\"";
            // line 88
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("association_index");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.menu.manage"), "html", null, true);
            echo "</a></li>
                                </ul>
                            </li>

                        ";
        }
        // line 93
        echo "
                         ";
        // line 94
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PASSOCIATION")) {
            // line 95
            echo "                        <li><a><i class=\"fa fa-diamond\"></i> ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.menu.opportunity"), "html", null, true);
            echo " <span class=\"fa fa-chevron-down\"></span></a>
                            <ul class=\"nav child_menu\">
                                <li><a href=\"";
            // line 97
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("opportunite_index");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.menu.manage"), "html", null, true);
            echo " vos opportunit??s</a></li>
                            </ul>
                        </li>

                        ";
        }
        // line 102
        echo "                        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CONSULTANT")) {
            // line 103
            echo "
                                                     <li><a href=\"";
            // line 104
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forumsall");
            echo "\"><i class=\"glyphicon glyphicon-envelope\"></i> Conversations</a>

                            </li>

                        ";
        }
        // line 109
        echo "                        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PASSOCIATION")) {
            // line 110
            echo "
                            <li><a><i class=\"fa fa-user\"></i> ";
            // line 111
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.menu.association"), "html", null, true);
            echo " <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li><a href=\"";
            // line 113
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("association_indexP");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.menu.manage"), "html", null, true);
            echo " vos associations</a></li>
                                </ul>
                            </li>

                        ";
        }
        // line 118
        echo "                        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PASSOCIATION")) {
            // line 119
            echo "
                                                   <li><a href=\"";
            // line 120
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forums");
            echo "\"><i class=\"glyphicon glyphicon-envelope\"></i>  Boite ?? Reception </a>

                            </li>

                        ";
        }
        // line 140
        echo "                    </ul>
                </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
        </div>
    </div>

    <!-- top navigation -->
    <div class=\"top_nav\">
        <div class=\"nav_menu\">
            <div class=\"nav toggle\">
                <a id=\"menu_toggle\"><i class=\"fa fa-bars\"></i></a>
            </div>
            ";
        // line 156
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 156, $this->source); })()), "user", [], "any", false, false, false, 156)) {
            // line 157
            echo "
            <nav  style=\"height:20px\" class=\"navbar-right\">
                <ul>
                    <li class=\"nav-item dropdown open\" style=\"padding-left: 150px;\">
                        <a href=\"javascript:;\" class=\"user-profile dropdown-toggle\" aria-haspopup=\"true\" id=\"navbarDropdown\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                            <img  style=\"width: 40px; height: 30px\" src=\" ";
            // line 162
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 162, $this->source); })()), "user", [], "any", false, false, false, 162), "logo", [], "any", false, false, false, 162))), "html", null, true);
            echo "\" alt=\"Awesome Image\">
                            ";
            // line 163
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 163, $this->source); })()), "user", [], "any", false, false, false, 163), "nomComplet", [], "any", false, false, false, 163), "html", null, true);
            echo "
                        </a>
                        <div class=\"dropdown-menu dropdown-usermenu pull-right\" aria-labelledby=\"navbarDropdown\">
                            <a class=\"dropdown-item\"  href=\"";
            // line 166
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("changepass");
            echo "\"><i class=\"fa fa-key pull-right\"></i>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.global.change_my_password"), "html", null, true);
            echo "</a>
                            <a class=\"dropdown-item\"  href=\"";
            // line 167
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\"><i class=\"fa fa-sign-out pull-right\"></i>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.global.logout"), "html", null, true);
            echo "</a>
                            <a class=\"dropdown-item\" href=\"";
            // line 168
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("userr_edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 168, $this->source); })()), "user", [], "any", false, false, false, 168), "id", [], "any", false, false, false, 168)]), "html", null, true);
            echo "\">Modifier votre compte</a>

                        </div>
                    </li>
                </ul>
            </nav>
        ";
        } else {
            // line 175
            echo "

            <a  href=\"#\"><h5 class=\"navbar-right\">cnx +inscrit</h5></a>
            ";
        }
        // line 179
        echo "
        </div>
    </div>


    <!-- page content -->
    <div class=\"right_col\" role=\"main\">
        ";
        // line 186
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 186, $this->source); })()), "flashes", [0 => "error"], "method", false, false, false, 186));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 187
            echo "            <div class=\"alert alert-danger alert-dismissible \" role=\"alert\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">??</span>
                </button>
                <strong>";
            // line 190
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.global.error"), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 193
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 193, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 193));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 194
            echo "            <div class=\"alert alert-success alert-dismissible \" role=\"alert\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">??</span>
                </button>
                <strong>";
            // line 197
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.global.success"), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 200
        echo "        ";
        $this->displayBlock('contenpage', $context, $blocks);
        // line 201
        echo "    </div>
    <!-- /page content -->


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 200
    public function block_contenpage($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenpage"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenpage"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/bars.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  430 => 200,  416 => 201,  413 => 200,  402 => 197,  397 => 194,  392 => 193,  381 => 190,  376 => 187,  372 => 186,  363 => 179,  357 => 175,  347 => 168,  341 => 167,  335 => 166,  329 => 163,  325 => 162,  318 => 157,  316 => 156,  298 => 140,  290 => 120,  287 => 119,  284 => 118,  274 => 113,  269 => 111,  266 => 110,  263 => 109,  255 => 104,  252 => 103,  249 => 102,  239 => 97,  233 => 95,  231 => 94,  228 => 93,  218 => 88,  212 => 86,  209 => 85,  199 => 80,  193 => 78,  191 => 77,  186 => 74,  182 => 67,  172 => 62,  166 => 58,  164 => 57,  158 => 54,  155 => 53,  148 => 50,  146 => 49,  140 => 46,  133 => 44,  121 => 34,  117 => 32,  110 => 29,  108 => 28,  104 => 27,  100 => 25,  94 => 23,  92 => 22,  79 => 12,  75 => 10,  69 => 5,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"adminbase.html.twig\" %}


{% block bars %}

    <div class=\"col-md-3 left_col menu_fixed\">
        <div class=\"left_col scroll-view\">
            <div class=\"navbar nav_title\" style=\"border: 0;\">
{#                <a href=\"{{ path('app_admin_index') }}\" class=\"site_title\"><i class=\"fa fa-paw\"></i> <span>Associations pour </br> tous</span></a>#}


                <a href=\"{{ path('indexx') }}\" class=\"site_title\"> <span>Associations pour tous</span></a>

            </div>


            <div class=\"clearfix\"></div>

            <!-- menu profile quick info -->
            <div class=\"profile clearfix\">
                <div class=\"profile_pic\">
                    {% if is_granted('ROLE_ADMIN') %}
                    <img src=\"{{ app.user.avatarUrl(50) }}\" alt=\"...\" class=\"img-circle profile_img\">
                    {% endif %}
                </div>
                <div class=\"profile_info\">
                    <span>{{ \"backend.global.welcome\"|trans }},</span>
                    {% if app.user %}
                    <h2>???? {{ app.user.nomComplet }}</h2>

                    {% else %}
                        <h1>salut user!</h1>
                    {% endif %}
                </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id=\"sidebar-menu\" class=\"main_menu_side hidden-print main_menu \">
                <div class=\"menu_section\">
                    <ul class=\"nav side-menu\">
                        <li><a href=\"{{ path('indexx') }}\"><i class=\"fa fa-home\"></i> {{ \"backend.menu.home\"|trans }}</a>
                        </li>
                                           <li><a href=\"{{ path('association_index_user') }}\"><i class=\"fa fa-users\"></i>Associations</a>
                        </li>

                        {% if is_granted(\"ROLE_PASSOCIATION\") %}
                        <li><a href=\"{{ path('consultant_index_user') }}\"><i class=\"fa fa-briefcase\"></i>Consultants</a></li>

                        {% endif %}

                        <li><a href=\"{{ path('opportunitesUser') }}\"><i class=\"fa fa-diamond\"\"></i>Opportunit??s </a>
                        </li>

                        {% if is_granted(\"ROLE_SUPERUSER\") %}

                        
                            <li><a><i class=\"glyphicon glyphicon-envelope\"></i> Conversation <span class=\"fa fa-chevron-down\"></span></a>
                            <ul class=\"nav child_menu\">
                                <li><a href=\"{{path('adminchats')}}\">{{ \"backend.menu.manage\"|trans }}</a></li>
                            </ul>
                        </li>
                        
                        {% endif %}


{#                            <li><a><i class=\"fa fa-user\"></i> {{ \"backend.menu.user\"|trans }} <span class=\"fa fa-chevron-down\"></span></a>#}
{#                                <ul class=\"nav child_menu\">#}
{#                                    <li><a href=\"{{ path('forums') }}\">{{ \"backend.menu.manage\"|trans }}</a></li>#}
{#                                </ul>#}
{#                            </li>#}



                        {% if is_granted(\"ROLE_SUPERUSER\") %}
                        <li><a><i class=\"fa fa-user\"></i> {{ \"backend.menu.user\"|trans }} <span class=\"fa fa-chevron-down\"></span></a>
                            <ul class=\"nav child_menu\">
                                <li><a href=\"{{ path('app_admin_users') }}\">{{ \"backend.menu.manage\"|trans }}</a></li>
                            </ul>
                        </li>

                        {% endif %}
                        {% if is_granted(\"ROLE_SUPERUSER\") %}
                            <li><a><i class=\"fa fa-users\"></i> {{ \"backend.menu.association\"|trans }} <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li><a href=\"{{ path('association_index') }}\">{{ \"backend.menu.manage\"|trans }}</a></li>
                                </ul>
                            </li>

                        {% endif %}

                         {% if is_granted(\"ROLE_PASSOCIATION\") %}
                        <li><a><i class=\"fa fa-diamond\"></i> {{ \"backend.menu.opportunity\"|trans }} <span class=\"fa fa-chevron-down\"></span></a>
                            <ul class=\"nav child_menu\">
                                <li><a href=\"{{ path('opportunite_index') }}\">{{ \"backend.menu.manage\"|trans }} vos opportunit??s</a></li>
                            </ul>
                        </li>

                        {% endif %}
                        {% if is_granted(\"ROLE_CONSULTANT\") %}

                                                     <li><a href=\"{{ path('forumsall') }}\"><i class=\"glyphicon glyphicon-envelope\"></i> Conversations</a>

                            </li>

                        {% endif %}
                        {% if is_granted(\"ROLE_PASSOCIATION\") %}

                            <li><a><i class=\"fa fa-user\"></i> {{ \"backend.menu.association\"|trans }} <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li><a href=\"{{ path('association_indexP') }}\">{{ \"backend.menu.manage\"|trans }} vos associations</a></li>
                                </ul>
                            </li>

                        {% endif %}
                        {% if is_granted(\"ROLE_PASSOCIATION\") %}

                                                   <li><a href=\"{{ path('forums') }}\"><i class=\"glyphicon glyphicon-envelope\"></i>  Boite ?? Reception </a>

                            </li>

                        {% endif %}
{#                        {% if is_granted(\"ROLE_WRITER\") %}#}
{#                        <li><a><i class=\"fa fa-bookmark\"></i>{{ \"backend.menu.categories\"|trans }} <span class=\"fa fa-chevron-down\"></span></a>#}
{#                            <ul class=\"nav child_menu\">#}
{#                                <li><a href=\"{{ path('app_admin_categories') }}\">{{ \"backend.menu.manage\"|trans }}</a></li>#}
{#                            </ul>#}
{#                        </li>#}
{#                        <li><a><i class=\"fa fa-clipboard\"></i> {{ \"backend.menu.blog\"|trans }} <span class=\"fa fa-chevron-down\"></span></a>#}
{#                            <ul class=\"nav child_menu\">#}
{#                                <li><a href=\"{{ path('app_admin_blogPosts') }}\">{{ \"backend.menu.manage\"|trans }}</a></li>#}
{#                                {% if is_granted(\"ROLE_EDITORIAL\") %}#}
{#                                    <li><a href=\"{{ path('app_admin_allhistorique_blogPosts') }}\">{{ \"backend.menu.history\"|trans }}</a></li>#}
{#                                {% endif %}#}
{#                            </ul>#}
{#                        </li>#}
{#                        {% endif %}#}
                    </ul>
                </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
        </div>
    </div>

    <!-- top navigation -->
    <div class=\"top_nav\">
        <div class=\"nav_menu\">
            <div class=\"nav toggle\">
                <a id=\"menu_toggle\"><i class=\"fa fa-bars\"></i></a>
            </div>
            {% if app.user %}

            <nav  style=\"height:20px\" class=\"navbar-right\">
                <ul>
                    <li class=\"nav-item dropdown open\" style=\"padding-left: 150px;\">
                        <a href=\"javascript:;\" class=\"user-profile dropdown-toggle\" aria-haspopup=\"true\" id=\"navbarDropdown\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                            <img  style=\"width: 40px; height: 30px\" src=\" {{ asset('uploads/images/'  ~ app.user.logo) }}\" alt=\"Awesome Image\">
                            {{ app.user.nomComplet }}
                        </a>
                        <div class=\"dropdown-menu dropdown-usermenu pull-right\" aria-labelledby=\"navbarDropdown\">
                            <a class=\"dropdown-item\"  href=\"{{ path('changepass') }}\"><i class=\"fa fa-key pull-right\"></i>{{ \"backend.global.change_my_password\"|trans }}</a>
                            <a class=\"dropdown-item\"  href=\"{{ path('app_logout') }}\"><i class=\"fa fa-sign-out pull-right\"></i>{{ \"backend.global.logout\"|trans }}</a>
                            <a class=\"dropdown-item\" href=\"{{ path('userr_edit',{\"id\":app.user.id}) }}\">Modifier votre compte</a>

                        </div>
                    </li>
                </ul>
            </nav>
        {% else %}


            <a  href=\"#\"><h5 class=\"navbar-right\">cnx +inscrit</h5></a>
            {% endif%}

        </div>
    </div>


    <!-- page content -->
    <div class=\"right_col\" role=\"main\">
        {% for message in app.flashes(\"error\") %}
            <div class=\"alert alert-danger alert-dismissible \" role=\"alert\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">??</span>
                </button>
                <strong>{{ \"backend.global.error\"|trans }}</strong> {{ message }}
            </div>
        {% endfor %}
        {% for message in app.flashes(\"success\") %}
            <div class=\"alert alert-success alert-dismissible \" role=\"alert\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">??</span>
                </button>
                <strong>{{ \"backend.global.success\"|trans }}</strong> {{ message }}
            </div>
        {% endfor %}
        {% block contenpage %}{% endblock %}
    </div>
    <!-- /page content -->


{% endblock %}
", "admin/bars.html.twig", "C:\\xampp\\htdocs\\PFA\\templates\\admin\\bars.html.twig");
    }
}
