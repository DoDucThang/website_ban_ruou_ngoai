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
<!--                      <section id="left-sidebar" class="col-sm-3">
<span class="filter"><i class="fa fa-filter" aria-hidden="true"></i> Tìm kiếm</span>
<aside id="filter-bar">
   <h1>Bộ tìm kiếm</h1>
   <form id="frm-filter" action="https://www.sieuthiruoungoai.com/product/filter" method="post">
      <input type="hidden" name="categories" value="" />
      <h2>Giá</h2>
      <ul>
         <li><input type="radio" name="price_range" value="1,500000" id="price_range1"><label for="price_range1">0 - 500.000đ</label></li>
         <li><input type="radio" name="price_range" value="500000,1000000" id="price_range2"><label for="price_range2">500,000đ - 1.000.000đ</label></li>
         <li><input type="radio" name="price_range" value="1000000,3000000" id="price_range3"><label for="price_range3">1.000.000đ - 3.000.000đ</label></li>
         <li><input type="radio" name="price_range" value="3000000" id="price_range4"><label for="price_range4">Trên 3.000.000đ</label></li>
      </ul>
      <hr>
      <h2>Nồng độ</h2>
      <ul>
         <li><input type="checkbox" name="abv[]" value="39,43" id="abv1"><label for="abv1">39% - 43%</label></li>
         <li><input type="checkbox" name="abv[]" value="40" id="abv2"><label for="abv2">40%</label></li>
         <li><input type="checkbox" name="abv[]" value="47" id="abv3"><label for="abv3">47%</label></li>
         <li><input type="checkbox" name="abv[]" value="50" id="abv4"><label for="abv4">50%</label></li>
      </ul>
      <hr>
      <h2>Thể tích</h2>
      <ul>
         <li><input type="checkbox" name="volume[]" value="500" id="volume1"><label for="volume1">500 ml</label></li>
         <li><input type="checkbox" name="volume[]" value="750" id="volume2"><label for="volume2">750 ml</label></li>
         <li><input type="checkbox" name="volume[]" value="1000" id="volume3"><label for="volume3">1000 ml</label></li>
         <li><input type="checkbox" name="volume[]" value="1001" id="volume4"><label for="volume4">Trên 1000 ml</label></li>
      </ul>
   </form>
</aside>
                  </section> -->
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
       <script>
          $('.select_location').on('change', function(){
             window.location = $(this).val();
});
       </script>
            </body>

         </html>