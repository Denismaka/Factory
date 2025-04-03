<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Factory</title>
  <link rel="stylesheet" href="/assets/bootstrap-icons/bootstrap-icons.css">
  <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css" />
  <link rel="stylesheet" href="/assets/font/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="/assets/swiper/package/swiper-bundle.min.css">
  <link rel="website icon" href="/assets/images/logo_website.png" />
</head>

<body>
  <!-- Bouton de redirection -->
  <div class="arrow">
    <i class="fas fa-arrow-up icone"></i>
  </div>

  <!-- ############## -->
  <!-- Header -->
  <!-- ############## -->
  <header>
    <a href="index.php" class="logo">
      <img src="/assets/images/logo.webp" class="img-fluid rounded">
      Factory
    </a>
    <div class="menu-toggle" id="mobile-menu">
      <i class="fas fa-bars"></i>
    </div>
    <ul class="nav-list" id="nav-list">
      <li><a href="/index.php#home" class="text-capitalize">home</a></li>
      <li><a href="/index.php#about" class="text-capitalize">about</a></li>
      <li><a href="/index.php#services" class="text-capitalize">services</a></li>
      <li><a href="/index.php#pages" class="text-capitalize">pages</a></li>
      <li><a href="/index.php#témoignages" class="text-capitalize">témoignages</a></li>
      <li><a href="/index.php#contact" class="text-capitalize">contact</a></li>
    </ul>
  </header>

  <!-- ##############  -->
  <!-- Home  -->
  <!-- ##############  -->
  <section class="home" id="home">
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide slide1">
          <h1 class="display-4 text-center">Bienvenue sur notre site !<br>
            Transformez vos idées en réalité avec nos travaux mécaniques de pointe.
          </h1>
        </div>
        <div class="swiper-slide slide2">
          <h1 class="display-4 text-center">Découvrez nos services<br>
            Alimentez votre avenir avec nos solutions innovantes en énergie et puissance.
          </h1>
        </div>
        <div class="swiper-slide slide3">
          <h1 class="display-4 text-center">Optimisez votre production<br>
            avec notre expertise en raffinerie de pétrole et industrie gazière.
          </h1>
        </div>
        <div class="swiper-slide slide4">
          <h1 class="display-4 text-center">Innovons ensemble<br>
            De la recherche chimique à l'industrie pétrolière, nous façonnons l'avenir.
          </h1>
        </div>
      </div>
      <!-- Ajout des boutons de navigation -->
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <!-- Pagination -->
      <div class="swiper-pagination"></div>
    </div>
  </section>



  <!-- ##############  -->
  <!-- About  -->
  <!-- ##############  -->
  <section class="about" id="about">
    <div class="section-heading">
      <h2>about</h2>
      <h4 class="py-4 fs-1">Qui nous sommes?</h4>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="/assets/images/about.jpg" class="img-fluid rounded" alt="">
        </div>
        <div class="col-md-6">
          <h2>Rêvez grand, inspirez le monde.</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum fugiat maiores, natus ipsa dolorem vitae rerum blanditiis dolorum labore! Odio, alias illum quibusdam voluptatum explicabo autem vel eveniet tempore possimus.</p>
          <ul class="px-3">
            <li>
              Produits et solutions
            </li>
            <li>
              Rêvez grand, solutions inspirantes.
            </li>
            <li>
              Disponibilité des installations assurée et sécurité opérationnelle.
            </li>
            <li>
              Amélioration des conditions d'exploitation.
            </li>
            <li>
              <span> Soulagement des ressources de maintenance internes de l'entreprise.</span>
            </li>
          </ul>
          <a href="#" class="btn">contact</a>
        </div>
      </div>
    </div>
  </section>


  <!-- ##############  -->
  <!-- Services  -->
  <!-- ##############  -->
  <section class="services" id="services">
    <div class="section-heading">
      <h2>services</h2>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-4 py-5">
          <i class="fa-brands fa-facebook"></i>
          <h3 class="text-capitalize fw-bold py-3">mechanical works</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente quas minus placeat rerum ex eius vitae, corrupti ullam voluptate aperiam consectetur perspiciatis modi autem nemo molestias labore veritatis vel laudantium.</p>
        </div>
        <div class="col-md-4 py-5">
          <i class="fa-brands fa-facebook"></i>
          <h3 class="text-capitalize fw-bold py-3">power & energy</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente quas minus placeat rerum ex eius vitae, corrupti ullam voluptate aperiam consectetur perspiciatis modi autem nemo molestias labore veritatis vel laudantium.</p>
        </div>
        <div class="col-md-4 py-5">
          <i class="fa-brands fa-facebook"></i>
          <h3 class="text-capitalize fw-bold py-3">petroleum refinery</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente quas minus placeat rerum ex eius vitae, corrupti ullam voluptate aperiam consectetur perspiciatis modi autem nemo molestias labore veritatis vel laudantium.</p>
        </div>
        <div class="col-md-4 py-5">
          <i class="fa-brands fa-facebook"></i>
          <h3 class="text-capitalize fw-bold py-3">oil & gas industry</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente quas minus placeat rerum ex eius vitae, corrupti ullam voluptate aperiam consectetur perspiciatis modi autem nemo molestias labore veritatis vel laudantium.</p>
        </div>
        <div class="col-md-4 py-5">
          <i class="fa-brands fa-facebook"></i>
          <h3 class="text-capitalize fw-bold py-3">automative manufacturing</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente quas minus placeat rerum ex eius vitae, corrupti ullam voluptate aperiam consectetur perspiciatis modi autem nemo molestias labore veritatis vel laudantium.</p>
        </div>
        <div class="col-md-4 py-5">
          <i class="fa-brands fa-facebook"></i>
          <h3 class="text-capitalize fw-bold py-3">chemical research</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente quas minus placeat rerum ex eius vitae, corrupti ullam voluptate aperiam consectetur perspiciatis modi autem nemo molestias labore veritatis vel laudantium.</p>
        </div>
      </div>
    </div>
  </section>


  <!-- ##############  -->
  <!-- Pages  -->
  <!-- ##############  -->
  <section class="pages" id="pages">
    <div class="section-heading">
      <h2>pages</h2>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <img src="/assets/images/pages-01.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-md-4">
          <div class="content">
            <h4 class="text-capitalize">oil & gas industry</h4>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Error consectetur voluptatibus tenetur animi. Quia sed aut sequi, labore eius, odio harum alias id tempora pariatur, incidunt tempore eum expedita libero.</p>
            <a href="#" class="btn">about us</a>
          </div>
        </div>
        <div class="col-md-4">
          <img src="/assets/images/pages-02.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-md-4">
          <div class="content">
            <h4 class="text-capitalize">automative manufacturing</h4>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Error consectetur voluptatibus tenetur animi. Quia sed aut sequi, labore eius, odio harum alias id tempora pariatur, incidunt tempore eum expedita libero.</p>
            <a href="#" class="btn">about us</a>
          </div>
        </div>
        <div class="col-md-4">
          <img src="/assets/images/pages-03.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-md-4">
          <div class="content">
            <h4 class="text-capitalize">power & energy</h4>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Error consectetur voluptatibus tenetur animi. Quia sed aut sequi, labore eius, odio harum alias id tempora pariatur, incidunt tempore eum expedita libero.</p>
            <a href="#" class="btn">about us</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ##############  -->
  <!-- Témoignages  -->
  <!-- ##############  -->
  <section class="témoignages" id="témoignages">
    <div class="section-heading">
      <h2>Témoignages</h2>
      <h5 class="py-5 fs-1 text-capitalize">clients say about us </h5>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <div class="content">
              <img src="/assets/images/Avis-01.jpg" class="img-fluid rouded" alt="">
            </div>
            <span class="fs-2 text-uppercase fw-bold py-4">leaticia kitoko</span>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda corrupti facilis quo earum numquam repellendus. Nesciunt blanditiis aliquam ex aut dolores! Explicabo reiciendis mollitia ullam dignissimos praesentium, rem corrupti voluptas.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <div class="content">
              <img src="/assets/images/Avis-02.jpg" class="img-fluid rouded" alt="">
            </div>
            <span class="fs-2 text-uppercase fw-bold py-4">cathy osthudi</span>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda corrupti facilis quo earum numquam repellendus. Nesciunt blanditiis aliquam ex aut dolores! Explicabo reiciendis mollitia ullam dignissimos praesentium, rem corrupti voluptas.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <div class="content">
              <img src="/assets/images/Avis-03.jpg" class="img-fluid rouded" alt="">
            </div>
            <span class="fs-2 text-uppercase fw-bold py-4">fiston low</span>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda corrupti facilis quo earum numquam repellendus. Nesciunt blanditiis aliquam ex aut dolores! Explicabo reiciendis mollitia ullam dignissimos praesentium, rem corrupti voluptas.</p>
          </div>
        </div>
      </div>
    </div>
  </section>








  <!-- ##############  -->
  <!-- Contact  -->
  <!-- ##############  -->


  <!-- ##############  -->
  <!-- Footer  -->
  <!-- ##############  -->




  <script src="/assets/swiper/package/swiper-bundle.min.js"></script>
  <script src="/assets/scrollreveal/dist/scrollreveal.min.js"></script>
  <script src="/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/Js/app.js"></script>
</body>

</html>