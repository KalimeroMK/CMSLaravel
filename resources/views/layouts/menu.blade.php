@section('menu')


<div class="header-container">

    <!-- ================ -->
    <header class="header dark centered fixed fixed-desktop clearfix">

      <div class="container">
        <div class="row">

          <div class="col-md-12">
            <!-- header-first start -->
            <!-- ================ -->
            <div class="header-first clearfix hidden-md-down">

              <div id="logo" class="logo">
                <a href="/"><img id="logo_img" src="/assets/img/logo/{{ $settings->logo }}"
                   style="height: 50px"
                   alt="Olimpik"></a>
               </div>

           </div>
           <!-- header-first end -->
       </div>

       <div class="col-md-12">
        <!-- header-second start -->
        <!-- ================ -->
        <div class="header-second d-lg-flex d-xl-flex justify-content-xl-center justify-content-lg-center clearfix">

            <!-- main-navigation start -->
            <!-- classes: -->
            <!-- "onclick": Makes the dropdowns open on click, this the default bootstrap behavior e.g. class="main-navigation onclick" -->
            <!-- "animated": Enables animations on dropdowns opening e.g. class="main-navigation animated" -->
            <!-- ================ -->
            <div class="main-navigation main-navigation--mega-menu  animated">
              <nav class="navbar navbar-expand-lg navbar-light p-0">
                <div class="navbar-brand clearfix hidden-lg-up">

                  <!-- logo -->
                  <div id="logo-mobile" class="logo">
                    <a href="index.html"><img id="logo-img-mobile" src="images/logo_light_blue.png" alt="The Project"></a>
                </div>

                <!-- name-and-slogan -->
                <div class="site-slogan">
                    Multipurpose HTML5 Template
                </div>

            </div>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse-1" aria-controls="navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbar-collapse-1">
              <!-- main-menu -->
              <ul class="navbar-nav ml-xl-auto">

                <!-- mega-menu start -->
                <li class="nav-item dropdown active mega-menu mega-menu--wide">
                  <a href="index.html" class="nav-link dropdown-toggle" id="first-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home</a>
                  <ul class="dropdown-menu" aria-labelledby="first-dropdown">
                    <li>
                      <div class="row">
                        <div class="col-md-12">
                          <h4 class="title"><i class="fa fa-laptop pr-2"></i> Demos</h4>
                          <div class="row">
                            <div class="col-lg-3">
                              <div class="divider"></div>
                              <ul class="menu">
                                <li ><a href="index.html"><i class="fa fa-home pr-2"></i>Home Default</a></li>
                                <li ><a href="index-rtl.html"><i class="fa fa-home pr-2"></i>Home Default - RTL <span class="badge">v1.4</span></a></li>
                                <li ><a href="index-corporate-1.html"><i class="fa fa-suitcase pr-2"></i>Corporate 1</a></li>
                                <li ><a href="index-corporate-2.html"><i class="fa fa-suitcase pr-2"></i>Corporate 2</a></li>
                                <li ><a href="index-corporate-3.html"><i class="fa fa-suitcase pr-2"></i>Corporate 3</a></li>
                                <li ><a href="index-corporate-4.html"><i class="fa fa-suitcase pr-2"></i>Corporate 4 <span class="badge">v1.2</span></a></li>
                                <li ><a href="index-corporate-5.html"><i class="fa fa-suitcase pr-2"></i>Corporate 5 (Law Firm) <span class="badge">v1.3</span></a></li>
                                <li ><a href="index-corporate-6.html"><i class="fa fa-suitcase pr-2"></i>Corporate 6<span class="badge">new</span></a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3">
                          <div class="divider"></div>
                          <ul class="menu">
                            <li ><a href="index-shop.html"><i class="fa fa-shopping-basket pr-2"></i>Commerce 1</a></li>
                            <li ><a href="index-shop-2.html"><i class="fa fa-shopping-basket pr-2"></i>Commerce 2</a></li>
                            <li ><a href="index-portfolio.html"><i class="fa fa-briefcase pr-2"></i>Portfolio/Agency</a></li>
                            <li ><a href="index-portfolio-2.html"><i class="fa fa-camera pr-2"></i>Portfolio 2 <span class="badge">v1.4</span></a></li>
                            <li ><a href="index-medical.html"><i class="fa fa-ambulance pr-2"></i>Medical</a></li>
                            <li ><a href="index-restaurant.html"><i class="fa fa-cutlery pr-2"></i>Restaurant</a></li>
                            <li ><a href="index-restaurant-2.html"><i class="fa fa-cutlery pr-2"></i>Restaurant 2 <span class="badge">v1.3</span></a></li>
                            <li ><a href="index-wedding.html"><i class="fa fa-heart pr-2"></i>Wedding</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3">
                      <div class="divider"></div>
                      <ul class="menu">
                        <li ><a href="index-landing.html"><i class="fa fa-star pr-2"></i>Landing Page</a></li>
                        <li ><a href="index-landing-2.html"><i class="fa fa-star pr-2"></i>Landing Page 2 <span class="badge">v1.3</span></a></li>
                        <li ><a href="page-coming-soon.html"><i class="fa fa-clock-o pr-2"></i>Coming Soon</a></li>
                        <li ><a href="index-one-page.html"><i class="fa fa-home pr-2"></i>One Page Version</a></li>
                        <li ><a href="index-construction.html"><i class="fa fa-building pr-2"></i>Construction <span class="badge">v1.1</span></a></li>
                        <li ><a href="index-education.html"><i class="fa fa-graduation-cap pr-2"></i>Education <span class="badge">v1.1</span></a></li>
                        <li ><a href="index-hotel.html"><i class="fa fa-bed pr-2"></i>Hotel <span class="badge">v1.1</span></a></li>
                        <li ><a href="index-blog.html"><i class="fa fa-pencil pr-2"></i>Blog <span class="badge">v1.1</span></a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                  <div class="divider"></div>
                  <ul class="menu">
                    <li class="active"><a href="index-blog-2.html"><i class="fa fa-pencil pr-2"></i>Blog 2<span class="badge">v1.3</span></a></li>
                    <li ><a href="index-beauty.html"><i class="fa fa-magic pr-2"></i>Beauty Center <span class="badge">v1.1</span></a></li>
                    <li ><a href="index-gym.html"><i class="fa fa-heartbeat pr-2"></i>Gym <span class="badge">v1.2</span></a></li>
                    <li ><a href="index-resume.html"><i class="fa fa-user pr-2"></i>Resume <span class="badge">v1.2</span></a></li>
                    <li ><a href="index-agency.html"><i class="fa fa-users pr-2"></i>Agency <span class="badge">v1.2</span></a></li>
                    <li ><a href="index-agency-2.html"><i class="fa fa-users pr-2"></i>Agency 2<span class="badge">new</span></a></li>
                    <li ><a href="index-logistics.html"><i class="fa fa-truck pr-2"></i>Logistics <span class="badge">v1.2</span></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
