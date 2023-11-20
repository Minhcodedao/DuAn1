<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .card {
            margin: 30px auto;
            max-width: 800px;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .title {
            padding: 20px;
            border-bottom: 1px solid #dee2e6;
            background-color: #007bff;
            color: #fff;
            border-radius: 10px 10px 0 0;
        }

        .title h4 {
            font-size: 1.5rem;
        }

        .cart {
            padding: 20px;
        }

        .main img {
            width: 80px;
            border-radius: 5px;
        }

        .main .col a {
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
            display: block;
        }

        .main .col a:hover {
            text-decoration: underline;
        }

        .back-to-shop a {
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
            display: inline-block;
            margin-top: 10px;
        }

        .back-to-shop a:hover {
            text-decoration: underline;
        }

        /* Summary Section */
        .summary {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 0 0 10px 10px;
        }

        .summary h5 {
            margin-top: 0;
            font-size: 1.2rem;
            color: #007bff;
        }

        .summary hr {
            margin-top: 15px;
            border-color: #dee2e6;
        }

        .hoadon p {
            margin-bottom: 10px;
        }

        .hoadon input {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ced4da;
            border-radius: 5px;
            display: inline-block;
            box-sizing: border-box;
        }

        .hoadon button {
            background-color: #007bff;
            color: #ffffff;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            display: block;
        }

        .hoadon button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="row">
            <div class="col-md-8 cart">
                <div class="title">
                    <div class="row">
                        <div class="col"><h4><b>Shopping Cart</b></h4></div>
                        <div class="col align-self-center text-right text-muted">3 items</div>
                    </div>
                </div>    
                <!-- Sản phẩm -->
                <div class="row border-top border-bottom main align-items-center">
                    <div class="col-2"><img class="img-fluid" src="./image/daychuyen1.png"></div>
                    <div class="col">
                        <div class="row">Cotton T-shirt</div>  
                    </div>
                    <div class="col">
                        <a href="#">-</a><a href="#" class="border">1</a><a href="#">+</a>
                    </div>
                    <div class="col">600.000s<span class="close" name="xoa">&#10005;</span></div>
                </div>
                
                <div class="back-to-shop"><a href="#">&leftarrow;</a><span class="text-muted">Back to shop</span></div>
            </div>
            <!-- Hóa đơn -->
            <div class="col-md-4 summary">
                <div><h5><b>THÔNG TIN</b></h5></div>
                <hr>
                <form class="hoadon">
                    <p>Address</p>
                    <input class="address" placeholder="Enter your Address">
                    <p>Give Code</p>
                    <input class="code" placeholder="Enter your code">
                    <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                        <div class="col">TOTAL PRICE</div>
                        <div class="col text-right">&euro; 137.00</div>
                    </div>
                    <button class="btn">CHECKOUT</button>
                </form> 
            </div>
        </div>
    </div>
</body>
</html>
