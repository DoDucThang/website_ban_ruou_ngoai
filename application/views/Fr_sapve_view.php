<!DOCTYPE html>
<html lang="en">
<?php require('Fr_header_view.php') ?>
               <div id="breadcrumbs">
                  <div class="container">
                     <a href="<?php echo base_url() ?>Fr_trangchu/" title="Trang chủ"><i class="fa fa-home"></i> Trang chủ</a>
                     <i class="fa fa-angle-right"></i>
                     Lọc sản phẩm
                  </div>
                  <!-- .container -->
               </div>
               <!-- .breacrumbs -->
               <section id="page-body" class="container">
                  <div class="row">
                    <section id="left-sidebar" class="col-sm-2">

                    </section>
                     <main id="product-list" class="col-sm-9">
                        <div class="block-title">
                           &nbsp;
                           <h1>Lọc sản phẩm</h1>
                           <div>
                              <select  class="select_location" id="sort_box">
                                 <option value="<?php echo base_url() ?>Fr_locsanpham/<?php echo $controller ?>">Mặc định</option>
                                 <option value="<?php echo base_url() ?>Fr_locsanpham/<?php echo $controller ?>_asc">Giá từ thấp đến cao</option>
                                 <option value="<?php echo base_url() ?>Fr_locsanpham/<?php echo $controller ?>_desc">Giá từ cao đến thấp</option>
                              </select>
                           </div>
                        </div>
                         <?php foreach ($list as $value): ?>
                        <div class="product-item-box col-lg-3 col-xs-4">
                           <div class="product-item">
                              <a title="<?= $value['wname'] ?>" href="<?php echo base_url() ?>Fr_trangchu/load/<?php echo $value['wid']; ?>">
                                 <img class="img-responsive" src="<?= $value['img'] ?>" />
                                 <strong><?= $value['wname'] ?></strong>
                                 <ul>
<!--                                     <li><?=  number_format($value['discount']) ?> đ
</li> -->
                                    <li><?=  number_format($value['price']) ?> đ
                                    </li>
                                 </ul>
                              </a>
                              <div class="view-now">
                                 <a title="<?= $value['wname'] ?>" href="<?php echo base_url() ?>Fr_locsanpham/load/<?php echo $value['wid']; ?>">Xem ngay</a>
                              </div>
                              <div class="out-of-stock">
                                Hàng sắp về 
                            </div>
                           </div>
                        </div>
                        <?php endforeach ?>
<!--                         <nav class="pagination col-md-12">
   <a  class="active" href="https://www.sieuthiruoungoai.com/ruou-ngoai-sale-off" title="Trang 1">
   1
   </a>
   <a  href="https://www.sieuthiruoungoai.com/ruou-ngoai-sale-off?page=2" title="Trang 2">
   2
   </a>
</nav> -->
                        <div class="clearfix"></div>
                     </main>
                  </div>
               </section>

