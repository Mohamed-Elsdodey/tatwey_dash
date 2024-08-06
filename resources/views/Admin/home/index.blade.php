@extends('Admin.layouts.inc.app')
@section('title')
    {{trans('admin.home')}}
@endsection
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css"/>

@endsection
@section('content')
    <div class="row">

    <!-- start AE col -->
    <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="AE_box">

                 <!-- inner text -->
                  <div class="AE_innerText">
                    <p class="AE_subTitle">المشرفين</p>
                    <h3 class="AE_mainTitle">
                        <span class="counter-value" data-target="{{$admins}}">0</span>
                    </h3>
                  </div>
                  <!-- icon box -->
                  <div class="AE_icon AE_bg-lightGreen">
                    <i class="fa-solid fa-user-tie AE_text-green"></i>
                    </div>
                  <!--  -->
                  <a href="#!" class="AE_link"></a>
            </div>
            <!--  -->
        </div>
    <!-- end AE col -->
    <!-- start AE col -->
    <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="AE_box">

                 <!-- inner text -->
                  <div class="AE_innerText">
                    <p class="AE_subTitle">المواد الدراسية </p>
                    <h3 class="AE_mainTitle">
                        <span class="counter-value" data-target="{{$categories}}">0</span>
                    </h3>
                  </div>
                  <!-- icon box -->
                  <div class="AE_icon AE_bg-lightBlue">
                        <i class="fa-solid fa-book AE_text-blue"></i>
                    </div>
                  <!--  -->
                  <a href="#!" class="AE_link"></a>
            </div>
            <!--  -->
        </div>
    <!-- end AE col -->
    <!-- start AE col -->
    <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="AE_box">

                 <!-- inner text -->
                  <div class="AE_innerText">
                    <p class="AE_subTitle"> الصفوف الدراسية  </p>
                    <h3 class="AE_mainTitle">
                        <span class="counter-value" data-target="{{$rows}}">0</span>
                    </h3>
                  </div>
                  <!-- icon box -->
                  <div class="AE_icon AE_bg-lightYellow">

                        <i class="fa-solid fa-chalkboard-user AE_text-yellow"></i>
                    </div>
                  <!--  -->
                  <a href="#!" class="AE_link"></a>
            </div>
            <!--  -->
        </div>
    <!-- end AE col -->
    <!-- start AE col -->
    <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="AE_box">

                 <!-- inner text -->
                  <div class="AE_innerText">
                    <p class="AE_subTitle">  المدرسين  </p>
                    <h3 class="AE_mainTitle">
                        <span class="counter-value" data-target="{{$teachers}}">0</span>
                    </h3>
                  </div>
                  <!-- icon box -->
                  <div class="AE_icon AE_bg-lightMagenta">

                        <i class="fa-solid fa-users AE_text-magenta"></i>
                    </div>
                  <!--  -->
                  <a href="#!" class="AE_link"></a>
            </div>
            <!--  -->
        </div>
    <!-- end AE col -->
    <!-- start AE col -->
    <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="AE_box">

                 <!-- inner text -->
                  <div class="AE_innerText">
                    <p class="AE_subTitle">  الفصول  </p>
                    <h3 class="AE_mainTitle">
                        <span class="counter-value" data-target="{{$rooms}}">0</span>
                    </h3>
                  </div>
                  <!-- icon box -->
                  <div class="AE_icon AE_bg-lightCaen">

                        <i class="fa-solid fa-school-flag  AE_text-caen"></i>

                    </div>
                  <!--  -->
                  <a href="#!" class="AE_link"></a>
            </div>
            <!--  -->
        </div>
    <!-- end AE col -->
    <!-- start AE col -->
    <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="AE_box">

                 <!-- inner text -->
                  <div class="AE_innerText">
                    <p class="AE_subTitle">  الطلاب  </p>
                    <h3 class="AE_mainTitle">
                        <span class="counter-value" data-target="{{$students}}">0</span>
                    </h3>
                  </div>
                  <!-- icon box -->
                  <div class="AE_icon AE_bg-lightPink">


                        <i class="fa-solid fa-children AE_text-pink"></i>

                    </div>
                  <!--  -->
                    <a href="#!" class="AE_link"></a>
            </div>
            <!--  -->
        </div>
    <!-- end AE col -->
    <!-- start AE col -->
    <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="AE_box">

                 <!-- inner text -->
                  <div class="AE_innerText">
                    <p class="AE_subTitle">  العقوبات  </p>
                    <h3 class="AE_mainTitle">
                        <span class="counter-value" data-target="{{$negative}}">0</span>
                    </h3>
                  </div>
                  <!-- icon box -->
                  <div class="AE_icon AE_bg-lightRed">
                        <i class="fa-solid fa-triangle-exclamation AE_text-red"></i>
                    </div>
                  <!--  -->
                    <a href="#!" class="AE_link"></a>
            </div>
            <!--  -->
        </div>
    <!-- end AE col -->
    <!-- start AE col -->
    <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="AE_box">

                 <!-- inner text -->
                  <div class="AE_innerText">
                    <p class="AE_subTitle">  التميز  </p>
                    <h3 class="AE_mainTitle">
                        <span class="counter-value" data-target="{{$positive}}">0</span>
                    </h3>
                  </div>
                  <!-- icon box -->
                  <div class="AE_icon AE_bg-lightGreen">

                        <i class="fa-solid fa-thumbs-up AE_text-green"></i>
                    </div>
                  <!--  -->
                    <a href="#!" class="AE_link"></a>
            </div>
            <!--  -->
        </div>
    <!-- end AE col -->

        <div class="d-flex flex-column mb-7 fv-row col-sm-12 m-7 AE_selectBox">
            <!--begin::Label-->
            <label for="student_id" class="d-flex align-items-center  mb-2 ">
                <span class="required mr-1">   الطلاب</span>
            </label>
            <select id='student_id' name="student_id[]" style='width: 200px;'>
                <option selected disabled>- ابحث الطالب</option>
            </select>
        </div>


        <div class="   my-5 col-sm-12" id="table_data">




        </div>


    </div>
    <!-- end row -->
     <!-- AE new  section  -->
     <section class="AE_newSection" style="background:red;">
        
        </section>
  <!--end  AE new  section  -->

@endsection


@section('js')

    <link href="{{url('assets/dashboard/css/select2.css')}}" rel="stylesheet"/>
    <!-- start style select by AhmedEltatawy -->
    <style>
        .select2-container .select2-selection--single {
            height:48px !important;
            box-shadow: 0px 10px 20px 0px rgba(229, 229, 229, 0.75);
        }
        .select2-container--default .select2-selection--single , .select2-container .select2-selection--single{

            border-color: #e5e5e6;
        }
        .select2-container--default .select2-selection--single:focus{
            border-color: #3f7afc ;
        }
        .select2-container--default .select2-selection--single .select2-selection__rendered {
            line-height:45px !important;
        }
        .select2-container--default .select2-selection--single .select2-selection__arrow {
            display:none;
        }
    </style>
    <!-- end style select by AhmedEltatawy -->
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
