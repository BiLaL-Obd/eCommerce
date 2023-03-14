<?php include('partials/head.php') ?>

<body>
    <?php include('partials/header.php') ?>
    <div class="login py-5">
        <div class="container d-flex justify-content-center">
            <div class="form bg-white box-shadow rounded-3 p-2">
                <nav>
                    <div class="nav nav-tabs my-4 border-0 justify-content-center gap-2" id="nav-tab" role="tablist">
                        <button class="form-button border-0  bg-transparent text-uppercase active" id="login-tab" data-bs-toggle="tab" data-bs-target="#login" type="button" role="tab" aria-controls="login" aria-selected="true">Login</button>
                        <span class="text-color-main">|<span>
                                <button class="form-button border-0 bg-transparent text-uppercase" id="registration-tab" data-bs-toggle="tab" data-bs-target="#registration" type="button" role="tab" aria-controls="registration" aria-selected="false">Signup</button>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab" tabindex="0">
                        <form action="" class="row">
                            <div class="col-12 mb-4">
                                <input type="text" class="form-control" placeholder="Username*">
                            </div>
                            <div class="col-12 mb-4">
                                <input type="password" class="form-control" name="" id="" placeholder="Password*">
                            </div>
                            <div class="col-12 mb-4">
                                <a href="#" class="text-black-50 text-start font-size-14 ps-2">Forget
                                    Password?</a>
                            </div>
                            <div class="col-12 text-center">
                                <input type="submit" class="btn btn-main-alt rounded-pill" value="LogIn">
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane text-center fade" id="registration" role="tabpanel" aria-labelledby="registration-tab" tabindex="0">
                        <form action="" class="row">
                            <div class="col-12 mb-4">
                                <input type="text" class="form-control" placeholder="Username*">
                            </div>
                            <div class="col-12 mb-4">
                                <input type="email" class="form-control" placeholder="Email*">
                            </div>
                            <div class="col-12 mb-4">
                                <input type="password" class="form-control" name="" id="" placeholder="Password*">
                            </div>
                            <div class="col-12 mb-4">
                                <input type="password" class="form-control" name="" id="" placeholder="Confirm Password*">
                            </div>
                            <div class="col-12">
                                <input type="submit" class="btn btn-main rounded-pill" value="SignUp">
                            </div>
                        </form>
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