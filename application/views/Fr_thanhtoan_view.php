<!DOCTYPE html>
<html lang="en">
<?php require('Fr_header_view.php') ?>

               <div id="breadcrumbs">
   <div class="container">
      <a href="<?php echo base_url() ?>Fr_trangchu/" title="Trang chủ"><i class="fa fa-home"></i> Trang chủ</a>
      <i class="fa fa-angle-right"></i>
      Order
   </div>
   <!-- .container -->
</div>
<!-- .breacrumbs -->
<section id="page-body" class="container">
   <div class="row">
      <main id="order-info" class="col-md-7">
         <div class="block-title">
            <h1>Thông tin giao hàng</h1>
            <div>&nbsp;</div>
         </div>
         <form action="<?php echo site_url('Fr_giohang/thanhtoan') ?>" method="post">
             <div class="form-group">
                      <label for="inputname">TÊN TÀI KHOẢN</label>
                      <input type="text" class="form-control form-control-large" value="<?php echo isset($user->username)?$user->username:'' ?>" id="username" name="username" placeholder="Nhập tài khoản">
                      <div id="username_error" class="error"><?php echo form_error('username') ?></div>
                    </div>
                    <div class="form-group">
                      <label for="inputname">HỌ VÀ TÊN</label>
                      <input type="text" class="form-control form-control-large" value="<?php echo isset($user->cusname)?$user->cusname:'' ?>" id="cusname" name="cusname" placeholder="Nhập họ và tên">
                      <div id="cusname_error" class="error"><?php echo form_error('cusname') ?></div>
                    </div>   
                    <div class="form-group">
                      <label for="inputname">MAIL</label>
                      <input type="text" class="form-control form-control-large" value="<?php echo isset($user->mail)?$user->mail:'' ?>" id="mail" name="mail" placeholder="Nhập mail">
                      <div id="mail_error" class="error"><?php echo form_error('mail') ?></div>
                    </div>     
                    <div class="form-group">
                      <label for="inputname">SỐ ĐIỆN THOẠI</label>
                      <input type="text" class="form-control form-control-large" value="<?php echo isset($user->phone)?$user->phone:'' ?>" id="phone" name="phone" placeholder="Nhập số điện thoại">
                      <div id="phone_error" class="error"><?php echo form_error('phone') ?></div>
                    </div>           
                     <div class="form-group">
                      <label for="inputname">ĐỊA CHỈ</label>
                      <input type="text" class="form-control form-control-large" value="" id="address" name="address" placeholder="Nhập địa chỉ (số nhà, tên đường, thôn, ấp)">
                      <div id="address_error" class="error"><?php echo form_error('address') ?></div>
                    </div>  
                    <div class="form-group">
                      <label for="inputname">GHI CHÚ</label>
                      <input type="text" class="form-control form-control-large" value="" id="note" name="note" placeholder="Nhập vào thông tin mà bạn cần bổ sung muốn nhắn tới ban quản trị website.">
                      <div id="note_error" class="error"></div>
                    </div>  
                      <div class="form-group">
                      <label for="inputname">THANH TOÁN QUA</label>
                      <select name="payment">
                         <option value="">---Chọn cổng thanh toán---</option>
                         <option value="chuyenkhoan">Chuyển khoản</option>
                         <option value="offline">Thanh toán khi nhận hàng</option>
                      </select>
                      <div id="payment_error" class="error"><?php echo form_error('payment') ?></div>
                    </div> 
            
            <div class="pull-right" style="text-align: right;">
               <i>Điền đầy đủ thông tin</i>
               <button class="btn-wine" type="submit">Tiếp tục</button>
            </div>
            <div class="clearfix"></div>
         </form>
      </main>
      <div class="col-md-5">
         <aside>
            <h1>Thông tin đơn hàng<span> (<?php echo $total_items  ?> sản phẩm)</h1>
            <table id="cart-sidebar" class="table table-hover">
               <thead>
                  <tr>
                     <th width="80px"></th>
                     <th>Sản phẩm</th>
                     <th width="80px">Số lượng</th>
                     <th width="120px">Giá</th>
                  </tr>
               </thead>

               <?php foreach ($carts as $value): ?>
               <tbody>
                  
                  <tr>
                     <td><img style="width: 110px" src="<?php echo $value['img'] ?>"></td>
                     <td><strong><a href="<?php echo $value['name'] ?>"><?php echo $value['name'] ?></a></strong></td>
                     <td><?php echo $value['qty'] ?></td>
                     <td align="right"><?php echo number_format($value['subtotal']) ?> đ</td>
                  </tr>
                  
               </tbody>
               <?php endforeach; ?>
<!--                <tbody>
   <tr>
      <td><img src="https://www.sieuthiruoungoai.com/uploads/files/2018/12/02/thumbs-60-60-0/Vang-Cha-teau-Pavie-Saint-E-milion-Grand-Cru-2006.jpg" /></td>
      <td><a href="chateau-pavie-saint-emilion-grand-cru-2006">Rượu Vang Château Pavie Saint-Émilion Grand Cru 2006</a></td>
      <td align="right">1</td>
      <td align="right">11,300,000 VNĐ       
   </tr>
</tbody> -->
               <tfoot>
                  <tr>
                     <th class="total" colspan="3">Tổng cộng</th>
                     <th class="total"><?php echo number_format($total_amount) ?> đ</th>
                  </tr>
               </tfoot>
            </table>
         </aside>
      </div>
   </div>
</section>
<!--info-shipping-->
<section id="brand-logo" class="container">
   <div id="brand-logo-list" class="owl-carousel owl-theme">
   </div>
</section>


<?php
$this->load->view('Fr_footer_view'); 
 ?>

              
            </body>

         </html>