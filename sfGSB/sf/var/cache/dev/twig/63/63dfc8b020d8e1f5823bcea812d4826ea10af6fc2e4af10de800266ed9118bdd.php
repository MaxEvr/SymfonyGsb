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

/* fichefrais/show.html.twig */
class __TwigTemplate_dbf264a3144a86ee84a5431e628d7c9cdd495ff23c5702f760193ecced0fb306 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fichefrais/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fichefrais/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "fichefrais/show.html.twig", 1);
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

        echo "Détail de la Fiche frais";
        
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
        echo "    <!-- ======= Hero Section ======= -->
  <section id=\"hero\" class=\"d-flex align-items-center\">    
      <div class=\"container\" data-aos=\"fade-up\">
          <center>
          <div class=\"section-title\">              
          <h2>Détail de la fiche frais</h2>
        </div>
   

    <table class=\"table\" style='color: white;'>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fichefrai"]) || array_key_exists("fichefrai", $context) ? $context["fichefrai"] : (function () { throw new RuntimeError('Variable "fichefrai" does not exist.', 19, $this->source); })()), "id", [], "any", false, false, false, 19), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Mois</th>
                <td>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fichefrai"]) || array_key_exists("fichefrai", $context) ? $context["fichefrai"] : (function () { throw new RuntimeError('Variable "fichefrai" does not exist.', 23, $this->source); })()), "mois", [], "any", false, false, false, 23), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre de justificatifs</th>
                <td>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fichefrai"]) || array_key_exists("fichefrai", $context) ? $context["fichefrai"] : (function () { throw new RuntimeError('Variable "fichefrai" does not exist.', 27, $this->source); })()), "nbjustificatifs", [], "any", false, false, false, 27), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Montant valide</th>
                <td>";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fichefrai"]) || array_key_exists("fichefrai", $context) ? $context["fichefrai"] : (function () { throw new RuntimeError('Variable "fichefrai" does not exist.', 31, $this->source); })()), "montantvalide", [], "any", false, false, false, 31), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>";
        // line 35
        ((twig_get_attribute($this->env, $this->source, (isset($context["fichefrai"]) || array_key_exists("fichefrai", $context) ? $context["fichefrai"] : (function () { throw new RuntimeError('Variable "fichefrai" does not exist.', 35, $this->source); })()), "datemodif", [], "any", false, false, false, 35)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fichefrai"]) || array_key_exists("fichefrai", $context) ? $context["fichefrai"] : (function () { throw new RuntimeError('Variable "fichefrai" does not exist.', 35, $this->source); })()), "datemodif", [], "any", false, false, false, 35), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>ID état</th>
                <td>";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["fichefrai"]) || array_key_exists("fichefrai", $context) ? $context["fichefrai"] : (function () { throw new RuntimeError('Variable "fichefrai" does not exist.', 39, $this->source); })()), "idetat", [], "any", false, false, false, 39), "id", [], "any", false, false, false, 39), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>ID Utilisateur</th>
                <td>";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["fichefrai"]) || array_key_exists("fichefrai", $context) ? $context["fichefrai"] : (function () { throw new RuntimeError('Variable "fichefrai" does not exist.', 43, $this->source); })()), "idutilisateur", [], "any", false, false, false, 43), "id", [], "any", false, false, false, 43), "html", null, true);
        echo "</td>
            </tr>
            
        </tbody>
    </table>

   <br/>
   <a href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fichefrais_index");
        echo "\" class=\"btn-menu animated fadeInUp scrollto\">Revenir voir la liste</a>
    <a href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fichefrais_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["fichefrai"]) || array_key_exists("fichefrai", $context) ? $context["fichefrai"] : (function () { throw new RuntimeError('Variable "fichefrai" does not exist.', 51, $this->source); })()), "id", [], "any", false, false, false, 51)]), "html", null, true);
        echo "\" class=\"btn-menu animated fadeInUp scrollto\">Modifier</a>
 

    ";
        // line 54
        echo twig_include($this->env, $context, "fichefrais/_delete_form.html.twig");
        echo "
          </center>
      </div>
  </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "fichefrais/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 54,  159 => 51,  155 => 50,  145 => 43,  138 => 39,  131 => 35,  124 => 31,  117 => 27,  110 => 23,  103 => 19,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block titre %}Détail de la Fiche frais{% endblock %}

{% block body %}
    <!-- ======= Hero Section ======= -->
  <section id=\"hero\" class=\"d-flex align-items-center\">    
      <div class=\"container\" data-aos=\"fade-up\">
          <center>
          <div class=\"section-title\">              
          <h2>Détail de la fiche frais</h2>
        </div>
   

    <table class=\"table\" style='color: white;'>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ fichefrai.id }}</td>
            </tr>
            <tr>
                <th>Mois</th>
                <td>{{ fichefrai.mois }}</td>
            </tr>
            <tr>
                <th>Nombre de justificatifs</th>
                <td>{{ fichefrai.nbjustificatifs }}</td>
            </tr>
            <tr>
                <th>Montant valide</th>
                <td>{{ fichefrai.montantvalide }}</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>{{ fichefrai.datemodif ? fichefrai.datemodif|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>ID état</th>
                <td>{{ fichefrai.idetat.id }}</td>
            </tr>
            <tr>
                <th>ID Utilisateur</th>
                <td>{{ fichefrai.idutilisateur.id }}</td>
            </tr>
            
        </tbody>
    </table>

   <br/>
   <a href=\"{{ path('fichefrais_index') }}\" class=\"btn-menu animated fadeInUp scrollto\">Revenir voir la liste</a>
    <a href=\"{{ path('fichefrais_edit', {'id': fichefrai.id}) }}\" class=\"btn-menu animated fadeInUp scrollto\">Modifier</a>
 

    {{ include('fichefrais/_delete_form.html.twig') }}
          </center>
      </div>
  </section>
{% endblock %}
", "fichefrais/show.html.twig", "C:\\wamp64\\www\\sfGSB1.0\\sf\\templates\\fichefrais\\show.html.twig");
    }
}
