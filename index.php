<?php  include_once 'includes/templates/header.php' ?>
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
            <?php 
            try{
              require_once('includes/functions/db_conexion.php');
              $sql = 'SELECT * FROM categoria_evento ';
              $sql .= "ORDER BY orden";
              $resultado = $conexion->query($sql);
            }catch(Exception  $e){
              $error = $e->getMessage();
            }
            ?>
            <nav class="menu-programa">
            <?php while($categorias = $resultado->fetch_assoc()){ ?>
              <?php $categoria = $categorias['cat_evento']; ?>
              <a href="#<?php echo strtolower($categoria) ?>">
                    <i class="<?php echo $categorias['icono']?>"></i>
                    <?php echo $categoria ?>
              </a>
           <?php } ?>
            </nav>

            <?php 
              try {
                require_once('includes/functions/db_conexion.php');
                //Consulta1
                $sql = "SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre, apellido ";
                $sql .= " FROM eventos ";
                $sql .= "INNER JOIN categoria_evento ";
                $sql .= "ON eventos.id_cat_evento = categoria_evento.id_categoria ";
                $sql .= "INNER JOIN invitados ";
                $sql .= "ON eventos.invitado_id = invitados.invitado_id ";
                $sql .= "AND eventos.id_cat_evento = 1 ";
                $sql .= "ORDER BY evento_id LIMIT 2;";
                //Consulta2
                $sql .= "SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre, apellido ";
                $sql .= " FROM eventos ";
                $sql .= "INNER JOIN categoria_evento ";
                $sql .= "ON eventos.id_cat_evento = categoria_evento.id_categoria ";
                $sql .= "INNER JOIN invitados ";
                $sql .= "ON eventos.invitado_id = invitados.invitado_id ";
                $sql .= "AND eventos.id_cat_evento = 2 ";
                $sql .= "ORDER BY evento_id LIMIT 2;";
                //Consulta3
                $sql .= "SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre, apellido ";
                $sql .= " FROM eventos ";
                $sql .= "INNER JOIN categoria_evento ";
                $sql .= "ON eventos.id_cat_evento = categoria_evento.id_categoria ";
                $sql .= "INNER JOIN invitados ";
                $sql .= "ON eventos.invitado_id = invitados.invitado_id ";
                $sql .= "AND eventos.id_cat_evento = 3 ";
                $sql .= "ORDER BY evento_id LIMIT 2;";
            } catch (\Exception $e) {
                echo $e->get_Message();
            }
           ?> 

           <?php $conexion->multi_query($sql); ?>
           <?php 
              do {
                 $resultados = $conexion->store_result();
                 $row = $resultados->fetch_all(MYSQLI_ASSOC);?>
                <?php $i = 0; ?>
                <?php foreach ($row as $evento) {?>
                <?php if($i % 2 == 0){?>
                  <div id="<?php echo strtolower($evento['cat_evento'])?>" class="info-curso ocultar clearfix">
                <?php }?>
                    <div class="detalle-evento">
                    <h3><?php echo mb_convert_encoding($evento["nombre_evento"],'UTF-8'); ?></h3>
                    <p><i class="far fa-clock"></i><?php echo $evento['hora_evento']; ?></p>
                    <p><i class="far fa-calendar-alt"></i><?php echo $evento['fecha_evento']; ?></p>
                    <p><i class="fas fa-user"></i><?php echo $evento['nombre'] . " " . $evento['apellido']; ?></p>
                  </div><!--detalle_evento-->
                <?php if($i % 2 ==1){?>
                  <div class="fd">
                    <a href="calendario.php" class="button">Ver Todos</a>
                </div>
                  </div><!--Talleres-->
                <?php } ?>

               <?php $i++; ?>
               <?php } //Fin del for each?>
               <?php $resultado->free();
           <?php } while ($conexion->more_results() && $conexion->next_result()); ?>      
          </div><!--prograEvento-->
        </div><!--contenedor-->
      </div><!--contenidoPrograma-->
    </section><!--programa-->

  

    <?php include_once 'includes/templates/invitados.php'?>


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

    <?php  include_once 'includes/templates/footer.php' ?>
</body>
</html>
