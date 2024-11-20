<?php
include_once 'header.php';

?>

    <h1>hello<?php 
    
    
    if (isset($_SESSION["username"])){
        echo $_SESSION["username"] . '!';

    }else {
      
        echo 'user !';

    }
  ?></h1>
    <p>Welcome our page</p>


<?php
include_once 'footer.php';

?>