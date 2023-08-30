<?php
$action = '';
if(isset($_GET['action'])){
    $action = $_GET['action'];
}

switch ($action){
    case '':
        include_once "models/adminModels.php";
        include_once "view/admin/admin.php";
        break;
    case 'create':
        include_once "view/admin/admin.php";
        break;
    case 'store':
        include_once "models/adminModels.php";
        header('Location:index.php?controller=categories');
        break;
    case 'edit':
        include_once "models/adminModels.php";
        include_once "view/admin/admin.php";
        break;
    case 'update':
        include_once "models/adminModels.php";
        header('Location:index.php?controller=categories');
        break;
    case 'remove':
        include_once "models/adminModels.php";
        header('Location:index.php?controller=categories');
        break;
}

?>