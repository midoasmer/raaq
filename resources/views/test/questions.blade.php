@extends('/test/layouts/app')
@section('style')
    <link rel="stylesheet" href="{{asset('/test/style.css')}}">
@endsection

@section('content')
<header class="d-flex align-items-center justify-content-center text-end  ">
    <div class="header-content bg-white  mt-5 mb-5 rounded-5 p-4 ">
        <form action="{{route('takeTest.saveQuestions')}}" method="post" class=" pt-1  ">
            @csrf
            <input type="hidden" name="uuid" value="{{$uuid}}">
            <input type="hidden" name="page_id" value="{{$page->id}}">
            <input type="hidden" name="next_page_number" value="{{$page->page_number + 1}}">
            <h6>{{$page->name}}</h6>
            <p class="tatel">الرجاء الاختيار من الحالات الآتية <span> (يمكن اختيار اكتر من واحد )</span></p>

            @foreach($questions as $question)
                <div class=" ">
                    <label class="" for="{{$question->id}}"> {{$question->question}} </label>
                    <input class="form-check-input design-input  " onclick="restNo()" type="checkbox"
                           id="{{$question->id}}" value="{{$question->id}}" name="questions[]">
                </div>
            @endforeach
            @if($page->page_number == 1)
                <div class=" ">
                    <label class="" for="-1"> لاشئ مما سبق </label>
                    <input class="form-check-input design-input" onclick="restdreams()" type="checkbox" id="-1" value="-1"
                           name="questions[]">
                </div>
            @endif
            <div class="d-grid gap-2 ps-2 mt-3">
                <button class="rounded-4 py-1 mt-3" type="submit"> استمر</button>
            </div>
        </form>
    </div>
</header>

@endsection
@section('script')
    <script>
        function restNo() {
            document.getElementById("-1").checked = false;
        }

        function restdreams() {
            const checkboxes = document.querySelectorAll(".question");
            checkboxes.forEach(function (checkbox) {
                checkbox.checked = false;
            });
        }
    </script>
@endsection
