<?php

namespace App\Http\Controllers\Saas;

use App\Http\Controllers\Controller;
use App\Http\Requests\SaasRequest;
use App\Http\Traits\ResponseTrait;
use App\Http\Traits\Upload_Files;
use App\Models\Saas;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class SaasController extends Controller
{
    //

    use Upload_Files,ResponseTrait;

    public function index(Request $request)
    {

        if ($request->ajax()) {
            $admins = Saas::query()->latest();
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
        return view('Saas.CRUDS.saas.index');
    }


    public function create()
    {

        return view('Saas.CRUDS.saas.parts.create');
    }

    public function store(SaasRequest $request)
    {
        $data = $request->validationData();
        if ($request->image)
            $data["image"] = $this->uploadFiles('saas', $request->file('image'), null);

        $data['password'] = bcrypt($request->password);

        Saas::create($data);

        return $this->addResponse();

    }


    public function show(Saas $saas)
    {



        //
    }


    public function edit( $id)
    {
        $row=Saas::findOrFail($id);


        return view('Saas.CRUDS.saas.parts.edit', compact('row'));

    }

    public function update(SaasRequest $request,  $id)
    {
        $data=$request->validationData();
        $saas=Saas::findOrFail($id);

        if ($request->password) {
            $data['password'] = bcrypt($request->password);
        } else {
            $data['password'] = $saas->password;
        }
        if ($request->image) {
            $data["image"] = $this->uploadFiles('saas', $request->file('image'), 'yes');

        }

        $saas->update($data);

        return $this->updateResponse();

    }


    public function destroy( $id)
    {
        $row=Saas::findOrFail($id);

        $row->delete();

        return $this->deleteResponse();
    }//end fun


    public function activate(Request $request)
    {

        $saas = Saas::findOrFail($request->id);
        if ($saas->is_active == true) {
            $saas->is_active = 0;
            $saas->save();
        } else {
            $saas->is_active = 1;
            $saas->save();
        }

        return $this->successResponse();
    }//end fun


}
