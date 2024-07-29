<!--begin::Form-->

<form id="form" enctype="multipart/form-data" method="POST" action="{{route('saas_data.update',$row->id)}}">
    @csrf
    @method('PUT')
    <div class="row g-4">


        <input type="hidden" name="id" value="{{$row->id}}">

        <div class="form-group">
            <label for="name" class="form-control-label">{{trans('admin.image')}} </label>
            <input type="file" class="dropify" name="image" data-default-file="{{get_file($row->image)}}"
                   accept="image/*"/>
            <span
                class="form-text text-muted text-center">{{trans('admin.Only the following formats are allowed: jpeg, jpg, png, gif, svg, webp, avif.')}}</span>
        </div>
        <div class="d-flex flex-column mb-7 fv-row col-sm-6">
            <!--begin::Label-->
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="required mr-1">{{trans('admin.name')}}</span>
                <span class="red-star">*</span>
            </label>
            <!--end::Label-->
            <input type="text" required class="form-control form-control-solid" placeholder=" " name="name"
                   value="{{$row->name}}"/>
        </div>

        <!--end::Input group-->
        <!--begin::Input group-->
        <div class="d-flex flex-column mb-7 fv-row col-sm-6">
            <!--begin::Label-->
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="required mr-1"> {{trans('admin.email')}}</span>
                <span class="red-star">*</span>
            </label>
            <!--end::Label-->
            <input type="email" required class="form-control form-control-solid"
                   placeholder="  {{trans('admin.email')}}"
                   name="email" value="{{$row->email}}"/>
        </div>

        <div class="d-flex flex-column mb-7 fv-row col-sm-6">
            <!--begin::Label-->
            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                <span class="required mr-1"> {{trans('admin.password')}}</span>
                <span class="red-star">*</span>
            </label>
            <!--end::Label-->
            <input type="password" class="form-control form-control-solid" placeholder="  " name="password"
                   value=""/>
        </div>


        <div class="d-flex flex-row bd-highlight mb-3 my-4 ">


            <h4>Status:</h4>
            <div class="form-check mx-2">
                <input @if($row->is_active == 1) checked @endif class="form-check-input " type="radio"
                       name="is_active" id="exampleRadios1" value="1">
                <label class="form-check-label" for="exampleRadios1">
                    {{trans('admin.enable')}}
                </label>
            </div>


            <div class="form-check">
                <input @if($row->is_active == 0) checked @endif class="form-check-input " type="radio"
                       name="is_active" id="exampleRadios2" value="0">
                <label class="form-check-label" for="exampleRadios2">
                    {{trans('admin.not enable')}}
                </label>
            </div>


        </div>






    </div>
</form>
<script>
    $('.dropify').dropify();

</script>
