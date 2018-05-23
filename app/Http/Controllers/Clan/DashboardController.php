<?php

namespace App\Http\Controllers\Clan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Clan;

class DashboardController extends Controller
{
    public function index(Clan $clan) {
        return view('clan.dashboard', compact('clan'));
    }
}
