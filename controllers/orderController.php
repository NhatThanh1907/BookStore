<?php
$action = '';
if(isset($_GET['action'])){
    $action = $_GET['action'];
}

switch ($action){
    case '':
        include_once "models/orderModels.php";
        include_once "view/admin/order.php";
        break;
    case 'edit':
        include_once "models/orderModels.php";
        header('location: index.php?controller=order');
        break;
    case 'detail':
        include_once "models/orderModels.php";
        include_once "view/admin/orderdetail.php";
        break;

}
?>