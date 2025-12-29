<?php
include 'db.php';

$name = $description = "";
$name_error = $description_error = $image_error = "";

if(isset($_POST['save'])){

    $name   = $_POST['name'];
    $description  = $_POST['description'];
    $status = $_POST['status'];
    $image  = $_FILES['image']['name'];
    $tmp    = $_FILES['image']['tmp_name'];

    if($name=="" || $description=="" || $image==""){
        header("Location: add.php?msg=error");
        exit;
    }

    $imgName = time().'_'.$image;
    move_uploaded_file($tmp,"uploads/".$imgName);

    $conn->query("INSERT INTO projects(name,image,description,status)
                  VALUES('$name','$imgName','$description','$status')");

    header("Location: add.php?msg=success");
    exit;
}

/* Clear msg after showing once */
if(isset($_GET['msg'])){
    header("Refresh:3; url=add.php");   // remove msg after 3 sec
}
?>



<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Add Project</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<section class="py-5">
<div class="container">
<div class="row justify-content-center">
<div class="col-md-6">

<div class="d-flex justify-content-between mb-3">
<h4>Add Projects</h4>
<div>
<a href="view.php" class="btn btn-primary btn-sm">View</a>
<a href="logout.php" class="btn btn-danger btn-sm">Logout</a>
</div>
</div>

<div class="card p-4">


<form method="POST" enctype="multipart/form-data" onsubmit="return validateProject();">

<?php if(isset($_GET['msg']) && $_GET['msg']=="success"): ?>
<div class="alert alert-success alert-dismissible fade show">Project added successfully!
    <button class="btn-close" data-bs-dismiss="alert"></button>
</div>
<?php endif; ?>

<?php if(isset($_GET['msg']) && $_GET['msg']=="error"): ?>
<div class="alert alert-danger alert-dismissible fade show">All fields are required!
    <button class="btn-close" data-bs-dismiss="alert"></button>
</div>
<?php endif; ?>


<div class="mb-3">
<label><b>Project Name</b></label>
<input type="text" name="name" class="form-control" value="<?= $name ?>">
<small class="text-danger" id="name_err"><?= $name_error ?></small>
</div>

<div class="mb-3">
<label><b>Project Image</b></label>
<input type="file" name="image" class="form-control">
<small class="text-danger" id="img_err"><?= $image_error ?></small>
</div>

<div class="mb-3">
<label><b>Description</b></label>
<textarea name="description" class="form-control"><?= $description ?></textarea>
<small class="text-danger" id="description_err"><?= $description_error ?></small>
</div>

<div class="mb-3">
<label><b>Status</b></label>
<select name="status" class="form-control">
<option value="1">Active</option>
<option value="0">Inactive</option>
</select>
</div>

<button class="btn btn-success" name="save">Add Project</button>

</form>

</div>
<br>
<a href="dashboard.php">← Back to Home</a>

</div>
</div>
</div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

<script>
function validateProject(){

    let name  = document.getElementsByName("name")[0].value.trim();
    let description = document.getElementsByName("description")[0].value.trim();
    let image = document.getElementsByName("image")[0].value;

    document.getElementById("name_err").innerHTML  = "";
    document.getElementById("description_err").innerHTML = "";
    document.getElementById("img_err").innerHTML   = "";

    let valid = true;

    if(name === ""){
        document.getElementById("name_err").innerHTML = "Name is required!";
        valid = false;
    }

    if(description === ""){
        document.getElementById("description_err").innerHTML = "Description is required!";
        valid = false;
    }

    if(image === ""){
        document.getElementById("img_err").innerHTML = "Image is required!";
        valid = false;
    }

    return valid;
}
</script>


</body>
</html>