<?php
include 'db.php';

$id = $_GET['id'] ?? 0;

if($id == 0){
    die("Invalid Product ID");
}

// Get image name before deleting
$product = $conn->query("SELECT image FROM projects WHERE id=$id")->fetch_assoc();

if($product){
    $img = "uploads/".$product['image'];
    if(file_exists($img)){
        unlink($img);   // delete image file
    }

    $conn->query("DELETE FROM projects WHERE id=$id");
}

header("Location: view.php");
exit;
?>