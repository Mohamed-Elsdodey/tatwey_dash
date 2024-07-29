<!--begin::Form-->

<form id="form" enctype="multipart/form-data" method="POST" action="{{route('admin.importRowStudents',$row->id)}}">
    @csrf
    <div class="row g-4">


        <input type="hidden" name="row_id" value="{{$row->id}}">


        <div class="form-group">
            <label for="file" class="form-control-label">الملف </label>
            <input type="file" class="dropify" name="file" data-default-file="">
        </div>



    </div>
</form>

<script>
    $('.dropify').dropify();

</script>

