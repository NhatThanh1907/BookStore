<?php
$action = '';
if(isset($_GET['action'])){
    $action = $_GET['action'];
}

switch ($action){
    case '':
        include_once  "models/userModels.php";
        include_once "view/admin/user.php";
        break;
    case 'create':
        include_once "view/admin/add_user.php";
        break;
    case 'store':
        include_once "models/userModels.php";
        header('Location:index.php?controller=user');
        break;
    case 'edit':
        include_once "models/userModels.php";
        include_once "view/admin/edit_user.php";
        break;
    case 'update':
        include_once "models/userModels.php";
        header('Location:index.php?controller=user');
        break;
    case 'remove':
        include_once "models/userModels.php";
        header('Location:index.php?controller=user');
        break;
    case 'login':
        include_once "view/home/login.php";
        break;
    case 'loginProcess':
        include_once 'models/userModels.php';
        if($test == 0){
            header('Location:index.php?controller=user&action=login');
        } elseif($test == 1) {
            header('Location:http://localhost/Project01/index.php?controller=home');
        }
        break;
}

?>
