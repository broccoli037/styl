<?php
$page = 'product-discription-page';
include 'includes/header.php'; ?>

<div class="product-discription-page">
    <div class="container">
        <div class="previous-page">
            <h6 class="go-back"><a href="index"><i class="fa-solid fa-arrow-left"></i> <span>Go Back</span> </a></h6>
        </div>
        <div class="double-col">
            <div class="product-figure">
                <div class="images">
                    <div class="large-image">
                        <img src="images/product1.jpg" alt="">
                    </div>
                    <div class="small-images">
                        <img src="images/product1.jpg" alt="">
                        <img src="images/product1.jpg" alt="">
                        <img src="images/product1.jpg" alt="">

                    </div>

                </div>

            </div>
            <div class="product-info">
                <h4 class="product-title">Product Title</h4>
                <h6 class="price">Price</h6>
                <p class="product-discription">
                    Lorem ipsuexercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

                </p>
                <br>
                <p class="product-discription">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim n culpa qui officia deserunt mollit anim id est laborum.

                </p>
                <div class="color product-feature">
                    <div class="color-range range">
                        <h6 class="color-heading">Color:</h6>
                        <div class="color-box"></div>
                        <div class="color-box color-white"></div>
                        <div class="color-box color-brown"></div>

                    </div>
                </div>
                <div class="size product-feature">
                    <div class="size-range range">
                        <h6 class="color-heading">Size:</h6>
                        <h6 class="box">XS</h6>
                        <h6 class="box">S</h6>
                        <h6 class="box">M</h6>
                        <h6 class="box">L</h6>
                        <h6 class="box">XL</h6>
                        <h6 class="box">XXL</h6>
                    </div>
                </div>
                <div class="cart">
                    <div class="two-row">
                        <h6 class="count">1</h6>
                        <h6 class="count add">Add to cart</h6>
                    </div>
                </div>
            </div>
        </div>

        <div class="clothing-container">
            <h5 class="heading">Recommended</h5>
            <div class="product-container">
                <!-- product  -->
                <a href="product-discription-page" class="product">
                    <div class="figure">
                        <img src="images/product1.jpg" alt="">
                    </div>
                    <div class="content">
                        <p class="product-title product-info ">Product Title</p>
                        <p class="product-description product-info">Description</p>
                        <p class="product-price product-info">Rs.XXX</p>

                    </div>
                </a>
                <!-- product  -->
                <div class="product">
                    <div class="figure">
                        <img src="images/product1.jpg" alt="">
                    </div>
                    <div class="content">
                        <p class="product-title product-info ">Product Title</p>
                        <p class="product-description product-info">Description</p>
                        <p class="product-price product-info">Rs.XXX</p>

                    </div>
                </div>
                <!-- product  -->
                <div class="product">
                    <div class="figure">
                        <img src="images/product1.jpg" alt="">
                    </div>
                    <div class="content">
                        <p class="product-title product-info ">Product Title</p>
                        <p class="product-description product-info">Description</p>
                        <p class="product-price product-info">Rs.XXX</p>

                    </div>
                </div>
                <!-- product  -->
                <div class="product">
                    <div class="figure">
                        <img src="images/product1.jpg" alt="">
                    </div>
                    <div class="content">
                        <p class="product-title product-info ">Product Title</p>
                        <p class="product-description product-info">Description</p>
                        <p class="product-price product-info">Rs.XXX</p>

                    </div>
                </div>
                <!-- product  -->
                <div class="product">
                    <div class="figure">
                        <img src="images/product1.jpg" alt="">
                    </div>
                    <div class="content">
                        <p class="product-title product-info ">Product Title</p>
                        <p class="product-description product-info">Description</p>
                        <p class="product-price product-info">Rs.XXX</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>