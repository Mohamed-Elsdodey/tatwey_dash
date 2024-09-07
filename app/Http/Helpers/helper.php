<?php

use SimpleSoftwareIO\QrCode\Facades\QrCode;


if (!function_exists('admin')) {
    function admin()
    {
        return auth()->guard('admin');
    }
}

if (!function_exists('administration')) {
    function administration()
    {
        return auth()->guard('administration');
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
            $file_path = url('storage/uploads') . '/' . $file;
        } else {
            $file_path = url('assets/default/imgs/default-img.png');
        }
        return $file_path;
    }//end
}
if (!function_exists('get_user_file')) {
    function get_user_file($file=null)
    {
        // Storage::exists( $file )
        if (filter_var($file, FILTER_VALIDATE_URL)) {
            $file_path = $file;
        } elseif ($file) {
            $file_path = url('storage/uploads') . '/' . $file;
        } else {
            $file_path = url('assets/default/imgs/user.jpeg');
        }
        return $file_path;
    }//end
}

if (!function_exists('helperTrans')) {
    function helperTrans($str): array|string|\Illuminate\Contracts\Translation\Translator|\Illuminate\Contracts\Foundation\Application|null
    {
        $arrayOfKeys = explode('.', $str);
        $file = $arrayOfKeys[0] ?? 'file';
        $key = $arrayOfKeys[1] ?? '';

        // List of languages to handle
        $languages = ['en', 'ar'];

        $processed_key = ucfirst(str_replace('_', ' ', remove_invalid_characters($key)));

        foreach ($languages as $local) {
            \Illuminate\Support\Facades\App::setLocale($local);

            try {
                $filePath = resource_path("lang/$local/$file.php");

                // Check if the file exists and create it if it doesn't
                if (!file_exists($filePath)) {
                    file_put_contents($filePath, "<?php return []; ?>");
                }

                // Load the existing translations
                $lang_array = include($filePath);

                // Add the key if it does not exist
                if (!array_key_exists($key, $lang_array)) {
                    $lang_array[$key] = $processed_key;
                    $str = "<?php return " . var_export($lang_array, true) . ";";
                    file_put_contents($filePath, $str);
                }
            } catch (\Exception $exception) {
                // Log the exception if needed
            }
        }

        // Return the translation for the current locale
        return __("$file.$key");
    }

}




if (!function_exists('get_lang')) {
    function get_lang()
    {
        return \LaravelLocalization::setLocale() ?? 'en';
    }
}

function remove_invalid_characters($str): array|string
{
    return str_ireplace(['\'', '"', ',', ';', '<', '>'], ' ', $str);
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
