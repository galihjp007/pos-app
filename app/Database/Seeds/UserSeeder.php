<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'username' => 'admin',
                'password' => password_hash('admin123', PASSWORD_BCRYPT),
                'role'     => 'admin',
            ],
            [
                'username' => 'cashier',
                'password' => password_hash('cashier123', PASSWORD_BCRYPT),
                'role'     => 'cashier',
            ],
        ];
        $this->db->table('users')->insertBatch($data);
    }
}
