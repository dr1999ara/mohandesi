<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مدیریت</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <!-- <link rel="stylesheet" href="fontaw/css/font-awesome.min.css"> -->
    <link href="fontaw/css/all.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="css/all.css"> -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

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

    <main>
        <section class="mbr-section mbr-after-navbar" style="padding-top: 0;padding-bottom:0">
            <div class="container_fluid">
                <div class="col-md-12 col-lg-12 col-xl-12 m-auto">
                    <div class="d-flex">
                        <div class="col-md-3  customer-item " style="padding-bottom: 500px !important;">
                            <!-- نام  -->
                            <div class="d-flex boss-item-name text-light p-3">
                                <img src="img/avatar.png" class="img-fluid p-0" width="50px" height="50px" alt="">
                                <div class="pe-2 my-auto ">
                                    <p class="fs-4 fw-bold p-0 m-0">یاسمن کرباسی</p>
                                    <p class="p-0 m-0 text-info">مدیر سایت</p>
                                </div>
                            </div>

                            <nav class="small " id="toc">
                                <ul class="list-unstyled fs-5 p-0">
                                    <li class="customer-item-h my-2 py-2">
                                        <a onclick="openCity(event, 'edit-info')" class="text-light pe-3 d-inline-flex align-items-center collapsed" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#contents-collapse" aria-controls="contents-collapse">ویرایش اطلاعات</a>
                                    </li>

                                    <li class="customer-item-h my-2 ">
                                        <a class="text-light pe-3 py-2 d-inline-flex align-items-center collapsed" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#forms-collapse" aria-controls="forms-collapse">محصول</a>
                                        <ul class="fs-6 list-unstyled  ps-1  customer-item  collapse" id="forms-collapse">
                                            <li class=""><a onclick="openCity(event, 'see-product')" class="d-inline-flex my-2 text-light  align-items-center rounded" href="#overview"> مشاهده</a></li>
                                            <li><a class="d-inline-flex mb-2 text-light align-items-center rounded" href="#disabled-forms">اضافه کردن </a></li>
                                            <li><a class="d-inline-flex mb-2 text-light align-items-center rounded" href="#sizing">ویرایش</a></li>
                                            <!-- <li><a class="d-inline-flex align-items-center rounded" href="#input-group">مجموعة الإدخال</a></li> -->
                                        </ul>
                                    </li>

                                    <li class="customer-item-h my-2 ">
                                        <a class="text-light pe-3 py-2 d-inline-flex align-items-center collapsed" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#forms-collapse1" aria-controls="forms-collapse">دسته بندی</a>
                                        <ul class="fs-6 list-unstyled ps-1 customer-item collapse" id="forms-collapse1">
                                            <li><a class="d-inline-flex my-2 text-light  align-items-center rounded" href="#see"> مشاهده</a></li>
                                            <li><a onclick="openCity(event, 'add-cat')" class="d-inline-flex mb-2 text-light align-items-center rounded" href="#add">اضافه کردن </a></li>
                                            <li><a onclick="openCity(event, 'edit-cat')" class="d-inline-flex mb-2 text-light align-items-center rounded" href="#edit">ویرایش</a></li>
                                            <!-- <li><a class="d-inline-flex align-items-center rounded" href="#input-group">مجموعة الإدخال</a></li> -->
                                        </ul>
                                    </li>

                                    <li class="customer-item-h my-2 ">
                                        <a onclick="openCity(event, 'edit-pass')" class="text-light pe-3 py-2 d-inline-flex align-items-center collapsed" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#contents-collapse" aria-controls="contents-collapse"> تغییر رمز عبور</a>
                                    </li>
                                    <li class="customer-item-h my-2 ">
                                        <a class="text-light pe-3 py-2 d-inline-flex align-items-center collapsed" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#contents-collapse" aria-controls="contents-collapse">خروج </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>

                        <div class="col-md-9 tabcontent" id="edit-info" style="display: none;">
                            <div class="row">
                                <div class="col-7 m-auto">
                                    <form autocomplete="off" id="login_form_id" class="mt-5 pt-5" novalidate method="post">

                                        <div class="row">
                                            <div class="mb-3 form-group col-md-6 ">
                                                <input type="text" name="user_name" class="form-control " placeholder=" نام" required="">
                                            </div>
                                            <div class="mb-3 form-group col-md-6">
                                                <input type="text" name="user_name" class="form-control" placeholder=" نام خانوادگی" required="">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="mb-3 form-group col-md-6">
                                                <input type="email" name="email" class="form-control" placeholder="ایمیل" required="">
                                            </div>

                                            <div class="mb-3 form-group col-md-6">
                                                <input type="text" name="user_name" class="form-control" placeholder=" شماره موبایل" required="">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="mb-3 form-group col-md-6">
                                                <input type="text" name="code_m" pattern="[0-9]{10}" class="form-control" placeholder="کد ملی " required="">
                                            </div>

                                            <div class="mb-3 form-group col-md-6">
                                                <input type="text" name="code_p" class="form-control" placeholder="کد پستی  " required="">
                                            </div>
                                        </div>

                                        <div class="row">

                                            <div class="mb-3 form-group col-md-6">
                                                <select class="form-select" aria-label="Default select example">
                            <option selected>استان</option>
                            <option value="1">کرمان</option>
                            <option value="2">شیراز</option>
                            <option value="3">یزد</option>
                          </select>
                                            </div>

                                            <div class="mb-3 form-group col-md-6">
                                                <select class="form-select" aria-label="Default select example">
                             <option selected>شهر</option>
                             <option value="1">کرمان</option>
                             <option value="2">شیراز</option>
                             <option value="3">یزد</option>
                           </select>
                                            </div>


                                        </div>

                                        <div class="mb-3 form-group">
                                            <input type="text" name="add" class="form-control" placeholder="آدرس  " required="">
                                        </div>

                                        <div class="row">
                                            <div class="mb-3 mt-4 form-group m-auto col-md-6 rounded-1">
                                                <button class="btn btn-md btn-submit text-light w-100" type="submit" id="login_button" style="text-transform: uppercase;"> 
                                    ثبت اطلاعات
                        </button>
                                            </div>
                                        </div>


                                    </form>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-9 tabcontent" id="edit-pass" style="display: none;">
                            <div class="row">
                                <div class="col-7 m-auto">
                                    <form autocomplete="off" id="login_form_id" class="mt-5 pt-5" novalidate method="post">
                                        <div class="mb-3 form-group col-md-6">
                                            <input type="password" name="password" class="form-control" placeholder=" رمز عبور فعلی" required=>
                                        </div>

                                        <div class="mb-3 form-group col-md-6">
                                            <input type="password" name="password" class="form-control" placeholder=" رمز عبور جدید" required=>
                                        </div>

                                        <div class="mb-3 form-group col-md-6">
                                            <input type="password" name="password" class="form-control" placeholder="تکرار رمز عبور جدید " required="">
                                        </div>

                                        <div class="mb-3 form-group col-md-6 rounded-1">
                                            <button class="btn btn-md btn-submit text-light w-100" type="submit" id="login_button" style="text-transform: uppercase;"> 
                                    ثبت اطلاعات
                        </button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-9 tabcontent" id="add-cat" style="display: none;">
                            <div class="row">
                                <div class="col-7 p-5   ">
                                    <form autocomplete="off" id="login_form_id" class="d-flex align-items-center flex-column" novalidate method="post">
                                        <div class="mb-3 form-group col-md-6  ">
                                            <label class="fs-5 form-label" for="">نام دسته بندی</label>
                                        </div>

                                        <div class="mb-3 form-group col-md-6">
                                            <input type="text" name="" class="form-control" placeholder="" required="">
                                        </div>

                                        <div class="mb-3 form-group col-md-6 rounded-1">
                                            <button class="btn btn-md btn-submit text-light w-100" type="submit" id="login_button" style="text-transform: uppercase;"> 
                                        ثبت 
                            </button>
                                        </div>
                                    </form>
                                </div>

                            </div>

                        </div>

                        <div class="col-md-9 tabcontent" id="edit-cat" style="display: none;">
                            <div class="row">
                                <div class="col-7 p-5">
                                    <table class="">

                                        <tbody>
                                            <tr>
                                                <td class="fs-5 fw-bolder px-2">تراشه</td>
                                                <td><button class="btn btn-danger m-0">حذف</button></td>
                                                <td><button class="btn btn-success">ویرایش</button></td>

                                            </tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </section>

    </main>

    <!-- footer -->
    <footer class="container-fluid bg-dark text-white pt-2">
        <div class="container">
            <div class="row">
                <p> کلیه حقوق این سایت متعلق به شرکت <strong class="text-info">روبوفروش آنلاین</strong> می‌باشد.</p>
            </div>
        </div>
    </footer>
    <!-- footer -->

    <script src="bootstrap/js/bootstrap.bundle.js"></script>
    <script src="js/main.js"></script>
</body>

</html>


