<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Traits\Upload_Files;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    use Upload_Files;







    public function index()
    {


        $settings = Setting::firstOrNew();
        return view('Admin.settings.index', [
            'settings' => $settings,
        ]);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'app_name'=>'nullable',
            'logo_header'=>'nullable|image',
            'fave_icon'=>'nullable|image',
            'minimum_student_balance'=>'nullable',
            'ranking_punishment'=>'nullable',
        ],
        [
        ]
        );

        if ($request->logo_header)
        $data['logo_header'] =  $this->uploadFiles('settings',$request->file('logo_header'),null );
        if ($request->fave_icon)
            $data['fave_icon'] =  $this->uploadFiles('settings',$request->file('fave_icon'),null );


        Setting::firstOrNew()->update($data);

        return response()->json(
            [
                'code' => 200,
                'message' => 'تمت العملية بنجاح!'
            ]);

    }


}
