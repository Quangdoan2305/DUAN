<?php include '../views/admin/layout/header.php'?>
<div class="page-content">

<!-- Start Container Fluid -->
<div class="container-xxl">

     <div class="row">
<<<<<<< HEAD
          <form action="index.php?act=category-edit&id=<?= $getCategory['category_Id']?>" method="post" enctype="multipart/form-data">    
               <div class="col-xl-9 col-lg-8 ">
=======
<form action="index.php?act=category-edit?id=<?=$getCategory['category_Id']?>" method="post" enctype="multipart/form-data">
          <div class="col-xl-9 col-lg-8 ">
>>>>>>> d619a4fb768eac83e92fca6ca5b3e8cf60287d28
               <div class="card">
                    <div class="card-header">
                         <h4 class="card-title">Thêm ảnh danh mục</h4>
                    </div>
                    <div class="card-body">
                         <!-- File Upload -->
<<<<<<< HEAD
                          <img src="./images/category/<?=$getCategory['image']?>" width="100px" alt="" class="mb-2">
                         <input type="file" name="image" id="" class="form-control">
                         <input type="hidden" name="old_image" value="<?=$getCategory['image'] ?>" >
=======
                         <img src="./images/category/<?=$getCategory['image']?>" width="80px" alt="">
                         <input type="file" name="image" id="" class="form-control">
                         <?php if (isset($_SESSION['errors']['image'])):?>
                              <p class="text-danger"><?= $_SESSION['errors']['image']?></p>
                              <?php endif;?>
                              </div>
>>>>>>> d619a4fb768eac83e92fca6ca5b3e8cf60287d28
                         
                    </div>
               </div>
               <div class="card">
                    <div class="card-header">
                         <h4 class="card-title">Thêm danh mục</h4>
                    </div>
                    <div class="card-body">
                         <div class="row">
                              <div class="col-lg-6">
<<<<<<< HEAD

                                        <div class="mb-3">
                                             <label for="meta-title" class="form-label">Tên danh mục</label>
                                             <input type="text" id="meta-title" name="name" class="form-control" value="<?=$getCategory['name']?>" placeholder="Nhập tên danh mục ...">
                                        </div>
                                        <?php if (isset($_SESSION['errors']['name'])) : ?>
                                             <p class="text-danger"><?= $_SESSION['errors']['name'] ?></p>
                                        <?php endif; ?>
                              </div>
                              <div class="col-lg-6">
                              <label for="crater" class="form-label">Trạng thái</label>
                                        <select class="form-control" id="crater" name="status" data-choices data-choices-groups data-placeholder="Chọn trạng thái">
                                             <option value="">Chọn trạng thái</option>
                                             <option value="Hidden" <?=$getCategory['status'] == 'hidden' ? 'selected' : '' ?>>Ẩn</option>
                                             <option value="Active" <?=$getCategory['status'] == 'active' ? 'selected' : '' ?>>Hiện</option>
                                        </select>
                                        <?php if (isset($_SESSION['errors']['status'])) : ?>
                                             <p class="text-danger"><?= $_SESSION['errors']['status'] ?></p>
                                        <?php endif; ?>
=======
                                        <div class="mb-3">
                                             <label for="meta-title" class="form-label">Tên danh mục</label>
                                             <input type="text" id="meta-title" name="name" class="form-control" value="<?=$getCategory['name']?>" placeholder="Nhập tên danh mục ">
                                        </div>
                                        <?php if (isset($_SESSION['errors']['name'])):?>
                              <p class="text-danger"><?= $_SESSION['errors']['name']?></p>
                              <?php endif;?>
                                   
                              </div>
                              <div class="col-lg-6">
                                   <label for="crater" class="form-label">Trạng thái</label>
                              <select class="form-control" id="crater" name="status" data-choices data-choices-groups data-placeholder="Chọn Trạng Thái">
                                             <option value="">Chọn trạng thái</option>
                                             <option value="Active"<?=$getCategory['status']== 'hidden'?'selected':''?>>Ẩn </option>
                                             <option value="Hidden"<?=$getCategory['status']=='active'?'selected':''?>>Hiển thị</option>
                                        </select>
                                        <?php if (isset($_SESSION['errors']['status'])):?>
                              <p class="text-danger"><?= $_SESSION['errors']['status']?></p>
                              <?php endif;?>
>>>>>>> d619a4fb768eac83e92fca6ca5b3e8cf60287d28
                              </div>
                              <div class="col-lg-12">
                                   <div class="mb-0">
                                        <label for="description" class="form-label">Mô tả</label>
<<<<<<< HEAD
                                        <textarea class="form-control bg-light-subtle" name="description" id="description" rows="4" placeholder="Nhập mô tả ..."><?=$getCategory['description']?></textarea>
                                   </div>
                                   <?php if (isset($_SESSION['errors']['description'])) : ?>
                                             <p class="text-danger"><?= $_SESSION['errors']['description'] ?></p>
                                   <?php endif; ?>
=======
                                        <textarea class="form-control bg-light-subtle" name="description" id="description" rows="4" placeholder="Nhập mô tả"><?=$getCategory['description']?></textarea>
                                   </div>
                                   <?php if (isset($_SESSION['errors']['description'])):?>
                              <p class="text-danger"><?= $_SESSION['errors']['description']?></p>
                              <?php endif;?>
>>>>>>> d619a4fb768eac83e92fca6ca5b3e8cf60287d28
                              </div>
                         </div>
                    </div>
               </div>
               <div class="p-3 bg-light mb-3 rounded">
                    <div class="row justify-content-end g-2">
                         <div class="col-lg-2">
<<<<<<< HEAD
                              <button tyope="submit" name="updateCategory" class="btn btn-outline-secondary w-100">Cập nhật</button>
                         </div>
                         <div class="col-lg-2">
                              <a href="index.php?act=category" class="btn btn-primary w-100">Quay lại</a>
                         </div>
                    </div>
               </div>
               </div>
          </form> 
=======
                              <button type="submit" name="createCategory" class="btn btn-outline-secondary w-100">Thêm mới</button>
                         </div>
                         <div class="col-lg-2">
                              <a href="list.php?act=category" class="btn btn-primary w-100">Quay lại</a>
                         </div>
                    </div>
               </div>
          </div>
     </form>
>>>>>>> d619a4fb768eac83e92fca6ca5b3e8cf60287d28
     </div>

</div>
<!-- End Container Fluid -->


</div>
<?php include '../views/admin/layout/footer.php'?>