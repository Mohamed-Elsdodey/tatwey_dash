<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoeyRequest;
use App\Http\Traits\ResponseTrait;
use App\Models\Category;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class CategoryController extends Controller
{
    //
    use ResponseTrait;


    public function index(Request $request)
    {

        if ($request->ajax()) {
            $admins = Category::query()->latest();
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
        return view('Admin.CRUDS.categories.index');
    }


    public function create()
    {

        return view('Admin.CRUDS.categories.parts.create');
    }

    public function store(CategoeyRequest $request)
    {
        $data = $request->validationData();

        $data['created_by'] = admin()->id();



        Category::create($data);

        return $this->addResponse();

    }


    public function show($id)
    {


        //
    }


    public function edit($id)
    {

        $row = Category::property()->findOrFail($id);

        return view('Admin.CRUDS.categories.parts.edit', compact('row'));

    }

    public function update(CategoeyRequest $request, $id)
    {

        $data = $request->validationData();

        Category::findOrFail($id)->update($data);


        return $this->updateResponse();


    }


    public function destroy($id)
    {
        Category::findOrFail($id)->delete();


        return $this->deleteResponse();
    }//end fun


}
