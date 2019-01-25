
<link href="mystyle.css" rel="stylesheet">
  
  <div class="container">
  <form  action="" method="post" style="display:flex, justify-content:space-between;">

      <section >
    <label style="display:flex;" for="designation"><b>designation</b></label>
    <input type="text" placeholder="Enter designation" name="designation" required><br/>

    <label for="qt"><b>quantite</b></label>
    <input type="text" placeholder="Enter quantite" name="quantite" required><br/>

    <label for="pu"><b>Prix unitair</b></label>
    <input type="pu" placeholder="Enter Prix unitair" name="pu" required><br/>

    <button type="ok" name = "valider">ENREGISTRER </button>
    <button class="cancelbtn" type="reset" name = "reset">ANNULER </button>
</section>
</form>

<?php
  if(isset($_POST['valider'])){
    include 'config.php';
      $designation = addslashes($_POST ['designation']);
      $qt = addslashes($_POST ['quantite']);
      $pu = ($_POST ['pu']);
        $tot=$qt*$pu;
     
      mysqli_query($conn, "INSERT INTO gpproduits (designation,qt,pu,total) VALUES ('$designation','$qt','$pu','$tot')");
      echo "<font color = 'green'>";
      echo "DESIGNATION: ".$designation." QUANTITE: ".$qt." AU PRIX UNITAIRE DE: ".$pu." FCA, a bien ete enregistre";
      echo "</font>";
      echo "<br>";
    

      mysqli_close($conn);
      }
      else{
          echo"Aucun enregistrement";
          echo "<br><br><br>";

      } 
      include 'page.php';
  ?>

