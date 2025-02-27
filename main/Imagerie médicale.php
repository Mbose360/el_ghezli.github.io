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
  <title>Consultation medical spécialisé | Center de Diagnostic medical El Ghazeli</title>
  <link rel="stylesheet" type="text/css"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
   <link rel="stylesheet" href="style-consultation.css">
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
              <li><a class="dropdown-item active" href="Imagerie médicale.php">Imagerie médicale</a></li>
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

  <!-- section -->
<section class="equipement">
  <div class="photo"> <div> <h2>Imagerie médicale</h2></div></div>
 <div class="container ms-md-3 p-3" id="equipement" >
 


  <div class="row " id="row" >
    <div class="col-md-8 shadow-config mb-3"> <div class="row">
      
      <div class="col-md-2 col-5"><p   class="hover-btn" id="SCANNER">Scanner</p></div> 
      <div class="col-md-3 col-5"><p  class="hover-btn" id="ECHOGRAPHIE">Echographie</p> </div>  
      <div class="col-md-3 col-5"><p  class="hover-btn" id="Radiologie-numérique">Radiologie numérique </p> </div> 
      <div class="col-md-3 col-6"><p  class="hover-btn" id="MAMMOGRAPHIE">Mammographie</p></div>  
      <div class="col-md-3 col-5 mx-auto"><p  class="hover-btn" id="Panoramique-Dentaire">Panoramique Dentaire</p> </div>
      <div class="col-md-3 col-5 mx-auto"><p  class="hover-btn" id="BIOPSIE">Biopsie</p> </div> 
      <div class="col-md-3 col-5 mx-auto"><p  class="hover-btn" id="IRM">Irm</p> </div> 

       </div>
    
    <hr class="lign">
      <div id="content" class=" p-3" >
     
      </div>
    </div>
    
    <!-- SCANNER -->
    <div  id="scanner" style="display:none;" class="information"> <div id="AboutMeHTML" style="display:none;">
       <h2 class="blueh2">Types d'examens</h2>
     
      <table class="table table-striped text-center">
        <thead>
          <tr class="table-color">
            <th scope="col">Specialité</th>
          
            <th scope="col">Examens</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td scope="row">Neuro-Imagerie</td>
            <td>Crâne, Hypophyse, Rachis, Face, Orbites</td>
            
            
          </tr>
          <tr>
            <td scope="row">ORL</td>
            <td>Oreille, Rocher, Cavum, Sinus, Parotide, ATM (Articulation temporo mandibulaire)</td>
           
          </tr>
          <tr>
            <td scope="row">Thorax-Abdomen-Pelvis</td>
            <td colspan="2">Thorax, Thoraco-Abdominal, Thoraco-Abdomino-Pelvien, Abdomino-Pelvien, Entéro-scanner</td>
          
          </tr>


          <tr>
            <td scope="row">Uro-imagerie</td>
            <td>Urino-scanner, uro-scanner</td>
            
            
          </tr>



          <tr>
            <td scope="row">Ostéo-articulaire</td>
            <td>Fémur, Genou, Coude, Bras, Avant-bras, Main, Maxillaire, Bassin, Hanche, Arthro-scanner de l'épaule, Arthro-scanner du genou</td>
            
            
          </tr>



          <tr>
            <td scope="row">Vasculaire</td>
            <td>Angio-scanner des Membres supérieurs et inférieurs, Angio-scanner des TSA, Angio-scanner rénale, Angio-pulmonaire</td>
            
            
          </tr>


          <tr>
            <td scope="row">Ostéo Articulaire</td>
            <td>Fémur, Genou, Coude, Bras, Avant-bras, Main, Maxillaire, Bassin, Hanche, Arthro-IRM</td>
            
            
          </tr>


          <tr>
            <td scope="row">Vasculaire</td>
            <td>Angio-rénale</td>
            
            
          </tr>


          <tr>
            <td scope="row">Cœur</td>
            <td>Coro scanner</td>
            
            
          </tr>
        </tbody>
      </table>
      <!-- contre-indication -->
      <hr class="lign">
      <div class="contr-indication">
       <h2 class="blueh2">Contre indications</h2> 

       <table class="table table-striped text-center mb-5" id="table">
        <thead>
          <tr class="table-color">
            <th   scope="col">Absolues</th>
          
            <th  scope="col">Relatives</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td scope="row">Allergie à l’iode</td>
            <td>Grossesse</td>
          </tr>          
        </tbody>
      </table>
      
       </div>
        <!-- contre-indication  end-->

        <!-- preparation -->
       <div class="préparation">
        <h2 class="blueh2">Préparation</h2>
        <p>En cas d’injection de produit de contraste, un bilan rénal (créatinémie, clearance de la créatinine) sera demandé aux patients âgés de plus de 60ans, aux patients hypertendus et aux diabétiques.</p>
        <p>Les diabétiques sous metformine (Glucophage, etc..) devront suspendre leur traitement avant et pendant les 48h suivant l'examen.</p>
        <p>Tous ces patients doivent boire 2 litres d’eau dans les deux heures suivant l’examen au scanner.</p>
       
        <!-- <div class="caution"> <p> Les autres examens IRM ne nécessitent pas de préparation.</p></div> -->
        
       </div>

       
        <!-- preparation end-->
        <!-- Sédation -->
        <div class="Sédation"> 
          <h2 class="blueh2">Sédation</h2>
          <p>Elle est administrée par l'anesthésiste-réanimateur chez tous les enfants souffrant de claustrophobie.</p>
          <p>Elle impose un jeûne de 4 heures avant l’examen.</p>
         </div>
         <!-- Sédation end-->
         <!-- Précaution -->
         <div class="Précaution"> 
          <h2 class="blueh2">Précaution</h2>
          <p>En cas de prescription concomitante d'un scanner et d'une scintigraphie, le scanner devra être réalisé en premier.</p>
          <p>Sauf dans le cas d'une scintigraphie thyroïdienne, celle-ci devra être réalisée avant le scanner.</p>
        </div>
           <!-- Précaution end-->
           <div class="Déroulement-de-l'examen"> 
            <h2 class="blueh2">Déroulement de l'examen</h2>
            <p>En fonction du type et de la complexité de l’examen, celui-ci dure entre 2 et 5 minutes.</p>
           </div>
    </div>

    
    <!-- scanner examen end -->


    <!-- scanner equipement -->
    <div id="ContactHTML" style="display:none;">
      <div class="Nos-équipements">
        <h2 class="blueh2">Nos équipements</h2>
        <h4 class="titre"> <span>Coupes </span> 
          64 (IVR)</h4>
          <h4 class="titre"> <span>Temps de rotation:</span> 
            jusqu’à 0,33 s</h4>
        
            <h4 class="titre"> <span>Tube</span> 
              6,0 MHU (15,0 MHU valeur équivalente avec SAFIRE)</h4>

              <h4 class="titre"> <span>Puissance</span> 
                75 kW (187 kW valeur équivalente avec SAFIRE)</h4>

              <h4 class="titre"> <span> Haute tension</span> 
                70, 80, 90, 100, 110, 120, 130, 140 kV (incréments de 10 kV)</h4>

              <h4 class="titre"> <span>mA</span> 
                jusqu’à 825 mA à 70 et 80 kV (800 mA à 90 kV)</h4>

              <h4 class="titre"> <span>Charge max. de la table</span> 
                jusqu’à 307 kg</h4>

              <h4 class="titre"> <span>Reconstruction itérative</span> 
                SAFIRE</h4>

        <div class="row">
          
          <div class="col-8 mt-4" >
            <img src="img/scanner.jpg" class="img-fluid mt-3 center"  alt="">
          </div>
        </div>


      </div>
      <!-- scanner Technologie -->
       <div class="Technologie">
        <h2 class="blueh2"> Technologie</h2>
        <p>le scanner siemens 64 coupes signifie qu'il est capable de générer 64 images en coupe différentes lors d'une seule rotation, ce qui permet d'obtenir des images très détaillées et d'examiner de manière approfondie la structure interne du corps du patient.</p>
        <p>-Voici quelques caractéristiques et avantages généraux associés aux scanners Siemens 64 coupes :</p>
        <p class="titre"><span>1-Haute résolution :</span> Les scanners CT 64 coupes produisent des images de haute résolution, ce qui permet une visualisation plus précise des tissus et des organes internes.</p>
        <p class="titre"><span>2-Rapidité :</span> En raison de la capacité à obtenir 64 coupes à la fois, ces scanners sont généralement plus rapides que les modèles à moins de coupes, ce qui réduit le temps d'exposition aux rayons X pour le patient.</p>
         <p class="titre"><span>3-Polyvalence :</span> Les scanners CT 64 coupes peuvent être utilisés pour diverses applications médicales, y compris l'imagerie du cœur, des poumons, de l'abdomen, du cerveau et des os, ainsi que pour les interventions guidées par imagerie.</p>
         <p class="titre"><span>4-Précision diagnostique :</span> Les images de haute résolution obtenues avec ces scanners permettent aux médecins de poser des diagnostics plus précis et de planifier des traitements plus efficaces.</p>
         <p class="titre"><span>5-Réduction de la dose de rayonnement :</span> De nombreux scanners Siemens 64 coupes sont équipés de fonctionnalités de réduction de la dose de rayonnement, ce qui est bénéfique pour la sécurité des patients.</p>
         <p class="titre"><span>6-Intégration des technologies avancées :</span> Les scanners CT Siemens intègrent souvent des technologies avancées telles que la tomodensitométrie à double source, la tomodensitométrie à double énergie, et des fonctionnalités logicielles de post-traitement des images.</p>
         <p class="titre"><span>7-Confort du patient :</span>  Les scanners Siemens sont conçus pour offrir un meilleur confort au patient pendant l'examen, ce qui est important pour minimiser les mouvements involontaires qui pourraient affecter la qualité de l'image.</p>
      </div>
    </div>
    <!-- scanner equipement end -->
    <table class="text-center" width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <p  onclick="document.getElementById('AboutOrContactDiv').innerHTML=document.getElementById('AboutMeHTML').innerHTML;" class="hover-btn clickabele">examens</p> 
        <p onclick="document.getElementById('AboutOrContactDiv').innerHTML=document.getElementById('ContactHTML').innerHTML;" class="hover-btn clickabele">equipment</p>
      </tr>
    </table>
    <div id="AboutOrContactDiv"></div> 
  </div>
  <!-- scanner END -->
  







  <!-- Radiologie/numérique -->
  <div  id="Radiologie/numérique" style="display:none;" class="information"> <div id="AboutMeHTML" style="display:none;">
    <h2 class="blueh2">Types d'examens</h2>
  
    <table class="table table-striped text-center">
      <thead>
        <tr class="table-color">
        
          <th scope="col">Type Examens</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td scope="row">
            Radiologie osseuse et articulaire
           </td>      
        </tr>
        
        <tr>
          <td>
            Radiologie pulmonaire
          </td>
        </tr>
   
        <tr>
         <td>
          Radiographie de l’abdomen sans préparation
         </td>
       </tr>
   
       <tr>
         <td>
          Neuro radiologique, Rachis
         </td>
       </tr>
       
      </tbody>
    </table>
   <!-- contre-indication  Radiologie/numérique -->
   <hr class="lign">
   <div class="contr-indication">
    <h2 class="blueh2">Contre indications</h2> 
    <p> grossesse inférieure à 4 mois</p>
    </div>
     <!-- contre-indication  end-->

     <!-- preparation  Radiologie/numérique-->
    


    
     <!-- preparation  Radiologie/numérique end-->
     <!-- Sédation  Radiologie/numérique -->
     <div class="Sédation"> 
       <h2 class="blueh2">Sédation</h2>
       <p>aucune</p>
      </div>
      <!-- Sédation  Radiologie/numérique end-->
      <!-- Précaution  Radiologie/numérique -->
      <div class="Précaution"> 
       <h2 class="blueh2">Précaution</h2>
       <p>aucune</p>
      </div>
        <!-- Précaution  Radiologie/numérique end-->

        <!-- Dérée-de-l'examen -->
        <div class="Dérée-de-l'examen"> 
         <h2 class="blueh2">Dérée de l'examen</h2>
         <p>L’examen dure entre 2 et 5 minutes</p>
        </div>
        <!-- Dérée-de-l'examen end-->
 </div>

 
 <!-- Radiologie/numérique examen end -->





 <!-- Radiologie/numérique equipement -->
 <div id="ContactHTML" style="display:none;">
   <div class="Nos-équipements">
     <h2 class="blueh2">Nos équipements</h2>
     <h4 class="titre"> <span>Type:</span>  FUJIFILM 
      FDR Smart X</h4>
     <div class="row img">
       <div class="col-7 mt-4" id="img">
         <img src="img/RAdiographie.jpeg" class="img-fluid" height="200vw" alt="">
       </div>
      
     </div>


   </div>
   <!-- Radiologie/numérique Technologie -->
    <div class="Technologie">
     <h2 class="blueh2"> Technologie</h2>
  <p>FDR Smart X est une solution de radiographie multifonctions développée par Fujifilm. FDR Smart X propose deux configurations principales  : <br> système avec colonne ou système avec suspension.</p>
  <p>Compatible avec les capteurs DR de la série D-EVO II de Fujifilm et doté de fonctionnalités avancées avec une haute qualité d’image. Les cassettes CR et F/S sont également compatibles avec le système FDR Smart X.</p>
   </div>
 

 
 
 
 </div>
 <!-- Radiologie/numérique equipement end -->
 <table class="text-center" width="100%" border="0" cellspacing="0" cellpadding="0">
   <tr>
     <td onclick="document.getElementById('AboutOrContactDiv').innerHTML=document.getElementById('AboutMeHTML').innerHTML;">  <p class="hover-btn">examens</p> </td>
     <td onclick="document.getElementById('AboutOrContactDiv').innerHTML=document.getElementById('ContactHTML').innerHTML;"><p class="hover-btn"> equipment</p></td>
   </tr>
 </table>
 <div id="AboutOrContactDiv"></div> 
