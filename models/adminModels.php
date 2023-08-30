<?php
function Categories(){
    include_once "connect/openConnect.php";
    $sql = "SELECT * FROM categories";
    $categories = mysqli_query($connect,$sql);
    include_once "connect/closeConnect.php";
    return $categories;
}
function store(){
    $name = $_POST['name'];
    include_once "connect/openConnect.php";
    $sql = "INSERT INTO categories (name) VALUES('$name')";
    mysqli_query($connect,$sql);
    include_once "connect/closeConnect.php";
}
function edit(){
    $productid = $_GET['id'];
    include_once "connect/openConnect.php";
    $sql = "SELECT * FROM categories WHERE id = '$productid'";
    $categories = mysqli_query($connect,$sql);
    include_once "connect/closeConnect.php";
    return $categories;
}
function update(){
    $categoryid = $_POST['cat_id'];
    $categoryname = $_POST['cat_name'];
    include_once "connect/openConnect.php";
    $sql = "UPDATE categories SET name = '$categoryname' WHERE id = '$categoryid' ";
    mysqli_query($connect, $sql);
    include_once "connect/closeConnect.php";
}
function remove(){
    $categoryid = $_GET['id'];
    include_once "connect/openConnect.php";
    $sql = "DELETE FROM categories WHERE id = '$categoryid' ";
    mysqli_query($connect, $sql);
    include_once "connect/closeConnect.php";
}
switch ($action){
    case '';
        $categories = Categories();
        break;
    case 'store';
        store();
        break;
    case 'edit';
        $categories = edit();
        break;
    case 'update';
        update();
        break;
    case 'remove';
        remove();
        break;
}


?>