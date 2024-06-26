<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- 
    - primary meta tag
  -->
  <title>CodeForge - La Mejor Opción en Programas de Educación en Línea</title>
  <meta name="title" content="CodeForge - La Mejor Opción en Programas de Educación en Línea">
  <meta name="description" content="Sitio Web De CodeForge">

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./assets/images/logo2.ico" type="image/svg+xml">

  

  <!-- Bootstrap -->

  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js" rel="stylesheet">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">
  

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;500;600;700;800&family=Poppins:wght@400;500&display=swap"
    rel="stylesheet">

  <!-- 
    - preload images
  -->
  <link rel="preload" as="image" href="./assets/images/hero-bg.svg">
  <link rel="preload" as="image" href="./assets/images/hero-banner-1.jpg">
  <link rel="preload" as="image" href="./assets/images/hero-banner-2.jpg">
  <link rel="preload" as="image" href="./assets/images/hero-shape-1.svg">
  <link rel="preload" as="image" href="./assets/images/hero-shape-2.png">

</head>

<body id="top">

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <a href="#" class="logo">
        <img src="./assets/images/logo2.jpeg" width="162" height="50" alt="CodeForge logo">
      </a>

      <nav class="navbar" data-navbar>

        <div class="wrapper">
          <a href="#" class="logo">
            <img src="./assets/images/logo.svg" width="162" height="50" alt="CodeForge logo">
          </a>

          <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
            <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
          </button>
        </div>

        <ul class="navbar-list">

          <li class="navbar-item">
            <a href="#home" class="navbar-link" data-nav-link>Inicio</a>
          </li>

          <li class="navbar-item">
            <a href="#about" class="navbar-link" data-nav-link>Sobre Nosotros</a>
          </li>

          <li class="navbar-item">
            <a href="#courses" class="navbar-link" data-nav-link>Cursos</a>
          </li>

          <li class="navbar-item">
            <a href="#testimonial" class="navbar-link" data-nav-link>Testimonios</a>
          </li>

          <li class="navbar-item">
            <a href="#footer" class="navbar-link" data-nav-link>Contacto</a>
          </li>

        </ul>

      </nav>

      <div class="header-actions">

        <button class="header-action-btn" aria-label="toggle search" title="Search">
          <ion-icon name="search-outline" aria-hidden="true"></ion-icon>
        </button>

        <button class="header-action-btn" aria-label="cart" title="Cart">
          <ion-icon name="cart-outline" aria-hidden="true"></ion-icon>

          <span class="btn-badge">0</span>
        </button>

        <a href="#" class="btn has-before">
          <span class="span">Prueba Gratis</span>

          <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
        </a>

        <button class="header-action-btn" aria-label="open menu" data-nav-toggler>
          <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
        </button>

      </div>

      <div class="overlay" data-nav-toggler data-overlay></div>

    </div>
  </header>





  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="section hero has-bg-image" id="home" aria-label="home"
        style="background-image: url('./assets/images/hero-bg.svg')">
        <div class="container">

          <div class="hero-content">

            <h1 class="h1 section-title">
              Tu Mejor Opción para Programas de <span class="span">Educación</span> en Línea
            </h1>

            <p class="hero-text">
              Nuestro programa ofrece oportunidades únicas para estudiantes que desean expandir sus horizontes y adquirir
              experiencia internacional.
            </p>

            <a href="#courses" class="btn has-before">
              <span class="span">Buscar Cursos</span>

              <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
            </a>

          </div>

          <figure class="hero-banner">

            <div class="img-holder one" style="--width: 270; --height: 300;">
              <img src="./assets/images/hero-banner-1.jpg" width="270" height="300" alt="hero banner" class="img-cover">
            </div>

            <div class="img-holder two" style="--width: 240; --height: 370;">
              <img src="./assets/images/image2.jpg" width="240" height="370" alt="hero banner" class="img-cover">
            </div>           

            <img src="./assets/images/hero-shape-2.png" width="622" height="551" alt="" class="shape hero-shape-2">

          </figure>

        </div>
      </section>





      <!-- 
        - #CATEGORY
      -->

      <section class="section category" aria-label="category">
        <div class="container">

          <p class="section-subtitle">Categorías</p>

          <h2 class="h2 section-title">
            Clases <span class="span">Online</span> Para Aprender a Distancia. 
          </h2>

          <p class="section-text">
            Ofrecemos una variedad de programas diseñados para adaptarse a diferentes necesidades y niveles de habilidad.
          </p>

          <ul class="grid-list">

            <li>
              <div class="category-card" style="--color: 170, 75%, 41%">

                <div class="card-icon">
                  <img src="./assets/images/category-1.svg" width="40" height="40" loading="lazy"
                    alt="Programas de grado en línea" class="img">
                </div>

                <h3 class="h3">
                  <a href="#" class="card-title">Programas de grado en línea</a>
                </h3>

                <p class="card-text">
                  Ofrecemos programas de grado totalmente en línea en diversas disciplinas, diseñados para brindar
                  flexibilidad y accesibilidad.
                </p>

                <span class="card-badge">7 Cursos</span>

              </div>
            </li>

            <li>
              <div class="category-card" style="--color: 351, 83%, 61%">

                <div class="card-icon">
                  <img src="./assets/images/category-2.svg" width="40" height="40" loading="lazy"
                    alt="Programas sin título" class="img">
                </div>

                <h3 class="h3">
                  <a href="#" class="card-title">Programas sin título</a>
                </h3>

                <p class="card-text">
                  Nuestros programas sin título están diseñados para el desarrollo profesional y personal, sin la necesidad de un compromiso de varios años.
                </p>

                <span class="card-badge">4 Cursos</span>

              </div>
            </li>

            <li>
              <div class="category-card" style="--color: 229, 75%, 58%">

                <div class="card-icon">
                  <img src="./assets/images/category-3.svg" width="40" height="40" loading="lazy"
                    alt="Programas fuera del campus" class="img">
                </div>

                <h3 class="h3">
                  <a href="#" class="card-title">Programas fuera del campus</a>
                </h3>

                <p class="card-text">
                  Nuestros programas fuera del campus permiten a los estudiantes tener experiencias prácticas en diferentes lugares.
                </p>

                <span class="card-badge">8 Cursos</span>

              </div>
            </li>

            <li>
              <div class="category-card" style="--color: 42, 94%, 55%">

                <div class="card-icon">
                  <img src="./assets/images/category-4.svg" width="40" height="40" loading="lazy"
                    alt="Programas Híbridos a Distancia" class="img">
                </div>

                <h3 class="h3">
                  <a href="#" class="card-title">Programas Híbridos a Distancia</a>
                </h3>

                <p class="card-text">
                  Ofrecemos programas híbridos que combinan clases en línea y presenciales para una experiencia de aprendizaje más completa.
                </p>

                <span class="card-badge">5 Cursos</span>

              </div>
            </li>

          </ul>

        </div>
      </section>
    </article>
  </main>







      <!-- 
        - #ABOUT
      -->

      <section class="section about" id="about" aria-label="about">
        <div class="container">

          <figure class="about-banner">

            <div class="img-holder" style="--width: 520; --height: 370;">
              <img src="./assets/images/about-banner.jpg" width="520" height="370" loading="lazy" alt="about banner"
                class="img-cover">
            </div>          

            <img src="./assets/images/about-shape-2.svg" width="371" height="220" loading="lazy" alt=""
              class="shape about-shape-2">

            <img src="./assets/images/about-shape-3.png" width="722" height="528" loading="lazy" alt=""
              class="shape about-shape-3">

          </figure>

          <div class="about-content">

            <p class="section-subtitle">Sobre Nosotros</p>

            <h2 class="h2 section-title">
              Nuestra  <span class="span">Misión </span>
            </h2>

            <p class="section-text">
              La misión de nuestra empresa será proporcionar educación de alta calidad mediante cursos con relación en campos como la programación, el mantenimiento de computadoras, el desarrollo web y más, con el objetivo de capacitar a individuos de todas las edades y niveles de experiencia para tener éxito en la era digital.              
            </p>

            <h2 class="h2 section-title"> Nuestra <span class="span">  Visión </span> </h2>

            <p class="section-text"> La visión de CodeForge Global Learning es convertirse en el líder mundial en la capacitación técnica, transformando vidas a través del aprendizaje digital accesible y de alta calidad. Nos visualizamos como una fuerza impulsora en la revolución educativa global, brindando a personas de todos los rincones del mundo las herramientas necesarias para prosperar en la economía digital del siglo XXI.</p>
            <ul class="about-list">

              <li class="about-item">
                <ion-icon name="checkmark-done-outline" aria-hidden="true"></ion-icon>

                <span class="span">Entrenadores Expertos</span>
              </li>

              <li class="about-item">
                <ion-icon name="checkmark-done-outline" aria-hidden="true"></ion-icon>

                <span class="span">Aprendizaje remoto en línea</span>
              </li>

              <li class="about-item">
                <ion-icon name="checkmark-done-outline" aria-hidden="true"></ion-icon>

                <span class="span">Acceso de por vida</span>
              </li>

            </ul>

            <img src="./assets/images/about-shape-4.svg" width="100" height="100" loading="lazy" alt=""
              class="shape about-shape-4">

          </div>

        </div>
      </section>





      <!-- 
        - #COURSE
      -->

      <section class="section course" id="courses" aria-label="course">
        <div class="container">

          <p class="section-subtitle">Cursos Populares</p>

          <h2 class="h2 section-title">Elija un curso para comenzar</h2>

          <ul class="grid-list">

            <li>
              <div class="course-card">

                <figure class="card-banner img-holder" style="--width: 370; --height: 220;">
                  <img src="./assets/images/course-1.jpg" width="370" height="220" loading="lazy"
                    alt="Cree sitios web responsivos del mundo real con HTML y CSS" class="img-cover">
                </figure>

                <div class="abs-badge">
                  <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                  <span class="span">3 Semanas</span>
                </div>

                <div class="card-content">

                  <span class="badge">Principiante</span>

                  <h3 class="h3">
                    <a href="#" class="card-title">Cree sitios web responsivos del mundo real con HTML y CSS</a>
                  </h3>

                  <div class="wrapper">

                    <div class="rating-wrapper">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                    <p class="rating-text">(5.0/7 Clasificación)</p>

                  </div>

                  <data class="price" value="29">$29.00</data>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="library-outline" aria-hidden="true"></ion-icon>

                      <span class="span">8 Lecciones</span>
                    </li>

                    <li class="card-meta-item">
                      <ion-icon name="people-outline" aria-hidden="true"></ion-icon>

                      <span class="span">20 Estudiantes</span>
                    </li>

                  </ul>

                </div>

              </div>
            </li>

            <li>
              <div class="course-card">

                <figure class="card-banner img-holder" style="--width: 370; --height: 220;">
                  <img src="./assets/images/course-2.jpg" width="370" height="220" loading="lazy"
                    alt="Java Programming Masterclass for Software Developers" class="img-cover">
                </figure>

                <div class="abs-badge">
                  <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                  <span class="span">8 Semanas</span>
                </div>

                <div class="card-content">

                  <span class="badge">Avanzado</span>

                  <h3 class="h3">
                    <a href="#" class="card-title">Clase magistral de programación Java para desarrolladores de software</a>
                  </h3>

                  <div class="wrapper">

                    <div class="rating-wrapper">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                    <p class="rating-text">(4.5 /9 Clasificación)</p>

                  </div>

                  <data class="price" value="49">$49.00</data>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="library-outline" aria-hidden="true"></ion-icon>

                      <span class="span">15 Lecciones</span>
                    </li>

                    <li class="card-meta-item">
                      <ion-icon name="people-outline" aria-hidden="true"></ion-icon>

                      <span class="span">35 Estudiantes</span>
                    </li>

                  </ul>

                </div>

              </div>
            </li>

            <li>
              <div class="course-card">

                <figure class="card-banner img-holder" style="--width: 370; --height: 220;">
                  <img src="./assets/images/course-3.jpg" width="370" height="220" loading="lazy"
                    alt="The Complete Camtasia Course for Content Creators" class="img-cover">
                </figure>

                <div class="abs-badge">
                  <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                  <span class="span">3 Semanas</span>
                </div>

                <div class="card-content">

                  <span class="badge">Intermedio</span>

                  <h3 class="h3">
                    <a href="#" class="card-title">Más allá de la programación básica: Python intermedio</a>
                  </h3>

                  <div class="wrapper">

                    <div class="rating-wrapper">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                    <p class="rating-text">(4.9 /7 Clasificación)</p>

                  </div>

                  <data class="price" value="35">$35.00</data>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="library-outline" aria-hidden="true"></ion-icon>

                      <span class="span">13 Lecciones</span>
                    </li>

                    <li class="card-meta-item">
                      <ion-icon name="people-outline" aria-hidden="true"></ion-icon>

                      <span class="span">18 Estudiantes</span>
                    </li>

                  </ul>

                </div>

              </div>
            </li>

          </ul>

          <a href="#" class="btn has-before">
            <span class="span">Explorar más cursos</span>

            <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
          </a>

        </div>
      </section>





      <!-- 
        - #VIDEO
      -->
      <section class="video has-bg-image" aria-label="video" style="background-image: url('./assets/images/video-bg.png')">
        <div class="container">
          <div class="video-card">
            <div class="video-banner img-holder has-after" style="--width: ; --height: ;">
              <!-- Replace the image source with the video -->
              <video id="video" src="./assets/videos/video.mp4" width="970" height="550" loop muted class="img-cover"></video>
              <button class="play-btn" aria-label="play video" onclick="toggleVideo()">
                <ion-icon name="play" aria-hidden="true"></ion-icon>
              </button>
            </div>
            <img src="./assets/images/video-shape-1.png" width="1089" height="605" loading="lazy" alt="" class="shape video-shape-1">
            <img src="./assets/images/video-shape-2.png" width="158" height="174" loading="lazy" alt="" class="shape video-shape-2">
          </div>
        </div>
      </section>
      





      <!-- 
        - #STATE
      -->

      <section class="section stats" aria-label="stats">
        <div class="container">

          <ul class="grid-list">

            <li>
              <div class="stats-card" style="--color: 170, 75%, 41%">
                <h3 class="card-title">29.3 Mil</h3>

                <p class="card-text">Estudiantes Matriculados</p>
              </div>
            </li>

            <li>
              <div class="stats-card" style="--color: 351, 83%, 61%">
                <h3 class="card-title">32.4 Mil</h3>

                <p class="card-text">Clases Completadas</p>
              </div>
            </li>

            <li>
              <div class="stats-card" style="--color: 260, 100%, 67%">
                <h3 class="card-title">100%</h3>

                <p class="card-text">Tasa de satisfacción</p>
              </div>
            </li>

            <li>
              <div class="stats-card" style="--color: 42, 94%, 55%">
                <h3 class="card-title">354+</h3>

                <p class="card-text">Mejores instructores</p>
              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #TESTIMONIALS
      -->


      <section class="testimonial text-center" id="testimonial">
        <div class="container">

            <div class="heading white-heading">
                Testimoniales
            </div>
            <div id="testimonial4" class="carousel slide testimonial4_indicators testimonial4_control_button thumb_scroll_x swipe_x" data-ride="carousel" data-pause="hover" data-interval="5000" data-duration="2000">
             
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="testimonial4_slide">
                            <img src="./assets/images/testimonial-1.png" class="img-circle img-responsive" />
                            <p> "El curso de JavaScript que tomé en este sitio web superó todas mis expectativas. Los instructores son muy conocedores y explican los conceptos de manera clara y accesible. Gracias a ellos, he podido mejorar significativamente mis habilidades y conseguir un trabajo en desarrollo web. ¡Altamente recomendado!" </p>
                            <h4>María González</h4>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimonial4_slide">
                            <img src="./assets/images/testimonial-2.jpeg" class="img-circle img-responsive"/>
                            <p> "Como alguien que recién comienza en el mundo de la programación, estaba buscando un sitio que ofreciera cursos accesibles y bien explicados. Los cursos de este sitio han sido perfectos para mí. Me encantó el curso de HTML y CSS, y ahora estoy avanzando con el de React. La flexibilidad de poder aprender a mi propio ritmo ha sido invaluable. ¡Muy satisfecho con mi experiencia!" </p>
                            <h4>Laura Martínez </h4>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimonial4_slide">
                            <img src="./assets/images/testimonial3.png" class="img-circle img-responsive" />
                            <p>"Decidí inscribirme en el curso de Python para mejorar mis habilidades de programación y fue una excelente decisión. El contenido está bien estructurado y los ejercicios prácticos me ayudaron a aplicar lo aprendido de inmediato. Además, la comunidad de estudiantes es muy activa y siempre dispuesta a ayudar. Definitivamente seguiré tomando más cursos aquí." </p>
                            <h4>Juan Pérez</h4>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#testimonial4" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#testimonial4" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>
    </section>

    <!-- Feedback Section -->
    <section class="feedback">
        <div class="container">
            <div class="row">
                <div class="col-sm-5 col-md-6 col-12 pb-4">
                    <h1>Comentarios</h1>
                    <?php include 'display_comments.php'; ?>
                </div>
                <div class="col-lg-4 col-md-5 col-sm-4 offset-md-1 offset-sm-1 col-12 mt-4">
                    <form id="algin-form" method="post" action="submit_comment.php">
                        <div class="form-group">
                            <h4>Dejar un comentario</h4>
                            <label for="message">Comentario</label>
                            <textarea name="comment" id="msg" cols="30" rows="5" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <input type="text" name="name" id="fullname" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="country">País</label>
                            <input type="text" name="country" id="country" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>                  
                       
                        <div class="form-group">
                            <button type="submit" id="post" class="btn">Enviar Comentario</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>



    
 

 





  <!-- 
    - #FOOTER
  -->

  <footer class="footer" id="footer" style="background-image: url('./assets/images/footer-bg.png')">

    <div class="footer-top section">
      <div class="container grid-list">

        <div class="footer-brand">

          <a href="#" class="logo">
            <img src="./assets/images/logo2.jpeg" width="162" height="50" alt="CodeForge logo">
          </a>

          <p class="footer-brand-text">
            Tu Mejor Opción para Programas de Educación en Línea
          </p>

          <div class="wrapper">          

            <address class="address">Caracas - Venezuela</address>            
          </div>
          <img src="./assets/images/Flag_of_Venezuela.png" width="162" height="50"  alt="Venezuela's Flag">

          <div class="wrapper">
            <span class="span">Call:</span>

            <a href="tel:+58 459 9402" class="footer-link">+58 459 9402 </a>
          </div>

          <div class="wrapper">
            <span class="span">Email:</span>

            <a href="mailto:info@CodeForge.com" class="footer-link">info@CodeForge.com</a>
          </div>

        </div>

        <ul class="footer-list">
          
          <li>
            <p class="footer-list-title">Links Rapidos</p>
          </li>

          <li class="navbar-item">
            <a href="#home" class="footer-link" data-nav-link>Inicio</a>
          </li>

          <li class="navbar-item">
            <a href="#about" class="footer-link" data-nav-link>Sobre Nosotros</a>
          </li>

          <li class="navbar-item">
            <a href="#courses" class="footer-link" data-nav-link>Cursos</a>
          </li>

          <li class="navbar-item">
            <a href="#testimonial" class="footer-link" data-nav-link>Testimonios</a>
          </li>

          <li class="navbar-item">
            <a href="#" class="footer-link" data-nav-link>Contacto</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Información</p>
          </li>

          <p class="footer-list-text"> Nuestro programa ofrece oportunidades únicas para estudiantes que desean expandir sus horizontes y adquirir experiencia internacional.</p>
        </ul>

        <div class="footer-list">

          <p class="footer-list-title">Contacto</p>

          <p class="footer-list-text">
            Ingrese su dirección de correo electrónico para registrarse a nuestra suscripción al boletín
          </p>

          <form action="" class="newsletter-form">
            <input type="email" name="email_address" placeholder="Tu email" required class="input-field">

            <button type="submit" class="btn has-before">
              <span class="span">Subscribirse</span>

              <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
            </button>
          </form>

          <ul class="social-list">

            <li>
              <a href="https://www.facebook.com/codeforge2024" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li>
              <a href="https://github.com/CodeForge2024" class="social-link">
                <ion-icon name="logo-github"></ion-icon>
              </a>
            </li>

            <li>
              <a href="https://www.instagram.com/codeforge2024" class="social-link">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>

            <li>
              <a href="https://www.tiktok.com/@codeforge.global" class="social-link">
                <ion-icon name="logo-tiktok"></ion-icon>
              </a>
            </li>            

          </ul>

        </div>

      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">

        <p class="copyright">
          Copyright 2024 All Rights Reserved by <a href="#" class="copyright-link">CodeForge</a>
        </p>

      </div>
    </div>

  </footer>





  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn" aria-label="back top top" data-back-top-btn>
    <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js" defer></script>

  <!-- JQuery and Bootstrap -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>
