<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Hello, world!</title>
    <?php wp_head(); ?>
  </head>
  <body>
    <!-- Menú -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
          <a class="navbar-brand" href="#">Logo Corporativo</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="navbar-nav ml-auto">
              <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
              <a class="nav-item nav-link" href="#">Blog</a>
              <a class="nav-item nav-link" href="#">Contacto</a>
            </div>
          </div>
      </div>
      
    </nav>
    <!-- Fin de Menú -->

    <!-- Blog -->
    <div class="container">
      <h2 class="my-5 text-center text-primary">Mi Blog Personal</h2>
      <hr>

      <div class="row">
        <!-- Entradas -->
        <div class="col-lg-9">
          <!-- Entrada 1 -->
          <div class="card-body">
            <a href="single.html">
                <h2>Titulo de la entrada 1</h2>
            </a>
            <p class="small mb-0">Fecha: 22-04-2019</p>
            <p class="small mb-0">Autor: Borja Echevarria</p>
            <p class="small">Categorías: <a href="#">Animales</a> / <a href="#">Comida</a> | Etiqueta: <a href="#">Azul</a> / <a href="#">Verde</a></p>
            <img src="img/1200.jpg" alt="" class="img-fluid mb-3">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit in rerum optio eligendi 
              maxime impedit labore dicta quibusdam veniam aliquam rem quas quisquam, tempora dolore, 
              adipisci exercitationem nobis inventore obcaecati.</p>
            <a href="single.html" class="btn btn-primary">Quiero leer más</a>
          </div>
          <!-- Fin de Entrada 1 -->

          <!-- Entrada 2 -->
          <div class="card-body">
              <a href="single.html">
                  <h2>Titulo de la entrada 2</h2>
              </a>
              <p class="small mb-0">Fecha: 22-04-2019</p>
              <p class="small mb-0">Autor: Borja Echevarria</p>
              <p class="small">Categorías: <a href="#">Animales</a> / <a href="#">Comida</a> | Etiqueta: <a href="#">Azul</a> / <a href="#">Verde</a></p>
              <img src="img/1200.jpg" alt="" class="img-fluid mb-3">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit in rerum optio eligendi 
                maxime impedit labore dicta quibusdam veniam aliquam rem quas quisquam, tempora dolore, 
                adipisci exercitationem nobis inventore obcaecati.</p>
              <a href="single.html" class="btn btn-primary">Quiero leer más</a>
            </div>
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

    <footer class="container-fluid py-4 text-center text-light bg-dark">
      <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </h5>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
