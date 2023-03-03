 <?php include "../pages/includes/head.php" ?> <!-- Head -->
 <?php include "../pages/includes/mobileNavBar.php" ?> <!-- MobileNavBar -->
 <?php include "../pages/includes/navBar.php" ?> <!-- MobileNavBar -->
 <?php include "../pages/includes/config/database.php" ?> <!-- db connection -->

 <div class="hero page-inner overlay" style="background-image: url('../images/hero_bg_1.jpg')">
   <div class="container">
     <div class="row justify-content-center align-items-center">
       <div class="col-lg-9 text-center mt-5">
         <h1 class="heading" data-aos="fade-up">Properties</h1>

         <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
           <ol class="breadcrumb text-center justify-content-center">
             <li class="breadcrumb-item"><a href="index.php">Home</a></li>
             <li class="breadcrumb-item active text-white-50" aria-current="page">
               Properties
             </li>
           </ol>
         </nav>
       </div>
     </div>
   </div>
 </div>



 <div class="section section-properties">

   <div class="container">
     <div class="row" id="properties_container">

     </div>
   </div>


   <div class="row align-items-center py-5">
     <div class="col-lg-3">Pagination (1 of 10)</div>
     <div class="col-lg-6 text-center">
       <div class="custom-pagination" id="pagination">

       </div>
     </div>
   </div>
 </div>
 </div>

 <?php include "../pages/includes/footer.php" ?>

 <!-- Preloader -->
 <div id="overlayer"></div>
 <div class="loader">
   <div class="spinner-border" role="status">
     <span class="visually-hidden">Loading...</span>
   </div>
 </div>

 <script src="../js/bootstrap.bundle.min.js"></script>
 <script src="../js/tiny-slider.js"></script>
 <script src="../js/aos.js"></script>
 <script src="../js/navbar.js"></script>
 <script src="../js/counter.js"></script>
 <script src="../js/custom.js"></script>
 <script src="../js/fetchApi-properties.js"></script>
 </body>

 </html>