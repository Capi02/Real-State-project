<?php 
   try {
      $db = new PDO("mysql:dbname=realstatedb;host=localhost", "root", "", array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));?>  
    
      
<?php } 
   catch(PDOException $error) {
    echo $error->getMessage();
   }
    
  
    

