<?php

namespace App\Http\Controllers\Administration;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;

class UsersController extends AdministrationController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('name')->paginate($this->limit);
        $usersCount = User::count();

        return view("administration.users.index", compact('users', 'usersCount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $userFound = new User();

        return view("administration.users.create", compact('userFound'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(Requests\UserStoreRequest $request)
    {
        $user = User::create($request->all());
        $user->attachRole($request->role);
        // $data['password'] = bcrypt($data['password']);
        // User::create($data);
        return redirect("/administration/users")->with("message", "New User was created");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
  //      dd($u);
        $userFound = User::findOrFail($user->id);

        return view('administration.users.edit', compact('userFound'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Requests\UserUpdateRequest $request, User $user){

        //  User::findOrFail($user->id)->update($request->all());

          // dd($user);
          $userFound = User::findOrFail($user->id);
          $userFound->update($request->all());

          $userFound->detachRoles();
          $userFound->attachRole($request->role);

          return redirect("/administration/users")->with("message", "Uživatel byl aktualizován.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Requests\UserDestroyRequest $request, User $user)
    {

        $user = User::findOrFail($user->id);

        $deleteOption = $request->delete_option;
        $selectedUser = $request->selected_user;

        if($deleteOption == "delete"){
            // deleting user and posts (both)
            $user->posts()->withTrashed()->forceDelete();
        } elseif ($deleteOption == "attribute") {
            $user->posts()->update(['author_id' => $selectedUser]);
        }

        //$userFound = User::findOrFail($user->id);
        $user->delete();

        return redirect('/administration/users')->with("message", "Uživatel byl úspěšně smazán.");
    }

    public function confirm(Requests\UserDestroyRequest $request, User $user){
    //  $userFound = User::findOrFail($user->id);

      $users = User::where('id', '!=', $user->id)->pluck('name', 'id');

      return view("administration.users.confirm", compact('user', 'users'));
    }
}
