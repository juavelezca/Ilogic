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

/* themes/custom/ilogic/templates/page.html.twig */
class __TwigTemplate_25672729c1d9a854cc329f9e4b675450c095335b41d87cd2dc5313a318519866 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 57];
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
        // line 43
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
        // line 57
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null)), "html", null, true);
        echo "../assets/favicon.png\" type=\"image/x-icon\">

  <link rel=\"stylesheet\" href=\"/";
        // line 59
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null)), "html", null, true);
        echo "../assets/css/maicons.css\">

  <link rel=\"stylesheet\" href=\"/";
        // line 61
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null)), "html", null, true);
        echo "../assets/vendor/animate/animate.css\">

  <link rel=\"stylesheet\" href=\"/";
        // line 63
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null)), "html", null, true);
        echo "../assets/vendor/owl-carousel/css/owl.carousel.min.css\">

  <link rel=\"stylesheet\" href=\"/";
        // line 65
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null)), "html", null, true);
        echo "../assets/css/bootstrap.css\">

  <link rel=\"stylesheet\" href=\"/";
        // line 67
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null)), "html", null, true);
        echo "../assets/css/mobster.css\">
</head>
<body>

<nav class=\"navbar navbar-expand-lg navbar-light navbar-floating\">
  <div class=\"container\">
    <a class=\"navbar-brand\" href=\"#\">
      <img src=\"/";
        // line 74
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null)), "html", null, true);
        echo "../assets/favicon.png\" alt=\"\" width=\"40\">
    </a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarToggler\" aria-controls=\"navbarToggler\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
  
    <div class=\"collapse navbar-collapse\" id=\"navbarToggler\">
      <ul class=\"navbar-nav ml-lg-5 mt-3 mt-lg-0\">

        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"";
        // line 84
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true);
        echo "\">Home</a>
        </li>

        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"node.html.twig\"> Contact </a>
        </li>
      </ul>
    </div>
    ";
        // line 92
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
        echo "
  </div>
</nav>

  <div class=\"page-hero-section bg-image hero-home-1\" style=\"background-image: url(/";
        // line 96
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null)), "html", null, true);
        echo "../assets/img/bg_hero_1.svg);\">
  <div class=\"hero-caption pt-5\">
    <div class=\"container h-100\">
      <div class=\"row align-items-center h-100\">
        <div class=\"col-lg-6 wow fadeInUp\">
          <div class=\"badge mb-2\"><span class=\"icon mr-1\"><span class=\"mai-globe\"></span></span> #2 Editor Choice App of 2020</div>
          <h1 class=\"mb-4\">Manage your Finance easier</h1>
          <p class=\"mb-4\">Mobster has features to view and manage <br>
          our finances, such as transfer, and statistics.</p>
          <a href=\"#\" class=\"btn btn-primary rounded-pill\">Get App Now</a>
        </div>
        <div class=\"col-lg-6 d-none d-lg-block wow zoomIn\">
          <div class=\"img-place mobile-preview shadow floating-animate\">
            <img src=\"/";
        // line 109
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null)), "html", null, true);
        echo "../assets/img/app_preview_1.png\" alt=\"\">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Clients -->
<div class=\"page-section mt-5\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-sm-6 col-lg-3 py-3 wow zoomIn\">
        <div class=\"img-place client-img\">
          <img src=\"/";
        // line 123
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null)), "html", null, true);
        echo "../assets/img/clients/alter_sport.png\" alt=\"\">
        </div>
      </div>
      <div class=\"col-sm-6 col-lg-3 py-3 wow zoomIn\">
        <div class=\"img-place client-img\">
          <img src=\"/";
        // line 128
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null)), "html", null, true);
        echo "../assets/img/clients/cleaning_service.png\" alt=\"\">
        </div>
      </div>
      <div class=\"col-sm-6 col-lg-3 py-3 wow zoomIn\">
        <div class=\"img-place client-img\">
          <img src=\"/";
        // line 133
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null)), "html", null, true);
        echo "../assets/img/clients/creative_photo.png\" alt=\"\">
        </div>
      </div>
      <div class=\"col-sm-6 col-lg-3 py-3 wow zoomIn\">
        <div class=\"img-place client-img\">
          <img src=\"/";
        // line 138
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null)), "html", null, true);
        echo "../assets/img/clients/global_tv.png\" alt=\"\">
        </div>
        ";
        // line 140
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sponsors", [])), "html", null, true);
        echo "
      </div>
    </div>
  </div>
