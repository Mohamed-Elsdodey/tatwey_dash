<?php

namespace App\Exports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


class StudentExport implements FromCollection, WithHeadings

{
    protected $roomId;

    public function __construct($roomId)
    {
        $this->roomId = $roomId;
    }

    public function collection()
    {
        // Fetch users data based on the received $roomId
        $students = Student::where('room_id', $this->roomId)->select('id','identification_number','name','phone','positive_point','negative_point','total_point','row_id','room_id')->get();
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
            'row_id',
            'room_id',
            // Add more column names as needed
        ];
    }
}
