<?php 
   /* if(!isset($_SESSION)){
    session_start();
   }
   $auth = $_SESSION["login"] ?? false; */
?>
<nav class="site-nav">
  <div class="container">
    <div class="menu-bg-wrap">
      <div class="site-navigation">
        <a href="../pages/index.php" class="logo m-0 float-start">Capi Real State.com</a>

        <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end">
          <li class="active"><a href="../pages/index.php">Home</a></li>
          <li class="has-children">
            <a href="../pages/properties.php">Properties</a>
            <ul class="dropdown">
              <li><a href="#">Buy Property</a></li>
              <li><a href="#">Sell Property</a></li>
              <li class="has-children">
                <a href="#">Dropdown</a>
                <ul class="dropdown">
                  <li><a href="#">Sub Menu One</a></li>
                  <li><a href="#">Sub Menu Two</a></li>
                  <li><a href="#">Sub Menu Three</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="../pages/services.php">Services</a></li>
          <li><a href="../pages/about.php">About</a></li>
          <li><a href="../pages/contact.php">Contact Us</a></li>
          <?php
          /* if($auth): ?>
                  <li><a href="../pages/signOut.php">Sign Out</a></li>
              <?php endif;  */?>
        </ul>

        <a href="#" class="burger light me-auto float-end mt-1 site-menu-toggle js-menu-toggle d-inline-block d-lg-none" data-toggle="collapse" data-target="#main-navbar">
          <span></span>
        </a>
      </div>
    </div>
  </div>
</nav>