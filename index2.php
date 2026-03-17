<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List </title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css'>
<link rel='stylesheet' href='./assets/app.css'>

</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">

    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>


    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto mb-3 mb-lg-0 text-bold">
        <li class="nav-item">
          <a class="nav-link active " aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">All Products</a>
        </li> 
      </ul>
      
    </div>
  </div>
</nav>




<!-- This is Form card Box  -->

<div class="container mt-5">
    <form action="./container/productController.php" method="post">
        <div class="card bg-transprent border-0 shadow-sm">
            <div class="card-header bg-transparent border-0">
                <p class="text-info text-center">Product Insert Form</p>
              
            </div>
            <div class="card-body ">
    <div class="form-box">


<form>

<!-- Basic Info -->

<div class="section-title text-info fw-bold">Basic Information</div>

<div class="row mt-5">



<div class="col-md-4 mb-3">
<label class="form-label">Product Name</label>
<input type="text" class="form-control" name="name">
</div>

<div class="col-md-4 mb-3">
<label class="form-label">Slug</label>
<input type="text" class="form-control" name="slug">
</div>

<div class="col-md-4 mb-3">
<label class="form-label">Brand</label>
<input type="text" class="form-control" name="brand">
</div>

<div class="col-md-4 mb-3">
<label class="form-label">Category</label>
<input type="text" class="form-control" name="category">
</div>

<div class="col-md-4 mb-3">
<label class="form-label">Tags</label>
<input type="text" class="form-control" name="tags">
</div>

<div class="col-12 mb-3">
<label class="form-label">Description</label>
<textarea class="form-control" rows="3"></textarea>
</div>

</div>

<!-- Price -->

<div class="section-title mt-5 text-info fw-bold">Price</div>

<div class="row mt-3">

<div class="col-md-4 mb-3">
<label class="form-label">Currency</label>
<input type="text" class="form-control" name="currency">
</div>

<div class="col-md-4 mb-3">
<label class="form-label">Base Price</label>
<input type="number" class="form-control" name="base_price">
</div>

<div class="col-md-4 mb-3">
<label class="form-label">Discount Price</label>
<input type="number" class="form-control" name="discount_price">
</div>

</div>

<!-- Stock -->

<div class="section-title mt-4 text-info mb-3 fw-bold">Stock</div>

<div class="row">

<div class="col-md-6 mb-3">
<label class="form-label">Quantity</label>
<input type="number" class="form-control" name="quantity">
</div>

<div class="col-md-6 mb-3">
<label class="form-label">In Stock</label>
<select class="form-select">
<option>true</option>
<option>false</option>
</select>
</div>

</div>

<!-- Images -->

<div class="section-title mt-4 mb-3 text-info fw-bold">Product Images</div>

<div class="row">

<div class="col-md-6 mb-3">
<label class="form-label">Image URL</label>
<input type="text" class="form-control">
</div>

<div class="col-md-6 mb-3">
<label class="form-label">Alt Text</label>
<input type="text" class="form-control">
</div>

</div>

<!-- Variant -->

<div class="section-title mt-4 mb-3 text-info fw-bold">Product Variants</div>

<div class="row">

<div class="col-md-3 mb-3">
<label class="form-label">Variant ID</label>
<input type="text" class="form-control">
</div>

<div class="col-md-3 mb-3">
<label class="form-label">Model</label>
<input type="text" class="form-control">
</div>

<div class="col-md-3 mb-3">
<label class="form-label">Color</label>
<input type="text" class="form-control">
</div>

<div class="col-md-3 mb-3">
<label class="form-label">SKU</label>
<input type="text" class="form-control">
</div>

</div>

<!-- Specifications -->

<div class="section-title mt-4 mb-3 text-info fw-bold">Specifications</div>

<div class="row">

<div class="col-md-4 mb-3">
<label class="form-label">Battery Life</label>
<input type="text" class="form-control">
</div>

<div class="col-md-4 mb-3">
<label class="form-label">Connectivity</label>
<input type="text" class="form-control">
</div>

<div class="col-md-4 mb-3">
<label class="form-label">Weight</label>
<input type="text" class="form-control">
</div>

</div>

<!-- Shipping -->

<div class="section-title mt-4 mb-3 text-info fw-bold">Shipping</div>

<div class="row">

<div class="col-md-3 mb-3">
<label class="form-label">Weight</label>
<input type="text" class="form-control">
</div>

<div class="col-md-3 mb-3">
<label class="form-label">Length</label>
<input type="number" class="form-control">
</div>

<div class="col-md-3 mb-3">
<label class="form-label">Width</label>
<input type="number" class="form-control">
</div>

<div class="col-md-3 mb-3">
<label class="form-label">Height</label>
<input type="number" class="form-control">
</div>

</div>

<!-- Submit -->

<div class="text-center mt-4">

<button class="btn btn-primary px-5">
Save Product
</button>

</div>

</form>

</div>

              
            </div>
        </div>
    </form>
</div>



<script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js'></script>
<script ></script>
</body>
</html>