</div>














<!-- Echographie -->
<div  id="Echographie" style="display:none;" class="information"> <div id="AboutMeHTML" style="display:none;">
  <h2 class="blueh2">Types d'examens</h2>

 <table class="table table-striped text-center">
   <thead>
     <tr class="table-color">
     
       <th scope="col">Type Examens</th>
     </tr>
   </thead>
   <tbody>
     <tr>
       <td scope="row">
        obstétricale
        </td>      
     </tr>
     
     <tr>
       <td>
        pelvienne
       </td>
     </tr>

     <tr>
      <td>
        prostatique
      </td>
    </tr>

    <tr>
      <td>
        musculo-tendineuse
      </td>
    </tr>

    <tr>
      <td>
        thyroïdienne
      </td>
    </tr>

    <tr>
      <td>
        abdominale
      </td>
    </tr>

    <tr>
      <td>
        glandes salivaires
      </td>
    </tr>

    <tr>
      <td>
        doppler vasculaire
      </td>
    </tr>

    <tr>
      <td>
        testiculaire
      </td>
    </tr>

    <tr>
      <td>
        Écho-doppler veineux des membres
      </td>
    </tr>
    
   </tbody>
 </table>
 <!-- contre-indication -->
 <hr class="lign">
 <div class="contr-indication">
  <h2 class="blueh2">Contre indications</h2> 

 <p>aucune</p>
 
  
  
  </div>
   <!-- contre-indication  end-->

   <!-- preparation -->
  <div class="préparation">
   <h2 class="blueh2">Préparation</h2>
   <p>Être à jeun de 4 heures pour les examens suivants : Échographie de l’abdomen et du pelvis.</p>
   
   
  </div>

  
   <!-- preparation end-->
   <!-- Sédation -->
   <div class="Sédation"> 
     <h2 class="blueh2">Sédation</h2>
     <p>aucune.</p>
    </div>
    <!-- Sédation end-->
    <!-- Précaution -->
    <div class="Précaution"> 
     <h2 class="blueh2">Précaution</h2>
     <p>aucune.</p>
    </div>
      <!-- Précaution end-->
      <div class="Dérée-de-l'examen"> 
       <h2 class="blueh2">Dérée de l'examen</h2>
       <p>L’examen dure de 10 à 20 mn en fonction de sa complexité</p>
      </div>

      <!-- Déroulement de l'examen -->
      <div class="Déroulement-de-l'examen"> 
        <h2 class="blueh2">Déroulement de l'examen</h2>
        <p>Le patient est allongé sur une table d'examen, la zone à explorer étant dénudée, du gel y est étalé afin de faciliter le passage des ultra-sons (ce gel ne tache pas les vêtements, est inodore et s'enlève aisément à l’aide de papier).</p>
       </div>
     <!-- Déroulement de l'examen end-->
     
    
