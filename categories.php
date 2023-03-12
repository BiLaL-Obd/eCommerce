<?php include('partials/head.php') ?>

<body>
    <?php include('partials/header.php') ?>

    <!-- Start Categories -->
    <div class="categories py-5">
        <div class="container">
            <h1 class="text-uppercase text-center mb-5">Shop Categories</h1>
            <form class="row">
                <div class="col-12">
                    <div class="header bg-white box-shadow p-2 px-4 mb-3 rounded-4 d-flex align-items-center justify-content-center">
                        <ul class="category-filter list-unstyled d-flex align-items-center justify-content-center gap-3 flex-wrap m-0">
                            <li class="text-uppercase active" data-category=".all">
                                All
                            </li>
                            <li class="text-uppercase" data-category=".phone">
                                Phones
                            </li>
                            <li class="text-uppercase" data-category=".headphone">
                                Headphones
                            </li>
                            <li class="text-uppercase" data-category=".earphone">
                                Earphones
                            </li>
                            <li class="text-uppercase" data-category=".watch">
                                Watches
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 mb-3 all phone">
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
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="stars my-2">
                                    <i class='bx bxs-star checked'></i>
                                    <i class='bx bx-star'></i>
                                    <i class='bx bx-star'></i>
                                    <i class='bx bx-star'></i>
                                    <i class='bx bx-star'></i>
                                </div>
                                <button href="#" class="btn btn-main rounded-pill font-size-14" disabled>Add
                                    to
                                    Cart</button>
                            </div>
                            <div class="price d-flex align-items-center gap-2">
                                $100.00<span class="price-only">-only-</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 mb-3 all headphone">
                    <div class="box bg-white rounded-4 p-2 py-3 position-relative overflow-hidden">
                        <div class="label d-flex align-items-center justify-content-between flex-row-reverse">
                            <button type="submit" class="bg-transparent border-0">
                                <i class='bx bxs-heart font-size-24 cursor-pointer'></i>
                            </button>
                            <div class="sales d-flex align-items-center gap-2">
                                <span class="rounded-pill bg-main text-white px-2 p-1 d-">-33%</span>
                                <a href="#" class="rounded-pill border-0 text-decoration-none bg-main d-none align-items-center justify-content-center text-white px-2 p-1">
                                    <i class='bx bx-cart-add font-size-22'></i>
                                </a>
                            </div>
                        </div>
                        <div class="image text-center mb-1">
                            <img src="admin/images/product-1.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="content">
                            <p class="text-color-main mb-1">Headphones</p>
                            <a href="#">
                                <h4 class="font-size-16">Kids Headphone Builk 10 Pack Multi Colored</h4>
                            </a>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="stars my-2 ">
                                    <i class='bx bxs-star checked'></i>
                                    <i class='bx bx-star'></i>
                                    <i class='bx bx-star'></i>
                                    <i class='bx bx-star'></i>
                                    <i class='bx bx-star'></i>
                                </div>
                                <button href="#" class="btn btn-main rounded-pill font-size-14">Add
                                    to
                                    Cart</button>
                            </div>
                            <div class="price d-flex align-items-center gap-2">
                                $100.00<span class="price-only">-only-</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 mb-3 all earphone">
                    <div class="box bg-white rounded-4 p-2 py-3 position-relative overflow-hidden">
                        <div class="label d-flex align-items-center justify-content-between flex-row-reverse">
                            <button type="submit" class="bg-transparent border-0">
                                <i class='bx bxs-heart font-size-24 cursor-pointer'></i>
                            </button>
                            <div class="sales d-flex align-items-center gap-2">
                                <span class="rounded-pill bg-main text-white px-2 p-1 d-">-33%</span>
                                <a href="#" class="rounded-pill border-0 text-decoration-none bg-main d-none align-items-center justify-content-center text-white px-2 p-1">
                                    <i class='bx bx-cart-add font-size-22'></i>
                                </a>
                            </div>
                        </div>
                        <div class="image text-center mb-1">
                            <img src="admin/images/product-1.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="content">
                            <p class="text-color-main mb-1">Headphones</p>
                            <a href="#">
                                <h4 class="font-size-16">Kids Headphone Builk 10 Pack Multi Colored</h4>
                            </a>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="stars my-2 ">
                                    <i class='bx bxs-star checked'></i>
                                    <i class='bx bx-star'></i>
                                    <i class='bx bx-star'></i>
                                    <i class='bx bx-star'></i>
                                    <i class='bx bx-star'></i>
                                </div>
                                <button href="#" class="btn btn-main rounded-pill font-size-14">Add
                                    to
                                    Cart</button>
                            </div>
                            <div class="price d-flex align-items-center gap-2">
                                $100.00<span class="price-only">-only-</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 mb-3 all watch">
                    <div class="box bg-white rounded-4 p-2 py-3 position-relative overflow-hidden">
                        <div class="label d-flex align-items-center justify-content-between flex-row-reverse">
                            <button type="submit" class="bg-transparent border-0">
                                <i class='bx bxs-heart font-size-24 cursor-pointer'></i>
                            </button>
                            <div class="sales d-flex align-items-center gap-2">
                                <span class="rounded-pill bg-main text-white px-2 p-1 d-">-33%</span>
                                <a href="#" class="rounded-pill border-0 text-decoration-none bg-main d-none align-items-center justify-content-center text-white px-2 p-1">
                                    <i class='bx bx-cart-add font-size-22'></i>
                                </a>
                            </div>
                        </div>
                        <div class="image text-center mb-1">
                            <img src="admin/images/product-1.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="content">
                            <p class="text-color-main mb-1">Headphones</p>
                            <a href="#">
                                <h4 class="font-size-16">Kids Headphone Builk 10 Pack Multi Colored</h4>
                            </a>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="stars my-2 ">
                                    <i class='bx bxs-star checked'></i>
                                    <i class='bx bx-star'></i>
                                    <i class='bx bx-star'></i>
                                    <i class='bx bx-star'></i>
                                    <i class='bx bx-star'></i>
                                </div>
                                <button href="#" class="btn btn-main rounded-pill font-size-14">Add
                                    to
                                    Cart</button>
                            </div>
                            <div class="price d-flex align-items-center gap-2">
                                $100.00<span class="price-only">-only-</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 mb-3 all phone">
                    <div class="box bg-white rounded-4 p-2 py-3 position-relative overflow-hidden">
                        <div class="label d-flex align-items-center justify-content-between flex-row-reverse">
                            <button type="submit" class="bg-transparent border-0">
                                <i class='bx bxs-heart font-size-24 cursor-pointer'></i>
                            </button>
                            <div class="sales d-flex align-items-center gap-2">
                                <span class="rounded-pill bg-main text-white px-2 p-1 d-">-33%</span>
                                <a href="#" class="rounded-pill border-0 text-decoration-none bg-main d-none align-items-center justify-content-center text-white px-2 p-1">
                                    <i class='bx bx-cart-add font-size-22'></i>
                                </a>
                            </div>
                        </div>
                        <div class="image text-center mb-1">
                            <img src="admin/images/product-1.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="content">
                            <p class="text-color-main mb-1">Headphones</p>
                            <a href="#">
                                <h4 class="font-size-16">Kids Headphone Builk 10 Pack Multi Colored</h4>
                            </a>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="stars my-2 ">
                                    <i class='bx bxs-star checked'></i>
                                    <i class='bx bx-star'></i>
                                    <i class='bx bx-star'></i>
                                    <i class='bx bx-star'></i>
                                    <i class='bx bx-star'></i>
                                </div>
                                <button href="#" class="btn btn-main rounded-pill font-size-14">Add
                                    to
                                    Cart</button>
                            </div>
                            <div class="price d-flex align-items-center gap-2">
                                $100.00<span class="price-only">-only-</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 mb-3 all earphone">
                    <div class="box bg-white rounded-4 p-2 py-3 position-relative overflow-hidden">
                        <div class="label d-flex align-items-center justify-content-between flex-row-reverse">
                            <button type="submit" class="bg-transparent border-0">
                                <i class='bx bxs-heart font-size-24 cursor-pointer'></i>
                            </button>
                            <div class="sales d-flex align-items-center gap-2">
                                <span class="rounded-pill bg-main text-white px-2 p-1 d-">-33%</span>
                                <a href="#" class="rounded-pill border-0 text-decoration-none bg-main d-none align-items-center justify-content-center text-white px-2 p-1">
                                    <i class='bx bx-cart-add font-size-22'></i>
                                </a>
                            </div>
                        </div>
                        <div class="image text-center mb-1">
                            <img src="admin/images/product-1.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="content">
                            <p class="text-color-main mb-1">Headphones</p>
                            <a href="#">
                                <h4 class="font-size-16">Kids Headphone Builk 10 Pack Multi Colored</h4>
                            </a>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="stars my-2 ">
                                    <i class='bx bxs-star checked'></i>
                                    <i class='bx bx-star'></i>
                                    <i class='bx bx-star'></i>
                                    <i class='bx bx-star'></i>
                                    <i class='bx bx-star'></i>
                                </div>
                                <button href="#" class="btn btn-main rounded-pill font-size-14">Add
                                    to
                                    Cart</button>
                            </div>
                            <div class="price d-flex align-items-center gap-2">
                                $100.00<span class="price-only">-only-</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 mb-3 all headphone">
                    <div class="box bg-white rounded-4 p-2 py-3 position-relative overflow-hidden">
                        <div class="label d-flex align-items-center justify-content-between flex-row-reverse">
                            <button type="submit" class="bg-transparent border-0">
                                <i class='bx bxs-heart font-size-24 cursor-pointer'></i>
                            </button>
                            <div class="sales d-flex align-items-center gap-2">
                                <span class="rounded-pill bg-main text-white px-2 p-1 d-">-33%</span>
                                <a href="#" class="rounded-pill border-0 text-decoration-none bg-main d-none align-items-center justify-content-center text-white px-2 p-1">
                                    <i class='bx bx-cart-add font-size-22'></i>
                                </a>
                            </div>
                        </div>
                        <div class="image text-center mb-1">
                            <img src="admin/images/product-1.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="content">
                            <p class="text-color-main mb-1">Headphones</p>
                            <a href="#">
                                <h4 class="font-size-16">Kids Headphone Builk 10 Pack Multi Colored</h4>
                            </a>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="stars my-2 ">
                                    <i class='bx bxs-star checked'></i>
                                    <i class='bx bx-star'></i>
                                    <i class='bx bx-star'></i>
                                    <i class='bx bx-star'></i>
                                    <i class='bx bx-star'></i>
                                </div>
                                <button href="#" class="btn btn-main rounded-pill font-size-14">Add
                                    to
                                    Cart</button>
                            </div>
                            <div class="price d-flex align-items-center gap-2">
                                $100.00<span class="price-only">-only-</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="pagination bg-white box-shadow p-2 px-4 rounded-4 gap-2 flex-column flex-lg-row d-flex align-items-center justify-content-between">
                        <div class="count-products">
                            show 7 products from 50
                        </div>
                        <ul class="list-unstyled d-flex align-items-center gap-2 m-0">
                            <li>
                                <a href="#">1</a>
                            </li>
                            <li>
                                <a href="#">2</a>
                            </li>
                            <li class="pagination-next bg-transparent">
                                <a href="#" class="d-flex align-items-center justify-content-center">
                                    <i class='bx bx-chevrons-right font-size-20'></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- End Categories -->

    <?php include('partials/footer.php') ?>

    <!-- Start Script -->

    <!-- JavaScript Bundle with Popper -->
    <?php include('partials/foot.php') ?>
</body>

</html>