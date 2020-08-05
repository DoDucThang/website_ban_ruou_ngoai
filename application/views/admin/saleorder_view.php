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
                <h4 class="card-title">DANH SÁCH ĐƠN HÀNG</h4>
              </div>
              <div class="card-body" >
                <div class="table-responsive" >
                  <table class="table" >
                    <thead class=" text-primary">
                      <th>
                        Mã đơn hàng
                      </th>
                      <th>
                        Mã tài khoản
                      </th>
                      <th>
                        Tên khách hàng
                      </th>
                        <th>
                        Mail
                       </th>
                       <th >
                        Địa chỉ
                      </th>
                      <th>
                        Số điện thoại
                      </th>
                      <th>
                        Tổng đơn hàng
                      </th>
                      <th>
                        PT thanh toán
                      </th>
                      <th>
                        Ghi chú
                      </th>  
                      <th>
                        Ngày đặt hàng
                      </th>
                      <th>
                        Trạng thái
                      </th>                      
                    </thead>
                    <tbody>

                      <?php foreach ($datacontroller1  as $value): ?>  
                      <tr>
                        <td>
                          <?= $value['soid'] ?>
                        </td>
                        <td>
                          <?= $value['userid'] ?>
                        </td>
                        <td>
                          <?= $value['cusname'] ?>
                        </td>
                        <td>
                          <?= $value['mail'] ?>
                        </td>
                        <td >
                          <?= $value['address'] ?>
                        </td>
                        <td>
                          <?= $value['phone'] ?>
                        </td>
                        <td>
                          <?= number_format($value['amount']) ?>
                        </td>
                        <td>
                          <?= $value['payment'] ?>
                        </td>
                        <td>
                          <?= $value['note'] ?>
                        </td>                                                
                        <td>
                          <?= $value['created'] ?>
                        </td>
                        <td>
                          <?= $value['status'] ?>
                        </td>


                        <td>
                          <a class="btn btn-danger" href="<?php echo base_url() ?>adminpage/Ad_saleorder/editorder/<?= $value['soid'] ?>"><i class="fa fa-pencil"></i></a>


                        </td>
                        
                      </tr>

                      <?php endforeach ?>
                          
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

<!-- <div class="col-md-6">
       <br><br><br>
       <h3 class="text-primary">TÀI KHOẢN</h3>
       <form action="  <?php echo base_url() ?>index.php/Ad_order_controller/insertorder" method="POST" >
         <div class="form-group">
           <label for="pwd">Tên tài khoản:</label>
           <input name='acc' type="text" class="form-control" id="acc">
         </div>
         <div class="form-group">
           <label for="pwd">Ngày đặt hàng:</label>
           <input name='date' type="text" class="form-control" id="date">
         </div>
         <div class="form-group">
           <label for="pwd">Địa chỉ:</label>
           <input name='address' type="text" class="form-control" id="address">
         </div>
         <div class="form-group">
           <label for="pwd">Số điện thoại:</label>
           <input name='phone' type="text" class="form-control" id="phone">
         </div>
         <div class="form-group">
           <label for="pwd">Tổng tiền đơn hàng:</label>
           <input name='subtotal' type="text" class="form-control" id="subtotal">
         </div>
         <div class="form-group">
           <label for="pwd">Mã giảm giá:</label>
           <input name='couponid' type="text" class="form-control" id="couponid">
         </div>
         <div class="form-group">
           <label for="pwd">Tổng tiền phải trả:</label>
           <input name='total' type="text" class="form-control" id="total">
         </div>
         <button type="submit" class="btn btn-primary">Thêm mới</button>
         
       </form>
     </div> -->
     <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> CHI TIẾT ĐƠN HÀNG</h4>
              </div>
              <div class="card-body" >
                <div class="table-responsive" >
                  <table class="table" >
                    <thead class=" text-primary">
                      <th>
                        MÃ CHI TIẾT ĐƠN HÀNG
                      </th>
                       <th>
                        MÃ ĐƠN HÀNG
                      </th>
                      <th>
                        MÃ RƯỢU
                      </th>
                      <th>
                        SỐ LƯỢNG
                      </th>
                      <th>
                        TỔNG TIỀN
                      </th>
                    </thead>
                    <tbody>
                      <?php foreach ($datacontroller  as $value): ?>
                        
          
                      <tr>
                        <td>
                          <?= $value['detailid'] ?>
                        </td>
                          <td>
                          <?= $value['soid'] ?>
                        </td>
                        
                        <td>
                          <?= $value['wid'] ?>
                        </td>
                        <td>
                          <?= $value['qty'] ?>
                        </td>
                        <td>
                          <?= number_format($value['amount']) ?> đ
                        </td>

                      </tr>

                      <?php endforeach ?>
                          
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <br><br><br><br>
          </div>
          
      
        </div>
      </div>
       </div>
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
