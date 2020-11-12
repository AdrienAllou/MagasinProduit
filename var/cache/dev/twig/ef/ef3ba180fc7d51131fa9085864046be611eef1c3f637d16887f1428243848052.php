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

/* user/commandes.html.twig */
class __TwigTemplate_f0622125a805e72941cdf47b82a71391767e5e60557635754fbc1966be753bc5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/commandes.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/commandes.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/commandes.html.twig", 1);
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
        echo "    <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_index");
        echo "\"><button class=\"btn btn-primary\">Retour</button></a>
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commandes"]) || array_key_exists("commandes", $context) ? $context["commandes"] : (function () { throw new RuntimeError('Variable "commandes" does not exist.', 5, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
            // line 6
            echo "        ";
            $context["totalPriceCommande"] = 0;
            // line 7
            echo "        <h1 style=\"text-align: center\">Commande n°";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 7), "html", null, true);
            echo "</h1>
        <table class=\"table\">
            <thead class=\"thead-dark\">
            <tr>
                <th>Nom produit</th>
                <th>Quantité</th>
                <th>Etat</th>
                <th>Prix</th>
                <th>Prix Total</th>
            </tr>
            </thead>
            <tbody>
                ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["commande"], "ligneCommandes", [], "any", false, false, false, 19));
            foreach ($context['_seq'] as $context["_key"] => $context["lc"]) {
                // line 20
                echo "                    <tr>
                        <td>";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["lc"], "produit", [], "any", false, false, false, 21), "nom", [], "any", false, false, false, 21), "html", null, true);
                echo "</td>
                        <td>";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lc"], "quantite", [], "any", false, false, false, 22), "html", null, true);
                echo "</td>
                        <td>";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["commande"], "etat", [], "any", false, false, false, 23), "nom", [], "any", false, false, false, 23), "html", null, true);
                echo "</td>
                        <td>";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lc"], "prix", [], "any", false, false, false, 24), "html", null, true);
                echo "€</td>
                        ";
                // line 25
                $context["totalPriceCommande"] = ((isset($context["totalPriceCommande"]) || array_key_exists("totalPriceCommande", $context) ? $context["totalPriceCommande"] : (function () { throw new RuntimeError('Variable "totalPriceCommande" does not exist.', 25, $this->source); })()) + (twig_get_attribute($this->env, $this->source, $context["lc"], "quantite", [], "any", false, false, false, 25) * twig_get_attribute($this->env, $this->source, $context["lc"], "prix", [], "any", false, false, false, 25)));
                // line 26
                echo "                        <td>";
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["lc"], "quantite", [], "any", false, false, false, 26) * twig_get_attribute($this->env, $this->source, $context["lc"], "prix", [], "any", false, false, false, 26)), "html", null, true);
                echo "€</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lc'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "            </tbody>
            <tfoot>
            <tr>
                <td colspan=\"4\"></td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, (isset($context["totalPriceCommande"]) || array_key_exists("totalPriceCommande", $context) ? $context["totalPriceCommande"] : (function () { throw new RuntimeError('Variable "totalPriceCommande" does not exist.', 33, $this->source); })()), "html", null, true);
            echo "€</td>
            </tr>
            </tfoot>
        </table>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/commandes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  131 => 29,  121 => 26,  119 => 25,  115 => 24,  111 => 23,  107 => 22,  103 => 21,  100 => 20,  96 => 19,  80 => 7,  77 => 6,  73 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block main %}
    <a href=\"{{ path('user_index') }}\"><button class=\"btn btn-primary\">Retour</button></a>
    {% for commande in commandes %}
        {% set totalPriceCommande = 0 %}
        <h1 style=\"text-align: center\">Commande n°{{ commande.id }}</h1>
        <table class=\"table\">
            <thead class=\"thead-dark\">
            <tr>
                <th>Nom produit</th>
                <th>Quantité</th>
                <th>Etat</th>
                <th>Prix</th>
                <th>Prix Total</th>
            </tr>
            </thead>
            <tbody>
                {% for lc in commande.ligneCommandes %}
                    <tr>
                        <td>{{ lc.produit.nom }}</td>
                        <td>{{ lc.quantite }}</td>
                        <td>{{ commande.etat.nom }}</td>
                        <td>{{ lc.prix }}€</td>
                        {% set totalPriceCommande = totalPriceCommande + lc.quantite * lc.prix %}
                        <td>{{ lc.quantite * lc.prix }}€</td>
                    </tr>
                {% endfor %}
            </tbody>
            <tfoot>
            <tr>
                <td colspan=\"4\"></td>
                <td>{{ totalPriceCommande }}€</td>
            </tr>
            </tfoot>
        </table>
    {% endfor %}
{% endblock %}

", "user/commandes.html.twig", "/home/userdepinfo/Documents/Belfort/S3/php/MagasinProduit/templates/user/commandes.html.twig");
    }
}