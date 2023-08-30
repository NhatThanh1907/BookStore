<?php
$action = '';
if(isset($_GET['action'])){
    $action = $_GET['action'];
}

switch ($action){
    case '':
        include_once  "models/productModels.php";
        include_once "view/admin/book.php";
        break;
    case 'create':
        include_once  "models/productModels.php";
        include_once "view/admin/add_product.php";
        break;
    case 'store':
        include_once "models/productModels.php";
        header('Location:index.php?controller=book');
        break;
    case 'edit':
        include_once "models/productModels.php";
        include_once "view/admin/edit_product.php";
        break;
    case 'update':
        include_once "models/productModels.php";
        header('Location:index.php?controller=book');
        break;
    case 'remove':
        include_once "models/productModels.php";
        header('Location:index.php?controller=book');
        break;
    case 'detail':
        include_once "models/productModels.php";
        include_once "view/admin/product.php";
        break;

}

?>
