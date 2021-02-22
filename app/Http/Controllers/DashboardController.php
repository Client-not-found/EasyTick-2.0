<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Ticket;


class DashboardController extends Controller

{

    public function login ( Request $request) {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        return view('dashboard',[
            'tickets' => Ticket::all(),
            'openTickets' => Ticket::where("ticStatus", "Open")->get()
        ]);
    }

    public function dashboard () {
        return view('dashboard',[
            'tickets' => Ticket::all(),
            'openTickets' => Ticket::where("ticStatus", "Open")->get()
        ]);
    }

    public function tickets () {
        return view('tickets',[
            'tickets' => Ticket::all(),
        ]);
    }

    public function knowledgebase () {
        return view('knowledgebase');
    }

    public function acp () {
        return view('acp');
    }

} ?>