<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Company;
use App\Models\Branch;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        $company = Company::firstOrCreate([
            'code' => 'DHOOL'
        ], [
            'name' => 'DHOOL ERP',
            'currency' => 'USD',
        ]);

        $branch = Branch::firstOrCreate([
            'company_id' => $company->id,
            'code' => 'HQ'
        ], [
            'name' => 'Head Office',
        ]);

        $admin = User::firstOrCreate(
            ['email' => 'admin@dhool.so'],
            [
                'company_id' => $company->id,
                'branch_id' => $branch->id,
                'name' => 'Super Admin',
                'password' => bcrypt('Admin@12345'),
                'is_active' => true,
            ]
        );

        $admin->assignRole('Super Admin');
    }
}
