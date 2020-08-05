<?php require('ad_header_view.php') ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->

                <div class="content">
          
      
      <div class="col-md-6">
        <h3 class="text-primary">Đơn hàng</h3>
        <form action="  <?php echo base_url() ?>adminpage/Ad_saleorder/updateorder" method="POST" >
          
          <?php foreach ($saleorder as $value): ?>
             <div class="form-group">
            <br>
            <label for="pwd">Mã đơn hàng: <?php echo $value['soid'] ?></label>
             <input type="hidden" class="form-control" id="soid" name="soid" value="<?php echo $value['soid'] ?>">
          </div>
            <div class="form-group">
            <label for="pwd">Mã tài khoản: <?php echo $value['userid'] ?></label>
             <input type="hidden" class="form-control" id="userid" name="userid" value="<?php echo $value['userid'] ?>">
          </div>
            <div class="form-group">
            <label for="pwd">Tên khách hàng: <?php echo $value['cusname'] ?></label>
            <input type="hidden" class="form-control" id="cusname" name="cusname" value="<?php echo $value['cusname'] ?>">
          </div>
           <div class="form-group">
            <label for="pwd">Ngày đặt hàng: <?php echo $value['created'] ?></label>
            <input type="hidden" class="form-control" id="created" name="created" value="<?php echo $value['created'] ?>">
          </div>
          <div class="form-group">
            <label for="pwd">Trạng thái đơn hàng:</label>
            <input name='status' type="text" class="form-control" id="status" value="<?php echo $value['status'] ?>">
          </div>
          <div class="form-group">
            <label for="pwd">Mail:</label>
             <input name='mail' type="text" class="form-control" id="mail" value="<?php echo $value['mail'] ?>">
          </div>
          <div class="form-group">
            <label for="pwd">Địa chỉ:</label>
            <input name='address' type="text" class="form-control" id="address" value="<?php echo $value['address'] ?>">
          </div>
            <div class="form-group">
            <label for="pwd">Phương thức thanh toán: </label>
             <input name='payment' type="text" class="form-control" id="payment" value="<?php echo $value['payment'] ?>">
          </div>    
           <div class="form-group">
            <label for="pwd">Ghi chú: </label>
             <input name='note' type="text" class="form-control" id="note" value="<?php echo $value['note'] ?>">
          </div>     

          <div class="form-group">
            <label for="pwd">Số điện thoại:</label>
            <input name='phone' type="text" class="form-control" id="phone" value="<?php echo $value['phone'] ?>">
          </div>
          <div class="form-group">
            <label for="pwd">Tổng đơn hàng:</label>
            <input name='amount'  type="text" class="form-control" id="amount" value="<?php echo $value['amount'] ?>">
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

