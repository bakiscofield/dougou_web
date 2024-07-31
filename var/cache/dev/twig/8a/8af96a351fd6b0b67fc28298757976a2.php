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

/* tarifs/pricing.html.twig */
class __TwigTemplate_ad574681609147cf7a39e3943f7ddfab extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base_pricing.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tarifs/pricing.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tarifs/pricing.html.twig"));

        $this->parent = $this->loadTemplate("base_pricing.html.twig", "tarifs/pricing.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Tarifs";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "     <!--[if lte IE 9]>
      <p class=\"browserupgrade\">
        You are using an <strong>outdated</strong> browser. Please
        <a href=\"https://browsehappy.com/\">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

    <!-- Preloader -->
    <div class=\"preloader\">
      <div class=\"preloader-inner\">
        <div class=\"preloader-icon\">
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!-- /End Preloader -->

    <!-- Start Header Area -->
    <header class=\"header navbar-area\">
      <div class=\"container\">
        <div class=\"row align-items-center\">
          <div class=\"col-lg-12\">
            <div class=\"nav-inner\">
              <!-- Start Navbar -->
              <nav class=\"navbar navbar-expand-lg\">
                <a class=\"navbar-brand\" href=\"/\">
                  <img src=\"assets/images/fg3.png\" alt=\"Logo\" style=\"width: 200px; height: auto;\"  />
                </a>
                <button
                  class=\"navbar-toggler mobile-menu-btn\"
                  type=\"button\"
                  data-bs-toggle=\"collapse\"
                  data-bs-target=\"#navbarSupportedContent\"
                  aria-controls=\"navbarSupportedContent\"
                  aria-expanded=\"false\"
                  aria-label=\"Toggle navigation\"
                >
                  <span class=\"toggler-icon\"></span>
                  <span class=\"toggler-icon\"></span>
                  <span class=\"toggler-icon\"></span>
                </button>
                <div
                  class=\"collapse navbar-collapse sub-menu-bar\"
                  id=\"navbarSupportedContent\"
                >
                  <ul id=\"nav\" class=\"navbar-nav ms-auto\">
                    <li class=\"nav-item\">
                      <a
                        href=\"/\"
                        class=\"active\"
                        aria-label=\"Toggle navigation\"
                        >Accueil</a
                      >
                    </li>
                    <li class=\"nav-item\">
                      <a href=\"about\" aria-label=\"Toggle navigation\"
                        >A Propos</a
                      >
                    </li>
                    <li class=\"nav-item\">
                      <a href=\"pricing\" aria-label=\"Toggle navigation\"
                        >Nos Tarifs</a
                      >
                    </li>
                    <!--<li class=\"nav-item\">
                      <a
                        class=\"dd-menu collapsed\"
                        href=\"javascript:void(0)\"
                        data-bs-toggle=\"collapse\"
                        data-bs-target=\"#submenu-1-1\"
                        aria-controls=\"navbarSupportedContent\"
                        aria-expanded=\"false\"
                        aria-label=\"Toggle navigation\"
                        >Pages</a
                      >
                      <ul class=\"sub-menu collapse\" id=\"submenu-1-1\">
                        <li class=\"nav-item\">
                          <a href=\"about-us.html\">About Us</a>
                        </li>
                        <li class=\"nav-item\">
                          <a href=\"pricing.html\">Nos Tarifs</a>
                        </li>
                        <li class=\"nav-item\">
                          <a href=\"signin.html\">Sign In</a>
                        </li>
                        <li class=\"nav-item\">
                          <a href=\"signup.html\">Sign Up</a>
                        </li>
                        <li class=\"nav-item\">
                          <a href=\"reset-password.html\">Reset Password</a>
                        </li>
                        <li class=\"nav-item\">
                          <a href=\"mail-success.html\">Mail Success</a>
                        </li>
                        <li class=\"nav-item\">
                          <a href=\"404.html\">404 Error</a>
                        </li>
                      </ul>
                    </li> -->
                    <!--<li class=\"nav-item\">
                      <a
                        class=\"dd-menu collapsed\"
                        href=\"javascript:void(0)\"
                        data-bs-toggle=\"collapse\"
                        data-bs-target=\"#submenu-1-2\"
                        aria-controls=\"navbarSupportedContent\"
                        aria-expanded=\"false\"
                        aria-label=\"Toggle navigation\"
                        >Blog</a
                      >
                      <ul class=\"sub-menu collapse\" id=\"submenu-1-2\">
                        <li class=\"nav-item\">
                          <a href=\"blog-grid.html\">Blog Grid</a>
                        </li>
                        <li class=\"nav-item\">
                          <a href=\"blog-single.html\">Blog Single</a>
                        </li>
                      </ul>
                    </li>-->
                    <li class=\"nav-item\">
                      <a href=\"contact\" aria-label=\"Toggle navigation\"
                        >Contact</a
                      >
                    </li>
                  </ul>
                </div>
                <!-- navbar collapse -->
                <div class=\"button home-btn\">
                  <a href=\"signup\" class=\"btn\">Ouvrir un compte gratuit</a>
                </div>
              </nav>
              <!-- End Navbar -->
            </div>
          </div>
        </div>
        <!-- row -->
      </div>
      <!-- container -->
    </header>
    <!-- End Header Area -->

    <!-- Start Breadcrumbs -->
    <div class=\"breadcrumbs\">
      <div class=\"container\">
        <div class=\"row align-items-center\">
          <div class=\"col-lg-6 offset-lg-3 col-md-12 col-12\">
            <div class=\"breadcrumbs-content\">
              <h1 class=\"page-title\">Nos Tarifs</h1>
              <ul class=\"breadcrumb-nav\">
                <li><a href=\"/\">Accueil</a></li>
                <li>Nos Tarifs</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- Start Pricing Table Area -->
    <section id=\"pricing\" class=\"pricing-table section\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-12\">
            <div class=\"section-title\">
              <h3 class=\"wow zoomIn\" data-wow-delay=\".2s\">Tarifs</h3>
              <h2 class=\"wow fadeInUp\" data-wow-delay=\".4s\">Prix et plans</h2>
              <p class=\"wow fadeInUp\" data-wow-delay=\".6s\">
                L’accès à la plateforme DouGou Business pour les acteurs vendeur
                ou hôtes est subordonné par / mois.
              </p>
            </div>
          </div>
        </div>
        <div class=\"row\">
          <div
            class=\"col-lg-4 col-md-6 col-12 wow fadeInUp\"
            data-wow-delay=\".4s\"
          >
            <!-- Single Table -->
            <div class=\"single-table\">
              <!-- Table Head -->
              <div class=\"table-head\">
                <h4 class=\"title\">Free</h4>
                <div class=\"price\">
                  <h2 class=\"amount\">
                    <span class=\"currency\">€</span>0<span class=\"duration\"
                      >/mois</span
                    >
                  </h2>
                </div>
              </div>
              <!-- End Table Head -->
              <!-- Start Table Content -->
              <div class=\"table-content\">
                <!-- Table List -->
                <ul class=\"table-list\">
                  <li>Commission de 10% sur toutes les activités de vente</li>
                  <li class=\"disable\">
                    Commission de 5.99% sur toutes les activités de vente
                  </li>
                  <li class=\"disable\">
                    Commission de 3.77% sur toutes les activités de vente
                  </li>
                  <li>Publications limitées à 4/mois</li>
                  <li class=\"disable\">Publications limitées à 200/mois</li>
                  <li class=\"disable\">Publications illimitées</li>
                  <li class=\"disable\">
                    Toucher un maximum de 10 000 visiteurs avec ses publications
                  </li>
                  <li class=\"disable\">
                    Toucher un nombre de visiteurs illimités avec ses
                    publications
                  </li>
                  <li class=\"disable\">
                    Présence dans les 200 premières recherches
                  </li>
                  <li class=\"disable\">
                    Présence dans les 100 premières recherches
                  </li>
                </ul>
                <!-- End Table List -->
              </div>
              <!-- End Table Content -->
              <div class=\"button\">
                <a href=\"signup\" class=\"btn\"
                  >Essai gratuit <i class=\"lni lni-arrow-right\"></i
                ></a>
              </div>
            </div>
            <!-- End Single Table-->
          </div>
          <div
            class=\"col-lg-4 col-md-6 col-12 wow fadeInUp\"
            data-wow-delay=\".6s\"
          >
            <!-- Single Table -->
            <div class=\"single-table middle\">
              <!-- Table Head -->
              <div class=\"table-head\">
                <h4 class=\"title\">Standard</h4>
                <div class=\"price\">
                  <h2 class=\"amount\">
                    <span class=\"currency\">€</span>12.97<span class=\"duration\"
                      >/mois</span
                    >
                  </h2>
                </div>
              </div>
              <!-- End Table Head -->
              <!-- Start Table Content -->
              <div class=\"table-content\">
                <!-- Table List -->
                <ul class=\"table-list\">
                  <li class=\"disable\">
                    Commission de 10% sur toutes les activités de vente
                  </li>
                  <li>Commission de 5.99% sur toutes les activités de vente</li>
                  <li class=\"disable\">
                    Commission de 3.77% sur toutes les activités de vente
                  </li>
                  <li>Publications limitées à 4/mois</li>
                  <li>Publications limitées à 200/mois</li>
                  <li class=\"disable\">Publications illimitées</li>
                  <li>
                    Toucher un maximum de 10 000 visiteurs avec ses publications
                  </li>
                  <li class=\"disable\">
                    Toucher un nombre de visiteurs illimités avec ses
                    publications
                  </li>
                  <li>Présence dans les 200 premières recherches</li>
                  <li class=\"disable\">
                    Présence dans les 100 premières recherches
                  </li>
                </ul>
                <!-- End Table List -->
              </div>
              <!-- End Table Content -->
              <div class=\"button\">
                <a href=\"signup\" class=\"btn btn-alt\"
                  >Essai gratuit <i class=\"lni lni-arrow-right\"></i
                ></a>
              </div>
            </div>
            <!-- End Single Table-->
          </div>
          <div
            class=\"col-lg-4 col-md-6 col-12 wow fadeInUp\"
            data-wow-delay=\".8s\"
          >
            <!-- Single Table -->
            <div class=\"single-table\">
              <!-- Table Head -->
              <div class=\"table-head\">
                <h4 class=\"title\">Premium</h4>
                <div class=\"price\">
                  <h2 class=\"amount\">
                    <span class=\"currency\">€</span>25.97<span class=\"duration\"
                      >/mois</span
                    >
                  </h2>
                </div>
              </div>
              <!-- End Table Head -->
              <!-- Start Table Content -->
              <div class=\"table-content\">
                <!-- Table List -->
                <ul class=\"table-list\">
                  <li class=\"disable\">
                    Commission de 10% sur toutes les activités de vente
                  </li>
                  <li class=\"disable\">
                    Commission de 5.99% sur toutes les activités de vente
                  </li>
                  <li>Commission de 3.77% sur toutes les activités de vente</li>
                  <li>Publications limitées à 4/mois</li>
                  <li>Publications limitées à 200/mois</li>
                  <li>Publications illimitées</li>
                  <li>
                    Toucher un maximum de 10 000 visiteurs avec ses publications
                  </li>
                  <li>
                    Toucher un nombre de visiteurs illimités avec ses
                    publications
                  </li>
                  <li>Présence dans les 200 premières recherches</li>
                  <li>Présence dans les 100 premières recherches</li>
                </ul>
                <!-- End Table List -->
              </div>
              <!-- End Table Content -->
              <div class=\"button\">
                <a href=\"signup\" class=\"btn\"
                  >Essai gratuit <i class=\"lni lni-arrow-right\"></i
                ></a>
              </div>
            </div>
            <!-- End Single Table-->
          </div>
        </div>
      </div>
    </section>
    <!--/ End Pricing Table Area -->

    <!-- Start Footer Area -->
    <footer class=\"footer section\">
      <!-- Start Footer Top -->
      <div class=\"footer-top\">
        <div class=\"container\">
          <div class=\"inner-content\">
            <div class=\"row\">
              <div class=\"col-lg-4 col-md-6 col-12\">
                <!-- Single Widget -->
                <div class=\"single-footer f-about\">
                  <div class=\"logo\">
                    <a href=\"/\">
                      <img src=\"assets/images/fg.png\" alt=\"#\" style=\"width: 200px; height: auto;\" /> 
                    </a>
                  </div>
                  <p>Découvrez nos réseaux sociaux pour rester connecté.</p>
                  <h4 class=\"social-title\">Suivez nous sur:</h4>
                  <ul class=\"social\">
                    <li>
                      <a href=\"javascript:void(0)\"
                        ><i class=\"lni lni-facebook-filled\"></i
                      ></a>
                    </li>
                    <li>
                      <a href=\"javascript:void(0)\"
                        ><i class=\"lni lni-instagram\"></i
                      ></a>
                    </li>
                    <li>
                      <a href=\"javascript:void(0)\"
                        ><i class=\"lni lni-twitter-original\"></i
                      ></a>
                    </li>
                    <li>
                      <a href=\"javascript:void(0)\"
                        ><i class=\"lni lni-linkedin-original\"></i
                      ></a>
                    </li>
                    <li>
                      <a href=\"javascript:void(0)\"
                        ><i class=\"lni lni-pinterest\"></i
                      ></a>
                    </li>
                    <li>
                      <a href=\"javascript:void(0)\"
                        ><i class=\"lni lni-youtube\"></i
                      ></a>
                    </li>
                  </ul>
                </div>
                <!-- End Single Widget -->
              </div>
              <div class=\"col-lg-2 col-md-6 col-12\">
                <!-- Single Widget -->
                <div class=\"single-footer f-link\">
                  <h3>Support</h3>
                  <ul>
                    <li><a href=\"javascript:void(0)\">Tarification</a></li>
                    <li><a href=\"javascript:void(0)\">A Propos</a></li>
                    <li><a href=\"javascript:void(0)\">Guides</a></li>
                  </ul>
                </div>
                <!-- End Single Widget -->
              </div>
              <div class=\"col-lg-2 col-md-6 col-12\">
                <!-- Single Widget -->
                <div class=\"single-footer f-link\">
                  <h3>Pays</h3>
                  <ul>
                    <li>
                      <a href=\"javascript:void(0)\"
                        ><img
                          src=\"assets/images/togo-svgrepo-com.svg\"
                          alt=\"#\"
                        />
                        Togo</a
                      >
                    </li>
                  </ul>
                </div>
                <!-- End Single Widget -->
              </div>
              <div class=\"col-lg-4 col-md-6 col-12\">
                <!-- Single Widget -->
                <div class=\"single-footer newsletter\">
                  <h3>S'abonner</h3>
                  <p>
                    S'abonner à notre newsletter pour avoir les dernières
                    informations.
                  </p>
                  <form
                    action=\"#\"
                    method=\"get\"
                    target=\"_blank\"
                    class=\"newsletter-form\"
                  >
                    <input
                      name=\"EMAIL\"
                      placeholder=\"Email\"
                      required=\"required\"
                      type=\"email\"
                    />
                    <div class=\"button\">
                      <button class=\"sub-btn\">
                        <i class=\"lni lni-envelope\"></i>
                      </button>
                    </div>
                  </form>
                </div>
                <!-- End Single Widget -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/ End Footer Top -->
      <div class=\"copyright-area\">
        <div class=\"container\">
          <div class=\"inner-content\">
            <div class=\"row\"></div>
          </div>
        </div>
      </div>
    </footer>
    <!--/ End Footer Area -->

    <!-- ========================= scroll-top ========================= -->
    <a href=\"#\" class=\"scroll-top\">
      <i class=\"lni lni-chevron-up\"></i>
    </a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "tarifs/pricing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base_pricing.html.twig' %}

{% block title %}Tarifs{% endblock %}

{% block body %}
     <!--[if lte IE 9]>
      <p class=\"browserupgrade\">
        You are using an <strong>outdated</strong> browser. Please
        <a href=\"https://browsehappy.com/\">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

    <!-- Preloader -->
    <div class=\"preloader\">
      <div class=\"preloader-inner\">
        <div class=\"preloader-icon\">
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!-- /End Preloader -->

    <!-- Start Header Area -->
    <header class=\"header navbar-area\">
      <div class=\"container\">
        <div class=\"row align-items-center\">
          <div class=\"col-lg-12\">
            <div class=\"nav-inner\">
              <!-- Start Navbar -->
              <nav class=\"navbar navbar-expand-lg\">
                <a class=\"navbar-brand\" href=\"/\">
                  <img src=\"assets/images/fg3.png\" alt=\"Logo\" style=\"width: 200px; height: auto;\"  />
                </a>
                <button
                  class=\"navbar-toggler mobile-menu-btn\"
                  type=\"button\"
                  data-bs-toggle=\"collapse\"
                  data-bs-target=\"#navbarSupportedContent\"
                  aria-controls=\"navbarSupportedContent\"
                  aria-expanded=\"false\"
                  aria-label=\"Toggle navigation\"
                >
                  <span class=\"toggler-icon\"></span>
                  <span class=\"toggler-icon\"></span>
                  <span class=\"toggler-icon\"></span>
                </button>
                <div
                  class=\"collapse navbar-collapse sub-menu-bar\"
                  id=\"navbarSupportedContent\"
                >
                  <ul id=\"nav\" class=\"navbar-nav ms-auto\">
                    <li class=\"nav-item\">
                      <a
                        href=\"/\"
                        class=\"active\"
                        aria-label=\"Toggle navigation\"
                        >Accueil</a
                      >
                    </li>
                    <li class=\"nav-item\">
                      <a href=\"about\" aria-label=\"Toggle navigation\"
                        >A Propos</a
                      >
                    </li>
                    <li class=\"nav-item\">
                      <a href=\"pricing\" aria-label=\"Toggle navigation\"
                        >Nos Tarifs</a
                      >
                    </li>
                    <!--<li class=\"nav-item\">
                      <a
                        class=\"dd-menu collapsed\"
                        href=\"javascript:void(0)\"
                        data-bs-toggle=\"collapse\"
                        data-bs-target=\"#submenu-1-1\"
                        aria-controls=\"navbarSupportedContent\"
                        aria-expanded=\"false\"
                        aria-label=\"Toggle navigation\"
                        >Pages</a
                      >
                      <ul class=\"sub-menu collapse\" id=\"submenu-1-1\">
                        <li class=\"nav-item\">
                          <a href=\"about-us.html\">About Us</a>
                        </li>
                        <li class=\"nav-item\">
                          <a href=\"pricing.html\">Nos Tarifs</a>
                        </li>
                        <li class=\"nav-item\">
                          <a href=\"signin.html\">Sign In</a>
                        </li>
                        <li class=\"nav-item\">
                          <a href=\"signup.html\">Sign Up</a>
                        </li>
                        <li class=\"nav-item\">
                          <a href=\"reset-password.html\">Reset Password</a>
                        </li>
                        <li class=\"nav-item\">
                          <a href=\"mail-success.html\">Mail Success</a>
                        </li>
                        <li class=\"nav-item\">
                          <a href=\"404.html\">404 Error</a>
                        </li>
                      </ul>
                    </li> -->
                    <!--<li class=\"nav-item\">
                      <a
                        class=\"dd-menu collapsed\"
                        href=\"javascript:void(0)\"
                        data-bs-toggle=\"collapse\"
                        data-bs-target=\"#submenu-1-2\"
                        aria-controls=\"navbarSupportedContent\"
                        aria-expanded=\"false\"
                        aria-label=\"Toggle navigation\"
                        >Blog</a
                      >
                      <ul class=\"sub-menu collapse\" id=\"submenu-1-2\">
                        <li class=\"nav-item\">
                          <a href=\"blog-grid.html\">Blog Grid</a>
                        </li>
                        <li class=\"nav-item\">
                          <a href=\"blog-single.html\">Blog Single</a>
                        </li>
                      </ul>
                    </li>-->
                    <li class=\"nav-item\">
                      <a href=\"contact\" aria-label=\"Toggle navigation\"
                        >Contact</a
                      >
                    </li>
                  </ul>
                </div>
                <!-- navbar collapse -->
                <div class=\"button home-btn\">
                  <a href=\"signup\" class=\"btn\">Ouvrir un compte gratuit</a>
                </div>
              </nav>
              <!-- End Navbar -->
            </div>
          </div>
        </div>
        <!-- row -->
      </div>
      <!-- container -->
    </header>
    <!-- End Header Area -->

    <!-- Start Breadcrumbs -->
    <div class=\"breadcrumbs\">
      <div class=\"container\">
        <div class=\"row align-items-center\">
          <div class=\"col-lg-6 offset-lg-3 col-md-12 col-12\">
            <div class=\"breadcrumbs-content\">
              <h1 class=\"page-title\">Nos Tarifs</h1>
              <ul class=\"breadcrumb-nav\">
                <li><a href=\"/\">Accueil</a></li>
                <li>Nos Tarifs</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- Start Pricing Table Area -->
    <section id=\"pricing\" class=\"pricing-table section\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-12\">
            <div class=\"section-title\">
              <h3 class=\"wow zoomIn\" data-wow-delay=\".2s\">Tarifs</h3>
              <h2 class=\"wow fadeInUp\" data-wow-delay=\".4s\">Prix et plans</h2>
              <p class=\"wow fadeInUp\" data-wow-delay=\".6s\">
                L’accès à la plateforme DouGou Business pour les acteurs vendeur
                ou hôtes est subordonné par / mois.
              </p>
            </div>
          </div>
        </div>
        <div class=\"row\">
          <div
            class=\"col-lg-4 col-md-6 col-12 wow fadeInUp\"
            data-wow-delay=\".4s\"
          >
            <!-- Single Table -->
            <div class=\"single-table\">
              <!-- Table Head -->
              <div class=\"table-head\">
                <h4 class=\"title\">Free</h4>
                <div class=\"price\">
                  <h2 class=\"amount\">
                    <span class=\"currency\">€</span>0<span class=\"duration\"
                      >/mois</span
                    >
                  </h2>
                </div>
              </div>
              <!-- End Table Head -->
              <!-- Start Table Content -->
              <div class=\"table-content\">
                <!-- Table List -->
                <ul class=\"table-list\">
                  <li>Commission de 10% sur toutes les activités de vente</li>
                  <li class=\"disable\">
                    Commission de 5.99% sur toutes les activités de vente
                  </li>
                  <li class=\"disable\">
                    Commission de 3.77% sur toutes les activités de vente
                  </li>
                  <li>Publications limitées à 4/mois</li>
                  <li class=\"disable\">Publications limitées à 200/mois</li>
                  <li class=\"disable\">Publications illimitées</li>
                  <li class=\"disable\">
                    Toucher un maximum de 10 000 visiteurs avec ses publications
                  </li>
                  <li class=\"disable\">
                    Toucher un nombre de visiteurs illimités avec ses
                    publications
                  </li>
                  <li class=\"disable\">
                    Présence dans les 200 premières recherches
                  </li>
                  <li class=\"disable\">
                    Présence dans les 100 premières recherches
                  </li>
                </ul>
                <!-- End Table List -->
              </div>
              <!-- End Table Content -->
              <div class=\"button\">
                <a href=\"signup\" class=\"btn\"
                  >Essai gratuit <i class=\"lni lni-arrow-right\"></i
                ></a>
              </div>
            </div>
            <!-- End Single Table-->
          </div>
          <div
            class=\"col-lg-4 col-md-6 col-12 wow fadeInUp\"
            data-wow-delay=\".6s\"
          >
            <!-- Single Table -->
            <div class=\"single-table middle\">
              <!-- Table Head -->
              <div class=\"table-head\">
                <h4 class=\"title\">Standard</h4>
                <div class=\"price\">
                  <h2 class=\"amount\">
                    <span class=\"currency\">€</span>12.97<span class=\"duration\"
                      >/mois</span
                    >
                  </h2>
                </div>
              </div>
              <!-- End Table Head -->
              <!-- Start Table Content -->
              <div class=\"table-content\">
                <!-- Table List -->
                <ul class=\"table-list\">
                  <li class=\"disable\">
                    Commission de 10% sur toutes les activités de vente
                  </li>
                  <li>Commission de 5.99% sur toutes les activités de vente</li>
                  <li class=\"disable\">
                    Commission de 3.77% sur toutes les activités de vente
                  </li>
                  <li>Publications limitées à 4/mois</li>
                  <li>Publications limitées à 200/mois</li>
                  <li class=\"disable\">Publications illimitées</li>
                  <li>
                    Toucher un maximum de 10 000 visiteurs avec ses publications
                  </li>
                  <li class=\"disable\">
                    Toucher un nombre de visiteurs illimités avec ses
                    publications
                  </li>
                  <li>Présence dans les 200 premières recherches</li>
                  <li class=\"disable\">
                    Présence dans les 100 premières recherches
                  </li>
                </ul>
                <!-- End Table List -->
              </div>
              <!-- End Table Content -->
              <div class=\"button\">
                <a href=\"signup\" class=\"btn btn-alt\"
                  >Essai gratuit <i class=\"lni lni-arrow-right\"></i
                ></a>
              </div>
            </div>
            <!-- End Single Table-->
          </div>
          <div
            class=\"col-lg-4 col-md-6 col-12 wow fadeInUp\"
            data-wow-delay=\".8s\"
          >
            <!-- Single Table -->
            <div class=\"single-table\">
              <!-- Table Head -->
              <div class=\"table-head\">
                <h4 class=\"title\">Premium</h4>
                <div class=\"price\">
                  <h2 class=\"amount\">
                    <span class=\"currency\">€</span>25.97<span class=\"duration\"
                      >/mois</span
                    >
                  </h2>
                </div>
              </div>
              <!-- End Table Head -->
              <!-- Start Table Content -->
              <div class=\"table-content\">
                <!-- Table List -->
                <ul class=\"table-list\">
                  <li class=\"disable\">
                    Commission de 10% sur toutes les activités de vente
                  </li>
                  <li class=\"disable\">
                    Commission de 5.99% sur toutes les activités de vente
                  </li>
                  <li>Commission de 3.77% sur toutes les activités de vente</li>
                  <li>Publications limitées à 4/mois</li>
                  <li>Publications limitées à 200/mois</li>
                  <li>Publications illimitées</li>
                  <li>
                    Toucher un maximum de 10 000 visiteurs avec ses publications
                  </li>
                  <li>
                    Toucher un nombre de visiteurs illimités avec ses
                    publications
                  </li>
                  <li>Présence dans les 200 premières recherches</li>
                  <li>Présence dans les 100 premières recherches</li>
                </ul>
                <!-- End Table List -->
              </div>
              <!-- End Table Content -->
              <div class=\"button\">
                <a href=\"signup\" class=\"btn\"
                  >Essai gratuit <i class=\"lni lni-arrow-right\"></i
                ></a>
              </div>
            </div>
            <!-- End Single Table-->
          </div>
        </div>
      </div>
    </section>
    <!--/ End Pricing Table Area -->

    <!-- Start Footer Area -->
    <footer class=\"footer section\">
      <!-- Start Footer Top -->
      <div class=\"footer-top\">
        <div class=\"container\">
          <div class=\"inner-content\">
            <div class=\"row\">
              <div class=\"col-lg-4 col-md-6 col-12\">
                <!-- Single Widget -->
                <div class=\"single-footer f-about\">
                  <div class=\"logo\">
                    <a href=\"/\">
                      <img src=\"assets/images/fg.png\" alt=\"#\" style=\"width: 200px; height: auto;\" /> 
                    </a>
                  </div>
                  <p>Découvrez nos réseaux sociaux pour rester connecté.</p>
                  <h4 class=\"social-title\">Suivez nous sur:</h4>
                  <ul class=\"social\">
                    <li>
                      <a href=\"javascript:void(0)\"
                        ><i class=\"lni lni-facebook-filled\"></i
                      ></a>
                    </li>
                    <li>
                      <a href=\"javascript:void(0)\"
                        ><i class=\"lni lni-instagram\"></i
                      ></a>
                    </li>
                    <li>
                      <a href=\"javascript:void(0)\"
                        ><i class=\"lni lni-twitter-original\"></i
                      ></a>
                    </li>
                    <li>
                      <a href=\"javascript:void(0)\"
                        ><i class=\"lni lni-linkedin-original\"></i
                      ></a>
                    </li>
                    <li>
                      <a href=\"javascript:void(0)\"
                        ><i class=\"lni lni-pinterest\"></i
                      ></a>
                    </li>
                    <li>
                      <a href=\"javascript:void(0)\"
                        ><i class=\"lni lni-youtube\"></i
                      ></a>
                    </li>
                  </ul>
                </div>
                <!-- End Single Widget -->
              </div>
              <div class=\"col-lg-2 col-md-6 col-12\">
                <!-- Single Widget -->
                <div class=\"single-footer f-link\">
                  <h3>Support</h3>
                  <ul>
                    <li><a href=\"javascript:void(0)\">Tarification</a></li>
                    <li><a href=\"javascript:void(0)\">A Propos</a></li>
                    <li><a href=\"javascript:void(0)\">Guides</a></li>
                  </ul>
                </div>
                <!-- End Single Widget -->
              </div>
              <div class=\"col-lg-2 col-md-6 col-12\">
                <!-- Single Widget -->
                <div class=\"single-footer f-link\">
                  <h3>Pays</h3>
                  <ul>
                    <li>
                      <a href=\"javascript:void(0)\"
                        ><img
                          src=\"assets/images/togo-svgrepo-com.svg\"
                          alt=\"#\"
                        />
                        Togo</a
                      >
                    </li>
                  </ul>
                </div>
                <!-- End Single Widget -->
              </div>
              <div class=\"col-lg-4 col-md-6 col-12\">
                <!-- Single Widget -->
                <div class=\"single-footer newsletter\">
                  <h3>S'abonner</h3>
                  <p>
                    S'abonner à notre newsletter pour avoir les dernières
                    informations.
                  </p>
                  <form
                    action=\"#\"
                    method=\"get\"
                    target=\"_blank\"
                    class=\"newsletter-form\"
                  >
                    <input
                      name=\"EMAIL\"
                      placeholder=\"Email\"
                      required=\"required\"
                      type=\"email\"
                    />
                    <div class=\"button\">
                      <button class=\"sub-btn\">
                        <i class=\"lni lni-envelope\"></i>
                      </button>
                    </div>
                  </form>
                </div>
                <!-- End Single Widget -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/ End Footer Top -->
      <div class=\"copyright-area\">
        <div class=\"container\">
          <div class=\"inner-content\">
            <div class=\"row\"></div>
          </div>
        </div>
      </div>
    </footer>
    <!--/ End Footer Area -->

    <!-- ========================= scroll-top ========================= -->
    <a href=\"#\" class=\"scroll-top\">
      <i class=\"lni lni-chevron-up\"></i>
    </a>
{% endblock %}", "tarifs/pricing.html.twig", "/home/bakiscofield/Documents/Dougou_siteweb_officiel/templates/tarifs/pricing.html.twig");
    }
}