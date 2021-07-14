<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/ilogic/templates/node.html.twig */
class __TwigTemplate_29138ff1ade8a15e585aef1bf708644cebee075a34d686a7c58fcd231425b073 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 15];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

  <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">

  <meta name=\"description\" content=\"Mobile Application HTML5 Template\">

  <meta name=\"copyright\" content=\"MACode ID, https://www.macodeid.com/\">

  <title>Mobster - One page app template</title>

  <link rel=\"shortcut icon\" href=\"/";
        // line 15
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null)), "html", null, true);
        echo "../assets/favicon.png\" type=\"image/x-icon\">

  <link rel=\"stylesheet\" href=\"/";
        // line 17
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null)), "html", null, true);
        echo "../assets/css/maicons.css\">

  <link rel=\"stylesheet\" href=\"/";
        // line 19
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null)), "html", null, true);
        echo "../assets/vendor/animate/animate.css\">

  <link rel=\"stylesheet\" href=\"/";
        // line 21
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null)), "html", null, true);
        echo "../assets/vendor/owl-carousel/css/owl.carousel.min.css\">

  <link rel=\"stylesheet\" href=\"/";
        // line 23
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null)), "html", null, true);
        echo "../assets/css/bootstrap.css\">

  <link rel=\"stylesheet\" href=\"/";
        // line 25
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null)), "html", null, true);
        echo "../assets/css/mobster.css\">
</head>
<body>

<nav class=\"navbar navbar-expand-lg navbar-light navbar-floating\">
  <div class=\"container\">
    <a class=\"navbar-brand\" href=\"#\">
      <img src=\"/";
        // line 32
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null)), "html", null, true);
        echo "../assets/favicon.png\" alt=\"\" width=\"40\">
    </a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarToggler\" aria-controls=\"navbarToggler\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"navbarToggler\">
      <ul class=\"navbar-nav ml-lg-5 mt-3 mt-lg-0\">

        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"page.html.twig\"> Home </a>
        </li>
  
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"node.html.twig\">Contact</a>
        </li>
      </ul>

    </div>
  </div>
</nav>