</li>
</ul>
</li>
<!-- mega-menu end -->
<!-- mega-menu start -->
<li class="nav-item dropdown  mega-menu mega-menu--wide">
  <a href="#" class="nav-link dropdown-toggle" id="second-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
  <ul class="dropdown-menu" aria-labelledby="second-dropdown">
    <li>
      <div class="row">
        <div class="col-lg-8">
          <h4 class="title">Pages</h4>
          <div class="row">
            <div class="col-lg-4">
              <div class="divider"></div>
              <ul class="menu">
                <li ><a href="page-about.html"><i class="fa fa-angle-right"></i>About Us 1</a></li>
                <li ><a href="page-about-2.html"><i class="fa fa-angle-right"></i>About Us 2</a></li>
                <li ><a href="page-about-3.html"><i class="fa fa-angle-right"></i>About Us 3</a></li>
                <li ><a href="page-about-4.html"><i class="fa fa-angle-right"></i>About Us 4</a></li>
                <li ><a href="page-about-me.html"><i class="fa fa-angle-right"></i>About Me</a></li>
                <li ><a href="page-team.html"><i class="fa fa-angle-right"></i>Our Team - Options 1</a></li>
                <li ><a href="page-team-2.html"><i class="fa fa-angle-right"></i>Our Team - Options 2</a></li>
                <li ><a href="page-team-3.html"><i class="fa fa-angle-right"></i>Our Team - Options 3</a></li>
                <li ><a href="page-coming-soon.html"><i class="fa fa-angle-right"></i>Coming Soon Page</a></li>
                <li ><a href="page-faq.html"><i class="fa fa-angle-right"></i>FAQ page</a></li>
            </ul>
        </div>
        <div class="col-lg-4">
          <div class="divider"></div>
          <ul class="menu">
            <li ><a href="page-services.html"><i class="fa fa-angle-right"></i>Services 1</a></li>
            <li ><a href="page-services-2.html"><i class="fa fa-angle-right"></i>Services 2</a></li>
            <li ><a href="page-services-3.html"><i class="fa fa-angle-right"></i>Services 3</a></li>
            <li ><a href="page-contact.html"><i class="fa fa-angle-right"></i>Contact 1</a></li>
            <li ><a href="page-contact-2.html"><i class="fa fa-angle-right"></i>Contact 2</a></li>
            <li ><a href="page-contact-3.html"><i class="fa fa-angle-right"></i>Contact 3</a></li>
            <li ><a href="page-login.html"><i class="fa fa-angle-right"></i>Login 1</a></li>
            <li ><a href="page-login-2.html"><i class="fa fa-angle-right"></i>Login 2 - Fullsreen</a></li>
            <li ><a href="page-signup.html"><i class="fa fa-angle-right"></i>Sign Up 1</a></li>
            <li ><a href="page-signup-2.html"><i class="fa fa-angle-right"></i>Sign Up 2 - Fullsreen</a></li>
        </ul>
    </div>
    <div class="col-lg-4">
      <div class="divider"></div>
      <ul class="menu">
        <li ><a href="page-404.html"><i class="fa fa-angle-right"></i>404 error</a></li>
        <li ><a href="page-404-2.html"><i class="fa fa-angle-right"></i>404 error - Fullscreen</a></li>
        <li ><a href="page-left-sidebar.html"><i class="fa fa-angle-right"></i>Left Sidebar</a></li>
        <li ><a href="page-right-sidebar.html"><i class="fa fa-angle-right"></i>Right Sidebar</a></li>
        <li ><a href="page-two-sidebars.html"><i class="fa fa-angle-right"></i>Two Sidebars</a></li>
        <li ><a href="page-two-sidebars-left.html"><i class="fa fa-angle-right"></i>Two Sidebars Left</a></li>
        <li ><a href="page-two-sidebars-right.html"><i class="fa fa-angle-right"></i>Two Sidebars Right</a></li>
        <li ><a href="page-no-sidebars.html"><i class="fa fa-angle-right"></i>No Sidebars</a></li>
        <li ><a href="page-sitemap.html"><i class="fa fa-angle-right"></i>Sitemap</a></li>
    </ul>
