@extends('Admin.layouts.inc.app')
@section('title')
    التقيمات
@endsection
@section('css')

@endsection
@section('content')
    <div class="card">
        <div class="card-header d-flex align-items-center">
            <h5 class="card-title mb-0 flex-grow-1">التقيمات للطالب
                {{$student->name}}
            </h5>



        </div>
        <div class="card-body">
            <table id="table" class="table table-bordered dt-responsive nowrap table-striped align-middle"
                   style="width:100%">
                <thead>
                <tr>
                    <th>#</th>
                    <th>القسم</th>
                    <th>المدرس</th>
                    <th> نوع التقييم</th>
                    <th>  النقاط</th>
                    <th>  {{trans('admin.created at')}}</th>
                </tr>
                </thead>
            </table>
        </div>
    </div>


@endsection
@section('js')
    <script>
        var columns = [
            {data: 'counter', name: 'counter'},
            {data: 'category_id', name: 'category_id'},
            {data: 'teacher_id', name: 'teacher_id'},
            {data: 'type', name: 'type'},
            {data: 'points', name: 'points'},
            {data: 'created_at', name: 'created_at'},
        ];
    </script>
    @include('Admin.layouts.inc.ajax',['url'=>'student_reviews'])
@endsection
