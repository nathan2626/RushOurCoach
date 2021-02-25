<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class SingleCoachController extends Controller
{
    public function index()
    {
        $days = Config::get('configuration.days');
        $name = Config::get('configuration.name');
        $from = Config::get('configuration.from');
        $category = Config::get('configuration.category');
        $hours = Config::get('configuration.hours');
        $price = Config::get('configuration.price');
        $reservation_time = Config::get('configuration.reservation_time');
        $limit_reservation = Config::get('configuration.limit_reservation');

        return view('single_coach', compact('days', 'price', 'name', 'from', 'category', 'hours', 'reservation_time', 'limit_reservation'));
    }
}
