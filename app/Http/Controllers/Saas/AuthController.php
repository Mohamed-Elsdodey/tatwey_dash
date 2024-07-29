<?php

namespace App\Http\Controllers\Saas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{

    public function loginView()
    {
        if (saas()->check())
            return redirect()->route('saas.index');

        return view('Saas.Auth.login');
    }//end fun
    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function postLogin(Request $request)
    {

        $data = $request->validate([
            'email' => 'required|email|exists:saas',
            'password' => 'required|min:6'
        ]);
        $data['is_active'] = true;



        if (saas()->attempt($data))
            return response()->json(200);

        return response()->json(405);

    }//end fun
    public function logout()
    {
        saas()->logout();

        toastr()->info('تم تسجيل الخروج بنجاح');
        return redirect()->route('saas.login');
    }

}//end class
