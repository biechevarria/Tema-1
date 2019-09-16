<?php get_header(); ?>

      <div class="row">
        <!-- Entradas -->
        <div class="col-lg-9">
          

          <!-- Entrada 2 -->
          <?php get_header();if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <!-- Entrada 1 -->
          <div class="card-body">
            <a href="<?php the_permalink(); ?>">
                <h2><?php the_title(); ?></h2>
            </a>
            <p class="small mb-0">Fecha: <?php the_time('j F, Y'); ?></p>
            <p class="small mb-0">Autor: <?php the_author(); ?></p>
            <p class="small">Categorías: <?php the_category( '/'); ?> | Etiqueta: <?php the_tags('', '/', ''); ?>
            <!-- Array para mostrar las imagenes destacadas y sus clases -->
            <?php
                  if ( has_post_thumbnail() ) {
                    the_post_thumbnail('post-thumbnails', array('class' => 'img-fluid mb-3' )); 
                }
            ?>
            <!-- <img src="img/1200.jpg" alt="" class="img-fluid mb-3"> -->

            

            <!-- Fin Array para mostrar las imagenes destacadas y sus clases -->
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>" class="btn btn-primary">Quiero leer más</a>
          </div>
          <!-- Fin de Entrada 1 -->
          <?php endwhile; endif; ?>

            <!-- Fin de Entrada 2 -->

            <!-- Paginacion -->
            <div class="card-body">
              <nav aria-label="Page navigation example">
                <ul class="pagination">
                  <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                      </li>
                      <li class="page-item active"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                          <span aria-hidden="true">&raquo;</span>
                        </a>
                  </li>
                </ul>    
              </nav>      
            </div>  
            <!-- Fin de Paginacion -->
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
