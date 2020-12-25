<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('profile');
    }

    public function update(Request $request)
    {
        $user = Auth::user();
        $user->fill($request->all());
        $user->save();

        Auth::setUser($user);

        return redirect()->back()->with('alert', ['type' => 'success', 'message' => 'Uw gegevens zijn succesvol gewijzigd.']);
    }
}
