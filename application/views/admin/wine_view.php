<?php require('ad_header_view.php') ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> DANH SÁCH RƯỢU</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th style="width: 90px">
                        Mã rượu
                      </th>
                      <th>
                        Tên rượu
                      </th>
                      <th style="width: 130px">
                        Giá
                      </th>
                      <th style="width: 160px">
                        Giá khuyến mãi
                      
                      </th>
                      <th style="width: 130px">
                        Mã loại rượu
                      </th>
                      <th>
                        Hình ảnh
                      </th>
                      <th>
                        Chức năng
                      </th>
                    </thead>
                    <tbody>
                      <?php foreach ($datacontroller1  as $value): ?>
                        
          
                      <tr>
                        <td style="width: 90px">
                          <b><?= $value['wid'] ?></b>
                        </td>
                        <td>
                          <?= $value['wname'] ?>
                        </td>
                         <td style="width: 130px">
                         <strike> <?= number_format($value['price']) ?> đ </strike>
                        </td>
                         <td style="width: 160px">
                          <?= number_format($value['discount']) ?> đ
                        </td>
                         <td style="width: 130px">

                         <b> <?= $value['cid'] ?></b>
                       </div>
                        </td>
                      
                        <td>
                        <div style="width: 150px" >
                             <img src="<?= $value['img'] ?>"  class="img-responsive" style="width: 120px; height: 100px">
                         </div>
  
                        </td>
                        <td>
                           <div style="width: 120px" >
                          <a class="btn btn-danger" href="<?php echo base_url() ?>adminpage/Ad_wine/editwine/<?= $value['wid'] ?>"><i class="fa fa-pencil"></i></a>
                          <a class="btn btn-danger" href="<?php echo base_url() ?>adminpage/Ad_wine/deletewine/<?= $value['wid'] ?>"><i class="fa fa-remove"></i></a>
                          </div>
                        </td>
                        
                      </tr>
                      <?php endforeach ?>
                          
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

          
      </div>
      <div class="col-md-6">
        <h3 class="text-primary">Rượu</h3>
        <form action="<?php echo base_url() ?>adminpage/Ad_wine/insertwine" method="POST" enctype=multipart/form-data >
          <div class="form-group">
            <label for="pwd">Tên rượu:</label>
            <input name='wname' type="text" class="form-control" id="winename">
          </div>
          <div class="form-group">
            <label for="pwd">Giá:</label>
            <input name='price' type="text" class="form-control" id="price">
          </div>
          <div class="form-group">
            <label for="pwd">Giá khuyến mãi:</label>
            <input name='discount' type="text" class="form-control" id="discount">
          </div>
     
          <div class="form-group">
            <label for="pwd">Tên loại rượu:</label>
            <!-- <input name='cid'  type="text" class="form-control" id="winecatid"> -->
              <select name="cid" id="winecatid" style="width: 515px;height: 40px" class="left">
              <option value="0">Chọn loại rượu</option>
              <option value="1">Chabot Armagnac</option>
              <option value="2">Rượu Bisquit</option>
              <option value="3">Rượu Hennessy</option>
              <option value="14">Rượu Remy Martin</option>
              <option value="15">Rượu Chivas</option>
              <option value="16">Rượu Ballantine's</option>
              <option value="17">Johnnie Walker</option>
              <option value="18">Rượu Macallan</option>
              <option value="19">The Glenlivet</option>
              <option value="20">Rượu Singleton</option>
              <option value="21">Rượu Brandy</option>
              <option value="22">Rượu Vodka</option>
              <option value="23">Giỏ quà tặng</option>
              <option value="24">Rượu vang Pháp</option>
             </select>
          </div>
          <div class="form-group">
            <label for="pwd">Thông tin:</label>
            <input name='info' type="text" class="form-control" id="info">
          </div>
          <div class="form-group">
            <label for="pwd">Hình ảnh:</label>
            <div class="custom-file">
              <input name='img' type="file" class="custom-file-input" id="customFile">
              <label class="custom-file-label" for="customFile">Choose file</label>
            </div>

          </div>


          
            <button type="submit" class="btn btn-primary">Thêm mới</button>
        </form>
      </div>
<br><br><br>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> DANH SÁCH LOẠI RƯỢU</h4>
              </div>
              <div class="card-body" >
                <div class="table-responsive" >
                  <table class="table" >
                    <thead class=" text-primary">
                      <th>
                        Mã loại rượu
                      </th>
                      <th>
                        Tên loại rượu
                      </th>
                      <th>
                        Chức năng
                      </th>
                    </thead>
                    <tbody>
                      <?php foreach ($datacontroller  as $value): ?>
                        
          
                      <tr>
                        <td>
                          <?= $value['cid'] ?>
                        </td>
                        <td>
                          <?= $value['cname'] ?>
                        </td>
                        <td>
                          <a class="btn btn-danger" href="<?php echo base_url() ?>adminpage/Ad_wine/editcategory/<?= $value['cid'] ?>"><i class="fa fa-pencil"></i></a>
                          <a class="btn btn-danger" href="<?php echo base_url() ?>adminpage/Ad_wine/deletecategory/<?= $value['cid'] ?>"><i class="fa fa-remove"></i></a>

                        </td>
                        
                      </tr>

                      <?php endforeach ?>
                          
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          
      <div class="col-md-6">
        <h3 class="text-primary">Loại rượu</h3>
        <form action="  <?php echo base_url() ?>adminpage/Ad_wine/insertcategory" method="POST" >
            <div class="form-group">
            <label for="pwd">Tên loại rượu:</label>
            <input name='cname' type="text" class="form-control" id="wineid">
          </div>
          <button type="submit" class="btn btn-primary">Thêm mới</button>
          
        </form>
      </div>
      
        </div>
      </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url() ?>admin/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url() ?>admin/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url() ?>admin/js/sb-admin-2.min.js"></script>

</body>

</html>
