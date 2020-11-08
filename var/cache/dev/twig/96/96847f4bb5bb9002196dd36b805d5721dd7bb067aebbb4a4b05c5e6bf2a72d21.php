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

/* produit/index.html.twig */
class __TwigTemplate_10aa0cf9cd636ff4062735a21dd21e796c999aafe6e971b2b9ae93fb06ef068b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "produit/index.html.twig", 1);
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
        echo "    ";
        if (( !(null === twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "user", [], "any", false, false, false, 4)) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            // line 5
            echo "        <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add");
            echo "\" style=\"color: white\">
            <button class=\"btn btn-primary\">Ajouter</button>
        </a>
    ";
        }
        // line 9
        echo "    <!--A refaire-->
    ";
        // line 10
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "user", [], "any", false, false, false, 10))) {
            // line 11
            echo "        ";
            if ( !twig_test_empty((isset($context["paniers"]) || array_key_exists("paniers", $context) ? $context["paniers"] : (function () { throw new RuntimeError('Variable "paniers" does not exist.', 11, $this->source); })()))) {
                // line 12
                echo "            <h1>Panier</h1>
            <table>
                <thead>
                <tr>
                    <th>Nom</th>
                    <th>Quantiter</th>
                    <th>Supprimer</th>
                </tr>
                </thead>
                <tbody>
                ";
                // line 22
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["paniers"]) || array_key_exists("paniers", $context) ? $context["paniers"] : (function () { throw new RuntimeError('Variable "paniers" does not exist.', 22, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["panier"]) {
                    // line 23
                    echo "                    <tr>
                        <th>";
                    // line 24
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["panier"], "produit", [], "any", false, false, false, 24), "nom", [], "any", false, false, false, 24), "html", null, true);
                    echo "</th>
                        <th>";
                    // line 25
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["panier"], "quantite", [], "any", false, false, false, 25), "html", null, true);
                    echo "</th>
                        <th>
                            <form action=\"";
                    // line 27
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_panier", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["panier"], "produit", [], "any", false, false, false, 27), "id", [], "any", false, false, false, 27)]), "html", null, true);
                    echo "\" method=\"post\">
                                <input type=\"submit\" class=\"btn btn-danger\" value=\"Supprimer\">
                                <input type=\"hidden\" value=\"";
                    // line 29
                    echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("deleteProduitOnPanier"), "html", null, true);
                    echo "\" name=\"token\">
                                <input type=\"hidden\" value=\"DELETE\" name=\"_method\">
                            </form>
                        </th>
                    </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['panier'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 35
                echo "                </tbody>
            </table>
        ";
            }
            // line 38
            echo "    ";
        }
        // line 39
        echo "    <table class=\"table\">
        <thead class=\"thead-dark\">
        <tr>
            <th scope=\"col\">Nom</th>
            <th scope=\"col\">Prix</th>
            <th scope=\"col\">Photo</th>
            <th scope=\"col\">Stock</th>
            <th scope=\"col\">Date de lancement</th>
            <th scope=\"col\">Type produit</th>
            ";
        // line 48
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "user", [], "any", false, false, false, 48))) {
            // line 49
            echo "                ";
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER") && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
                // line 50
                echo "                    <th scope=\"col\" colspan=\"3\">Operation</th>
                ";
            } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
                // line 52
                echo "                    <th scope=\"col\">Operation</th>
                ";
            } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 54
                echo "                    <th scope=\"col\" colspan=\"2\">Operation</th>
                ";
            }
            // line 56
            echo "            ";
        }
        // line 57
        echo "        </tr>
        </thead>
        <tbody>
        ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 60, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 61
            echo "            <tr>
                <th>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 62), "html", null, true);
            echo "</th>
                <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 63), "html", null, true);
            echo "€</td>
                <!--A refaire-->
                <td><img src=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/produits/" . twig_get_attribute($this->env, $this->source, $context["produit"], "photo", [], "any", false, false, false, 65))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 65), "html", null, true);
            echo "\" style=\"width: 200px; height: 200px\"></td>
                <td>";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "stock", [], "any", false, false, false, 66), "html", null, true);
            echo "</td>
                <td>";
            // line 67
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "dateLancement", [], "any", false, false, false, 67), "d/m/Y"), "html", null, true);
            echo "</td>
                <td>";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produit"], "typeProduit", [], "any", false, false, false, 68), "libelle", [], "any", false, false, false, 68), "html", null, true);
            echo "</td>
                ";
            // line 69
            if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "user", [], "any", false, false, false, 69))) {
                // line 70
                echo "                    ";
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
                    // line 71
                    echo "                        <td>
                            <form action=\"";
                    // line 72
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addProduit", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 72)]), "html", null, true);
                    echo "\" method=\"post\">
                                <input type=\"submit\" class=\"btn btn-primary\" value=\"Ajouter au panier\">
                                <input type=\"hidden\" value=\"";
                    // line 74
                    echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("addProduitOnPanier"), "html", null, true);
                    echo "\" name=\"token\">
                            </form>
                        </td>
                    ";
                }
                // line 78
                echo "                    ";
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    // line 79
                    echo "                        <td>
                            <a href=\"#\" style=\"color: white\">
                                <button class=\"btn btn-primary\">Modifier</button>
                            </a>
                        </td>
                        <td>
                            <a href=\"#\" style=\"color: white\">
                                <button class=\"btn btn-danger\">Supprimer</button>
                            </a>
                        </td>
                    ";
                }
                // line 90
                echo "                ";
            }
            // line 91
            echo "            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "        </tbody>
    </table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "produit/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 93,  249 => 91,  246 => 90,  233 => 79,  230 => 78,  223 => 74,  218 => 72,  215 => 71,  212 => 70,  210 => 69,  206 => 68,  202 => 67,  198 => 66,  192 => 65,  187 => 63,  183 => 62,  180 => 61,  176 => 60,  171 => 57,  168 => 56,  164 => 54,  160 => 52,  156 => 50,  153 => 49,  151 => 48,  140 => 39,  137 => 38,  132 => 35,  120 => 29,  115 => 27,  110 => 25,  106 => 24,  103 => 23,  99 => 22,  87 => 12,  84 => 11,  82 => 10,  79 => 9,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block main %}
    {% if app.user is not null and is_granted(\"ROLE_ADMIN\") %}
        <a href=\"{{ path('add') }}\" style=\"color: white\">
            <button class=\"btn btn-primary\">Ajouter</button>
        </a>
    {% endif %}
    <!--A refaire-->
    {% if app.user is not null %}
        {% if paniers is not empty %}
            <h1>Panier</h1>
            <table>
                <thead>
                <tr>
                    <th>Nom</th>
                    <th>Quantiter</th>
                    <th>Supprimer</th>
                </tr>
                </thead>
                <tbody>
                {% for panier in paniers %}
                    <tr>
                        <th>{{ panier.produit.nom }}</th>
                        <th>{{ panier.quantite }}</th>
                        <th>
                            <form action=\"{{ path('delete_panier', {'id': panier.produit.id}) }}\" method=\"post\">
                                <input type=\"submit\" class=\"btn btn-danger\" value=\"Supprimer\">
                                <input type=\"hidden\" value=\"{{ csrf_token(\"deleteProduitOnPanier\") }}\" name=\"token\">
                                <input type=\"hidden\" value=\"DELETE\" name=\"_method\">
                            </form>
                        </th>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        {% endif %}
    {% endif %}
    <table class=\"table\">
        <thead class=\"thead-dark\">
        <tr>
            <th scope=\"col\">Nom</th>
            <th scope=\"col\">Prix</th>
            <th scope=\"col\">Photo</th>
            <th scope=\"col\">Stock</th>
            <th scope=\"col\">Date de lancement</th>
            <th scope=\"col\">Type produit</th>
            {% if app.user is not null %}
                {% if is_granted(\"ROLE_USER\") and is_granted(\"ROLE_ADMIN\") %}
                    <th scope=\"col\" colspan=\"3\">Operation</th>
                {% elseif is_granted(\"ROLE_USER\") %}
                    <th scope=\"col\">Operation</th>
                {% elseif is_granted(\"ROLE_ADMIN\") %}
                    <th scope=\"col\" colspan=\"2\">Operation</th>
                {% endif %}
            {% endif %}
        </tr>
        </thead>
        <tbody>
        {% for produit in produits %}
            <tr>
                <th>{{ produit.nom }}</th>
                <td>{{ produit.prix }}€</td>
                <!--A refaire-->
                <td><img src=\"{{ asset('uploads/images/produits/' ~ produit.photo) }}\" alt=\"{{ produit.nom }}\" style=\"width: 200px; height: 200px\"></td>
                <td>{{ produit.stock }}</td>
                <td>{{ produit.dateLancement | date(\"d/m/Y\")}}</td>
                <td>{{ produit.typeProduit.libelle }}</td>
                {% if app.user is not null %}
                    {% if is_granted(\"ROLE_USER\") %}
                        <td>
                            <form action=\"{{ path('addProduit', {'id': produit.id}) }}\" method=\"post\">
                                <input type=\"submit\" class=\"btn btn-primary\" value=\"Ajouter au panier\">
                                <input type=\"hidden\" value=\"{{ csrf_token(\"addProduitOnPanier\") }}\" name=\"token\">
                            </form>
                        </td>
                    {% endif %}
                    {% if is_granted(\"ROLE_ADMIN\") %}
                        <td>
                            <a href=\"#\" style=\"color: white\">
                                <button class=\"btn btn-primary\">Modifier</button>
                            </a>
                        </td>
                        <td>
                            <a href=\"#\" style=\"color: white\">
                                <button class=\"btn btn-danger\">Supprimer</button>
                            </a>
                        </td>
                    {% endif %}
                {% endif %}
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endblock %}", "produit/index.html.twig", "/home/userdepinfo/Documents/Belfort/S3/php/MagasinProduit/templates/produit/index.html.twig");
    }
}
