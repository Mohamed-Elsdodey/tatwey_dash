<?php

namespace App\Imports;

use App\Models\Parents;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;



class ParentsImport implements ToModel, WithHeadingRow
{

    public function __construct()
    {
    }
    public function model(array $row)
    {
        $parent = Parents::where([
            'phone' => $row['phone'],
        ])->first();

        // If a matching user is found, update the existing record; otherwise, create a new one
        if ($parent) {
            $password='';
            if ($row['password']) {
                $password = bcrypt($row['password']);
            } else {
                $password = $parent->password;
            }
            $parent->update([
                'name' => $row['name'],
                'phone' => $row['phone'],
                'email' => $row['email'],
                'password' => $password,
            ]);

        } else {
            Parents::create([
                'name' => $row['name'],
                'phone' => $row['phone'],
                'email' => $row['email'],
                'password'=>bcrypt($row['password'])

            ]);
        }

        return null; // Return null to skip adding a new model to the collection
    }
}
