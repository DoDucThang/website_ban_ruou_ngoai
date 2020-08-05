
<!DOCTYPE html>
<html lang="en">
<?php require('Fr_header_view.php') ?>
<div id="breadcrumbs">
   <div class="container">
      <a href="<?php echo base_url() ?>Fr_trangchu" title="Trang chủ"><i class="fa fa-home"></i> Trang chủ</a>
      <i class="fa fa-angle-right"></i>
      Chỉnh sửa thông tin tài khoản
   </div>
   <!-- .container -->
</div>
<!-- .breacrumbs -->
<section id="page-body" class="container">
   <div class="row">
      <main id="product-detail" class="col-md-9">

         <div class="container text-center text-primary" >
  <h3>Chỉnh sửa thông tin tài khoản</h3> 
</div>
<div class="container row">
  <div class="col-md-4 " ></div>
  <div class="col-md-4">                      
                  <form role="form" class="" action="<?php echo site_url('Fr_user/edit') ?>" method="POST">
                     <div class="form-group">
                      <label for="inputname">TÊN TÀI KHOẢN:</label>
                        <h5 style="color: red;font-size: 20px "><?php echo $user->username ?></h5>
                    </div>
                     <div class="form-group">
                      <label for="inputname">MẬT KHẨU</label>
                      <input type="password" class="form-control form-control-large" id="pass" name="pass" placeholder="Nhập mật khẩu">
                      <p>Nếu thay đổi mật khẩu thì nhập dữ liệu</p>
                      <div id="pass_error" class="error"><?php echo form_error('pass') ?></div>
                    </div>
                      <div class="form-group">
                      <label for="inputname">NHẬP LẠI MẬT KHẨU</label>
                      <input type="password" class="form-control form-control-large" id="re_pass" name="re_pass" placeholder="Nhập mật khẩu">
                      <div id="re_pass_error" class="error"><?php echo form_error('re_pass') ?></div>
                    </div>
                    <div class="form-group">
                      <label for="inputname">HỌ VÀ TÊN</label>
                      <input type="text" class="form-control form-control-large" value="<?php echo $user->cusname ?>" id="cusname" name="cusname" placeholder="Nhập họ và tên">
                      <div id="cusname_error" class="error"><?php echo form_error('cusname') ?></div>
                    </div>   
                    <div class="form-group">
                      <label for="inputname">MAIL</label>
                      <input type="text" class="form-control form-control-large" value="<?php echo $user->mail ?>" id="mail" name="mail" placeholder="Nhập mail">
                      <div id="mail_error" class="error"><?php echo form_error('mail') ?></div>
                    </div>     
                    <div class="form-group">
                      <label for="inputname">SỐ ĐIỆN THOẠI</label>
                      <input type="text" class="form-control form-control-large" value="<?php echo $user->phone ?>" id="phone" name="phone" placeholder="Nhập số điện thoại">
                      <div id="phone_error" class="error"><?php echo form_error('phone') ?></div>
                    </div>           
                    <button class="btn btn-md">CHỈNH SỬA</button>
                  </form>
                  
     </div>
     
  
</div>

<br><br><br><br><br>

      </main>

<?php require('Fr_footer_view.php') ?>

