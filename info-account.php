<?php include('partials/head.php') ?>

<body>
    <?php include('partials/header.php') ?>
    <div class="info-account py-5">
        <div class="container">
            <h1 class="text-uppercase mb-4">User Information</h1>
            <div class="card-info">
                <div class="row">
                    <div class="col-12 bg-white rounded-3">
                        <div class="row">
                            <div class="col-12 col-md-6 p-3 info-1">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex align-items-start gap-3">
                                        <img src="admin/images/about-us.png" class="mb-3 pers-info rounded-circle" alt="">
                                        <div class="info">
                                            <div class="mb-3 fw-500 font-size-20">
                                                Bilal Obeid
                                            </div>
                                            <div class="mb-3 font-size-13">
                                                <span>Date of join :</span>
                                                1st Jan 1999
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-danger d-md-none d-block edit-info btn-sm d-flex align-items-center justify-content-center rounded-circle gap-2" data-bs-toggle="modal" data-bs-target="#modalId">
                                        <i class='bx bx-pencil'></i>
                                    </button>
                                </div>
                            </div>
                            <div class="col-12 info-2 col-md-6 p-3">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex align-items-start gap-3 w-100">
                                        <div class="pers-info d-none d-sm-block d-md-none" hidden></div>
                                        <div class="secondary-info w-100">
                                            <div class="mb-3 font-size-14">
                                                <span>Phone :</span>
                                                +96171865646
                                            </div>
                                            <div class="mb-3 font-size-14">
                                                <span>Email :</span>
                                                <a href="mailto:bilal@gmail.com">
                                                    bilal@gmail.com
                                                </a>
                                            </div>
                                            <div class="mb-3 font-size-14">
                                                <span>Address :</span>
                                                Bakhoun - Halkit
                                            </div>
                                            <div class="mb-3 font-size-14">
                                                <span>Gender :</span>
                                                Male
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-danger d-none d-md-block edit-info btn-sm d-flex align-items-center justify-content-center rounded-circle gap-2" data-bs-toggle="modal" data-bs-target="#modalId">
                                        <i class='bx bx-pencil'></i>
                                    </button>
                                </div>
                            </div>
                            <div class="col-12 px-0">
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <button class="nav-link active d-flex align-items-center gap-2 font-size-14" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">
                                            Basic Info
                                        </button>
                                        <button class="nav-link d-flex align-items-center gap-2 font-size-14" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">
                                            Purchase History
                                        </button>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 px-0 mt-3">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <div class="d-flex align-items-center gap-1">
                                    <div class="col-12 col-md-6 bg-white rounded-3 p-3">
                                        <h5 class="mb-4">Personal Inforamtion :</h5>
                                        <div class="mb-4 d-flex align-items-center gap-2 gap-md-5">
                                            <span class="fw-500 sub-title">Phone :</span> <span>+96178789789</span>
                                        </div>
                                        <div class="mb-4 d-flex align-items-center gap-2 gap-md-5">
                                            <span class="fw-500 sub-title">Notionality :</span> <span>Lebanon</span>
                                        </div>
                                        <div class="mb-4 d-flex align-items-center gap-2 gap-md-5">
                                            <span class="fw-500 sub-title">Another Addr. :</span> <span>Bakhoun - sir</span>
                                        </div>
                                        <div class="d-flex align-items-center gap-2 gap-md-5">
                                            <span class="fw-500 sub-title">Purchase count :</span> <span>02</span>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 bg-white rounded-3 p-3">
                                        <h5 class="mb-4">Emergency Contact :</h5>
                                        <div class="mb-4 d-flex align-items-center gap-2 gap-md-5">
                                            <span class="fw-500 sub-title">Name :</span> <span>Sami</span>
                                        </div>
                                        <div class="mb-4 d-flex align-items-center gap-2 gap-md-5">
                                            <span class="fw-500 sub-title">Phone :</span> <span>+961789789</span>
                                        </div>
                                        <div class="mb-4 d-flex align-items-center gap-2 gap-md-5">
                                            <span class="fw-500 sub-title">Addr. :</span> <span>Bakhoun - sir</span>
                                        </div>
                                        <div class="d-flex align-items-center gap-2 gap-md-5">
                                            <span class="fw-500 sub-title">Relationship :</span> <span>Brother</span>
                                        </div>
                                    </div>
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
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="modalId" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
    <?php include("modals/info-modal.php") ?>
</div>