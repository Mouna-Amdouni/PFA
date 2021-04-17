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

/* registration/register.html.twig */
class __TwigTemplate_a12d383e72b3c3988ca228ff6b3ef4476cadc65885cbf210c30a0c8974e8b301 extends Template
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
            'contenpage' => [$this, 'block_contenpage'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        // line 2
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('metas', $context, $blocks);
        // line 9
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "</head>
<style>
    @import url(\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,600,700\");


    html{
        min-height: 100%;
    }

    body{
        background-image: linear-gradient(to right top, #051937, #004d7a, #008793, #00bf72, #a8eb12);background-position: center;
    }

    #nom{
        text-transform: uppercase;
    }

    .btn{
        background-color: #14b0f3;
    }
    .btn:hover{
        background-color: #0093d2;
    }

    header{
        padding: 7em 5em 4em 5em;
    }

    h1{
        font-family: 'Source Sans Pro', Arial, sans-serif;

    }

    #rectangle{
        border: solid 2px white;
        background-color: white;
        padding: 2em 2em 2em 2em;
        -webkit-box-shadow: 3px 4px 4px -2px rgba(0,0,0,0.75);
        -moz-box-shadow: 3px 4px 4px -2px rgba(0,0,0,0.75);
        box-shadow: 3px 4px 4px -2px rgba(0,0,0,0.75);
    }

    #blanc{
        max-width: 50%;
        min-width: 50%;
    }

</style>
<body>
";
        // line 60
        $this->displayBlock('contenpage', $context, $blocks);
        // line 101
        echo "</body>
";
        // line 114
        echo "

";
        // line 119
        echo "
";
        // line 123
        echo "
";
        // line 127
        echo "
";
        // line 134
        echo "
";
        // line 138
        echo "
";
        // line 141
        echo "
";
        // line 143
        echo "
";
        // line 152
        echo "
";
        // line 157
        echo "
";
        // line 160
        echo "
";
        // line 175
        echo "


";
        // line 179
        echo "


";
        // line 183
        echo "
";
        // line 192
        echo "
";
        // line 194
        echo "
";
        // line 197
        echo "
";
        // line 200
        echo "
";
        // line 203
        echo "
";
        // line 208
        echo "
";
        // line 212
        echo "
";
        // line 214
        echo "
";
        // line 218
        echo "

