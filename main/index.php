<?php
require('controller/contact.php');
require('controller/convention.php');
@include '../config.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Centre El Ghazali </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;900&display=swap"
    rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500&display=swap" rel="stylesheet">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 


  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>


  
</head>

<body>
  <section class="visiblity">
  <nav class="navbar navbar-expand-lg navbar-light p-3 shadow">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
            <img src="img/logo.jpg" alt="Centre De Diagnostic Medical El-Ghazali" class="logo-img">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link mx-2 active" aria-current="page" href="index.php">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2" href="center.php">Le centre</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2" href="contact_page.php">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2" href="medcin.php">Médecin</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link mx-2 dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Unité
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="consultation medical.php">Consultation médicale spécialisée</a></li>
                        <li><a class="dropdown-item" href="Urgences médico-chirurgicales.php">Urgence chirurgicale</a></li>
                        <li><a class="dropdown-item" href="Imagerie médicale.php">Imagerie médicale</a></li>
                        <li><a class="dropdown-item" href="Laboratoire d'Analyses Médicales.php">Laboratoire d'Analyses Médicales</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto d-none d-lg-inline-flex">
                <li class="nav-item mx-2">
                    <a class="nav-link text-dark h5" href="https://www.instagram.com/centre_elghazali/" target="_blank">
                        <i class="fab fa-instagram"></i>
                    </a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link text-dark h5" href="https://www.facebook.com/centrelghazali" target="_blank">
                        <i class="fab fa-facebook-square"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>




    
    <!-- section accueil -->
    <section class="accueil">
      <div class="reveal">
      <div class="container">
        <div class="row">
          <div class="col-md-8 ms-md-5 " id="accueil-div">
            <h1>Centre De Diagnostic Medical El-Ghazali</h1>
            <h6> Notre but est de fournir des services a la hauter,eficasse et de bonne </h6>
            <h6>qualitée avec un groupe medical compétent et la nouvelle </h6>
            <h6>technologie médicale pour satisfaire tous les besoins</h6>
            <a href="contact.html"><button class="mb-4"id="btn-accueil" >Nous contactez</button></a>
          </div>
            
        </div>
      </div>
    </div>
    </section>
    <!-- section accueil end -->
    <!-- section accueill-services -->
    <section class="accueill-services">
      <div class="reveal">
      <h1>Nos unités</h1>
      <DIV id="cards_landscape_wrap-2">
        <div class="container text-center">
          <div class="row align-items-start ">
            
           
        
            <!-- service1 -->
            <div class="col-md-3 col-10 border-0 mt-3 ms-auto me-auto" >
               <a href="consultation medical.html">
                <div class="card-flyer " id="test1">
                  <div class="text-box" id="test1">
                    <div class="image-box">
                      <img src="img/consultaion.avif" alt="" />
                    </div>
                    <div class="text-container">
                      <h6>Consultation medical spécialisé</h6>
                      <p>Le  centre El-ghezali dispose d’un centre d'imagerie médicale complet, équipé de la dernière technologie de pointe Allemande de marque SIEMENS.

                      </p>

                    </div>
                  </div>
                </div>
               </a>
              
              
            </div>
            <!-- service2 -->
            <div class="col-md-3 col-10 border-0 mt-3 ms-auto me-auto">
              <a href="">
                <div class="card-flyer">
                  <div class="text-box">
                    <div class="image-box">
                      <img src="img/Urgences médico-chirurgicales.jpeg" alt="" />
                    </div>
                    <div class="text-container">
                      <h6>Urgences médico-chirurgicales</h6>
                        <p>
                          Le service d’urgences médico-chirurgicales du centre El-ghezali est ouvert à sa patientèle 7jours/7 ; 24h/24 pour la prise en charge de…
                        </p>
                    </div>
                  </div>
                </div>
              </a>
            </div>
           
            <!-- service3 -->
            <div class="col-md-3 col-10 border-0 mt-3 ms-auto me-auto">
              <a href="Imagerie médicale.html">
                <div class="card-flyer">
                  <div class="text-box">
                    <div class="image-box">
                      <img src="img/Laboratoire d'Analyses Médicales.jpeg" alt="" />
                    </div>
                    <div class="text-container">
                      <h6>Imagerie médicale</h6>
                        <p>Le  centre El-ghezali dispose d’un centre d'imagerie médicale complet, équipé de la dernière technologie de pointe Allemande de marque SIEMENS.</p>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            
           
            
            <!-- service4-->
          <div class="col-md-3 col-10 border-0 mt-3   me-md-auto ms-md-0 ms-auto me-auto ">
            <a href="Laboratoire d'Analyses Médicales.html">
              <div class="card-flyer">
                <div class="text-box">
                  <div class="image-box">
                    <img src="img/laboratoire-analyses-medicales.webp" alt="" />
                  </div>
                  <div class="text-container">
                    <h6>Laboratoire d'Analyses Médicales </h6>
                     <p>Notre laboratoire d'analyse est fonctionnel 7j/7 24h/24. Doté des derniers automates et d’une équipe de biologiste qualifiée, il nous permet de réaliser…</p>
                  </div>
                </div>
              </div>
            </a>
          </div>
         
          
        
          
       

        
        </div>
        
        
          </div>

          
         
         

        </DIV>
      
      </div>
    </section>
    <!-- section accueill-services end-->

 
    


   <!-- section a propos de Nous -->

  <section class="Àpropos">
  <hr class="lign">
  <div class="container-galerie mx-auto">
    <h1 class="convention-header">Galerie</h1>
    <div class="col-md-12 d-flex justify-content-center mt-5 mb-5">

      <div id="carouselExample" class="carousel slide carousel-fade carousel-dark">
        <div class="carousel-indicators">
          <?php
          $sql = "SELECT img, file_type FROM promotion";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            $i = 0;
            while ($row = $result->fetch_assoc()) {
              ?>
              <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="<?php echo $i; ?>" class="<?php echo $i === 0 ? 'active' : ''; ?>" aria-current="<?php echo $i === 0 ? 'true' : 'false'; ?>" aria-label="Slide <?php echo $i + 1; ?>" data-bs-theme="dark"></button>
              <?php
              $i++;
            }
          }
          ?>
        </div>

        <div class="carousel-inner">
          <?php
          $result->data_seek(0); // Reset result pointer

          if ($result->num_rows > 0) {
            $active = true;
            while ($row = $result->fetch_assoc()) {
              $imagePath = $row['img'];
              $fileType = $row['file_type'];
              ?>
              <div class="carousel-item <?php echo $active ? 'active' : ''; ?>">
                <?php if (strpos($fileType, 'video') !== false): ?>
                  <video class="video-fluid" autoplay muted>
                    <source src="../images/<?php echo $imagePath; ?>" type="video/mp4">
                  </video>
                <?php else: ?>
                  <img src="../images/<?php echo $imagePath; ?>" class="d-block w-100">
                <?php endif; ?>
              </div>
              <?php
              $active = false;
            }
          }
          $conn->close();
          ?>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </div>
</section>

  <!-- section a propos de Nous end-->



      <!-- section convention-->
      <section class="convention">
        <div class="reveal">
        <h1 class="convention-header mb-4">nos conventions</h1>
        <div id="cards_landscape_wrap-2">
          <div class="container text-center">
            <div class="row align-items-start ">
             <?php
              convention()
             ?>  
            </div>
          </div>
        </div>
      </section>
    
       <!-- section convention end-->

      
      <?php
require 'controller/footer.php';

?>
</section>

   
        
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
  </script>
  <script src="effect.js"></script>
  <script src="imgzoom.js"></script>
</body>

</html>