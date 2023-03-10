<?php
include "../pages/includes/head.php";
include "../pages/includes/mobileNavBar.php";
include "../pages/includes/navBar.php";
include "../pages/includes/config/database.php"; /* DB connection */

extract($_POST);
echo $btnBuy;
/* var_dump($_POST);
exit; */
?>

<div class="section">
  <h2 class="text-center mb-4">Checkout</h2>
  <div class="container checkout-grid">
    <div class="row">
      <form action="#" method="POST">
        <div class="row form-container h-100">
          <div class="col-6 mb-3">
            <input type="text" class="form-control" placeholder="Your name" name="name" />
          </div>
          <div class="col-6 mb-3">
            <input type="text" class="form-control" placeholder="Your lastname" name="lastname" />
          </div>
          <div class="col-12 mb-3">
            <input type="email" class="form-control" placeholder="Your email" name="email" />
          </div>
          <div class="col-6 mb-3">
            <input type="tel" class="form-control" placeholder="Your cellphone" name="cellphone" />
          </div>
          <div class="col-12">
            <input  type="submit" value="Submit" class="btn btn-primary w-100" />
          </div>
        </div>
      </form>
    </div>

    <table class=" product_table table table-bordered h-100 rounded-5">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Property</th>
          <th scope="col">City</th>
          <th scope="col">Price</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@twitter</td>

        </tr>
      </tbody>
    </table>
  </div>
</div>

</section>

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