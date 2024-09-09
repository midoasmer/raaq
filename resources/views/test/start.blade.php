@extends('/test/layouts/app')
@section('style')
    <link rel="stylesheet" href="{{asset('/test/style.css')}}">
@endsection

@section('content')
    <div class="row  text-center">
        <h3 class="mt-2">ابدا الاختبار لمعرفة اذا كنت مصاب بمس او سحر</h3>
        <div class="col-5 form bg-light  m-auto text-end border rounded-4 position-relative">
            <div class=" ">
                <form action="{{route('takeTest.start')}}" method="post" class=" pb-3">
                    @csrf
                    <h6>النوع</h6>
                    <div>
                        <label class="" for="1">انثي</label>
                        <input class="form-check-input e"  type="radio" id="1" value="female" name="gender" required>
                    </div>
                    <div>
                        <label class="" for="2">ذكر</label>
                        <input class="form-check-input e"  type="radio" id="2" value="male" name="gender" required>
                    </div>
                    <h6 class="mt-4">الحاله الاجتماعيه</h6>
                    <div>
                        <label class="" for="3">متزوج</label>
                        <input class="form-check-input e"  type="radio" value="married" name="status" id="3" required>
                    </div>
                    <div>
                        <label class="" for="4">ارمل</label>
                        <input class="form-check-input e"  type="radio" value="widower" name="status" id="4" required>
                    </div>
                    <div>
                        <label class="" for="5">مطلق</label>
                        <input  class="form-check-input e" type="radio" value="divorced" name="status" id="5" required>
                    </div>
                    <div>
                        <label class="w" for="6">اعزب</label>
                        <input class="form-check-input  e" type="radio" value="single" name="status" id="6" required>
                    </div>
                    <h6>العمر</h6>
                    <div class="d-grid gap-2 ps-2">
                        <input type="number" name="age" class="form-control age text-center  rounded-4" required  id="floatingInputDisabled" placeholder="قم بادخال عمرك" >
                        <button class="rounded-4 py-1" type="submit">ابدا الاختبار</button>
                    </div>

                </form>
            </div>

        </div>
    </div>
@endsection
