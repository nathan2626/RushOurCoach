<?php

namespace App\Http\Controllers;

use App\Mail\AnnulationMail;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;


class AnnulationController extends Controller
{

    public function index($token)
    {
        $annulationRecap = DB::table('reservations')->where('token', '=',  $token)->get();

//        DB::table('reservations')->where('token', '=',  $token)->delete();

        return view('annulation', compact('token'), ['annulationRecap' => $annulationRecap]);
    }
    public function delete($token)
    {
//        DB::table('reservations')->where('token', '=',  $token)->get();

        DB::table('reservations')->where('token', '=',  $token)->delete();

        $params = [
            'date_select' => DB::table('reservations')->where('token', '=',  $token)->get('date_select'),
            'hour_select' => DB::table('reservations')->where('token', '=',  $token)->get('hour_select'),
            'email' => DB::table('reservations')->where('token', '=',  $token)->get('email'),
            'subject' => "Nouvelle annulation"
        ];

        Mail::to(Config::get('reservation.email'))->send(new AnnulationMail($params));

        return redirect('reservation')
            ->with('status', 'Votre annulation a bien été réalisée !');    }

}
