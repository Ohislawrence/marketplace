<?php

namespace App\Actions\Fortify;

use App\Models\User;
use App\Models\Userdetail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;
use Spatie\Permission\Models\Role;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'username' => 'required|unique:userdetails,username',
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();



        $user =  User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),

        ]);

        $userdetails = Userdetail::create([
            'username'=>  $input['username'],
            'website' => 'acarty.com',
            'location' => 'Around the world',
            'profileimage' => 'profileimage.png',
            'coverimage' => 'coverimage.png',
            'user_id' => $user->id,

        ]);



        $role = Role::where('name', 'general')->first();
        $user->assignRole($role);

        //dd($user);

        return $user;
    }
}