<div class=\"bg-light\">

  <div class=\"page-hero-section bg-image hero-mini\" style=\"background-image: url(/";
        // line 56
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null)), "html", null, true);
        echo "../assets/img/hero_mini.svg);\">
    <div class=\"hero-caption\">
      <div class=\"container fg-white h-100\">
        <div class=\"row justify-content-center align-items-center text-center h-100\">
          <div class=\"col-lg-6\">
            <h3 class=\"mb-4 fw-medium\">Contact</h3>
            <nav aria-label=\"breadcrumb\">
              <ol class=\"breadcrumb breadcrumb-dark justify-content-center bg-transparent\">
                <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
                <li class=\"breadcrumb-item active\" aria-current=\"page\">Contact</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class=\"page-section\">
    <div class=\"container\">
      <div class=\"row justify-content-center\">
        <div class=\"col-lg-10 my-3 wow fadeInUp\">
          <div class=\"card-page\">
            <div class=\"row row-beam-md\">
              <div class=\"col-md-4 text-center py-3 py-md-2\">
                <i class=\"mai-location-outline h3\"></i>
                <p class=\"fg-primary fw-medium fs-vlarge\">Location</p>
                <p class=\"mb-0\">3 East Ridgewood Avenue Los Angeles, CA 90022</p>
              </div>
              <div class=\"col-md-4 text-center py-3 py-md-2\">
                <i class=\"mai-call-outline h3\"></i>
                <p class=\"fg-primary fw-medium fs-vlarge\">Contact</p>
                <p class=\"mb-1\">+213 908 92034</p>
                <p class=\"mb-0\">+415 123 89245</p>
              </div>
              <div class=\"col-md-4 text-center py-3 py-md-2\">
                <i class=\"mai-mail-open-outline h3\"></i>
                <p class=\"fg-primary fw-medium fs-vlarge\">Email</p>
                <p class=\"mb-1\">support@mobster.com</p>
                <p class=\"mb-0\">support@macodeid.com</p>
              </div>
            </div>
          </div>
        </div>
        <div class=\"col-md-6 col-lg-5 my-3 wow fadeInUp\">
          <div class=\"card-page\">
            <h3 class=\"fw-normal\">Get in touch</h3>
            <form method=\"POST\" class=\"mt-3\">
              <div class=\"form-group\">
                <label for=\"name\" class=\"fw-medium fg-grey\">Fullname</label>
                <input type=\"text\" class=\"form-control\" id=\"name\">
              </div>
    
              <div class=\"form-group\">
                <label for=\"email\" class=\"fw-medium fg-grey\">Email</label>
                <input type=\"text\" class=\"form-control\" id=\"email\">
              </div>

              <div class=\"form-group\">
                <label for=\"phone\" class=\"fw-medium fg-grey\">Phone(optional)</label>
                <input type=\"number\" class=\"form-control\" id=\"phone\">
              </div>
    
              <div class=\"form-group\">
                <label for=\"message\" class=\"fw-medium fg-grey\">Message</label>
                <textarea rows=\"6\" class=\"form-control\" id=\"message\"></textarea>
              </div>

              <p>*Your information will never be shared with any third party.</p>
    
              <div class=\"form-group mt-4\">
                <button type=\"submit\" class=\"btn btn-primary\">Send Message</button>
              </div>
            </form>
          </div>
          ";
        // line 131
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
        echo "
        </div>
        <div class=\"col-md-6 col-lg-7 my-3 wow fadeInUp\">
          <div class=\"card-page\">
            <div class=\"maps-container\">
              <div id=\"myMap\"></div>
            </div>
            ";
        // line 138
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
        echo "
          </div>
        </div>
      </div>
    </div>
  </div>

</div> <!-- .bg-light -->


<div class=\"page-footer-section bg-dark fg-white\">
  <div class=\"container\">
    <div class=\"row mb-5 py-3\">
      <div class=\"col-sm-6 col-lg-2 py-3\">
        <h5 class=\"mb-3\">Pages</h5>
        <ul class=\"menu-link\">
          <li><a href=\"#\" class=\"\">Features</a></li>
          <li><a href=\"#\" class=\"\">Customers</a></li>
          <li><a href=\"#\" class=\"\">Pricing</a></li>
          <li><a href=\"#\" class=\"\">GDPR</a></li>
        </ul>
      </div>
      <div class=\"col-sm-6 col-lg-2 py-3\">
        <h5 class=\"mb-3\">Company</h5>
        <ul class=\"menu-link\">
          <li><a href=\"#\" class=\"\">About</a></li>
          <li><a href=\"#\" class=\"\">Team</a></li>
          <li><a href=\"#\" class=\"\">Leadership</a></li>
          <li><a href=\"#\" class=\"\">Careers</a></li>
          <li><a href=\"#\" class=\"\">HIRING!</a></li>
        </ul>
      </div>
      ";
        // line 170
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
        echo "

    </div>
  </div>



</div>

<script src=\"/";
        // line 179
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null)), "html", null, true);
        echo "../assets/js/jquery-3.5.1.min.js\"></script>

<script src=\"/";
        // line 181
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null)), "html", null, true);
        echo "../assets/js/bootstrap.bundle.min.js\"></script>

<script src=\"/";
        // line 183
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null)), "html", null, true);
        echo "../assets/vendor/owl-carousel/js/owl.carousel.min.js\"></script>

<script src=\"/";
        // line 185
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null)), "html", null, true);
        echo "../assets/vendor/wow/wow.min.js\"></script>

<script src=\"/";
        // line 187
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null)), "html", null, true);
        echo "../assets/js/mobster.js\"></script>

<script src=\"/";
        // line 189
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null)), "html", null, true);
        echo "../assets/js/google-maps.js\"></script>

