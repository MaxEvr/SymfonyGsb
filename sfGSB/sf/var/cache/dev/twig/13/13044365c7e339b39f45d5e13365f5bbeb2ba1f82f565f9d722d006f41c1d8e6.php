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

/* page_presSI/presSI.html.twig */
class __TwigTemplate_e28e06ef93bb912c1004629ef900993e8ba0cd7388a0664418ab5824595f3aa5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page_presSI/presSI.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page_presSI/presSI.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "page_presSI/presSI.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_titre($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titre"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titre"));

        echo "GSB - Pr??sentation du SI";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<!-- ======= Hero Section ======= -->
  <section id=\"hero\" class=\"d-flex align-items-center\">
    <div class=\"container position-relative text-center text-lg-start\" data-aos=\"zoom-in\" data-aos-delay=\"100\">
      <div class=\"row\">
        <div class=\"col-lg-8\">
          <h1>Voici la pr??sentation du <span>Syst??me Informatique</span></h1>
          <h2>Pour en savoir plus, cliquez en dessous !</h2>

          <div class=\"btns\">
            <a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("equipement");
        echo "\" class=\"btn-menu animated fadeInUp scrollto\">??quipement</a>
            <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gestion");
        echo "\" class=\"btn-book animated fadeInUp scrollto\">Gestion</a>
          </div>
        </div>
        
      </div>
    </div>
  </section><!-- End Hero -->

  <main id=\"main\">

    <!-- ======= About Section ======= -->
    <section id=\"about\" class=\"about\">
      <div class=\"container\" data-aos=\"fade-up\">

        <div class=\"row\">
          <div class=\"col-lg-6 order-1 order-lg-2\" data-aos=\"zoom-in\" data-aos-delay=\"100\">
            <div class=\"about-img\">
              <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/aboutPres.jpg"), "html", null, true);
        echo "\" alt=\"\">
            </div>
          </div>
          <div class=\"col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content\">
            <h3 style='color:#cda45e;'>Le syst??me informatique</h3><br/>
            <p class=\"fst-italic\">
                Sur le site parizien, toutes les fonctions administratives <span style='color:#cda45e;'>(gestion des ressourse hum??ne,
                    comptabilit??, direction, commerciale, etc.)</span> sont pr??sentes. On trouve en outre un service laborecherche, le service juridique et le service communication.<br/><br/>
            La salle serveur occupe le 6??me ??tage du b??timent et les acc??s y sont restreints (??tage accessible par
            ascenseur ?? l'aide d'une cl?? s??curis??e, portes d'acc??s par ??skalier munies d'un lecteur de badge, sas
            d'entr??e avec gardien pr??sent 24h/24).
            </p>            
            <p>
            Les serveurs assurent les fonctions de base du r??seau <span style='color:#cda45e;'>(DHCP, DNS, Annuaire et gestion centralis??e
            des environnements)</span> et les fonctions de communication <span style='color:#cda45e;'>(Intranet, Messagerie, Agenda partag??, etc.)</span>.
            On trouve aussi de nombreuses applications m??tier <span style='color:#cda45e;'>(base d'information pharmaceutique, serveurs
            d??di??s ?? la recherche, base de donn??es des produits du laboratoire, base de donn??es des licences
            d'exploitation pharmaceutique, etc.)</span> et les fonctions plus g??n??riques de toute entreprise (Progiciel de
            Gestion Int??gr?? avec ses modules RH, GRC, etc.).</p>
            <ul>
              <li style=\"color:#cda45e;\"><i class=\"bi bi-check-circle\"></i> Un nombre croissant de serveurs est virtualis??.</li>
              <li style=\"color:#cda45e;\"><i class=\"bi bi-check-circle\"></i> Constitu?? autour de VLAN, le r??seau segmente les services de mani??re ?? fluidifier le trafic.</li>              
            </ul>
          </div>
        </div>
          <div class='row'>
            <div class=\"col-lg-12 pt-4 pt-lg-0 order-2 order-lg-1 content\">
            <p>
            Les donn??es de l'entreprises sont consid??r??es comme strat??giques et ne peuvent tol??rer ni fuite, ni
            destruction. L'ensemble des informations est r??pliqu?? quotidiennement aux Etats-Unis par un lien
            d??di??. Toutes les fonctions de redondances <span style='color:#cda45e;'>(RAID, alimentation, lien r??seau redondant, Spanningtree, clustering, etc.)</span> 
            sont mises en ??uvre pour assurer une tol??rance aux pannes maximale.
            </p>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->

    
    

  </main><!-- End #main -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "page_presSI/presSI.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 32,  103 => 15,  99 => 14,  88 => 5,  78 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block titre %}GSB - Pr??sentation du SI{% endblock %}

{% block body %}
<!-- ======= Hero Section ======= -->
  <section id=\"hero\" class=\"d-flex align-items-center\">
    <div class=\"container position-relative text-center text-lg-start\" data-aos=\"zoom-in\" data-aos-delay=\"100\">
      <div class=\"row\">
        <div class=\"col-lg-8\">
          <h1>Voici la pr??sentation du <span>Syst??me Informatique</span></h1>
          <h2>Pour en savoir plus, cliquez en dessous !</h2>

          <div class=\"btns\">
            <a href=\"{{ path('equipement') }}\" class=\"btn-menu animated fadeInUp scrollto\">??quipement</a>
            <a href=\"{{ path('gestion') }}\" class=\"btn-book animated fadeInUp scrollto\">Gestion</a>
          </div>
        </div>
        
      </div>
    </div>
  </section><!-- End Hero -->

  <main id=\"main\">

    <!-- ======= About Section ======= -->
    <section id=\"about\" class=\"about\">
      <div class=\"container\" data-aos=\"fade-up\">

        <div class=\"row\">
          <div class=\"col-lg-6 order-1 order-lg-2\" data-aos=\"zoom-in\" data-aos-delay=\"100\">
            <div class=\"about-img\">
              <img src=\"{{ asset('img/aboutPres.jpg') }}\" alt=\"\">
            </div>
          </div>
          <div class=\"col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content\">
            <h3 style='color:#cda45e;'>Le syst??me informatique</h3><br/>
            <p class=\"fst-italic\">
                Sur le site parizien, toutes les fonctions administratives <span style='color:#cda45e;'>(gestion des ressourse hum??ne,
                    comptabilit??, direction, commerciale, etc.)</span> sont pr??sentes. On trouve en outre un service laborecherche, le service juridique et le service communication.<br/><br/>
            La salle serveur occupe le 6??me ??tage du b??timent et les acc??s y sont restreints (??tage accessible par
            ascenseur ?? l'aide d'une cl?? s??curis??e, portes d'acc??s par ??skalier munies d'un lecteur de badge, sas
            d'entr??e avec gardien pr??sent 24h/24).
            </p>            
            <p>
            Les serveurs assurent les fonctions de base du r??seau <span style='color:#cda45e;'>(DHCP, DNS, Annuaire et gestion centralis??e
            des environnements)</span> et les fonctions de communication <span style='color:#cda45e;'>(Intranet, Messagerie, Agenda partag??, etc.)</span>.
            On trouve aussi de nombreuses applications m??tier <span style='color:#cda45e;'>(base d'information pharmaceutique, serveurs
            d??di??s ?? la recherche, base de donn??es des produits du laboratoire, base de donn??es des licences
            d'exploitation pharmaceutique, etc.)</span> et les fonctions plus g??n??riques de toute entreprise (Progiciel de
            Gestion Int??gr?? avec ses modules RH, GRC, etc.).</p>
            <ul>
              <li style=\"color:#cda45e;\"><i class=\"bi bi-check-circle\"></i> Un nombre croissant de serveurs est virtualis??.</li>
              <li style=\"color:#cda45e;\"><i class=\"bi bi-check-circle\"></i> Constitu?? autour de VLAN, le r??seau segmente les services de mani??re ?? fluidifier le trafic.</li>              
            </ul>
          </div>
        </div>
          <div class='row'>
            <div class=\"col-lg-12 pt-4 pt-lg-0 order-2 order-lg-1 content\">
            <p>
            Les donn??es de l'entreprises sont consid??r??es comme strat??giques et ne peuvent tol??rer ni fuite, ni
            destruction. L'ensemble des informations est r??pliqu?? quotidiennement aux Etats-Unis par un lien
            d??di??. Toutes les fonctions de redondances <span style='color:#cda45e;'>(RAID, alimentation, lien r??seau redondant, Spanningtree, clustering, etc.)</span> 
            sont mises en ??uvre pour assurer une tol??rance aux pannes maximale.
            </p>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->

    
    

  </main><!-- End #main -->
{% endblock %}
", "page_presSI/presSI.html.twig", "C:\\wamp64\\www\\sfGSB1.0\\sf\\templates\\page_presSI\\presSI.html.twig");
    }
}
