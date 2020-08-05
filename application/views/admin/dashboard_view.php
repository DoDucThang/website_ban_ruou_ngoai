<?php require('ad_header_view.php') ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Doanh thu (Ngày)</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo number_format($ngay) ?> đ</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Doanh thu (Tháng)</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo number_format($thang) ?> đ</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tổng doanh thu</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo number_format($sum) ?> đ</div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 100%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Tổng số tài khoản khách hàng</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $amount_user ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Doanh thu theo từng tháng</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-area">
                    <canvas id="my_AreaChart"></canvas>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pie Chart -->
            <div class="col-xl-4 col-lg-5">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Thống kê các trạng thái của đơn hàng</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Dropdown Header:</div>
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-pie pt-4 pb-2">
                    <canvas id="my_PieChart"></canvas>
                  </div>
                  <div class="mt-4 text-center small">
                    <span class="mr-2">
                      <i class="fas fa-circle text-primary"></i> Đang xử lý
                    </span>
                    <span class="mr-2">
                      <i class="fas fa-circle text-success"></i> Đang giao hàng
                    </span>
                  </div>
                  <div class="mt-4 text-center small">
                    <span class="mr-2">
                      <i class="fas fa-circle text-info"></i> Đã nhận hàng
                    </span>
                    <span class="mr-2">
                      <i class="fas fa-circle text-danger "></i> Hủy
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Content Column -->
            <div class="col-lg-6 mb-4">

              <!-- Project Card Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Thống kê số lượng rượu theo Loại rượu đã bán được: (<?php echo $tongruou ?> sản phẩm)</h6>
                </div>
                <div class="card-body">
                   <?php foreach ($thongke  as $value): ?>  
                  <h4 class="small font-weight-bold"><?= $value['cname'] ?> <span class="float-right"><?= $value['sl'] ?></span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: <?=($value['sl'] /$tongruou)*100 ?>%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                   <?php endforeach ?>
                </div>

<!--                  <div class="card-body">
 <h4 class="small font-weight-bold">Server Migration <span class="float-right"><?php echo $stt0 ?>%</span></h4>
 <div class="progress mb-4">
   <div class="progress-bar bg-danger" role="progressbar" style="width: <?php echo $stt0 ?>%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
 </div>
 <h4 class="small font-weight-bold">Sales Tracking <span class="float-right">40%</span></h4>
 <div class="progress mb-4">
   <div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
 </div>
 <h4 class="small font-weight-bold">Customer Database <span class="float-right">60%</span></h4>
 <div class="progress mb-4">
   <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
 </div>
 <h4 class="small font-weight-bold">Payout Details <span class="float-right">80%</span></h4>
 <div class="progress mb-4">
   <div class="progress-bar bg-info" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
 </div>
 <h4 class="small font-weight-bold">Account Setup <span class="float-right">Complete!</span></h4>
 <div class="progress">
   <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
 </div>
                </div> -->
              </div>

              <!-- Color System -->
<!--               <div class="row">
  <div class="col-lg-6 mb-4">
    <div class="card bg-primary text-white shadow">
      <div class="card-body">
        Primary
        <div class="text-white-50 small">#4e73df</div>
      </div>
    </div>
  </div>
  <div class="col-lg-6 mb-4">
    <div class="card bg-success text-white shadow">
      <div class="card-body">
        Success
        <div class="text-white-50 small">#1cc88a</div>
      </div>
    </div>
  </div>
  <div class="col-lg-6 mb-4">
    <div class="card bg-info text-white shadow">
      <div class="card-body">
        Info
        <div class="text-white-50 small">#36b9cc</div>
      </div>
    </div>
  </div>
  <div class="col-lg-6 mb-4">
    <div class="card bg-warning text-white shadow">
      <div class="card-body">
        Warning
        <div class="text-white-50 small">#f6c23e</div>
      </div>
    </div>
  </div>
  <div class="col-lg-6 mb-4">
    <div class="card bg-danger text-white shadow">
      <div class="card-body">
        Danger
        <div class="text-white-50 small">#e74a3b</div>
      </div>
    </div>
  </div>
  <div class="col-lg-6 mb-4">
    <div class="card bg-secondary text-white shadow">
      <div class="card-body">
        Secondary
        <div class="text-white-50 small">#858796</div>
      </div>
    </div>
  </div>
</div> -->

            </div>

            <div class="col-lg-6 mb-4">

              <!-- Illustrations -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Khách hàng thân thiết</h6>
                </div>
                <div class="card-body">
                   <table class="table" >
                    <thead class=" text-danger">
                      <th>STT</th>
                      <th>
                        Tên khách hàng
                      </th>
                      <th>
                        Tổng tiền đã mua sản phẩm
                      </th>
                    </thead>
                    <tbody>
                    <?php $i=1 ?>
                      <?php foreach ($dtkh  as $value): ?>  
                      <tr>
                        <td><?php echo $i++ ?></td>
                        <td>
                          <?= $value['cusname'] ?>
                        </td>
                        <td>
                          <?= number_format($value['tongtien']) ?> đ
                        </td>
                        
                      </tr>

                      <?php endforeach ?>
                          
                    </tbody>
                  </table>
                </div>
              </div>

              <!-- Approach -->
