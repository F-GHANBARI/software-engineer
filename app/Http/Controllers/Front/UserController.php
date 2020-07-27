<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Setting;
use App\User;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;

class UserController extends Controller
{


    public function edit(User $user)
    {
        $setting=Setting::all();
        return view('profile', compact('user','setting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UserRequest $request
     * @param User $user
     * @return Validator
     */
    public function update(UserRequest $request, User $user)
    {
        $validate_data=$request->validated();
        $user->update([
            'name'=>$validate_data['name'],
            'phone'=>$validate_data['phone'],
            'address'=>$validate_data['address'],
        ]);
        return back();
    }
}
