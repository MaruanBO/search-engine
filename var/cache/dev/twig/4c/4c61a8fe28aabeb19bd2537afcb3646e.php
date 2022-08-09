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

/* form/custom_theme.html.twig */
class __TwigTemplate_ee5e9a061d238183c32aee53d86a1c02 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'money_widget' => [$this, 'block_money_widget'],
            'date_widget' => [$this, 'block_date_widget'],
            'time_widget' => [$this, 'block_time_widget'],
            'datetime_widget' => [$this, 'block_datetime_widget'],
            'dateinterval_widget' => [$this, 'block_dateinterval_widget'],
            'percent_widget' => [$this, 'block_percent_widget'],
            'form_widget_simple' => [$this, 'block_form_widget_simple'],
            'widget_attributes' => [$this, 'block_widget_attributes'],
            'button_widget' => [$this, 'block_button_widget'],
            'submit_widget' => [$this, 'block_submit_widget'],
            'checkbox_widget' => [$this, 'block_checkbox_widget'],
            'radio_widget' => [$this, 'block_radio_widget'],
            'choice_widget_collapsed' => [$this, 'block_choice_widget_collapsed'],
            'choice_widget_expanded' => [$this, 'block_choice_widget_expanded'],
            'form_label' => [$this, 'block_form_label'],
            'checkbox_radio_label' => [$this, 'block_checkbox_radio_label'],
            'form_row' => [$this, 'block_form_row'],
            'button_row' => [$this, 'block_button_row'],
            'form_errors' => [$this, 'block_form_errors'],
            'form_help' => [$this, 'block_form_help'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "form/custom_theme.html.twig"));

        // line 1
        echo "
";
        // line 3
        echo "
