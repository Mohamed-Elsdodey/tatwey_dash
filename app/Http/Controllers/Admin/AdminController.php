<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRequest;
use App\Http\Traits\ResponseTrait;
use App\Http\Traits\Upload_Files;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Spatie\Permission\Models\Role;
use Yajra\DataTables\DataTables;

class AdminController extends Controller
{
    use Upload_Files,ResponseTrait;



    public function index(Request $request)
    {

        if ($request->ajax()) {
            $admins = Admin::query()->latest();
            return Datatables::of($admins)
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
                ->editColumn('image', function ($admin) {
                    return '
                              <a data-fancybox="" href="' . get_file($admin->image) . '">
                                <img height="60px" src="' . get_file($admin->image) . '">
                            </a>
                             ';
                })
                ->editColumn('is_active', function ($row) {
                    $active = '';
                    $operation = '';

                    $operation = '';


                    if ($row->is_active == 1)
                        $active = 'checked';

                    return '<div class="form-check form-switch">
                               <input ' . $operation . '  class="form-check-input activeBtn" data-id="' . $row->id . ' " type="checkbox" role="switch" id="flexSwitchCheckChecked" ' . $active . '  >
                            </div>';
                })
                ->editColumn('created_at', function ($admin) {
                    return date('Y/m/d', strtotime($admin->created_at));
                })
                ->escapeColumns([])
                ->make(true);


        }
        return view('Admin.CRUDS.admin.index');
    }


    public function create()
    {
        $school_id=1;



        return view('Admin.CRUDS.admin.parts.create',compact('school_id'));
    }

    public function store(AdminRequest $request)
    {
        $data = $request->validationData();
        if ($request->image)
            $data["image"] = $this->uploadFiles('admins', $request->file('image'), null);

           $data['password'] = bcrypt($request->password);





           unset($data['school_id']);

        $admin=Admin::create($data);



        return $this->addResponse();

    }


    public function show(Admin $admin)
    {

        $html = view('Admin.CRUDS.admin.parts.show', compact('admin'))->render();
        return response()->json([
            'code' => 200,
            'html' => $html,
        ]);

        //
    }


    public function edit(Admin $admin)
    {





        return view('Admin.CRUDS.admin.parts.edit', compact('admin'));

    }

    public function update(AdminRequest $request, $id )
    {

        $admin=Admin::findOrFail($id);

        $data=$request->validationData();
        if ($request->password) {
            $data['password'] = bcrypt($request->password);
        } else {
            $data['password'] = $admin->password;
        }
        if ($request->image) {
            $data["image"] = $this->uploadFiles('admins', $request->file('image'), 'yes');

        }



        $admin->update($data);
        $admin=Admin::findOrFail($id);

        $html = view('Admin.CRUDS.admin.parts.header')->render();

        return response()->json(
            [
                'code' => 200,
                'message' => 'تمت العملية بنجاح!',
                'html' => $html,
                'name' => $admin->name,
                'logo' => get_file($admin->image),
            ]);
    }


    public function destroy( $id)
    {
        $row=Admin::findOrFail($id);

        $row->delete();

        return $this->deleteResponse();
    }//end fun


    public function activate(Request $request)
    {

        $admin = Admin::findOrFail($request->id);
        if ($admin->is_active == true) {
            $admin->is_active = 0;
            $admin->save();
        } else {
            $admin->is_active = 1;
            $admin->save();
        }

        return $this->successResponse();
    }//end fun

}//end class
