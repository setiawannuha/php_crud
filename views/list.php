<?php
include_once('../handlers/books.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>List</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <h3 class="mt-3 mb-3">List</h3>
    <div class="card">
      <div class="card-header">
        <a href="./insert.php" class="btn btn-primary">Insert</a>
      </div>
      <div class="card-body">
        <table class="table table-bordered">
          <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Author</th>
            <th>Description</th>
            <th>Action</th>
          </tr>
          <?php
            foreach(getList() as $value){
          ?>
            <tr>
              <td><?= $value['name']; ?></td>
              <td><?= $value['price']; ?></td>
              <td><?= $value['author']; ?></td>
              <td><?= $value['description']; ?></td>
              <td>
                <a 
                  href="./update.php?id_update=<?= $value['id']; ?>" 
                  class="btn btn-warning btn-sm"
                >
                  Update
                </a>
                <a 
                  href="../handlers/books.php?id_delete=<?= $value['id']; ?>" 
                  class="btn btn-danger btn-sm"
                >
                  Delete
                </a>
              </td>
            </tr>
          <?php
            }
          ?>
        </table>
      </div>
    </div>
  </div>
</body>
</html>