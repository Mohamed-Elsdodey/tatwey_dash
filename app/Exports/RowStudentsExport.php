<?php

namespace App\Exports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class RowStudentsExport implements FromCollection, WithHeadings
{
    protected $rowId;

    public function __construct($rowId)
    {
        $this->rowId = $rowId;
    }

    public function collection()
    {
        $students = Student::where('row_id', $this->rowId)->select('id','identification_number','name','phone','positive_point','negative_point','total_point','room_id')->orderBy('room_id','ASC')->get();
        return $students;
    }

    public function headings(): array
    {
        // Define column headers
        return [
            'id',
            'identification_number',
            'name',
            'phone',
            'positive_point',
            'negative_point',
            'total_point',
            'room_id',
            // Add more column names as needed
        ];
    }
}
