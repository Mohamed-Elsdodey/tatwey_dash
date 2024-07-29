@extends('Admin.layouts.inc.app')
@section('title')
    {{trans('admin.home')}}
@endsection
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css"/>

@endsection
@section('content')
    <div class="row">
        <div class="col-xl-3 col-lg-4 col-sm-6">
            <a href="#" class="text-center bg-white d-block  rounded-3 mb-3">
                <p class="text-uppercase fw-bold text-white text-truncate rounded-3 bg-primary p-2 mb-0">
                    المشرفين </p>
                <h2 class="py-4 mb-0 text-primary"><span class="counter-value" data-target="{{$admins}}">0</span>
                </h2>
            </a>
        </div><!-- end col -->
        <div class="col-xl-3 col-lg-4 col-sm-6">
            <a href="#" class="text-center bg-white d-block  rounded-3 mb-3">
                <p class="text-uppercase fw-bold text-white text-truncate rounded-3 bg-warning p-2 mb-0">
                    المواد الدراسية </p>
                <h2 class="py-4 mb-0 text-warning"><span class="counter-value" data-target="{{$categories}}">0</span>
                </h2>
            </a>
        </div><!-- end col -->

        <div class="col-xl-3 col-lg-4 col-sm-6">
            <a href="#" class="text-center bg-white d-block  rounded-3 mb-3">
                <p class="text-uppercase fw-bold text-white text-truncate rounded-3 bg-dark p-2 mb-0">
                    الصفوف الدراسية </p>
                <h2 class="py-4 mb-0 text-info"><span class="counter-value"
                                                      data-target="{{$rows}}">0</span>
                    <span class="fs-5 text-muted">  </span>
                </h2>
            </a>
        </div><!-- end col -->
        <div class="col-xl-3 col-lg-4 col-sm-6">
            <a href="#" class="text-center bg-white d-block  rounded-3 mb-3">
                <p class="text-uppercase fw-bold text-white text-truncate rounded-3 bg-danger p-2 mb-0">
                    المدرسين </p>
                <h2 class="py-4 mb-0 text-danger"><span class="counter-value"
                                                        data-target="{{$teachers}}">0</span>
                    <span class="fs-5 text-muted">  </span>
                </h2>
            </a>
        </div><!-- end col -->




        <div class="col-xl-3 col-lg-4 col-sm-6">
            <a href="#" class="text-center bg-white d-block  rounded-3 mb-3">
                <p class="text-uppercase fw-bold text-white text-truncate rounded-3 bg-info p-2 mb-0">
                    الفصول </p>
                <h2 class="py-4 mb-0 text-primary"><span class="counter-value" data-target="{{$rooms}}">0</span>
                </h2>
            </a>
        </div><!-- end col -->
        <div class="col-xl-3 col-lg-4 col-sm-6">
            <a href="#" class="text-center bg-white d-block  rounded-3 mb-3">
                <p class="text-uppercase fw-bold text-white text-truncate rounded-3 bg-danger p-2 mb-0">
                    الطلاب    </p>
                <h2 class="py-4 mb-0 text-warning"><span class="counter-value" data-target="{{$students}}">0</span>
                </h2>
            </a>
        </div><!-- end col -->

        <div class="col-xl-3 col-lg-4 col-sm-6">
            <a  href="#" class="text-center bg-white d-block  rounded-3 mb-3">
                <p class="text-uppercase fw-bold text-white text-truncate rounded-3 bg-secondary p-2 mb-0">
                     العقوبات  </p>
                <h2 class="py-4 mb-0 text-info"><span class="counter-value"
                                                      data-target="{{$negative}}">0</span>
                    <span class="fs-5 text-muted">  </span>
                </h2>
            </a>
        </div><!-- end col -->
        <div class="col-xl-3 col-lg-4 col-sm-6">
            <a href="#" class="text-center bg-white d-block  rounded-3 mb-3">
                <p class="text-uppercase fw-bold text-white text-truncate rounded-3 bg-success p-2 mb-0">
                    التميز  </p>
                <h2 class="py-4 mb-0 text-danger"><span class="counter-value"
                                                        data-target="{{$positive}}">0</span>
                    <span class="fs-5 text-muted">  </span>
                </h2>
            </a >
        </div><!-- end col -->



        <div class="d-flex flex-column mb-7 fv-row col-sm-12 m-7">
            <!--begin::Label-->
            <label for="student_id" class="d-flex align-items-center fs-6 fw-bold form-label mb-2 ">
                <span class="required mr-1">   الطلاب</span>
            </label>
            <select id='student_id' name="student_id[]" style='width: 200px;'>
                <option selected disabled>- ابحث الطالب</option>
            </select>
        </div>


        <div class="   my-5 col-sm-12" id="table_data">




        </div>


    </div><!-- end row -->

@endsection


@section('js')

    <link href="{{url('assets/dashboard/css/select2.css')}}" rel="stylesheet"/>
    <script src="{{url('assets/dashboard/js/select2.js')}}"></script>

    <script>

        (function () {

            $("#student_id").select2({
                placeholder: 'Channel...',
                // width: '350px',
                allowClear: true,
                ajax: {
                    url: '{{route('admin.getStudents')}}',
                    dataType: 'json',
                    delay: 250,
                    data: function (params) {
                        return {
                            term: params.term || '',
                            page: params.page || 1
                        }
                    },
                    cache: true
                }
            });
        })();

    </script>
    <script>
        var loader = ` <div class="linear-background">
                            <div class="inter-crop"></div>
                            <div class="inter-right--top"></div>
                            <div class="inter-right--bottom"></div>
                        </div>
        `;

        $(document).on('change','#student_id',function (){
            var id=$(this).val();
            $('#table_data').html(loader)

            var url = "{{route("admin.getReviewForStudent",':id')}}";
            url = url.replace(':id',id)

            setTimeout(function (){
                $('#table_data').load(url)
            },1000)
        })

    </script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">

    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>


@endsection
