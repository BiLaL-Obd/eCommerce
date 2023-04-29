<?php include('partials/head.php') ?>

<body>
  <?php include('partials/header.php') ?>


  <!-- Start About Header -->
  <div class="about-pg about-header py-5 bg-main-light">
    <div class="container">
      <h1 class="text-uppercase text-center mb-5">About Us</h1>
      <h3 class="mb-5">Know About Us</h3>
      <div class="text-black-50">
        <div class="row">
          <div class="col-md-6 d-none d-md-flex justify-content-center align-items-center" data-aos="zoom-in" data-aos-duration="1000">
            <span class="square"></span>
          </div>
          <div class="col-md-6" data-aos="fade-up" data-aos-duration="1000">
            <p>At <b>Legend Store</b>, we are passionate about technology and providing our customers with the latest
              and greatest products. Our
              mission is to offer cutting-edge technology that makes life easier and more enjoyable.
              <br>We believe that technology should be accessible to everyone, and our knowledgeable staff is always
              here
              to help you find
              the perfect product and answer any questions you may have. Whether you're looking for a new laptop for
              work, a
              smartphone for your daily life, or a smart home device to make your life easier, we have what you need.
            </p>
          </div>
        </div>

        <div class="row py-5" dir="rtl">
          <div class="col-md-6 d-none d-md-flex justify-content-center align-items-center" data-aos="zoom-in" data-aos-duration="1000">
            <span class="square"></span>
          </div>
          <div class="col-md-6" data-aos="fade-up" data-aos-duration="1000">
            <p dir="ltr">
              We offer a 14-day return policy and a satisfaction guarantee on all of our products, so you can
              shop with confidence.
              Plus, our in-store technicians are available for repair and maintenance services, so you can keep your
              technology
              running smoothly.<br>
              So come and visit us at <b>Legend Store</b>, where you'll find the latest and greatest technology waiting
              for you.
              We look
              forward to serving you and helping you stay connected and up-to-date!
            </p>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- End About Header -->
  <!-- Start About Section -->
  <div class="about-pg about-section py-5">
    <div class="container">
      <h3 class="mb-5">Our Teams</h3>

      <div class="row mb-5">
        <div class="col-md-6 mb-3">
          <img src="<?= SUBURL . "assets/img/about-us.png" ?>" class="img-fluid rounded-4" alt="">
        </div>
        <div class="col-md-6">
          <div class="accordion accordion-flush" id="our-team">
            <div class="accordion-item mb-3 border-0 rounded-2">
              <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed bg-main text-white rounded-2" type="button" data-bs-toggle="collapse" data-bs-target="#place-order" aria-expanded="false" aria-controls="place-order">
                  How to place order online ?
                </button>
              </h2>
              <div id="place-order" class="accordion-collapse collapse bg-main-dark text-white-50 font-size-15 rounded-2" aria-labelledby="flush-headingOne" data-bs-parent="#our-team">
                <div class="accordion-body">
                  <ol>
                    <li>
                      Start by enter your shipping information . Make sure the information you
                      enter is correct to ensure a
                      smooth delivery process.
                    </li>
                    <li>
                      Browsing our website to find the products you want to purchase. You can use
                      the search bar to find specific
                      products or browse by category to see our full selection.
                    </li>
                    <li>
                      Once you've found the products you want, click the "Add to Cart" button to
                      add them to your shopping cart. You can then
                      continue shopping or proceed to checkout.
                    </li>
                    <li>
                      Once you've found the products you want, click the "Add to Cart" button to
                      add them to your shopping cart. You can then
                      continue shopping or proceed to checkout.
                    </li>
                    <li>
                      Choose your preferred payment method and enter your payment information. We
                      accept all major credit cards and secure
                      online payment methods.
                    </li>
                    <li>
                      Finally, review your order details to make sure everything is correct. If
                      everything looks good, click the "Submit
                      Order" button to complete your purchase.
                    </li>
                  </ol>
                </div>
              </div>
            </div>
            <div class="accordion-item mb-3 border-0 rounded-2">
              <h2 class="accordion-header" id="flush-headingTwo">
                <button class="accordion-button collapsed bg-main text-white rounded-2" type="button" data-bs-toggle="collapse" data-bs-target="#order-arrive" aria-expanded="false" aria-controls="order-arrive">
                  When my order arrives ?
                </button>
              </h2>
              <div id="order-arrive" class="accordion-collapse collapse bg-main-dark text-white-50 font-size-15 rounded-2" aria-labelledby="flush-headingTwo" data-bs-parent="#our-team">
                <div class="accordion-body">The processing time of your order can also impact the
                  delivery time. This is the time it takes for the seller to package
                  and ship your order. Processing times can vary depending on the seller, but they
                  typically range from <b>1</b> to <b>3</b> business
                  days.
                </div>
              </div>
            </div>
            <div class="accordion-item mb-3 border-0 rounded-2">
              <h2 class="accordion-header" id="flush-headingThree">
                <button class="accordion-button collapsed bg-main text-white rounded-2" type="button" data-bs-toggle="collapse" data-bs-target="#pay-online" aria-expanded="false" aria-controls="pay-online">
                  How to pay online ?
                </button>
              </h2>
              <div id="pay-online" class="accordion-collapse collapse bg-main-dark text-white-50 font-size-15 rounded-2" aria-labelledby="flush-headingThree" data-bs-parent="#our-team">
                <div class="accordion-body">
                  <ol>
                    <li>
                      Choose the product or service you want to pay for and proceed to checkout.
                    </li>
                    <li>
                      Select the option to pay online and enter the required information such as
                      your name, address, and contact details.
                    </li>
                    <li>
                      Choose your preferred payment method. You can pay using a credit card, debit
                      card, or an electronic wallet such as
                      PayPal, Google Pay, Apple Pay, etc.
                    </li>
                    <li>
                      Enter your card details or sign in to your electronic wallet account to
                      complete the transaction.
                    </li>
                    <li>
                      Review the details of your transaction and confirm the payment.
                    </li>
                    <li>
                      You will receive a confirmation of your payment and a receipt via email.
                    </li>
                  </ol>
                </div>
              </div>
            </div>
            <div class="accordion-item mb-3 border-0 rounded-2">
              <h2 class="accordion-header" id="flush-headingThree">
                <button class="accordion-button collapsed bg-main text-white rounded-2" type="button" data-bs-toggle="collapse" data-bs-target="#flush-four" aria-expanded="false" aria-controls="flush-four">
                  How to contact supplier ?
                </button>
              </h2>
              <div id="flush-four" class="accordion-collapse collapse bg-main-dark text-white-50 font-size-15 rounded-2" aria-labelledby="flush-four" data-bs-parent="#our-team">
                <div class="accordion-body">
                  <p>We many ways to contact supplier:</p>
                  <p>
                    You can click on <b>Whatsapp</b> link to contact with us in whatsapp, and you can
                    use email link also . <br>
                    And we have contact form just you want to put your
                    <b>Name</b>, <b>Phone Number</b>, <b>Email</b>, <b>Message</b> and in Message write what do want to
                    ask. <br>
                    Finally you want to click <b>Send Message</b> to send your objects in contact
                    form
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-6 col-md-4 col-lg-3 mb-3 text-center fw-400">
          Best Quality
        </div>
        <div class="col-6 col-md-4 col-lg-3 mb-3 text-center fw-400">
          Fast Delivery
        </div>
        <div class="col-6 col-md-4 col-lg-3 mb-3 text-center fw-400">
          Secure Payement <span class="info d-block text-black-50">100%
            secure payment</span>
        </div>
        <div class="col-6 col-md-4 col-lg-3 mb-3 text-center fw-400">
          24/7 Support <span class="info d-block text-black-50">Dedicated
            support</span>
        </div>
      </div>
    </div>
  </div>
  <!-- End About Section -->


  <?php include('partials/footer.php') ?>
  <!-- Start Script -->
  <?php include('partials/foot.php') ?>
</body>

</html>