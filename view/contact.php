<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Trang Liên Hệ</title>
<style>
  /* body {
    font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
    color: #333;
    background-color: #f4f4f4;
    margin: 0;
    padding: 20px;
  } */
  .contact-container {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
    align-items: start;
    margin-bottom: 20px;
  }
  .map-container, .contact-info, .contact-form {
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
  }
  h2 {
    color: #3366FF;
    font-weight: 300;
    margin-top: 0;
  }
  p {
    line-height: 1.6;
  }
  .map-container iframe {
    width: 100%;
    max-height: 250px;
    border-radius: 8px;
  }
  .contact-form input, .contact-form textarea {
    width: calc(100% - 20px);
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
  }
  .contact-form input[type=submit] {
    background-color:  #3366FF;
    color: white;
    text-transform: uppercase;
    letter-spacing: 1px;
    border: none;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }
  .contact-form input[type=submit]:hover {
    background-color: #3f51b5;
  }
</style>
</head>
<body>

<div class="contact-container">
    <div class="map-container">
        <h2>BẢN ĐỒ</h2>
        <!-- Embedded Google Map -->
        <!-- Make sure to replace the src with your actual Google Maps link -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.863543538008!2d105.74467431004852!3d21.038145287376842!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313455e940879933%3A0xcf10b34e9f1a03df!2zVHLGsOG7nW5nIENhbyDEkeG6s25nIEZQVCBQb2x5dGVjaG5pYw!5e0!3m2!1svi!2s!4v1701253137961!5m2!1svi!2s" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <div class="contact-info">
        <h2>ĐỊA CHỈ</h2>
        <p>CÔNG TY TNHH TRANG SỨC NHÓM 6</p>
        <p>184 Phố Trịnh Văn Bô - Nam Từ Liêm - Hà Nội</p>
        <h2>HOTLINE</h2>
        <p>+84 3774 8725</p>
        <p>+84 3932 8588</p>
        <h2>THÔNG TIN PHÒNG BAN</h2>
    </div>

    <div class="contact-form">
        <h2>LIÊN HỆ</h2>
        <form action="/submit_contact_form" method="post">
            <input type="text" id="name" name="name" placeholder="Họ và tên">
            <input type="email" id="email" name="email" placeholder="Email">
            <input type="text" id="phone" name="phone" placeholder="Điện thoại">
            <textarea id="message" name="message" placeholder="Lời nhắn" rows="4"></textarea>
            <input type="submit" value="Gửi">
        </form>
    </div>
</div>

</body>
</html>
