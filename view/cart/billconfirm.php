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
    <div class="thanbill mg">
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
          <div class="tt2">
            <p>Mã đơn hàng: DH_<?= $bill['id']?></p>
            <p>Ngày đặt hàng:  <?= $bill['ngaydathang']?></p>
            <p>Tổng đơn hàng: <?= $bill['total']?> sản phẩm</p>
            <p>Phương thức thanh toán: <?= $bill['bill_pttt']?></p>
          </div>
        </div>
      </div>
      <div class="mathang">
        <h4>THÔNG TIN MẶT HÀNG</h4>
        <!-- Các sản phẩm -->
        <div class="sanpham">
          <img src="link_anh_san_pham_1.jpg" alt="Hình ảnh sản phẩm 1">
          <div class="sp-info">
            <p>Mã sản phẩm: SP001</p>
            <p>Tên sản phẩm: Product 1</p>
            <p>Giá: $50</p>
            <p>Số lượng: 2</p>
          </div>
        </div>
        <!-- Thêm các sản phẩm khác nếu cần -->
      </div>
    </div>
    <button>XEM THONG TIN ĐƠN HÀNG</button>
  </div>
</body>
</html>
