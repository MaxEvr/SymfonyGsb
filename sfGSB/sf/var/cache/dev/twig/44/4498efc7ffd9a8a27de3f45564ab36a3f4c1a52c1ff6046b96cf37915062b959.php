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

/* page_repartition/repartition.html.twig */
class __TwigTemplate_086ef110932a3c4fb0ca7ce6301e22f30d9fdb17cf2b5b1d6d525f1689b233d7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page_repartition/repartition.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page_repartition/repartition.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "page_repartition/repartition.html.twig", 1);
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

        echo "GSB - R??partition";
        
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
        echo "    <!-- ======= Hero Section ======= -->
  <section id=\"hero\" class=\"d-flex align-items-center\">
    <div class=\"container position-relative text-center text-lg-start\" data-aos=\"zoom-in\" data-aos-delay=\"100\">
      <div class=\"row\">
        <div class=\"col-lg-8\">
          <h1>Voici la <span>R??partition du r??seau</span></h1>
          <h2>Pour en savoir plus, cliquez en dessous !</h2>

          <div class=\"btns\">
            <a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("repartition");
        echo "\" class=\"btn-menu animated fadeInUp scrollto\">R??partition</a>
            <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("segmentation");
        echo "\" class=\"btn-book animated fadeInUp scrollto\">S??gmentation</a>
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/aboutRep.png"), "html", null, true);
        echo "\" alt=\"\">
            </div>
          </div>
          <div class=\"col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content\">
            <h3 style='color:#cda45e;'>R??partition du r??seau</h3><br/>
            <p class=\"fst-italic\">
            Chaque ??tage dispose d'une baie de brassage qui le relie par une fibre ?? la
            baie centrale de la salle serveurs.<br/><br/>
            Toutes les salles de r??union sont
            ??quip??es d'un point d'acc??s Wifi
            positionn?? par d??faut dans le VLAN
            <span style='color:#cda45e;'>\"Visiteurs\"</span> qui autorise uniquement un
            acc??s Internet.<br/><br/>
            Les portables connect??s en wifi ?? ce
            point d'acc??s re??oivent ainsi une
            adresse IP et n'ont, par cons??quent
            acc??s qu'aux <span style='color:#cda45e;'>services DHCP et DNS</span>.<br/><br/>
            <span style='color:#cda45e;'>Le point d???acc??s</span> peut ??tre configur?? ??
            la demande pour ??tre raccord?? ?? un
            VLAN pr??sent au niveau de l'??tage.<br/><br/>
            Chaque salle de r??union dispose d'un
            vid??oprojecteur, d'enceintes et d'un
            tableau num??rique interactif.<br/><br/>
            La salle <span style='color:#cda45e;'>\"D??monstration\"</span> est destin??e ??
            l'accueil des organismes de sant??
            <span style='color:#cda45e;'>(AFSSAPS notamment)</span> et des partenaires scientifiques. <br/>Elle dispose
            de paillasses et d'??quipements de laboratoire, en plus d'une salle de r??union.
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
        return "page_repartition/repartition.html.twig";
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
{% block titre %}GSB - R??partition{% endblock %}

{% block body %}
    <!-- ======= Hero Section ======= -->
  <section id=\"hero\" class=\"d-flex align-items-center\">
    <div class=\"container position-relative text-center text-lg-start\" data-aos=\"zoom-in\" data-aos-delay=\"100\">
      <div class=\"row\">
        <div class=\"col-lg-8\">
          <h1>Voici la <span>R??partition du r??seau</span></h1>
          <h2>Pour en savoir plus, cliquez en dessous !</h2>

          <div class=\"btns\">
            <a href=\"{{path('repartition') }}\" class=\"btn-menu animated fadeInUp scrollto\">R??partition</a>
            <a href=\"{{path('segmentation') }}\" class=\"btn-book animated fadeInUp scrollto\">S??gmentation</a>
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
              <img src=\"{{ asset('img/aboutRep.png') }}\" alt=\"\">
            </div>
          </div>
          <div class=\"col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content\">
            <h3 style='color:#cda45e;'>R??partition du r??seau</h3><br/>
            <p class=\"fst-italic\">
            Chaque ??tage dispose d'une baie de brassage qui le relie par une fibre ?? la
            baie centrale de la salle serveurs.<br/><br/>
            Toutes les salles de r??union sont
            ??quip??es d'un point d'acc??s Wifi
            positionn?? par d??faut dans le VLAN
            <span style='color:#cda45e;'>\"Visiteurs\"</span> qui autorise uniquement un
            acc??s Internet.<br/><br/>
            Les portables connect??s en wifi ?? ce
            point d'acc??s re??oivent ainsi une
            adresse IP et n'ont, par cons??quent
            acc??s qu'aux <span style='color:#cda45e;'>services DHCP et DNS</span>.<br/><br/>
            <span style='color:#cda45e;'>Le point d???acc??s</span> peut ??tre configur?? ??
            la demande pour ??tre raccord?? ?? un
            VLAN pr??sent au niveau de l'??tage.<br/><br/>
            Chaque salle de r??union dispose d'un
            vid??oprojecteur, d'enceintes et d'un
            tableau num??rique interactif.<br/><br/>
            La salle <span style='color:#cda45e;'>\"D??monstration\"</span> est destin??e ??
            l'accueil des organismes de sant??
            <span style='color:#cda45e;'>(AFSSAPS notamment)</span> et des partenaires scientifiques. <br/>Elle dispose
            de paillasses et d'??quipements de laboratoire, en plus d'une salle de r??union.
            </p>            
            
          </div>
        </div>          
      </div>
    </section><!-- End About Section -->

    

  </main><!-- End #main -->   
    
{% endblock %}", "page_repartition/repartition.html.twig", "C:\\wamp64\\www\\sfGSB1.0\\sf\\templates\\page_repartition\\repartition.html.twig");
    }
}
