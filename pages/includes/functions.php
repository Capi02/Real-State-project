<?php 
   function authenticated() : bool {
    session_start();
    $auth = $_SESSION["login"];
    if(!$auth){
      return false;
    }
    return true;
   } 
?>

 <!-- $auth = authenticated();

if (!$auth) {
  header("location: index.php");
}

$query = "SELECT * FROM properties " --> 