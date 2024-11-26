<?php
session_start();
require_once '../controllers/admin/CategoryAdminController.php';
require_once '../controllers/admin/ProductAdminController.php';
$action= isset($_GET['act']) ? $_GET['act'] : 'index' ;
$categoryAdmin = new CategoryAdminController();
$productAdmin = new ProductAdminController();
switch($action){
    case 'admin':
        include '../views/admin/index.php';
        break;


    case 'product':
        $productAdmin->index();
        break;

    case 'product-create':
        $productAdmin->create();
        break;

    case 'product-edit':
        include '../views/admin/product/edit.php';
        break;

    
    case 'category':
        $categoryAdmin->index();
        break;

    case 'category-create':
        $categoryAdmin->addCategory();
        break;

    case 'category-edit':
        $categoryAdmin->updateCategory();
        break;

    case 'category-delete':
        $categoryAdmin->deleteCategory();
        break;

    case 'index':
        include '../views/client/index.php';
        break;

    case 'login':
        include '../views/client/auth/login.php';
        break;

    case 'register':
        include '../views/client/auth/register.php';
        break;
        
}