</div>


<!-- Echographie examen end -->


<!-- Echographie equipement -->
<div id="ContactHTML" style="display:none;">
 <div class="Nos-équipements">
   <h2 class="blueh2">Nos équipements</h2>
   <h4 class="titre"> <span>Type:</span>  Siemens healthineers </h4>

   <div class="row img">
     <div class="col-6 mt-4">
       <img src="img/IRM3T.jpg"  class="img-fluid" alt="">
     </div>
     <div class="col-6 mt-4">
       <img src="img/mri.jpg" class="img-fluid" alt="">
     </div>
   </div>


 </div>
 <!-- Echographie Technologie -->
  <div class="Technologie">
   <h2 class="blueh2"> Technologie</h2>
   
   
   <p>Le système ACUSON Juniper est un échographe compact ultraperformant dédié au diagnostic, qui intègre des technologies d'imagerie de pointe éprouvées sous un boîtier de conception à la fois élégante, simple et intuitive.  Doté d'un écran tactile capacitif et d'un panneau de commande classique, l'échographe ACUSON Juniper a été conçu pour évoluer et s'adapter aux besoins dynamiques des utilisateurs et aux attentes des services.
   </p>
   <p> La configuration Juniper BASE renfermera : <br>
    - Cinq ports de sonde</p> 
 </div>
