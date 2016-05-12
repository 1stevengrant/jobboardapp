<?php

namespace App\Http\Controllers;

use App\User;
use App\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;



class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('profileowner', ['only' => ['edit', 'update']]);

        parent::__construct();
    }

    /**
     * /username
     *
     * @param $id
     * @return Response
     */
    public function show($id)
    {
        $user = $this->getUserById($id);

        return view('profile.show', compact('user'));
    }

    /**
     * /profile/id/edit
     *
     * @param $id
     * @return int
     */
    public function edit($id)
    {
        $user = $this->getUserById($id);
        return view('profile.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = $this->getUserById($id);
        $input = $request->all();

        $user->profile->fill($input)->save();

        return \Redirect::route('profile.show',
            array($user->id))->with('flash_message', 'Your profile has been updated!');
    }

    /**
     * Fetch user
     * (You can extract this to repository method)
     *
     * @param $id
     * @return int
     */
    public function getUserById($id)
    {
        return User::with('profile')->whereId($id)->firstOrFail();
    }
}
