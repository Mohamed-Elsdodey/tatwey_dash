<!--begin::Form-->

<form id="form" enctype="multipart/form-data" method="POST" action="{{route('admin.importRoomStudents',$room->id)}}">
    @csrf
    <div class="row g-4">


        <input type="hidden" name="room_id" value="{{$room->id}}">


        <div class="form-group">
            <label for="file" class="form-control-label">الملف </label>
            <input type="file" class="dropify" name="file" data-default-file="">
        </div>



    </div>
</form>

<script>
    $('.dropify').dropify();

</script>

