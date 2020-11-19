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
                    <th>Quantité</th>
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
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_delete_panier", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["panier"], "produit", [], "any", false, false, false, 27), "id", [], "any", false, false, false, 27)]), "html", null, true);
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
            <div>
                <form action=\"";
                // line 38
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ligne_commande_add");
                echo "\" method=\"post\">
                    <input type=\"submit\" class=\"btn btn-success\" value=\"Convertion\" ";
                // line 39
                if ( !(isset($context["isValide"]) || array_key_exists("isValide", $context) ? $context["isValide"] : (function () { throw new RuntimeError('Variable "isValide" does not exist.', 39, $this->source); })())) {
                    echo "disabled";
                }
                echo ">
                    <input type=\"hidden\" value=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("convertionOnCommande"), "html", null, true);
                echo "\" name=\"token\">
                </form>
                <form action=\"";
                // line 42
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_delete_all");
                echo "\" method=\"post\">
                    <input type=\"submit\" class=\"btn btn-danger\" value=\"Vider le panier\">
                    <input type=\"hidden\" value=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("deleteAllProduitOnPanier"), "html", null, true);
                echo "\" name=\"token\">
                    <input type=\"hidden\" value=\"DELETE\" name=\"_method\">
                </form>
            </div>
        ";
            }
            // line 49
            echo "    ";
        }
        // line 50
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
        // line 59
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "user", [], "any", false, false, false, 59))) {
            // line 60
            echo "                ";
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER") && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
                // line 61
                echo "                    <th scope=\"col\" colspan=\"3\">Opérations</th>
                ";
            } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
                // line 63
                echo "                    <th scope=\"col\">Opérations</th>
                ";
            } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 65
                echo "                    <th scope=\"col\" colspan=\"2\">Opérations</th>
                ";
            }
            // line 67
            echo "            ";
        }
        // line 68
        echo "        </tr>
        </thead>
        <tbody>
        ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 71, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 72
            echo "            <tr>
                <th>";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 73), "html", null, true);
            echo "</th>
                <td>";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 74), "html", null, true);
            echo "€</td>
                <!--A refaire-->
                <td><img src=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/produits/" . twig_get_attribute($this->env, $this->source, $context["produit"], "photo", [], "any", false, false, false, 76))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 76), "html", null, true);
            echo "\" style=\"max-width: 200px; max-height: 200px\"></td>
                <td>";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "stock", [], "any", false, false, false, 77), "html", null, true);
            echo "</td>
                <td>";
            // line 78
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "dateLancement", [], "any", false, false, false, 78), "d/m/Y"), "html", null, true);
            echo "</td>
                <td>";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produit"], "typeProduit", [], "any", false, false, false, 79), "libelle", [], "any", false, false, false, 79), "html", null, true);
            echo "</td>
                ";
            // line 80
            if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 80, $this->source); })()), "user", [], "any", false, false, false, 80))) {
                // line 81
                echo "                    ";
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
                    // line 82
                    echo "                        <td>
                            <form action=\"";
                    // line 83
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier_addProduit", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 83)]), "html", null, true);
                    echo "\" method=\"post\">
                                <input type=\"submit\" class=\"btn btn-primary\" value=\"Ajouter au panier\">
                                <input type=\"hidden\" value=\"";
                    // line 85
                    echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("addProduitOnPanier"), "html", null, true);
                    echo "\" name=\"token\">
                            </form>
                        </td>
                    ";
                }
                // line 89
                echo "                    ";
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    // line 90
                    echo "                        <td>
                            <a href=\"";
                    // line 91
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 91)]), "html", null, true);
                    echo "\" class=\"btn btn-primary\">Modifier</a>
                        </td>
                        <td>
                            <form action=\"";
                    // line 94
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete");
                    echo "\" method=\"POST\" style=\"display:inline\">
                                <input type=\"hidden\" name=\"id\" value=\"";
                    // line 95
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 95), "html", null, true);
                    echo "\">
                                <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                <button type=\"submit\" class=\"btn btn-warning\" onclick=\"if(!confirm('Êtes-vous sûr ?')) { return false; }\">Supprimer</button>
                            </form>
                        </td>
                    ";
                }
                // line 101
                echo "                ";
            }
            // line 102
            echo "            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
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
        return array (  293 => 104,  286 => 102,  283 => 101,  274 => 95,  270 => 94,  264 => 91,  261 => 90,  258 => 89,  251 => 85,  246 => 83,  243 => 82,  240 => 81,  238 => 80,  234 => 79,  230 => 78,  226 => 77,  220 => 76,  215 => 74,  211 => 73,  208 => 72,  204 => 71,  199 => 68,  196 => 67,  192 => 65,  188 => 63,  184 => 61,  181 => 60,  179 => 59,  168 => 50,  165 => 49,  157 => 44,  152 => 42,  147 => 40,  141 => 39,  137 => 38,  132 => 35,  120 => 29,  115 => 27,  110 => 25,  106 => 24,  103 => 23,  99 => 22,  87 => 12,  84 => 11,  82 => 10,  79 => 9,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
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
                    <th>Quantité</th>
                    <th>Supprimer</th>
                </tr>
                </thead>
                <tbody>
                {% for panier in paniers %}
                    <tr>
                        <th>{{ panier.produit.nom }}</th>
                        <th>{{ panier.quantite }}</th>
                        <th>
                            <form action=\"{{ path('panier_delete_panier', {'id': panier.produit.id}) }}\" method=\"post\">
                                <input type=\"submit\" class=\"btn btn-danger\" value=\"Supprimer\">
                                <input type=\"hidden\" value=\"{{ csrf_token(\"deleteProduitOnPanier\") }}\" name=\"token\">
                                <input type=\"hidden\" value=\"DELETE\" name=\"_method\">
                            </form>
                        </th>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
            <div>
                <form action=\"{{ path('ligne_commande_add') }}\" method=\"post\">
                    <input type=\"submit\" class=\"btn btn-success\" value=\"Convertion\" {% if not isValide %}disabled{% endif %}>
                    <input type=\"hidden\" value=\"{{ csrf_token(\"convertionOnCommande\") }}\" name=\"token\">
                </form>
                <form action=\"{{ path('panier_delete_all') }}\" method=\"post\">
                    <input type=\"submit\" class=\"btn btn-danger\" value=\"Vider le panier\">
                    <input type=\"hidden\" value=\"{{ csrf_token(\"deleteAllProduitOnPanier\") }}\" name=\"token\">
                    <input type=\"hidden\" value=\"DELETE\" name=\"_method\">
                </form>
            </div>
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
                    <th scope=\"col\" colspan=\"3\">Opérations</th>
                {% elseif is_granted(\"ROLE_USER\") %}
                    <th scope=\"col\">Opérations</th>
                {% elseif is_granted(\"ROLE_ADMIN\") %}
                    <th scope=\"col\" colspan=\"2\">Opérations</th>
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
                <td><img src=\"{{ asset('uploads/images/produits/' ~ produit.photo) }}\" alt=\"{{ produit.nom }}\" style=\"max-width: 200px; max-height: 200px\"></td>
                <td>{{ produit.stock }}</td>
                <td>{{ produit.dateLancement | date(\"d/m/Y\")}}</td>
                <td>{{ produit.typeProduit.libelle }}</td>
                {% if app.user is not null %}
                    {% if is_granted(\"ROLE_USER\") %}
                        <td>
                            <form action=\"{{ path('panier_addProduit', {'id': produit.id}) }}\" method=\"post\">
                                <input type=\"submit\" class=\"btn btn-primary\" value=\"Ajouter au panier\">
                                <input type=\"hidden\" value=\"{{ csrf_token(\"addProduitOnPanier\") }}\" name=\"token\">
                            </form>
                        </td>
                    {% endif %}
                    {% if is_granted(\"ROLE_ADMIN\") %}
                        <td>
                            <a href=\"{{ path('edit', {id: produit.id}) }}\" class=\"btn btn-primary\">Modifier</a>
                        </td>
                        <td>
                            <form action=\"{{ path('delete') }}\" method=\"POST\" style=\"display:inline\">
                                <input type=\"hidden\" name=\"id\" value=\"{{ produit.id }}\">
                                <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                <button type=\"submit\" class=\"btn btn-warning\" onclick=\"if(!confirm('Êtes-vous sûr ?')) { return false; }\">Supprimer</button>
                            </form>
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
