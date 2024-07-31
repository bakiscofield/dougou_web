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

/* propos/about.html.twig */
class __TwigTemplate_c92b38a2d84a2ae5e447574624b5e97c extends Template
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
        return "base_about.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "propos/about.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "propos/about.html.twig"));

        $this->parent = $this->loadTemplate("base_about.html.twig", "propos/about.html.twig", 1);
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

        echo "APropos";
        
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
              <h1 class=\"page-title\">A Propos De Nous</h1>
              <ul class=\"breadcrumb-nav\">
                <li><a href=\"/\">Accueil</a></li>
                <li>A Propos</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- Start Features Area -->
    <section class=\"freatures section\">
      <div class=\"container\">
        <div class=\"row align-items-center\">
          <div class=\"col-lg-6 col-12\">
            <div class=\"image wow fadeInLeft\" data-wow-delay=\".3s\">
              <img src=\"assets/images/photo_2024-03-29_17-01-32.jpg\" alt=\"#\" />
            </div>
          </div>
          <div class=\"col-lg-6 col-12\">
            <div class=\"content\">
              <h3 class=\"heading wow fadeInUp\" data-wow-delay=\".5s\">
                <span>Caractéristiques principales</span>Innovation
                technologique<br />
                révolutionnaire
              </h3>
              <!-- Start Single Feature -->
              <div class=\"single-feature wow fadeInUp\" data-wow-delay=\".6s\">
                <div class=\"f-icon\">
                  <i class=\"lni lni-dashboard\"></i>
                </div>
                <h4>Hautes performances</h4>
                <p>
                  Expérience utilisateur optimale grâce à des performances exceptionnelles.
                </p>
              </div>
              <!-- End Single Feature -->
              <!-- Start Single Feature -->
              <div class=\"single-feature wow fadeInUp\" data-wow-delay=\".7s\">
                <div class=\"f-icon\">
                  <i class=\"lni lni-pencil-alt\"></i>
                </div>
                <h4>Prototypage</h4>
                <p>
                  Validation rapide des idées et amélioration continue grâce à des prototypes évolutifs.
                </p>
              </div>
              <!-- End Single Feature -->
              <!-- Start Single Feature -->
              <div class=\"single-feature wow fadeInUp\" data-wow-delay=\"0.8s\">
                <div class=\"f-icon\">
                  <i class=\"lni lni-user\"></i>
                </div>
                <h4>Personnalisation et adaptation contextuelle</h4>
                <p>
                  Offre une expérience utilisateur sur mesure en ajustant dynamiquement le contenu selon les besoins et le contexte de l'utilisateur.
                </p>
              </div>
              <!-- End Single Feature -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Features Area -->
    <div class=\"services section\" style=\"padding: 5; margin: 5\">
      <div class=\"container\" style=\"max-width: 85%; position: relative\">
        <div class=\"row\">
          <div class=\"col-12\">
            <div class=\"section-title\">
              <h3 class=\"wow zoomIn\" data-wow-delay=\".2s\">Histoire</h3>
              <h2 class=\"wow fadeInUp\" data-wow-delay=\".4s\">
                Biographie du fondateur
              </h2>
            </div>
          </div>
        </div>
        <div class=\"row\">
          <div
            class=\" wow fadeInUp\"
            data-wow-delay=\".2s\"
          >
            <div class=\"single-service\">
              <h4 class=\"text-title\"></h4>
              <p> <strong>
                Je m’appelle Hugues Bassim-swé BAMASSI , né d’une mère BARANDAO
                Lebem yem Epiphanie cuisinière de fonction et d’un père BAMASSI
                Lassindola chauffeur de taxi qui nous à quitté très tôt , 3 ans
                après ma naissance . j’ai été élevé par ma maman et ma tante .
                J’ai grandi en voyant ma maman entreprendre afin de me permettre
                d’avoir la meilleure éducation possible dans les meilleures
                écoles . Mais je fait mes premiers pas dans l’entrepreneuriat
                grâce à ma tante qui fut une guide de choix , car déjà à 11 ans
                grâce à des activités vacancières j’ai commencer à vendre de
                petits quites( patte d’entifrice , brosse à dents , montre …..)
                pour préparer ma rentrer . Inspiré par la détermination et la
                résilience de mes deux maman , après mon BAC en 2018 , je décide
                de me lancer officiellement avec ma première société H-express
                coursier une entreprise spécialisé dans le transport de colis et
                la livraison à domicile . Ce fut une expérience très marquante ,
                car j’ai a ce moment dû acquérir des compétences et me suis auto
                formé à la fois dans la gestion de projet , la planification ,
                la comptabilité de base pour une entreprise ; tout celà
                majoritairement en autodidacte ou par des forum . Celà étant ,
                H-express fut un échec en raison de l'environnement qui n’était
                pas propice pour un tel business. J’ai beaucoup appris durant
                les 3 ans où j’ai tenu à travailler dur sur ce projet .
                En outre en terme de développement personnel et de leadership , il faut noter que grâce au système traditionnel scolaire africain basé sur la compétence afin de nommer les chef de classe , j’ai eus la chance depuis la première classe du primaire à la dernière classe du lycée de toujours être le premiers de ma classe donc directement le chef de classe . Ainsi mon parcours scolaire m’a grandement permis d’acquérir des compétences en leadership , mais à ça s’ajoute les différences formation en leadership auxquelles j’ai participé. L’application efficace de ce leadership s’est révélée d’un niveau important durant mon parcours universitaire où je me suis démarqué en tant que Délégué de ma faculté , mais aussi chef projet de l’association JCI international de l’université de Kara. Mes compétences en développement personnel ont été plus développées au travers de livre de personnes de références dans le domaine entrepreneurial mais aussi historique que ne cesse de consommer afin de mûrir mon esprit d’expérience réel et pratique de personnes ressources . 
                Si ma conclusion de vrai me définir alors , je  me définirai  comme un gagnant car je gagne toujours , un résilient car j'abandonne jamais , un rageux car j’ai des compte à régler avec la vie ( en sens où je dois atteindre mes objectifs ) et un battant car aucun défis aussi dure et impossible celui-ci semble ne m'empêchera d’avancer .
                A ce jour les awards que j’ai remporté sont : 
                le prix de meilleur projet entrepreneurial 2021 organisé par le FAIEJ en collaboration avec TILITU-Lab Kara ,
                Togo Fellow ANzisha prize 2022 ( programme sur une durée de 3 ans ).
                J’aime à croire : \"rien n’est impossible qu’est ce que tu veux ?\"<br/> .</strong>
              </p>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Features Area -->

    <!-- Start Testimonials Area -->
    <section class=\"testimonials style2 section\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-12\">
            <div class=\"section-title\">
              <h3 class=\"wow zoomIn\" data-wow-delay=\".2s\">
                Retour des Clients
              </h3>
              <h2 class=\"wow fadeInUp\" data-wow-delay=\".4s\">Les témoignages</h2>
              <p class=\"wow fadeInUp\" data-wow-delay=\".6s\">
                Découvrez ce que nos clients satisfaits disent à propos de leur
                expérience exceptionnelle avec nos services.
              </p>
            </div>
          </div>
        </div>
        <div class=\"row testimonial-slider\">
          <div class=\"col-lg-6 col-12\">
            <!-- Start Single Testimonial -->
            <div class=\"single-testimonial\">
              <div class=\"inner-content\">
                <div class=\"quote-icon\">
                  <i class=\"lni lni-quotation\"></i>
                </div>
                <div class=\"text\">
                  <p>
                    “A vast number of clients decide to create dedicated
                    software is the online store. It is nothing but a website
                    with a catalog of products and the possibility.”
                  </p>
                </div>
                <div class=\"author\">
                  <img src=\"https://via.placeholder.com/100x100\" alt=\"#\" />
                  <h4 class=\"name\">
                    Somalia D Silva
                    <span class=\"deg\">Business Manager</span>
                  </h4>
                </div>
              </div>
            </div>
            <!-- End Single Testimonial -->
          </div>
          <div class=\"col-lg-6 col-12\">
            <!-- Start Single Testimonial -->
            <div class=\"single-testimonial\">
              <div class=\"inner-content\">
                <div class=\"quote-icon\">
                  <i class=\"lni lni-quotation\"></i>
                </div>
                <div class=\"text\">
                  <p>
                    “A vast number of clients decide to create dedicated
                    software is the online store. It is nothing but a website
                    with a catalog of products and the possibility.”
                  </p>
                </div>
                <div class=\"author\">
                  <img src=\"https://via.placeholder.com/100x100\" alt=\"#\" />
                  <h4 class=\"name\">
                    David Warner
                    <span class=\"deg\">Web Developer</span>
                  </h4>
                </div>
              </div>
            </div>
            <!-- End Single Testimonial -->
          </div>
          <div class=\"col-lg-6 col-12\">
            <!-- Start Single Testimonial -->
            <div class=\"single-testimonial\">
              <div class=\"inner-content\">
                <div class=\"quote-icon\">
                  <i class=\"lni lni-quotation\"></i>
                </div>
                <div class=\"text\">
                  <p>
                    “A vast number of clients decide to create dedicated
                    software is the online store. It is nothing but a website
                    with a catalog of products and the possibility.”
                  </p>
                </div>
                <div class=\"author\">
                  <img src=\"https://via.placeholder.com/100x100\" alt=\"#\" />
                  <h4 class=\"name\">
                    Jems Gilario
                    <span class=\"deg\">Graphics Designer</span>
                  </h4>
                </div>
              </div>
            </div>
            <!-- End Single Testimonial -->
          </div>
          <div class=\"col-lg-6 col-12\">
            <!-- Start Single Testimonial -->
            <div class=\"single-testimonial\">
              <div class=\"inner-content\">
                <div class=\"quote-icon\">
                  <i class=\"lni lni-quotation\"></i>
                </div>
                <div class=\"text\">
                  <p>
                    “A vast number of clients decide to create dedicated
                    software is the online store. It is nothing but a website
                    with a catalog of products and the possibility.”
                  </p>
                </div>
                <div class=\"author\">
                  <img src=\"https://via.placeholder.com/100x100\" alt=\"#\" />
                  <h4 class=\"name\">
                    David Warner
                    <span class=\"deg\">Web Developer</span>
                  </h4>
                </div>
              </div>
            </div>
            <!-- End Single Testimonial -->
          </div>
          <div class=\"col-lg-6 col-12\">
            <!-- Start Single Testimonial -->
            <div class=\"single-testimonial\">
              <div class=\"inner-content\">
                <div class=\"quote-icon\">
                  <i class=\"lni lni-quotation\"></i>
                </div>
                <div class=\"text\">
                  <p>
                    “A vast number of clients decide to create dedicated
                    software is the online store. It is nothing but a website
                    with a catalog of products and the possibility.”
                  </p>
                </div>
                <div class=\"author\">
                  <img src=\"https://via.placeholder.com/100x100\" alt=\"#\" />
                  <h4 class=\"name\">
                    Jems Gilario
                    <span class=\"deg\">Graphics Designer</span>
                  </h4>
                </div>
              </div>
            </div>
            <!-- End Single Testimonial -->
          </div>
        </div>
      </div>
    </section>
    <!-- End Testimonial Area -->

    <!-- Start Team Area -->
    <section class=\"team section\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-12\">
            <div class=\"section-title\">
              <h3 class=\"wow zoomIn\" data-wow-delay=\".2s\">Equipe DouGou</h3>
              <h2 class=\"wow fadeInUp\" data-wow-delay=\".4s\">
                Rencontrez notre équipe
              </h2>
              <p class=\"wow fadeInUp\" data-wow-delay=\".6s\">
                Notre équipe dévouée combine créativité, expertise et passion
                pour concrétiser votre projet avec excellence.
              </p>
            </div>
          </div>
        </div>
        <div class=\"row\">
          <div
            class=\"col-lg-3 col-md-6 col-12 wow fadeInUp\"
            data-wow-delay=\".3s\"
          >
            <!-- Start Single Team -->
            <div class=\"single-team\">
              <div class=\"team-image\">
                <img src=\"https://via.placeholder.com/400x400\" alt=\"#\" />
              </div>
              <div class=\"content\">
                <h4>
                  BAMASSI Hugues
                  <span>CEO DouGou</span>
                </h4>
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
                </ul>
              </div>
            </div>
            <!-- End Single Team -->
          </div>
          <div
            class=\"col-lg-3 col-md-6 col-12 wow fadeInUp\"
            data-wow-delay=\".5s\"
          >
            <!-- Start Single Team -->
            <div class=\"single-team\">
              <div class=\"team-image\">
                <img src=\"https://via.placeholder.com/400x400\" alt=\"#\" />
              </div>
              <div class=\"content\">
                <h4>
                  KELE Bernardin
                  <span>Dev Mobile</span>
                </h4>
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
                </ul>
              </div>
            </div>
            <!-- End Single Team -->
          </div>
          <div
            class=\"col-lg-3 col-md-6 col-12 wow fadeInUp\"
            data-wow-delay=\".7s\"
          >
            <!-- Start Single Team -->
            <div class=\"single-team\">
              <div class=\"team-image\">
                <img src=\"https://via.placeholder.com/400x400\" alt=\"#\" />
              </div>
              <div class=\"content\">
                <h4>
                  LAMATETOU Esaie
                  <span>Graphic Designer</span>
                </h4>
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
                </ul>
              </div>
            </div>
            <!-- End Single Team -->
          </div>
          <div
            class=\"col-lg-3 col-md-6 col-12 wow fadeInUp\"
            data-wow-delay=\".9s\"
          >
            <!-- Start Single Team -->
            <div class=\"single-team\">
              <div class=\"team-image\">
                <img src=\"https://via.placeholder.com/400x400\" alt=\"#\" />
              </div>
              <div class=\"content\">
                <h4>
                  ALAWE Nicolas
                  <span>UI Designer</span>
                </h4>
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
                </ul>
              </div>
            </div>
            <!-- End Single Team -->
          </div>
          <div
            class=\"col-lg-3 col-md-6 col-12 wow fadeInUp\"
            data-wow-delay=\".9s\"
          >
            <!-- Start Single Team -->
            <div class=\"single-team\">
              <div class=\"team-image\">
                <img src=\"https://via.placeholder.com/400x400\" alt=\"#\" />
              </div>
              <div class=\"content\">
                <h4>
                  AKAOLO Samtou
                  <span>Juriste d'entreprise</span>
                </h4>
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
                </ul>
              </div>
            </div>
            <!-- End Single Team -->
          </div>
          <div
            class=\"col-lg-3 col-md-6 col-12 wow fadeInUp\"
            data-wow-delay=\".9s\"
          >
            <!-- Start Single Team -->
            <div class=\"single-team\">
              <div class=\"team-image\">
                <img src=\"https://via.placeholder.com/400x400\" alt=\"#\" />
              </div>
              <div class=\"content\">
                <h4>
                  ANDJAO Julie
                  <span>Responsable de projet</span>
                </h4>
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
                </ul>
              </div>
            </div>
            <!-- End Single Team -->
          </div>
          <div
            class=\"col-lg-3 col-md-6 col-12 wow fadeInUp\"
            data-wow-delay=\".9s\"
          >
            <!-- Start Single Team -->
            <div class=\"single-team\">
              <div class=\"team-image\">
                <img src=\"https://via.placeholder.com/400x400\" alt=\"#\" />
              </div>
              <div class=\"content\">
                <h4>
                  HONYIGLO Wilfried
                  <span>Dev Mobile</span>
                </h4>
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
                </ul>
              </div>
            </div>
            <!-- End Single Team -->
          </div>
          <div
            class=\"col-lg-3 col-md-6 col-12 wow fadeInUp\"
            data-wow-delay=\".9s\"
          >
            <!-- Start Single Team -->
            <div class=\"single-team\">
              <div class=\"team-image\">
                <img src=\"https://via.placeholder.com/400x400\" alt=\"#\" />
              </div>
              <div class=\"content\">
                <h4>
                  WOGLO Koffi
                  <span>Dev Backend</span>
                </h4>
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
                </ul>
              </div>
            </div>
            <!-- End Single Team -->
          </div>
          <div
            class=\"col-lg-3 col-md-6 col-12 wow fadeInUp\"
            data-wow-delay=\".9s\"
          >
            <!-- Start Single Team -->
            <div class=\"single-team\">
              <div class=\"team-image\">
                <img src=\"https://via.placeholder.com/400x400\" alt=\"#\" />
              </div>
              <div class=\"content\">
                <h4>
                  AYAH Yawavi
                  <span>Analyste</span>
                </h4>
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
                </ul>
              </div>
            </div>
            <!-- End Single Team -->
          </div>
          <div
            class=\"col-lg-3 col-md-6 col-12 wow fadeInUp\"
            data-wow-delay=\".9s\"
          >
            <!-- Start Single Team -->
            <div class=\"single-team\">
              <div class=\"team-image\">
                <img src=\"https://via.placeholder.com/400x400\" alt=\"#\" />
              </div>
              <div class=\"content\">
                <h4>
                  ANDELE Koffi
                  <span>Dev FullStack</span>
                </h4>
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
                </ul>
              </div>
            </div>
            <!-- End Single Team -->
          </div>
          <div
            class=\"col-lg-3 col-md-6 col-12 wow fadeInUp\"
            data-wow-delay=\".9s\"
          >
            <!-- Start Single Team -->
            <div class=\"single-team\">
              <div class=\"team-image\">
                <img src=\"https://via.placeholder.com/400x400\" alt=\"#\" />
              </div>
              <div class=\"content\">
                <h4>
                  PAKOU Agnilonda
                  <span>Dev Backend / UI Designer</span>
                </h4>
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
                </ul>
              </div>
            </div>
            <!-- End Single Team -->
          </div>
        </div>
      </div>
    </section>
    <!--/ End Team Area -->

    <!-- Start Clients Logo Area -->
    <div class=\"client-logo\">
      <div class=\"container\">
        <div class=\"row align-items-center\">
          <div class=\"col-lg-3 col-md-3 col-12 text-center\">
            <div class=\"single-logo\">
              <img src=\"https://via.placeholder.com/200x100\" alt=\"#\" />
            </div>
          </div>
          <div class=\"col-lg-3 col-md-3 col-12 text-center\">
            <div class=\"single-logo\">
              <img src=\"https://via.placeholder.com/200x100\" alt=\"#\" />
            </div>
          </div>
          <div class=\"col-lg-3 col-md-3 col-12 text-center\">
            <div class=\"single-logo\">
              <img src=\"https://via.placeholder.com/200x100\" alt=\"#\" />
            </div>
          </div>
          <div class=\"col-lg-3 col-md-3 col-12 text-center\">
            <div class=\"single-logo\">
              <img src=\"https://via.placeholder.com/200x100\" alt=\"#\" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Clients Logo Area -->

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
        return "propos/about.html.twig";
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
        return new Source("{% extends 'base_about.html.twig' %}

{% block title %}APropos{% endblock %}

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
              <h1 class=\"page-title\">A Propos De Nous</h1>
              <ul class=\"breadcrumb-nav\">
                <li><a href=\"/\">Accueil</a></li>
                <li>A Propos</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- Start Features Area -->
    <section class=\"freatures section\">
      <div class=\"container\">
        <div class=\"row align-items-center\">
          <div class=\"col-lg-6 col-12\">
            <div class=\"image wow fadeInLeft\" data-wow-delay=\".3s\">
              <img src=\"assets/images/photo_2024-03-29_17-01-32.jpg\" alt=\"#\" />
            </div>
          </div>
          <div class=\"col-lg-6 col-12\">
            <div class=\"content\">
              <h3 class=\"heading wow fadeInUp\" data-wow-delay=\".5s\">
                <span>Caractéristiques principales</span>Innovation
                technologique<br />
                révolutionnaire
              </h3>
              <!-- Start Single Feature -->
              <div class=\"single-feature wow fadeInUp\" data-wow-delay=\".6s\">
                <div class=\"f-icon\">
                  <i class=\"lni lni-dashboard\"></i>
                </div>
                <h4>Hautes performances</h4>
                <p>
                  Expérience utilisateur optimale grâce à des performances exceptionnelles.
                </p>
              </div>
              <!-- End Single Feature -->
              <!-- Start Single Feature -->
              <div class=\"single-feature wow fadeInUp\" data-wow-delay=\".7s\">
                <div class=\"f-icon\">
                  <i class=\"lni lni-pencil-alt\"></i>
                </div>
                <h4>Prototypage</h4>
                <p>
                  Validation rapide des idées et amélioration continue grâce à des prototypes évolutifs.
                </p>
              </div>
              <!-- End Single Feature -->
              <!-- Start Single Feature -->
              <div class=\"single-feature wow fadeInUp\" data-wow-delay=\"0.8s\">
                <div class=\"f-icon\">
                  <i class=\"lni lni-user\"></i>
                </div>
                <h4>Personnalisation et adaptation contextuelle</h4>
                <p>
                  Offre une expérience utilisateur sur mesure en ajustant dynamiquement le contenu selon les besoins et le contexte de l'utilisateur.
                </p>
              </div>
              <!-- End Single Feature -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Features Area -->
    <div class=\"services section\" style=\"padding: 5; margin: 5\">
      <div class=\"container\" style=\"max-width: 85%; position: relative\">
        <div class=\"row\">
          <div class=\"col-12\">
            <div class=\"section-title\">
              <h3 class=\"wow zoomIn\" data-wow-delay=\".2s\">Histoire</h3>
              <h2 class=\"wow fadeInUp\" data-wow-delay=\".4s\">
                Biographie du fondateur
              </h2>
            </div>
          </div>
        </div>
        <div class=\"row\">
          <div
            class=\" wow fadeInUp\"
            data-wow-delay=\".2s\"
          >
            <div class=\"single-service\">
              <h4 class=\"text-title\"></h4>
              <p> <strong>
                Je m’appelle Hugues Bassim-swé BAMASSI , né d’une mère BARANDAO
                Lebem yem Epiphanie cuisinière de fonction et d’un père BAMASSI
                Lassindola chauffeur de taxi qui nous à quitté très tôt , 3 ans
                après ma naissance . j’ai été élevé par ma maman et ma tante .
                J’ai grandi en voyant ma maman entreprendre afin de me permettre
                d’avoir la meilleure éducation possible dans les meilleures
                écoles . Mais je fait mes premiers pas dans l’entrepreneuriat
                grâce à ma tante qui fut une guide de choix , car déjà à 11 ans
                grâce à des activités vacancières j’ai commencer à vendre de
                petits quites( patte d’entifrice , brosse à dents , montre …..)
                pour préparer ma rentrer . Inspiré par la détermination et la
                résilience de mes deux maman , après mon BAC en 2018 , je décide
                de me lancer officiellement avec ma première société H-express
                coursier une entreprise spécialisé dans le transport de colis et
                la livraison à domicile . Ce fut une expérience très marquante ,
                car j’ai a ce moment dû acquérir des compétences et me suis auto
                formé à la fois dans la gestion de projet , la planification ,
                la comptabilité de base pour une entreprise ; tout celà
                majoritairement en autodidacte ou par des forum . Celà étant ,
                H-express fut un échec en raison de l'environnement qui n’était
                pas propice pour un tel business. J’ai beaucoup appris durant
                les 3 ans où j’ai tenu à travailler dur sur ce projet .
                En outre en terme de développement personnel et de leadership , il faut noter que grâce au système traditionnel scolaire africain basé sur la compétence afin de nommer les chef de classe , j’ai eus la chance depuis la première classe du primaire à la dernière classe du lycée de toujours être le premiers de ma classe donc directement le chef de classe . Ainsi mon parcours scolaire m’a grandement permis d’acquérir des compétences en leadership , mais à ça s’ajoute les différences formation en leadership auxquelles j’ai participé. L’application efficace de ce leadership s’est révélée d’un niveau important durant mon parcours universitaire où je me suis démarqué en tant que Délégué de ma faculté , mais aussi chef projet de l’association JCI international de l’université de Kara. Mes compétences en développement personnel ont été plus développées au travers de livre de personnes de références dans le domaine entrepreneurial mais aussi historique que ne cesse de consommer afin de mûrir mon esprit d’expérience réel et pratique de personnes ressources . 
                Si ma conclusion de vrai me définir alors , je  me définirai  comme un gagnant car je gagne toujours , un résilient car j'abandonne jamais , un rageux car j’ai des compte à régler avec la vie ( en sens où je dois atteindre mes objectifs ) et un battant car aucun défis aussi dure et impossible celui-ci semble ne m'empêchera d’avancer .
                A ce jour les awards que j’ai remporté sont : 
                le prix de meilleur projet entrepreneurial 2021 organisé par le FAIEJ en collaboration avec TILITU-Lab Kara ,
                Togo Fellow ANzisha prize 2022 ( programme sur une durée de 3 ans ).
                J’aime à croire : \"rien n’est impossible qu’est ce que tu veux ?\"<br/> .</strong>
              </p>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Features Area -->

    <!-- Start Testimonials Area -->
    <section class=\"testimonials style2 section\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-12\">
            <div class=\"section-title\">
              <h3 class=\"wow zoomIn\" data-wow-delay=\".2s\">
                Retour des Clients
              </h3>
              <h2 class=\"wow fadeInUp\" data-wow-delay=\".4s\">Les témoignages</h2>
              <p class=\"wow fadeInUp\" data-wow-delay=\".6s\">
                Découvrez ce que nos clients satisfaits disent à propos de leur
                expérience exceptionnelle avec nos services.
              </p>
            </div>
          </div>
        </div>
        <div class=\"row testimonial-slider\">
          <div class=\"col-lg-6 col-12\">
            <!-- Start Single Testimonial -->
            <div class=\"single-testimonial\">
              <div class=\"inner-content\">
                <div class=\"quote-icon\">
                  <i class=\"lni lni-quotation\"></i>
                </div>
                <div class=\"text\">
                  <p>
                    “A vast number of clients decide to create dedicated
                    software is the online store. It is nothing but a website
                    with a catalog of products and the possibility.”
                  </p>
                </div>
                <div class=\"author\">
                  <img src=\"https://via.placeholder.com/100x100\" alt=\"#\" />
                  <h4 class=\"name\">
                    Somalia D Silva
                    <span class=\"deg\">Business Manager</span>
                  </h4>
                </div>
              </div>
            </div>
            <!-- End Single Testimonial -->
          </div>
          <div class=\"col-lg-6 col-12\">
            <!-- Start Single Testimonial -->
            <div class=\"single-testimonial\">
              <div class=\"inner-content\">
                <div class=\"quote-icon\">
                  <i class=\"lni lni-quotation\"></i>
                </div>
                <div class=\"text\">
                  <p>
                    “A vast number of clients decide to create dedicated
                    software is the online store. It is nothing but a website
                    with a catalog of products and the possibility.”
                  </p>
                </div>
                <div class=\"author\">
                  <img src=\"https://via.placeholder.com/100x100\" alt=\"#\" />
                  <h4 class=\"name\">
                    David Warner
                    <span class=\"deg\">Web Developer</span>
                  </h4>
                </div>
              </div>
            </div>
            <!-- End Single Testimonial -->
          </div>
          <div class=\"col-lg-6 col-12\">
            <!-- Start Single Testimonial -->
            <div class=\"single-testimonial\">
              <div class=\"inner-content\">
                <div class=\"quote-icon\">
                  <i class=\"lni lni-quotation\"></i>
                </div>
                <div class=\"text\">
                  <p>
                    “A vast number of clients decide to create dedicated
                    software is the online store. It is nothing but a website
                    with a catalog of products and the possibility.”
                  </p>
                </div>
                <div class=\"author\">
                  <img src=\"https://via.placeholder.com/100x100\" alt=\"#\" />
                  <h4 class=\"name\">
                    Jems Gilario
                    <span class=\"deg\">Graphics Designer</span>
                  </h4>
                </div>
              </div>
            </div>
            <!-- End Single Testimonial -->
          </div>
          <div class=\"col-lg-6 col-12\">
            <!-- Start Single Testimonial -->
            <div class=\"single-testimonial\">
              <div class=\"inner-content\">
                <div class=\"quote-icon\">
                  <i class=\"lni lni-quotation\"></i>
                </div>
                <div class=\"text\">
                  <p>
                    “A vast number of clients decide to create dedicated
                    software is the online store. It is nothing but a website
                    with a catalog of products and the possibility.”
                  </p>
                </div>
                <div class=\"author\">
                  <img src=\"https://via.placeholder.com/100x100\" alt=\"#\" />
                  <h4 class=\"name\">
                    David Warner
                    <span class=\"deg\">Web Developer</span>
                  </h4>
                </div>
              </div>
            </div>
            <!-- End Single Testimonial -->
          </div>
          <div class=\"col-lg-6 col-12\">
            <!-- Start Single Testimonial -->
            <div class=\"single-testimonial\">
              <div class=\"inner-content\">
                <div class=\"quote-icon\">
                  <i class=\"lni lni-quotation\"></i>
                </div>
                <div class=\"text\">
                  <p>
                    “A vast number of clients decide to create dedicated
                    software is the online store. It is nothing but a website
                    with a catalog of products and the possibility.”
                  </p>
                </div>
                <div class=\"author\">
                  <img src=\"https://via.placeholder.com/100x100\" alt=\"#\" />
                  <h4 class=\"name\">
                    Jems Gilario
                    <span class=\"deg\">Graphics Designer</span>
                  </h4>
                </div>
              </div>
            </div>
            <!-- End Single Testimonial -->
          </div>
        </div>
      </div>
    </section>
    <!-- End Testimonial Area -->

    <!-- Start Team Area -->
    <section class=\"team section\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-12\">
            <div class=\"section-title\">
              <h3 class=\"wow zoomIn\" data-wow-delay=\".2s\">Equipe DouGou</h3>
              <h2 class=\"wow fadeInUp\" data-wow-delay=\".4s\">
                Rencontrez notre équipe
              </h2>
              <p class=\"wow fadeInUp\" data-wow-delay=\".6s\">
                Notre équipe dévouée combine créativité, expertise et passion
                pour concrétiser votre projet avec excellence.
              </p>
            </div>
          </div>
        </div>
        <div class=\"row\">
          <div
            class=\"col-lg-3 col-md-6 col-12 wow fadeInUp\"
            data-wow-delay=\".3s\"
          >
            <!-- Start Single Team -->
            <div class=\"single-team\">
              <div class=\"team-image\">
                <img src=\"https://via.placeholder.com/400x400\" alt=\"#\" />
              </div>
              <div class=\"content\">
                <h4>
                  BAMASSI Hugues
                  <span>CEO DouGou</span>
                </h4>
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
                </ul>
              </div>
            </div>
            <!-- End Single Team -->
          </div>
          <div
            class=\"col-lg-3 col-md-6 col-12 wow fadeInUp\"
            data-wow-delay=\".5s\"
          >
            <!-- Start Single Team -->
            <div class=\"single-team\">
              <div class=\"team-image\">
                <img src=\"https://via.placeholder.com/400x400\" alt=\"#\" />
              </div>
              <div class=\"content\">
                <h4>
                  KELE Bernardin
                  <span>Dev Mobile</span>
                </h4>
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
                </ul>
              </div>
            </div>
            <!-- End Single Team -->
          </div>
          <div
            class=\"col-lg-3 col-md-6 col-12 wow fadeInUp\"
            data-wow-delay=\".7s\"
          >
            <!-- Start Single Team -->
            <div class=\"single-team\">
              <div class=\"team-image\">
                <img src=\"https://via.placeholder.com/400x400\" alt=\"#\" />
              </div>
              <div class=\"content\">
                <h4>
                  LAMATETOU Esaie
                  <span>Graphic Designer</span>
                </h4>
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
                </ul>
              </div>
            </div>
            <!-- End Single Team -->
          </div>
          <div
            class=\"col-lg-3 col-md-6 col-12 wow fadeInUp\"
            data-wow-delay=\".9s\"
          >
            <!-- Start Single Team -->
            <div class=\"single-team\">
              <div class=\"team-image\">
                <img src=\"https://via.placeholder.com/400x400\" alt=\"#\" />
              </div>
              <div class=\"content\">
                <h4>
                  ALAWE Nicolas
                  <span>UI Designer</span>
                </h4>
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
                </ul>
              </div>
            </div>
            <!-- End Single Team -->
          </div>
          <div
            class=\"col-lg-3 col-md-6 col-12 wow fadeInUp\"
            data-wow-delay=\".9s\"
          >
            <!-- Start Single Team -->
            <div class=\"single-team\">
              <div class=\"team-image\">
                <img src=\"https://via.placeholder.com/400x400\" alt=\"#\" />
              </div>
              <div class=\"content\">
                <h4>
                  AKAOLO Samtou
                  <span>Juriste d'entreprise</span>
                </h4>
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
                </ul>
              </div>
            </div>
            <!-- End Single Team -->
          </div>
          <div
            class=\"col-lg-3 col-md-6 col-12 wow fadeInUp\"
            data-wow-delay=\".9s\"
          >
            <!-- Start Single Team -->
            <div class=\"single-team\">
              <div class=\"team-image\">
                <img src=\"https://via.placeholder.com/400x400\" alt=\"#\" />
              </div>
              <div class=\"content\">
                <h4>
                  ANDJAO Julie
                  <span>Responsable de projet</span>
                </h4>
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
                </ul>
              </div>
            </div>
            <!-- End Single Team -->
          </div>
          <div
            class=\"col-lg-3 col-md-6 col-12 wow fadeInUp\"
            data-wow-delay=\".9s\"
          >
            <!-- Start Single Team -->
            <div class=\"single-team\">
              <div class=\"team-image\">
                <img src=\"https://via.placeholder.com/400x400\" alt=\"#\" />
              </div>
              <div class=\"content\">
                <h4>
                  HONYIGLO Wilfried
                  <span>Dev Mobile</span>
                </h4>
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
                </ul>
              </div>
            </div>
            <!-- End Single Team -->
          </div>
          <div
            class=\"col-lg-3 col-md-6 col-12 wow fadeInUp\"
            data-wow-delay=\".9s\"
          >
            <!-- Start Single Team -->
            <div class=\"single-team\">
              <div class=\"team-image\">
                <img src=\"https://via.placeholder.com/400x400\" alt=\"#\" />
              </div>
              <div class=\"content\">
                <h4>
                  WOGLO Koffi
                  <span>Dev Backend</span>
                </h4>
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
                </ul>
              </div>
            </div>
            <!-- End Single Team -->
          </div>
          <div
            class=\"col-lg-3 col-md-6 col-12 wow fadeInUp\"
            data-wow-delay=\".9s\"
          >
            <!-- Start Single Team -->
            <div class=\"single-team\">
              <div class=\"team-image\">
                <img src=\"https://via.placeholder.com/400x400\" alt=\"#\" />
              </div>
              <div class=\"content\">
                <h4>
                  AYAH Yawavi
                  <span>Analyste</span>
                </h4>
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
                </ul>
              </div>
            </div>
            <!-- End Single Team -->
          </div>
          <div
            class=\"col-lg-3 col-md-6 col-12 wow fadeInUp\"
            data-wow-delay=\".9s\"
          >
            <!-- Start Single Team -->
            <div class=\"single-team\">
              <div class=\"team-image\">
                <img src=\"https://via.placeholder.com/400x400\" alt=\"#\" />
              </div>
              <div class=\"content\">
                <h4>
                  ANDELE Koffi
                  <span>Dev FullStack</span>
                </h4>
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
                </ul>
              </div>
            </div>
            <!-- End Single Team -->
          </div>
          <div
            class=\"col-lg-3 col-md-6 col-12 wow fadeInUp\"
            data-wow-delay=\".9s\"
          >
            <!-- Start Single Team -->
            <div class=\"single-team\">
              <div class=\"team-image\">
                <img src=\"https://via.placeholder.com/400x400\" alt=\"#\" />
              </div>
              <div class=\"content\">
                <h4>
                  PAKOU Agnilonda
                  <span>Dev Backend / UI Designer</span>
                </h4>
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
                </ul>
              </div>
            </div>
            <!-- End Single Team -->
          </div>
        </div>
      </div>
    </section>
    <!--/ End Team Area -->

    <!-- Start Clients Logo Area -->
    <div class=\"client-logo\">
      <div class=\"container\">
        <div class=\"row align-items-center\">
          <div class=\"col-lg-3 col-md-3 col-12 text-center\">
            <div class=\"single-logo\">
              <img src=\"https://via.placeholder.com/200x100\" alt=\"#\" />
            </div>
          </div>
          <div class=\"col-lg-3 col-md-3 col-12 text-center\">
            <div class=\"single-logo\">
              <img src=\"https://via.placeholder.com/200x100\" alt=\"#\" />
            </div>
          </div>
          <div class=\"col-lg-3 col-md-3 col-12 text-center\">
            <div class=\"single-logo\">
              <img src=\"https://via.placeholder.com/200x100\" alt=\"#\" />
            </div>
          </div>
          <div class=\"col-lg-3 col-md-3 col-12 text-center\">
            <div class=\"single-logo\">
              <img src=\"https://via.placeholder.com/200x100\" alt=\"#\" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Clients Logo Area -->

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
{% endblock %}", "propos/about.html.twig", "/home/bakiscofield/Documents/Dougou_siteweb_officiel/templates/propos/about.html.twig");
    }
}