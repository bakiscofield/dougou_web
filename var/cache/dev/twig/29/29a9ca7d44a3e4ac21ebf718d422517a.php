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

/* inscription/signup.html.twig */
class __TwigTemplate_b9169092e61eb9a318ea5b63cd46caf1 extends Template
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
        return "base_contact.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inscription/signup.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inscription/signup.html.twig"));

        $this->parent = $this->loadTemplate("base_contact.html.twig", "inscription/signup.html.twig", 1);
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

        echo "S'inscrire";
        
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
        echo "    <!--[if lte IE 9]>
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
              <h1 class=\"page-title\">S'inscrire</h1>
              <ul class=\"breadcrumb-nav\">
                <li><a href=\"/\">Accueil</a></li>
                <li>S'inscrire</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- Start Account Signup Area -->
    <div class=\"account-login section\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12\">
            <form class=\"card login-form inner-content\" method=\"post\">
              <div class=\"card-body\">
                <div class=\"title\">
                  <h3>S'inscrire</h3>
                  <p>Remplissez ce formulaire pour créer un compte gratuit.</p>
                </div>
                <div class=\"alt-option\">
                  <span class=\"small-title\"
                    >Inscrivez vous avec votre email professionnel</span
                  >
                  <a href=\"javascript:void(0)\" class=\"option-button\"
                    ><img
                      src=\"assets/images/account-login/google.png\"
                      alt=\"#\"
                    />S'inscrire avec Google
                  </a>
                </div>
                <div class=\"or\"><span>Ou</span></div>
                <div class=\"input-head\">
                  <div class=\"row\">
                    <div class=\"col-lg-6 col-12\">
                      <div class=\"form-group input-group\">
                        <label><i class=\"lni lni-user\"></i></label>
                        <input
                          class=\"form-control\"
                          type=\"text\"
                          placeholder=\"Nom\"
                          required
                        />
                      </div>
                    </div>
                    <div class=\"col-lg-6 col-12\">
                      <div class=\"form-group input-group\">
                        <label><i class=\"lni lni-envelope\"></i></label>
                        <input
                          class=\"form-control\"
                          type=\"email\"
                          placeholder=\"Email\"
                          required
                        />
                      </div>
                    </div>
                  </div>
                  <div class=\"form-group input-group\">
                    <label><i class=\"lni lni-lock-alt\"></i></label>
                    <input
                      class=\"form-control\"
                      type=\"password\"
                      placeholder=\"Mot de passe\"
                      required
                    />
                  </div>
                  <div class=\"form-group input-group\">
                    <label><i class=\"lni lni-lock-alt\"></i></label>
                    <input
                      class=\"form-control\"
                      type=\"password\"
                      placeholder=\"Confirmer le mot de passe\"
                      required
                    />
                  </div>
                </div>
                <div class=\"button\">
                  <button class=\"btn\" type=\"submit\">Créer votre compte</button>
                </div>
                <!-- <h4 class=\"create-account\">
                  Already have an account? <a href=\"signin.html\">Sign In</a>
                </h4>-->
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- End Account Signup Area -->

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
        return "inscription/signup.html.twig";
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
        return new Source("{% extends 'base_contact.html.twig' %}

{% block title %}S'inscrire{% endblock %}

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
              <h1 class=\"page-title\">S'inscrire</h1>
              <ul class=\"breadcrumb-nav\">
                <li><a href=\"/\">Accueil</a></li>
                <li>S'inscrire</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- Start Account Signup Area -->
    <div class=\"account-login section\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12\">
            <form class=\"card login-form inner-content\" method=\"post\">
              <div class=\"card-body\">
                <div class=\"title\">
                  <h3>S'inscrire</h3>
                  <p>Remplissez ce formulaire pour créer un compte gratuit.</p>
                </div>
                <div class=\"alt-option\">
                  <span class=\"small-title\"
                    >Inscrivez vous avec votre email professionnel</span
                  >
                  <a href=\"javascript:void(0)\" class=\"option-button\"
                    ><img
                      src=\"assets/images/account-login/google.png\"
                      alt=\"#\"
                    />S'inscrire avec Google
                  </a>
                </div>
                <div class=\"or\"><span>Ou</span></div>
                <div class=\"input-head\">
                  <div class=\"row\">
                    <div class=\"col-lg-6 col-12\">
                      <div class=\"form-group input-group\">
                        <label><i class=\"lni lni-user\"></i></label>
                        <input
                          class=\"form-control\"
                          type=\"text\"
                          placeholder=\"Nom\"
                          required
                        />
                      </div>
                    </div>
                    <div class=\"col-lg-6 col-12\">
                      <div class=\"form-group input-group\">
                        <label><i class=\"lni lni-envelope\"></i></label>
                        <input
                          class=\"form-control\"
                          type=\"email\"
                          placeholder=\"Email\"
                          required
                        />
                      </div>
                    </div>
                  </div>
                  <div class=\"form-group input-group\">
                    <label><i class=\"lni lni-lock-alt\"></i></label>
                    <input
                      class=\"form-control\"
                      type=\"password\"
                      placeholder=\"Mot de passe\"
                      required
                    />
                  </div>
                  <div class=\"form-group input-group\">
                    <label><i class=\"lni lni-lock-alt\"></i></label>
                    <input
                      class=\"form-control\"
                      type=\"password\"
                      placeholder=\"Confirmer le mot de passe\"
                      required
                    />
                  </div>
                </div>
                <div class=\"button\">
                  <button class=\"btn\" type=\"submit\">Créer votre compte</button>
                </div>
                <!-- <h4 class=\"create-account\">
                  Already have an account? <a href=\"signin.html\">Sign In</a>
                </h4>-->
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- End Account Signup Area -->

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
{% endblock %}", "inscription/signup.html.twig", "/home/bakiscofield/Documents/Dougou_siteweb_officiel/templates/inscription/signup.html.twig");
    }
}
