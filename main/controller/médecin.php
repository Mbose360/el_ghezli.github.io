<?php

function medecin(){
    @include '../config.php';
   
    $sql = "SELECT * FROM medecin";
    $result = $conn->query($sql);
     $i= 1;
    if ($result->num_rows > 0) {
      $active = true; // To mark the first item as active
      while($row = $result->fetch_assoc()) {
        $imagePath = $row['img'];
        $convention_id = $row['id'];
        ?>

    
  
  <div class="col-md-4 col-10  ms-auto me-auto mb-4" >
   <img src="../images/<?php echo $imagePath ?>" id="convention-img" alt="">
  </div>

      <?php



}}}

?>