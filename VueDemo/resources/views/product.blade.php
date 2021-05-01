<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مشخصات محصول</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <!-- <link rel="stylesheet" href="fontaw/css/font-awesome.min.css"> -->
    <link href="fontaw/css/all.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="css/all.css"> -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/>
 
    <script type="text/javascript" src="DataTables/datatables.min.js"></script>
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
                          <span id="view_multi_lang" >      
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


                    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                        aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                
                </div>
          </div>
      </nav>
  </section>

  <!-- search -->
  <section class="mbr-section mbr-after-navbar bg-dark">
      <div class="container-fluid contuct-title-bg" >
          <div class="container">
              <div class="col-md-12 col-sm-12 col-xs-12 col-xl-8 m-auto ">
                  <div class="row">
                      <div class="product_search">
                          <form  class=""  method="get" style="direction: ltr;">
                              <div class="input-group flex-nowrap">
                                  <span class="input-group-text" id="addon-wrapping"> <i class="fa fa-search fa-lg"></i></span>
                                  <input type="text" class="form-control" style="direction: rtl;" placeholder="جست و جوی محصول.."
                                  aria-label="Username" aria-describedby="addon-wrapping">
                                </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section> 

  <!-- advertising -->
  <section class="mbr-section mbr-after-navbar my-4" style="padding-top: 0;padding-bottom:0">
    <div class="container">    
        <div class="col-md-12 col-xl-10 m-auto hide-mobile-device">
            <div class="row">
                <div class="col-md-3 shop-product-top-img">
                    <img src="img/shipping-globally-v1.png" width="48"
                        height="30"/>
                    <span>
                    ارسال سریع
                </span>
                </div>
                <div class="col-md-3 shop-product-top-img">
                    <img src="img/community-support-v1.png" width="35"
                        height="30"/>
                    <span>
                    7 روز ضمانت بازگشت
                </span>
                </div>
                <div class="col-md-3 shop-product-top-img">
                    <img src="img/support-v1.png" width="35"
                        height="30"/>
                    <span>
                  پشتیبانی 24 ساعته
                </span>
                </div>
                <div class="col-md-3 shop-product-top-img">
                    <img src="img/product-v1.png" width="35"
                        height="30"/>
                    <span>
                  بیش از 400 نوع محصول
                </span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- advertising -->
  </header>

  <main>
    <!-- dropdown category / product -->
  <section class="mbr-section mbr-after-navbar mt-3 mb-5" style="padding-top: 0;padding-bottom:0">
    <div class="container">    
        <div class="col-md-12 col-xl-10 m-auto">
            <div class="row">
                <!-- category -->
                <div class="col-md-3 px-3">
                    <div class=" w-100 rounded-3 rounded btn-secondary px-3 py-2 mb-1 ">                    
                        دسته بندی محصولات                     
                    </div>
                    
                      <div class=" btn-group dropend shadow w-100 btn-light mb-1 ">
                        <button type="button" class="btn dropdown-toggle" 
                        
                        data-bs-toggle="dropdown" aria-expanded="false">
                            برد های توسعه 
                        </button>
                          <ul class="dropdown-menu text-end " style="padding: 12px;">
                            <li class="">
                              <a href="#">
                                  آردوینو
                              </a>
                            </li>
    
                            <li class="has-children" style="position:relative">
                              <a href="#">
                                  رزبری پای
                              </a>
                            </li>
    
                            <li class="has-children" style="position:relative">
                              <a href="#">
                                اورنج پای      
                              </a>
                            </li>
    
                          </ul>
                      </div>
    
                      <div class="btn-group dropend shadow w-100 btn-light mb-1">
                        <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                          سنسور ها
                        </button>
                          <ul class="dropdown-menu text-end " style="padding: 12px;">
                            <li class="">
                              <a href="#">
                                زاویه سنج
                              </a>
                            </li>
    
                            <li class="has-children" style="position:relative">
                              <a href="#">
                                شتاب سنج 
                              </a>
                            </li>
    
                            <li class="has-children" style="position:relative">
                              <a href="https://sproboticworks.com/shop/products/Roboticscompetitionparts">
                                دما و رطوبت
                              </a>
                            </li>
    
                            <li class="has-children" style="position:relative">
                              <a href="#">
                                   اولتراسونیک
                              </a>
                            </li>
                          </ul>
                      </div>
                      
                      <div class="btn-group dropend shadow w-100  btn-light mb-1 ">
                        <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                          قطعات مکانیکی و الکترونیکی                 
                        </button>
                          <ul class="dropdown-menu text-end " style="padding: 12px;">
                            <li class="">
                              <a href="#">
                                موتور و عملگر
                              </a>
                            </li>
    
                            <li class="has-children" style="position:relative">
                              <a href="#">
                                درایور و کنترلر موتور
                              </a>
                            </li>
    
                            <li class="has-children" style="position:relative">
                              <a href="#">
                                قطعات مکانیکی
                              </a>
                            </li>
    
                            <li class="has-children" style="position:relative">
                              <a href="#">
                                  برد بورد
                              </a>
                            </li>
    
                            <li class="has-children" style="position:relative">
                              <a href="#">
                                کابل و سیم و کانکتور
                              </a>
                            </li>
    
                          </ul>
                      </div>

                      <div class="btn-group dropend shadow w-100  btn-light mb-1 ">
                        <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                           تراشه 
                        </button>
                          <ul class="dropdown-menu text-end " style="padding: 12px;">
                            <li class="">
                              <a href="#">
                                STM32F103C8T6
                              </a>
                            </li>
    
                          </ul>
                      </div>
                </div>
                 <!-- category -->

                 <!-- product -->
                <div class="col-md-9 col-sm-12 col-xs-12 expand-external-width">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="row">

                            <div class="col-md-5 col-sm-5 col-xs-12 ">                                                                
                                <div class="mt-5 text-center" >
                                    <img class="thumb-image img-fluid" id="ss" width="250px" height="250px" src="img/STM32F103C8T6/stm32f103c8t6.jpg"/>                                
                                    <span onclick="this.parentElement.style.display='none'" >   
                                    
                                    </span>
                                    
                                    <img id="expandedImg" class="img-fluid" style="height:100%">
                                    <div id="imgtext"></div>
                                </div>                   
                            </div>


                            <div class="col-md-7 col-sm-7 col-xs-12">
                                <div class="col-md-12 product-label-height fs-2 mt-4">
                                    STM32F103C8T6
                                </div>
                                <hr class="m-0 mb-4">
                                <div class="col-md-12 col-sm-12 col-xs-12 mb-3">
                                    <div class="row">                                                                                                                                                                                                                            <div class="col-md-4 col-sm-4 col-xs-5 font15">
                                            قیمت <span class="pull-right">:</span>
                                    </div>

                                    <div class="col-md-8 col-xs-7 col-sm-8">
                                        <!-- برای تخفیف -->
                                        <div class="product-offer-price" style="display:none;">
                                            تومان 100,000
                                        </div>

                                        <div class="produtc-price">
                                             200,000 تومان
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12 mb-3">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 col-xs-5 font15">
                                        تعداد <span class="pull-right">:</span>
                                    </div>
                                    <div class="col-md-8 col-xs-7 col-sm-8">


                                        <div class="sp-quantity">
                                            <span>
                                                <a class="sp-minus ddd" href="javascript:void(0)">-</a>
                                            </span>
                                            <input type="text" class="quntity-input" name="quantity" readonly="" id="quantity" minimum="1" value="1" maxlength="6" size="4">
                                            <span>
                                                <a class="ddd sp-plus" href="javascript:void(0)">+</a>
                                            </span>
                                        </div>


                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12 mb-3">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 col-xs-5 font15">
                                        موجودی <span class="pull-right">:</span>
                                    </div>

                                    <div class="col-md-8 col-xs-7 col-sm-8">
                                        دارد
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12 ">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 col-xs-5 font15">
                                        دسته بندی: <span class="pull-right">:</span>
                                    </div>
                                    <div class="col-md-8 col-xs-7 col-sm-8">
                                        <span class="product-in-stock">
                                            <span class="text-red">
                                                    تراشه
                                            </span>                                                                                                                    
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="row">
                                    <div class="col-md-5 col-sm-6   mb-5">
                                        <!-- <form id="" > -->
                                            <a class="add-to-cart mt-4 btn btn-success rounded-0 full-width"
                                            data-name="stm" data-price="200,000">
                                                    افزودن به سبد خرید
                                            </a>
                                            
                                        <!-- </form> -->
                                    </div>                                                                                                                                                                </div>
                                </div>
                            </div>
                        </div>

                        <div class=" mb-3 row">                        
                            <div class="container container1">
    
                                <ul class="thumbnails ">
                                    <li>                                    
                                        <div class="item-hugger">                           
                                            <img class="thumb-image" src="img/STM32F103C8T6/stm32f103c8t6.jpg" style="width:100%" onclick="myFunction(this);"/>                                      
                                        </div>
                                    </li>

                                    <li class="is-active">                                   
                                        <div class="item-hugger">
                                        
                                            <img class="thumb-image" src="img/STM32F103C8T6/آی-سی-میکرو-stm32f103c8t6-با-پردازنده-cotex-m3.jpg" 
                                            style="width:100%" onclick="myFunction(this);"/>
                                         
                                        </div>          
                                    </li>

                                    <li>
                                        <div class="item-hugger">
                                        
                                            <img class="thumb-image" src="#"
                                            style="width:100%" onclick="myFunction(this);" />
                                        
                                        </div>                               
                                    </li>

                                    <li>
                                   
                                        <div class="item-hugger">
                                        
                                            <img class="thumb-image" src="#" 
                                            style="width:100%" onclick="myFunction(this);"/>
                                        
                                        </div>
                                
                                    </li>
                                </ul>

                            </div>
    
                        </div>

                    </div>          

                     <div class="row mb-5">
                        <section class="container">
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                <p class="nav-link active bg-light" style="border-top:1px solid black !important ;" > ویژگی های: STM32F103C8T6</p>
                                </li>          
                            </ul>
                            <div class="mt-1  p-3 border-top-0">
                                <table id="dmtcategoryfeature" style="width:100%">
                                    <h3>مشخصات تغذیه</h3>
                                    <tbody id="dmtcategoryfeature_inner">               
                                            <tr class="features bg-light">          
                                                <td class="feature_name" >نوع تغذیه :</td>
                                                <td class="feature_value"  >تغذیه تکی</td>                      
                                            </tr>
                                    
                                            <tr class="features ">
                                                <td class="feature_name w-50">حداقل ولتاژ تغذیه تکی  (ولت) :</td>                                
                                                <td class="feature_value">2</td>                     
                                            </tr>
                                
                                            <tr class="features bg-light ">             
                                                <td class="feature_name ">حداکثر ولتاژ تغذیه تکی (ولت) :</td>                       
                                                <td class="feature_value">3.6</td>                    
                                            </tr>      
                                    </tbody>
                                </table>

                            </div>                                          
                        </section>                       
                    </div>

                    <div class="row ">
                        <section class="container my-5 ">
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                <p class="nav-link active" style="border-top:1px solid black !important ;">توضیحات</p>
                                </li>          
                            </ul>
                            <div class="mt-3  p-3 border-top-0">
                                آی سیSTM32F103C8T6یک میکروکنترلر با هسته پردازندهARM® Cortex®-M3و فرکانس کاری72مگاهرتز از نوع SMDبا پکیجLQFP-48می باشد.
                            </div>                                          
                        </section>                       
                    </div>

                    <div class="row ">
                        <section class="container my-5">
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                <p class="nav-link active bg-light" style="border-top:1px solid black !important ;">ارسال نظر</p>
                                </li>          
                            </ul>

                            <div class="mt-3 border-secondary  p-3 border-top-0">
                                <form action="" class="mx-5">
                                    <div class="row">
                                        <div class="mb-3 form-group col-md-4">
                                            <input type="text" name="user_name" class="form-control" style="background-color: #EBF5F7;" placeholder=" نام" required="">
                                          </div>
                                          <div class="mb-3 form-group col-md-8">
                                            <input type="text" name="user_name" class="form-control" style="background-color: #EBF5F7;" placeholder="ایمیل" required="">
                                          </div>
                                    </div>

                                    <div class="row ">
                                       <div class="col form-group ">
                                        <textarea name="" id="" class="form-control "  rows="5" style="background-color: #EBF5F7;">

                                        </textarea>
                                       </div>
                                    </div>

                                
                             <div class="row">
                                <div class="mb-3 mt-3  form-group  col-md-3 rounded-1">                     
                                    <button class="btn btn-md btn-success text-light w-100" type="submit" id="login_button" style="text-transform: uppercase;"> 
                                              ارسال
                                  </button>
                                </div>
                             </div>

                                </form>
                            </div> 

                        </section>                       
                    </div>
                    <hr>

                    <div class="row ">
                       
                        <div class="container mb-3">
        

                            <div class="mt-3 ">
                                <form action="" class="mx-5">
                                    <div class="row ">
                                       <div class="col form-group ">
                                        <textarea name="" id="" class="form-control "  rows="3" >محصول عالی بود
                                        </textarea>
                                       </div>
                                    </div>
                                </form>
                            </div> 

                            <div class="mt-3 ">
                                <form action="" class="mx-5">
                                    <div class="row ">
                                       <div class="col form-group ">
                                        <textarea name="" id="" class="form-control "  rows="3" >محصول عالی بود
                                        </textarea>
                                       </div>
                                    </div>
                                </form>
                            </div> 



                        </div>                       
                    </div>

                    

                   

                </div>
                 <!-- product -->

            </div>
        </div>  
    </div>
  </section>

  </main>


  <!-- footer -->
