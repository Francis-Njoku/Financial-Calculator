<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Treasury_bill;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

    }

    public function treasury_bill()
    {
        $this->check_user();
        $treasury = DB::table('track_users')
            ->select('created_at', DB::raw('count(*) as count_click'))
            ->where('track_id','1')
            ->groupBy('created_at')
            ->orderBy('created_at', 'DESC')
            ->paginate(20);
        return view('admin/treasury_bill')->with('treasury', $treasury);


    }

    public function tax()
    {
        $this->check_user();
        $tax = DB::table('track_users')
            ->select('created_at', DB::raw('count(*) as count_click'))
            ->where('track_id','2')
            ->groupBy('created_at')
            ->orderBy('created_at', 'DESC')
            ->paginate(20);
        return view('admin/tax')->with('tax', $tax);


    }

    public function inflation()
    {
        $this->check_user();
        $inflation = DB::table('track_users')
            ->select('created_at', DB::raw('count(*) as count_click'))
            ->where('track_id','4')
            ->groupBy('created_at')
            ->orderBy('created_at', 'DESC')
            ->paginate(20);
        return view('admin/inflation')->with('inflation', $inflation);


    }

    public function annualized_rate_of_return()
    {
        $this->check_user();
        $rate_return = DB::table('track_users')
            ->select('created_at', DB::raw('count(*) as count_click'))
            ->where('track_id','3')
            ->groupBy('created_at')
            ->orderBy('created_at', 'DESC')
            ->paginate(20);
        return view('admin/annualized_rate_of_return')->with('rate_return', $rate_return);


    }

    public function share_reconstruction()
    {
        $this->check_user();
        $share = DB::table('track_users')
            ->select('created_at', DB::raw('count(*) as count_click'))
            ->where('track_id','5')
            ->groupBy('created_at')
            ->orderBy('created_at', 'DESC')
            ->paginate(20);
        return view('admin/share_reconstruction')->with('share', $share);


    }
    public function bonus_share()
    {
        $this->check_user();
        $share = DB::table('track_users')
            ->select('created_at', DB::raw('count(*) as count_click'))
            ->where('track_id','6')
            ->groupBy('created_at')
            ->orderBy('created_at', 'DESC')
            ->paginate(20);
        return view('admin/share_reconstruction')->with('share', $share);


    }
    public function percentage_change()
    {
        $this->check_user();
        $share = DB::table('track_users')
            ->select('created_at', DB::raw('count(*) as count_click'))
            ->where('track_id','7')
            ->groupBy('created_at')
            ->orderBy('created_at', 'DESC')
            ->paginate(20);
        return view('admin/percentage_change')->with('share', $share);


    }
    public function wacc()
    {
        $this->check_user();
        $share = DB::table('track_users')
            ->select('created_at', DB::raw('count(*) as count_click'))
            ->where('track_id','8')
            ->groupBy('created_at')
            ->orderBy('created_at', 'DESC')
            ->paginate(20);
        return view('admin/wacc')->with('share', $share);


    }

    public function interest_rate_checker()
    {
        $this->check_user();
        $share = DB::table('track_users')
            ->select('created_at', DB::raw('count(*) as count_click'))
            ->where('track_id','9')
            ->groupBy('created_at')
            ->orderBy('created_at', 'DESC')
            ->paginate(20);
        return view('admin/interest_rate_checker')->with('share', $share);


    }
    public function annuity()
    {
        $this->check_user();
        $share = DB::table('track_users')
            ->select('created_at', DB::raw('count(*) as count_click'))
            ->where('track_id','10')
            ->groupBy('created_at')
            ->orderBy('created_at', 'DESC')
            ->paginate(20);
        return view('admin/annuity')->with('share', $share);


    }

    public function dividend()
    {
        $this->check_user();
        $share = DB::table('track_users')
            ->select('created_at', DB::raw('count(*) as count_click'))
            ->where('track_id','11')
            ->groupBy('created_at')
            ->orderBy('created_at', 'DESC')
            ->paginate(20);
        return view('admin/dividend')->with('share', $share);


    }
    private function check_user()
    {
        $user_type = DB::table('users')->where('id', auth()->user()->id)->first();
        abort_if($user_type->role != 'admin', 404);
    }
}
