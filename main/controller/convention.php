<?php

function convention(){
    @include '../config.php';
   
    $sql = "SELECT * FROM convention";
    $result = $conn->query($sql);
     $i= 1;
    if ($result->num_rows > 0) {
      $active = true; // To mark the first item as active
      while($row = $result->fetch_assoc()) {
        $imagePath = $row['img'];
        $convention_name = $row['name']; 
        $convention_id = $row['id'];
        ?>
        <div class="col-md-4 col-10 border-0 mt-3 ms-auto me-auto">
        <img  class="img-fluid" src="../images/<?php echo $imagePath ?>" onclick="openOverlay('img/convention1.jpeg')" id="convention-img" alt="">
      </div>
      <?php



}}}

?>
