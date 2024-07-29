<!--begin::Form-->

<form id="form" enctype="multipart/form-data" method="POST" action="{{route('students.update',$row->id)}}">
    @csrf
    @method('PUT')
    <div class="row g-4">


        <input type="hidden" name="id" value="{{$row->id}}">

        <div class="form-group">
            <label for="image" class="form-control-label">{{trans('admin.image')}} </label>
            <input type="file" class="dropify" name="image" data-default-file="{{get_file($row->image)}}"
                   accept="image/*"/>
            <span
                class="form-text text-muted text-center">{{trans('admin.Only the following formats are allowed: jpeg, jpg, png, gif, svg, webp, avif.')}}</span>
        </div>
        <div class="d-flex flex-column mb-7 fv-row col-sm-6">
            <!--begin::Label-->
            <label for="name"  class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="required mr-1">{{trans('admin.name')}}</span>
                <span class="red-star">*</span>
            </label>
            <!--end::Label-->
            <input id="name" type="text" required class="form-control form-control-solid" placeholder=" " name="name"
                   value="{{$row->name}}"/>
        </div>

        <div class="d-flex flex-column mb-7 fv-row col-sm-6">
            <!--begin::Label-->
            <label for="phone" class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="required mr-1">الهاتف <span class="red-star">*</span></span>
            </label>
            <!--end::Label-->
            <input required id="phone" type="text" class="form-control form-control-solid" placeholder="" name="phone" value="{{$row->phone}}"/>
        </div>

        <div class="d-flex flex-column mb-7 fv-row col-sm-4">
            <!--begin::Label-->
            <label for="identification_number" class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="required mr-1">الرقم المدرسي <span class="red-star">*</span></span>
            </label>
            <!--end::Label-->
            <input  id="identification_number" type="text" class="form-control form-control-solid" placeholder="" name="identification_number" value="{{$row->identification_number}}"/>
        </div>





    </div>
</form>
<script>
    $('.dropify').dropify();

</script>
