  <?php include('partials/head.php') ?>

  <body>
      <?php include('partials/header.php') ?>

      <!-- Start Contact -->
      <div class="contact py-5" id="contact">
          <div class="container">
              <h1 class="text-center text-uppercase fw-600 mb-5">Contact Us</h1>
              <div class="row">
                  <div class="col-md-6 col-lg-7">
                      <h4>
                          Any questions? Please Fill Content In The Form and We Will be in Contact Soon!
                      </h4>
                  </div>
                  <div class="col-md-6 col-lg-5">
                      <form action="" class="row d-flex">
                          <div class="col-lg-12 mb-3">
                              <input type="text" class="form-control" name="" id="" placeholder="Your Name" />
                          </div>
                          <div class="col-lg-12 mb-3">
                              <input type="text" class="form-control" name="" id="" placeholder="Your Phone" />
                          </div>
                          <div class="col-lg-12 mb-3">
                              <input type="email" class="form-control" name="" id="" placeholder="Your Email" />
                          </div>
                          <div class="col-12 mb-4">
                              <textarea name="" id="" cols="30" class="form-control" rows="4" placeholder="Message"></textarea>
                          </div>
                          <div class="col-12">
                              <input type="submit" value="Send Message" class="btn btn-main-alt rounded-pill" />
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
      <!-- End Contact -->

      <!-- Start Newsletter -->
      <div class="news py-5 position-relative">
          <div class="container">
              <img src="admin/images/svg/newsletter.svg" class="d-none d-md-block" alt="">
              <div class="row flex-row-reverse">
                  <div class="col-md-6 col-lg-7 text-md-end">
                      <h4>
                          NewsLetter Subscribe
                      </h4>
                      <p class="text-black-50">
                          <span class="d-block font-size-14 my-3 text-uppercase">Keep up to Date</span>
                          Stay up to date with our latest updates and events
                      </p>
                  </div>
                  <div class="col-md-6 col-lg-5">
                      <form action="" class="row d-flex">
                          <div class="col-lg-12 mb-3">
                              <input type="email" class="form-control" name="" id="" placeholder="Your Email" />
                          </div>
                          <div class="col-12 mb-4">
                              <div class="row">
                                  <div class="col-1">
                                      <input type="checkbox" class="form-check-input cursor-pointer" name="" id="agree">
                                  </div>
                                  <div class="col-11">
                                      <label for="agree" class="font-size-13">
                                          I agree to receive email updates from the store under the <span class="overflow-hidden d-inline-flex"><a href="#" class="underline-hover text-color-main fw-500">Privacy
                                                  Policy</a></span>. This may
                                          include
                                          information on
                                          technology, as well as special offers, and I confirm that I’m at least
                                          16 years old. I understand that I can unsubscribe at any time.
                                      </label>
                                  </div>
                              </div>
                          </div>
                          <div class="col-12">
                              <input type="submit" value="Subscribe" class="btn btn-main rounded-pill" />
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
      <!-- End Newsletter -->

      <?php include('partials/footer.php') ?>

      <!-- Start Script -->

      <!-- JavaScript Bundle with Popper -->
      <?php include('partials/foot.php') ?>
  </body>

  </html>