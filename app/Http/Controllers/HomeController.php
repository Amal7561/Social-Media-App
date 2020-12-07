<?php

namespace App\Http\Controllers;

use App\Models\Friend_Request;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $id = Auth::user()->id;
        $users = User::all()->whereNotIn('id', $id);
        $frndrqst = Friend_Request::all()->where('sender', $id);
        $data = [
            "users" => $users,
            "frndrqst" => $frndrqst
         
        ];

        return view('welcome', $data);
    }
}
