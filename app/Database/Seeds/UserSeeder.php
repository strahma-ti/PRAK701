<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\UserModel;

class UserSeeder extends Seeder
{
    public function run()
    {
        $model = new UserModel();
    
        $model->insert([
            "username" => "user1",
            "email" => "user1@example.com",
            "password" => password_hash("12345678", PASSWORD_DEFAULT)
        ]);
    
        $model->insert([
            "username" => "siti_rahmah",
            "email" => "siti.rahmah@example.com",
            "password" => password_hash("2110817120011", PASSWORD_DEFAULT)
        ]);
    }    
}
