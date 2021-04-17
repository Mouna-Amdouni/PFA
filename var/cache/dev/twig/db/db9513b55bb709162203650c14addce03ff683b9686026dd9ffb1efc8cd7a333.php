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

/* consultant/reponses.html.twig */
class __TwigTemplate_b5c61aa79ecdb72a3a01993361de8452bc54fbbf4be6f37f2482ed5c53f21046 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "consultant/reponses.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "consultant/reponses.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "consultant/reponses.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " - forum - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["topic"]) || array_key_exists("topic", $context) ? $context["topic"] : (function () { throw new RuntimeError('Variable "topic" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "

";
        // line 9
        echo "
    <!-- Breadcrumb -->
    <div class=\"col-sm-12\" id=\"breadcrumb\">

            ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 14
            echo "                <h1 style=\"color:red\" >";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["m"], "idT", [], "any", false, false, false, 14), "html", null, true);
            echo "</h1>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "        >
        <a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("forum");
        echo "\"><span>Forum</span></a>
        >
        <span>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["topic"]) || array_key_exists("topic", $context) ? $context["topic"] : (function () { throw new RuntimeError('Variable "topic" does not exist.', 22, $this->source); })()), "name", [], "any", false, false, false, 22), "html", null, true);
        echo " [#";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["topic"]) || array_key_exists("topic", $context) ? $context["topic"] : (function () { throw new RuntimeError('Variable "topic" does not exist.', 22, $this->source); })()), "id", [], "any", false, false, false, 22), "html", null, true);
        echo "]</span>
    </div>
    <!-- END Breadcrumb -->

    <div class=\"col-xl-12\">
        <h1 class=\"page-name\">";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["topic"]) || array_key_exists("topic", $context) ? $context["topic"] : (function () { throw new RuntimeError('Variable "topic" does not exist.', 27, $this->source); })()), "name", [], "any", false, false, false, 27), "html", null, true);
        echo "</h1>
    </div>

    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 30, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 31
            echo "<h1 style=\"color:#ee00ff\" >
";
            // line 33
            echo "
";
            // line 38
            echo "

        <div class=\"col-xl-12 message\">
";
            // line 46
            echo "            <div class=\"row\">
                <div class=\"col-md-3 message-user\" style=\"border: solid 1px white\">
";
            // line 49
            echo "                    <p class=\"message-username\">
";
            // line 53
            echo "                        </span>
                    </p>
                    <p>
                        <span>";
            // line 56
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "publicationDate", [], "any", false, false, false, 56), "d/m/Y H:i:s"), "html", null, true);
            echo "</span>

                    </p>
                                                <p style=\"color:blue\" >";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "content", [], "any", false, false, false, 59), "html", null, true);
            echo "</p>

                </div>
                <div class=\"col-md-9 message-body\" style=\"border: solid 1px white; width: 100%;\">
                    <div class=\"message-content\">
";
            // line 67
            echo "
";
            // line 70
            echo "
";
            // line 72
            echo "
                    </div>

                </div>
            </div>
        </div>


    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "    <div class=\"col-xl-12 message\" id=\"new-message\">
        ";
        // line 82
        if ((null === twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 82, $this->source); })()), "user", [], "any", false, false, false, 82))) {
            // line 83
            echo "            <div class=\"bg-danger\" id=\"no-new-message\">
                <p class=\"no-form\">Vous devez être connecté pour écrire un commentaire</p>
            </div>

        ";
        } else {
            // line 88
            echo "            <div id=\"new-message-form\">
                ";
            // line 89
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), 'form_start');
            echo "
                <label for=\"new_message_content\" class=\"required\">NOUVEAU commentaire: ";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["topic"]) || array_key_exists("topic", $context) ? $context["topic"] : (function () { throw new RuntimeError('Variable "topic" does not exist.', 90, $this->source); })()), "name", [], "any", false, false, false, 90), "html", null, true);
            echo "</label>
                ";
            // line 91
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), 'errors');
            echo "
                ";
            // line 92
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), 'rest');
            echo "
                ";
            // line 93
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), 'form_end');
            echo "
            </div>

        ";
        }
        // line 97
        echo "    </div>



