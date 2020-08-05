<head>
               <meta charset="utf-8">
               <meta http-equiv="X-UA-Compatible" content="IE=edge">
               <meta name="viewport" content="width=device-width, initial-scale=1">
               <title>Bootstrap eCommerce Template</title>

               <!-- Bootstrap -->

               <link href="<?php echo base_url() ?>css/bootstrap.css" rel="stylesheet">
               <link href="<?php echo base_url() ?>css/style.css" rel="stylesheet">
               <link href="<?php echo base_url() ?>css/bootstrap.min.css" rel="stylesheet"/>
               <link href="<?php echo base_url() ?>css/font-awesome.min.css" rel="stylesheet"/>
               <link href="<?php echo base_url() ?>css/m-extend.css" rel="stylesheet"/>
               <link href="<?php echo base_url() ?>css/owl.carousel.min.css" rel="stylesheet"/>
               <link href="<?php echo base_url() ?>css/owl.theme.default.min.css" rel="stylesheet"/>
               <link href="<?php echo base_url() ?>css/main.css" rel="stylesheet"/>
               <link href="<?php echo base_url() ?>css/media.css" rel="stylesheet"/>
               <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

</head>

            <body>
               <header id="header">
                  <!-- #header -->
                   <section id="top-header">
            <!--headtop-->
            <div class="container">
                <div class="row hidden-sm hidden-xs">
                    <div class="left col-md-4 ">
                        <span>Chào mừng quí khách đã ghé thăm website của chúng tôi !</span>
                    </div>
                    <div class="right col-md-8">
                        <span><i class="fa fa-phone" aria-hidden="true"></i> Hotline: <b>HCM 0983.666.888</b> | <b> Hà Nội:  0966.999.666</b> | <b>Đà Nẵng: 0979.777.999</b> </span>
                        <span><i class="fa fa-envelope" aria-hidden="true"></i> info@ttwine.com</span>
                    </div>
                </div>
                <div class="row hidden-md hidden-lg">
                    <div class="right pd-lr-5">
                        <span><i class="fa fa-phone" aria-hidden="true"></i> 
                        <a class="phone_call " href="tel:0983.182.887" title=" Hotline T&T Wine 0123.444.555 "> <b><span class="row hidden-sm hidden-xs">Hotline:</span> 0123.444.555</b> </a> 
                        <i class="fa fa-envelope hidden-sm hidden-xs" aria-hidden="true"></i> info@ttwine.com</span>
                    </div>
                </div>
            </div>
        </section>
                  <!--headtop-->
                  <section id="bottom-header">
            <!--bottom-top-->
            <div class="container">
                <!--container-->
                <div class="row">
                    <div class="col-xs-5 col-sm-3 logo-mb hidden-sm hidden-xs">
                        <!--col-md-3-->
                        <a href="<?php echo base_url() ?>Fr_trangchu"><img alt="T&T Wine" class="img-responsive" src="<?php echo base_url() ?>images/ttwine1.png"></a>
                    </div>
                    <!--col-md-3-->
                    <div id="bottom-header-right" class="col-xs-7 col-sm-9">
                        <!--col-md-9-->
                        <div id="form-search" class="col-md-7">
                            <!--form-search-->                      
                            <a class="visible-xs" href="#"><img alt="T&T Wine" class="logo-mobi img-responsive" src="<?php echo base_url() ?>images/logo-mobi.png"></a>
                            <form method="get" action="<?php echo site_url('Fr_trangchu/search') ?>">
                                <!-- <select name='category' class="hidden-sm hidden-xs">
                                    <option value="0"> Danh mục sản phẩm </option>
                                    <option value="5">Rượu Cognac</option>
                                    <option value="6">Blended Scotch Whisky</option>
                                    <option value="7">Rượu Single Malt</option>
                                    <option value="9">Rượu Brandy</option>
                                    <option value="61">Rượu Vodka</option>
                                    <option value="23">Hàng sắp về</option>
                                    <option value="24">Phụ kiện rượu</option>
                                </select> -->
                                <input value="" type="text" aria-haspopup="true" aria-autocomplete="list" role="textbox" autocomplete="off" class="ui-autocomplete-input" id="text-search" name="keyword" placeholder="Nội dung tìm kiếm...">
                                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                            <div class="clearfix "><span class="hiddesn-sm"><i class="fa fa-envelope" aria-hidden="true"></i> info@ttwine.com</span> </div>
                        </div>
                        <!--form-search-->
                        <div id="sale-cs" class="col-md-5">
                           <div id="whole-sale" class="item-head price hidden-xs">
                               <form action="<?php echo base_url() ?>Fr_giohang/">
                               <button  type="submit"> Giỏ hàng (<?php echo $total_items  ?>) </button> <!-- (<?php echo $total_items  ?>) -->
                             </form>
                           </div>
                            <div id="customer-support" class="hidden-xs">
                                <img alt="T&T Wine - Support" src="<?php echo base_url() ?>images/icon-suport.png">
                                <div id="cs-wrapper">
                                    <span>Chăm sóc</span><span>khách hàng</span>
                                    <div id="cs-hotline">
                                        <p>Miền Nam: <strong><a href="tel:0902385002">0969.666.999</a></strong></p>
                                        <p>Miền Bắc:<strong> <a href="tel:00938360060">0123.666.888</a></strong></p>
                                        <p>Miền Trung: <strong><a href="tel:0979612820">0979.777.888</a></strong></p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!--wrap-header-->
                    </div>
                    <!--col-md-9-->
                </div>
            </div>
            <!--container-->
        </section>
                  <!--bottom-top-->
                  <section id="menu">
                     <div class="container">
                        <nav id="max-menu-page" class="hidden-xs hidden-sm">
                           <div id="main-categories">
                              <span><i class="fa fa-list-ul" aria-hidden="true"></i> Danh mục sản phẩm</span>
                              <ul class="lv1">
                            <li class="has-child">
                                <a  href="<?php echo base_url() ?>Fr_locsanpham/load_cognac" title="Rượu Cognac">
                                Rượu Cognac
                                </a>

                                <ul class="lv2">
                                    <li class="">
                                        <a href="<?php echo base_url() ?>Fr_locsanpham/load_chabot" title="Chabot Armagnac">
                                        Chabot Armagnac
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="<?php echo base_url() ?>Fr_locsanpham/load_bisquit" title="Rượu Bisquit">
                                        Rượu Bisquit
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="<?php echo base_url() ?>Fr_locsanpham/load_hennessy" title="Rượu Hennessy">
                                        Rượu Hennessy
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="<?php echo base_url() ?>Fr_locsanpham/load_remy" title="Rượu Remy Martin">
                                        Rượu Remy Martin
                                        </a>
                                    </li>
                                    
                                </ul>
                            </li>
                            <li class="has-child">
                                <a href="<?php echo base_url() ?>Fr_locsanpham/load_whisky" title="Blended Scotch Whisky">
                                Blended Scotch Whisky
                                </a>
                                <ul class="lv2">
                                    <li class="">
                                        <a href="<?php echo base_url() ?>Fr_locsanpham/load_chivas" title="Rượu Chivas">
                                        Rượu Chivas
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="<?php echo base_url() ?>Fr_locsanpham/load_ballantine" title="Rượu Ballantine&#039;s">
                                        Rượu Ballantine&#039;s
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="<?php echo base_url() ?>Fr_locsanpham/load_jw" title="Johnnie Walker">
                                        Johnnie Walker
                                        </a>
                                    </li>
                                    
                                </ul>
                            </li>
                            <li class="has-child">
                                <a href="<?php echo base_url() ?>Fr_locsanpham/load_singlemalt" title="Rượu Single Malt">
                                Rượu Single Malt
                                </a>
                                <ul class="lv2">
                                    <li class="">
                                        <a href="<?php echo base_url() ?>Fr_locsanpham/load_macallan" title="Rượu Macallan">
                                        Rượu Macallan
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="<?php echo base_url() ?>Fr_locsanpham/load_glenlivet" title="The Glenlivet">
                                        The Glenlivet
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="<?php echo base_url() ?>Fr_locsanpham/load_singleton" title="Rượu Singleton">
                                        Rượu Singleton
                                        </a>
                                    </li>
                                   
                                </ul>
                            </li>

                            
                            <li class="">
                                <a href="<?php echo base_url() ?>Fr_locsanpham/load_quatang" title="Giỏ quà tặng">
                                Giỏ quà tặng
                                </a>

                            </li>
                            <li class="">
                                <a href="<?php echo base_url() ?>Fr_locsanpham/load_brandy" title="Rượu Brandy">
                                Rượu Brandy
                                </a>
                            </li>
                            <li class="">
                                <a href="<?php echo base_url() ?>Fr_locsanpham/load_vodka" title="Rượu Vodka">
                                Rượu Vodka
                                </a>
                                
                            </li>
                            <li class="">
                                <a href="<?php echo base_url() ?>Fr_locsanpham/load_sapve" title="Hàng sắp về">
                                Hàng sắp về
                                </a>
                            </li>
                        </ul>
                              <!-- .slimmenu -->
                           </div>
                           <div id="main-menu">
                              <ul class="lv1">
                                 <li class="">
                                    <a href="<?php echo base_url() ?>Fr_locsanpham/load_quatang" title="Giỏ quà tặng">
                                    Giỏ quà tặng
                                    </a>
                                 </li>
                                 <li class="">
                                    <a href="<?php echo base_url() ?>Fr_locsanpham/load_hotdeal" title="Hot deal">
                                    Hot deal
                                    </a>
                                 </li>
                                 <li class="">
                                    <a href="<?php echo base_url() ?>Fr_locsanpham/load_banchay" title="Bán chạy">
                                    Bán chạy
                                    </a>
                                 </li>
                                 <li class="">
                                    <a href="<?php echo base_url() ?>Fr_locsanpham/load_sapve" title="Hàng sắp về">
                                    Hàng sắp về
                                    </a>
                                 </li>
