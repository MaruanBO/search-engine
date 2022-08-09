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

/* search/search.html.twig */
class __TwigTemplate_65fd84b0f62de50b9906a525b9374479 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "search/search.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "search/search.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $context["query"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "request", [], "any", false, false, false, 4), "query", [], "any", false, false, false, 4), "all", [], "any", false, false, false, 4);
        // line 5
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["query"] ?? null), "index", [], "array", false, true, false, 5), "query", [], "array", true, true, false, 5)) {
            echo " ";
            $context["query"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 5, $this->source); })()), "index", [], "array", false, false, false, 5), "query", [], "array", false, false, false, 5);
            echo " ";
        } else {
            echo " ";
            $context["query"] = "";
            echo " ";
        }
        // line 6
        echo "
    <div class=\"row g-5 g-xxl-5 bg-dark-800 mb-4\">
        <!--begin::Header-->
        <div class=\"d-flex flex-column flex-md-row align-items-center justify-content-between\">
            <div class=\"col-auto\">
                <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">
                    <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/google_logo.svg"), "html", null, true);
        echo "\" alt=\"google_logo\" height=\"40\">
                </a>
            </div>
            <div class=\"col-7\">
                ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), 'form_start');
        echo "
                <div class=\"input-group input-group-solid input-group-solid-600\">
                    ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "query", [], "any", false, false, false, 18), 'widget', ["attr" => ["class" => "fw-bolder rounded-circle-20", "placeholder" => "Type something..", "value" => (isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 18, $this->source); })())]]);
        echo "
                    <span class=\"input-group-text rounded-circle-20 border-left-0\">
                    <button class=\"inherent-button\">
                        <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/google_search.png"), "html", null, true);
        echo "\"
                             alt=\"search_icon\" height=\"30\">
                    </button>
                </span>
                </div>
                ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), 'form_end');
        echo "
            </div>
            <div class=\"col-4\">
                <ul class=\"menu menu-gray-600 align-items-center justify-content-end\">
                    <div class=\"menu-item pe-4\">
                        <a href=\"#\">
                            <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/google_youtube.svg"), "html", null, true);
        echo "\" alt=\"location\" height=\"30\"
                                 width=\"30\">
                        </a>
                    </div>
                    <div class=\"menu-item\">
                        <a href=\"mailto:maruanbueno55@gmail.com\">
                            <img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/google_mail.svg"), "html", null, true);
        echo "\" alt=\"location\" height=\"40\" width=\"40\"
                                 class=\"card-img\">
                        </a>
                    </div>
                    <div class=\"menu-item px-3\">
                        <a href=\"https://www.google.com/maps/place/Ixelles/data=!4m2!3m1!1s0x47c3c49d464cf871:0x6ad2d087c927be75?sa=X&ved=2ahUKEwitz-X6kbL5AhUlM-wKHZvsBCMQ8gF6BAgFEAE\"
                           target=\"_blank\">
                            <img src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/google_map.svg"), "html", null, true);
        echo "\" alt=\"location\" height=\"40\" width=\"40\">
                        </a>
                    </div>
                    <div class=\"menu-item me-0\">
                        <a href=\"https://maruan.tech\" target=\"_blank\">
                            <img class=\"rounded-circle border border-800\" height=\"40\"
                                 src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/1650055502528.jpeg"), "html", null, true);
        echo "\" alt=\"picture_photo\">
                        </a>
                    </div>
                </ul>
            </div>
        </div>
        <!--end::Header-->
        <!--begin::head line-->
        <div class=\"col-11 mx-auto ps-4\">
            <ul class=\"nav nav-tabs nav-line-tabs mb-4 pt-lg-1 fs-6\" role=\"tablist\">
                <li class=\"nav-item ps-3 \" role=\"presentation\">
                    <a class=\"nav-link active\" data-bs-toggle=\"tab\" href=\"#kt_tab_pane_7\" aria-selected=\"false\"
                       role=\"tab\"
                       tabindex=\"-1\">All</a>
                </li>
                <li class=\"nav-item\" role=\"presentation\">
                    <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#kt_tab_pane_8\" aria-selected=\"true\"
                       role=\"tab\">Images</a>
                </li>
                <li class=\"nav-item\" role=\"presentation\">
                    <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#kt_tab_pane_9\" aria-selected=\"false\" tabindex=\"-1\"
                       role=\"tab\">News</a>
                </li>
                <li class=\"nav-item\" role=\"presentation\">
                    <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#kt_tab_pane_9\" aria-selected=\"false\" tabindex=\"-1\"
                       role=\"tab\">Videos</a>
                </li>
                <li class=\"nav-item\" role=\"presentation\">
                    <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#kt_tab_pane_9\" aria-selected=\"false\" tabindex=\"-1\"
                       role=\"tab\">Maps</a>
                </li>
                <li class=\"nav-item\" role=\"presentation\">
                    <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#kt_tab_pane_9\" aria-selected=\"false\" tabindex=\"-1\"
                       role=\"tab\">More</a>
                </li>
            </ul>
        </div>
        <!--end::headline-->
    </div>

    <div class=\"row g-1 g-xxl-1\">
        <div class=\"col-11 mx-auto ps-4\">
            <!--begin::result-->
            ";
        // line 94
        if (twig_test_empty((isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new RuntimeError('Variable "result" does not exist.', 94, $this->source); })()))) {
            // line 95
            echo "                <div class=\"col-8\">
                    <p class=\"text-gray-800 small\">About ";
            // line 96
            echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 96, $this->source); })()), "html", null, true);
            echo " results (";
            echo twig_escape_filter($this->env, (isset($context["timing"]) || array_key_exists("timing", $context) ? $context["timing"] : (function () { throw new RuntimeError('Variable "timing" does not exist.', 96, $this->source); })()), "html", null, true);
            echo " seconds)</p>
                    <!--begin::Feeds Widget 1-->
                    <div class=\"card\" style=\"width: 97%;\">
                        <!--begin::Body-->
                        <div class=\"card-body pb-0\">
                            <p class=\"text-gray-900 text-hover-primary fs-6 text-gray-600\">Your search <span
                                        class=\"fw-bold\">";
            // line 102
            echo twig_escape_filter($this->env, (isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 102, $this->source); })()), "html", null, true);
            echo "</span> - did not match any documents.</p>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Feeds Widget 1-->
                </div>
            ";
        } else {
            // line 109
            echo "                <p class=\"text-gray-800 small\">About ";
            echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 109, $this->source); })()), "html", null, true);
            echo " results (";
            echo twig_escape_filter($this->env, (isset($context["timing"]) || array_key_exists("timing", $context) ? $context["timing"] : (function () { throw new RuntimeError('Variable "timing" does not exist.', 109, $this->source); })()), "html", null, true);
            echo " seconds)</p>
                ";
            // line 110
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new RuntimeError('Variable "result" does not exist.', 110, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                // line 111
                echo "                    <div class=\"col-8\">
                        <!--begin::Feeds Widget 1-->
                        <div class=\"card mb-3\" style=\"width: 97%;\">
                            <div class=\"card-header pb-0\">
                                <a class=\"card-title text-gray-800 fw-bold fs-5\" style=\"text-decoration:none;\"
                                   href=\"";
                // line 116
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], 0, [], "array", false, false, false, 116), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\PregExtension']->_preg_replace(twig_get_attribute($this->env, $this->source, $context["data"], 1, [], "array", false, false, false, 116), "/[^( -)]*/", "", twig_get_attribute($this->env, $this->source, $context["data"], 1, [], "array", false, false, false, 116)), "html", null, true);
                echo "
                                </a>
                                <div class=\"card-toolbar\">
                                    <span class=\"badge badge-pill ";
                // line 119
                if (((twig_get_attribute($this->env, $this->source, $context["data"], 3, [], "array", false, false, false, 119) >= 0) && (twig_get_attribute($this->env, $this->source, $context["data"], 3, [], "array", false, false, false, 119) <= 2000))) {
                    echo " bg-success ";
                } elseif (((twig_get_attribute($this->env, $this->source, $context["data"], 3, [], "array", false, false, false, 119) >= 2000) && (twig_get_attribute($this->env, $this->source, $context["data"], 3, [], "array", false, false, false, 119) <= 5000))) {
                    echo " bg-primary  ";
                } elseif (((twig_get_attribute($this->env, $this->source, $context["data"], 3, [], "array", false, false, false, 119) >= 5000) && (twig_get_attribute($this->env, $this->source, $context["data"], 3, [], "array", false, false, false, 119) <= 10000))) {
                    echo " bg-warning ";
                } else {
                    echo " bg-danger ";
                }
                echo "  rounded-circle-20\"
                                          title=\"Rank\">";
                // line 120
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], 3, [], "array", false, false, false, 120), "html", null, true);
                echo " </span>
                                    <a href=\"#\" class=\"ps-2\">
                                        <img src=\"";
                // line 122
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/menu_dot.svg"), "html", null, true);
                echo "\" alt=\"menu_dot\" height=\"20\">
                                    </a>
                                </div>
                            </div>
                            <!--begin::Body-->
                            <div class=\"card-body pt-0\">
                                <!--begin::Header-->
                                <div class=\"d-flex align-items-center\">
                                    <!--begin::Result-->
                                    <div class=\"d-flex align-items-center flex-grow-1\">
                                        <!--begin::Title/Desc/Rank-->
                                        <div class=\"d-flex flex-column mb-0\">
                                            <a style=\"text-decoration:none; color: green\"
                                               href=\"";
                // line 135
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], 0, [], "array", false, false, false, 135), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], 0, [], "array", false, false, false, 135), "html", null, true);
                echo "</a>
                                            <p class=\"text-gray-800\">";
                // line 136
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\PregExtension']->_preg_replace(twig_get_attribute($this->env, $this->source, $context["data"], 2, [], "array", false, false, false, 136), "/[^( -)]*/", "", twig_get_attribute($this->env, $this->source, $context["data"], 2, [], "array", false, false, false, 136)), "html", null, true);
                echo "</p>
                                        </div>
                                        <!--end::Title/Desc/Rank-->
                                    </div>
                                    <!--end::Result-->
                                </div>
                                <!--end::Header-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Feeds Widget 1-->
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            echo "            ";
        }
        // line 150
        echo "            <!--end::result-->

        </div>

    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 157
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 158
        echo "
    <div class=\"footer mt-auto py-4 px-4 ms-5\">
        <nav class=\"ms-5\">
            <ul class=\"pagination align-items-center ms-1\">
                <li class=\"page-item\">
                    <a class=\"page-link border-0 text-gray-600 bg-dark-800 text-uppercase rounded-circle-20\" href=\"#\">Previous</a>
                </li>
                <li class=\"page-item mx-5\">
                    <span class=\"page-link p-2 bg-danger rounded-circle border-0\">
                        <span class=\"visually-hidden\">ups</span>
                    </span>
                </li>
                <li class=\"page-item mx-5\">
                    <span class=\"page-link p-2 bg-warning rounded-circle border-0\">
                        <span class=\"visually-hidden\">ups</span>
                    </span>
                </li>
                <li class=\"page-item mx-5\">
                    <span class=\"page-link p-2 bg-success rounded-circle border-0\">
                        <span class=\"visually-hidden\">ups</span>
                    </span>
                </li>
                <li class=\"page-item mx-5\">
                    <span class=\"page-link p-2 bg-primary rounded-circle border-0\">
                        <span class=\"visually-hidden\">ups</span>
                    </span>
                </li>
                <li class=\"page-item mx-2\">
                    <a href=\"#\" class=\"page-link text-gray-600 bg-dark-800 border-0 rounded-circle-20\">5</a>
                </li>
                <li class=\"page-item mx-5\">
                    <span class=\"page-link p-2 bg-danger rounded-circle border-0\">
                        <span class=\"visually-hidden\">ups</span>
                    </span>
                </li>
                <li class=\"page-item mx-5\">
                    <span class=\"page-link p-2 bg-warning rounded-circle border-0\">
                        <span class=\"visually-hidden\">ups</span>
                    </span>
                </li>
                <li class=\"page-item mx-5\">
                    <span class=\"page-link p-2 bg-success rounded-circle border-0\">
                        <span class=\"visually-hidden\">ups</span>
                    </span>
                </li>
                <li class=\"page-item mx-5\">
                    <span class=\"page-link p-2 bg-primary rounded-circle border-0\">
                        <span class=\"visually-hidden\">ups</span>
                    </span>
                </li>
                <li class=\"page-item\">
                    <a class=\"page-link border-0 text-gray-600 bg-dark-800 p-2 text-uppercase rounded-circle-20\" href=\"#\">Next</a>
                </li>
            </ul>
        </nav>
        <!--end::Middle Text-->
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "search/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  326 => 158,  319 => 157,  307 => 150,  304 => 149,  285 => 136,  279 => 135,  263 => 122,  258 => 120,  246 => 119,  238 => 116,  231 => 111,  227 => 110,  220 => 109,  210 => 102,  199 => 96,  196 => 95,  194 => 94,  148 => 51,  139 => 45,  129 => 38,  120 => 32,  111 => 26,  103 => 21,  97 => 18,  92 => 16,  85 => 12,  81 => 11,  74 => 6,  63 => 5,  60 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    {% set query = app.request.query.all %}
    {% if query['index']['query'] is defined %} {% set query = query['index']['query'] %} {% else %} {% set query = '' %} {% endif %}

    <div class=\"row g-5 g-xxl-5 bg-dark-800 mb-4\">
        <!--begin::Header-->
        <div class=\"d-flex flex-column flex-md-row align-items-center justify-content-between\">
            <div class=\"col-auto\">
                <a href=\"{{ path('index') }}\">
                    <img src=\"{{ asset('build/images/google_logo.svg') }}\" alt=\"google_logo\" height=\"40\">
                </a>
            </div>
            <div class=\"col-7\">
                {{ form_start(form) }}
                <div class=\"input-group input-group-solid input-group-solid-600\">
                    {{ form_widget(form.query, {'attr': {'class': 'fw-bolder rounded-circle-20', placeholder: 'Type something..', value: query}}) }}
                    <span class=\"input-group-text rounded-circle-20 border-left-0\">
                    <button class=\"inherent-button\">
                        <img src=\"{{ asset('build/images/google_search.png') }}\"
                             alt=\"search_icon\" height=\"30\">
                    </button>
                </span>
                </div>
                {{ form_end(form) }}
            </div>
            <div class=\"col-4\">
                <ul class=\"menu menu-gray-600 align-items-center justify-content-end\">
                    <div class=\"menu-item pe-4\">
                        <a href=\"#\">
                            <img src=\"{{ asset('build/images/google_youtube.svg') }}\" alt=\"location\" height=\"30\"
                                 width=\"30\">
                        </a>
                    </div>
                    <div class=\"menu-item\">
                        <a href=\"mailto:maruanbueno55@gmail.com\">
                            <img src=\"{{ asset('build/images/google_mail.svg') }}\" alt=\"location\" height=\"40\" width=\"40\"
                                 class=\"card-img\">
                        </a>
                    </div>
                    <div class=\"menu-item px-3\">
                        <a href=\"https://www.google.com/maps/place/Ixelles/data=!4m2!3m1!1s0x47c3c49d464cf871:0x6ad2d087c927be75?sa=X&ved=2ahUKEwitz-X6kbL5AhUlM-wKHZvsBCMQ8gF6BAgFEAE\"
                           target=\"_blank\">
                            <img src=\"{{ asset('build/images/google_map.svg') }}\" alt=\"location\" height=\"40\" width=\"40\">
                        </a>
                    </div>
                    <div class=\"menu-item me-0\">
                        <a href=\"https://maruan.tech\" target=\"_blank\">
                            <img class=\"rounded-circle border border-800\" height=\"40\"
                                 src=\"{{ asset('build/images/1650055502528.jpeg') }}\" alt=\"picture_photo\">
                        </a>
                    </div>
                </ul>
            </div>
        </div>
        <!--end::Header-->
        <!--begin::head line-->
        <div class=\"col-11 mx-auto ps-4\">
            <ul class=\"nav nav-tabs nav-line-tabs mb-4 pt-lg-1 fs-6\" role=\"tablist\">
                <li class=\"nav-item ps-3 \" role=\"presentation\">
                    <a class=\"nav-link active\" data-bs-toggle=\"tab\" href=\"#kt_tab_pane_7\" aria-selected=\"false\"
                       role=\"tab\"
                       tabindex=\"-1\">All</a>
                </li>
                <li class=\"nav-item\" role=\"presentation\">
                    <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#kt_tab_pane_8\" aria-selected=\"true\"
                       role=\"tab\">Images</a>
                </li>
                <li class=\"nav-item\" role=\"presentation\">
                    <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#kt_tab_pane_9\" aria-selected=\"false\" tabindex=\"-1\"
                       role=\"tab\">News</a>
                </li>
                <li class=\"nav-item\" role=\"presentation\">
                    <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#kt_tab_pane_9\" aria-selected=\"false\" tabindex=\"-1\"
                       role=\"tab\">Videos</a>
                </li>
                <li class=\"nav-item\" role=\"presentation\">
                    <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#kt_tab_pane_9\" aria-selected=\"false\" tabindex=\"-1\"
                       role=\"tab\">Maps</a>
                </li>
                <li class=\"nav-item\" role=\"presentation\">
                    <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#kt_tab_pane_9\" aria-selected=\"false\" tabindex=\"-1\"
                       role=\"tab\">More</a>
                </li>
            </ul>
        </div>
        <!--end::headline-->
    </div>

    <div class=\"row g-1 g-xxl-1\">
        <div class=\"col-11 mx-auto ps-4\">
            <!--begin::result-->
            {% if result is empty %}
                <div class=\"col-8\">
                    <p class=\"text-gray-800 small\">About {{ total }} results ({{ timing }} seconds)</p>
                    <!--begin::Feeds Widget 1-->
                    <div class=\"card\" style=\"width: 97%;\">
                        <!--begin::Body-->
                        <div class=\"card-body pb-0\">
                            <p class=\"text-gray-900 text-hover-primary fs-6 text-gray-600\">Your search <span
                                        class=\"fw-bold\">{{ query }}</span> - did not match any documents.</p>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Feeds Widget 1-->
                </div>
            {% else %}
                <p class=\"text-gray-800 small\">About {{ total }} results ({{ timing }} seconds)</p>
                {% for data in result %}
                    <div class=\"col-8\">
                        <!--begin::Feeds Widget 1-->
                        <div class=\"card mb-3\" style=\"width: 97%;\">
                            <div class=\"card-header pb-0\">
                                <a class=\"card-title text-gray-800 fw-bold fs-5\" style=\"text-decoration:none;\"
                                   href=\"{{ data[0] }}\">{{ data[1]|preg_replace('/[^(\\x20-\\x7F)]*/', '', data[1]) }}
                                </a>
                                <div class=\"card-toolbar\">
                                    <span class=\"badge badge-pill {% if data[3] >= 0 and data[3] <= 2000 %} bg-success {% elseif data[3] >= 2000 and data[3] <= 5000 %} bg-primary  {% elseif data[3] >= 5000 and data[3] <= 10000 %} bg-warning {% else %} bg-danger {% endif %}  rounded-circle-20\"
                                          title=\"Rank\">{{ data[3] }} </span>
                                    <a href=\"#\" class=\"ps-2\">
                                        <img src=\"{{ asset('build/images/menu_dot.svg') }}\" alt=\"menu_dot\" height=\"20\">
                                    </a>
                                </div>
                            </div>
                            <!--begin::Body-->
                            <div class=\"card-body pt-0\">
                                <!--begin::Header-->
                                <div class=\"d-flex align-items-center\">
                                    <!--begin::Result-->
                                    <div class=\"d-flex align-items-center flex-grow-1\">
                                        <!--begin::Title/Desc/Rank-->
                                        <div class=\"d-flex flex-column mb-0\">
                                            <a style=\"text-decoration:none; color: green\"
                                               href=\"{{ data[0] }}\">{{ data[0] }}</a>
                                            <p class=\"text-gray-800\">{{ data[2]|preg_replace('/[^(\\x20-\\x7F)]*/', '', data[2]) }}</p>
                                        </div>
                                        <!--end::Title/Desc/Rank-->
                                    </div>
                                    <!--end::Result-->
                                </div>
                                <!--end::Header-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Feeds Widget 1-->
                    </div>
                {% endfor %}
            {% endif %}
            <!--end::result-->

        </div>

    </div>
{% endblock %}

