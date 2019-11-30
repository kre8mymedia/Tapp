<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class KioskController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('kiosk.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the store request
        $this->validate($request, [
            'card_number' => 'required',
        ]);
        
       $card_number = $request->card_number;

    }
}
