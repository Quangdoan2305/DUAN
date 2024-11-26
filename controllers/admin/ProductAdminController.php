<?php
require_once '../models/Product.php';
class ProductAdminController extends Product {
              public function index() {
                            include '../views/admin/product/list.php';
              }
              public function create(){
                            $listColors = $this->getAllColor();
                            $listSizes = $this->getAllSize();
                            $listCategores = $this->getAllCategory();
                            include '../views/admin/product/create.php';
              }
}