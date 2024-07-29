<!--begin::Form-->

<form id="form" enctype="multipart/form-data" method="POST" action="{{route('students.store')}}">
    @csrf
    <div class="row g-4">

        <input type="hidden" name="room_id" value="{{$room->id}}">

        <div class="form-group">
            <label for="name" class="form-control-label">{{trans('admin.image')}} </label>
            <input type="file" class="dropify" name="image" data-default-file="{{get_file()}}" accept="image/*"/>
            <span
                class="form-text text-muted text-center">{{trans('admin.Only the following formats are allowed: jpeg, jpg, png, gif, svg, webp, avif.')}}</span>
        </div>

        <div class="d-flex flex-column mb-7 fv-row col-sm-4">
            <!--begin::Label-->
            <label for="name" class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="required mr-1">{{trans('admin.name')}} <span class="red-star">*</span></span>
            </label>
            <!--end::Label-->
            <input required id="name" type="text" class="form-control form-control-solid" placeholder="" name="name" value=""/>
        </div>

        <div class="d-flex flex-column mb-7 fv-row col-sm-4">
            <!--begin::Label-->
            <label for="phone" class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="required mr-1">الهاتف <span class="red-star">*</span></span>
            </label>
            <!--end::Label-->
            <input required id="phone" type="text" class="form-control form-control-solid" placeholder="" name="phone" value=""/>
        </div>




        <div class="d-flex flex-column mb-7 fv-row col-sm-4">
            <!--begin::Label-->
            <label for="identification_number" class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="required mr-1">الرقم المدرسي <span class="red-star">*</span></span>
            </label>
            <!--end::Label-->
            <input  id="identification_number" type="text" class="form-control form-control-solid" placeholder="" name="identification_number" value=""/>
        </div>



    </div>
</form>
<script>
    $('.dropify').dropify();

</script>