";
        // line 221
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
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

    // line 6
    public function block_metas($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metas"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metas"));

        // line 7
        echo "        <meta charset=\"UTF-8\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 60
    public function block_contenpage($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenpage"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenpage"));

        // line 67
        echo "

        <div class=\"row\">
            <div class=\"col s12 m12 l12\" style=\"text-align:center; color:white;\">
                <h1>Inscription</h1>
                <p>Bienvenue sur la page d'inscription, veuillez remplir les informations ci-dessous</p>
            </div>
        </div>

    <div style=\"margin-left: 400px\" class=\"container\">


            <div  class=\"row\" id=\"blanc\">
                <div class=\"col l12 m12 s12\" id=\"rectangle\">
                        ";
        // line 81
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 81, $this->source); })()), 'form_start');
        echo "
                        <div class=\"input-field col s6\">
                           ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 83, $this->source); })()), 'widget');
        echo "
                        </div>


                        <div class=\"ln_solid\"></div>
                        <div class=\"item form-group\">
                            <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-3\">
                                <a class=\"btn btn-warning\" href=\"";
        // line 90
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.user.cancel"), "html", null, true);
        echo "</a>
                                <button type=\"submit\" name=\"valider\" class=\"btn btn-success\">";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("backend.user.register"), "html", null, true);
        echo "</button>
                            </div>
                        </div></div>
                        ";
        // line 94
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 94, $this->source); })()), 'form_end');
        echo "
                            </div>
                    </div>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  316 => 94,  310 => 91,  304 => 90,  294 => 83,  289 => 81,  273 => 67,  263 => 60,  253 => 10,  243 => 9,  232 => 7,  222 => 6,  203 => 5,  192 => 221,  188 => 218,  185 => 214,  182 => 212,  179 => 208,  176 => 203,  173 => 200,  170 => 197,  167 => 194,  164 => 192,  161 => 183,  156 => 179,  151 => 175,  148 => 160,  145 => 157,  142 => 152,  139 => 143,  136 => 141,  133 => 138,  130 => 134,  127 => 127,  124 => 123,  121 => 119,  117 => 114,  114 => 101,  112 => 60,  61 => 11,  58 => 9,  56 => 6,  52 => 5,  47 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{#{% extends 'admin/bars.html.twig' %}#}
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>{% block title %}{{ \"backend.global.welcome\"|trans }}{% endblock %}</title>
    {% block metas %}
        <meta charset=\"UTF-8\">
    {% endblock %}
    {% block stylesheets %}
    {% endblock %}
</head>
<style>
    @import url(\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,600,700\");


    html{
        min-height: 100%;
    }

    body{
        background-image: linear-gradient(to right top, #051937, #004d7a, #008793, #00bf72, #a8eb12);background-position: center;
    }

    #nom{
        text-transform: uppercase;
    }

    .btn{
        background-color: #14b0f3;
    }
    .btn:hover{
        background-color: #0093d2;
    }

    header{
        padding: 7em 5em 4em 5em;
    }

    h1{
        font-family: 'Source Sans Pro', Arial, sans-serif;

    }

    #rectangle{
        border: solid 2px white;
        background-color: white;
        padding: 2em 2em 2em 2em;
        -webkit-box-shadow: 3px 4px 4px -2px rgba(0,0,0,0.75);
        -moz-box-shadow: 3px 4px 4px -2px rgba(0,0,0,0.75);
        box-shadow: 3px 4px 4px -2px rgba(0,0,0,0.75);
    }

    #blanc{
        max-width: 50%;
        min-width: 50%;
    }

</style>
<body>
{% block contenpage %}
{#    <div class=\"\">#}
{#        <div class=\"page-title\">#}
{#            <div class=\"title_left\">#}
{#                <h5><a href=\"{{ path('app_admin_users') }}\">{{ \"backend.user.user_listing\"|trans }}</a> >> {{ \"backend.menu.user\"|trans }} </h5>#}
{#            </div>#}
{#        </div>#}


        <div class=\"row\">
            <div class=\"col s12 m12 l12\" style=\"text-align:center; color:white;\">
                <h1>Inscription</h1>
                <p>Bienvenue sur la page d'inscription, veuillez remplir les informations ci-dessous</p>
            </div>
        </div>

    <div style=\"margin-left: 400px\" class=\"container\">


            <div  class=\"row\" id=\"blanc\">
                <div class=\"col l12 m12 s12\" id=\"rectangle\">
                        {{ form_start(userForm) }}
                        <div class=\"input-field col s6\">
                           {{ form_widget(userForm) }}
                        </div>


                        <div class=\"ln_solid\"></div>
                        <div class=\"item form-group\">
                            <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-3\">
                                <a class=\"btn btn-warning\" href=\"{{ path('app_admin_users') }}\">{{ \"backend.user.cancel\"|trans }}</a>
                                <button type=\"submit\" name=\"valider\" class=\"btn btn-success\">{{ \"backend.user.register\"|trans }}</button>
                            </div>
                        </div></div>
                        {{ form_end(userForm) }}
                            </div>
                    </div>



{% endblock %}
</body>
{#<!DOCTYPE html>#}
{#<html lang=\"fr\" dir=\"ltr\">#}
{#<head>#}
{#    <meta charset=\"utf-8\">#}
{#    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>#}
{#    <title>Inscription</title>#}
{#    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css\">#}
{#    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">#}
{#    <link rel=\"stylesheet\" href=\"style.css\">#}
{#</head>#}
{#<style>#}
{#    @import url(\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,600,700\");#}


{#    html{#}
{#        min-height: 100%;#}
{#    }#}

{#    body{#}
{#        background-image: linear-gradient(to right top, #051937, #004d7a, #008793, #00bf72, #a8eb12);background-position: center;#}
{#    }#}

{#    #nom{#}
{#        text-transform: uppercase;#}
{#    }#}

{#    .btn{#}
{#        background-color: #14b0f3;#}
{#    }#}
{#    .btn:hover{#}
{#        background-color: #0093d2;#}
{#    }#}

{#    header{#}
{#        padding: 7em 5em 4em 5em;#}
{#    }#}

{#    h1{#}
{#        font-family: 'Source Sans Pro', Arial, sans-serif;#}

{#    }#}

{#    #rectangle{#}
{#        border: solid 2px white;#}
{#        background-color: white;#}
{#        padding: 2em 2em 2em 2em;#}
{#        -webkit-box-shadow: 3px 4px 4px -2px rgba(0,0,0,0.75);#}
{#        -moz-box-shadow: 3px 4px 4px -2px rgba(0,0,0,0.75);#}
{#        box-shadow: 3px 4px 4px -2px rgba(0,0,0,0.75);#}
{#    }#}

{#    #blanc{#}
{#        max-width: 50%;#}
{#        min-width: 50%;#}
{#    }#}

{#</style>#}
{#<body>#}

{#<header>#}
{#    <div class=\"container\">#}
{#        <div class=\"row\">#}
{#            <div class=\"col s12 m12 l12\" style=\"text-align:center; color:white;\">#}
{#                <i class=\"large material-icons\">add_circle</i>#}
{#                <h1>Inscription</h1>#}
{#                <p>Bienvenue sur la page d'inscription, veuillez remplir les informations ci-dessous</p>#}
{#            </div>#}
{#        </div>#}
{#        <div class=\"row\" id=\"blanc\">#}
{#            <div class=\"col l12 m12 s12\" id=\"rectangle\">#}
{#                <form method=\"GET\">#}
{#                    {{ form_start(userForm) }}#}
{#                    <!-- Champ prénom !-->#}



{#                    <!-- Champ nom !-->#}



{#                    <!-- Champ CGV !-->#}

{#                    <div class=\"input-field col s12\">#}
{#                        <p>#}
{#                            <label>#}
{#                                <input class=\"with-gap\" name=\"group1\" type=\"radio\"/>#}
{#                                <span>J'accepte les conditions d'utilisations.</span>#}
{#                            </label>#}
{#                        </p>#}
{#                    </div>#}

{#                    <!-- Bouton envoyer !-->#}

{#                    <div class=\"input-field col s12\">#}
{#                                                        <a class=\"btn btn-warning\" href=\"{{ path('app_admin_users') }}\">{{ \"backend.user.cancel\"|trans }}</a>#}

{#                        <button class=\"btn waves-effect waves-light pulse\" type=\"submit\" name=\"valider\">{{ \"backend.user.register\"|trans }}#}
{#                                                        <button type=\"submit\" name=\"valider\" class=\"btn btn-success\">{{ \"backend.user.register\"|trans }}#}

{#                            <i class=\"material-icons right\">send</i>#}
{#                        </button>#}

{#                                                    <div class=\"col-md-6 col-sm-6 col-xs-12 col-md-offset-3\">#}
{#                                                        <a class=\"btn btn-warning\" href=\"{{ path('app_admin_users') }}\">{{ \"backend.user.cancel\"|trans }}</a>#}
{#                                                        <a class=\"btn btn-warning\" href=\"{{ path('register') }}\">{{ \"backend.user.register\"|trans }}</a>#}
{#                                                    </div>#}

{#                    </div>#}
{#                    {{ form_end(userForm) }}#}
{#                </form>#}

{#            </div>#}

{#        </div>#}
{#    </div>#}
{#</header>#}


{#<script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js\"></script>#}

{#</body>#}
{#</html>#}
", "registration/register.html.twig", "C:\\xampp\\htdocs\\PFA\\templates\\registration\\register.html.twig");
    }
}
