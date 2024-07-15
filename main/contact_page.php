<?php
require('controller/contact.php');
@include '../config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Contacter nous| Centre El Ghazali</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script
	type="text/javascript"
	src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
	
    
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;900&display=swap"
    rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<link rel="stylesheet" href="style-conta.css">

  <script type="text/javascript">
	(function () {
	  emailjs.init("DQvAiB2rZneLH8Iwk");
	})();
  </script>
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
				<a class="nav-link mx-2 " href="center.php">Le centre</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link mx-2 active" aria-current="page" href="contact_page.php">Contact</a>
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
	  <section class="contact">
		<div class="reveal">

		
	<div class="container pt-5">
		<div class="row">
			<div class="col-md-6 ">
				<h1>Contactez-nous</h1>
				
					<div class="form-group">
						<label for="name">Nom:</label>
						<input type="text" class="form-control" id="name" name="name">
						<small id="nameError" class="text-danger d-none">Veuillez entrer votre nom.</small>
					</div>
					<div class="form-group">
						<label for="email">Email:</label>
						<input type="email" class="form-control" id="email" name="email">
						<small id="emailError" class="text-danger d-none">Veuillez saisir une adresse e-mail valide.</small>
					</div>
					<div class="form-group">
						<label for="message">Message:</label>
						<textarea class="form-control" id="message" name="message" rows="5"></textarea>
						<small id="messageError" class="text-danger d-none">Veuillez saisir un message.</small>
					</div>
					<button  type="submit" class="btn btn-primary mt-3" onclick="sendMail()" >Envoyer</button>
				
			</div>
             <div class="col-md-6">
                <h2 id="h2">Notre adress :</h2>
				<p>Complexe médical bd Houari boumediene Tébéssa</p>
				<?php
                    contactus();?> 
				</div>





		</div>
		<div class="row">
			<h2 class="mt-4 mb-3" id="h2">Notre emplacement</h2>
			<iframe class="mb-3"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1028.5009341971331!2d8.10735585687548!3d35.396734316838!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f9ed3ebba5f64d%3A0xbce0983ae2ed6c00!2sCentre%20Hospitalier%20T%C3%A9bessa!5e1!3m2!1sfr!2sdz!4v1679241856927!5m2!1sfr!2sdz"
            width="250" height="250" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>
	</div>
</div>
</section>
<?php
require 'controller/footer.php';

?>


    
	<script>
		// function validateForm() {
		// 	var nameInput = document.getElementById("name");
		// 	var emailInput = document.getElementById("email");
		// 	var messageInput = document.getElementById("message");
		// 	var nameError = document.getElementById("nameError");
		// 	var emailError = document.getElementById("emailError");
		// 	var messageError = document.getElementById("messageError");
		// 	var isValid = true;
		  
		// 	if (nameInput.value.trim() == "") {
		// 		nameError.classList.remove("d-none");
		// 		isValid = false;
		// 	} else {
		// 		nameError.classList.add("d-none");
		// 	}
		  
		// 	if (emailInput.value.trim() == "" || !emailInput.checkValidity()) {
		// 		emailError.classList.remove("d-none");
		// 		isValid = false;
		// 	} else {
		// 		emailError.classList.add("d-none");
		// 	}

		// 	if (messageInput.value.trim() == "") {
		// 		messageError.classList.remove("d-none");
		// 		isValid = false;
		// 	} else {
		// 		messageError.classList.add("d-none");
		// 	}
		  
		// 	return isValid;
		// }

		function sendMail() {
  var params = {
    name: document.getElementById("name").value,
    email: document.getElementById("email").value,
    message: document.getElementById("message").value,
  };

  const serviceID = "service_57fbfxl";
  const templateID = "template_wvu7z1s";

    emailjs.send(serviceID, templateID, params)
    .then(res=>{
        document.getElementById("name").value = "";
        document.getElementById("email").value = "";
        document.getElementById("message").value = "";
        console.log(res);
        alert("Your message sent successfully!!")

    })
    .catch(err=>console.log(err));

}
	</script>
	<script src="effect.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