</div>
</div>
</div>
<div class="col-lg-4 col-md-3 hidden-md-down">
  <h4 class="title">Premium HTML5 Template</h4>
  <p class="mb-2">The Project is perfectly suitable for corporate, business and company webpages.</p>
  <img src="images/section-image-3.png" alt="The Project">
</div>
</div>
</li>
</ul>
</li>
<!-- mega-menu end -->
<li class="nav-item dropdown ">
  <a href="#" class="nav-link dropdown-toggle" id="third-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Features</a>
  <ul class="dropdown-menu" aria-labelledby="third-dropdown">
    <li class="dropdown ">
      <a  class="dropdown-toggle" data-toggle="dropdown" href="#">Headers <span class="badge">v1.2</span></a>
      <ul class="dropdown-menu">
        <li ><a href="features-headers-default.html">Default/Semi-Transparent</a></li>
        <li ><a href="features-headers-default-dark.html">Dark/Semi-Transparent</a></li>
        <li ><a href="features-headers-gradient-dark.html">Gradient Dark <span class="badge">v1.2</span></a></li>
        <li ><a href="features-headers-gradient-light.html">Gradient Light <span class="badge">v1.2</span></a></li>
        <li ><a href="features-headers-classic.html">Classic Light</a></li>
        <li ><a href="features-headers-classic-dark.html">Classic Dark</a></li>
        <li ><a href="features-headers-colored.html">Colored/Light</a></li>
        <li ><a href="features-headers-colored-dark.html">Colored/Dark</a></li>
        <li ><a href="features-headers-full-width.html">Full Width</a></li>
        <li ><a href="features-headers-offcanvas-left.html">Offcanvas Left Side</a></li>
        <li ><a href="features-headers-offcanvas-right.html">Offcanvas Right Side</a></li>
        <li ><a href="features-headers-logo-centered.html">Logo Centered</a></li>
        <li ><a href="features-headers-slider-top.html">Slider Top</a></li>
        <li ><a href="features-headers-simple.html">Simple Static</a></li>
    </ul>
