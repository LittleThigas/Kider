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
   </head>
   <body>
      <div class="container-xxl bg-white p-0">
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
               </div>
               <a href="conta.php" class="btn btn-primary rounded-pill px-3 d-none d-lg-block">Crie sua conta<i class="fa fa-arrow-right ms-3"></i></a>
            </div>
         </nav>
         <!-- Navbar End -->
         <!-- Appointment Start -->
         <div class="container-xxl py-5">
            <div class="container">
               <div class="bg-light rounded">
                  <div class="row g-0">
                     <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="h-100 d-flex flex-column justify-content-center p-5">
                           <h1 class="mb-4">Sua conta</h1>
                           <form action="conta_salvar.php" method="post">
                              <div class="row g-3">
                                 <div class="col-sm-12">
                                    <div class="form-floating">
                                       <input type="text" class="form-control border-0" id="gname" placeholder="login" name="Login">
                                       <label for="gname">Login</label>
                                    </div>
                                 </div>
                                 <div class="col-sm-6">
                                    <div class="form-floating">
                                       <input type="password" class="form-control border-0" id="gmail" placeholder="Senha" name="Senha">
                                       <label for="gmail">Senha</label>
                                    </div>
                                 </div>
                                 <div class="col-sm-6">
                                    <div class="form-floating">
                                       <input type="text" class="form-control border-0" id="cname" placeholder="Nome Completo" name="NomeCompleto">
                                       <label for="cname">Nome Completo</label>
                                    </div>
                                 </div>
                                 <div class="col-sm-12">
                                    <div class="form-floating">
                                       <input type="email" class="form-control border-0" id="cage" placeholder="Email" name="Email">
                                       <label for="cage">Email</label>
                                    </div>
                                 </div>
                                 <div class="col-sm-12">
                                    <div class="form-floating">
                                       <input type="number" class="form-control border-0" id="cage" placeholder="Telefone" name="Telefone">
                                       <label for="cage">Telefone</label>
                                    </div>
                                 </div>
                                 <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Enviar</button>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                     <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                        <div class="position-relative h-100">
                           <img class="position-absolute w-100 h-100 rounded" src="img/appointment.jpg" style="object-fit: cover;">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- Appointment End -->
         <?php include 'include_footer.php'?>
         <!-- Back to Top -->
         <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
      </div>
      <script src="js/main.js"></script>
   </body>
</html>