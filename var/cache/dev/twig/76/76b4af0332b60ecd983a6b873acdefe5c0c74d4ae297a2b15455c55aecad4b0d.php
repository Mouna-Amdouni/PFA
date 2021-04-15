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

/* security/login.html.twig */
class __TwigTemplate_f90843e591426d697fc676bdbde4503dd05a03869e953b4ad32fb31ec4c2e2fd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'contenpage' => [$this, 'block_contenpage'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("admin/bars.html.twig", "security/login.html.twig", 1);
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
        echo "\t<div>
\t\t<a class=\"hiddenanchor\" id=\"signup\"></a>
\t\t<a class=\"hiddenanchor\" id=\"signin\"></a>
\t\t<div class=\"login_wrapper\">
\t\t\t<div class=\"animate form login_form\">
\t\t\t\t<section class=\"login_content\">
\t\t\t\t\t<form method=\"post\">
\t\t\t\t\t\t<h1>Connexion</h1>
\t\t\t\t\t\t\t\t\t\t\t\t<h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"reset_pass\" href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
        echo "\">Créer un compte</a>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.login.create_acount"), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<input type=\"text\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 19, $this->source); })()), "html", null, true);
        echo "\" name=\"username\" id=\"inputText\" class=\"form-control\" placeholder=\"Username\" required autofocus>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Password\" required>
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"\" name=\"_remember_me\"><span>Remember me</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<button class=\"btn btn-success submit\" href=\"index.html\">Log in</button>
\t\t\t\t\t\t\t<button class=\"btn btn-success submit\" > Log in</button>

\t\t\t\t\t\t\t<a class=\"reset_pass\" href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        echo "\">Lost your password?</a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"separator\">
\t\t\t\t\t\t\t <p class=\"change_link\">
\t\t\t\t\t\t\t\t";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.login.new_site"), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t<a href=\"#signup\" class=\"to_register\">
\t\t\t\t\t\t\t\t\t";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.login.create_acount"), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t\t<br/>

\t\t\t\t\t\t\t<div>

\t\t\t\t\t\t\t\t<p>©";
        // line 48
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.login.all_rights"), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"https://www.smartictunisie.com/\">www.smartic.com<a/></p>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t";
        // line 56
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 56, $this->source); })())) {
            // line 57
            echo "\t\t\t\t\t\t\t<div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 57, $this->source); })()), "messageKey", [], "any", false, false, false, 57), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 57, $this->source); })()), "messageData", [], "any", false, false, false, 57), "security"), "html", null, true);
            echo "</div>
\t\t\t\t\t\t";
        }
        // line 59
        echo "\t\t\t\t\t</form>
\t\t\t\t</section>
\t\t\t</div>
\t\t\t<div id=\"register\" class=\"animate form registration_form\">
\t\t\t\t<section class=\"login_content\">
\t\t\t\t\t<form>
\t\t\t\t\t\t<h1>
\t\t\t\t\t\t\t";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.login.create_acount"), "html", null, true);
        echo "</h1>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Username\" required=\"\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" placeholder=\"Email\" required=\"\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" placeholder=\"Password\" required=\"\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<a class=\"btn btn-default submit\" href=\"index.html\">Submit</a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"clearfix\"></div>

\t\t\t\t\t\t<div class=\"separator\">
\t\t\t\t\t\t\t<p class=\"change_link\">";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.login.already_member"), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t<a href=\"#signin\" class=\"to_register\">
\t\t\t\t\t\t\t\t\t";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.login.log_in"), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<h1>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-paw\"></i>
\t\t\t\t\t\t\t\t\tADMIN PANEL</h1>
\t\t\t\t\t\t\t\t<p>©";
        // line 95
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.login.all_rights"), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"//example.com\">example.com<a/></p>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</section>
\t\t\t</div>
\t\t</div>
\t</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 108
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 108,  208 => 96,  204 => 95,  191 => 85,  186 => 83,  166 => 66,  157 => 59,  151 => 57,  149 => 56,  139 => 49,  135 => 48,  123 => 39,  118 => 37,  110 => 32,  98 => 23,  91 => 19,  85 => 16,  80 => 14,  69 => 5,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin/bars.html.twig\" %}


