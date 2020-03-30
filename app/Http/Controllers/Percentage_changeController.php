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

class Percentage_changeController extends Controller
{
    public function percentage_change()
    {
        $ip = \Request::ip();
        $post = new Treasury_bill();
        $post->ip_address = $ip;
        $post->track_id  = '7';
        $post->save();
        return view('financial_factory/percentage_change');
    }

    public function percentage_change_result(Request $request)
    {
        $this->validate($request, [
            'old_amount' => 'required',
            'new_amount' => 'required',
        ]);


        $old_amount = $request->old_amount;
        $new_amount = $request->new_amount;
        if(is_numeric($old_amount) == false || is_numeric($new_amount) == false)
        {
            Session::flash('error', 'Please enter the right amount');

            return redirect('/percentage_change');
        }
        $change = (($new_amount - $old_amount)/ $old_amount) * 100;



        $ip = \Request::ip();
        $data = array(
            'old_amount' => $old_amount,
            'new_amount' => $new_amount,
            'change' => $change,
        );

        $post = new Treasury_bill();
        $post->ip_address = $ip;
        $post->track_id  = '7';
        $post->save();
        return view('financial_factory/percentage_change_result')->with('result', $data);
    }
}
