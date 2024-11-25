<?php
require_once '../models/category.php';
class CategoryAdminController extends Category
{
              public function index(){
                            $listCategories = $this->listCategory();
                            include '../views/admin/category/list.php';
              }
              public function addCategory(){
                            if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['createCategory'])){
                                          $errors=[];
                                          if(empty($_POST['name'])){
                                                        $errors['name'] = 'Vui lòng nhập tên danh mục';
                                          }
                                          if(empty($_POST['status'])){
                                                        $errors['status'] = 'Vui lòng chọn trạng thái';
                                          }
                                          if(empty($_POST['description'])){
                                                        $errors['description'] = 'Vui lòng nhập tên mô tả';
                                          }
                                          if(!isset($_FILES['image'])||$_FILES['image']['error'] !== UPLOAD_ERR_OK){
                                                        $errors['image'] = 'Vui lòng thêm hình ảnh';
                                          }
                                          $_SESSION['errors'] =$errors;

                                          $file = $_FILES['image'];
                                          $image = $file['name'];
                                          if(move_uploaded_file($file['tmp_name'],'./images/category/'.$image)){
                                                        $createCategory = $this->create($_POST['name'],$image,$_POST['status'],$_POST['description'] );
                                                        if($createCategory){
                                                                      $_SESSION['success']='Thêm Thành Công';
                                                                      header('Location: index.php?act=category');
                                                                      exit();
                                                        }else{
                                                                      $_SESSION['error']='Thêm Thất Bại';
                                                                      header('Location:' .$_SESSION['HTTP_REFERER']);
                                                                      exit();
                                                        }
                                          }
                                          
                            }
                            include '../views/admin/category/create.php';
              }

              public function editCategory(){
                            $getCategory = $this->detail();
                            if($getCategory){
                                          return $getCategory;
                            }else{
                                          $_SESSION['error'] = 'Không tìm thấy danh mục';
                            }
              }



              public function updateCategory()
              {
                            $getCategory = $this->detail();
                            if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['createCategory'])){
                                          $errors=[];
                                          if(empty($_POST['name'])){
                                                        $errors['name'] = 'Vui lòng nhập tên danh mục';
                                          }
                                          if(empty($_POST['status'])){
                                                        $errors['status'] = 'Vui lòng chọn trạng thái';
                                          }
                                          if(empty($_POST['description'])){
                                                        $errors['description'] = 'Vui lòng nhập tên mô tả';
                                          }
                                          if(!isset($_FILES['image'])||$_FILES['image']['error'] !== UPLOAD_ERR_OK){
                                                        $errors['image'] = 'Vui lòng thêm hình ảnh';
                                          }
                                          $_SESSION['errors'] =$errors;

              }
              include '../views/admin/category/edit.php';
}
}