";
        // line 4
        $this->displayBlock('money_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('date_widget', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('time_widget', $context, $blocks);
        // line 91
        echo "
";
        // line 92
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 108
        echo "
";
        // line 109
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 164
        echo "
";
        // line 165
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 175
        echo "
";
        // line 176
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 192
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 199
        $this->displayBlock('button_widget', $context, $blocks);
        // line 203
        $this->displayBlock('submit_widget', $context, $blocks);
        // line 207
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 222
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 234
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 238
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 249
        echo "
";
        // line 252
        $this->displayBlock('form_label', $context, $blocks);
        // line 270
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 314
        echo "
";
        // line 317
        $this->displayBlock('form_row', $context, $blocks);
        // line 339
        $this->displayBlock('button_row', $context, $blocks);
        // line 344
        echo "
";
        // line 347
        $this->displayBlock('form_errors', $context, $blocks);
        // line 354
        echo "
";
        // line 357
        $this->displayBlock('form_help', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_money_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "money_widget"));

        // line 5
        $context["prepend"] =  !(is_string($__internal_compile_0 = (isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new RuntimeError('Variable "money_pattern" does not exist.', 5, $this->source); })())) && is_string($__internal_compile_1 = "{{") && ('' === $__internal_compile_1 || 0 === strpos($__internal_compile_0, $__internal_compile_1)));
        // line 6
        $context["append"] =  !(is_string($__internal_compile_2 = (isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new RuntimeError('Variable "money_pattern" does not exist.', 6, $this->source); })())) && is_string($__internal_compile_3 = "}}") && ('' === $__internal_compile_3 || $__internal_compile_3 === substr($__internal_compile_2, -strlen($__internal_compile_3))));
        // line 7
        if (((isset($context["prepend"]) || array_key_exists("prepend", $context) ? $context["prepend"] : (function () { throw new RuntimeError('Variable "prepend" does not exist.', 7, $this->source); })()) || (isset($context["append"]) || array_key_exists("append", $context) ? $context["append"] : (function () { throw new RuntimeError('Variable "append" does not exist.', 7, $this->source); })()))) {
            // line 8
            echo "<div class=\"input-group";
            echo twig_escape_filter($this->env, ((array_key_exists("group_class", $context)) ? (_twig_default_filter((isset($context["group_class"]) || array_key_exists("group_class", $context) ? $context["group_class"] : (function () { throw new RuntimeError('Variable "group_class" does not exist.', 8, $this->source); })()), "")) : ("")), "html", null, true);
            echo "\">";
            // line 9
            if ((isset($context["prepend"]) || array_key_exists("prepend", $context) ? $context["prepend"] : (function () { throw new RuntimeError('Variable "prepend" does not exist.', 9, $this->source); })())) {
                // line 10
                echo "<span class=\"input-group-text\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->encodeCurrency($this->env, (isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new RuntimeError('Variable "money_pattern" does not exist.', 10, $this->source); })()));
                echo "</span>";
            }
            // line 12
            $this->displayBlock("form_widget_simple", $context, $blocks);
            // line 13
            if ((isset($context["append"]) || array_key_exists("append", $context) ? $context["append"] : (function () { throw new RuntimeError('Variable "append" does not exist.', 13, $this->source); })())) {
                // line 14
                echo "<span class=\"input-group-text\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->encodeCurrency($this->env, (isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new RuntimeError('Variable "money_pattern" does not exist.', 14, $this->source); })()));
                echo "</span>";
            }
            // line 16
            echo "</div>";
        } else {
            // line 18
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 22
    public function block_date_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "date_widget"));

        // line 23
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 23, $this->source); })()) == "single_text")) {
            // line 24
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 26
            if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new RuntimeError('Variable "valid" does not exist.', 26, $this->source); })())) {
                // line 27
                echo "            ";
                $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 27, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 27)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 27), "")) : ("")) . " is-invalid"))]);
                // line 28
                $context["valid"] = true;
                // line 29
                echo "        ";
            }
            // line 30
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new RuntimeError('Variable "datetime" does not exist.', 30, $this->source); })()))) {
                // line 31
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 33
            if ( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 33, $this->source); })()) === false)) {
                // line 34
                echo "<div class=\"visually-hidden\">";
                // line 35
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "year", [], "any", false, false, false, 35), 'label');
                // line 36
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "month", [], "any", false, false, false, 36), 'label');
                // line 37
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "day", [], "any", false, false, false, 37), 'label');
                // line 38
                echo "</div>";
            }
            // line 40
            echo "<div class=\"input-group\">";
            // line 41
            echo twig_replace_filter((isset($context["date_pattern"]) || array_key_exists("date_pattern", $context) ? $context["date_pattern"] : (function () { throw new RuntimeError('Variable "date_pattern" does not exist.', 41, $this->source); })()), ["{{ year }}" =>             // line 42
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "year", [], "any", false, false, false, 42), 'widget'), "{{ month }}" =>             // line 43
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "month", [], "any", false, false, false, 43), 'widget'), "{{ day }}" =>             // line 44
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "day", [], "any", false, false, false, 44), 'widget')]);
            // line 46
            echo "</div>";
            // line 47
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new RuntimeError('Variable "datetime" does not exist.', 47, $this->source); })()))) {
                // line 48
                echo "</div>";
            }
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 53
    public function block_time_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "time_widget"));

        // line 54
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 54, $this->source); })()) == "single_text")) {
            // line 55
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 57
            if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new RuntimeError('Variable "valid" does not exist.', 57, $this->source); })())) {
                // line 58
                echo "            ";
                $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 58, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 58)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 58), "")) : ("")) . " is-invalid"))]);
                // line 59
                $context["valid"] = true;
                // line 60
                echo "        ";
            }
            // line 61
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new RuntimeError('Variable "datetime" does not exist.', 61, $this->source); })())))) {
                // line 62
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 64
            if ( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 64, $this->source); })()) === false)) {
                // line 65
                echo "<div class=\"visually-hidden\">";
                // line 66
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "hour", [], "any", false, false, false, 66), 'label');
                // line 67
                if ((isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new RuntimeError('Variable "with_minutes" does not exist.', 67, $this->source); })())) {
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "minute", [], "any", false, false, false, 67), 'label');
                }
                // line 68
                if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new RuntimeError('Variable "with_seconds" does not exist.', 68, $this->source); })())) {
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "second", [], "any", false, false, false, 68), 'label');
                }
                // line 69
                echo "</div>";
            }
            // line 71
            if (((isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new RuntimeError('Variable "with_minutes" does not exist.', 71, $this->source); })()) || (isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new RuntimeError('Variable "with_seconds" does not exist.', 71, $this->source); })()))) {
                // line 72
                echo "        <div class=\"input-group\">
    ";
            }
            // line 74
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "hour", [], "any", false, false, false, 74), 'widget');
            // line 75
            if ((isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new RuntimeError('Variable "with_minutes" does not exist.', 75, $this->source); })())) {
                // line 76
                echo "<span class=\"input-group-text\">:</span>";
                // line 77
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "minute", [], "any", false, false, false, 77), 'widget');
            }
            // line 79
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new RuntimeError('Variable "with_seconds" does not exist.', 79, $this->source); })())) {
                // line 80
                echo "<span class=\"input-group-text\">:</span>";
                // line 81
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "second", [], "any", false, false, false, 81), 'widget');
            }
            // line 83
            if (((isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new RuntimeError('Variable "with_minutes" does not exist.', 83, $this->source); })()) || (isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new RuntimeError('Variable "with_seconds" does not exist.', 83, $this->source); })()))) {
                // line 84
                echo "        </div>
    ";
            }
            // line 86
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new RuntimeError('Variable "datetime" does not exist.', 86, $this->source); })())))) {
                // line 87
                echo "</div>";
            }
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 92
    public function block_datetime_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 93
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 93, $this->source); })()) == "single_text")) {
            // line 94
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 96
            if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new RuntimeError('Variable "valid" does not exist.', 96, $this->source); })())) {
                // line 97
                echo "            ";
                $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 97, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 97)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 97), "")) : ("")) . " is-invalid"))]);
                // line 98
                $context["valid"] = true;
                // line 99
                echo "        ";
            }
            // line 100
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 101
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "date", [], "any", false, false, false, 101), 'widget', ["datetime" => true]);
            // line 102
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "date", [], "any", false, false, false, 102), 'errors');
            // line 103
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "time", [], "any", false, false, false, 103), 'widget', ["datetime" => true]);
            // line 104
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "time", [], "any", false, false, false, 104), 'errors');
            // line 105
            echo "</div>";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 109
    public function block_dateinterval_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 110
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 110, $this->source); })()) == "single_text")) {
            // line 111
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 113
            if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new RuntimeError('Variable "valid" does not exist.', 113, $this->source); })())) {
                // line 114
                echo "            ";
                $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 114, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 114)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 114), "")) : ("")) . " is-invalid"))]);
                // line 115
                $context["valid"] = true;
                // line 116
                echo "        ";
            }
            // line 117
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 118
            if ((isset($context["with_years"]) || array_key_exists("with_years", $context) ? $context["with_years"] : (function () { throw new RuntimeError('Variable "with_years" does not exist.', 118, $this->source); })())) {
                // line 119
                echo "<div class=\"col-auto mb-3\">
                    ";
                // line 120
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), "years", [], "any", false, false, false, 120), 'label');
                echo "
                    ";
                // line 121
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 121, $this->source); })()), "years", [], "any", false, false, false, 121), 'widget');
                echo "
                </div>";
            }
            // line 124
            if ((isset($context["with_months"]) || array_key_exists("with_months", $context) ? $context["with_months"] : (function () { throw new RuntimeError('Variable "with_months" does not exist.', 124, $this->source); })())) {
                // line 125
                echo "<div class=\"col-auto mb-3\">
                    ";
                // line 126
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 126, $this->source); })()), "months", [], "any", false, false, false, 126), 'label');
                echo "
                    ";
                // line 127
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 127, $this->source); })()), "months", [], "any", false, false, false, 127), 'widget');
                echo "
                </div>";
            }
            // line 130
            if ((isset($context["with_weeks"]) || array_key_exists("with_weeks", $context) ? $context["with_weeks"] : (function () { throw new RuntimeError('Variable "with_weeks" does not exist.', 130, $this->source); })())) {
                // line 131
                echo "<div class=\"col-auto mb-3\">
                    ";
                // line 132
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 132, $this->source); })()), "weeks", [], "any", false, false, false, 132), 'label');
                echo "
                    ";
                // line 133
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 133, $this->source); })()), "weeks", [], "any", false, false, false, 133), 'widget');
                echo "
                </div>";
            }
            // line 136
            if ((isset($context["with_days"]) || array_key_exists("with_days", $context) ? $context["with_days"] : (function () { throw new RuntimeError('Variable "with_days" does not exist.', 136, $this->source); })())) {
                // line 137
                echo "<div class=\"col-auto mb-3\">
                    ";
                // line 138
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 138, $this->source); })()), "days", [], "any", false, false, false, 138), 'label');
                echo "
                    ";
                // line 139
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 139, $this->source); })()), "days", [], "any", false, false, false, 139), 'widget');
                echo "
                </div>";
            }
            // line 142
            if ((isset($context["with_hours"]) || array_key_exists("with_hours", $context) ? $context["with_hours"] : (function () { throw new RuntimeError('Variable "with_hours" does not exist.', 142, $this->source); })())) {
                // line 143
                echo "<div class=\"col-auto mb-3\">
                    ";
                // line 144
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 144, $this->source); })()), "hours", [], "any", false, false, false, 144), 'label');
                echo "
                    ";
                // line 145
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 145, $this->source); })()), "hours", [], "any", false, false, false, 145), 'widget');
                echo "
                </div>";
            }
            // line 148
            if ((isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new RuntimeError('Variable "with_minutes" does not exist.', 148, $this->source); })())) {
                // line 149
                echo "<div class=\"col-auto mb-3\">
                    ";
                // line 150
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 150, $this->source); })()), "minutes", [], "any", false, false, false, 150), 'label');
                echo "
                    ";
                // line 151
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 151, $this->source); })()), "minutes", [], "any", false, false, false, 151), 'widget');
                echo "
                </div>";
            }
            // line 154
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new RuntimeError('Variable "with_seconds" does not exist.', 154, $this->source); })())) {
                // line 155
                echo "<div class=\"col-auto mb-3\">
                    ";
                // line 156
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 156, $this->source); })()), "seconds", [], "any", false, false, false, 156), 'label');
                echo "
                    ";
                // line 157
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 157, $this->source); })()), "seconds", [], "any", false, false, false, 157), 'widget');
                echo "
                </div>";
            }
            // line 160
            if ((isset($context["with_invert"]) || array_key_exists("with_invert", $context) ? $context["with_invert"] : (function () { throw new RuntimeError('Variable "with_invert" does not exist.', 160, $this->source); })())) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 160, $this->source); })()), "invert", [], "any", false, false, false, 160), 'widget');
            }
            // line 161
            echo "</div>";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 165
    public function block_percent_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 166
        if ((isset($context["symbol"]) || array_key_exists("symbol", $context) ? $context["symbol"] : (function () { throw new RuntimeError('Variable "symbol" does not exist.', 166, $this->source); })())) {
            // line 167
            echo "<div class=\"input-group\">";
            // line 168
            $this->displayBlock("form_widget_simple", $context, $blocks);
            // line 169
            echo "<span class=\"input-group-text\">";
            echo twig_escape_filter($this->env, ((array_key_exists("symbol", $context)) ? (_twig_default_filter((isset($context["symbol"]) || array_key_exists("symbol", $context) ? $context["symbol"] : (function () { throw new RuntimeError('Variable "symbol" does not exist.', 169, $this->source); })()), "%")) : ("%")), "html", null, true);
            echo "</span>
        </div>";
        } else {
            // line 172
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 176
    public function block_form_widget_simple($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 177
        if (( !array_key_exists("type", $context) || ((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 177, $this->source); })()) != "hidden"))) {
            // line 178
            $context["widget_class"] = " form-control";
            // line 179
            if ((((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 179, $this->source); })()), "")) : ("")) == "color")) {
                // line 180
                $context["widget_class"] = ((isset($context["widget_class"]) || array_key_exists("widget_class", $context) ? $context["widget_class"] : (function () { throw new RuntimeError('Variable "widget_class" does not exist.', 180, $this->source); })()) . " form-control-color");
            } elseif ((((            // line 181
array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 181, $this->source); })()), "")) : ("")) == "range")) {
                // line 182
                $context["widget_class"] = " form-range";
            }
            // line 184
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 184, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 184)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 184), "")) : ("")) . (isset($context["widget_class"]) || array_key_exists("widget_class", $context) ? $context["widget_class"] : (function () { throw new RuntimeError('Variable "widget_class" does not exist.', 184, $this->source); })())))]);
        }
        // line 186
        if ((array_key_exists("type", $context) && twig_in_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 186, $this->source); })()), [0 => "range", 1 => "color"]))) {
            // line 187
            echo "        ";
            // line 188
            echo "        ";
            $context["required"] = false;
            // line 189
            echo "    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 192
    public function block_widget_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 193
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new RuntimeError('Variable "valid" does not exist.', 193, $this->source); })())) {
            // line 194
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 194, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 194)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 194), "")) : ("")) . " is-invalid"))]);
            // line 195
            echo "    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 199
    public function block_button_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button_widget"));

        // line 200
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 200, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 200)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 200), "btn-secondary")) : ("btn-secondary")) . " btn"))]);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 203
    public function block_submit_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "submit_widget"));

        // line 204
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 204, $this->source); })()), ["class" => twig_trim_filter(((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 204)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 204), "btn-primary")) : ("btn-primary")))]);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 207
    public function block_checkbox_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 208
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 208, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 208)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 208), "")) : ("")) . " form-check-input"))]);
        // line 209
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new RuntimeError('Variable "parent_label_class" does not exist.', 209, $this->source); })()), ((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 209)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 209), "")) : ("")))) : (((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 209)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 209), "")) : (""))));
        // line 210
        $context["row_class"] = "form-check";
        // line 211
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new RuntimeError('Variable "parent_label_class" does not exist.', 211, $this->source); })()))) {
            // line 212
            echo "        ";
            $context["row_class"] = ((isset($context["row_class"]) || array_key_exists("row_class", $context) ? $context["row_class"] : (function () { throw new RuntimeError('Variable "row_class" does not exist.', 212, $this->source); })()) . " form-check-inline");
            // line 213
            echo "    ";
        }
        // line 214
        if (twig_in_filter("checkbox-switch", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new RuntimeError('Variable "parent_label_class" does not exist.', 214, $this->source); })()))) {
            // line 215
            echo "        ";
            $context["row_class"] = ((isset($context["row_class"]) || array_key_exists("row_class", $context) ? $context["row_class"] : (function () { throw new RuntimeError('Variable "row_class" does not exist.', 215, $this->source); })()) . " form-switch");
            // line 216
            echo "    ";
        }
        // line 217
        echo "<div class=\"";
        echo twig_escape_filter($this->env, (isset($context["row_class"]) || array_key_exists("row_class", $context) ? $context["row_class"] : (function () { throw new RuntimeError('Variable "row_class" does not exist.', 217, $this->source); })()), "html", null, true);
        echo "\">";
        // line 218
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 218, $this->source); })()), 'label');
        // line 219
        echo "</div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 222
    public function block_radio_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 223
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 223, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 223)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 223), "")) : ("")) . " form-check-input"))]);
        // line 224
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new RuntimeError('Variable "parent_label_class" does not exist.', 224, $this->source); })()), ((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 224)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 224), "")) : ("")))) : (((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 224)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 224), "")) : (""))));
        // line 225
        $context["row_class"] = "form-check";
        // line 226
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new RuntimeError('Variable "parent_label_class" does not exist.', 226, $this->source); })()))) {
            // line 227
            $context["row_class"] = ((isset($context["row_class"]) || array_key_exists("row_class", $context) ? $context["row_class"] : (function () { throw new RuntimeError('Variable "row_class" does not exist.', 227, $this->source); })()) . " form-check-inline");
        }
        // line 229
        echo "<div class=\"";
        echo twig_escape_filter($this->env, (isset($context["row_class"]) || array_key_exists("row_class", $context) ? $context["row_class"] : (function () { throw new RuntimeError('Variable "row_class" does not exist.', 229, $this->source); })()), "html", null, true);
        echo "\">";
        // line 230
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 230, $this->source); })()), 'label');
        // line 231
        echo "</div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 234
    public function block_choice_widget_collapsed($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 235
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 235, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 235)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 235), "")) : ("")) . " form-select"))]);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 238
    public function block_choice_widget_expanded($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 239
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 240
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 240, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 241
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["parent_label_class" => ((twig_get_attribute($this->env, $this->source,             // line 242
($context["label_attr"] ?? null), "class", [], "any", true, true, false, 242)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 242), "")) : ("")), "translation_domain" =>             // line 243
(isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new RuntimeError('Variable "choice_translation_domain" does not exist.', 243, $this->source); })()), "valid" =>             // line 244
(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new RuntimeError('Variable "valid" does not exist.', 244, $this->source); })())]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 247
        echo "</div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 252
    public function block_form_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_label"));

        // line 253
        if ( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 253, $this->source); })()) === false)) {
            // line 254
            $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new RuntimeError('Variable "parent_label_class" does not exist.', 254, $this->source); })()), ((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 254)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 254), "")) : ("")))) : (((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 254)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 254), "")) : (""))));
            // line 255
            if ((array_key_exists("compound", $context) && (isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new RuntimeError('Variable "compound" does not exist.', 255, $this->source); })()))) {
                // line 256
                $context["element"] = "legend";
                // line 257
                if (!twig_in_filter("col-form-label", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new RuntimeError('Variable "parent_label_class" does not exist.', 257, $this->source); })()))) {
                    // line 258
                    $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 258, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 258)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 258), "")) : ("")) . " col-form-label"))]);
                }
            } else {
                // line 261
                $context["row_class"] = ((array_key_exists("row_class", $context)) ? (_twig_default_filter((isset($context["row_class"]) || array_key_exists("row_class", $context) ? $context["row_class"] : (function () { throw new RuntimeError('Variable "row_class" does not exist.', 261, $this->source); })()), ((twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 261)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 261), "")) : ("")))) : (((twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 261)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 261), "")) : (""))));
                // line 262
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 262, $this->source); })()), ["for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 262, $this->source); })())]);
                // line 263
                if (!twig_in_filter("col-form-label", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new RuntimeError('Variable "parent_label_class" does not exist.', 263, $this->source); })()))) {
                    // line 264
                    $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 264, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 264)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 264), "")) : ("")) . ((twig_in_filter("input-group", (isset($context["row_class"]) || array_key_exists("row_class", $context) ? $context["row_class"] : (function () { throw new RuntimeError('Variable "row_class" does not exist.', 264, $this->source); })()))) ? (" input-group-text") : (" form-label"))))]);
                }
            }
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 270
    public function block_checkbox_radio_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 272
        if (array_key_exists("widget", $context)) {
            // line 273
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 273, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 273)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 273), "")) : ("")) . " form-check-label"))]);
            // line 274
            if ( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new RuntimeError('Variable "compound" does not exist.', 274, $this->source); })())) {
                // line 275
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 275, $this->source); })()), ["for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 275, $this->source); })())]);
            }
            // line 277
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 277, $this->source); })())) {
                // line 278
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 278, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 278)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 278), "")) : ("")) . " required"))]);
            }
            // line 280
            if (array_key_exists("parent_label_class", $context)) {
                // line 281
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 281, $this->source); })()), ["class" => twig_trim_filter(twig_replace_filter(((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 281)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 281), "")) : ("")) . " ") . (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new RuntimeError('Variable "parent_label_class" does not exist.', 281, $this->source); })())), ["checkbox-inline" => "", "radio-inline" => ""]))]);
            }
            // line 283
            if (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 283, $this->source); })()) === false) && twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 283, $this->source); })())))) {
                // line 284
                if ( !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new RuntimeError('Variable "label_format" does not exist.', 284, $this->source); })()))) {
                    // line 285
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new RuntimeError('Variable "label_format" does not exist.', 285, $this->source); })()), ["%name%" =>                     // line 286
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 286, $this->source); })()), "%id%" =>                     // line 287
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 287, $this->source); })())]);
                } else {
                    // line 290
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 290, $this->source); })()));
                }
            }
            // line 294
            echo (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 294, $this->source); })());
            echo "
        <label";
            // line 295
            $__internal_compile_4 = $context;
            $__internal_compile_5 = ["attr" => (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 295, $this->source); })())];
            if (!twig_test_iterable($__internal_compile_5)) {
                throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 295, $this->getSourceContext());
            }
            $__internal_compile_5 = twig_to_array($__internal_compile_5);
            $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_5));
            $this->displayBlock("attributes", $context, $blocks);
            $context = $__internal_compile_4;
            echo ">";
            // line 296
            if ( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 296, $this->source); })()) === false)) {
                // line 297
                if (((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 297, $this->source); })()) === false)) {
                    // line 298
                    if (((isset($context["label_html"]) || array_key_exists("label_html", $context) ? $context["label_html"] : (function () { throw new RuntimeError('Variable "label_html" does not exist.', 298, $this->source); })()) === false)) {
                        // line 299
                        echo twig_escape_filter($this->env, (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 299, $this->source); })()), "html", null, true);
                    } else {
                        // line 301
                        echo (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 301, $this->source); })());
                    }
                } else {
                    // line 304
                    if (((isset($context["label_html"]) || array_key_exists("label_html", $context) ? $context["label_html"] : (function () { throw new RuntimeError('Variable "label_html" does not exist.', 304, $this->source); })()) === false)) {
                        // line 305
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 305, $this->source); })()), (isset($context["label_translation_parameters"]) || array_key_exists("label_translation_parameters", $context) ? $context["label_translation_parameters"] : (function () { throw new RuntimeError('Variable "label_translation_parameters" does not exist.', 305, $this->source); })()), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 305, $this->source); })())), "html", null, true);
                    } else {
                        // line 307
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 307, $this->source); })()), (isset($context["label_translation_parameters"]) || array_key_exists("label_translation_parameters", $context) ? $context["label_translation_parameters"] : (function () { throw new RuntimeError('Variable "label_translation_parameters" does not exist.', 307, $this->source); })()), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 307, $this->source); })()));
                    }
                }
            }
            // line 311
            echo "</label>";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 317
    public function block_form_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_row"));

        // line 318
        if ((array_key_exists("compound", $context) && (isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new RuntimeError('Variable "compound" does not exist.', 318, $this->source); })()))) {
            // line 319
            $context["element"] = "fieldset";
        }
        // line 321
        $context["widget_attr"] = [];
        // line 322
        if ( !twig_test_empty((isset($context["help"]) || array_key_exists("help", $context) ? $context["help"] : (function () { throw new RuntimeError('Variable "help" does not exist.', 322, $this->source); })()))) {
            // line 323
            $context["widget_attr"] = ["attr" => ["aria-describedby" => ((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 323, $this->source); })()) . "_help")]];
        }
        // line 325
        $context["row_class"] = ((array_key_exists("row_class", $context)) ? (_twig_default_filter((isset($context["row_class"]) || array_key_exists("row_class", $context) ? $context["row_class"] : (function () { throw new RuntimeError('Variable "row_class" does not exist.', 325, $this->source); })()), twig_trim_filter(((twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 325)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 325), "mb-3")) : ("mb-3"))))) : (twig_trim_filter(((twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 325)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 325), "mb-3")) : ("mb-3")))));
        // line 326
        echo "<";
        echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter((isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 326, $this->source); })()), "div")) : ("div")), "html", null, true);
        $__internal_compile_6 = $context;
        $__internal_compile_7 = ["attr" => twig_array_merge((isset($context["row_attr"]) || array_key_exists("row_attr", $context) ? $context["row_attr"] : (function () { throw new RuntimeError('Variable "row_attr" does not exist.', 326, $this->source); })()), ["class" => (isset($context["row_class"]) || array_key_exists("row_class", $context) ? $context["row_class"] : (function () { throw new RuntimeError('Variable "row_class" does not exist.', 326, $this->source); })())])];
        if (!twig_test_iterable($__internal_compile_7)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 326, $this->getSourceContext());
        }
        $__internal_compile_7 = twig_to_array($__internal_compile_7);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_7));
        $this->displayBlock("attributes", $context, $blocks);
        $context = $__internal_compile_6;
        echo ">";
        // line 327
        if (twig_in_filter("form-floating", (isset($context["row_class"]) || array_key_exists("row_class", $context) ? $context["row_class"] : (function () { throw new RuntimeError('Variable "row_class" does not exist.', 327, $this->source); })()))) {
            // line 328
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 328, $this->source); })()), 'widget', (isset($context["widget_attr"]) || array_key_exists("widget_attr", $context) ? $context["widget_attr"] : (function () { throw new RuntimeError('Variable "widget_attr" does not exist.', 328, $this->source); })()));
            // line 329
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 329, $this->source); })()), 'label');
        } else {
            // line 331
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 331, $this->source); })()), 'label');
            // line 332
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 332, $this->source); })()), 'widget', (isset($context["widget_attr"]) || array_key_exists("widget_attr", $context) ? $context["widget_attr"] : (function () { throw new RuntimeError('Variable "widget_attr" does not exist.', 332, $this->source); })()));
        }
        // line 334
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 334, $this->source); })()), 'help');
        // line 335
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 335, $this->source); })()), 'errors');
        // line 336
        echo "</";
        echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter((isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new RuntimeError('Variable "element" does not exist.', 336, $this->source); })()), "div")) : ("div")), "html", null, true);
        echo ">";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 339
    public function block_button_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button_row"));

        // line 340
        echo "<div";
        $__internal_compile_8 = $context;
        $__internal_compile_9 = ["attr" => twig_array_merge((isset($context["row_attr"]) || array_key_exists("row_attr", $context) ? $context["row_attr"] : (function () { throw new RuntimeError('Variable "row_attr" does not exist.', 340, $this->source); })()), ["class" => twig_trim_filter(((twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 340)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 340), "mb-3")) : ("mb-3")))])];
        if (!twig_test_iterable($__internal_compile_9)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 340, $this->getSourceContext());
        }
        $__internal_compile_9 = twig_to_array($__internal_compile_9);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_9));
        $this->displayBlock("attributes", $context, $blocks);
        $context = $__internal_compile_8;
        echo ">";
        // line 341
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 341, $this->source); })()), 'widget');
        // line 342
        echo "</div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 347
    public function block_form_errors($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_errors"));

        // line 348
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 348, $this->source); })())) > 0)) {
            // line 349
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 349, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 350
                echo "<div class=\"invalid-feedback d-block\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 350), "html", null, true);
                echo "</div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 357
    public function block_form_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_help"));

        // line 358
        $context["row_class"] = ((twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 358)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 358), "")) : (""));
        // line 359
        echo "    ";
        $context["help_class"] = " form-text";
        // line 360
        echo "    ";
        if (twig_in_filter("input-group", (isset($context["row_class"]) || array_key_exists("row_class", $context) ? $context["row_class"] : (function () { throw new RuntimeError('Variable "row_class" does not exist.', 360, $this->source); })()))) {
            // line 362
            $context["help_class"] = " input-group-text";
            // line 363
            echo "    ";
        }
        // line 364
        if ( !twig_test_empty((isset($context["help"]) || array_key_exists("help", $context) ? $context["help"] : (function () { throw new RuntimeError('Variable "help" does not exist.', 364, $this->source); })()))) {
            // line 365
            $context["help_attr"] = twig_array_merge((isset($context["help_attr"]) || array_key_exists("help_attr", $context) ? $context["help_attr"] : (function () { throw new RuntimeError('Variable "help_attr" does not exist.', 365, $this->source); })()), ["class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->source, ($context["help_attr"] ?? null), "class", [], "any", true, true, false, 365)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["help_attr"] ?? null), "class", [], "any", false, false, false, 365), "")) : ("")) . (isset($context["help_class"]) || array_key_exists("help_class", $context) ? $context["help_class"] : (function () { throw new RuntimeError('Variable "help_class" does not exist.', 365, $this->source); })())) . " mb-0"))]);
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "form/custom_theme.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  999 => 365,  997 => 364,  994 => 363,  992 => 362,  989 => 360,  986 => 359,  984 => 358,  977 => 357,  963 => 350,  959 => 349,  957 => 348,  950 => 347,  943 => 342,  941 => 341,  929 => 340,  922 => 339,  913 => 336,  911 => 335,  909 => 334,  906 => 332,  904 => 331,  901 => 329,  899 => 328,  897 => 327,  884 => 326,  882 => 325,  879 => 323,  877 => 322,  875 => 321,  872 => 319,  870 => 318,  863 => 317,  855 => 311,  850 => 307,  847 => 305,  845 => 304,  841 => 301,  838 => 299,  836 => 298,  834 => 297,  832 => 296,  821 => 295,  817 => 294,  813 => 290,  810 => 287,  809 => 286,  808 => 285,  806 => 284,  804 => 283,  801 => 281,  799 => 280,  796 => 278,  794 => 277,  791 => 275,  789 => 274,  787 => 273,  785 => 272,  778 => 270,  768 => 264,  766 => 263,  764 => 262,  762 => 261,  758 => 258,  756 => 257,  754 => 256,  752 => 255,  750 => 254,  748 => 253,  741 => 252,  734 => 247,  728 => 244,  727 => 243,  726 => 242,  725 => 241,  721 => 240,  717 => 239,  710 => 238,  703 => 235,  696 => 234,  689 => 231,  687 => 230,  683 => 229,  680 => 227,  678 => 226,  676 => 225,  674 => 224,  672 => 223,  665 => 222,  658 => 219,  656 => 218,  652 => 217,  649 => 216,  646 => 215,  644 => 214,  641 => 213,  638 => 212,  636 => 211,  634 => 210,  632 => 209,  630 => 208,  623 => 207,  616 => 204,  609 => 203,  602 => 200,  595 => 199,  587 => 195,  584 => 194,  582 => 193,  575 => 192,  567 => 189,  564 => 188,  562 => 187,  560 => 186,  557 => 184,  554 => 182,  552 => 181,  550 => 180,  548 => 179,  546 => 178,  544 => 177,  537 => 176,  529 => 172,  523 => 169,  521 => 168,  519 => 167,  517 => 166,  510 => 165,  502 => 161,  498 => 160,  493 => 157,  489 => 156,  486 => 155,  484 => 154,  479 => 151,  475 => 150,  472 => 149,  470 => 148,  465 => 145,  461 => 144,  458 => 143,  456 => 142,  451 => 139,  447 => 138,  444 => 137,  442 => 136,  437 => 133,  433 => 132,  430 => 131,  428 => 130,  423 => 127,  419 => 126,  416 => 125,  414 => 124,  409 => 121,  405 => 120,  402 => 119,  400 => 118,  396 => 117,  393 => 116,  391 => 115,  388 => 114,  386 => 113,  383 => 111,  381 => 110,  374 => 109,  366 => 105,  364 => 104,  362 => 103,  360 => 102,  358 => 101,  354 => 100,  351 => 99,  349 => 98,  346 => 97,  344 => 96,  341 => 94,  339 => 93,  332 => 92,  323 => 87,  321 => 86,  317 => 84,  315 => 83,  312 => 81,  310 => 80,  308 => 79,  305 => 77,  303 => 76,  301 => 75,  299 => 74,  295 => 72,  293 => 71,  290 => 69,  286 => 68,  282 => 67,  280 => 66,  278 => 65,  276 => 64,  271 => 62,  269 => 61,  266 => 60,  264 => 59,  261 => 58,  259 => 57,  256 => 55,  254 => 54,  247 => 53,  238 => 48,  236 => 47,  234 => 46,  232 => 44,  231 => 43,  230 => 42,  229 => 41,  227 => 40,  224 => 38,  222 => 37,  220 => 36,  218 => 35,  216 => 34,  214 => 33,  209 => 31,  207 => 30,  204 => 29,  202 => 28,  199 => 27,  197 => 26,  194 => 24,  192 => 23,  185 => 22,  177 => 18,  174 => 16,  169 => 14,  167 => 13,  165 => 12,  160 => 10,  158 => 9,  154 => 8,  152 => 7,  150 => 6,  148 => 5,  141 => 4,  134 => 357,  131 => 354,  129 => 347,  126 => 344,  124 => 339,  122 => 317,  119 => 314,  117 => 270,  115 => 252,  112 => 249,  110 => 238,  108 => 234,  106 => 222,  104 => 207,  102 => 203,  100 => 199,  98 => 192,  96 => 176,  93 => 175,  91 => 165,  88 => 164,  86 => 109,  83 => 108,  81 => 92,  78 => 91,  76 => 53,  73 => 52,  71 => 22,  68 => 21,  66 => 4,  63 => 3,  60 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{# Widgets #}

{% block money_widget -%}
    {%- set prepend = not (money_pattern starts with '{{') -%}
    {%- set append = not (money_pattern ends with '}}') -%}
    {%- if prepend or append -%}
        <div class=\"input-group{{ group_class|default('') }}\">
            {%- if prepend -%}
                <span class=\"input-group-text\">{{ money_pattern|form_encode_currency }}</span>
            {%- endif -%}
            {{- block('form_widget_simple') -}}
            {%- if append -%}
                <span class=\"input-group-text\">{{ money_pattern|form_encode_currency }}</span>
            {%- endif -%}
        </div>
    {%- else -%}
        {{- block('form_widget_simple') -}}
    {%- endif -%}
{%- endblock money_widget %}

{% block date_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {% if not valid %}
            {% set attr = attr|merge({class: (attr.class|default('') ~ ' is-invalid')|trim}) -%}
            {% set valid = true %}
        {% endif %}
        {%- if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
        {%- if label is not same as(false) -%}
            <div class=\"visually-hidden\">
                {{- form_label(form.year) -}}
                {{- form_label(form.month) -}}
                {{- form_label(form.day) -}}
            </div>
        {%- endif -%}
        <div class=\"input-group\">
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        </div>
        {%- if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {%- endif -%}
{%- endblock date_widget %}

{% block time_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {% if not valid %}
            {% set attr = attr|merge({class: (attr.class|default('') ~ ' is-invalid')|trim}) -%}
            {% set valid = true %}
        {% endif %}
        {%- if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {%- if label is not same as(false) -%}
            <div class=\"visually-hidden\">
                {{- form_label(form.hour) -}}
                {%- if with_minutes -%}{{ form_label(form.minute) }}{%- endif -%}
                {%- if with_seconds -%}{{ form_label(form.second) }}{%- endif -%}
            </div>
        {%- endif -%}
        {% if with_minutes or with_seconds %}
        <div class=\"input-group\">
    {% endif %}
        {{- form_widget(form.hour) -}}
        {%- if with_minutes -%}
            <span class=\"input-group-text\">:</span>
            {{- form_widget(form.minute) -}}
        {%- endif -%}
        {%- if with_seconds -%}
            <span class=\"input-group-text\">:</span>
            {{- form_widget(form.second) -}}
        {%- endif -%}
        {% if with_minutes or with_seconds %}
        </div>
    {% endif %}
        {%- if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {%- endif -%}
{%- endblock time_widget %}

{% block datetime_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {% if not valid %}
            {% set attr = attr|merge({class: (attr.class|default('') ~ ' is-invalid')|trim}) -%}
            {% set valid = true %}
        {% endif %}
        <div {{ block('widget_container_attributes') }}>
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_errors(form.date) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
            {{- form_errors(form.time) -}}
        </div>
    {%- endif -%}
{%- endblock datetime_widget %}

{% block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {% if not valid %}
            {% set attr = attr|merge({class: (attr.class|default('') ~ ' is-invalid')|trim}) -%}
            {% set valid = true %}
        {% endif %}
        <div {{ block('widget_container_attributes') }}>
            {%- if with_years -%}
                <div class=\"col-auto mb-3\">
                    {{ form_label(form.years) }}
                    {{ form_widget(form.years) }}
                </div>
            {%- endif -%}
            {%- if with_months -%}
                <div class=\"col-auto mb-3\">
                    {{ form_label(form.months) }}
                    {{ form_widget(form.months) }}
                </div>
            {%- endif -%}
            {%- if with_weeks -%}
                <div class=\"col-auto mb-3\">
                    {{ form_label(form.weeks) }}
                    {{ form_widget(form.weeks) }}
                </div>
            {%- endif -%}
            {%- if with_days -%}
                <div class=\"col-auto mb-3\">
                    {{ form_label(form.days) }}
                    {{ form_widget(form.days) }}
                </div>
            {%- endif -%}
            {%- if with_hours -%}
                <div class=\"col-auto mb-3\">
                    {{ form_label(form.hours) }}
                    {{ form_widget(form.hours) }}
                </div>
            {%- endif -%}
            {%- if with_minutes -%}
                <div class=\"col-auto mb-3\">
                    {{ form_label(form.minutes) }}
                    {{ form_widget(form.minutes) }}
                </div>
            {%- endif -%}
            {%- if with_seconds -%}
                <div class=\"col-auto mb-3\">
                    {{ form_label(form.seconds) }}
                    {{ form_widget(form.seconds) }}
                </div>
            {%- endif -%}
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget %}

{% block percent_widget -%}
    {%- if symbol -%}
        <div class=\"input-group\">
            {{- block('form_widget_simple') -}}
            <span class=\"input-group-text\">{{ symbol|default('%') }}</span>
        </div>
    {%- else -%}
        {{- block('form_widget_simple') -}}
    {%- endif -%}
{%- endblock percent_widget %}

{% block form_widget_simple -%}
    {%- if type is not defined or type != 'hidden' %}
        {%- set widget_class = ' form-control' %}
        {%- if type|default('') == 'color' -%}
            {%- set widget_class = widget_class ~ ' form-control-color' -%}
        {%- elseif type|default('') == 'range' -%}
            {%- set widget_class = ' form-range' -%}
        {%- endif -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ widget_class)|trim}) -%}
    {% endif -%}
    {%- if type is defined and type in ['range', 'color'] %}
        {# Attribute \"required\" is not supported #}
        {% set required = false %}
    {% endif -%}
{%- endblock form_widget_simple %}

{%- block widget_attributes -%}
    {%- if not valid %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' is-invalid')|trim}) %}
    {% endif -%}

{%- endblock widget_attributes -%}

{%- block button_widget -%}
    {%- set attr = attr|merge({class: (attr.class|default('btn-secondary') ~ ' btn')|trim}) -%}
{%- endblock button_widget %}

{%- block submit_widget -%}
    {%- set attr = attr|merge({class: (attr.class|default('btn-primary'))|trim}) -%}
{%- endblock submit_widget %}

{%- block checkbox_widget -%}
    {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-check-input')|trim}) -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {%- set row_class = 'form-check' -%}
    {%- if 'checkbox-inline' in parent_label_class %}
        {% set row_class = row_class ~ ' form-check-inline' %}
    {% endif -%}
    {%- if 'checkbox-switch' in parent_label_class %}
        {% set row_class = row_class ~ ' form-switch' %}
    {% endif -%}
    <div class=\"{{ row_class }}\">
        {{- form_label(form, null) -}}
    </div>
{%- endblock checkbox_widget %}

{%- block radio_widget -%}
    {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-check-input')|trim}) -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {%- set row_class = 'form-check' -%}
    {%- if 'radio-inline' in parent_label_class -%}
        {%- set row_class = row_class ~ ' form-check-inline' -%}
    {%- endif -%}
    <div class=\"{{ row_class }}\">
        {{- form_label(form, null) -}}
    </div>
{%- endblock radio_widget %}

{%- block choice_widget_collapsed -%}
    {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-select')|trim}) -%}
{%- endblock choice_widget_collapsed -%}

{%- block choice_widget_expanded -%}
    <div {{ block('widget_container_attributes') }}>
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
                valid: valid,
            }) -}}
        {% endfor -%}
    </div>
{%- endblock choice_widget_expanded %}

{# Labels #}

{%- block form_label -%}
    {% if label is not same as(false) -%}
        {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
        {%- if compound is defined and compound -%}
            {%- set element = 'legend' -%}
            {%- if 'col-form-label' not in parent_label_class -%}
                {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' col-form-label' )|trim}) -%}
            {%- endif -%}
        {%- else -%}
            {%- set row_class = row_class|default(row_attr.class|default('')) -%}
            {%- set label_attr = label_attr|merge({for: id}) -%}
            {%- if 'col-form-label' not in parent_label_class -%}
                {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ('input-group' in row_class ? ' input-group-text' : ' form-label') )|trim}) -%}
            {%- endif -%}
        {%- endif -%}
    {%- endif -%}
{%- endblock form_label %}

