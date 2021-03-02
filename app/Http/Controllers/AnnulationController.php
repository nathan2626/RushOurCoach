<?php

namespace App\Http\Controllers;

use App\Http\Requests\AnnulationFormRequest;
use App\Mail\AnnulationMail;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;


class AnnulationController extends Controller
{
    public function index($token)
    {

        //Verification token Exist

        $verifTokenIsExist = DB::table('reservations')->where('token', '=',  $token)->get('token');

//        dd(count($verifTokenIsExist));
        if (count($verifTokenIsExist) < 1){
            return redirect('/reservation')
                ->with('error',"Vous avez déjà annulé cette réservation ou la réservation n'existe pas !")->withInput();
        }

        // end of verification token Exist

        $annulationRecap = DB::table('reservations')->where('token', '=',  $token)->get();

        return view('annulation', compact('token'), ['annulationRecap' => $annulationRecap]);
    }
    public function delete(AnnulationFormRequest $request, $token)
    {

//        if ()

        DB::table('reservations')->where('token', '=',  $token)->delete();

        $params = [
            'date_select' => DB::table('reservations')->where('token', '=',  $token)->get('date_select'),
            'hour_select' => DB::table('reservations')->where('token', '=',  $token)->get('hour_select'),
            'email' => DB::table('reservations')->where('token', '=',  $token)->get('email'),
            'subject' => "Nouvelle annulation"
        ];

        Mail::to(Config::get('reservation.email'))->send(new AnnulationMail($params));

        return redirect('reservation')
            ->with('status', 'Votre annulation a bien été réalisée !');
    }

}
