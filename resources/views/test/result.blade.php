@extends('/test/layouts/app')
@section('style')
    <link rel="stylesheet" href="{{asset('/test/style2.css')}}">
@endsection
@section('content')
    <div class="row  text-center n ">
        <div class="col-lg-5 col-sm-5 col-md-5 col-lg-5 col-xl-5 col-xxl-5 col-5    bg-light  m-auto text-end border rounded-4 ">
            <div class="  ">
                <h1 class="tetal mt-5 ">تم الانتهاء من الاختبار </h1>
                <div class="d-grid gap-2 ps-2   mb-5 ">
                    <button class="rounded-4  mt-3 e" data-toggle="modal" data-target="#modelModal"> التواصل مع المعالج</button>
                    <a href="{{ url($link) }}" class="rounded-4  mt-3 A" download >
                        تحميل نتيجة الاختبار
                    </a>
                </div>
            </div>

        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="modelModal" tabindex="-1" role="dialog" aria-labelledby="modelModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modelModalLabel">قائمة المعالجين</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                   @foreach($contacts as $contact)
                        <a href="https://wa.me/{{$contact['phone']}}?text= هذا رابط الاختبار الخاص بى {{ url($link) }}" class="rounded-4  mt-3 A" target="_blank" >
                           {{$contact['name']}}
                        </a>
                       <br>
                    @endforeach
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">إغلاق</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection
