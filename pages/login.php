<?php include "../pages/includes/head.php" ?>
<?php include "../pages/includes/mobileNavBar.php" ?>
<?php include "../pages/includes/navBar.php" ?>
<?php include "../pages/includes/config/database.php" ?> <!-- db connection -->

<?php
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);

$errors = [];

if ($_SERVER["REQUEST_METHOD"] === "POST") {

  $username = $_POST["username"];
  $email = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);
  $password = $_POST["password"];
 /*  $confirm_pasword = $_POST["confirm_password"]); */

  if (!$email) {
    $errors[] = "The email is required, or it is not valid.";
  }
  if (!$password) {
    $errors[] = "The password is required";
  }

  if(empty($errors)){

    $query = "SELECT * FROM users WHERE email = '$email' "; //creamos el query
    $st = $db->prepare($query); // lo preparamos
    $st->execute();  // lo ejecutamos
    $rs = $st->fetch(PDO::FETCH_ASSOC); // obtenemos los resultados

    echo '<pre>';
    var_dump($rs);
    echo '</pre>';

    if($st->rowCount() > 0){
      $auth = password_verify($password, $rs["password"]); // password ingresado / password base de datos
      var_dump($auth);

      if($auth){
        // usuario autenticado
        session_start();
        $_SESSION['username'] = $rs["username"];
        $_SESSION['email'] = $rs["email"];
        $_SESSION['login'] = true;

        header('location: index.php');

      }else{
        $errors[] = "The password is incorrect";
      }
    }else{
      $errors[] = "The user doesn't exist";
    }

  }
}

echo '<pre>';
var_dump($errors);
echo '</pre>';
?>

<!-- <div class="hero page-inner overlay" style="background-image: url('images/hero_bg_1.jpg')"> -->
<div class="container">
  <div class="row justify-content-center align-items-center">
    <div class="col-lg-9 text-center mt-5">
      <h1 class="heading" data-aos="fade-up"> Log In</h1>

      <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
        <ol class="breadcrumb text-center justify-content-center">
          <li class="breadcrumb-item"><a href="../pages/index.php" style="color:#000">Home</a></li>
          <li class="breadcrumb-item active text-black-50" aria-current="page">
            Log In
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

            <?php
            foreach ($errors as $error) { ?>
              <div class="alert alert-danger col-7 text-center">
                <p><?php echo $error ?></p>
              </div>
            <?php } ?>

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
              <input style=" width:100%; " type="submit" value="Log In" class="btn btn-primary" />
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