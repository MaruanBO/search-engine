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

/* search/index.html.twig */
class __TwigTemplate_8888b1f293a73ab2e45e99775ea46a2c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "search/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "search/index.html.twig", 1);
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
        echo "    <!--begin::navbar-->
    <nav class=\"navbar navbar-expand-sm justify-content-end\">
        <div class=\"col-auto pe-4\">
            <a href=\"#\">
                <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/google_youtube.svg"), "html", null, true);
        echo "\" alt=\"location\" height=\"30\" width=\"30\">
            </a>
        </div>
        <div class=\"col-auto\">
            <a href=\"mailto:maruanbueno55@gmail.com\">
                <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/google_mail.svg"), "html", null, true);
        echo "\" alt=\"location\" height=\"40\" width=\"40\"
                     class=\"card-img\">
            </a>
        </div>
        <div class=\"col-auto px-3\">
            <a href=\"https://www.google.com/maps/place/Ixelles/data=!4m2!3m1!1s0x47c3c49d464cf871:0x6ad2d087c927be75?sa=X&ved=2ahUKEwitz-X6kbL5AhUlM-wKHZvsBCMQ8gF6BAgFEAE\"
               target=\"_blank\">
                <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/google_map.svg"), "html", null, true);
        echo "\" alt=\"location\" height=\"40\" width=\"40\">
            </a>
        </div>
        <div class=\"navbar-brand me-0\">
            <a href=\"https://maruan.tech\" target=\"_blank\">
                <img class=\"rounded-circle border border-800\" height=\"40\"
                     src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/1650055502528.jpeg"), "html", null, true);
        echo "\" alt=\"picture_photo\">
            </a>
        </div>
    </nav>
    <!--end::navbar-->
    <!--begin::google search bar-->
    <div class=\"row g-0 position-absolute top-50 start-50 translate-middle\">
        <div class=\"col-md-12 d-flex justify-content-center mb-5\">
            <img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/google_logo.svg"), "html", null, true);
        echo "\" class=\"float-start\" alt=\"google_logo\" width=\"120\"
                 height=\"120\">
            <p class=\"text-gray-800 fw-bold ps-1 h6 pt-lg-6\">Belgium</p>
        </div>
        <div class=\"col-12\">
            ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), 'form_start');
        echo "
            <div class=\"input-group input-group-solid\">
                <span class=\"input-group-text rounded-circle-20 border-left-0 px-3 py-3\">
                    <button class=\"inherent-button\">
                        <img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/google_search.png"), "html", null, true);
        echo "\"
                             alt=\"search_icon\" height=\"40\">
                    </button>
                </span>
                ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "query", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => "rounded-0 fw-bolder", "placeholder" => "Type something.."]]);
        echo "
                <span class=\"input-group-text rounded-circle-20 px-4 py-3\">
                    <a href=\"#\">
                        <img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/google_micro.png"), "html", null, true);
        echo "\" alt=\"\" height=\"30\">
                    </a>
                </span>
            </div>
            ";
        // line 54
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), 'form_end');
        echo "
        </div>

        <div class=\"col-12 text-center py-5\">
            <a href=\"https://maruan.tech/contact\" target=\"_blank\"
               class=\"btn btn-secondary me-2 mb-2 text-center fw-semibold p-3 rounded\"> <img src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/babyangel.svg"), "html", null, true);
        echo "\" alt=\"\" height=\"30\" class=\"pe-4\">I'm Feeling Lucky!</a>
        </div>
    </div>
    <!--end::google search bar-->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "search/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 59,  138 => 54,  131 => 50,  125 => 47,  118 => 43,  111 => 39,  103 => 34,  92 => 26,  83 => 20,  73 => 13,  65 => 8,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <!--begin::navbar-->
    <nav class=\"navbar navbar-expand-sm justify-content-end\">
        <div class=\"col-auto pe-4\">
            <a href=\"#\">
                <img src=\"{{ asset('build/images/google_youtube.svg') }}\" alt=\"location\" height=\"30\" width=\"30\">
            </a>
        </div>
        <div class=\"col-auto\">
            <a href=\"mailto:maruanbueno55@gmail.com\">
                <img src=\"{{ asset('build/images/google_mail.svg') }}\" alt=\"location\" height=\"40\" width=\"40\"
                     class=\"card-img\">
            </a>
        </div>
        <div class=\"col-auto px-3\">
            <a href=\"https://www.google.com/maps/place/Ixelles/data=!4m2!3m1!1s0x47c3c49d464cf871:0x6ad2d087c927be75?sa=X&ved=2ahUKEwitz-X6kbL5AhUlM-wKHZvsBCMQ8gF6BAgFEAE\"
               target=\"_blank\">
                <img src=\"{{ asset('build/images/google_map.svg') }}\" alt=\"location\" height=\"40\" width=\"40\">
            </a>
        </div>
        <div class=\"navbar-brand me-0\">
            <a href=\"https://maruan.tech\" target=\"_blank\">
                <img class=\"rounded-circle border border-800\" height=\"40\"
                     src=\"{{ asset('build/images/1650055502528.jpeg') }}\" alt=\"picture_photo\">
            </a>
        </div>
    </nav>
    <!--end::navbar-->
    <!--begin::google search bar-->
    <div class=\"row g-0 position-absolute top-50 start-50 translate-middle\">
        <div class=\"col-md-12 d-flex justify-content-center mb-5\">
            <img src=\"{{ asset('build/images/google_logo.svg') }}\" class=\"float-start\" alt=\"google_logo\" width=\"120\"
                 height=\"120\">
            <p class=\"text-gray-800 fw-bold ps-1 h6 pt-lg-6\">Belgium</p>
        </div>
        <div class=\"col-12\">
            {{ form_start(form) }}
            <div class=\"input-group input-group-solid\">
                <span class=\"input-group-text rounded-circle-20 border-left-0 px-3 py-3\">
                    <button class=\"inherent-button\">
                        <img src=\"{{ asset('build/images/google_search.png') }}\"
                             alt=\"search_icon\" height=\"40\">
                    </button>
                </span>
                {{ form_widget(form.query, {'attr': {'class': 'rounded-0 fw-bolder', placeholder: 'Type something..'}}) }}
                <span class=\"input-group-text rounded-circle-20 px-4 py-3\">
                    <a href=\"#\">
                        <img src=\"{{ asset('build/images/google_micro.png') }}\" alt=\"\" height=\"30\">
                    </a>
                </span>
            </div>
            {{ form_end(form) }}
        </div>

        <div class=\"col-12 text-center py-5\">
            <a href=\"https://maruan.tech/contact\" target=\"_blank\"
               class=\"btn btn-secondary me-2 mb-2 text-center fw-semibold p-3 rounded\"> <img src=\"{{ asset('build/images/babyangel.svg') }}\" alt=\"\" height=\"30\" class=\"pe-4\">I'm Feeling Lucky!</a>
        </div>
    </div>
    <!--end::google search bar-->
{% endblock %}", "search/index.html.twig", "/home/maruan/projects/search_engine/templates/search/index.html.twig");
    }
}
