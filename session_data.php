
<?php
      // Check if the session is set then only it will display the name in the browser 
      if(isset($_SESSION['name'])){
        echo "<div class='session'>";  
        echo "<h2> Hi your Session Username is : ".$_SESSION['name']."</h2>";
        echo "<br><h2><a href='destroy.php'>Forget Me</a></h2>";
        echo "</div>";
    }
?>
