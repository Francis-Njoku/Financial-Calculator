<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Treasury_bill;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Exceptions\Handler;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function treasury_bill()
    {
        $number_day = '19';
        $today = date_create_from_format('j-M-Y', '15-Feb-2009');

        $new_da = date("Y-m-d h:i:sa");
        // $dayLight = TRUE;
        $new_me = strtotime('2018-11-11');

        $add_men = date('d', '10');



        $add_day = strtotime($new_me);

        //$whole_day = $new_me + $add_day;
        //$deig = date('Y-m-d', $whole_day);
        $cenvertedTime = date('Y-m-d',strtotime('+'.$number_day.' days',strtotime('2018-11-11')));
        return view('treasury_bill')->with('deig', $cenvertedTime);


    }

    public function treasury_bill_result(Request $request)
    {
       /** if ($exception instanceof CustomException) {
            return redirect('/treasury_bill');
        }**/
        $this->validate($request, [
            'dayss' => 'required',
            'num_days' => 'required',
            'amount_invest' => 'required',
            'percent' => 'required',
        ]);

        $perc = $request->percent;

        if(is_numeric($perc) == false)
        {
            Session::flash('error', 'Please enter the right percent');

            return redirect('/treasury_bill');
        }

        $ip = \Request::ip();

        $amount_on_invest = $request->amount_invest * ($request->percent / 100);
        $amount_spread = $amount_on_invest / 365;
        $amount_goten = $amount_spread * $request->num_days;


        $cenvertedTime = date('d-m-Y',strtotime('+'.$request->num_days.' days',strtotime($request->dayss)));
        $purchase_price = $request->amount_invest - $amount_goten;
        $data = array(
            'value_date' => date('d-m-Y',strtotime($request->dayss)),
            'investment_term' => $request->num_days,
            'face_value' => $request->amount_invest,
            'interest_rate' => $request->percent,
            'investor_return' => $amount_goten,
            'due_date' => date('d-m-Y', strtotime($cenvertedTime)),
            'purchase_price' => $purchase_price,

        );

        $post = new Treasury_bill();
        $post->ip_address = $ip;
        $post->track_id  = '1';
        $post->save();
        return view('treasury_bill_result')->with('result', $data);


    }

}
