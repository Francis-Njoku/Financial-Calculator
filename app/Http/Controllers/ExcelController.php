<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use Maatwebsite\Excel\Facades\Excel;

class ExcelController extends Controller
{
    public function ExportClients()
    {
        Excel::create('clients', function($excel)
        {
            $excel->sheet('clients', function($sheet)
            {
                $sheet->loadView('ExportClients');
            });
        })->export('xlsv');
    }

    function excel()
    {
        $customer_data   = DB::table('users')->get()
            ->toArray();
        $customer_array[] = array('Customer name', 'customer email');
        foreach($customer_data as $customer)
        {
            $customer_array[] = array(
                'name' => $customer->name,
                'email' => $customer->email,
            );
        }
        Excel::header('Customer Data', function($excel) use (
        $customer_data)
        {
            $excel->setTitle('Çustomer Data');
            $excel->sheet('Customer Data', function($sheet)
            use ($customer_data)
            {
                $sheet->fromArray($customer_data, null, 'A1',
                    false, false);
            });
        })->download('xlsx');

    }

}
