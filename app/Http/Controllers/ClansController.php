<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clan;

class ClansController extends Controller
{
    public function index(Clan $clan) {
        return "Hello World! Welcome to " . $clan->name;
    }
}
