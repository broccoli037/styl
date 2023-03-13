<?php

// $page = (isset($_GET['id'])) ? $_GET['id'] : 'home';
// if (!in_array($page, array('home', 'hoddie', 'login'))) {
//     include("404.php");
//     exit;
// }
?>


<!doctype html>
<html lang="en">


<?php

$phone = "XXXX";
$email = "gobind98077@gmail.com";
$address = "XXXX";
$abn = "XXXXX";
$company = "STYL";
$map = "XXXX";
$owner = "XXXX";
?>


<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $company; ?></title>

    <!-- LInks -->
    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Simple Line Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css" />

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" />

    <!-- Slick Slider -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />

    <!-- Custom Style -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/styl-logo.svg">


</head>
<!-- End of Head Section -->

<body>
    <header class="header fixed-header" class="<?= $home ? '' : 'breadcrumb' ?>">
        <div class="upper-header">
            <p class="free-shiping">!!! Free shipping for order over Rs. 5000 !!!</p>
        </div>
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <div class="mobile">
                    <a class="navbar-brand" href="./">
                        <figure>
                            <img src="images/styl-logo.svg" alt="" class="">
                        </figure>
                    </a>
                    <div class="bar">
                        <i class="fa-solid fa-bars"></i>
                    </div>
                </div>


                <ul class="navbar-nav">
                    <li class="nav-item flex-grow">
                        <a href="#" class="nav-link"></a>
                    </li>
                    <li class="nav-item active <?php if ($page == 'home') {
                                                    echo 'active';
                                                } ?>">
                        <a href="" class="nav-link">Men</a>
                    </li>

                    <li class="nav-item">
                        <a href="" class="nav-link">Women</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Brand
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Zara</a></li>
                            <li><a class="dropdown-item" href="#">Gucchi</a></li>
                            <li><a class="dropdown-item" href="#">Other</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">Sale</a>
                    </li>

                    <li class="nav-item">
                        <a href="" class="nav-link contact">Streetwere</a>
                    </li>

                    <li class="nav-item flex-grow">
                        <a href="#" class="nav-link"></a>
                    </li>


                    </li>
                    <li class="nav-item">
                        <div class="nav-link search"><i class="fa-solid fa-magnifying-glass"></i> <input placeholder="Search" type="text" /></div>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link shop"><i class="fa-solid fa-cart-shopping"></i></a>
                    </li>
                    <li class="nav-item button">
                        <a href="login" class="nav-link login">Login<i class="fa-solid fa-chevron-down"></i></a>
                    </li>

                </ul>




            </nav>
            <hr>


        </div>

        <!-- <div class="breadcrumb">
            <ul class="breadcrumb-row">
                <li class="items"><a href="">Hoodies</a></li>
                <li class="items line"><a href=""></a></li>
                <li class="items "><a href="">Sweatshirt</a></li>
                <li class="items line"><a href=""></a></li>
                <li class="items "><a href="">Jackets</a></li>
                <li class="items line"><a href=""></a></li>
                <li class="items "><a href="">Joggers</a></li>
            </ul>
        </div> -->

        <?php if($page != 'home') { ?>
            <div class="breadcrumb">
                <ul class="breadcrumb-row">
                    <li class="items"><a href="">Hoodies</a></li>
                    <li class="items line"><a href=""></a></li>
                    <li class="items "><a href="">Sweatshirt</a></li>
                    <li class="items line"><a href=""></a></li>
                    <li class="items "><a href="">Jackets</a></li>
                    <li class="items line"><a href=""></a></li>
                    <li class="items "><a href="">Joggers</a></li>
                </ul>
            </div>
        <?php } ?>



    </header>
    <!-- Header Ends -->