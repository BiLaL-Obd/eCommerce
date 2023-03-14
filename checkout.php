<?php include('partials/head.php') ?>

<body>
    <?php include('partials/header.php') ?>
    <div class="checkout py-5">
        <div class="container d-flex align-items-center flex-column">
            <h1 class="text-uppercase mb-5">Order Payment</h1>
            <div class="box box-shadow rounded-3 p-2 p-md-4">
                <div style="background-color: #e7e7e7;" class="p-2 p-md-3 px-md-4 rounded-3">
                    <ul class="nav nav-pills justify-content-center gap-2 mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active d-flex align-items-center gap-2 font-size-15" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                                <i class='bx bx-credit-card'></i>
                                Credit Card
                            </button>
                        </li>
                        <li class="nav-item d-flex align-items-center gap-2 font-size-15" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                                <i class='bx bx-dollar-circle'></i>
                                Cash On Delivery
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <form action="">
                                <div class="mb-3">
                                    <label for="card-name" class="form-label">Card Owner</label>
                                    <input type="text" class="form-control" placeholder="Card Owner Name" name="" id="card-name">
                                </div>
                                <div class="mb-3">
                                    <label for="card-number" class="form-label">Card Number</label>
                                    <div class="input-group">
                                        <input type="text" id="card-number" class="form-control border-end-0" placeholder="Valid Card Username" aria-label="Valid Card Username" aria-describedby="card-number">
                                        <span class="input-group-text d-flex align-items-center gap-2" id="card-number">
                                            <i class='bx bxs-credit-card-alt'></i>
                                            <i class='bx bxl-visa'></i>
                                            <i class='bx bxs-credit-card'></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="delivery-address" class="form-label">Delivery Address</label>
                                    <textarea name="" id="delivery-address" placeholder="Delivery Address" class="form-control" rows="2"></textarea>
                                </div>
                                <input type="submit" class="btn btn-main-alt rounded-pill" value="Cofirm Order">
                            </form>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <form action="">
                                <div class="mb-3">
                                    <label for="cash-address" class="form-label">Delivery Address</label>
                                    <textarea name="" class="form-control" id="cash-address" placeholder="Delivery Address" rows="2"></textarea>
                                </div>
                                <div class="mb-3 font-size-14">
                                    Note: At the receiving your order, you need to full payment. After completing the payment process, you can check your updated order status.
                                </div>
                                <input type="submit" class="btn btn-main rounded-pill" value="Confirm Order">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('partials/footer.php') ?>
    <!-- Start Script -->

    <!-- JavaScript Bundle with Popper -->
    <?php include('partials/foot.php') ?>
</body>

</ht