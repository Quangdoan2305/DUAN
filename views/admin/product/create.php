<?php include '../views/admin/layout/header.php'?>
<div class="page-content">

<!-- Start Container Fluid -->
<div class="container-xxl">

     <div class="row">
          <div class="col-xl-9 col-lg-8 ">
               <div class="card">
                    <div class="card-header">
                         <h4 class="card-title">Thêm Ảnh sản phẩm</h4>
                    </div>
                    <!-- file upload nhiều ảnh sản phẩm -->
                    <div class="card-body">
                         <!-- File Upload -->
                         <input type="file" name="galleryimage[]" id="" class="form-control">
                    </div>
               </div>
               <div class="card">
                    <div class="card-header">
                         <h4 class="card-title">Thông tin sản phẩm</h4>
                    </div>
                    <div class="card-body">
                         <div class="row">
                              <div class="col-lg-6">
                                        <div class="mb-3">
                                             <label for="product-name" class="form-label">Tên sản phẩm</label>
                                             <input type="text" id="product-name" name="product_name" class="form-control" placeholder="Nhập tên sản phẩm">
                                        </div>
                              </div>
                              <div class="col-lg-6">
                                        <label for="product-categories" class="form-label">Danh mục </label>
                                        <select class="form-control" id="product-categories"name="category_id"data-choices data-choices-groups data-placeholder="Chọn danh mục" >
                                             <?php foreach($categores as $cate) : ?>
                                             <option value="">Chọn danh mục</option>
                                             <option value="Fashion">Fashion</option>
                                             <?php endforeach ;?>
                                        </select>
                              </div>
                              <div class="col-lg-12">
                                   <div class="mb-3">
                                   <input type="file" name="product_image" id="" class="form-control">
                                   </div>
                              </div>
                              <div class="col-lg-6">
                                        <div class="mb-3">
                                             <label for="product_price" class="form-label">Giá sản phẩm</label>
                                             <input type="text" id="product_price" name="product_price" class="form-control" placeholder="Nhập giá sản phẩm">
                                        </div>
                              </div>
                              <div class="col-lg-6">
                              <div class="mb-3">
                                             <label for="product_sale_price" class="form-label">Giá khuyến mại</label>
                                             <input type="text" id="product_sale_price" name="product_sale_price" class="form-control" placeholder="Nhập giá khuyến mãi sản phẩm">
                                        </div>
                              </div>
                         </div>
                         <div id="variants">
                         <div class="row mb-4 mt-3 border rouded px-2">
                              <div class="col-lg-4">
                                   <div class="mt-3 mb-3">
                                        <h5 class="text-dark fw-medium">Size :</h5>
                                        <div class="d-flex flex-wrap gap-2" role="group" aria-label="Basic checkbox toggle button group">
                                             <input type="checkbox" class="btn-check" id="size-xs1" name="variant_size[]">
                                             <label class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center" for="size-xs1">XS</label>
                                        </div>
                                   </div>
                              </div>
                              <div class="col-lg-5">
                                   <div class="mt-3 mb-3">
                                        <h5 class="text-dark fw-medium">Màu :</h5>
                                        <div class="d-flex flex-wrap gap-2" role="group" aria-label="Basic checkbox toggle button group">
                                             <input type="checkbox" class="btn-check" id="color-dark1" name="variant_color[]">
                                             <label class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center" for="color-dark1"> <i class="bx bxs-circle fs-18 text-dark"></i></label>
                                        </div>
                                   </div>
                              </div>
                                   <div class="col-lg-3">
                              <div class="mt-3 mb-3">
                                             <label for="variant_quantity[]" class="form-label">Số lượng</label>
                                             <input type="text" id="variant_quantity[]" name="variant_quantity[]" class="form-control" placeholder="Nhập giá khuyến mãi sản phẩm">
                                        </div>
                              </div>
                              <div class="col-lg-6">
                                        <div class="mb-2">
                                             <label for="variant_price[]" class="form-label">Giá biến thể</label>
                                             <input type="text" id="variant_price[]" name="variant_price[]" class="form-control" placeholder="Nhập giá sản phẩm">
                                        </div>
                              </div>
                              <div class="col-lg-6">
                              <div class="mb-2">
                                             <label for="variant_sale_price[]" class="form-label">Giá khuyến mại biến thể</label>
                                             <input type="text" id="variant_sale_price[]" name="variant_sale_price[]" class="form-control" placeholder="Nhập giá khuyến mãi sản phẩm">
                                        </div>
                              </div>
                              </div>
                         </div>
                         </div>

                         <div class="rounded">
                    <div class="row justify-content-end g-2">
                         <div class="col-lg-2">
                              <button type="button" id="add-variant" class="btn btn-primary w-100">Thêm biến thể</button>
                         </div>
                         
                    </div>
               </div>

                         <div class="row">
                              <div class="col-lg-12">
                                   <div class="mb-3">
                                        <label for="description" class="form-label">Mô tả</label>
                                        <textarea class="form-control bg-light-subtle" id="description" name="product_description" rows="7" placeholder="Nhập mô tả "></textarea>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
               <div class="p-3 bg-light mb-3 rounded">
                    <div class="row justify-content-end g-2">
                         <div class="col-lg-2">
                              <a href="#!" class="btn btn-outline-secondary w-100">Create Product</a>
                         </div>
                         <div class="col-lg-2">
                              <a href="#!" class="btn btn-primary w-100">Cancel</a>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</div>

