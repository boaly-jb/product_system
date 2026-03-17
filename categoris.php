<?

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
          <a class="nav-link active " aria-current="page" href="./categoris.php">catagoris</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="./food.php">Food</a>
        </li> 
      </ul>
      
    </div>
  </div>
</nav>


 <!-- Categoris Section  -->

 <div class="container mt-5">
    <form action="./controller/CategoryStoreAndUpdate.php" method="post">
        <div class="card p-3 bg-transprent  border-0 shadow-sm">
            <div class="card-header bg-transparent  border-0">
                <p class="text-info fw-bold"> Add Your Categori</p>
            </div>
            <div class="card-body">
                <div class="inputGroup ">
             <label for="categori" class="text-info mb-2">Type Your Categori</label>
            <input type="text " name="categories_title" id="categori" placeholder="Type Your Categori " class="form-control">
           </div>
            </div>
            <div class="card-footer bg-transparent border-0">
                <button class="btn  btn-primary btn-sm float-end">Add </button>
            </div>
        </div>
    </form>
 </div>


 <!-- Show Your All Categoris Here  -->

 <div class="container">
    <div class="card mt-5 border-0 shadow-sm">
        <div class="card-header bg-transparent border-0">
            <p class="text-center fw-bold">  All Your categoris is here</p>
        </div>

        <div class="card-body">
           <table class="table table-responsive table-bordered table-hover">
                <thead class="text-center">
                    <th>SL</th>
                    <th>Categoris Title </th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">01</td>
                        <td>Foods Items </td>
                        <td style="width:200px;">Delet and add </td>
                    </tr>
                </tbody>
           </table>
        </div>
    </div>
 </div>



<script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js'></script>
<script ></script>
</body>
</html>