<?php

namespace App\Http\Controllers\Clan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Clan;
use App\Team;

class TeamController extends Controller
{
    public function index(Clan $clan) {
        $teams = $clan->teams;
        return view('clan.teams.index', compact('clan', 'teams'));
    }

    public function show(Clan $clan, Team $team) {
        return view('clan.teams.show', compact('clan', 'team'));
    }
}
