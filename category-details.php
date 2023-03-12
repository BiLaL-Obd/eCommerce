  <?php include('partials/head.php') ?>

  <body>
    <?php include('partials/header.php') ?>
    <div class="category-details py-5">
      <div class="container">
        <div class="row">
          <div class="col-12 mb-3">
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
                        <div class="col-2 d-flex flex-column gap-2 justify-content-center">
                          <div class="col-12 px-0 click-image">
                            <img src="admin/images/product-2.jpg" class="img-fluid rounded-3 cursor-pointer box-shadow" alt="">
                          </div>
                          <div class="col-12 px-0 click-image">
                            <img src="admin/images/product-2-hover.jpg" class="img-fluid rounded-3 cursor-pointer box-shadow" alt="">
                          </div>
                        </div>
                        <div class="col-10 mb-3 show-image text-center">
                          <img src="admin/images/product-2.jpg" class="img-fluid" alt="">
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
                <div class="col-sm-6 py-sm-4 px-lg-1 d-flex align-items-center">
                  <div class="box-info">
                    <h4 class="text-uppercase font-size-12 text-color-main fw-500">Laptops</h4>
                    <h1 class="text-black">
                      HD Resolution Indoor WiFi Security Camera Core i5 , 16G RAM & 2 VGA
                    </h1>
                    <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio eum quaerat voluptatem quas adipisci iusto quisquam, tempore ullam sequi vitae, enim debitis consequuntur sunt nostrum dolor itaque nesciunt! Aperiam, ratione.
                    </p>
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
                    <div class="day-offer my-3 d-flex align-items-center gap-3">
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
          <div class="col-12 mb-3">
            <h5 class="mb-3">Overviews</h5>
            <div class="col-12 mb-2">
              <div class="d-flex align-items-center gap-4">
                <img src="admin/images/user.webp" class="rounded-circle" alt="" style="width: 50px;height:50px;">
                <div class="bg-white p-2 box-shadow rounded-3">
                  <div class="col-12">
                    <p class="m-0 font-size-14">
                      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos eligendi dolor perferendis nemo autem provident sint, molestiae nam consectetur qui laborum nesciunt nulla, ad enim, totam facere explicabo harum tenetur?
                    </p>
                  </div>
                  <div class="col-12 text-end">
                    <span class="text-black-50 font-size-13">22/11/199</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 mb-2" dir="rtl">
              <div class="d-flex align-items-center gap-4">
                <img src="admin/images/user.webp" class="rounded-circle" alt="" style="width: 50px;height:50px;">
                <div class="bg-white p-2 box-shadow rounded-3">
                  <div class="col-12">
                    <p class="m-0 font-size-14" dir="ltr">
                      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos eligendi dolor perferendis nemo autem provident sint, molestiae nam consectetur qui laborum nesciunt nulla, ad enim, totam facere explicabo harum tenetur?
                    </p>
                  </div>
                  <div class="col-12 text-end">
                    <span class="text-black-50 font-size-13">22/11/199</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 mb-3">
            <form action="" class="d-flex gap-2">
              <div class="col-9">
                <textarea name="" id="" class="form-control rounded-3" rows="1" placeholder="Leave Your Comment"></textarea>
              </div>
              <div class="col-3 d-flex align-items-end justify-content-center">
                <input type="submit" class="btn btn-main-alt rounded-pill" value="Send">
              </div>
            </form>
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