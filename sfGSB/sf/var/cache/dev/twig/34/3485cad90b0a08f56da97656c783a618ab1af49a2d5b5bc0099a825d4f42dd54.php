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

/* fichefrais/_form.html.twig */
class __TwigTemplate_cb2840cbecb50c1948dcf7e8142c12e7acd8151cfe26d74c6409cab2db6ec740 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fichefrais/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fichefrais/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start');
        echo "
    <div class=\"col-sm-4\">
        <p><b>";
        // line 3
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "mois", [], "any", false, false, false, 3), 'label');
        echo "<span style=\"color: red;\" > *</span></b></p>
        <div style=\"color:red;\">";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "mois", [], "any", false, false, false, 4), 'errors');
        echo "</div>
        ";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "mois", [], "any", false, false, false, 5), 'widget');
        echo "

    </div>
    <div class=\"col-sm-4\">
        <br/><p><b>";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "nbjustificatifs", [], "any", false, false, false, 9), 'label');
        echo "<span style=\"color: red;\" > *</span></b></p>
        <div style=\"color:red;\">";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "nbjustificatifs", [], "any", false, false, false, 10), 'errors');
        echo "</div>    
        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "nbjustificatifs", [], "any", false, false, false, 11), 'widget');
        echo "
    </div>
    <div class=\"col-sm-4\">
        <br/><p><b>";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "montantvalide", [], "any", false, false, false, 14), 'label');
        echo "<span style=\"color: red;\" > *</span></b></p>
        <div style=\"color:red;\">";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "montantvalide", [], "any", false, false, false, 15), 'errors');
        echo "</div>    
        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "montantvalide", [], "any", false, false, false, 16), 'widget');
        echo "
    </div>
    <div class=\"col-sm-4\">
        <br/><p><b>";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "datemodif", [], "any", false, false, false, 19), 'label');
        echo "<span style=\"color: red;\" > *</span></b></p>
        <div style=\"color:red;\">";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "datemodif", [], "any", false, false, false, 20), 'errors');
        echo "</div>    
        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "datemodif", [], "any", false, false, false, 21), 'widget');
        echo "
    </div>
    <div class=\"col-sm-4\">
        <br/><p><b>";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "idetat", [], "any", false, false, false, 24), 'label');
        echo "<span style=\"color: red;\" > *</span></b></p>
        <div style=\"color:red;\">";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "idetat", [], "any", false, false, false, 25), 'errors');
        echo "</div>    
        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "idetat", [], "any", false, false, false, 26), 'widget');
        echo "
    </div>
    <div class=\"col-sm-4\">
        <br/><p><b>";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "idutilisateur", [], "any", false, false, false, 29), 'label');
        echo "<span style=\"color: red;\" > *</span></b></p>
        <div style=\"color:red;\">";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "idutilisateur", [], "any", false, false, false, 30), 'errors');
        echo "</div>    
        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "idutilisateur", [], "any", false, false, false, 31), 'widget');
        echo "
    </div>
    
    <div class=\"btns\">
        <button class=\"btn-menu animated fadeInUp scrollto\" style=\"background-color: transparent;\">";
        // line 35
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 35, $this->source); })()), "Créer une fiche frais")) : ("Créer une fiche frais")), "html", null, true);
        echo "</button>            
    </div>
   
";
        // line 38
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "fichefrais/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 38,  134 => 35,  127 => 31,  123 => 30,  119 => 29,  113 => 26,  109 => 25,  105 => 24,  99 => 21,  95 => 20,  91 => 19,  85 => 16,  81 => 15,  77 => 14,  71 => 11,  67 => 10,  63 => 9,  56 => 5,  52 => 4,  48 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form) }}
    <div class=\"col-sm-4\">
        <p><b>{{ form_label(form.mois) }}<span style=\"color: red;\" > *</span></b></p>
        <div style=\"color:red;\">{{ form_errors(form.mois) }}</div>
        {{ form_widget(form.mois) }}

    </div>
    <div class=\"col-sm-4\">
        <br/><p><b>{{ form_label(form.nbjustificatifs) }}<span style=\"color: red;\" > *</span></b></p>
        <div style=\"color:red;\">{{ form_errors(form.nbjustificatifs) }}</div>    
        {{ form_widget(form.nbjustificatifs) }}
    </div>
    <div class=\"col-sm-4\">
        <br/><p><b>{{ form_label(form.montantvalide) }}<span style=\"color: red;\" > *</span></b></p>
        <div style=\"color:red;\">{{ form_errors(form.montantvalide) }}</div>    
        {{ form_widget(form.montantvalide) }}
    </div>
    <div class=\"col-sm-4\">
        <br/><p><b>{{ form_label(form.datemodif) }}<span style=\"color: red;\" > *</span></b></p>
        <div style=\"color:red;\">{{ form_errors(form.datemodif) }}</div>    
        {{ form_widget(form.datemodif) }}
    </div>
    <div class=\"col-sm-4\">
        <br/><p><b>{{ form_label(form.idetat) }}<span style=\"color: red;\" > *</span></b></p>
        <div style=\"color:red;\">{{ form_errors(form.idetat) }}</div>    
        {{ form_widget(form.idetat) }}
    </div>
    <div class=\"col-sm-4\">
        <br/><p><b>{{ form_label(form.idutilisateur) }}<span style=\"color: red;\" > *</span></b></p>
        <div style=\"color:red;\">{{ form_errors(form.idutilisateur) }}</div>    
        {{ form_widget(form.idutilisateur) }}
    </div>
    
    <div class=\"btns\">
        <button class=\"btn-menu animated fadeInUp scrollto\" style=\"background-color: transparent;\">{{ button_label|default('Créer une fiche frais') }}</button>            
    </div>
   
{{ form_end(form) }}
", "fichefrais/_form.html.twig", "C:\\wamp64\\www\\sfGSB1.0\\sf\\templates\\fichefrais\\_form.html.twig");
    }
}
