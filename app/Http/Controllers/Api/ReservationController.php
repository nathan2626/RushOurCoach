<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\AnnulationFormRequest;
use App\Http\Requests\ReservationFormRequest;
use App\Mail\AnnulationMail;
use App\Mail\ReservationMail;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function book(ReservationFormRequest $request)
    {
        $allReservations = DB::table('reservations')->get();

        $allDays = Carbon::getDays();
        $openDays = Config::get('configuration.openDays');

        //Verification is days off

        $date_select_verif = $request->get('date_select');
        $dateIsExist = DB::table('reservations')->where('date_select', '=', $date_select_verif)->get();

        $parseDateIsDaysOff = Carbon::parse($date_select_verif);

        if($parseDateIsDaysOff->isSaturday() || $parseDateIsDaysOff->isSunday()){

            return response()->json(['error' => "Le coach n'est pas disponible le vendredi et le samedi !"], 400);
//            return response('/api/reservation')
//                ->with('error',"Le coach n'est pas disponible le vendredi et le samedi !")->withInput();
//
        }

        // end of verification is days off

        //Verification is 2 reservations for this user

        $email_select_verif = $request->get('email');
        $hour_select_verif = $request->get('hour_select');
        $date_select_verif = $request->get('date_select');
        $token_select = $request->get('token');

        $userIsExist= DB::table('reservations')->where([

            ['email', '=', $email_select_verif],
            ['hour_select', '=', $hour_select_verif],
            ['date_select', '=', $date_select_verif]

        ])->get();

        if (count($userIsExist) > 0) {
            return response()->json(['error' => "Vous avez déjà réservé le ".$date_select_verif." à ".$hour_select_verif." !"], 400);

//            return response('/api//reservation')
//                ->with('error',"Vous avez déjà réservé le ".$date_select_verif." à ".$hour_select_verif." !")->withInput();
//
        }

        // end of is 2 reservations for this user

        //Verification is max 2 reservations

        $reserveTwoMax = DB::table('reservations')->where([
            ['hour_select', '=', $hour_select_verif],
            ['date_select', '=', $date_select_verif]

        ])->get();

        if (count($reserveTwoMax) >= 2) {
//            return response('/api//reservation')
//                ->with('error',"Plus de place disponible le ".$date_select_verif." à ".$hour_select_verif." !")->withInput();
//
            return response()->json(['error' => "Plus de place disponible le ".$date_select_verif." à ".$hour_select_verif." !"], 400);

        }

        // end of is max 2 reservations

        //Verification is min date

        $today = Carbon::now()->format('Y-m-d');
        $selectForVerif =  $request->get('date_select');

        if($selectForVerif < $today){
            return response()->json(['error' => "La date sélectionnée est passée.."], 400);
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

//        return response('/api/reservation')
//            ->with('status', 'Votre réservation a bien été enregistrée, un mail vous sera envoyé !');
        return response()->json(['status' => "Votre réservation a bien été enregistrée, un mail vous sera envoyé !", 'token'=> $token_select, 'hour' => $hour_select_verif, 'date'=> $date_select_verif  ], 201);


    }

    public function cancel(AnnulationFormRequest $request, $token)
    {

        $verifTokenIsExist = DB::table('reservations')->where('token', '=',  $token)->get('token');

//        dd(count($verifTokenIsExist));
        if (count($verifTokenIsExist) < 1){
//            return redirect('/reservation')
//                ->with('error',"Vous avez déjà annulé cette réservation ou la réservation n'existe pas !")->withInput();
//
            return response()->json(['status' => "Vous avez déjà annulé cette réservation ou la réservation n'existe pas !"], 400);

        }

        DB::table('reservations')->where('token', '=',  $token)->delete();

        $params = [
            'date_select' => DB::table('reservations')->where('token', '=',  $token)->get('date_select'),
            'hour_select' => DB::table('reservations')->where('token', '=',  $token)->get('hour_select'),
            'email' => DB::table('reservations')->where('token', '=',  $token)->get('email'),
            'subject' => "Nouvelle annulation"
        ];

        Mail::to(Config::get('reservation.email'))->send(new AnnulationMail($params));

        return response()->json(['status' => "Votre annulation a bien été réalisée !"], 202);

//        return redirect('reservation')
//            ->with('status', 'Votre annulation a bien été réalisée !');
    }


    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