{%- block checkbox_radio_label -%}
    {#- Do not display the label if widget is not defined in order to prevent double label rendering -#}
    {%- if widget is defined -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' form-check-label')|trim}) -%}
        {%- if not compound -%}
            {% set label_attr = label_attr|merge({'for': id}) %}
        {%- endif -%}
        {%- if required -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) -%}
        {%- endif -%}
        {%- if parent_label_class is defined -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
        {%- endif -%}
        {%- if label is not same as(false) and label is empty -%}
            {%- if label_format is not empty -%}
                {%- set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) -%}
            {%- else -%}
                {%- set label = name|humanize -%}
            {%- endif -%}
        {%- endif -%}

        {{ widget|raw }}
        <label{% with { attr: label_attr } %}{{ block('attributes') }}{% endwith %}>
            {%- if label is not same as(false) -%}
                {%- if translation_domain is same as(false) -%}
                    {%- if label_html is same as(false) -%}
                        {{- label -}}
                    {%- else -%}
                        {{- label|raw -}}
                    {%- endif -%}
                {%- else -%}
                    {%- if label_html is same as(false) -%}
                        {{- label|trans(label_translation_parameters, translation_domain) -}}
                    {%- else -%}
                        {{- label|trans(label_translation_parameters, translation_domain)|raw -}}
                    {%- endif -%}
                {%- endif -%}
            {%- endif -%}
        </label>
    {%- endif -%}
{%- endblock checkbox_radio_label %}

