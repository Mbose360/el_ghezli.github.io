<?php
require('controller/contact.php');
@include '../config.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>à propos du centre | centre de diagnostic medical el ghazali </title>
     
     <link rel="stylesheet" type="text/css"
     href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
     <link rel="stylesheet" href="style-centr.css">
    </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light  p-3 shadow ">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.html"><img src="img/logo.jpg" alt="" class="logo-img"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class=" collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ms-auto ">
            <li class="nav-item">
              <a class="nav-link mx-2 "  href="index.php">Accueil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-2 active" aria-current="page" href="center.php">Le centre</a>
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
      <div class="container pt-5 ">
        <h1 class="text-center mb-4">centre de diagnostic medical el ghazali</h1>
        
        <div class="row">
          
          <div class="col-md-5">
            <img src="img/background-2.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7  mt-md-0 mt-3"><p>Notre centre medical offre une gamme complète de services de soins de santé,
             allant des soins de routine aux soins de spécialité avancés.
              Nous nous engageons à fournir des soins de qualité supérieure, basés sur les dernières avancées de
               la médecine et les meilleures pratiques en matière de soins de santé.</p> 
               <h3>Notre objectif</h3>
          <p>  est de fournir un environnement de soins de santé accueillant et chaleureux, où chaque patient est traité avec respect, compassion et dignité. Nous sommes déterminés à fournir des soins centrés sur le patient et à travailler en étroite collaboration avec les patients et leurs familles pour répondre à leurs besoins et préoccupations.
            
            Nous espérons que ce site internet vous aidera à mieux connaître notre centre medical et nos services. Si vous avez des questions ou des préoccupations, n'hésitez pas à nous contacter. Nous sommes là pour vous aider et répondre à toutes vos demandes en matière de soins de santé.
          </p> 
         
          </div>
          <div class="col-md-10">
            <h3>temps de travail</h3>
            <p>Le Centre  assure une prise en charge complète a travers un service d’urgence <strong>7j/7 24h/24</strong>, un centre d’imagerie,
              des salles opératoires complètement digitalisée,
              un service de réanimation,
              une unité de réanimation néonatale,
              un service d’hôtellerie de confort.</p>
          </div>
          
          <h3>nos servises</h3>
          <p>Au service de la santé et du bien-être, la centre El-ghezali dispose de plusieurs unité :</p>
            
          <div class="col-md-6">
           
            <h5>-Imagerie médicale</h5>
            <p>les servises proposer :</p>
            <p>-Scanner</p>
            <p>-Echographie</p>
            <p>-Radiologie numérique</p>
            <p>-Mammographie</p>
            <p>-Panoramique Dentaire</p>
            <p>-Biopsie</p>
            <p>-irm</p>
            <a href="Imagerie médicale.html"><button class="btn-savoir-plus">en savoir plus</button></a>
          </div>
  
           <div class="col-md-6">
            <h5>Laboratoire d'Analyses Médicales  </h5>
           <p>les services proposer :</p>
           <p>-biochimie	, mycoloogie</p>
           <p	>-parasitologie , immunologie	</p>
           <p>-microbiologie, hemobiologie</p>
           <p>-hormonologie ,serologie </p>
           <a href="Laboratoire d'Analyses Médicales.html" ><button class="btn-savoir-plus">en savoir plus</button></a>
           </div>
           
  
  
      <div class="row">
        <div class="col-md-6"><h5>Consultation medical spécialisé</h5>
          <p>les servises proposer :</p>
          <p>-Réanimation et anesthésie</p>
          <p>-Urologie</p>
          <p>-Chirurgie générale et digestive</p>
          <p>-L'orthopédie</p>
          <p>-Endocrinologie</p>
          <p>-Gastro-entérologie</p>
          <a href="consultation medical.html"><button class="btn-savoir-plus">en savoir plus</button></a></div>
  
          <div class="col-md-6"> 
            <h5>Urgence chirurgicale</h5>
            <p>les servises proposer :</p>
            <p>-Services d'urgences ;</p>
             <p>-Réparation de plaie, points de suture ;</p> 
             <p>-Infiltration de cortisone ;</p>
             <p>-Douleurs abdominale et lombaire ;</p>
             <p>-Traitement de fracture ou d'entorse ;</p> 
             <p>-Plâtre ou attelle plâtrée ;</p> 
             <p>-Traitement à l'azote liquide pour verrues plantaire et condylomes ;</p> 
             <p>-Drainage d'abcès ;</p>
             <p>-Traitement de brûlure ;</p>  
             <p>-Fièvre, otite, infection urinaire ;</p> 
             <p>-Bronchite, sinusite, grippe, rhume ;</p> 
             <p>-Dépistage MTS ;</p> 
             <p>-Dépression, épuisement professionnel (burn out);</p> 
             <p>-Formulaire de la SAAQ.</p>
            <a href="Urgences médico-chirurgicales.HTML"><button class="btn-savoir-plus">en savoir plus</button></a></div>
      </div>
  
    </div>
        </div>
      </div>
   
      <?php
      require 'controller/footer.php';
      
      ?>
        
         <script src="effect.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>