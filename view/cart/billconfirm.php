<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="/css/style.css">

   
  
</head>
<body>
  <div class="bill mg">
    <?php
      if(isset($bill) && is_array($bill)){
        extract($bill);
      }
    ?>
    <div class="camon">
      <a href="index.php"><button> Về trang chủ</button></a>
      <h3>CẢM ƠN QUÝ KHÁCH ĐÃ ĐẶT HÀNG</h3>
    </div>
    <div class="mathang">
      <h4>THÔNG TIN MẶT HÀNG</h4>
      <!-- Các sản phẩm -->
      <?php bill_chi_tiet($billct) ?>
      <!-- Thêm các sản phẩm khác nếu cần -->
    </div>
    <div class="thanbill_mg">
      <div class="ttbill">
        <div class="ttdh">
          <h4>THÔNG TIN ĐẶT HÀNG</h4>
          <div class="tt1">
            <p>Name: <?= $bill['bill_name']?></p>
            <p>Email: <?= $bill['bill_email']?></p>
            <p>Address: <?= $bill['bill_address']?></p>
            <p>Tel: <?= $bill['bill_tel']?></p>
          </div>
        </div>
        <div class="ttnd">
          <h4>THÔNG TIN ĐƠN HÀNG</h4>
          <?php
            if($bill['bill_pttt']==1){
              $tt = "Thẻ tín dụng";
            }
            if($bill['bill_pttt']==2){
              $tt = "Chuyển khoản ngân hàng";
            }else{
              $tt = "Thanh toán khi nhận hàng";
            }
          ?>
          <div class="tt2">
            <p>Mã đơn hàng: DH_<?= $bill['id']?></p>
            <p>Ngày đặt hàng:  <?= $bill['ngaydathang']?></p>
            <p >Tổng đơn hàng: <?= $bill['total']?> VND</p>
            <p>Phương thức thanh toán: <?= $tt ?></p>
          </div>
        </div>
      </div>
    </div>
  
    <a href="index.php?act=mybill"><button>XEM THONG TIN ĐƠN HÀNG</button></a>
  </div>
</body>
</html>
