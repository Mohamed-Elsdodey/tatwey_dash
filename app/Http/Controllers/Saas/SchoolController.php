<?php

namespace App\Http\Controllers\Saas;

use App\Http\Controllers\Controller;
use App\Http\Requests\SaasRequest;
use App\Http\Requests\SchoolPermissionRequest;
use App\Http\Requests\SchooolRequest;
use App\Http\Traits\ResponseTrait;
use App\Http\Traits\Upload_Files;
use App\Models\Saas;
use App\Models\School;
use App\Models\SchoolPermission;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Yajra\DataTables\DataTables;

class SchoolController extends Controller
{
    //
    use ResponseTrait;

    public function index(Request $request)
    {

        if ($request->ajax()) {
            $admins = School::query()->latest();
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

                ->addColumn('admin_permissions', function ($admin) {
                    return "<button data-type='admin'  class='btn btn-outline-dark showPermissions' data-id='$admin->id'  >
                           صلاحيات الادارين
                            </button>";
                })


                ->addColumn('teacher_permissions', function ($admin) {
                    return "<button data-type='teacher'  class='btn btn-outline-dark showPermissions' data-id='$admin->id'  >
                           صلاحيات المدرسين
                            </button>";
                })


                ->addColumn('moderator_permissions', function ($admin) {
                    return "<button data-type='moderator'  class='btn btn-outline-dark showPermissions' data-id='$admin->id'  >
                           صلاحيات المشرفين
                            </button>";
                })
                ->addColumn('school_admins', function ($row) {
                    $route=route('school_admins.index').'?school_id='.$row->id;
                    return "<a href='$route' class='btn btn-outline-success'>عرض الادارين</a>";
                })
                ->addColumn('school_roles', function ($row) {
                    $route=route('school_roles.index').'?school_id='.$row->id;
                    return "<a href='$route' class='btn btn-outline-success'>عرض الادوار </a>";
                })

                ->editColumn('domain', function ($admin) {
                  return "<a target='_blank' href='$admin->domain'><i class='fa fa-server'></i></a>";
                })

                    ->editColumn('created_at', function ($admin) {
                    return date('Y/m/d', strtotime($admin->created_at));
                })
                ->escapeColumns([])
                ->make(true);


        }
        return view('Saas.CRUDS.schools.index');
    }


    public function create()
    {

        return view('Saas.CRUDS.schools.parts.create');
    }

    public function store(SchooolRequest $request)
    {
        $data = $request->validationData();

        School::create($data);

        return $this->addResponse();

    }


    public function show(Saas $saas)
    {



        //
    }


    public function edit( $id)
    {
        $row=School::findOrFail($id);


        return view('Saas.CRUDS.schools.parts.edit', compact('row'));

    }

    public function update(SchooolRequest $request,  $id)
    {
        $data=$request->validationData();
        $school=School::findOrFail($id);

        $school->update($data);

        return $this->updateResponse();

    }


    public function destroy( $id)
    {
        $row=School::findOrFail($id);
        $row->delete();
        return $this->deleteResponse();
    }//end fun



    public function show_school_permissions(Request $request){

        $school=School::findOrFail($request->school_id);
        $guard_name=$request->guard_name;
        $permissions=Permission::where('guard_name',$guard_name)->get();
        $school_permissions=SchoolPermission::where('school_id',$school->id)->where('guard_name',$guard_name)->pluck('permission_id')->toArray();
        return view('Saas.CRUDS.schools.parts.permissions',compact('permissions','guard_name','school','school_permissions'));
    }


    public function update_school_permissions(SchoolPermissionRequest $request){
        $guardName = $request->guard_name;
        $school = School::findOrFail($request->school_id);

        $permissionsToUpdate = collect($request->permission)->map(function ($permissionId) use ($school, $guardName) {
            return [
                'school_id' => $school->id,
                'permission_id' => $permissionId,
                'guard_name' => $guardName
            ];
        });

        $permissions = $request->permission ?? [];

        if (!empty($permissions)) {
            SchoolPermission::where('school_id', $school->id)
                ->where('guard_name', $guardName)
                ->whereNotIn('permission_id', $permissions)
                ->delete();
        } else {
            SchoolPermission::where('school_id', $school->id)
                ->where('guard_name', $guardName)
                ->delete();
        }

        // Use the update method to perform batch updates
        SchoolPermission::upsert(
            $permissionsToUpdate->toArray(),
            ['school_id', 'permission_id', 'guard_name'],
            ['permission_id']
        );

        return $this->updateResponse();
    }







}
