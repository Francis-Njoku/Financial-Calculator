<?php

namespace App\Exports;

use App\User;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class CheckExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
   /* public function collection()
    {
        return User::all();
    }*/

    public function collection()
    {
       // $email = Auth::user()->email;
        return DB::table('tax')
            ->select('salary_month', 'first_name', 'last_name', 'gross_emoluments', 'reliefs','pension','nhf','life_assurance',
                'tax_free_pay', 'tax_pay','first_one', 'first_two', 'second_one', 'second_two', 'third_one', 'fourth_one',
                'tax_paid', 'net_pay', 'tax_percentage', 'check_tax')
            ->where('user_id', auth()->user()->id)
            ->orderBy('salary_month', 'desc')
            ->get();
    }

    public function headings(): array
    {
        return [
            'Salary Month',
            'First Name',
            'Last Name', 'Gross Emoluments (₦)', 'Reliefs (₦)', 'Pension (₦)', 'NHF (₦)', 'Life Assurance (₦)', 'Tax Free Pay (₦)', 'Taxable Pay (₦)',
            '25000 (₦)', '25000 (₦)', '41666.66667 (₦)', '41666.66667 (₦)', '133333.3333 (₦)', '266666.6667 (₦)', 'Tax Paid (₦)', 'Net Pay (₦)',
            'Tax Percentage (₦)', 'Check (₦)',
        ];
    }
}
