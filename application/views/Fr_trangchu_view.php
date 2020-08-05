
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en">
<?php require('Fr_header_view.php') ?>
<!--<![endif]-->
    
    <!-- #header -->
    <section id="banner" class="container">
        <div class="col-240 hidden-xs hidden-sm">
            <form class="" method="get" style="padding: 10px" action="<?php echo site_url('Fr_trangchu/search_price') ?>" name="search">
                    <h3>Tìm kiếm theo giá</h3>
                    <div class="form-row">
                        <label for="param_price_from"  style="width: 70px">Từ:<span class="req"></span></label>
                        <div class="form-item" style="width: 90px">
                            <select class="" name="price_from" id="price_from">
                                <?php for($i=0;$i<=50000000;$i=$i+1000000): ?>
                                <option value="<?php echo $i?>"><?php echo number_format($i) ?> đ</option>
                                <?php endfor; ?>
                            </select>
                            <div class="clearfix"></div>
                            <div class="error" id="price_from_error"></div>
                        </div>       
                    </div>
                    <div class="form-row">
                        <label for="param_price_from"  style="width: 70px">Đến:<span class="req"></span></label>
                        <div class="form-item" style="width: 90px">
                            <select class="" name="price_to" id="price_to">
                                <?php for($i=0;$i<=50000000;$i=$i+1000000): ?>
                                <option value="<?php echo $i?>"><?php echo number_format($i) ?> đ</option>
                                <?php endfor; ?>
                            </select>
                            <div class="clearfix"></div>
                            <div class="error" id="price_from_error"></div>
                        </div>
                    </div>
                    <div class="form-row">
                        <br><br>
                        <div class="form-item" style="width: 90px">
                            <input type="Submit" class="btn-wine" name="search" value="Tìm kiếm">
                            <div class="clearfix"></div>
                        </div>
                    </div>
            </form>
        </div>
        <div class="col-right-240">
            <div id="banner-images" class="owl-theme owl-carousel">
                <a href="#"><img src="<?php echo base_url() ?>Fileupload/b_1920x1080.jpg" alt="" /></a>
                <a href="#"><img src="<?php echo base_url() ?>Fileupload/c_1920x1080.jpg" alt="" /></a>
                <a href="#"><img src="<?php echo base_url() ?>Fileupload/d_1920x1080.jpg" alt="" /></a>
                <a href="#"><img src="<?php echo base_url() ?>Fileupload/e_1920x1080.jpg" alt="" /></a>
                <a href="#"><img src="<?php echo base_url() ?>Fileupload/f_1920x1080.jpg" alt="" /></a>
                <a href="#"><img src="<?php echo base_url() ?>Fileupload/g_1920x1080.jpg" alt="" /></a>
                <a href="#"><img src="<?php echo base_url() ?>Fileupload/h_1920x1080.jpg" alt="" /></a>

            </div>
            <div id="banner-hot-deal">
                <h3>Hot deal</h3>
                <div id="hot-deal-list" class="owl-theme owl-carousel">
                    <?php foreach ($datacontroller2 as $value): ?>
                    <div class="product-item-box ">
                        <div class="product-item">
                            <a title="<?= $value['wname'] ?>" href="<?php echo base_url() ?>Fr_locsanpham/load/<?php echo $value['wid']; ?>">
                                <img class="img-responsive" src="<?= $value['img'] ?>" />
                                <strong><?= $value['wname'] ?></strong>
                                <ul>
                                    <li><?= number_format($value['discount']) ?> đ
                                    </li>
                                    <li><?= number_format($value['price']) ?> đ</li>
                                </ul>
                                <div class="sale">
                                    DEAL
                                </div>
                            </a>
                            <div class="view-now">
                                <a title="<?= $value['wname'] ?>" href="<?php echo base_url() ?>Fr_locsanpham/load/<?php echo $value['wid']; ?>">Xem ngay</a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </section>
    <section id="home-top-sale" class="container">
        <div class="block-title">
            <h4><a href="<?php echo base_url() ?>Fr_locsanpham/load_banchay">Sản phẩm bán chạy </a></h4>
            <div><a href="<?php echo base_url() ?>Fr_locsanpham/load_banchay">Xem tất cả <i class="fa fa-angle-right"></i></a></div>
        </div>
        <div id="top-sale-products" class="owl-carousel owl-theme">
            <?php foreach ($datacontroller1 as $value): ?>
            <div class="product-item-box ">
                <div class="product-item">
                    <a title="<?= $value['wname'] ?>" href="<?php echo base_url() ?>Fr_locsanpham/load/<?php echo $value['wid']; ?>">
                        <img class="img-responsive" src="<?= $value['img'] ?>" />
                        <strong><?= $value['wname'] ?></strong>
                        <ul>
                            <li><?= number_format($value['discount']) ?> đ
                            </li>
                            <li><?= number_format($value['price']) ?> đ
                        </ul>
                        <div class="sale">
                                    HOT
                                </div>
                    </a>
                    <div class="view-now">
                        <a title="<?= $value['wname'] ?>" href="<?php echo base_url() ?>Fr_locsanpham/load/<?php echo $value['wid']; ?>">Xem ngay</a>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </section>
    <section id="home-product-categories">
        <div class="container">
            <div class="block-title">
                &nbsp;
                <h4><a href="<?php echo base_url() ?>Fr_locsanpham/load_cognac">Rượu Cognac </a></h4>
                <div><a href="<?php echo base_url() ?>Fr_locsanpham/load_cognac">Xem tất cả <i class="fa fa-angle-right"></i></a></div>
            </div>
            <div class="block-content">
                <ul class="categories hidden-xs">
                    <li><label><a href="<?php echo base_url() ?>Fr_locsanpham/load_chabot">Chabot Armagnac</a></label></li>
                    <li><label><a href="<?php echo base_url() ?>Fr_locsanpham/load_bisquit">Rượu Bisquit</a></label></li>
                    <li><label><a href="<?php echo base_url() ?>Fr_locsanpham/load_hennessy">Rượu Hennessy</a></label></li>
                    <li><label><a href="<?php echo base_url() ?>Fr_locsanpham/load_remy">Rượu Remy Martin</a></label></li>
                </ul>
                <div class="hidden-sm hidden-xs category-slide owl-carousel owl-theme">
                    <img src="<?php echo base_url() ?>Fileupload/slide_chabot.jpg" alt="" />
                    <img src="<?php echo base_url() ?>Fileupload/slide_bisquit.jpg" alt="" />
                    <img src="<?php echo base_url() ?>Fileupload/slide_hennessy.jpg" alt="" />
                    <img src="<?php echo base_url() ?>Fileupload/slide_remy.jpg" alt="" />
                </div>
                <div class="product-list">
                   <?php foreach ($cognac as $value): ?> 
                    <div class="product-item-box col-md-4 col-sm-6 col-xs-4">
                        <div class="product-item">
                            <a title="<?= $value['wname'] ?>" href="<?php echo base_url() ?>Fr_locsanpham/load/<?php echo $value['wid']; ?>">
                                <img class="img-responsive" src="<?= $value['img'] ?>" />
                                <strong><?= $value['wname'] ?></strong>
                                <ul>
                                    <li><?= number_format($value['discount']) ?> đ
                                    </li>
                                    <li><?= number_format($value['price']) ?> đ
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
                <div class="clearfix"></div>
            </div>
            <div class="block-title">
                &nbsp;
                <h4><a href="<?php echo base_url() ?>Fr_locsanpham/load_whisky">Blended Scotch Whisky </a></h4>
                <div><a href="<?php echo base_url() ?>Fr_locsanpham/load_whisky">Xem tất cả <i class="fa fa-angle-right"></i></a></div>
            </div>
            <div class="block-content">
                <ul class="categories hidden-xs">
                    <li><label><a href="<?php echo base_url() ?>Fr_locsanpham/load_chivas">Rượu Chivas</a></label></li>
                    <li><label><a href="<?php echo base_url() ?>Fr_locsanpham/load_ballantine">Rượu Ballantine&#039;s</a></label></li>
                    <li><label><a href="<?php echo base_url() ?>Fr_locsanpham/load_jw">Johnnie Walker</a></label></li>
                </ul>
                <div class="hidden-sm hidden-xs category-slide owl-carousel owl-theme">
                    <img src="<?php echo base_url() ?>Fileupload/slide_chivas.jpg" alt="" />
                    <img src="<?php echo base_url() ?>Fileupload/slide_ballantine.jpg" alt="" />
                    <img src="<?php echo base_url() ?>Fileupload/slide_johnniewalker.jpg" alt="" />
                </div>
                <div class="product-list">
                    <?php foreach ($whisky as $value): ?>
                    <div class="product-item-box col-md-4 col-sm-6 col-xs-4">
                        <div class="product-item">
                            <a title="<?= $value['wname'] ?>" href="<?php echo base_url() ?>Fr_locsanpham/load/<?php echo $value['wid']; ?>">
                                <img class="img-responsive" src="<?= $value['img'] ?>" />
                                <strong><?= $value['wname'] ?></strong>
                                <ul>
                                    <li><?= number_format($value['discount']) ?> đ
                                    </li>
                                    <li><?= number_format($value['price']) ?> đ
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
                <div class="clearfix"></div>
            </div>
            <div class="block-title">
                &nbsp;
                <h4><a href="<?php echo base_url() ?>Fr_locsanpham/load_singlemalt">Rượu Single Malt </a></h4>
                <div><a href="<?php echo base_url() ?>Fr_locsanpham/load_singlemalt">Xem tất cả <i class="fa fa-angle-right"></i></a></div>
            </div>
            <div class="block-content">
                <ul class="categories hidden-xs">
                    <li><label><a href="<?php echo base_url() ?>Fr_locsanpham/load_macallan">Rượu Macallan</a></label></li>
                    <li><label><a href="<?php echo base_url() ?>Fr_locsanpham/load_glenlivet">The Glenlivet</a></label></li>
                    <li><label><a href="<?php echo base_url() ?>Fr_locsanpham/load_singleton">Rượu Singleton</a></label></li>                    
                </ul>
                <div class="hidden-sm hidden-xs category-slide owl-carousel owl-theme">
                    <img src="<?php echo base_url() ?>Fileupload/slide_macallan.jpg" alt="" />
                    <img src="<?php echo base_url() ?>Fileupload/slide_glenlivet.jpg" alt="" />
                    <img src="<?php echo base_url() ?>Fileupload/slide_singleton.jpg" alt="" />
                </div>
                <div class="product-list">
                    <?php foreach ($single as $value): ?>
                    <div class="product-item-box col-md-4 col-sm-6 col-xs-4">
                        <div class="product-item">
                            <a title="<?= $value['wname'] ?>" href="<?php echo base_url() ?>Fr_locsanpham/load/<?php echo $value['wid']; ?>">
                                <img class="img-responsive" src="<?= $value['img'] ?>" />
                                <strong><?= $value['wname'] ?></strong>
                                <ul>
                                    <li><?= number_format($value['discount']) ?> đ
                                    </li>
                                    <li><?= number_format($value['price']) ?> đ
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
                <div class="clearfix"></div>
            </div>
            <div class="block-title">
                &nbsp;
                <h4><a href="<?php echo base_url() ?>Fr_locsanpham/load_brandy">Rượu Brandy </a></h4>
                <div><a href="<?php echo base_url() ?>Fr_locsanpham/load_brandy">Xem tất cả <i class="fa fa-angle-right"></i></a></div>
            </div>
            <div class="block-content">
                <ul class="categories hidden-xs">

                </ul>
                <div class="hidden-sm hidden-xs category-slide owl-carousel owl-theme">
                    <img src="<?php echo base_url() ?>Fileupload/slide_brandy1.jpg" alt="" />
                    <img src="<?php echo base_url() ?>Fileupload/slide_brandy2.jpg" alt="" />
                    <img src="<?php echo base_url() ?>Fileupload/slide_brandy3.jpg" alt="" />
                </div>
                <div class="product-list">
                    <?php foreach ($brandy as $value): ?>
                    <div class="product-item-box col-md-4 col-sm-6 col-xs-4">
                        <div class="product-item">
                            <a title="<?= $value['wname'] ?>" href="<?php echo base_url() ?>Fr_locsanpham/load/<?php echo $value['wid']; ?>">
                                <img class="img-responsive" src="<?= $value['img'] ?>" />
                                <strong><?= $value['wname'] ?></strong>
                                <ul>
                                    <li><?= number_format($value['discount']) ?> đ
                                    </li>
                                    <li><?= number_format($value['price']) ?> đ
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
                <div class="clearfix"></div>
            </div>
            
            <div class="block-title">
                &nbsp;
                <h4><a href="<?php echo base_url() ?>Fr_locsanpham/load_vodka">Rượu Vodka </a></h4>
                <div><a href="<?php echo base_url() ?>Fr_locsanpham/load_vodka">Xem tất cả <i class="fa fa-angle-right"></i></a></div>
            </div>
            <div class="block-content">
                <ul class="categories hidden-xs">

                </ul>
                <div class="hidden-sm hidden-xs category-slide owl-carousel owl-theme">
                    <img src="<?php echo base_url() ?>Fileupload/slide_vodka1.jpg" alt="" />
                    <img src="<?php echo base_url() ?>Fileupload/slide_vodka2.jpg" alt="" />
                    <img src="<?php echo base_url() ?>Fileupload/slide_vodka3.jpg" alt="" />
                </div>
                <div class="product-list">
                    <?php foreach ($vodka as $value): ?>
                    <div class="product-item-box col-md-4 col-sm-6 col-xs-4">
                        <div class="product-item">
                            <a title="<?= $value['wname'] ?>" href="<?php echo base_url() ?>Fr_locsanpham/load/<?php echo $value['wid']; ?>">
                                <img class="img-responsive" src="<?= $value['img'] ?>" />
                                <strong><?= $value['wname'] ?></strong>
                                <ul>
                                    <li><?= number_format($value['discount']) ?> đ
                                    </li>
                                    <li><?= number_format($value['price']) ?> đ
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
                <div class="clearfix"></div>
            </div>
           
            <div class="block-title">
                &nbsp;
                <h4><a href="<?php echo base_url() ?>Fr_locsanpham/load_quatang">Giỏ quà tặng</a></h4>
                <div><a href="<?php echo base_url() ?>Fr_locsanpham/load_quatang">Xem tất cả <i class="fa fa-angle-right"></i></a></div>
            </div>
            <div class="block-content">
                 <ul class="categories hidden-xs">

                </ul>
                <div class="hidden-sm hidden-xs category-slide owl-carousel owl-theme">
                    <img src="<?php echo base_url() ?>Fileupload/slide_quatang.jpg" alt="" />
                </div>
                <div class="product-list">
                   <?php foreach ($quatang as $value): ?>
                    <div class="product-item-box col-md-4 col-sm-6 col-xs-4">
                        <div class="product-item">
                            <a title="<?= $value['wname'] ?>" href="<?php echo base_url() ?>Fr_locsanpham/load/<?php echo $value['wid']; ?>">
                                <img class="img-responsive" src="<?= $value['img'] ?>" />
                                <strong><?= $value['wname'] ?></strong>
                                <ul>
                                    <li><?= number_format($value['discount']) ?> đ
                                    </li>
                                    <li><?= number_format($value['price']) ?> đ
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
                <div class="clearfix"></div>
            </div>
        </div>
    </section>
    <section id="brand-logo" class="container">
        <div id="brand-logo-list" class="owl-carousel owl-theme">
        </div>
    </section>
    <?php
$this->load->view('Fr_footer_view'); 
 ?>
    <!-- .footer -->
    



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
  
</body>
</html>
