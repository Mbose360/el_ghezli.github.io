<?php
require('controller/médecin.php');
require('controller/contact.php');
@include '../config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos médecins | Centre El Ghazali</title>
    <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
     <link rel="stylesheet" href="style-medci.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light  p-3 shadow ">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php"><img src="img/logo.jpg" alt="" class="logo-img"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
  
      <div class=" collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto ">
          <li i class="nav-item">
            <a class="nav-link mx-2 "  href="index.php">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-2" href="center.php">Le centre</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-2" href="contact_page.php">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-2 active" aria-current="page" href="#">Médecin</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link mx-2 dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Unité
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="consultation medical.php">Consultation medical spécialisé</a></li>
              <li><a class="dropdown-item" href="Urgences médico-chirurgicales.php">Urgence chirurgicale</a></li>
              <li><a class="dropdown-item" href="Imagerie médicale.php">Imagerie médicale</a></li>
              <li><a class="dropdown-item" href="Laboratoire d'Analyses Médicales.php">Laboratoire d'Analyses Médicales </a></li>
            </ul>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto d-none d-lg-inline-flex">
          
          <li class="nav-item mx-2">
            <a class="nav-link text-dark h5" href="https://www.instagram.com/centre_elghazali/" target="blank"><i class="fab fa-instagram"></i></a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link text-dark h5" href="https://www.facebook.com/centrelghazali" target="blank"><i class="fab fa-facebook-square"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <div class="reveal">
        <div class="photo"> <div class="col-md-8"> <h2> 
            Rencontrez Nos Experts Médecins : Des Soins Attentionnés et une Expertise Exceptionnelle</h2>
            <p>Bienvenue dans notre prestigieuse section dédiée aux médecins, où des soins attentionnés et une expertise médicale exceptionnelle se rejoignent pour vous offrir le plus haut niveau de santé.</p>
            <p>Notre équipe de médecins hautement qualifiés et dévoués s'engage envers votre bien-être et veille à ce que vous receviez une attention et un traitement personnalisés adaptés à vos besoins uniques.</p>
           
          </div>
    </div>
 
   

      <section class="convention">
       
        <h1 class="convention-header mb-4">médecins</h1>
        <div class="row" style="margin: auto;">
  
       
        <?php
            medecin();
          ?>
       </div>

      

  






    
    </div>
    
       <!-- footer strat-->
       <?php
require 'controller/footer.php';

?>

      
      
      
      
      
      
      
      
        
 
   <script src="effect.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>



