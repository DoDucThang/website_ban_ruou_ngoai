
<!DOCTYPE html>
<html lang="en">
<?php require('Fr_header_view.php') ?>
<div id="breadcrumbs">
   <div class="container">
      <a href="<?php echo base_url() ?>Fr_trangchu" title="Trang chủ"><i class="fa fa-home"></i> Trang chủ</a>
      <i class="fa fa-angle-right"></i>
      Thông tin tài khoản
   </div>
   <!-- .container -->
</div>
<!-- .breacrumbs -->
<section id="page-body" class="container">
   <div class="row">
      <main id="product-detail" class="col-md-9">

         <div class="container text-center text-primary" >
  <h3>Chi tiết đơn hàng</h3> 
</div>
<div class="container row">
  <div class="col-md-4 " ></div>
  <div class="col-md-12">                      
                  <div class="table-responsive">
            <table class="table table-striped table-hover">
               <thead>
                  <tr>
                     
                     <th style="width: 110px">Mã đơn hàng</th>
                     <th style="width: 110px">Tên rượu</th>
                     <th style="width: 110px">Hình ảnh</th>
                     <th style="width: 110px">Số lượng</th>
                     <th style="width: 110px">Tổng tiền</th>
                  </tr>
               </thead>
             
               <tbody>
                <?php foreach ($dt as $value): ?>
                  <tr>
                    
                    <td><?php echo $value['soid'] ?></td> 
                    <td><?php echo $value['wname'] ?></td>
                   <td> <img src='<?= $value['img'] ?>'  class="img-responsive" style="width: 150px"> </td>
                    <td><?php echo $value['qty'] ?></td>
                    <td><?php echo number_format($value['amount'] )?> đ</td>
                  </tr>
                <?php endforeach ?>
               </tbody>
            </table>
         </div>
                  
     </div>
     
  
</div>


<br><br><br><br><br>

      </main>

<?php require('Fr_footer_view.php') ?>

