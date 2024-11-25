<?php
session_start();
require_once '../controllers/admin/CategoryAdminController.php';
<<<<<<< HEAD
$action= isset($_GET['act']) ? $_GET['act'] : 'index' ;
=======
$action = isset($_GET['act']) ? $_GET['act'] : 'index';

>>>>>>> d619a4fb768eac83e92fca6ca5b3e8cf60287d28
$categoryAdmin = new CategoryAdminController();
switch($action){
    case 'admin':
        include '../views/admin/index.php';
        break;

    case 'product':
        include '../views/admin/product/list.php';
        break;

    case 'product-create':
        include '../views/admin/product/create.php';
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

<<<<<<< HEAD
    case 'category-delete':
        $categoryAdmin->deleteCategory();
        break;

=======
>>>>>>> d619a4fb768eac83e92fca6ca5b3e8cf60287d28
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