<footer class="container-fluid bg-dark text-white py-5 pb-0">
    <div class="container py-1">
      <div class="row">
          <div class="col-6 col-md">
            <h5 class="mb-3"> خبرنامه </h5>
            <p class="text-secondary">برای اطلاع از خبر ها ثبت نام کنید</p>
            <div class=" input-group  flex-nowrap mb-3" style="direction:ltr; width:80% !important;" >
              <button class="input-group-text ">
                  <i class="bi bi-arrow-left-circle-fill"></i> 
                </button>
              <input type="text" style="direction:rtl; width:80% !important;"  class="bg-dark form-control text-light" placeholder="ایمیل شما" >
            </div>
          </div>
  
          <div class="col-6 col-md">   
            <ul class="list-unstyled text-small">
                <li class="mb-3"><h5 class="link-light">ما را دنبال کنید</h5></li>
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
              <li class="mb-3"><h5 class="link-light">خدمات مشتریان</h5></li>
              <li class="my-2"><a class=" link-secondary " href="#">انتقادات و نظرات شما</a></li>
              <li class="my-2"><a class="link-secondary" href="#">تماس با ما</a></li>
              <li class="my-2"><a class="link-secondary" href="#">آدرس : خیابان شریعتی کوچه 11</a></li>
              <li class="my-2"><a class="link-secondary" href="#">091333333</a></li>
            </ul>
          </div>
  
          <div class="col-6 col-md">   
            <ul class="list-unstyled text-small">
              <li class="mb-3"><h5 class="link-light">اطلاعات</h5></li>
              <li class="my-2"><a class=" link-secondary " href="#">درباره ی ما</a></li>
              <li class="my-2"><a class="link-secondary" href="#">شرایط و قوانین</a></li>
            </ul>
          </div>
  
  
        </div>
      <div class="dropdown-divider fw-1 bg-light"></div>

      <p> کلیه حقوق این سایت متعلق به شرکت <strong class="text-info">روبوفروش آنلاین</strong>  می‌باشد.</p>
    </div>
</footer>
<!-- footer -->

  <script src="js/main.js"></script>
  <script src="bootstrap/js/bootstrap.bundle.js"></script>
    
</body>
</html>


