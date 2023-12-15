<?php

namespace Database\Seeders;

use App\Models\LoanDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LoanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        LoanDetail::insert([
            'loan_id' => 1,
            'book_id' => 1,
            'is_return' => false,
            'created_at' => now(),
        ]);
    }
}
