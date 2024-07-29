<?php
namespace App\Http\Traits;

trait ResponseTrait
{

    public function addResponse($message = "تم اضافة البيانات بنجاح")
    {
        return [
            'message' => $message,
            'code'  => 200,
        ];
    }

    public function updateResponse($message = "تم تعديل البيانات بنجاح")
    {
        return [
            'message' => $message,
            'code'  => 200,
        ];
    }

    public function deleteResponse($message = "تم حذف البيانات بنجاح")
    {
        return [
            'message' => $message,
            'code'  => 200,
        ];
    }

    public function successResponse($message="تمت العملية بنجاح"){
        return response()->json([
            'status' => true,
            'message' => $message,
        ]);

    }


}
