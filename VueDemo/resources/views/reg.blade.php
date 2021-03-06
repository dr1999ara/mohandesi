<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ثبت نام</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <!-- <link rel="stylesheet" href="fontaw/css/font-awesome.min.css"> -->
    <link href="fontaw/css/all.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="css/all.css"> -->

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <link href="{{ asset('css/product.css') }}" rel="stylesheet">
</head>
<body>

    <section id="ext_menu-3">
        <nav>
            <div class="navbar navbar-dropdown pb-0 navbar-expand">
                <div class="container-fluid  login-inner">    
                    <ul class="navbar-nav">       
                      <li class="nav-item">
                            <span id="view_multi_currency" >      
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                    <option value="FA">فا</option>
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
                                <a href="reg.html" data-ga-label="Menu"  class="m-2 login-sp header-ga ga-trackable">
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
                                <i class="fa fa-shopping-cart" style="font-size:18px;" aria-hidden="true"></i>
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

    <!-- nav1 -->
    <div class="container-fluid" style="background-image: url('img/90.jpg'); height: 100px;" >
            <h1 class="text-light text-center pt-3">صفحه ی ثبت نام </h1>
    </div> 
    <!-- nav1 -->

    <section class="mbr-section mbr-after-navbar mt-3" style="padding-top: 0;padding-bottom:0; margin-bottom:200px">
      
    <h3 class="mt-5 mb-4 text-light text-center fs-5 fw-bold text-dark"> اطلاعات خود را وارد کنید</h3>
        <div class="container ">    
                <div class="row  d-flex justify-content-center">
                    <div class="rounded-2 login-shadow col-xl-6 col-lg-5 col-md-6 col-sm-12 col-12">
                        <div class="online-login-section p-5 ">
                            
                            <form autocomplete="off" id="login_form_id" class="form-signin" mection="{{ route('register') }thod="post" a}">
                                @csrf
                                <div class="row">
                                    <div class="mb-3 form-group col-md-6">
                                      <input type="text" name="user_name" class="form-control" placeholder=" نام و نام خانوادگی" required="">
                                    </div>

                                    <div class="mb-3 form-group col-md-6" >
                                        <input type="tel" name="tel" class="form-control" placeholder="شماره موبایل" required="">
                                    </div>
                                </div>

                               <div class="row">
                                <div class="mb-3 form-group col-md-6">
                                  <input type="text" name="code_m"  class="form-control" placeholder="کد ملی " required="">
                              </div>
                              <div class="mb-3 form-group col-md-6">
                                <input type="text" name="code_p" class="form-control" placeholder="کد پستی  " required="">
                            </div>
                               </div>

                              <div class="mb-3 form-group">
                                <input type="text" name="add"  class="form-control" placeholder="آدرس  " required="">
                            </div>

                                <div class="mb-3 form-group">
                                    <input type="email" name="email" class="form-control" placeholder="ایمیل" required="">
                                </div>

                                <div class="mb-3 form-group">
                                    <input type="password" name="password" class="form-control" placeholder="رمز عبور" required="">
                                </div>

                                <div class="mb-3 form-group">
                                    <input type="password" name="password" class="form-control" placeholder="تکرار رمز عبور " required="">
                                </div>                  

                             <div class="row">
                              <div class="mb-3 form-group btn-submit m-auto col-md-6">
                                <button class="btn btn-md text-light btn-block w-100" type="submit" id="login_button" style="text-transform: uppercase;"> 
                                    ثبت اطلاعات
                                </button>
                            </div>
                             </div>


                            </form>
                        </div>
                    </div>
               </div>
        </div>
    </section>

   


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
                  <li class="mb-3"><h5 class="link-light">فروش</h5></li>
                  <li class="my-2"><a class="link-secondary " href="#">انتقاد</a></li>
                  <li class="my-2"><a class="link-secondary" href="#">Education</a></li>
                  <li class="my-2"><a class="link-secondary" href="#">Government</a></li>
                  <li class="my-2"><a class="link-secondary" href="#">Gaming</a></li>
                </ul>

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
                  <li class="mb-3"><h5 class="link-light">فروش</h5></li>
                  <li class="my-2"><a class=" link-secondary " href="#">انتقاد</a></li>
                  <li class="my-2"><a class="link-secondary" href="#">Education</a></li>
                  <li class="my-2"><a class="link-secondary" href="#">Government</a></li>
                  <li class="my-2"><a class="link-secondary" href="#">Gaming</a></li>
                </ul>
              </div>
      
              <div class="col-6 col-md">   
                <ul class="list-unstyled text-small">
                  <li class="mb-3"><h5 class="link-light">فروش</h5></li>
                  <li class="my-2"><a class=" link-secondary " href="#">انتقاد</a></li>
                  <li class="my-2"><a class="link-secondary" href="#">Education</a></li>
                  <li class="my-2"><a class="link-secondary" href="#">Government</a></li>
                  <li class="my-2"><a class="link-secondary" href="#">Gaming</a></li>
                </ul>
              </div>
      
      
            </div>
          <div class="dropdown-divider bg-light"></div>

         <p style="direction: ltr;"> Copyright © SP ROBOTIC WORKS. All Rights Reserved.</p>
        </div>
    </footer>
  
    
    <script src="bootstrap/js/bootstrap.bundle.js"></script>
</body>
</html>


