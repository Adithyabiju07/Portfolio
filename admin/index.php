<?php
session_start();
include 'db.php';

$username_error = $password_error = $login_error = "";

if(isset($_POST['login'])){

    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if($username == ""){
        $username_error = "Username is required";
    }
 
    if($password == ""){
        $password_error = "Password is required";
    }

    if($username && $password){

        $result = $conn->query("SELECT * FROM login 
                                WHERE username='$username' AND password='$password'");

        if($result->num_rows == 1){
            $_SESSION['admin'] = $username;
            header("Location: dashboard.php");
            exit;
        }else{
            $login_error = "Invalid username or password";
        }
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    
<section class="py-5">
    <div class="container">
        <div class="row justify-content-center align-items-center">           
            <div class="col-md-4">
                <div class="card p-4">
                    <h4 class="mb-3 text-center">Admin Login</h4>
                    <form method="POST" onsubmit="return validateLogin();">

                    <input type="text" id="username" name="username" class="form-control mb-1" placeholder="Username">
                    <small class="text-danger" id="user_error"><?= $username_error ?></small>

                    <input type="password" id="password" name="password" class="form-control mt-3 mb-1" placeholder="Password">
                    <small class="text-danger" id="pass_error"><?= $password_error ?></small>

                    <small class="text-danger"><?= $login_error ?></small><br>

                    <input type="submit" name="login" value="Login" class="btn btn-primary w-100 mt-3">
                </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  
<script>
function validateLogin(){

    let user = document.getElementById("username").value.trim();
    let pass = document.getElementById("password").value.trim();

    document.getElementById("user_error").innerHTML = "";
    document.getElementById("pass_error").innerHTML = "";

    let isValid = true;

    if(user === ""){
        document.getElementById("user_error").innerHTML = "Username is required";
        isValid = false;
    }

    if(pass === ""){
        document.getElementById("pass_error").innerHTML = "Password is required";
        isValid = false;
    }

    return isValid;
}
</script> 

</body>
</html>