<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RAAQ</title>
    <link rel="icon" href="{{asset('/test/imag/raaq.png')}}">
    <link rel="stylesheet" href="{{'/test/css/all.min.css'}}">
    <link rel="stylesheet" href="{{asset('/test/css/bootstrap.min.css')}}">
{{--    <link rel="stylesheet" href="{{asset('/test/style.css')}}">--}}
    @yield('style')
</head>
<body>

<header class="vh-100">
    <nav class="navbar bg-body-tertiary py-0 d-flex">

        <div class="container-fluid">
            <a class="navbar-brand ms-5 border rounded-4 px-4 py-0 border-3 border-dark-subtle " href="{{route('start')}}">اعدالاختبار</a>
            <div class=" text-end my-2 me-5 ">
                <div class="l">
                    <img class=" rounded-3 " src="{{asset('/test/imag/raaq.png')}}" alt="">
                </div>
            </div>
        </div>
    </nav>
    <section>
        <div class="container">
            @yield('content')
        </div>
    </section>

</header>

<footer class="pt-5 ">
    <div class="foo fixed-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="lead text-start justify-content-center align-items-center  mt-3">
                        © 2024 RAAQ. All rights reserved
                    </p>
                </div>
{{--                <div class="col-md-6 text-end text-danger d-flex align-items-center justify-content-end ">--}}
{{--                    <a href="" class=""><i class="fa-brands fa-instagram m-auto align-items-center justify-content-center "></i></a>--}}
{{--                    <a href="" class=" m-2"><i class="fa-brands fa-whatsapp m-auto "></i></a>--}}
{{--                    <a href="" class=""><i class="fa-brands fa-youtube m-auto"></i></a>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
</footer>
@yield('script')
</body>
</html>