</div> <!-- End clients -->

<div class=\"position-realive bg-image\" style=\"background-image: url(/";
        // line 146
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null)), "html", null, true);
        echo "../assets/img/pattern_1.svg);\">

<div class=\"page-section\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-5 py-3\">
        <div class=\"img-place mobile-preview shadow wow zoomIn\">
          <img src=\"/";
        // line 153
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null)), "html", null, true);
        echo "../assets/img/app_preview_2.png\" alt=\"\">
        </div>
      </div>
      <div class=\"col-lg-6 py-3 mt-lg-5\">
        <div class=\"iconic-list\">
          <div class=\"iconic-item wow fadeInUp\">
            <div class=\"iconic-md iconic-text bg-warning fg-white rounded-circle\">
              <span class=\"mai-cube\"></span>
              ";
        // line 161
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
        echo "
            </div>
            <div class=\"iconic-content\">
              <h5>Powerful Features</h5>
              <p class=\"fs-small\">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore</p>
            </div>
          </div>
          <div class=\"iconic-item wow fadeInUp\">
            <div class=\"iconic-md iconic-text bg-info fg-white rounded-circle\">
              <span class=\"mai-shield\"></span>
            </div>
            <div class=\"iconic-content\">
              <h5>Fully Secured</h5>
              <p class=\"fs-small\">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore</p>
            </div>
          </div>
          <div class=\"iconic-item wow fadeInUp\">
            <div class=\"iconic-md iconic-text bg-indigo fg-white rounded-circle\">
              <span class=\"mai-desktop-outline\"></span>
            </div>
            <div class=\"iconic-content\">
              <h5>Easy Monitoring</h5>
              <p class=\"fs-small\">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore</p>
            </div>
          </div>
          ";
        // line 186
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
        echo "
        </div>
      </div>
    </div>
  </div>
</div>

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
        // line 215
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
        echo "
    </div>
  </div>
</div>

<script src=\"/";
        // line 220
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null)), "html", null, true);
        echo "../assets/js/jquery-3.5.1.min.js\"></script>

<script src=\"/";
        // line 222
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null)), "html", null, true);
        echo "../assets/js/bootstrap.bundle.min.js\"></script>

<script src=\"/";
        // line 224
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null)), "html", null, true);
        echo "../assets/vendor/owl-carousel/js/owl.carousel.min.js\"></script>

<script src=\"/";
        // line 226
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null)), "html", null, true);
        echo "../assets/vendor/wow/wow.min.js\"></script>

<script src=\"/";
        // line 228
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null)), "html", null, true);
        echo "../assets/js/mobster.js\"></script>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "themes/custom/ilogic/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  317 => 228,  312 => 226,  307 => 224,  302 => 222,  297 => 220,  289 => 215,  257 => 186,  229 => 161,  218 => 153,  208 => 146,  199 => 140,  194 => 138,  186 => 133,  178 => 128,  170 => 123,  153 => 109,  137 => 96,  130 => 92,  119 => 84,  106 => 74,  96 => 67,  91 => 65,  86 => 63,  81 => 61,  76 => 59,  71 => 57,  55 => 43,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - messages: Status and error messages. Should be displayed prominently.
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.footer: Items for the footer region.
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 *
 * @ingroup themeable
 */
#}
<!DOCTYPE html>
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
          <a class=\"nav-link\" href=\"{{ url }}\">Home</a>
        </li>

        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"node.html.twig\"> Contact </a>
        </li>
      </ul>
    </div>
    {{page.header}}
  </div>
