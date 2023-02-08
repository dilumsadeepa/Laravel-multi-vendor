<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('First Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="firstname" :value="old('firstname')" required autofocus autocomplete="first name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="name" value="{{ __('Last Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="lastname" :value="old('lastname')" required autofocus autocomplete="last name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="name" value="{{ __('Mobile phone Number') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="tel" :value="old('tel')" required autofocus autocomplete="tel" />
            </div>

            <div class="mt-4">
                <x-jet-label for="name" value="{{ __('Gender') }}" />
                <select name="gender" id="" class="block mt-1 w-full" required autofocus>
                    <option value="">Select Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>
                {{-- <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" /> --}}
            </div>

            <div class="mt-4">
                <x-jet-label for="name" value="{{ __('Address Line 01') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="addressl1" :value="old('address')" required autofocus autocomplete="address line1" />
            </div>

            <div class="mt-4">
                <x-jet-label for="name" value="{{ __('Address Line 02') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="addressl2" :value="old('address')" required autofocus autocomplete="address line2" />
            </div>

            <div class="mt-4">
                <x-jet-label for="name" value="{{ __('Address Line 03') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="addressl3" :value="old('address')" autofocus autocomplete="address line3" />
            </div>

            <div class="mt-4">
                <x-jet-label for="name" value="{{ __('City') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="city" :value="old('city')" required autofocus autocomplete="city" />
            </div>

            <div class="mt-4">
                <x-jet-label for="name" value="{{ __('Country') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="country" :value="old('country')" required autofocus autocomplete="country" />
            </div>

            <div class="mt-4">
                <x-jet-label for="name" value="{{ __('Postal Code') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="postalcode" :value="old('postalcode')" required autofocus autocomplete="postalcode" />
            </div>

            <div class="mt-4">
                <x-jet-label for="name" value="{{ __('Role') }}" />
                <select name="roleid" id="" class="block mt-1 w-full" required autofocus>
                    <option value="">Select One</option>
                    <option value="2">Seller</option>
                    <option value="3">Customer</option>
                </select>
                {{-- <x-jet-input id="name" class="block mt-1 w-full" type="text" name="tel" :value="old('tel')" required autofocus autocomplete="name" /> --}}
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms" required />

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
