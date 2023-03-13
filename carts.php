<?php include('partials/head.php') ?>

<body>
    <?php include('partials/header.php') ?>

    <div class="cart py-5">
        <div class="container">
            <h1 class="text-uppercase mb-5">Your Shopping Cart</h1>
            <table class="table table-hover bg-white rounded-3 box-shadow">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Image</th>
                        <th scope="col">Until Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Total Price</th>
                        <th scope="col">
                            </thsc>
                    </tr>
                </thead>
                <tbody>
                    <form action="">
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>
                                <img src="admin/images/product-1.jpg" style="width:70px;" alt="">
                            </td>
                            <td>$100.00</td>
                            <td>

                                <input type="number" name="" value="2" class="ps-2" style="width:50px;" min="1" id="">

                            </td>
                            <td>$200.00</td>
                            <td>
                                <a href="#" class="font-size-20"><i class='bx bx-x'></i></a>
                            </td>
                        </tr>
                    </form>
                    <tr>
                        <th scope="row">2</th>
                        <td>Mark</td>
                        <td>
                            <img src="admin/images/product-2.jpg" style="width:70px;" alt="">
                        </td>
                        <td>$99.00</td>
                        <td>
                            <input type="number" name="" value="1" class="ps-2" style="width:50px;" min="1" id="">
                        </td>
                        <td>$99.00</td>
                        <td>
                            <a href="#" class="font-size-20"><i class='bx bx-x'></i></a>
                        </td>
                    </tr>
                </tbody>
                <tfoot class="table-danger">
                    <tr>
                        <td class="text-end" colspan="5">General Total :</td>
                        <td colspan="2">$299.00</td>
                    </tr>
                </tfoot>
            </table>
            <div class="d-flex align-items-center justify-content-between">
                <a href="categories.php" class="btn btn-primary d-flex align-items-center gap-2"><i class='bx bxs-left-arrow-circle'></i>Continue Shoping</a>
                <a href="carts.php" class="btn btn-warning d-flex align-items-center gap-2"><i class='bx bx-refresh bx-rotate-90'></i>Update Cart</a>
                <a href="checkout.php" class="btn btn-success d-flex align-items-center gap-2">Checkout<i class='bx bxs-right-arrow-circle'></i></a>
            </div>
        </div>
    </div>

    <?php include('partials/footer.php') ?>
    <!-- Start Script -->

    <!-- JavaScript Bundle with Popper -->
    <?php include('partials/foot.php') ?>
</body>

</html>