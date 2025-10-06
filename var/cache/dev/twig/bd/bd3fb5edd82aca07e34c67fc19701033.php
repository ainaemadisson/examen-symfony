<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* dashboard/index.html.twig */
class __TwigTemplate_27886c945b6fec03ae32aed633289390 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Tableau de Bord - ÉcoCollecte";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<div class=\"container-fluid py-4\">
    <!-- En-tête -->
    <div class=\"row mb-4\">
        <div class=\"col-12 text-center\">
            <h1 class=\"page-title\">
                <i class=\"fas fa-leaf me-3\"></i>
                Tableau de Bord ÉcoCollecte
            </h1>
            <p class=\"text-muted\">Gestion durable des points de collecte et dépôts de déchets</p>
        </div>
    </div>

    <!-- Cartes de statistiques -->
    <div class=\"row mb-5\">
        <div class=\"col-md-4 mb-4\">
            <div class=\"stats-card h-100\">
                <div class=\"card-body\">
                    <i class=\"fas fa-map-marker-alt fa-2x mb-3\"></i>
                    <h5 class=\"card-title\">Points de Collecte</h5>
                    <p class=\"card-text display-4\">";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["nombrePoints"]) || array_key_exists("nombrePoints", $context) ? $context["nombrePoints"] : (function () { throw new RuntimeError('Variable "nombrePoints" does not exist.', 25, $this->source); })()), "html", null, true);
        yield "</p>
                    <small>Actifs sur la plateforme</small>
                </div>
            </div>
        </div>
        <div class=\"col-md-4 mb-4\">
            <div class=\"stats-card h-100\">
                <div class=\"card-body\">
                    <i class=\"fas fa-weight fa-2x mb-3\"></i>
                    <h5 class=\"card-title\">Poids Total Collecté</h5>
                    <p class=\"card-text display-4\">";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["poidsTotal"]) || array_key_exists("poidsTotal", $context) ? $context["poidsTotal"] : (function () { throw new RuntimeError('Variable "poidsTotal" does not exist.', 35, $this->source); })()), 0), "html", null, true);
        yield "</p>
                    <small>kilogrammes</small>
                </div>
            </div>
        </div>
        <div class=\"col-md-4 mb-4\">
            <div class=\"stats-card h-100\">
                <div class=\"card-body\">
                    <i class=\"fas fa-recycle fa-2x mb-3\"></i>
                    <h5 class=\"card-title\">Types de Déchets</h5>
                    <p class=\"card-text display-4\">";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["totauxParType"]) || array_key_exists("totauxParType", $context) ? $context["totauxParType"] : (function () { throw new RuntimeError('Variable "totauxParType" does not exist.', 45, $this->source); })())), "html", null, true);
        yield "</p>
                    <small>Catégories différentes</small>
                </div>
            </div>
        </div>
    </div>

    <!-- Tableaux -->
    <div class=\"row\">
        <!-- Totaux par type -->
        <div class=\"col-lg-6 mb-4\">
            <div class=\"eco-card h-100\">
                <div class=\"card-body\">
                    <h4 class=\"section-title\">
                        <i class=\"fas fa-chart-pie me-2\"></i>
                        Répartition par Type de Déchet
                    </h4>
                    <div class=\"table-responsive\">
                        <table class=\"table eco-table\">
                            <thead>
                                <tr>
                                    <th>Type</th>
                                    <th>Poids Total</th>
                                    <th>Nombre</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["totauxParType"]) || array_key_exists("totauxParType", $context) ? $context["totauxParType"] : (function () { throw new RuntimeError('Variable "totauxParType" does not exist.', 72, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 73
            yield "                                <tr>
                                    <td>
                                        <span class=\"badge-eco\">";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["total"], "type", [], "any", false, false, false, 75), "html", null, true);
            yield "</span>
                                    </td>
                                    <td>
                                        <strong>";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["total"], "total_poids", [], "any", false, false, false, 78), 1), "html", null, true);
            yield " kg</strong>
                                    </td>
                                    <td>
                                        <small class=\"text-muted\">";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["total"], "total_depots", [], "any", false, false, false, 81), "html", null, true);
            yield " dépôts</small>
                                    </td>
                                </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['total'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        yield "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Derniers dépôts -->
        <div class=\"col-lg-6 mb-4\">
            <div class=\"eco-card h-100\">
                <div class=\"card-body\">
                    <h4 class=\"section-title\">
                        <i class=\"fas fa-history me-2\"></i>
                        Dépôts Récents
                    </h4>
                    <div class=\"table-responsive\">
                        <table class=\"table eco-table\">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Type</th>
                                    <th>Poids</th>
                                    <th>Lieu</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 111
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["derniersDepots"]) || array_key_exists("derniersDepots", $context) ? $context["derniersDepots"] : (function () { throw new RuntimeError('Variable "derniersDepots" does not exist.', 111, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["depot"]) {
            // line 112
            yield "                                <tr>
                                    <td>
                                        <small>";
            // line 114
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["depot"], "date", [], "any", false, false, false, 114), "d/m/Y"), "html", null, true);
            yield "</small>
                                        <br>
                                        <small class=\"text-muted\">";
            // line 116
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["depot"], "date", [], "any", false, false, false, 116), "H:i"), "html", null, true);
            yield "</small>
                                    </td>
                                    <td>
                                        <span class=\"badge-eco\">";
            // line 119
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["depot"], "type", [], "any", false, false, false, 119), "html", null, true);
            yield "</span>
                                    </td>
                                    <td>
                                        <strong>";
            // line 122
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["depot"], "poidsEstime", [], "any", false, false, false, 122), "html", null, true);
            yield " kg</strong>
                                    </td>
                                    <td>
                                        <small>";
            // line 125
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["depot"], "pointCollecte", [], "any", false, false, false, 125), "adresse", [], "any", false, false, false, 125), "html", null, true);
            yield "</small>
                                    </td>
                                </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['depot'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        yield "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation rapide -->
    <div class=\"row mt-4\">
        <div class=\"col-12\">
            <div class=\"quick-nav eco-card\">
                <h4 class=\"section-title text-center mb-4\">Actions Rapides</h4>
                <div class=\"d-flex flex-wrap justify-content-center gap-3\">
                    <a href=\"";
        // line 143
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_point_collecte_index");
        yield "\" class=\"eco-btn\">
                        <i class=\"fas fa-map-marked-alt me-2\"></i>
                        Points de Collecte
                    </a>
                    <a href=\"";
        // line 147
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_depot_index");
        yield "\" class=\"eco-btn eco-btn-secondary\">
                        <i class=\"fas fa-list-alt me-2\"></i>
                        Journal des Dépôts
                    </a>
                    <a href=\"";
        // line 151
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_depot_new");
        yield "\" class=\"eco-btn\">
                        <i class=\"fas fa-plus-circle me-2\"></i>
                        Nouveau Dépôt
                    </a>
                    <a href=\"";
        // line 155
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_point_collecte_new");
        yield "\" class=\"eco-btn eco-btn-secondary\">
                        <i class=\"fas fa-plus me-2\"></i>
                        Nouveau Point
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Indicateur écologique -->
    <div class=\"row mt-5\">
        <div class=\"col-12 text-center\">
            <div class=\"eco-card\">
                <div class=\"card-body py-3\">
                    <p class=\"mb-0 text-muted\">
                        <i class=\"fas fa-leaf me-2\"></i>
                        🌱 Ensemble, nous avons collecté <strong>";
        // line 171
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["poidsTotal"]) || array_key_exists("poidsTotal", $context) ? $context["poidsTotal"] : (function () { throw new RuntimeError('Variable "poidsTotal" does not exist.', 171, $this->source); })()), 0), "html", null, true);
        yield " kg</strong> de déchets et contribué à préserver notre environnement.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "dashboard/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  332 => 171,  313 => 155,  306 => 151,  299 => 147,  292 => 143,  276 => 129,  266 => 125,  260 => 122,  254 => 119,  248 => 116,  243 => 114,  239 => 112,  235 => 111,  207 => 85,  197 => 81,  191 => 78,  185 => 75,  181 => 73,  177 => 72,  147 => 45,  134 => 35,  121 => 25,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Tableau de Bord - ÉcoCollecte{% endblock %}

