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
    <title>Urgences médico-chirurgicales</title>
    <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
     <link rel="stylesheet" href="style-urgonce.css">
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
              <li><a class="dropdown-item" href="consultation medical.php">Consultation medical spécialisé</a></li>
              <li><a class="dropdown-item active" href="Urgences médico-chirurgicales.php">Urgence chirurgicale</a></li>
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


    <section class="equipement">
        <div class="photo"> <div class="col-md-8"> <h2>Urgences médico-chirurgicales </h2>
       
      </div>
      </div>
       <div class="container ms-md-3 p-3" id="equipement" >
       
      
      
        <div class="row " id="row" >
          <div class="col-md-8 shadow-config mb-3">
            <div><h2 class="blueh2 ps-3">Temps de travails </h2>
                <p class="ps-3">Ce service se distingue par sa permanence de soins 24h/ 24 et 7j/7, qu’il s’agisse d’urgences médicales (pneumologie, cardiologie, gastro-entérologie,…) ou chirurgicales (viscérales, orthopédiques, urologiques, vasculaires,…).</p></div>
          
                <div><h2 class="blueh2 ps-3">Equipement et prise en charge</h2>
                <p class="ps-3">Doté de 5 boxs de consultation et de 6 lits d’hospitalisation de courte durée, l’HPEL peut proposer l’hospitalisation du patient en service de chirurgie ou de médecine pour assurer une continuité des soins. Cette unité d’hospitalisation de courte durée permet une prise en charge complète du patient,
                     depuis son entrée aux urgences jusqu’à son retour chez lui.</p>
                <p class="ps-3">L’organisation interne de l’HPEL est adaptée à une prise en charge optimale avec un relais du service des urgences vers les différents pôles d’activités de l’établissement pour des prises en charge en médecine et chirurgie, en soins palliatifs et en soins de suite et de réadaptation.</p></div>
                <p class="ps-3">Autre point fort, l’accès direct à la biologie et à l’imagerie médicale (radio, échographie, scanner et IRM) en continu, favorisant une prise en charge du patient complète et de qualité.</p>
                
          <table class="table table-striped text-center">
           <thead>
             <tr class="table-color">
               <th colspan="2">services</th>
           
             </tr>
           </thead>
           <tbody>
            <tr>
              <td scope="row">Réparation de plaie, points de suture 
                
                
                
                
                
                
                </td>
              <td>Infiltration de cortisone </td>
            </tr>
      
            <tr>
              <td scope="row">Douleurs abdominale et lombaire </td>
              <td>Traitement de fracture ou d'entorse </td>
              
              
            </tr>
            <tr>
              <td scope="row">Plâtre ou attelle plâtrée </td>
              <td>Drainage d'abcès </td>
              
              
            </tr>
      
            <tr>
              <td scope="row">Traitement de brûlure </td>
              <td>Fièvre, otite, infection urinaire </td>
              
              
            </tr>
            <tr>
                <td scope="row">Bronchite, sinusite, grippe, rhume </td>
                <td>Dépistage MTS </td>
                
                
              </tr>
              <tr>
                <td scope="row">Dépression, épuisement professionnel (burn out)</td>
                <td>Formulaire de la SAAQ</td>
              </tr>
              <tr>
                <td scope="row" colspan="2">Traitement à l'azote liquide pour verrues plantaire et condylomes </td>
                
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






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>   
</body>
</html>