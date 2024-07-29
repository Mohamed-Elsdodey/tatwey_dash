@extends('Admin.layouts.inc.app')
@section('title')
    الاعدادات العامة
@endsection
@section('css')

    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" type="text/css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css" rel="stylesheet"/>

@endsection

{{--@section('page-title')--}}
{{--    General Settings--}}
{{--@endsection--}}



@section('content')

    <div class="card">
        <div class="card-header ">
            <h5 class="card-title mb-0 flex-grow-1">الاعدادات العامة </h5>


            <form id="form" enctype="multipart/form-data" method="POST" action="{{route('settings.store')}}">
                @csrf
                <div class="row my-4 g-4">




                    <div class="d-flex flex-column mb-7 fv-row col-sm-6">
                        <label for="logo_header" class="form-control-label fs-6 fw-bold "> اللوجو </label>
                        <input type="file" class="dropify" name="logo_header"
                               data-default-file="{{get_file($settings->logo_header)}}"
                               accept="image/*"/>
                        <span class="form-text text-muted text-center">Only the following formats are allowed: jpeg, jpg, png, gif, svg, webp, avif.</span>
                    </div>


                    <div class="d-flex flex-column mb-7 fv-row col-sm-6">
                        <label for="fave_icon" class="form-control-label fs-6 fw-bold "> الفيف ايكون  </label>
                        <input type="file" id="fave_icon" class="dropify" name="fave_icon"
                               data-default-file="{{get_file($settings->fave_icon)}}"
                               accept="image/*"/>
                        <span class="form-text text-muted text-center">Only the following formats are allowed: jpeg, jpg, png, gif, svg, webp, avif.</span>
                    </div>

                    <div class="d-flex flex-column mb-7 fv-row col-sm-4">
                        <!--begin::Label-->
                        <label for="app_name" class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                            <span class="required mr-1"> اسم الموقع</span>
                        </label>
                        <!--end::Label-->
                        <input id="app_name" type="text" class="form-control form-control-solid" name="app_name"
                               value="{{$settings->app_name}}"/>
                    </div>


                    <div class="d-flex flex-column mb-7 fv-row col-sm-4">
                        <!--begin::Label-->
                        <label for="minimum_student_balance" class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                            <span class="required mr-1"> الحد الأدنى لرصيد الطالب  </span>
                        </label>
                        <!--end::Label-->
                        <input id="minimum_student_balance" type="number" class="form-control form-control-solid" name="minimum_student_balance"
                               value="{{$settings->minimum_student_balance}}"/>
                    </div>

                    <div class="d-flex flex-column mb-7 fv-row col-sm-4">
                        <!--begin::Label-->
                        <label for="ranking_punishment" class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                            <span class="required mr-1"> عقوبة الترتيب    </span>
                        </label>
                        <!--end::Label-->
                        <input id="ranking_punishment" type="number" class="form-control form-control-solid" name="ranking_punishment"
                               value="{{$settings->ranking_punishment}}" step="any"/>
                    </div>


                    <div class="my-4">
                        <button type="submit" class="btn btn-success"> تعديل</button>
                    </div>


                </div>
            </form>

        </div>
    </div>

@endsection

@section('js')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>


    <script>
        $('.dropify').dropify();

    </script>


    <script>
        // CKEDITOR.replace('privacy');


    </script>
    <script>
        $(document).on('submit', "form#form", function (e) {
            e.preventDefault();

            var formData = new FormData(this);

            var url = $('#form').attr('action');
            $.ajax({
                url: url,
                type: 'POST',
                data: formData,

                complete: function () {
                },
                success: function (data) {

                    window.setTimeout(function () {

// $('#product-model').modal('hide')
                        if (data.code == 200) {
                            toastr.success(data.message)
                        } else {
                            toastr.error(data.message)
                        }
                    }, 1000);


                },
                error: function (data) {
                    if (data.status === 500) {
                        toastr.error('there is an error')
                    }

                    if (data.status === 422) {
                        var errors = $.parseJSON(data.responseText);

                        $.each(errors, function (key, value) {
                            if ($.isPlainObject(value)) {
                                $.each(value, function (key, value) {
                                    toastr.error(value)
                                });

                            } else {

                            }
                        });
                    }
                    if (data.status == 421) {
                        toastr.error(data.message)
                    }

                },//end error method

                cache: false,
                contentType: false,
                processData: false
            });
        });
    </script>

@endsection