</div>
<!-- Echographie equipement end -->
<table class="text-center" width="100%" border="0" cellspacing="0" cellpadding="0">
 <tr>
   <td onclick="document.getElementById('AboutOrContactDiv').innerHTML=document.getElementById('AboutMeHTML').innerHTML;"> <p class="hover-btn">examens</p></td>
   <td onclick="document.getElementById('AboutOrContactDiv').innerHTML=document.getElementById('ContactHTML').innerHTML;"> <p class="hover-btn">equipment</p></td>
 </tr>
</table>
<div id="AboutOrContactDiv"></div> 
</div>














<!-- Mammographie -->
<div  id="Mammographie" style="display:none;" class="information"> <div id="AboutMeHTML" style="display:none;">
  <h2 class="blueh2">Types d'examens</h2>

 <table class="table table-striped text-center">
   <thead>
     <tr class="table-color">
       <th scope="col" colspan="2">Type d'examen</th>
     </tr>
   </thead>
   <tbody>
     <tr>
       <td scope="row">Mammographie 1 Sein</td>
       <td>Mammographie 2 Seins</td>
       
       
     </tr>
     
   </tbody>
 </table>
 <!-- contre-indication -->
 <hr class="lign">
 <div class="contr-indication">
  <h2 class="blueh2">Contre indications</h2> 

  <p>aucune</p>
 
  </div>
   <!-- contre-indication  end-->

   <!-- preparation -->
  <div class="préparation">
   <h2 class="blueh2">Préparation</h2>
   <div class="row">
    <div class="col-md-6" id="dot-color"><ul><li>Eviter l'application de déodorants</li></ul></div>
   <div class="col-md-6" id="dot-color"><ul><li>Eviter l'application de pommades ou de poudre</li></ul></div>
   <div class="col-md-6" id="dot-color"><ul><li>Si possible réaliser l'examen en première partie du cycle menstruel.</li></ul></div>
   </div>
   
  
   <!-- <div class="caution"> <p> Les autres examens IRM ne nécessitent pas de préparation.</p></div> -->
   
  </div>

  
   <!-- preparation end-->
   <!-- Sédation -->
   <div class="Sédation"> 
     <h2 class="blueh2">Sédation</h2>
     <p>Aucune</p>
    </div>
    <!-- Sédation end-->
    <!-- Précaution -->
    <div class="Précaution"> 
     <h2 class="blueh2">Précaution</h2>
     <p>Aucune</p>
   </div>
      <!-- Précaution end-->

      <!-- Déroulement-de-l'examen -->
      <div class="Déroulement-de-l'examen"> 
       <h2 class="blueh2">Déroulement de l'examen</h2>
       <p>L'examen se déroule torse nu.</p>
       <p>Le sein est positionné sur la plaque de l'appareil et progressivement comprimé par une plaque afin de réduire son épaisseur et favoriser l'interprétation des images.</p>
       <p>02 vues orthogonales sont prises sur chaque sein pendant une apnée. Parfois, un troisième cliché est nécessaire.</p>
       <p>En fin d'examen, la patiente est invitée à patienter en cabine sans se rhabiller pendant que le médecin analyse ses radiographies.</p>
       <p>Chaque mammographie est complétée par une échographie mammaire, afin d’affiner le diagnostic.</p>

      </div>