{% block body %}
<div class=\"container-fluid py-4\">
    <!-- En-tête -->
    <div class=\"row mb-4\">
        <div class=\"col-12 text-center\">
            <h1 class=\"page-title\">
                <i class=\"fas fa-leaf me-3\"></i>
                Tableau de Bord ÉcoCollecte
            </h1>
            <p class=\"text-muted\">Gestion durable des points de collecte et dépôts de déchets</p>
        </div>
    </div>

    <!-- Cartes de statistiques -->
    <div class=\"row mb-5\">
        <div class=\"col-md-4 mb-4\">
            <div class=\"stats-card h-100\">
                <div class=\"card-body\">
                    <i class=\"fas fa-map-marker-alt fa-2x mb-3\"></i>
                    <h5 class=\"card-title\">Points de Collecte</h5>
                    <p class=\"card-text display-4\">{{ nombrePoints }}</p>
                    <small>Actifs sur la plateforme</small>
                </div>
            </div>
        </div>
        <div class=\"col-md-4 mb-4\">
            <div class=\"stats-card h-100\">
                <div class=\"card-body\">
                    <i class=\"fas fa-weight fa-2x mb-3\"></i>
                    <h5 class=\"card-title\">Poids Total Collecté</h5>
                    <p class=\"card-text display-4\">{{ poidsTotal|number_format(0) }}</p>
                    <small>kilogrammes</small>
                </div>
            </div>
        </div>
        <div class=\"col-md-4 mb-4\">
            <div class=\"stats-card h-100\">
                <div class=\"card-body\">
                    <i class=\"fas fa-recycle fa-2x mb-3\"></i>
                    <h5 class=\"card-title\">Types de Déchets</h5>
                    <p class=\"card-text display-4\">{{ totauxParType|length }}</p>
                    <small>Catégories différentes</small>
                </div>
            </div>
        </div>
    </div>

    <!-- Tableaux -->
    <div class=\"row\">
        <!-- Totaux par type -->
        <div class=\"col-lg-6 mb-4\">
            <div class=\"eco-card h-100\">
                <div class=\"card-body\">
                    <h4 class=\"section-title\">
                        <i class=\"fas fa-chart-pie me-2\"></i>
                        Répartition par Type de Déchet
                    </h4>
                    <div class=\"table-responsive\">
                        <table class=\"table eco-table\">
                            <thead>
                                <tr>
                                    <th>Type</th>
                                    <th>Poids Total</th>
                                    <th>Nombre</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for total in totauxParType %}
                                <tr>
                                    <td>
                                        <span class=\"badge-eco\">{{ total.type }}</span>
                                    </td>
                                    <td>
                                        <strong>{{ total.total_poids|number_format(1) }} kg</strong>
                                    </td>
                                    <td>
                                        <small class=\"text-muted\">{{ total.total_depots }} dépôts</small>
                                    </td>
                                </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Derniers dépôts -->
        <div class=\"col-lg-6 mb-4\">
            <div class=\"eco-card h-100\">
                <div class=\"card-body\">
                    <h4 class=\"section-title\">
                        <i class=\"fas fa-history me-2\"></i>
                        Dépôts Récents
                    </h4>
                    <div class=\"table-responsive\">
                        <table class=\"table eco-table\">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Type</th>
                                    <th>Poids</th>
                                    <th>Lieu</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for depot in derniersDepots %}
                                <tr>
                                    <td>
                                        <small>{{ depot.date|date('d/m/Y') }}</small>
                                        <br>
                                        <small class=\"text-muted\">{{ depot.date|date('H:i') }}</small>
                                    </td>
                                    <td>
                                        <span class=\"badge-eco\">{{ depot.type }}</span>
                                    </td>
                                    <td>
                                        <strong>{{ depot.poidsEstime }} kg</strong>
                                    </td>
                                    <td>
                                        <small>{{ depot.pointCollecte.adresse }}</small>
                                    </td>
                                </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation rapide -->
    <div class=\"row mt-4\">
        <div class=\"col-12\">
            <div class=\"quick-nav eco-card\">
                <h4 class=\"section-title text-center mb-4\">Actions Rapides</h4>
                <div class=\"d-flex flex-wrap justify-content-center gap-3\">
                    <a href=\"{{ path('app_point_collecte_index') }}\" class=\"eco-btn\">
                        <i class=\"fas fa-map-marked-alt me-2\"></i>
                        Points de Collecte
                    </a>
                    <a href=\"{{ path('app_depot_index') }}\" class=\"eco-btn eco-btn-secondary\">
                        <i class=\"fas fa-list-alt me-2\"></i>
                        Journal des Dépôts
                    </a>
                    <a href=\"{{ path('app_depot_new') }}\" class=\"eco-btn\">
                        <i class=\"fas fa-plus-circle me-2\"></i>
                        Nouveau Dépôt
                    </a>
                    <a href=\"{{ path('app_point_collecte_new') }}\" class=\"eco-btn eco-btn-secondary\">
                        <i class=\"fas fa-plus me-2\"></i>
                        Nouveau Point
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Indicateur écologique -->
    <div class=\"row mt-5\">
        <div class=\"col-12 text-center\">
            <div class=\"eco-card\">
                <div class=\"card-body py-3\">
                    <p class=\"mb-0 text-muted\">
                        <i class=\"fas fa-leaf me-2\"></i>
                        🌱 Ensemble, nous avons collecté <strong>{{ poidsTotal|number_format(0) }} kg</strong> de déchets et contribué à préserver notre environnement.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "dashboard/index.html.twig", "/home/aina/gestion-dechets/templates/dashboard/index.html.twig");
    }
}
