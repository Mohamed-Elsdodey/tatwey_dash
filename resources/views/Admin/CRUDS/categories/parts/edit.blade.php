<!--begin::Form-->

<form id="form" enctype="multipart/form-data" method="POST" action="{{route('categories.update',$row->id)}}">
    @csrf
    @method('PUT')
    <div class="row g-4">


        <input type="hidden" name="id" value="{{$row->id}}">

        <div class="d-flex flex-column mb-7 fv-row col-sm-6">
            <!--begin::Label-->
            <label for="title_ar" class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="required mr-1">الاسم ياللغة العربية  <span class="red-star">*</span></span>
            </label>
            <!--end::Label-->
            <input required id="title_ar" type="text" class="form-control form-control-solid" placeholder="" name="title_ar" value="{{$row->title_ar}}"/>
        </div>


        <div class="d-flex flex-column mb-7 fv-row col-sm-6">
            <!--begin::Label-->
            <label for="title_en" class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="required mr-1">الاسم ياللغة الانجليزية  <span class="red-star">*</span></span>
            </label>
            <!--end::Label-->
            <input  id="title_en" type="text" class="form-control form-control-solid" placeholder="" name="title_en" value="{{$row->title_en}}"/>
        </div>




        <div class="d-flex flex-column mb-7 fv-row col-sm-6">
            <!--begin::Label-->
            <label for="slug" class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="required mr-1">   الاسم التعريفي <span class="red-star">*</span></span>
            </label>
            <!--end::Label-->
            <input required id="slug" type="text" class="form-control form-control-solid" placeholder="" name="slug" value="{{$row->slug}}"/>
        </div>


        <div class="d-flex flex-column mb-7 fv-row col-sm-6">
            <!--begin::Label-->
            <label for="degree_of_exam" class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="required mr-1">  درجة الاختبار  <span class="red-star">*</span></span>
            </label>
            <!--end::Label-->
            <input  id="degree_of_exam" type="number" class="form-control form-control-solid" placeholder="" name="degree_of_exam" value="{{$row->degree_of_exam}}"/>
        </div>



    </div>
</form>

