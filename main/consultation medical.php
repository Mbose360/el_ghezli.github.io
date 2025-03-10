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
              <li><a class="dropdown-item active" href="consultation medical.php">Consultation medical spécialisé</a></li>
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

  <!-- section -->
  <div class="photo"> <div> <h2>Consultation medical spécialisé</h2></div></div>
  <pcl>'rff</pcl>
<section class="equipement">

 <div class="container ms-md-3 p-3" id="equipement" >
 


  <div class="row " id="row" >
    <div class="col-md-8 shadow-config mb-3"> <div class="row">
      
      <div class="col-md-2 col-5"><p   class="hover-btn" id="SCANNER">Urologie</p></div> 
      <div class="col-md-3 col-5"><p  class="hover-btn" id="ECHOGRAPHIE">Endocrinologie</p> </div>  
      <div class="col-md-3 col-5"><p  class="hover-btn" id="Radiologie-numérique">Anesthésie et réanimation</p> </div> 
      <div class="col-md-3 col-6"><p  class="hover-btn" id="MAMMOGRAPHIE">Chirurgie générale</p></div>  
      <div class="col-md-3 col-5 mx-auto"><p  class="hover-btn" id="Panoramique-Dentaire">Orthopédie</p> </div>
      <div class="col-md-3 col-5 mx-auto"><p  class="hover-btn" id="BIOPSIE">Gastro-entérologies</p> </div> 

       </div>
    
    <hr class="lign">
      <div id="content" class=" p-3" >
     
      </div>
    </div>
    
    <!-- Urologie -->
    <div  id="scanner" style="display:none;" class="information"> <div id="AboutMeHTML" >
       <h2 class="blueh2">Qu’est-ce que l’urologie ?</h2>
     
      <p>Spécialité médico-chirurgicale, l’urologie prend en charge les affections de l’appareil urinaire de la femme et de l’homme (vessie, uretère, urètre). Elle couvre aussi l’appareil génital et reproducteur masculin (prostate, pénis, testicules).</p>
      <img src="img/urologie.jfif" class="img-fluid" alt="">
      
      <!--Que soigne un chirurgien urologue -->
      <hr class="lign">
      <div >
       <h2 class="blueh2">Que soigne un chirurgien urologue ?</h2> 
        <strong><p>L’urologue soigne de multiples affections en rapport avec l’appareil urinaire : </p></strong>
           <p>-rétention urinaire ou incontinence,</p> 
          <p> -infections,</p> 
           <p>-lésions,</p> 
           <p> -malformations</p>
           <p>-cancers de l’appareil urinaire
            etc..</p> 
           <p>Le médecin urologue traite aussi l’infertilité masculine
            , les troubles de l’érection et de l’éjaculation, les cancers 
            des testicules, de la prostate… S’il peut prendre en charge 
            des pathologies sans avoir recours à la chirurgie (colique 
            néphrétique entraînant des calculs rénaux notamment), de
             nombreuses maladies de cette spécialité sont traitées 
             par voie chirurgicale.</p> 
       
   
      
       </div>
        <!-- Que soigne un chirurgien urologue end-->

        <!--Comment se passent le diagnostic et les chirurgies en urologie ?-->
       <div >
        <h2 class="blueh2">Comment se passent le diagnostic et les chirurgies en urologie ?</h2>
        <p>
            Pour émettre un diagnostic, l’urologue interroge son patient sur ses symptômes et ses antécédents médicaux et familiaux avant de procéder à un examen clinique et, en fonction des troubles, à un examen du périnée et/ou à un toucher rectal. Il peut aussi prescrire des examens complémentaires : 
            ECBU (examen cytobactériologique des urines), 
            échographie, endoscopie, radiographie, 
            bilan urodynamique, cystoscopie, etc.</p>
       </div>

       
        <!--Comment se passent le diagnostic et les chirurgies en urologie ?end-->
        <!-- Les domaines d'expertise -->
        <div > 
          <h2 class="blueh2">Les domaines d'expertise</h2>
          <p><strong>Les domaines d'expertise de l'urologie comprennent les maladies et les affections suivantes :</strong>
        </p>
          <p>-Les infections urinaires.</p>
          <p>-Les calculs rénaux et les calculs vésicaux (calculs dans les reins ou la vessie).</p>
          <p>-Les troubles de la prostate, tels que l'hypertrophie bénigne de la prostate (HBP) ou le cancer de la prostate.</p>
          <p>-Les troubles de la vessie, tels que l'incontinence urinaire ou la cystite interstitielle.</p>
          <p>-Les troubles des organes reproducteurs masculins, comme l'impuissance (dysfonction érectile) ou l'infertilité masculine.
            Les troubles des organes reproducteurs féminins liés à l'urologie, tels que les fistules vésico-vaginales.</p>

         </div>
         <!-- Les domaines d'expertise end-->
         
    </div>

    
   


   
    
  </div>
  <!--urologue END -->
  

  <!-- anesthésie et réanimation -->
  <div  id="Radiologie/numérique" style="display:none;" class="information"> <div id="AboutMeHTML" >
    <h2 class="blueh2">Qu’est-ce que l’anesthésie et réanimation ?</h2>
    <p>L'anesthésie-réanimation est une spécialité médicale qui se concentre sur la gestion de la douleur, le maintien de la fonction vitale et la surveillance des patients avant, pendant et après une intervention chirurgicale ou un acte médical invasif.</p>
    <p>L'anesthésie consiste à induire une perte temporaire de sensation ou de conscience afin de permettre des procédures médicales ou chirurgicales sans douleur. L'anesthésiologiste évalue le patient, discute des options d'anesthésie et choisit la technique la plus appropriée en fonction de divers facteurs, tels que le type d'intervention, l'état de santé du patient, les antécédents médicaux, les médicaments pris, etc.</p>   
    <img src="img/anestesie.jpg" class="img-fluid" alt="">
    <hr class="lign">
    <div >
     <h2 class="blueh2">Les principales formes d'anesthésie</h2> 
      <p><strong>1-Anesthésie générale :</strong> Elle provoque une perte de conscience contrôlée, permettant au patient d'être complètement endormi pendant l'intervention chirurgicale.
    </p>
         <p> <strong>2-Anesthésie régionale :</strong> Elle engourdit une région spécifique du corps, comme la moelle épinière (anesthésie rachidienne ou péridurale) ou un membre (anesthésie locorégionale).</p> 
        <p> <strong>3-Anesthésie locale :</strong>  Elle implique l'injection d'un anesthésique directement dans la zone à traiter pour engourdir la zone spécifique.</p> 
         <p>Une fois l'intervention terminée notre l'anesthésiologiste surveille étroitement le patient pendant la phase de réveil, veillant à ce que les fonctions vitales (respiration, fréquence cardiaque, pression artérielle, etc.) se rétablissent normalement. Dans les cas où des complications surviennent après la chirurgie.</p> 
     </div>
     
      
 </div>
 <!-- anesthésie et réanimation end -->

 
