<!--begin::Form-->

<form id="form" enctype="multipart/form-data" method="POST" action="{{route('schools.store')}}">
    @csrf
    <div class="row g-4">


        <div class="d-flex flex-column mb-7 fv-row col-sm-6">
            <!--begin::Label-->
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="required mr-1">{{trans('admin.name')}} <span class="red-star">*</span></span>
            </label>
            <!--end::Label-->
            <input required type="text" class="form-control form-control-solid" placeholder="" name="name" value=""/>
        </div>

        <!--end::Input group-->

        <div class="d-flex flex-column mb-7 fv-row col-sm-6">
            <!--begin::Label-->
            <label for="domain" class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="required mr-1">  الدومين</span>
                <span class="red-star">*</span>
            </label>
            <!--end::Label-->
            <input id="domain" type="text" class="form-control form-control-solid" placeholder=" " name="domain"
                   value=""/>
        </div>







    </div>
</form>
<script>
    $('.dropify').dropify();

</script>
