@extends('Saas.layouts.inc.app')
@section('title')
    المدارس
@endsection
@section('css')

@endsection
@section('content')
    <div class="card">
        <div class="card-header d-flex align-items-center">
            <h5 class="card-title mb-0 flex-grow-1">المدارس</h5>


                <div>
                    <button id="addBtn" class="btn btn-primary">اضافة مدرسة</button>
                </div>


        </div>
        <div class="card-body">
            <table id="table" class="table table-bordered dt-responsive nowrap table-striped align-middle"
                   style="width:100%">
                <thead>
                <tr>
                    <th>#</th>
                    <th>{{trans('admin.name')}}</th>
                    <th> الدومين</th>
                    <th>صلاحيات الادارين</th>
                    <th>صلاحيات المدرسين</th>
                    <th>صلاحيات المشرفين</th>
                    <th>ادارين المدرسة</th>
                    <th>ادوار المدرسة </th>
                    <th> تاريخ الانشاء</th>
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
                    <h2><span id="operationType"></span> المدرسة </h2>
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
            {data: 'id', name: 'id'},
            {data: 'name', name: 'name'},
            {data: 'domain', name: 'domain'},
            {data: 'admin_permissions', name: 'admin_permissions'},
            {data: 'teacher_permissions', name: 'teacher_permissions'},
            {data: 'moderator_permissions', name: 'moderator_permissions'},
            {data: 'school_admins', name: 'school_admins'},
            {data: 'school_roles', name: 'school_roles'},
            {data: 'created_at', name: 'created_at'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ];
    </script>
    @include('Saas.layouts.inc.ajax',['url'=>'schools'])

    <script>
        $(document).on('click','.showPermissions',function (){
            var school_id=$(this).attr('data-id');

            $('#form-load').html(loader)
            $('#operationType').text('صلاحيات ادارين');
            $('#Modal').modal('show')

            var guard_name=$(this).attr('data-type');




            setTimeout(function (){
                $('#form-load').load("{{route('saas.show_school_permissions')}}?guard_name="+guard_name+"&&school_id="+school_id)
            },1000)




        })
    </script>


    <script>
        $(document).on('change','#check_all',function () {
            var checked = $(this).is(':checked');

            if (checked){
                $('.checkbox').prop('checked', true);
            }
            else {
                $('.checkbox').prop('checked', false);
            }
        })
    </script>


@endsection
