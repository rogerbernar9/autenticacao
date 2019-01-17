<?php

/* default/login.html.twig */
class __TwigTemplate_0e158bead845a96ea556fce6b09f732949c3c6cbf24f3c0e684f341e93ac41c5 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("login_base.html.twig", "default/login.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "login_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t";
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 4, $this->source); })())) {
            // line 5
            echo "\t\t<div class=\"alert alert-danger\">
\t\t\t";
            // line 6
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 6, $this->source); })()), "messageKey", array()), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 6, $this->source); })()), "messageData", array()), "security"), "html", null, true);
            echo "
\t\t</div>
\t";
        }
        // line 9
        echo "    <form class=\"form-signin\" method=\"post\" action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\">
    \t<img class=\"mb-4\" src=\"/docs/4.2/assets/brand/bootstrap-solid.svg\"
    \t\talt=\"\" width=\"72\" height=\"72\">
    \t<h1 class=\"h3 mb-3 font-weight-normal\">Please sign in</h1>
    \t<label for=\"username\" class=\"sr-only\">Nome de usuário</label> 
    \t<input
    \t\ttype=\"text\" name=\"_username\" id=\"username\" class=\"form-control\"
    \t\tplaceholder=\"Informe seu Username\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "\" required autofocus> 
    \t<label
    \t\tfor=\"inputPassword\" class=\"sr-only\">Password</label> 
    \t<input
    \t\ttype=\"password\" name=\"_password\" id=\"password\" class=\"form-control\"
    \t\tplaceholder=\"Informe sua senha\" required>
    \t\t
    \t<div class=\"checkbox mb-3\">
    \t\t<label> <input type=\"checkbox\" value=\"remember-me\">
    \t\t\tRemember me
    \t\t</label>
    \t</div>
    \t<button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Sign
    \t\tin</button>
    \t<p class=\"mt-5 mb-3 text-muted\">Lorem ipsum</p>
    </form>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "default/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 16,  65 => 9,  59 => 6,  56 => 5,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"login_base.html.twig\" %}

{% block body %}
\t{% if error %}
\t\t<div class=\"alert alert-danger\">
\t\t\t{{ error.messageKey|trans(error.messageData, 'security') }}
\t\t</div>
\t{% endif %}
    <form class=\"form-signin\" method=\"post\" action=\"{{ path('login') }}\">
    \t<img class=\"mb-4\" src=\"/docs/4.2/assets/brand/bootstrap-solid.svg\"
    \t\talt=\"\" width=\"72\" height=\"72\">
    \t<h1 class=\"h3 mb-3 font-weight-normal\">Please sign in</h1>
    \t<label for=\"username\" class=\"sr-only\">Nome de usuário</label> 
    \t<input
    \t\ttype=\"text\" name=\"_username\" id=\"username\" class=\"form-control\"
    \t\tplaceholder=\"Informe seu Username\" value=\"{{ last_username }}\" required autofocus> 
    \t<label
    \t\tfor=\"inputPassword\" class=\"sr-only\">Password</label> 
    \t<input
    \t\ttype=\"password\" name=\"_password\" id=\"password\" class=\"form-control\"
    \t\tplaceholder=\"Informe sua senha\" required>
    \t\t
    \t<div class=\"checkbox mb-3\">
    \t\t<label> <input type=\"checkbox\" value=\"remember-me\">
    \t\t\tRemember me
    \t\t</label>
    \t</div>
    \t<button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Sign
    \t\tin</button>
    \t<p class=\"mt-5 mb-3 text-muted\">Lorem ipsum</p>
    </form>


{% endblock %}", "default/login.html.twig", "/var/www/templates/default/login.html.twig");
    }
}
