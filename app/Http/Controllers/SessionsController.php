<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{


  public function store() {

    $attributes = request()->validate([
      'email' => 'required|exists:users,email',
      'password' => 'required'
    ]);


    if (auth()->attempt($attributes)) {
      session()->regenerate(); // avoid session fixation hack
      return redirect('/')->with('success', 'You have successfully logged in !');
    }

    throw ValidationException::withMessages(['email' => 'We couldn\'t find you in the database']);

    // return back()->withInput()->withErrors(['email' => 'We couldn\'t find you in the database']);

  }


  public function create() {
    return view('sessions.create');
  }



  public function destroy() {

    auth()->logout();

    return redirect('/')->with('success', 'You are now logged out');

  }



}
