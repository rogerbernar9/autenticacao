<?php

/* admin_base.html.twig */
class __TwigTemplate_8f69d21711d6dd54a40908083dcc24391e0533c6a014c8e9c0b3a747077fd55d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin_base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin_base.html.twig"));

        // line 1
        echo "<html>
    <head>
    <title>Admin Page</title>
    <meta charset=\"UTF-8\">
    <link rel=\"stylesheet\"
    \thref=\"https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css\"
    \tintegrity=\"sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS\"
    \tcrossorigin=\"anonymous\">
    </head>
    <body>
    \t<div class=\"container\">
    \t\t<div class=\"row mt-5\">
    \t\t\t";
        // line 13
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 14
            echo "    \t\t\t<div class=\"col-md-12\">
    \t\t\t\tOlá ";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 15, $this->source); })()), "user", array()), "username", array()), "html", null, true);
            echo " !
    \t\t\t</div>
    \t\t\t";
        }
        // line 18
        echo "    \t\t\t<div class=\"col-md-12\">
    \t\t\t\t";
        // line 19
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 20
            echo "\t    \t\t\t\t<a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
            echo "\" class=\"btn btn-default\">Home</a>
    \t\t\t\t";
        }
        // line 22
        echo "    \t\t\t\t";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 23
            echo "    \t\t\t\t\t<a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
            echo "\" class=\"btn btn-default\">Dashboard</a>
    \t\t\t\t";
        }
        // line 25
        echo "    \t\t\t\t";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 26
            echo "    \t\t\t\t\t<a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("relatorios");
            echo "\" class=\"btn btn-default\">Relatórios</a>
    \t\t\t\t";
        }
        // line 28
        echo "    \t\t\t\t";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 29
            echo "    \t\t\t\t\t<a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
            echo "\" class=\"btn btn-default\">Dashboard</a>
    \t\t\t\t";
        }
        // line 31
        echo "    \t\t\t\t";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 32
            echo "    \t\t\t\t\t<a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\" class=\"btn btn-default\">Sair</a>
    \t\t\t\t";
        }
        // line 34
        echo "    \t\t\t\t
    \t\t\t</div>
    \t\t</div>
    \t\t<div class=\"row\">
    \t\t\t<div class=\"col-md-12\">
    \t\t\t\t";
        // line 39
        $this->displayBlock('body', $context, $blocks);
        // line 40
        echo "    \t\t\t</div>
    \t\t</div>
    \t\t
    \t</div>
    
    </body>
\t

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 39
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 39,  111 => 40,  109 => 39,  102 => 34,  96 => 32,  93 => 31,  87 => 29,  84 => 28,  78 => 26,  75 => 25,  69 => 23,  66 => 22,  60 => 20,  58 => 19,  55 => 18,  49 => 15,  46 => 14,  44 => 13,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
    <head>
    <title>Admin Page</title>
    <meta charset=\"UTF-8\">
    <link rel=\"stylesheet\"
    \thref=\"https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css\"
    \tintegrity=\"sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS\"
    \tcrossorigin=\"anonymous\">
    </head>
    <body>
    \t<div class=\"container\">
    \t\t<div class=\"row mt-5\">
    \t\t\t{% if is_granted('IS_AUTHENTICATED_FULLY') %}
    \t\t\t<div class=\"col-md-12\">
    \t\t\t\tOlá {{ app.user.username }} !
    \t\t\t</div>
    \t\t\t{% endif %}
    \t\t\t<div class=\"col-md-12\">
    \t\t\t\t{% if is_granted(\"ROLE_USER\") %}
\t    \t\t\t\t<a href=\"{{ path('admin') }}\" class=\"btn btn-default\">Home</a>
    \t\t\t\t{% endif %}
    \t\t\t\t{% if is_granted(\"ROLE_USER\") %}
    \t\t\t\t\t<a href=\"{{ path('dashboard') }}\" class=\"btn btn-default\">Dashboard</a>
    \t\t\t\t{% endif %}
    \t\t\t\t{% if is_granted(\"ROLE_ADMIN\") %}
    \t\t\t\t\t<a href=\"{{ path('relatorios') }}\" class=\"btn btn-default\">Relatórios</a>
    \t\t\t\t{% endif %}
    \t\t\t\t{% if is_granted(\"ROLE_USER\") %}
    \t\t\t\t\t<a href=\"{{ path('dashboard') }}\" class=\"btn btn-default\">Dashboard</a>
    \t\t\t\t{% endif %}
    \t\t\t\t{% if is_granted(\"ROLE_USER\") %}
    \t\t\t\t\t<a href=\"{{ path('logout') }}\" class=\"btn btn-default\">Sair</a>
    \t\t\t\t{% endif %}
    \t\t\t\t
    \t\t\t</div>
    \t\t</div>
    \t\t<div class=\"row\">
    \t\t\t<div class=\"col-md-12\">
    \t\t\t\t{% block body %}{% endblock %}
    \t\t\t</div>
    \t\t</div>
    \t\t
    \t</div>
    
    </body>
\t

</html>", "admin_base.html.twig", "/var/www/templates/admin_base.html.twig");
    }
}
