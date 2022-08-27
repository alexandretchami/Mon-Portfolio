<?php
require('include/db.php');
$query = "SELECT * FROM home,section_control,social_media,about,contact,site_background,seo";
$run = mysqli_query($db, $query);
$user_data = mysqli_fetch_array($run);

?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>
    <?php echo $user_data['title']; ?>
  </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Personal - v4.7.0
  * Template URL: https://bootstrapmade.com/personal-free-resume-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <h1><a href="index.php">
          <?php echo $user_data['title']; ?>
        </a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.php" class="mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->
      <h2>
        <?php echo $user_data['subtitle']; ?>
      </h2>

      <nav id="navbar" class="navbar">
        <ul>
          <?php
          if ($user_data['home_section']) {
          ?>
          <li><a class="nav-link active" href="#header">Acceuil</a></li>
          <?php
          }
          if ($user_data['about_section']) {
          ?>
          <li><a class="nav-link" href="#about">À propos</a></li>
          <?php
          }
          if ($user_data['resume_section']) {
          ?>
          <li><a class="nav-link" href="#resume">CV</a></li>
          <?php
          }
          if ($user_data['services_section']) {
          ?>
          <li><a class="nav-link" href="#services">Prestations de service</a></li>
          <?php
          }
          if ($user_data['portfolio_section']) {
          ?>
          <li><a class="nav-link" href="#portfolio">Portfolio</a></li>
          <?php
          }
          if ($user_data['contact_section']) {
          ?>
          <li><a class="nav-link" href="#contact">Contact</a></li>
          <?php
          }
          ?>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <?php
      if ($user_data['showicons']) {
      ?>

      <div class="social-links">

        <?php if ($user_data['twitter'] != '') {
          ?>
        <a href="https://twitter.com/<?php echo $user_data['twitter']; ?>" class="twitter"><i
            class="bi bi-twitter"></i></a>
        <?php
          }
          ?>

        <?php if ($user_data['facebook'] != '') {
          ?>
        <a href="https://facebook.com/<?php echo $user_data['facebook']; ?>" class="facebook"><i
            class="bi bi-facebook"></i></a>
        <?php
          }
          ?>

        <?php if ($user_data['instagram'] != '') {
          ?>
        <a href="https://instagram.com/<?php echo $user_data['instagram']; ?>" class="instagram"><i
            class="bi bi-instagram"></i></a>
        <?php
          }
          ?>

        <?php if ($user_data['github'] != '') {
          ?>
        <a href="https://github.com/<?php echo $user_data['github']; ?>" class="github"><i class="bi bi-github"></i></a>
        <?php
          }
          ?>

        <?php if ($user_data['linkedin'] != '') {
          ?>
        <a href="https://www.linkedin.com/<?php echo $user_data['linkedin']; ?>" class="linkedin"><i
            class="bi bi-linkedin"></i></a>
        <?php
          }
          ?>

      </div>

      <?php
      }
      ?>

    </div>
  </header><!-- End Header -->

  <!-- ======= About Section ======= -->
  <section id="about" class="about">

    <!-- ======= About Me ======= -->
    <div class="about-me container">

      <div class="section-title">
        <h2>À propos</h2>
        <p>En savoir plus sur moi</p>
      </div>

      <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
          <img src="/<?php echo $user_data['profile_pic']; ?>" class="img-fluid" alt="">

        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h3>
            <?php echo $user_data['about_title']; ?>
          </h3>
          <p class="fst-italic">
            <?php echo $user_data['about_subtitle']; ?>
          </p>
          <div class="row">
            <div class="col-lg-6">
              <ul>

                <?php
                $query2 = "SELECT * FROM personal_info";
                $run2 = mysqli_query($db, $query2);

                while ($personal_info = mysqli_fetch_array($run2)) {
                ?>
                <li><i class="bi bi-chevron-right"></i> <strong>
                    <?php echo $personal_info['label']; ?>
                    :
                  </strong><span>
                    <?php echo $personal_info['value']; ?>
                  </span></li>
                <?php
                }
                ?>
              </ul>
            </div>
          </div>
          <p>
            <?php echo $user_data['about_desc']; ?>
          </p>
        </div>
      </div>

    </div><!-- End About Me -->

    <!-- ======= Skills  ======= -->
    <div class="skills container">

      <div class="section-title">
        <h2>Compétences</h2>
      </div>

      <div class="row skills-content">

        <div class="col-lg-12">
          <?php

          $query3 = "SELECT * FROM skills";
          $run3 = mysqli_query($db, $query3);
          while ($skill = mysqli_fetch_array($run3)) {
          ?>

          <div class="progress">
            <span class="skill">
              <?php echo $skill['skill_name']; ?>
              <i class="val">
                <?php echo $skill['skill_level']; ?>
              </i>
            </span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $skill['skill_level']; ?>"
                aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <?php
          }
          ?>
        </div>

      </div>

    </div><!-- End Skills -->


  </section><!-- End About Section -->

  <!-- ======= Resume Section ======= -->
  <section id="resume" class="resume">
    <div class="container">

      <div class="section-title">
        <h2>CV</h2>
        <p>Vérifier mon CV</p>
      </div>

      <div class="row">
        <div class="col-lg-12">


          <h3 class="resume-title">Éducation</h3>

          <?php

          $query4 = "SELECT * FROM resume";
          $run4 = mysqli_query($db, $query4);
          while ($resume = mysqli_fetch_array($run4)) {
            if ($resume['type'] == 'e') {

          ?>
          <div class="resume-item">
            <h4>
              <?php echo $resume['title']; ?>
            </h4>
            <h5>
              <?php echo $resume['time']; ?>
            </h5>
            <p><em>
                <?php echo $resume['org']; ?>
              </em></p>
            <p>
              <?php echo $resume['about_exp']; ?>
            </p>
          </div>

          <?php
            }
          }
          ?>


          <div class="col-lg-6">
            <h3 class="resume-title">Expérience professionnelle</h3>
            <?php
            $query4 = "SELECT * FROM resume";
            $run4 = mysqli_query($db, $query4);
            while ($resume = mysqli_fetch_array($run4)) {
              if ($resume['type'] == 'p') {

            ?>

            <div class="resume-item">
              <h4>
                <?php echo $resume['title']; ?>
              </h4>
              <h5>
                <?php echo $resume['time']; ?>
              </h5>
              <p><em>
                  <?php echo $resume['org']; ?>
                </em></p>
              <p>
                <?php echo $resume['about_exp']; ?>
              </p>
            </div>

            <?php
              }
            }
            ?>

          </div>

        </div>
  </section><!-- End Resume Section -->

  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container">

      <div class="section-title">
        <h2>Portfolio</h2>
        <p>Mes travaux</p>
      </div>

      <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-card">Card</li>
            <li data-filter=".filter-web">Web</li>
          </ul>
        </div>
      </div>

      <div class="row portfolio-container">

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="images/<?php echo $user_data['profile_pic']; ?>" class="img-fluid" alt="">
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/etsCambois.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>ets CAMBOIS</h4>
              <p>Site Web de Menuiserie</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/etsCambois.jpg data-gallery=" portfolioGallery" class="portfolio-lightbox"
                  title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="https://alexandret.sg-host.com/" data-gallery="portfolioDetailsGallery"
                  data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i
                    class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/pokemon-img.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Jeux de cartes pokémon</h4>
              <p>Bienvenue dans l'univers Pokèmon</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/pokemon-img.jpg data-gallery=" portfolioGallery"
                  class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="https://jocular-cassata-025b43.netlify.app/" data-gallery="portfolioDetailsGallery"
                  data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i
                    class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/reactportfolio.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Mon portfolio en React</h4>
              <p>React portfolio</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/reactportfolio.jpg data-gallery=" portfolioGallery"
                  class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="https://tchamidevs.alwaysdata.net/" data-gallery="portfolioDetailsGallery"
                  data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i
                    class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/restaurantpizza.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Restaurant pizza</h4>
              <p>Site de vente de pizza</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/restaurantpizza.jpg data-gallery=" portfolioGallery"
                  class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="https://alexandretchami.github.io/restaurant/" data-gallery="portfolioDetailsGallery"
                  data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i
                    class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/pierrefc.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Chi Fou Mi</h4>
              <p>Pierre Feuille Ciseaux</p>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/pierrefc.jpg data-gallery=" portfolioGallery" class="portfolio-lightbox"
                  title="App"><i class="bx bx-plus"></i></a>
                <a href="https://alexandretchami.github.io/Shifumi/" data-gallery="portfolioDetailsGallery"
                  data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i
                    class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>


      </div>

    </div>
  </section><!-- End Portfolio Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Contact</h2>
        <p>Contactez moi</p>
      </div>

      <div class="row mt-2">

        <div class="col-md-6 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-map"></i>
            <h3>Mon adresse</h3>
            <p>
              <?php echo $user_data['address']; ?>
            </p>
          </div>
        </div>

        <div class="col-md-6 mt-4 mt-md-0 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-share-alt"></i>
            <h3>Profils sociaux</h3>
            <div class="social-links">
              <a href="https://twitter.com/TchamiAlexandre" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="https://www.facebook.com/alexandrefullstackdeveloper/" class="facebook"><i
                  class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="https://github.com/alexandretchami" class="github"><i class="bi bi-github"></i></a>
              <a href="https://www.linkedin.com/in/alexandre-stephane-tchami-94842427/" class="linkedin"><i
                  class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-envelope"></i>
            <h3>Envoyez moi un email</h3>
            <p>
              <?php echo $user_data['email']; ?>
            </p>
          </div>
        </div>
        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-phone-call"></i>
            <h3>Appelez-moi</h3>
            <p>
              <?php echo $user_data['mobile']; ?>
            </p>
          </div>
        </div>
      </div>

      <form action="forms/contact.php" method="post" role="form" class="php-email-form mt-4">
        <div class="row">
          <div class="col-md-6 form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
          </div>
          <div class="col-md-6 form-group mt-3 mt-md-0">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
          </div>
        </div>
        <div class="form-group mt-3">
          <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
        </div>
        <div class="form-group mt-3">
          <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
        </div>
        <div class="my-3">
          <div class="loading">Chargement</div>
          <div class="error-message"></div>
          <div class="sent-message">Votre message a été envoyé. Merci!</div>
        </div>
        <div class="text-center"><button type="submit">Envoyer le message</button></div>
      </form>

    </div>
  </section><!-- End Contact Section -->

  <div class="credits">
    <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/personal-free-resume-bootstrap-template/ -->
    Designed by <a href="https://bootstrapmade.com/">Alexandre Tchami</a>
  </div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <!--<script src="assets/vendor/php-email-form/validate.js"></script>-->

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>