<?php

namespace App\Imports;

use App\Models\Category;
use App\Models\Exam;
use App\Models\Student;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ExamImport implements  ToModel, WithHeadingRow
{


    public function __construct()
    {
    }
    public function model(array $row)
    {

        $categories=Category::where('slug','!=',null)->get();
        $student=null;
        if (array_key_exists('identification_number', $row)) {
            $student=Student::where('identification_number',$row['identification_number'])->first();
            // You can use $identificationNumber as needed
        }
        if ($student) {

            foreach ($categories as $category){
                $slug=$category->slug;
                if (isset($row[$slug]) && $row[$slug] !== '') {
                    Exam::create([
                        'student_id'=>$student->id,
                        'degree_of_exam'=>$category->degree_of_exam,
                        'degree_of_student'=>$row[$slug],
                        'row_id'=>$student->row_id,
                        'room_id'=>$student->room_id,
                        'category_id'=>$category->id,
                        'school_id'=>auth('admin')->user()->school_id,

                    ]);
                }
            }


        }

        return null; // Return null to skip adding a new model to the collection
    }
}
