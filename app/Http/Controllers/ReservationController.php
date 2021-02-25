<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReservationFormRequest;
use App\Mail\ReservationMail;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class ReservationController extends Controller
{
    public function index()
    {
        $token = md5(uniqid(true));

        $today = \Carbon\Carbon::now()->format('Y-m-d');

        return view('reservation', compact('today'), ['token' => $token]);
    }

    public function sendReservation(ReservationFormRequest $request)
    {

        $params = [
            'date_select' => $request->get('date_select'),
            'hour_select' => $request->get('hour_select'),
            'email' => $request->get('email'),
            'token' => $request->get('token'),
            'subject' => "Nouvelle réservation"
        ];

        DB::table('reservations')->insert([
            'date_select' => $params['date_select'],
            'hour_select' => $params['hour_select'],
            'token' => $params['token'],
            'email' => $params['email'],
        ]);

        Mail::to(Config::get('reservation.email'))->send(new ReservationMail($params));

        return redirect('reservation')
            ->with('status', 'Votre réservation a bien été enregistrée, un mail vous sera envoyé !');

    }


}
