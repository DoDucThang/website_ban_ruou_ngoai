
<!DOCTYPE html>
<html lang="en">
<?php require('Fr_header_view.php') ?>
<div id="breadcrumbs">
   <div class="container">
      <a href="<?php echo base_url() ?>Fr_trangchu/" title="Trang chủ"><i class="fa fa-home"></i> Trang chủ</a>
      <i class="fa fa-angle-right"></i>
      Rượu Vang nhập khẩu
   </div>
   <!-- .container -->
</div>
<!-- .breacrumbs -->
<section id="page-body" class="container">
   <div class="row">
      <main id="product-detail" class="col-md-9">
         <div class="block-title">
            <h2><a href="ruou-vang">Rượu Vang nhập khẩu</a></h2>
            <div>&nbsp;</div>
         </div>
         <?php foreach ($wine as $value): ?>
         <div class="row">
            <div id="product-detail-images" class="col-xs-6">
               <img class="img-zoom img-responsive" src="<?= $value['img'] ?>">
            </div>
            <div id="product-detail-info" class="col-xs-6">
               <h1><?= $value['wname'] ?></h1><br>
               <div class="price">
                 Giá khuyến mãi: <?=  number_format($value['discount']) ?> đ
               </div><br>
                <div class="price">
                 Giá gốc: <strike><?=  number_format($value['price']) ?> đ</strike>
               </div>

               <!-- rating here -->
               <div class="clearfix"></div>
               <div id="order-box">
                  <form action="<?php echo base_url() ?>Fr_giohang/add/<?php echo $value['wid']; ?>" method="post">
                     <input type="hidden" name="product_id" value="1881" />
                     <label>Số lượng
                     <input type="number" value="1"  min="1" name="quantity"></label>
                     <button type="btn btn-order"><i class="fa fa-location-arrow"></i> Đặt hàng</button>
                  </form>

                  <p>Báo giá sỉ số lượng lớn nhiều ưu đãi <a class="btn-whole-sale" href="#">tại đây</a>!</p>
               </div>
               <div id="delivery-box">
                  Giao hàng toàn quốc. Miễn phí vận chuyển.
               </div>
               <div class="social-share">
                  <!-- Go to www.addthis.com/dashboard to customize your tools -->
                  <div class="addthis_inline_share_toolbox"></div>
               </div>
            </div>
         </div>
         <?php endforeach ?>

         <div class="col-md-12">
             <?php foreach ($wine as $value): ?>
            <div class="row">
               <div class="margin-top-30 block-title">
                  <h3>Chi tiết sản phẩm</h3>
                  <div>&nbsp;</div>
               </div>
               <p><?= $value['info'] ?></p>
               <div class="content"></div>
            </div>
                <?php endforeach ?>
            <div class="row">
               <div class="margin-top-30 block-title">
                  <h3>Sản phẩm cùng loại</h3>
                  <div>&nbsp;</div>
               </div>
            <?php foreach ($winecid as $value): ?>
               <div class="product-item-box col-sm-3 col-xs-6">
                  <div class="product-item">
                     <a title="<?= $value['wname'] ?>" href="<?php echo base_url() ?>Fr_locsanpham/load/<?php echo $value['wid']; ?>">
                        <img class="img-responsive" src="<?= $value['img'] ?>" />
                        <strong><?= $value['wname'] ?></strong>
                        <ul>
                           <li><?=  number_format($value['discount']) ?> đ
                           </li>
                           <li><?=  number_format($value['price']) ?> đ
                           </li>
                        </ul>
                     </a>
                     <div class="view-now">
                        <a title="<?= $value['wname'] ?>" href="<?php echo base_url() ?>Fr_locsanpham/load/<?php echo $value['wid']; ?>">Xem ngay</a>
                     </div>
                  </div>
               </div>
            <?php endforeach ?>
            </div>

            <div class="fb-comments" data-width="100%" data-href="https://www.sieuthiruoungoai.com/ruou-vang-do-yellow-diamond-butterfly-3000ml" data-numposts="5"></div>
         </div>
      </main>
      <section id="right-sidebar" class="col-md-3">
         <aside>
            <h1>Hỗ trợ khách hàng</h1>
            <div id="sidebar-support">
               <div class="title"><img src="https://www.sieuthiruoungoai.com/themes/ruoungoai/assets/img/icon-wine.png" /> Tư vấn rượu:</div>
               <p>Email: ruoungoai@ttwine.com</p>
               <p> <strong>
                  <a class="phone_call" href="tel:0902.385.002" title=" Hotline sieuthiruoungoai 0902.385.002 "> <b>HCM: 0902.385.002</b> </a>
                  <a class="phone_call " href="tel:0983.182.887" title=" Hotline sieuthiruoungoai 0983.182.887 "> <b> HCM: 0983.182.887</b> </a> 
                  </strong>
               </p>
               <p> <strong><a class="phone_call" href="tel:0966.998.618" title=" Hotline sieuthiruoungoai Hà Nội 0966.998.618 "> <b>Hà Nội: 0966.998.618</b> </a> 
                  (contact@ttwine.com)
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
               <p>Email: quatang@ttwine.com</p>
               <hr>
               <a href="<?php echo base_url() ?>Fr_locsanpham/load_cognac">Rượu Cognac</a>
               <a href="<?php echo base_url() ?>Fr_locsanpham/load_whisky">Blended Scotch Whisky</a>
               <a href="<?php echo base_url() ?>Fr_locsanpham/load_singlemalt">Rượu Single Malt</a>
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