</div>

<!-- Endocrinologie -->
<div  id="Echographie" style="display:none;" class="information"> <div id="AboutMeHTML" >
    <h2 class="blueh2">Qu’est-ce que l’endocrinologie ?</h2>
    
    <p>L’endocrinologie est la spécialité médicale s’intéressant aux hormones, à leurs effets sur le fonctionnement du corps – le métabolisme - et aux maladies qui y sont liées. Les hormones sont sécrétées par différentes glandes : hypophyse, thyroïde, glandes surrénales...</p>
    <img src="img/endocrinologie.jpg" class="img-fluid" alt="">
    <hr class="lign">
    <div >
     <h2 class="blueh2">Quand allez voir un endocrinologue ?</h2> 
      <p>De nombreuses maladies sont dues à des dérèglements hormonaux : diabète de type 1, diabète de type 2, troubles de la croissance, hypothyroïdie, hyperthyroïdie, troubles du poids…</p>
         
     
 
    
     </div>
      

      
     <div >
      <h2 class="blueh2">Que fait, soigne, un endocrinologue lors d’une consultation ?</h2>
       <p>
        Lors d’une première visite, l’endocrinologue interroge le patient sur ses symptômes : </p>
       <p> perte ou prise de poids inexpliquée, fatigue, douleurs, troubles de l’humeur...</p>
       <p>Il est recommandé de se munir des résultats d’examens (analyses
            de sang, examens radiologiques...) et comptes-rendus médicaux dont on dispose pour éviter  
            la répétition d’examens inutiles et faciliter l’établissement du diagnostic.</p>  
            
       <p>Le cas échéant, l’endocrinologue peut demander des examens complémentaires : analyses de sang particulières, imagerie, ponctions, etc.</p>  
    
     </div>

    
      <div > 
        <h2 class="blueh2">Comment se passent les traitements en endocrinologie ?</h2>
        <p>Les traitements en endocrinologie dépendent du type de dérèglement hormonal.
             A titre d’exemple, un déficit hormonal, comme dans le cas d’une hypothyroïdie (pathologies de la thyroïde), 
             peut se traiter par un apport quotidien en hormones thyroïdiennes de substitution. L’hyperthyroïdie peut, quant à elle, 
            se traiter à l’aide de médicaments ou nécessiter une intervention chirurgicale.</p>
       </div>

       <div > 
        <h2 class="blueh2">Comment traiter les différents types de diabète ?</h2>
        <p>Il existe trois types principaux de diabète :
      </p>
        <p>le diabète de type 1, apparaissant dès l’enfance ;</p>
        <p>le diabète gestationnel, apparaissant lors d’une grossesse et disparaissant souvent après l’accouchement ;</p>
        <p>le diabète de type 2, le plus courant, apparaissant après 40 ans.
          Le diabète est lié à un défaut d’effet d’une hormone appelée insuline. La prise en charge impose une adaptation de l’alimentation. Si elle ne suffit pas à normaliser le taux de sucre dans le sang – la glycémie – des médicaments ou l’injection régulière d’insuline peuvent être nécessaires.</p>
        <p>Elsan prend en charge ces pathologies, en utilisant les nouvelles technologies de mesure du glucose en continu : holter glycémique, pompe sous-cutanée à insuline...</p>
       </div>

       <div >
        <h2 class="blueh2">Quels sont les examens en endocrinologie ?</h2>
         <p>
          Un médecin endocrinologue commencera par examiner son ou sa patiente, en auscultant notamment son cœur ou en palpant sa thyroïde (pour détecter une éventuelle pathologie de la thyroïde)... Il peut aussi prescrire des tests sanguins et urinaires complémentaires. </p>
       </div>