</li>
<li class="dropdown ">
  <a  class="dropdown-toggle" data-toggle="dropdown" href="#">Menus <span class="badge">new</span></a>
  <ul class="dropdown-menu">
    <li ><a href="features-headers-default.html">Default/On Hover Menu</a></li>
    <li ><a href="features-menus-onhover-no-animations.html">On Hover Menu - No Animations</a></li>
    <li ><a href="features-menus-onclick.html">On Click Menu - With Animations</a></li>
    <li ><a href="features-menus-onclick-no-animations.html">On Click Menu - No Animations</a></li>
    <li ><a href="features-menus-style-2.html">Menu Style 2 <span class="badge">new</span></a></li>
</ul>
</li>
<li class="dropdown ">
  <a  class="dropdown-toggle" data-toggle="dropdown" href="#">Footers <span class="badge">new</span></a>
  <ul class="dropdown-menu">
    <li ><a href="features-footers-default.html#footer">Default</a></li>
    <li ><a href="features-footers-contact-form.html#footer">Contact Form</a></li>
    <li ><a href="features-footers-contact-form-2.html#footer">Contact Form 2 <span class="badge">v1.2</span></a></li>
    <li ><a href="features-footers-contact-form-3.html#footer">Contact Form 3 <span class="badge">new</span></a></li>
    <li ><a href="features-footers-google-maps.html#footer">Google Maps</a></li>
    <li ><a href="features-footers-subscribe.html#footer">Subscribe Form</a></li>
    <li ><a href="features-footers-minimal.html#footer">Minimal</a></li>
    <li ><a href="features-footers-links.html#footer">Links <span class="badge">v1.1</span></a></li>
    <li ><a href="features-footers-full-width.html#footer">Full Width <span class="badge">v1.2</span></a></li>
</ul>
</li>
<li class="dropdown ">
  <a  class="dropdown-toggle" data-toggle="dropdown" href="#">Main Sliders <span class="badge">new</span></a>
  <ul class="dropdown-menu">
    <li ><a href="features-sliders-fullscreen.html">Full Screen</a></li>
    <li ><a href="features-sliders-fullscreen-2.html">Full Screen 2 <span class="badge">new</span></a></li>
    <li ><a href="features-sliders-fullwidth.html">Full Width</a></li>
    <li ><a href="features-sliders-fullwidth-big-height.html">Full Width - Big Height</a></li>
    <li ><a href="features-sliders-boxedwidth-light.html">Boxed Width - Light Bg</a></li>
    <li ><a href="features-sliders-boxedwidth-dark.html">Boxed Width - Dark Bg</a></li>
    <li ><a href="features-sliders-boxedwidth-default.html">Boxed Width - Default Bg</a></li>
    <li ><a href="features-sliders-video-background.html">Video Background</a></li>
    <li ><a href="features-sliders-text-rotator.html">Text Rotator</a></li>
