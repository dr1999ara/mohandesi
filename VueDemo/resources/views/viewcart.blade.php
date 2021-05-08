<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سبد خرید</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <!-- <link rel="stylesheet" href="fontaw/css/font-awesome.min.css"> -->
    <link href="fontaw/css/all.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="css/all.css"> -->

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>

<body>

    <header>
        <!-- navbars -->
        <section id="ext_menu-3">
            <nav>
                <div class="navbar navbar-dropdown pb-0 navbar-expand">
                    <div class="container-fluid  login-inner">
                        <ul class="navbar-nav">

                            <li class="nav-item ">
                                <span id="view_multi_lang">      
                          <select class="form-select form-select-sm px-2" aria-label=".form-select-sm example"
                          style="padding-left: 30px !important; " >
                              <option value="FA" >فا</option>
                              <option value="En">EN</option>
                              <option value="DUE">DU</option> 
                          </select>
                      </span>
                            </li>

                            <li class="nav-item">
                                <span id="guest_user_div">
                      <span class="m-2 login-sp"> | </span>

                                <span>
                          <a href="login.html" class="m-2 login-sp header-ga ga-trackable">
                              ورود
                          </a>
                      </span>

                                <span class="login-sp"> | </span>

                                <span>
                          <a href="login.html" data-ga-label="Menu"  class="m-2 login-sp header-ga ga-trackable">
                          ثبت نام
                          </a>
                      </span>
                                </span>
                            </li>

                            <li class="nav-item">
                                <span style="font-family: 'IRANSans';font-size: 13px;padding-right: 20px;color: #777;" class="hide-shop-slider">
                      <i class="fas fa-phone-volume"></i>
                      شماره پشتیبانی: ۰۹۱۳۳۳۳۳۳۳
                  </span>
                            </li>
                        </ul>

                    </div>
                </div>

                <div class="navbar navbar-expand-lg p-0 navbar-light">
                    <div class="container">
                        <div class="collapse navbar-collapse" id="navbarText">
                            <ul class="navbar-nav  mb-2 mb-lg-0 ">
                                <li class="nav-item px-3">
                                    <a class="nav-link" href="#">
                                        <a href="faktor.html" class="" data-toggle="modal" data-target="#cart">
                                            <i class="fa fa-shopping-cart" style="font-size:18px;" aria-hidden="true"></i>
                                            <!-- shopingicon -->
                                            (<span class="total-count"></span>)
                                        </a>
                                    </a>
                                </li>


                                <li class="nav-item px-3">
                                    <a class="nav-link" href="#">درباره ی ما</a>
                                </li>
                                <li class="nav-item px-3">
                                    <a class="nav-link" href="#">تماس با ما</a>
                                </li>
                                <li class="nav-item px-3">
                                    <a class="nav-link" href="#">خانه</a>
                                </li>
                                <li class="nav-item px-3">
                                    <a class="nav-link" href="#">بلاگ</a>
                                </li>
                            </ul>
                        </div>

                        <a class="me-auto  navbar-brand fs-2 ps-5" style="color: #00cdfe;" href="#">روبوفروشآنلاین</a>



                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                    </div>
                </div>
            </nav>
        </section>
        <!-- navbars -->

        <!-- search -->
        <section class="mbr-section mbr-after-navbar bg-dark">
            <div class="container-fluid contuct-title-bg">
                <div class="container">
                    <div class="col-md-12 col-sm-12 col-xs-12 col-xl-8 m-auto ">
                        <div class="row">
                            <div class="product_search">
                                <form class="" method="get" style="direction: ltr;">
                                    <div class="input-group flex-nowrap">
                                        <span class="input-group-text" id="addon-wrapping"> <i class="fa fa-search fa-lg"></i></span>
                                        <input type="text" class="form-control" style="direction: rtl;" placeholder="جست و جوی محصول.." aria-label="Username" aria-describedby="addon-wrapping">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /search -->
    </header>


    <section class="mbr-section mbr-after-navbar mt-3 mb-5" style="padding-top: 0;padding-bottom:0">
        <div class="container">
            <div class="col-md-12 col-xl-10 m-auto">

                <div class="border-info border-3 border-bottom mb-5 py-3">
                    <h2>سبد خرید</h2>
                </div>

                <div id="cart_desktop_view" class="row table-responsive mt-4">
                    <table class="table">

                        <thead class="fs-5">
                            <tr>
                                <th>محصول</th>
                                <th>قیمت</th>
                                <th>تعداد</th>
                            </tr>
                        </thead>

                        <tbody class="">
                            <tr class="" id="">
                                <td>
                                    <div class="row">
                                        <!-- image -->
                                        <div class="col-md-2">
                                            <a href="#">
                                                <img src="img/STM32F103C8T6/stm32f103c8t6.jpg" width="80px" height="80px" class="">
                                            </a>
                                        </div>

                                        <div class="col-md-10 ">
                                            <div class="col-md-12 margin-bottom-5">
                                                <span class="cart-title " style="margin-right:25px;">
                                                    <a href="#">
                                                     تراشه STM32F103C8T6
                                                    </a>                                      
                                                </span>
                                            </div>


                                            <div class="col-md-12">
                                                <span style="margin-right:25px;">
                                                    <a class="text-danger" onclick="" href="javascript:void(0)">
                                                        حذف
                                                    </a>
                                                 </span>
                                            </div>
                                        </div>

                                    </div>
                                </td>

                                <td>
                                    <div class="cart-price price shopping-cart-table-middle" style="padding-left:0">
                                        <span class="item_unit_price">
                                            200,000
                                        </span> تومان
                                    </div>
                                </td>

                                <td>
                                    <form class="pull-right col-md-11" style="padding: 0;" siq_id="autopick_9177">
                                        <input type="number" name="quantity" class="form-control shopping-cart-table-end product_quantity_12" id="product_quantity_12" min="1" max="25" onkeydown="onKeyPressed(event, 12, 100510)" value="1" onchange="changeQuantity(12, 100510, this.value)" style="margin-left: -7px;">
                                    </form>
                                </td>
                            </tr>

                            <tr class="" id="">
                                <td>
                                    <div class="row">
                                        <!-- image -->
                                        <div class="col-md-2">
                                            <a href="#">
                                                <img src="img/STM32F103C8T6/stm32f103c8t6.jpg" width="80px" height="80px" class="">
                                            </a>
                                        </div>

                                        <div class="col-md-10 ">
                                            <div class="col-md-12 margin-bottom-5">
                                                <span class="cart-title " style="margin-right:25px;">
                                                  <a href="#">
                                                   تراشه STM32F103C8T6
                                                  </a>                                      
                                              </span>
                                            </div>


                                            <div class="col-md-12">
                                                <span style="margin-right:25px;">
                                                  <a class="text-danger" onclick="" href="javascript:void(0)">
                                                      حذف
                                                  </a>
                                               </span>
                                            </div>
                                        </div>

                                    </div>
                                </td>

                                <td>
                                    <div class="cart-price price shopping-cart-table-middle" style="padding-left:0">
                                        <span class="item_unit_price">
                                          200,000
                                      </span> تومان
                                    </div>
                                </td>

                                <td>
                                    <form class="pull-right col-md-11" style="padding: 0;" siq_id="autopick_9177">
                                        <input type="number" name="quantity" class="form-control shopping-cart-table-end product_quantity_12" id="product_quantity_12" min="1" max="25" onkeydown="onKeyPressed(event, 12, 100510)" value="1" onchange="changeQuantity(12, 100510, this.value)" style="margin-left: -7px;">
                                    </form>
                                </td>
                            </tr>
                        </tbody>

                    </table>
                </div>

                <div>
                    مجموع قیمت :
                    <span>200,000 تومان</span>
                    <button class="btn btn-success"> ثبت سفارش</button>
                </div>
            </div>



        </div>
    </section>


    <!-- footer -->
    <footer class="container-fluid bg-dark text-white py-5 pb-0">
        <div class="container py-1">
            <div class="row">
                <div class="col-6 col-md">
                    <h5 class="mb-3"> خبرنامه </h5>
                    <p class="text-secondary">برای اطلاع از خبر ها ثبت نام کنید</p>
                    <div class=" input-group  flex-nowrap mb-3" style="direction:ltr; width:80% !important;">
                        <button class="input-group-text ">
                <i class="bi bi-arrow-left-circle-fill"></i> 
              </button>
                        <input type="text" style="direction:rtl; width:80% !important;" class="bg-dark form-control text-light" placeholder="ایمیل شما">
                    </div>
                </div>

                <div class="col-6 col-md">
                    <ul class="list-unstyled text-small">
                        <li class="mb-3">
                            <h5 class="link-light">ما را دنبال کنید</h5>
                        </li>
                        <li class="">
                            <ul class="list-unstyled fs-5 m-0 p-0 list-inline">
                                <li class="my-2 list-inline-item"><a class="link-light" href="#"><i class="bi bi-youtube"></i></i></a></li>
                                <li class="my-2 list-inline-item"><a class="link-light" href="#"><i class="bi bi-instagram"></i></a></li>
                                <li class="my-2 list-inline-item"><a class="link-light" href="#"><i class="bi bi-telegram"></i></a></li>
                                <li class="my-2 list-inline-item"><a class="link-light" href="#"><i class="bi bi-linkedin"></i></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <div class="col-6 col-md">
                    <ul class="list-unstyled text-small">
                        <li class="mb-3">
                            <h5 class="link-light">خدمات مشتریان</h5>
                        </li>
                        <li class="my-2"><a class=" link-secondary " href="#">انتقادات و نظرات شما</a></li>
                        <li class="my-2"><a class="link-secondary" href="#">تماس با ما</a></li>
                        <li class="my-2"><a class="link-secondary" href="#">آدرس : خیابان شریعتی کوچه 11</a></li>
                        <li class="my-2"><a class="link-secondary" href="#">091333333</a></li>
                    </ul>
                </div>

                <div class="col-6 col-md">
                    <ul class="list-unstyled text-small">
                        <li class="mb-3">
                            <h5 class="link-light">اطلاعات</h5>
                        </li>
                        <li class="my-2"><a class=" link-secondary " href="#">درباره ی ما</a></li>
                        <li class="my-2"><a class="link-secondary" href="#">شرایط و قوانین</a></li>
                    </ul>
                </div>


            </div>
            <div class="dropdown-divider fw-1 bg-light"></div>
            <p> کلیه حقوق این سایت متعلق به شرکت <strong class="text-info">روبوفروش آنلاین</strong> می‌باشد.</p>
        </div>
    </footer>
    <!-- footer -->

    <script src="bootstrap/js/bootstrap.bundle.js"></script>
</body>


</html>


