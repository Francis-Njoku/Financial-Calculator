<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Tax;
use Illuminate\Support\Facades\DB;
use App\Treasury_bill;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UsersExport;
use App\Exports\CheckExport;

class TaxController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $ip = \Request::ip();

        $post = new Treasury_bill();
        $post->ip_address = $ip;
        $post->track_id  = '2';
        $post->save();
        return view('tax/tax_index');
    }
    public function export()
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }
    public function export_head()
    {
        return Excel::download(new CheckExport, 'tax.xlsx');
    }
    public function excel()
    {
        $users_details = DB::table('users')->get()
            ->toArray();
        $users_details[] = array('Name', 'Email');
        foreach($users_details as $users)
        {
            $users_details[] = array(
                'Name' => $users->name,
                'Email' => $users->email,
            );
        }


    }

    public function tax_result(Request $request)
    {
        $ab_label = '16666.67';
        $k_label = '25000';
        $m_label = '41666.6667';
        $o_label = '133333.3333';
        $p_label = '266666.6667';

        $this->validate($request, [
            'wage_month' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'gross_emolument' => 'required',
        ]);

        $wage_month = date('Y-m-d', strtotime($request->wage_month));
        if($request->life_assurance != '')
        {
            if( is_numeric($request->life_assurance) == false)
            {
                Session::flash('error', 'Please enter the right amount format');

                return redirect('/tax');
            }
        }

        if($request->nhf != '')
        {
            if(is_numeric($request->nhf) == false)
            {
                Session::flash('error', 'Please enter the right amount format');

                return redirect('/tax');
            }
        }

        if($request->pension != '' )
        {
            if( is_numeric($request->pension) == false)
            {
                Session::flash('error', 'Please enter the right amount format');

                return redirect('/tax');
            }
        }

        if(is_numeric($request->gross_emolument) == false)
        {
            Session::flash('error', 'Please enter the right amount format');

            return redirect('/tax');
        }

        $gross = $request->gross_emolument;
        $nhf = $request->nhf;
        $pension = $request->pension;
        $life = $request->life_assurance;

        // Calculate relief
        if(($gross * 0.2) > 0)
        {
            $relief = ($gross * 0.2) + $ab_label;
        }
        else{
            $relief = 0;
        }
        // End calculate relief

        // Calculate tax free pay
        $tax_free = $nhf + $pension + $life + $relief;
        // End calculate tax free pay

        // Calculate taxable pay
        $taxable_pay = $gross - $tax_free;
        // End calculate taxable pay

        // Calculate first one
        if($taxable_pay >= $k_label)
        {
            $first_one = $k_label * 0.07;
        }
        else{
            $first_one = $taxable_pay * 0.07;
        }
        // End calculate first one

        // Calculate first two
        if(($taxable_pay - $k_label) > $k_label)
        {
            $first_two = $k_label * 0.11;
        }
        elseif(($taxable_pay - $k_label) > 1)
        {
            $first_two = ($taxable_pay - $k_label) - 0.11;
        }
        elseif(($taxable_pay - $k_label) > 0)
        {
            $first_two = $taxable_pay - $k_label;
        }
        else
        {
            $first_two = 0;
        }
        // End calculate first two

        // Calculate second one
        if(($taxable_pay - ($k_label + $k_label)) > $m_label)
        {
            $second_one = $m_label * 0.15;
        }
        elseif(($taxable_pay - $k_label - $k_label) > 1)
        {
            $second_one = ($taxable_pay - $k_label - $k_label) * 0.11;
        }
        elseif((($taxable_pay - ($k_label + $k_label)) * 0.11) > 0)
        {
            $second_one = $taxable_pay - ($k_label + $k_label);
        }
        else
        {
            $second_one = 0;
        }
        // End calculate second one

        // Calculate second two
        if(($taxable_pay - ($k_label + $k_label + $m_label)) > $m_label)
        {
            $second_two = $m_label * 0.19;
        }
        elseif(($taxable_pay - $k_label - $k_label - $m_label) > 1)
        {
            $second_two = ($taxable_pay - $k_label - $k_label - $m_label) * 0.19;
        }
        elseif((($taxable_pay - ($m_label + $k_label + $k_label)) * 0.19) > 0)
        {
            $second_two = $taxable_pay - ($k_label + $k_label + $m_label);
        }
        else
        {
            $second_two = 0;
        }
        // End calculate second two

        // Calculate third one
        if(($taxable_pay - ($k_label + $k_label + $m_label + $m_label)) > $o_label)
        {
            $third_one = $o_label * 0.21;
        }
        elseif(($taxable_pay - ($k_label + $k_label + $m_label + $m_label)) > 1)
        {
            $third_one = ($taxable_pay - ($k_label + $k_label + $m_label + $m_label)) * 0.21;
        }
        elseif((($taxable_pay - ($k_label + $k_label + $m_label + $m_label)) * 0.21) > 0)
        {
            $third_one = $taxable_pay - ($k_label + $k_label + $m_label + $m_label);
        }
        else
        {
            $third_one = 0;
        }
        // End calculate third one

        // Calculate fourth one
        if(($taxable_pay - ($k_label + $k_label + $m_label + $m_label + $o_label)) > 0)
        {
            $fourth_one = ($taxable_pay - ($k_label + $k_label + $m_label + $m_label + $o_label)) * 0.24;
        }
        else
        {
            $fourth_one = 0;
        }
        // End calculate fourth one

        // Calculate tax paid
        $tax_paid = $first_one + $first_two + $second_one + $second_two + $third_one + $fourth_one;

        // End calculate tax paid

        // Calculate net pay
        $net_pay = $gross - $pension - $nhf - $tax_paid;
        // End calculate net pay

        // Calculate Tax percentage
        $tax_percentage2 = $tax_paid / $gross;
        $tax_percentage = $tax_percentage2 * 100;
        // End calculate tax percentage

        // Calculate check
        if($tax_percentage2 < 1)
        {
            $check_tax = 'Ok';
        }
        else
        {
            $check_tax = 'Check';
        }
        // End calculate check

        $data = array(
            'gross_emolument' => $gross,
            'salary_month' => $request->wage_month,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'nhf' => $nhf,
            'pension' => $pension,
            'life' => $life,
            'relief' => $relief,
            'tax_free' => $tax_free,
            'taxable_pay' => $taxable_pay,
            'first_one' => $first_one,
            'first_two' => $first_two,
            'second_one' => $second_one,
            'second_two' => $second_two,
            'third_one' => $third_one,
            'fourth_one' => $fourth_one,
            'tax_paid' => $tax_paid,
            'net_pay' => $net_pay,
            'tax_percentage' => $tax_percentage,
            'check_tax' => $check_tax
        );

        $ip = \Request::ip();

        $post = new Treasury_bill();
        $post->ip_address = $ip;
        $post->track_id  = '2';
        $post->save();

        $post3 = new Tax();
        $post3->salary_month = $wage_month;
        $post3->user_id = auth()->user()->id;
        $post3->first_name = $request->first_name;
        $post3->last_name = $request->last_name;
        $post3->gross_emoluments = $gross;
        $post3->reliefs = $relief;
        $post3->pension = $pension;
        $post3->nhf = $nhf;
        $post3->life_assurance = $life;
        $post3->tax_free_pay = $tax_free;
        $post3->tax_pay = $taxable_pay;
        $post3->first_one = $first_one;
        $post3->first_two = $first_two;
        $post3->second_one = $second_one;
        $post3->second_two = $second_two;
        $post3->third_one = $third_one;
        $post3->fourth_one = $fourth_one;
        $post3->tax_paid = $tax_paid;
        $post3->net_pay = $net_pay;
        $post3->tax_percentage = $tax_percentage;
        $post3->check_tax = $check_tax;
        $post3->save();

        Session::flash('success', 'Successful');

        return redirect('/tax_show');

    }

    public function tax_show()
    {
        $tax = DB::table('tax')
            ->where('user_id', auth()->user()->id)
            ->orderBy('salary_month', 'desc')
            ->paginate(20);

        return view('tax/list_tax')->with(['tax' => $tax]);
    }

    public function delete_tax(Request $request)
    {
        $this->validate($request, [
            'tax_id' => 'required',
        ]);

        $id = $request->tax_id;

        $post = Tax::find($id);

        $post->delete();
        Session::flash('success', 'Successful');
        return redirect('/tax_show/');

    }
}
