<?php

function contact(){
    @include 'config.php';
    $sql = "SELECT * FROM `contact`";
    $result = $conn->query($sql);
    ?> <h4>TEL :  </h4><?php
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $information = $row["information"];
            $type = $row["type"];
            if($type =='phone'){
              ?> <a href="<?php echo $information ?>"><span id="contact-footer"> <?php echo $information ?></span> </a> <br> 
              <?php
            }
}}
?>EMAIL : <?php
         $result1 = $conn->query($sql);
           if ($result1->num_rows > 0) {
             while($row1 = $result1->fetch_assoc()) {
                 $information = $row1["information"];
                 $type = $row1["type"];
                   if($type =='email'){
                    ?> <h4> <a class="email-link" href="mailto:centreelghazali@gmail.com" id="contact-footer"><p><?php echo $information ?></p></a></h4> 
                    <?php
        }

}}}


function contactus(){
  @include 'config.php';
  $sql = "SELECT * FROM `contact`";
  $result = $conn->query($sql);
  ?> <h2 id="h2">Applez-nous :</h2><?php
  if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
          $information = $row["information"];
          $type = $row["type"];
          if($type =='phone'){
            ?> 
               <a class="contact-tel" href="tel:<?php echo $information ?>"><p><?php echo $information ?></p></a> 
            <?php
          }
}}
?>EMAIL : <?php
       $result1 = $conn->query($sql);
         if ($result1->num_rows > 0) {
           while($row1 = $result1->fetch_assoc()) {
               $information = $row1["information"];
               $type = $row1["type"];
                 if($type =='email'){
                  ?> <a class="email-link" href="mailto:<?php echo $information ?>"><p><?php echo $information ?></a></h4> 
                  <?php
      }

}}}

?>