<script async defer src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyAIA_zqjFMsJM_sxP9-6Pde5vVCTyJmUHM&callback=initMap\"></script>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "themes/custom/ilogic/templates/node.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 189,  288 => 187,  283 => 185,  278 => 183,  273 => 181,  268 => 179,  256 => 170,  221 => 138,  211 => 131,  133 => 56,  106 => 32,  96 => 25,  91 => 23,  86 => 21,  81 => 19,  76 => 17,  71 => 15,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

  <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">

  <meta name=\"description\" content=\"Mobile Application HTML5 Template\">

  <meta name=\"copyright\" content=\"MACode ID, https://www.macodeid.com/\">

  <title>Mobster - One page app template</title>

  <link rel=\"shortcut icon\" href=\"/{{directory}}../assets/favicon.png\" type=\"image/x-icon\">

  <link rel=\"stylesheet\" href=\"/{{directory}}../assets/css/maicons.css\">

  <link rel=\"stylesheet\" href=\"/{{directory}}../assets/vendor/animate/animate.css\">

  <link rel=\"stylesheet\" href=\"/{{directory}}../assets/vendor/owl-carousel/css/owl.carousel.min.css\">

  <link rel=\"stylesheet\" href=\"/{{directory}}../assets/css/bootstrap.css\">

  <link rel=\"stylesheet\" href=\"/{{directory}}../assets/css/mobster.css\">
</head>
<body>

<nav class=\"navbar navbar-expand-lg navbar-light navbar-floating\">
  <div class=\"container\">
    <a class=\"navbar-brand\" href=\"#\">
      <img src=\"/{{directory}}../assets/favicon.png\" alt=\"\" width=\"40\">
    </a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarToggler\" aria-controls=\"navbarToggler\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse\" id=\"navbarToggler\">
      <ul class=\"navbar-nav ml-lg-5 mt-3 mt-lg-0\">

        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"page.html.twig\"> Home </a>
        </li>
  
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"node.html.twig\">Contact</a>
        </li>
      </ul>

    </div>
  </div>
</nav>

<div class=\"bg-light\">

  <div class=\"page-hero-section bg-image hero-mini\" style=\"background-image: url(/{{directory}}../assets/img/hero_mini.svg);\">
    <div class=\"hero-caption\">
      <div class=\"container fg-white h-100\">
        <div class=\"row justify-content-center align-items-center text-center h-100\">
          <div class=\"col-lg-6\">
            <h3 class=\"mb-4 fw-medium\">Contact</h3>
            <nav aria-label=\"breadcrumb\">
              <ol class=\"breadcrumb breadcrumb-dark justify-content-center bg-transparent\">
                <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
                <li class=\"breadcrumb-item active\" aria-current=\"page\">Contact</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class=\"page-section\">
    <div class=\"container\">
      <div class=\"row justify-content-center\">
        <div class=\"col-lg-10 my-3 wow fadeInUp\">
          <div class=\"card-page\">
            <div class=\"row row-beam-md\">
              <div class=\"col-md-4 text-center py-3 py-md-2\">
                <i class=\"mai-location-outline h3\"></i>
                <p class=\"fg-primary fw-medium fs-vlarge\">Location</p>
                <p class=\"mb-0\">3 East Ridgewood Avenue Los Angeles, CA 90022</p>
              </div>
              <div class=\"col-md-4 text-center py-3 py-md-2\">
                <i class=\"mai-call-outline h3\"></i>
                <p class=\"fg-primary fw-medium fs-vlarge\">Contact</p>
                <p class=\"mb-1\">+213 908 92034</p>
                <p class=\"mb-0\">+415 123 89245</p>
              </div>
              <div class=\"col-md-4 text-center py-3 py-md-2\">
                <i class=\"mai-mail-open-outline h3\"></i>
                <p class=\"fg-primary fw-medium fs-vlarge\">Email</p>
                <p class=\"mb-1\">support@mobster.com</p>
                <p class=\"mb-0\">support@macodeid.com</p>
              </div>
            </div>
          </div>
        </div>
        <div class=\"col-md-6 col-lg-5 my-3 wow fadeInUp\">
          <div class=\"card-page\">
            <h3 class=\"fw-normal\">Get in touch</h3>
            <form method=\"POST\" class=\"mt-3\">
              <div class=\"form-group\">
                <label for=\"name\" class=\"fw-medium fg-grey\">Fullname</label>
                <input type=\"text\" class=\"form-control\" id=\"name\">
              </div>
    
              <div class=\"form-group\">
                <label for=\"email\" class=\"fw-medium fg-grey\">Email</label>
                <input type=\"text\" class=\"form-control\" id=\"email\">
              </div>

              <div class=\"form-group\">
                <label for=\"phone\" class=\"fw-medium fg-grey\">Phone(optional)</label>
                <input type=\"number\" class=\"form-control\" id=\"phone\">
              </div>
    
              <div class=\"form-group\">
                <label for=\"message\" class=\"fw-medium fg-grey\">Message</label>
                <textarea rows=\"6\" class=\"form-control\" id=\"message\"></textarea>
              </div>

              <p>*Your information will never be shared with any third party.</p>
    
              <div class=\"form-group mt-4\">
                <button type=\"submit\" class=\"btn btn-primary\">Send Message</button>
              </div>
            </form>
          </div>
          {{page.sidebar_first}}
        </div>
        <div class=\"col-md-6 col-lg-7 my-3 wow fadeInUp\">
          <div class=\"card-page\">
            <div class=\"maps-container\">
              <div id=\"myMap\"></div>
            </div>
            {{page.sidebar_second}}
          </div>
        </div>
      </div>
    </div>
  </div>

