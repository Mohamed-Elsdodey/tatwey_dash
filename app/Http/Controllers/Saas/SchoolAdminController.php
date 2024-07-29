<?php

namespace App\Http\Controllers\Saas;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRequest;
use App\Http\Requests\SchoolAdminRequest;
use App\Http\Traits\ResponseTrait;
use App\Http\Traits\Upload_Files;
use App\Models\Admin;
use App\Models\School;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;
use Yajra\DataTables\DataTables;

class SchoolAdminController extends Controller
{
    //
    use Upload_Files,ResponseTrait,HasRoles;



    public function index(Request $request)
    {
        $school=School::findOrFail($request->school_id);

        if ($request->ajax()) {
            $admins = Admin::query()->where('school_id',$school->id)->latest();
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
        return view('Saas.CRUDS.admin.index',compact('school'));
    }


    public function create(Request $request)
    {

        $school=School::findOrFail($request->school_id);
        $roles = Role::where('school_id',$school->id)->where('guard_name','admin')->get();

        return view('Saas.CRUDS.admin.parts.create',compact('school','roles'));
    }

    public function store(SchoolAdminRequest $request)
    {
        $data = $request->validationData();
        if ($request->image)
            $data["image"] = $this->uploadFiles('admins', $request->file('image'), null);

        $data['password'] = bcrypt($request->password);


        unset($data['roles']);


       $admin= Admin::create($data);

        $admin->roles()->sync($request->input('roles'));


        return $this->addResponse();

    }





    public function edit( $id)
    {

        $admin=Admin::findOrFail($id);
        $admin_roles_ides = DB::table("model_has_roles")->where("model_has_roles.model_id", $admin->id)
                   ->where('model_type','App\Models\Admin')  ->pluck('role_id');

        $roles = Role::where('school_id',$admin->school_id)->where('guard_name','admin')->get();



        return view('Saas.CRUDS.admin.parts.edit', compact('admin','roles','admin_roles_ides'));

    }

    public function update(SchoolAdminRequest $request, $id)
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
        unset($data['roles']);
        $admin->update($data);
        $admin=Admin::findOrFail($id);
        $admin->roles()->sync($request->input('roles'));

        return response()->json(
            [
                'code' => 200,
                'message' => 'تمت العملية بنجاح!',
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
}
