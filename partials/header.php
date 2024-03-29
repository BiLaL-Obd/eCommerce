   <nav class="navbar">
       <div class="container">
           <a class="navbar-brand font-size-24 fw-700 me-0" href="index.php">
               <span class="logo">L</span>egend<span class="logo">S</span>tore
           </a>
           <ul class="navbar-nav flex-row justify-content-end flex-grow-1">
               <li class="nav-item">
                   <a href="favorites.php" class="nav-link p-2 px-1 px-sm-2 d-flex align-items-end position-relative">
                       <span class="purchase-count font-size-10 d-flex align-items-center justify-content-center text-white bg-main end-0 rounded-circle position-absolute">5</span>
                       <i class="bx bx-heart font-size-26"></i> <span class="d-none d-sm-block">Favorite</span>
                   </a>
               </li>
               <li class="nav-item">
                   <a href="carts.php" class="nav-link p-2 d-flex align-items-end position-relative">
                       <span class="purchase-count font-size-10 d-flex align-items-center justify-content-center text-white bg-main end-0 rounded-circle position-absolute">5</span>
                       <i class="bx bx-shopping-bag font-size-26"></i>
                       <span class="d-none d-sm-block">Cart</span>
                   </a>
               </li>
               <li class="nav-item position-relative">
                   <a class="nav-link account-menu cursor-pointer p-2 d-flex align-items-end" href="login.php">
                       <i class="bx bx-user font-size-26"></i>
                       <span class="d-none d-sm-block">Account</span>
                   </a>
               </li>
           </ul>
       </div>
   </nav>

   <!-- Header-2 -->
   <nav class="navbar navbar-expand-md navbar-dark bg-main-dark header-2">
       <div class="container ps-1">
           <div class="position-relative">
               <button class="navbar-toggler py-1" type="button" data-bs-toggle="collapse" data-bs-target="#headerMenu" aria-controls="headerMenu" aria-expanded="false" aria-label="Toggle navigation" style="height: fit-content">
                   <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse bg-main-dark p-3 p-md-0 rounded-3" style="z-index: 99" id="headerMenu">
                   <ul class="navbar-nav justify-content-start flex-grow-1">
                       <li class="nav-item dropdown">
                           <a class="nav-link p-2 pe-4 text-uppercase d-flex align-items-center" aria-current="page" href="categories.php">
                               Shop By Categories
                           </a>
                       </li>
                       <li class="nav-item">
                           <a class="nav-link p-2 px-lg-3 text-uppercase d-flex align-items-center" href="blogs.php">
                               Blogs
                           </a>
                       </li>
                       <li class="nav-item">
                           <a class="nav-link p-2 px-lg-3 text-uppercase d-flex align-items-center" href="about.php">About
                               Us</a>
                       </li>
                       <li class="nav-item">
                           <a class="nav-link p-2 px-lg-3 d-flex text-uppercase align-items-center" href="contact.php">Contact
                               Us</a>
                       </li>
                   </ul>
               </div>
           </div>
           <div class="position-relative">

               <button class="btn btn-language py-1" type="button" data-bs-toggle="collapse" data-bs-target="#languageMenu" aria-controls="languageMenu" aria-expanded="false" aria-label="Toggle navigation">
                   <span class="text-white font-size-14">En</span>
               </button>
               <div class="collapse position-absolute" id="languageMenu">
                   <ul class="list-unstyled languageDropdown-menu">
                       <li>
                           <a href="#" value="En">En</a>
                       </li>
                       <li>
                           <a href="#" value="En">Ar</a>
                       </li>
                   </ul>
               </div>
           </div>
       </div>
   </nav>