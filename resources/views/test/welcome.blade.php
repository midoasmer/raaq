<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RAAQ</title>
    <link rel="icon" href="{{asset('/test/imag/raaq.png')}}">
    <link rel="stylesheet" href="{{'/test/css/all.min.css'}}">
    <link rel="stylesheet" href="{{asset('/test/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/test/style.css')}}">
</head>
<body>
<!-- start nav -->


<nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
    <div class="container-fluid">
        <img class=" rounded-3 " src="{{asset('/test/imag/raaq.png')}}" alt="">
        <a class="navbar-brand  border rounded-4 px-4 py-0 border-3 border-dark-subtle " href="{{route('start')}}">ابداء الاختبار</a>
    </div>
</nav>
<!-- end nav -->
<!-- start section -->
<header class="d-flex align-items-center justify-content-center text-end mt-4 pb-5 ">
    <div class="   mt-5 mb-5 rounded-5 p-4 ">
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-4 mt-5">

                    <h1 class=" mt-2 addres-raaq">راق</h1>
                    <p class="addres-raaq-p">موعظة من ربكم وشفاء لما في الصدور</p>
                </div>

                <div class="col-sm-8 p-4">
                    <div class="p-2">
                        <p class="addres-1 p-lg-3">راق هي اول منصه عربيه للعلاج الروحاني و الرقية الشرعيه بالقران والسنه .راق هي المنصه الاوله التي تجمع نخبه من المعالجين الروحانيين في الوطن العربي</p>
                    </div>
                    <div class="d-grd gap-2 d-flex justify-content-start">
                        <a class=" button-raaq fs-5 text-decoration-none " href="{{route('start')}}">ابدا الاختبار</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</header>


<section class="container-fluid text-center bg-white pb-4 d-flex sss ">
    <div class="row">
        <h1 class="raaq-h1 mt-3">لم تختارنا؟</h1>
        <div class="col raaq-div  rounded-4  m-5">
            <div class="m-5 ">
                <p class=" raaq-p1">استمع إلى تجارب وآراء عملائنا السابقين وكيف تحسنت حالتهم</p>

            </div>
        </div>
        <div class="col raaq-div rounded-4  m-5">
            <div class="m-5 ">
                <p class=" raaq-p1">.نقدم لك شرحًا واضحًا لكافة العلاجات والخدمات التي نقدمها</p>

            </div>
        </div>
        <div class="col raaq-div rounded-4  m-5">

            <div class="m-5 ">

                <p class=" raaq-p1">معالجون روحانيون يتمتعون بخبرة واسعة ومعرفة عميقة بالعلوم الدينية.</p>

            </div>
        </div>
    </div>
</section>


<section class=" m-5  ">
    <div class="container">
        <div class="row">
            <h1 class="raaq-h1">كيفية العمل</h1>
            <div class="position-relative mt-5">
                <div  style="height: 3px; background-color:#CBAB85;">
                    <div class="" style="width: 50%"></div>
                </div>
                <div  class="position-absolute top-0 start-0 translate-middle   text-center  rounded-pill justify-content-center align-items-center d-flex " style="width: 3rem; height:3rem; color:#ffffff ; background-color: #CBAB85; border: #CBAB85;">3</div>
                <div  class="position-absolute top-0 start-50 translate-middle text-center rounded-pill justify-content-center align-items-center d-flex " style="width: 3rem; height:3rem; color:#ffffff ; background-color: #CBAB85; border: #CBAB85 ">2</div>
                <div  class="position-absolute top-0 start-100 translate-middle  text-center rounded-pill justify-content-center align-items-center d-flex" style="width: 3rem; height:3rem; color:#ffffff ; background-color: #CBAB85; border: #CBAB85">1</div>
            </div>


            <div class="">
                <div class="position-relative mt-5 pb-5">
                    <div style="height: 0px; background-color:#CBAB85;">
                    </div>
                    <div  class="position-absolute top-0 start-0 translate-middle   text-center media-raaq  justify-content-center align-items-center d-flex " style=" color: #525252;  ">تواصل مع المعالج</div>
                    <div  class="position-absolute top-0 start-50 translate-middle text-center media-raaq  justify-content-center align-items-center d-flex " style=" color: #525252  ">أحصل على النتائج</div>
                    <div class="  R position-absolute top-0 start-100 translate-middle  text-center media-raaq  justify-content-center align-items-center d-flex " style=" color:  #525252">أبدأ الاختبار</div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->

<footer class="pt-5 ">
    <div class="foo fixed-bottom">
        <div class="container">
            <div class="row">
{{--                <div class="col-md-6 text-end text-danger d-flex align-items-center justify-content-start ">--}}
{{--                    <a href="" class=""><i class="fa-brands fa-instagram m-auto align-items-center justify-content-center "></i></a>--}}
{{--                    <a href="" class=" m-2"><i class="fa-brands fa-whatsapp m-auto "></i></a>--}}
{{--                    <a href="" class=""><i class="fa-brands fa-youtube m-auto"></i></a>--}}
{{--                </div>--}}

                <div class="col-md-6">
                    <p class="lead text-start justify-content-center align-items-center  mt-3">
                        © 2024 RAAQ. All rights reserved
                    </p>
                </div>

            </div>
        </div>
    </div>
</footer>



</body>
</html>