</div>


<!-- Mammographie examen end -->


<!-- Mammographie equipement -->
<div id="ContactHTML" style="display:none;">
 <div class="Nos-équipements">
   <h2 class="blueh2">Nos équipements</h2>
   <h4 class="titre"> <span>Type:</span>Siemens healthineers</h4>
   
   
   <div class="row img">
     <div class="col-7 mt-4" id="img">
       <img src="img/Mammographie.jpeg" class="img-fluid"  alt="">
     </div>
    
   </div>


 </div>
 <!-- Mammographie Technologie -->
  <div class="Technologie">
   <h2 class="blueh2"> Technologie</h2>
   
   <p>Système de mammographie numérique universel, optimisé pour l'acquisition d'images dans les positions debout, assise ou allongée de la patiente.
    Le système est constitué d'un détecteur de 23 cm x 30 cm avec afficheur numérique, d'un statif de radiographie autoportant avec générateur haute fréquence intégré commandé par microprocesseur, tube radiogène à anode tournante tungstène, filtre en coin K rhodium et posemètre automatique AEC.</p>
   <p>Il peut être équipé d'un paravent de protection anti-X en option avec table opérateur réglable en hauteur offrant la possibilité d'intégrer la station d'acquisition (AWS).
    La station d'acquisition d'images FFDM basée sur le logiciel syngo permet la prévisualisation immédiate et un contrôle rapide de la qualité des images FFDM.</p> 
 </div>

 


