<?php

namespace App\Imports;
   
use App\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
    
class UsersImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new User([
            'name'     => $row['name'],
            'email'    => $row['email'], 
            'password' => \Hash::make($row['password']),
            'phone'     => $row['phone'],
            'user_type'    => $row['user_type'],
            'gender'    => $row['gender'],
            'status'    => $row['status'],
        ]);
    }
}
?>