</ul>
</li>
<li class="dropdown">
  <a  class="dropdown-toggle" data-toggle="dropdown" href="#">Email Templates <span class="badge">v1.1</span></a>
  <ul class="dropdown-menu">
    <li><a target="_blank" href="email_templates/email_template_blue.html">Blue</a></li>
    <li><a target="_blank" href="email_templates/email_template_brown.html">Brown</a></li>
    <li><a target="_blank" href="email_templates/email_template_cool_green.html">Cool Green</a></li>
    <li><a target="_blank" href="email_templates/email_template_dark_cyan.html">Dark Cyan</a></li>
    <li><a target="_blank" href="email_templates/email_template_dark_red.html">Dark Red</a></li>
    <li><a target="_blank" href="email_templates/email_template_gold.html">Gold</a></li>
    <li><a target="_blank" href="email_templates/email_template_gray.html">Gray</a></li>
    <li><a target="_blank" href="email_templates/email_template_green.html">Green</a></li>
    <li><a target="_blank" href="email_templates/email_template_light_blue.html">Light Blue</a></li>
    <li><a target="_blank" href="email_templates/email_template_orange.html">Orange</a></li>
    <li><a target="_blank" href="email_templates/email_template_pink.html">Pink</a></li>
    <li><a target="_blank" href="email_templates/email_template_purple.html">Purple</a></li>
    <li><a target="_blank" href="email_templates/email_template_red.html">Red</a></li>
    <li><a target="_blank" href="email_templates/email_template_vivid_red.html">Vivid Red</a></li>
</ul>
</li>
<li class="dropdown ">
  <a  class="dropdown-toggle" data-toggle="dropdown" href="#">Pricing Tables</a>
  <ul class="dropdown-menu">
    <li ><a href="features-pricing-tables-1.html">Pricing Tables 1</a></li>
    <li ><a href="features-pricing-tables-2.html">Pricing Tables 2</a></li>
    <li ><a href="features-pricing-tables-3.html">Pricing Tables 3</a></li>
</ul>
</li>
<li class="dropdown ">
  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Icons</a>
  <ul class="dropdown-menu">
    <li ><a href="features-icons-fontawesome.html">Font Awesome</a></li>
</ul>
</li>
<li ><a href="features-dark-page.html">Dark Page</a></li>
<li class="dropdown ">
  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Typography <span class="badge">new</span></a>
  <ul class="dropdown-menu">
    <li ><a href="features-typography.html">Font Scheme 1</a></li>
    <li ><a href="features-typography-2.html">Font Scheme 2</a></li>
    <li ><a href="features-typography-3.html">Font Scheme 3 <span class="badge">new</span></a></li>
</ul>
</li>
<li ><a href="features-backgrounds.html">Backgrounds</a></li>
<li ><a href="features-grid.html">Grid</a></li>
</ul>
</li>
<!-- mega-menu start -->
<li class="nav-item dropdown  mega-menu mega-menu--narrow">
  <a href="#" class="nav-link dropdown-toggle" id="fourth-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Components</a>
  <ul class="dropdown-menu" aria-labelledby="fourth-dropdown">
    <li>
      <div class="row">
        <div class="col-md-12">
          <h4 class="title"><i class="fa fa-magic pr-2"></i> Components</h4>
          <div class="row">
            <div class="col-lg-6">
              <div class="divider"></div>
              <ul class="menu">
                <li ><a href="components-social-icons.html"><i class="fa fa-share-alt pr-2"></i>Social Icons</a></li>
                <li ><a href="components-buttons.html"><i class="fa fa-flask pr-2"></i>Buttons</a></li>
                <li ><a href="components-forms.html"><i class="fa fa-align-justify pr-2"></i>Forms</a></li>
                <li ><a href="components-tabs-and-pills.html"><i class=" fa fa-list-ul pr-2"></i>Tabs &amp; Pills</a></li>
                <li ><a href="components-accordions.html"><i class="fa fa-bars pr-2"></i>Accordions</a></li>
                <li ><a href="components-progress-bars.html"><i class="fa fa-line-chart pr-2"></i>Progress Bars</a></li>
                <li ><a href="components-call-to-action.html"><i class="fa fa-comments-o pr-2"></i>Call to Action Blocks</a></li>
                <li ><a href="components-alerts-and-callouts.html"><i class="fa fa-info-circle pr-2"></i>Alerts &amp; Callouts</a></li>
                <li ><a href="components-content-sliders.html"><i class="fa fa-star pr-2"></i>Content Sliders</a></li>
                <li ><a href="components-charts.html"><i class="fa fa-pie-chart pr-2"></i>Charts</a></li>
                <li ><a href="components-page-loaders.html"><i class="fa fa-circle-o-notch fa-spin"></i>Page Loaders <span class="badge">v1.1</span></a></li>
                <li ><a href="components-icon-boxes.html"><i class="fa fa-picture-o pr-2"></i>Icon Boxes</a></li>
            </ul>
        </div>
        <div class="col-lg-6">
          <div class="divider"></div>
          <ul class="menu">
            <li ><a href="components-image-boxes.html"><i class="fa fa-camera pr-2"></i>Image Boxes</a></li>
            <li ><a href="components-fullwidth-sections.html"><i class="fa fa-code pr-2"></i>Full Width Sections</a></li>
            <li ><a href="components-animations.html"><i class="fa fa-heart pr-2"></i>Animations</a></li>
            <li ><a href="components-video-and-audio.html"><i class="fa fa-play pr-2"></i>Video</a></li>
            <li ><a href="components-lightbox.html"><i class="fa fa-plus pr-2"></i>Lightbox</a></li>
            <li ><a href="components-counters.html"><i class="fa fa-sort-numeric-desc pr-2"></i>Counters</a></li>
            <li ><a href="components-modals.html"><i class="fa fa-arrows-alt pr-2"></i>Modals</a></li>
            <li ><a href="components-tables.html"><i class="fa fa-table pr-2"></i>Tables</a></li>
            <li ><a href="components-text-rotators.html"><i class="fa fa-rotate-left pr-2"></i>Text Rotators</a></li>
            <li ><a href="components-announcement-default.html"><i class="fa fa-bullhorn pr-2"></i>Announcements <span class="badge">v1.3</span></a></li>
            <li ><a href="components-separators.html"><i class="fa fa-star pr-2"></i>Separators <span class="badge">v1.3</span></a></li>
        </ul>
    </div>
