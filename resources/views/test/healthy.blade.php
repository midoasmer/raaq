@extends('/test/layouts/app')
@section('style')
    <link rel="stylesheet" href="{{asset('/test/style2.css')}}">
@endsection
@section('content')
    <div class="row  text-center n ">
        <div class="col-lg-5 col-sm-5 col-md-5 col-lg-5 col-xl-5 col-xxl-5 col-5    bg-light  m-auto text-end border rounded-4 ">
            <div class="  ">
                <p class="tetal mt-5 ">تم الانتهاء من الاختبار
                    الحمدلله أنت معافى.
                    إذا كنت مصابا بأي أعراض ذهنية أو جسدية قم باستشارة طبيب</p>
                <a class="rounded-4 d-grid gap-2 ps-2   mb-5  mt-3 A" href="{{route('start')}}">اعدالاختبار</a>
{{--                <div class="d-grid gap-2 ps-2   mb-5 ">--}}
{{--                    <button class="rounded-4  mt-3 A" type="submit"> تحميل نتيجة الاختبار</button>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
@endsection
