<!--begin::Form-->

<form id="form" enctype="multipart/form-data" method="POST" action="{{route('rows.store')}}">
    @csrf
    <div class="row g-4">



        <div class="d-flex flex-column mb-7 fv-row col-sm-6">
            <!--begin::Label-->
            <label for="title_ar" class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="required mr-1">الاسم ياللغة العربية  <span class="red-star">*</span></span>
            </label>
            <!--end::Label-->
            <input required id="title_ar" type="text" class="form-control form-control-solid" placeholder="" name="title_ar" value=""/>
        </div>


        <div class="d-flex flex-column mb-7 fv-row col-sm-6">
            <!--begin::Label-->
            <label for="title_en" class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="required mr-1">الاسم ياللغة الانجليزية  <span class="red-star">*</span></span>
            </label>
            <!--end::Label-->
            <input  id="title_en" type="text" class="form-control form-control-solid" placeholder="" name="title_en" value=""/>
        </div>




        <div class="d-flex justify-content-center mt-3">

            <div class="col-md-4 p-1">
                    <span class="form-check form-switch  " @if( app()->getLocale()=='en') style="border:1px solid #F3F3F9;padding: 10px; padding-left: 40px;border-radius: 4px;" @else  style="border:1px solid #F3F3F9;padding: 10px; padding-right: 40px;border-radius: 4px;" @endif>
                      <input class="form-check-input  " type="checkbox"  value=""
                             id="check_all">
                      <label class="form-check-label mx-1" for="check_all">
                       اختيار جميع المواد الدراسية
                      </label>
                    </span>
            </div>

        </div>




        <div class=" row my-4">
            @foreach($categories as $category)
                <div class="col-md-4 p-1">
                    <span class="form-check form-switch  " @if( app()->getLocale()=='en') style="border:1px solid #F3F3F9;padding: 10px; padding-left: 40px;border-radius: 4px;" @else  style="border:1px solid #F3F3F9;padding: 10px; padding-right: 40px;border-radius: 4px;" @endif>
                      <input class="form-check-input  checkbox" type="checkbox" name="categories[]" value="{{$category->id}}"
                             id="flexCheckDefault{{$category->id}}">
                      <label class="form-check-label mx-1" for="flexCheckDefault{{$category->id}}">
                       {{$category->title_ar}}
                      </label>
                    </span>
                </div>
            @endforeach
        </div>





    </div>
</form>
