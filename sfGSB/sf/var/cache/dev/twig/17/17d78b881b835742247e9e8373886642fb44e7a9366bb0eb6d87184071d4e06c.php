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

/* fraisforfait/show.html.twig */
class __TwigTemplate_b13c308637b29be0ccc497c172f704cbfceb775acb9731532dd07050f8fbd3f5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'titre' => [$this, 'block_titre'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fraisforfait/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fraisforfait/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "fraisforfait/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_titre($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titre"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titre"));

        echo "Détail - Frais forfait";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "     <!-- ======= Hero Section ======= -->
  <section id=\"hero\" class=\"d-flex align-items-center\">    
      <div class=\"container\" data-aos=\"fade-up\">
          <center>
          <div class=\"section-title\">              
          <h2>Détail du frais forfait</h2>
        </div> 

    <table class=\"table\" style='color: white;'>
        
        <tbody>
            <tr>
                <th>Id :</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fraisforfait"]) || array_key_exists("fraisforfait", $context) ? $context["fraisforfait"] : (function () { throw new RuntimeError('Variable "fraisforfait" does not exist.', 19, $this->source); })()), "id", [], "any", false, false, false, 19), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom du frais forfait :</th>
                <td>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fraisforfait"]) || array_key_exists("fraisforfait", $context) ? $context["fraisforfait"] : (function () { throw new RuntimeError('Variable "fraisforfait" does not exist.', 23, $this->source); })()), "libelle", [], "any", false, false, false, 23), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Montant</th>
                <td>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fraisforfait"]) || array_key_exists("fraisforfait", $context) ? $context["fraisforfait"] : (function () { throw new RuntimeError('Variable "fraisforfait" does not exist.', 27, $this->source); })()), "montant", [], "any", false, false, false, 27), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fraisforfait_index");
        echo "\" class=\"btn-menu animated fadeInUp scrollto\">Revenir voir la liste</a>
    <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fraisforfait_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["fraisforfait"]) || array_key_exists("fraisforfait", $context) ? $context["fraisforfait"] : (function () { throw new RuntimeError('Variable "fraisforfait" does not exist.', 33, $this->source); })()), "id", [], "any", false, false, false, 33)]), "html", null, true);
        echo "\" class=\"btn-menu animated fadeInUp scrollto\">Modifier</a>
    

    
    ";
        // line 37
        echo twig_include($this->env, $context, "fraisforfait/_delete_form.html.twig");
        echo "
    
        </div>      
</section>   
    
   
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "fraisforfait/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 37,  129 => 33,  125 => 32,  117 => 27,  110 => 23,  103 => 19,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block titre %}Détail - Frais forfait{% endblock %}

{% block body %}
     <!-- ======= Hero Section ======= -->
  <section id=\"hero\" class=\"d-flex align-items-center\">    
      <div class=\"container\" data-aos=\"fade-up\">
          <center>
          <div class=\"section-title\">              
          <h2>Détail du frais forfait</h2>
        </div> 

    <table class=\"table\" style='color: white;'>
        
        <tbody>
            <tr>
                <th>Id :</th>
                <td>{{ fraisforfait.id }}</td>
            </tr>
            <tr>
                <th>Nom du frais forfait :</th>
                <td>{{ fraisforfait.libelle }}</td>
            </tr>
            <tr>
                <th>Montant</th>
                <td>{{ fraisforfait.montant }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('fraisforfait_index') }}\" class=\"btn-menu animated fadeInUp scrollto\">Revenir voir la liste</a>
    <a href=\"{{ path('fraisforfait_edit', {'id': fraisforfait.id}) }}\" class=\"btn-menu animated fadeInUp scrollto\">Modifier</a>
    

    
    {{ include('fraisforfait/_delete_form.html.twig') }}
    
        </div>      
</section>   
    
   
{% endblock %}
", "fraisforfait/show.html.twig", "C:\\wamp64\\www\\sfGSB1.0\\sf\\templates\\fraisforfait\\show.html.twig");
    }
}