</div>
</div>
</div>
</li>
</ul>
</li>
<!-- mega-menu end -->
<li class="nav-item dropdown ">
  <a href="portfolio-grid-2-3-col.html" class="nav-link dropdown-toggle" id="fifth-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Portfolio</a>
  <ul class="dropdown-menu" aria-labelledby="fifth-dropdown">
    <li class="dropdown ">
      <a  class="dropdown-toggle" data-toggle="dropdown" href="#">Portfolio Grid 1</a>
      <ul class="dropdown-menu">
        <li ><a href="portfolio-grid-1-2-col.html">2 Column</a></li>
        <li ><a href="portfolio-grid-1-3-col.html">3 Column</a></li>
        <li ><a href="portfolio-grid-1-4-col.html">4 Column</a></li>
        <li ><a href="portfolio-grid-1-sidebar.html">With Sidebar</a></li>
    </ul>
</li>
<li class="dropdown ">
  <a  class="dropdown-toggle" data-toggle="dropdown" href="#">Portfolio Grid 2</a>
  <ul class="dropdown-menu">
    <li ><a href="portfolio-grid-2-2-col.html">2 Column</a></li>
    <li ><a href="portfolio-grid-2-3-col.html">3 Column</a></li>
    <li ><a href="portfolio-grid-2-4-col.html">4 Column</a></li>
    <li ><a href="portfolio-grid-2-sidebar.html">With Sidebar</a></li>
</ul>
</li>
<li class="dropdown ">
  <a  class="dropdown-toggle" data-toggle="dropdown" href="#">Portfolio Grid 3 - Dark</a>
  <ul class="dropdown-menu">
    <li ><a href="portfolio-grid-3-2-col.html">2 Column</a></li>
    <li ><a href="portfolio-grid-3-3-col.html">3 Column</a></li>
    <li ><a href="portfolio-grid-3-4-col.html">4 Column</a></li>
    <li ><a href="portfolio-grid-3-sidebar.html">With Sidebar</a></li>
</ul>
</li>
<li class="dropdown ">
  <a  class="dropdown-toggle" data-toggle="dropdown" href="#">Portfolio Fullwidth</a>
  <ul class="dropdown-menu">
    <li ><a href="portfolio-fullwidth-2-col.html">2 Column</a></li>
    <li ><a href="portfolio-fullwidth-3-col.html">3 Column</a></li>
    <li ><a href="portfolio-fullwidth-4-col.html">4 Column</a></li>
