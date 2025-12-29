<?php
include 'db.php';

$id = $_GET['id'] ?? 0;

$project = $conn->query("SELECT * FROM projects WHERE id=$id")->fetch_assoc();

if(!$project){
    die("Projects not found!");
}

if(isset($_POST['update'])){

    $name   = $_POST['name'];
    $description  = $_POST['description'];
    $status = $_POST['status'];

    if($_FILES['image']['name'] != ""){
        $image = $_FILES['image']['name'];
        $tmp   = $_FILES['image']['tmp_name'];

        $imgName = time().'_'.$image;
        move_uploaded_file($tmp,"uploads/".$imgName);

        $conn->query("UPDATE projects SET 
            name='$name',
            description='$description',
            status='$status',
            image='$imgName'
            WHERE id=$id");
    }
    else{
        $conn->query("UPDATE projects SET 
            name='$name',
            description='$description',
            status='$status'
            WHERE id=$id");
    }

    header("Location: view.php");
    exit;
}
?>




<!DOCTYPE html>
<html>
<head>
<title>Edit Project</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5 col-md-6">
<h4>Edit Project</h4>

<form method="POST" enctype="multipart/form-data">

<div class="mb-3">
<label>Project Name</label>
<input type="text" name="name" class="form-control" value="<?= $project['name']; ?>">
</div>

<div class="mb-3">
<label>Current Image</label><br>
<img src="uploads/<?= $project['image']; ?>" width="80"><br><br>
<input type="file" name="image" class="form-control">
</div>

<div class="mb-3">
<label>Description</label>
<input type="text" name="description" class="form-control" value="<?= $project['description']; ?>">
</div>

<div class="mb-3">
<label>Status</label>
<select name="status" class="form-control">
<option value="1" <?= $project['status']==1?'selected':'' ?>>Active</option>
<option value="0" <?= $project['status']==0?'selected':'' ?>>Inactive</option>
</select>
</div>

<button class="btn btn-success" name="update">Update Product</button>
<a href="view.php" class="btn btn-secondary">Back</a>

</form>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

<script>
function validateProduct(){

    let name  = document.getElementsByName("name")[0].value.trim();
    let price = document.getElementsByName("price")[0].value.trim();
    let image = document.getElementsByName("image")[0].value;

    document.getElementById("name_err").innerHTML  = "";
    document.getElementById("price_err").innerHTML = "";
    document.getElementById("img_err").innerHTML   = "";

    let valid = true;

    if(name === ""){
        document.getElementById("name_err").innerHTML = "Name required!";
        valid = false;
    }

    if(price === ""){
        document.getElementById("price_err").innerHTML = "Price required!";
        valid = false;
    }

    if(image === ""){
        document.getElementById("img_err").innerHTML = "Image required!";
        valid = false;
    }

    return valid;
}
</script>


</body>
</html>