</nav>

  <div class=\"page-hero-section bg-image hero-home-1\" style=\"background-image: url(/{{directory}}../assets/img/bg_hero_1.svg);\">
  <div class=\"hero-caption pt-5\">
    <div class=\"container h-100\">
      <div class=\"row align-items-center h-100\">
        <div class=\"col-lg-6 wow fadeInUp\">
          <div class=\"badge mb-2\"><span class=\"icon mr-1\"><span class=\"mai-globe\"></span></span> #2 Editor Choice App of 2020</div>
          <h1 class=\"mb-4\">Manage your Finance easier</h1>
          <p class=\"mb-4\">Mobster has features to view and manage <br>
          our finances, such as transfer, and statistics.</p>
          <a href=\"#\" class=\"btn btn-primary rounded-pill\">Get App Now</a>
        </div>
        <div class=\"col-lg-6 d-none d-lg-block wow zoomIn\">
          <div class=\"img-place mobile-preview shadow floating-animate\">
            <img src=\"/{{directory}}../assets/img/app_preview_1.png\" alt=\"\">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Clients -->
<div class=\"page-section mt-5\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-sm-6 col-lg-3 py-3 wow zoomIn\">
        <div class=\"img-place client-img\">
          <img src=\"/{{directory}}../assets/img/clients/alter_sport.png\" alt=\"\">
        </div>
      </div>
      <div class=\"col-sm-6 col-lg-3 py-3 wow zoomIn\">
        <div class=\"img-place client-img\">
          <img src=\"/{{directory}}../assets/img/clients/cleaning_service.png\" alt=\"\">
        </div>
      </div>
      <div class=\"col-sm-6 col-lg-3 py-3 wow zoomIn\">
        <div class=\"img-place client-img\">
          <img src=\"/{{directory}}../assets/img/clients/creative_photo.png\" alt=\"\">
        </div>
      </div>
      <div class=\"col-sm-6 col-lg-3 py-3 wow zoomIn\">
        <div class=\"img-place client-img\">
          <img src=\"/{{directory}}../assets/img/clients/global_tv.png\" alt=\"\">
        </div>
        {{page.sponsors}}
      </div>
    </div>
  </div>
</div> <!-- End clients -->

<div class=\"position-realive bg-image\" style=\"background-image: url(/{{directory}}../assets/img/pattern_1.svg);\">

<div class=\"page-section\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-5 py-3\">
        <div class=\"img-place mobile-preview shadow wow zoomIn\">
          <img src=\"/{{directory}}../assets/img/app_preview_2.png\" alt=\"\">
        </div>
      </div>
      <div class=\"col-lg-6 py-3 mt-lg-5\">
        <div class=\"iconic-list\">
          <div class=\"iconic-item wow fadeInUp\">
            <div class=\"iconic-md iconic-text bg-warning fg-white rounded-circle\">
              <span class=\"mai-cube\"></span>
              {{page.sidebar_first}}
            </div>
            <div class=\"iconic-content\">
              <h5>Powerful Features</h5>
              <p class=\"fs-small\">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore</p>
            </div>
          </div>
          <div class=\"iconic-item wow fadeInUp\">
            <div class=\"iconic-md iconic-text bg-info fg-white rounded-circle\">
              <span class=\"mai-shield\"></span>
            </div>
            <div class=\"iconic-content\">
              <h5>Fully Secured</h5>
              <p class=\"fs-small\">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore</p>
            </div>
          </div>
          <div class=\"iconic-item wow fadeInUp\">
            <div class=\"iconic-md iconic-text bg-indigo fg-white rounded-circle\">
              <span class=\"mai-desktop-outline\"></span>
            </div>
            <div class=\"iconic-content\">
              <h5>Easy Monitoring</h5>
              <p class=\"fs-small\">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore</p>
            </div>
          </div>
          {{page.sidebar_second}}
        </div>
      </div>
    </div>
  </div>
</div>

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

</body>
</html>", "themes/custom/ilogic/templates/page.html.twig", "C:\\Users\\julian v\\Sites\\devdesktop\\drupal-8.9.1\\themes\\custom\\ilogic\\templates\\page.html.twig");
    }
}
