<?php
     $action = '';
     if(isset($_GET['action'])){
         $action = $_GET['action'];
     }

     switch ($action){
         case '':
             include_once  "models/categoriesModels.php";
             include_once "view/admin/category.php";
             break;

         case 'create':
             include_once "view/admin/add_category.php";
             break;
         case 'store':
             include_once "models/categoriesModels.php";
             header('Location:index.php?controller=categories');
             break;
         case 'edit':
             include_once "models/categoriesModels.php";
             include_once "view/admin/edit_category.php";
             break;
         case 'update':
             include_once "models/categoriesModels.php";
             header('Location:index.php?controller=categories');
             break;
         case 'remove':
             include_once "models/categoriesModels.php";
             header('Location:index.php?controller=categories');
             break;

     }

?>
