<?php get_header(); ?>

      <div class="row">
        <!-- Entradas -->
        <div class="col-lg-9">
          

          <!-- Entrada 2 -->
          <?php get_header();if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <!-- Entrada 1 -->
          <div class="card-body">
            <h2><?php the_title(); ?></h2>
            <p class="small mb-0">Fecha: <?php the_time('j F, Y'); ?></p>
            <p class="small mb-0">Autor: <?php the_author(); ?></p>
            <p class="small">Categorías: <?php the_category( '/'); ?> | Etiqueta: <?php the_tags('', '/', ''); ?>
            <!-- Array para agregar clases a las imagenes destacadas -->
            <?php 
              if ( has_post_thumbnail() ) {
                  the_post_thumbnail('post-thumbnails' , array(
                    'class' => 'img fluid mb-3'
                  ));
            }
            ?>
            <!-- <img src="img/1200.jpg" alt="" class="img-fluid mb-3"> -->
            
            <?php the_content(); ?>
          </div>
          <!-- Fin de Entrada 1 -->
          <?php endwhile; endif; ?>

            <!-- Fin de Entrada 2 -->

           
        </div>
        <!-- Fin de Entradas -->
        
        <!-- Sidebar -->
        <div class="col-lg-3">
            <div class="card-body">
              <h4>Publicidad</h4>
              <hr>
              <img src="img/vertical.jpg" class="img-fluid" alt="">
            </div>
            
          </div>
        <!-- Fin de Sidebar -->
      </div>
    </div>
    <!-- Fin de Blog -->

    <?php get_footer(); ?>

  </body>
</html>
