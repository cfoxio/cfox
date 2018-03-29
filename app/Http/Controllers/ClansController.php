<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Clan;

class ClansController extends Controller
{
    public function index(Clan $clan) {
        return "Hello World! Welcome to " . $clan->name;
    }

    public function create() {
        $user = Auth::User();
        return view('main.create_clan', compact('user'));
    }
}
