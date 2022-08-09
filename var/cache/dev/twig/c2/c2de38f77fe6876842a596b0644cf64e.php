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

/* base.html.twig */
class __TwigTemplate_4b7dbf117c2d91f216217fd943290372 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>

<html lang=\"en\" class=\"h-100\">

<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"icon\"
          href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "
    ";
        // line 19
        $this->displayBlock('javascripts', $context, $blocks);
        // line 26
        echo "
</head>

<body class=\"d-flex flex-column h-100\">

<main class=\"flex-shrink-0\">
    <div class=\"container-fluid p-4\">
        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "    </div>
</main>

";
        // line 37
        $this->displayBlock('footer', $context, $blocks);
        // line 75
        echo "
</body>

</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "BKO";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\"
              integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\"
              crossorigin=\"anonymous\">
        ";
        // line 16
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 19
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 20
        echo "        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js\"
                integrity=\"sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM\"
                crossorigin=\"anonymous\"></script>

        ";
        // line 24
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 33
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 37
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 38
        echo "    <div class=\"footer mt-auto py-3 px-4\">
        <div class=\"container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between\">
            <!--begin::Location-->
            <div class=\"text-dark order-2 order-md-1 d-flex align-items-center\">
                <img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/location.svg"), "html", null, true);
        echo "\" alt=\"location\" height=\"35\" width=\"35\"
                     class=\"float-start\">
                <span class=\"text-gray-800 fw-bold ps-2\">Ixelles</span>
            </div>
            <!--end::Location-->
            <!--begin::Middle Text-->
            <div class=\"order-1 order-md-1 d-flex align-items-center ms-5\">
                <a href=\"https://www.linkedin.com/in/marouane-boukhriss-ouchab/en\"
                   class=\"text-muted fw-semibold mx-3 a-text-none\" target=\"_blank\">About</a>
                <a href=\"empty...\" class=\"text-muted fw-semibold mx-3 a-text-none \" target=\"_blank\">Advertising</a>
                <a href=\"empty too..\" class=\"text-muted fw-semibold mx-3 a-text-none\" target=\"_blank\">Business</a>
                <a href=\"coming soon..\" class=\"text-muted fw-semibold mx-3 a-text-none\" target=\"_blank\">How I created
                    it?</a>
            </div>
            <!--end::Middle Text-->
            <!--begin::Menu-->
            <ul class=\"menu menu-gray-600 fw-bw order-2\">
                <li class=\"menu-item\">
                    <div class=\"input-group input-group-solid flex-nowrap\">
                        <span class=\"input-group-text\">
                            <img src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/word_language.svg"), "html", null, true);
        echo "\" alt=\"\">
                        </span>
                        <select class=\"form-select form-select-solid me-0\"
                                data-control=\"select2\" data-placeholder=\"Select an option\">
                            <option value=\"EN\">EN</option>
                        </select>
                    </div>
                </li>
            </ul>
            <!--end::Menu-->
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  201 => 62,  178 => 42,  172 => 38,  165 => 37,  153 => 33,  144 => 24,  138 => 20,  131 => 19,  122 => 16,  117 => 13,  110 => 12,  97 => 9,  86 => 75,  84 => 37,  79 => 34,  77 => 33,  68 => 26,  66 => 19,  63 => 18,  61 => 12,  55 => 9,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>

<html lang=\"en\" class=\"h-100\">

<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>{% block title %}BKO{% endblock %}</title>
    <link rel=\"icon\"
          href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
    {% block stylesheets %}
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\"
              integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\"
              crossorigin=\"anonymous\">
        {{ encore_entry_link_tags('app') }}
    {% endblock %}

    {% block javascripts %}
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js\"
                integrity=\"sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM\"
                crossorigin=\"anonymous\"></script>

        {{ encore_entry_script_tags('app') }}
    {% endblock %}

</head>

<body class=\"d-flex flex-column h-100\">

<main class=\"flex-shrink-0\">
    <div class=\"container-fluid p-4\">
        {% block body %}{% endblock %}
    </div>
</main>

{% block footer %}
    <div class=\"footer mt-auto py-3 px-4\">
        <div class=\"container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between\">
            <!--begin::Location-->
            <div class=\"text-dark order-2 order-md-1 d-flex align-items-center\">
                <img src=\"{{ asset('build/images/location.svg') }}\" alt=\"location\" height=\"35\" width=\"35\"
                     class=\"float-start\">
                <span class=\"text-gray-800 fw-bold ps-2\">Ixelles</span>
            </div>
            <!--end::Location-->
            <!--begin::Middle Text-->
            <div class=\"order-1 order-md-1 d-flex align-items-center ms-5\">
                <a href=\"https://www.linkedin.com/in/marouane-boukhriss-ouchab/en\"
                   class=\"text-muted fw-semibold mx-3 a-text-none\" target=\"_blank\">About</a>
                <a href=\"empty...\" class=\"text-muted fw-semibold mx-3 a-text-none \" target=\"_blank\">Advertising</a>
                <a href=\"empty too..\" class=\"text-muted fw-semibold mx-3 a-text-none\" target=\"_blank\">Business</a>
                <a href=\"coming soon..\" class=\"text-muted fw-semibold mx-3 a-text-none\" target=\"_blank\">How I created
                    it?</a>
            </div>
            <!--end::Middle Text-->
            <!--begin::Menu-->
            <ul class=\"menu menu-gray-600 fw-bw order-2\">
                <li class=\"menu-item\">
                    <div class=\"input-group input-group-solid flex-nowrap\">
                        <span class=\"input-group-text\">
                            <img src=\"{{ asset('build/images/word_language.svg') }}\" alt=\"\">
                        </span>
                        <select class=\"form-select form-select-solid me-0\"
                                data-control=\"select2\" data-placeholder=\"Select an option\">
                            <option value=\"EN\">EN</option>
                        </select>
                    </div>
                </li>
            </ul>
            <!--end::Menu-->
        </div>
    </div>
{% endblock %}

</body>

</html>
", "base.html.twig", "/home/maruan/projects/search_engine/templates/base.html.twig");
    }
}
