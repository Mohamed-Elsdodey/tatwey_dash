<?php

namespace App\Exports;

use App\Models\Parents;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ParentsExport implements FromCollection, WithHeadings
{

    public function __construct()
    {
    }

    public function collection()
    {
        // Fetch users data based on the received $roomId
        $parents =Parents::select('id','name','phone','email')->get();
        return $parents;
    }

    public function headings(): array
    {
        // Define column headers
        return [
            'id',
            'name',
            'phone',
            'email',
            'password',
            // Add more column names as needed
        ];
    }
}
