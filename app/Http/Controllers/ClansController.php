<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Clan;

class ClansController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index(Clan $clan) {
        return "Hello World! Welcome to " . $clan->name;
    }

    public function create() {
        $user = Auth::User();
        return view('main.clans.create', compact('user'));
    }

    public function store() {
        // validate data
        $this->validate(request(), [
            'name' => 'required',
            'homepage' => 'regex:/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/',
            'subdomain' => 'required|unique:clans',
            'country' => 'required',
            'logo' => 'file|image'
        ]);

        // create new clan
        $clan = Clan::create(request()->all());

        if (request()->file('logo')) {
            // Save logo
            $logo = request()->file('logo')->store('logos/clans');
            $clan->logo = $logo;
            $clan->save();
        }

        // link new clan to user
        $clan->users()->save(Auth::user());

        // redirect to new clan
        return redirect(route('clan.dashboard', $clan->subdomain));
    }
}
