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

        return view('dashboard');
    }

    public function dashboard () {
        return view('dashboard',[
            'tickets' => Ticket::all(),
        ]);
    }

    public function tickets () {
        return view('tickets');
    }

    public function knowledgebase () {
        return view('knowledgebase');
    }

    public function acp () {
        return view('acp');
    }

} ?>