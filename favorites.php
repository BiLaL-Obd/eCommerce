<?php include('partials/head.php') ?>

<body>
    <?php include('partials/header.php') ?>
    <div class="favorite py-5">
        <div class="container">
            <h1 class="text-uppercase mb-5">Your Favorites</h1>
            <div class="row">
                <div class="col-lg-4">
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
                                <a href="category-details.php">
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
            </div>
        </div>
    </div>
</body>
<?php include('partials/footer.php') ?>
<!-- Start Script -->

<!-- JavaScript Bundle with Popper -->
<?php include('partials/foot.php') ?>
</body>

</html>