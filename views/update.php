<?php
include_once('../handlers/books.php');

$id;
if(isset($_GET['id_update'])){
  $id = $_GET['id_update'];
}
// get detail data
$detail = detail($id);

// update
if(isset($_POST['submit_update'])){
  $data = [
    'name' => $_POST['name'],
    'price' => $_POST['price'],
    'author' => $_POST['author'],
    'description' => $_POST['description'],
  ];
  update($data, $id);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <h3 class="mt-3 mb-3">Update</h3>
    <div class="card">
      <div class="card-body">
        <form action="" method="POST">
          <div class="form-group mb-2">
            <input type="text" name="name" value="<?= $detail['name']; ?>" class="form-control" placeholder="Name">
          </div>
          <div class="form-group mb-2">
            <input type="text" name="price" value="<?= $detail['price']; ?>" class="form-control" placeholder="Price">
          </div>
          <div class="form-group mb-2">
            <input type="text" name="author" value="<?= $detail['author']; ?>" class="form-control" placeholder="Author">
          </div>
          <div class="form-group mb-2">
            <input type="text" name="description" value="<?= $detail['description']; ?>" class="form-control" placeholder="Description">
          </div>
          <div class="form-group mb-2">
            <button type="submit" name="submit_update" class="btn btn-success">Update</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>