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

/* user/index.html.twig */
class __TwigTemplate_adeb2cab66131c7ddfb459a2d7d19a44c1155ad1a4cf5c4491be47d3e0107914 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'main' => [$this, 'block_main'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <div class=\"card\" style=\"width: 18rem; margin: auto; background:#fff; border-radius: 6px;box-shadow: 0 .5em 1em -.125em rgba(10,10,10,.1),0 0 0 1px rgba(10,10,10,.02);padding: 1.25rem\">
        <ul class=\"list-group list-group-flush\">
            <li class=\"list-group-item\">
                <a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commande_find_by_user");
        echo "\">Voir les commandes</a>
            </li>
            <li class=\"list-group-item\">
                <a href=\"#\">Voir le panier</a>
            </li>
            <li class=\"list-group-item\">
                <a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commentaire_index_user");
        echo "\">Voir les commentaires</a>
            </li>
        </ul>
        ";
        // line 16
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 17
            echo "            <div class=\"card-header\">
                Admin pannel
            </div>
            <ul class=\"list-group list-group-flush\">
                <li class=\"list-group-item\">
                    <a href=\"";
            // line 22
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commande_index");
            echo "\">Voir toutes les commandes</a>
                </li>
                <li class=\"list-group-item\">
                    <a href=\"";
            // line 25
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_index");
            echo "\">Voir tout les paniers</a>
                </li>
                <li class=\"list-group-item\">
                    <a href=\"";
            // line 28
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("commentaire_index");
            echo "\">Voir tous les commentaires</a>
                </li>
            </ul>
        ";
        }
        // line 32
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 32,  109 => 28,  103 => 25,  97 => 22,  90 => 17,  88 => 16,  82 => 13,  73 => 7,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block main %}
    <div class=\"card\" style=\"width: 18rem; margin: auto; background:#fff; border-radius: 6px;box-shadow: 0 .5em 1em -.125em rgba(10,10,10,.1),0 0 0 1px rgba(10,10,10,.02);padding: 1.25rem\">
        <ul class=\"list-group list-group-flush\">
            <li class=\"list-group-item\">
                <a href=\"{{ path('commande_find_by_user') }}\">Voir les commandes</a>
            </li>
            <li class=\"list-group-item\">
                <a href=\"#\">Voir le panier</a>
            </li>
            <li class=\"list-group-item\">
                <a href=\"{{ path('commentaire_index_user') }}\">Voir les commentaires</a>
            </li>
        </ul>
        {% if is_granted(\"ROLE_ADMIN\") %}
            <div class=\"card-header\">
                Admin pannel
            </div>
            <ul class=\"list-group list-group-flush\">
                <li class=\"list-group-item\">
                    <a href=\"{{ path('commande_index') }}\">Voir toutes les commandes</a>
                </li>
                <li class=\"list-group-item\">
                    <a href=\"{{ path('panier_index') }}\">Voir tout les paniers</a>
                </li>
                <li class=\"list-group-item\">
                    <a href=\"{{ path('commentaire_index') }}\">Voir tous les commentaires</a>
                </li>
            </ul>
        {% endif %}
    </div>
{% endblock %}", "user/index.html.twig", "/home/userdepinfo/Documents/Belfort/S3/php/ProjetMagasinProduit/MagasinProduit/templates/user/index.html.twig");
    }
}
