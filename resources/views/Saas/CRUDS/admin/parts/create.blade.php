<!--begin::Form-->

<form id="form" enctype="multipart/form-data" method="POST" action="{{route('school_admins.store')}}">
    @csrf
    <div class="row g-4">

        <input type="hidden" name="school_id" value="{{$school->id}}">

        <div class="form-group">
            <label for="name" class="form-control-label">{{trans('admin.image')}} </label>
            <input type="file" class="dropify" name="image" data-default-file="{{get_file()}}" accept="image/*"/>
            <span
                class="form-text text-muted text-center">{{trans('admin.Only the following formats are allowed: jpeg, jpg, png, gif, svg, webp, avif.')}}</span>
        </div>

        <div class="d-flex flex-column mb-7 fv-row col-sm-6">
            <!--begin::Label-->
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="required mr-1">{{trans('admin.name')}} <span class="red-star">*</span></span>
            </label>
            <!--end::Label-->
            <input required type="text" class="form-control form-control-solid" placeholder="" name="name" value=""/>
        </div>

        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="d-flex flex-column mb-7 fv-row col-sm-6">
            <!--begin::Label-->
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="required mr-1">{{trans('admin.email')}} </span>
                <span class="red-star">*</span>
            </label>
            <!--end::Label-->
            <input required type="email" class="form-control form-control-solid" placeholder=" {{trans('admin.email')}}"
                   name="email" value=""/>
        </div>

        <div class="d-flex flex-column mb-7 fv-row col-sm-6">
            <!--begin::Label-->
            <label for="phone" class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="required mr-1">رقم الهاتف</span>
                <span class="red-star">*</span>
            </label>
            <!--end::Label-->
            <input id="phone" type="text" class="form-control form-control-solid" placeholder=" " name="phone"
                   value=""/>
        </div>


        <div class="d-flex flex-column mb-7 fv-row col-sm-6">
            <!--begin::Label-->
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="required mr-1">{{trans('admin.password')}}</span>
                <span class="red-star">*</span>
            </label>
            <!--end::Label-->
            <input type="password" class="form-control form-control-solid" placeholder=" " name="password" value=""/>
        </div>


        <div class="d-flex flex-column mb-7 fv-row col-sm-6">
            <!--begin::Label-->
            <label for="roles" class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="required mr-1">Roles</span>
                <span class="red-star">*</span>
            </label>
            <select id="roles" class="js-example-basic-multiple" name="roles[]" multiple="multiple">
                @foreach($roles as $role)
                    <option value="{{$role->id}}">{{$role->name??''}}</option>
                @endforeach
            </select>

        </div>


        <div class="d-flex flex-column mb-7 fv-row col-sm-6">
            <!--begin::Label-->
            <label for="is_active" class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="required mr-1">Is Active</span>
                <span class="red-star">*</span>
            </label>
            <!--end::Label-->
            <select class="form-control" id="is_active" name="is_active">

                <option value="1">Active</option>
                <option value="0">Not Active</option>

            </select>
        </div>

    </div>
</form>
<script>
    $('.dropify').dropify();
    $(document).ready(function () {
        $('.js-example-basic-multiple').select2();
    });
</script>
