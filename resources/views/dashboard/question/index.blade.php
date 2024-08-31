@extends('dashboard.layouts.app')
@section('style')
    <!-- DATA TABLE CSS -->
    <link rel="stylesheet" href="{{asset('/build/assets/plugins/datatable/css/dataTables.bootstrap5.css')}}">
    <link rel="stylesheet" href="{{asset('/build/assets/plugins/datatable/css/buttons.bootstrap5.min.css')}}">
    <link rel="stylesheet" href="{{asset('/build/assets/plugins/datatable/css/responsive.bootstrap5.css')}}">

@endsection
@section('content')

    @if (session('success'))
        <div class="alert alert-success" role="alert">
            <button aria-label="Close" class="btn-close" data-bs-dismiss="alert" type="button">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong>!احسنت </strong> {{ session('success') }}
        </div>
    @endif
    @if (session('error'))
        <div class="alert alert-danger mg-b-0" role="alert">
            <button aria-label="Close" class="btn-close" data-bs-dismiss="alert" type="button">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong>!للاسف </strong> {{ session('error') }}
        </div>
    @endif

    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card custom-card">
                <div class="card-body">
                    <div>
                        <h6 class="main-content-label mb-1">الاختيارات </h6>
                        <a class="btn ripple btn-primary float-end mb-2" data-bs-target="#addQuestion"
                           data-bs-toggle="modal" href="">اضافة اختيار جديد</a>
                    </div>
                    <div class="table-responsive">
                        <div id="example3_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="example3"
                                           class="table table-striped table-bordered text-nowrap dataTable no-footer dtr-inline collapsed"
                                           role="grid" aria-describedby="example3_info" style="width: 945px;">
                                        <thead>
                                        <tr role="row">
                                            <th class="sorting sorting_asc" tabindex="0" aria-controls="example3"
                                                rowspan="1" colspan="1" style="width: 76px;" aria-sort="ascending"
                                                aria-label="First name: activate to sort column descending">الكود
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1"
                                                colspan="1" style="width: 72px;"
                                                aria-label="Last name: activate to sort column ascending">الاختيار
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1"
                                                colspan="1" style="width: 177px;"
                                                aria-label="Position: activate to sort column ascending">الصفحة
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1"
                                                colspan="1" style="width: 87px;"
                                                aria-label="Office: activate to sort column ascending">الاجرائات
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($questions as $question)
                                            <tr class="odd">
                                                <td class="dtr-control sorting_1" tabindex="0">{{$question->id}}</td>
                                                <td>{{$question->question}}</td>
                                                <td>{{$question->page->name}}</td>
                                                <td class="d-flex">
                                                    <a class="btn btn-success btn-with-icon me-2"
                                                       data-bs-target="#editQuestion"
                                                       data-bs-toggle="modal"
                                                       data-id="{{$question->id}}"
                                                       data-question="{{$question->question}}"
                                                       data-page="{{$question->page->id}}"
                                                       href=""><i class="fe fe-edit"></i>تعديل</a>

                                                    <a class="btn btn-danger btn-with-icon me-2"
                                                       data-bs-target="#deleteQuestion"
                                                       data-bs-toggle="modal" data-id="{{$question->id}}"
                                                       data-question="{{$question->question}}"
                                                       href=""><i class="fe fe-delete"></i>حذف</a>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>






    <div class="modal" id="addQuestion" style="display: none;" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">اضافة اختيار جديد</h6>
                    <button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"></button>
                </div>
                <form method="post" action="{{route('question.add')}}" class="p-4 bg-light rounded shadow-sm">
                    @csrf
                    <div class="form-group">
                            <label for="creat_page_id" class="mg-b-10">اختر الصفحة لاضافة الاختيار</label>
                            <select id="creat_page_id" class="form-control select2 select2-hidden-accessible" tabindex="-1"
                                    aria-hidden="true" name="page_id" required>
                                <option label="اختر صفحة">
                                </option>
                                @foreach($pages as $page)
                                    <option value="{{$page->id}}">
                                        {{$page->name}}
                                    </option>
                                @endforeach

                            </select>
                        </br></br>
                        <label for="creat_question" class="mg-b-10">الاختيار</label>
                        <input type="text" class="form-control" id="creat_question" name="question" placeholder="الاختيار" required>
                    </div>
                    <div class="modal-footer">
                        <button class="btn ripple btn-primary" type="submit">اضافة</button>
                        <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">الغاء</button>
                    </div>
                </form>

            </div>
        </div>
    </div>


    <div class="modal" id="editQuestion" style="display: none;" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">تعديل اختيار</h6>
                    <button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"></button>
                </div>
                <form method="post" action="{{route('question.update')}}" class="p-4 bg-light rounded shadow-sm">
                    @csrf
                    <div class="form-group">
                        <label for="page_id" class="mg-b-10">اختر الصفحة لاضافة الاختيار</label>
                        <select id="page_id" class="form-control select2 select2-hidden-accessible" tabindex="-1"
                                aria-hidden="true" name="page_id" required>
                            <option label="اختر صفحة">
                            </option>
                            @foreach($pages as $page)
                                <option value="{{$page->id}}">
                                    {{$page->name}}
                                </option>
                            @endforeach
                        </select>
                        <br><br>
                        <label for="name" class="mg-b-10">الاختيار</label>
                        <input type="text" class="form-control" id="question" name="question" placeholder="الاختيار">
                        <input type="hidden" class="form-control" value="" name="id">
                    </div>
                    <div class="modal-footer">
                        <button class="btn ripple btn-primary" type="submit">تعديل</button>
                        <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">الغاء</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <div class="modal" id="deleteQuestion" style="display: none;" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">حذف اختيار</h6>
                    <button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"></button>
                </div>
                <form method="post" action="{{route('question.delete')}}" class="p-4 bg-light rounded shadow-sm">
                    @csrf
                    <div class="form-group">
                        <p class="mg-b-10">خلى بالك انت كدة هتحذف الاختيار دة <span class="page-name"></span></p>
                        <input type="hidden" class="form-control" value="" name="id">
                    </div>
                    <div class="modal-footer">
                        <button class="btn ripple btn-primary" type="submit">حذف</button>
                        <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">الغاء</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