<!--                                  <li class="has-child">
   <a href="<?php echo base_url() ?>Fr_locsanpham/load_kienthuc" title="Kiến thức rượu">
   Kiến thức rượu
   </a>
   <ul class="lv2">
      <li class="">
         <a href="<?php echo base_url() ?>Fr_locsanpham/load_kienthuc1" title="Thưởng thức rượu">
         Thưởng thức rượu
         </a>
      </li>
      <li class="">
         <a href="<?php echo base_url() ?>Fr_locsanpham/load_kienthuc2" title="Cách pha chế">
         Cách pha chế
         </a>
      </li>
      <li class="">
         <a href="<?php echo base_url() ?>Fr_locsanpham/load_kienthuc3" title="Cách uống rượu">
         Cách uống rượu
         </a>
      </li>
   </ul>
</li> -->
                                 <li class="">
                                    <a href="http://kenh14.vn/ruou-vang.html" target="_blank" title="Tin tức">
                                    Tin tức
                                    </a>
                                 </li>
                                 <?php if(isset($user_info)): ?>
                                <li class="">
                                 <a href="<?php echo base_url() ?>Fr_user" title="Thông tin"> Xin chào: <?php echo $user_info->cusname ?></a>
                                 </li>
                                 <li class="">
                                 <a href="<?php echo base_url() ?>Fr_user/logout"  title="Đăng xuất">
                                 Đăng xuất
                                 </a>
                              </li>
                                 <?php else: ?>
                                <li class="">
                                 <a href="<?php echo base_url() ?>Fr_user/register" title="Đăng ký">
                                 Đăng ký
                                 </a>
                              </li>
                              <li class="">
                                 <a href="<?php echo base_url() ?>Fr_user/login"  title="Đăng nhập">
                                 Đăng nhập
                                 </a>
                              </li>
                            <?php endif; ?>
                              </ul>
                              <!-- .slimmenu -->
                           </div>
                        </nav>
                        <!-- #max-menu-page -->
                        <div class="m-extend-overlay close-m-extend"></div>
                        <nav id="nav-menu-page" class="open-m-extend visible-sm visible-xs" data-fix-extend="#min-menu-page">
                           <span><i class="fa fa-bars" aria-hidden="true"></i></span>
                           <div class="top-phone">
                              <a class="phone_call phone_call_mobi" href="tel:0983.666.888" title=" Hotline T&T Wine HCM 0983.666.888"><b>HCM: 0983.666.888</b> </a>
                              | <a class="phone_call phone_call_mobi" href="tel:0966.999.666" title=" Hotline T&T Wine Hà Nội 0966.999.666 "> <b>Hà Nội: 0966.999.666</b> </a>
                           </div>
                        </nav>
                        <!-- #nav menu page -->
                        <nav id="min-menu-page" class="m-extend m-extend-fix-left">
                           <h1>T&T Wine</h1>
                           <ul>
                              <li class="has-child">
                                 <a href="#"><i class="fa fa-list-ul" aria-hidden="true"></i> Danh mục sản phẩm </a>
                                 <ul class="lv1">
                                    <li class="has-child">
                                       <a href="<?php echo base_url() ?>Fr_locsanpham/load_cognac" title="Rượu Cognac">
                                       Rượu Cognac
                                       </a>
                                       <ul class="lv2">
                                          <li class="">
                                             <a href="<?php echo base_url() ?>Fr_locsanpham/load_chabot" title="Chabot Armagnac">
                                             Chabot Armagnac
                                             </a>
                                          </li>
                                          <li class="">
                                             <a href="<?php echo base_url() ?>Fr_locsanpham/load_bisquit" title="Rượu Bisquit">
                                             Rượu Bisquit
                                             </a>
                                          </li>
                                          <li class="">
                                             <a href="<?php echo base_url() ?>Fr_locsanpham/load_hennessy" title="Rượu Hennessy">
                                             Rượu Hennessy
                                             </a>
                                          </li>
                                          <li class="">
                                             <a href="<?php echo base_url() ?>Fr_locsanpham/load_remy" title="Rượu Remy Martin">
                                             Rượu Remy Martin
                                             </a>
                                          </li>
                                          
                                       </ul>
                                    </li>
                                    <li class="has-child">
                                       <a href="<?php echo base_url() ?>Fr_locsanpham/load_whisky" title="Blended Scotch Whisky">
                                       Blended Scotch Whisky
                                       </a>
                                       <ul class="lv2">
                                          <li class="">
                                             <a href="<?php echo base_url() ?>Fr_locsanpham/load_chivas" title="Rượu Chivas">
                                             Rượu Chivas
                                             </a>
                                          </li>
                                          <li class="">
                                             <a href="<?php echo base_url() ?>Fr_locsanpham/load_ballantine" title="Rượu Ballantine&#039;s">
                                             Rượu Ballantine&#039;s
                                             </a>
                                          </li>
                                          <li class="">
                                             <a href="<?php echo base_url() ?>Fr_locsanpham/load_jw" title="Johnnie Walker">
                                             Johnnie Walker
                                             </a>
                                          </li>
                                          
                                       </ul>
                                    </li>
                                    <li class="has-child">
                                       <a href="<?php echo base_url() ?>Fr_locsanpham/load_singlemalt" title="Rượu Single Malt">
                                       Rượu Single Malt
                                       </a>
                                       <ul class="lv2">
                                          <li class="">
                                             <a href="<?php echo base_url() ?>Fr_locsanpham/load_macallan" title="Rượu Macallan">
                                             Rượu Macallan
                                             </a>
                                          </li>
                                          <li class="">
                                             <a href="<?php echo base_url() ?>Fr_locsanpham/load_glenlivet" title="The Glenlivet">
                                             The Glenlivet
                                             </a>
                                          </li>
                                          <li class="">
                                             <a href="<?php echo base_url() ?>Fr_locsanpham/load_singleton" title="Rượu Singleton">
                                             Rượu Singleton
                                             </a>
                                          </li>
                                          
                                       </ul>
                                    </li>
                                   
                                    <li class="">
                                       <a href="<?php echo base_url() ?>Fr_locsanpham/load_quatang" title="Giỏ quà tặng">
                                       Giỏ quà tặng
                                       </a>
                                    </li>
                                    <li class="">
                                       <a href="<?php echo base_url() ?>Fr_locsanpham/load_brandy" title="Rượu Brandy">
                                       Rượu Brandy
                                       </a>
                                    </li>
                                    <li class="">
                                       <a href="<?php echo base_url() ?>Fr_locsanpham/load_vodka" title="Rượu Vodka">
                                       Rượu Vodka
                                       </a>
                                    </li>
                                    <li class="">
                                       <a href="<?php echo base_url() ?>Fr_locsanpham/load_sapve" title="Hàng sắp về">
                                       Hàng sắp về
                                       </a>
                                    </li>
                                 </ul>
                                 <!-- .slimmenu -->
                              </li>
                              <li class="">
                                 <a href="<?php echo base_url() ?>Fr_locsanpham/load_quatang" title="Giỏ quà tặng9">
                                 Giỏ quà tặng
                                 </a>
                              </li>
                              <li class="">
                                 <a href="<?php echo base_url() ?>Fr_locsanpham/load_hotdeal" title="Hot deal">
                                 Hot deal
                                 </a>
                              </li>
                              <li class="">
                                 <a href="<?php echo base_url() ?>Fr_locsanpham/load_banchay" title="Bán chạy">
                                 Bán chạy
                                 </a>
                              </li>
                              <li class="">
                                 <a href="<?php echo base_url() ?>Fr_locsanpham/load_sapve" title="Hàng sắp về">
                                 Hàng sắp về
                                 </a>
                              </li>
<!--                               <li class="has-child">
   <a href="<?php echo base_url() ?>Fr_locsanpham/load_kienthuc" title="Kiến thức rượu">
   Kiến thức rượu
   </a>
   <ul class="lv1">
      <li class="">
         <a href="<?php echo base_url() ?>Fr_locsanpham/load_kienthuc1" title="Thưởng thức rượu">
         Thưởng thức rượu
         </a>
      </li>
      <li class="">
         <a href="<?php echo base_url() ?>Fr_locsanpham/load_kienthuc2" title="Cách pha chế">
         Cách pha chế
         </a>
      </li>
      <li class="">
         <a href="<?php echo base_url() ?>Fr_locsanpham/load_kienthuc3" title="Cách uống rượu">
         Cách uống rượu
         </a>
      </li>
   </ul>
</li> -->
                              <li class="">
                                 <a href="http://kenh14.vn/ruou-vang.html" target="_blank" title="Tin tức">
                                 Tin tức
                                 </a>
                              </li>
                              <li class="">
                                 <a href="<?php echo base_url() ?>Fr_user/login"  title="Đăng nhập">
                                 Đăng nhập
                                 </a>
                              </li>
                           </ul>
                           <!-- .lv1 -->
                           <div class="exit close-m-extend" data-fix-extend="#min-menu-page">
                              <i class="fa fa-times-circle" aria-hidden="true"></i>
                           </div>
                        </nav>
                        <!-- #min-menu-page -->
                     </div>
                  </section>
               </header>
               <!-- #header -->
                <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
                <script src="<?php echo base_url() ?>js/owl.carousel.min.js"></script>
                <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30=" crossorigin="anonymous"></script>
                <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
<!--                 <script src="<?php echo base_url() ?>js/autocomplete.js"></script> -->


<script type="text/javascript">
  $(function()
{  
    //sử dụng autocomplete với input có id = key
    $( "#text-search" ).autocomplete({
        source:"<?php echo site_url('Fr_trangchu/search/1') ?>", //link xử lý dữ liệu tìm kiếm
    });
});
</script>

