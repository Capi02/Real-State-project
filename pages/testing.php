<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="author" content="Untree.co" />
  <link rel="shortcut icon" href="../favicon.png" />

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap5" />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="stylesheet" href="../fonts/icomoon/style.css" />
  <link rel="stylesheet" href="../fonts/flaticon/font/flaticon.css" />
  <link rel="stylesheet" href="../css/tiny-slider.css" />
  <link rel="stylesheet" href="../css/aos.css" />
  <link rel="stylesheet" href="../build/css/style.css" />

  <!-- Data tables stylesheet -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.3/css/bulma.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/dataTables.bulma.min.css">


  <title> Real State </title>
</head>

<?php include "../pages/includes/config/database.php" ?> <!-- db connection -->

<script>

fetch("../data/propertiesData.php")
  .then(response => response.json())
  .then(result => {
    showProperties2(result)
  }
  ).catch(error => console.log(error));


function showProperties2(properties) {
  console.log(properties);

  properties.forEach(property => {
    const container = document.querySelector("#properties_container1")

    const { city, country, price, address, beds, baths, path_1 } = property;

    container.innerHTML += `
      <td>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
      <div class="property-item mb-30">
   
        <a href="property-single.php" class="img">
          <img src="${path_1}" alt="Image" class="img-fluid" style="height:350px;"/>
        </a>

        <div class="property-content">
          <div class="price mb-2"><span>$${price}</span></div>
          <div>
            <span class="d-block mb-2 text-black-50">${address} </span>
            <span class="city d-block mb-3">${city}, ${country}</span>

          <div class="specs d-flex mb-4">
              <span class="d-block d-flex align-items-center me-3">
                <span class="icon-bed me-2"></span>
                <span class="caption">${beds}</span>
              </span>
              <span class="d-block d-flex align-items-center">
                <span class="icon-bath me-2"></span>
                <span class="caption">${baths}</span>
              </span>
            </div>
            <a href="../pages/property-single.php" class="btn btn-primary py-2 px-3">See details</a>
      
      </div>
   
    </div>  
    </td>
   `
  });
}
</script>

<section class="container">
  <table id="example" class="display" style="width:100%">
    <thead>
      <tr>
        <th>Name</th>
        <th>Position</th>
        <th>Office</th>
        <th>Age</th>
        <th>Start date</th>
        <th>Salary</th>
      </tr>
    </thead>
    <tbody id="properties_container1">
      
      <tr>
        <td>Michael Silva</td>
        <td>Marketing Designer</td>
        <td>London</td>
        <td>66</td>
        <td>2012-11-27</td>
        <td>$198,500</td>
      </tr>
      <tr>
        <td>Cedric Kelly</td>
        <td>Senior Javascript Developer</td>
        <td>Edinburgh</td>
        <td>22</td>
        <td>2012-03-29</td>
        <td>$433,060</td>
      </tr>
  </table>
</section>


<?php include "../pages/includes/footer.php" ?>

<!-- Preloader -->
<div id="overlayer"></div>
<div class="loader">
  <div class="spinner-border" role="status">
    <span class="visually-hidden">Loading...</span>
  </div>
</div>

<!-- Scripts -->

<script src="../js/bootstrap.bundle.min.js"></script>
<script src="../js/tiny-slider.js"></script>
<script src="../js/aos.js"></script>
<script src="../js/navbar.js"></script>
<script src="../js/counter.js"></script>
<script src="../js/custom.js"></script>

<!-- Data tables js files -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.2/js/dataTables.bulma.min.js"></script>

<script>
  $(document).ready(function() {
    $('#example').DataTable();
  });
</script>

</body>

</html>