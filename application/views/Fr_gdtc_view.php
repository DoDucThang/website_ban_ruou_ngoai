<!DOCTYPE html>
<html lang="en">
<?php require('Fr_header_view.php') ?>

<div id="breadcrumbs">
   <div class="container">
      <a href="<?php echo base_url() ?>Fr_trangchu" title="Trang chủ"><i class="fa fa-home"></i> Trang chủ</a>
      <i class="fa fa-angle-right"></i>

   </div>
   <!-- .container -->
</div>
<!-- .breacrumbs -->
<section id="page-body" class="container">
<!--cart-->
<div class="row">
<main id="cart" class="col-md-9">
   <!--md-9-->
   <div class="hidden-xs">

    <h4>BẠN ĐÃ ĐẶT HÀNG THÀNH CÔNG, CHÚNG TÔI SẼ KIỂM TRA VÀ GIAO HÀNG CHO BẠN!</h4>
    <a class="btn-black" href="<?php echo base_url()?>Fr_trangchu">Tiếp tục mua hàng</a>



   </div>
</main>
<!--md-9-->
      <section id="right-sidebar" class="col-md-3">
         <aside>
            <h1>Hỗ trợ khách hàng</h1>
            <div id="sidebar-support">
               <div class="title"><img src="https://www.sieuthiruoungoai.com/themes/ruoungoai/assets/img/icon-wine.png" /> Tư vấn rượu:</div>
               <p>Email: ruoungoai@sieuthiruoungoai.com</p>
               <p> <strong>
                  <a class="phone_call" href="tel:0902.385.002" title=" Hotline sieuthiruoungoai 0902.385.002 "> <b>HCM: 0902.385.002</b> </a>
                  <a class="phone_call " href="tel:0983.182.887" title=" Hotline sieuthiruoungoai 0983.182.887 "> <b> HCM: 0983.182.887</b> </a> 
                  </strong>
               </p>
               <p> <strong><a class="phone_call" href="tel:0966.998.618" title=" Hotline sieuthiruoungoai Hà Nội 0966.998.618 "> <b>Hà Nội: 0966.998.618</b> </a> 
                  (leduc@sieuthiruoungoai.com)
                  <a class="phone_call" href="tel:09.7171.6606" title=" Hotline sieuthiruoungoai Hà Nội 09.7171.6606 "> <b>Hà Nội: 09.7171.6606</b> </a>
                  </strong>
               </p>
               <p> <strong>
                  <a class="phone_call" href="tel:0979.612.820" title=" Hotline sieuthiruoungoai Đà Nẵng: 0979.612.820 "> <b>Đà Nẵng: 0979.612.820</b> </a>
                  </strong>
               </p>
               <hr>
               <div class="title"><img src="https://www.sieuthiruoungoai.com/themes/ruoungoai/assets/img/icon-gift.png" /> Hộp quà tặng Tết:</div>
               <p><strong>
                  <a class="phone_call " href="tel:0983.182.887" title=" Hotline sieuthiruoungoai 0983.182.887 "> <b> HCM: 0983.182.887</b> </a> 
                  </strong>
               </p>
               <p>Email: quatang@sieuthiruoungoai.com</p>
               <hr>
               <a href="ruou-cognac">Rượu Cognac</a>
               <a href="ruou-blended-scotch-whisky">Blended Scotch Whisky</a>
               <a href="ruou-single-malt-scotch-whisky">Rượu Single Malt</a>
               <a href="ruou-vang">Rượu Vang nhập khẩu</a>
               <a href="ruou-ngoai-khac">Rượu ngoại khác</a>
            </div>
         </aside>
         <aside id="fast-shipping">
            <img src="https://www.sieuthiruoungoai.com/themes/ruoungoai/assets/img/icon-shop-moto.png" /><strong>Giao hàng nhanh</strong>
            <div>
               TP.HCM: Từ 2 - 8 tiếng<br />
               Hà Nội: Từ 2 - 8 tiếng<br />
               Đà Nẵng: Từ 2 - 8 tiếng<br />
               <i>Các tỉnh khác giao thường</i>
            </div>
         </aside>
      </section>
   </div>
</section>
<section id="brand-logo" class="container">
   <div id="brand-logo-list" class="owl-carousel owl-theme">
   </div>
</section>
<?php require('Fr_footer_view.php') ?>

<script src="<?php echo base_url() ?>js/jquery-3.1.1.min.js"></script>
    <script src="<?php echo base_url() ?>js/jquery.mobile-events.min.js"></script>
    <script src="<?php echo base_url() ?>js/m-extend.js"></script>
    <script src="<?php echo base_url() ?>js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url() ?>js/vcms.js"></script>
    <script src="<?php echo base_url() ?>js/vs.system.js"></script>
    <script src="<?php echo base_url() ?>js/main.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


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
         <script>
        $(document).ready(function(){
            $('#banner-images').owlCarousel({
                items: 1,
                animateOut: 'fadeOut',
                animateIn: 'fadeIn',
                autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
                nav: true,
                navText:['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>']
            });
        
            $('#hot-deal-list').owlCarousel({
                items: 1,
                responsive: {
                    320: { items: 2 },
                    568: { items: 3 },
                    768: { items: 4 },
                    813: { items: 1 }
                },
                autoplay: true,
                autoplayTimeout: 5000,
                autoplayHoverPause: true,
                nav: true,
                navText:['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
                dots: false
            });
        
            $('#top-sale-products').owlCarousel({
                items: 5,
                responsive: {
                    320: { items: 2 },
                    568: { items: 3 },
                    768: { items: 4 },
                    813: { items: 5 }
                },
                autoplay: true,
                autoplayTimeout: 5000,
                autoplayHoverPause: true,
                nav: true,
                navText:['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
                dots: false
            });
        
            $('.category-slide').owlCarousel({
                items: 1,
                nav: true,
                navText:['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
                dots: false
            });
        });
    </script>
    <!-- 
<script type="text/javascript">
  $(document).ready(function(){
    <?php for ($i = 1; $i < 20; $i++) { ?>
  $("#quantity<?php echo $i; ?>").change(function(){
    var $name = $(this).attr('name');
    var $qty = $(this).val();
    $.get("<?php echo base_url() ?>cart/update",{name:$name,qty:$qty},function(data){
    if(data =='ok')
    {
      location.reload();
    } else {
      alert('cap nhat loi');
    }
    
    });
    
    
  });
<?php } ?>
});
  
</script> -->

    
</body>
  </html>