</div> <!-- .bg-light -->


<div class=\"page-footer-section bg-dark fg-white\">
  <div class=\"container\">
    <div class=\"row mb-5 py-3\">
      <div class=\"col-sm-6 col-lg-2 py-3\">
        <h5 class=\"mb-3\">Pages</h5>
        <ul class=\"menu-link\">
          <li><a href=\"#\" class=\"\">Features</a></li>
          <li><a href=\"#\" class=\"\">Customers</a></li>
          <li><a href=\"#\" class=\"\">Pricing</a></li>
          <li><a href=\"#\" class=\"\">GDPR</a></li>
        </ul>
      </div>
      <div class=\"col-sm-6 col-lg-2 py-3\">
        <h5 class=\"mb-3\">Company</h5>
        <ul class=\"menu-link\">
          <li><a href=\"#\" class=\"\">About</a></li>
          <li><a href=\"#\" class=\"\">Team</a></li>
          <li><a href=\"#\" class=\"\">Leadership</a></li>
          <li><a href=\"#\" class=\"\">Careers</a></li>
          <li><a href=\"#\" class=\"\">HIRING!</a></li>
        </ul>
      </div>
      {{page.footer}}

    </div>
  </div>



</div>

<script src=\"/{{directory}}../assets/js/jquery-3.5.1.min.js\"></script>

<script src=\"/{{directory}}../assets/js/bootstrap.bundle.min.js\"></script>

<script src=\"/{{directory}}../assets/vendor/owl-carousel/js/owl.carousel.min.js\"></script>

<script src=\"/{{directory}}../assets/vendor/wow/wow.min.js\"></script>

<script src=\"/{{directory}}../assets/js/mobster.js\"></script>

<script src=\"/{{directory}}../assets/js/google-maps.js\"></script>

<script async defer src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyAIA_zqjFMsJM_sxP9-6Pde5vVCTyJmUHM&callback=initMap\"></script>

</body>
</html>", "themes/custom/ilogic/templates/node.html.twig", "C:\\Users\\julian v\\Sites\\devdesktop\\drupal-8.9.1\\themes\\custom\\ilogic\\templates\\node.html.twig");
    }
}
