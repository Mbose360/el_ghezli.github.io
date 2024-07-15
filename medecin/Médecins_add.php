<?php
session_start();
@include '../config.php';
if(!isset($_SESSION['valid'])){
  header("Location: login/login.php");
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="log.css">
    <title>Médecin</title>
</head>
<body>
<div id="login-form-wrap">
  <h2>Add médecin</h2>
  <form action="" method="post" enctype="multipart/form-data" id="login-form">

    
    <input type="file" name="image_name" >
      
    <p>
      <input type="submit" name="submit" value="add médecin" class="form-btn">
    </p>
    <p class="a-style"><a href="médecins_index">return</a></p>
    <br>
  </form>

    
</div>  
<?php
if(isset($_FILES['image_name'])&&isset($_POST['submit'])) {
// getting the information about the médecin
$convo_name=$_POST['full_name'];    
$img_name=$_FILES['image_name']['name'];
$tmp_name=$_FILES['image_name']['tmp_name'];
$error=$_FILES['image_name']['error'];

if($error== 0) {
 // geting image extention and allowed extentions
$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
$img_ex_lc = strtolower($img_ex);
$allowed_exs= array("jpg","jpeg","png");

// check if the extension is permisible
  if(in_array($img_ex_lc,$allowed_exs)){
//setting the image name and extention
      $new_img_name=uniqid("img-", true).".".$img_ex_lc;
//setting the image upload path
      $img_upload_path ='../images/'.$new_img_name;
// downloading image to the selected path      
      move_uploaded_file($tmp_name,$img_upload_path);
// uploading the convetion to the data base      
       $sql = "INSERT INTO `medecin`(img) VALUES('$new_img_name')" or die('query failed');
      $res = mysqli_query($conn,$sql);
//message about the state of the médecin       
     $_SESSION['error_msg'] ="the médecin has been successfully added.";
 //heading to the médecin index
  header("location: Médecins_index.php?message=Record added successfully");
 
}
//if there is a problem
}else{
    $_SESSION['error_msg']="unkown error occurred";
    header("location: Médecins_index.php");
}


echo $_SESSION['error_msg'] ;
}
?>


</body>
</html>

