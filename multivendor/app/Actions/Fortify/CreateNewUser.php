<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'tel' => ['required', 'string', 'max:255', 'unique:users'],
            'gender' => ['required', 'string', 'max:255'],
            'addressl1' => ['required', 'string', 'max:255'],
            'addressl2' => ['required', 'string', 'max:255'],
            'addressl3' => ['string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:255'],
            'postalcode' => ['required', 'string', 'max:255'],
            'roleid' => ['required', 'string', 'max:255'],
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'lastname' => $input['lastname'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'tel' => $input['tel'],
            'gender' => $input['gender'],
            'addressl1' => $input['addressl1'],
            'addressl2' => $input['addressl2'],
            'addressl3' => $input['addressl3'],
            'city' => $input['city'],
            'country' => $input['country'],
            'postalcode' => $input['postalcode'],
            'roleid' => $input['roleid'],
        ]);
    }
}
