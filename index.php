<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>customer-sale-detail</title>
   
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="Style.css">
  <script src="//geodata.solutions/includes/countrystatecity.js"></script>
</head>
<body>
    <div class="banner">
   <div class="container d-flex justify-content-center align-items-center"
      style="min-height: 100vh">
         
        <form class="border shadow p-3 rounded" 
              action="php/check-detail.php"
              method="post"
              style="width:450px;">
              <h1 class="text-center p-3">CUSTOMER DETAIL</h1>
              <?php if (isset($_GET['error'])) { ?>
              <div class="alert alert-danger" role="alert">
                <?=$_GET['error']?>
              </div>
              <?php } ?>
                 <div class="mb-3">
                    <label for="Customer name"
                           class="form-label">Customer name</label>
                    <input type="text" 
                           class="form-control" 
                           name="name"
                           id="Customer name"
                 </div>
   <div class="mb-3">
     <label for="Total sales"
            class="form-label">Total sales</label>
     <input type="number"
            name="sales"
            class="form-control"
            id="Total sales"
   </div>
    <div class="mb-1">
      <h3>Country</h3>
      <select name="country" class="countries form-control" id="countryId">
    <option value="">Select Country</option>
</select>

    </div>
    <div class="mb-1">
      <h3>State</h3>
      <select name="state" class="states form-control" id="stateId">
    <option value="">Select State</option>
</select>
    </div>
    <div class="mb-1">
      <h3>City</h3>        
      <select name="city" class="cities form-control" id="cityId">
    <option value="">Select City</option>
</select>
    <div class="mb-0">
      <label for="Customer image"
             class="form-label">Customer image</label>
       <input type="file"
              id="myFile" 
              name="image">
  
    </div>
    </div>
  </div>
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</body>
</html>
