<?php

namespace App\Http\Controllers\Saas;

use App\Http\Controllers\Controller;
use App\Http\Requests\RoleRequest;
use App\Http\Traits\ResponseTrait;
use App\Models\Roles;
use App\Models\School;
use App\Models\SchoolPermission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Yajra\DataTables\DataTables;

class SchoolRoleController extends Controller
{
    //
    use ResponseTrait;



    public function index(Request $request)
    {
        $school=School::findOrFail($request->school_id);

        if ($request->ajax()) {
            $admins = Role::query()->where('school_id',$school->id)->where('guard_name','admin')->latest();
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

                ->editColumn('created_at', function ($admin) {
                    return date('Y/m/d', strtotime($admin->created_at));
                })
                ->escapeColumns([])
                ->make(true);


        }
        return view('Saas.CRUDS.roles.index',compact('school'));
    }


    public function create(Request $request)
    {
        $school=School::findOrFail($request->school_id);

        $permission_ides=SchoolPermission::where('school_id',$school->id)->where('guard_name','admin')->pluck('permission_id')->toArray();
        $permission=Permission::whereIn('id',$permission_ides)->get();

        return view('Saas.CRUDS.roles.parts.create',compact('school','permission'));
    }

    public function store(RoleRequest $request)
    {

        $data = $request->validationData();

        unset($data['permission']);
        unset($data['check_all']);

        $row = Roles::create($data);

        $role = Role::findOrFail($row->id);

        $permissionIds = $request->input('permission');

        if ($permissionIds === null) {
            // If $permissionIds is null, remove all permissions from the role
            $role->syncPermissions([]);
        } else {
            $permissions = Permission::whereIn('id', $permissionIds)->get();

            if ($permissions->count() === count($permissionIds)) {
                // Handle the case where some permissions are not found
                $role->syncPermissions($permissions);
            } else {
                // Handle the case where some permissions are not found
                // You may want to log or handle this situation based on your requirements
                // For example: return an error response
                return $this->addErrorResponse('Some permissions not found');
            }
        }



        return $this->addResponse();

    }





    public function edit($id)
    {

        $role=Role::findOrFail($id);
        $permission_ides=SchoolPermission::where('school_id',$role->school_id)->where('guard_name','admin')->pluck('permission_id')->toArray();
        $permission=Permission::whereIn('id',$permission_ides)->get();
        $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id",$role->id)
            ->get();


        return view('Saas.CRUDS.roles.parts.edit', compact('role','permission','rolePermissions'));

    }

    public function update(RoleRequest $request, $id)
    {

        $data = $request->validationData();
        unset($data['permission']);
        $role=Role::findOrFail($id);



        $role->update($data);


        $role=Role::findOrFail($id);

        $permissionIds = $request->input('permission');

        if (empty($permissionIds)) {
            // If $permissionIds is empty, remove all permissions from the role
            $role->syncPermissions([]);
        } else {
            // If $permissionIds is not empty, proceed with updating permissions
            $permissions = Permission::whereIn('id', $permissionIds)->get();

            if ($permissions !== null && count($permissions) == count($permissionIds)) {
                // Handle the case where some permissions are not found
                $role->syncPermissions($permissions);
            }
        }



      return $this->updateResponse();
    }


    public function destroy( $id)
    {
        $row=Role::findOrFail($id);

        $row->delete();

        return $this->deleteResponse();
    }//end fun

}
