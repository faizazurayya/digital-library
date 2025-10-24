<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Loan;

class LoanSeeder extends Seeder
{
    public function run(): void
    {
        Loan::create([
            'member_id' => 1,
            'book_id' => 1,
            'loan_date' => '2025-10-25',
            'return_date' => '2025-10-30'
        ]);

        Loan::create([
            'member_id' => 2,
            'book_id' => 1,
            'loan_date' => '2025-10-26',
            'return_date' => '2025-10-31'
        ]);
    }
}