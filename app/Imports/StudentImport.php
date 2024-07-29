<?php

namespace App\Imports;

use App\Models\Parents;
use App\Models\ParentStudent;
use App\Models\Room;
use App\Models\Setting;
use App\Models\Student;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class StudentImport implements ToModel, WithHeadingRow
{
    protected $roomId;

    public function __construct($roomId)
    {
        $this->roomId = $roomId;
    }
    public function model(array $row)
    {
        $settings=Setting::firstOrCreate();
        $room=Room::findOrFail($this->roomId);
        // Find a user based on the unique combination of 'name', 'room_id', and 'row_id'
        $student = Student::where([
            'name' => $row['name'],
            'phone' => $row['phone'],
            'room_id' => $this->roomId,
        ])->first();

        // If a matching user is found, update the existing record; otherwise, create a new one
        if ($student) {
            $student->update([
                'name' => $row['name'],
                'phone' => $row['phone'],
                'room_id' => $this->roomId,
                'row_id'=>$room->row_id,
                'identification_number' => $row['identification_number'],
                // Add more fields as needed
            ]);
        } else {
            Student::create([
                'name' => $row['name'],
                'phone' => $row['phone'],
                'room_id' => $this->roomId,
                'positive_point'=>$settings->minimum_student_balance,
                'total_point'=>$settings->minimum_student_balance,
                'row_id'=>$room->row_id,
                'identification_number' => $row['identification_number'],
                'created_by'=>auth('admin')->user()->id,
                'school_id'=>auth('admin')->user()->school_id,


            ]);
        }
//        if (isset($row['p_email']) && isset($row['p_password']) && isset($row['p_name'])) {
//            $student = Student::where([
//                'name' => $row['name'],
//                'room_id' => $this->roomId,
//            ])->first();
//
//            $parent_id = ParentStudent::where('student_id', $student->id)->first();
//            if ($parent_id) ;
//            {
//                $parent = Parents::find($parent_id);
//            }
//
//
//            if (!$parent) {
//                $parent = Parents::where('email', $row['p_email'])->first();
//            }
//            if ($parent) {
//                $parent_id = $parent->id;
//                $parent->update([
//                    'password' => bcrypt($row['p_password']),
//                    'name' => $row['p_name'],
//                    'email' => $row['p_email'],
//                ]);
//            } else {
//                $parent = Parents::create([
//                    'password' => bcrypt($row['p_password']),
//                    'name' => $row['p_name'],
//                    'email' => $row['p_email'],
//                ]);
//                $parent_id = $parent->id;
//            }
//            ParentStudent::updateOrCreate([
//                'student_id' => $student->id,
//                'parent_id' => $parent_id,
//            ]);
//
//        }
        return null; // Return null to skip adding a new model to the collection
    }
}