</div>
<!-- Mammographie equipement end -->
<table class="text-center" width="100%" border="0" cellspacing="0" cellpadding="0">
 <tr>
   <td onclick="document.getElementById('AboutOrContactDiv').innerHTML=document.getElementById('AboutMeHTML').innerHTML;"><p class="hover-btn">examens</p> </td>
   <td onclick="document.getElementById('AboutOrContactDiv').innerHTML=document.getElementById('ContactHTML').innerHTML;"> <p class="hover-btn">equipment</p></td>
 </tr>
</table>
<div id="AboutOrContactDiv"></div> 
</div>
<!-- Mammographie END -->












<!-- Panoramique Dentaire -->
<div  id="Panoramique/Dentaire" style="display:none;" class="information"> 
  <div id="AboutMeHTML" style="display:none;">
  <h2 class="blueh2">Types d'examens</h2>

 <table class="table table-striped text-center">
   <thead>
     <tr class="table-color">
       <th scope="col" colspan="2">Types d'Examens</th>
     </tr>
   </thead>
   <tbody>
     <tr>
       <td scope="row">Panoramique Dentaire</td>       
     </tr>

     <tr>
      <td scope="row">Scanner Dentaire</td>       
    </tr>

    <tr>
      <td scope="row">Radiographie des Sinus</td>       
    </tr>

    <tr>
      <td scope="row">CONE BEAM</td>       
    </tr>
     
   </tbody>
 </table>
 <!-- contre-indication -->
 <hr class="lign">
 <div class="contr-indication">
  <h2 class="blueh2">Contre indications</h2> 

  <p>Aucune</p>
 
  </div>
   <!-- contre-indication  end-->

   <!-- preparation -->
  <div class="préparation">
   <h2 class="blueh2">Préparation</h2>
   <p>Aucune</p>
   
  
   <!-- <div class="caution"> <p> Les autres examens IRM ne nécessitent pas de préparation.</p></div> -->
   
  </div>

  
   <!-- preparation end-->
   <!-- Sédation -->
   <div class="Sédation"> 
     <h2 class="blueh2">Sédation</h2>
     <p>Aucune</p>
    </div>
    <!-- Sédation end-->
    <!-- Précaution -->
    <div class="Précaution"> 
     <h2 class="blueh2">Précaution</h2>
     <p>Aucune</p>
   </div>
      <!-- Précaution end-->

      <!-- Déroulement-de-l'examen -->
      <div class="Déroulement-de-l'examen"> 
       <h2 class="blueh2">Déroulement de l'examen</h2>
       <p>Le technicien positionne votre tête au niveau de l'appareil. Il vous est demandé de mordre un dispositif en plastique stérile et de rester immobile pendant que le tube à rayon X effectue une rotation autour de votre tête.
       </p>

      </div>
      <div class="Dérée-de-l'examen"> 
        <h2 class="blueh2">Dérée de l'examen</h2>
        <p>La durée de l'examen est de 3 minutes.</p>
 
       </div>
      </div>




<!-- Panoramique Dentaire examen end -->


<!-- Panoramique Dentaire equipement -->
<div id="ContactHTML" style="display:none;">
 <div class="Nos-équipements">
   <h2 class="blueh2">Nos équipements</h2>
   <h4 class="titre"> <span>Type:</span> système de radiographie panoramique</h4>
   <div class="row img">
    <div class="col-6 mt-4" id="img">
      <img src="img/panoramique dentaire.jpeg" class="img-fluid"  alt="">
    </div>
  
  </div>
  <h4 class="titre"><span >Technologie:</span> numérique</h4>
   <h4 class="titre"><span >FOV:</span> 10x10 cm, 16x10 cm</h4>
   <h4 class="titre"><span >Tension du tube:</span> 70 kV, 90 kV, 80 kV</h4>
  


 </div>
 <!-- Panoramique Dentaire Technologie -->
  <div class="Technologie">
   <h2 class="blueh2"> Technologie</h2>
    <p>Rayscan est notre gamme phare d'unités d'imagerie de classe mondiale. Combinaison idéale d’une qualité d’image supérieure et d’une convivialité haut de gamme, ces unités représentent une avancée impressionnante dans l’évolution de l’imagerie de la tête.</p>  
 </div>





</div>
<!-- Panoramique Dentaire equipement end -->
<table class="text-center" width="100%" border="0" cellspacing="0" cellpadding="0">
 <tr>
   <td onclick="document.getElementById('AboutOrContactDiv').innerHTML=document.getElementById('AboutMeHTML').innerHTML;"><p class="hover-btn">examens</p> </td>
   <td onclick="document.getElementById('AboutOrContactDiv').innerHTML=document.getElementById('ContactHTML').innerHTML;"> <p class="hover-btn">equipment</p></td>
 </tr>
