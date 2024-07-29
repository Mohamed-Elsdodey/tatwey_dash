<?php

namespace App\Http\Controllers\Saas;

use App\Http\Controllers\Controller;
use App\Http\Requests\PermissionRequest;
use App\Http\Traits\ResponseTrait;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Yajra\DataTables\DataTables;

class PermissionController extends Controller
{
    //
    use ResponseTrait;

    public function index(Request $request)
    {

        if ($request->ajax()) {
            $admins = Permission::query()->latest();
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
        return view('Saas.CRUDS.permission.index');
    }


    public function create()
    {

        return view('Saas.CRUDS.permission.parts.create');
    }

    public function store(PermissionRequest $request)
    {
        $data = $request->validationData();

        Permission::create($data);

        return $this->addResponse();

    }


    public function show(Saas $saas)
    {



        //
    }


    public function edit( $id)
    {
        $row=Permission::findOrFail($id);


        return view('Saas.CRUDS.permission.parts.edit', compact('row'));

    }

    public function update(PermissionRequest $request,  $id)
    {
        $data=$request->validationData();
        $row=Permission::findOrFail($id);

        $row->update($data);

        return $this->updateResponse();

    }


    public function destroy( $id)
    {
        $row=Permission::findOrFail($id);
        $row->delete();
        return $this->deleteResponse();
    }//end fun


}