@endsection


@section('script')

    <!-- Internal Data Table js -->
    <script src="{{asset('/build/assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('/build/assets/plugins/datatable/js/dataTables.bootstrap5.js')}}"></script>
    <script src="{{asset('/build/assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('/build/assets/plugins/datatable/js/buttons.bootstrap5.min.js')}}"></script>
    <script src="{{asset('/build/assets/plugins/datatable/js/jszip.min.js')}}"></script>
    <script src="{{asset('/build/assets/plugins/datatable/pdfmake/pdfmake.min.js')}}"></script>
    <script src="{{asset('/build/assets/plugins/datatable/pdfmake/vfs_fonts.js')}}"></script>
    <script src="{{asset('/build/assets/plugins/datatable/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('/build/assets/plugins/datatable/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('/build/assets/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
    <script src="{{asset('/build/assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('/build/assets/plugins/datatable/responsive.bootstrap5.min.js')}}"></script>
    <script src="{{asset('/build/assets/js/table-data.js')}}"></script>
    <script src="{{asset('/build/assets/js/select2.js')}}"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var deleteModal = document.getElementById('deleteQuestion');
            deleteModal.addEventListener('show.bs.modal', function (event) {
                // Get the button that triggered the modal
                var button = event.relatedTarget;

                // Extract info from data-id and data-name attributes
                var questionId = button.getAttribute('data-id');
                var question = button.getAttribute('data-question');

                // Update the hidden input field inside the modal with the page ID
                var hiddenInput = deleteModal.querySelector('input[name="id"]');
                hiddenInput.value = questionId;

                // Update the span or any element that will show the page name
                var Input = deleteModal.querySelector('span.page-name');
                if (Input) {
                    Input.innerHTML = `( ` + question + ` )`;
                    Input.style.fontSize = 'large';
                    Input.style.fontWeight = 'bold';
                }
            });
        });

        document.addEventListener('DOMContentLoaded', function () {
            var editModal = document.getElementById('editQuestion');
            editModal.addEventListener('show.bs.modal', function (event) {
                // Get the button that triggered the modal
                var button = event.relatedTarget;

                // Extract info from data-id and data-name attributes
                var questionId = button.getAttribute('data-id');
                var question = button.getAttribute('data-question');
                var questionPage = button.getAttribute('data-page');

                // Update the hidden input field inside the modal with the page ID
                var hiddenInput = editModal.querySelector('input[name="id"]');
                hiddenInput.value = questionId;

                // Update the span or any element that will show the page name
                var Input = editModal.querySelector('input[name="question"]');
                Input.value = question;

                var select = editModal.querySelector('select[name="page_id"]');
                $(select).val(questionPage).trigger('change');
            });
        });
    </script>
@endsection