</table>
<div id="AboutOrContactDiv"></div> 
</div>
<!-- Panoramique Dentaire END -->



 <!-- biopsie -->
<div  id="biopsie" style="display:none;" class="information"> 
  <div id="AboutMeHTML" style="display:none;">
  <h2 class="blueh2">Types d'examens</h2>

 <table class="table table-striped text-center">
   <thead>
     <tr class="table-color">
       <th scope="col" colspan="2">Types d'Examens</th>
     </tr>
   </thead>
   <tbody>
     <tr>
       <td scope="row">Microbiopsie mammaire</td>       
     </tr>
   </tbody>
 </table>
 <!-- contre-indication -->
 <hr class="lign">
 <div class="contr-indication">
  <h2 class="blueh2">Contre indications</h2> 

  <p>Aucune</p>
 
  </div>
   <!-- contre-indication  end-->

   <!-- preparation -->
  <div class="préparation">
   <h2 class="blueh2">Préparation</h2>
   <p>Aucune</p>
   
  
   <!-- <div class="caution"> <p> Les autres examens IRM ne nécessitent pas de préparation.</p></div> -->
   
  </div>

  
   <!-- preparation end-->
   <!-- Sédation -->
   <div class="Sédation"> 
     <h2 class="blueh2">Sédation</h2>
     <p>Aucune</p>
    </div>
    <!-- Sédation end-->
    <!-- Précaution -->
    <div class="Précaution"> 
     <h2 class="blueh2">Précaution</h2>
     <div class="caution"> <p>  Si vous prenez un traitement anticoagulant, merci de nous avertir lors de la prise de rendez-vous.</p></div>
   </div>
      <!-- Précaution end-->

      <!-- Déroulement-de-l'examen -->
      <div class="Déroulement-de-l'examen"> 
       <h2 class="blueh2">Déroulement de l'examen</h2>
       <p>-Après une anesthésie locale, une aiguille est positionnée au niveau de la lésion suspecte sous échographie.
       </p>

       <p>-Elle est alors connectée à un pistolet qui permet de réaliser un prélèvement.
      </p>

      </div>
      <div class="Dérée-de-l'examen"> 
        <h2 class="blueh2">Dérée de l'examen</h2>
        <p>Cet examen dure en moyenne 15 minutes</p>
 
       </div>
      </div>




<!-- biopsie examen end -->


<!-- biopsie equipement -->
<div id="ContactHTML" style="display:none;">
 <div class="Nos-équipements">
   <h2 class="blueh2">Nos équipements</h2>
   <h4 class="titre"> <span>Type:</span>  CIMA dispose de deux IRM: </h4>
   <h4 class="titre">1.5T 8CH HDXT / 1.5T SIGNA EXPLORER </h4>
   <h4 class="titre"><span >Fournisseur :</span>  General Electric Healthcare</h4>
   <div class="row img">
     <div class="col-7 mt-4" id="img">
       <img src="img/biopsie.jpeg" class="img-fluid"  alt="">
     </div>
   </div>


 </div>
 <!-- biopsie Technologie -->
  <div class="Technologie">
   <h2 class="blueh2"> Technologie</h2>
   <p>L’Imagerie par Résonance Magnétique (IRM) est une technologie d’imagerie en coupes utilisant un aimant circulaire très puissant dans lequel le patient est introduit. Une onde radio va être émise pour provoquer l’excitation et le déplacement des protons de l’eau contenue dans les structures et les organes de la zone explorée. Dès l’arrêt de cette émission, chaque proton revient à sa position initiale d’équilibre en émettant un signal électrique. Ce signal est capté par un dispositif dénommé antenne placée sur la zone d'intérêt ; il est transformé informatiquement en point d’une couleur allant du blanc au noir selon son intensité et dont la position est identifiée. L’association de tous les points va créer une image de la zone explorée.</p>
   <p>Contrairement aux autres techniques d’imagerie qui n’utilisent qu’un seul paramètre, l’IRM a l’avantage de pouvoir combiner de nombreux paramètres d’analyse (4 à 6) afin de définir au mieux la nature des anomalies rencontrées.</p>
   <p>Chaque image correspond à une coupe d’épaisseur définie de la région analysée.</p>
   <p>Toutes les images sont analysées individuellement ou en reconstitution 3D.</p> 
 </div>

 <h2 class="blueh2">Quel est l’apport de l’IRM ?</h2>
 <p>L’IRM est une technique non irradiante qui permet d’obtenir des coupes de la zone explorée dans tous les plans de l’espace.</p>
 <p>Contrairement aux autres techniques d’imagerie qui n’utilisent qu’un seul paramètre, l’IRM peut combiner jusqu’à 6 paramètres, ce qui-permet de visualiser et de différencier et d’analyser toutes les structures de la zone explorée.</p>
 <p>Elle est donc d'une très grande efficacité pour l'établissement du diagnostic.</p>



