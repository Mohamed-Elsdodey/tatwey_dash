<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RoomRequest;
use App\Http\Traits\ResponseTrait;
use App\Models\Room;
use App\Models\Row;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class RoomController extends Controller
{
    //

    use ResponseTrait;

    function __construct()
    {
        $this->middleware('permission:classroom', ['only' => ['index','create', 'store','edit', 'update','destroy']]);

    }

    public function index(Request $request)
    {
        $row=Row::property()->findOrFail($request->row_id);

        if ($request->ajax()) {
            $admins = Room::query()->property()->where('row_id',$row->id)->latest();
            return DataTables::of($admins)
                ->addColumn('action', function ($admin) {

                    $edit = '';
                    $delete = '';

                    return '
                            <button ' . $edit . '  class="editBtn btn rounded-pill btn-primary waves-effect waves-light"
                                    data-id="' . $admin->id . '"
                            <span class="svg-icon svg-icon-3">
                                <span class="svg-icon svg-icon-3">
                                    <i class="las la-edit"></i>
                                </span>
                            </span>
                            </button>
                            <button ' . $delete . '  class="btn rounded-pill btn-danger waves-effect waves-light delete"
                                    data-id="' . $admin->id . '">
                            <span class="svg-icon svg-icon-3">
                                <span class="svg-icon svg-icon-3">
                                    <i class="las la-trash-alt"></i>
                                </span>
                            </span>
                            </button>
                       ';


                })
                ->editColumn('color', function ($row) {
                    return '
                    <span style="width:50px ; height: 50px ;border-radius: 100% ; display: block ; background-color: '.$row->color.' "></span>
                    ';
                })
                ->addColumn('row_id', function ($row) {

                    return  $row->row->title_ar??'';
                })
                ->addColumn('excel', function ($row) {
                    $link=route('admin.exportRoomStudent',$row->id);
                    return "<a href='$link' class='btn btn-outline-success'>تحميل طلاب الفصل</a>";
                })
                ->addColumn('import', function ($row) {

                    return "<button data-id='$row->id' class='btn btn-outline-danger importantStudent' >تصدير طلاب الفصل</button>";
                })
                ->addColumn('counter', function ($row) use ($admins) {
                    static $count = 0;
                    $count++;
                    return $count;
                })

                ->addColumn('students', function ($row) {
                    $link=route('students.index').'?room_id='.$row->id;
                    return "<a href='$link' class='btn btn-outline-dark'>عرض الطلاب</a>";

                })
                ->editColumn('created_at', function ($admin) {
                    return date('Y/m/d', strtotime($admin->created_at));
                })
                ->escapeColumns([])
                ->make(true);


        }
        return view('Admin.CRUDS.rooms.index',compact('row'));
    }


    public function create(Request $request)
    {

        $row=Row::property()->findOrFail($request->row_id);

        return view('Admin.CRUDS.rooms.parts.create',compact('row'));
    }

    public function store(RoomRequest $request)
    {
        $data = $request->validationData();

        $data['created_by'] = admin()->id();

        $data['school_id']=auth()->user()->school_id;


        Room::create($data);

        return $this->addResponse();

    }


    public function show($id)
    {


        //
    }


    public function edit($id)
    {

        $row = Room::property()->findOrFail($id);

        return view('Admin.CRUDS.rooms.parts.edit', compact('row'));

    }

    public function update(RoomRequest $request, $id)
    {

        $data = $request->validationData();

        Room::property()->findOrFail($id)->update($data);


        return $this->updateResponse();


    }


    public function destroy($id)
    {
        Room::property()->findOrFail($id)->delete();


        return $this->deleteResponse();
    }//end fun
}
