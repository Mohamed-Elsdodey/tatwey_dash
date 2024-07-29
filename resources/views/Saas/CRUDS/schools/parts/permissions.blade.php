<!--begin::Form-->

<form id="form" enctype="multipart/form-data" method="POST" action="{{route('saas.update_school_permissions')}}">
    @csrf
    <div class="row g-4">




        <input type="hidden" name="guard_name" value="{{$guard_name}}">
        <input type="hidden" name="school_id" value="{{$school->id}}">

        <div class="d-flex justify-content-center mt-3">

            <div class="col-md-4 p-1">
                    <span class="form-check form-switch  " @if( app()->getLocale()=='en') style="border:1px solid #F3F3F9;padding: 10px; padding-left: 40px;border-radius: 4px;" @else  style="border:1px solid #F3F3F9;padding: 10px; padding-right: 40px;border-radius: 4px;" @endif>
                      <input class="form-check-input  " type="checkbox" name="check_all" value=""
                             id="check_all">
                      <label class="form-check-label mx-1" for="check_all">
                       Check All
                      </label>
                    </span>
            </div>

        </div>


        <div class=" row my-4">
            @foreach($permissions as $row)
                <div class="col-md-4 p-1">
                    <span class="form-check form-switch  " @if( app()->getLocale()=='en') style="border:1px solid #F3F3F9;padding: 10px; padding-left: 40px;border-radius: 4px;" @else  style="border:1px solid #F3F3F9;padding: 10px; padding-right: 40px;border-radius: 4px;" @endif>
                      <input class="form-check-input  checkbox" @foreach($school_permissions as $permission_id) @if($permission_id==$row->id) checked @endif @endforeach type="checkbox" name="permission[]" value="{{$row->id}}"
                             id="flexCheckDefault{{$row->id}}">
                      <label class="form-check-label mx-1" for="flexCheckDefault{{$row->id}}">
                       {{$row->name}}
                      </label>
                    </span>
                </div>
            @endforeach
        </div>






    </div>
</form>
