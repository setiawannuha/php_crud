<?php

include_once('../configs/db.php');

if(isset($_POST['submit_insert'])){
  $data = [
    'name' => $_POST['name'],
    'price' => $_POST['price'],
    'author' => $_POST['author'],
    'description' => $_POST['description'],
  ];
  insert($data);
}
function insert($data){
  global $con;
  $name = $con->real_escape_string($data['name']);
  $price = $con->real_escape_string($data['price']);
  $author = $con->real_escape_string($data['author']);
  $description = $con->real_escape_string($data['description']);
  $insert = $con->query("INSERT INTO books (name, price, author, description) 
                          VALUE ('$name','$price','$author','$description')");
  if(!$insert){
    echo "Insert failed";
    die();
  }
  echo "
    Insert success<br/>
    <a href='../views/list.php'>Kembali</a>
  ";
}

function getList(){
  global $con;
  $result = [];
  $list = $con->query("SELECT * FROM books");
  while ($row = $list->fetch_assoc()) {
    array_push($result, $row);
  }
  return $result;
}

if(isset($_GET['id_delete'])){
  $id = $_GET['id_delete'];
  $delete = $con->query("DELETE FROM books WHERE id='$id'");
  if(!$delete){
    echo "delete failed";
    die();
  }
  echo "
    delete success<br/>
    <a href='../views/list.php'>Kembali</a>
  ";
}


function detail($id){
  global $con;
  $detail = $con->query("SELECT * FROM books WHERE id='$id'");
  return $detail->fetch_assoc();
}

function update($data, $id){
  global $con;
  $name = $con->real_escape_string($data['name']);
  $price = $con->real_escape_string($data['price']);
  $author = $con->real_escape_string($data['author']);
  $description = $con->real_escape_string($data['description']);
  $update = $con->query("UPDATE books SET 
                          name='$name', 
                          price='$price', 
                          author='$author', 
                          description='$description'
                          WHERE id='$id'");
  if(!$update){
    echo "update failed";
    die();
  }
  echo "
    update success<br/>
    <a href='../views/list.php'>Kembali</a>
  ";
}