<?php

namespace App\Exports;

use App\Models\Exam;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExamExport implements FromCollection, WithHeadings
{


    public function __construct()
    {
    }

    public function collection()
    {
        // Fetch users data based on the received $roomId
        $exams =Exam::select('id','title','degree_of_exam','degree_of_student','category_id','teacher_id')->get();
        return $exams;
    }

    public function headings(): array
    {
        // Define column headers
        return [
            'id',
            'title',
            'degree_of_exam',
            'degree_of_student',
            'category_id',
            'teacher_id',
            'identification_number'

            // Add more column names as needed
        ];
    }
}
