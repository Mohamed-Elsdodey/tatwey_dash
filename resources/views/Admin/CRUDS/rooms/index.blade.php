@extends('Admin.layouts.inc.app')
@section('title')
    الفصول
@endsection
@section('css')

@endsection
@section('content')
    <div class="card">
        <div class="card-header d-flex align-items-center">
            <h5 class="card-title mb-0 flex-grow-1"> الفصول للصف:

                {{$row->title_ar}}
            </h5>




                <div>
                    <button id="addBtn-p" data-id="{{$row->id}}" class="btn btn-primary">اضافة  فصل</button>
                </div>


        </div>
        <div class="card-body">
            <table id="table" class="table table-bordered dt-responsive nowrap table-striped align-middle"
                   style="width:100%">
                <thead>
                <tr>
                    <th>#</th>
                    <th>الرقم التعريفي</th>
                    <th>{{trans('admin.name')}}</th>
                    <th>اللون</th>
                    <th>طلاب الفصل</th>
                    <th>تحميل طلاب الفصل</th>
                    <th>تصدير طلاب الفصل</th>
                    <th>  {{trans('admin.created at')}}</th>
                    <th>{{trans('admin.actions')}}</th>
                </tr>
                </thead>
            </table>
        </div>
    </div>

    <div class="modal fade" id="Modal" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered modal-lg mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content" id="modalContent">
                <!--begin::Modal header-->
                <div class="modal-header">
                    <!--begin::Modal title-->
                    <h2><span id="operationType"></span>  فصل </h2>
                    <!--end::Modal title-->
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" style="cursor: pointer"
                         data-bs-dismiss="modal" aria-label="Close">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                        <span class="svg-icon svg-icon-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none">
                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                      transform="rotate(-45 6 17.3137)"
                                      fill="black"/>
                                <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
                                      fill="black"/>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Close-->
                </div>
                <!--begin::Modal body-->
                <div class="modal-body scroll-y mx-5 mx-xl-15 my-7" id="form-load">

                </div>
                <!--end::Modal body-->
                <div class="modal-footer">
                    <div class="text-center">
                        <button type="reset" data-bs-dismiss="modal" aria-label="Close" class="btn btn-light me-3">
                            {{trans('admin.cancel')}}
                        </button>
                        <button form="form" type="submit" id="submit" class="btn btn-primary">
                            <span class="indicator-label">{{trans('admin.ok')}}</span>
                        </button>
                    </div>
                </div>
            </div>

            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>

@endsection
@section('js')
    <script>
        var columns = [
            {data: 'counter', name: 'counter'},
            {data: 'id', name: 'id'},
            {data: 'title_ar', name: 'title_ar'},
            {data: 'color', name: 'color'},
            {data: 'students', name: 'students'},
            {data: 'excel', name: 'excel'},
            {data: 'import', name: 'import'},
            {data: 'created_at', name: 'created_at'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ];
    </script>
    @include('Admin.layouts.inc.ajax',['url'=>'rooms'])

    <script>
        $(document).on('click', '#addBtn-p', function () {
            var row_id=$(this).attr('data-id');
            var link="{{route('rooms.create')}}?row_id="+row_id;
            $('#form-load').html(loader)
            $('#operationType').text('اضافة');

            $('#Modal').modal('show')

            setTimeout(function (){
                $('#form-load').load(link)
            },1000)
        });
    </script>



    <script>
        $(document).on('click', '.importantStudent', function () {
            var room_id=$(this).attr('data-id');
            var routing="{{route('admin.importRoomStudent',':id')}}";
            routing=routing.replace(':id',room_id)
            $('#form-load').html(loader)
            $('#operationType').text('تصدير');

            $('#Modal').modal('show')

            setTimeout(function (){
                $('#form-load').load(routing)
            },1000)
        });
    </script>


@endsection
