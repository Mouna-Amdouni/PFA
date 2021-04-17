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

/* messages.html.twig */
class __TwigTemplate_d1435a260ff9cdeb5b617011e26cdbcd78d5a166779f4c606a2e6e36abce2511 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "messages.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "messages.html.twig"));

        $this->parent = $this->loadTemplate("admin/bars.html.twig", "messages.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_contenpage($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenpage"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenpage"));

        // line 4
        echo "

";
        // line 9
        echo "
";
        // line 11
        echo "

    <section class=\"msger\">
        <header class=\"msger-header\">
            <div class=\"msger-header-title\">
                <i class=\"fas fa-comment-alt\"></i> Notre consultant est offert par notre administration! merci de le(a) respecter
            </div>
            <div class=\"msger-header-options\">
                <span><i class=\"fas fa-cog\"></i></span>
            </div>
        </header>

        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 24
            echo "
        <main class=\"msger-chat\">
";
            // line 28
            echo "            ";
            if (( !(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, false, 28) === twig_get_attribute($this->env, $this->source, $context["m"], "idUser", [], "any", false, false, false, 28)) && (twig_get_attribute($this->env, $this->source, (isset($context["topic"]) || array_key_exists("topic", $context) ? $context["topic"] : (function () { throw new RuntimeError('Variable "topic" does not exist.', 28, $this->source); })()), "id", [], "any", false, false, false, 28) === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["m"], "idTopic", [], "any", false, false, false, 28), "id", [], "any", false, false, false, 28)))) {
                // line 29
                echo "
";
                // line 31
                echo "            <div class=\"msg left-msg\">
                <div
                >
                    ";
                // line 35
                echo "                    <img class=\"msg-img\" src=\" ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["m"], "idUser", [], "any", false, false, false, 35), "logo", [], "any", false, false, false, 35))), "html", null, true);
                echo "\" alt=\"Awesome Image\">
                </div>

                <div class=\"msg-bubble\">
                    <div class=\"msg-info\">
                        <div class=\"msg-info-name\">";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["m"], "idUser", [], "any", false, false, false, 40), "nomComplet", [], "any", false, false, false, 40), "html", null, true);
                echo "</div>
                        <div class=\"msg-info-time\">";
                // line 41
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["m"], "publicationDate", [], "any", false, false, false, 41), "d/m/Y H:i:s"), "html", null, true);
                echo "</div>
                    </div>

                    <div class=\"msg-text\">
                        ";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["m"], "content", [], "any", false, false, false, 45), "html", null, true);
                echo " 😄
                    </div>
                </div>
            </div>