</ul>
</li>
<li class="dropdown ">
  <a  class="dropdown-toggle" data-toggle="dropdown" href="#">Portfolio List</a>
  <ul class="dropdown-menu">
    <li ><a href="portfolio-list-1.html">List - Large Images</a></li>
    <li ><a href="portfolio-list-2.html">List - Small Images</a></li>
    <li ><a href="portfolio-list-sidebar.html">With Sidebar</a></li>
</ul>
</li>
<li ><a href="portfolio-item.html">Single Item 1</a></li>
<li ><a href="portfolio-item-2.html">Single Item 2</a></li>
<li ><a href="portfolio-item-3.html">Single Item 3</a></li>
</ul>
</li>
<li class="nav-item dropdown ">
  <a href="index-shop.html" class="nav-link dropdown-toggle" id="sixth-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
  <ul class="dropdown-menu" aria-labelledby="sixth-dropdown">
    <li ><a href="index-shop.html">Shop Home 1</a></li>
    <li ><a href="index-shop-2.html">Shop Home 2</a></li>
    <li ><a href="shop-listing-4col.html">Grid - 4 Columns</a></li>
    <li ><a href="shop-listing-3col.html">Grid - 3 Columns</a></li>
    <li ><a href="shop-listing-2col.html">Grid - 2 Columns</a></li>
    <li ><a href="shop-listing-sidebar.html">Grid - With Sidebar</a></li>
    <li ><a href="shop-listing-list.html">List</a></li>
    <li ><a href="shop-product.html">Product Page</a></li>
    <li ><a href="shop-product-2.html">Product Page 2 <span class="badge">v1.3</span></a></li>
    <li ><a href="shop-cart.html">Shopping Cart</a></li>
    <li ><a href="shop-checkout.html">Checkout Page - Step 1</a></li>
    <li ><a href="shop-checkout-payment.html">Checkout Page - Step 2</a></li>
    <li ><a href="shop-checkout-review.html">Checkout Page - Step 3</a></li>
    <li ><a href="shop-invoice.html">Invoice</a></li>
</ul>
</li>
<li class="nav-item dropdown ">
  <a href="blog-large-image-right-sidebar.html" class="nav-link dropdown-toggle" id="seventh-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog</a>
  <ul class="dropdown-menu" aria-labelledby="seventh-dropdown">
    <li ><a href="index-blog.html">Blog Home <span class="badge">v1.1</span></a></li>
    <li class="active"><a href="index-blog-2.html">Blog Home 2 <span class="badge">v1.3</span></a></li>
    <li class="dropdown ">
      <a  class="dropdown-toggle" data-toggle="dropdown" href="#">Large Image</a>
      <ul class="dropdown-menu to-left">
        <li ><a href="blog-large-image-right-sidebar.html">Right Sidebar</a></li>
        <li ><a href="blog-large-image-left-sidebar.html">Left Sidebar</a></li>
        <li ><a href="blog-large-image-no-sidebar.html">Without Sidebar</a></li>
    </ul>
</li>
<li class="dropdown ">
  <a  class="dropdown-toggle" data-toggle="dropdown" href="#">Medium Image</a>
  <ul class="dropdown-menu to-left">
    <li ><a href="blog-medium-image-right-sidebar.html">Right Sidebar</a></li>
    <li ><a href="blog-medium-image-left-sidebar.html">Left Sidebar</a></li>
    <li ><a href="blog-medium-image-no-sidebar.html">Without Sidebar</a></li>
</ul>
</li>
<li class="dropdown ">
  <a  class="dropdown-toggle" data-toggle="dropdown" href="#">Masonry</a>
  <ul class="dropdown-menu to-left">
    <li ><a href="blog-masonry-right-sidebar.html">Right Sidebar</a></li>
    <li ><a href="blog-masonry-left-sidebar.html">Left Sidebar</a></li>
    <li ><a href="blog-masonry-no-sidebar.html">Without Sidebar</a></li>
</ul>
</li>
<li ><a href="blog-timeline.html">Timeline</a></li>
<li ><a href="blog-post.html">Blog Post</a></li>
</ul>
</li>
</ul>
<!-- main-menu end -->
</div>
</nav>
</div>
<!-- main-navigation end -->
</div>
<!-- header-second end -->
</div>

</div>
</div>

</header>
<!-- header end -->
</div>
<!-- header-container end -->
@endsection