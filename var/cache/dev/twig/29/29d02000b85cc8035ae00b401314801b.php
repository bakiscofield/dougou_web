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

/* base_inscription.html.twig */
class __TwigTemplate_3aabf057239c8d17cab620c35537df59 extends Template
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
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base_inscription.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base_inscription.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\" />
        <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 7
        echo "</title>
        <meta name=\"description\" content=\"\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
        <link
            rel=\"shortcut icon\"
            type=\"image/x-icon\"
            href=\"assets/images/favicon.svg\" />        
        ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "
        
    </head>
    <body>
        ";
        // line 26
        $this->displayBlock('body', $context, $blocks);
        // line 27
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 84
        echo "        
    </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Sign Up - DouGou App Landing Page
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 15
        echo "        <link rel=\"stylesheet\" href=\"assets/css/bootstrap.min.css\" />
        <link rel=\"stylesheet\" href=\"assets/css/LineIcons.3.0.css\" />
        <link rel=\"stylesheet\" href=\"assets/css/animate.css\" />
        <link rel=\"stylesheet\" href=\"assets/css/tiny-slider.css\" />
        <link rel=\"stylesheet\" href=\"assets/css/glightbox.min.css\" />
        <link rel=\"stylesheet\" href=\"assets/css/main2.css\" />
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 26
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 27
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 28
        echo "        <script src=\"assets/js/bootstrap.min.js\"></script>
        <script src=\"assets/js/wow.min.js\"></script>
        <script src=\"assets/js/tiny-slider.js\"></script>
        <script src=\"assets/js/glightbox.min.js\"></script>
        <script src=\"assets/js/count-up.min.js\"></script>
        <script src=\"assets/js/main2.js\"></script>
        <script>
        //========= testimonial
        tns({
            container: \".testimonial-slider\",
            items: 3,
            slideBy: \"page\",
            autoplay: false,
            mouseDrag: true,
            gutter: 0,
            nav: true,
            controls: false,
            responsive: {
            0: {
                items: 1,
            },
            540: {
                items: 1,
            },
            768: {
                items: 2,
            },
            992: {
                items: 2,
            },
            1170: {
                items: 3,
            },
            },
        });

        //====== counter up
        var cu = new counterUp({
            start: 0,
            duration: 2000,
            intvalues: true,
            interval: 100,
            append: \" \",
        });
        cu.start();

        //========= glightbox
        //GLightbox({
        //href: \"https://www.youtube.com/watch?v=r44RKWyfcFw&fbclid=IwAR21beSJORalzmzokxDRcGfkZA1AtRTE__l5N4r09HcGS5Y6vOluyouM9EM\",
        //type: \"video\",
        //source: \"youtube\", //vimeo, youtube or local
        //width: 900,
        //autoplayVideos: true,
        //});
        </script>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base_inscription.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  165 => 28,  155 => 27,  137 => 26,  121 => 15,  111 => 14,  91 => 6,  78 => 84,  75 => 27,  73 => 26,  67 => 22,  65 => 14,  56 => 7,  54 => 6,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\" />
        <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\" />
        <title>{% block title %}Sign Up - DouGou App Landing Page
        {% endblock %}</title>
        <meta name=\"description\" content=\"\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
        <link
            rel=\"shortcut icon\"
            type=\"image/x-icon\"
            href=\"assets/images/favicon.svg\" />        
        {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"assets/css/bootstrap.min.css\" />
        <link rel=\"stylesheet\" href=\"assets/css/LineIcons.3.0.css\" />
        <link rel=\"stylesheet\" href=\"assets/css/animate.css\" />
        <link rel=\"stylesheet\" href=\"assets/css/tiny-slider.css\" />
        <link rel=\"stylesheet\" href=\"assets/css/glightbox.min.css\" />
        <link rel=\"stylesheet\" href=\"assets/css/main2.css\" />
        {% endblock %}

        
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}
        <script src=\"assets/js/bootstrap.min.js\"></script>
        <script src=\"assets/js/wow.min.js\"></script>
        <script src=\"assets/js/tiny-slider.js\"></script>
        <script src=\"assets/js/glightbox.min.js\"></script>
        <script src=\"assets/js/count-up.min.js\"></script>
        <script src=\"assets/js/main2.js\"></script>
        <script>
        //========= testimonial
        tns({
            container: \".testimonial-slider\",
            items: 3,
            slideBy: \"page\",
            autoplay: false,
            mouseDrag: true,
            gutter: 0,
            nav: true,
            controls: false,
            responsive: {
            0: {
                items: 1,
            },
            540: {
                items: 1,
            },
            768: {
                items: 2,
            },
            992: {
                items: 2,
            },
            1170: {
                items: 3,
            },
            },
        });

        //====== counter up
        var cu = new counterUp({
            start: 0,
            duration: 2000,
            intvalues: true,
            interval: 100,
            append: \" \",
        });
        cu.start();

        //========= glightbox
        //GLightbox({
        //href: \"https://www.youtube.com/watch?v=r44RKWyfcFw&fbclid=IwAR21beSJORalzmzokxDRcGfkZA1AtRTE__l5N4r09HcGS5Y6vOluyouM9EM\",
        //type: \"video\",
        //source: \"youtube\", //vimeo, youtube or local
        //width: 900,
        //autoplayVideos: true,
        //});
        </script>
        {% endblock %}
        
    </body>
</html>
", "base_inscription.html.twig", "/home/bakiscofield/Documents/Dougou_siteweb_officiel/templates/base_inscription.html.twig");
    }
}
