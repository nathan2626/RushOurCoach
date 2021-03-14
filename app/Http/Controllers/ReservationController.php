<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReservationFormRequest;
use App\Mail\ReservationMail;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;

class ReservationController extends Controller
{
    public function index()
    {
        $token = md5(uniqid(true));

        $today = Carbon::now()->format('Y-m-d');

        return view('reservation', compact('today'), ['token' => $token]);
    }

    public function sendReservation(ReservationFormRequest $request)
    {
        $allReservations = DB::table('reservations')->get();

        $allDays = Carbon::getDays();
        $openDays = Config::get('configuration.openDays');

        //Verification is days off

        $date_select_verif = $request->get('date_select');
        $dateIsExist = DB::table('reservations')->where('date_select', '=', $date_select_verif)->get();

        $parseDateIsDaysOff = Carbon::parse($date_select_verif);

        if($parseDateIsDaysOff->isSaturday() || $parseDateIsDaysOff->isSunday()){
            return redirect('/reservation')
                ->with('error',"Le coach n'est pas disponible du vendredi au dimanche !")->withInput();
        }

        // end of verification is days off

        //Verification is 2 reservations for this user

        $email_select_verif = $request->get('email');
        $hour_select_verif = $request->get('hour_select');
        $date_select_verif = $request->get('date_select');

        $userIsExist= DB::table('reservations')->where([

            ['email', '=', $email_select_verif],
            ['hour_select', '=', $hour_select_verif],
            ['date_select', '=', $date_select_verif]

        ])->get();

        if (count($userIsExist) > 0) {
            return redirect('/reservation')
                ->with('error',"Vous avez déjà réservé le ".$date_select_verif." à ".$hour_select_verif." !")->withInput();
        }

        // end of is 2 reservations for this user

        //Verification is max 2 reservations

        $reserveTwoMax = DB::table('reservations')->where([
            ['hour_select', '=', $hour_select_verif],
            ['date_select', '=', $date_select_verif]

        ])->get();

        if (count($reserveTwoMax) >= 2) {
            return redirect('/reservation')
                ->with('error',"Plus de place disponible le ".$date_select_verif." à ".$hour_select_verif." !")->withInput();
        }

        // end of is max 2 reservations

        //Verification is min date

        $today = Carbon::now()->format('Y-m-d');
        $selectForVerif =  $request->get('date_select');

        if($selectForVerif < $today){
            return redirect('/reservation')
                ->with('error',"La date sélectionnée est passée..")->withInput();
        }

        // end of is min date



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
