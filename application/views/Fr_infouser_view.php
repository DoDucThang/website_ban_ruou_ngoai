
<!DOCTYPE html>
<html lang="en">
<?php require('Fr_header_view.php') ?>
<div id="breadcrumbs">
   <div class="container">
      <a href="<?php echo base_url() ?>Fr_trangchu/" title="Trang chủ"><i class="fa fa-home"></i> Trang chủ</a>
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
  <h3>Thông tin tài khoản</h3> 
</div>
<div class="container row">
  <div class="col-md-4 " ></div>
  <div class="col-md-12">                      
                  <div class="table-responsive">
            <table class="table table-striped table-hover">
               <thead>
                  <tr>
                     <th style="width: 110px">Tên tài khoản</th>
                     <th style="width: 110px">Họ tên</th>
                     <th style="width: 110px">Mail</th>
                     <th style="width: 110px">Số điện thoại</th>
                     <th style="width: 110px">Ngày tạo</th>
                  </tr>
               </thead>
             
               <tbody>
                  <tr>
                    <td><?php echo $user->username ?></td>
                    <td><?php echo $user->cusname ?></td> 
                    <td><?php echo $user->mail ?></td>
                    <td><?php echo $user->phone ?></td>
                    <td><?php echo $user->created ?></td>
                  </tr>
                    <tr>
                    <td></td>
                    <td></td> 
                    <td></td>
                    <td></td>
                    <td><a class="btn btn-danger" href="<?php echo site_url('Fr_user/edit') ?>"><i class="fa fa-pencil"></i></a></td>
                  </tr>
               </tbody>
            </table>
         </div>
                  
     </div>
     
  
</div>

 <div class="container text-center text-primary" >
  <h3>Lịch sử đơn hàng</h3> 
</div>
<div class="container row">
  <div class="col-md-4 " ></div>
  <div class="col-md-12">                      
            <div class="table-responsive">
            <table class="table table-striped table-hover">
               <thead>
                  <tr>
                     <th style="width: 70px">Mã ĐH</th>
                     <th style="width: 110px">Địa chỉ nhận hàng</th>
                     <th style="width: 110px">Số điện thoại</th>
                     <th style="width: 110px">PT thanh toán</th>
                     <th style="width: 110px">Tổng ĐH</th>
                     <th style="width: 110px">Ghi chú</th>
                     <th style="width: 110px">Ngày đặt hàng</th>
                     <th style="width: 110px">Trạng thái</th>
                     <th style="width: 110px">Hủy</th>
                     <th style="width: 110px">Chi tiết ĐH</th>

                  </tr>
               </thead>
              <?php foreach ($saleorder as $value): ?>
               <tbody>

                  <tr>
                    <td><?php echo $value['soid']?></td>
                    <td><?php echo $value['address'] ?></td> 
                    <td><?php echo $value['phone']?></td>
                    <td><?php echo $value['payment'] ?></td>
                    <td><?php echo number_format($value['amount'])?> đ</td>
                    <td><?php echo $value['note'] ?></td>
                    <td><?php echo $value['created'] ?></td>
                    <td>
                      <?php 
                          if($value['status']==0) echo 'Đang xử lý' ;
                             else if($value['status']==1) echo 'Đang giao hàng' ;
                                else if($value['status']==2) echo 'Đã nhận hàng';
                                  else if ($value['status']==3) echo 'Hủy';
                      ?> 
                      
                    </td>

                    <?php if($value['status']==0): ?>
                    <td>
                       <form action="<?php echo base_url() ?>Fr_user/delete_order/<?php echo $value['soid']; ?>" method="POST" >
                            <input type="hidden" class="form-control" id="soid" name="soid" value="<?php echo $value['soid'] ?>">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-remove"></i></button>
                        </form>
                    </td>

                                 <?php else: ?>
                   <td>

                    </td>
                            <?php endif; ?>




<!--                     <td>
   <form action="<?php echo base_url() ?>Fr_user/delete_order/<?php echo $value['soid']; ?>" method="POST" >
        <input type="hidden" class="form-control" id="soid" name="soid" value="<?php echo $value['soid'] ?>">
        <button type="submit" class="btn btn-primary"><i class="fa fa-remove"></i></button>
    </form>
</td> -->
                    <td><a class="btn btn-danger" href="<?php echo base_url() ?>Fr_user/detail_order/<?php echo $value['soid']; ?>"><i class="glyphicon glyphicon-cloud"></i></a></td>
                  </tr>

               </tbody>
             <?php endforeach ?>
            </table>
         </div>
                  
     </div>
     
  
</div>

<br><br><br><br><br>

      </main>

<?php require('Fr_footer_view.php') ?>

