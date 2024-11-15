<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* themes/techie/templates/layout/page.html.twig */
class __TwigTemplate_b4818eea11c33963fe40265aefe05a58 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 42
        yield "
<!DOCTYPE html>
<html lang=\"en\">

<head>
  <meta charset=\"utf-8\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
  <title>Index - Techie Bootstrap Template</title>
  <meta name=\"description\" content=\"\">
  <meta name=\"keywords\" content=\"\">

  <!-- Favicons -->
  <link href=\"assets/img/favicon.png\" rel=\"icon\">
  <link href=\"assets/img/apple-touch-icon.png\" rel=\"apple-touch-icon\">

  <!-- Fonts -->
  <link href=\"https://fonts.googleapis.com\" rel=\"preconnect\">
  <link href=\"https://fonts.gstatic.com\" rel=\"preconnect\" crossorigin>
  <link href=\"https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap\" rel=\"stylesheet\">


  <!-- =======================================================
  * Template Name: Techie
  * Template URL: https://bootstrapmade.com/techie-free-skin-bootstrap-3/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class=\"index-page\">

  <header id=\"header\" class=\"header d-flex align-items-center fixed-top\">
    <div class=\"container-fluid container-xl position-relative d-flex align-items-center\">

      <a href=\"index.html\" class=\"logo d-flex align-items-center me-auto\">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src=\"assets/img/logo.png\" alt=\"\"> -->
        <h1 class=\"sitename\">Techie</h1>
      </a>

      <nav id=\"navmenu\" class=\"navmenu\">
        <ul>
          <li><a href=\"#hero\" class=\"active\">Home</a></li>
          <li><a href=\"#about\">About</a></li>
          <li><a href=\"#services\">Services</a></li>
          <li><a href=\"#portfolio\">Portfolio</a></li>
          <li><a href=\"#team\">Team</a></li>
          <li class=\"dropdown\"><a href=\"#\"><span>Dropdown</span> <i class=\"bi bi-chevron-down toggle-dropdown\"></i></a>
            <ul>
              <li><a href=\"#\">Dropdown 1</a></li>
              <li class=\"dropdown\"><a href=\"#\"><span>Deep Dropdown</span> <i class=\"bi bi-chevron-down toggle-dropdown\"></i></a>
                <ul>
                  <li><a href=\"#\">Deep Dropdown 1</a></li>
                  <li><a href=\"#\">Deep Dropdown 2</a></li>
                  <li><a href=\"#\">Deep Dropdown 3</a></li>
                  <li><a href=\"#\">Deep Dropdown 4</a></li>
                  <li><a href=\"#\">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href=\"#\">Dropdown 2</a></li>
              <li><a href=\"#\">Dropdown 3</a></li>
              <li><a href=\"#\">Dropdown 4</a></li>
            </ul>
          </li>
          <li><a href=\"#contact\">Contact</a></li>
        </ul>
        <i class=\"mobile-nav-toggle d-xl-none bi bi-list\"></i>
      </nav>

      <a class=\"btn-getstarted\" href=\"#about\">Get Started</a>

    </div>
  </header>

  <main class=\"main\">

    <!-- Hero Section -->
    <section id=\"hero\" class=\"hero section accent-background\">

      <div class=\"container\">
        <div class=\"row gy-4\">
          <div class=\"col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center\">
            <h1>Bettter Digital Experience With Techie</h1>
            <p>We are team of talented designers making websites with Bootstrap</p>
            <div class=\"d-flex\">
              <a href=\"#about\" class=\"btn-get-started\">Get Started</a>
            </div>
          </div>
          <div class=\"col-lg-6 order-1 order-lg-2 hero-img\">
            <img src=\"assets/img/hero-img.png\" class=\"img-fluid animated\" alt=\"\">
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id=\"about\" class=\"about section\">

      <div class=\"container\">

        <div class=\"row gy-4\">

          <div class=\"col-lg-6 order-1 order-lg-2\" data-aos=\"fade-up\" data-aos-delay=\"100\">
            <img src=\"assets/img/about.jpg\" class=\"img-fluid\" alt=\"\">
          </div>

          <div class=\"col-lg-6 order-2 order-lg-1 content\" data-aos=\"fade-up\" data-aos-delay=\"200\">
            <h3>Voluptatem dignissimos provident quasi corporis</h3>
            <p class=\"fst-italic\">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <ul>
              <li><i class=\"bi bi-check-circle\"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
              <li><i class=\"bi bi-check-circle\"></i> <span>Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
              <li><i class=\"bi bi-check-circle\"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</span></li>
            </ul>
            <a href=\"#\" class=\"read-more\"><span>Read More</span><i class=\"bi bi-arrow-right\"></i></a>
          </div>

        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Stats Section -->
    <section id=\"stats\" class=\"stats section accent-background\">

      <div class=\"container position-relative\" data-aos=\"fade-up\" data-aos-delay=\"100\">

        <div class=\"row gy-4\">

          <div class=\"col-lg-3 col-md-6\">
            <div class=\"stats-item text-center w-100 h-100\">
              <span data-purecounter-start=\"0\" data-purecounter-end=\"232\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
              <p>Clients</p>
            </div>
          </div><!-- End Stats Item -->

          <div class=\"col-lg-3 col-md-6\">
            <div class=\"stats-item text-center w-100 h-100\">
              <span data-purecounter-start=\"0\" data-purecounter-end=\"521\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
              <p>Projects</p>
            </div>
          </div><!-- End Stats Item -->

          <div class=\"col-lg-3 col-md-6\">
            <div class=\"stats-item text-center w-100 h-100\">
              <span data-purecounter-start=\"0\" data-purecounter-end=\"1453\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
              <p>Hours Of Support</p>
            </div>
          </div><!-- End Stats Item -->

          <div class=\"col-lg-3 col-md-6\">
            <div class=\"stats-item text-center w-100 h-100\">
              <span data-purecounter-start=\"0\" data-purecounter-end=\"32\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
              <p>Workers</p>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>

    </section><!-- /Stats Section -->

    <!-- Services Section -->
    <section id=\"services\" class=\"services section\">

      <!-- Section Title -->
      <div class=\"container section-title\" data-aos=\"fade-up\">
        <h2>Services</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class=\"container\">

        <div class=\"row gy-4\">

          <div class=\"col-xl-4 col-lg-6\" data-aos=\"fade-up\" data-aos-delay=\"100\">
            <div class=\"service-item d-flex\">
              <div class=\"icon flex-shrink-0\"><i class=\"bi bi-briefcase\"></i></div>
              <div>
                <h4 class=\"title\"><a href=\"#\" class=\"stretched-link\">Lorem Ipsum</a></h4>
                <p class=\"description\">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
              </div>
            </div>
          </div>
          <!-- End Service Item -->

          <div class=\"col-xl-4 col-lg-6\" data-aos=\"fade-up\" data-aos-delay=\"200\">
            <div class=\"service-item d-flex\">
              <div class=\"icon flex-shrink-0\"><i class=\"bi bi-card-checklist\"></i></div>
              <div>
                <h4 class=\"title\"><a href=\"#\" class=\"stretched-link\">Dolor Sitema</a></h4>
                <p class=\"description\">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip exa</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class=\"col-xl-4 col-lg-6\" data-aos=\"fade-up\" data-aos-delay=\"300\">
            <div class=\"service-item d-flex\">
              <div class=\"icon flex-shrink-0\"><i class=\"bi bi-bar-chart\"></i></div>
              <div>
                <h4 class=\"title\"><a href=\"#\" class=\"stretched-link\">Sed ut perspiciatis</a></h4>
                <p class=\"description\">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class=\"col-xl-4 col-lg-6\" data-aos=\"fade-up\" data-aos-delay=\"400\">
            <div class=\"service-item d-flex\">
              <div class=\"icon flex-shrink-0\"><i class=\"bi bi-binoculars\"></i></div>
              <div>
                <h4 class=\"title\"><a href=\"#\" class=\"stretched-link\">Magni Dolores</a></h4>
                <p class=\"description\">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class=\"col-xl-4 col-lg-6\" data-aos=\"fade-up\" data-aos-delay=\"500\">
            <div class=\"service-item d-flex\">
              <div class=\"icon flex-shrink-0\"><i class=\"bi bi-brightness-high\"></i></div>
              <div>
                <h4 class=\"title\"><a href=\"#\" class=\"stretched-link\">Nemo Enim</a></h4>
                <p class=\"description\">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praese</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class=\"col-xl-4 col-lg-6\" data-aos=\"fade-up\" data-aos-delay=\"600\">
            <div class=\"service-item d-flex\">
              <div class=\"icon flex-shrink-0\"><i class=\"bi bi-calendar4-week\"></i></div>
              <div>
                <h4 class=\"title\"><a href=\"#\" class=\"stretched-link\">Eiusmod Tempor</a></h4>
                <p class=\"description\">Et harum quidem rerum facilis est et expedita distinctio dasa fermo lind saca</p>
              </div>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Services Section -->

    <!-- Features Section -->
    <section id=\"features\" class=\"features section\">

      <!-- Section Title -->
      <div class=\"container section-title\" data-aos=\"fade-up\">
        <h2>Features</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class=\"container\">

        <div class=\"row gy-4 justify-content-between\">
          <div class=\"features-image col-lg-5 order-lg-2 d-flex align-items-center\" data-aos=\"fade-up\" data-aos-delay=\"100\"><img src=\"assets/img/features.svg\" class=\"img-fluid\" alt=\"\"></div>
          <div class=\"col-lg-6 d-flex flex-column justify-content-center\">

            <div class=\"features-item d-flex ps-0 ps-lg-3 pt-4 pt-lg-0\" data-aos=\"fade-up\" data-aos-delay=\"200\">
              <i class=\"bi bi-archive flex-shrink-0\"></i>
              <div>
                <h4>Est labore ad</h4>
                <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
              </div>
            </div><!-- End Features Item-->

            <div class=\"features-item d-flex mt-5 ps-0 ps-lg-3\" data-aos=\"fade-up\" data-aos-delay=\"300\">
              <i class=\"bi bi-basket flex-shrink-0\"></i>
              <div>
                <h4>Harum esse qui</h4>
                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
              </div>
            </div><!-- End Features Item-->

            <div class=\"features-item d-flex mt-5 ps-0 ps-lg-3\" data-aos=\"fade-up\" data-aos-delay=\"400\">
              <i class=\"bi bi-broadcast flex-shrink-0\"></i>
              <div>
                <h4>Aut occaecati</h4>
                <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
              </div>
            </div><!-- End Features Item-->

            <div class=\"features-item d-flex mt-5 ps-0 ps-lg-3\" data-aos=\"fade-up\" data-aos-delay=\"500\">
              <i class=\"bi bi-camera-reels flex-shrink-0\"></i>
              <div>
                <h4>Beatae veritatis</h4>
                <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>
              </div>
            </div><!-- End Features Item-->

          </div>
        </div>

      </div>

    </section><!-- /Features Section -->

    <!-- Testimonials Section -->
    <section id=\"testimonials\" class=\"testimonials section light-background\">

      <!-- Section Title -->
      <div class=\"container section-title\" data-aos=\"fade-up\">
        <h2>Testimonials</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class=\"container\" data-aos=\"fade-up\" data-aos-delay=\"100\">

        <div class=\"swiper init-swiper\" data-speed=\"600\" data-delay=\"5000\" data-breakpoints=\"{ &quot;320&quot;: { &quot;slidesPerView&quot;: 1, &quot;spaceBetween&quot;: 40 }, &quot;1200&quot;: { &quot;slidesPerView&quot;: 3, &quot;spaceBetween&quot;: 40 } }\">
          <script type=\"application/json\" class=\"swiper-config\">
            {
              \"loop\": true,
              \"speed\": 600,
              \"autoplay\": {
                \"delay\": 5000
              },
              \"slidesPerView\": \"auto\",
              \"pagination\": {
                \"el\": \".swiper-pagination\",
                \"type\": \"bullets\",
                \"clickable\": true
              },
              \"breakpoints\": {
                \"320\": {
                  \"slidesPerView\": 1,
                  \"spaceBetween\": 40
                },
                \"1200\": {
                  \"slidesPerView\": 3,
                  \"spaceBetween\": 20
                }
              }
            }
          </script>
          <div class=\"swiper-wrapper\">

            <div class=\"swiper-slide\">
              <div class=\"testimonial-item\" \"=\"\">
            <p>
              <i class=\" bi bi-quote quote-icon-left\"></i>
                <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.</span>
                <i class=\"bi bi-quote quote-icon-right\"></i>
                </p>
                <img src=\"assets/img/testimonials/testimonials-1.jpg\" class=\"testimonial-img\" alt=\"\">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class=\"swiper-slide\">
              <div class=\"testimonial-item\">
                <p>
                  <i class=\"bi bi-quote quote-icon-left\"></i>
                  <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.</span>
                  <i class=\"bi bi-quote quote-icon-right\"></i>
                </p>
                <img src=\"assets/img/testimonials/testimonials-2.jpg\" class=\"testimonial-img\" alt=\"\">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class=\"swiper-slide\">
              <div class=\"testimonial-item\">
                <p>
                  <i class=\"bi bi-quote quote-icon-left\"></i>
                  <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.</span>
                  <i class=\"bi bi-quote quote-icon-right\"></i>
                </p>
                <img src=\"assets/img/testimonials/testimonials-3.jpg\" class=\"testimonial-img\" alt=\"\">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class=\"swiper-slide\">
              <div class=\"testimonial-item\">
                <p>
                  <i class=\"bi bi-quote quote-icon-left\"></i>
                  <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.</span>
                  <i class=\"bi bi-quote quote-icon-right\"></i>
                </p>
                <img src=\"assets/img/testimonials/testimonials-4.jpg\" class=\"testimonial-img\" alt=\"\">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class=\"swiper-slide\">
              <div class=\"testimonial-item\">
                <p>
                  <i class=\"bi bi-quote quote-icon-left\"></i>
                  <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.</span>
                  <i class=\"bi bi-quote quote-icon-right\"></i>
                </p>
                <img src=\"assets/img/testimonials/testimonials-5.jpg\" class=\"testimonial-img\" alt=\"\">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class=\"swiper-pagination\"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section -->

    <!-- Portfolio Section -->
    <section id=\"portfolio\" class=\"portfolio section\">

      <!-- Section Title -->
      <div class=\"container section-title\" data-aos=\"fade-up\">
        <h2>Portfolio</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class=\"container\">

        <div class=\"isotope-layout\" data-default-filter=\"*\" data-layout=\"masonry\" data-sort=\"original-order\">

          <ul class=\"portfolio-filters isotope-filters\" data-aos=\"fade-up\" data-aos-delay=\"100\">
            <li data-filter=\"*\" class=\"filter-active\">All</li>
            <li data-filter=\".filter-app\">App</li>
            <li data-filter=\".filter-product\">Product</li>
            <li data-filter=\".filter-branding\">Branding</li>
            <li data-filter=\".filter-books\">Books</li>
          </ul><!-- End Portfolio Filters -->

          <div class=\"row gy-4 isotope-container\" data-aos=\"fade-up\" data-aos-delay=\"200\">

            <div class=\"col-lg-4 col-md-6 portfolio-item isotope-item filter-app\">
              <div class=\"portfolio-content h-100\">
                <a href=\"assets/img/portfolio/app-1.jpg\" data-gallery=\"portfolio-gallery-app\" class=\"glightbox\"><img src=\"assets/img/portfolio/app-1.jpg\" class=\"img-fluid\" alt=\"\"></a>
                <div class=\"portfolio-info\">
                  <h4><a href=\"portfolio-details.html\" title=\"More Details\">App 1</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class=\"col-lg-4 col-md-6 portfolio-item isotope-item filter-product\">
              <div class=\"portfolio-content h-100\">
                <a href=\"assets/img/portfolio/product-1.jpg\" data-gallery=\"portfolio-gallery-app\" class=\"glightbox\"><img src=\"assets/img/portfolio/product-1.jpg\" class=\"img-fluid\" alt=\"\"></a>
                <div class=\"portfolio-info\">
                  <h4><a href=\"portfolio-details.html\" title=\"More Details\">Product 1</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class=\"col-lg-4 col-md-6 portfolio-item isotope-item filter-branding\">
              <div class=\"portfolio-content h-100\">
                <a href=\"assets/img/portfolio/branding-1.jpg\" data-gallery=\"portfolio-gallery-app\" class=\"glightbox\"><img src=\"assets/img/portfolio/branding-1.jpg\" class=\"img-fluid\" alt=\"\"></a>
                <div class=\"portfolio-info\">
                  <h4><a href=\"portfolio-details.html\" title=\"More Details\">Branding 1</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class=\"col-lg-4 col-md-6 portfolio-item isotope-item filter-books\">
              <div class=\"portfolio-content h-100\">
                <a href=\"assets/img/portfolio/books-1.jpg\" data-gallery=\"portfolio-gallery-app\" class=\"glightbox\"><img src=\"assets/img/portfolio/books-1.jpg\" class=\"img-fluid\" alt=\"\"></a>
                <div class=\"portfolio-info\">
                  <h4><a href=\"portfolio-details.html\" title=\"More Details\">Books 1</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class=\"col-lg-4 col-md-6 portfolio-item isotope-item filter-app\">
              <div class=\"portfolio-content h-100\">
                <a href=\"assets/img/portfolio/app-2.jpg\" data-gallery=\"portfolio-gallery-app\" class=\"glightbox\"><img src=\"assets/img/portfolio/app-2.jpg\" class=\"img-fluid\" alt=\"\"></a>
                <div class=\"portfolio-info\">
                  <h4><a href=\"portfolio-details.html\" title=\"More Details\">App 2</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class=\"col-lg-4 col-md-6 portfolio-item isotope-item filter-product\">
              <div class=\"portfolio-content h-100\">
                <a href=\"assets/img/portfolio/product-2.jpg\" data-gallery=\"portfolio-gallery-app\" class=\"glightbox\"><img src=\"assets/img/portfolio/product-2.jpg\" class=\"img-fluid\" alt=\"\"></a>
                <div class=\"portfolio-info\">
                  <h4><a href=\"portfolio-details.html\" title=\"More Details\">Product 2</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class=\"col-lg-4 col-md-6 portfolio-item isotope-item filter-branding\">
              <div class=\"portfolio-content h-100\">
                <a href=\"assets/img/portfolio/branding-2.jpg\" data-gallery=\"portfolio-gallery-app\" class=\"glightbox\"><img src=\"assets/img/portfolio/branding-2.jpg\" class=\"img-fluid\" alt=\"\"></a>
                <div class=\"portfolio-info\">
                  <h4><a href=\"portfolio-details.html\" title=\"More Details\">Branding 2</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class=\"col-lg-4 col-md-6 portfolio-item isotope-item filter-books\">
              <div class=\"portfolio-content h-100\">
                <a href=\"assets/img/portfolio/books-2.jpg\" data-gallery=\"portfolio-gallery-app\" class=\"glightbox\"><img src=\"assets/img/portfolio/books-2.jpg\" class=\"img-fluid\" alt=\"\"></a>
                <div class=\"portfolio-info\">
                  <h4><a href=\"portfolio-details.html\" title=\"More Details\">Books 2</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class=\"col-lg-4 col-md-6 portfolio-item isotope-item filter-app\">
              <div class=\"portfolio-content h-100\">
                <a href=\"assets/img/portfolio/app-3.jpg\" data-gallery=\"portfolio-gallery-app\" class=\"glightbox\"><img src=\"assets/img/portfolio/app-3.jpg\" class=\"img-fluid\" alt=\"\"></a>
                <div class=\"portfolio-info\">
                  <h4><a href=\"portfolio-details.html\" title=\"More Details\">App 3</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class=\"col-lg-4 col-md-6 portfolio-item isotope-item filter-product\">
              <div class=\"portfolio-content h-100\">
                <a href=\"assets/img/portfolio/product-3.jpg\" data-gallery=\"portfolio-gallery-app\" class=\"glightbox\"><img src=\"assets/img/portfolio/product-3.jpg\" class=\"img-fluid\" alt=\"\"></a>
                <div class=\"portfolio-info\">
                  <h4><a href=\"portfolio-details.html\" title=\"More Details\">Product 3</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class=\"col-lg-4 col-md-6 portfolio-item isotope-item filter-branding\">
              <div class=\"portfolio-content h-100\">
                <a href=\"assets/img/portfolio/branding-3.jpg\" data-gallery=\"portfolio-gallery-app\" class=\"glightbox\"><img src=\"assets/img/portfolio/branding-3.jpg\" class=\"img-fluid\" alt=\"\"></a>
                <div class=\"portfolio-info\">
                  <h4><a href=\"portfolio-details.html\" title=\"More Details\">Branding 3</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class=\"col-lg-4 col-md-6 portfolio-item isotope-item filter-books\">
              <div class=\"portfolio-content h-100\">
                <a href=\"assets/img/portfolio/books-3.jpg\" data-gallery=\"portfolio-gallery-app\" class=\"glightbox\"><img src=\"assets/img/portfolio/books-3.jpg\" class=\"img-fluid\" alt=\"\"></a>
                <div class=\"portfolio-info\">
                  <h4><a href=\"portfolio-details.html\" title=\"More Details\">Books 3</a></h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section><!-- /Portfolio Section -->

    <!-- Pricing Section -->
    <section id=\"pricing\" class=\"pricing section\">

      <!-- Section Title -->
      <div class=\"container section-title\" data-aos=\"fade-up\">
        <h2>Pricing</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class=\"container\">

        <div class=\"row gy-4\">

          <div class=\"col-lg-4\" data-aos=\"zoom-in\" data-aos-delay=\"100\">
            <div class=\"pricing-item\">
              <h3>Free Plan</h3>
              <h4><sup>\$</sup>0<span> / month</span></h4>
              <ul>
                <li><i class=\"bi bi-check\"></i> <span>Quam adipiscing vitae proin</span></li>
                <li><i class=\"bi bi-check\"></i> <span>Nec feugiat nisl pretium</span></li>
                <li><i class=\"bi bi-check\"></i> <span>Nulla at volutpat diam uteera</span></li>
                <li class=\"na\"><i class=\"bi bi-x\"></i> <span>Pharetra massa massa ultricies</span></li>
                <li class=\"na\"><i class=\"bi bi-x\"></i> <span>Massa ultricies mi quis hendrerit</span></li>
              </ul>
              <a href=\"#\" class=\"buy-btn\">Buy Now</a>
            </div>
          </div><!-- End Pricing Item -->

          <div class=\"col-lg-4\" data-aos=\"zoom-in\" data-aos-delay=\"200\">
            <div class=\"pricing-item featured\">
              <h3>Business Plan</h3>
              <h4><sup>\$</sup>29<span> / month</span></h4>
              <ul>
                <li><i class=\"bi bi-check\"></i> <span>Quam adipiscing vitae proin</span></li>
                <li><i class=\"bi bi-check\"></i> <span>Nec feugiat nisl pretium</span></li>
                <li><i class=\"bi bi-check\"></i> <span>Nulla at volutpat diam uteera</span></li>
                <li><i class=\"bi bi-check\"></i> <span>Pharetra massa massa ultricies</span></li>
                <li><i class=\"bi bi-check\"></i> <span>Massa ultricies mi quis hendrerit</span></li>
              </ul>
              <a href=\"#\" class=\"buy-btn\">Buy Now</a>
            </div>
          </div><!-- End Pricing Item -->

          <div class=\"col-lg-4\" data-aos=\"zoom-in\" data-aos-delay=\"300\">
            <div class=\"pricing-item\">
              <h3>Developer Plan</h3>
              <h4><sup>\$</sup>49<span> / month</span></h4>
              <ul>
                <li><i class=\"bi bi-check\"></i> <span>Quam adipiscing vitae proin</span></li>
                <li><i class=\"bi bi-check\"></i> <span>Nec feugiat nisl pretium</span></li>
                <li><i class=\"bi bi-check\"></i> <span>Nulla at volutpat diam uteera</span></li>
                <li><i class=\"bi bi-check\"></i> <span>Pharetra massa massa ultricies</span></li>
                <li><i class=\"bi bi-check\"></i> <span>Massa ultricies mi quis hendrerit</span></li>
              </ul>
              <a href=\"#\" class=\"buy-btn\">Buy Now</a>
            </div>
          </div><!-- End Pricing Item -->

        </div>

      </div>

    </section><!-- /Pricing Section -->

    <!-- Faq Section -->
    <section id=\"faq\" class=\"faq section\">

      <!-- Section Title -->
      <div class=\"container section-title\" data-aos=\"fade-up\">
        <h2>Frequently Asked Questions</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class=\"container\">

        <div class=\"row justify-content-center\">

          <div class=\"col-lg-10\" data-aos=\"fade-up\" data-aos-delay=\"100\">

            <div class=\"faq-container\">

              <div class=\"faq-item faq-active\">
                <h3>Non consectetur a erat nam at lectus urna duis?</h3>
                <div class=\"faq-content\">
                  <p>Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.</p>
                </div>
                <i class=\"faq-toggle bi bi-chevron-right\"></i>
              </div><!-- End Faq item-->

              <div class=\"faq-item\">
                <h3>Feugiat scelerisque varius morbi enim nunc faucibus?</h3>
                <div class=\"faq-content\">
                  <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
                </div>
                <i class=\"faq-toggle bi bi-chevron-right\"></i>
              </div><!-- End Faq item-->

              <div class=\"faq-item\">
                <h3>Dolor sit amet consectetur adipiscing elit pellentesque?</h3>
                <div class=\"faq-content\">
                  <p>Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis</p>
                </div>
                <i class=\"faq-toggle bi bi-chevron-right\"></i>
              </div><!-- End Faq item-->

              <div class=\"faq-item\">
                <h3>Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?</h3>
                <div class=\"faq-content\">
                  <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
                </div>
                <i class=\"faq-toggle bi bi-chevron-right\"></i>
              </div><!-- End Faq item-->

              <div class=\"faq-item\">
                <h3>Tempus quam pellentesque nec nam aliquam sem et tortor?</h3>
                <div class=\"faq-content\">
                  <p>Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in</p>
                </div>
                <i class=\"faq-toggle bi bi-chevron-right\"></i>
              </div><!-- End Faq item-->

              <div class=\"faq-item\">
                <h3>Perspiciatis quod quo quos nulla quo illum ullam?</h3>
                <div class=\"faq-content\">
                  <p>Enim ea facilis quaerat voluptas quidem et dolorem. Quis et consequatur non sed in suscipit sequi. Distinctio ipsam dolore et.</p>
                </div>
                <i class=\"faq-toggle bi bi-chevron-right\"></i>
              </div><!-- End Faq item-->

            </div>

          </div><!-- End Faq Column-->

        </div>

      </div>

    </section><!-- /Faq Section -->

    <!-- Team Section -->
    <section id=\"team\" class=\"team section\">

      <!-- Section Title -->
      <div class=\"container section-title\" data-aos=\"fade-up\">
        <h2>Team</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class=\"container\">

        <div class=\"row gy-4\">

          <div class=\"col-lg-3 col-md-6 d-flex align-items-stretch\" data-aos=\"fade-up\" data-aos-delay=\"100\">
            <div class=\"team-member\">
              <div class=\"member-img\">
                <img src=\"assets/img/team/team-1.jpg\" class=\"img-fluid\" alt=\"\">
                <div class=\"social\">
                  <a href=\"\"><i class=\"bi bi-twitter-x\"></i></a>
                  <a href=\"\"><i class=\"bi bi-facebook\"></i></a>
                  <a href=\"\"><i class=\"bi bi-instagram\"></i></a>
                  <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>
                </div>
              </div>
              <div class=\"member-info\">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
                <p>Velit aut quia fugit et et. Dolorum ea voluptate vel tempore tenetur ipsa quae aut. Ipsum exercitationem iure minima enim corporis et voluptate.</p>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class=\"col-lg-3 col-md-6 d-flex align-items-stretch\" data-aos=\"fade-up\" data-aos-delay=\"200\">
            <div class=\"team-member\">
              <div class=\"member-img\">
                <img src=\"assets/img/team/team-2.jpg\" class=\"img-fluid\" alt=\"\">
                <div class=\"social\">
                  <a href=\"\"><i class=\"bi bi-twitter-x\"></i></a>
                  <a href=\"\"><i class=\"bi bi-facebook\"></i></a>
                  <a href=\"\"><i class=\"bi bi-instagram\"></i></a>
                  <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>
                </div>
              </div>
              <div class=\"member-info\">
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
                <p>Quo esse repellendus quia id. Est eum et accusantium pariatur fugit nihil minima suscipit corporis. Voluptate sed quas reiciendis animi neque sapiente.</p>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class=\"col-lg-3 col-md-6 d-flex align-items-stretch\" data-aos=\"fade-up\" data-aos-delay=\"300\">
            <div class=\"team-member\">
              <div class=\"member-img\">
                <img src=\"assets/img/team/team-3.jpg\" class=\"img-fluid\" alt=\"\">
                <div class=\"social\">
                  <a href=\"\"><i class=\"bi bi-twitter-x\"></i></a>
                  <a href=\"\"><i class=\"bi bi-facebook\"></i></a>
                  <a href=\"\"><i class=\"bi bi-instagram\"></i></a>
                  <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>
                </div>
              </div>
              <div class=\"member-info\">
                <h4>William Anderson</h4>
                <span>CTO</span>
                <p>Vero omnis enim consequatur. Voluptas consectetur unde qui molestiae deserunt. Voluptates enim aut architecto porro aspernatur molestiae modi.</p>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class=\"col-lg-3 col-md-6 d-flex align-items-stretch\" data-aos=\"fade-up\" data-aos-delay=\"400\">
            <div class=\"team-member\">
              <div class=\"member-img\">
                <img src=\"assets/img/team/team-4.jpg\" class=\"img-fluid\" alt=\"\">
                <div class=\"social\">
                  <a href=\"\"><i class=\"bi bi-twitter-x\"></i></a>
                  <a href=\"\"><i class=\"bi bi-facebook\"></i></a>
                  <a href=\"\"><i class=\"bi bi-instagram\"></i></a>
                  <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>
                </div>
              </div>
              <div class=\"member-info\">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
                <p>Rerum voluptate non adipisci animi distinctio et deserunt amet voluptas. Quia aut aliquid doloremque ut possimus ipsum officia.</p>
              </div>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>

    </section><!-- /Team Section -->

    <!-- Contact Section -->
    <section id=\"contact\" class=\"contact section\">

      <!-- Section Title -->
      <div class=\"container section-title\" data-aos=\"fade-up\">
        <h2>Contact</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class=\"container\" data-aos=\"fade-up\" data-aos-delay=\"100\">

        <div class=\"row gy-4\">

          <div class=\"col-lg-6\">

            <div class=\"row gy-4\">
              <div class=\"col-md-6\">
                <div class=\"info-item\" data-aos=\"fade\" data-aos-delay=\"200\">
                  <i class=\"bi bi-geo-alt\"></i>
                  <h3>Address</h3>
                  <p>A108 Adam Street</p>
                  <p>New York, NY 535022</p>
                </div>
              </div><!-- End Info Item -->

              <div class=\"col-md-6\">
                <div class=\"info-item\" data-aos=\"fade\" data-aos-delay=\"300\">
                  <i class=\"bi bi-telephone\"></i>
                  <h3>Call Us</h3>
                  <p>+1 5589 55488 55</p>
                  <p>+1 6678 254445 41</p>
                </div>
              </div><!-- End Info Item -->

              <div class=\"col-md-6\">
                <div class=\"info-item\" data-aos=\"fade\" data-aos-delay=\"400\">
                  <i class=\"bi bi-envelope\"></i>
                  <h3>Email Us</h3>
                  <p>info@example.com</p>
                  <p>contact@example.com</p>
                </div>
              </div><!-- End Info Item -->

              <div class=\"col-md-6\">
                <div class=\"info-item\" data-aos=\"fade\" data-aos-delay=\"500\">
                  <i class=\"bi bi-clock\"></i>
                  <h3>Open Hours</h3>
                  <p>Monday - Friday</p>
                  <p>9:00AM - 05:00PM</p>
                </div>
              </div><!-- End Info Item -->

            </div>

          </div>

          <div class=\"col-lg-6\">
            <form action=\"forms/contact.php\" method=\"post\" class=\"php-email-form\" data-aos=\"fade-up\" data-aos-delay=\"200\">
              <div class=\"row gy-4\">

                <div class=\"col-md-6\">
                  <input type=\"text\" name=\"name\" class=\"form-control\" placeholder=\"Your Name\" required=\"\">
                </div>

                <div class=\"col-md-6 \">
                  <input type=\"email\" class=\"form-control\" name=\"email\" placeholder=\"Your Email\" required=\"\">
                </div>

                <div class=\"col-12\">
                  <input type=\"text\" class=\"form-control\" name=\"subject\" placeholder=\"Subject\" required=\"\">
                </div>

                <div class=\"col-12\">
                  <textarea class=\"form-control\" name=\"message\" rows=\"6\" placeholder=\"Message\" required=\"\"></textarea>
                </div>

                <div class=\"col-12 text-center\">
                  <div class=\"loading\">Loading</div>
                  <div class=\"error-message\"></div>
                  <div class=\"sent-message\">Your message has been sent. Thank you!</div>

                  <button type=\"submit\">Send Message</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id=\"footer\" class=\"footer accent-background\">

    <div class=\"container footer-top\">
      <div class=\"row gy-4\">
        <div class=\"col-lg-5 col-md-12 footer-about\">
          <a href=\"index.html\" class=\"logo d-flex align-items-center\">
            <span class=\"sitename\">Techie</span>
          </a>
          <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
          <div class=\"social-links d-flex mt-4\">
            <a href=\"\"><i class=\"bi bi-twitter-x\"></i></a>
            <a href=\"\"><i class=\"bi bi-facebook\"></i></a>
            <a href=\"\"><i class=\"bi bi-instagram\"></i></a>
            <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>
          </div>
        </div>

        <div class=\"col-lg-2 col-6 footer-links\">
          <h4>Useful Links</h4>
          <ul>
            <li><a href=\"#\">Home</a></li>
            <li><a href=\"#\">About us</a></li>
            <li><a href=\"#\">Services</a></li>
            <li><a href=\"#\">Terms of service</a></li>
            <li><a href=\"#\">Privacy policy</a></li>
          </ul>
        </div>

        <div class=\"col-lg-2 col-6 footer-links\">
          <h4>Our Services</h4>
          <ul>
            <li><a href=\"#\">Web Design</a></li>
            <li><a href=\"#\">Web Development</a></li>
            <li><a href=\"#\">Product Management</a></li>
            <li><a href=\"#\">Marketing</a></li>
            <li><a href=\"#\">Graphic Design</a></li>
          </ul>
        </div>

        <div class=\"col-lg-3 col-md-12 footer-contact text-center text-md-start\">
          <h4>Contact Us</h4>
          <p>A108 Adam Street</p>
          <p>New York, NY 535022</p>
          <p>United States</p>
          <p class=\"mt-4\"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
          <p><strong>Email:</strong> <span>info@example.com</span></p>
        </div>

      </div>
    </div>

    <div class=\"container copyright text-center mt-4\">
      <p>© <span>Copyright</span> <strong class=\"px-1 sitename\">Techie</strong> <span>All Rights Reserved</span></p>
      <div class=\"credits\">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href=\"https://bootstrapmade.com/\">BootstrapMade</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href=\"#\" id=\"scroll-top\" class=\"scroll-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

  <!-- Preloader -->
  <div id=\"preloader\"></div>

</body>

</html>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/techie/templates/layout/page.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  44 => 42,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/techie/templates/layout/page.html.twig", "/var/www/html/web/themes/techie/templates/layout/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

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
}
