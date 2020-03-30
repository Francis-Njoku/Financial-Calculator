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

class Bonus_shareController extends Controller
{
    public function bonus_share()
    {
        return view('financial_factory/bonus_share');
    }

    public function bonus_share_result(Request $request)
    {
        $this->validate($request, [
            'basis_shares' => 'required',
            'basis_every' => 'required',
            'current_own' => 'required',
        ]);

        $basis_shares = $request->basis_shares;
        $basis_every = $request->basis_every;
        $current_own = $request->current_own;

        if(is_numeric($basis_shares) == false || is_numeric($basis_every) == false || is_numeric($current_own) == false)
        {
            Session::flash('error', 'Please enter the right numbers');

            return redirect('/bonus_shares');
        }

        $ip = \Request::ip();
        $bonus_receivable = ($current_own / $basis_every) * $basis_shares;
        $total_shares = $current_own + $bonus_receivable;

        $data = array(
            'basis_shares' => $basis_shares,
            'basis_every' => $basis_every,
            'current_own' => $current_own,
            'bonus_receivable' => $bonus_receivable,
            'total_shares' => $total_shares
        );

        $post = new Treasury_bill();
        $post->ip_address = $ip;
        $post->track_id  = '6';
        $post->save();
        return view('financial_factory/bonus_share_result')->with('result', $data);
    }
}
