@extends('dashboard.layouts.app')
@section('content')

    @error('page_number')
    <div class="alert alert-danger mg-b-0" role="alert">
        <button aria-label="Close" class="btn-close" data-bs-dismiss="alert" type="button">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>!خطأ </strong> رقم الصفحة يجب الا يكون مكرر
    </div>
    @enderror

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
                        <h6 class="main-content-label mb-1">المعالجين</h6>
                        {{--                        <button class="btn ripple btn-main-primary float-end mb-2">Primary</button>--}}
                        <a class="btn ripple btn-primary float-end mb-2" data-bs-target="#addPage"
                           data-bs-toggle="modal" href="">اضافة معالج جديد</a>
                    </div>

                    <div class="table-responsive border">
                        <table class="table text-nowrap text-md-nowrap mg-b-0">
                            <thead>
                            <tr>
                                <th>كود</th>
                                <th>الاسم</th>
                                <th>رقم التواصل</th>
                                <th>البلد</th>
                                <th>المزيد من التفاصيل</th>
                                <th>عمليات</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($sheikhs as $sheikh)
                                <tr>
                                    <th scope="row">{{$sheikh->id}}</th>
                                    <td>{{$sheikh->name}}</td>
                                    <td>{{$sheikh->phone}}</td>
                                    <td>{{$sheikh->country}}</td>
                                    <td>{{$sheikh->details}}</td>
                                    <td class="d-flex">
                                        <a class="btn btn-success btn-with-icon me-2" data-bs-target="#editPage"
                                           data-bs-toggle="modal" data-id="{{$sheikh->id}}" data-name="{{$sheikh->name}}" data-phone="{{$sheikh->phone}}"
                                           data-country="{{$sheikh->country}}" data-detail="{{$sheikh->details}}"
                                           href=""><i class="fe fe-edit"></i>تعديل</a>

                                        <a class="btn btn-danger btn-with-icon me-2" data-bs-target="#deletePage"
                                           data-bs-toggle="modal" data-id="{{$sheikh->id}}" data-name="{{$sheikh->name}}"
                                           href=""><i class="fe fe-delete"></i>حذف</a>
                                    </td>
                                </tr>
                            @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="addPage" style="display: none;" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">اضافة معالج جديد</h6>
                    <button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"></button>
                </div>
                <form method="post" action="{{route('sheikh.add')}}" class="p-4 bg-light rounded shadow-sm">
                    @csrf
                    <div class="form-group">
                        <label for="name" class="mg-b-10">اسم المعالج</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="اسم المعالج" required>
                        <br>
                        <label for="phone" class="mg-b-10">رقم التواصل مع المعالج ( يجب ان يشمل كود البلد )</label>
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="الرجاء اضافه رقم التواصل شاملا كود البلد حتى يعمل بشكل صحيح" required>
                        <br>
                        <label for="country" class="mg-b-10">البلد</label>
                        <input type="text" class="form-control" id="country" name="country" placeholder="البلد" >
                        <br>
                        <label for="detail" class="mg-b-10">المزيد من التفاصيل</label>
                        <textarea type="text"  class="form-control" id="detail" name="detail" placeholder="المزيد من التفاصيل" ></textarea>
                    </div>
                    <div class="modal-footer">
                        <button class="btn ripple btn-primary" type="submit">اضافة</button>
                        <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">الغاء</button>
                    </div>
                </form>

            </div>
        </div>
    </div>


    <div class="modal" id="editPage" style="display: none;" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">تعديل بيانات معالج</h6>
                    <button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"></button>
                </div>
                <form method="post" action="{{route('sheikh.update')}}" class="p-4 bg-light rounded shadow-sm">
                    @csrf
                    <input type="hidden" class="form-control" value="" name="id">
                    <div class="form-group">
                        <label for="name" class="mg-b-10">اسم المعالج</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="اسم المعالج" required>
                        <br>
                        <label for="phone" class="mg-b-10">رقم التواصل مع المعالج ( يجب ان يشمل كود البلد )</label>
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="الرجاء اضافه رقم التواصل شاملا كود البلد حتى يعمل بشكل صحيح" required>
                        <br>
                        <label for="country" class="mg-b-10">البلد</label>
                        <input type="text" class="form-control" id="country" name="country" placeholder="البلد" >
                        <br>
                        <label for="detail" class="mg-b-10">المزيد من التفاصيل</label>
                        <textarea type="text"  class="form-control" id="detail" name="detail" placeholder="المزيد من التفاصيل" ></textarea>
                    </div>
                    <div class="modal-footer">
                        <button class="btn ripple btn-primary" type="submit">تعديل</button>
                        <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">الغاء</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <div class="modal" id="deletePage" style="display: none;" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">حذف صفحة</h6>
                    <button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"></button>
                </div>
                <form method="post" action="{{route('sheikh.delete')}}" class="p-4 bg-light rounded shadow-sm">
                    @csrf
                    <div class="form-group">
                        <p class="mg-b-10">خلى بالك انت كدة هتحذف بيانات المعالج  <span  class="page-name"></span></p>
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
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var deleteModal = document.getElementById('deletePage');
            deleteModal.addEventListener('show.bs.modal', function (event) {
                // Get the button that triggered the modal
                var button = event.relatedTarget;

                // Extract info from data-id and data-name attributes
                var pageId = button.getAttribute('data-id');
                var pageName = button.getAttribute('data-name');

                // Update the hidden input field inside the modal with the page ID
                var hiddenInput = deleteModal.querySelector('input[name="id"]');
                hiddenInput.value = pageId;

                // Update the span or any element that will show the page name
                var Input = deleteModal.querySelector('span.page-name');
                if(Input) {
                    Input.innerHTML = `( `+pageName+` )`;
                    Input.style.fontSize = 'large';
                    Input.style.fontWeight = 'bold';
                }
            });
        });

        document.addEventListener('DOMContentLoaded', function () {
            var editModal = document.getElementById('editPage');
            editModal.addEventListener('show.bs.modal', function (event) {
                // Get the button that triggered the modal
                var button = event.relatedTarget;

                // Extract info from data-id and data-name attributes
                var sheikhId = button.getAttribute('data-id');
                var sheikhName = button.getAttribute('data-name');
                var sheikhPhone = button.getAttribute('data-phone');
                var sheikhCountry = button.getAttribute('data-country');
                var sheikhDetail = button.getAttribute('data-detail');



                var hiddenInput = editModal.querySelector('input[name="id"]');
                hiddenInput.value = sheikhId;

                var Input = editModal.querySelector('input[name="name"]');
                    Input.value = sheikhName;

                var InputPageNumber = editModal.querySelector('input[name="phone"]');
                InputPageNumber.value = sheikhPhone;

                var InputsheikhCountry = editModal.querySelector('input[name="country"]');
                InputsheikhCountry.value = sheikhCountry;

                var InputsheikhDetail = editModal.querySelector('textarea[name="detail"]');
                InputsheikhDetail.value = sheikhDetail;
            });
        });
    </script>
@endsection
