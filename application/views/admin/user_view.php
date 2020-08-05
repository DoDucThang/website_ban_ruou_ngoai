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
                <h4 class="card-title"> DANH SÁCH TÀI KHOẢN</h4>
              </div>
              <div class="card-body" >
                <div class="table-responsive" >
                  <table class="table" >
                    <thead class=" text-primary">
                      <th>
                        Mã tài khoản
                      </th>
                      <th>
                        Tên tài khoản
                      </th>
                       <th>
                        Mật khẩu
                      </th>
                      <th>
                        Tên khách hàng
                      </th>
                      <th>
                        Mail
                      </th>
                      <th>
                        Số điện thoại
                      </th>
                      <th>
                        Ngày tạo
                      </th>
<!--                        <th>
                    CHỨC NĂNG
                                         </th>   -->                   
                    </thead>
                    <tbody>
                      <?php foreach ($datacontroller1  as $value): ?>
                        
          
                      <tr>
                        <td>
                          <?= $value['userid'] ?>
                        </td>
                        <td>
                          <?= $value['username'] ?>
                        </td>
                        <td>
                          <?= $value['pass'] ?>
                        </td>
                        <td>
                          <?= $value['cusname'] ?>                         
                        </td>
                         <td>
                          <?= $value['mail'] ?>
                        </td>
                        <td>
                          <?= $value['phone'] ?>
                        </td>
                        <td>
                          <?= $value['created'] ?>                         
                        </td>                       
<!--                         <td>
  <a class="btn btn-danger" href="<?php echo base_url() ?>Ad_user/deleteacc/<?= $value['userid'] ?>"><i class="fa fa-remove"></i></a>

</td> -->
                        
                      </tr>

                      <?php endforeach ?>
                          
                    </tbody>
                  </table>
                </div>
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