<?php
$this->load->view('Fr_footer_view'); 
 ?>

               <style type="text/css">
                  .fix_tel {
                  position: fixed;
                  bottom: 100px;
                  right: 20px;
                  z-index: 555;
                  }
               </style>
               <script src="https://www.sieuthiruoungoai.com/themes/ruoungoai/assets/js/jquery-3.1.1.min.js"></script>
               <script src="https://www.sieuthiruoungoai.com/themes/ruoungoai/assets/js/m-extend/jquery.mobile-events.min.js"></script>
               <script src="https://www.sieuthiruoungoai.com/themes/ruoungoai/assets/js/m-extend/m-extend.js"></script>
               <script src="https://www.sieuthiruoungoai.com/themes/ruoungoai/assets/js/owlcarousel/owl.carousel.min.js"></script>
               <script src="https://www.sieuthiruoungoai.com/themes/global/js/vcms.js"></script>
               <script src="https://www.sieuthiruoungoai.com/themes/global/js/vs.system.js"></script>
               <script src="https://www.sieuthiruoungoai.com/themes/ruoungoai/assets/js/main.js"></script>
               <script>
                  var isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|OperaMini/i.test(navigator.userAgent);
                  var isDesktop = isMobile ? false : true;
                  $(document).ready(function() {
                      $(window).scroll(function(){
                        if( $(this).scrollTop() >= 100 ) {
                          $('#menu').addClass('fixed');
                        } else {
                          $('#menu').removeClass('fixed');
                        }
                      });
                      $(window).scroll(function(){
                        if( $(this).scrollTop() >= 100 ) {
                          $('#top-header').addClass('fixedtop');
                        } else {
                          $('#top-header').removeClass('fixedtop');
                        }
                      });
                      $('#brand-logo-list').owlCarousel({
                          items: 8,
                          responsive: {
                              320: { items: 2 },
                              568: { items: 4 },
                              736: { items: 5 },
                              812: { items: 6 },
                              1024: { items: 7 },
                              1199: { items: 8 }
                          },
                          autoplay: false,
                          nav: true,
                          navText:['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
                          dots: false
                      });
                      $('.btn-whole-sale').click(function(e) {
                          $('#quotation').show();
                          e.preventDefault();
                      });
                      $('#whole-sale button').click(function() {
                          $vs.hideMessage();
                          $('#quotation').show();
                          $('#contact-form-input').show();
                      });
                      $('#contact-form .box-close').click(function(){
                          $('#quotation').hide('slow');
                      });
                      $('#frm-subscribe').submit(function($e){
                          $e.preventDefault();
                          $vs.post($(this).attr('action'), {
                              data: $(this).serialize(),
                              success: function($response) {
                                  $('#subscribe-msg').text($response.message)
                                  .addClass('text-success').removeClass('text-danger').show();
                              },
                              fail: function($response) {
                                  var $errorContent = $response.errors.join('<br>');
                                  $('#subscribe-msg').html($errorContent)
                                  .addClass('text-danger').removeClass('text-success').show();
                              }
                          });
                      });
                      $('#frm-quotation').submit(function($e){
                          $vs.hideMessage();
                          $('#contact-form-input').hide();
                          $vs.showInfo('Vui lòng chờ giây lát','Đang gửi thông tin...');
                          $vs.post($(this).attr('action'), {
                              data: $(this).serialize(),
                              success: function($response) {
                                  $vs.hideMessage();
                                  $vs.showSuccess($response.message);
                              },
                              fail: function($response) {
                                  $vs.hideMessage();
                                  var $errorContent = '';
                                  $.each($response.errors, function($index, $val) {
                                      $errorContent += '<p>'+$val+'</p>';
                                  });
                                  $vs.showError($errorContent);
                                  $('#contact-form-input').show();
                              }
                          });
                          $e.preventDefault();
                      });
                  });
               </script>
               <div id="fb-root"></div>
               <script>(function(d, s, id) {
                  var js, fjs = d.getElementsByTagName(s)[0];
                  if (d.getElementById(id)) return;
                  js = d.createElement(s); js.id = id;
                  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0&appId=&autoLogAppEvents=1';
                  fjs.parentNode.insertBefore(js, fjs);
                  }(document, 'script', 'facebook-jssdk'));
               </script>
               <!-- Go to www.addthis.com/dashboard to customize your tools -->
               <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5b557c176a774088"></script>
               <!--Start of Tawk.to Script-->
               <script type="text/javascript">
                  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
                  (function(){
                  var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
                  s1.async=true;
                  s1.src="https://embed.tawk.to/54b4bc5fccb016b735cbb8de/default";
                  s1.charset='UTF-8';
                  s1.setAttribute('crossorigin','*');
                  s0.parentNode.insertBefore(s1,s0);
                  })();
               </script>
               <!--End of Tawk.to Script-->            <script src="https://www.sieuthiruoungoai.com/themes/global/js/vs.string.js"></script>
               <script src="https://www.sieuthiruoungoai.com/themes/global/js/vs.url.js"></script>
               <script>
                  $('#frm-filter input').change(function(){
                      $('#frm-filter').submit();
                  });
                  $('#left-sidebar .filter').click(function(){
                      $('#filter-bar').toggle('slow');
                  });
                  $('#sort-box').change(function(){
                      $vsURL.setParam("sort[price]", $(this).val());
                  });
               </script>
               <script>
                  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
                  
                  ga('create', "UA-17663652-6", 'auto');
                  ga('send', 'pageview');
                  
               </script>
                      <script>
          $('.select_location').on('change', function(){
             window.location = $(this).val();
});
       </script>
            </body>

         </html>