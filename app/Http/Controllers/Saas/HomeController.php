<?php

namespace App\Http\Controllers\Saas;

use App\Http\Controllers\Controller;
use App\Http\Traits\Upload_Files;
use App\Models\Admin;


use App\Models\Student;
use App\Models\StudentReview;
use App\Models\Teacher;
use App\Models\TeacherRoom;
use App\Models\TeacherRow;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    use Upload_Files;

    public function index()
    {




        return view('Saas.home.index');
    }//end fun







}//end clas
