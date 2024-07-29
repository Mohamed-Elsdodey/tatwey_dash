<?php

namespace App\Providers;

use App\Models\School;
use App\Models\Setting;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(125);
        $domain = \Illuminate\Support\Facades\Request::getHost();
        $school=School::where('domain',$domain)->first();

        if ($school) {
            $settings=Setting::where('school_id',$school->id)->first();
            if (!$settings){
                $settings=Setting::create([
                    'school_id'=>$school->id,
                ]);
            }
            view()->share('settings',$settings);

        }
        else{
            view()->share('settings', Setting::firstOrCreate());

        }


    }
}