</div>
<!--  Endocrinologie end -->


</div>


<!--   Chirurgie générale-->
<div  id="Mammographie" style="display:none;" class="information"> <div id="AboutMeHTML" >
  <h2 class="blueh2">Qu’est-ce que la Chirurgie générale ?</h2>
     
      <p>La chirurgie générale et digestive est une spécialité médicale qui 
        englobe à la fois la chirurgie générale et la chirurgie digestive. 
        Elle se concentre sur le diagnostic, le traitement chirurgical et la 
        prise en charge des affections liées au système digestif,
         ainsi que sur d'autres interventions chirurgicales non spécialisées.</p>
         <img src="img/churgie.jpg" class="img-fluid" alt="">
      <hr class="lign">
      <div >
       <h2 class="blueh2">Les domaines d'expertise</h2> 
       <p>La chirurgie générale comprend un large éventail d'interventions chirurgicales qui ne sont pas limitées à un système ou à un organe spécifique. </p>
      <strong><p> Les chirurgiens généraux peuvent être impliqués dans :</p></strong>    <p>-la chirurgie abdominale</p> 
          <p>-la chirurgie mammaire</p> 
          <p>-la chirurgie de la paroi abdominale</p> 
          <p>-la chirurgie endocrinienne</p> 
          <p>-la chirurgie de la peau et des tissus mous</p> 
          <p>-la chirurgie de l'obésité, la chirurgie vasculaire</p> 
          <p>-la chirurgie de transplantation d'organes</p> 
          <p>-et bien d'autres.</p> 
          <p></p>
          <strong><p>La chirurgie digestive se concentre spécifiquement sur les affections du système digestif, qui comprend :</p> </strong>
          <p>-l'oesophage </p>
            <p>-l'estomac</p>
            <p>-l'intestin grêle</p> 
            <p>-le côlon</p>
            <p>-le rectum</p> 
            <p>-le foie</p> 
            <p>-les voies biliaires</p>
            <p>-le pancréas</p> 
            <p>-la rate et d'autres organes associés.</p>  
            <p></p>
            <p><strong>Les chirurgiens spécialisés en chirurgie digestive traitent des conditions telles que :</strong> </p> 
              <p>les tumeurs digestives (cancers)</p> 
              <p>les hernies hiatales, les ulcères gastriques</p> 
              <p>les diverticulites</p>
              <p>les maladies inflammatoires de l'intestin</p> 
              <p>les calculs biliaires, </p>  
              <p>les affections de la vésicule biliaire, </p>
              <p>les maladies du pancréas, etc.</p>  
               <br>
              <p>Les chirurgiens spécialisés en chirurgie générale et digestive utilisent différentes techniques chirurgicales en fonction de la nature et de la gravité de l'affection, ainsi que des caractéristiques individuelles du patient. Cela peut inclure des interventions ouvertes traditionnelles, des interventions laparoscopiques/minimalement invasives</p>
       </div>
       

       
       <div >
        <h2 class="blueh2">le role de la  La chirurgie générale</h2>
        <p>La chirurgie générale et digestive joue un rôle essentiel dans le diagnostic, le traitement et la prise en charge des affections du système digestif, ainsi que dans d'autres conditions nécessitant une intervention chirurgicale non spécialisée. Les chirurgiens travaillent en étroite collaboration avec d'autres professionnels de la santé, tels que les gastro-entérologues, les oncologues, les radiologues et les anesthésiologistes, pour assurer des soins complets et une approche multidisciplinaire dans le traitement des patients.</p>
       </div>
