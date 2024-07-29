<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdminTokens;
use App\Models\School;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{

    public function loginView()
    {
        if (admin()->check())
            return redirect()->route('admin.index');
        return view('Admin.Auth.login');
    }//end fun
    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function postLogin(Request $request)
    {

        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
        $data['is_active'] = true;



            if (admin()->attempt($data))
                return response()->json(['url'=>route('admin.index'),'status'=>200],200);
            if (teacher()->attempt($data))
                return response()->json(['url'=>route('teacher.index'),'status'=>200],200);
            if (moderator()->attempt($data))
                return response()->json(['url'=>route('moderator.index'),'status'=>200],200);


        return response()->json(405);

    }//end fun
    public function logout()
    {
        admin()->logout();

        toastr()->info('تم تسجيل الخروج بنجاح');
        return redirect()->route('admin.login');
    }

}//end class
