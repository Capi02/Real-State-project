try {
  fetch("../data/propertiesData.php")
    .then(response => response.json())
    .then(result => {
      showProperties(result)
    }
    ).catch(error => console.log(error));


  function showProperties(properties) {
    console.log(properties);

    properties.forEach(property => {
      const container = document.querySelector("#properties_container")

      const { id, city, country, price, address, beds, baths, path_1 } = property;

      function capitalizeS(str) {
        const strCapitalized = str.charAt(0).toUpperCase() + str.slice(1) //This function helps to capitalize the first letter of a string
        return strCapitalized
      }
      container.innerHTML += `
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
      <div class="property-item mb-30">
        <a href="../pages/property-single.php?id=${id}">
          <img src="${path_1}" alt="Image" class="img-fluid" style="height:350px;" loading="lazy"/>
          </a>
        <div class="property-content">
          <div class="price mb-2"><span>$${(parseInt(price)).toLocaleString('en-US')}</span></div>
           <div>
            <span class="d-block mb-2 text-black-50">${address} </span>
            <span class="city d-block mb-3">${capitalizeS(city)}, ${country.toUpperCase()}</span>

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
             <a href="../pages/property-single.php?id=${id}" <form method="POST"><input type="hidden" name="id_product value="${id}"><button type ="submit" class="btn btn-primary py-2 px-3">See details</button> </form></a>  
          </div>
        </div>
     </div>
   </div>
    `
    });
  }
} catch (error) {
 console.log(error)
}



