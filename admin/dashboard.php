<?php
include 'db.php';

// $result = $conn->query("SELECT COUNT(*) AS total FROM products WHERE status=1");
// $row = $result->fetch_assoc();

// echo "Total Products : " . $row['total'];
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  
<style>
    a{
        text-decoration:none;
        color: #000;
    }
</style>

</head>
  <body>
    
<section class="py-5">
    <div class="container">
        <div class="row justify-content-center align-items-center"> 
                    
            <div class="col-md-4">
                <h4 class="mb-3">Welcome</h4>  
                <div class="card p-4 text-center">
                    <h4 class="mb-3 text-center">Number of Projects</h4>
                    <h2><strong>20</strong></h2>
                    
                </div>
            </div>

            <div class="col-md-4">
                <div class="card p-4">
                    <ol>
                        <li><a href="add.php">Add Products</a></li>
                        <li><a href="view.php">Manage Products</a><br><br></li>
                    </ol>

                    <a href="logout.php" class="btn btn-danger">Logout</a>
                    
                </div>
            </div>


        </div>
    </div>
</section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>