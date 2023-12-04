<?php
if (isset($thongbao2)) {
    echo $thongbao2;
}
// Phần còn lại của mã HTML cho trang đăng nhập
?>

<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trang Sức XYZ</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <style>
    .login-container {
      background-color: #ffffff;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      padding: 20px;
      border-radius: 10px;
      width: 600px;
      text-align: center;
      margin-left: 29%;
      transition: margin-top 0.3s ease; /* Thêm hiệu ứng transition */
      border: 10px solid whitesmoke;
    }

    .login-container.hide {
      margin-top: -300px; /* Ẩn khung trang đăng nhập bằng cách đẩy lên ngoài màn hình */
    }

    .login-container h2 {
      color: #007bff;
    }

    .login-form {
      margin-top: 20px;
    }

    .form-group {
      margin-bottom: 15px;
    }

    .form-group label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }

    .form-group input {
      width: 100%;
      padding: 10px;
      border: 1px solid #ced4da;
      border-radius: 5px;
      box-sizing: border-box;
    }

    .form-group button {
      background-color: #007bff;
      color: #ffffff;
      border: none;
      padding: 10px 15px;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }
    input[type='submit']{
      background-color: #007bff;
      color: white;
    }
    .form-group button:hover {
      background-color: #0056b3;
    }

    .social-icons {
      margin-top: 20px;
    }

    .social-icons a {
      display: inline-block;
      margin: 0 10px;
      font-size: 24px;
      color: #007bff;
      text-decoration: none;
    }

    .signup-link {
      margin-top: 15px;
    }

    .signup-link a {
      text-decoration: none;
      color: #007bff;
      font-weight: bold;
    }

    .signup-link a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="login-container" id="login-container">
    <h2>Đăng Nhập</h2>
    <form class="login-form" action="index.php?act=dangnhap" method="post">
      <div class="form-group">
        <label for="user">Tên đăng nhập:</label>
        <input type="text" name="user" required>
      </div>
    <br>
      <div class="form-group">
        <label for="pass">Mật khẩu:</label>
        <input type="password" name="pass" required>
      </div>
      <div class="form-group">
        <h4 style="color: red;">
          <?php
            if(isset($thongbao2)&&($thongbao2!="")){
              echo $thongbao2;
            }
          ?>
        </h4>
      </div>
      <br>
      <a href="index.php?act=quenmk" style="color: red; text-decoration: none;">
        Quên mật khẩu?
      </a>
      <hr class="mb" style="margin-top: 15px;">
      <div class="form-group">
        <input type="submit" name="dangnhap" value="Đăng Nhập"></input>
      </div>
    </form>
    <div class="social-icons">
      <a href="#" title="Đăng nhập bằng Facebook"><i class="fab fa-facebook"></i></a>
      <a href="#" title="Đăng nhập bằng Google"><i class="fab fa-google"></i></a>
    </div>
    <div class="signup-link">
      <p>Chưa có tài khoản? <a href="index.php?act=dangky">Đăng ký ngay</a></p>
    </div>
  </div>

  <script>
    // JavaScript để thêm/xóa class khi nhấn vào liên kết đăng nhập
    document.querySelector('.social-icons a').addEventListener('click', function() {
      document.getElementById('login-container').classList.toggle('hide');
    });
  </script>
</body>
</html>

