<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule as ValidationRule;

class ProfilesController extends Controller
{
    public function show(User $user){
        return view('profiles.show',[
            'user' => $user,
            'tweets' => $user->tweets()->withLikes()->paginate(3)
        ]);
    }

    public function edit(User $user)
    {
        // abort_if($user->isNot(current_user()),404);
        return view('profiles.edit', compact('user'));
    }

    public function update(User $user)
    {
        $attributes = request()->validate([
            'username' => [
            'string',
            'required',
            'max:255',
            'alpha_dash',
            ValidationRule::unique('users')->ignore($user)
        ],
            'name' => [
            'string',
            'required',
            'max:255'
        ],
            'email' => [
            'string',
            'required',
            'email',
            'max:255',
            ValidationRule::unique('users')->ignore($user)
        ],
            'password' => [
                'string',
                'required',
                'min:6',
                'max:255',
                'confirmed',
                'nullable'
        ],
            'avatar' =>[
                'file'
            ]
        ]);

        

        if(request('avatar'))
        {
            $attributes['avatar'] = request('avatar')->store('avatars');
        }

        $user->update($attributes);
        
        return redirect($user->path());
    }
}
