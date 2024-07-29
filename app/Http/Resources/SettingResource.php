<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SettingResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            'app_name'=>$this->app_name,
            'contact_us'=>route('web.contact_us'),
            'privacy_policy'=>route('web.privacy_policy'),
        ];
    }
}