</div>


</div>
<!--  Chirurgie générale END -->

<!-- L’ORTHOPÉDIE -->
<div  id="Panoramique/Dentaire" style="display:none;" class="information"> 
  <div id="AboutMeHTML" >
    <h2 class="blueh2">Qu’est-ce que l’orthopédie ?</h2>
       
        <p>L’orthopédie est la discipline chirurgicale qui étudie les affections,
           les traumatismes ainsi que les déformations de l’appareil locomoteur,
            c’est-à-dire les membres supérieurs, les membres inférieurs ainsi que la colonne vertébrale.
             Elle prend en charge les pathologies de l’os, particulièrement les fractures,
              mais également celles affectant les ligaments,
           les muscles, les tendons et les articulations.</p>
           <img src="img/orthopedie.jpg" class="img-fluid" alt="">
           <img src="img/orthopedie (2).jpg" class="img-fluid" alt="">
        <hr class="lign">
        <div >
         <h2 class="blueh2">Traumatologie</h2> 
         <p>La traumatologie, bien qu’intimement liée à l’orthopédie, est une discipline bien distincte de cette dernière. L’orthopédie traite des pathologies de l’organe de locomotion qu’elles soient congénitales ou acquises, tandis que la traumatologie traite les lésions subies par le corps suite à un traumatisme (fracture, brûlure…). Une prise en charge en traumatologie nécessite parfois un traitement orthopédique, tout comme l’inverse est possible. Dans les cas des polytraumatisés, une prise en charge multidisciplinaire est souvent indispensable, faisant intervenir plusieurs branches de la médecine comme la neurochirurgie, la cardiologie…</p>
         </div>
         
  
         
         
  </div>

</div>
<!-- Panoramique Dentaire END -->



 <!-- l’endocrinologie -->
