<?php

namespace App\Http\Controllers\Administration;

use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends AdministrationController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('administration.home.index');
    }

    public function edit(Request $request)
    {
        $userFound = $request->user();
        return view('administration.home.edit', compact('userFound'));
    }

    public function update(Requests\AccountUpdateRequest $request)
    {
        $user = $request->user();
        $user->update($request->all());

        return redirect()->back()->with("message", "Účet byl úspěšně aktualizován.");
    }
}
