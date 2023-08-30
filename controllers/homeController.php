<?php
$action = '';
if(isset($_GET['action'])){
    $action = $_GET['action'];
}

switch ($action){
    case '':
        include_once  "models/productModels.php";
        include_once "view/home/index.php";
        break;
    case 'category':
        include_once "models/categoriesModels.php";
        include_once "view/home/category.php";
        break;
    case 'detail':
        include_once "models/productModels.php";
        include_once "view/home/product.php";
        break;
    case 'contact.php' :
        include_once  "view/home/contact.php";
        break;
    case 'add_to_cart' :
        include_once  "models/productModels.php";
        header('location:index.php?controller=home&action=cart');
        break;
    case 'cart' :
        include_once  "models/productModels.php";
        include_once  "view/home/cart.php";
        break;
    case 'update_cart' :
        include_once "models/productModels.php";
        header('location:index.php?controller=home&action=cart');
        break;
    case 'delete_one_book' :
        include_once "models/productModels.php";
        header('location:index.php?controller=home&action=cart');
        break;
    case 'add_order':
        include_once "models/productModels.php";
        include_once "view/home/success.php";
        break;
}

?>

