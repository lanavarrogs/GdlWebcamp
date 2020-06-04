<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald|PT+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" />
  <script src="https://kit.fontawesome.com/dcf49974c2.js" crossorigin="anonymous"></script>
  <meta name="theme-color" content="#fafafa">
</head>

<body>
  <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->
    <header class="site-header">
      <div class="hero">
          <div class="contenido-header">
              <nav class="redes-sociales">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-pinterest"></i></a>
              </nav>
              <div class="informacion-evento">
                <div class="fechas">
                  <p class="fecha"><i class="far fa-calendar-alt"></i>20-12-Dic</p>
                  <p class="cidad"><i class="fas fa-map-marker-alt"></i>Guadalajara, MX</p>
                </div>
                <div class="evento">
                  <h1 class="nombre-sitio">gdlwebcamp</h1>
                  <p class="slogan">La mejor conferencia de <span>diseño web</span></p>
                </div>
              </div>
          </div>
      </div><!--hero-->
    </header><!--Header-->

    <div class="barra">
       <div class="contenedor navegacion">

         <div class="contenedor-movil">
              <div class="logo">
                <img src="./img/logo.svg" alt="Logo de gdlwebcamp">
              </div>
              <div class="menu-movil">
                <i class="fas fa-bars"></i>
              </div>
          </div><!--contenedor-movil-->

         <nav class="navegacion-principal">
           <a href="conferencia.html">Conferencia</a>
           <a href="#">Calendario</a>
           <a href="#">Invitados</a>
           <a href="registro.html">Reservaciones</a>
         </nav>
       </div><!--contenedor-->
    </div><!--barra-->


    <section class="seccion contenedor">
        <h2>La mejor conferencia de diseño web en español</h2>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
          Distinctio similique animi nostrum eligendi facere nemo provident iusto, 
          optio enim porro fuga ut assumenda saepe sint repellat debitis soluta eius
          voluptas.
        </p>
    </section><!--seccion-->

    <section class="programa">
      <div class="contenedor-video">
        <video autoplay loop poster="./img/bg-talleres.jpg">
          <source src="./video/video.mp4" type="video/mp4"/>
          <source src="./video/video.webm" type="video/webm"/>
          <source src="./video/video.ogv" type="video/ogv"/>
        </video>
      </div><!--contenedorvideo-->

      <div class="contenido-programa">
        <div class="contenedor">
          <div class="programa-evento">
            <h2>Programa del evento</h2>
            <nav class="menu-programa">
              <a href="#talleres"><i class="fas fa-code"></i>Talleres</a>
              <a href="#conferencias"><i class="fas fa-comment"></i>Conferencias</a>
              <a href="#seminarios"><i class="fas fa-university"></i>Seminarios</a>
            </nav>

            <div id="talleres" class="info-curso ocultar clearfix">
                <div class="detalle-evento">
                  <h3>Html5, Css3 y Javascript </h3>
                  <p><i class="far fa-clock"></i>16:00 hrs</p>
                  <p><i class="far fa-calendar-alt"></i>10-Dic</p>
                  <p><i class="fas fa-user"></i>Luis Angel Navarro Parra</p>
                </div>
                <div class="detalle-evento">
                  <h3>Responsive Web Design </h3>
                  <p><i class="far fa-clock"></i>20:00 hrs</p>
                  <p><i class="far fa-calendar-alt"></i>10-Dic</p>
                  <p><i class="fas fa-user"></i>Luis Angel Navarro Parra</p>
                </div>
                <div class="fd">
                  <a href="#" class="button">Ver Todos</a>
                </div>
            </div><!--Talleres-->
            <div id="conferencias" class="info-curso ocultar clearfix">
              <div class="detalle-evento">
                <h3>Como ser freelancer </h3>
                <p><i class="far fa-clock"></i>10:00 hrs</p>
                <p><i class="far fa-calendar-alt"></i>10-Dic</p>
                <p><i class="fas fa-user"></i>Gregorio Sanchez</p>
              </div>
              <div class="detalle-evento">
                <h3>Tecnologias del futuro</h3>
                <p><i class="far fa-clock"></i>17:00 hrs</p>
                <p><i class="far fa-calendar-alt"></i>10-Dic</p>
                <p><i class="fas fa-user"></i>Susan Sanchez</p>
              </div>
              <div class="fd">
                <a href="#" class="button">Ver Todos</a>
              </div>
          </div><!--Conferencias-->
          <div id="seminarios" class="info-curso ocultar clearfix">
            <div class="detalle-evento">
              <h3>Diseño UI para moviles </h3>
              <p><i class="far fa-clock"></i>17:00 hrs</p>
              <p><i class="far fa-calendar-alt"></i>11-Dic</p>
              <p><i class="fas fa-user"></i>Harold Garcia</p>
            </div>
            <div class="detalle-evento">
              <h3>Aprende a programar en una mañana </h3>
              <p><i class="far fa-clock"></i>10:00 hrs</p>
              <p><i class="far fa-calendar-alt"></i>11-Dic</p>
              <p><i class="fas fa-user"></i>Susana Rivera</p>
            </div>
            <div class="fd">
              <a href="#" class="button">Ver Todos</a>
            </div>
        </div><!--Seminarios-->
          </div><!--prograEvento-->
        </div><!--contenedor-->
      </div><!--contenidoPrograma-->
    </section><!--programa-->

    <section class="invitados contenedor seccion">
        <h2>Invitados</h2>
        <ul class="lista-invitados">
          <li class="invitado">
              <img src="img/invitado1.jpg" alt="imagen invitado"/>
              <p>Rafael Bautista</p>
          </li>
          <li class="invitado">
            <img src="img/invitado2.jpg" alt="imagen invitado"/>
            <p>Shari Herrera</p>
          </li>
          <li class="invitado">
            <img src="img/invitado3.jpg" alt="imagen invitado"/>
            <p>Gregorio Sanchez</p>
          </li>
          <li class="invitado">
            <img src="img/invitado4.jpg" alt="imagen invitado"/>
            <p>Susana Rivera</p>
          </li>
          <li class="invitado">
            <img src="img/invitado5.jpg" alt="imagen invitado"/>
            <p>Harold Garcia</p>
          </li>
          <li class="invitado">
            <img src="img/invitado6.jpg" alt="imagen invitado"/>
            <p>Susan Sanchez</p>
          </li>
        </ul>
    </section>


    <div class="contador parallax">
      <div class="contenedor">
          <ul class="resumen-evento">
            <li><p class="numero"></p>Invitados</li>
            <li><p class="numero"></p>Talleres</li>
            <li><p class="numero"></p>Dias</li>
            <li><p class="numero"></p>Conferencias</li>
          </ul>
      </div>
    </div><!--contador-->


    <section class="seccion precios">
        <h2>Precios</h2>
        <div class="contenedor">
            <ul class="lista-precios">
              <li>
                 <div class="tabla-precio">
                   <h3>Pase por dia</h3>
                   <p class="numero">$30</p>
                   <ul>
                     <li>Bocadillos Gratis</li>
                     <li>Todas las conferencias</li>
                     <li>Todos los talleres</li>
                   </ul>
                   <div class="btn-compra">
                    <a href="#" class="button hollow">Comprar</a>
                  </div>
                 </div>
              </li>
              <li>
                <div class="tabla-precio">
                  <h3>Todos los dias</h3>
                  <p class="numero">$50</p>
                  <ul>
                    <li>Bocadillos Gratis</li>
                    <li>Todas las conferencias</li>
                    <li>Todos los talleres</li>
                  </ul>
                  <div class="btn-compra">
                    <a href="#" class="button">Comprar</a>
                  </div>
                </div>
             </li>
             <li>
              <div class="tabla-precio">
                <h3>Pase por 2 dias</h3>
                <p class="numero">$45</p>
                <ul>
                  <li>Bocadillos Gratis</li>
                  <li>Todas las conferencias</li>
                  <li>Todos los talleres</li>
                </ul>
                <div class="btn-compra">
                  <a href="#" class="button hollow">Comprar</a>
                </div>
              </div>
             </li>
            </ul>
        </div><!--contenedor-->
    </section><!--Precios-->

    <div id="mapa" class="mapa"></div>

    <section class="seccion">
      <h2>Testimoniales</h2>
      <div class="contenedor">
        <div class="testimoniales">
          <div class="testimonial">
            <blockquote>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia saepe amet illo labore at eligendi deleniti sunt culpa, dolorum sequi, enim voluptate repudiandae neque aut inventore, quisquam natus eveniet quaerat.</p>
              <footer class="info-testimonial">
                <img src="img/testimonial.jpg" alt="Imagen testimonial">
                <cite>Oswaldo Aponte Escobedo<span>Diseñador en @prisma</span></cite>
              </footer>
            </blockquote>
          </div>

          <div class="testimonial">
            <blockquote>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia saepe amet illo labore at eligendi deleniti sunt culpa, dolorum sequi, enim voluptate repudiandae neque aut inventore, quisquam natus eveniet quaerat.</p>
              <footer class="info-testimonial">
                <img src="img/testimonial.jpg" alt="Imagen testimonial">
                <cite>Oswaldo Aponte Escobedo<span>Diseñador en @prisma</span></cite>
              </footer>
            </blockquote>
          </div><!--testimonial-->
          <div class="testimonial">
            <blockquote>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia saepe amet illo labore at eligendi deleniti sunt culpa, dolorum sequi, enim voluptate repudiandae neque aut inventore, quisquam natus eveniet quaerat.</p>
              <footer class="info-testimonial">
                <img src="img/testimonial.jpg" alt="Imagen testimonial">
                <cite>Oswaldo Aponte Escobedo<span>Diseñador en @prisma</span></cite>
              </footer>
            </blockquote>
          </div><!--testimonial-->
      </div><!--Testimoniales-->
      </div><!--ContenedorTestimoniales-->
    </section><!--Testimoniales-->

    <div class="newsletter parallax">
      <div class="contenido contenedor">
        <p>Registrate al newsletter</p>
        <h3>gdlwebcamp</h3>
        <div class="boton">
          <a href="#" class="button transparent">Registro</a>
        </div>
      </div><!--contenido-->
    </div><!--newsletter-->

    <section class="seccion">
      <h2>Faltan</h2>
      <div class="cuenta-regresiva contenedor">
        <ul>
          <li><p id="dias" class="numero"></p>dias</li>
          <li><p id="horas" class="numero"></p>horas</li>
          <li><p id="minutos" class="numero"></p>minutos</li>
          <li><p id="segundos" class="numero"></p>segundos</li>
        </ul>
      </div><!--cuentaRegresiva-->
    </section><!--seccionCuentaRegresiva-->

    <footer class="site-footer">
        <div class="contenedor contenido-footer">
            <div class="footer-info">
              <h3>Sobre <span>Gdlwebcamp</span></h3>
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eius saepe, voluptatem accusantium quaerat fugiat doloribus ex ducimus quo, a, doloremque quae? Explicabo corrupti nihil molestias cumque magni eum eligendi veritatis!</p>
            </div><!--FooterInfo-->
            <div class="ultimos-tweets">
              <h3>Ultimos <span>Tweets</span></h3>
              <ul>
                <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eius saepe, voluptatem accusantium</li>
                <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eius saepe, voluptatem accusantium</li>
                <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eius saepe, voluptatem accusantium</li>
              </ul>
            </div><!--UltimosTweets-->
            <div class="menu">
              <h3>Redes <span>Sociales</span></h3>
              <nav class="redes-sociales">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-pinterest"></i></a>
              </nav>
            </div>
        </div><!--menu-->
        <p class="copyright">Todos los derechos reservados Gdlwebcamp 2020</p>
    </footer><!--SiteFooter-->





  <script src="js/vendor/modernizr-3.8.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.4.1.min.js"><\/script>')</script>
  <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/jquery.animateNumber.js"></script>
  <script src="js/jquery.countdown.js"></script>
  <script src="js/jquery.lettering.js"></script>
  <script src="js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set','transport','beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>