<div  id="biopsie" style="display:none;" class="information"> 
  <div id="AboutMeHTML" >
    <h2 class="blueh2">Qu’est-ce que la gastro-entérologie ?</h2>
     
    <p>L’hépato-gastro-entérologie est la spécialité médicale qui s’intéresse aux organes de la digestion, leurs fonctionnements, leurs maladies et les moyens de les soigner. Les organes constituant le système digestif sont :</p>
      <p>-le tube digestif (œsophage, estomac, intestins, le colon et le rectum)</p>
      <p>-le foie</p>
      <p>-le pancréas</p>
      <img src="img/gastro.jpg" class="img-fluid" alt="">
    <hr class="lign">
    <div >
     <h2 class="blueh2">Que fait le gastro-entérologue ? </h2> 
      <p>Il dépiste, diagnostique et traite des maladies du système digestif aussi variées que :</p>
      <p>-les maladies inflammatoires de l’intestin (rectocolite hémorragie, Maladie de Crohn…)</p>
      <p>-les maladies du foie et des voies biliaires (calculs, tumeurs…)</p>
      <p>-les hépatites </p>
      <p>-les hémorragies digestives</p>
      <p>-les maladies du pancréas</p>
      <p>-les cancers digestifs</p>
     </div>
     <h2 class="blueh2">la coloscopie </h2> 

     <p>La coloscopie est un examen médical qui permet de visualiser l'intérieur du côlon (gros intestin) et du rectum à l'aide d'un instrument appelé coloscope. Cet instrument est un tube flexible équipé d'une caméra et de sources lumineuses, ce qui permet au médecin de voir les parois internes du côlon en temps réel sur un écran.</p>
     
     <h2 class="blueh2">l'objectif de la coloscopie </h2> 
     <p>L'objectif principal de la coloscopie est de détecter d'éventuelles anomalies, telles que des polypes, des tumeurs, des inflammations ou des saignements dans le côlon. Ces anomalies peuvent être à l'origine de symptômes tels que des douleurs abdominales, des changements dans les habitudes intestinales, ou des saignements rectaux. La coloscopie est également un moyen efficace de dépister le cancer du côlon.</p>
     
     <h2 class="blueh2"> Comment se préparer à une coloscopie ?</h2> 
     <p>Tout d’abord, le patient est informé par le médecin qui pratiquera la coloscopie des enjeux de l’examen : bénéfices, traitements, diagnostic, dépistage du cancer colorectal, mais aussi risques.</p>
     <p> Ensuite, si une coloscopie avec anesthésie générale est programmée, une consultation avec un médecin anesthésiste sera également organisée (Si le patient se sent anxieux à l’approche de l’examen, le médecin pourra prescrire un léger anxiolytique).</p>
     <p> La veille de la coloscopie, le patient devra ingérer une solution permettant le lavage et l’irrigation du côlon afin que celui-ci soit parfaitement propre pour l’examen. Trois jours avant la coloscopie, un régime sans résidus sera également prescrit.</p>
     
     <h2 class="blueh2"> La fibroscopie</h2>
     <P>La fibroscopie oeso-gastro-duodénale (FOGD), également appelée endoscopie oeso-gastro-duodénale (EOGD) ou gastroscopie, est un examen qui permet d'explorer les voies digestives hautes comprenant l'œsophage, l'estomac et le duodénum.</P> 
     <P>orsque cet examen est indiqué pour une évaluation diagnostique simple, il peut être réalisé sans ou avec anesthésie générale. En effet, sous anesthésie locale, cet examen est désagréable mais n’est pas douloureux et ne dure que quelques minutes.</P>
    
     <h2 class="blueh2">la coloscopie </h2> 
      <p>L'anesthésie pour une endoscopie ambulatoire est une anesthésie générale (perte de conscience, on ne se rend compte de rien) légère (on se réveille très vite). Un seul produit d'anesthésie est utilisé par voie intraveineuse. Cette molécule est un hypnotique et sa seule action est de faire dormir.
      </p>
      <p>L'anesthésie et l'examen se réalisent couché sur le coté gauche avec un masque à oxygène. Pendant tout le temps de l'anesthésie, votre pression artérielle, votre rythme cardiaque et votre oxygénation sont surveillés en continu par l'anesthésiste</p>
      <p>Une fois l'examen terminé, vous retournerez dans votre chambre ou la même surveillance sera effectuée .</p>
      <p>Il n'y a pas de nausées au réveil ni de douleurs.
        Après votre collation et dès que vous serez en possession de votre compte rendu d'examen, vous pourrez quitter le centre en compagnie de votre accompagnant.</p>
    </div>

</div>
<!-- l’endocrinologie END --> 

  
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