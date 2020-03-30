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
class Share_reconstructionController extends Controller
{
    public function share_reconstruction()
    {
        $ip = \Request::ip();
        $post = new Treasury_bill();
        $post->ip_address = $ip;
        $post->track_id  = '5';
        $post->save();
        return view('financial_factory/share_reconstruction');
    }

    public function share_reconstruction_result(Request $request)
    {
        $this->validate($request, [
            'oc_quantity' => 'required',
            'oc_price' => 'required',
            'qc_quantity' => 'required',
            'qc_price' => 'required',
            'ms_quantity' => 'required',
        ]);
        $oc_quantity = $request->oc_quantity;
        $oc_price = $request->oc_price;
        $qc_quantity = $request->qc_quantity;
        $qc_price = $request->qc_price;
        $ms_quantity = $request->ms_quantity;

        if(is_numeric($ms_quantity) == false || is_numeric($oc_quantity) == false || is_numeric($oc_price) == false
            || is_numeric($qc_price) == false || is_numeric($qc_quantity) == false)
        {
            Session::flash('error', 'Please enter the right numbers');

            return redirect('/share_reconstruction');
        }
        if($qc_quantity > $oc_quantity)
        {
            Session::flash('error', 'The quantity to be cancelled cannot be more than outstanding shares');

            return redirect('/share_reconstruction');
        }
        $ip = \Request::ip();
        $oc_value = $oc_quantity * $oc_price;
        $qc_value = $qc_quantity * $qc_price;
        $nr_quantity = $oc_quantity - $qc_quantity;
        $nr_value = $oc_value - $qc_value;
        $nr_price = $nr_value / $nr_quantity;
        $ms_price = $oc_price;
        $ms_value = $ms_quantity * $ms_price;
        $mps_quantity = ($nr_quantity/$oc_quantity) * $ms_quantity;
        $mps_price = $nr_price;
        $mps_value = $mps_quantity * $mps_price;
        $sc_quantity = $ms_quantity - $mps_quantity;
        $sc_price = $qc_price;
        $sc_value = $sc_quantity * $sc_price;
        $tr_value = $sc_value + $mps_value;
        $data = array(
            'oc_value' => $oc_value,
            'oc_quantity' => $oc_quantity,
            'oc_price' => $oc_price,
            'qc_value' => $qc_value,
            'qc_quantity' => $qc_quantity,
            'qc_price' => $qc_price,
            'nr_value' => $nr_value,
            'nr_quantity' => $nr_quantity,
            'nr_price' => $nr_price,
            'ms_value' => $ms_value,
            'ms_quantity' => $ms_quantity,
            'ms_price' => $ms_price,
            'mps_value' => $mps_value,
            'mps_quantity' => $mps_quantity,
            'mps_price' => $mps_price,
            'sc_quantity' => $sc_quantity,
            'sc_price' => $sc_price,
            'sc_value' => $sc_value,
            'tr_value' => $tr_value
        );

        $post = new Treasury_bill();
        $post->ip_address = $ip;
        $post->track_id  = '5';
        $post->save();
        return view('financial_factory/share_reconstruction_result')->with('result', $data);
    }
}
