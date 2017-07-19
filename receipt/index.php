<?php

require_once("../included/config.php");

$pageTitle = "Thank you for your order!";
$section = "none";

include (ROOT_PATH . "included/header.php"); ?>

      <div class="section page">
         
            <div class="wrapper">
            
                <h1>Thank you!</h1>
                
                <p>You can verify your transaction</p>
                
                <p>Need another shirt already? Visit the <a href="<?php echo BASE_URL; ?>shirts.php">Shirts Listing</a></p>
            
            </div>
      
      </div>
      
<?php include(ROOT_PATH . "included/footer.php");  ?>      