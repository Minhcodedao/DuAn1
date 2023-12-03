<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Đăng Ký - Trang Sức XYZ</title>
  <style>
    .signup-container {
      background-color: #ffffff;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      padding: 20px;
      border-radius: 10px;
      width: 50%;
      text-align: center;
      margin-left: 25%;
    }

    .signup-container h2 {
      color: #007bff;
    }

    .signup-form {
      margin-top: 20px;
    }

    .form-group {
      margin-bottom: 15px;
    }

    .form-group label {
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
    .form-group button:hover {
      background-color: #0056b3;
    }
    /* Styling for social login buttons (fake buttons) */
    input[type='submit']{
      background-color: #007bff;
      color: white;
    }
    .social-buttons button.google {
      background-color: #db4a39; /* Google color */
    }
    .form-group {
  margin-bottom: 15px;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
}

.form-group label {
  font-weight: bold;
  margin-bottom: 5px;
}

.form-group input,
.form-group textarea {
  width: 100%;
  padding: 10px;
  border: 1px solid #ced4da;
  border-radius: 5px;
  box-sizing: border-box;
  margin-bottom: 10px; /* Thêm margin-bottom để tạo khoảng cách giữa label và input */
} 
  </style>
</head>
<body>
  <div class="signup-container">
    <h2>Quên mật khẩu</h2>
    <form class="signup-form" action="index.php?act=quenmk" method="post">
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" name="email" required placeholder="VD: tranhuong@gmail.com">
      </div>
      <div class="form-group" style="width: 100px;">
        <input type="submit" name="dangky" value="Gửi email"></input>
      </div>
      <div class="form-group">
        <h4 style="color: red;">
          <?php
            if(isset($thongbao)&&($thongbao!="")){
              echo $thongbao;
            }
          ?>
        </h4>
      </div>
    </form>
    
    <div class="login-link">
      <p><a href="index.php?act=dangnhap">Đăng nhập ngay</a></p>
    </div>
  </div>
</body>
</html>