{% block contenpage %}
\t<div>
\t\t<a class=\"hiddenanchor\" id=\"signup\"></a>
\t\t<a class=\"hiddenanchor\" id=\"signin\"></a>
\t\t<div class=\"login_wrapper\">
\t\t\t<div class=\"animate form login_form\">
\t\t\t\t<section class=\"login_content\">
\t\t\t\t\t<form method=\"post\">
\t\t\t\t\t\t<h1>Connexion</h1>
\t\t\t\t\t\t\t\t\t\t\t\t<h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"reset_pass\" href=\"{{path('register')}}\">Créer un compte</a>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ \"backend.login.create_acount\"|trans }}
\t\t\t\t\t\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<input type=\"text\" value=\"{{ last_username }}\" name=\"username\" id=\"inputText\" class=\"form-control\" placeholder=\"Username\" required autofocus>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Password\" required>
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"\" name=\"_remember_me\"><span>Remember me</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<button class=\"btn btn-success submit\" href=\"index.html\">Log in</button>
\t\t\t\t\t\t\t<button class=\"btn btn-success submit\" > Log in</button>

\t\t\t\t\t\t\t<a class=\"reset_pass\" href=\"{{path('app_forgot_password_request')}}\">Lost your password?</a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"separator\">
\t\t\t\t\t\t\t <p class=\"change_link\">
\t\t\t\t\t\t\t\t{{ \"backend.login.new_site\"|trans }}
\t\t\t\t\t\t\t\t<a href=\"#signup\" class=\"to_register\">
\t\t\t\t\t\t\t\t\t{{ \"backend.login.create_acount\"|trans }}
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t\t<br/>

\t\t\t\t\t\t\t<div>

\t\t\t\t\t\t\t\t<p>©{{ \"now\"|date(\"Y\") }}
\t\t\t\t\t\t\t\t\t{{ \"backend.login.all_rights\"|trans }}
\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"https://www.smartictunisie.com/\">www.smartic.com<a/></p>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t{% if error %}
\t\t\t\t\t\t\t<div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</form>
\t\t\t\t</section>
\t\t\t</div>
\t\t\t<div id=\"register\" class=\"animate form registration_form\">
\t\t\t\t<section class=\"login_content\">
\t\t\t\t\t<form>
\t\t\t\t\t\t<h1>
\t\t\t\t\t\t\t{{ \"backend.login.create_acount\"|trans }}</h1>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Username\" required=\"\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" placeholder=\"Email\" required=\"\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" placeholder=\"Password\" required=\"\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<a class=\"btn btn-default submit\" href=\"index.html\">Submit</a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"clearfix\"></div>

\t\t\t\t\t\t<div class=\"separator\">
\t\t\t\t\t\t\t<p class=\"change_link\">{{ \"backend.login.already_member\"|trans }}
\t\t\t\t\t\t\t\t<a href=\"#signin\" class=\"to_register\">
\t\t\t\t\t\t\t\t\t{{ \"backend.login.log_in\"|trans }}
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<h1>
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-paw\"></i>
\t\t\t\t\t\t\t\t\tADMIN PANEL</h1>
\t\t\t\t\t\t\t\t<p>©{{ \"now\"|date(\"Y\") }}
\t\t\t\t\t\t\t\t\t{{ \"backend.login.all_rights\"|trans }}
\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"//example.com\">example.com<a/></p>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</section>
\t\t\t</div>
\t\t</div>
\t</div>

{% endblock %}
{% block javascripts %}{% endblock %}
", "security/login.html.twig", "G:\\PFEE-main\\templates\\security\\login.html.twig");
    }
}
