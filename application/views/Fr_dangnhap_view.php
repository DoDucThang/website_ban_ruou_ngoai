
<!DOCTYPE html>
<html lang="en">
<?php require('Fr_header_view.php') ?>
<div id="breadcrumbs">
   <div class="container">
      <a href="<?php echo base_url() ?>Fr_trangchu" title="Trang chủ"><i class="fa fa-home"></i> Trang chủ</a>
      <i class="fa fa-angle-right"></i>
      Thành viên đăng nhập
   </div>
   <!-- .container -->
</div>
<!-- .breacrumbs -->
<section id="page-body" class="container">
   <div class="row">
      <main id="product-detail" class="col-md-9">

         <div class="container text-center text-primary" >
  <h3>Thành viên đăng nhập</h3> 
</div>
<div class="container row">
  <div class="col-md-4 " ></div>
  <div class="col-md-4">                      
                  <form role="form" class="" action="<?php echo site_url('Fr_user/login') ?>" method="POST">
                    <h3 style="color:red;text-align: center"><?php echo form_error('login') ?></h3>
                     <div class="form-group">
                      <label for="inputname">TÊN TÀI KHOẢN</label>
                      <input type="text" class="form-control form-control-large" value="<?php echo set_value('username') ?>" id="username" name="username" placeholder="Nhập tài khoản">
                      <div id="username_error" class="error"><?php echo form_error('username') ?></div>
                    </div>
                     <div class="form-group">
                      <label for="inputname">MẬT KHẨU</label>
                      <input type="password" class="form-control form-control-large" id="pass" name="pass" placeholder="Nhập mật khẩu">
                      <div id="pass_error" class="error"><?php echo form_error('pass') ?></div>
                    </div>
                    
                    <button class="btn btn-md">ĐĂNG NHẬP</button>
                  </form>
                  
     </div>
     
  
</div>

<br><br><br><br><br>

      </main>

<?php require('Fr_footer_view.php') ?>

