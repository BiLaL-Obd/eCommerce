<?php include('partials/head.php') ?>

<body>
    <?php include('partials/header.php') ?>

    <!-- Start Landing -->
    <div class="landing">
        <div class="container px-0 rounded-5">
            <div class="image h-100 position-relative" style="background-image: url('admin/images/image1.png')">
                <!-- <a href="categories.html" class="btn btn-main-alt rounded-pill position-absolute">Shop By Categories</a> -->
            </div>
            <h1>
                <span style="line-height: 0;">Beats Solo</span>
                <span class="head-1">Wirless</span>
                <span class="head-2 text-white text-uppercase">HeadPhones</span>
            </h1>
        </div>
    </div>
    <!-- End Landing -->
    <!-- Start Features -->
    <!------------------ Put the limit 10 ---------------->
    <div class="features inline-swiper py-5">
        <div class="container">
            <div class="swiper myFeatures">
                <div class="main-title">
                    <h5 class="fw-600 mb-4 user-select-none">Features Collections</h5>
                    <div class="swap d-flex align-items-center gap-2">
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <form action="" class="p-3">
                            <div class="box bg-white rounded-4 p-2 py-3 position-relative overflow-hidden">
                                <div class="label d-flex align-items-center justify-content-between flex-row-reverse">
                                    <button type="submit" class="bg-transparent border-0">
                                        <i class='bx bxs-heart font-size-24 cursor-pointer'></i>
                                    </button>
                                    <div class="sales d-flex align-items-center gap-2">
                                        <span class="rounded-pill bg-main text-white px-2 p-1 d-">-33%</span>
                                        <a href="#" class="rounded-pill border-0 text-decoration-none bg-main d-flex align-items-center justify-content-center text-white px-2 p-1">
                                            <i class='bx bx-cart-add font-size-22'></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="image text-center mb-1">
                                    <img src="admin/images/el_img1.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="content">
                                    <p class="text-color-main mb-1">Headphones</p>
                                    <a href="#">
                                        <h4 class="font-size-16">Kids Headphone Builk 10 Pack Multi Colored</h4>
                                    </a>
                                    <div class="stars my-2 d-flex align-items-center">
                                        <i class='bx bxs-star checked'></i>
                                        <i class='bx bx-star'></i>
                                        <i class='bx bx-star'></i>
                                        <i class='bx bx-star'></i>
                                        <i class='bx bx-star'></i>
                                        <button href="#" class="btn btn-main rounded-pill font-size-14 position-absolute" disabled>Add
                                            to
                                            Cart</button>
                                    </div>
                                    <div class="price d-flex align-items-center gap-2">
                                        $100.00<span class="price-only">-only-</span>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                    <div class="swiper-slide">
                        <form action="" class="p-3">
                            <div class="box bg-white rounded-4 p-2 py-3 position-relative overflow-hidden">
                                <div class="label d-flex align-items-center justify-content-between flex-row-reverse">
                                    <button type="submit" class="bg-transparent border-0">
                                        <i class='bx bx-heart font-size-24 cursor-pointer'></i>
                                    </button>
                                    <span class="rounded-pill bg-main text-white px-2 p-1">-33%</span>
                                </div>
                                <div class="image text-center mb-1">
                                    <img src="<?= URLIMG . "products/cat_img1.png" ?>" class="img-fluid" alt="">
                                </div>
                                <div class="content">
                                    <p class="text-color-main mb-1">Headphones</p>
                                    <a href="#">
                                        <h4 class="font-size-16">Kids Headphone Builk 10 Pack Multi Colored</h4>
                                    </a>
                                    <div class="stars my-2 d-flex align-items-center">
                                        <i class='bx bxs-star checked'></i>
                                        <i class='bx bxs-star checked'></i>
                                        <i class='bx bxs-star checked'></i>
                                        <i class='bx bx-star'></i>
                                        <i class='bx bx-star'></i>
                                        <button href="#" class="btn btn-main rounded-pill font-size-14 position-absolute">Add to
                                            Cart</button>
                                    </div>
                                    <div class="price d-flex align-items-center gap-2">
                                        $100.00<span class="price-offer">$120.00</span>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="swiper-slide">
                        <form action="" class="p-3">
                            <div class="box bg-white rounded-4 p-2 py-3 position-relative overflow-hidden">
                                <div class="label d-flex align-items-center justify-content-between flex-row-reverse">
                                    <button type="submit" class="bg-transparent border-0">
                                        <i class='bx bx-heart font-size-24 cursor-pointer'></i>
                                    </button>
                                    <span class="rounded-pill bg-main text-white px-2 p-1">-33%</span>
                                </div>
                                <div class="image text-center mb-1">
                                    <img src="admin/images/cat_img2.png" class="img-fluid" alt="">
                                </div>
                                <div class="content">
                                    <p class="text-color-main mb-1">Headphones</p>
                                    <a href="#">
                                        <h4 class="font-size-16">Kids Headphone Builk 10 Pack Multi Colored</h4>
                                    </a>
                                    <div class="stars my-2 d-flex align-items-center">
                                        <i class='bx bxs-star checked'></i>
                                        <i class='bx bxs-star checked'></i>
                                        <i class='bx bxs-star checked'></i>
                                        <i class='bx bx-star'></i>
                                        <i class='bx bx-star'></i>
                                        <button href="#" class="btn btn-main rounded-pill font-size-14 position-absolute">Add to
                                            Cart</button>
                                    </div>
                                    <div class="price d-flex align-items-center gap-2">
                                        $100.00<span class="price-offer">$120.00</span>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="swiper-slide">
                        <form action="" class="p-3">
                            <div class="box bg-white rounded-4 p-2 py-3 position-relative overflow-hidden">
                                <div class="label d-flex align-items-center justify-content-between flex-row-reverse">
                                    <button type="submit" class="bg-transparent border-0">
                                        <i class='bx bx-heart font-size-24 cursor-pointer'></i>
                                    </button>
                                    <span class="rounded-pill bg-main text-white px-2 p-1">-33%</span>
                                </div>
                                <div class="image text-center mb-1">
                                    <img src="admin/images/cat_img3.png" class="img-fluid" alt="">
                                </div>
                                <div class="content">
                                    <p class="text-color-main mb-1">Headphones</p>
                                    <a href="#">
                                        <h4 class="font-size-16">Kids Headphone Builk 10 Pack Multi Colored</h4>
                                    </a>
                                    <div class="stars my-2 d-flex align-items-center">
                                        <i class='bx bxs-star checked'></i>
                                        <i class='bx bxs-star checked'></i>
                                        <i class='bx bxs-star checked'></i>
                                        <i class='bx bx-star'></i>
                                        <i class='bx bx-star'></i>
                                        <button href="#" class="btn btn-main rounded-pill font-size-14 position-absolute">Add to
                                            Cart</button>
                                    </div>
                                    <div class="price d-flex align-items-center gap-2">
                                        $100.00<span class="price-offer">$120.00</span>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="swiper-slide">
                        <form action="" class="p-3">
                            <div class="box bg-white rounded-4 p-2 py-3 position-relative overflow-hidden">
                                <div class="label d-flex align-items-center justify-content-between flex-row-reverse">
                                    <button type="submit" class="bg-transparent border-0">
                                        <i class='bx bx-heart font-size-24 cursor-pointer'></i>
                                    </button>
                                    <span class="rounded-pill bg-main text-white px-2 p-1">-33%</span>
                                </div>
                                <div class="image text-center mb-1">
                                    <img src="admin/images/cat_img4.png" class="img-fluid" alt="">
                                </div>
                                <div class="content">
                                    <p class="text-color-main mb-1">Headphones</p>
                                    <a href="#">
                                        <h4 class="font-size-16">Kids Headphone Builk 10 Pack Multi Colored</h4>
                                    </a>
                                    <div class="stars my-2 d-flex align-items-center">
                                        <i class='bx bxs-star checked'></i>
                                        <i class='bx bxs-star checked'></i>
                                        <i class='bx bxs-star checked'></i>
                                        <i class='bx bx-star'></i>
                                        <i class='bx bx-star'></i>
                                        <button href="#" class="btn btn-main rounded-pill font-size-14 position-absolute">Add to
                                            Cart</button>
                                    </div>
                                    <div class="price d-flex align-items-center gap-2">
                                        $100.00<span class="price-offer">$120.00</span>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="swiper-slide">
                        <form action="" class="p-3">
                            <div class="box bg-white rounded-4 p-2 py-3 position-relative overflow-hidden">
                                <div class="label d-flex align-items-center justify-content-between flex-row-reverse">
                                    <button type="submit" class="bg-transparent border-0">
                                        <i class='bx bx-heart font-size-24 cursor-pointer'></i>
                                    </button>
                                    <span class="rounded-pill bg-main text-white px-2 p-1">-33%</span>
                                </div>
                                <div class="image text-center mb-1">
                                    <img src="admin/images/cat_img2.png" class="img-fluid" alt="">
                                </div>
                                <div class="content">
                                    <p class="text-color-main mb-1">Headphones</p>
                                    <a href="#">
                                        <h4 class="font-size-16">Kids Headphone Builk 10 Pack Multi Colored</h4>
                                    </a>
                                    <div class="stars my-2 d-flex align-items-center">
                                        <i class='bx bxs-star checked'></i>
                                        <i class='bx bxs-star checked'></i>
                                        <i class='bx bxs-star checked'></i>
                                        <i class='bx bx-star'></i>
                                        <i class='bx bx-star'></i>
                                        <button href="#" class="btn btn-main rounded-pill font-size-14 position-absolute">Add to
                                            Cart</button>
                                    </div>
                                    <div class="price d-flex align-items-center gap-2">
                                        $100.00<span class="price-offer">$120.00</span>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="swiper-slide">
                        <form action="" class="p-3">
                            <div class="box bg-white rounded-4 p-2 py-3 position-relative overflow-hidden">
                                <div class="label d-flex align-items-center justify-content-between flex-row-reverse">
                                    <button type="submit" class="bg-transparent border-0">
                                        <i class='bx bx-heart font-size-24 cursor-pointer'></i>
                                    </button>
                                    <span class="rounded-pill bg-main text-white px-2 p-1">-33%</span>
                                </div>
                                <div class="image text-center mb-1">
                                    <img src="admin/images/cat_img6.png" class="img-fluid" alt="">
                                </div>
                                <div class="content">
                                    <p class="text-color-main mb-1">Headphones</p>
                                    <a href="#">
                                        <h4 class="font-size-16">Kids Headphone Builk 10 Pack Multi Colored</h4>
                                    </a>
                                    <div class="stars my-2 d-flex align-items-center">
                                        <i class='bx bxs-star checked'></i>
                                        <i class='bx bxs-star checked'></i>
                                        <i class='bx bxs-star checked'></i>
                                        <i class='bx bx-star'></i>
                                        <i class='bx bx-star'></i>
                                        <button href="#" class="btn btn-main rounded-pill font-size-14 position-absolute">Add to
                                            Cart</button>
                                    </div>
                                    <div class="price d-flex align-items-center gap-2">
                                        $100.00<span class="price-offer">$120.00</span>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
    <!-- End Features -->
    <!-- Start Service -->
    <?php include('services.php') ?>
    <!-- End Service -->
    <!-- Start Products -->
    <div class="products inline-swiper py-5">
        <div class="container">
            <!------------------ Put the limit 10 New ---------------->
            <div class="swiper myProducts">
                <div class="main-title">
                    <h5 class="fw-600 mb-4 user-select-none">Special Products</h5>
                    <div class="swap d-flex align-items-center gap-2">
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
                <div class="swiper-wrapper py-2">
                    <div class="swiper-slide px-3">
                        <form action="">
                            <div class="box bg-white rounded-4 p-2 row py-3 position-relative overflow-hidden">
                                <div class="col-sm-6">
                                    <div class="row">
                                        <div class="col-12 mb-3">
                                            <div class="label d-flex align-items-center justify-content-between flex-row-reverse">
                                                <button type="submit" class="bg-transparent border-0">
                                                    <i class='bx bxs-heart font-size-24 cursor-pointer'></i>
                                                </button>
                                                <div class="sales d-flex align-items-center gap-2">
                                                    <span class="rounded-pill bg-main text-white px-2 p-1 d-">-33%</span>
                                                    <a href="#" class="rounded-pill border-0 text-decoration-none bg-main d-flex align-items-center justify-content-center text-white px-2 p-1">
                                                        <i class='bx bx-cart-add font-size-22'></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-12 mb-3 show-image text-center">
                                                    <img src="admin/images/arrival-2.jpg" class="img-fluid" alt="">
                                                </div>
                                                <div class="col-6 px-1 click-image">
                                                    <img src="admin/images/arrival-2.jpg" class="img-fluid" alt="">
                                                </div>
                                                <div class="col-6 px-1 click-image">
                                                    <img src="admin/images/arrival-2-hover.jpg" class="img-fluid" alt="">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-sm-6 py-sm-4 px-lg-1 d-flex align-items-center">
                                    <div class="box-info">
                                        <p class="text-uppercase font-size-12 text-color-main fw-500">Laptops</p>
                                        <a href="#" class="line-clamp-2 text-black">
                                            HD Resolution Indoor WiFi Security Camera Core i5 , 16G RAM & 2 VGA
                                        </a>
                                        <div class="stars my-3">
                                            <i class='bx bxs-star checked'></i>
                                            <i class='bx bx-star'></i>
                                            <i class='bx bx-star'></i>
                                            <i class='bx bx-star'></i>
                                            <i class='bx bx-star'></i>
                                        </div>
                                        <div class="price my-3">
                                            $100.00 <span class="price-offer">$139.99</span>
                                        </div>
                                        <div class="day-offer my-3 d-flex align-items-center gap-1 flex-lg-column align-items-lg-start">
                                            <div class="text-black-50">
                                                <span class="fw-700 text-black me-1">300</span> Days
                                            </div>
                                            <div class="day-remain d-flex align-items-center gap-1 text-black">
                                                <span>755</span> : <span>35</span> : <span>15</span>
                                            </div>
                                        </div>
                                        <div class="product-progress">
                                            <span class="font-size-13 text-black-50">Products 65</span>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-label="Basic example" style="width: 74%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <input type="submit" class="btn btn-main rounded-pill mt-3" disabled value="Add to Cart">
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                    <div class="swiper-slide px-3">
                        <form action="">
                            <div class="box bg-white rounded-4 p-2 row py-3 position-relative overflow-hidden">
                                <div class="col-sm-6">
                                    <div class="row">
                                        <div class="col-12 mb-3">
                                            <div class="label d-flex align-items-center justify-content-between flex-row-reverse">
                                                <button type="submit" class="bg-transparent border-0">
                                                    <i class='bx bxs-heart font-size-24 cursor-pointer'></i>
                                                </button>
                                                <div class="sales d-flex align-items-center gap-2">
                                                    <span class="rounded-pill bg-main text-white px-2 p-1 d-">-33%</span>
                                                    <a href="#" class="rounded-pill border-0 text-decoration-none bg-main d-flex align-items-center justify-content-center text-white px-2 p-1">
                                                        <i class='bx bx-cart-add font-size-22'></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-12 mb-3 show-image text-center">
                                                    <img src="admin/images/arrival-3.jpg" class="img-fluid" alt="">
                                                </div>
                                                <div class="col-6 px-1 click-image">
                                                    <img src="admin/images/arrival-3.jpg" class="img-fluid" alt="">
                                                </div>
                                                <div class="col-6 px-1 click-image">
                                                    <img src="admin/images/arrival-3-hover.jpg" class="img-fluid" alt="">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-sm-6 py-sm-4 px-lg-1 d-flex align-items-center">
                                    <div class="box-info">
                                        <p class="text-uppercase font-size-12 text-color-main fw-500">Phones</p>
                                        <a href="#" class="line-clamp-2 text-black">
                                            HD Resolution Indoor WiFi Security Camera Core i5 , 16G RAM & 2 VGA
                                        </a>
                                        <div class="stars my-3">
                                            <i class='bx bxs-star checked'></i>
                                            <i class='bx bx-star'></i>
                                            <i class='bx bx-star'></i>
                                            <i class='bx bx-star'></i>
                                            <i class='bx bx-star'></i>
                                        </div>
                                        <div class="price my-3">
                                            $100.00 <span class="price-offer">$139.99</span>
                                        </div>
                                        <div class="day-offer my-3 d-flex align-items-center gap-1 flex-lg-column align-items-lg-start">
                                            <div class="text-black-50">
                                                <span class="fw-700 text-black me-1">300</span> Days
                                            </div>
                                            <div class="day-remain d-flex align-items-center gap-1 text-black">
                                                <span>755</span> : <span>35</span> : <span>15</span>
                                            </div>
                                        </div>
                                        <div class="product-progress">
                                            <span class="font-size-13 text-black-50">Products 65</span>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-label="Basic example" style="width: 74%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <input type="submit" class="btn btn-main rounded-pill mt-3" value="Add to Cart">
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                    <div class="swiper-slide px-3">
                        <form action="">
                            <div class="box bg-white rounded-4 p-2 row py-3 position-relative overflow-hidden">
                                <div class="col-sm-6">
                                    <div class="row">
                                        <div class="col-12 mb-3">
                                            <div class="label d-flex align-items-center justify-content-between flex-row-reverse">
                                                <button type="submit" class="bg-transparent border-0">
                                                    <i class='bx bxs-heart font-size-24 cursor-pointer'></i>
                                                </button>
                                                <div class="sales d-flex align-items-center gap-2">
                                                    <span class="rounded-pill bg-main text-white px-2 p-1 d-">-33%</span>
                                                    <a href="#" class="rounded-pill border-0 text-decoration-none bg-main d-flex align-items-center justify-content-center text-white px-2 p-1">
                                                        <i class='bx bx-cart-add font-size-22'></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-12 mb-3 show-image text-center">
                                                    <img src="admin/images/arrival-5.jpg" class="img-fluid" alt="">
                                                </div>
                                                <div class="col-6 px-1 click-image">
                                                    <img src="admin/images/arrival-5.jpg" class="img-fluid" alt="">
                                                </div>
                                                <div class="col-6 px-1 click-image">
                                                    <img src="admin/images/arrival-5-hover.jpg" class="img-fluid" alt="">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-sm-6 py-sm-4 px-lg-1 d-flex align-items-center">
                                    <div class="box-info">
                                        <p class="text-uppercase font-size-12 text-color-main fw-500">HeadPhones</p>
                                        <a href="#" class="line-clamp-2 text-black">
                                            HD Resolution Indoor WiFi Security Camera Core i5 , 16G RAM & 2 VGA
                                        </a>
                                        <div class="stars my-3">
                                            <i class='bx bxs-star checked'></i>
                                            <i class='bx bx-star'></i>
                                            <i class='bx bx-star'></i>
                                            <i class='bx bx-star'></i>
                                            <i class='bx bx-star'></i>
                                        </div>
                                        <div class="price my-3">
                                            $100.00 <span class="price-offer">$139.99</span>
                                        </div>
                                        <div class="day-offer my-3 d-flex align-items-center gap-1 flex-lg-column align-items-lg-start">
                                            <div class="text-black-50">
                                                <span class="fw-700 text-black me-1">300</span> Days
                                            </div>
                                            <div class="day-remain d-flex align-items-center gap-1 text-black">
                                                <span>755</span> : <span>35</span> : <span>15</span>
                                            </div>
                                        </div>
                                        <div class="product-progress">
                                            <span class="font-size-13 text-black-50">Products 65</span>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-label="Basic example" style="width: 74%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <input type="submit" class="btn btn-main rounded-pill mt-3" value="Add to Cart">
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                    <div class="swiper-slide px-3">
                        <form action="">
                            <div class="box bg-white rounded-4 p-2 row py-3 position-relative overflow-hidden">
                                <div class="col-sm-6">
                                    <div class="row">
                                        <div class="col-12 mb-3">
                                            <div class="label d-flex align-items-center justify-content-between flex-row-reverse">
                                                <button type="submit" class="bg-transparent border-0">
                                                    <i class='bx bxs-heart font-size-24 cursor-pointer'></i>
                                                </button>
                                                <div class="sales d-flex align-items-center gap-2">
                                                    <span class="rounded-pill bg-main text-white px-2 p-1 d-">-33%</span>
                                                    <a href="#" class="rounded-pill border-0 text-decoration-none bg-main d-flex align-items-center justify-content-center text-white px-2 p-1">
                                                        <i class='bx bx-cart-add font-size-22'></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-12 mb-3 show-image text-center">
                                                    <img src="admin/images/product-6.jpg" class="img-fluid" alt="">
                                                </div>
                                                <div class="col-6 px-1 click-image">
                                                    <img src="admin/images/product-6.jpg" class="img-fluid" alt="">
                                                </div>
                                                <div class="col-6 px-1 click-image">
                                                    <img src="admin/images/product-6-hover.jpg" class="img-fluid" alt="">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-sm-6 py-sm-4 px-lg-1 d-flex align-items-center">
                                    <div class="box-info">
                                        <p class="text-uppercase font-size-12 text-color-main fw-500">Laptops</p>
                                        <a href="#" class="line-clamp-2 text-black">
                                            HD Resolution Indoor WiFi Security Camera Core i5 , 16G RAM & 2 VGA
                                        </a>
                                        <div class="stars my-3">
                                            <i class='bx bxs-star checked'></i>
                                            <i class='bx bx-star'></i>
                                            <i class='bx bx-star'></i>
                                            <i class='bx bx-star'></i>
                                            <i class='bx bx-star'></i>
                                        </div>
                                        <div class="price my-3">
                                            $100.00 <span class="price-offer">$139.99</span>
                                        </div>
                                        <div class="day-offer my-3 d-flex align-items-center gap-1 flex-lg-column align-items-lg-start">
                                            <div class="text-black-50">
                                                <span class="fw-700 text-black me-1">300</span> Days
                                            </div>
                                            <div class="day-remain d-flex align-items-center gap-1 text-black">
                                                <span>755</span> : <span>35</span> : <span>15</span>
                                            </div>
                                        </div>
                                        <div class="product-progress">
                                            <span class="font-size-13 text-black-50">Products 65</span>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-label="Basic example" style="width: 74%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <input type="submit" class="btn btn-main rounded-pill mt-3" disabled value="Add to Cart">
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            <!------------------ Put the limit 10 Almost Done---------------->
            <div class="swiper d-none d-lg-block myProducts">
                <div class="swiper-wrapper py-2">
                    <div class="swiper-slide px-3">
                        <form action="">
                            <div class="box bg-white rounded-4 p-2 row py-3 position-relative overflow-hidden">
                                <div class="col-sm-6">
                                    <div class="row">
                                        <div class="col-12 mb-3">
                                            <div class="label d-flex align-items-center justify-content-between flex-row-reverse">
                                                <button type="submit" class="bg-transparent border-0">
                                                    <i class='bx bxs-heart font-size-24 cursor-pointer'></i>
                                                </button>
                                                <div class="sales d-flex align-items-center gap-2">
                                                    <span class="rounded-pill bg-main text-white px-2 p-1 d-">-33%</span>
                                                    <a href="#" class="rounded-pill border-0 text-decoration-none bg-main d-flex align-items-center justify-content-center text-white px-2 p-1">
                                                        <i class='bx bx-cart-add font-size-22'></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-12 mb-3 show-image text-center">
                                                    <img src="admin/images/arrival-6.jpg" class="img-fluid" alt="">
                                                </div>
                                                <div class="col-6 px-1 click-image">
                                                    <img src="admin/images/arrival-6.jpg" class="img-fluid" alt="">
                                                </div>
                                                <div class="col-6 px-1 click-image">
                                                    <img src="admin/images/arrival-6-hover.jpg" class="img-fluid" alt="">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-sm-6 py-sm-4 px-lg-1 d-flex align-items-center">
                                    <div class="box-info">
                                        <p class="text-uppercase font-size-12 text-color-main fw-500">Laptops</p>
                                        <a href="#" class="line-clamp-2 text-black">
                                            HD Resolution Indoor WiFi Security Camera Core i5 , 16G RAM & 2 VGA
                                        </a>
                                        <div class="stars my-3">
                                            <i class='bx bxs-star checked'></i>
                                            <i class='bx bx-star'></i>
                                            <i class='bx bx-star'></i>
                                            <i class='bx bx-star'></i>
                                            <i class='bx bx-star'></i>
                                        </div>
                                        <div class="price my-3">
                                            $100.00 <span class="price-offer">$139.99</span>
                                        </div>
                                        <div class="day-offer my-3 d-flex align-items-center gap-1 flex-lg-column align-items-lg-start">
                                            <div class="text-black-50">
                                                <span class="fw-700 text-black me-1">300</span> Days
                                            </div>
                                            <div class="day-remain d-flex align-items-center gap-1 text-black">
                                                <span>755</span> : <span>35</span> : <span>15</span>
                                            </div>
                                        </div>
                                        <div class="product-progress">
                                            <span class="font-size-13 text-black-50">Products 65</span>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-label="Basic example" style="width: 74%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                        </div>
                                        <input type="submit" class="btn btn-main rounded-pill mt-3" value="Add to Cart">
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                    <div class="swiper-slide px-3">
                        <form action="">
                            <div class="box bg-white rounded-4 p-2 row py-3 position-relative overflow-hidden">
                                <div class="col-sm-6">
                                    <div class="row">
                                        <div class="col-12 mb-3">
                                            <div class="label d-flex align-items-center justify-content-between flex-row-reverse">
                                                <button type="submit" class="bg-transparent border-0">
                                                    <i class='bx bxs-heart font-size-24 cursor-pointer'></i>
                                                </button>
                                                <div class="sales d-flex align-items-center gap-2">
                                                    <span class="rounded-pill bg-main text-white px-2 p-1 d-">-33%</span>
                                                    <a href="#" class="rounded-pill border-0 text-decoration-none bg-main d-flex align-items-center justify-content-center text-white px-2 p-1">
                                                        <i class='bx bx-cart-add font-size-22'></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-12 mb-3 show-image text-center">
                                                    <img src="admin/images/product-1.jpg" class="img-fluid" alt="">
                                                </div>
                                                <div class="col-6 px-1 click-image">
                                                    <img src="admin/images/product-1.jpg" class="img-fluid" alt="">
                                                </div>
                                                <div class="col-6 px-1 click-image">
                                                    <img src="admin/images/product-1-hover.jpg" class="img-fluid" alt="">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-sm-6 py-sm-4 px-lg-1 d-flex align-items-center">
                                    <div class="box-info">
                                        <p class="text-uppercase font-size-12 text-color-main fw-500">Phones</p>
                                        <a href="#" class="line-clamp-2 text-black">
                                            HD Resolution Indoor WiFi Security Camera Core i5 , 16G RAM & 2 VGA
                                        </a>
                                        <div class="stars my-3">
                                            <i class='bx bxs-star checked'></i>
                                            <i class='bx bx-star'></i>
                                            <i class='bx bx-star'></i>
                                            <i class='bx bx-star'></i>
                                            <i class='bx bx-star'></i>
                                        </div>
                                        <div class="price my-3">
                                            $100.00 <span class="price-offer">$139.99</span>
                                        </div>
                                        <div class="day-offer my-3 d-flex align-items-center gap-1 flex-lg-column align-items-lg-start">
                                            <div class="text-black-50">
                                                <span class="fw-700 text-black me-1">300</span> Days
                                            </div>
                                            <div class="day-remain d-flex align-items-center gap-1 text-black">
                                                <span>755</span> : <span>35</span> : <span>15</span>
                                            </div>
                                        </div>
                                        <div class="product-progress">
                                            <span class="font-size-13 text-black-50">Products 65</span>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-label="Basic example" style="width: 74%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                        </div>
                                        <input type="submit" class="btn btn-main rounded-pill mt-3" value="Add to Cart">
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                    <div class="swiper-slide px-3">
                        <form action="">
                            <div class="box bg-white rounded-4 p-2 row py-3 position-relative overflow-hidden">
                                <div class="col-sm-6">
                                    <div class="row">
                                        <div class="col-12 mb-3">
                                            <div class="label d-flex align-items-center justify-content-between flex-row-reverse">
                                                <button type="submit" class="bg-transparent border-0">
                                                    <i class='bx bxs-heart font-size-24 cursor-pointer'></i>
                                                </button>
                                                <div class="sales d-flex align-items-center gap-2">
                                                    <span class="rounded-pill bg-main text-white px-2 p-1 d-">-33%</span>
                                                    <a href="#" class="rounded-pill border-0 text-decoration-none bg-main d-flex align-items-center justify-content-center text-white px-2 p-1">
                                                        <i class='bx bx-cart-add font-size-22'></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-12 mb-3 show-image text-center">
                                                    <img src="admin/images/product-5.jpg" class="img-fluid" alt="">
                                                </div>
                                                <div class="col-6 px-1 click-image">
                                                    <img src="admin/images/product-5.jpg" class="img-fluid" alt="">
                                                </div>
                                                <div class="col-6 px-1 click-image">
                                                    <img src="admin/images/product-5-hover.jpg" class="img-fluid" alt="">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-sm-6 py-sm-4 px-lg-1 d-flex align-items-center">
                                    <div class="box-info">
                                        <p class="text-uppercase font-size-12 text-color-main fw-500">HeadPhones</p>
                                        <a href="#" class="line-clamp-2 text-black">
                                            HD Resolution Indoor WiFi Security Camera Core i5 , 16G RAM & 2 VGA
                                        </a>
                                        <div class="stars my-3">
                                            <i class='bx bxs-star checked'></i>
                                            <i class='bx bx-star'></i>
                                            <i class='bx bx-star'></i>
                                            <i class='bx bx-star'></i>
                                            <i class='bx bx-star'></i>
                                        </div>
                                        <div class="price my-3">
                                            $100.00 <span class="price-offer">$139.99</span>
                                        </div>
                                        <div class="day-offer my-3 d-flex align-items-center gap-1 flex-lg-column align-items-lg-start">
                                            <div class="text-black-50">
                                                <span class="fw-700 text-black me-1">300</span> Days
                                            </div>
                                            <div class="day-remain d-flex align-items-center gap-1 text-black">
                                                <span>755</span> : <span>35</span> : <span>15</span>
                                            </div>
                                        </div>
                                        <div class="product-progress">
                                            <span class="font-size-13 text-black-50">Products 65</span>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-label="Basic example" style="width: 74%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                        </div>
                                        <input type="submit" class="btn btn-main rounded-pill mt-3" value="Add to Cart">
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                    <div class="swiper-slide px-3">
                        <form action="">
                            <div class="box bg-white rounded-4 p-2 row py-3 position-relative overflow-hidden">
                                <div class="col-sm-6">
                                    <div class="row">
                                        <div class="col-12 mb-3">
                                            <div class="label d-flex align-items-center justify-content-between flex-row-reverse">
                                                <button type="submit" class="bg-transparent border-0">
                                                    <i class='bx bxs-heart font-size-24 cursor-pointer'></i>
                                                </button>
                                                <div class="sales d-flex align-items-center gap-2">
                                                    <span class="rounded-pill bg-main text-white px-2 p-1 d-">-33%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-12 mb-3 show-image text-center">
                                                    <img src="admin/images/product-2.jpg" class="img-fluid" alt="">
                                                </div>
                                                <div class="col-6 px-1 click-image">
                                                    <img src="admin/images/product-2.jpg" class="img-fluid" alt="">
                                                </div>
                                                <div class="col-6 px-1 click-image">
                                                    <img src="admin/images/product-2-hover.jpg" class="img-fluid" alt="">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-sm-6 py-sm-4 px-lg-1 d-flex align-items-center">
                                    <div class="box-info">
                                        <p class="text-uppercase font-size-12 text-color-main fw-500">Laptops</p>
                                        <a href="#" class="line-clamp-2 text-black">
                                            HD Resolution Indoor WiFi Security Camera Core i5 , 16G RAM & 2 VGA
                                        </a>
                                        <div class="stars my-3">
                                            <i class='bx bxs-star checked'></i>
                                            <i class='bx bx-star'></i>
                                            <i class='bx bx-star'></i>
                                            <i class='bx bx-star'></i>
                                            <i class='bx bx-star'></i>
                                        </div>
                                        <div class="price my-3">
                                            $100.00 <span class="price-offer">$139.99</span>
                                        </div>
                                        <div class="day-offer my-3 d-flex align-items-center gap-1 flex-lg-column align-items-lg-start">
                                            <div class="text-black-50">
                                                <span class="fw-700 text-black me-1">300</span> Days
                                            </div>
                                            <div class="day-remain d-flex align-items-center gap-1 text-black">
                                                <span>755</span> : <span>35</span> : <span>15</span>
                                            </div>
                                        </div>
                                        <div class="product-progress">
                                            <span class="font-size-13 text-black-50">Products 65</span>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-label="Basic example" style="width: 74%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                        </div>
                                        <input type="submit" class="btn btn-main rounded-pill mt-3" value="Add to Cart">
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Products -->
    <!-- Start Client -->
    <?php include('clients.php') ?>
    <!-- End Client -->
    <!-- Start Blogs -->
    <div class="blogs py-5">
        <div class="container">
            <h5 class="fw-600 mb-4 user-select-none">Our Latest News</h5>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="box rounded-4 overflow-hidden bg-white">
                        <img src="admin/images/blog-1.jpg" class="img-fluid w-100" alt="">
                        <div class="info p-3">
                            <h4 class="font-size-20">How to choose perfects gadgets</h4>
                            <p class="text-black-50 font-size-14 line-clamp-3">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magni, dignissimos, illum
                                culpa voluptates, quia ex quam quod eius sunt distinctio in repudiandae possimus
                                odit
                                doloribus eveniet commodi adipisci ipsam ea.
                            </p>
                            <a href="#" class="btn btn-main-alt rounded-pill">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blogs -->

    <?php include('partials/footer.php') ?>

    <!-- Start Script -->
    <?php include('partials/foot.php') ?>


    <script>
        var splide = new Splide(".splide", {
            type: "loop",
            perPage: 5,
            perMove: 1,
            autoplay: true,
            breakpoints: {
                991: {
                    perPage: 4,
                    gap: '.7rem',
                    height: '6rem',
                },
                767: {
                    perPage: 3,
                    gap: '.7rem',
                    height: '6rem',
                },
            },
        });

        splide.mount();
    </script>
</body>

</html>