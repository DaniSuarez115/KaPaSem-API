<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
 <link rel="stylesheet" href="Style.css">
</head>

<body>
 <div class="fluid-container" id="backround">
 <div>
 <header>
    <div class="fluid-container">
    <nav class="navbar navbar-expand-md navbar-dark" style="background-color: #000;">
    <a class="navbar-brand" href="#">KaPaSem-API</a>
       <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
           aria-expanded="false" aria-label="Toggle navigation"></button>
       <div class="collapse navbar-collapse" id="collapsibleNavId">
           <ul class="navbar-nav me-auto mt-2 mt-lg-0">
               <li class="nav-item">
                   <a class="nav-link active" href="#" aria-current="page">Home <span class="visually-hidden">(current)</span></a>
               </li>
               <li class="nav-item dropdown">
                   <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Acciones</a>
                   <div class="dropdown-menu" aria-labelledby="dropdownId">
                       <a class="dropdown-item" href="#">Usuario</a>
                       <a class="dropdown-item" href="#">Plantas</a>
                   </div>
               </li>
           </ul>
           <form class="d-flex my-2 my-lg-0">
               <input class="form-control me-sm-2" type="text" placeholder="Search">
               <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
           </form>
       </div>
    </div>
   </nav>
  </header>
 </div>
 <main>
    <div class="titulo">
        <?php
          $rutaImagen='Imagenes/ivy.png'
        ?>
        <div class="ivy">
              <img class="pokemon" src="<?php echo $rutaImagen; ?>" class="img-fluid rounded-top" alt="">
        </div>
      
        <h1>Bienvenido a la API de KaPaSem</h1>
    </div>
    <div class="BodyMain">
        <!-- Contenido del cuerpo principal -->
    </div>
</main>

  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
  
 </div>
</body>

</html>