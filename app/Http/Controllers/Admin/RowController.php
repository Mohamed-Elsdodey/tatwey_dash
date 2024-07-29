<?php

namespace App\Http\Controllers\Admin;

use App\Exports\RowStudentsExport;
use App\Imports\RowStudentsImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\Http\Requests\RowRequest;
use App\Http\Traits\ResponseTrait;
use App\Models\Category;
use App\Models\Row;
use App\Models\RowCategory;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class RowController extends Controller
{
    //

    use ResponseTrait;



    public function index(Request $request)
    {

        if ($request->ajax()) {
            $admins = Row::query()->latest();
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
                ->addColumn('excel', function ($row) {
                    $link=route('admin.exportRowStudents',$row->id);
                    return "<a href='$link' class='btn btn-outline-success'>تحميل طلاب الصف</a>";
                })
                ->addColumn('import', function ($row) {

                    return "<button data-id='$row->id' class='btn btn-outline-danger importantStudent' >تصدير طلاب الصف</button>";
                })
                ->addColumn('rooms', function ($row) {
                     $link=route('rooms.index').'?row_id='.$row->id;
                     return "<a href='$link' class='btn btn-outline-dark'>عرض الفصول</a>";
                })
                ->addColumn('counter', function ($row) use ($admins) {
                    static $count = 0;
                    $count++;
                    return $count;
                })

                ->editColumn('created_at', function ($admin) {
                    return date('Y/m/d', strtotime($admin->created_at));
                })
                ->escapeColumns([])
                ->make(true);


        }
        return view('Admin.CRUDS.rows.index');
    }


    public function create()
    {
        $categories=Category::get();

        return view('Admin.CRUDS.rows.parts.create',compact('categories'));
    }

    public function store(RowRequest $request)
    {
        $data = $request->validationData();
        if (array_key_exists('categories', $data)) {
            unset($data['categories']);
        }
        $data['created_by'] = admin()->id();


        $row=Row::create($data);

       if ($request->categories){
           foreach ($request->categories as $category)
               RowCategory::create([
                   'row_id'=>$row->id,
                   'category_id'=>$category,
               ]);
       }

        return $this->addResponse();

    }


    public function show($id)
    {


        //
    }


    public function edit($id)
    {

        $row = Row::findOrFail($id);
        $categories=Category::get();
        $row_categories_id=RowCategory::where('row_id',$id)->pluck('category_id');


        return view('Admin.CRUDS.rows.parts.edit', compact('row','categories','row_categories_id'));

    }

    public function update(RowRequest $request, $id)
    {

        $data = $request->validationData();

        if (array_key_exists('categories', $data)) {
            unset($data['categories']);
        }

        Row::findOrFail($id)->update($data);

        RowCategory::property()->whereNotIn('category_id',$request->categories)->where('row_id',$id)->delete();

        if ($request->categories){
            foreach ($request->categories as $category)
                RowCategory::updateOrCreate([
                    'row_id'=>$id,
                    'category_id'=>$category,
                ]);
        }


        return $this->updateResponse();


    }


    public function destroy($id)
    {
        Row::findOrFail($id)->delete();


        return $this->deleteResponse();
    }//end fun

    public function exportToExcel($id)
    {
        $row=Row::property()->findOrFail($id);
        return Excel::download(new RowStudentsExport($id), 'row_students.xlsx');
    }

    public function importRowStudent($id){
        $row=Row::property()->findOrFail($id);
        return view('Admin.CRUDS.rows.parts.import',compact('row'));

    }
    public function importRowStudents($id,Request $request){

        $request->validate([
            'file' => 'required|mimes:xlsx,csv',
        ]);

        // Import the data from the uploaded file
        Excel::import(new RowStudentsImport($id), $request->file('file'));

        return $this->updateResponse();


    }

}