{# Rows #}

{%- block form_row -%}
    {%- if compound is defined and compound -%}
        {%- set element = 'fieldset' -%}
    {%- endif -%}
    {%- set widget_attr = {} -%}
    {%- if help is not empty -%}
        {%- set widget_attr = {attr: {'aria-describedby': id ~\"_help\"}} -%}
    {%- endif -%}
    {%- set row_class = row_class|default(row_attr.class|default('mb-3')|trim) -%}
    <{{ element|default('div') }}{% with {attr: row_attr|merge({class: row_class})} %}{{ block('attributes') }}{% endwith %}>
    {%- if 'form-floating' in row_class -%}
        {{- form_widget(form, widget_attr) -}}
        {{- form_label(form) -}}
    {%- else -%}
        {{- form_label(form) -}}
        {{- form_widget(form, widget_attr) -}}
    {%- endif -%}
    {{- form_help(form) -}}
    {{- form_errors(form) -}}
    </{{ element|default('div') }}>
{%- endblock form_row %}

{%- block button_row -%}
    <div{% with {attr: row_attr|merge({class: row_attr.class|default('mb-3')|trim})} %}{{ block('attributes') }}{% endwith %}>
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{# Errors #}

{%- block form_errors -%}
    {%- if errors|length > 0 -%}
        {%- for error in errors -%}
            <div class=\"invalid-feedback d-block\">{{ error.message }}</div>
        {%- endfor -%}
    {%- endif %}
{%- endblock form_errors %}

{# Help #}

{%- block form_help -%}
    {% set row_class = row_attr.class|default('') %}
    {% set help_class = ' form-text' %}
    {% if 'input-group' in row_class %}
        {#- Hack to properly display help with input group -#}
        {% set help_class = ' input-group-text' %}
    {% endif %}
    {%- if help is not empty -%}
        {%- set help_attr = help_attr|merge({class: (help_attr.class|default('') ~ help_class ~ ' mb-0')|trim}) -%}
    {%- endif -%}
{%- endblock form_help %}
", "form/custom_theme.html.twig", "/home/maruan/projects/search_engine/templates/form/custom_theme.html.twig");
    }
}