";
        // line 104
        echo "

";
        // line 119
        echo "
";
        // line 130
        echo "
";
        // line 142
        echo "
";
        // line 148
        echo "
";
        // line 155
        echo "
";
        // line 163
        echo "
";
        // line 172
        echo "
";
        // line 175
        echo "
";
        // line 181
        echo "


";
        // line 185
        echo "
";
        // line 189
        echo "
";
        // line 197
        echo "
";
        // line 203
        echo "
";
        // line 206
        echo "
";
        // line 209
        echo "
";
        // line 212
        echo "
";
        // line 215
        echo "
";
        // line 221
        echo "
";
        // line 227
        echo "
";
        // line 232
        echo "
";
        // line 236
        echo "
";
        // line 241
        echo "
";
        // line 246
        echo "
";
        // line 251
        echo "
";
        // line 255
        echo "
";
        // line 258
        echo "
";
        // line 262
        echo "

";
        // line 265
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "consultant/reponses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  330 => 265,  326 => 262,  323 => 258,  320 => 255,  317 => 251,  314 => 246,  311 => 241,  308 => 236,  305 => 232,  302 => 227,  299 => 221,  296 => 215,  293 => 212,  290 => 209,  287 => 206,  284 => 203,  281 => 197,  278 => 189,  275 => 185,  270 => 181,  267 => 175,  264 => 172,  261 => 163,  258 => 155,  255 => 148,  252 => 142,  249 => 130,  246 => 119,  242 => 104,  236 => 97,  229 => 93,  225 => 92,  221 => 91,  217 => 90,  213 => 89,  210 => 88,  203 => 83,  201 => 82,  198 => 81,  184 => 72,  181 => 70,  178 => 67,  170 => 59,  164 => 56,  159 => 53,  156 => 49,  152 => 46,  147 => 38,  144 => 33,  141 => 31,  137 => 30,  131 => 27,  121 => 22,  116 => 20,  113 => 19,  104 => 14,  100 => 13,  94 => 9,  90 => 6,  80 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} - forum - {{ topic.name }} {% endblock %}

{% block body %}


