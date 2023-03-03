<?php include "../pages/includes/head.php" ?>
<?php include "../pages/includes/mobileNavBar.php" ?>
 <?php include "../pages/includes/navBar.php" ?> 
<?php include "../pages/includes/config/database.php" ?> <!-- db connection -->

<?php 
   if($_SERVER["REQUEST_METHOD"] === "POST"){
    $username =  $_POST["name"];
    $name =  $_POST["lastname"];
    $lastname =  $_POST["username"];
    $email =  $_POST["email"];
    $password =  $_POST["password"];
    $password_hash = password_hash($password, PASSWORD_BCRYPT);

    $query = "INSERT INTO users (name, lastname, username, email, password, user_type) VALUES ('$name}', '{$lastname}','{$username}','{$email}', '{$password_hash}', 2)";
    $st = $db->prepare($query);
    $st->execute();
   }   
?>

<div class="container">
  <div class="row justify-content-center align-items-center">
    <div class="col-lg-9 text-center mt-5">
      <h1 class="heading" data-aos="fade-up"> Sign Up</h1>

      <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
        <ol class="breadcrumb text-center justify-content-center">
          <li class="breadcrumb-item"><a href="../pages/index.php" style="color: #000;">Home</a></li>
          <li class="breadcrumb-item active text-black-50" aria-current="page">
            Sign Up

          </li>
        </ol>
      </nav>

    </div>
  </div>
</div>
<!-- </div> -->

<div class="section">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 " data-aos="fade-up" data-aos-delay="200" style="margin: 0 auto;">
        <form action="#" method="POST">
          <div class="row" style="display:flex; justify-content:center;">

            <!-- <?php
            foreach ($errors as $error) { ?>
              <div class="alert alert-danger col-7 text-center">
                <p><?php echo $error ?></p>
              </div>
            <?php } ?> -->

            <div class="col-7 mb-3">
              <input type="text" class="form-control" placeholder="Your Name" name="name" />
            </div>
            <div class="col-7 mb-3">
              <input type="text" class="form-control" placeholder="Your Lastname" name="lastname" />
            </div>
            <div class="col-7 mb-3">
              <input type="text" class="form-control" placeholder="Your Username" name="username" />
            </div>
            <div class="col-7 mb-3">
              <input type="email" class="form-control" placeholder="Your Email" name="email" />
            </div>
            <div class="col-7 mb-3">
              <input type="password" class="form-control" placeholder="Password" name="password" />
            </div>
           <!--  <div class="col-7 mb-3">
              <input type="password" class="form-control" placeholder="Confirm Password" name="confirm_password" />
            </div> -->
            <div class="col-7">
              <input style=" width:100%; " type="submit" value="Sign Up" class="btn btn-primary" />
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- /.untree_co-section -->

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
</body>

</html>