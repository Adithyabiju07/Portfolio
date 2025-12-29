<?php
include 'db.php';
$result = $conn->query("SELECT * FROM projects ORDER BY id DESC");
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>View Projects</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<section class="py-5">
<div class="container">
<div class="col-md-12">

<div class="d-flex justify-content-between mb-3">
<h4>View Projects</h4>
<div>
<a href="add.php" class="btn btn-primary btn-sm">Add Projects</a>
<a href="logout.php" class="btn btn-danger btn-sm">Logout</a>
</div>
</div>

<table class="table table-bordered">
<thead>
<tr>
<th>#</th>
<th>Project Name</th>
<th>Image</th>
<th>Description</th>
<th>Status</th>
<th>Created</th>
<th>Action</th>
</tr>
</thead>
<tbody>

<?php
$i = 1;
if($result->num_rows > 0):
while($row = $result->fetch_assoc()):
?>

<tr>
<td><?= $i++; ?></td>
<td><?= $row['name']; ?></td>
<td><img src="uploads/<?= $row['image']; ?>" width="70"></td>
<td><?= $row['description']; ?></td>
<td>
<?= ($row['status']==1) ? "<span class='badge bg-success'>Active</span>" : "<span class='badge bg-danger'>Inactive</span>"; ?>
</td>
<td><?= $row['created_at']; ?></td>
<td>
<a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
<a href="delete.php?id=<?= $row['id']; ?>" class="btn btn-danger btn-sm"
   onclick="return confirm('Are you sure?')">Delete</a>
</td>
</tr>

<?php endwhile; else: ?>
<tr>
<td colspan="7" class="text-center text-danger">No Projects Found!</td>
</tr>
<?php endif; ?>

</tbody>
</table>

<a href="dashboard.php">← Back to Home</a>

</div>
</div>
</section>

</body>
</html>