</div>
<!-- biopsie equipement end -->
<table class="text-center" width="100%" border="0" cellspacing="0" cellpadding="0">
 <tr>
   <td onclick="document.getElementById('AboutOrContactDiv').innerHTML=document.getElementById('AboutMeHTML').innerHTML;"><p class="hover-btn">examens</p> </td>
   <td onclick="document.getElementById('AboutOrContactDiv').innerHTML=document.getElementById('ContactHTML').innerHTML;"> <p class="hover-btn">equipment</p></td>
 </tr>
</table>
<div id="AboutOrContactDiv"></div> 
</div>
<!-- biopsie END --> 

  









<div  id="irm" style="display:none;" class="information"> <div id="AboutMeHTML" style="display:none;">
  <h2 class="blueh2">Types d'examens</h2>

  <table class="table table-striped text-center">
    <thead>
      <tr class="table-color">
      
        <th scope="col">Type Examens</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td scope="row">
          Radiologie osseuse et articulaire
         </td>      
      </tr>
      
      <tr>
        <td>
          Radiologie pulmonaire
        </td>
      </tr>
 
      <tr>
       <td>
        Radiographie de l’abdomen sans préparation
       </td>
     </tr>
 
     <tr>
       <td>
        Neuro radiologique, Rachis
       </td>
     </tr>
     
    </tbody>
  </table>
 <!-- contre-indication  irm -->
 <hr class="lign">
 <div class="contr-indication">
  <h2 class="blueh2">Contre indications</h2> 
  <p> grossesse inférieure à 4 mois</p>
  </div>
   <!-- contre-indication  end-->

   <!-- preparation  irm-->
  


  
   <!-- preparation  irm end-->
   <!-- Sédation  irm -->
   <div class="Sédation"> 
     <h2 class="blueh2">Sédation</h2>
     <p>aucune</p>
    </div>
    <!-- Sédation  irm end-->
    <!-- Précaution  irm -->
    <div class="Précaution"> 
     <h2 class="blueh2">Précaution</h2>
     <p>aucune</p>
    </div>
      <!-- Précaution  irm end-->

      <!-- Dérée-de-l'examen -->
      <div class="Dérée-de-l'examen"> 
       <h2 class="blueh2">Dérée de l'examen</h2>
       <p>L’examen dure entre 2 et 5 minutes</p>
      </div>
      <!-- Dérée-de-l'examen end-->
</div>


<!-- irm examen end -->





<!-- irm equipement -->
<div id="ContactHTML" style="display:none;">
 <div class="Nos-équipements">
   <h2 class="blueh2">Nos équipements</h2>
   <h4 class="titre"> <span>Type:</span> IRM Siemens 1,5T</h4>
   <div class="row img">
     <div class="col-7 mt-4" id="img">
       <img src="img/irm.jpeg" class="img-fluid" height="200vw" alt="">
     </div>
    
   </div>


 </div>
 <!-- irm Technologie -->
  <div class="Technologie">
   <h2 class="blueh2"> Technologie</h2>
<p>Système IRM 1,5T doté de la technologie BioMatrix, le MAGNETOM Sola s’adapte automatiquement aux caractéristiques anatomiques et physiologiques de chaque patient, éliminant ainsi les difficultés liées à la variabilité entre les patients. Le MAGNETOM Sola permet de mettre en place des plannings de rendez-vous fiables, des examens personnalisés de haute qualité et une productivité accrue.</p>
<p>Avec la technologie BioMatrix, le MAGNETOM Sola renforce la prise en charge de la nature humaine dans toute sa diversité et ouvre la voie à la médecine de précision. Une qualité constante au quotidien. <br>-Une cohérence sans pareil à 1.5T <br>-Une efficacité inégalée à 1.5T <br>-Des capacités cliniques sans précédent à 1.5T</p>
 </div>





</div>
<!-- irm equipement end -->
<table class="text-center" width="100%" border="0" cellspacing="0" cellpadding="0">
 <tr>
   <td onclick="document.getElementById('AboutOrContactDiv').innerHTML=document.getElementById('AboutMeHTML').innerHTML;">  <p class="hover-btn">examens</p> </td>
   <td onclick="document.getElementById('AboutOrContactDiv').innerHTML=document.getElementById('ContactHTML').innerHTML;"><p class="hover-btn"> equipment</p></td>
 </tr>
</table>
<div id="AboutOrContactDiv"></div> 
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












      
      
      
      
      
      
      
      
        

 
  <script src="di.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>