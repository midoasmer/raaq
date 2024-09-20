@extends('/test/layouts/app')
@section('style')
    <link rel="stylesheet" href="{{asset('/test/style.css')}}">
@endsection

@section('content')

    <div class=" mt-5 tet ">
        <h3 class="">ابدأ الاختبار لمعرفة إذا كنت مصاب بمس أو سحر</h3>
    </div>

    <header class="d-flex align-items-center justify-content-center text-end  ">

        <div class="header-content bg-white  mt-5 mb-5 rounded-5 p-4 ">
            <form action="{{route('takeTest.start')}}" method="post" class=" pb-3">
                @csrf
                <h6>النوع</h6>
                <div>
                    <label class="N" for="1">انثي</label>
                    <input class="form-check-input design-input" type="radio" id="1" value="female" name="gender" required>
                </div>
                <div>
                    <label class="N" for="2">ذكر</label>
                    <input class="form-check-input design-input"   type="radio" id="2" value="male" name="gender" required>
                </div>
                <h6 class="mt-4">الحاله الاجتماعيه</h6>
                <div>
                    <label class="N" for="3">متزوج</label>
                    <input class="form-check-input design-input"  type="radio" value="married" name="status" id="3" required>
                </div>
                <div>
                    <label class="N" for="4">ارمل</label>
                    <input class="form-check-input design-input"  type="radio" value="widower" name="status" id="4" required>
                </div>
                <div>
                    <label class="N" for="5">مطلق</label>
                    <input  class="form-check-input design-input" type="radio" value="divorced" name="status" id="5" required>
                </div>
                <div>
                    <label class="N" for="6">اعزب</label>
                    <input class="form-check-input  design-input" type="radio" value="single" name="status" id="6" required>
                </div>
                <div class="d-grid gap-2 ps-2">
                    <h6>العمر</h6>
                    <input type="number" min="8" max="80" name="age" class="form-control age text-center  rounded-4" required  id="floatingInputDisabled" placeholder="قم بادخال عمرك (من 8 الى 80 عام ) " >
                </div>
                <div class="d-grid gap-2 ps-2">
                    <h6>الاسم</h6>
                    <input type="text" name="name" class="form-control age text-center  rounded-4" required  placeholder="قم بادخال اسمك" >
                </div>
                <br>
                <div class="d-grid gap-2 ps-2">
                    <button class="rounded-4 py-1" type="submit">ابدا الاختبار</button>
                </div>
            </form>
        </div>
    </header>
@endsection
