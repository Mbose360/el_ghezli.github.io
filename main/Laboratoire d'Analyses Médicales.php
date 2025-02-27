<?php
require('controller/contact.php');
@include '../config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
     <link rel="stylesheet" href="style-laboratoire.css">
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
          <li class="nav-item">
            <a class="nav-link mx-2 " aria-current="page" href="index.php">Accueil</a>
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
            <a class="nav-link mx-2 dropdown-toggle active" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Unité
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item " href="consultation medical.php">Consultation medical spécialisé</a></li>
              <li><a class="dropdown-item" href="Urgences médico-chirurgicales.php">Urgence chirurgicale</a></li>
              <li><a class="dropdown-item" href="Imagerie médicale.php">Imagerie médicale</a></li>
              <li><a class="dropdown-item active" href="Laboratoire d'Analyses Médicales.php">Laboratoire d'Analyses Médicales </a></li>
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

  <!-- section -->
<section class="equipement">
  <div class="photo"> <div class="col-md-8"> <h2> Laboratoire d'Analyses Médicales</h2>
  <p>Bienvenue à notre laboratoire d'analyse médicale ! Nous sommes une équipe de professionnels dévoués à fournir des résultats d'analyse précis et fiables pour aider nos patients à prendre des décisions éclairées concernant leur santé.</p>
  <p>Notre laboratoire est équipé des technologies les plus avancées pour assurer des analyses de haute qualité et notre personnel est hautement qualifié pour mener à bien chaque étape de l'analyse.</p>
  <p class="photo-padding">Nous sommes fiers de notre engagement envers l'excellence et de notre engagement envers la satisfaction du patient. Nous espérons que vous trouverez notre laboratoire d'analyse médicale professionnel, convivial et pratique pour vos besoins en matière d'analyse médicale.</p>
</div>
</div>
 <div class="container ms-md-3 p-3" id="equipement" >
 


  <div class="row " id="row" >
    <div class="col-md-8 shadow-config mb-3">
    <h2 class="blueh2 text-center"> </h2>
    <table class="table table-striped text-center">
     <thead>
       <tr class="table-color">
         <th colspan="2">services</th>
         
         
         
       </tr>
     </thead>
     <tbody>
      <tr>
        <td scope="row">biochimie
          
          
          
          
          
          
          </td>
        <td>mycoloogie</td>
      </tr>

      <tr>
        <td scope="row">hemobiologie</td>
        <td>immunologie</td>
        
        
      </tr>
      <tr>
        <td scope="row">parasitologie</td>
        <td>microbiologie</td>
        
        
      </tr>

      <tr>
        <td scope="row">hormonologie</td>
        <td>serologie</td>
        
        
      </tr>
    </tbody>
  </table>
      
    </div>
    
   
  
  
      <!-- contact-us -->
      <div class="col-md-3  mx-auto contact-us sticky-top text-center "> <h3 class="text-center">visiter nous sur :</h3>
        <div class="row ">
          <div class="col-6" > <a href="https://www.facebook.com/centrelghazali"><img src="img/LogoMakr-1DJtvZ (1).png" class="img-fluid" height="100vw" alt=""></a> </div> 
     <div class="col-6" > <a href="https://www.instagram.com/centre_elghazali/ "><img src="img/LogoMakr-2LxyHn.png" class="img-fluid" height="100vw" id="img-hover"  alt=""></a> </div>
        </div>
         <h3 class="text-center">ou contacter nous sur : </h3>
         
            
       <div class="mt-4"> <p class="text-center"><a   href="tel:0671013091">TEL : 0671 01 30 91</a></p></div> 
       <div class="mt-4 "> <p class="text-center"><a   href="tel:0558477733" >TEL : 05 58 47 77 33</a></p></div> 
       <div class="mt-4 mb-4"> <p class="text-center"><a   href="tel:0552395077" >TEL : 05 52 39 50 77</a></p></div> 
      </div>
          </div>
    </div>
    
    
    </section>
    
    <!-- information  end-->
    
    
    
    
    
    
    
    
    
    <?php
    require 'controller/footer.php';
    
    ?>



      
      
      
      
      
      
      
      
        

 
  <script src="div.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>