<!--               <div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Cần nhập hàng</h6>
  </div>
  <div class="card-body">
      <table class="table" >
      <thead class=" text-primary">
        <th>STT</th>
        <th>
          Mã rượu
        </th>
        <th>
          Tên rượu
        </th>
       <th>
          Hình ảnh
        </th>
      </thead>
      <tbody>
      <?php $i=1 ?>
        <?php foreach ($nhaphang  as $value): ?>  
        <tr>
          <td><?php echo $i++ ?></td>
          <td>
            <?= $value['wid'] ?>
          </td>
          <td>
            <?= $value['wname'] ?> đ
          </td>
          <td>
            <div style="width: 150px" >
               <img src="<?= $value['img'] ?>"  class="img-responsive" style="width: 120px; height: 100px">
           </div>
          </td>
          
        </tr>

        <?php endforeach ?>
            
      </tbody>
    </table>
  </div>
</div> -->

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

  <!-- Page level plugins -->
  <script src="<?php echo base_url() ?>admin/vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo base_url() ?>admin/js/demo/chart-area-demo.js"></script>
  <script src="<?php echo base_url() ?>admin/js/demo/chart-pie-demo.js"></script>


<script>
  var ctx = document.getElementById("my_AreaChart");
var myLineChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: ["Tháng 1", "Tháng 2", "Tháng 3", "Tháng 4", "Tháng 5", "Tháng 6", "Tháng 7", "Tháng 8", "Tháng 9", "Tháng 10", "Tháng 11", "Tháng 12"],
    datasets: [{
      label: "Doanh thu: ",
      lineTension: 0.3,
      backgroundColor: "rgba(78, 115, 223, 0.05)",
      borderColor: "rgba(78, 115, 223, 1)",
      pointRadius: 3,
      pointBackgroundColor: "rgba(78, 115, 223, 1)",
      pointBorderColor: "rgba(78, 115, 223, 1)",
      pointHoverRadius: 3,
      pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
      pointHoverBorderColor: "rgba(78, 115, 223, 1)",
      pointHitRadius: 10,
      pointBorderWidth: 2,
      data: [<?php echo $thang1 ?>, <?php echo $thang2 ?>, <?php echo $thang3 ?>, <?php echo $thang4 ?>, <?php echo $thang5 ?>, <?php echo $thang6 ?>, <?php echo $thang7 ?>, <?php echo $thang8 ?>, <?php echo $thang9 ?>, <?php echo $thang10 ?>, <?php echo $thang11 ?>, <?php echo $thang12 ?>],
    }],
  },
  options: {
    maintainAspectRatio: false,
    layout: {
      padding: {
        left: 10,
        right: 25,
        top: 25,
        bottom: 0
      }
    },
    scales: {
      xAxes: [{
        time: {
          unit: 'date'
        },
        gridLines: {
          display: false,
          drawBorder: false
        },
        ticks: {
          maxTicksLimit: 7
        }
      }],
      yAxes: [{
        ticks: {
          maxTicksLimit: 5,
          padding: 10,
          // Include a dollar sign in the ticks
          callback: function(value, index, values) {
            return  number_format(value) +' VNĐ';
          }
        },
        gridLines: {
          color: "rgb(234, 236, 244)",
          zeroLineColor: "rgb(234, 236, 244)",
          drawBorder: false,
          borderDash: [2],
          zeroLineBorderDash: [2]
        }
      }],
    },
    legend: {
      display: false
    },
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      titleMarginBottom: 10,
      titleFontColor: '#6e707e',
      titleFontSize: 14,
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      intersect: false,
      mode: 'index',
      caretPadding: 10,
      callbacks: {
        label: function(tooltipItem, chart) {
          var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
          return datasetLabel  + number_format(tooltipItem.yLabel)+ ' VNĐ';
        }
      }
    }
  }
});

</script>

<script>
  // Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

// Pie Chart Example
var ctx = document.getElementById("my_PieChart");
var my_PieChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: ["Đang xử lý", "Đang giao hàng", "Đã nhận hàng", "Hủy"],
    datasets: [{
      data: [<?php echo $stt0 ?>, <?php echo $stt1 ?>, <?php echo $stt2 ?>,<?php echo $stt3 ?>],
      backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc','#e74a3b'],
      hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf','#c43e31'],
      hoverBorderColor: "rgba(234, 236, 244, 1)",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
    },
    legend: {
      display: false
    },
    cutoutPercentage: 80,
  },
});
</script>


</body>

</html>
