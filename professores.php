<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>Kider - Escola Bilingue</title>
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <meta content="" name="keywords">
      <meta content="" name="description">
      <!-- Favicon -->
      <link href="img/favicon.ico" rel="icon">
      <!-- Google Web Fonts -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@600&family=Lobster+Two:wght@700&display=swap" rel="stylesheet">
      <!-- Icon Font Stylesheet -->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
      <!-- Libraries Stylesheet -->
      <link href="lib/animate/animate.min.css" rel="stylesheet">
      <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
      <!-- Customized Bootstrap Stylesheet -->
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <!-- Template Stylesheet -->
      <link href="css/style.css" rel="stylesheet">
      <!-- JavaScript Libraries -->
      <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
      <script src="lib/wow/wow.min.js"></script>
      <script src="lib/easing/easing.min.js"></script>
      <script src="lib/waypoints/waypoints.min.js"></script>
      <script src="lib/owlcarousel/owl.carousel.min.js"></script>
   </head>
   <body>
      <!-- Navbar Start -->
      <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0">
         <a href="index.php" class="navbar-brand">
            <h1 class="m-0 text-primary"><i class="fa fa-book-reader me-3"></i>Kider</h1>
         </a>
         <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
         <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-auto">
               <a href="index.php" class="nav-item nav-link active">Início</a>
               <a href="cadastro_professor.php" class="nav-item nav-link">Cadastro Professor</a>
               <div class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Mais</a>
                  <div class="dropdown-menu rounded-0 rounded-bottom border-0 shadow-sm m-0">
                     <a href="" class="dropdown-item">Nosso programa</a>
                     <a href="professores.php" class="dropdown-item">Nossos professores</a>
                     <a href="" class="dropdown-item">Depoimentos</a>
                  </div>
               </div>
               <a href="contato_escola.php" class="nav-item nav-link">Contato</a>
            </div>
            <a href="index.php" class="btn btn-primary rounded-pill px-3 d-none d-lg-block">Crie sua conta<i class="fa fa-arrow-right ms-3"></i></a>
         </div>
      </nav>
      <!-- Navbar End -->
      <h1 class="text-center">Lista dos Professores</h1>
      <?php 
         include 'conexao_bd.php';
         
         $query = "SELECT Nome FROM PROFESSOR";
         $result = $conn->query($query);
         
         if ($result->num_rows > 0) {
             while ($row = $result->fetch_assoc()) {
                 echo "<p>".$row['Nome']."</p>"."<br>";
             }
         } else{
             echo "Nenhum Professor Registrado";
             }
         ?>
      <!-- Footer Start -->
      <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
         <div class="container py-5">
            <div class="row g-5">
               <div class="col-lg-3 col-md-6">
                  <h3 class="text-white mb-4">Onde estamos</h3>
                  <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Avenida ACM, 1520 - Ilhéus - Ba</p>
                  <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>(73) 3656-0120</p>
                  <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@kider.com.br</p>
                  <div class="d-flex pt-2">
                     <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                     <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                     <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6">
                  <h3 class="text-white mb-4">Galeria</h3>
                  <div class="row g-2 pt-2">
                     <div class="col-4">
                        <img class="img-fluid rounded bg-light p-1" src="img/classes-1.jpg" alt="">
                     </div>
                     <div class="col-4">
                        <img class="img-fluid rounded bg-light p-1" src="img/classes-2.jpg" alt="">
                     </div>
                     <div class="col-4">
                        <img class="img-fluid rounded bg-light p-1" src="img/classes-3.jpg" alt="">
                     </div>
                     <div class="col-4">
                        <img class="img-fluid rounded bg-light p-1" src="img/classes-4.jpg" alt="">
                     </div>
                     <div class="col-4">
                        <img class="img-fluid rounded bg-light p-1" src="img/classes-5.jpg" alt="">
                     </div>
                     <div class="col-4">
                        <img class="img-fluid rounded bg-light p-1" src="img/classes-6.jpg" alt="">
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6">
                  <h3 class="text-white mb-4">Assine nossa newsletter</h3>
                  <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                  <div class="position-relative mx-auto" style="max-width: 400px;">
                     <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="   Seu email">
                     <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Enviar</button>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Footer End -->
      <script src="js/main.js"></script>
   </body>
</html>