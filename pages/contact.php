<?php include "../pages/includes/head.php" ?>
<?php include "../pages/includes/mobileNavBar.php" ?>
<?php include "../pages/includes/navBar.php" ?>
<?php include "../pages/includes/config/database.php" ?> <!-- db connection -->

<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';


if (isset($_POST["sent"])) {

  $name = $_POST["name"];
  $email = $_POST["email"];
  $subject = $_POST["subject"];
  $message = $_POST["message"];


  //Create an instance; passing `true` enables exceptions
  $mail = new PHPMailer(true);

  try {
    //Server settings
    /* $mail->isSMTP(); *//* Debug = SMTP::DEBUG_SERVER;  */                     //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'alejandro.capitanachi.glz@gmail.com';                     //SMTP username
    $mail->Password   = 'gcyyufxzjhrcjyio';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;   /*  PHPMailer::ENCRYPTION_SMTPS */        //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('alejandro.capitanachi.glz@gmail.com', 'Capi RealState Email');
    $mail->addAddress($email, $name);     //Add a recipient
/*     $mail->addAddress('ellen@example.com');               //Name is optional
    $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com'); */

    //Attachments
    /*   $mail->addAttachment('/var/tmp/file.tar.gz');  */        //Add attachments
  
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body = $message;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
  } catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }
}

?>

<div class="hero page-inner overlay" style="background-image: url('../images/hero_bg_1.jpg')">
  <div class="container">
    <div class="row justify-content-center align-items-center">
      <div class="col-lg-9 text-center mt-5">
        <h1 class="heading" data-aos="fade-up">Contact Us</h1>

        <nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
          <ol class="breadcrumb text-center justify-content-center">
            <li class="breadcrumb-item"><a href="../pages/index.php">Home</a></li>
            <li class="breadcrumb-item active text-white-50" aria-current="page">
              Contact
            </li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</div>

<div class="section">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
        <div class="contact-info">
          <div class="address mt-2">
            <i class="icon-room"></i>
            <h4 class="mb-2">Location:</h4>
            <p>
              43 Raymouth Rd. Baltemoer,<br />
              London 3910
            </p>
          </div>

          <div class="open-hours mt-4">
            <i class="icon-clock-o"></i>
            <h4 class="mb-2">Open Hours:</h4>
            <p>
              Sunday-Friday:<br />
              11:00 AM - 2300 PM
            </p>
          </div>

          <div class="email mt-4">
            <i class="icon-envelope"></i>
            <h4 class="mb-2">Email:</h4>
            <p>info@Untree.co</p>
          </div>

          <div class="phone mt-4">
            <i class="icon-phone"></i>
            <h4 class="mb-2">Call:</h4>
            <p>+1 1234 55488 55</p>
          </div>
        </div>
      </div>
      <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
        <form action="" method="post" enctype="multipart/form-data">
          <div class="row">

            <div class="col-6 mb-3">
              <input type="text" class="form-control" placeholder="Your Name" name="name" required /> <!-- Name input -->
            </div>
            <div class="col-6 mb-3">
              <input type="email" class="form-control" placeholder="Your Email" name="email" required /> <!-- Email input -->
            </div>
            <div class="col-12 mb-3">
              <input type="text" class="form-control" placeholder="Subject" name="subject" required /> <!-- Subject input -->
            </div>
            <div class="col-12 mb-3">
              <textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="Message" required></textarea> <!-- Message input -->
            </div>

            <!-- <div class="col-12 mb-3">
              <p>(Optional)</p>
              <input type="file" name="file">   
            </div> -->

            <div class="col-12">
              <input type="submit" value="Send Message" class="btn btn-primary" name="sent" /> <!-- Submit button -->
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