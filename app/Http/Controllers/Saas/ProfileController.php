<?php

namespace App\Http\Controllers\Saas;

use App\Http\Controllers\Controller;
use App\Http\Requests\ModeratorRequest;
use App\Http\Requests\SaasRequest;
use App\Http\Requests\TeacherRequest;
use App\Http\Traits\ResponseTrait;
use App\Http\Traits\Upload_Files;
use App\Models\Moderator;
use App\Models\Saas;
use App\Models\Teacher;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    use  ResponseTrait,Upload_Files;

    public function show($id){


        $saas=Saas::find($id);
        $html = view('Saas.profile.show', compact('saas'))->render();
        return response()->json([
            'code' => 200,
            'html' => $html,
        ]);


    }

    public function update(SaasRequest $request,$id){

        $saas=Saas::findOrFail($id);
        $data=$request->validationData();
        if ($request->password) {
            $data['password'] = bcrypt($request->password);
        } else {
            $data['password'] = $saas->password;
        }
        if ($request->image) {
            $data["image"] = $this->uploadFiles('saas', $request->file('image'), 'yes');
        }


        $saas->update($data);

        $saas=Saas::findOrFail($id);


        $html = view('Saas.profile.header')->render();

        return response()->json(
            [
                'code' => 200,
                'message' => 'تمت العملية بنجاح!',
                'html' => $html,
                'name' => $saas->name,
                'logo' => get_file($saas->image),
            ]);


    }
}