<!-- End Container Fluid -->
<script>
     document.getElementById('add-variant').addEventListener('click', function(){
          const container = document.getElementById('variants');
          const newVariant = document.createElement('div');
          newVariant.classList.add( 'mb-4','mt-3','border','rounded','px-2');

          newVariant.innerHTML =`
          <div class="row mb-4 mt-3 border rouded px-2">
                              <div class="col-lg-4">
                                   <div class="mt-3 mb-3">
                                        <h5 class="text-dark fw-medium">Size :</h5>
                                        <div class="d-flex flex-wrap gap-2" role="group" aria-label="Basic checkbox toggle button group">
                                             <input type="checkbox" class="btn-check" id="size-${container.children.length}" name="variant_size[]">
                                             <label class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center" for="size-${container.children.length}">XS</label>
                                        </div>
                                   </div>
                              </div>
                              <div class="col-lg-5">
                                   <div class="mt-3 mb-3">
                                        <h5 class="text-dark fw-medium">Màu :</h5>
                                        <div class="d-flex flex-wrap gap-2" role="group" aria-label="Basic checkbox toggle button group">
                                             <input type="checkbox" class="btn-check" id="color-${container.children.length}" name="variant_color[]">
                                             <label class="btn btn-light avatar-sm rounded d-flex justify-content-center align-items-center" for="color-${container.children.length}"> <i class="bx bxs-circle fs-18 text-dark"></i></label>
                                        </div>
                                   </div>
                              </div>
                                   <div class="col-lg-3">
                              <div class="mt-3 mb-3">
                                             <label for="variant_quantity[]" class="form-label">Số lượng</label>
                                             <input type="text" id="variant_quantity[]" name="variant_quantity[]" class="form-control" placeholder="Nhập giá khuyến mãi sản phẩm">
                                        </div>
                              </div>
                              <div class="col-lg-6">
                                        <div class="mb-2">
                                             <label for="variant_price[]" class="form-label">Giá biến thể</label>
                                             <input type="text" id="variant_price[]" name="variant_price[]" class="form-control" placeholder="Nhập giá sản phẩm">
                                        </div>
                              </div>
                              <div class="col-lg-6">
                              <div class="mb-2">
                                             <label for="variant_sale_price[]" class="form-label">Giá khuyến mại biến thể</label>
                                             <input type="text" id="variant_sale_price[]" name="variant_sale_price[]" class="form-control" placeholder="Nhập giá khuyến mãi sản phẩm">
                                        </div>
                              </div>
                              </div>
                         </div>
          
          `;
          container.appendChild(newVariant);
     })
</script>


</div>
<?php include '../views/admin/layout/footer.php'?>