{#    <h3 style=\"color: #8BC34A\">   {{  topic.author | substring(topic.author ,2)}}  </h3>#}

    <!-- Breadcrumb -->
    <div class=\"col-sm-12\" id=\"breadcrumb\">

            {% for m in messages %}
                <h1 style=\"color:red\" >{{ m.idT }}</h1>
        {% endfor %}
{#        {% for t in topics %}#}
{#            <h1 style=\"color:green\" >{{ t.id }}</h1>#}
{#        {% endfor %}#}
        >
        <a href=\"{{ path('forum') }}\"><span>Forum</span></a>
        >
        <span>{{ topic.name }} [#{{ topic.id }}]</span>
    </div>
    <!-- END Breadcrumb -->

    <div class=\"col-xl-12\">
        <h1 class=\"page-name\">{{ topic.name }}</h1>
    </div>

    {% for message in messages %}
<h1 style=\"color:#ee00ff\" >
{#    {% if message.idTopic is same as topic.name   %}#}

{#    {{ message.idTopic }}</h1>#}
{#{% endif %}#}
{#        <h1 style=\"color:red\" >{{ message.idUser }}</h1>#}
{#        <h1 style=\"color: blue\" >{{ app.user }}</h1>#}


        <div class=\"col-xl-12 message\">
{#                        {% if (app.user and message.idUser == app.user.id ) or (\"ROLE_ADMIN\"   in app.user.roles) %}#}
{#            <a href=\"{{ path('editMessage',{id: message.id}) }}\">#}
{#                <p class=\"edit-message\"><i>✍</i><br/>Edit</p>#}
{#            </a>#}
{#                        {% endif %}#}
            <div class=\"row\">
                <div class=\"col-md-3 message-user\" style=\"border: solid 1px white\">
{#                                        <img src=\"{{ asset('img/users/'~message.username~'.png')}}\" alt=\"{{ message.username }}' image de profile\">#}
                    <p class=\"message-username\">
{#                                                {{ message.username }}#}
{#                                                <span class=\"message-role {{ message.roles }}-role\">#}
{#                                                    <b>{{ message.roles | title }}</b>#}
                        </span>
                    </p>
                    <p>
                        <span>{{ message.publicationDate | date('d/m/Y H:i:s') }}</span>

                    </p>
                                                <p style=\"color:blue\" >{{ message.content }}</p>

                </div>
                <div class=\"col-md-9 message-body\" style=\"border: solid 1px white; width: 100%;\">
                    <div class=\"message-content\">
{#{% if message.idTopic is same as topic.name   %}#}
{#    <h1>    VOUSSSSSSSSSSSSSSSSSSSSSSSSSSSSS</h1>#}
{#    <p style=\"color:red\" >{{ message.content }}</p>#}

{#                        {% else%}#}
{#                            <p style=\"color:blue\" >{{ message.content }}</p>#}

{#                        {% endif %}#}

                    </div>

                </div>
            </div>
        </div>


    {% endfor %}
    <div class=\"col-xl-12 message\" id=\"new-message\">
        {% if app.user is null %}
            <div class=\"bg-danger\" id=\"no-new-message\">
                <p class=\"no-form\">Vous devez être connecté pour écrire un commentaire</p>
            </div>

        {% else %}
            <div id=\"new-message-form\">
                {{ form_start(form) }}
                <label for=\"new_message_content\" class=\"required\">NOUVEAU commentaire: {{ topic.name }}</label>
                {{ form_errors(form) }}
                {{ form_rest(form) }}
                {{ form_end(form) }}
            </div>

        {% endif %}
    </div>



{#    #}
{##}
{#  tajribbbbbbbbbbbbbbbbbbbb  #}


{#    <section class=\"msger\">#}
{#        <header class=\"msger-header\">#}
{#            <div class=\"msger-header-title\">#}
{#                <i class=\"fas fa-comment-alt\"></i> Ici vous pouvez contacter un consultant offrant par notre administration#}
{#                    <br/>Sujet:    <span>{{ topic.name }} [#{{ topic.id }}]</span>#}
{#            </div>#}
{#            <div class=\"msger-header-options\">#}
{#                <span><i class=\"fas fa-cog\"></i></span>#}
{#            </div>#}
{#        </header>#}
{#            {% for message in messages %}#}
{#        <main class=\"msger-chat\">#}
{#            {% if (app.user is   same as message.idUser and (topic.author) )   %}#}

{#                <div class=\"msg right-msg\">#}
{#                <div#}
{#                        class=\"msg-img\"#}
{#                        style=\"background-image: url(https://image.flaticon.com/icons/svg/145/145867.svg)\"#}
{#                ></div>#}
{#                <div class=\"msg-bubble\">#}
{#                    <div class=\"msg-info\">#}
{#                        <div class=\"msg-info-name\">Vous</div>#}
{#                        <div class=\"msg-info-time\">    <span>{{ message.publicationDate | date('d/m/Y H:i:s') }}</span></div>#}
{#                    </div>#}

{#                    <div class=\"msg-text\">#}
{#                        {{ message.content }}#}
{#                    </div>#}
{#                </div>#}
{#            </div>#}
{#            {% else %}#}
{#            <div class=\"msg left-msg\">#}
{#                <div#}
{#                        class=\"msg-img\"#}
{#                        style=\"background-image: url(https://image.flaticon.com/icons/svg/327/327779.svg)\"#}
{#                ></div>#}

{#                <div class=\"msg-bubble\">#}
{#                    <div class=\"msg-info\">#}
{#                        <div class=\"msg-info-name\">{{ message.idUser }}</div>#}
{#                        <div class=\"msg-info-time\"><span>{{ message.publicationDate | date('d/m/Y H:i:s') }}</div>#}
{#                    </div>#}

{#                    <div class=\"msg-text\">#}
{#                        {{ message.content }}#}
{#                    </div>#}
{#                </div>#}
{#            </div>#}
{#{% endif %}#}

{#        </main>#}
{#{% endfor %}#}
{#            <div class=\"col-xl-12 message\" id=\"new-message\">#}
{#                {% if app.user is null %}#}
{#                    <div class=\"bg-danger\" id=\"no-new-message\">#}
{#                        <p class=\"no-form\">Vous devez être connecté pour écrire un message</p>#}
{#                    </div>#}

{#                {% else %}#}
{#                    <div id=\"new-message-form\">#}
{#                        {{ form_start(form) }}#}
{#                        <label for=\"new_message_content\" class=\"required\">NOUVEAU commentaire: {{ topic.name }}</label>#}
{#                        {{ form_errors(form) }}#}
{#                        {{ form_rest(form) }}#}
{#                        {{ form_end(form) }}#}
{#                    </div>#}

{#                {% endif %}#}
{#            </div>#}

{#        <form class=\"msger-inputarea\">#}
{#            <input type=\"text\" class=\"msger-input\" placeholder=\"Enter your message...\">#}
{#            <button type=\"submit\" class=\"msger-send-btn\">Send</button>#}
{#        </form>#}
{#    </section>#}



{#<script>#}

{#    const msgerForm = get(\".msger-inputarea\");#}
{#    const msgerInput = get(\".msger-input\");#}
{#    const msgerChat = get(\".msger-chat\");#}

{#    const BOT_MSGS = [#}
{#        \"Hi, how are you?\",#}
{#        \"Ohh... I can't understand what you trying to say. Sorry!\",#}
{#        \"I like to play games... But I don't know how to play!\",#}
{#        \"Sorry if my answers are not relevant. :))\",#}
{#        \"I feel sleepy! :(\"#}
{#    ];#}

{#    // Icons made by Freepik from www.flaticon.com#}
{#    const BOT_IMG = \"https://image.flaticon.com/icons/svg/327/327779.svg\";#}
{#    const PERSON_IMG = \"https://image.flaticon.com/icons/svg/145/145867.svg\";#}
{#    const BOT_NAME = \"BOT\";#}
{#    const PERSON_NAME = \"Sajad\";#}

{#    msgerForm.addEventListener(\"submit\", event => {#}
{#        event.preventDefault();#}

{#        const msgText = msgerInput.value;#}
{#        if (!msgText) return;#}

{#        appendMessage(PERSON_NAME, PERSON_IMG, \"right\", msgText);#}
{#        msgerInput.value = \"\";#}

{#        botResponse();#}
{#    });#}

{#    function appendMessage(name, img, side, text) {#}
{#        //   Simple solution for small apps#}
{#        const msgHTML = `#}
{#    <div class=\"msg \${side}-msg\">#}
{#      <div class=\"msg-img\" style=\"background-image: url(\${img})\"></div>#}

{#      <div class=\"msg-bubble\">#}
{#        <div class=\"msg-info\">#}
{#          <div class=\"msg-info-name\">\${name}</div>#}
{#          <div class=\"msg-info-time\">\${formatDate(new Date())}</div>#}
{#        </div>#}

{#        <div class=\"msg-text\">\${text}</div>#}
{#      </div>#}
{#    </div>#}
{#  `;#}

{#        msgerChat.insertAdjacentHTML(\"beforeend\", msgHTML);#}
{#        msgerChat.scrollTop += 500;#}
{#    }#}

{#    function botResponse() {#}
{#        const r = random(0, BOT_MSGS.length - 1);#}
{#        const msgText = BOT_MSGS[r];#}
{#        const delay = msgText.split(\" \").length * 100;#}

{#        setTimeout(() => {#}
{#            appendMessage(BOT_NAME, BOT_IMG, \"left\", msgText);#}
{#        }, delay);#}
{#    }#}

{#    // Utils#}
{#    function get(selector, root = document) {#}
{#        return root.querySelector(selector);#}
{#    }#}

{#    function formatDate(date) {#}
{#        const h = \"0\" + date.getHours();#}
{#        const m = \"0\" + date.getMinutes();#}

{#        return `\${h.slice(-2)}:\${m.slice(-2)}`;#}
{#    }#}

{#    function random(min, max) {#}
{#        return Math.floor(Math.random() * (max - min) + min);#}
{#    }#}


{#</script>#}

{% endblock %}









", "consultant/reponses.html.twig", "C:\\xampp\\htdocs\\PFA\\templates\\consultant\\reponses.html.twig");
    }
}
