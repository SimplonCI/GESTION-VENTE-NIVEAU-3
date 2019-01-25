<?php
 include 'config.php';
 $sql= mysqli_query($conn,"SELECT* FROM gpproduits");
 $rows = mysqli_num_rows($sql);
 $mtn=0;
 $vente=0;

 echo'<p> </p>';
 echo'<table border="1">';
 echo'<tr><td><B>DESIGNATION</B></td><td><B>QUANTITE</B></td><td><B>TOTAL</B></td></tr>';
 

 while($dbchallenge = mysqli_fetch_assoc($sql)) {
 
    $designation = $dbchallenge['designation'];
    $qt = $dbchallenge['qt'];
    $pu = $dbchallenge['pu'];
    $tot =$dbchallenge['total'];
    
   $mtn=$mtn+$tot;
   $vente=$vente+$qt; 

   echo'<tr><td>' .$designation. '</td><td>' .$qt. '</td><td>' .$tot.'</td></tr>';

  //  echo "-".$designation."- ".$qt."-".$pu."-".$tot."<Br>"; 
  }
  echo"VENTE: ".$vente." ARTICLES <Br><Br>";
  echo"TOTAL: ".$mtn." FCFA <Br>";

  echo'<Br>';
 
  mysqli_close($conn);
  ?>
  