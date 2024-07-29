<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Traits\LogActivityTrait;
use App\Http\Traits\NotificationFirebaseTrait;
use App\Http\Traits\Upload_Files;
use App\Models\Activity;
use App\Models\Admin;
use App\Models\Category;
use App\Models\Charity;
use App\Models\City;
use App\Models\Client;
use App\Models\Contact;
use App\Models\Currency;
use App\Models\Donation;
use App\Models\Governorate;
use App\Models\HowToGetPoint;
use App\Models\HowToRedeem;
use App\Models\Level;
use App\Models\Offer;
use App\Models\Order;
use App\Models\Parents;
use App\Models\Room;
use App\Models\Row;
use App\Models\Service;
use App\Models\Store;
use App\Models\Student;
use App\Models\StudentReview;
use App\Models\Subscription;
use App\Models\Teacher;
use App\Models\User;
use App\Models\UserType;
use App\Models\Vendor;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    use Upload_Files,NotificationFirebaseTrait;

    public function index()
    {


        $admins=Admin::count();
        $categories=Category::count();
        $rows=Row::count();
        $teachers=100;
        $rooms=Room::count();
        $students=Student::count();
        $positive=200;
        $negative=300;


        return view('Admin.home.index',compact('admins','categories','rows','teachers','rooms','students','positive','negative'));
    }//end fun



    public function calender(Request $request)
    {
        $arrResult =[];
        $orders = Order::property()->get();
        //get count of orders by days
        foreach ($orders as $row) {
            $date = date('Y-m-d', strtotime($row->date_order));
            if (isset($arrResult[$date])) {
                $arrResult[$date]["counter"] += 1;
                $arrResult[$date]["id"][]  = $row->id;
            } else {
                $arrResult[$date]["counter"] = 1;
                $arrResult[$date]["id"][]  = $row->id;

            }
        }
        //  dd($arrResult);
        //make format of calender
        $Events = [];
        if (count($arrResult)>0) {
            $i = 0;
            foreach ($arrResult as $item => $value) {
                $title= $value['counter'];
                $Events[$i] = array(
                    'id' => $i,
                    'title' => $title,
                    'start' => $item,
                    'ids' => $value['id'],
                );
                $i++;
            }
        }
        //return to calender
        return $Events ;
    }//end fun


    public function getStudents(Request $request){

        if ($request->ajax()) {

            $term = trim($request->term);
            $posts = DB::table('students')->where('school_id',auth('admin')->user()->school_id)->select('id', 'name as text')
                ->where('name', 'LIKE', '%' . $term . '%')
                ->orderBy('name', 'asc')->simplePaginate(6);

            $morePages = true;
            $pagination_obj = json_encode($posts);
            if (empty($posts->nextPageUrl())) {
                $morePages = false;
            }
            $results = array(
                "results" => $posts->items(),
                "pagination" => array(
                    "more" => $morePages
                )
            );

            return \Response::json($results);

        }


    }



    public function getReviewForStudent($id){

        $students=Student::property()->findOrFail($id);
        $reviews=StudentReview::property()->with(['teacher','category'])->where('student_id',$id)->get();
        return view('Admin.home.parts.review',compact('reviews'));

    }




}//end clas
