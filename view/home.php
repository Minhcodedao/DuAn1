
<div class="banner mb">
            <!-- Slideshow container -->
            <div class="slideshow-container">

                <!-- Full-width image with number and caption text -->
                <div class="mySlides fade">
                    <div class="numbertext">1 / 3</div>
                    <img src="image/bn1.png" style="width:100%">
                    <div class="text">Caption Text</div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">2 / 3</div>
                    <img src="image/bn2.jpg" style="width:100%">
                    <div class="text">Caption Two</div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">3 / 3</div>
                    <img src="image/bn3.png" style="width:100%">
                    <div class="text">Caption Three</div>
                </div>

                <!-- Next and previous buttons -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <br>

            <!-- The dots/circles -->
            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div>
        </div>
        
        <!-- JS SLIDESHOW -->
        <script>
            let slideIndex = 0;
            showSlides();

            function showSlides() {
                let i;
                let slides = document.getElementsByClassName("mySlides");
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                slideIndex++;
                if (slideIndex > slides.length) {
                    slideIndex = 1
                }
                slides[slideIndex - 1].style.display = "block";
                setTimeout(showSlides, 2000); // Change image every 2 seconds
            }
        </script>
        <!-- SẢN PHẨM -->
        <div class="article">
            <h2>SẢN PHẨM NỔI BẬT</h2>
            <hr class="mb">
            <div class="sp">
                <?php
                    foreach($dstop5 as $sp){
                        extract($sp);
                        $hinh =$img_path.$img;
                        $sale = 0.9;
                        $linksp = "index.php?act=sanphamct&idsp=".$id;
                        echo '
                        <div class="spnb mb">
                            <a href="'.$linksp.'"><img src="'.$hinh.'" alt=""></a>
                            <div class="tt">
                                <h5>'.$name.'</h5>
                                
                                <p>Giá gốc: <del>$'.$price.'</del></p>
                                <h3>$'.$price*$sale.'</h3>
                            </div>
                            <div class="discount-corner"></div>
                            <a href="'.$linksp.'"><input type="button" value="Chi tiết"></a>
                            
                        </div>';
                    }
                ?>
                
            </div>
            <img src="../image/a4.png" alt="">
            <img src="" alt="">
            <div class="sp">
                <?php
                    foreach($dstop10 as $sp2){
                        extract($sp2);
                        $sale = 0.9;
                        $hinh =$img_path.$img;
                        $linksp = "index.php?act=sanphamct&idsp=".$id;
                        echo '
                    <div class="spnb mb">
                        <a href="'.$linksp.'"><img src="'.$hinh.'" alt=""></a>
                        <div class="tt">
                            <h5>'.$name.'</h5>
                            
                            <p>Giá gốc: <del>$'.$price.'</del></p>
                            <h3>$'.$price*$sale.'</h3>
                        </div>
                        <div class="discount-corner"></div>
                        <a href="'.$linksp.'"><input type="button" value="Chi tiết"></a>
                        
                    </div>';
                    }
                ?>    
            </div>
            <a href="index.php?act=nhan" class="btn mb">Xem thêm</a>

            <h2>TRANG SỨC KIM CƯƠNG</h2>
            <hr class="mb">
            <div class="bnsp">
                <img src="./image//bn_kimcuong.png" alt="">
            </div>
            <div class="sp">
                <?php
                    foreach($spkc as $kc){
                        extract($kc);
                        $sale = 0.9;
                        $hinh =$img_path.$img;
                        $linksp = "index.php?act=sanphamct&idsp=".$id;
                        echo '
                        <div class="spnb mb">
                            <a href="'.$linksp.'"><img src="'.$hinh.'" alt=""></a>
                            <div class="tt">
                                <h5>'.$name.'</h5>
                                
                                <p>Giá gốc: <del>$'.$price.'</del></p>
                                <h3>$'.$price*$sale.'</h3>
                            </div>
                            <div class="discount-corner"></div>
                            <a href="'.$linksp.'"><input type="button" value="Chi tiết"></a>
                            
                        </div>';
                    }

                ?>
                
            </div>
        </div>
        <!-- Nút cuộn lên đầu trang -->
</body>
</html>