{% block footer %}

    <div class=\"footer mt-auto py-4 px-4 ms-5\">
        <nav class=\"ms-5\">
            <ul class=\"pagination align-items-center ms-1\">
                <li class=\"page-item\">
                    <a class=\"page-link border-0 text-gray-600 bg-dark-800 text-uppercase rounded-circle-20\" href=\"#\">Previous</a>
                </li>
                <li class=\"page-item mx-5\">
                    <span class=\"page-link p-2 bg-danger rounded-circle border-0\">
                        <span class=\"visually-hidden\">ups</span>
                    </span>
                </li>
                <li class=\"page-item mx-5\">
                    <span class=\"page-link p-2 bg-warning rounded-circle border-0\">
                        <span class=\"visually-hidden\">ups</span>
                    </span>
                </li>
                <li class=\"page-item mx-5\">
                    <span class=\"page-link p-2 bg-success rounded-circle border-0\">
                        <span class=\"visually-hidden\">ups</span>
                    </span>
                </li>
                <li class=\"page-item mx-5\">
                    <span class=\"page-link p-2 bg-primary rounded-circle border-0\">
                        <span class=\"visually-hidden\">ups</span>
                    </span>
                </li>
                <li class=\"page-item mx-2\">
                    <a href=\"#\" class=\"page-link text-gray-600 bg-dark-800 border-0 rounded-circle-20\">5</a>
                </li>
                <li class=\"page-item mx-5\">
                    <span class=\"page-link p-2 bg-danger rounded-circle border-0\">
                        <span class=\"visually-hidden\">ups</span>
                    </span>
                </li>
                <li class=\"page-item mx-5\">
                    <span class=\"page-link p-2 bg-warning rounded-circle border-0\">
                        <span class=\"visually-hidden\">ups</span>
                    </span>
                </li>
                <li class=\"page-item mx-5\">
                    <span class=\"page-link p-2 bg-success rounded-circle border-0\">
                        <span class=\"visually-hidden\">ups</span>
                    </span>
                </li>
                <li class=\"page-item mx-5\">
                    <span class=\"page-link p-2 bg-primary rounded-circle border-0\">
                        <span class=\"visually-hidden\">ups</span>
                    </span>
                </li>
                <li class=\"page-item\">
                    <a class=\"page-link border-0 text-gray-600 bg-dark-800 p-2 text-uppercase rounded-circle-20\" href=\"#\">Next</a>
                </li>
            </ul>
        </nav>
        <!--end::Middle Text-->
    </div>

{% endblock %}", "search/search.html.twig", "/home/maruan/projects/search_engine/templates/search/search.html.twig");
    }
}