";
            }
            // line 50
            echo "
            ";
            // line 51
            if (((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "user", [], "any", false, false, false, 51) === twig_get_attribute($this->env, $this->source, $context["m"], "idUser", [], "any", false, false, false, 51)) && (twig_get_attribute($this->env, $this->source, (isset($context["topic"]) || array_key_exists("topic", $context) ? $context["topic"] : (function () { throw new RuntimeError('Variable "topic" does not exist.', 51, $this->source); })()), "id", [], "any", false, false, false, 51) === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["m"], "idTopic", [], "any", false, false, false, 51), "id", [], "any", false, false, false, 51)))) {
                // line 52
                echo "            <div class=\"msg right-msg\">
                <div
                        >
";
                // line 56
                echo "                    <img class=\"msg-img\" src=\" ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["m"], "idUser", [], "any", false, false, false, 56), "logo", [], "any", false, false, false, 56))), "html", null, true);
                echo "\" alt=\"Awesome Image\">
                </div>

                <div class=\"msg-bubble\">
                    <div class=\"msg-info\">
                        <div class=\"msg-info-name\">Vous</div>
                        <div class=\"msg-info-time\">";
                // line 62
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["m"], "publicationDate", [], "any", false, false, false, 62), "d/m/Y H:i:s"), "html", null, true);
                echo "</div>
                    </div>

                    <div class=\"msg-text\">
                        ";
                // line 66
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["m"], "content", [], "any", false, false, false, 66), "html", null, true);
                echo "
                    </div>
                </div>
            </div>
                ";
            }
            // line 71
            echo "        </main>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "                    <div class=\"col-xl-12 message\" id=\"new-message\">
                        ";
        // line 74
        if ((null === twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 74, $this->source); })()), "user", [], "any", false, false, false, 74))) {
            // line 75
            echo "                            <div class=\"bg-danger\" id=\"no-new-message\">
                                <p class=\"no-form\">Vous devez être connecté pour écrire un message</p>
                            </div>


                        ";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 81
            echo "                            <br/><br/>
                            <h5 style=\"text-align: center\" >Desolé notre Admin vous ne pouvez pas particper a cette discussion :(</h5>
                        ";
        } elseif (( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") && (0 === twig_compare(twig_get_attribute($this->env, $this->source,         // line 83
(isset($context["topic"]) || array_key_exists("topic", $context) ? $context["topic"] : (function () { throw new RuntimeError('Variable "topic" does not exist.', 83, $this->source); })()), "valid", [], "any", false, false, false, 83), false)))) {
            // line 84
            echo "                            <br/><br/>
<h5 style=\"text-align: center\">Cette conversation est desactivée par notre administration</h5>
                        ";
        } else {
            // line 87
            echo "                            <div id=\"new-message-form\">
                                ";
            // line 88
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), 'form_start');
            echo "
                                <label for=\"new_message_content\" class=\"required\">repondre pour le sujet: <strong>";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["topic"]) || array_key_exists("topic", $context) ? $context["topic"] : (function () { throw new RuntimeError('Variable "topic" does not exist.', 89, $this->source); })()), "name", [], "any", false, false, false, 89), "html", null, true);
            echo "</strong></label>
                                ";
            // line 90
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), 'errors');
            echo "
                                ";
            // line 91
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), 'rest');
            echo "
                                ";
            // line 92
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), 'form_end');
            echo "
                            </div>

                        ";
        }
        // line 96
        echo "                    </div>
    </section>



    <script>

        const msgerForm = get(\".msger-inputarea\");
        const msgerInput = get(\".msger-input\");
        const msgerChat = get(\".msger-chat\");

        const BOT_MSGS = [
            \"Hi, how are you?\",
            \"Ohh... I can't understand what you trying to say. Sorry!\",
            \"I like to play games... But I don't know how to play!\",
            \"Sorry if my answers are not relevant. :))\",
            \"I feel sleepy! :(\"
        ];

        // Icons made by Freepik from www.flaticon.com
        const BOT_IMG = \"https://image.flaticon.com/icons/svg/327/327779.svg\";
        const PERSON_IMG = \"https://image.flaticon.com/icons/svg/145/145867.svg\";
        const BOT_NAME = \"BOT\";
        const PERSON_NAME = \"Sajad\";

        msgerForm.addEventListener(\"submit\", event => {
            event.preventDefault();

            const msgText = msgerInput.value;
            if (!msgText) return;

            appendMessage(PERSON_NAME, PERSON_IMG, \"right\", msgText);
            msgerInput.value = \"\";

            botResponse();
        });

        function appendMessage(name, img, side, text) {
            //   Simple solution for small apps
            const msgHTML = `
        <div class=\"msg \${side}-msg\">
          <div class=\"msg-img\" style=\"background-image: url(\${img})\"></div>

          <div class=\"msg-bubble\">
            <div class=\"msg-info\">
              <div class=\"msg-info-name\">\${name}</div>
              <div class=\"msg-info-time\">\${formatDate(new Date())}</div>
            </div>

            <div class=\"msg-text\">\${text}</div>
          </div>
        </div>
      `;

            msgerChat.insertAdjacentHTML(\"beforeend\", msgHTML);
            msgerChat.scrollTop += 500;
        }

        function botResponse() {
            const r = random(0, BOT_MSGS.length - 1);
            const msgText = BOT_MSGS[r];
            const delay = msgText.split(\" \").length * 100;

            setTimeout(() => {
                appendMessage(BOT_NAME, BOT_IMG, \"left\", msgText);
            }, delay);
        }

        // Utils
        function get(selector, root = document) {
            return root.querySelector(selector);
        }

        function formatDate(date) {
            const h = \"0\" + date.getHours();
            const m = \"0\" + date.getMinutes();

            return `\${h.slice(-2)}:\${m.slice(-2)}`;
        }

        function random(min, max) {
            return Math.floor(Math.random() * (max - min) + min);
        }


    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 96,  221 => 92,  217 => 91,  213 => 90,  209 => 89,  205 => 88,  202 => 87,  197 => 84,  195 => 83,  191 => 81,  183 => 75,  181 => 74,  178 => 73,  171 => 71,  163 => 66,  156 => 62,  146 => 56,  141 => 52,  139 => 51,  136 => 50,  128 => 45,  121 => 41,  117 => 40,  108 => 35,  103 => 31,  100 => 29,  97 => 28,  93 => 24,  89 => 23,  75 => 11,  72 => 9,  68 => 4,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin/bars.html.twig\" %}
{% block contenpage %}
{#{% for m in messages %}#}


{#{% if m.idTopic.id is same as topic.id and app.user is same as m.idUser %}#}
{#<h1>{{ m.content }}</h1>#}
{#{% endif %}#}

{#    {% endfor %}#}


    <section class=\"msger\">
        <header class=\"msger-header\">
            <div class=\"msger-header-title\">
                <i class=\"fas fa-comment-alt\"></i> Notre consultant est offert par notre administration! merci de le(a) respecter
            </div>
            <div class=\"msger-header-options\">
                <span><i class=\"fas fa-cog\"></i></span>
            </div>
        </header>

        {% for m in messages %}

        <main class=\"msger-chat\">
{#            {% if m.idTopic.id is same as topic.id and app.user is same as m.idUser %}#}
{#            {% if m.idTopic.id is same as topic.id and app.user is same as m.idUser %}#}
            {% if (not app.user is same as m.idUser) and (topic.id is same as m.idTopic.id)  %}

{#    and (app.user.id is same as topic.author.id) and (topic.id is same as m.idTopic.id) and (m.idUser.id is same as topic.author.id) %}#}
            <div class=\"msg left-msg\">
                <div
                >
                    {#                        style=\"background-image: url(https://image.flaticon.com/icons/svg/145/145867.svg)\"#}
                    <img class=\"msg-img\" src=\" {{ asset('uploads/images/'  ~ m.idUser.logo) }}\" alt=\"Awesome Image\">
                </div>

                <div class=\"msg-bubble\">
                    <div class=\"msg-info\">
                        <div class=\"msg-info-name\">{{ m.idUser.nomComplet }}</div>
                        <div class=\"msg-info-time\">{{ m.publicationDate | date('d/m/Y H:i:s') }}</div>
                    </div>

                    <div class=\"msg-text\">
                        {{m.content}} 😄
                    </div>
                </div>
            </div>
{% endif %}

            {% if (app.user is same as m.idUser) and (topic.id is same as m.idTopic.id) %}
            <div class=\"msg right-msg\">
                <div
                        >
{#                        style=\"background-image: url(https://image.flaticon.com/icons/svg/145/145867.svg)\"#}
                    <img class=\"msg-img\" src=\" {{ asset('uploads/images/'  ~ m.idUser.logo) }}\" alt=\"Awesome Image\">
                </div>

                <div class=\"msg-bubble\">
                    <div class=\"msg-info\">
                        <div class=\"msg-info-name\">Vous</div>
                        <div class=\"msg-info-time\">{{ m.publicationDate | date('d/m/Y H:i:s') }}</div>
                    </div>

                    <div class=\"msg-text\">
                        {{m.content}}
                    </div>
                </div>
            </div>
                {% endif %}
        </main>
{% endfor %}
                    <div class=\"col-xl-12 message\" id=\"new-message\">
                        {% if app.user is null %}
                            <div class=\"bg-danger\" id=\"no-new-message\">
                                <p class=\"no-form\">Vous devez être connecté pour écrire un message</p>
                            </div>


                        {% elseif is_granted('ROLE_ADMIN')   %}
                            <br/><br/>
                            <h5 style=\"text-align: center\" >Desolé notre Admin vous ne pouvez pas particper a cette discussion :(</h5>
                        {% elseif not is_granted('ROLE_ADMIN') and topic.valid == false   %}
                            <br/><br/>
<h5 style=\"text-align: center\">Cette conversation est desactivée par notre administration</h5>
                        {% else %}
                            <div id=\"new-message-form\">
                                {{ form_start(form) }}
                                <label for=\"new_message_content\" class=\"required\">repondre pour le sujet: <strong>{{ topic.name }}</strong></label>
                                {{ form_errors(form) }}
                                {{ form_rest(form) }}
                                {{ form_end(form) }}
                            </div>

                        {% endif %}
                    </div>
    </section>



    <script>

        const msgerForm = get(\".msger-inputarea\");
        const msgerInput = get(\".msger-input\");
        const msgerChat = get(\".msger-chat\");

        const BOT_MSGS = [
            \"Hi, how are you?\",
            \"Ohh... I can't understand what you trying to say. Sorry!\",
            \"I like to play games... But I don't know how to play!\",
            \"Sorry if my answers are not relevant. :))\",
            \"I feel sleepy! :(\"
        ];

        // Icons made by Freepik from www.flaticon.com
        const BOT_IMG = \"https://image.flaticon.com/icons/svg/327/327779.svg\";
        const PERSON_IMG = \"https://image.flaticon.com/icons/svg/145/145867.svg\";
        const BOT_NAME = \"BOT\";
        const PERSON_NAME = \"Sajad\";

        msgerForm.addEventListener(\"submit\", event => {
            event.preventDefault();

            const msgText = msgerInput.value;
            if (!msgText) return;

            appendMessage(PERSON_NAME, PERSON_IMG, \"right\", msgText);
            msgerInput.value = \"\";

            botResponse();
        });

        function appendMessage(name, img, side, text) {
            //   Simple solution for small apps
            const msgHTML = `
        <div class=\"msg \${side}-msg\">
          <div class=\"msg-img\" style=\"background-image: url(\${img})\"></div>

          <div class=\"msg-bubble\">
            <div class=\"msg-info\">
              <div class=\"msg-info-name\">\${name}</div>
              <div class=\"msg-info-time\">\${formatDate(new Date())}</div>
            </div>

            <div class=\"msg-text\">\${text}</div>
          </div>
        </div>
      `;

            msgerChat.insertAdjacentHTML(\"beforeend\", msgHTML);
            msgerChat.scrollTop += 500;
        }

        function botResponse() {
            const r = random(0, BOT_MSGS.length - 1);
            const msgText = BOT_MSGS[r];
            const delay = msgText.split(\" \").length * 100;

            setTimeout(() => {
                appendMessage(BOT_NAME, BOT_IMG, \"left\", msgText);
            }, delay);
        }

        // Utils
        function get(selector, root = document) {
            return root.querySelector(selector);
        }

        function formatDate(date) {
            const h = \"0\" + date.getHours();
            const m = \"0\" + date.getMinutes();

            return `\${h.slice(-2)}:\${m.slice(-2)}`;
        }

        function random(min, max) {
            return Math.floor(Math.random() * (max - min) + min);
        }


    </script>
{% endblock %}", "messages.html.twig", "C:\\xampp\\htdocs\\PFA\\templates\\messages.html.twig");
    }
}
