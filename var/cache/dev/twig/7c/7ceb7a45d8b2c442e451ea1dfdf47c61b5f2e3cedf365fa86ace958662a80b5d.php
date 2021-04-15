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
            echo "                    <h2>👋 ";
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
        echo "\"><i class=\"fa fa-home\"></i> voir toutes les associations tunisiennes</a>
                        </li>
                        ";
        // line 48
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPERUSER")) {
            // line 49
            echo "
                        <li class=\"nav-item\">
";
            // line 52
            echo "                                                        <a class=\"nav-link js-scroll\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminchats");
            echo "\"><i class=\"far fa-comment-dots\"></i> gerer toutes les conversations</a>

                        </li>
                        ";
        }
        // line 56
        echo "

";
        // line 63
        echo "


                        ";
        // line 66
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPERUSER")) {
            // line 67
            echo "                        <li><a><i class=\"fa fa-user\"></i> ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.menu.user"), "html", null, true);
            echo " <span class=\"fa fa-chevron-down\"></span></a>
                            <ul class=\"nav child_menu\">
                                <li><a href=\"";
            // line 69
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.menu.manage"), "html", null, true);
            echo "</a></li>
                            </ul>
                        </li>

                        ";
        }
        // line 74
        echo "                        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPERUSER")) {
            // line 75
            echo "                            <li><a><i class=\"fa fa-user\"></i> ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.menu.association"), "html", null, true);
            echo " <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li><a href=\"";
            // line 77
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("association_index");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.menu.manage"), "html", null, true);
            echo "</a></li>
                                </ul>
                            </li>

                        ";
        }
        // line 82
        echo "
                         ";
        // line 83
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PASSOCIATION")) {
            // line 84
            echo "                        <li><a><i class=\"fa fa-diamond\"></i> ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.menu.opportunity"), "html", null, true);
            echo " <span class=\"fa fa-chevron-down\"></span></a>
                            <ul class=\"nav child_menu\">
                                <li><a href=\"";
            // line 86
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("opportunite_index");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.menu.manage"), "html", null, true);
            echo "</a></li>
                            </ul>
                        </li>

                        ";
        }
        // line 91
        echo "                        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CONSULTANT")) {
            // line 92
            echo "
                            <li><a><i class=\"fa fa-user\"></i> Chats <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li><a href=\"";
            // line 95
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forumsall");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.menu.manage"), "html", null, true);
            echo " vos messages</a></li>
                                </ul>
                            </li>

                        ";
        }
        // line 100
        echo "                        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PASSOCIATION")) {
            // line 101
            echo "
                            <li><a><i class=\"fa fa-user\"></i> ";
            // line 102
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.menu.association"), "html", null, true);
            echo " <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li><a href=\"";
            // line 104
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("association_indexP");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.menu.manage"), "html", null, true);
            echo " vos associations</a></li>
                                </ul>
                            </li>

                        ";
        }
        // line 109
        echo "                        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PASSOCIATION")) {
            // line 110
            echo "
                            <li><a><i class=\"fa fa-user\"></i>Chatter avec un consultant <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li><a href=\"";
            // line 113
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forums");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.menu.manage"), "html", null, true);
            echo " vos associations</a></li>
                                </ul>
                            </li>

                        ";
        }
        // line 118
        echo "                        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_WRITER")) {
            // line 119
            echo "                        <li><a><i class=\"fa fa-bookmark\"></i>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.menu.categories"), "html", null, true);
            echo " <span class=\"fa fa-chevron-down\"></span></a>
                            <ul class=\"nav child_menu\">
                                <li><a href=\"";
            // line 121
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_categories");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.menu.manage"), "html", null, true);
            echo "</a></li>
                            </ul>
                        </li>
                        <li><a><i class=\"fa fa-clipboard\"></i> ";
            // line 124
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.menu.blog"), "html", null, true);
            echo " <span class=\"fa fa-chevron-down\"></span></a>
                            <ul class=\"nav child_menu\">
                                <li><a href=\"";
            // line 126
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_blogPosts");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.menu.manage"), "html", null, true);
            echo "</a></li>
                                ";
            // line 127
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_EDITORIAL")) {
                // line 128
                echo "                                    <li><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_allhistorique_blogPosts");
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.menu.history"), "html", null, true);
                echo "</a></li>
                                ";
            }
            // line 130
            echo "                            </ul>
                        </li>
                        ";
        }
        // line 133
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
        // line 149
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 149, $this->source); })()), "user", [], "any", false, false, false, 149)) {
            // line 150
            echo "
            <nav style=\"height:50px\" class=\"nav navbar-nav\">
                <ul class=\" navbar-right\">
                    <li class=\"nav-item dropdown open\" style=\"padding-left: 15px;\">
                        <a href=\"javascript:;\" class=\"user-profile dropdown-toggle\" aria-haspopup=\"true\" id=\"navbarDropdown\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                            <img style=\"width: 40px; height: 30px\" src=\" ";
            // line 155
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 155, $this->source); })()), "user", [], "any", false, false, false, 155), "logo", [], "any", false, false, false, 155))), "html", null, true);
            echo "\" alt=\"Awesome Image\">
                            ";
            // line 156
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 156, $this->source); })()), "user", [], "any", false, false, false, 156), "nomComplet", [], "any", false, false, false, 156), "html", null, true);
            echo "
                        </a>
                        <div class=\"dropdown-menu dropdown-usermenu pull-right\" aria-labelledby=\"navbarDropdown\">
                            <a class=\"dropdown-item\"  href=\"";
            // line 159
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("changepass");
            echo "\"><i class=\"fa fa-key pull-right\"></i>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.global.change_my_password"), "html", null, true);
            echo "</a>
                            <a class=\"dropdown-item\"  href=\"";
            // line 160
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\"><i class=\"fa fa-sign-out pull-right\"></i>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.global.logout"), "html", null, true);
            echo "</a>
                            <a class=\"dropdown-item\" href=\"";
            // line 161
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("userr_edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 161, $this->source); })()), "user", [], "any", false, false, false, 161), "id", [], "any", false, false, false, 161)]), "html", null, true);
            echo "\">Modifier votre compte</a>

                        </div>
                    </li>
                </ul>
            </nav>
        ";
        } else {
            // line 168
            echo "

            <a  href=\"#\"><h5 class=\"navbar-right\">cnx +inscrit</h5></a>
            ";
        }
        // line 172
        echo "
        </div>
    </div>


    <!-- page content -->
    <div class=\"right_col\" role=\"main\">
        ";
        // line 179
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 179, $this->source); })()), "flashes", [0 => "error"], "method", false, false, false, 179));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 180
            echo "            <div class=\"alert alert-danger alert-dismissible \" role=\"alert\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
                </button>
                <strong>";
            // line 183
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
        // line 186
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 186, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 186));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 187
            echo "            <div class=\"alert alert-success alert-dismissible \" role=\"alert\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
                </button>
                <strong>";
            // line 190
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
        // line 193
        echo "        ";
        $this->displayBlock('contenpage', $context, $blocks);
        // line 194
        echo "    </div>
    <!-- /page content -->


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 193
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
        return array (  458 => 193,  444 => 194,  441 => 193,  430 => 190,  425 => 187,  420 => 186,  409 => 183,  404 => 180,  400 => 179,  391 => 172,  385 => 168,  375 => 161,  369 => 160,  363 => 159,  357 => 156,  353 => 155,  346 => 150,  344 => 149,  326 => 133,  321 => 130,  313 => 128,  311 => 127,  305 => 126,  300 => 124,  292 => 121,  286 => 119,  283 => 118,  273 => 113,  268 => 110,  265 => 109,  255 => 104,  250 => 102,  247 => 101,  244 => 100,  234 => 95,  229 => 92,  226 => 91,  216 => 86,  210 => 84,  208 => 83,  205 => 82,  195 => 77,  189 => 75,  186 => 74,  176 => 69,  170 => 67,  168 => 66,  163 => 63,  159 => 56,  151 => 52,  147 => 49,  145 => 48,  140 => 46,  133 => 44,  121 => 34,  117 => 32,  110 => 29,  108 => 28,  104 => 27,  100 => 25,  94 => 23,  92 => 22,  79 => 12,  75 => 10,  69 => 5,  59 => 4,  36 => 1,);
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
                    <h2>👋 {{ app.user.nomComplet }}</h2>

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
                        <li><a href=\"{{ path('association_index_user') }}\"><i class=\"fa fa-home\"></i> voir toutes les associations tunisiennes</a>
                        </li>
                        {% if is_granted(\"ROLE_SUPERUSER\") %}

                        <li class=\"nav-item\">
{#                            <a class=\"nav-link js-scroll\" href=\"{{path('contact')}}\"><i class=\"far fa-comment-dots\"></i> Contact</a>#}
                                                        <a class=\"nav-link js-scroll\" href=\"{{path('adminchats')}}\"><i class=\"far fa-comment-dots\"></i> gerer toutes les conversations</a>

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
                            <li><a><i class=\"fa fa-user\"></i> {{ \"backend.menu.association\"|trans }} <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li><a href=\"{{ path('association_index') }}\">{{ \"backend.menu.manage\"|trans }}</a></li>
                                </ul>
                            </li>

                        {% endif %}

                         {% if is_granted(\"ROLE_PASSOCIATION\") %}
                        <li><a><i class=\"fa fa-diamond\"></i> {{ \"backend.menu.opportunity\"|trans }} <span class=\"fa fa-chevron-down\"></span></a>
                            <ul class=\"nav child_menu\">
                                <li><a href=\"{{ path('opportunite_index') }}\">{{ \"backend.menu.manage\"|trans }}</a></li>
                            </ul>
                        </li>

                        {% endif %}
                        {% if is_granted(\"ROLE_CONSULTANT\") %}

                            <li><a><i class=\"fa fa-user\"></i> Chats <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li><a href=\"{{ path('forumsall') }}\">{{ \"backend.menu.manage\"|trans }} vos messages</a></li>
                                </ul>
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

                            <li><a><i class=\"fa fa-user\"></i>Chatter avec un consultant <span class=\"fa fa-chevron-down\"></span></a>
                                <ul class=\"nav child_menu\">
                                    <li><a href=\"{{ path('forums') }}\">{{ \"backend.menu.manage\"|trans }} vos associations</a></li>
                                </ul>
                            </li>

                        {% endif %}
                        {% if is_granted(\"ROLE_WRITER\") %}
                        <li><a><i class=\"fa fa-bookmark\"></i>{{ \"backend.menu.categories\"|trans }} <span class=\"fa fa-chevron-down\"></span></a>
                            <ul class=\"nav child_menu\">
                                <li><a href=\"{{ path('app_admin_categories') }}\">{{ \"backend.menu.manage\"|trans }}</a></li>
                            </ul>
                        </li>
                        <li><a><i class=\"fa fa-clipboard\"></i> {{ \"backend.menu.blog\"|trans }} <span class=\"fa fa-chevron-down\"></span></a>
                            <ul class=\"nav child_menu\">
                                <li><a href=\"{{ path('app_admin_blogPosts') }}\">{{ \"backend.menu.manage\"|trans }}</a></li>
                                {% if is_granted(\"ROLE_EDITORIAL\") %}
                                    <li><a href=\"{{ path('app_admin_allhistorique_blogPosts') }}\">{{ \"backend.menu.history\"|trans }}</a></li>
                                {% endif %}
                            </ul>
                        </li>
                        {% endif %}
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

            <nav style=\"height:50px\" class=\"nav navbar-nav\">
                <ul class=\" navbar-right\">
                    <li class=\"nav-item dropdown open\" style=\"padding-left: 15px;\">
                        <a href=\"javascript:;\" class=\"user-profile dropdown-toggle\" aria-haspopup=\"true\" id=\"navbarDropdown\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                            <img style=\"width: 40px; height: 30px\" src=\" {{ asset('uploads/images/'  ~ app.user.logo) }}\" alt=\"Awesome Image\">
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
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
                </button>
                <strong>{{ \"backend.global.error\"|trans }}</strong> {{ message }}
            </div>
        {% endfor %}
        {% for message in app.flashes(\"success\") %}
            <div class=\"alert alert-success alert-dismissible \" role=\"alert\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span>
                </button>
                <strong>{{ \"backend.global.success\"|trans }}</strong> {{ message }}
            </div>
        {% endfor %}
        {% block contenpage %}{% endblock %}
    </div>
    <!-- /page content -->


{% endblock %}
", "admin/bars.html.twig", "G:\\PFEE-main\\templates\\admin\\bars.html.twig");
    }
}
