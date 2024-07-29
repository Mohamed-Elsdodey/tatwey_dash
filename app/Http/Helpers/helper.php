<?php

use SimpleSoftwareIO\QrCode\Facades\QrCode;


if (!function_exists('admin')) {
    function admin()
    {
        return auth()->guard('admin');
    }
}

if (!function_exists('saas')) {
    function saas()
    {
        return auth()->guard('saas');
    }
}

if (!function_exists('teacher')) {
    function teacher()
    {
        return auth()->guard('teacher');
    }
}

if (!function_exists('moderator')) {
    function moderator()
    {
        return auth()->guard('moderator');
    }
}


if (!function_exists('setting')) {
    function setting()
    {
        return \App\Models\Setting::firstorFail();
    }
}


if (!function_exists('get_file')) {
    function get_file($file=null)
    {
        // Storage::exists( $file )
        if (filter_var($file, FILTER_VALIDATE_URL)) {
            $file_path = $file;
        } elseif ($file) {
            $file_path = asset('storage/uploads') . '/' . $file;
        } else {
            $file_path = asset('assets/default/imgs/default-img.png');
        }
        return $file_path;
    }//end
}



if (!function_exists('get_lang')) {
    function get_lang()
    {
        return \LaravelLocalization::setLocale() ?? 'en';
    }
}


if (!function_exists('session_lang')) {
    function session_lang()
    {
        $lang = 'ar';
        /*if (session()->get('lang') && in_array(session()->get('lang'), ['ar', 'en'])) {
            $lang = session()->get('lang') ? session()->get('lang') : 'default';
        }*/

        if (get_lang() && in_array(get_lang(), ['ar', 'en'])) {
            $lang = get_lang();
        }

        if (request()->get('lang') && in_array(request()->get('lang'), ['ar', 'en'])) {
            $lang = request()->get('lang');
        }

        if (request()->post('lang') && in_array(request()->post('lang'), ['ar', 'en'])) {
            $lang = request()->post('lang');
        }

        if (request()->header('lang') && in_array(request()->header('lang'), ['ar', 'en'])) {
            $lang = request()->header('lang');
        }
        return $lang;
    }







}
