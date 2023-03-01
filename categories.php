<?php include('partials/head.php') ?>

<body>
    <?php include('partials/header.php') ?>

    <!-- Start Categories -->
    <div class="categories py-5">
        <div class="container">
            <h1 class="text-uppercase text-center mb-5">Shop Categories</h1>
            <form class="row">
                <div class="col-md-3 menu-filter">
                    <div class="row">
                        <div class="col-12 mb-1 close d-lg-none">
                            <div class="p-1 px-4 bg-white d-flex align-items-center justify-content-end cursor-pointer">
                                close
                                <i class='bx bx-x font-size-20'></i>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="menu p-3 px-4">
                                <ul class="list-unstyled">
                                    <li class="text-uppercase py-1">
                                        <h6> shop Categories</h6>
                                    </li>
                                    <li class="py-1"><a href="index.html" class="a-angle-hover text-black font-size-14">Home</a></li>
                                    <li class="py-1"><a href="blogs.html" class="a-angle-hover text-black font-size-14">Blogs</a></li>
                                    <li class="py-1"><a href="about.html" class="a-angle-hover text-black font-size-14">About Us</a>
                                    </li>
                                    <li class="py-1"><a href="contact.html" class="a-angle-hover text-black font-size-14">Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="filter  p-3 px-4">
                                <h6 class="text-uppercase mb-3">Filter By :</h6>
                                <div class="search mb-4 position-relative">
                                    <input type="text" class="font-size-14 form-control rounded-pill p-2 px-4" placeholder="Search Here" name="" id="">
                                    <span class=" position-absolute"><i class='bx bx-search-alt-2 font-size-24'></i></span>
                                </div>
                                <div class="category mb-4">
                                    <p class="fw-500 font-size-15 mb-1">Category Tag</p>
                                    <ul class="list-unstyled d-flex flex-wrap gap-1">
                                        <li>
                                            <a href="#" class="font-size-13 text-black fw-400">
                                                Phones
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="font-size-13 text-black fw-400">
                                                Camera
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="font-size-13 text-black fw-400">
                                                Speakers
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="font-size-13 text-black fw-400">
                                                Television
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="font-size-13 text-black fw-400">
                                                Earphones
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#" class="font-size-13 text-black fw-400">
                                                Headphones
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="price mb-4">
                                    <p class="fw-500 font-size-15 mb-1">Price</p>
                                    <div class="d-flex align-items-center gap-2 justify-content-between">
                                        <div class="d-flex align-items-end">
                                            $ <input type="number" name="" min="1" class="form-control ps-2 p-1 pb-0" placeholder="10.00" id="">
                                        </div>
                                        <div class="d-flex align-items-end">
                                            $ <input type="number" name="" min="15" step="5" class="form-control ps-2 p-1 pb-0" placeholder="To" id="">
                                        </div>
                                    </div>
                                </div>
                                <div class="stars mb-4">
                                    <p class="fw-500 font-size-15 mb-1">Stars</p>
                                    <ul class="list-unstyled">
                                        <li class="py-1">
                                            <a href="#" class="font-size-13 text-black-50 d-flex align-items-center gap-3">
                                                <div class="stars d-flex align-items-center">
                                                    <i class='bx bxs-star checked'></i>
                                                    <i class='bx bxs-star checked'></i>
                                                    <i class='bx bxs-star checked'></i>
                                                    <i class='bx bxs-star checked'></i>
                                                    <i class='bx bxs-star checked'></i>
                                                </div>
                                                5 Stars
                                            </a>
                                        </li>
                                        <li class="py-1">
                                            <a href="#" class="font-size-13 text-black-50 d-flex align-items-center gap-3">
                                                <div class="stars d-flex align-items-center">
                                                    <i class='bx bxs-star checked'></i>
                                                    <i class='bx bxs-star checked'></i>
                                                    <i class='bx bxs-star checked'></i>
                                                    <i class='bx bxs-star checked'></i>
                                                    <i class='bx bx-star'></i>
                                                </div>
                                                4 Stars
                                            </a>
                                        </li>
                                        <li class="py-1">
                                            <a href="#" class="font-size-13 text-black-50 d-flex align-items-center gap-3">
                                                <div class="stars d-flex align-items-center">
                                                    <i class='bx bxs-star checked'></i>
                                                    <i class='bx bxs-star checked'></i>
                                                    <i class='bx bxs-star checked'></i>
                                                    <i class='bx bx-star'></i>
                                                    <i class='bx bx-star'></i>
                                                </div>
                                                3 Stars
                                            </a>
                                        </li>
                                        <li class="py-1">
                                            <a href="#" class="font-size-13 text-black-50 d-flex align-items-center gap-3">
                                                <div class="stars d-flex align-items-center">
                                                    <i class='bx bxs-star checked'></i>
                                                    <i class='bx bxs-star checked'></i>
                                                    <i class='bx bx-star'></i>
                                                    <i class='bx bx-star'></i>
                                                    <i class='bx bx-star'></i>
                                                </div>
                                                2 Stars
                                            </a>
                                        </li>
                                        <li class="py-1">
                                            <a href="#" class="font-size-13 text-black-50 d-flex align-items-center gap-3">
                                                <div class="stars d-flex align-items-center">
                                                    <i class='bx bxs-star checked'></i>
                                                    <i class='bx bx-star'></i>
                                                    <i class='bx bx-star'></i>
                                                    <i class='bx bx-star'></i>
                                                    <i class='bx bx-star'></i>
                                                </div>
                                                1 Stars
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 list-filter">
                    <div class="row">
                        <div class="col-12">
                            <h6 class="text-uppercase ps-3">All</h6>
                        </div>
                        <div class="col-12">
                            <div class="header bg-white box-shadow p-1 px-4 mb-3 rounded-4 d-flex align-items-center justify-content-between">
                                <div class="category-filter cursor-pointer w-fit-content">
                                    <i class='bx bx-slider-alt d-block d-lg-none bx-rotate-90 font-size-24'></i>
                                </div>
                                <a href="categories.html" class="btn btn-main-alt rounded-pill font-size-12">Reset</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4 mb-3">
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
                        <div class="col-md-6 col-xl-4 mb-3">
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
                        <div class="col-md-6 col-xl-4 mb-3">
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
                        <div class="col-md-6 col-xl-4 mb-3">
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
                        <div class="col-md-6 col-xl-4 mb-3">
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
                        <div class="col-md-6 col-xl-4 mb-3">
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
                        <div class="col-md-6 col-xl-4 mb-3">
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
                            <div class="pagination bg-white box-shadow p-2 px-4 rounded-4 d-flex align-items-center justify-content-between">
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