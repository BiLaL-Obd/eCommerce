<?php include('partials/head.php') ?>

<body>
    <?php include('partials/header.php') ?>
    <div class="info-account py-5">
        <div class="container">
            <h1 class="text-uppercase mb-4">User Information</h1>
            <div class="card-info bg-white rounded-3 p-2">
                <div class="row">
                    <div class="col-5 col-md-2 mb-3">
                        <img src="admin/images/user.webp" class="mb-3 pers-info" alt="">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-danger edit-info btn-sm d-flex align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#modalId">
                            <i class='bx bx-edit'></i>
                            Edit Details
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="modalId" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
                            <div class="modal-dialog modal-md modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header p-2 px-3">
                                        <h5 class="modal-title" id="modalTitleId">Edit Details</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                                    </div>
                                    <div class="modal-body">
                                        <form action="">
                                            <div class="mb-3">
                                                <label for="" class="form-label">Full Name</label>
                                                <input type="text" name="" class="form-control" value="Bilal Obeid" id="">
                                            </div>
                                            <div class="mb-3">
                                                <label for="" class="form-label">Username</label>
                                                <input type="text" disabled class="form-control" value="@bilal" name="" id="">
                                            </div>
                                            <div class="mb-3">
                                                <label for="" class="form-label">Email Addr.</label>
                                                <input type="text" class="form-control" value="bilal@gmail.com" name="" id="">
                                            </div>
                                            <div class="mb-3">
                                                <label for="" class="form-label">Your Photo</label>
                                                <input type="file" name="" id="">
                                            </div>
                                            <div class="d-flex justify-content-end">
                                                <input type="submit" class="btn btn-sm btn-danger" value="Save Edit">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-7 col-md-10 mb-3">
                        <div class="mb-3 fw-500 text-color-main">
                            Bilal Obeid
                        </div>
                        <div class="mb-3 font-size-14">
                            bilal@gmail.com
                        </div>
                        <div class="mb-3 font-size-12">
                            11-22-1999
                        </div>
                    </div>
                    <div class="col-12">
                        <nav class="mb-3">
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active d-flex align-items-center gap-2 font-size-14" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">
                                    <i class='bx bxs-id-card'></i>
                                    Basic Info
                                </button>
                                <button class="nav-link d-flex align-items-center gap-2 font-size-14" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">
                                    <i class='bx bxs-time'></i>
                                    Purchase History
                                </button>
                            </div>
                        </nav>
                        <div class="tab-content p-1 p-md-3" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <div class="mb-4 d-flex align-items-center gap-2 gap-md-5">
                                    <span class="fw-500 sub-title">Full Name :</span> <span>Bilal Obeid</span>
                                </div>
                                <div class="mb-4 d-flex align-items-center gap-2 gap-md-5">
                                    <span class="fw-500 sub-title">Username :</span> <span>@bilal</span>
                                </div>
                                <div class="mb-4 d-flex align-items-center gap-2 gap-md-5">
                                    <span class="fw-500 sub-title">Email Addr. :</span> <span>bilal@gmail.com</span>
                                </div>
                                <div class="mb-4 d-flex align-items-center gap-2 gap-md-5">
                                    <span class="fw-500 sub-title">Last Updated :</span> <span>19:50pm 11-22-1999</span>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <div class="mb-3">
                                    <div class="mb-2 font-size-14">
                                        <span class="rounded-circle circle-nb bg-main d-inline-flex align-items-center justify-content-center text-white">1</span>
                                        Payment Mode : <span class="text-uppercase">Card</span>
                                    </div>
                                    <table class="table table-hover table-sm font-size-14 bg-white rounded-1 box-shadow">
                                        <thead>
                                            <tr>
                                                <th scope="col">Product Name</th>
                                                <th scope="col">Until Price</th>
                                                <th scope="col">Quantity</th>
                                                <th scope="col">Total Price</th>
                                                <th scope="col">Stauts</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Mark</td>
                                                <td>$100.00</td>
                                                <td>2</td>
                                                <td>$200.00</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Mark</td>
                                                <td>$99.00</td>
                                                <td>1</td>
                                                <td>$99.00</td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td class="text-end" colspan="3"></td>
                                                <td>$299.00</td>
                                                <td><span class="bg-warning w-fit-content rounded-3 p-1 px-2 text-white">pending</span></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <div class="mb-3">
                                    <div class="mb-2 font-size-14">
                                        <span class="rounded-circle circle-nb bg-main d-inline-flex align-items-center justify-content-center text-white">2</span>
                                        Payment Mode : <span class="text-uppercase">On Delivery</span>
                                    </div>
                                    <table class="table table-hover table-sm font-size-14 bg-white rounded-1 box-shadow">
                                        <thead>
                                            <tr>
                                                <th scope="col">Product Name</th>
                                                <th scope="col">Until Price</th>
                                                <th scope="col">Quantity</th>
                                                <th scope="col">Total Price</th>
                                                <th scope="col">Stauts</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Mark</td>
                                                <td>$100.00</td>
                                                <td>2</td>
                                                <td>$200.00</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Mark</td>
                                                <td>$99.00</td>
                                                <td>1</td>
                                                <td>$99.00</td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td class="text-end" colspan="3"></td>
                                                <td>$299.00</td>
                                                <td><span class="bg-success w-fit-content rounded-3 p-1 px-2 text-white">completed</span></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
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

</html>