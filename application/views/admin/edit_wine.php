<?php require('ad_header_view.php') ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->

                <div class="content">
          
      
      <div class="col-md-6">
      <!--   <div class="container"> -->
        <h3 class="text-primary">Rượu</h3>
        <form action="  <?php echo base_url() ?>adminpage/Ad_wine/updatewine" method="POST" enctype=multipart/form-data >
          
          <?php foreach ($wine as $value): ?>
            
         
              <div class="form-group">
                <br>
                <label for="pwd">Tên rượu:</label>
                <input type="hidden" class="form-control" id="name" name="wid" value="<?php echo $value['wid'] ?>">
                <input type="text" class="form-control" id="winename" name="wname" value="<?php echo $value['wname'] ?>">
              </div>
              <div class="form-group">
                <label for="pwd">Giá:</label>
                <input name='price' type="text" class="form-control" id="price" value="<?php echo $value['price'] ?>">
              </div>
              <div class="form-group">
                <label for="pwd">Giá khuyến mãi:</label>
                <input name='discount' type="text" class="form-control" id="discount" value="<?php echo $value['discount'] ?>">
              </div>
              <div class="form-group">
               <label for="pwd">Mã loại rượu:</label>
                <input name='cid'  type="text" class="form-control" id="winecatid" value="<?php echo $value['cid'] ?>">
                <!-- <label for="pwd">Tên loại rượu:</label>
                            <input name='cid'  type="text" class="form-control" id="winecatid">
                              <select name="cid" id="winecatid" style="width: 515px;height: 40px" class="left" value="<?php echo $value['cid'] ?>">
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
                             </select> -->
              </div>
              <div class="form-group">
                <label for="pwd">Thông tin:</label>
                <input name='info' type="text" class="form-control" id="info" value="<?php echo $value['info'] ?>">
              </div>
              <div class="form-group">
                <label for="pwd">Thịnh hành:</label>
                <input name='trend' type="text" class="form-control" id="trend" value="<?php echo $value['trend'] ?>">
              </div>
              <div class="form-group">
                <label for="pwd">Còn hàng:</label>
                <input name='avail' type="text" class="form-control" id="avail" value="<?php echo $value['avail'] ?>">
              </div>
              <div class="form-group">
                 <label for="pwd">Hình ảnh:</label>
                  <div class="custom-file">
                     <input type="hidden" class="form-control" id="name" name="img2" value="<?php echo $value['img'] ?>">
                     <input name='img' type="file" class="custom-file-input" id="customFile" value="<?php echo $value['img'] ?>">
                     <label class="custom-file-label" for="customFile">Choose file</label>
                  </div>

          </div>
            </div>
          
            <button type="submit" class="btn btn-primary" >Lưu dữ liệu</button>
            
            <?php endforeach ?>
        </form>

      
        </div>
      </div>
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





